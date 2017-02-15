@extends('layouts.master')
@section('category')
	{!! $countcate !!}
@endsection
@section('product')
	{!! $countpro !!}
@endsection

<!--  -->
@section('content')
	@include('errors.error')
	<form role="form" action="{!! url('admin/category/edit') . '/' . @$idcate['id'] !!}" method="post">
		<input type="hidden" name="_token" value="{!! csrf_token() !!}">
		<fieldset>
		    <legend><STRONG><H3>SỬA THỂ LOẠI</H3></STRONG></legend>
		    	<div class="form-group">
				    <label>Mã số: {!! @$idcate['id'] !!}</label>
				   
				</div>
		    	<div class="form-group">
					<label for="pwd">Tên thể loại cha </label>
						<select class="form-control" name="theloaicha">
						@foreach($list1 as $item)	
						    <option value="{!! @$item['id_parent'] !!}">{!! @$item['parent_name'] !!}</option>
						@endforeach
						</select>
						
				</div>
				
				<div class="form-group">
				    <label>Tên thể loại</label>
				    <input type="text" class="form-control"  value="{!! @$idcate['category_name'] !!}" name="name">
				</div>
				<div class="form-group">
				    <label for="exampleInputPassword1">Tên thể loại Không dấu</label>
				    <input type="text" class="form-control"   value="{!! @$idcate['alias'] !!}" name="alias">
				</div>
				
				<div class="row">
					<div class="col-md-2 col-md-offset-4">
				    	<button type="reset" class="btn btn-danger"><span class="glyphicon glyphicon-minus-sign"></span> Nhập Lại</button>
				    </div>
				    <div class="col-md-2">
				    	<button type="submit" class="btn btn-success" name="themmoi"><span class="glyphicon glyphicon-plus-sign"></span> Sửa</button>
				    </div>
				    <div class="col-md-2">
				    	<a class="btn btn-success" href="{!! URL::route('admin.category.list')  !!}" name="huy"><span class="glyphicon glyphicon-forward"></span> Hủy bỏ</a>
				    </div>
				</div>
		</fieldset>
	</form>
@endsection