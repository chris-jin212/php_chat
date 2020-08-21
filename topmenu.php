<?php
// if(!session_is_registered(myusername))
if (!isset($_SESSION["myusername"])) {
    ?>
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
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li><a href="searchoption.php">Search</a>
                    </li>
                    <li><a href="latest_profiles.php">Latest Profiles</a>
                    </li>
                    <li><a href="successstory.php">Success Stories</a>
                    </li>
                    <li><a href="about.php">About Us</a>
                    </li>
                    <li><a href="contactus.php">Contact Us</a>
                    </li>
                    <li><a href="help.php">Help</a>
                    </li>
                    <li><a href="donate.php">Donate</a>
                    </li>
                    <li><a href="login.php"><button type="submit" class="btn btn-primary">Login</button></a>
                    </li>
                    <li><a href="register.php"><button type="submit" class="btn btn-primary">Register</button></a>
                    </li>
                </ul>
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
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li><a href="searchoption.php">Search</a>
                    </li>
                    <li><a href="latest_profiles.php">Latest Profiles</a>
                    </li>
                    <li><a href="successstory.php">Success Stories</a>
                    </li>
                    <li><a href="about.php">About Us</a>
                    </li>
                    <li><a href="contactus.php">Contact Us</a>
                    </li>
                    <li><a href="help.php">Help</a>
                    </li>
                    <li><a href="donate.php">Donate</a>
                    </li>
                    <li><a href="mymatri.php" ><button type="submit" class="btn btn-primary"><?php echo " " . $_SESSION['name']; ?><?php echo " " . $_SESSION['username']; ?></button></a>
                    </li>
                    <li><a href="logout.php"><button type="submit" class="btn btn-primary">Logout</button></a>
                    </li>


                </ul>
            </div>

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    </map>

    <?php
}
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">

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

    </div>
</div>