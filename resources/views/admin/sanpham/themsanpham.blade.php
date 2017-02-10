@extends('layouts.master')
@section('category')
	{!! $countcate !!}
@endsection
@section('product')
	{!! $countpro !!}
@endsection
@section('content')
	@include('errors.error')
	<form role="form" action="{!! route('admin.product.postAdd') !!}" method="post" class="form-horizontal" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="{!! csrf_token() !!}">
		<fieldset>
		    <legend><STRONG><H3>THÊM SẢN PHẨM</H3></STRONG></legend>
				<div class="form-group">
				    <label class="control-label col-sm-2" for="pwd">Tên sản phẩm: </label>
				    <div class="col-sm-10">
				    		<input type="text" class="form-control" placeholder="Tên sản phẩm..." name="ten">
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
				<div class="form-group">
				    <label class="control-label col-sm-2" for="pwd">Ảnh bìa: </label>
				    <div class="col-sm-10">
				    	<input type="file" class="form-control" name="anhbia">
				    </div>
				</div>
				<div class="form-group">
				    <label class="control-label col-sm-2" for="pwd">Ảnh chi tiết 1: </label>
				    <div class="col-sm-10">
				    	<input type="file" class="form-control" name="anhchitiet1">
					</div>
				</div>
				<div class="form-group">
				 <label class="control-label col-sm-2" for="pwd">Ảnh chi tiết 2: </label>
				 	<div class="col-sm-10">
				    	<input type="file" class="form-control" name="anhchitiet2">
				    </div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="pwd">Kích cỡ (Size): </label>
					 <div class="col-sm-10">
					    <input type="text" class="form-control" placeholder="X, XL, M, S..." name="size">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="pwd">Mô tả: </label>
					<div class="col-sm-10">
						<textarea class="form-control" rows="5" id="comment" placeholder="Mô tả chi tiết về sản phẩm..." name="mota"></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="pwd">Giá: </label>
					<div class="col-sm-10">
				    	<input type="number" class="form-control" placeholder="Ví dụ: 1000000 vnđ" name="gia">
				    </div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="pwd">Khuyến Mại: </label>
					<div class="col-sm-10">
				    	<input type="number" class="form-control" placeholder="Ví dụ: 20%..." name="sale">
				    </div>
				</div>
				<div class="row">
					<div class="col-md-2 col-md-offset-4">
				    	<button type="reset" class="btn btn-danger"><span class="glyphicon glyphicon-minus-sign"></span> Nhập Lại</button></div>
				    <div class="col-md-4">
				    	<button type="submit" class="btn btn-success" name="themmoi" value="themmoi"><span class="glyphicon glyphicon-plus-sign"></span> Thêm Mới</button></div>
				</div>
		</fieldset>
	</form>
@endsection