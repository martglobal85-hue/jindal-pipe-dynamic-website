@extends('website.layout')
@section('title','Weight Formula')

@section('content')


    <section class="page-title" style="background-image: url('{{ asset('web_assets/images/background/9.jpg') }}')">
        <div class="auto-container">
			<ul class="bread-crumb clearfix">
				<li><a href="{{ route('website.home') }}">Home</a></li>
				<li>{{ $weightcalformula->title ?? '' }} </li>
			</ul>
			<h2>{{ $weightcalformula->title ?? '' }} </h2>
        </div>
    </section>
    <!-- End Page Title -->

	<!-- Sidebar Page Container -->
    <div class="sidebar-page-container">
		<div class="pattern-layer" style="background-image:url('{{ asset('web_assets/images/background/pattern-25.png') }}')"></div>
    	<div class="auto-container">
        	<div class="row clearfix">
				
				<!-- Sidebar Side -->
                <div class="sidebar-side left-sidebar col-lg-4 col-md-12 col-sm-12">
                	<aside class="sidebar sticky-top">
						
						<!-- Service Widget -->
						<div class="sidebar-widget service-widget">
							<div class="widget-content">
								<div class="sidebar-title">
									<h4>Products</h4>
								</div>
                                    <!-- <ul class="service-list">
                                        <li class="current"><a href="oil-gas.html">Oil & Gas</a></li>
                                        <li><a href="mechanical-engineering.html">Mechanical Engineering</a></li>
                                        <li><a href="chemical-research.html">Chemical Research</a></li>
                                        <li><a href="agricultural-automation.html">Agricultural Automation</a></li>
                                        <li><a href="welding-laser.html">Welding & Laser</a></li>
                                        <li><a href="construction-services.html">Construction Services</a></li>
                                        <li><a href="civil-engineering.html">Civil Engineering</a></li>
                                    </ul> -->
                                    <!-- Accordian Box -->
									<ul class="accordion-box">

										<!--Block-->
                                        @foreach($categories as $category)
										<li class="accordion block">
											<div class="acc-btn active"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>{{ $category->title ?? '' }}</div>
											<!-- <div class="acc-content current"> -->
                                            @if($category->products->count())
                                                <div class="acc-content current ">
                                                    <div class="content">
                                                        <div class="text">
                                                            <ul>
                                                                @foreach($category->products as $product)
                                                                    <li><a href="{{ route('website.product',$product) }}"><i class="fa fa-angle-double-left"></i> {{ $product->title  ?? '' }}</a></li>
                                                                @endforeach
                                                                
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
										</li>
                                        @endforeach
										
									</ul>
							</div>
						</div>						
						<!-- Download Widget -->
						<!-- <div class="sidebar-widget download-widget">
							<div class="widget-content">
								<div class="sidebar-title">
									<h4>Download Now</h4>
								</div>
								<ul class="download-list">
									<li><a href="#">Compnay Report -2020 <span class="icon flaticon-edit"></span></a></li>
									<li><a href="#">Compnay Report -2021 <span class="icon flaticon-edit"></span></a></li>
								</ul>
							</div>
						</div> -->
						
						
						
					</aside>
				</div>
				
				<!-- Content Side -->
                <div class="content-side right-sidebar col-lg-8 col-md-12 col-sm-12">
					<div class="service-detail">
						<div class="inner-box">
							
							<div class="lower-content">
								
                                <h3>{{ $weightcalformula->title ?? '' }}</h3>
								
								<p>{!! $weightcalformula->text ?? ''  !!}</p>
							</div>
     
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	
	
	
	

@endsection