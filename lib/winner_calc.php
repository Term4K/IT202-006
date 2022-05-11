<?php 
//pn253 05/11/2022 function to calculate the winners of finished competitions
function calc_winners()
{
    $db = getDB();
    error_log("Starting winner calc");
    flash("Starting", "warning");
    $calced_comps = [];
    //pn253 05/11/2022 query to select the first ten comps that expired and have not been calculated.
    //                 If the comps do not have the minimum participants do not return them also get winning percantages
    $stmt = $db->prepare("SELECT Comps.id, title, first_place_per, second_place_per, third_place_per, current_reward 
    FROM Comps
    where expires <= CURRENT_TIMESTAMP() AND did_calc = 0 AND current_participants >= min_participants LIMIT 10");
    try {
        $stmt->execute();
        $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($r) {
            $rc = $stmt->rowCount();
            error_log("Validating $rc comps");
            //pn253 05/11/2022 iterate through each record returned from the query
            foreach ($r as $row) {
                //pn253 05/11/2022 calculate the rewards for the three places based on results from query
                $fp = floatval(se($row, "first_place_per", 0, false) / 100);
                $sp = floatval(se($row, "second_place_per", 0, false) / 100);
                $tp = floatval(se($row, "third_place_per", 0, false) / 100);
                $reward = (int)se($row, "current_reward", 0, false);
                $title = se($row, "title", "-", false);
                $fpr = ceil($reward * $fp);
                $spr = ceil($reward * $sp);
                $tpr = ceil($reward * $tp);
                $comp_id = se($row, "id", -1, false);

                try {
                    //pn253 05/11/2022 function to get the top scores for the comp in question and the user_ids assosiated with them
                    $r = get_top_scores_for_comp($comp_id, 3);
                    if ($r) {
                        $atleastOne = false;
                        //pn253 05/11/2022 iterate through the top three scores and users
                        foreach ($r as $index => $row) {
                            $score = se($row, "final_score", 0, false);
                            $user_id = se($row, "user_id", -1, false);
                            flash($user_id, "warning");
                            //pn253 05/11/2022 add the credits to each user based on the win percantages set.
                            if ($index == 0) {
                                error_log("Attempting transfer of $fpr credits to user $user_id");
                                if (transfer_credits($fpr, "Won $fpr credits for 1st in Comp $title", $user_id, 0)) {
                                    $atleastOne = true;
                                    error_log("Transfered $fpr credits to user $user_id");
                                }
                                error_log("User $user_id First place in $title with score of $score");
                            } else if ($index == 1) {
                                error_log("Attempting transfer of $spr credits to user $user_id");
                                if (transfer_credits($spr, "Won $spr credits for 2nd in Comp $title", $user_id, 0)) {
                                    $atleastOne = true;
                                    error_log("Transfered $spr credits to user $user_id");
                                }
                                error_log("User $user_id Second place in $title with score of $score");
                            } else if ($index == 2) {
                                error_log("Attempting transfer of $tpr credits to user $user_id");
                                if (transfer_credits($tpr, "Won $tpr credits for 3rd in Comp $title", $user_id, 0)) {
                                    $atleastOne = true;
                                    error_log("Transfered $tpr credits to user $user_id");
                                }
                                error_log("User $user_id Third place in $title with score of $score");
                            }
                        }
                        //pn253 05/11/2022 if there was atleast one succesful  transfer of credits add the comp to list of calced comps
                        if ($atleastOne) {
                            array_push($calced_comps, $comp_id);
                        }
                    } else {
                        error_log("No eligible scores");
                    }
                } catch (PDOException $e) {
                    error_log("Getting winners error: " . var_export($e, true));
                }
            }
        } else {
            error_log("No competitions ready");
        }
    } catch (PDOException $e) {
        error_log("Getting Expired Comps error: " . var_export($e, true));
    }
    //pn253 05/11/2022 taked comps and close them by setting paid_out and did_calc to 1
    if (count($calced_comps) > 0) {
        $query = "UPDATE Comps set did_calc = 1, paid_out = 1 WHERE id in ";
        $query .= "(" . str_repeat("?,", count($calced_comps) - 1) . "?)";
        error_log("Close query: $query");
        $stmt = $db->prepare($query);
        try {
            $stmt->execute($calced_comps);
            $updated = $stmt->rowCount();
            error_log("Marked $updated comps complete and calced");
        } catch (PDOException $e) {
            error_log("Closing valid comps error: " . var_export($e, true));
        }
    } else {
        error_log("No competitions to calc");
    }
    //pn253 05/11/2022 pull all comps that did not meet participant requirments and are expired to close them by setting did_calc to 1
    $stmt = $db->prepare("UPDATE Comps set did_calc = 1 WHERE expires <= CURRENT_TIMESTAMP() AND current_participants < min_participants AND did_calc = 0");
    try {
        $stmt->execute();
        $rows = $stmt->rowCount();
        error_log("Closed $rows invalid competitions");
    } catch (PDOException $e) {
        error_log("Closing invalid comps error: " . var_export($e, true));
    }
    flash("Done calculating winners", "success");
    error_log("Done calc winners");
}