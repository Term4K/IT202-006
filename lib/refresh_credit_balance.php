<?php

//pn253 05/09/22 gets the credits from creditHistory and also sets the cookie value to be the correct amount of credits. 
function refresh_credit_balance($user_id){
    if(is_logged_in()){
        $query = "UPDATE Users set credits = (SELECT IFNULL(SUM(credit_diff), 0) from CreditsHistory WHERE user_id = :uid) where id = :uid";
        $db = getDB();
        $stmt = $db->prepare($query);
        try{
            $stmt->execute([":uid" => $user_id]);
            $stmt = $db->prepare("SELECT id, email, username, password, credits from Users where id = :uid");
            $r = $stmt->execute([":uid" => $user_id]);
            if($r){
                $user = $stmt->fetch(PDO::FETCH_ASSOC);
                $_SESSION["user"] = $user;
            }
        } catch (PDOException $e) {
            error_log(var_export($e->errorInfo, true));
            flash("Error refreshing credit balance", "danger");
        }
    }
}

?>