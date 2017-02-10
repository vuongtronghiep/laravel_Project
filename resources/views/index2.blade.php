<!DOCTYPE html>
<html>
<head>
	<title> Thiên đường mua sắm</title>
	<meta charset="utf-8">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/index.css') }}">
	<script type="text/javascript">
		$(document).ready(function () {  
		    $(window).bind("scroll", function(e) {
		        var top = $(window).scrollTop();
		      if (top> 500) { //Khoảng cách đã đo được
		        $(".img_lienhe").addClass("aa");
		      } else {
		        $(".img_lienhe").removeClass("aa");

		      } 
		    });
		});

	</script>	
</head>
<body>
	<div class="container-fluid">
			<div class="row">
			  	<div class="col-md-12" style="background-color:#08a100; height:70px;">
			  													<!-Menu-!>
			  		<div class="menu">
				  		<ul>
				  			<li CLASS="first"><a href=""><span style="color:white; font-weight:bold; " class="glyphicon glyphicon-home">THỜI TRANG |  </span></a></li>
				  			<li><a href=""> ĐỒ NAM</a>
								<ul class="sub">
									@foreach($cate as $category)
										@if($category['parent_id'] == 1)
							        		<li><a href="#">{!! $category['category_name'] !!}</a></li>
							        	@endif
							        @endforeach
							     </ul>
				  			</li>
				  			<li><a href=""> ĐỒ NỮ</a>
								<ul class="sub">
							       @foreach($cate as $category)
										@if($category['parent_id'] == 2)
							        		<li><a href="#">{!! $category['category_name'] !!}</a></li>
							        	@endif
							        @endforeach
							     </ul>
				  			</li>
				  			<li><a href=""> BÉ TRAI</a>
								<ul class="sub">
							        @foreach($cate as $category)
										@if($category['parent_id'] == 3)
							        		<li><a href="#">{!! $category['category_name'] !!}</a></li>
							        	@endif
							        @endforeach
							     </ul>
				  			</li>
				  			<li><a href=""> BÉ GÁI</a>
								<ul class="sub">
							        @foreach($cate as $category)
										@if($category['parent_id'] == 4)
							        		<li><a href="#">{!! $category['category_name'] !!}</a></li>
							        	@endif
							        @endforeach
							     </ul>
				  			</li>
				  		</ul>
			  		</div>
		  															<!-end menu-!>

		  															<!-search-!>
					<form class="form-inline" role="form">
		  				<div class="form-group has-success has-feedback">
						    <input type="text" class="form-control" id="inputSuccess2" placeholder="Từ khóa tìm kiếm...">
					    </div>
					    	<button type="button" class="btn btn-info">
							    <span class="glyphicon glyphicon-search"></span> Tìm
							</button>
					</form>
					<div class="cart">
						<button type="button" class="btn btn-success" style="background-color: #08a100"><span class="glyphicon glyphicon-shopping-cart"></span> <span class="badge">3</span></button>
					</div>
		  															<!-end search-!>

		  															<!-Note-!>
					<div class="img_note">
		  				<img src="public/image/front-end/a.PNG" class="img-responsive" alt="Cinque Terre" width="850" height="236">
		  			</div>
		  															<!-end Note-!>

		  															
		  			<div class="img_logo">
		  				<img src="public/image/front-end/b.PNG" class="img-responsive" alt="Cinque Terre" width="210" height="186">
		  			</div>
		  			<div class="img_contact"><img src="public/image/front-end/note.PNG" class="img-responsive" alt="Cinque Terre" width="270" height="256"></div>
		  			<div class="img_lienhe"><a href=""><img src="public/image/front-end/lienhe.PNG" class="img-responsive" alt="Cinque Terre" width="282" height="256"></a></div>
		  			<div class="contact">
						<div class="row">
							<div class="col-md-3">
								<button type="button" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-phone-alt"> <strong>01667193080</strong></span></button>
							</div>
																	<!-Main-!>
							<div class="col-md-8" >

																	<!-MAN-!>
								<p class="title_cate"> Thời Trang Nam</p>
								<ul class="cate_sub">
									@foreach($cate as $category)
										@if($category['parent_id'] == 1)
							        		<li><a href="#">{!! $category['category_name'] !!}</a></li>
							        	@endif
							        @endforeach
								</ul>
								<hr>
								<div class="product">
									@foreach($productMan as $listProduct)
										
										<div class="product_man">
											<div class="img_product_man">
												<img src="{!! asset('resources/upload/'.@$listProduct['image']) !!}" class="img-responsive" alt="Cinque Terre" width="170" height="200">
											</div>
											<p class="name_product_man"><a href="">{!! @$listProduct['product_name'] !!}</a></p>
											<p class="price_product_man">Giá chỉ:</p> <p class="price_num">{!! @$listProduct['price'] !!} vnđ</p> 
											<div class="size_product_man">Còn size:</div> <p class="free_size">{!! @$listProduct['size'] !!}</p>
											<div class="buy"><a href=""><span class="glyphicon glyphicon-shopping-cart"> Mua</span></a></div>
										</div>
										
									@endforeach
									</br></br></br>
									<button type="button" class="btn btn-success btn-block"><span class="glyphicon glyphicon-hand-right"> Xem thêm</span></button>
								</div>
																		<!-end man-!>

																		<!-WOMAN-!>
							<div class="woman">	
								<p class="title_cate"> Thời Trang Nữ</p>
								<ul class="cate_sub">
									@foreach($cate as $category)
										@if($category['parent_id'] == 2)
							        		<li><a href="#">{!! $category['category_name'] !!}</a></li>
							        	@endif
							        @endforeach
								</ul>
								<hr>
								<div class="product">
									@foreach($productWomen as $listProduct)
										<div class="product_man">
											<div class="img_product_man">
												<img src="{!! asset('resources/upload/'.@$listProduct['image']) !!}" class="img-responsive" alt="Cinque Terre" width="170" height="200">
											</div>
											<p class="name_product_man"><a href="">{!! @$listProduct['product_name'] !!}</a></p>
											<p class="price_product_man">Giá chỉ:</p> <p class="price_num">{!! @$listProduct['price'] !!} vnđ</p> 
											<div class="size_product_man">Còn size:</div> <p class="free_size">{!! @$listProduct['size'] !!}</p>
											<div class="buy"><a href=""><span class="glyphicon glyphicon-shopping-cart"> Mua</span></a></div>
										</div>
									@endforeach
								</div>
								</br></br></br>
									<button type="button" class="btn btn-success btn-block"><span class="glyphicon glyphicon-hand-right"> Xem thêm</span></button>			
							</div>
																	<!-end women-!>

																	<!-Đồ bé trai-!>
							<div class="woman">	
								<p class="title_cate"> Thời Trang Bé Trai</p>
								<ul class="cate_sub">
									@foreach($cate as $category)
										@if($category['parent_id'] == 3)
							        		<li><a href="#">{!! $category['category_name'] !!}</a></li>
							        	@endif
							        @endforeach
								</ul>
								<hr>
								<div class="product">
									@foreach($productBoy as $listProduct)
										<div class="product_man">
											<div class="img_product_man">
												<img src="{!! asset('resources/upload/'.@$listProduct['image']) !!}" class="img-responsive" alt="Cinque Terre" width="170" height="200">
											</div>
											<p class="name_product_man"><a href="">{!! @$listProduct['product_name'] !!}</a></p>
											<p class="price_product_man">Giá chỉ:</p> <p class="price_num">{!! @$listProduct['price'] !!} vnđ</p> 
											<div class="size_product_man">Còn size:</div> <p class="free_size">{!! @$listProduct['size'] !!}</p>
											<div class="buy"><a href=""><span class="glyphicon glyphicon-shopping-cart"> Mua</span></a></div>
										</div>
									@endforeach
								</br></br></br>
									<button type="button" class="btn btn-success btn-block"><span class="glyphicon glyphicon-hand-right"> Xem thêm</span></button>			
							</div>
																	<!-end Đồ bé trai-!>

																	<!-Đồ bé gái-!>
							<div class="woman">	
								<p class="title_cate"> Thời Trang Bé Gái</p>
								<ul class="cate_sub">
									@foreach($cate as $category)
										@if($category['parent_id'] == 4)
							        		<li><a href="#">{!! $category['category_name'] !!}</a></li>
							        	@endif
							        @endforeach
								</ul>
								<hr>
								<div class="product">
									@foreach($productGirl as $listProduct)
										<div class="product_man">
											<div class="img_product_man">
												<img src="{!! asset('resources/upload/'.@$listProduct['image']) !!}" class="img-responsive" alt="Cinque Terre" width="170" height="200">
											</div>
											<p class="name_product_man"><a href="">{!! @$listProduct['product_name'] !!}</a></p>
											<p class="price_product_man">Giá chỉ:</p> <p class="price_num">{!! @$listProduct['price'] !!} vnđ</p> 
											<div class="size_product_man">Còn size:</div> <p class="free_size">{!! @$listProduct['size'] !!}</p>
											<div class="buy"><a href=""><span class="glyphicon glyphicon-shopping-cart"> Mua</span></a></div>
										</div>
									@endforeach
								</div>
								</br></br></br>
									<button type="button" class="btn btn-success btn-block"><span class="glyphicon glyphicon-hand-right"> Xem thêm</span></button>			
							</div>
																	<!-Đồ bé gái-!>
						</div>
																	<!-end main-!>	
																	<!-footer-!>				
		
		<footer>
			<div class="row">
				<div class="col-md-12">
					<div class="img_bot"><img class="img-responsive" src="public/image/front-end/bot.png"> </div>
				</div>
			</div>
			<div class="boot">
				<div class="row">
					<div class="col-md-4">
					<p><strong>XDEAL.VN</strong></p>
						<ul class="ulbot">
							<li><strong>Địa chỉ:</strong> Phương Bảng, Song phương, Hoài đức, Hà Nội</li>
							<li><strong>Hotline:</strong> 01667193080</li>
							<li><strong>Email:</strong> hiepkenlily@gmail.com</li>
						</ul>
					</div>
					<div class="col-md-4">
					<p><strong>HỖ TRỢ TRỰC TUYẾN</strong></p>
						<ul>
							<li><a href="">Các câu hỏi thường gặp</a></li>
							<li><a href="">Hướng dẫn mua hàng</a></li>
							<li><a href="">Chính sách đổi - trả</a></li>
							<li><a href="">Phương thước thanh toán - vận chuyển</a></li>
						</ul>
					</div>
					<div class="col-md-4">
						<p><strong>THEO DÕI CHÚNG TÔI</strong></p>
						<div class="img_fl"><img class="img-responsive" src="public/image/front-end/fl.png"> </div>
					</div>
				</div>
			</div>
		</footer>
	</div>
	
</div>
</body>
<script type="text/javascript">

		$(document).ready(function(){
			$("li").click(function(){
				$("li").removeClass("active");
				$(this).addClass("active");
			});
		});
	</script>
</html>