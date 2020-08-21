<?php
include("memprotect.php");
include("config.php");
include('dbconnect.php');

$logged_in_user = $_SESSION['username'];

$query_string = "select * from wd_blocks where blocker='" . $logged_in_user . "' ";
$check_block = $con->query($query_string) or die($con->error);
$total_blocked = $check_block->num_rows;
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="Description" content="<?php echo $info['Description']; ?>">
        <meta name="keywords" content="<?php echo $info['Keywords']; ?>">

        <title>Latest members - RishtaPakistan.com - Free Pakistani Proposals</title>

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
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({
                google_ad_client: "ca-pub-3031792063178905",
                enable_page_level_ads: true
            });
        </script>

    </head>

    <body>
        <?php
        include_once("analyticstracking.php");
        include("header.php"); // Header
        include("navigation.php"); // Navigation 
        ?>
        <!-- Navigation and google adsense ends here -->

        <div class="container">
            <div class="row">
                <div class="box">
                    <div class="col-lg-12">
                        <hr>
                        <h1 class="intro-text text-center"><strong>Blocked People By Me </strong>
                        </h1>
                        <hr>
                        <div class="dropdown">

                        </div>
                        <?php
                        if ($total_blocked > 0) {
                            ?>
                            <div class="table-responsive">
                                <div id="wd_msg"></div>
                                <table class="table table-bordered ">
                                    <thead>
                                        <tr>
                                            <th>Matri Id</th>
                                            <th>Gender</th>
                                            <th>Age</th>
                                            <th>Country</th>
                                            <th>City</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while ($row1 = $check_block->fetch_array()) {
                                            $blocked_users = $row1['blocked'];

                                            $query_string = "SELECT * FROM register WHERE MatriID='$blocked_users'";
                                            $result = $con->query($query_string) or die($con->error);

                                            $ad = 0;
                                            while ($row = $result->fetch_array()) {
                                                if ($ad == 50) {
                                                    ?>
                                                    <tr>
                                                        <td colspan="5">
                                                <center>
                                                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                                                    <!-- Responsive RishtaPakistan -->
                                                    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-3031792063178905" data-ad-slot="6812311336" data-ad-format="auto"></ins>
                                                    <script> (adsbygoogle = window.adsbygoogle || []).push({});</script>
                                                </center>
                                                </td>
                                                </tr>

                                                <?php
                                                $ad = 0;
                                            }
                                            ?>
                                            <tr id="blocked_id-<?php echo $row['MatriID'] ?>">
                                                <td><a href="viewprofile.php?id=<?php echo $row['MatriID'] ?>"><?php echo $row['MatriID'] ?></a></td>
                                                <td><?php echo $row['Gender'] ?></td>
                                                <td><?php echo $row['Age'] ?></td>
                                                <td><?php echo $row['Country'] ?></td>
                                                <td><?php echo $row['City'] ?></td>
                                                <td id="action-<?php echo $row['MatriID'] ?>"><button onclick="wd_RemoveBlock('<?php echo $row['MatriID']; ?>');" class="btn btn-success">Unblock</button></td>
                                            </tr>
                                            <?php
                                            $ad++;
                                        }
                                    }
                                    ?>
                                    </tbody>
                                </table>
                                <br>

                                <center>
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
                                </center>
                                <p align="center"><a href="searchoption.php"><button type="button" class="btn btn-success btn-lg">Search All Rishtay Here</button></a></p>
                            </div>
                            <?php
                        } else {
                            ?>
                            <div class="well well-lg"><h3>You have not blocked any profile. </h3></div>
                        <?php } ?>
                    </div>
                    <br>
                </div>
            </div>
        </div>

        <!-- /.container -->

        <footer>
            <?php include("footer.php"); ?>
        </footer>

        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Navigation JavaScript -->
        <script src="js/navigation.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        <script>
                                                    function wd_RemoveBlock(blocked) {
                                                        $("#action-" + blocked).html('<img src="images/wd_loading.gif" alt="loading.." />');
                                                        var datastring = {"blocked_id": blocked, "action": "remove_block"};
                                                        $.ajax({
                                                            type: "POST",
                                                            url: "wd_process.php",
                                                            data: datastring,

                                                            success: function (response) {

                                                                setTimeout(function () {
                                                                    if (response == '1') {
                                                                        $("#wd_msg").html('<div class="alert alert-success alert-dismissible fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Unblocked!</strong> Successfully</div>');
                                                                    } else {
                                                                        $("#wd_msg").html('<div class=" ">An Error Occured</div>');
                                                                    }

                                                                    $("#blocked_id-" + blocked).slideUp();
                                                                }, 500);
                                                            }
                                                        });
                                                    }
        </script>
    </body>
</html>