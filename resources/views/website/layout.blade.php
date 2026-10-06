<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>@yield('title')</title>
	<!-- Stylesheets -->
	<link href="{{ asset('web_assets/css/bootstrap.css') }}" rel="stylesheet">
	<link href="{{ asset('web_assets/css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('web_assets/css/responsive.css') }}" rel="stylesheet">

	{{-- <link href="../css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
	<link href="../css2-1?family=Be+Vietnam+Pro:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<link href="../css2-2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<link href="../css2-3?family=Inter:wght@100;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> --}}

	<link rel="shortcut icon" href="{{ asset('web_assets/images/favicon.png') }}" type="image/x-icon">
	<link rel="icon" href="{{ asset('web_assets/images/favicon.png') }}" type="image/x-icon">

	<!-- Responsive -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>
<body>

<div class="cursor"></div>

<div class="page-wrapper">

	<!-- Preloader -->
	<div class="loader-wrap">
		<div class="preloader">
			<div class="preloader-close">x</div>
			<div id="handle-preloader" class="handle-preloader">
				<div class="animation-preloader">
					<div class="spinner"></div>
					<!-- <div class="txt-loading">
						<span data-text-preloader="I" class="letters-loading">
							J
						</span>
						<span data-text-preloader="N" class="letters-loading">
							N
						</span>
						<span data-text-preloader="D" class="letters-loading">
							D
						</span>
						<span data-text-preloader="U" class="letters-loading">
							U
						</span>
						<span data-text-preloader="S" class="letters-loading">
							S
						</span>
						<span data-text-preloader="T" class="letters-loading">
							T
						</span><span data-text-preloader="O" class="letters-loading">
							O
						</span>
					</div> -->
				</div>  
			</div>
		</div>
	</div>
	<!-- Preloader End -->
 	
	<!-- Vertical Lines Start -->
	<div class="vertical-lines-wrapper">
        <div class="vertical-lines">
			<div class="vertical-effect"></div>
			<div class="vertical-effect"></div>
			<div class="vertical-effect"></div>
			<div class="vertical-effect"></div>
			<div class="vertical-effect"></div>
			<div class="vertical-effect"></div>
		</div>
	</div>
	<!-- End Vertical Lines Start -->
	
	<!-- scrollToTop start -->
	<div class="progress-wrap active-progress">
		<svg class="progress-circle svg-content" width="100%" height="100%" viewbox="-1 -1 102 102">
		<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919px, 307.919px; stroke-dashoffset: 228.265px;"></path>
		</svg>
	</div>
	<!-- scrollToTop end -->
	
 	<!-- Main Header-->
    	@include('website.header')
    <!-- End Main Header -->
	
         @yield('content')
	
	<!-- Footer Style Two -->
	@include('website.footer')
	
</div>
<!--End pagewrapper-->

<!-- Search Popup -->
<div class="search-popup">
	<button class="close-search style-two"><span class="fa fa-remove"></span></button>
	<button class="close-search"><span class="fa fa-arrow-up"></span></button>
	<form method="post" action="#">
		<div class="form-group">
			<input type="search" name="search-field" value="" placeholder="Search Here" required="">
			<button type="submit"><i class="fa fa-search"></i></button>
		</div>
	</form>
</div>
<!-- End Header Search -->

<script src="{{ asset('web_assets/js/jquery.js') }}"></script>
<script src="{{ asset('web_assets/js/popper.min.js') }}"></script>
<script src="{{ asset('web_assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('web_assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script src="{{ asset('web_assets/js/magnific-popup.min.js') }}"></script>
<script src="{{ asset('web_assets/js/appear.js') }}"></script>
<script src="{{ asset('web_assets/js/parallax.min.js') }}"></script>
<script src="{{ asset('web_assets/js/tilt.jquery.min.js') }}"></script>
<script src="{{ asset('web_assets/js/jquery.paroller.min.js') }}"></script>
<script src="{{ asset('web_assets/js/owl.js') }}"></script>
<script src="{{ asset('web_assets/js/wow.js') }}"></script>
<script src="{{ asset('web_assets/js/odometer.js') }}"></script>
<script src="{{ asset('web_assets/js/backToTop.js') }}"></script>
<script src="{{ asset('web_assets/js/jquery-ui.js') }}"></script>
<script src="{{ asset('web_assets/js/cursor-script.js') }}"></script>
<script src="{{ asset('web_assets/js/script.js') }}"></script>


</body>
</html>



