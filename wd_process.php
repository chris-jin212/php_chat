<?php

include('dbconnect.php');

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
// to remove blocked people   
if (isset($_POST["action"]) && $_POST["action"] == "remove_block") {
    $user_id = $_POST["blocked_id"];
    $logged_in_user = $_SESSION['username'];
    if ($logged_in_user != null) {
        if (empty($user_id) || $user_id < 0) {
            echo '0';
        } else {
            $query_string = "DELETE FROM wd_blocks WHERE blocker='" . $logged_in_user . "' AND blocked= '" . $user_id . "' ";
            $query = $con->query($query_string) or die($con->error);

            if ($query) {
                echo '1';
            } else {
                echo '0';
            }
        }
    } else {
        echo '0';
    }
}
// to   blocke people   
if (isset($_POST["action"]) && $_POST["action"] == "register_block") {
    $user_id = $_POST["blocked_id"];
    $logged_in_user = $_SESSION['username'];
    if ($logged_in_user != null) {
        if (empty($user_id) || $user_id < 0) {
            echo '0';
        } else {
            // $query_string = "INSERT INTO wd_blocks (id,blocker,blocked) VALUES('','" . $logged_in_user . "','" . $user_id . "') ";
            $query_string = "INSERT INTO wd_blocks (blocker,blocked) VALUES('" . $logged_in_user . "','" . $user_id . "') ";
            $query = $con->query($query_string) or die($con->error);

            if ($query) {
                echo '1';
            } else {
                echo '0';
            }
        }
    } else {
        echo '0';
    }
}
?>