<?php
//if(!session_is_registered(myusername))
if (!isset($_SESSION["myusername"])) {
    ?>

    <script language="javascript" src="js/bootstrap.js" type="text/javascript"></script>

    <!-- MEMBER NOT LOGGED IN -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.php">RishtaPakistan.com</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <div class="text-center">

                    <ul style="margin-bottom: 5px; margin-top: 5px" class="nav navbar-nav">
                        <li><a href="index.php">Home</a>
                        </li>
                        <li><a href="searchoption.php">Search</a>
                        </li>
                        <li><a href="latest_profiles.php">Latest Profiles</a>
                        </li>
                        <li><a href="successstory.php">Success Stories</a>
                        </li>
                        <li><a href="donate.php">Donate</a>
                        </li>
                        <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Register</a></li>
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>

                    </ul>

                </div>
            </div>

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <?php
} else {
    ?>

    <!-- MEMBER LOGGED IN -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.php">RishtaPakistan.com</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <div class="text-center">
                    <ul style="margin-bottom: 5px; margin-top: 5px" class="nav navbar-nav">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li><a href="searchoption.php">Search</a>
                        </li>
                        <li><a href="latest_profiles.php">Latest Profiles</a>
                        </li>
                        <li><a href="successstory.php">Success Stories</a>
                        </li>
                        <li><a href="donate.php">Donate</a>
                        </li>
                        <li><a href="mymatri.php" >
                                <button type="submit" class="btn btn-info" style="margin-left:10px">
                                    <?php echo " " . (isset($_SESSION['name']) ? $_SESSION['name'] : ""); ?>
                                    <?php echo " " . (isset($_SESSION['username']) ? $_SESSION['username'] : ""); ?></button></a></li>
                        <li>                    <a href="logout.php"><button type="submit" class="btn btn-info" style="margin-left:10px">Logout</button></a></li>


                </div>

                </ul>
            </div>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
    </nav>



    <?php
}
if (isset($_GET['msg']) && !empty($_GET['msg'])) {
    ?>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="alert alert-danger alert-dismissible fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <span style="color:black;"><strong>Sorry!</strong> you are not allowed to view this user. He/She has blocked you</span>
            </div>
        </div>
    </div>
    <br>
    <br>
<?php } ?>

<div class="text-center">
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- Responsive RishtaPakistan -->
    <ins class="adsbygoogle"
         style="display:block"
         data-ad-client="ca-pub-3031792063178905"
         data-ad-slot="6812311336"
         data-ad-format="auto"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
</div>
<!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent
<script type="text/javascript">
    window.cookieconsent_options = {"message":"This website uses cookies to ensure you get the best experience on our website","dismiss":"Got it!","learnMore":"More info","link":null,"theme":"light-top"};
</script>

<script type="text/javascript" src="//s3.amazonaws.com/cc.silktide.com/cookieconsent.latest.min.js"></script>
<!-- End Cookie Consent plugin -->
