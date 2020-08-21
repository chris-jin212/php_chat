<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include('dbconnect.php');
// username and password sent from signup form 
$myusername = $_POST['txtusername'];
$mypassword = md5($_POST['txtpassword']);

$query_string = "SELECT * FROM register WHERE MatriID= '$myusername'  and ConfirmPassword='$mypassword'  OR  ConfirmEmail='$myusername' and ConfirmPassword='$mypassword' ";
$result = $con->query($query_string) or die($con->error);

$query_string = "update register set Logincount=(Logincount+1) WHERE MatriID= '$myusername' OR ConfirmEmail='$myusername'";
$update1 = $con->query($query_string) or die($con->error);

// Mysql_num_row is counting table row
$count = $result->num_rows;

// If result matched $myusername and $mypassword, table row must be 1 row
if ($count == 1) {
    $row = $result->fetch_array();    

    // Register $myusername, $mypassword and redirect to file "login_success.php"
    $_SESSION['myusername'] = $myusername;
    $_SESSION['username'] = $row['MatriID'];    
    
    // $_SESSION['myusername'] = $row['ConfirmEmail'];    
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
    
    header('location:authenticate.php?Action=Success');
    //header($_SERVER['HTTP_REFERER']);
} else {
    //echo "Wrong Username or Password";
    ob_start();
    header('location:login.php?Action=wrong');
    exit();
}
?>
