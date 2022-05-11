<?php

function transfer_credits($credits, $reason){
    if($credits != 0){
        $query = "INSERT INTO CreditsHistory (user_id, credit_diff, reason) VALUES (:uid, :cred, :r)";
        $db = getDB();
        $stmt = $db->prepare($query);
        try{
            $stmt->execute([":uid" => get_user_id(), ":cred" => $credits, ":r" => $reason]);
            refresh_credit_balance();
            $cookies = $credits * 100;
            if($credits > 0){
                $stmt = $db->prepare("UPDATE Scores SET score = score - :s WHERE user_id = :uid");
                $stmt->execute([":s" => $cookies, ":uid" => get_user_id()]);
            }
            return true;
        } catch (PDOException $e) {
            error_log(var_export($e->errorInfo, true));
            flash("There was an error transfering gems", "danger");
        }
    }
    return false;
}

?>