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
   
    <!-- SPECIFIC CSS -->
    <link href="css/blog.css" rel="stylesheet">
    
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
			<div class="row">
				<aside class="col-lg-3" id="sidebar">
						<div class="box_style_cat" id="faq_box">
							<ul id="cat_nav">
								<li><a href="#payment" class="active"><i class="icon_document_alt"></i>Payments</a></li>
								<li><a href="#tips"><i class="icon_document_alt"></i>Suggestions</a></li>
								<li><a href="#reccomendations"><i class="icon_document_alt"></i>Reccomendations</a></li>
								<li><a href="#terms"><i class="icon_document_alt"></i>Terms&amp;conditons</a></li>
								<li><a href="#booking"><i class="icon_document_alt"></i>Booking</a></li>
							</ul>
						</div>
						<!--/sticky -->
				</aside>
				<!--/aside -->
				
				<div class="col-lg-9" id="faq">
					<h4 class="nomargin_top">Payments</h4>
					<div role="tablist" class="add_bottom_45 accordion" id="payment">
						<div class="card">
							<div class="card-header" role="tab">
								<h5 class="mb-0">
									<a data-bs-toggle="collapse" href="#collapseOne_payment" aria-expanded="true"><i class="indicator icon_minus_alt2"></i>Introdocution</a>
								</h5>
							</div>

							<div id="collapseOne_payment" class="collapse show" role="tabpanel" data-bs-parent="#payment">
								<div class="card-body">
									<p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
								</div>
							</div>
						</div>
						<!-- /card -->
						<div class="card">
							<div class="card-header" role="tab">
								<h5 class="mb-0">
									<a class="collapsed" data-bs-toggle="collapse" href="#collapseTwo_payment" aria-expanded="false">
										<i class="indicator icon_plus_alt2"></i>Generative Modeling Review
									</a>
								</h5>
							</div>
							<div id="collapseTwo_payment" class="collapse" role="tabpanel" data-bs-parent="#payment">
								<div class="card-body">
									<p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
								</div>
							</div>
						</div>
						<!-- /card -->
						<div class="card">
							<div class="card-header" role="tab">
								<h5 class="mb-0">
									<a class="collapsed" data-bs-toggle="collapse" href="#collapseThree_payment" aria-expanded="false">
										<i class="indicator icon_plus_alt2"></i>Variational Autoencoders
									</a>
								</h5>
							</div>
							<div id="collapseThree_payment" class="collapse" role="tabpanel" data-bs-parent="#payment">
								<div class="card-body">
									<p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
								</div>
							</div>
						</div>
						<!-- /card -->
					</div>
					<!-- /accordion payment -->
					
					<h4 class="nomargin_top">Suggestions</h4>
					<div role="tablist" class="add_bottom_45 accordion" id="tips">
						<div class="card">
							<div class="card-header" role="tab">
								<h5 class="mb-0">
									<a data-bs-toggle="collapse" href="#collapseOne_tips" aria-expanded="true"><i class="indicator icon_plus_alt2"></i>Introdocution</a>
								</h5>
							</div>

							<div id="collapseOne_tips" class="collapse" role="tabpanel" data-bs-parent="#tips">
								<div class="card-body">
									<p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
								</div>
							</div>
						</div>
						<!-- /card -->
						<div class="card">
							<div class="card-header" role="tab">
								<h5 class="mb-0">
									<a class="collapsed" data-bs-toggle="collapse" href="#collapseTwo_tips" aria-expanded="false">
										<i class="indicator icon_plus_alt2"></i>Generative Modeling Review
									</a>
								</h5>
							</div>
							<div id="collapseTwo_tips" class="collapse" role="tabpanel" data-bs-parent="#tips">
								<div class="card-body">
									<p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
								</div>
							</div>
						</div>
						<!-- /card -->
						<div class="card">
							<div class="card-header" role="tab">
								<h5 class="mb-0">
									<a class="collapsed" data-bs-toggle="collapse" href="#collapseThree_tips" aria-expanded="false">
										<i class="indicator icon_plus_alt2"></i>Variational Autoencoders
									</a>
								</h5>
							</div>
							<div id="collapseThree_tips" class="collapse" role="tabpanel" data-bs-parent="#tips">
								<div class="card-body">
									<p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
								</div>
							</div>
						</div>
						<!-- /card -->
					</div>
					<!-- /accordion suggestions -->
					
					<h4 class="nomargin_top">Reccomendations</h4>
					<div role="tablist" class="add_bottom_45 accordion" id="reccomendations">
						<div class="card">
							<div class="card-header" role="tab">
								<h5 class="mb-0">
									<a data-bs-toggle="collapse" href="#collapseOne_reccomendations" aria-expanded="true"><i class="indicator icon_plus_alt2"></i>Introdocution</a>
								</h5>
							</div>

							<div id="collapseOne_reccomendations" class="collapse" role="tabpanel" data-bs-parent="#reccomendations">
								<div class="card-body">
									<p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
								</div>
							</div>
						</div>
						<!-- /card -->
						<div class="card">
							<div class="card-header" role="tab">
								<h5 class="mb-0">
									<a class="collapsed" data-bs-toggle="collapse" href="#collapseTwo_reccomendations" aria-expanded="false">
										<i class="indicator icon_plus_alt2"></i>Generative Modeling Review
									</a>
								</h5>
							</div>
							<div id="collapseTwo_reccomendations" class="collapse" role="tabpanel" data-bs-parent="#reccomendations">
								<div class="card-body">
									<p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
								</div>
							</div>
						</div>
						<!-- /card -->
						<div class="card">
							<div class="card-header" role="tab">
								<h5 class="mb-0">
									<a class="collapsed" data-bs-toggle="collapse" href="#collapseThree_reccomendations" aria-expanded="false">
										<i class="indicator icon_plus_alt2"></i>Variational Autoencoders
									</a>
								</h5>
							</div>
							<div id="collapseThree_reccomendations" class="collapse" role="tabpanel" data-bs-parent="#reccomendations">
								<div class="card-body">
									<p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
								</div>
							</div>
						</div>
						<!-- /card -->
					</div>
					<!-- /accordion Reccomendations -->
					
					<h4 class="nomargin_top">Terms&amp;conditons</h4>
					<div role="tablist" class="add_bottom_45 accordion" id="terms">
						<div class="card">
							<div class="card-header" role="tab">
								<h5 class="mb-0">
									<a data-bs-toggle="collapse" href="#collapseOne_terms" aria-expanded="true"><i class="indicator icon_plus_alt2"></i>Introdocution</a>
								</h5>
							</div>

							<div id="collapseOne_terms" class="collapse" role="tabpanel" data-bs-parent="#terms">
								<div class="card-body">
									<p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
								</div>
							</div>
						</div>
						<!-- /card -->
						<div class="card">
							<div class="card-header" role="tab">
								<h5 class="mb-0">
									<a class="collapsed" data-bs-toggle="collapse" href="#collapseTwo_terms" aria-expanded="false">
										<i class="indicator icon_plus_alt2"></i>Generative Modeling Review
									</a>
								</h5>
							</div>
							<div id="collapseTwo_terms" class="collapse" role="tabpanel" data-bs-parent="#terms">
								<div class="card-body">
									<p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
								</div>
							</div>
						</div>
						<!-- /card -->
						<div class="card">
							<div class="card-header" role="tab">
								<h5 class="mb-0">
									<a class="collapsed" data-bs-toggle="collapse" href="#collapseThree_terms" aria-expanded="false">
										<i class="indicator icon_plus_alt2"></i>Variational Autoencoders
									</a>
								</h5>
							</div>
							<div id="collapseThree_terms" class="collapse" role="tabpanel" data-bs-parent="#terms">
								<div class="card-body">
									<p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
								</div>
							</div>
						</div>
						<!-- /card -->
					</div>
					<!-- /accordion Terms -->
					
					<h4 class="nomargin_top">Booking</h4>
					<div role="tablist" class="add_bottom_45 accordion" id="booking">
						<div class="card">
							<div class="card-header" role="tab">
								<h5 class="mb-0">
									<a data-bs-toggle="collapse" href="#collapseOne_booking" aria-expanded="true"><i class="indicator icon_plus_alt2"></i>Introdocution</a>
								</h5>
							</div>

							<div id="collapseOne_booking" class="collapse" role="tabpanel" data-bs-parent="#booking">
								<div class="card-body">
									<p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
								</div>
							</div>
						</div>
						<!-- /card -->
						<div class="card">
							<div class="card-header" role="tab">
								<h5 class="mb-0">
									<a class="collapsed" data-bs-toggle="collapse" href="#collapseTwo_booking" aria-expanded="false">
										<i class="indicator icon_plus_alt2"></i>Generative Modeling Review
									</a>
								</h5>
							</div>
							<div id="collapseTwo_booking" class="collapse" role="tabpanel" data-bs-parent="#booking">
								<div class="card-body">
									<p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
								</div>
							</div>
						</div>
						<!-- /card -->
						<div class="card">
							<div class="card-header" role="tab">
								<h5 class="mb-0">
									<a class="collapsed" data-bs-toggle="collapse" href="#collapseThree_booking" aria-expanded="false">
										<i class="indicator icon_plus_alt2"></i>Variational Autoencoders
									</a>
								</h5>
							</div>
							<div id="collapseThree_booking" class="collapse" role="tabpanel" data-bs-parent="#booking">
								<div class="card-body">
									<p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
								</div>
							</div>
						</div>
						<!-- /card -->
					</div>
					<!-- /accordion Booking -->

				</div>
				<!-- /col -->
			</div>
			<!-- /row -->
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