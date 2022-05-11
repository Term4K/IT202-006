<?php

function update_participants($comp_id)
{
    $db = getDB();
    //pn253 5/10/22 logic to update the score plus the 50% of join fee
    $stmt = $db->prepare("UPDATE Comps set current_participants = (SELECT IFNULL(COUNT(1),0) FROM UserComps WHERE comp_id = :cid), 
    current_reward = IF(join_fee > 0, current_reward + CEILING(join_fee * 0.5), current_reward) WHERE id = :cid");
    try {
        $stmt->execute([":cid" => $comp_id]);
        return true;
    } catch (PDOException $e) {
        error_log("Update competition participant error: " . var_export($e, true));
    }
    return false;
}

function add_to_competition($comp_id, $user_id)
{
    $db = getDB();
    $score = get_best_score($user_id);
    $stmt = $db->prepare("INSERT INTO UserComps (user_id, comp_id, start_score) VALUES (:uid, :cid, :ss)");
    try {
        $stmt->execute([":uid" => $user_id, ":cid" => $comp_id, ":ss" => $score]);
        update_participants($comp_id);
        return true;
    } catch (PDOException $e) {
        error_log("Join Competition error: " . var_export($e, true));
    }
    return false;
}