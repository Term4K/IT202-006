<!DOCTYPE html>
<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<html>
<?php 
if (isset($_POST["credits"])) {
    $credits = se($_POST, "credits", "", false);
    $credits = $credits/100;
    if(transfer_credits($credits, "conversion")){
        flash("Converted Credits Succesfully", "success");
    }

}
?>

<?php
    $cookies = get_best_score(get_user_id());
?>

<div class="container-fluid">
    <h1 style="display: inline;">Convert Your Cookies to Credits</h1>
    <h4 style="margin-bottom: 30px;">100 Cookies can be converted to 1 Credit</h4>
    <h5>Current Cookies: <?php echo $cookies;?></h5>
    
    <form onsubmit="return validate(this)" method="POST">
        <div class="mb-2">
            <label class="form-label" for="credits">Credits</label>
            <input class="form-control" type="number" step="100" id="credits" name="credits" required />
        </div>
        <input type="submit" class="mt-3 btn btn-primary" value="Convert" />
    </form>
</div>

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
</script>

<?php 
require_once(__DIR__ . "/../../partials/flash.php");
?>