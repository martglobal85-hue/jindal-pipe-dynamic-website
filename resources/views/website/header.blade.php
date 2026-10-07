<header class="main-header">
    	
		<!-- Header Top -->
        <div class="header-top">
            <div class="auto-container">
                <div class="clearfix">
					<!-- Top Left -->
					<div class="top-left">
						<div class="text">Welcome to our <a href="#">Industo</a> Company!</div>
					</div>
					
					<!-- Top Right -->
                    <div class="top-right pull-right">
						<div class="clock">We'are Open: Mon - Sat 8:00 - 18:00</div>
						<div class="social-box">
							<a href="#" class="fa fa-facebook"></a>
							<a href="#" class="fa fa-twitter"></a>
							<a href="#" class="fa fa-dribbble"></a>
							<a href="#" class="fa fa-behance"></a>
						</div>
                    </div>
					
                </div>
            </div>
        </div>
		
		<!-- Header Upper -->
        <div class="header-upper">
            <div class="auto-container">
                <div class="clearfix">
                    
                    <div class="pull-left logo-box">
                        <div class="logo"><a href="index.php"><img src="{{ $contact->image ? asset($contact->image) : '' }}" alt="" title=""></a></div>
                    </div>
                    
                    <div class="pull-right upper-right clearfix">
                        
                        <!--Info Box-->
                        <div class="upper-column info-box">
                            <div class="icon-box"><span class="flaticon-telephone"></span></div>
                            <ul>
                                <li><strong>Call Us for help!</strong></li>
                                <li>+ (91) 97125 37663</li>
                            </ul>
                        </div>
                        
                        <!--Info Box-->
                        <div class="upper-column info-box">
                            <div class="icon-box"><span class="flaticon-placeholder"></span></div>
                            <ul>
                                <li><strong>Location</strong></li>
                                <li>B-15,City Center Complex, Gujarat</li>
                            </ul>
                        </div>
						
						<!--Info Box-->
                        <div class="upper-column info-box">
                            <div class="icon-box"><span class="flaticon-message"></span></div>
                            <ul>
                                <li><strong>Mail Us</strong></li>
                                <li>jindalpipefitting@gmail.com</li>
                            </ul>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- End Header Upper -->
		
		<!-- Header Upper -->
        <div class="header-lower">
        	<div class="auto-container">
				<div class="inner-container clearfix">
            	
					<div class="nav-outer">
						<!-- Mobile Navigation Toggler -->
						<div class="mobile-nav-toggler"><span class="icon flaticon-menu-3"></span></div>
						<!-- Main Menu -->
						<nav class="main-menu navbar-expand-md">
							<div class="navbar-header">
								<!-- Toggle Button -->    	
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							
							<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
								<ul class="navigation clearfix">
									<li class=""><a href="{{ route('website.home') }}">Home</a>
										<!-- <ul>
											<li><a href="index.html">Homepage One</a></li>
											<li><a href="index-2.html">Homepage Two</a></li>
											<li><a href="index-3.html">Homepage Three</a></li>
											<li class="dropdown"><a href="#">Header Styles</a>
												<ul>
													<li><a href="index.html">Header Style One</a></li>
													<li><a href="index-2.html">Header Style Two</a></li>
													<li><a href="index-3.html">Header Style Three</a></li>
												</ul>
											</li>
										</ul> -->
									</li>
									<li class=""><a href="{{ route('website.about') }}">About</a>
										<!-- <ul>
											<li><a href="about.html">About us</a></li>
											<li><a href="faq.html">Faq's</a></li>
											<li><a href="team.html">Team</a></li>
											<li><a href="team-detail.html">Team Detail</a></li>
										</ul> -->
									</li>
									<li class="dropdown"><a href="#">Products</a>
										<ul>
											@foreach($categories as $category)
											<li class="{{ $category->products->count() ? 'dropdown' : '' }}"><a href="#">{{ $category->title }}</a>
												@if($category->products->count())
													<ul>
														@foreach($category->products as $product)
															<li><a href="{{ route('website.product',$product) }}">{{ $product->title ?? '' }}</a></li>
														@endforeach
													</ul>
												@endif
											</li>
											@endforeach
										</ul>
									</li>
									<li class=""><a href="{{ route('website.product-quality') }}">Quality</a>
										<!-- <ul>
											<li><a href="project.html">Projects</a></li>
											<li><a href="project-detail.html">Projects Detail</a></li>
										</ul> -->
									</li>
									<li class=""><a href="{{ route('website.application') }}">Application</a>
										<!-- <ul>
											<li><a href="blog.html">Our Blog</a></li>
											<li><a href="blog-detail.html">Blog Detail</a></li>
											<li><a href="not-found.html">Not Found</a></li>
										</ul> -->
									</li>
									<li class="dropdown"><a href="#">Technical</a>
										<ul>
											<li><a href="blog.html">Our Blog</a></li>
											<li><a href="{{ route('website.weight-formula') }}">Weight calculation Formula</a></li>
										</ul> 
									</li>
									<li><a href="{{ route('website.contact') }}">Contact</a></li>
								</ul>
							</div>
						</nav>
						
						<!-- Main Menu End-->
						<div class="outer-box clearfix">
							
							<!-- Search Btn -->
							<!-- <div class="search-box-btn search-box-outer"><span class="icon flaticon-loupe"></span></div> -->
							
						</div>
					</div>
					
				</div>
            </div>
        </div>
        <!--End Header Upper-->
        
		<!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="index.php" title=""><img src="{{ $contact->image ? asset($contact->image) : '' }}" alt="" title=""></a>
                </div>
                <!--Right Col-->
                <div class="pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <!--Keep This Empty / Menu will come through Javascript-->
						
                    </nav><!-- Main Menu End-->
					
					<!-- Mobile Navigation Toggler -->
					<div class="mobile-nav-toggler"><span class="icon flaticon-menu-3"></span></div>
					
                </div>
            </div>
        </div><!-- End Sticky Menu -->
    
		<!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon fa fa-close"></span></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.php"><img src="{{ $contact->image ? asset($contact->image) : '' }}" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>
        </div><!-- End Mobile Menu -->
	
    </header>