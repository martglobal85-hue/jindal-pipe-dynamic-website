<footer class="main-footer" style="background-image:url('{{ asset('web_assets/images/background/pattern-12.png') }}')">
		<div class="auto-container">
			<!-- Widgets Section -->
			<div class="widgets-section">
				<div class="row clearfix">
					
					<!-- Big Column -->
					<div class="big-column col-lg-6 col-md-12 col-sm-12">
						<div class="row clearfix">
							
							<!-- Footer Column -->
							<div class="footer-column col-lg-6 col-md-6 col-sm-12">
								<div class="footer-widget logo-widget">
									<div class="logo">
										<a href="index.php"><img src="{{ $contact->image ?  asset($contact->image) : '' }}" alt=""></a>
									</div>
									<div class="text">{{ $contact->footertext ?? '' }}</div>
									{{-- <a href="#" class="theme-btn about-btn">About us</a> --}}
								</div>
							</div>
							
							<!-- Footer Column -->
							<div class="footer-column col-lg-6 col-md-6 col-sm-12">
								<!-- <div class="footer-widget newsletter-widget">
									<h4>Quick Links</h4>
									<div class="text">Subscribe our newsletter to get our latest update & news</div> -->
									
									<!-- Email Box -->
									<!-- <div class="email-box">
										<form method="post" action="contact.html">
											<div class="form-group">
												<input type="email" name="search-field" value="" placeholder="Your mail address" required="">
												<button type="submit"><span class="icon flaticon-send"></span></button>
											</div>
										</form>
									</div> -->
									
									<!-- Social Box -->
									<!-- <ul class="social-box">
										<li><a href="#" class="fa fa-facebook-f"></a></li>
										<li><a href="#" class="fa fa-twitter"></a></li>
										<li><a href="#" class="fa fa-dribbble"></a></li>
										<li><a href="#" class="fa fa-behance"></a></li>
									</ul> -->
									<!-- End Social Box -->
									
								<!-- </div> -->


								<div class="footer-widget contact-widget" style="padding-left: 70px;">
									<h4>Quick Links</h4>
									<ul class="contact-list">
										<li><span class="icon fa fa-angle-double-left"></span> <a href="#" class="text-light">Home</a></li>
										<li><span class="icon fa fa-angle-double-left"></span> 
											<a href="#"class="text-light">About Us</a>
										</li>
										<li><span class="icon fa fa-angle-double-left"></span> <a href="#"class="text-light">Quality</a></li>
										<li><span class="icon fa fa-angle-double-left"></span> 
											<a href="#"class="text-light">Application</a>
										</li>
										<li><span class="icon fa fa-angle-double-left"></span> <a href="#"class="text-light">Technical</a></li>
										<li><span class="icon fa fa-angle-double-left"></span> 
											<a href="#"class="text-light">Contact Us</a>
										</li>
									</ul>

								</div>
							</div>
						
							
						</div>
					</div>
					
					<!-- Big Column -->
					<div class="big-column col-lg-6 col-md-12 col-sm-12">
						<div class="row clearfix">
							
							<!-- Footer Column -->
							<div class="footer-column col-lg-6 col-md-6 col-sm-12">
								<div class="footer-widget contact-widget">
									<h4>Official info:</h4>
									<ul class="contact-list">
										<li><span class="icon fa fa-phone"></span> {{ $contact->address ?? '' }}</li>
										<li><span class="icon fa fa-envelope"></span> 
											{{ $contact->mobile ?? '' }}</li>
									</ul>
									{{-- <div class="timing">
										<strong>Open Hours: </strong>
										Mon - Sat: 8 am - 5 pm, <br> Sunday: CLOSED
									</div> --}}
								</div>
							</div>
							
							<!-- Footer Column -->
							<div class="footer-column col-lg-6 col-md-6 col-sm-12">
								<div class="footer-widget instagram-widget">
									<h4>Our Gallery</h4>
									<div class="widget-content">
										<div class="images-outer clearfix">
											<!--Image Box-->
											@foreach($categories->take(3) as $category)
												<figure class="image-box"><a class="lightbox-image" href="{{ $category->image ? asset($category->image) : '' }}"><img src="{{ $category->image ? asset($category->image) : '' }}" alt=""></a></figure>
											@endforeach
											
										</div>
										<!-- Social Box -->
											<ul class="social-box">
												<li><a href="#" class="fa fa-facebook-f"></a></li>
												<li><a href="#" class="fa fa-twitter"></a></li>
												<li><a href="#" class="fa fa-dribbble"></a></li>
												<li><a href="#" class="fa fa-behance"></a></li>
											</ul>
										<!-- End Social Box -->
									</div>
								</div>
							</div>
							
						</div>
					</div>
					
				</div>
			</div>
			
			<div class="footer-bottom">
				<div class="copyright">&copy; Jindal Steel & Pipes © Copyright 2026. All Rights Reserved. Designed By <a href="https://mart2Global.com/" target="_blank">Mart2Global.com </a></div>
			</div>
			
		</div>
	</footer>