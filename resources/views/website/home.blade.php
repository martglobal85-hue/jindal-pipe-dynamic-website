@extends('website.layout')
@section('title','Index Page')

@section('content')
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
	
	
	

	<!-- Welcome Section -->
	<section class="welcome-section">
		<div class="pattern-layer" style="background-image:url('{{ asset('web_assets/images/background/pattern-25.png') }}')"></div>
		<div class="pattern-layer-two" style="background-image:url('{{ asset('web_assets/images/icons/shape-3.png') }}')"></div>
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

	
	
	<!-- Service Section -->
	<section class="service-section-two">
		<div class="image-layer" style="background-image:url('{{  asset('web_assets/images/background/1.jpg') }}')"></div>
		<div class="pattern-layer-one" style="background-image:url('{{ asset('web_assets/images/background/pattern-1.png') }}')"></div>
		<div class="pattern-layer-two" style="background-image:url('{{ asset('web_assets/images/background/pattern-2.png') }}')"></div>
		<div class="pattern-layer-three" style="background-image:url('{{ asset('web_assets/images/background/pattern-3.png') }}')"></div>
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
@endsection