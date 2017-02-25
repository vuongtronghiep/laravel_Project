<!DOCTYPE html>
@include('layouts.head')
@include('function')
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

    <body class="home_1 home_2">
        <!--[if lt IE 7]>
		<!--HEADER AREA START-->
		<header>
		@include('layouts.header')
		<!--HEADER AREA TOP END-->
		</header>
		<!--HEADER AREA END-->
		
		<!--OUR-SERVICE START-->
		<div class="our-service">
			<div class="container">
				<div class="row">
					<div class="service">
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<div class="single-service">
								<span class="icon"><i class="fa fa-plane"></i></span>
								<div class="text">
									<h2>MIỄN PHÍ GIAO HÀNG NỘI THÀNH</h2>
									<p>Khách hàng là thượng đế</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<div class="single-service">
								<span class="icon"><i class="fa fa-refresh"></i></span>
								<div class="text">
									<h2>HOÀN LẠI 100% TIỀN</h2>
									<p>Hoàn lại nếu phát hiện sản phẩm không giống trên website</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<div class="single-service">
								<span class="icon"><i class="fa fa-comments"></i></span>
								<div class="text">
									<h2>HỖ TRỢ TRỰC TUYẾN 24/7</h2>
									<p>Gọi điện hoặc chat với chúng tôi</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--OUR-SERVICE END-->
		
	<!--left-menu and slider-->
	@include('layouts.left_menu-slider')
	<!--end left-menu and slider-->	
	<!--Main-->
	@yield('main')
	@include('layouts.footer')
	
	<!--end main-->
	<!-- thư viện js-->
	@include('layouts.lib')
	<!-- end thư viện js-->