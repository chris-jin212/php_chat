<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include("memprotect.php");
include("config.php");
include_once 'utils.php';
?>

<Link href="style.css" rel="stylesheet" type="text/css">
<?php
///////////////////// THIS IS THE MAIN FILE FOR THE MEMBERS ////////////////////////////////////
include 'dbconnect.php';
$strid = $_SESSION['username'];
$query_string = "SELECT *, MatriID,Name,Photo1,Profile,Left(profile,200) as profile1,date_format(Lastlogin,'%d-%M-%Y') as lastlogindate, date_format(MemshipExpiryDate,'%d-%m-%Y') as memexpdate FROM register where MatriID='$strid' ";
$member = $con->query($query_string) or die($con->error);
////////////////////////////////////////////////////////////////////////////////////////////////
//|||||||||||||||| START CREATE GLOBAL LOGIN SESSION FOR VARIOUS CONTROLS ||||||||||||||||||||||||\\

$query_string = "SELECT * FROM register where MatriID='$strid' ";
$memcontrol = $con->query($query_string) or die($con->error);

$row = $memcontrol->fetch_array();
$_SESSION['matriid'] = $row['MatriID'];
$_SESSION['name'] = $row['Name'];
$_SESSION['gender'] = $row['Gender'];
$_SESSION['status'] = $row['Status'];
$_SESSION['ppp'] = $row['PhotoprotectPassword'];
$_SESSION['password'] = $row['ConfirmPassword'];


//rating bar start
$bar = 0;
////////////////OPTIONAL Start/////////////////////
//1.	First Language
if (!empty($row['Language'])) {
    $bar += 2;
}
//2.	Monthly/yearly income
if (!empty($row['Annualincome'])) {
    $bar += 2;
}
//3.	Weight
if (!empty($row['Weight'])) {
    $bar += 2;
}
//4.	Complexion
if (!empty($row['Complexion'])) {
    $bar += 2;
}
//5.	Body type
if (!empty($row['Bodytype'])) {
    $bar += 2;
}
//6.	Smoke
if (!empty($row['Smoke'])) {
    $bar += 2;
}
//7.	Drink
if (!empty($row['Drink'])) {
    $bar += 2;
}
//8.	Family details Religiousness
if (!empty($row['Familyvalues'])) {
    $bar += 2;
}
//9.	Family details No of Brothers
if ($row['noofbrothers'] != "") {
    $bar += 2;
}
//10.	Family details No of Married Brothers
if (!empty($row['nbm'])) {
    $bar += 2;
}
//11.	Family details No of Sisters
if ($row['noofsisters'] != "") {
    $bar += 2;
}
//12.	Family details No of Married Sisters
if (!empty($row['nsm'])) {
    $bar += 2;
}
//13.	Family details Few words about Family
if (!empty($row['FamilyDetails'])) {
    $bar += 2;
}

//14.	Partner preference Looking For
if (!empty($row['Looking'])) {
    $bar += 2;
}
//15.	Partner preference Age
if (!empty($row['PE_FromAge']) && !empty($row['PE_ToAge'])) {
    $bar += 2;
}
//16.	Partner preference Expectations
if (!empty($row['PartnerExpectations'])) {
    $bar += 2;
}
//17.	Partner preference Country Living In
if (!empty($row['PE_Countrylivingin'])) {
    $bar += 2;
}
//18.	Partner preference Height
if (!empty($row['PE_Height'])) {
    $bar += 2;
}
//19.	Partner preference Complexion
if (!empty($row['PE_Complexion'])) {
    $bar += 2;
}
//20.	Partner preference Education
if (!empty($row['PE_Education'])) {
    $bar += 2;
}
//21.	Partner preference Residence/Legal Status
if (!empty($row['PE_Residentstatus'])) {
    $bar += 2;
}
////////////////OPTIONAL End/////////////////////
//About
if (strlen($row['Profile']) > 150) {
    $bar += 20;
}

//image
if ($row['Photo1'] != "nophoto.gif") {
    $bar += 15;
} elseif ($row['Photo2'] != "nophoto.gif") {
    $bar += 15;
} elseif ($row['Photo3'] != "nophoto.gif") {
    $bar += 15;
}
//Basic Info 
$bar += 23;

//rating bar end
//|||||||||||||||| END CREATE GLOBAL LOGIN SESSION FOR VARIOUS CONTROLS ||||||||||||||||||||||||\\
//||||||||||||||||||||||| IF PAID MEMBERSHIP EXPIRED THEN UPDATE MEMBERSHIP INTO ACTIVE ||||||||||||||| \\
$query_string = "SELECT MatriID, Memshipexpirydate, DATEDIFF( CURRENT_DATE, Memshipexpirydate ) AS expdays FROM register WHERE MatriID='$strid' ";
$checkmem = $con->query($query_string) or die($con->error);
while ($row = $checkmem->fetch_array()) {
    $Strexpdays = $row['expdays'];
    if ($Strexpdays > 1) {
        $query_string = "UPDATE register SET Status ='Active' WHERE MatriID='$strid' ";
        $updatemem = $con->query($query_string) or die($con->error);
    }
}

// if user is coming from a profile page, then redirect to that page.
if (isset($_SESSION['lastpage'])) {
    // echo "http:abc//".$_SERVER['SERVER_NAME'].$_SESSION['lastpage'];
    $redirect_url = "http://" . $_SERVER['SERVER_NAME'] . $_SESSION['lastpage'];
    unset($_SESSION['lastpage']);  // unsetting the session variable so that we don't redirect again.
    header("Location: " . $redirect_url);
    exit();
} /* else {
  echo "lastpage is not set";
  } */
if (isset($_SESSION['inbox']) && isset($_SESSION['msg'])) {

    $id = $_SESSION['inbox'];
    $msg = $_SESSION['msg'];
    unset($_SESSION['inbox']);
    unset($_SESSION['msg']);
    header("location:read_receivemsg.php?fullview=Y&Msgid=$msg&recipientID=$id");
}

if (isset($_SESSION['email-setting'])) {

    unset($_SESSION['email-setting']);
    header("location:email-setting.php");
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
        <style>
            table {
                table-layout: fixed;
                word-wrap: break-word;
            }
        </style>
    </head>
    <body>
        <?php
        include_once("analyticstracking.php");
        include("header.php"); // Header
        include("navigation.php"); // Navigation 
        ?>
        <!-- Navigation and google adsense ends here -->

        <!-- START LEFT PART -->
        <div class="container">
            <div class="row">
                <div class="box">
                    <div class="col-lg-4">

                        <div class="panel panel-success">
                            <div class="panel-heading"><strong>Account Summary</strong></div>
                            <div class="panel-body">

                                <!-- Table -->
                                <div class="table-responsive">
                                    <table class="table table-striped">

                                        <tr>
                                            <td colspan="2">
                                        <center><?php while ($row = $member->fetch_array()) { ?>

                                                <?php if ($row['Photo1'] != "nophoto.gif") { ?>
                                                    <a href="addphoto.php" title="Add your Main Photo">
                                                        <img src="<?php echo $row['Photo1'] ?>" width="150" height="155" /></a>

                                                <?php } elseif ($row['Photo2'] != "nophoto.gif") { ?>
                                                    <a href="addphoto.php" title="Add your Main Photo">
                                                        <img src="<?php echo $row['Photo2'] ?>" width="150" height="155" /></a>

                                                <?php } elseif ($row['Photo3'] != "nophoto.gif") { ?>

                                                    <a href="addphoto.php" title="Add your Main Photo">
                                                        <img src="<?php echo $row['Photo3'] ?>" width="150" height="155" /></a>

                                                <?php } else { ?>
                                                    <a href="addphoto.php" title="Add your Main Photo">
                                                        <img src="pics/Nophoto_big.gif" name="Mainphoto" width="150" height="155" border="0"  /></a>

                                                <?php } ?>
                                            </center>
                                            </td>

                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <a href="modifyprofile.php" title="Complete your profile"><div class="progress" style="margin-bottom: 5px;">
                                                            <div class="progress-bar progress-bar-<?php
                                                            if ($bar <= 40) {
                                                                echo "danger";
                                                            } elseif ($bar > 40 && $bar <= 50) {
                                                                echo "warning";
                                                            } elseif ($bar > 50 && $bar <= 80) {
                                                                echo "info";
                                                            } elseif ($bar > 80 && $bar <= 100) {
                                                                echo "success";
                                                            }
                                                            ?>" role="progressbar" aria-valuenow="<?= $bar ?>"
                                                                 aria-valuemin="0" aria-valuemax="100" style="width:<?= $bar ?>%">
                                                                <?= $bar ?>% Complete 
                                                            </div>
                                                        </div></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                                                    <!-- RishtaPakistan message ad -->
                                                    <ins class="adsbygoogle"
                                                         style="display:inline-block;width:320px;height:100px"
                                                         data-ad-client="ca-pub-3031792063178905"
                                                         data-ad-slot="1600274533"></ins>
                                                    <script>
                                                        (adsbygoogle = window.adsbygoogle || []).push({});
                                                    </script>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td colspan="2"><a href="modifyprofile.php"><i class="glyphicon glyphicon-edit"></i><b> Complete / Edit Profile </b></a></td></tr>
                                            <tr>
                                                <td>Name/Nickname:</td>
                                                <td><strong><?php echo $row['Name'] ?></strong></td>
                                            </tr>
                                            <tr>
                                                <td>Matri ID:</td>
                                                <td><strong><?php echo $row['MatriID'] ?></strong></td>
                                            </tr>
                                            <tr>
                                                <td>Email (Private):</td>
                                                <td><strong><?php echo $row['ConfirmEmail'] ?></strong></td>
                                            </tr>
                                            <tr>
                                                <td>Created: </td>
                                                <td><strong><?php echo get_formatted_date($row['Regdate']) ?></strong></td>
                                            </tr>
                                            <tr>
                                                <td>Last Login: </td>
                                                <td><strong><?php echo get_formatted_date($row['lastlogindate']) ?></strong></td>
                                            </tr>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="panel panel-success">
                                <div class="panel-heading"><strong>My Messages</strong></div>
                                <div class="panel-body">
                                    <center>
                                        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                                        <!-- RishtaPakistan message ad -->
                                        <ins class="adsbygoogle"
                                             style="display:inline-block;width:320px;height:100px"
                                             data-ad-client="ca-pub-3031792063178905"
                                             data-ad-slot="1600274533"></ins>
                                        <script>
                                                        (adsbygoogle = window.adsbygoogle || []).push({});
                                        </script>
                                    </center> 
                                    <?php include("mymessage_inc.php"); ?>
                                    <div style="margin-top:10px;">
                                        <?php include("myint_inc.php"); ?>
                                    </div>
                                    <div style="margin-top:5px;">
                                        <b>My Profile Link</b>
                                        <a href="/viewprofile.php?id=<?php echo $_SESSION['username']; ?>">rishtapakistan.com/viewprofile.php?id=<?php echo $_SESSION['username']; ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="profile-sidebar">
                                <div class="panel panel-success">
                                    <div class="panel-heading"><strong>My Account</strong></div>
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
                                    <div class="panel-body">


                                        <ul class="nav">
                                            <li class="active"><a href="modifyprofile.php"><i class="glyphicon glyphicon-edit"></i> Edit Profile </a></li>
                                            <li class="active"><a href="email-setting.php"><i class="glyphicon glyphicon-envelope"></i> Email Setting </a></li>
                                            <li><a href="addphoto.php"><i class="glyphicon glyphicon-picture"></i> Manage Photos </a></li>
                                            <li><a href="changepassword.php"><i class="glyphicon glyphicon-flag"></i> Change Password</a></li>
                                            <li><a href="blocked_people.php"><i class="glyphicon  glyphicon-ban-circle"></i> Blocked People </a></li>
                                            <li><a href="saved_profiles.php"><i class="glyphicon  glyphicon-heart"></i> Saved Profiles </a></li>
                                            <li><a href="delmyprofile_confirm.php"><i class="glyphicon glyphicon-trash"></i> Delete Profile </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } mysqli_close($con); ?>
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