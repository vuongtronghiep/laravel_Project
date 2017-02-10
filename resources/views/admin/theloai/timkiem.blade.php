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
		        <th>ID</th>
		        <th>Tên thể loại</th>
		        <th>Tên thể cha</th>
		        <th>Alias</th>
		        <th colspan="2" style="margin-left:30px;"><a href="add"><img class="img-responsive" title="Thêm sản phẩm" src="{{ asset('public/image/add.png') }}" style="height:30px;width:30px;"></a></th>
		      </tr>
		    </thead>
		    <tbody>
		
		    @foreach($list1 as $category)
		      <tr>
		      	<td> {!!  @$category['id'] !!} </td>
		        <td>  {!! @$category['category_name'] !!} </td>
		        <td>  {!! @$category['parent_name'] !!} </td>		        
		        <td>  {!! @$category['alias'] !!} </td>
		        <td><a href="{!!  URL::route('admin.category.getEdit',@$category['id'])  !!}"><img  src="{{ asset('public/image/edit.png') }}" title="Sửa Thể Loại" style="height:30px;width:30px;"></a></td>
		        <td><a href="{!!  URL::route('admin.category.delete',@$category['id'])  !!}" onclick="xacnhan()"><img  src="{{ asset('public/image/DeleteRed.png') }}" title="Xóa Thể Loại" style="height:30px;width:30px;"></a></td>
		      </tr>
		    @endforeach
		    </tbody>
	  </table>
	</div>
	
@endsection