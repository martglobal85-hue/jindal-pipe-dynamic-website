<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Jindal SS, MS, CS, GI Fittings MFG, Stockist and Supplier in Gujarat Indian</title>
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
	
	<!-- Main Slider Section -->
    <section class="main-slider">
		<div class="main-slider-carousel owl-theme owl-carousel">
		
			<!-- Slide 01 -->
            @foreach($banners as $banner)
			<div class="slide">
                 @if($banner->image)
				<div class="image-layer" style="background-image:url('{{ asset($banner->image) }}')"></div>
				<div class="pattern-layer" style="background-image:url('{{ asset('web_assets/images/main-slider/pattern-1.png') }}')"></div>
				<!-- <div class="pattern-layer-two" style="background-image:url(images/main-slider/pattern-2.png)"></div> -->
				<div class="auto-container">
					<!-- Content Column -->
					<!-- <div class="content-column">
						<div class="inner-column">
							<h1>INDUSTRIAL VALVES MANUFACTURERS</h1>
							<div class="text">We are a leading manufacturer of high-quality industrial manual valves, including Ball Valves, Butterfly Valves, Gate Valves, Globe Valves, Safety Valves, and Check Valves, designed and manufactured in compliance with industry standards.</div>
							<div class="button-box">
								<a class="btn-style-one theme-btn" href="#"><span class="txt">Our Services <i class="arrow fa fa-angle-right"></i></span></a>
							</div>
						</div>
					</div> -->
				</div>
			</div>
			<!-- End Slide 01 -->
            @endif
            @endforeach
            </section>
    

			
			
			
		</div>
    </section>
    <!-- End Main Slider Section -->
	
	<!-- Service Section -->
    <!-- <section class="service-section">
		<div class="auto-container">
			<div class="inner-container">
				<div class="row clearfix">
					<div class="service-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="shape-one" style="background-image:url(images/icons/shape-1.png)"></div>
							<div class="shape-two" style="background-image:url(images/icons/shape-2.png)"></div>
							<div class="image-layer" style="background-image:url(images/resource/service.jpg)"></div>
							<div class="icon flaticon-factory"></div>
							<h5><a class="#" href="#">Our Company</a></h5>
							<div class="text">Manufacturing industry became a key sector of production and labour into the European and North America.</div>
							<a class="read-more" href="#">Read More <span class="flaticon-right-arrow"></span></a>
						</div>
					</div>
					
					<div class="service-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="shape-one" style="background-image:url(images/icons/shape-1.png)"></div>
							<div class="shape-two" style="background-image:url(images/icons/shape-2.png)"></div>
							<div class="image-layer" style="background-image:url(images/resource/service.jpg)"></div>
							<div class="icon flaticon-fuel-pump"></div>
							<h5><a class="#" href="#">Our Vision</a></h5>
							<div class="text">Manufacturing industry became a key sector of production and labour into the European and North America.</div>
							<a class="read-more" href="#">Read More <span class="flaticon-right-arrow"></span></a>
						</div>
					</div>
					
					<div class="service-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="shape-one" style="background-image:url(images/icons/shape-1.png)"></div>
							<div class="shape-two" style="background-image:url(images/icons/shape-2.png)"></div>
							<div class="image-layer" style="background-image:url(images/resource/service.jpg)"></div>
							<div class="icon flaticon-test"></div>
							<h5><a class="#" href="#">Our Mission</a></h5>
							<div class="text">Manufacturing industry became a key sector of production and labour into the European and North America.</div>
							<a class="read-more" href="#">Read More <span class="flaticon-right-arrow"></span></a>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section> -->
	<!-- End Service Section -->
	

	<!-- Welcome Section -->
	<section class="welcome-section">
		<div class="pattern-layer" style="background-image:url(images/background/pattern-25.png)"></div>
		<div class="pattern-layer-two" style="background-image:url(images/icons/shape-3.png)"></div>
		<div class="auto-container">
			<div class="row clearfix">
				<!-- Image Column -->
				<div class="image-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="image wow rollIn" data-wow-delay="0ms" data-wow-duration="1500ms">
							<img src="{{ $about->image ? asset($about->image) : '' }}" alt="">
						</div>
						<div class="color-layer"></div>
						<div class="big-text">about</div>
					</div>
				</div>
				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- Sec Title Three -->
						<div class="sec-title-three">
							<div class="title">{{ $about->subtitle ?? '' }}</div>
							<h2>{{ $about->title ?? '' }}</h2>
							<div class="text">
                             {{  $about->text ?? '' }}
                            </div>
						</div>
						<!-- <div class="row clearfix">
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
						</div> -->
						<!-- Quality Box -->
						<div class="quality-box">
							<div class="quality-inner">
								<span class="icon flaticon-trophy-2"></span>
								<h4>Best Quality</h4>
								<div class="text">Delivering premium-quality industrial products with unmatched durability and precision. </div>
							</div>
						</div>
						
						<!-- Btn Box -->
						<div class="btn-box">
							<a href="about.php" class="theme-btn btn-style-six clearfix">
								<span class="btn-wrap">
									<span class="text-one">Explore More</span>
									<span class="text-two">Explore More</span>
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


	<!-- About Section -->
	<section class="">
		<div class="auto-container">
			<div class="row clearfix">
			
				<!-- <div class="content-column col-lg-7 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="sec-title">
							<div class="big-text">Assessments</div>
							<div class="title">About our Company</div>
							<h2>Welcome to Jindal Steel & Pipe Fittings </h2>
							<div class="text">Jindal Steel & Pipe Fittings is a leading manufacturer, stockist, and supplier of SS, MS, CS, and GI pipe fittings in Gujarat, India. We provide high-quality fittings for various industrial and commercial applications across the Indian market. Our company is located in well developed industrial vicinity in Ankleshwar, Gujarat offering large inventory of Steel & Pipe Fittings to the industry. Today the company has developed a niche space for itself with the availability and quality of products. From a single nut and bolt to pipes, tubes and valves the company has helped its customers realize their performance qualification.
                        </div>
						</div>
						<div class="row clearfix">
							<div class="feature-block col-lg-6 col-md-6 col-sm-12">
								<div class="inner-box">
									<span class="icon flaticon-engineer"></span>
									<h5>Strengthening society</h5>
								</div>
							</div>
							<div class="feature-block col-lg-6 col-md-6 col-sm-12">
								<div class="inner-box">
									<span class="icon flaticon-customer-support"></span>
									<h5>Driving the economy</h5>
								</div>
							</div>
						</div>
						<div class="lower-box clearfix">
							<div class="button-box">
								<a class="btn-style-one theme-btn" href="#"><span class="txt">About us <i class="arrow fa fa-angle-right"></i></span></a>
							</div>
							<div class="phone-box">
								<div class="box-inner">
									<span class="icon flaticon-telephone"></span>
									Call us for help
									<strong>(+91) 97125 37663 </strong>
								</div>
							</div>
						</div>
					</div>
				</div> -->
				
				<div class="image-column col-lg-12 col-md-12 col-sm-12 sec-title-three">
					<h2 class="text-center mb-4">Make In India Project</h2>
					<div class="inner-column">
						<!-- <div class="counter-box">
							<div class="row clearfix">

								<div class="counter-column col-lg-6 col-md-6 col-sm-12">
									<h2><span class="odometer" data-count="3010"></span>+</h2>
									<div class="counter-text">Satisfied Clients</div>
								</div>

								<div class="counter-column col-lg-6 col-md-6 col-sm-12">
									<h2><span class="odometer" data-count="528"></span>+</h2>
									<div class="counter-text">Active Projects</div>
								</div>
							</div>
						</div> -->
                        @if(!empty($clients) && count($clients) > 0)
                            <div class="row g-3 align-items-center">
                                @foreach($clients as $client)
                                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                                        <div class="client-logo-box"
                                            style="
                                                width:100%;
                                                height:100px;
                                                display:flex;
                                                align-items:center;
                                                justify-content:center;
                                                padding:12px;
                                                background:#fff;
                                                border:1px solid #eee;
                                                border-radius:8px;
                                                overflow:hidden;
                                            ">

                                            @if(!empty($client->image))
                                                <img src="{{ asset($client->image) }}"
                                                    alt="{{ $client->title ?? 'Client' }}"
                                                    style="
                                                        max-width:100%;
                                                        max-height:75px;
                                                        width:auto;
                                                        height:auto;
                                                        object-fit:contain;
                                                        display:block;
                                                    ">
                                            @endif

                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End About Section -->

	<!-- About Section -->
	<!-- <section class="about-section">
		<div class="auto-container">
			<div class="row clearfix">
			
				<div class="content-column col-lg-7 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="sec-title">
							<div class="big-text">Assessments</div>
							<div class="title">About our Company</div>
							<h2>Welcome to Jindal Steel & Pipe Fittings </h2>
							<div class="text">Jindal Steel & Pipe Fittings is a leading manufacturer, stockist, and supplier of SS, MS, CS, and GI pipe fittings in Gujarat, India. We provide high-quality fittings for various industrial and commercial applications across the Indian market. Our company is located in well developed industrial vicinity in Ankleshwar, Gujarat offering large inventory of Steel & Pipe Fittings to the industry. Today the company has developed a niche space for itself with the availability and quality of products. From a single nut and bolt to pipes, tubes and valves the company has helped its customers realize their performance qualification.
                        </div>
						</div>
						<div class="row clearfix">
							<div class="feature-block col-lg-6 col-md-6 col-sm-12">
								<div class="inner-box">
									<span class="icon flaticon-engineer"></span>
									<h5>Strengthening society</h5>
								</div>
							</div>
							<div class="feature-block col-lg-6 col-md-6 col-sm-12">
								<div class="inner-box">
									<span class="icon flaticon-customer-support"></span>
									<h5>Driving the economy</h5>
								</div>
							</div>
						</div>
						<div class="lower-box clearfix">
							<div class="button-box">
								<a class="btn-style-one theme-btn" href="#"><span class="txt">About us <i class="arrow fa fa-angle-right"></i></span></a>
							</div>
							<div class="phone-box">
								<div class="box-inner">
									<span class="icon flaticon-telephone"></span>
									Call us for help
									<strong>(+91) 97125 37663 </strong>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="image-column col-lg-5 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="counter-box">
							<div class="row clearfix">

								<div class="counter-column col-lg-6 col-md-6 col-sm-12">
									<h2><span class="odometer" data-count="3010"></span>+</h2>
									<div class="counter-text">Satisfied Clients</div>
								</div>

								<div class="counter-column col-lg-6 col-md-6 col-sm-12">
									<h2><span class="odometer" data-count="528"></span>+</h2>
									<div class="counter-text">Active Projects</div>
								</div>
							</div>
						</div>
						<div class="image">
							<img src="images/main-slider/1.jpg" alt="">
							<div class="circle-layer" style="background-image:url(images/resource/about-circle.png)"></div>
							<span class="gear-icon-one flaticon-gear"></span>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section> -->
	<!-- End About Section -->
	
	<!-- Service Section -->
	<section class="service-section-two">
		<div class="image-layer" style="background-image:url(images/background/1.jpg)"></div>
		<div class="pattern-layer-one" style="background-image:url(images/background/pattern-1.png)"></div>
		<div class="pattern-layer-two" style="background-image:url(images/background/pattern-2.png)"></div>
		<div class="pattern-layer-three" style="background-image:url(images/background/pattern-3.png)"></div>
		<div class="auto-container">
			<div class="sec-title centered">
				<div class="big-text">Services</div>
				<div class="title">Our Awesome Products</div>
				<h2>Trusted Steel Solutions for Every Industry</h2>
			</div>
			<div class="three-item-carousel owl-carousel owl-theme">
		
				
				<!-- Service Block Two -->
                @foreach($categories as $category)
				<div class="service-block-two style-two">
					<div class="inner-box">
						<div class="image">
							<img src="{{ $category->image ? asset($category->image) : '' }}" alt="{{ $category->title }}">
							<div class="overlay-box">
								<span class="icon flaticon-factory"></span>
								<div class="content">
									<h5>{{ $category->title }} </h5>
									<!-- <div class="title">Services</div> -->
								</div>
							</div>
							<div class="overlay-box-two">
								<span class="icon-two flaticon-factory"></span>
								<div class="overlay-inner">
									<div class="overlay-content">
										<h5><a href="#">{{ $category->title }}</a></h5>
										<!-- <div class="text">The Industrial Revolution, which took place from the 18th to 19th centuries, was a period during predomic.</div> -->
										<a href="#" class="read-more">Read more <span class="flaticon-next-3"></span></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
                @endforeach
			</div>
		</div>
	</section>
	<!-- End Service Section -->


	
	

	<!-- Counter Section -->
	<section class="counter-section">
		<div class="auto-container">
			<!-- Sec Title Three -->
			<div class="sec-title-three centered">
				<div class="title">Achivement</div>
				<h2>Our Achivements</h2>
			</div>
			<div class="row clearfix">
			
				<!-- Counter Column -->
				<div class="counter-column col-lg-4 col-md-6 col-sm-12">
					<div class="inner-column wow rollIn" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="icon-box">
							<span class="icon flaticon-factory"></span>
						</div>
						<h3><span class="odometer" data-count="1500"></span>+</h3>
						<div class="counter-text">Chain of Factories</div>
					</div>
				</div>
				
				<!-- Counter Column -->
				<div class="counter-column col-lg-4 col-md-6 col-sm-12">
					<div class="inner-column wow rollIn" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="icon-box">
							<span class="icon flaticon-fluid-mechanics"></span>
						</div>
						<h3><span class="odometer" data-count="1.5"></span>K</h3>
						<div class="counter-text">Engineering Project</div>
					</div>
				</div>
				
				<!-- Counter Column -->
				<div class="counter-column col-lg-4 col-md-6 col-sm-12">
					<div class="inner-column wow rollIn" data-wow-delay="0ms" data-wow-duration="1500ms">
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

	<!-- Service Section Four -->
	<section class="service-section-four">
		<div class="auto-container">
			<!-- Sec Title Three -->
			<div class="sec-title-three">
				<div class="clearfix">
					<div class="pull-left">
						<div class="title">The Best Industry services</div>
						<h2>Jindal Industry Provide The Best Services <br> For Your Business</h2>
					</div>
					<!-- <div class="pull-right">
						<div class="text">Progressively maintain extensive infomediaries via extensible niches. <br> Capitalize on low hanging fruit to Override the digital divide with additional <br> click throughs from fruit to identify a ballpark value added.</div>
					</div> -->
				</div>
			</div>
			
			<div class="row clearfix">
				
				<!-- Service Block Four -->
				<div class="service-block-four col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image-layer" style="background-image:url('{{ asset('web_assets/images/resource/service-4.png') }}')"></div>
						<div class="post-number">01</div>
						<div class="icon-box">
							<span class="icon flaticon-plumbing"></span>
						</div>
						<h5><a href="oil-gas.html">Humility</a></h5>
						<div class="text">
                          We believe in treating our partners, clients, and team members with respect, humility, and professionalism in every interaction.</div>
						<a class="arrow flaticon-right-arrow-1" href="oil-gas.html"></a>
					</div>
				</div>
				
				<!-- Service Block Four -->
				<div class="service-block-four col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="150ms" data-wow-duration="1500ms">
						<div class="image-layer" style="background-image:url('{{ asset('web_assets/images/resource/service-4.png') }}')"></div>
						<div class="post-number">02</div>
						<div class="icon-box">
							<span class="icon flaticon-drop-of-liquid"></span>
						</div>
						<h5><a href="oil-gas.html">Honesty</a></h5>
						<div class="text">
                         We maintain honesty, transparency, and accuracy in all our dealings, ensuring strong and trustworthy relationships with our clients.</div>
						<a class="arrow flaticon-right-arrow-1" href="oil-gas.html"></a>
					</div>
				</div>
				
				<!-- Service Block Four -->
				<div class="service-block-four col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="image-layer" style="background-image:url('{{ asset('web_assets/images/resource/service-4.png') }}')"></div>
						<div class="post-number">03</div>
						<div class="icon-box">
							<span class="icon flaticon-test"></span>
						</div>
						<h5><a href="oil-gas.html">Integrity</a></h5>
						<div class="text">
                          Over the years, we have built a strong reputation for integrity, reliability, and customer trust through our consistent quality service.
                         </div>
						<a class="arrow flaticon-right-arrow-1" href="oil-gas.html"></a>
					</div>
				</div>
				
				<!-- Service Block Four -->
				<div class="service-block-four col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="450ms" data-wow-duration="1500ms">
						<div class="image-layer" style="background-image:url('{{  asset('web_assets/images/resource/service-4.png') }}')"></div>
						<div class="post-number">04</div>
						<div class="icon-box">
							<span class="icon flaticon-plant"></span>
						</div>
						<h5><a href="oil-gas.html">Quality Work</a></h5>
						<div class="text">
                          We deliver every project with professionalism and high-quality materials while ensuring dedicated customer support and easy accessibility.
                        </div>
						<a class="arrow flaticon-right-arrow-1" href="oil-gas.html"></a>
					</div>
				</div>
				
			</div>
			
			<!-- Btn Box -->
			<div class="btn-box text-center">
				<a href="#" class="theme-btn btn-style-six clearfix">
					<span class="btn-wrap">
						<span class="text-one">More Service</span>
						<span class="text-two">More Service</span>
					</span>
					<span class="plus flaticon-plus"></span>
				</a>
			</div>
			
		</div>
	</section>
	<!-- End Service Section Four -->
	
	<!-- Products Section -->
	<!-- <section class="products-section">
		<div class="pattern-layer" style="background-image:url(images/background/pattern-5.png)"></div>
		<div class="pattern-layer-two" style="background-image:url(images/background/pattern-6.png)"></div>
		<div class="pattern-layer-three" style="background-image:url(images/background/pattern-7.png)"></div>
		<div class="pattern-layer-four" style="background-image:url(images/background/pattern-8.png)"></div>
		<div class="pattern-layer-five" style="background-image:url(images/background/pattern-11.png)"></div>
		<div class="auto-container">
			<div class="sec-title centered">
				<div class="big-text">Products</div>
				<div class="title">Populat products</div>
				<h2>We have the best quality <br> industrial products.</h2>
			</div>
			<div class="products-carousel owl-carousel owl-theme">
			

				<div class="product-block">
					<div class="inner-box">
						<div class="color-layer"></div>
						<div class="image-box">
							<div class="image">
								<a href="#"><img src="images/resource/products/1.png" alt=""></a>
							</div>
						</div>
						<h5><a href="#">Impact Drill Machine <br> Yato Brand</a></h5>
						<div class="category">Drill Machine</div>
						<div class="lower-box clearfix">
							<div class="pull-left">
								<div class="price">$10.00</div>
							</div>
							<div class="pull-right">
								<div class="rating">
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>
						</div>
						<div class="btn-box text-center">
							<a class="read-more" href="#">Buy now <span class="flaticon-next-3"></span></a>
						</div>
					</div>
				</div>

				<div class="product-block">
					<div class="inner-box">
						<div class="color-layer"></div>
						<div class="image-box">
							<div class="image">
								<a href="#"><img src="images/resource/products/2.png" alt=""></a>
							</div>
						</div>
						<h5><a href="#">LiIon Compact Drill <br> Driver</a></h5>
						<div class="category">Drill Machine</div>
						<div class="lower-box clearfix">
							<div class="pull-left">
								<div class="price">$10.00</div>
							</div>
							<div class="pull-right">
								<div class="rating">
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>
						</div>
						<div class="btn-box text-center">
							<a class="read-more" href="#">Buy now <span class="flaticon-next-3"></span></a>
						</div>
					</div>
				</div>
				

				<div class="product-block">
					<div class="inner-box">
						<div class="color-layer"></div>
						<div class="image-box">
							<div class="image">
								<a href="#"><img src="images/resource/products/3.png" alt=""></a>
							</div>
						</div>
						<h5><a href="#">Inverter Power <br> Generator</a></h5>
						<div class="category">Drill Machine</div>
						<div class="lower-box clearfix">
							<div class="pull-left">
								<div class="price"><span>$300.00</span>$250.00</div>
							</div>
							<div class="pull-right">
								<div class="rating">
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>
						</div>
						<div class="btn-box text-center">
							<a class="read-more" href="#">Buy now <span class="flaticon-next-3"></span></a>
						</div>
					</div>
				</div>
				
				<div class="product-block">
					<div class="inner-box">
						<div class="color-layer"></div>
						<div class="image-box">
							<div class="image">
								<a href="#"><img src="images/resource/products/4.png" alt=""></a>
							</div>
						</div>
						<h5><a href="#">Compound Saw <br> Makita Brand</a></h5>
						<div class="category">Drill Machine</div>
						<div class="lower-box clearfix">
							<div class="pull-left">
								<div class="price">$20.00</div>
							</div>
							<div class="pull-right">
								<div class="rating">
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>
						</div>
						<div class="btn-box text-center">
							<a class="read-more" href="#">Buy now <span class="flaticon-next-3"></span></a>
						</div>
					</div>
				</div>
				
				<div class="product-block">
					<div class="inner-box">
						<div class="color-layer"></div>
						<div class="image-box">
							<div class="image">
								<a href="#"><img src="images/resource/products/1.png" alt=""></a>
							</div>
						</div>
						<h5><a href="#">Impact Drill Machine <br> Yato Brand</a></h5>
						<div class="category">Drill Machine</div>
						<div class="lower-box clearfix">
							<div class="pull-left">
								<div class="price">$10.00</div>
							</div>
							<div class="pull-right">
								<div class="rating">
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>
						</div>
						<div class="btn-box text-center">
							<a class="read-more" href="#">Buy now <span class="flaticon-next-3"></span></a>
						</div>
					</div>
				</div>
				
				<div class="product-block">
					<div class="inner-box">
						<div class="color-layer"></div>
						<div class="image-box">
							<div class="image">
								<a href="#"><img src="images/resource/products/2.png" alt=""></a>
							</div>
						</div>
						<h5><a href="#">LiIon Compact Drill <br> Driver</a></h5>
						<div class="category">Drill Machine</div>
						<div class="lower-box clearfix">
							<div class="pull-left">
								<div class="price">$10.00</div>
							</div>
							<div class="pull-right">
								<div class="rating">
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>
						</div>
						<div class="btn-box text-center">
							<a class="read-more" href="#">Buy now <span class="flaticon-next-3"></span></a>
						</div>
					</div>
				</div>
				

				<div class="product-block">
					<div class="inner-box">
						<div class="color-layer"></div>
						<div class="image-box">
							<div class="image">
								<a href="#"><img src="images/resource/products/3.png" alt=""></a>
							</div>
						</div>
						<h5><a href="#">Inverter Power <br> Generator</a></h5>
						<div class="category">Drill Machine</div>
						<div class="lower-box clearfix">
							<div class="pull-left">
								<div class="price"><span>$300.00</span>$250.00</div>
							</div>
							<div class="pull-right">
								<div class="rating">
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>
						</div>
						<div class="btn-box text-center">
							<a class="read-more" href="#">Buy now <span class="flaticon-next-3"></span></a>
						</div>
					</div>
				</div>
				
				<div class="product-block">
					<div class="inner-box">
						<div class="color-layer"></div>
						<div class="image-box">
							<div class="image">
								<a href="#"><img src="images/resource/products/4.png" alt=""></a>
							</div>
						</div>
						<h5><a href="#">Compound Saw <br> Makita Brand</a></h5>
						<div class="category">Drill Machine</div>
						<div class="lower-box clearfix">
							<div class="pull-left">
								<div class="price">$20.00</div>
							</div>
							<div class="pull-right">
								<div class="rating">
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>
						</div>
						<div class="btn-box text-center">
							<a class="read-more" href="#">Buy now <span class="flaticon-next-3"></span></a>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section> -->
	<!-- End Products Section -->
	
	<!-- Team Section -->
	<section class="team-section">
		<div class="auto-container">
			<div class="sec-title">
				<div class="big-text">team</div>
				<div class="title">Expert team member</div>
				<h2>Our expert team will assist.</h2>
			</div>
			<div class="team-carousel owl-carousel owl-theme">
			
				<!-- Team Block -->
				<div class="team-block">
					<div class="inner-box">
						<div class="image">
							<a href="#"><img src="images/resource/team-1.jpg" alt=""></a>
							<div class="social-box">
								<a href="#" class="fa fa-facebook"></a>
								<a href="#" class="fa fa-twitter"></a>
								<a href="#" class="fa fa-dribbble"></a>
								<a href="#" class="fa fa-behance"></a>
							</div>
						</div>
						<div class="lower-content">
							<span class="gear-icon"></span>
							<h5><a href="#">Rob Miller</a></h5>
							<div class="designation">Electrical Engineer</div>
							<div class="middle-content">
								<ul class="list">
									<li><span class="icon flaticon-call-1"></span>+91 120 6777777</li>
									<li><span class="icon flaticon-mail"></span>envato@gmail.com</li>
								</ul>
							</div>
							<div class="btn-box text-center">
								<a class="read-more" href="#">Read More <span class="flaticon-next-3"></span></a>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Team Block -->
				<div class="team-block">
					<div class="inner-box">
						<div class="image">
							<a href="#"><img src="images/resource/team-2.jpg" alt=""></a>
							<div class="social-box">
								<a href="#" class="fa fa-facebook"></a>
								<a href="#" class="fa fa-twitter"></a>
								<a href="#" class="fa fa-dribbble"></a>
								<a href="#" class="fa fa-behance"></a>
							</div>
						</div>
						<div class="lower-content">
							<span class="gear-icon"></span>
							<h5><a href="#">Alfread Bonaport</a></h5>
							<div class="designation">Electrical Engineer</div>
							<div class="middle-content">
								<ul class="list">
									<li><span class="icon flaticon-call-1"></span>+91 120 6777777</li>
									<li><span class="icon flaticon-mail"></span>envato@gmail.com</li>
								</ul>
							</div>
							<div class="btn-box text-center">
								<a class="read-more" href="#">Read More <span class="flaticon-next-3"></span></a>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Team Block -->
				<div class="team-block">
					<div class="inner-box">
						<div class="image">
							<a href="#"><img src="images/resource/team-3.jpg" alt=""></a>
							<div class="social-box">
								<a href="#" class="fa fa-facebook"></a>
								<a href="#" class="fa fa-twitter"></a>
								<a href="#" class="fa fa-dribbble"></a>
								<a href="#" class="fa fa-behance"></a>
							</div>
						</div>
						<div class="lower-content">
							<span class="gear-icon"></span>
							<h5><a href="#">Alfread Bonaport</a></h5>
							<div class="designation">Electrical Engineer</div>
							<div class="middle-content">
								<ul class="list">
									<li><span class="icon flaticon-call-1"></span>+91 120 6777777</li>
									<li><span class="icon flaticon-mail"></span>envato@gmail.com</li>
								</ul>
							</div>
							<div class="btn-box text-center">
								<a class="read-more" href="#">Read More <span class="flaticon-next-3"></span></a>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Team Block -->
				<div class="team-block">
					<div class="inner-box">
						<div class="image">
							<a href="#"><img src="images/resource/team-4.jpg" alt=""></a>
							<div class="social-box">
								<a href="#" class="fa fa-facebook"></a>
								<a href="#" class="fa fa-twitter"></a>
								<a href="#" class="fa fa-dribbble"></a>
								<a href="#" class="fa fa-behance"></a>
							</div>
						</div>
						<div class="lower-content">
							<span class="gear-icon"></span>
							<h5><a href="#">Alfread Bonaport</a></h5>
							<div class="designation">Electrical Engineer</div>
							<div class="middle-content">
								<ul class="list">
									<li><span class="icon flaticon-call-1"></span>+91 120 6777777</li>
									<li><span class="icon flaticon-mail"></span>envato@gmail.com</li>
								</ul>
							</div>
							<div class="btn-box text-center">
								<a class="read-more" href="#">Read More <span class="flaticon-next-3"></span></a>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Team Block -->
				<div class="team-block">
					<div class="inner-box">
						<div class="image">
							<a href="#"><img src="images/resource/team-1.jpg" alt=""></a>
							<div class="social-box">
								<a href="#" class="fa fa-facebook"></a>
								<a href="#" class="fa fa-twitter"></a>
								<a href="#" class="fa fa-dribbble"></a>
								<a href="#" class="fa fa-behance"></a>
							</div>
						</div>
						<div class="lower-content">
							<span class="gear-icon"></span>
							<h5><a href="#">Rob Miller</a></h5>
							<div class="designation">Electrical Engineer</div>
							<div class="middle-content">
								<ul class="list">
									<li><span class="icon flaticon-call-1"></span>+91 120 6777777</li>
									<li><span class="icon flaticon-mail"></span>envato@gmail.com</li>
								</ul>
							</div>
							<div class="btn-box text-center">
								<a class="read-more" href="#">Read More <span class="flaticon-next-3"></span></a>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Team Block -->
				<div class="team-block">
					<div class="inner-box">
						<div class="image">
							<a href="#"><img src="images/resource/team-2.jpg" alt=""></a>
							<div class="social-box">
								<a href="#" class="fa fa-facebook"></a>
								<a href="#" class="fa fa-twitter"></a>
								<a href="#" class="fa fa-dribbble"></a>
								<a href="#" class="fa fa-behance"></a>
							</div>
						</div>
						<div class="lower-content">
							<span class="gear-icon"></span>
							<h5><a href="#">Alfread Bonaport</a></h5>
							<div class="designation">Electrical Engineer</div>
							<div class="middle-content">
								<ul class="list">
									<li><span class="icon flaticon-call-1"></span>+91 120 6777777</li>
									<li><span class="icon flaticon-mail"></span>envato@gmail.com</li>
								</ul>
							</div>
							<div class="btn-box text-center">
								<a class="read-more" href="#">Read More <span class="flaticon-next-3"></span></a>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Team Block -->
				<div class="team-block">
					<div class="inner-box">
						<div class="image">
							<a href="#"><img src="images/resource/team-3.jpg" alt=""></a>
							<div class="social-box">
								<a href="#" class="fa fa-facebook"></a>
								<a href="#" class="fa fa-twitter"></a>
								<a href="#" class="fa fa-dribbble"></a>
								<a href="#" class="fa fa-behance"></a>
							</div>
						</div>
						<div class="lower-content">
							<span class="gear-icon"></span>
							<h5><a href="#">Alfread Bonaport</a></h5>
							<div class="designation">Electrical Engineer</div>
							<div class="middle-content">
								<ul class="list">
									<li><span class="icon flaticon-call-1"></span>+91 120 6777777</li>
									<li><span class="icon flaticon-mail"></span>envato@gmail.com</li>
								</ul>
							</div>
							<div class="btn-box text-center">
								<a class="read-more" href="#">Read More <span class="flaticon-next-3"></span></a>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Team Block -->
				<div class="team-block">
					<div class="inner-box">
						<div class="image">
							<a href="#"><img src="images/resource/team-4.jpg" alt=""></a>
							<div class="social-box">
								<a href="#" class="fa fa-facebook"></a>
								<a href="#" class="fa fa-twitter"></a>
								<a href="#" class="fa fa-dribbble"></a>
								<a href="#" class="fa fa-behance"></a>
							</div>
						</div>
						<div class="lower-content">
							<span class="gear-icon"></span>
							<h5><a href="#">Alfread Bonaport</a></h5>
							<div class="designation">Electrical Engineer</div>
							<div class="middle-content">
								<ul class="list">
									<li><span class="icon flaticon-call-1"></span>+91 120 6777777</li>
									<li><span class="icon flaticon-mail"></span>envato@gmail.com</li>
								</ul>
							</div>
							<div class="btn-box text-center">
								<a class="read-more" href="#">Read More <span class="flaticon-next-3"></span></a>
							</div>
						</div>
					</div>
				</div>
			
			</div>
		</div>
	</section>
	<!-- End Team Section -->
	
	<!-- CTA Section -->
	<section class="cta-section" style="background-image:url('{{ asset('web_assets/images/main-slider/img/1.png') }}')">
		<div class="gradient-layer"></div>
		<div class="pattern-layer" style="background-image:url('{{ asset('web_assets/images/background/pattern-9.png') }}')"></div>
		<div class="pattern-layer-two" style="background-image:url('{{ asset('web_assets/images/background/pattern-10.png') }}')"></div>
		<div class="auto-container">
			<!-- <div class="icon">
				<img src="images/icons/cta-logo.png" alt="">
			</div> -->
			<h2>Contact to Expertise in the <br> manufacturing industry</h2>
			<div class="button-box text-center">
				<a class="btn-style-one theme-btn" href="#"><span class="txt">Contact us <i class="arrow fa fa-angle-right"></i></span></a>
			</div>
		</div>
	</section>
	<!-- End CTA Section -->
	
	<!-- News Section -->
	<section class="news-section">
		<div class="pattern-layer" style="background-image:url('{{ asset('web_assets/images/background/pattern-5.png') }}')"></div>
		<div class="pattern-layer-two" style="background-image:url('{{ asset('web_assets/images/background/pattern-6.png') }}')"></div>
		<div class="pattern-layer-three" style="background-image:url('{{ asset('web_assets/images/background/pattern-7.png') }}')"></div>
		<div class="auto-container">
			<div class="sec-title">
				<div class="big-text">Blog</div>
				<div class="title">Latest Blog</div>
				<h2>Learn something from blog.</h2>
			</div>
			<div class="three-item-carousel owl-carousel owl-theme">
				
				<!-- Blog Detail -->
                @foreach($blogs as $blog)
                    <div class="news-block">
                        <div class="inner-box">
                            <div class="image">
                                <div class="category">Industrial</div>
                                <img src="{{ $blog->image ? asset($blog->image) : '' }}" alt="{{ $blog->title  }}">
                                <div class="overlay-box">
                                    <div class="content">
                                        <ul class="post-meta">
                                            <li><span class="icon flaticon-user-2"></span>by <span class="theme-color"></span>Admin</li>
                                            <li><span class="icon flaticon-calendar-2"></span>{{ $blog->created_at->format('F d, Y') }}<span class="theme-color"></span></li>
                                        </ul>
                                        <h5>{{ $blog->title ?? '' }}</h5>
                                    </div>
                                </div>
                                <div class="overlay-box-two">
                                    <div class="image-layer" style="background-image:url('{{ asset($blog->image) }}')"></div>
                                    <span class="post-date">18th <br> MAY’21</span>
                                    <div class="overlay-inner">
                                        <div class="overlay-content">
                                            <h5><a href="#">{{ $blog->title ?? '' }}</a></h5>
                                            <div class="text">{!!  $blog->text !!}</div>
                                            <a href="#" class="read-more">Read more <span class="flaticon-next-3"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
			
			</div>
		</div>
	</section>
	<!-- End News Section -->
	
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