@extends('layouts.masterIndex')
@section('main')
	<!-- MAINCONTAIN-AREA START-->
	<div class="maincontain-area">
		<div class="container">
			<div class="row">
				<div class="maincontain">
					<div class="col-lg-3 col-md-3">
					<div class="row">
							<div class="col-lg-12 col-md-12">
							<!-- BEST-PRODUCT START-->
								<div class="best-product">
									<h3 class="area-heading">BÁN CHẠY</h3>
									<!-- BESTSELLER-PRODUCT-ALL START-->
									<div class="best-product-all">
									<!-- SINGLE-BESTSELLER-PRODUCT START-->
										@foreach($seller as $seller)
										<div class="single-featured-product">
											<div class="product_img">
												<a href="product_details.html">
													<img src="{!! asset('resources/upload/'.$seller['image'])!!}" alt="Special" class="primary-image"/>
													<img src="{{ asset('resources/upload/'.$seller['image_detail1'])}}" alt="Special" class="secondary-image"/>
												</a>
												<div class="add-cart-area">
													<div class="fet-price">
														<span class="addcart-text">{!! number_format(round(floor($seller['afterSale']),-3)) !!}vnđ</span>
														<span class="addcart-text-del">{!! number_format(round(floor($seller['price']),-3)) !!} vnđ</span>
													</div>
													<div class="wish">
														<a class="shopping-cart" href="#">
															<i class="fa fa-shopping-cart"></i>
														</a>
														<a class="favourite" href="#">
															<i class="fa fa-heart-o"></i>
														</a>
													</div>
												</div>
											</div>
											<div class="infor-text">
												<a href="product_details.html"><span>{!! $seller['product_name'] !!}</span></a>
												<span class="star">
													<i class="fa fa-star active"></i>
													<i class="fa fa-star active"></i>
													<i class="fa fa-star active"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</span>
											</div>
										</div>
										@endforeach
										<!-- SINGLE-BESTSELLER-PRODUCT END-->
										<!-- SINGLE-BESTSELLER-PRODUCT START-->
										
										<!-- SINGLE-BESTSELLER-PRODUCT END-->
									</div>
									<!-- BESTSELLER-PRODUCT-ALL END-->
								</div>
								<!-- BEST-PRODUCT END-->
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 col-md-12">
							<!-- SPECIAL-PRODUCT START -->
								<div class="special-product">
									<h3 class="area-heading">SỐC</h3>
									<!-- SPECIAL-PRODUCT-ALL START-->
									
									<div class="special-product-all">
									<!-- SINGLE-SPECIAL-PRODUCT START-->
										@foreach($special as $spe)
										<div class="single-special-product">
												<a href="product_details.html">
													<div class="product_img">
														<img src="{{ asset('resources/upload/'. $spe['image'])}}" alt="Special" />
													</div>
												</a>
												<div id="defaultCountdown"></div>
												<div class="addtocart_area">
													<div class="fet-price">
														<span class="addcart-text">{!! number_format(round(floor($seller['afterSale']),-3)) !!}</span>
														<span class="addcart-text-del">{!! number_format(round(floor($seller['price']),-3))!!}</span>
													</div>
													<div class="wish">
														<a href="#" class="shopping-cart">
															<i class="fa fa-shopping-cart"></i>
														</a>
														<a href="#" class="favourite">
															<i class="fa fa-heart-o"></i>
														</a>
													</div>
												</div>
												<div class="infor-text">
													<a href="product_details.html"><span>{!! $spe['product_name'] !!}</span></a>
													<span class="star">
														<i class="fa fa-star active"></i>
														<i class="fa fa-star active"></i>
														<i class="fa fa-star active"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
													</span>
												</div>
											</div>
										@endforeach
										</div>
									
									<!-- SPECIAL-PRODUCT-ALL END-->
								</div>
								<!-- SPECIAL-PRODUCT END -->
							</div>
						</div>
						<!-- Special Product End -->
						<!-- OFFER_AREA START-->
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<!-- OFFER_AREA START-->
								<div class="offer_area">
									<div class="offer_img">
										<img src="{{ asset('public/back-end/img/offer-img.jpg')}}" alt="Offer" />
										<div class="offer-text">
											<h2>Sale</h2>
											<p>up to</p>
											<h2 class="amout">30</h2>
										</div>
									</div>
									<div class="news-letter">
										<h2>send newsletter</h2>
										<form action="#">
											<span class="input-box">
												<i class="fa fa-envelope"></i><input type="text" name="Email" placeholder="Email"/>
											</span>
											<input type="button" value="Send" />
										</form>
									</div>
								</div>
								<!-- OFFER_AREA END-->
							</div>
						</div>
					</div>
					<div class="col-lg-9 col-md-9">
						<!--FEATURED PRODUCT START-->
						<div class="row">
							<!--FEATURED-PRODUCT-AREA START-->
							<div class="featured-product-area">
								<h3 class="area-heading">SẢN PHẨM MỚI NHẤT</h3>
								<div class="featured-product-corusol">
								@foreach($productNew as $new)
									<div class="col-lg-4 col-md-4">
										<!--SINGLE-FEATURED-PRODUCT START-->
										
										<div class="single-featured-product">
											<div class="product_img">
												<a href="product_details.html">
													<img src="{{ asset('resources/upload/'. $new['image'])}}" alt="Special" class="primary-image"/>
													<img src="{{ asset('resources/upload/'. $new['image_detail1'])}}" alt="Special" class="secondary-image"/>
												</a>
												<a class="modal-view" href="{!! url('view/'. $new['id']) !!}" data-toggle="modal" data-target="#productModal">
													<span class="quick-view">
														<i class="fa fa-external-link"></i>Xem Luôn
													</span>
												</a>
												<div class="add-cart-area">
													<div class="fet-price">
														<span class="addcart-text">{!! number_format(round(floor($new['afterSale']),-3)) !!}</span>
														<span class="addcart-text-del">{!! number_format(round(floor($new['price']),-3)) !!}</span>
													</div>
													<div class="wish">
														<a href="#" class="shopping-cart">
															<i class="fa fa-shopping-cart"></i>
														</a>
														<a href="#" class="favourite">
															<i class="fa fa-heart-o"></i>
														</a>
													</div>
												</div>
											</div>
											<div class="infor-text">
												<a href="{{url('detail/'. $new['id'])}}"><span>{!! $new['product_name'] !!}</span></a>
												<span class="star">
													<i class="fa fa-star active"></i>
													<i class="fa fa-star active"></i>
													<i class="fa fa-star active"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i><br></br>
												</span>
											</div>
										</div>
										
										<!--SINGLE-FEATURED-PRODUCT END-->
									</div>
									@endforeach
								</div>
								<div class="featured-product-corusol">
								@foreach($productNew2 as $new)
									<div class="col-lg-4 col-md-4">
										<!--SINGLE-FEATURED-PRODUCT START-->
										
										<div class="single-featured-product">
											<div class="product_img">
												<a href="product_details.html">
													<img src="{{ asset('resources/upload/'. $new['image'])}}" alt="Special" class="primary-image"/>
													<img src="{{ asset('resources/upload/'. $new['image_detail1'])}}" alt="Special" class="secondary-image"/>
												</a>
												<a class="modal-view" href="#" data-toggle="modal" data-target="#productModal">
													<span class="quick-view">
														<i class="fa fa-external-link"></i>Xem Luôn
													</span>
												</a>
												<div class="add-cart-area">
													<div class="fet-price">
														<span class="addcart-text">{!! number_format(round(floor($new['afterSale']),-3)) !!}</span>
														<span class="addcart-text-del">{!! number_format(round(floor($new['price']),-3)) !!}</span>
													</div>
													<div class="wish">
														<a href="#" class="shopping-cart">
															<i class="fa fa-shopping-cart"></i>
														</a>
														<a href="#" class="favourite">
															<i class="fa fa-heart-o"></i>
														</a>
													</div>
												</div>
											</div>
											<div class="infor-text">
												<a href="product_details.html"><span>{!! $new['product_name'] !!}</span></a>
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
						<!--Featured Product End-->
						
						<!-- ADD-AREA START-->
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<div class="add-area">
									<div class="add-img">
										<img src="{{ asset('public/back-end/img/add_mans.jpg')}}" alt="Mans" />
									</div>
									<div class="add-discription">
										<p>Sự lựa chọn tốt nhất của bạn</p>
										<h2>Nhiều bộ sưu tập khác nhau</h2>
									</div>
								</div>
							</div>
						</div>
						<!-- ADD-AREA END-->
						<div class="row men">
							<div class="row men"></div>
						</div>
						<div class="row men">
							<div class="row men"></div>
						</div>
						<div class="row men">
							<div class="row men"></div>
						</div>
						<!-- TOP-CATEGORY-PRODUCT-AREA START-->
						<div class="row men">
							<h3 class="area-heading" style="margin-left: 10px">ĐỒ NAM</h3>
							<div class="featured-product-corusol">
								@foreach($productMan as $new)
									<div class="col-lg-4">
										<!--SINGLE-FEATURED-PRODUCT START-->
										<div class="single-featured-product">
											<div class="product_img">
												<a href="product_details.html">
													<img src="{{ asset('resources/upload/'. $new['image'])}}" alt="Special" class="primary-image"/>
													<img src="{{ asset('resources/upload/'. $new['image_detail1'])}}" alt="Special" class="secondary-image"/>
												</a>
												<a class="modal-view" href="#" data-toggle="modal" data-target="#productModal">
													<span class="quick-view">
														<i class="fa fa-external-link"></i>Xem Luôn
													</span>
												</a>
												<div class="add-cart-area">
													<div class="fet-price">
														<span class="addcart-text">{!! number_format(round(floor($new['afterSale']),-3)) !!}</span>
														<span class="addcart-text-del">{!! number_format(round(floor($new['price']),-3)) !!}</span>
													</div>
													<div class="wish">
														<a href="#" class="shopping-cart">
															<i class="fa fa-shopping-cart"></i>
														</a>
														<a href="#" class="favourite">
															<i class="fa fa-heart-o"></i>
														</a>
													</div>
												</div>
											</div>
											<div class="infor-text">
												<a href="product_details.html"><span>{!! $new['product_name'] !!}</span></a>
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
							<!-- TOP-CATEGORY-PRODUCT-AREA END-->

						<a href="{!! url('the-loai/1/do_nam') !!}" class="btn btn-success btn-block"><span class="glyphicon glyphicon-hand-right"> Xem thêm</span></a>	<br><br>
						<!-- TOP-CATEGORY-PRODUCT-AREA END-->
						<h3 class="area-heading" style="margin-left: 10px">ĐỒ NỮ</h3>
							<div class="featured-product-corusol">					
								<!-- TOP-CATEGORY-SINGLE-PRODUCT START-->
								@foreach($productWomen as $new)

								<div class="col-lg-4 col-md-4 col-sm-4">
									<div class="single-featured-product">
										<div class="product_img">
											<a href="category_grid.html">
												<img src="{{ asset('resources/upload/'.$new['image'])}}" alt="Category" class="primary-image"/>
												<img src="{{ asset('resources/upload/'.$new['image_detail1'])}}" alt="Category" class="secondary-image"/>
											</a>
											<a class="modal-view" href="#" data-toggle="modal" data-target="#productModal">
												<span class="quick-view">
													<i class="fa fa-external-link"></i>Xem Luôn
												</span>
											</a>
											<div class="add-cart-area">
												<div class="fet-price">
													<span class="addcart-text">{!! number_format(round(floor($new['afterSale']),-3)) !!}</span>
													<span class="addcart-text-del">{!! number_format(round(floor($new['price']),-3)) !!}</span>
												</div>
												<div class="wish">
													<a href="#" class="shopping-cart">
														<i class="fa fa-shopping-cart"></i>
													</a>
													<a href="#" class="favourite">
														<i class="fa fa-heart-o"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="infor-text">
											<a href="category_grid.html"><span>{!! $new['product_name'] !!}</span></a>
											<span class="star">
												<i class="fa fa-star active"></i>
												<i class="fa fa-star active"></i>
												<i class="fa fa-star active"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i><br><br>
											</span>
										</div>
									</div>
								</div>
								<!-- TOP-CATEGORY-SINGLE-PRODUCT END-->
								@endforeach

							</div>
							<!-- TOP-CATEGORY-PRODUCT-AREA END-->
						<a href="{!! url('the-loai/2/do_nu') !!}" class="btn btn-success btn-block"><span class="glyphicon glyphicon-hand-right"> Xem thêm</span></a>	<br><br>
						<h3 class="area-heading a" style="margin-left: 10px">ĐỒ BÉ TRAI</h3>
							<div class="featured-product-corusol">					
								<!-- TOP-CATEGORY-SINGLE-PRODUCT START-->
								@foreach($productBoy as $new)

								<div class="col-lg-4 col-md-4 col-sm-4">
									<div class="single-featured-product">
										<div class="product_img">
											<a href="category_grid.html">
												<img src="{{ asset('resources/upload/'.$new['image'])}}" alt="Category" class="primary-image"/>
												<img src="{{ asset('resources/upload/'.$new['image_detail1'])}}" alt="Category" class="secondary-image"/>
											</a>
											<a class="modal-view" href="#" data-toggle="modal" data-target="#productModal">
												<span class="quick-view">
													<i class="fa fa-external-link"></i>Xem Luôn
												</span>
											</a>
											<div class="add-cart-area">
												<div class="fet-price">
													<span class="addcart-text">{!! number_format(round(floor($new['afterSale']),-3)) !!}</span>
													<span class="addcart-text-del">{!! number_format(round(floor($new['price']),-3)) !!}</span>
												</div>
												<div class="wish">
													<a href="#" class="shopping-cart">
														<i class="fa fa-shopping-cart"></i>
													</a>
													<a href="#" class="favourite">
														<i class="fa fa-heart-o"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="infor-text">
											<a href="category_grid.html"><span>{!! $new['product_name'] !!}</span></a>
											<span class="star">
												<i class="fa fa-star active"></i>
												<i class="fa fa-star active"></i>
												<i class="fa fa-star active"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i><br><br>
											</span>
										</div>
									</div>
								</div>
								<!-- TOP-CATEGORY-SINGLE-PRODUCT END-->
								@endforeach
							</div>
							<!-- TOP-CATEGORY-PRODUCT-AREA END-->
						<a href="{!! url('the-loai/3/do_be_trai') !!}" class="btn btn-success btn-block"><span class="glyphicon glyphicon-hand-right"> Xem thêm</span></a>	<br><br>
						<h3 class="area-heading" style="margin-left: 10px">ĐỒ BÉ GÁI</h3>
							<div class="featured-product-corusol">					
								<!-- TOP-CATEGORY-SINGLE-PRODUCT START-->
								@foreach($productGirl as $new)

								<div class="col-lg-4 col-md-4 col-sm-4">
									<div class="single-featured-product">
										<div class="product_img">
											<a href="category_grid.html">
												<img src="{{ asset('resources/upload/'.$new['image'])}}" alt="Category" class="primary-image"/>
												<img src="{{ asset('resources/upload/'.$new['image_detail1'])}}" alt="Category" class="secondary-image"/>
											</a>
											<a class="modal-view" href="#" data-toggle="modal" data-target="#productModal">
												<span class="quick-view">
													<i class="fa fa-external-link"></i>Xem Luôn
												</span>
											</a>
											<div class="add-cart-area">
												<div class="fet-price">
													<span class="addcart-text">{!! number_format(round(floor($new['afterSale']),-3)) !!}</span>
													<span class="addcart-text-del">{!! number_format(round(floor($new['price']),-3)) !!}</span>
												</div>
												<div class="wish">
													<a href="#" class="shopping-cart">
														<i class="fa fa-shopping-cart"></i>
													</a>
													<a href="#" class="favourite">
														<i class="fa fa-heart-o"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="infor-text">
											<a href="category_grid.html"><span>{!! $new['product_name'] !!}</span></a>
											<span class="star">
												<i class="fa fa-star active"></i>
												<i class="fa fa-star active"></i>
												<i class="fa fa-star active"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i><br><br>
											</span>
										</div>
									</div>
								</div>
								<!-- TOP-CATEGORY-SINGLE-PRODUCT END-->
								@endforeach
							</div>
							<!-- TOP-CATEGORY-PRODUCT-AREA END-->
							<a href="{!! url('the-loai/4/do_be_gai') !!}" class="btn btn-success btn-block"><span class="glyphicon glyphicon-hand-right"> Xem thêm</span></a>	<br><br>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- MAINCONTAIN-AREA END-->
@endsection