@extends('layouts.masterDetailIndex')
@section('main')
	<!-- CART_LIST_AREA START-->
	<div class="cart_list_area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="single_cart_list table-responsive">
						<table class="table">
							<tr>
								<th class="delete_icon align-center">Stt</th>
								<th class="delete_icon align-center" colspan="2">Thao tác</th>
								<th class="c_prod_images align-center">Hình Ảnh</th>
								<th class="c_prod_name align-center">Tên sản phẩm</th>
								<th class="c_qnt align-center">Số lượng</th>
								<th class="sub_total align-center">Giá</th>
								<th class="grand_total align-center">Thành tiền</th>
							</tr>
							<?php $index = 1; ?>
							
							<form method="GET" acton="">
								<input name="_token" type="hidden" id="token" value="{!! csrf_token() !!}">
							@if(empty($content))
								<?php echo "<h3>Bạn chưa có sản phẩm nào trong giỏ hàng</h3>";?>
							@endif
							@foreach($content as $item)
							<tr>
								<td class="align-center">{!! $index++ !!}</td>
								<td class="align-center"><a href="{{ url('xoa-san-pham/'.$item['rowId']) }}">
									<i class="fa fa-trash-o"></i></a>
								</td>
								<td class="align-center">
									<a href="" id="{!! $item['rowId'] !!}" class="updateCart"><i class="fa fa-pencil-square-o "  aria-hidden="true"></i></a>
								</td>
								<td><img src="{{ asset('resources/upload/'.$item['options']['image']) }}"/></td>
								<td>
									<p class="prod_name"><a href="#">{!! $item['name'] !!}</a></p><p>Size: 42</p>
								</td>
								<td class="align-center"><input type="text" class="qty"  id="abc" name="qty[40]" value="{!! $item['qty'] !!}"/></td>
								<td class="align-center"><span class="cart_price align-center">
									{!! number_format(round(floor($item['price']),-3)) !!} vnđ</span>
								</td>
								<td class="align-center"><span class="cart_price align-center">
									{!! number_format(round(floor($item['price']*$item['qty']),-3)) !!} vnđ</span>
								</td>
							</tr>
							
							@endforeach
							</form>
						</table>
					</div>
				</div>
			</div>
			<div class="total_subtotal_area">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="total_subtotal">
							<div class="total">
								<span>Tổng tiền:</span> {!! $total !!}
								@if(empty($content))
								<div class="category_prod_card_area" id="payment">
									<a href="{!! url('thanh-toan') !!}" class="add-text-lis">
										<i class="fa fa-credit-card" aria-hidden="true"></i> Thanh toán
									</a>
								</div>
								@endif
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- CART_LIST_AREA END-->
@endsection
