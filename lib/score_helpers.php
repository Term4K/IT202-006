<?php

/** Gets the top 10 scores for valid durations (day, week, month, lifetime) */
/* pn253 04/17/22 using the get_top_10 function you can pick an interval and retrive top 10 scores from db*/
function get_top_10($duration = "day")
{
    $d = "day";
    //be very careful passing in a variable directly to SQL, I ensure it's a specific value from the in_array() above
    //Note: This is residual from using Option 1 and INTERVAL to generate the date offsets
    //but it's still good to keep here
    if (in_array($duration, ["day", "week", "month", "lifetime"])) {
        //variable is safe
        $d = $duration;
    }
    $db = getDB();
    //edited out user_id, and prest, to remove that from the tables on homepage
    $query = "SELECT username, score, user_id, Scores.modified from Scores join Users on Scores.user_id = Users.id";
    if ($d === "day") {

        $query .= " WHERE Scores.modified >= addtime(CURDATE(), '00:00:00') AND Scores.modified <= addtime(CURDATE(), '23:59:59')";
    } else if ($d === "week") {
        //https://stackoverflow.com/a/42540446
        $query .= " WHERE 
        Scores.modified >= addtime(date_add(curdate(), interval  -WEEKDAY(curdate()) day), '00:00:00')
        AND
        Scores.modified <= addtime(date_add(date_add(curdate(), interval  -WEEKDAY(curdate())-1 day), interval 7 day), '23:59:59')";
    } else if ($d === "month") {
        //https://www.mysqltutorial.org/mysql-last_day/
        $query .= " WHERE 
        Scores.modified >=  addtime(dATE_SUB(curdate(),INTERVAL DAYOFMONTH(curdate())-1 DAY), '00:00:00')
        AND
        Scores.modified <= addtime(LAST_DAY(CURDATE()), '23:59:59')";
    }
    /* pn253 04/17/22 using the get_top_10 function you can pick an interval and retrive top 10 scores from db*/
    //remember to prefix any ambiguous columns (Users and Scores both have created, modified, and id columns)
    $query .= " ORDER BY score Desc, Scores.modified desc LIMIT 10"; //newest of the same score is ranked higher
    error_log("get top 10 query: $query");
    $stmt = $db->prepare($query);
    $results = [];
    try {
        $stmt->execute();
        $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($r) {
            $results = $r;
        }
    } catch (PDOException $e) {
        error_log("Error fetching scores for $d: " . var_export($e->errorInfo, true));
        flash("Error fetching top 10 list", "danger");
    }
    return $results;
}

function get_best_score($user_id)
{
    $query = "SELECT score, prest from Scores WHERE user_id = :id ORDER BY score desc LIMIT 1";
    $db = getDB();
    $stmt = $db->prepare($query);
    try {
        $stmt->execute([":id" => $user_id]);
        $r = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($r) {
            return (int)se($r, "score", 0, false);
        }
    } catch (PDOException $e) {
        error_log("Error fetching best score for user $user_id: " . var_export($e->errorInfo, true));
        flash("Error looking up best score", "danger");
    }
    return 0;
}

function get_latest_scores($user_id, $limit = 10)
{
    //I'm capping my limit to 1-50
    if ($limit < 1 || $limit > 50) {
        $limit = 10;
    }
    $query = "SELECT score, prest, modified, user_id from Scores where user_id = :id ORDER BY modified desc LIMIT :limit";
    $db = getDB();
    //IMPORTANT: this is required for the execute to set the limit variables properly
    //otherwise it'll convert the values to a string and the query will fail since LIMIT expects only numerical values and doesn't cast
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    //END IMPORTANT

    $stmt = $db->prepare($query);
    try {
        $stmt->execute([":id" => $user_id, ":limit" => $limit]);
        $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($r) {
            return $r;
        }
    } catch (PDOException $e) {
        error_log("Error getting latest $limit scores for user $user_id: " . var_export($e->errorInfo, true));
        flash("Error getting latest scores", "danger");
    }
    return [];
}

function get_top_scores_for_comp($comp_id, $limit = 3){
    //pn253 05/12/22 gets the top scores based on the limit for the competion specified. 
    $query = "SELECT UserComps.user_id, username, (score - start_score) as final_score from UserComps
     JOIN Scores on Scores.user_id = UserComps.user_id LEFT JOIN Users on Users.id = UserComps.user_id
     where comp_id = :id ORDER BY final_score desc LIMIT :limit";
    $db = getDB();

    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    $stmt = $db->prepare($query);
    try {
        $stmt->execute([":id" => $comp_id, ":limit" => $limit]);
        $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($r) {
            return $r;
        }
    } catch (PDOException $e) {
        error_log("Error getting latest $limit scores for user $comp_id: " . var_export($e->errorInfo, true));
        flash("Error getting top scores for competition", "danger");
    }
    return [];
}