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
							<a href="#0">
								<figure><img src="http://via.placeholder.com/150x150.jpg" alt=""></figure>
								<?php session_start();
									if(isset($_SESSION['name'])) 
									echo $_SESSION['name'];
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
		<div class="bg_color_2">
			<div class="container margin_60_35">
				<div id="register">
					<h1>Please register to Findoctor!</h1>
					<div class="row justify-content-center">
						<div class="col-md-5">

							<?php
										if(isset($_POST['Submit'])){

												$name = $_POST['name'];
												$phone = $_POST['phone'];
												$email = $_POST['email'];
												$address = $_POST['address'];
												$password1 = $_POST['password1'];
												$password2 = $_POST['password2'];
												$status = "2";
												if($password1 != "" && $password1 == $password2 ){
													$con = new mysqli("localhost","root","","find_doctor");
													$sql = $con->query("INSERT INTO user (name,phone,email,address,password,status)VALUES('$name','$phone','$email','$address','$password1','$status')");
													if($sql){
														echo '<div class="text-center alert alert-success">
														<strong>Success:</strong> Registration Susessfull
													</div>';
													}
													else
														echo '<div class="text-center alert alert-danger">
														<strong>Error:</strong> Registration Failed
													</div>';
												}
												else
												echo '<div class="text-center alert alert-danger">
														<strong>Error:</strong> Registration Failed
													</div>';
										}
									?>

							<form method="post">
								<div class="box_form">

									<!-- <div class="text-center alert alert-danger">
										<strong>Error:</strong> Registration Failed
									</div> -->


									<div class="form-group">
										<label>Name</label>
										<input type="text" name="name" class="form-control" placeholder="Your name">
									</div>
									<div class="form-group">
										<label>Phone</label>
										<input type="text" name="phone" class="form-control" placeholder="Your Phone Number">
									</div>
									<div class="form-group">
										<label>Email</label>
										<input type="email" name="email" class="form-control" placeholder="Your email address">
									</div>
									<div class="form-group">
										<label>Address</label>
										<input type="text" name="address" class="form-control" placeholder="Your Address">
									</div>
									<div class="form-group">
										<label>Password</label>
										<input type="password" class="form-control" id="password1" name="password1" placeholder="Your password">
									</div>
									<div class="form-group">
										<label>Confirm password</label>
										<input type="password" class="form-control" id="password2" name="password2" placeholder="Confirm password">
									</div>
									<div id="pass-info" class="clearfix"></div>
									<div class="checkbox-holder text-left">
										<div class="checkbox_2">
											<input type="checkbox" value="accept_2" id="check_2" name="check_2" checked>
											<label for="check_2"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span></label>
										</div>
									</div>
									<div class="form-group text-center add_top_30">
										<input class="btn_1" type="submit" name="Submit">
									</div>
								</div>
							</form>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /register -->
			</div>
		</div>
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
     
	<!-- SPECIFIC SCRIPTS -->
	<script src="js/pw_strenght.js"></script>
</body>
</html>