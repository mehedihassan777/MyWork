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
	<link href="css/tables.css" rel="stylesheet">
    
	<!-- YOUR CUSTOM CSS -->
	<link href="css/custom.css" rel="stylesheet">
	
	<!-- Modernizr -->
	<script src="js/modernizr_tables.js"></script>
	
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
	<div class="margin_60_35">
		<div class="container">
			<div class="main_title">
				<h1>Pricing Tables</h1>
				<p>Version with monthly/year switcher</p>
			</div>
		</div>
		
		<div class="pricing-container cd-has-margins">
		<div class="pricing-switcher">
			<p class="fieldset">
				<input type="radio" name="duration-2" value="monthly" id="monthly-2" checked>
				<label for="monthly-2">Monthly</label>
				<input type="radio" name="duration-2" value="yearly" id="yearly-2">
				<label for="yearly-2">Yearly</label>
				<span class="switch"></span>
			</p>
		</div>
		<!--/pricing-switcher -->
		<ul class="pricing-list bounce-invert">
			<li>
				<ul class="pricing-wrapper">
					<li data-type="monthly" class="is-visible">
						<header class="pricing-header">
							<h2>Basic</h2>

							<div class="price">
								<span class="currency">$</span>
								<span class="price-value">30</span>
								<span class="price-duration">mo</span>
							</div>
						</header>
						<!-- /pricing-header -->
						<div class="pricing-body">
							<ul class="pricing-features">
								<li><em>One Time</em> Fee</li>
								<li><em>1</em> User</li>
								<li><em>Lifetime</em> Availability</li>
								<li><em>Non</em> Featured</li>
								<li><em>30 days</em> Listing</li>
								<li><em>24/7</em> Support</li>
							</ul>
						</div>
						<!-- /pricing-body -->
						<footer class="pricing-footer">
							<a class="select-plan" href="#0">Select</a>
						</footer>
					</li>
					<li data-type="yearly" class="is-hidden">
						<header class="pricing-header">
							<h2>Basic</h2>

							<div class="price">
								<span class="currency">$</span>
								<span class="price-value">320</span>
								<span class="price-duration">yr</span>
							</div>
						</header>
						<!-- /pricing-header -->
						<div class="pricing-body">
							<ul class="pricing-features">
								<li><em>One Time</em> Fee</li>
								<li><em>1</em> User</li>
								<li><em>Lifetime</em> Availability</li>
								<li><em>Non</em> Featured</li>
								<li><em>30 days</em> Listing</li>
								<li><em>24/7</em> Support</li>
							</ul>
						</div> 
						<!-- /pricing-body -->
						<footer class="pricing-footer">
							<a class="select-plan" href="#0">Select</a>
						</footer>
					</li>
				</ul>
				<!-- /pricing-wrapper -->
			</li>
			<li class="popular">
				<ul class="pricing-wrapper">
					<li data-type="monthly" class="is-visible">
						<header class="pricing-header">
							<h2>Popular</h2>
							<div class="price">
								<span class="currency">$</span>
								<span class="price-value">60</span>
								<span class="price-duration">mo</span>
							</div>
						</header>
						<!-- /pricing-header -->
						<div class="pricing-body">
							<ul class="pricing-features">
								<li><em>One Time</em> Fee</li>
								<li><em>3</em> User</li>
								<li><em>Lifetime</em> Availability</li>
								<li><em>Non</em> Featured</li>
								<li><em>30 days</em> Listing</li>
								<li><em>24/7</em> Support</li>
							</ul>
						</div>
						<!-- /pricing-body -->
						<footer class="pricing-footer">
							<a class="select-plan" href="#0">Select</a>
						</footer>
					</li>
					<li data-type="yearly" class="is-hidden">
						<header class="pricing-header">
							<h2>Popular</h2>

							<div class="price">
								<span class="currency">$</span>
								<span class="price-value">630</span>
								<span class="price-duration">yr</span>
							</div>
						</header>
						<!-- /pricing-header -->
						<div class="pricing-body">
							<ul class="pricing-features">
								<li><em>One Time</em> Fee</li>
								<li><em>3</em> User</li>
								<li><em>Lifetime</em> Availability</li>
								<li><em>Non</em> Featured</li>
								<li><em>30 days</em> Listing</li>
								<li><em>24/7</em> Support</li>
							</ul>
						</div>
						<!-- /pricing-body -->
						<footer class="pricing-footer">
							<a class="select-plan" href="#0">Select</a>
						</footer>
					</li>
				</ul>
				<!-- /cd-pricing-wrapper -->
			</li>
			<li>
				<ul class="pricing-wrapper">
					<li data-type="monthly" class="is-visible">
						<header class="pricing-header">
							<h2>Premier</h2>
							<div class="price">
								<span class="currency">$</span>
								<span class="price-value">90</span>
								<span class="price-duration">mo</span>
							</div>
						</header>
						<!-- /pricing-header -->
						<div class="pricing-body">
							<ul class="pricing-features">
								<li><em>One Time</em> Fee</li>
								<li><em>5</em> User</li>
								<li><em>Lifetime</em> Availability</li>
								<li><em>Non</em> Featured</li>
								<li><em>30 days</em> Listing</li>
								<li><em>24/7</em> Support</li>
							</ul>
						</div>
						<!-- /pricing-body -->
						<footer class="pricing-footer">
							<a class="select-plan" href="#0">Select</a>
						</footer>
					</li>
					<li data-type="yearly" class="is-hidden">
						<header class="pricing-header">
							<h2>Premier</h2>

							<div class="price">
								<span class="currency">$</span>
								<span class="price-value">950</span>
								<span class="price-duration">yr</span>
							</div>
						</header>
						<!-- /pricing-header -->
						<div class="pricing-body">
							<ul class="pricing-features">
								<li><em>One Time</em> Fee</li>
								<li><em>5</em> User</li>
								<li><em>Lifetime</em> Availability</li>
								<li><em>Non</em> Featured</li>
								<li><em>30 days</em> Listing</li>
								<li><em>24/7</em> Support</li>
							</ul>
						</div>
						<!-- /pricing-body -->
						<footer class="pricing-footer">
							<a class="select-plan" href="#0">Select</a>
						</footer>
					</li>
				</ul>
				<!-- /pricing-wrapper -->
			</li>
		</ul>
		<!-- /pricing-list -->
	</div>
	<!-- /pricing-container -->	
	</div>
	<!-- /margin_60_35 -->
	
	<div class="container margin_60_35">
		<div class="row">
        	<div class="col-md-6">
            	<div class="box_faq">
                	<i class="icon_info_alt"></i>
                	<h4>Porro soleat pri ex, at has lorem accusamus?</h4>
                    <p>Ut unum diceret eos, mel cu velit principes, ut quo inani dolorem mediocritatem. Mea in justo posidonium necessitatibus. Augue honestatis vis no, ius quot mazim forensibus in, per sale virtute legimus ne. Mea dicta facilisis eu.</p>
                </div>
            </div>
            <div class="col-md-6">
            	<div class="box_faq">
                	<i class="icon_info_alt"></i>
                	<h4>Ut quo inani dolorem mediocritatem?</h4>
                    <p>Ut unum diceret eos, mel cu velit principes, ut quo inani dolorem mediocritatem. Mea in justo posidonium necessitatibus. Augue honestatis vis no, ius quot mazim forensibus in, per sale virtute legimus ne. Mea dicta facilisis eu.</p>
                </div>
            </div>
        </div><!-- /row  --> 
        <div class="row">
        	<div class="col-md-6">
            	<div class="box_faq">
                	<i class="icon_info_alt"></i>
                	<h4>Per sale virtute legimus ne?</h4>
                    <p>Ut unum diceret eos, mel cu velit principes, ut quo inani dolorem mediocritatem. Mea in justo posidonium necessitatibus. Augue honestatis vis no, ius quot mazim forensibus in, per sale virtute legimus ne. Mea dicta facilisis eu.</p>
                </div>
            </div>
            <div class="col-md-6">
            	<div class="box_faq">
                	<i class="icon_info_alt"></i>
                	<h4>Mea in justo posidonium necessitatibus?</h4>
                    <p>Ut unum diceret eos, mel cu velit principes, ut quo inani dolorem mediocritatem. Mea in justo posidonium necessitatibus. Augue honestatis vis no, ius quot mazim forensibus in, per sale virtute legimus ne. Mea dicta facilisis eu.</p>
                </div>
            </div>
        </div><!-- /row  --> 
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
						<li><a href="about.php">About us</a></li>
						<li><a href="blog.php">Blog</a></li>
						<li><a href="faq.php">FAQ</a></li>
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
	<script src="js/tables_func.js"></script>

</body>
</html>