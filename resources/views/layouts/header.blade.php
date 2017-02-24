<div class="header-area">
	<div class="container">
		<div class="row" >
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<!--HEADER-TOP-MENU LEFT START-->
				<div class="header-top-menu">
					<a href="{!! URL::route('index') !!}"><img src="{{ asset('public/back-end/img/img-1411987595-7.jpg')}}" class="logo" title="Trang chủ" /></a>
				</div>
				<!--HEADER-TOP-MENU-LEFT END-->
			</div>
			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
				<!--HEADER-TOP-MENU-RIGHT START-->
				<div class="header-top-right">
					<div class="heder-right-menu">
					<nav>
						<ul>
							<li><a href="javascript:void(0);"><span><i class="fa fa-align-justify"></i></span>DANH MỤC <span class="dropdown"><i class="fa fa-angle-down"></i></span></a>
								<ul>
									@foreach($parent_cate as $parent_cat)
										@if($parent_cat['parent_id'] == 0)
											<li><a href="{!! url('the-loai/'.$parent_cat["id"].'/'.$parent_cat["alias"]) !!}">
											{!! $parent_cat["category_name"] !!}</a></li>
										@endif
									@endforeach
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