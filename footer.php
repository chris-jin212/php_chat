<!--<!DOCTYPE html> -->

<?php include("config.php"); ?>

<!-- <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"> -->

<!-- Bootstrap Core CSS -->
<link href="./css/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="./css/business-casual.css" rel="stylesheet">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

<!-- CSS Font Icons -->
<link rel="stylesheet" href="icons/open-iconic/font/css/open-iconic-bootstrap.css">
<link rel="stylesheet" href="icons/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="icons/ionicons/css/ionicons.css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- </head> -->

<footer class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-sm-5 col-md-6">
                <div class="row">
                    <div class="footer-about col-sm-10 col-md-8">
                        <div class="footer-logo">
                            <a href="#home" class='text-danger'>RishtaPakistan.com</a>
                        </div>
                        <p class="about-us-footer small">We are not associated with any business, or marriage bureau. You can register your profile... <a href="about.php" class="font-italic bb-dotted">read more</a></p>
                        <p class="copy-right font12 small">&#169; Copyright 2020 RishtaPakistan.com</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-sm-7 col-md-6">
                <div class="row gap-20">
                    <div class="col-xss-6 col-xs-4 col-sm-4 mt-30-xs">
                        <h4 class="footer-title text-danger">Company</h4>
                        <a href="about.php">About</a><br/>
                        <a href="contactus.php">Contact</a><br/>
                        <a href="advertise_withus.php">Advertise</a><br/>
                        <a href="donate.php">Donate</a>
                    </div>

                    <div class="col-xss-6 col-xs-4 col-sm-4 mt-30-xs">
                        <h4 class="footer-title text-danger">Discover</h4>
                        <a href="terms_con.php">Terms of Use</a><br/>
                        <a href="searchoption.php">Search Profiles</a><br/>
                        <a href="successstory.php">Success Stories</a><br/>
                        <a href="help.php">Help</a>
                    </div>

                    <div class="col-xss-12 col-xs-4 col-sm-4 mt-30-xs">
                        <h4 class="footer-title text-danger">Socials</h4>
                        <a href="https://www.facebook.com/rishtapakistanwebsite/"><i class="fa fa-facebook-official mr-5"></i> Facebook</a><br/>
                        <a href="https://twitter.com/rishtapakistan"><i class="fa fa-twitter mr-5"></i> Twitter</a><br/>
                        <a href="https://www.youtube.com/channel/UCeMiBYn_NOVRKWYsrT_f72w"><i class="fa fa-youtube mr-5"></i> Youtube</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php
//if($con){ mysql_close();}
if ($con) {
    mysqli_close($con);
}
?>

