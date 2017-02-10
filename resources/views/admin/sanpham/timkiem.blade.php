@extends('layouts.master')
@section('category')
	{!! $countcate !!}
@endsection
@section('product')
	{!! $countpro !!}
@endsection
@section('content')
	<strong><h3>KẾT QUẢ TÌM KIẾM</h3></strong>
	<br />
	<form class="form-inline" role="form" action="{!! url('admin/product/search') !!}">
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
		      <tr>
		        <th>ID</th>
		        <th>Tên sản phẩm</th>
		        <th>Tên thể loại</th>
		        <th>Ảnh bìa</th>
		        <th>Ảnh chi tiết 1</th>
				<th>Ảnh chi tiết 2</th>
				<th>Kích cỡ</th>
		        <th>Giá</th>
		        <th>Sale</th>
		        <th>PriceSale</th>
		        <th>view</th>
		        <th colspan="2" style="margin-left:30px;"><a href="add"><img class="img-responsive" title="Thêm sản phẩm" src="{{ asset('public/image/add.png') }}" style="height:30px;width:30px;"></a></th>
		      </tr>
		    </thead>
		    <tbody>
		    @foreach($pro as $product)
		      <tr style="text-align:center">
		        <td>{!! $product->id !!}</td>
		        <td>{!! $product->product_name !!}</td>
		        <td>{!! $product->category_name !!}</td>
		        <td><img src="{!! asset('resources/upload/'.$product->image) !!}"></td>
		        <td><img src="{!! asset('resources/upload/'.$product->image_detail1) !!}"></td>
		        <td><img src="{!! asset('resources/upload/'.$product->image_detail2) !!}"></td>
		        <td>{!! $product->size !!}</td>
		        <td>{!! number_format(round(floor($product->price),-3)) !!}</td>
		        <td>{!! $product->sale !!}</td>
		        <td>{!! number_format(round(floor($product->afterSale),-3)) !!}</td>
		        <td>{!! $product->view !!}</td>
		        <td>{!! $product->view !!}</td>
		        <td><a href="{!!  URL::route('admin.product.getEdit',$product->id)  !!}"><img  src="{{ asset('public/image/edit.png') }}" title="Sửa sản phẩm" style="height:30px;width:30px;"></a></td>
		        <td><a href="{!!  URL::route('admin.product.delete',$product->id)  !!}" onclick="xacnhan()"><img  src="{{ asset('public/image/DeleteRed.png') }}" title="Xóa sản phẩm" style="height:30px;width:30px;"></a></td>
		      </tr>
		    @endforeach
		    </tbody>
	  </table>
	</div>
@endsection