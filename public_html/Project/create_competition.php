<?php
require_once(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
$payout_options = [];
$db = getDB();
//save
if (isset($_POST["title"]) && !empty($_POST["title"])) {
    $first = (int)se($_POST, "first_place_per", 0, false);
    $second = (int)se($_POST, "second_place_per", 0, false);
    $third = (int)se($_POST, "third_place_per", 0, false);
    $valid = true;
    if($first + $second + $third != 100){
        flash("Payout percantages do not equal 100%", "warning");
        $valid = false;
    }

    $cost = (int)se($_POST, "starting_reward", 0, false);
    $cost++;
    $cost += (int)se($_POST, "join_fee", 0, false);
    $title = se($_POST, "title", "N/A", false);
    $balance = get_credits();
    if ($balance >= $cost && $valid) {
        $db->beginTransaction();
        if (transfer_credits((-1*$cost), "create_comp")) {
            $_POST["created_by"] = get_user_id();
            $comp_id = save_data("Comps", $_POST);
            if ($comp_id > 0) {
                if (add_to_competition($comp_id, get_user_id())) {
                    flash("Successfully created competition", "success");
                    $db->commit();
                } else {
                    $db->rollback();
                    refresh_credit_balance();
                }
            } else {
                $db->rollback();
                refresh_credit_balance();
            }
        } else {
            flash("There was a problem deducting points", "warning");
            $db->rollback();
            refresh_credit_balance();
        }
    } else {
        if($valid){
            flash("You can't afford this right now", "warning");
            refresh_credit_balance();
        }
    }
}
?>

<div class="container-fluid">
    <h1>Create Competition</h1>
    <form onsubmit="return validate(this)" method="POST">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input id="title" name="title" class="form-control" />
        </div>
        <div class="mb-3">
            <label for="reward" class="form-label">Starting Reward</label>
            <input id="reward" type="number" name="starting_reward" class="form-control" onchange="updateCost()" placeholder=">= 1" min="1" />
        </div>
        <div class="mb-3">
            <label for="ms" class="form-label">Min. Score</label>
            <input id="ms" name="min_score" type="number" class="form-control" placeholder=">= 1" min="1" />
        </div>
        <div class="mb-3">
            <label for="mp" class="form-label">Min. Participants</label>
            <input id="mp" name="min_participants" type="number" class="form-control" placeholder=">= 3" min="3" />
        </div>
        <div class="mb-3">
            <label for="jc" class="form-label">Join Cost</label>
            <input id="jc" name="join_fee" type="number" class="form-control" onchange="updateCost()" placeholder=">= 0" min="0" />
        </div>
        <div class="mb-3">
            <label for="duration" class="form-label">Duration (in Days)</label>
            <input id="duration" name="duration" type="number" class="form-control" placeholder=">= 1" min="1" />
        </div>
        <label for="po" class="form-label">Payout Option</label>
        <div class="mb-3">
            <label for="first_per" class="form-label">First Place</label>
            <input id="first_per" name="first_place_per" type="number" class="form-control" placeholder="ex. 60" max="100" min="0" />
            <label for="second_per" class="form-label">Second Place</label>
            <input id="second_per" name="second_place_per" type="number" class="form-control" placeholder="ex. 30" max="100" min="0" />
            <label for="third_per" class="form-label">Third Place</label>
            <input id="third_per" name="third_place_per" type="number" class="form-control" placeholder="ex. 10" max="100" min="0" />
        </div>
        <div class="mb-3">
            <input type="submit" value="Create Competition (Cost: 2)" class="btn btn-primary" />
        </div>
    </form>
    <script>
        function validate(form) {
        let credits = form.credits.value;
        let currCredits = "<?php echo $cookies; ?>"
        let isValid = true;
        if(credits > 0){
            if(credits % 100 != 0){
                isValid = false;
                flash("Must enter a multiple of 100 credits to be converted", "warning");
            } else {
                if(credits > currCredits){
                    isValid = false;
                    flash("You do not have enough credits", "warning");
                }
            }
        } else {
            isValid = false;
            flash("Please enter greater than 0 amount of credits to convert", "warning");
        }
        return isValid;
    }
        function updateCost() {
            let starting = parseInt(document.getElementById("reward").value || 0) + 1;
            let join = parseInt(document.getElementById("jc").value || 0);
            if (join < 0) {
                join = 1;
            }
            let cost = starting + join;
            document.querySelector("[type=submit]").value = `Create Competition (Cost: ${cost})`;
        }
    </script>
</div>

<?php 
require_once(__DIR__ . "/../../partials/flash.php");
?>