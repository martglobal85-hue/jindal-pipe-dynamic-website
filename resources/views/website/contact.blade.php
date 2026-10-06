@extends('website.layout')
@section('title','Contact')

@section('content')


    <section class="page-title" style="background-image: url('{{ asset('web_assets/images/background/9.jpg') }}')">
        <div class="auto-container">
			<ul class="bread-crumb clearfix">
				<li><a href="index.php">Home</a></li>
				<li>Contact </li>
			</ul>
			<h2>Contact </h2>
        </div>
    </section>
    <!-- End Page Title -->



	<!-- Contact Page Section -->
	<section class="contact-page-section">
		<div class="auto-container">
			<!-- Sec Title Three -->
			<div class="sec-title-three centered">
				<h2> Contact Us </h2>
			</div>
			
			<div class="row clearfix">
				<!-- Location Block -->
				<div class="location-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft text-center" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="content">
							<span class="icon flaticon-message"></span>
							<strong> Email Address </strong>
							Sent mail asap anytime
						</div>
						<a href="mailto:{{ $contact->email ?? '' }}" class="text-secondary">{{ $contact->email ?? '' }}</a>
					</div>
				</div>
				
				<!-- Location Block -->
				<div class="location-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft text-center" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="content">
							<span class="icon flaticon-call"></span>
							<strong>Phone Number</strong>
							call us asap anytime
						</div>
						<a href="tel:+91{{ $contact->mobile ?? '' }}" class="text-secondary">{{ $contact->mobile ?? '' }}</a>
					</div>
				</div>
				
				<!-- Location Block -->
				<div class="location-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="content">
							<span class="icon flaticon-home"></span>
							<strong>Office Address</strong>
							Sent mail asap anytime
						</div>
						<p class="text-secondary">{{ $contact->address ?? '' }}</p>
					</div>
				</div>
				
			</div>
			
		</div>
	</section>
	<!-- End Location Section -->
	
	<!-- Map Column -->
	<section class="map-section">
		<div class="container-fluid p-0">
			<div class="inner-container">
				<!-- Map Outer -->
				<div class="map-outer">
					<iframe src="{{ $contact->map ?? '' }}" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>
		</div>
	</section>
	<!-- End Map Column -->
	
	<!-- Contact Form Section -->
    <div class="contact-form-section">
		<div class="pattern-layer" style="background-image:url('{{ asset('web_assets/images/background/pattern-25.png') }}')"></div>
    	<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title alternate centered">
				<div class="title">Submit Question</div>
				<h2>Needs Help? Let’s Get in Touch</h2>
			</div>
			<div class="inner-container">
				
				<!-- Contact Form -->
				<div class="contact-form">
					
					<!-- Contact Form -->
					<form method="post" action="sendemail.php" id="contact-form">
						<div class="row clearfix">
							
							<div class="col-lg-6 col-md-6 col-sm-12 form-group">
								<input type="text" name="username" placeholder="Name" required="">
							</div>
							
							<div class="col-lg-6 col-md-6 col-sm-12 form-group">
								<input type="email" name="email" placeholder="Your Email" required="">
							</div>
							
							<div class="col-lg-6 col-md-6 col-sm-12 form-group">
								<input type="text" name="phone" placeholder="Your Phone" required="">
							</div>
							
							<div class="col-lg-6 col-md-6 col-sm-12 form-group">
								<input type="text" name="subject" placeholder="Your Subject" required="">
							</div>
							
							<div class="col-lg-12 col-md-12 col-sm-12 form-group">
								<textarea class="" name="message" placeholder="Message"></textarea>
							</div>
							
							<div class="col-lg-12 col-md-12 col-sm-12 form-group">
								<button class="theme-btn btn-style-eight clearfix">
									<span class="btn-wrap">
										<span class="text-one">Send Message</span>
										<span class="text-two">Send Message</span>
									</span>
								</button>
							</div>
							
						</div>
					</form>
						
				</div>
				<!--End Contact Form -->
				
			</div>
		</div>
	</div>
	<!-- End Contact Form Section -->
	

@endsection