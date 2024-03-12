<?php
if (empty($_GET["id"])) {
    header("location:search_record.php?empty=1");
} else {
    if (isset($_COOKIE["login"])) {
        $email = $_COOKIE["login"];
        $code = $_GET["id"];
        $conn = mysqli_connect("localhost", "root", "", "matrimonial");
        $fav = mysqli_query($conn,"select * from fav where user_email='$email' AND profile_code='$code'");
        if($fr = mysqli_fetch_array($fav)){
            $color = "red";
        }else{
            $color = "black";
        }
        $rs = mysqli_query($conn, "select * from profile where code='$code'");
        if ($r = mysqli_fetch_array($rs)) {
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
                <title>Marital an Wedding Category Flat Bootstarp Resposive Website Template | View_profile :: w3layouts</title>
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
                    setInterval(function() {
                    $("#similar_profile").load("load_profiles.php");
                }, 10000);
                // setInterval(function() {
                //     $("#viewed_member").load("load_profiles.php");
                // }, 10000);
                $(document).on("keyup", "#search", function() {
                    var txt = $(this).val();
                    $.post(
                        "user_search.php", {
                            sch: txt
                        },
                        function(data) {
                            $(".profile_left").html(data);
                        }
                    );
                });
                $(document).on("click",".fa.fa-heart",function(){
                    var profile_code= $(this).attr("id");
                    alert(profile_code);
                    $.post(
                        "fav.php",{profile_code:profile_code},function(data){
                            data = data.trim();
                            alert(data);
                            if(data=="success"){
                                $("#"+profile_code).css("color","red");
                            }else if(data=="delete"){
                                $("#"+profile_code).css("color","black");
                            }
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
                                <a href="index.php"><i class="fa fa-home home_1"></i></a>
                                <span class="divider">&nbsp;|&nbsp;</span>
                                <li class="current-page">View Profile</li>
                            </ul>
                        </div>
                        <div class="profile">
                            <div class="col-md-8 profile_left">
                                <?php
                                if (isset($_GET['success'])) {
                                ?>
                                    <div class="alert alert-success">Profile Updated</div>
                                <?php
                                } else if (isset($_GET['del_err'])) {
                                ?>
                                    <div class="alert alert-danger">Profile Not Deleted</div>
                                <?php
                                } else if (isset($_GET['pwd_changed'])) {
                                ?>
                                    <div class="alert alert-success">Password Updated</div>
                                <?php
                                }
                                ?>
                                <h2>Profile Id : <?= $r["code"] ?> <i class="fa fa-heart" id="<?= $r["code"] ?>" style="float:right;color:<?=$color?>;"></i></h2>
                                <div class="col_3">
                                    <div class="col-sm-4 row_2">
                                        <div class="flexslider">
                                            <ul class="slides">
                                                <li data-thumb="profile/<?= $r["code"] ?>.jpg">
                                                    <img src="profile/<?= $r["code"] ?>.jpg" />
                                                </li>
                                                <li data-thumb="images/p2.jpg">
                                                    <img src="images/p2.jpg" />
                                                </li>
                                                <li data-thumb="images/p3.jpg">
                                                    <img src="images/p3.jpg" />
                                                </li>
                                                <li data-thumb="images/p4.jpg">
                                                    <img src="images/p4.jpg" />
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-8 row_1">
                                        <table class="table_working_hours">
                                            <tbody>
                                                <tr class="opened_1">
                                                    <td class="day_label">Name:</td>
                                                    <td class="day_value"><?= $r["fname"] ?>&nbsp;<?= $r["lname"] ?></td>
                                                </tr>
                                                <tr class="opened">
                                                    <td class="day_label">Gender :</td>
                                                    <td class="day_value"><?= $r["gender"] ?></td>
                                                </tr>
                                                <tr class="opened">
                                                    <td class="day_label">Date of Birth :</td>
                                                    <td class="day_value"><?= $r["birth"] ?></td>
                                                </tr>
                                                <tr class="opened">
                                                    <td class="day_label">Marital Status :</td>
                                                    <td class="day_value"><?= $r["status"] ?></td>
                                                </tr>
                                                <tr class="opened">
                                                    <td class="day_label">Occupation :</td>
                                                    <td class="day_value"><?= $r["occupation"] ?></td>
                                                </tr>
                                                <tr class="opened">
                                                    <td class="day_label">Caste :</td>
                                                    <td class="day_value"><?= $r["caste"] ?></td>
                                                </tr>
                                                <tr class="opened">
                                                    <td class="day_label">Religion :</td>
                                                    <td class="day_value"><?= $r["religion"] ?></td>
                                                </tr>
                                                <tr class="opened">
                                                    <td class="day_label">Location :</td>
                                                    <td class="day_value"><?= $r["city"] ?>,&nbsp;<?= $r["state"] ?>,&nbsp;<?= $r["country"] ?></td>
                                                </tr>
                                                <form action="message.php?to_code=<?= $code ?>" method="post">
                                                    <tr class="opened">
                                                        <td class="day_label">Message :</td>
                                                        <td class="day_label"><textarea name="msg" id="" cols="30" rows="4" class="form-control" required></textarea></td>
                                                    </tr>
                                                    <tr class="opened">
                                                        <td class="day_label"></td>
                                                        <td><input type="submit" value="Send" class="btn_1 submit"></td>
                                                </form>
                                                </tr>
                                            </tbody>
                                        </table>


                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <?php
                                $rs1 = mysqli_query($conn, "select * from more_info where user_code='$code'");
                                if ($r1 = mysqli_fetch_array($rs1)) {
                                ?>
                                    <div class="col_4">
                                        <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                                            <ul id="myTab" class="nav nav-tabs nav-tabs1" role="tablist">
                                                <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">About Myself</a></li>
                                                <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Family Details</a></li>
                                            </ul>
                                            <div id="myTabContent" class="tab-content">
                                                <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                                                    <div class="basic_1">
                                                        <h3>Basics & Lifestyle</h3>
                                                        <div class="col-md-6 basic_1-left">
                                                            <table class="table_working_hours">
                                                                <tbody>
                                                                    <tr class="opened">
                                                                        <td class="day_label">Body Type :</td>
                                                                        <td class="day_value"><?= $r1["body_type"] ?></td>
                                                                    </tr>
                                                                    <tr class="opened">
                                                                        <td class="day_label">Height :</td>
                                                                        <td class="day_value"><?= $r1["height"] ?></td>
                                                                    </tr>
                                                                    <tr class="opened">
                                                                        <td class="day_label">Drink :</td>
                                                                        <td class="day_value closed"><span><?= $r1["drink"] ?></span></td>
                                                                    </tr>
                                                                    <tr class="opened">
                                                                        <td class="day_label">Mother Tongue :</td>
                                                                        <td class="day_value"><?= $r1["mother_tongue"] ?></td>
                                                                    </tr>
                                                                    <tr class="opened">
                                                                        <td class="day_label">Complexion :</td>
                                                                        <td class="day_value"><?= $r1["complexion"] ?></td>
                                                                    </tr>
                                                                    <tr class="opened">
                                                                        <td class="day_label">Weight :</td>
                                                                        <td class="day_value"><?= $r1["weight"] ?></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="col-md-6 basic_1-left">
                                                            <table class="table_working_hours">
                                                                <tbody>
                                                                    <tr class="opened">
                                                                        <td class="day_label">Blood Group :</td>
                                                                        <td class="day_value"><?= $r1["blood_group"] ?></td>
                                                                    </tr>
                                                                    <tr class="closed">
                                                                        <td class="day_label">Diet :</td>
                                                                        <td class="day_value closed"><span><?= $r1["diet"] ?></span></td>
                                                                    </tr>
                                                                    <tr class="closed">
                                                                        <td class="day_label">Smoke :</td>
                                                                        <td class="day_value closed"><span><?= $r1["smoke"] ?></span></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="clearfix"> </div>
                                                    </div>
                                                    <div class="basic_1 basic_2">
                                                        <h3>Education & Career</h3>
                                                        <div class="basic_1-left">
                                                            <table class="table_working_hours">
                                                                <tbody>
                                                                    <tr class="opened">
                                                                        <td class="day_label">Education Detail :</td>
                                                                        <td class="day_value"><?= $r1["education"] ?></td>
                                                                    </tr>
                                                                    <tr class="opened">
                                                                        <td class="day_label">Annual Income :</td>
                                                                        <td class="day_value closed"><span><?= $r1["annual_income"] ?>&nbsp;Rs</span></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="clearfix"> </div>
                                                    </div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
                                                    <div class="basic_3">
                                                        <h4>Family Details</h4>
                                                        <div class="basic_1 basic_2">
                                                            <h3>Basics</h3>
                                                            <div class="col-md-6 basic_1-left">
                                                                <table class="table_working_hours">
                                                                    <tbody>
                                                                        <tr class="opened">
                                                                            <td class="day_label">Father's Occupation :</td>
                                                                            <td class="day_value"><?= $r1["father_occupation"] ?></td>
                                                                        </tr>
                                                                        <tr class="opened">
                                                                            <td class="day_label">Mother's Occupation :</td>
                                                                            <td class="day_value"><?= $r1["mother_occupation"] ?></td>
                                                                        </tr>
                                                                        <tr class="opened">
                                                                            <td class="day_label">No. of Brothers :</td>
                                                                            <td class="day_value closed"><span><?= $r1["brothers"] ?></span></td>
                                                                        </tr>
                                                                        <tr class="opened">
                                                                            <td class="day_label">No. of Sisters :</td>
                                                                            <td class="day_value closed"><span><?= $r1["sisters"] ?></span></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane fade" id="profile1" aria-labelledby="profile-tab1">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                } else {
                                ?>
                                <hr>
                                    <div class="col_4">
                                        <h4>More Information Not Specified</h4>
                                    </div>
                                    <hr>
                                <?php
                                }
                                ?>
                            </div>
                            <div class="col-md-4 profile_right">
                            <div class="newsletter">
                                <input type="text" name="" id="search" placeholder="Search user by Name , ID">
                            </div>
                            <div class="view_profile" id="similar_profile">
                                <h3>View Similar Profiles</h3>
                                <?php
                                $rs2 = mysqli_query($conn, "select * from profile where email<>'$email' AND code<>'$code' ORDER BY RAND() LIMIT 0,5");
                                while ($r2 = mysqli_fetch_array($rs2)) {
                                ?>
                                    <ul class="profile_item">
                                        <a href="view_profile.php?id=<?= $r2["code"] ?>">
                                            <li class="profile_item-img">
                                                <img src="profile/<?= $r2["code"] ?>.jpg" class="img-responsive" alt="" />
                                            </li>
                                            <li class="profile_item-desc">
                                                <h4><?= $r2["fname"] ?> &nbsp;<?= $r2["lname"] ?></h4>
                                                <p><?= $r2["code"] ?></p>
                                                <h5><?= $r2["caste"] ?>,&nbsp;<?= $r2["religion"] ?></h5>
                                            </li>
                                            <div class="clearfix"> </div>
                                        </a>
                                    </ul>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
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
                <!-- FlexSlider -->
                <script defer src="js/jquery.flexslider.js"></script>
                <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
                <script>
                    // Can also be used with $(document).ready()
                    $(window).load(function() {
                        $('.flexslider').flexslider({
                            animation: "slide",
                            controlNav: "thumbnails"
                        });
                    });
                </script>
            </body>

            </html>

<?php
        } else {
            header("location:search_record.php?data_not_found=1");
        }
    } else {
        header("location:index.php?again=1");
    }
}
?>