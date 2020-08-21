<!--<head> -->

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

<!-- </head> -->
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
//if(!session_is_registered(myusername))
if (!isset($_SESSION["myusername"])) {
    ?>
    <div class="container">
        <div class="row">
            <div class="brand "><a href="index.php">RishtaPakistan.com</a></div>
            <div class="address-bar">The soulmate finder</div>

        </div>
    </div>
    <?php
} else {
    ?>
    <div class="container">
        <div class="row">
            <div class="brand "><a href="index.php">RishtaPakistan.com</a></div>
            <div class="address-bar">The soulmate finder</div>
        </div>
    </div>

    <?php
}
?>
