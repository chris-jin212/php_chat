<?php

include("config.php");
include 'dbconnect.php';
include_once 'SendMail.php';

$query_string = "SELECT MatriID,ConfirmEmail,notification_email FROM register WHERE notification_email!=1";
$result = $con->query($query_string) or die($con->error);

$count = $result->num_rows;

if ($count > 0) {
    while ($row = $result->fetch_assoc()) {
        $MatriID = $row['MatriID'];
        $ConfirmEmail = $row['ConfirmEmail'];
        $time_passed = time() - $row['notification_email'];

        //48 hour in second=172800 
        if ($time_passed > 172800) {

            $query_string = "UPDATE register SET notification_email=1 WHERE MatriID='" . $MatriID . "'";
            $update = $con->query($query_string) or die($con->error);

            $subject = "Profile completion remider for " . $info['WebFriendlyname'];
            $recipient_email = $row['ConfirmEmail'];
            $recipient_name = $row['Name'];
            sendProfileCompletionReminderMessage($info, $subject, $recipient_email, $recipient_name);
        }
    }
}
?>