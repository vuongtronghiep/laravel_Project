@extends('layouts.master')
@section('category')
	{!! $countcate !!}
@endsection
@section('product')
	{!! $countpro !!}
@endsection
@section('content')
	<strong><h3>DANH SÁCH SẢN PHẨM</h3></strong>
	<br />
	<form class="form-inline" role="form" action="{{ url('admin/product/search') }}" method="get">
		  				<div class="form-group has-success has-feedback">
						    <input type="text" class="form-control" id="inputSuccess2" name="search" placeholder="Từ khóa tìm kiếm...">
					    </div>
					    	<button type="submit" class="btn btn-info" value=" tìm kiếm">
							    <span class="glyphicon glyphicon-search" ></span> Tìm
							</button>
	</form>
	 <div class="table-responsive">
		<table class="table table-hover">
		    <thead>
		      <tr  style="text-align: center;">
		        <th >Stt</th>
		        <th>Tên sản phẩm</th>
		        <th>Tên thể loại</th>
		        <th>Ảnh bìa</th>
		        <th>Ảnh chi tiết 1</th>
				<th>Ảnh chi tiết 2</th>
				<th>Kích cỡ</th>
		        <th>Giá</th>
		        <th>Sale %</th>
		        <th>PriceSale</th>
		        <th>view</th>
		        <th colspan="2" style="margin-left:30px;"><a href="add"><img class="img-responsive" title="Thêm sản phẩm" src="{{ asset('public/image/add.png') }}" style="height:30px;width:30px;"></a></th>
		      </tr>
		    </thead>
		    <tbody>
		    <?php $index = 1;?> 
		    @foreach($pro as $product)
		      <tr style="text-align:left;">
		        <td style="text-align: center;">{{$index++}}</td>
		        <td>{!! $product->product_name !!}</td>
		        <td>{!! $product->category_name !!}</td>
		        <td style="text-align: center;">
		        	<img src="{{{ asset('resources/upload/'.$product->image) }}}"></td>
		        <td style="text-align: center;">
		        	<img src="{!! asset('resources/upload/'.$product->image_detail1) !!}"></td>
		        <td style="text-align: center;">
		        	<img src="{!! asset('resources/upload/'.$product->image_detail2) !!}"></td>
		        <td style="text-align: center;">{!! $product->size !!}</td>
		        <td style="text-align: center;">{!! number_format(round(floor($product->price),-3)) !!}</td>
		        <td style="text-align: center;">{!! $product->sale !!}</td>
		        <td style="text-align: center;">
		        	{!! number_format(round(floor($product->afterSale),-3)) !!}</td>
		        <td style="text-align: center;">{!! $product->view !!}</td>
		        <td style="text-align: center;">
		        	<a href="{!!  URL::route('admin.product.getEdit',$product->id)  !!}"><img  src="{{ asset('public/image/edit.png') }}" title="Sửa sản phẩm" style="height:30px;width:30px;"></a></td>
		        <td style="text-align: center;">
		        	<a href="{!!  URL::route('admin.product.delete',$product->id)  !!}" onclick="xacnhan()"><img  src="{{ asset('public/image/DeleteRed.png') }}" title="Xóa sản phẩm" style="height:30px;width:30px;"></a></td>
		      </tr>
		    @endforeach
		    </tbody>
	  </table>
	  {!! $pro->render() !!}
	</div>

						
						
@endsection