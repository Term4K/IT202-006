<!DOCTYPE html>
<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<html>
<head>
    <?php
    require_once(__DIR__ . "/../../partials/flash.php");
    ?>
</head>

<div class="container-fluid">
    <h1 style="display: inline;">Convert Your Cookies to Credits</h1>
    <h4 style="margin-bottom: 30px;">100 Cookies can be converted to 1 Credit</h4>
    <h5>Current Cookies: <?php echo get_best_score(get_user_id());?></h5>
    
</div>