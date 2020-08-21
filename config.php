<?php

if (session_id() == '') {
    session_start();
}

// MMR Update. Added this after installing Pear Mail module.
include realpath(dirname(__FILE__)) . '/php_include_path.php';

include('dbconnect.php');
$query_string = "SELECT * FROM siteconfig where id='1'";
$configdata = $con->query($query_string) or die($con->error);

$info = $configdata->fetch_array();

if (!ini_get('date.timezone')) {
    date_default_timezone_set('GMT');
}

//cookie (keep logged in) 
if (!isset($_SESSION['myusername']) && isset($_COOKIE['currentuser'])) {
    $MatriID = base64_decode($_COOKIE['currentuser']);

    $query = "SELECT * FROM register WHERE MatriID ='" . $MatriID . "'";
    $result = $con->query($query);
    $row = $result->fetch_assoc();

    //adding values in session
    $_SESSION['myusername'] = $row['ConfirmEmail'];
    $_SESSION['username'] = $row['MatriID'];
    $_SESSION['status'] = $row['Status'];
    $_SESSION['matriid'] = $row['MatriID'];
    $_SESSION['name'] = $row['Name'];
    $_SESSION['gender'] = $row['Gender'];
    $_SESSION['status'] = $row['Status'];
    $_SESSION['ppp'] = $row['PhotoprotectPassword'];
    $_SESSION['password'] = $row['ConfirmPassword'];
    $_SESSION['city'] = $row['City'];
    $_SESSION['country'] = $row['Country'];
    $_SESSION['dob'] = $row['DOB']; //date("Y-m-d", $row['DOB']);
}
?>
