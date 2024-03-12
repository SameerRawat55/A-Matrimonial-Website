<?php
if (isset($_COOKIE["login"])) {
    $email = $_COOKIE["login"];
    $conn = mysqli_connect("localhost", "root", "", "matrimonial");
    $rs = mysqli_query($conn, "select * from message where from_email='$email'");
?>
    <!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
    <!DOCTYPE HTML>
    <html>

    <head>
        <title>Marital an Wedding Category Flat Bootstarp Resposive Website Template | Inbox :: w3layouts</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Marital Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
        <script type="application/x-javascript">
            addEventListener("load", function() {
                setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
                window.scrollTo(0, 1);
            }
        </script>
        <link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- Custom Theme files -->
        <link href="css/style.css" rel='stylesheet' type='text/css' />
        <link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
        <!----font-Awesome----->
        <link href="css/font-awesome.css" rel="stylesheet">
        <!----font-Awesome----->
        <script>
            $(document).ready(function() {
                $(".dropdown").hover(
                    function() {
                        $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                        $(this).toggleClass('open');
                    },
                    function() {
                        $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                        $(this).toggleClass('open');
                    }
                );
            });
        </script>
    </head>

    <body>
        <!-- ============================  Navigation Start =========================== -->
        <?php
        include("nav.php");
        ?>
        <!-- ============================  Navigation End ============================ -->
        <div class="grid_3">
            <div class="container">
                <div class="breadcrumb1">
                    <ul>
                        <a href="profile.php"><i class="fa fa-home home_1"></i></a>
                        <span class="divider">&nbsp;|&nbsp;</span>
                        <li class="current-page">Sent Messages</li>
                    </ul>
                </div>
                <div class="col-md-12 members_box2">
                    <h3>Sent Messages</h3>
                    <div class="col_4">
                        <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                            <ul id="myTab" class="nav nav-tabs nav-tabs1" role="tablist">
                                <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">All</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content">
                                <div class="clearfix"> </div>
                                <?php
                                while($r = mysqli_fetch_array($rs)){
                                    $sender_code = $r["to_code"];
                                    $rs1 = mysqli_query($conn,"select * from profile where code='$sender_code'");
                                    while($r1 = mysqli_fetch_array($rs1)){
                                ?>
                                <div class="jobs-item with-thumb">
                                    <div class="thumb_top">
                                        <div class="thumb"><a href="view_profile.php?id=<?=$r1["code"]?>"><img src="profile/<?=$r1["code"]?>.jpg" class="img-responsive" alt="" /></a></div>
                                        <div class="jobs_right">
                                            <h6 class="title"><a href="view_profile.php?id=<?=$r1["code"]?>"><?=$r1["fname"]?>&nbsp;<?=$r1["lname"]?></a></h6>
                                            <p class="description"><?=$r["msg"]?></p>
                                            <div class="thumb"><a href="view_profile.php?id=<?=$r1["code"]?>" class="photo_view">View Profile</a></div>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                                <?php
                                 } 
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3150859.767904157!2d-96.62081048651531!3d39.536794757966845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1408111832978"> </iframe>
        </div>
        <div class="footer">
            <div class="container">
                <div class="col-md-4 col_2">
                    <h4>About Us</h4>
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris."</p>
                </div>
                <div class="col-md-2 col_2">
                    <h4>Help & Support</h4>
                    <ul class="footer_links">
                        <li><a href="#">24x7 Live help</a></li>
                        <li><a href="contact.php">Contact us</a></li>
                        <li><a href="#">Feedback</a></li>
                        <li><a href="faq.php">FAQs</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col_2">
                    <h4>Quick Links</h4>
                    <ul class="footer_links">
                        <li><a href="privacy.php">Privacy Policy</a></li>
                        <li><a href="terms.php">Terms and Conditions</a></li>
                        <li><a href="services.php">Services</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col_2">
                    <h4>Social</h4>
                    <ul class="footer_social">
                        <li><a href="#"><i class="fa fa-facebook fa1"> </i></a></li>
                        <li><a href="#"><i class="fa fa-twitter fa1"> </i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus fa1"> </i></a></li>
                        <li><a href="#"><i class="fa fa-youtube fa1"> </i></a></li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
                <div class="copy">
                    <p>Copyright © 2015 Marital . All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
                </div>
            </div>
        </div>
    </body>

    </html>
<?php
} else {
    header("location:login.php?again=1");
}
?>