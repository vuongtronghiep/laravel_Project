<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    
<!-- Tieu Long Lanh Kute -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Thiên đường mua sắm</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Fonts======================= -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700italic,700,400italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
		
		<!-- Fonts ======================== -->
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
		<link rel="shortcut icon" href="{{asset('public/back-end/img/favicon.ico')}}" type="image/x-icon">

        <link rel="stylesheet" href="{{asset('public/back-end/css/jquery.countdown.css')}}">
		<!-- Bootstrap CSS
		============================================ -->
        <link rel="stylesheet" href="{{asset('public/back-end/css/bootstrap.min.css')}}">
		<!-- Mobile Menu Slicknav CSS
		============================================ -->
        <link rel="stylesheet" href="{{asset('public/back-end/css/slicknav.css')}}">
		<!-- Font-awesome CSS
		============================================ -->
        <link rel="stylesheet" href="{{asset('public/back-end/css/font-awesome.min.css')}}">
		<!-- rs-plugin CSS
		============================================ -->			
		<link href="{{asset('public/back-end/lib/rs-plugin/css/settings.css')}}" rel="stylesheet" />	
		
		<!-- owl.carousel CSS
		============================================ -->
        <link rel="stylesheet" href="{{asset('public/back-end/css/owl.carousel.css')}}">
		<!-- normalize CSS
		============================================ -->
        <link rel="stylesheet" href="{{asset('public/back-end/css/normalize.css')}}">
		<!-- main CSS
		============================================ -->
        <link rel="stylesheet" href="{{asset('public/back-end/css/main.css')}}">
		<!-- Style CSS
		============================================ -->
        <link rel="stylesheet" href="{{asset('public/back-end/css/style.css')}}">
		<!-- Responsive CSS
		============================================ -->
        <link rel="stylesheet" href="{{asset('public/back-end/css/responsive.css')}}">
		<!-- modernizr js
		============================================ -->
        <script src="{{asset('public/back-end/js/vendor/modernizr-2.6.2.min.js')}}"></script>
		<style type="text/css">
			.area-heading{
				color: blue;
				font-weight: bold;
			}
		</style>
    </head>
    <body class="product_details home_1 home_2">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		
		
		<!--HEADER AREA START-->
		<header>
		<div class="header-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<!--HEADER-TOP-MENU LEFT START-->
						<div class="header-top-menu">
							<nav>
								<ul>
									<li><a href="#"><img src="{!! asset('public/back-end/img/flag.png')!!}" alt="" /><span><i class="fa fa-angle-down"></i></span></a>
										<ul class="sup-menu">
											<li><a href="#"><img src="{!! asset('public/back-end/img/country/it.gif')!!}" alt="" />italiano</a></li>
											<li><a href="#"><img src="{!! asset('public/back-end/img/country/nl_nl.gif')!!}" alt="" />Nederlands</a></li>
											<li><a href="#"><img src="{!! asset('public/back-end/img/country/de_de.gif')!!}" alt="" />Deutsch</a></li>
											<li><a href="#"><img src="{!! asset('public/back-end/img/country/he_il.gif')!!}" alt="" /> עברית</a></li>
											<li><a href="#"><img src="{!! asset('public/back-end/img/country/en.gif')!!}" alt="" />English</a></li>
										</ul>
									</li>
									<li><a href="#"><i class="fa fa-usd"></i><span><i class="fa fa-angle-down"></i></span></a>
										<ul class="sup-menu currency">
											<li><a href="#"><i class="fa fa-eur"></i></a></li>
											<li><a href="#"><i class="fa fa-rub"></i></a></li>
											<li><a href="#"><i class="fa fa-krw"></i></a></li>
											<li><a href="#"><i class="fa fa-gbp"></i></a></li>
											<li><a href="#"><i class="fa fa-inr"></i></a></li>
										</ul>
									</li>
									<li><a href="#"><i class="fa fa-user"></i><span><i class="fa fa-angle-down"></i></span></a>
										<ul class="sup-menu">
											<li><a href="#">Profile</a></li>
											<li><a href="#">Logout</a></li>
										</ul>
									</li>
								</ul>
							</nav>
						</div>
						<!--HEADER-TOP-MENU-LEFT END-->
					</div>
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
						<!--HEADER-TOP-MENU-RIGHT START-->
						<div class="header-top-right">
							<div class="heder-right-menu">
							<nav>
								<ul>
									<li><a href="category_grid.html"><span><i class="fa fa-align-justify"></i></span>DANH MỤC <span class="dropdown"><i class="fa fa-angle-down"></i></span></a>
										<ul>
											<li><a href="category_grid.html">NAM</a></li>
											<li><a href="category_grid.html">NỮ</a></li>
											<li><a href="category_grid.html">ĐỒ BÉ TRAI</a></li>
											<li><a href="category_grid.html">ĐỒ BÉ GÁI</a></li>
										</ul>
									</li>
								</ul>
							</nav>
							</div>
							<div class="form-and-cart">
								<form action="#">
									<input type="text" placeholder="Từ khóa tìm kiếm..."/>
									<span class="search-button"><i class="fa fa-search"></i></span>
								</form>
								<div class="cart-empty shopping_cart">
									<a href="#"><i class="fa fa-shopping-cart"></i></a>
									<!-- CART-PRODUCT-LIST START-->
									<div class="cart-product-list">
										<div class="mini-cart-content">
											<div class="cart-img-details">											
												<div class="cart-img-photo">
													<a href="#"><img src="{{ asset('public/back-end/img/cart_list_prod.jpg')}}" alt="" /></a>
													<span class="quantity">1</span>
												</div>
												<div class="cart-img-contaent">
													<a href="#"><h4>Vestibulum et mollis nunc</h4></a>
													<span>$120.00</span>
												</div>
												<div class="pro-del"><a href="#"><i class="fa fa-times-circle"></i></a></div>
											</div>
											<div class="clear"></div>
											<div class="cart-img-details">											
												<div class="cart-img-photo">
													<a href="#"><img src="{{ asset('public/back-end/img/cart_list_prod_2.jpg')}}" alt="" /></a>
													<span class="quantity">1</span>
												</div>
												<div class="cart-img-contaent">
													<a href="#"><h4>Aenean eu tristique</h4></a>
													<span>$170.00</span>
												</div>
												<div class="pro-del"><a href="#"><i class="fa fa-times-circle"></i></a></div>
											</div>
											<p class="total">Subtotal: <span class="amount">$290.00</span></p>
											<div class="clear"></div>
											<p class="cart-button-top"><a href="checkout.html">Checkout</a></p>
										</div>
									</div>
									<!-- CART-PRODUCT-LIST END-->
								</div>
							</div>
						</div>
						<!--HEADER-TOP-MENU-RIGHT END-->
					</div>
				</div>
			</div>
		</div>
		<!--HEADER AREA TOP END-->
		
		<!--MAINMENU AREA START-->
		<div class="mainmenu-area">
			<div class="container">
				<div class="main-menu">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="row">							
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<!--LOGO AREA START-->
									<div class="logo">
										<a href="index.html"><img src="{{ asset('public/back-end/img/logo-3.png')}}" alt="" /></a>
									</div>
									<!--LOGO AREA END-->
								</div>
								<div class="col-lg-8 col-md-8 col-sm-8">
								<!--MAINMENU START-->
									<div class="mainmenu">
										<nav>
											<ul id="nav">
												<li class="current"><a href=""><span><i class="fa fa-home"></i></span>Trang Chủ</a>
												</li>
												<li><a href="#"><span><i class="fa fa-briefcase"></i></span>Giới Thiệu</a></li>
												<li><a href="blog_sidebar.html"><span><i class="fa fa-pencil-square-o"></i></span>Blogs <i class="fa fa-arrow-circle-o-right"></i></a>
													<ul class="sub-menu">
														<li><a href="blog_sidebar.html">Blog With Sidebar</a></li>
														<li><a href="blog_no_sidebar.html">Blog With Out Sidebar</a></li>
														<li><a href="blog_details.html">Blog details page</a></li>
													</ul>
												</li>
												<li><a href="category_grid.html"><span><i class="fa fa-shopping-cart"></i></span>Cửa hàng <i class="fa fa-arrow-circle-o-right"></i></a>
													<div class="mega-menu">
														<div class="single-mega-menu">
															<h3 class="hedding-border">Danh Mục</h3>
															<a href="category_grid.html"><i class="fa fa-arrow-circle-o-right"></i>Nam</a>
															<a href="category_grid.html"><i class="fa fa-arrow-circle-o-right"></i>Nữ</a>
															<a href="category_grid.html"><i class="fa fa-arrow-circle-o-right"></i>Đồ Bé Trai</a>
															<a href="category_grid.html"><i class="fa fa-arrow-circle-o-right"></i>Đồ Bé Gái</a>
														</div>
														<div class="single-mega-menu">
															<h3 class="hedding-border left-border">Page</h3>
															<a href="checkout.html"><i class="fa fa-arrow-circle-o-right"></i>Checkout</a>
															<a href="cart.html"><i class="fa fa-arrow-circle-o-right"></i>Cart</a>
															<a href="#"><i class="fa fa-arrow-circle-o-right"></i>My account</a>
															<a href="#"><i class="fa fa-arrow-circle-o-right"></i>Order tracking</a>
														</div>
													</div>
												</li>
												<li><a href="category_list.html"><span><i class="fa fa-leaf"></i></span>SẢN PHẨM</a></li>
												<li><a href="contact_us.html"><span><i class="fa fa-envelope"></i></span>LIÊN LẠC</a></li>
											</ul>						
										</nav>
									</div>
									<!--MAINMENU END-->
								</div>
							</div>
						</div>
					</div>
					<!-- MOBILE-MENU START-->
					<div class="row">
						<div class="col-md-12">
							<div class="mobile-menu">
								<ul id="mobile-menu">
									<li>
										<a href="index.html">Home</a>
									</li>
									<li><a href="#">About</a></li>
									<li><a href="blog_sidebar.html">Blogs</a>
										<ul>
											<li><a href="blog_sidebar.html">Blog With Sidebar</a></li>
											<li><a href="blog_no_sidebar.html">Blog With Out Sidebar</a></li>
											<li><a href="blog_details.html">Blog details page</a></li>
										</ul>
									</li>
									<li><a href="category_grid.html">CỬA HÀNG</a>
										<ul>
											<li><a href="category_grid.html">Nam</a></li>
											<li><a href="category_grid.html">Nữ</a></li>
											<li><a href="category_grid.html">Đồ Bé Trai</a></li>
											<li><a href="category_grid.html">Đồ Bé Gái</a></li>
										</ul>
									</li>
									<li><a href="category_list.html">SẢN PHẨM</a></li>
									<li><a href="contact_us.html">LIÊN LẠC</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- MOBILE-MENU END-->
				</div>
			</div>
		</div>
		<!--MAINMENU AREA END-->
		</header>
		<!--HEADER AREA END-->
		
		<!--MENU-BOTTOM START-->
		<div class="menu-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-12">
						<div class="category-gird-menu">
							<nav>
								<ul>
									<li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
									<li><a class="active-current" href="#">{!! $detail['product_name'] !!}</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--MENU-BOTTOM END-->
		
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
									<div class="category_image">
										<div class="larg_img">
											<div class="tab-content">
												<div class="tab-pane fade in active" id="image1">
													<img src="{!! asset('resources/upload/'.$detail['image'])!!}" alt="" />
												</div>
												<div class="tab-pane fade" id="image2">
													<img src="{!! asset('resources/upload/'.$detail['image_detail1'])!!}" alt="" />
												</div>
												<div class="tab-pane fade" id="image3">
													<img src="{!! asset('resources/upload/'.$detail['image_detail2'])!!}" alt="" />
												</div>
											</div>
										</div>
										<div class="small_img">
											<ul class="nav nav-tabs">
												<li class="active"><a href="#image1" data-toggle="tab"><img src="{!! asset('resources/upload/'.$detail['image'])!!}" alt="" height="87" width="87" /></a></li>
												<li><a href="#image2" data-toggle="tab"><img height="87" width="87" src="{!! asset('resources/upload/'.$detail['image_detail1'])!!}" alt="" /></a></li>
												<li><a href="#image3" data-toggle="tab"><img height="87" width="87" src="{!! asset('resources/upload/'.$detail['image_detail2'])!!}" alt="" /></a></li>
											</ul>
										</div>
									</div>
									<div class="category_text">
										<div class="off_percent">{!! $detail['sale'] !!}%</div>
										<div class="price_old_new">
											<p>{!! number_format(round(floor($detail['afterSale']),-3)) !!} VNĐ</p>
											<p class="old_price"><del>{!! number_format(round(floor($detail['price']),-3)) !!}VNĐ</del></p>
										</div>
										<div class="category_prod_description">
											<h3>{!! $detail['product_name'] !!}</h3>
											<p>{!! $detail['detail'] !!}.</p>
										</div>
										<div class="size_color">
											<div class="size">
												<label>Size: {!! $detail['size'] !!}</label>
											</div>
										</div>
										<div class="inc_quentity">
											<input type="number" name="quentity" value="1"/>
										</div>
										<div class="category_prod_card_area">
											<a href="#" class="cart">
												<i class="fa fa-shopping-cart"></i>
											</a>
											<a href="#" class="add-text-lis">
												Add to cart
											</a>
											<a href="#" class="icon_exc">
												<i class="fa fa-exchange"></i>
											</a>
											<a href="#" class="heart">
												<i class="fa fa-heart-o"></i>
											</a>
										</div>
									</div>
									</div>
								</div>
							</div>
							<!-- PRODUCT-DETAILS-AREA END-->
							
							<!-- PRODUCT_DESCREIPTION START-->
							<div class="row">
								<div class="col-lg-12 col-md-12">
									<div class="product_descreiption">
										<div class="tab_menu">
											  <ul class="nav nav-tabs">
												<li class="active"><a href="#description" data-toggle="tab">Mô tả chi tiết</a></li>
												<li><a href="#review" data-toggle="tab">Đánh giá của khách hàng</a></li>
												<li><a href="#tags" data-toggle="tab">tags</a></li>
											  </ul>
										</div>
										  <!-- Tab panes -->
										<div class="tab-content">
											<div class="tab-pane fade in active" id="description">
												<p>{!! $detail['detail'] !!}. </p>
											</div>
											<div class="tab-pane fade" id="review">
												<p>Đang cập nhật!...</p>
											</div>
											<div class="tab-pane fade" id="tags">
												<p>Đang cập nhật!...</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- PRODUCT_DESCREIPTION END-->
							<!-- FEATURED-PRODUCT-AREA START-->
							<div class="row">
								<div class="featured-product-area">
									<h3 class="area-heading">SẢN PHẨM CÓ LIÊN QUAN</h3>
									<div class="featured-product-corusol">
										<div class="col-lg-4 col-md-4">
											<!--SINGLE-FEATURED-PRODUCT START-->
											<div class="single-featured-product">
												<div class="product_img">
													<a href="#">
														<img src="{!! asset('public/back-end/img/product/fetured/fetured_1.jpg')!!}" alt="Special" class="primary-image"/>
														<img src="{!! asset('public/back-end/img/product/fetured/fetured_2.jpg')!!}" alt="Special" class="secondary-image"/>
													</a>
													<a class="modal-view" href="#" data-toggle="modal" data-target="#productModal">
														<span class="quick-view">
															<i class="fa fa-external-link"></i>Quick view
														</span>
													</a>													
													<div class="add-cart-area">
														<div class="fet-price">
															<span class="addcart-text">$120.00</span>
															<span class="addcart-text-del"><del>$132.00</del></span>
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
													<a href="product_details.html"><span>Vestibulum et mollis nunc</span></a>
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
										<div class="col-lg-4 col-md-4">
											<!--SINGLE-FEATURED-PRODUCT START-->
											<div class="single-featured-product">
												<div class="product_img">
													<a href="#">
														<img src="{!! asset('public/back-end/img/product/fetured/fetured_2.jpg')!!}" alt="Special" class="primary-image"/>
														<img src="{!! asset('public/back-end/img/product/fetured/fetured_1.jpg')!!}" alt="Special" class="secondary-image"/>
													</a>
													<a class="modal-view" href="#" data-toggle="modal" data-target="#productModal">
														<span class="quick-view">
															<i class="fa fa-external-link"></i>Quick view
														</span>
													</a>
													<div class="add-cart-area">
														<div class="fet-price">
															<span class="addcart-text">$120.00</span>
															<span class="addcart-text-del"><del>$132.00</del></span>
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
													<a href="product_details.html"><span>Vestibulum et mollis nunc</span></a>
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
										<div class="col-lg-4 col-md-4">
											<!--SINGLE-FEATURED-PRODUCT START-->
											<div class="single-featured-product">
												<div class="product_img">
													<a href="#">
														<img src="{!! asset('public/back-end/img/product/fetured/fetured_3.jpg')!!}" alt="Special" class="primary-image"/>
														<img src="{!! asset('public/back-end/img/product/fetured/fetured_1.jpg')!!}" alt="Special" class="secondary-image"/>
													</a>
													<a class="modal-view" href="#" data-toggle="modal" data-target="#productModal">
														<span class="quick-view">
															<i class="fa fa-external-link"></i>Quick view
														</span>
													</a>
													<div class="add-cart-area">
														<div class="fet-price">
															<span class="addcart-text">$120.00</span>
															<span class="addcart-text-del"><del>$132.00</del></span>
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
													<a href="product_details.html"><span>Vestibulum et mollis nunc</span></a>
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
										<div class="col-lg-4 col-md-4">
											<!--SINGLE-FEATURED-PRODUCT START-->
											<div class="single-featured-product">
												<div class="product_img">
													<a href="#">
														<img src="{!! asset('public/back-end/img/product/fetured/fetured.jpg')!!}" alt="Special" class="primary-image"/>
														<img src="{!! asset('public/back-end/img/product/fetured/fetured_3.jpg')!!}" alt="Special" class="secondary-image"/>
													</a>
													<a class="modal-view" href="#" data-toggle="modal" data-target="#productModal">
														<span class="quick-view">
															<i class="fa fa-external-link"></i>Quick view
														</span>
													</a>
													<div class="add-cart-area">
														<div class="fet-price">
															<span class="addcart-text">$120.00</span>
															<span class="addcart-text-del"><del>$132.00</del></span>
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
													<a href="product_details.html"><span>Vestibulum et mollis nunc</span></a>
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
									</div>
								</div>
									<!--FEATURED-PRODUCT-AREA END-->
							</div>							
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
											<img src="{!! asset('public/back-end/img/offer-img.jpg')!!}" alt="Offer" />
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
					</div>
				</div>
			</div>
		</div>
		<!-- MAINCONTAIN-AREA END-->
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
										<img src="{!! asset('public/back-end/img/logo_band/logo_1.png')!!}" alt="Logo" />
									</div>
								</a>
							</div>
							<!-- SINGLE-LOGO END-->
							<!-- SINGLE-LOGO START-->
							<div class="single-logo">
								<a href="#">
									<div class="logo-pic">
										<img src="{!! asset('public/back-end/img/logo_band/logo_2.png')!!}" alt="Logo" />
									</div>
								</a>
							</div>
							<!-- SINGLE-LOGO END-->
							<!-- SINGLE-LOGO START-->
							<div class="single-logo">
								<a href="#">
									<div class="logo-pic">
										<img src="{!! asset('public/back-end/img/logo_band/logo_3.png')!!}" alt="Logo" />
									</div>
								</a>
							</div>
							<!-- SINGLE-LOGO END-->
							<!-- SINGLE-LOGO START-->
							<div class="single-logo">
								<a href="#">
									<div class="logo-pic">
										<img src="{!! asset('public/back-end/img/logo_band/logo_4.png')!!}" alt="Logo" />
									</div>
								</a>
							</div>
							<!-- SINGLE-LOGO END-->
							<!-- SINGLE-LOGO START-->
							<div class="single-logo">
								<a href="#">
									<div class="logo-pic">
										<img src="{!! asset('public/back-end/img/logo_band/logo_5.png')!!}" alt="Logo" />
									</div>
								</a>
							</div>
							<!-- SINGLE-LOGO END-->
							<!-- SINGLE-LOGO START-->
							<div class="single-logo">
								<a href="#">
									<div class="logo-pic">
										<img src="{!! asset('public/back-end/img/logo_band/logo_2.png')!!}" alt="Logo" />
									</div>
								</a>
							</div>
							<!-- SINGLE-LOGO END-->
							<!-- SINGLE-LOGO START-->
							<div class="single-logo">
								<a href="#">
									<div class="logo-pic">
										<img src="{!! asset('public/back-end/img/logo_band/logo_1.png')!!}" alt="Logo" />
									</div>
								</a>
							</div>
							<!-- SINGLE-LOGO END-->
							<!-- SINGLE-LOGO START-->
							<div class="single-logo">
								<a href="#">
									<div class="logo-pic">
										<img src="{!! asset('public/back-end/img/logo_band/logo_5.png')!!}" alt="Logo" />
									</div>
								</a>
							</div>
							<!-- SINGLE-LOGO END-->
							<!-- SINGLE-LOGO START-->
							<div class="single-logo">
								<a href="#">
									<div class="logo-pic">
										<img src="{!! asset('public/back-end/img/logo_band/logo_3.png')!!}" alt="Logo" />
									</div>
								</a>
							</div>
							<!-- SINGLE-LOGO END-->
							<!-- SINGLE-LOGO START-->
							<div class="single-logo">
								<a href="#">
									<div class="logo-pic">
										<img src="{!! asset('public/back-end/img/logo_band/logo_2.png')!!}" alt="Logo" />
									</div>
								</a>
							</div>
							<!-- SINGLE-LOGO END-->
							<!-- SINGLE-LOGO START-->
							<div class="single-logo">
								<a href="#">
									<div class="logo-pic">
										<img src="{!! asset('public/back-end/img/logo_band/logo_4.png')!!}" alt="Logo" />
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
										<a href="#"><img src="{!! asset('public/back-end/img/paypal.png')!!}" alt="" /></a>
										<a href="#"><img src="{!! asset('public/back-end/img/amazon.png')!!}" alt="" /></a>
										<a href="#"><img src="{!! asset('public/back-end/img/skrill.png')!!}" alt="" /></a>
										<a href="#"><img src="{!! asset('public/back-end/img/visa.png')!!}" alt="" /></a>
										<a href="#"><img src="{!! asset('public/back-end/img/discover.png')!!}" alt="" /></a>
										<a href="#"><img src="{!! asset('public/back-end/img/master.png')!!}" alt="" /></a>
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
				<div class="col-lg-12 col-md-12">
					<div class="copy-right">
						<p>Copyright &copy; 2015 <a href="#">Rammustheme</a>. All Rights Reserved</p>
					</div>
				</div>
			</div>
		</div>
		<!-- COPY-RIGHT END-->
			<!-- QUICKVIEW PRODUCT -->
	<div id="quickview-wrapper">
		<!-- Modal -->
		<div class="modal fade" id="productModal" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<div class="modal-product">
							<div class="product-images">
								<div class="main-image images">
									<img alt="" src="img/product/fetured/fetured_1.jpg">
								</div>
								<div class="thumbnail-img">
									<img src="{!! asset('public/back-end/img/product/product_details/product_details_small_1.jpg')!!}" alt="" />
									<img src="{!! asset('public/back-end/img/product/product_details/product_details_small_2.jpg')!!}" alt="" />
									<img src="{!! asset('public/back-end/img/product/product_details/product_details_small_3.jpg')!!}" alt="" />
								</div>
							</div><!-- .product-images -->
							
							<div class="product-info">
								<h1>Vestibulum et mollis nunc</h1>
								<div class="price-box">
									<p class="price"><span class="special-price"><span class="amount">$120.00</span></span></p>
								</div>
								<a href="#" class="see-all">See all features</a>
								<div class="quick-add-to-cart">
									<form method="post" class="cart">
										<div class="numbers-row">
											<input type="number" id="french-hens" value="3">
										</div>
										<button class="single_add_to_cart_button" type="submit">Add to cart</button>
									</form>
								</div>
								<div class="quick-desc">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.
								</div>
								<div class="social-sharing">
									<div class="widget widget_socialsharing_widget">
										<h3 class="widget-title-modal">Share this product</h3>
										<ul class="social-icons">
											<li><a target="_blank" title="Facebook" href="#" class="facebook social-icon"><i class="fa fa-facebook"></i></a></li>
											<li><a target="_blank" title="Twitter" href="#" class="twitter social-icon"><i class="fa fa-twitter"></i></a></li>
											<li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="fa fa-pinterest"></i></a></li>
											<li><a target="_blank" title="Google +" href="#" class="gplus social-icon"><i class="fa fa-google-plus"></i></a></li>
											<li><a target="_blank" title="LinkedIn" href="#" class="linkedin social-icon"><i class="fa fa-linkedin"></i></a></li>
										</ul>
									</div>
								</div>
							</div><!-- .product-info -->
						</div><!-- .modal-product -->
					</div><!-- .modal-body -->
				</div><!-- .modal-content -->
			</div><!-- .modal-dialog -->
		</div>
		<!-- END Modal -->
	</div>
	<!-- END QUICKVIEW PRODUCT -->
		
		<!-- jquery-1.11.3.min js -->
        <script src="{{asset('public/back-end/js/vendor/jquery-1.11.3.min.js')}}"></script>
		<!-- bootstrap.min js -->
        <script src="{{asset('public/back-end/js/bootstrap.min.js')}}"></script>
		<!-- FILTER_PRICE js -->
        <script src="{{asset('public/back-end/js/jquery-ui.min.js')}}"></script>
		<!-- owl.carousel.min js -->
        <script src="{{asset('public/back-end/js/owl.carousel.min.js')}}"></script>
		<!-- jquery.slicknav.min js -->
        <script src="{{asset('public/back-end/js/jquery.slicknav.min.js')}}"></script>
		<!-- plugins js -->
        <script src="{{asset('public/back-end/js/plugins.js')}}"></script>
		<!-- jquery.scrollUp js -->
        <script src="{{asset('public/back-end/js/jquery.scrollUp.min.js')}}"></script>
		<!-- RS Lib js -->		
		<script src="{{asset('public/back-end/lib/rs-plugin/js/jquery.themepunch.plugins.min.js')}}"></script>
		<script src="{{asset('public/back-end/lib/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
		<script src="{{asset('public/back-end/lib/rs-plugin/rs.home.js')}}"></script>
		
		<!-- Countdown JS-->
		<script src="{{asset('public/back-end/js/jquery.plugin.min.js')}}"></script>
		<script src="{{asset('public/back-end/js/jquery.countdown.min.js')}}"></script>
		<!-- main JS -->
		 <script src="{{asset('public/back-end/js/main.js')}}"></script>
    </body>

<!-- Tieu Long Lanh Kute -->
</html>
