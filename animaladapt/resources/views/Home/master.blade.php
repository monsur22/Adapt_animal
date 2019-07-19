	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="Monsur Ahmed">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Animal Shelter</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="{{asset('public/home')}}/css/linearicons.css">
			<link rel="stylesheet" href="{{asset('public/home')}}/css/font-awesome.min.css">
			<link rel="stylesheet" href="{{asset('public/home')}}/css/bootstrap.css">
			<link rel="stylesheet" href="{{asset('public/home')}}/css/magnific-popup.css">
			<link rel="stylesheet" href="{{asset('public/home')}}/css/nice-select.css">							
			<link rel="stylesheet" href="{{asset('public/home')}}/css/animate.min.css">
			<link rel="stylesheet" href="{{asset('public/home')}}/css/owl.carousel.css">
			<link rel="stylesheet" href="{{asset('public/home')}}/css/main.css">
		</head>
		<body>
			{{-- header area start --}}
			@include('Home.includes.header')
			{{-- header area end --}}

						<!-- start banner Area -->
			{{-- home content start --}}
			@yield('maincontent')
			{{-- home content end --}}
			<!-- End calltoaction Area -->
			
			<!-- start footer Area -->		
            {{-- footer satart --}}
            @include('Home.includes.footer')

			{{-- footer end --}}
			<!-- End footer Area -->	

			<script src="{{asset('public/home')}}/js/vendor/jquery-2.2.4.min.js"></script>
			<script src="{{asset('public/home')}}/https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="{{asset('public/home')}}/js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="{{asset('public/home')}}/js/easing.min.js"></script>			
			<script src="{{asset('public/home')}}/js/hoverIntent.js"></script>
			<script src="{{asset('public/home')}}/js/superfish.min.js"></script>	
			<script src="{{asset('public/home')}}/js/jquery.ajaxchimp.min.js"></script>
			<script src="{{asset('public/home')}}/js/jquery.magnific-popup.min.js"></script>	
			<script src="{{asset('public/home')}}/js/owl.carousel.min.js"></script>						
			<script src="{{asset('public/home')}}/js/jquery.nice-select.min.js"></script>							
			<script src="{{asset('public/home')}}/js/mail-script.js"></script>	
			<script src="{{asset('public/home')}}/js/main.js"></script>	
		</body>
	</html>