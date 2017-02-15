@extends('layouts.master')
@section('category')
	{!! $countcate !!}
@endsection
@section('product')
	{!! $countpro !!}
@endsection
@section('content')
	@foreach($idpro as $product)
	<form role="form" action="{!! url('admin/product/edit').'/'.@$product['id'] !!}" method="post" class="form-horizontal" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="{!! csrf_token() !!}">
		<fieldset>
		    <legend><STRONG><H3>SỬA SẢN PHẨM</H3></STRONG></legend>
				<div class="form-group">
				    <label class="control-label col-sm-2" for="pwd">Tên sản phẩm: </label>
				    <div class="col-sm-10">
				    		<input type="text" class="form-control" value="{!! @$product['product_name'] !!}" name="ten">
				    </div>
				</div>
				
				<div class="form-group">
				    <label class="control-label col-sm-2" for="pwd">Thể Loại cũ: </label>
				    <div class="col-sm-10">
				    	{!! @$product['category_name'] !!}
				    </div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="pwd">Tên thể loại: </label>
					<div class="col-sm-10">
						<select class="form-control" id="sel1" name="theloai">
							@foreach($category as $cate)
						    <option value="{!! @$cate['id'] !!}">{!! @$cate['category_name'] !!}</option>
						    @endforeach
						</select>
					</div>
				</div>
				<input type="hidden" name="anhbia_old" value="{!! $product['image'] !!}">
				<input type="hidden" name="anhchitiet1_old" value="{!! $product['image_detail1'] !!}">
				<input type="hidden" name="anhchitiet2_old" value="{!! $product['image_detail2'] !!}">
				<div class="form-group">
				    <label class="control-label col-sm-2" for="pwd">Ảnh bìa: </label>
				    <div class="col-sm-6">
				    	<input type="file" class="form-control" name="anhbia">
				    </div>
				    <div class="col-sm-4">
				    	<img src="{!! asset('resources/upload/'.$product['image']) !!}"></td>
				    </div>
				</div>
				<div class="form-group">
				    <label class="control-label col-sm-2" for="pwd">Ảnh chi tiết 1: </label>
				    <div class="col-sm-6">
				    	<input type="file" class="form-control" name="anhchitiet1">
					</div>
					<div class="col-sm-4">
				    	<img src="{!! asset('resources/upload/'.$product['image_detail1']) !!}">
				    </div>
				</div>
				<div class="form-group">
				 <label class="control-label col-sm-2" for="pwd">Ảnh chi tiết 2: </label>
				 	<div class="col-sm-6">
				    	<input type="file" class="form-control" name="anhchitiet2">
				    </div>
				    <div class="col-sm-4">
		       			 <img src="{!! asset('resources/upload/'.$product['image_detail2']) !!}">
				    </div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="pwd">Kích cỡ (Size): </label>
					 <div class="col-sm-10">
					    <input type="text" class="form-control" placeholder="X, XL, M, S..." name="size" value="{!! @$product['size'] !!}">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="pwd">Mô tả: </label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="mota" value="{!! @$product['detail'] !!}">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="pwd">Giá: </label>
					<div class="col-sm-10">
				    	<input type="number" class="form-control" placeholder="Ví dụ: 1000000 vnđ" name="gia" value="{!! @$product['price'] !!}">
				    </div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="pwd">Khuyến Mại: </label>
					<div class="col-sm-10">
				    	<input type="number" class="form-control" placeholder="Ví dụ: 30% vnđ" name="sale" value="{!! @$product['sale'] !!}">
				    </div>
				</div>
				<div class="row">
					<div class="col-md-2 col-md-offset-4">
				    	<button type="reset" class="btn btn-danger"><span class="glyphicon glyphicon-minus-sign"></span> Nhập Lại</button>
				    </div>
				    <div class="col-md-2">
				    	<button type="submit" class="btn btn-success" name="themmoi" value="themmoi"><span class="glyphicon glyphicon-plus-sign"></span> Sửa</button>
				    </div>
				    <div class="col-md-2">
				    	<a href="{!!  URL::route('admin.product.list')  !!}" class="btn btn-success" name="huy" value="themmoi"><span class="glyphicon glyphicon-forward"></span> Hủy bỏ</a>
				    </div>
				</div>
		</fieldset>
	</form>
	@endforeach
@endsection