<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<h1>Home</h1>
<div>
        <?php
        $duration = "week";
        require(__DIR__ . "/../../partials/scores_table.php");
        ?>
</div>
<?php

// if (is_logged_in(true)) {
//     //comment this out if you don't want to see the session variables
//     error_log("Session data: " . var_export($_SESSION, true));
// }
?>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>