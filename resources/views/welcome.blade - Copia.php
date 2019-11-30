<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cardápio</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

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

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
	
  <!-- Animate.css -->
  <link rel="stylesheet" href="{{ URL::asset('assets/css/animate.css') }}">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="{{ URL::asset('assets/css/icomoon.css') }}">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.css') }}">
  <!-- Owl Carousel -->
  <link rel="stylesheet" href="{{ URL::asset('assets/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/owl.theme.default.min.css') }}">
  <!-- Magnific Popup -->
  <link rel="stylesheet" href="{{ URL::asset('assets/css/magnific-popup.css') }}">
  <!-- Flexslider  -->
  <link rel="stylesheet" href="{{ URL::asset('assets/css/flexslider.css') }}">
  <!-- Flaticons  -->
  <link rel="stylesheet" href="{{ URL::asset('assets/fonts/flaticon/font/flaticon.css') }}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap-datepicker.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">

	<!-- Modernizr JS --> 
	<script src="{{ URL::asset('assets/js/modernizr-2.6.2.min.js') }}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<nav id="colorlib-main-nav" role="navigation">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle active"><i></i></a>
    <div class="row">
      <div class="col-md-12 text-center">
      <div class="flex-center position-ref full-height">
        <ul>
        @if (Route::has('login'))
            <div class="top-right links">
                @if (Auth::check())
                <li>  <a href="{{ url('/home') }}">Home</a></li>
                @else
                <li> <a href="{{ url('/login') }}">Login</a></li>
                <li>  <a href="{{ url('/register') }}">Register</a></li>
                @endif
            </div>
        @endif
				</ul>
        </div>
    </div>
	</nav>
	<div id="colorlib-page">
		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="colorlib-navbar-brand">
							<a class="colorlib-logo" href="index.html"><i class="flaticon-cutlery"></i><span>Food</span><span>Book</span></a>
						</div>
						<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
					</div>
				</div>
			</div>
		</header>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(http://anniewin.com/wp-content/uploads/2016/02/Blog-02.jpg);" data-stellar-background-ratio="0.5">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<div class="desc">
				   						<span class="icon"><i class="flaticon-cutlery"></i></span>
					   					<h1 style="">Seu Melhor WEB Cardápio</h1>
                       <p><span></span> <span>BEM VINDO(A)</span></p>
                       <!--<button type="button" class="btn btn-secondary btnentrar">ENTRAR</button>
                       <button type="button" class="btn btn-secondary btnregister">REGISTRAR</button>-->
					   					<div class="desc2"></div>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

		<div class="colorlib-intro">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6 text-center">
						<div class="intro animate-box">
							<span class="icon">
								<i class="icon-map4"></i>
							</span>
							<h2>Endereço</h2>
							<p>Rua Alfredo Frederico colin, 998 Taquara RS </p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 text-center">
						<div class="intro animate-box">
							<span class="icon">
								<i class="icon-clock4"></i>
							</span>
							<h2>Horáio de Funcionamento</h2>
							<p>Segunda - Sabado</p>
							<span>8h - 17h</span>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 text-center">
						<div class="intro animate-box">
							<span class="icon">
								<i class="icon-mobile2"></i>
							</span>
							<h2>Fone</h2>
							<p>+ 001 234 567</p>
							<p>+ 001 234 567</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 text-center">
						<div class="intro animate-box">
							<span class="icon">
								<i class="icon-envelope"></i>
							</span>
							<h2>Email</h2>
							<p><a href="#">info@domain.com</a><br><a href="#">luto@email.com</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

  <!-- jQuery -->
	<script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
  <!-- jQuery Easing -->
	<script src="{{ URL::asset('assets/js/jquery.easing.1.3.js') }}"></script>
  <!-- Bootstrap -->
	<script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
	<!-- Waypoints -->
	<script src="{{ URL::asset('assets/js/jquery.waypoints.min.js') }}"></script>
	<!-- Parallax -->
	<script src="{{ URL::asset('assets/js/jquery.stellar.min.js') }}"></script>
  <!-- Owl Carousel -->
	<script src="{{ URL::asset('assets/js/owl.carousel.min.js') }}"></script>
	<!-- Magnific Popup -->
  <script src="{{ URL::asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ URL::asset('assets/js/magnific-popup-options.js') }}"></script>
	<!-- Flexslider -->
	<script src="{{ URL::asset('assets/js/jquery.flexslider-min.js') }}"></script>
	<!-- Date Picker -->
	<script src="{{ URL::asset('assets/js/bootstrap-datepicker.js') }}"></script>
	<!-- Main JS (Do not remove) -->
	<script src="{{ URL::asset('assets/js/main.js') }}"></script>
	</body>
</html>

