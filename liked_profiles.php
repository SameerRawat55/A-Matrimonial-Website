<?php
if (isset($_COOKIE["login"])) {
	$email = $_COOKIE["login"];
	$conn = mysqli_connect("localhost", "root", "", "matrimonial");
	$rs1 = mysqli_query($conn, "select * from fav where user_email='$email'");

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
		<title>Marital an Wedding Category Flat Bootstarp Resposive Website Template | Profile :: w3layouts</title>
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
						<li class="current-page">Profile</li>
					</ul>
				</div>
				<div class="col-md-9 profile_left1">
					<h1>Profiles</h1>
					<?php
					while ($r1 = mysqli_fetch_array($rs1)) {
						$profile_code = $r1["profile_code"];
						$rs = mysqli_query($conn, "select * from profile where code='$profile_code'");
						while ($r = mysqli_fetch_array($rs)) {
					?>
							<div class="profile_top"><a href="view_profile.php?id=<?= $r['code'] ?>">
									<h2><?= $r['code'] ?></h2>
									<div class="col-sm-3 profile_left-top">
										<img src="profile/<?= $r['code'] ?>.jpg" class="img-responsive" alt="" />
									</div>
									<div class="col-sm-6">
										<table class="table_working_hours">
											<tbody>
												<tr class="opened_1">
													<td class="day_label1">Name :</td>
													<td class="day_value"><?= $r['fname'] ?>&nbsp;<?= $r['lname'] ?></td>
												</tr>
												<tr class="opened">
													<td class="day_label1">Date Of Birth :</td>
													<td class="day_value"><?= $r['birth'] ?></td>
												</tr>
												<tr class="opened">
													<td class="day_label1">Caste :</td>
													<td class="day_value"><?= $r['caste'] ?></td>
												</tr>
												<tr class="opened">
													<td class="day_label1">Religion :</td>
													<td class="day_value"><?= $r['religion'] ?></td>
												</tr>
												<tr class="opened">
													<td class="day_label1">Marital Status :</td>
													<td class="day_value"><?= $r['status'] ?></td>
												</tr>
												<tr class="opened">
													<td class="day_label1">Location:</td>
													<td class="day_value"><?= $r['city'] ?>,&nbsp;<?= $r['state'] ?>,&nbsp;<?= $r['country'] ?></td>
												</tr>
											</tbody>
										</table>
										<div class="buttons">
											<a href="view_profile.php?id=<?= $r['code'] ?>">
												<div class="vertical">View Profile</div>
											</a>
											<a href="send_message.php?id=<?= $r['code'] ?>">
												<div class="vertical">Send Message</div>
											</a>
										</div>
									</div>
									<div class="clearfix"> </div>
								</a></div>
					<?php
						}
					}
					?>
				</div>
				<div class="col-md-3 match_right">
					<section class="slider">
						<h3>Happy Marriage</h3>
						<div class="flexslider">
							<ul class="slides">
								<li>
									<img src="images/s2.jpg" alt="" />
									<h4>Lorem & Ipsum</h4>
									<p>It is a long established fact that a reader will be distracted by the readable</p>
								</li>
								<li>
									<img src="images/s1.jpg" alt="" />
									<h4>Lorem & Ipsum</h4>
									<p>It is a long established fact that a reader will be distracted by the readable</p>
								</li>
								<li>
									<img src="images/s3.jpg" alt="" />
									<h4>Lorem & Ipsum</h4>
									<p>It is a long established fact that a reader will be distracted by the readable</p>
								</li>
							</ul>
						</div>
					</section>
				</div>
				<div class="clearfix"> </div>
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
		<link href="css/flexslider.css" rel='stylesheet' type='text/css' />
		<script defer src="js/jquery.flexslider.js"></script>
		<script type="text/javascript">
			$(function() {
				SyntaxHighlighter.all();
			});
			$(window).load(function() {
				$('.flexslider').flexslider({
					animation: "slide",
					start: function(slider) {
						$('body').removeClass('loading');
					}
				});
			});
		</script>
		<!-- FlexSlider -->
	</body>

	</html>
<?php
} else {
	header("location:login.php?again=1");
}
?>