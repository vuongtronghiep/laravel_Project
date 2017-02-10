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
										<img alt="" src="{{ asset('resources/upload/'.$detail['image']) }}">
									</div>
									<div class="thumbnail-img">
										<img src="{{ asset('resources/upload/'.$detail['image']) }}" height="87" width="87" alt="" />
										<img src="{{ asset('resources/upload/'.$detail['image_detail1']) }}" height="87" width="87" alt="" />
										<img src="{{ asset('resources/upload/'.$detail['image_detail2']) }}" height="87" width="87" alt="" />
									</div>
								</div><!-- .product-images -->
								
								<div class="product-info">
									<h1>{!! $detail['product_name'] !!}</h1>
									<div class="price-box">
										<span class="addcart-text">{!! number_format(round(floor($detail['afterSale']),-3)) !!}vnđ</span>
															<span class="addcart-text-del">{!! number_format(round(floor($detail['price']),-3)) !!} vnđ</span>
									</div>
									<a href="#" class="see-all">See all features</a>
									<div class="quick-add-to-cart">
										<form method="post" class="cart">
											<div class="numbers-row">
												<input type="number" id="french-hens" value="3">
											</div>
											<button class="single_add_to_cart_button" type="submit">Thêm vào giỏ</button>
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