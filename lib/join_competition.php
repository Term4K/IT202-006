<?php
function join_competition($comp_id, $user_id, $cost)
{
    refresh_credit_balance();
    $balance = get_credits();
    if ($comp_id > 0) {
        if ($balance >= $cost) {
            $db = getDB();
            $stmt = $db->prepare("SELECT title, join_fee from Comps where id = :id");
            try {
                $stmt->execute([":id" => $comp_id]);
                $r = $stmt->fetch(PDO::FETCH_ASSOC);
                if ($r) {
                    $cost = (int)se($r, "join_fee", 0, false);
                    $name = se($r, "title", "", false);
                    if ($balance >= $cost) {
                        if (transfer_credits((-1*$cost), "join_comp")) {
                            if (add_to_competition($comp_id, $user_id)) {
                                flash("Successfully joined", "success");
                            }
                        } else {
                            flash("Failed to pay for competition $cost", "danger");
                        }
                    } else {
                        flash("You can't afford to join this competition", "warning");
                    }
                }
            } catch (PDOException $e) {
                error_log("Comp lookup error " . var_export($e, true));
                flash("There was an error looking up the competition", "danger");
            }
        } else {
            flash("You can't afford to join this competition", "warning");
        }
    } else {
        flash("Invalid competition, please try again", "danger");
    }
}