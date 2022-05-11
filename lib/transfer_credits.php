<?php

function transfer_credits($credits, $reason, $user_id = -1, $credit_exchange = 1){
    if($credits != 0){
        $query = "INSERT INTO CreditsHistory (user_id, credit_diff, reason) VALUES (:uid, :cred, :r)";
        $db = getDB();
        $stmt = $db->prepare($query);
        try{
            if($user_id < 0){
                $uid = get_user_id();
            } else {
                $uid = $user_id;
            }
            $stmt->execute([":uid" => $uid, ":cred" => $credits, ":r" => $reason]);
            refresh_credit_balance($uid);
            $cookies = $credits * 100;
            if($credits > 0 && $credit_exchange > 0){
                $stmt = $db->prepare("UPDATE Scores SET score = score - :s WHERE user_id = :uid");
                $stmt->execute([":s" => $cookies, ":uid" => get_user_id()]);
            }
            return true;
        } catch (PDOException $e) {
            error_log(var_export($e->errorInfo, true));
            flash("There was an error transfering gems", "danger");
        }
    }
    if($credits == 0){
        return true;
    }
    return false;
}

?>