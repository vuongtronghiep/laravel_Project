@extends('layouts.masterIndex')
@section('main')
<!--MAINMENU AREA START-->
<div class="container">
	<div class="main-menu">
		<div class="row men" style="padding-top: 10px;">
		<div class="col-sm-12">
			@foreach($catego as $item)

				<h3 class="area-heading"><a href="{!! URL::route('index') !!}">Trang chủ </a> >
				@foreach($t as $i) 
					@if( $item->id != $i->id )
					 	<a href="{!! url('the-loai/'.$i->id.'/'.$i->alias) !!}"> {!! $i->category_name!!}</a>  > 
					@endif
				@endforeach
				{!! $item->category_name!!}</h3> <?php break; ?>

			@endforeach
		</div>
			<div class="row">
				<div class="category-gird-product-area">
				@foreach($product as $item)
					<div class="col-sm-3">
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
								<a href="{!! url('chi-tiet/'.$item->id.'/'.$item->product_name) !!}"><span>{{ $item->product_name }}</span></a>
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
				<!--CATEGORY PRODUCT-AREA END-->
			</div>
			<!--CATEGORY PRODUCT GIRD END-->
			<!--PGAINATION AREA START-->
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="pagination-area">
						{!! $product->render() !!}
					</div>
				</div>
			</div>
			<!--PGAINATION AREA END-->
		</div>
			<!-- GIRD CATEGORY-FORM END-->
	</div>					
</div>
</div>
<div style="margin-bottom: 10px">
</div>
@endsection	