<?php
include("config.php");
include_once './utils.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $strname = $_POST['name'];

    $strsitename = $info['Webname'];

    $to = $info['ToEmail'];

    $from = $_POST['email'];

    $subject = "Feedback from $strsitename";

    $strmessage = $_POST['comments'];

    $message = "

<table width=573 border=0 align=center cellpadding=2 cellspacing=2>

  <tr>

    <td width=562 valign=top class=style3>Dear Sir/madam </td>

  </tr>



  <tr>

    <td valign=top class=style3><p><br>

      $strmessage</p>

      <p>Warm regards<br>

        $strname<br>

      </p></td>

  </tr>

</table>

		";

    // To send HTML mail, the Content-type header must be set

    $headers = 'MIME-Version: 1.0' . "\r\n";

    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $headers .= 'From:' . $from . "\r\n"
            . 'Reply-To: $to' . "\r\n";

    $success = mail($to, $subject, $message, $headers);

    print "<script>";

    print "self.location='logoutconfirm.php?action=success';";

    print "</script>";
}
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




        <script type="text/JavaScript">

            <!--

            function MM_findObj(n, d) { //v4.01

            var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {

            d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}

            if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];

            for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);

            if(!x && d.getElementById) x=d.getElementById(n); return x;

            }



            function MM_validateForm() { //v4.0

            var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;

            for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);

            if (val) { nm=val.name; if ((val=val.value)!="") {

            if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');

            if (p<1 || p==(val.length-1)) errors+=' '+nm+' must contain valid e-mail.\n';

            } else if (test!='R') { num = parseFloat(val);

            if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';

            if (test.indexOf('inRange') != -1) { p=test.indexOf(':');

            min=test.substring(8,p); max=test.substring(p+1);

            if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';

            } } } else if (test.charAt(0) == 'R') errors += ''+nm+' is required.\n'; }

            } if (errors) alert('Please Correct the Following:\n'+errors);

            document.MM_returnValue = (errors == '');

            }

            //-->

        </script>

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

                        <div class="alert alert-success" role="alert">
                            <?php
                            if (get_var('flag') == 'delete') {
                                ?>
                                <span class="glyphicon glyphicon glyphicon-ok" aria-hidden="true"></span> Your Profile has been successfully deleted!
                                <?php
                            } else {
                                ?>
                                <span class="glyphicon glyphicon glyphicon-ok" aria-hidden="true"></span> You have been successfully logged out
                                <?php
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="box">
                    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                        <div class="panel panel-info" >
                            <div class="panel-heading">
                                <div class="panel-title">Login</div>
                                <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="forgotpassword.php">Forgot password?</a></div>
                            </div>

                            <div style="padding-top:30px" class="panel-body" >

                                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>


                                <form action="memlogin_submit.php" method="post" name="form1" id="form1" class="form-horizontal" role="form">


                                    <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input name="txtusername" class="form-control" type="text" Class="i" maxlength="50" placeholder = "Email Address"  />
                                    </div>

                                    <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input name="txtpassword" class="form-control" type="password" Class="forminput" id="txtpassword" maxlength="50" placeholder = "Password" />
                                    </div>



                                    <div style="margin-top:10px" class="form-group">
                                        <!-- Button -->

                                        <div class="col-sm-12">
                                            <button name="Submit" type="submit" class="btn btn-lg btn-primary btn-success">Login</button>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="col-md-12 control">
                                            <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                                Don't have an account!
                                                <a href="register.php">Register Here</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <!-- feedback part response is removed from here -->

        <!-- /.container -->

        <footer>
            <?php include("footer.php"); ?>

        </footer>

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Script to Activate the Carousel -->


    </body>

</html>
