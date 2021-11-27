
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Product store front with prices">
	<meta name="author" content="UWS">
	<title>DIMALUXURYH | Product store front with prices</title>

	<!-- Favicon -->
	<!-- <link href="img/favicon.png" rel="shortcut icon"> -->

	<!-- Google Fonts - Poppins, Karla -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Karla:300,400,500,600,700" rel="stylesheet">

	<!-- Font Awesome CSS -->
	<link href="{{asset("vendor/fontawesome/css/all.min.css")}}" rel="stylesheet">

	<!-- Custom Font Icons -->
	<link href="{{asset("vendor/icomoon/css/iconfont.min.css")}}" rel="stylesheet">

	<!-- Vendor CSS -->
	<link href="{{asset("vendor/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet">
	<link href="{{asset("vendor/animate/css/animate.min.css")}}" rel="stylesheet">
	<link href="{{asset("vendor/dmenu/css/menu.css")}}" rel="stylesheet">
	<link href="{{asset("vendor/hamburgers/css/hamburgers.min.css")}}" rel="stylesheet">
	<link href="{{asset("vendor/mmenu/css/mmenu.min.css")}}" rel="stylesheet">
	<link href="{{asset("vendor/range-slider/css/ion.rangeSlider.css")}}" rel="stylesheet">
	<link href="{{asset("vendor/magnific-popup/css/magnific-popup.css")}}" rel="stylesheet">
	<!-- <link href="vendor/float-labels/css/float-labels.min.css" rel="stylesheet"> -->

	<!-- Main CSS -->
	<link href="{{ asset("css/style.css") }}" rel="stylesheet">

</head>

<body>

	<!-- Preloader -->
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>
	<!-- Preloader End -->

	<!-- Page -->
	<div id="page">
		<!-- Header -->
		<header class="main-header sticky">
			<a href="#menu" class="btn-mobile">
				<div class="hamburger hamburger--spin" id="hamburger">
					<div class="hamburger-box">
						<div class="hamburger-inner"></div>
					</div>
				</div>
			</a>

			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-6">
						<div id="logo">
							<h1><a href="#" title="Dimaluxury"><span><b><strong>Dima</strong></b></span>LuxuryH</a></h1>
						</div>
					</div>
					<div class="col-lg-9 col-6">
						<!-- Menu -->
						<nav id="menu" class="main-menu">
							<ul>
								<li><span><a href="#">Home</a></span></li>
								<li><span><a href="#">Faq</a></span></li>
								<li><span><a href="#">Contacts</a></span></li>
							</ul>
						</nav>
						<!-- Menu End -->
					</div>
				</div>
			</div>
		</header>
		<!-- Header End -->

        @yield('content')
		<!-- Main End -->

		<!-- Footer -->
		<footer class="main-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<h5 class="footer-heading">Menu Links</h5>
						<ul class="list-unstyled nav-links">
							<li><i class="fas fa-angle-right"></i> <a href="#" class="footer-link">Home</a></li>
							<li><i class="fas fa-angle-right"></i> <a href="#" class="footer-link">FAQ</a></li>
							<li><i class="fas fa-angle-right"></i> <a href="#" class="footer-link">Contacts</a></li>
						</ul>
					</div>
					<div class="col-md-4">
						<h5 class="footer-heading">Contacts</h5>
						<ul class="list-unstyled contact-links">
							<li><i class="icon icon-map-marker"></i><a href="https://goo.gl/maps/vKgGyZe2JSRLDnYH6" class="footer-link" target="_blank">Address: We every where on the internet</a>
							</li>
							<li><i class="icon icon-envelope3"></i><a href="mailto:dimaluxuryh@gmail.com" class="footer-link">Mail: dimaluxuryh@gmail.com</a></li>
							<li><i class="icon icon-phone2"></i><a href="tel:+2349121459935" class="footer-link">Phone: +2349121459935</a></li>
						</ul>
					</div>
					<div class="col-md-2">
						<h5 class="footer-heading">Follow Us</h5>
						<ul class="list-unstyled social-links">
							<li><a href="https://www.facebook.com/dimaluxuryh/" class="social-link" target="_blank"><i class="icon icon-facebook"></i></a></li>
							<li><a href="https://www.instagram.com/dimaluxuryh" class="social-link" target="_blank"><i class="icon icon-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-8">
						<ul id="subFooterLinks">
							<li><a href="https://gygital.com" target="_blank">With <i class="fa fa-heart pulse"></i> by Gygital</a></li>
							<li><a href="#" target="_blank">Terms and conditions</a></li>
						</ul>
					</div>
					<div class="col-md-4">
						<div id="copy">© 2021 DIMALUXURYH</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- Footer End -->
	</div>
	<!-- Page End -->

	<!-- Back to top button -->
	<div id="toTop"><i class="fa fa-chevron-up"></i></div>

	<!-- Vendor Javascript Files -->
	<script src="{{asset("vendor/jquery/jquery.min.js")}}"></script>
	<script src="{{asset("vendor/bootstrap/js/bootstrap.min.js")}}"></script>
	<script src="{{asset("vendor/easing/js/easing.min.js")}}"></script>
	<script src="{{asset("vendor/theia-sticky-sidebar/js/theia-sticky-sidebar.min.js")}}"></script>
	<script src="{{asset("vendor/mmenu/js/mmenu.min.js")}}"></script>
	<script src="{{asset("vendor/magnific-popup/js/jquery.magnific-popup.min.js")}}"></script>

	<!-- Main Javascript File -->
	<script src="{{asset("js/scripts.js")}}"></script>

</body>

</html>
