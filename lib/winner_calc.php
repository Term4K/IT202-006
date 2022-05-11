<?php 
function calc_winners()
{
    $db = getDB();
    error_log("Starting winner calc");
    flash("Starting", "warning");
    $calced_comps = [];
    $stmt = $db->prepare("SELECT Comps.id, title, first_place_per, second_place_per, third_place_per, current_reward 
    FROM Comps
    where expires <= CURRENT_TIMESTAMP() AND did_calc = 0 AND current_participants >= min_participants LIMIT 10");
    try {
        $stmt->execute();
        $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // foreach (get_top_scores_for_comp(6,3) as $index => $row) {
        //     $score = se($row, "final_score", 0, false);
        //     $user_id = se($row, "user_id", -1, false);
        //     error_log("User $user_id with score of $score");
        // }
        if ($r) {
            $rc = $stmt->rowCount();
            error_log("Validating $rc comps");
            foreach ($r as $row) {
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
                    $r = get_top_scores_for_comp($comp_id, 3);
                    if ($r) {
                        $atleastOne = false;
                        foreach ($r as $index => $row) {
                            $score = se($row, "final_score", 0, false);
                            $user_id = se($row, "user_id", -1, false);
                            flash($user_id, "warning");
                            if ($index == 0) {
                                if (transfer_credits($fpr, "Won $fpr credits for first place in Competition $title")) {
                                    $atleastOne = true;
                                }
                                error_log("User $user_id First place in $title with score of $score");
                            } else if ($index == 1) {
                                if (transfer_credits($spr, "Won $spr credits for second place in Competition $title")) {
                                    $atleastOne = true;
                                }
                                error_log("User $user_id Second place in $title with score of $score");
                            } else if ($index == 2) {
                                if (transfer_credits($tpr, "Won $tpr credits for third place in Competition $title")) {
                                    $atleastOne = true;
                                }
                                error_log("User $user_id Third place in $title with score of $score");
                            }
                        }
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
    //closing calced comps
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
    //close invalid comps
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