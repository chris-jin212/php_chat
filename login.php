<?php
ob_start();
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include("config.php");
include_once './utils.php';
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
            <script src="../Bootstrap/html5shiv.js"></script>
            <script src="../Bootstrap/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>
        <?php include_once("analyticstracking.php") ?>
        <!-- Header -->
        <?php include("header.php"); ?>
        <!-- Navigation -->

        <?php include("navigation.php"); ?>
        <!-- Navigation and google adsense ends here -->
        <?php
        if (isset($_GET['inbox']) && isset($_GET['msg'])) {
            if (isset($_SESSION["myusername"])) {
                $rid = $_GET['inbox'];
                $msgid = $_GET['msg'];
                header("location:read_receivemsg.php?fullview=Y&Msgid=$msgid&recipientID=$rid");
            } else {
                $_SESSION['inbox'] = $_GET['inbox'];
                $_SESSION['msg'] = $_GET['msg'];
            }
        }

        if (isset($_GET['email-setting'])) {
            if (isset($_SESSION["myusername"])) {
                header("location:email-setting.php");
            } else {
                $_SESSION['email-setting'] = 1;
            }
        }
        ?>

        <form action="memlogin_submit.php" method="post" name="form1" id="form1">
            <div class="container">
                <div class="row">
                    <div class="box">
                        <div style="margin-bottom:25px;" class="col-lg-6">
                            <?php
                            $StrAction = get_var('Action');

                            if ($StrAction == "wrong") {
                                echo "<table width=97% border=0 cellpadding=0 cellspacing=0 >";
                                echo "<tr>";
                                echo "<td class=Alert><strong>Please Correct the Following errors.</strong> </td>";
                                echo "</tr>";
                                echo "<tr>";
                                echo "<td><ul class=Alert>";
                                echo "<li>Incorrect e-mail or password.</li>";
                                echo "<li>Make sure your Caps Lock is off and you are not adding any spaces.</li>";
                                echo "<li>To login use your complete e-mail address e.g. abc@gmail.com. </li>";
                                echo "<li>Please do not leave both fields blank.</li>";
                                echo "</ul></td>";
                                echo "</tr>";
                                echo "</table>";
                            }
                            ?>
                            <center><h4><span style="color:#b61d22">Login Here</span</h4></center>
                            <div style="margin-bottom: 5px">
                                Email:
                                <input name="txtusername" class="form-control" type="text" Class="i" maxlength="50" placeholder = "Email Address" />
                            </div>
                            <div>
                                Password:
                                <input name="txtpassword" class="form-control" type="password" Class="forminput" id="txtpassword" maxlength="50" placeholder = "Password" />
                            </div>
                            <div class="row" align="right">
                                <a href="forgotpassword.php">Forgot Your Password?</a> <a href="forgotpassword.aspx"></a>
                            </div>
                            <div class="row" align="center">
                                <button name="Submit" type="submit" class="btn btn-success btn-lg">Login</button>

                            </div>
                        </div>


                        <div class="col-lg-6">
                            <center><h4><span style="color:#b61d22">Not a Member Yet?</span><br />
                                    It's Free! only at<br />
                                    <font style="color:#bf2329;">Rishta</font><font style="color:#f57d20;">Pakistan</font>.com </h4></center>
                            <div align="center"><img src="pics/free-register.png" class="img-responsive" border="0" /></div>
                            <div class="row" align="center" style="padding-top:20px">
                                <a href="register.php" class="btn btn-danger btn-lg">Register</a>
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

        </form>
    </body>
</html>