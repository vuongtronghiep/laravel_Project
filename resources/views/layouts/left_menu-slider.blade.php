<div class="slider-and-category">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3">
			<!-- SAID-BAR START -->
				<div class="side-bar"> 
					<h2><i class="fa fa-align-justify"></i>DANH MỤC</h2>
					<nav>
						<ul>
							@foreach($parent_cate as $prc)
								@if($prc['parent_id'] == 0)
									<li>
										<a href="{!! url('the-loai/'.$prc["id"].'/'.$prc["alias"]) !!}"><span><i class="fa fa-male"></i></span> {!! $prc["category_name"]!!}<span class="right-icon"><i class="fa fa-arrow-circle-o-right"></i></span></a>
										<div class="category-mega-menu">
											<span class="menu-text">
												<?php subMenu($parent_cate, $prc['id']); ?>
											</span>
											<span>
												<img src="{{ asset('public/back-end/img/mens.jpg')}}" alt="Mens" />
											</span>
										</div>
									</li>
								@endif
							@endforeach
						</ul>
					</nav>
				</div>
				<!-- SAID-BAR END -->
			</div>			
			<!--SLIDER-->
				<div class="col-lg-9 col-md-9">
			<!-- SLIDER_AREA START-->
				<div class="slider">
					<div class="fullwidthbanner-container" >
						<div class="fullwidthbanner2">
							<ul>
								<!-- SLIDER_LAYOUT ONE START-->
								<li data-transition="random" data-slotamount="7" data-masterspeed="1000">
									<img src="{{ asset('public/back-end/img/slider/slider.jpg')}}" alt="slide" >
									<div class="tp-caption large_black sfr"
										data-x="140"
										data-y="100"
										data-speed="1100"
										data-start="1500"
										data-easing="easeInOutBack"											
										style="font-size: 18px; font-weight: 400; text-transform: normal; color: #ffaa31;font-family: Playfair Display;font-style:italic">
											Sale up to 50% off
									</div>
									<div class="tp-caption large_black sfr"
										data-x="170"
										data-y="120"
										data-speed="1100"
										data-start="1500"
										data-easing="easeInOutBack"											
										style="font-size: 18px; font-weight: bold; text-transform: uppercase; color: #FFF;font-family: Montserrat;">
											<img src="{{ asset('public/back-end/img/slider/slider-border.jpg')}}" alt="" />
									</div>
									<div class="tp-caption large_black sfr"
										data-x="70"
										data-y="140"
										data-speed="1100"
										data-start="2000"
										data-easing="easeInOutBack"
											style="font-family: Open Sans; font-size: 54px; font-weight: 700;text-transform: uppercase; color: #fff;text-align:center;line-height:60px">
											handBags <br />For men
									</div>
									<div class="tp-caption large_black sfr"
										data-x="170"
										data-y="260"
										data-speed="1100"
										data-start="2300"
										data-easing="easeInOutBack"											
										style="font-size: 18px; font-weight: bold; text-transform: uppercase; color: #FFF;font-family: Montserrat;">
											<img src="{{ asset('public/back-end/img/slider/slider-border.jpg')}}" alt="" />
									</div>
									<div class="tp-caption large_black sfr"
									data-x="30"
									data-y="300" 
									data-speed="1100"
									data-start="2700"
									data-easing="easeInOutBack"
										style="font-family: Open Sans; font-size: 14px; font-weight: 300; color: #FFF;line-height:25px;text-transform: normal;text-align:center">
										Fusce ac consectetur neque, nec pharetra dolor. Aenean metus <br /> mauris, facilisis vel leo non, ornare pretium eros.
									</div>
									<div class="tp-caption lfb carousel-caption-inner"
									data-x="150"
									data-y="370"
									data-speed="1300"
									data-start="3000"
									data-easing="easeInOutBack" 
										style="font-family: Montserrat; font-size: 12px; font-weight: bold; text-transform: uppercase; color: #F3F3F3;">
										<a href="#" class="s-btn" style="background: none;color: #fff;display: block;padding: 12px 28px;border:2px solid #fff">shop now</a>
									</div>
								</li>
								<!-- SLIDER_LAYOUT ONE END-->
								<!-- SLIDER_LAYOUT TWO START-->
								<li data-transition="random" data-slotamount="7" data-masterspeed="1000">
									<img src="{{ asset('public/back-end/img/slider/slider.jpg')}}" alt="slide" >
									<div class="tp-caption large_black sfr"
										data-x="140"
										data-y="100"
										data-speed="1100"
										data-start="1500"
										data-easing="easeInOutBack"											
										style="font-size: 18px; font-weight: 400; text-transform: normal; color: #ffaa31;font-family: Playfair Display;font-style:italic">
											Sale up to 50% off
									</div>
									<div class="tp-caption large_black sfr"
										data-x="170"
										data-y="120"
										data-speed="1100"
										data-start="1500"
										data-easing="easeInOutBack"											
										style="font-size: 18px; font-weight: bold; text-transform: uppercase; color: #FFF;font-family: Montserrat;">
											<img src="{{ asset('public/back-end/img/slider/slider-border.jpg')}}" alt="" />
									</div>
									<div class="tp-caption large_black sfr"
										data-x="70"
										data-y="140"
										data-speed="1100"
										data-start="2000"
										data-easing="easeInOutBack"
											style="font-family: Open Sans; font-size: 54px; font-weight: 700;text-transform: uppercase; color: #fff;text-align:center;line-height:60px">
											handBags <br />For men
									</div>
									<div class="tp-caption large_black sfr"
										data-x="170"
										data-y="260"
										data-speed="1100"
										data-start="2300"
										data-easing="easeInOutBack"											
										style="font-size: 18px; font-weight: bold; text-transform: uppercase; color: #FFF;font-family: Montserrat;">
											<img src="{{ asset('public/back-end/img/slider/slider-border.jpg')}}" alt="" />
									</div>
									<div class="tp-caption large_black sfr"
									data-x="30"
									data-y="300" 
									data-speed="1100"
									data-start="2700"
									data-easing="easeInOutBack"
										style="font-family: Open Sans; font-size: 14px; font-weight: 300; color: #FFF;line-height:25px;text-transform: normal;text-align:center">
										Fusce ac consectetur neque, nec pharetra dolor. Aenean metus <br /> mauris, facilisis vel leo non, ornare pretium eros.
									</div>
									<div class="tp-caption lfb carousel-caption-inner"
									data-x="150"
									data-y="370"
									data-speed="1300"
									data-start="3000"
									data-easing="easeInOutBack" 
										style="font-family: Montserrat; font-size: 12px; font-weight: bold; text-transform: uppercase; color: #F3F3F3;">
										<a href="#" class="s-btn" style="background: none;color: #fff;display: block;padding: 12px 28px;border:2px solid #fff">shop now</a>
									</div>
								</li>
								<!-- SLIDER_LAYOUT TWO END-->
							</ul>
						</div>
					</div>
				</div>
				<!-- SLIDER_AREA END-->
			</div>					
		</div>
			<!--END SLIDER-->
	</div>
</div>
