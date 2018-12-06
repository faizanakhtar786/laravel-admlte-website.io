<!DOCTYPE html>
<html lang="en">
<head>
<title>@yield("title") </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="@yield('meta_keyword')" />
<meta name="description" content="@yield('meta_description')" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
		
	<!-- css files -->
	<link href="{{ url('user/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
	<link href="{{ url('user/css/font-awesome.css') }}" rel="stylesheet"> 
		<!-- Testimonials-slider-css-files -->
	<link rel="stylesheet" href="{{ url('user/css/owl.carousel.css')}}" type="text/css" media="all">
	<link href="{{ url('user/css/owl.theme.css')}}" rel="stylesheet">
	<!-- //Testimonials-slider-css-files -->

	<!-- about flexslider  stylesheet-->
	<link rel="stylesheet" href="{{ url('user/css/flexslider.css')}}" type="text/css" media="screen" />
	<!-- //about flexslider  stylesheet -->

	<link href="{{ url('user/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
	<!-- css files -->
@yield("css")
	<!--fonts-->
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<!--//fonts-->

</head>