<?php
ob_start();
include("memprotect.php");
include("config.php");

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include('dbconnect.php');

$query_string = "update register set LastLogin=Thislogin WHERE MatriID='" . $_SESSION['username'] . "'";
$update1 = $con->query($query_string) or die($con->error);

$query_string = "UPDATE register SET Thislogin = NOW() WHERE MatriID='" . $_SESSION['username'] . "'";
$Insert1 = $con->query($query_string) or die($con->error);


$query_string = "SELECT * FROM register where MatriID='" . $_SESSION['username'] . "'";
$authent = $con->query($query_string) or die($con->error);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="Description" content="<?php echo $info['Description']; ?>">
        <meta name="keywords" content="<?php echo $info['Keywords']; ?>">


        <title><?php echo $info['Title']; ?></title>

        <!-- Bootstrap Core CSS -->
        <link href="./css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="./css/business-casual.css" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>
        <?php include_once("analyticstracking.php") ?>

        <!-- Header -->
        <?php include("header.php"); ?>

        <!-- Navigation -->
        <?php include("navigation.php"); ?>

        <!-- Navigation and google adsense ends here -->

        <div class="container">
            <div class="row">
                <div class="box">
                    <div class="col-lg-12">
                        <div class="panel panel-info">
                            <div class="panel-heading"><strong>Profile Loading</strong></div>
                            <div class="panel-body">
                                <?php
                                while ($row = $authent->fetch_array()) {
                                    $Strname = $row['Name'];
                                    $Strstatus = $row['Status'];
                                    $mid = $row['MatriID'];
                                    $_SESSION['status'] = $row['Status'];

                                    if ($Strstatus == "InActive") {
                                        ?>
                                        <table class=table >
                                            <tr>
                                                <td class=bodysg><div align=center><strong>Your profile is <span class=Alert><?= $Strstatus ?> </span></strong> </div></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Dear <?= $Strname ?><br>
                                                    <br>

                                                    Your profile is under review. You can login and send messages when admin has approved your profile.<br>
                                                    <br>
                                                    All profiles are manually reviewed and activated within 48 hours. You will get an email confirmation once your profile is approved <br>
                                                </td>
                                            </tr>
                                        </table>
                                        <?php
                                        if (session_status() == PHP_SESSION_NONE) {
                                            session_start();
                                        }

                                        session_unset();
                                        session_destroy();
                                    } elseif ($Strstatus == "unverified") {
                                        ?>
                                        <table class=table >
                                            <tr>
                                                <td class=bodysg><div align=center><strong>Profile Status is <span class=Alert><?= $Strstatus ?> </span></strong> </div></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Dear <?= $Strname ?><br>
                                                    <br>
                                                    You need to verify your email address. A confirmation email Was sent to you! if you have not received the email please check your spam mail box or
                                                    <a href="resend_verification.php?MatriID=<?= $mid ?>">click here </a> to resend it.
                                                    <br>
                                                    <br>
                                                </td>
                                            </tr>
                                        </table>
                                        <?php
                                        if (session_status() == PHP_SESSION_NONE) {
                                            session_start();
                                        }
                                        session_unset();
                                        session_destroy();
                                    } else {
                                        $id = base64_encode($mid);
                                        setcookie('currentuser', $id, time() + 31536000);
                                        header("location:mymatri.php");
                                    }
                                }
                                ?>
                                <!--                                </td>

                                                                </tr>

                                                                </table> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- /.container -->

        <footer>
            <?php include("footer.php"); ?>
        </footer>

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

    </body>
</html>
