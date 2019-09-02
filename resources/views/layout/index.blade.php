<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Competition| @yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by QBOOTSTRAP.COM" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="QBOOTSTRAP.COM" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by QBOOTSTRAP.COM
		
	Website: 		http://qbootstrap.com/
	Email: 			info@qbootstrap.com
	Twitter: 		http://twitter.com/Q_bootstrap
	Facebook: 		https://www.facebook.com/Qbootstrap
	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="qbootstrap-loader"></div>
	
	<div id="page">

        <!-- Header Navation-->
        @include('layout.header')
        <!-- End Header Navation--> 
    
        <!-- Slide--> 
        @include('layout.slide')
        <!-- End Slide-->
    
        <!-- Intro--> 
        @include('layout.intro')
        <!-- End Intro-->
	
        <!-- Dich vu -->
        @include('layout.service')
        <!-- End Dich vu -->

<!--
	<div id="qbootstrap-choose">
		<div class="container-fluid">
			<div class="row">
				<div class="choose">
					<div class="half img-bg" style="background-image: url(images/img_bg_6.jpg);"></div>
					<div class="half features-wrap">
						<div class="qbootstrap-heading animate-box">
							<h2>What Makes Us the Best?</h2>
							<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
						</div>
						<div class="features animate-box">
							<span class="icon text-center"><i class="icon-group-outline"></i></span>
							<div class="desc">
								<h3>Well Experienced Doctors</h3>
								<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
							</div>
						</div>
						<div class="features animate-box">
							<span class="icon text-center"><i class="icon-flow-merge"></i></span>
							<div class="desc">
								<h3>Free Medical Consultation</h3>
								<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
							</div>
						</div>
						<div class="features animate-box">
							<span class="icon text-center"><i class="icon-document-text"></i></span>
							<div class="desc">
								<h3>Online Enrollment</h3>
								<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
							</div>
						</div>
						<div class="features animate-box">
							<span class="icon text-center"><i class="icon-gift"></i></span>
							<div class="desc">
								<h3>Modern Facilities</h3>
								<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
-->

<!-- Giam khao
	<div id="qbootstrap-doctor">
		<div class="container-fluid">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center qbootstrap-heading">
					<h2>Experienced Doctors</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 animate-box text-center">
					<div class="doctor">
						<div class="staff-img" style="background-image: url(images/staff-4.jpg);"></div>
						<h3><a href="#">Mary Smith</a></h3>
						<span>Dental Hygienist</span>
						<ul class="qbootstrap-social">
							<li><a href="#"><i class="icon-facebook2"></i></a></li>
							<li><a href="#"><i class="icon-twitter2"></i></a></li>
							<li><a href="#"><i class="icon-yahoo2"></i></a></li>
							<li><a href="#"><i class="icon-google2"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 animate-box text-center">
					<div class="doctor">
						<div class="staff-img" style="background-image: url(images/staff-2.jpg);"></div>
						<h3><a href="#">John Bowman</a></h3>
						<span>Orthopedic Surgeon</span>
						<ul class="qbootstrap-social">
							<li><a href="#"><i class="icon-facebook2"></i></a></li>
							<li><a href="#"><i class="icon-twitter2"></i></a></li>
							<li><a href="#"><i class="icon-yahoo2"></i></a></li>
							<li><a href="#"><i class="icon-google2"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 animate-box text-center">
					<div class="doctor">
						<div class="staff-img" style="background-image: url(images/staff-3.jpg);"></div>
						<h3><a href="#">Jenny Anderson</a></h3>
						<span>Health Care</span>
						<ul class="qbootstrap-social">
							<li><a href="#"><i class="icon-facebook2"></i></a></li>
							<li><a href="#"><i class="icon-twitter2"></i></a></li>
							<li><a href="#"><i class="icon-yahoo2"></i></a></li>
							<li><a href="#"><i class="icon-google2"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 animate-box text-center">
					<div class="doctor">
						<div class="staff-img" style="background-image: url(images/staff-1.jpg);"></div>
						<h3><a href="#">Bob Barker</a></h3>
						<span>Patient Services Manager</span>
						<ul class="qbootstrap-social">
							<li><a href="#"><i class="icon-facebook2"></i></a></li>
							<li><a href="#"><i class="icon-twitter2"></i></a></li>
							<li><a href="#"><i class="icon-yahoo2"></i></a></li>
							<li><a href="#"><i class="icon-google2"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
End Giam khao-->

<!-- Thong ke
	<div id="qbootstrap-counter" class="qbootstrap-counters" style="background-image: url(images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="row">
						<div class="col-md-3 col-sm-6 text-center animate-box">
							<span class="icon"><i class="icon-group-outline"></i></span>
							<span class="qbootstrap-counter js-counter" data-from="0" data-to="3297" data-speed="5000" data-refresh-interval="50"></span>
							<span class="qbootstrap-counter-label">Satisfied Customer</span>
						</div>
						<div class="col-md-3 col-sm-6 text-center animate-box">
							<span class="icon"><i class="icon-home-outline"></i></span>
							<span class="qbootstrap-counter js-counter" data-from="0" data-to="378" data-speed="5000" data-refresh-interval="50"></span>
							<span class="qbootstrap-counter-label">Hospitals</span>
						</div>
						<div class="col-md-3 col-sm-6 text-center animate-box">
							<span class="icon"><i class="icon-user-add-outline"></i></span>
							<span class="qbootstrap-counter js-counter" data-from="0" data-to="400" data-speed="5000" data-refresh-interval="50"></span>
							<span class="qbootstrap-counter-label">Qualified Doctor</span>
						</div>
						<div class="col-md-3 col-sm-6 text-center animate-box">
							<span class="icon"><i class="icon-point-of-interest-outline"></i></span>
							<span class="qbootstrap-counter js-counter" data-from="0" data-to="30" data-speed="5000" data-refresh-interval="50"></span>
							<span class="qbootstrap-counter-label">Departments</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
End Thong ke-->

<!-- Blog
	<div id="qbootstrap-blog">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center qbootstrap-heading">
					<h2>Read our blog</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="row animate-box">
						<div class="owl-carousel owl-carousel-fullwidth">
							<div class="item">
								<div class="blog-slide active">
									<a href="blog.html" class="blog-box" style="background-image: url(images/blog-1.jpg);">
										<span class="date">Aug 20, 2017</span>
									</a>
									<div class="desc">
										<h3><a href="blog.html">2017 Triathlon Event</a></h3>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="blog-slide active">
									<a href="blog.html" class="blog-box" style="background-image: url(images/blog-2.jpg);">
										<span class="date">Aug 20, 2017</span>
									</a>
									<div class="desc">
										<h3><a href="blog.html">Cycling gives more health beneficial</a></h3>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="blog-slide active">
									<a href="blog.html" class="blog-box" style="background-image: url(images/blog-3.jpg);">
										<span class="date">Aug 20, 2017</span>
									</a>
									<div class="desc">
										<h3><a href="blog.html">USA, International Triathlon Event</a></h3>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
End Blog -->
	
<!-- Dang ky
	<div id="qbootstrap-register" style="background-image: url(images/img_bg_5.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 animate-box">
					<div class="date-counter text-center">
						<h2>We offer <strong class="color">Free Consultation</strong></h2>
						<h3>By Dr. <strong>Mary Smith</strong></h3>
						<p class="countdown">
							<span id="days"></span>
							<span id="hours"></span>
							<span id="minutes"></span>
							<span id="seconds"></span>
						</p>
						<p><strong>Limited offer, Hurry Up!</strong></p>
						<p><a href="#" class="btn btn-primary btn-lg">Book an Appointment <i class="icon-calendar3"></i></a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
End Dang ky-->

<!--
	<div id="qbootstrap-testimonial" class="qbootstrap-bg-section">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center qbootstrap-heading">
					<h2><span>Testimonies</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 animate-box">
					<div class="testimony text-center">
						<span class="img-user" style="background-image: url(images/person2.jpg);"></span>
						<span class="user">Herbert Barker</span>
						<blockquote>
							<p>"Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius."</p>
						</blockquote>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="testimony text-center">
						<span class="img-user" style="background-image: url(images/person1.jpg);"></span>
						<span class="user">David Fox</span>
						<blockquote>
							<p>"Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius."</p>
						</blockquote>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="testimony text-center">
						<span class="img-user" style="background-image: url(images/person3.jpg);"></span>
						<span class="user">Princess Danica</span>
						<blockquote>
							<p>"Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius."</p>
						</blockquote>
					</div>
				</div>
			</div>
		</div>
	</div>
-->
<!-- Footer -->
	@include('layout.footer')
<!--  End Footer -->

<!-- Top button-->
	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
<!-- End Top button-->

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Sticky Kit -->
	<script src="js/sticky-kit.min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

