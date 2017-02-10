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
											<p>the best your choise</p>
											<h2>Shop’s men collection</h2>
											<a href="#">Shop collection</a>
										</div>
									</div>
								</div>
							</div>
							<!-- ADD-AREA END-->
							
							<!-- TOP-CATEGORY-AREA START-->
							<div class="row">
								<div class="col-lg-12 col-md-12">
									<div class="top-category-area">
										<h3 class="area-heading">DANH MỤC</h3>
										<!-- TOP-CATEGORY-MENU START-->
										<div class="top-category-menu">
										<a href="category_grid.html">
											<div>
												<i class="fa fa-male"></i>
												<p>NAM</p>
											</div>
										</a>
										<a href="category_grid.html">
											<div>
												<i class="fa fa-female"></i>
												<p>NỮ</p>
											</div>
										</a>
										<a href="category_grid.html">
											<div>
												<i class="fa fa-male"></i>
												<p>BÉ TRAI</p>
											</div>
										</a>
										<a href="category_grid.html">
											<div>
												<i class="fa fa-female"></i>
												<p>BÉ GÁI</p>
											</div>
										</a>
										
										</div>
										<!-- TOP-CATEGORY-MENU END-->
									</div>
								</div>
							</div>
							<!-- TOP-CATEGORY-AREA END-->
							
							<!-- TOP-CATEGORY-PRODUCT-AREA START-->
							<div class="row men">
								<h3 class="area-heading" style="margin-left: 10px">ĐỒ NAM</h3>
								<div class="top-category-product-area">						
									<!-- TOP-CATEGORY-SINGLE-PRODUCT START-->
									@foreach($productMan as $new)

									<div class="col-lg-3 col-md-3 col-sm-3">
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
							<button type="button" class="btn btn-success btn-block"><span class="glyphicon glyphicon-hand-right"> Xem thêm</span></button>	<br><br>
							<!-- TOP-CATEGORY-PRODUCT-AREA END-->
							<h3 class="area-heading" style="margin-left: 10px">ĐỒ NỮ</h3>
								<div class="top-category-product-area">						
									<!-- TOP-CATEGORY-SINGLE-PRODUCT START-->
									@foreach($productWomen as $new)

									<div class="col-lg-3 col-md-3 col-sm-3">
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
							<button type="button" class="btn btn-success btn-block"><span class="glyphicon glyphicon-hand-right"> Xem thêm</span></button>	<br><br>
							<h3 class="area-heading a" style="margin-left: 10px">ĐỒ BÉ TRAI</h3>
								<div class="top-category-product-area">						
									<!-- TOP-CATEGORY-SINGLE-PRODUCT START-->
									@foreach($productBoy as $new)

									<div class="col-lg-3 col-md-3 col-sm-3">
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
							<button type="button" class="btn btn-success btn-block"><span class="glyphicon glyphicon-hand-right"> Xem thêm</span></button>	<br><br>
							<h3 class="area-heading" style="margin-left: 10px">ĐỒ BÉ GÁI</h3>
								<div class="top-category-product-area">						
									<!-- TOP-CATEGORY-SINGLE-PRODUCT START-->
									@foreach($productGirl as $new)

									<div class="col-lg-3 col-md-3 col-sm-3">
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
								<button type="button" class="btn btn-success btn-block"><span class="glyphicon glyphicon-hand-right"> Xem thêm</span></button>	<br><br>
							</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- MAINCONTAIN-AREA END-->
		<!-- BLOG-AREA START-->
		<div class="blog-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 blog">
						<h2 class="area-heading">Blog posts</h2>
						<div class="row">
							<div class="blog-corusol">
							<!-- SINGLE-BLOG START-->
								<div class="col-lg-6 col-md-6">
									<div class="single-blog">
										<div class="blog-img">
											<a href="#"><img src="{{ asset('public/back-end/img/blog/blog_1.jpg')}}" alt="Blog" /></a>
										</div>
										<div class="blog-text-area">
											<div class="date">
												<span>09</span>
												<span class="month">Sept 2015</span>
											</div>
											<div class="block-desc">
												<a href="#">
													<h3>Fusce consequat, mauris non venenatis...</h3>
												</a>
												<p>Aliquam sed libero neque. Duis ut finibus dui. Sed egestas elit tortor, vel volutpat est ultrices sed. Ut quis pellentesque ligula. </p>
												<div class="comment-area">
													<a href="#">
														<span class="author"><i class="fa fa-user"></i>Authur</span>
													</a>
													<a href="#">
														<span class="comment"><i class="fa fa-comments"></i>12 Comments</span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- SINGLE-BLOG END-->
								<!-- SINGLE-BLOG START-->
								<div class="col-lg-6 col-md-6">
									<div class="single-blog">
										<div class="blog-img">
											<a href="#"><img src="{{ asset('public/back-end/img/blog/blog_2.jpg')}}" alt="Blog" /></a>
										</div>
										<div class="blog-text-area">
											<div class="date">
												<span>15</span>
												<span class="month">Oct 2015</span>
											</div>
											<div class="block-desc">
												<a href="#">
													<h3>Fusce consequat, mauris non venenatis...</h3>
												</a>
												<p>Aliquam sed libero neque. Duis ut finibus dui. Sed egestas elit tortor, vel volutpat est ultrices sed. Ut quis pellentesque ligula. </p>
												<div class="comment-area">
													<a href="#">
														<span class="author"><i class="fa fa-user"></i>Authur</span>
													</a>
													<a href="#">
														<span class="comment"><i class="fa fa-comments"></i>12 Comments</span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- SINGLE-BLOG END-->
								<!-- SINGLE-BLOG START-->
								<div class="col-lg-6 col-md-6">
									<div class="single-blog">
										<div class="blog-img">
											<a href="#"><img src="{{ asset('public/back-end/img/blog/blog_1.jpg')}}" alt="Blog" /></a>
										</div>
										<div class="blog-text-area">
											<div class="date">
												<span>15</span>
												<span class="month">Oct 2015</span>
											</div>
											<div class="block-desc">
												<a href="#">
													<h3>Fusce consequat, mauris non venenatis...</h3>
												</a>
												<p>Aliquam sed libero neque. Duis ut finibus dui. Sed egestas elit tortor, vel volutpat est ultrices sed. Ut quis pellentesque ligula. </p>
												<div class="comment-area">
													<a href="#">
														<span class="author"><i class="fa fa-user"></i>Authur</span>
													</a>
													<a href="#">
														<span class="comment"><i class="fa fa-comments"></i>12 Comments</span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- SINGLE-BLOG END-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- BLOG-AREA END-->
		
		<!-- LOGO-BAND-AREA START-->
		<div class="logo-band-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 logo-band">
						<h3 class="area-heading">Logo Brands</h3>
						<div class="logo-area">
							<!-- SINGLE-LOGO START-->
							<div class="single-logo">
								<a href="#">
									<div class="logo-pic">
										<img src="{{ asset('public/back-end/img/logo_band/logo_1.png')}}" alt="Logo" />
									</div>
								</a>
							</div>
							<!-- SINGLE-LOGO END-->
							<!-- SINGLE-LOGO START-->
							<div class="single-logo">
								<a href="#">
									<div class="logo-pic">
										<img src="{{ asset('public/back-end/img/logo_band/logo_2.png')}}" alt="Logo" />
									</div>
								</a>
							</div>
							<!-- SINGLE-LOGO END-->
							<!-- SINGLE-LOGO START-->
							<div class="single-logo">
								<a href="#">
									<div class="logo-pic">
										<img src="{{ asset('public/back-end/img/logo_band/logo_3.png')}}" alt="Logo" />
									</div>
								</a>
							</div>
							<!-- SINGLE-LOGO END-->
							<!-- SINGLE-LOGO START-->
							<div class="single-logo">
								<a href="#">
									<div class="logo-pic">
										<img src="{{ asset('public/back-end/img/logo_band/logo_4.png')}}" alt="Logo" />
									</div>
								</a>
							</div>
							<!-- SINGLE-LOGO END-->
							<!-- SINGLE-LOGO START-->
							<div class="single-logo">
								<a href="#">
									<div class="logo-pic">
										<img src="{{ asset('public/back-end/img/logo_band/logo_5.png')}}" alt="Logo" />
									</div>
								</a>
							</div>
							<!-- SINGLE-LOGO END-->
							<!-- SINGLE-LOGO START-->
							<div class="single-logo">
								<a href="#">
									<div class="logo-pic">
										<img src="{{ asset('public/back-end/img/logo_band/logo_2.png')}}" alt="Logo" />
									</div>
								</a>
							</div>
							<!-- SINGLE-LOGO END-->
							<!-- SINGLE-LOGO START-->
							<div class="single-logo">
								<a href="#">
									<div class="logo-pic">
										<img src="{{ asset('public/back-end/img/logo_band/logo_4.png')}}" alt="Logo" />
									</div>
								</a>
							</div>
							<!-- SINGLE-LOGO END-->
							<!-- SINGLE-LOGO START-->
							<div class="single-logo">
								<a href="#">
									<div class="logo-pic">
										<img src="{{ asset('public/back-end/img/logo_band/logo_1.png')}}" alt="Logo" />
									</div>
								</a>
							</div>
							<!-- SINGLE-LOGO END-->
							<!-- SINGLE-LOGO START-->
							<div class="single-logo">
								<a href="#">
									<div class="logo-pic">
										<img src="{{ asset('public/back-end/img/logo_band/logo_3.png')}}" alt="Logo" />
									</div>
								</a>
							</div>
							<!-- SINGLE-LOGO END-->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- LOGO-BAND-AREA END-->
		
		<!-- FOOTER-AREA START-->
		<div class="footer-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="footer">
							<div class="row">
								<div class="col-lg-3 col-md-3 col-sm-5">
									<!-- FOOTER-LOGO START-->
									<div class="footer-logo">
										<a href="index.html"><img alt="" src="img/logo_footer_1.png"></a>
										<p>Vestibulum gravida magna ut commodo lacinia. Quisque dictum in arcu ut vestibulum. Morbi sed tempor lacus...  <a href="#">Readmore>></a></p>
									</div>
									<!-- FOOTER-LOGO END-->
								</div>
								<div class="col-lg-3 col-md-3 col-sm-4 hidden-sm">
									<!-- INFORMATION START-->
									<div class="information">
										<h3>Infomation</h3>
										<ul>
											<li>
												<a href="#">
													<span><i class="fa fa-arrow-circle-o-right"></i></span>
													Specials
												</a>
											</li>
											<li>
												<a href="#">
													<span><i class="fa fa-arrow-circle-o-right"></i></span>
													New products
												</a>
											</li>
											<li>
												<a href="#">
													<span><i class="fa fa-arrow-circle-o-right"></i></span>
													Best sellers
												</a>
											</li>
											<li>
												<a href="#">
													<span><i class="fa fa-arrow-circle-o-right"></i></span>
													Our stores
												</a>
											</li>
											<li>
												<a href="#">
													<span><i class="fa fa-arrow-circle-o-right"></i></span>
													Contact us
												</a>
											</li>
										</ul>
									</div>
									<!-- INFORMATION END-->
								</div>
								<div class="col-lg-3 col-md-3 col-sm-3">
								<!-- MYACCOUNT START-->
									<div class="myaccount">
										<h3>My Account</h3>
										<ul>
											<li>
												<a href="#">
													<span><i class="fa fa-arrow-circle-o-right"></i></span>
													My orders
												</a>
											</li>
											<li>
												<a href="#">
													<span><i class="fa fa-arrow-circle-o-right"></i></span>
													My credit slips
												</a>
											</li>
											<li>
												<a href="#">
													<span><i class="fa fa-arrow-circle-o-right"></i></span>
													My addresses
												</a>
											</li>
											<li>
												<a href="#">
													<span><i class="fa fa-arrow-circle-o-right"></i></span>
													My personal info
												</a>
											</li>
										</ul>
									</div>
									<!-- MYACCOUNT END-->
								</div>
								
								<!-- JOIN-US AREA START-->
								<div class="col-lg-3 col-md-3 col-sm-4">
									<div class="join-us">
										<h3>Join us</h3>
										<span>Follow with us now!</span>
									</div>
									<div class="social-icon">
										<ul>
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											<li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
											<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
										</ul>
									</div>
								</div>
								<!-- JOIN-US AREA END-->
							</div>
							<!-- ROW END-->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- FOOTER-AREA START-->
		<div class="footer-bottum-menu-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="footer-bottum">
							<div class="row">
								<div class="col-lg-6 col-md-6">
									<!-- FOOTER-BOTTUM-MENU START-->
									<div class="footer-bottum-menu">
										<ul>
											<li><a href="#">Our stores</a></li>
											<li><a href="#">Contact us</a></li>
											<li><a href="#">Terms and conditions of use</a></li>
											<li><a href="#">About us</a></li>
											<li><a href="#">Sitemap</a></li>
										</ul>
									</div>
									<!-- FOOTER-BOTTUM-MENU END-->
								</div>
								<div class="col-lg-6 col-md-6">
									<!-- CARD-AREA START-->
									<div class="card-area">
										<a href="#"><img src="{{ asset('public/back-end/img/paypal.png')}}" alt="" /></a>
										<a href="#"><img src="{{ asset('public/back-end/img/amazon.png')}}" alt="" /></a>
										<a href="#"><img src="{{ asset('public/back-end/img/skrill.png')}}" alt="" /></a>
										<a href="#"><img src="{{ asset('public/back-end/img/visa.png')}}" alt="" /></a>
										<a href="#"><img src="{{ asset('public/back-end/img/discover.png')}}" alt="" /></a>
										<a href="#"><img src="{{ asset('public/back-end/img/master.png')}}" alt="" /></a>
									</div>
									<!-- CARD-AREA END-->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- COPY-RIGHT START-->
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="copy-right">
						<p>Copyright &copy; 2015 <a href="#">Rammustheme</a>. All Rights Reserved</p>
					</div>
				</div>
			</div>
		</div>
		<!-- COPY-RIGHT END-->	
		
		
		
    </body>

<!-- Tieu Long Lanh Kute -->
</html>
@endsection