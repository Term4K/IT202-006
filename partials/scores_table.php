<?php
//requires functions.php
//requires a duration to be set
if (!isset($duration)) {
    $duration = "day"; //choosing to default to day
}
if(!isset($comp_id)){
    $comp_id = 4;
}

if (in_array($duration, ["day", "week", "month", "lifetime"])) {
    $results = get_top_10($duration);
} else if ($duration === "latest") {
    if (!isset($user_id)) {
        $user_id = get_user_id();
    }
    $results = get_latest_scores($user_id);
} else if ($duration === "competiton"){
    //pn253 05/12/22 this takes gets the top scores when duration is equal to "competition"
    $results = get_top_scores_for_comp($comp_id, 10);
}
switch ($duration) {
    case "day":
        $title = "Top Scores Today";
        break;
    case "week":
        $title = "Top Scores This Week";
        break;
    case "month":
        $title = "Top Scores This Month";
        break;
    case "lifetime":
        $title = "All Time Top Scores";
        break;
    case "latest":
        $title = "Latest Scores";
        break;
    case "competiton":
        $title = "Competition Scores";
        break;
    default:
        $title = "Invalid Scoreboard";
        break;
}
//pn253 05/12/22 This generates the table through iteration of results from functions. 
?>
<div class="card bg-dark">
    <div class="card-body">
        <div class="card-title">
            <div class="fw-bold fs-3">
                <?php se($title); ?>
            </div>
        </div>
        <div class="card-text">
            <table class="table table-dark">
                <?php if (count($results) == 0) : ?>
                    <p>No results to show</p>
                <?php else : ?>
                    <?php foreach ($results as $index => $record) : ?>
                        <?php if ($index == 0) : ?>
                            <thead>
                                <?php foreach ($record as $column => $value) : ?>
                                    <?php if ($column != "user_id" && $column != "final_score") : ?>
                                        <th><?php $column = ucfirst($column); if($column != "Modified") se($column); else se("Date") ?></th>
                                    <?php else : ?>
                                    <?php if ($column == "final_score") : ?>
                                        <th><?php $column = "Score"; if($column != "Modified") se($column); else se("Date") ?></th> 
                                    <?php endif; ?>

                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </thead>
                        <?php endif; ?>
                        <tr>
                            <?php foreach ($record as $column => $value) : ?>
                                <?php if ($column == "username") : ?>
                                    <?php 
                                        $user_id = se($record, "user_id", 0, false);
                                        $username = se($record, "username", "", false);
                                    ?>
                                    <td><a href="<?php echo get_url("profile.php?id=");se($user_id); ?>"><?php se($username); ?></a></td>
                                <?php elseif ($column != "user_id") : ?>
                                    <td><?php se($value, null, "N/A"); ?></td>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </tr>
                    <?php endforeach; ?>
            </table>
        <?php endif; ?>
        </table>
        </div>
    </div>
</div>