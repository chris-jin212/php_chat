<?php

function Wd_IsBlocked($con, $user_id) {
    $logged_in_user = $_SESSION['username'];
    if ($logged_in_user != null) {
        if (empty($user_id) || $user_id < 0) {
            return false;
        } else {
            $query_string = "SELECT * FROM  wd_blocks WHERE blocker='" . $logged_in_user . "' AND blocked= '" . $user_id . "' OR blocker='" . $user_id . "' AND blocked= '" . $logged_in_user . "' ";
            $query = $con->query($query_string) or die($con->error);
            $check_blocked = $query->num_rows;
            if ($check_blocked > 0) {
                return true;
            } else {
                return false;
            }
        }
    } else {
        return false;
    }
}

function Wd_IsIBlocked($con, $user_id) {
    $logged_in_user = $_SESSION['username'];
    if ($logged_in_user != null) {
        if (empty($user_id) || $user_id < 0) {
            return false;
        } else {
            $query_string = "SELECT * FROM  wd_blocks WHERE blocker='" . $logged_in_user . "' AND blocked= '" . $user_id . "' ";
            $query = $con->query($query_string) or die($con->error);
            $check_blocked = $query->num_rows;
            if ($check_blocked > 0) {
                return true;
            } else {
                return false;
            }
        }
    } else {
        return false;
    }
}

function Wd_IsTheyBlocked($con, $user_id) {
    $logged_in_user = $_SESSION['username'];
    if ($logged_in_user != null) {
        if (empty($user_id) || $user_id < 0) {
            return false;
        } else {
            $query_string = "SELECT * FROM  wd_blocks WHERE blocker='" . $user_id . "' AND blocked= '" . $logged_in_user . "' ";
            $query = $con->query($query_string) or die($con->error);
            $check_blocked = $query->num_rows;
            if ($check_blocked > 0) {
                return true;
            } else {
                return false;
            }
        }
    } else {
        return false;
    }
}

function Wd_HaveAccess($con) {
    $logged_in_user = $_SESSION['username'];
    if ($logged_in_user != null) {
        $query_string = "SELECT Pplan FROM paiddetails WHERE Pmatriid='" . $logged_in_user . "' ";
        $plan = $con->query($query_string) or die($con->error);

        $plan_row = $plan->fetch_array();

        $user_plan = strtoupper($plan_row['Pplan']);

        $query_string = "SELECT * FROM membershipplan WHERE planname='$user_plan'";
        $select1 = $con->query($query_string) or die($con->error);
        $plan_block_opt_row = $select1->fetch_array();

        $can_block = $plan_block_opt_row['block_option'];
        if ($can_block > 0) {
            return true;
        } else {
            return false;
        }
    } else {

        return false;
    }
}

?>