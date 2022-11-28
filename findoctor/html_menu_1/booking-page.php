<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Find easily a doctor and book online an appointment">
	<meta name="author" content="Ansonika">
	<title>FINDOCTOR - Find easily a doctor and book online an appointment</title>

	<!-- Favicons-->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">
    
    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

	<!-- BASE CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/menu.css" rel="stylesheet">
	<link href="css/vendors.css" rel="stylesheet">
	<link href="css/icon_fonts/css/all_icons_min.css" rel="stylesheet">
    
	<!-- YOUR CUSTOM CSS -->
	<link href="css/custom.css" rel="stylesheet">

</head>

<body>

	<div class="layer"></div>
	<!-- Mobile menu overlay mask -->

	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>
	<!-- End Preload -->
    
	<header class="header_sticky">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-6">
					<div id="logo">
						<a href="index.php" title="Findoctor"><img src="img/logo.png" alt="" width="163" height="36"></a>
					</div>
				</div>
				<nav class="col-lg-9 col-6">
					<a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="#0"><span>Menu mobile</span></a>
					<ul id="top_access">
						<li id="user">
							<a href="../admin_section/user">
								<figure><img src="http://via.placeholder.com/150x150.jpg" alt=""></figure>
								<?php
									if(!isset($_SESSION['name'])){
										session_start();
										if(isset($_SESSION['name']))
										echo $_SESSION['name'];
									}
									if(isset($_POST['id'])){
										$con = new mysqli("localhost","root","","find_doctor");
										$did = $_POST['id'];
										$data1 = $con->query("SELECT * FROM doctor WHERE id='$did'");
										$doctor = $data1->fetch_assoc();
										$uid = $_SESSION['id'];
										$data2 = $con->query("SELECT * FROM user WHERE id='$uid'");
										$user = $data2->fetch_assoc();


									}
								?>
							</a>
							</a>
						</li>
					</ul>
					<div class="main-menu">
						<ul>
							<li class="submenu">
								<a href="index.php" class="show-submenu">Home</i></a>
							</li>
							<li class="submenu">
								<a href="#0" class="show-submenu">Menues<i class="icon-down-open-mini"></i></a>
								<ul>
									<li><a href="submit-review.php">Submit Review</a></li>
									<li><a href="blog-1.php">Blog</a></li>
									<li><a href="badges.php">Badges</a></li>
									<li><a href="login.php">Login</a></li>
									<li><a href="register-doctor.php">Register Doctor</a></li>
									<li><a href="register.php">Register</a></li>
									<li><a href="about.php">About Us</a></li>
									<li><a href="contacts.php">Contacts</a></li>
								</ul>
							</li>
						</ul>
					</div>
					<!-- /main-menu -->
				</nav>
			</div>
		</div>
		<!-- container -->
	</header>
	<!-- /Header -->	
	
	<main>
		<div id="breadcrumb">
			<div class="container">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Category</a></li>
					<li>Page active</li>
				</ul>
			</div>
		</div>
		<!-- /breadcrumb -->

		<div class="container margin_60">
			<form action="confirm.php" method="post">
			<div class="row">
				<div class="col-xl-8 col-lg-8">
				<div class="box_general_3 cart">
					<div class="form_title">
						<h3><strong>1</strong>Your Details</h3>
						<p>
							Mussum ipsum cacilds, vidis litro abertis.
						</p>
					</div>
					<div class="step">
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label>Name</label>
									<input type="text" class="form-control" id="name" name="name" value="<?php if(isset($_POST['id'])) echo $user['name'] ?>">
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label>Telephone</label>
									<input type="text" class="form-control" id="phone" name="phone" value="<?php if(isset($_POST['id'])) echo $user['phone'] ?>">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label>Email</label>
									<input type="email" id="email_booking" name="email" class="form-control" value="<?php if(isset($_POST['id'])) echo $user['email'] ?>">
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label>Confirm email</label>
									<input type="email" id="email_booking_2" name="email_booking_2" class="form-control" value="<?php if(isset($_POST['id'])) echo $user['email'] ?>">
								</div>
							</div>
						</div>
					</div>
					<hr>
					<!--End step -->

					<div class="form_title">
						<h3><strong>2</strong>Billing Address</h3>
						<p>
							Mussum ipsum cacilds, vidis litro abertis.
						</p>
					</div>
					<div class="step">
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<label>Division</label>
								<div class="form-group">
									<select class="form-control" name="division" id="country">
										<option value="">Select your division</option>
										<option value="Rangpur">Rangpur</option>
										<option value="Dhaka">Dhaka</option>
										<option value="Chattogram">Chattogram</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label>Street line 1</label>
									<input type="text" id="street_1" name="street_1" class="form-control" placeholder="Street line 1">
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label>Street line 2</label>
									<input type="text" id="street_2" name="street_2" class="form-control" placeholder="Street line 1">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>City</label>
									<input type="text" id="city_booking" name="city_booking" class="form-control" placeholder="Kurigram">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label>Post Office</label>
									<input type="text" id="state_booking" name="village" class="form-control" placeholder="Tabakpur">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label>Postal code</label>
									<input type="text" id="postal_code" name="postal_code" class="form-control" placeholder="5620">
								</div>
							</div>
						</div>
						<!--End row -->
					</div>
					<hr>
					<!--End step -->
					<div id="policy">
						<h4>Cancellation policy</h4>
						<div class="form-group">
							<div class="checkboxes">
								<label class="container_check">I accept <a href="#0">terms and conditions and general policy</a>
									<input type="checkbox">
									<span class="checkmark"></span>
								</label>
							</div>
						</div>
					</div>
				</div>
				</div>
				<!-- /col -->
				<aside class="col-xl-4 col-lg-4" id="sidebar">
					<div class="box_general_3 booking">
							<div class="title">
								<h3>Your booking</h3>
							</div>
							<div class="summary">
								<ul>
									<li>Date: <strong class="float-right"><?php if(isset($_POST['id'])) echo $_POST['date'] ?></strong></li>
									<input type="hidden" value="<?php if(isset($_POST['id'])) echo $_POST['date'] ?>" name="date">
									<li>Time: <strong class="float-right"><?php if(isset($_POST['id'])) echo $_POST['radio_time'] ?></strong></li>
									<input type="hidden" value="<?php if(isset($_POST['id'])) echo $_POST['radio_time'] ?>" name="radio_time">
									<input type="hidden" value="<?php if(isset($_POST['id'])) echo $_POST['id'] ?>" name="id">
									<li>Dr. Name: <strong class="float-right"><?php if(isset($_POST['id'])) echo $doctor['name'] ?></strong></li>
								</ul>
							</div>
							<ul class="treatments checkout clearfix">
								<li>
									Doctor visit <strong class="float-right">600 Tk</strong>
								</li>
								<li class="total">
									Total <strong class="float-right">600Tk</strong>
								</li>
							</ul>
							<hr>
							<button class="confirm btn_1 full-width">Confirm Booking</button>
					</div>
					<!-- /box_general -->
				</aside>
				<!-- /asdide -->
			</div>
			<!-- /row -->
			</form>
		</div>
		<!-- /container -->
	</main>
	<!-- /main -->
	
	<footer>
		<div class="container margin_60_35">
			<div class="row">
				<div class="col-lg-3 col-md-12">
					<p>
						<a href="index.php" title="Findoctor">
							<img src="img/logo.png" alt="" width="163" height="36" class="img-fluid">
						</a>
					</p>
				</div>
				<div class="col-lg-3 col-md-4">
					<h5>About</h5>
					<ul class="links">
						<li><a href="#0">About us</a></li>
						<li><a href="blog.php">Blog</a></li>
						<li><a href="#0">FAQ</a></li>
						<li><a href="login.php">Login</a></li>
						<li><a href="register.php">Register</a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-4">
					<h5>Useful links</h5>
					<ul class="links">
						<li><a href="#0">Doctors</a></li>
						<li><a href="#0">Clinics</a></li>
						<li><a href="#0">Specialization</a></li>
						<li><a href="#0">Join as a Doctor</a></li>
						<li><a href="#0">Download App</a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-4">
					<h5>Contact with Us</h5>
					<ul class="contacts">
						<li><a href="tel://61280932400"><i class="icon_mobile"></i> + 61 23 8093 3400</a></li>
						<li><a href="mailto:info@findoctor.com"><i class="icon_mail_alt"></i> help@findoctor.com</a></li>
					</ul>
					<div class="follow_us">
						<h5>Follow us</h5>
						<ul>
							<li><a href="#0"><i class="social_facebook"></i></a></li>
							<li><a href="#0"><i class="social_twitter"></i></a></li>
							<li><a href="#0"><i class="social_linkedin"></i></a></li>
							<li><a href="#0"><i class="social_instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<!--/row-->
			<hr>
			<div class="row">
				<div class="col-md-8">
					<ul id="additional_links">
						<li><a href="#0">Terms and conditions</a></li>
						<li><a href="#0">Privacy</a></li>
					</ul>
				</div>
				<div class="col-md-4">
					<div id="copy">© 2021 Findoctor</div>
				</div>
			</div>
		</div>
	</footer>
	<!--/footer-->

	<div id="toTop"></div>
	<!-- Back to top button -->

	<!-- COMMON SCRIPTS -->
	<script src="js/jquery-3.6.1.min.js"></script>
	<script src="js/common_scripts.min.js"></script>
	<script src="js/functions.js"></script>
     
</body>
</html>