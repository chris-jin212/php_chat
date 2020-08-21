<?php

    ob_start();
    $username = "rishtay_user";
	$pwd = "Something!Right1";
	$server = "localhost";
	$dbname = "rishtay_rishtapk_rishtapa_dbase1";

    $con = mysqli_connect($server, $username, $pwd, $dbname);

    if (!$con) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    } /* else {
      echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
      echo "Host information: " . mysqli_get_host_info($con) . PHP_EOL;
      } */
// $con = mysql_connect('localhost', $username, $pwd) or die('Error Connectiong to mysql:' . mysql_error());
// mysql_select_db($dbname, $con) or die("Select Error: " . mysql_error());

    error_reporting(E_ALL ^ E_DEPRECATED);
    
    // MMR Update. Comment the following to hide errors
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
?>