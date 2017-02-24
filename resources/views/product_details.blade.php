@extends('layouts.masterDetailIndex')
@section('main')
<?php 
	$str = $product->size;
	$size = explode(',', $str);
?>
	<!-- MAINCONTAIN-AREA START-->
	<div class="maincontain-area">
		<div class="container">
			<div class="row">
				<div class="maincontain">
					<div class="col-lg-9 col-md-9">
						<!-- PRODUCT-DETAILS-AREA START-->
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<div class="category_single_list">
								<div class="category_image cate_image">
									<div class="larg_img">
										<div class="tab-content">
											<div class="tab-pane fade in active" id="image1">
												<img src="{{ asset('resources/upload/'.$product->image) }}"  class="image_detail"/>
											</div>
											<div class="tab-pane fade" id="image2">
												<img src="{{ asset('resources/upload/'.$product->image_detail1) }}" class="image_detail"/>
											</div>
											<div class="tab-pane fade" id="image3">
												<img src="{{ asset('resources/upload/'.$product->image_detail2) }}" class="image_detail"/>
											</div>
											<div class="tab-pane fade" id="image4">
												<img src="{{ asset('resources/upload/'.$product->image_detail3) }}" class="image_detail"/>
											</div>
										</div>
									</div>
									<div class="small_img">
										<ul class="nav nav-tabs">
											<li class="active">
												<a href="#image1" data-toggle="tab"><img src="{{ asset('resources/upload/'.$product->image) }}" alt="" class="image_small_detail" /></a>
											</li>
											<li>
												<a href="#image2" data-toggle="tab"><img src="{{ asset('resources/upload/'.$product->image_detail1) }}" class="image_small_detail" alt="" /></a>
											</li>
											<li>
												<a href="#image3" data-toggle="tab"><img src="{{ asset('resources/upload/'.$product->image_detail2) }}" class="image_small_detail" alt="" /></a>
											</li>
											<li>
												<a href="#image4" data-toggle="tab"><img src="{{ asset('resources/upload/'.$product->image_detail3) }}" class="image_small_detail" alt="" /></a>
											</li>
										</ul>
									</div>
								</div>
								<div class="category_text mrl15">
									<div class="off_percent">-{!! $product->sale !!} %</div>
									<div class="price_old_new">
										<p>{!! number_format(round(floor($product->afterSale),-3)) !!} vnđ</p>
										<p class="old_price"><del>{!! number_format(round(floor($product->price),-3)) !!} </del>vnđ</p>
									</div>
									<div class="category_prod_description">
										<h3>{!! $product->product_name !!}</h3>
										<p>{!! $product->detail !!}</p>
									</div>
									<div class="size_color">
										<div class="size">
											<label>Kích cỡ * &nbsp;&nbsp;&nbsp;</label>
											@foreach($size as $size1)
											<label class="checkbox-inline">
												<input type="checkbox" id="ab" name="{!! $size1 !!}" value="{!! $size1 !!}">{!! $size1 !!}
											</label>
											@endforeach
										</div>
										
									</div>
									<div class="category_prod_card_area">
										<a href="{!! url('mua-hang/'.$product->id.'/'.$product->product_name) !!}" class="cart">
											<i class="fa fa-shopping-cart"></i> Mua hàng
										</a>
										<a href="#" class="add-text-lis">
											<i class="fa fa-credit-card" aria-hidden="true"></i> Thanh toán
										</a>
										<a href="#" class="heart">
											<i class="fa fa-heart-o"> Yêu thích</i>
										</a>
									</div>
								</div>
								</div>
							</div>
						</div>
						<!-- PRODUCT-DETAILS-AREA END-->
						<!-- FEATURED-PRODUCT-AREA START-->						
					</div>
					<div class="col-lg-3 col-md-3">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-6">
								<!-- COMPARE START-->
								<div class="compare">
									<div class="news-letter">
										<h2>Compare</h2>
										<form action="#">
											<span class="input-box">
											<input type="text" name="Email" placeholder="You have no item(s) to compare"/>
											</span>
										</form>
									</div>
								</div>
								<!-- COMPARE END-->
							</div>
						<!-- OFFER_AREA START-->
							<div class="col-lg-12 col-md-12 hidden-sm">
								<!-- OFFER_AREA START-->
								<div class="offer_area">
									<div class="offer_img">
										<img src="" alt="Offer" />
										<div class="offer-text">
											<h2>Sale</h2>
											<p>up to</p>
											<h2 class="amout">30</h2>
										</div>
									</div>
								</div>
								<!-- OFFER_AREA END-->
							</div>
							<div class="col-lg-12 col-md-12 col-sm-6">
								<!-- POPULAR-TAGS START-->
								<div class="popular-tags">
									<h2 class="category-heding">Popular tags</h2>
									<div class="tags">
										<ul>
											<li><a href="#">agency</a></li>
											<li><a href="#">blog</a></li>
											<li><a href="#">business</a></li>
											<li><a href="#">clean</a></li>
											<li><a href="#">corporate</a></li>
											<li><a href="#" class="tag_active">creative</a></li>
											<li><a href="#">ecommerce</a></li>
											<li><a href="#">elegant</a></li>
											<li><a href="#">fashion</a></li>
											<li><a href="#">minimal</a></li>
										</ul>
									</div>
								</div>
								<!-- POPULAR-TAGS END-->
							</div>
						</div>
					</div>

					<div class="col-lg-9 col-md-9">
						<div class="featured-product-area">
							<h3 class="area-heading">CÓ THỂ BẠN QUAN TÂM</h3>
							<div class="featured-product-corusol">
							@foreach($relativeProduct as $item)
								<div class="col-md-4">
									<!--SINGLE-FEATURED-PRODUCT START-->
									<div class="single-featured-product">
										<div class="product_img">
											<a href="{!! url('chi-tiet/'.$item->id.'/'.$item->product_name) !!}">
												<img src="{{ asset('resources/upload/'.$item->image) }}" alt="Special" class="primary-image"/>
												<img src="{{ asset('resources/upload/'.$item->image_detail1)}}" alt="Special" class="secondary-image"/>
											</a>
											<div class="add-cart-area">
												<div class="fet-price">
													<span class="addcart-text">{!! number_format(round(floor($item->afterSale),-3)) !!}vnđ</span>
													<span class="addcart-text-del">{!! number_format(round(floor($item->price),-3)) !!} vnđ</span>
												</div>
												<div class="wish">
													<a href="#">
														<span class="cart">
															<i class="fa fa-shopping-cart"></i>
														</span>
													</a>
													<a href="#">
														<span class="heart">
															<i class="fa fa-heart-o"></i>
														</span>
													</a>
												</div>
											</div>
										</div>
										<div class="infor-text">
											<a href="product_details.html"><span>{!! $item->product_name !!}</span></a>
											<span class="star">
												<i class="fa fa-star active"></i>
												<i class="fa fa-star active"></i>
												<i class="fa fa-star active"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</span>
										</div>
									</div>
									<!--SINGLE-FEATURED-PRODUCT END-->
								</div>
							@endforeach
							</div>
						</div>
								<!--FEATURED-PRODUCT-AREA END-->
					</div>	
				</div>
			</div>
		</div>
	</div>
		<!-- MAINCONTAIN-AREA END-->
		
@endsection