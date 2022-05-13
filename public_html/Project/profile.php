<?php
require_once(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);

$user_id = (int)se($_GET, "id", get_user_id(), false);
$isMe = $user_id == get_user_id();
$isEdit = isset($_GET["edit"]);

$db = getDB();
?>
<?php
if (isset($_POST["save"]) && $isMe && $isEdit) {
    $email = se($_POST, "email", null, false);
    $username = se($_POST, "username", null, false);
    $vis = isset($_POST["vis"]) ? 1 : 0;
    $hasError = false;
    //sanitize
    $email = sanitize_email($email);
    //validate
    if (!is_valid_email($email)) {
        flash("Invalid email address", "danger");
        $hasError = true;
    }
    if (!is_valid_username($username)) {
        flash("Username must only contain 3-16 characters a-z, 0-9, _, or -", "danger");
        $hasError = true;
    }
    if (!$hasError) {
        $params = [":email" => $email, ":username" => $username, ":id" => get_user_id(), ":vis" => $vis];
        $stmt = $db->prepare("UPDATE Users set email = :email, username = :username, visibility = :vis where id = :id");
        try {
            $stmt->execute($params);
            flash("Profile saved", "success");
        } catch (Exception $e) {
            users_check_duplicate($e->errorInfo);
        }
        //select fresh data from table
        $stmt = $db->prepare("SELECT id, email, username from Users where id = :id LIMIT 1");
        try {
            $stmt->execute([":id" => get_user_id()]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($user) {
                //$_SESSION["user"] = $user;
                $_SESSION["user"]["email"] = $user["email"];
                $_SESSION["user"]["username"] = $user["username"];
            } else {
                flash("User doesn't exist", "danger");
            }
        } catch (Exception $e) {
            flash("An unexpected error occurred, please try again", "danger");
            //echo "<pre>" . var_export($e->errorInfo, true) . "</pre>";
        }
    }


    //check/update password
    $current_password = se($_POST, "currentPassword", null, false);
    $new_password = se($_POST, "newPassword", null, false);
    $confirm_password = se($_POST, "confirmPassword", null, false);
    if (!empty($current_password) && !empty($new_password) && !empty($confirm_password)) {
        $hasError = false;
        if (!is_valid_password($password)) {
            flash("Password too short", "danger");
            $hasError = true;
        }
        if (!$hasError) {
            if ($new_password === $confirm_password) {
                //TODO validate current
                $stmt = $db->prepare("SELECT password from Users where id = :id");
                try {
                    $stmt->execute([":id" => get_user_id()]);
                    $result = $stmt->fetch(PDO::FETCH_ASSOC);
                    if (isset($result["password"])) {
                        if (password_verify($current_password, $result["password"])) {
                            $query = "UPDATE Users set password = :password where id = :id";
                            $stmt = $db->prepare($query);
                            $stmt->execute([
                                ":id" => get_user_id(),
                                ":password" => password_hash($new_password, PASSWORD_BCRYPT)
                            ]);

                            flash("Password reset", "success");
                        } else {
                            flash("Current password is invalid", "warning");
                        }
                    }
                } catch (Exception $e) {
                    echo "<pre>" . var_export($e->errorInfo, true) . "</pre>";
                }
            } else {
                flash("New passwords don't match", "warning");
            }
        }
    }
}

$stmt = $db->prepare("SELECT id, email, username,visibility, created from Users where id = :id LIMIT 1");
$isVisible = false;
try {
    $stmt->execute([":id" => $user_id]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($user) {
        if ($isMe) {
            $_SESSION["user"]["email"] = $user["email"];
            $_SESSION["user"]["username"] = $user["username"];
        }
        if (se($user, "visibility", 0, false) > 0) {

            $isVisible = true;
        }
        $email = se($user, "email", "", false);
        $username = se($user, "username", "", false);
        $joined = se($user, "created", "", false);
    } else {
        flash("User doesn't exist", "danger");
    }
} catch (Exception $e) {
    flash("An unexpected error occurred, please try again", "danger");
    //echo "<pre>" . var_export($e->errorInfo, true) . "</pre>";
}
?>

<?php
$email = get_user_email();
if($isMe){
    $username = get_username();
    refresh_credit_balance(get_user_id());
}
?>
<div class="container-fluid">
    <h1>Profile</h1>

    <?php if ($isMe && $isEdit) : ?>
        <?php if ($isMe) : ?>
            <h4><a href="<?php echo get_url("profile.php"); ?>">View Public Profile</a></h4>
        <?php endif; ?>
        <h3>Credits: <?php echo get_credits();?></h3>
        <div>
            Best Score: <?php echo get_best_score(get_user_id()); ?>
        </div>
        <div>
            <?php
            $duration = "latest";
            require(__DIR__ . "/../../partials/scores_table.php");
            ?>
        </div>
        <form method="POST" onsubmit="return validate(this);">
            <div class="mb-2">
                <label class="form-label" for="email">Email</label>
                <input class="form-control" type="email" name="email" id="email" value="<?php se($email); ?>" />
            </div>
            <div class="mb-2">
                <label class="form-label" for="username">Username</label>
                <input class="form-control" type="text" name="username" id="username" value="<?php se($username); ?>" />
            </div>
            <div class="mb-3">
                <div class="form-check form-switch">
                    <input <?php if ($isVisible) {
                                echo "checked";
                            } ?> class="form-check-input" type="checkbox" role="switch" id="vis" name="vis">
                    <label class="form-check-label" for="vis">Toggle Visibility</label>
                </div>
            </div>
            <!-- DO NOT PRELOAD PASSWORD -->
            <div class="mb-2">Password Reset</div>
            <div class="mb-2">
                <label class="form-label" for="cp">Current Password</label>
                <input class="form-control" type="password" name="currentPassword" id="cp" />
            </div>
            <div class="mb-2">
                <label class="form-label" for="np">New Password</label>
                <input class="form-control" type="password" name="newPassword" id="np" />
            </div>
            <div class="mb-2">
                <label class="form-label" for="conp">Confirm Password</label>
                <input class="form-control" type="password" name="confirmPassword" id="conp" />
            </div>
            <input type="submit" class="mt-3 btn btn-primary" value="Update Profile" name="save" />
        </form>
    <?php else : ?>
        <?php if ($isMe) : ?>
            <a href="?edit">Edit</a>
        <?php endif; ?>
        <?php if ($isVisible || $isMe) : ?>

            <h2>This is <?php se($username); ?></h2>
            <div>
               <h4> Best Score: <?php echo get_best_score($user_id); ?></h4>
            </div>
            <div>
                <h4>Joined: <?php se($joined); ?> </h4>
            </div>
            <div>
                <?php
                $duration = "latest";
                //Note: $user_id will be defined prior to this require() so should use whatever is set at the top
                require(__DIR__ . "/../../partials/scores_table.php");
                ?>
            </div>

<?php 
$per_page = 10;
paginate("SELECT count(1) as total FROM Comps LEFT JOIN (SELECT * FROM UserComps WHERE user_id = :uid)as uc ON uc.comp_id = Comps.id WHERE comp_id is not null", [":uid" => $user_id]);

$stmt = $db->prepare("SELECT Comps.id, title, min_participants, current_participants, current_reward, expires, created_by, join_fee, IF(comp_id is null, 0, 1) as joined, IF(expires < current_timestamp(), 'Expired', expires) as expireList,  CONCAT(first_place_per,'% - ', second_place_per, '% - ', third_place_per, '%') as place FROM Comps
LEFT JOIN (SELECT * FROM UserComps WHERE user_id = :uid) as uc ON uc.comp_id = Comps.id WHERE comp_id is not null ORDER BY expires asc LIMIT :offset, :count");
$results = [];
$offset = ($page - 1) * $per_page;
try {
    $stmt->execute([":uid" => $user_id, ":offset" => $offset, ":count" => $per_page]);
    $r = $stmt->fetchAll();
    if ($r) {
        $results = $r;
    }
} catch (PDOException $e) {
    flash("There was a problem fetching competitions, please try again later", "danger");
    error_log("List competitions error: " . var_export($e, true));
}
?>

<div class="container-fluid">
    <h1>Competitions History</h1>
    <table class="table">
        <thead>
            <th>Title</th>
            <th>Participants</th>
            <th>Reward</th>
            <th>Expires</th>
            <th>Creator</th>
            <th>Actions</th>
        </thead>
        <tbody>
            <?php if (count($results) > 0) : ?>
                <?php foreach ($results as $row) : ?>
                    <tr>
                        <td><?php se($row, "title"); ?></td>
                        <td><?php se($row, "current_participants"); ?>/<?php se($row, "min_participants"); ?></td>
                        <td><?php se($row, "current_reward"); ?><br>Payout: <?php se($row, "place", "-"); ?></td>
                        <td><?php se($row, "expireList", "-"); ?></td>
                        <?php if($row["created_by"] == $user_id) : ?>
                            <td>Yes</td>
                        <?php else : ?>
                            <td>No</td>
                        <?php endif; ?>
                        <td>
                            <a class="btn btn-secondary" href="view_competition.php?id=<?php se($row, 'id'); ?>">View</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="100%">No Competition History</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
<?php include(__DIR__ . "/../../partials/pagination.php"); ?>
</div>
        <?php else : ?>
            Profile is private
            <?php
            flash("Profile is private", "warning");
            redirect("home.php");
            ?>
        <?php endif; ?>
</div>
<?php endif; ?>


<!-- <div class="container-fluid">
    <h1>Profile</h1>
    <h3>Credits: <?php echo get_credits();?></h3>
    <div>
        Best Score: <?php echo get_best_score(get_user_id()); ?>
    </div>
    <div>
        <?php
        $duration = "latest";
        require(__DIR__ . "/../../partials/scores_table.php");
        ?>
    </div>
    <form method="POST" onsubmit="return validate(this);">
        <div class="mb-2">
            <label class="form-label" for="email">Email</label>
            <input class="form-control" type="email" name="email" id="email" value="<?php se($email); ?>" />
        </div>
        <div class="mb-2">
            <label class="form-label" for="username">Username</label>
            <input class="form-control" type="text" name="username" id="username" value="<?php se($username); ?>" />
        </div>

        <div class="mb-2">Password Reset</div>
        <div class="mb-2">
            <label class="form-label" for="cp">Current Password</label>
            <input class="form-control" type="password" name="currentPassword" id="cp" />
        </div>
        <div class="mb-2">
            <label class="form-label" for="np">New Password</label>
            <input class="form-control" type="password" name="newPassword" id="np" />
        </div>
        <div class="mb-2">
            <label class="form-label" for="conp">Confirm Password</label>
            <input class="form-control" type="password" name="confirmPassword" id="conp" />
        </div>
        <input type="submit" class="mt-3 btn btn-primary" value="Update Profile" name="save" />
    </form>
</div> -->


<script>
    function validate(form) {
        let pw = form.newPassword.value;
        let con = form.confirmPassword.value;
        let isValid = true;
        //TODO add other client side validation....

        //example of using flash via javascript
        //find the flash container, create a new element, appendChild
        if (pw !== con) {
            flash("Password and Confrim password must match", "warning");
            isValid = false;
        }
        return isValid;
    }
</script>
<?php
require_once(__DIR__ . "/../../partials/flash.php");
?>