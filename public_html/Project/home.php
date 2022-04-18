<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<h1>Fantastic Cookie Clicker Homepage</h1>
<h5>A simple cookie clicker which has a optional shop items to increase score</h5>
<div style="margin-top:30px; margin-bottom: 25px;">
        <?php
        $duration = "week";
        require(__DIR__ . "/../../partials/scores_table.php");
        ?>
</div>
<div style="margin-bottom: 25px;">
        <?php
        $duration = "month";
        require(__DIR__ . "/../../partials/scores_table.php");
        ?>
</div>
<div style="margin-bottom: 45px;">
        <?php
        $duration = "lifetime";
        require(__DIR__ . "/../../partials/scores_table.php");
        ?>
</div>
<div class="col text-center">
    <button type="button" class="btn btn-outline-dark btn-lg" onclick="window.location.href='/Project/game.php'">Go To Game</button>
</div>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>