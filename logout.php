<?php

ob_start();
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
session_unset();
session_destroy();

if (isset($_COOKIE['currentuser'])) {
    unset($_COOKIE['currentuser']);
    setcookie('currentuser', null, time() + 1);
}

if (isset($_COOKIE['myusername'])) {
    unset($_COOKIE['myusername']);
    setcookie('myusername', null, time() + 1);
}

if (isset($_GET['flag']) && $_GET['flag'] == 'delete') {
    header("location:logoutconfirm.php?flag=delete");
} else {
    header("location:logoutconfirm.php");
}
?>