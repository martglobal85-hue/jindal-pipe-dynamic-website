@extends('website.layout')
@section('title','Contact')

@section('content')


<section class="page-title" style="background-image: url('{{ asset('web_assets/images/background/9.jpg') }}')">
    <div class="auto-container">
        <ul class="bread-crumb clearfix">
            <li><a href="index.php">Home</a></li>
            <li>About </li>
        </ul>
        <h2>About </h2>
    </div>
</section>
<!-- End Page Title -->


<!-- Counter Section -->
	<section class="counter-section style-two">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title alternate centered">
				<div class="title">Achivement</div>
				<h2>Our Achivements</h2>
			</div>
			<div class="row clearfix">
			
				<!-- Counter Column -->
				<div class="counter-column col-lg-4 col-md-6 col-sm-12">
					<div class="inner-column">
						<div class="icon-box">
							<span class="icon flaticon-factory"></span>
						</div>
						<h3><span class="odometer" data-count="1500"></span>+</h3>
						<div class="counter-text">Chain of Factories</div>
					</div>
				</div>
				
				<!-- Counter Column -->
				<div class="counter-column col-lg-4 col-md-6 col-sm-12">
					<div class="inner-column">
						<div class="icon-box">
							<span class="icon flaticon-fluid-mechanics"></span>
						</div>
						<h3><span class="odometer" data-count="1.5"></span>K</h3>
						<div class="counter-text">Engineering Project</div>
					</div>
				</div>
				
				<!-- Counter Column -->
				<div class="counter-column col-lg-4 col-md-6 col-sm-12">
					<div class="inner-column">
						<div class="icon-box">
							<span class="icon flaticon-world-1"></span>
						</div>
						<h3><span class="odometer" data-count="266"></span>K</h3>
						<div class="counter-text">Worldwide Partner</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Counter Section -->


    <!-- Welcome Section / Style Two -->
	<section class="welcome-section style-two">
		<div class="pattern-layer" style="background-image:url('{{ asset('web_assets/images/background/pattern-25.png') }}')"></div>
		<div class="pattern-layer-two" style="background-image:url('{{ asset('web_assets/images/icons/shape-3.png') }}')"></div>
		<div class="auto-container">
			<div class="row clearfix">
				<!-- Image Column -->
				<div class="image-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="image wow rollIn" data-wow-delay="0ms" data-wow-duration="1500ms" style="border: none; border-radius: 15px;">
							<!-- <img src="images/resource/welcome.png" alt=""> -->
							<img src="{{ asset('web_assets/images/img/img/5.jpeg') }}" alt="">
						</div>
						<!-- <div class="color-layer"></div>
						<div class="big-text">about</div> -->
					</div>
				</div>
				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- Sec Title Three -->
						<div class="sec-title-three">
							<div class="title">{{ $pageabout->subtitle ?? '' }}</div>
							<h2>{{ $pageabout->subtitle ? $pageabout->subtitle  : 'SS Pipe Dealers & Stockist in Bharuch, Gujarat' }} </h2>
							<div class="text">{{ $pageabout->text ?? '' }}</div>
						</div>
						<div class="row clearfix">
							<div class="col-lg-6 col-md-6 col-sm-12">
								<ul class="list">
									<li>Our Work Growth</li>
									<li>1500 Employed</li>
								</ul>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12">
								<ul class="list">
									<li>Our Employee Growth</li>
									<li>Service Management</li>
								</ul>
							</div>
						</div>
						<!-- Quality Box -->
						<!-- <div class="quality-box">
							<div class="quality-inner">
								<span class="icon flaticon-trophy-2"></span>
								<h4>Best Quality</h4>
								<div class="text">Eiusmod tempor incididunt ut labore et dolore magna aliqua. ra maecenas accumsan lacus vel facilisis.</div>
							</div>
						</div> -->
						
						<!-- Btn Box -->
						<div class="btn-box">
							<a href="{{ route('website.contact') }}" class="theme-btn btn-style-six clearfix">
								<span class="btn-wrap">
									<span class="text-one">Contact Us</span>
									<span class="text-two">Contact Us</span>
								</span>
								<span class="plus flaticon-plus"></span>
							</a>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Welcome Section -->


	
	
	

@endsection