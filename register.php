<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head>
    <title>Marital an Wedding Category Flat Bootstarp Resposive Website Template | Register :: w3layouts</title>
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
    include("nav_no_login.php");
    ?>
    <!-- ============================  Navigation End ============================ -->
    <div class="grid_3">
        <div class="container">
            <div class="breadcrumb1">
                <ul>
                    <a href="index.php"><i class="fa fa-home home_1"></i></a>
                    <span class="divider">&nbsp;|&nbsp;</span>
                    <li class="current-page">Register</li>
                </ul>
            </div>
            <div class="services">
                <div class="col-sm-6 login_left">
                    <?php
                    if (isset($_GET['success'])) {
                    ?>
                        <div class="alert alert-success">Profile Created</div>
                    <?php
                    } else if (isset($_GET['again'])) {
                    ?>
                        <div class="alert alert-danger">Try Again</div>
                    <?php
                    } else if (isset($_GET['img_err'])) {
                    ?>
                        <div class="alert alert-danger">Image Error...Record Not Saved</div>
                    <?php
                    } else if (isset($_GET['empty'])) {
                    ?>
                        <div class="alert alert-danger">All Field Required</div>
                    <?php
                    }
                    ?>
                    <form method="post" action="register_profile.php" ENCTYPE='multipart/form-data'>
                        <div class="form-group">
                            <label for="edit-name">First Name <span class="form-required" title="This field is required.">*</span></label>
                            <input type="text" id="edit-name" name="fname" class="form-text required" placeholder="Enter First Name">
                        </div>
                        <div class="form-group">
                            <label for="edit-name">Last Name <span class="form-required" title="This field is required.">*</span></label>
                            <input type="text" id="edit-name" name="lname" class="form-text required" placeholder="Enter Second Name">
                        </div>
                        <div class="form-group">
                            <label for="edit-name">Email <span class="form-required" title="This field is required.">*</span></label>
                            <input type="email" id="edit-name" name="email" class="form-text required" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label for="edit-pass">Password <span class="form-required" title="This field is required.">*</span></label>
                            <input type="password" id="edit-pass" name="pass" class="form-text required" placeholder="Enter Password">
                        </div>
                        <div class="form-group">
                            <label for="edit-name">Date Of Birth <span class="form-required" title="This field is required.">*</span></label>
                            <input type="date" id="edit-name" name="dob" class="form-text required">
                        </div>
                        <div class="form-group">
                            <label for="edit-name">Occupation <span class="form-required" title="This field is required.">*</span></label>
                            <input type="text" id="edit-name" name="occupation" class="form-text required" placeholder="Enter Occupation">
                        </div>
                        <div class="form-group">
                            <label for="edit-name">Gender <span class="form-required" title="This field is required.">*</span></label>
                            <div class="select-block1">
                                <select name="gender">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="edit-name">Status <span class="form-required" title="This field is required.">*</span></label>
                            <div class="select-block1">
                                <select name="status">
                                    <option value="Single">Single</option>
                                    <option value="Divorced">Divorced</option>
                                    <option value="Separated">Separated</option>
                                    <option value="Widowed">Widowed</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="edit-name">Caste <span class="form-required" title="This field is required.">*</span></label>
                            <div class="select-block1">
                                <select name="caste">
                                    <option value="Bansal">Bansal</option>
                                    <option value="Agarwal">Agarwal</option>
                                    <option value="Sharma">Sharma</option>
                                    <option value="Kansal">Kansal</option>
                                    <option value="Gupta">Gupta</option>
                                    <option value="Choudhary">Choudhary</option>
                                    <option value="Meena">Meena</option>
                                    <option value="Jain">Jain</option>
                                    <option value="Jaiswal">Jaiswal</option>
                                    <option value="Goyal">Goyal</option>
                                    <option value="Gurjar">Gurjar</option>
                                    <option value="Shukla">Shukla</option>
                                    <option value="Kumar">Kumar</option>
                                    <option value="Prajapat">Prajapat</option>
                                    <option value="Shekhawat">Shekhawat</option>
                                    <option value="Nathawat">Nathawat</option>
                                    <option value="Rajawat">Rajawat</option>
                                    <option value="Muslim">Muslim</option>
                                    <option value="Issac">Issac</option>
                                    <option value="Christian">Christian</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="edit-name">Religion <span class="form-required" title="This field is required.">*</span></label>
                            <div class="select-block1">
                                <select name="religion">
                                    <option value="Hinduism">Hinduism</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Christianity">Christianity</option>
                                    <option value="Sikhism">Sikhism</option>
                                    <option value="Jainism">Jainism</option>
                                    <option value="Buddhism">Buddhism</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="edit-name">City<span class="form-required" title="This field is required.">*</span></label>
                            <input type="text" id="edit-name" name="city" class="form-text required" placeholder="Enter City">
                        </div>
                        <div class="form-group">
                            <label for="edit-name">State<span class="form-required" title="This field is required.">*</span></label>
                            <input type="text" id="edit-name" name="state" class="form-text required" placeholder="Enter State">
                        </div>
                        <div class="form-group">
                            <label for="edit-name">Country<span class="form-required" title="This field is required.">*</span></label>
                            <input type="text" id="edit-name" name="country" class="form-text required" placeholder="Enter Country">
                        </div>
                        <div class="form-group">
                            <label for="edit-name">Upload Photo<span class="form-required" title="This field is required.">*</span></label>
                            <input type="file" name="photo" class="form-control">
                        </div>
                        <div class="form-actions">
                            <input type="submit" id="edit-submit" name="op" value="Sign Up" class="btn_1 submit">
                        </div>
                    </form>
                </div>
                <div class="col-sm-6">
                    <ul class="sharing">
                        <li><a href="#" class="facebook" title="Facebook"><i class="fa fa-boxed fa-fw fa-facebook"></i> Share on Facebook</a></li>
                        <li><a href="#" class="twitter" title="Twitter"><i class="fa fa-boxed fa-fw fa-twitter"></i> Tweet</a></li>
                        <li><a href="#" class="google" title="Google"><i class="fa fa-boxed fa-fw fa-google-plus"></i> Share on Google+</a></li>
                        <li><a href="#" class="linkedin" title="Linkedin"><i class="fa fa-boxed fa-fw fa-linkedin"></i> Share on LinkedIn</a></li>
                        <li><a href="#" class="mail" title="Email"><i class="fa fa-boxed fa-fw fa-envelope-o"></i> E-mail</a></li>
                    </ul>
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
</body>

</html>