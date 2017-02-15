@extends('layouts.master')
@section('category')
	{!! $countcate !!}
@endsection
@section('product')
	{!! $countpro !!}
@endsection
@section('content')
	<strong><h3>DANH SÁCH THỂ LOẠI</h3></strong>
	<br />
	<form role="form" action="{!! url('admin/category/search') !!}" method="get" id="frmsearch">
		
		<div class="row">
		   <div class="col-lg-6">
	    <div class="input-group">
		      <input type="text" class="form-control" name="name" placeholder="Nhập từ khóa tìm kiếm...">
		      <span class="input-group-btn">
		        <button class="btn btn-success" type="submit" name="timkiem" onclick="load_ajax()" value="Tìm kiếm">Tìm kiếm</button>
		      </span>
		    </div><!-- /input-group -->
		  </div><!-- /.col-lg-6 -->
	  </div>
	</form>
	 <div class="table-responsive">
		<table class="table table-hover">
		    <thead>
		      <tr>
		        <th style="text-align: center;">Stt</th>
		        <th style="text-align: center;">Tên thể loại</th>
		        <th style="text-align: center;">Tên thể cha</th>
		        <th style="text-align: center;">Alias</th>
		        <th colspan="2" style="margin-left:30px; text-align: center;" ><a href="add"><img class="img-responsive" title="Thêm sản phẩm" src="{{ asset('public/image/add.png') }}" style="height:30px;width:30px;"></a></th>
		      </tr>
		    </thead>
		    <tbody>
			<?php $index = 1;?>
		    @foreach($cate as $category)
		      <tr>
		      	<td style="text-align: center;"> {!!  $index++ !!} </td>
		        <td>  {!! $category->category_name !!} </td>
		        <td>  {!! $category->parent_name !!} </td>		        
		        <td>  {!! $category->alias !!} </td>
		        <td><a href="{!!  URL::route('admin.category.getEdit',$category->id)  !!}"><img  src="{{ asset('public/image/edit.png') }}" title="Sửa Thể Loại" style="height:30px;width:30px;"></a></td>
		        <td><a href="{!!  URL::route('admin.category.delete',$category->id)  !!}" onclick="xacnhan()"><img  src="{{ asset('public/image/DeleteRed.png') }}" title="Xóa Thể Loại" style="height:30px;width:30px;"></a></td>
		      </tr>
		    @endforeach
		    </tbody>
	  </table>
	</div>
	<div class="row">
	  	<div class="col-sm-8">
	  		<div class="text-center">
	  			{!! $cate->render() !!}
	  		</div>
	  	</div>
	</div>
@endsection