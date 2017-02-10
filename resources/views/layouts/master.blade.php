<html>
    <head>
        <title>Quản Trị Hệ Thống</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  		<link rel="stylesheet" href="{{ asset('public/css/layouts/master.css') }}">
  		
  		<script type="text/javascript">
  			<!--AJAX-->
			    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
		function xacnhan(){
			alert("bạn có chắc chắn muốn xóa?");
		}
  		</script>
    </head>
    <body>
        <div class="container-fuild">
        	<div class="header">
        		<div class="row">
        			<div class="col-md-4"><h3>QUẢN TRỊ HỆ THỐNG</h3>
        			</div> 
        			<div class="col-md-1 col-md-offset-6">
        				<!-- Split button -->
						<div class="btn-group">
						  <button type="button" class="btn btn-info"><span class="glyphicon glyphicon-user"></span></button>
						  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
						    <span class="caret"></span>
						    <span class="sr-only">Toggle Dropdown</span>
						  </button>
						  <ul class="dropdown-menu" role="menu">
						  	<li class="divider"></li>
						    <li><a href="#">Thông tin Tài khoản</a></li>
						    <li><a href="#">Đổi mật khẩu</a></li>
						    <li class="divider"></li>
						    <li><a href="{!! url('admin/home/logout') !!}">Đăng xuất</a></li>
						  </ul>
						</div>
        			</div>       	       				
        		</div>	
        	</div>
        		<!-nav->
        	<div class="nav">
        		<div class="row">
        			<div class="col-sm-10 col-sm-offset-1">
        			<br/>

        				<div class="das"> <a href="{!! URL::route('admin.home.get') !!}">DASBROAD</a></div>
        		
        			<hr>
				<!-thể loại-> 
        				<div class="panel-group" id="accordion">
						    <div class="panel panel-default">
							    <div class="panel-heading">
							        <h4 class="panel-title">
							          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">THỂ LOẠI</a>
							          <span class="badge pull-right">@yield('category')</span>
							        </h4>
							    </div>
						     	<div id="collapse1" class="panel-collapse collapse">
						        <div class="panel-body">
						        	<ul>
						        		<li><a href="{!! URL::route('admin.category.list') !!}">Danh sách Thể Loại</a></li>
						        		<li><a href="{!! URL::route('admin.category.getAdd') !!}">Thêm mới</a></li>
						        	</ul>
						        </div>
						    </div>
						</div>
						<hr>
				<!-Sản phẩm->
						<div class="panel panel-default">
						    <div class="panel-heading">
						        <h4 class="panel-title">
						          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">SẢN PHẨM</a>
						          <span class="badge pull-right">
										@yield('product')
						          </span>
						        </h4>
						    </div>
						    <div id="collapse2" class="panel-collapse collapse">
						        <div class="panel-body">
						        	<ul>
						        		<li><a href="{!! URL::route('admin.product.list') !!}">Danh sách sản phẩm</a></li>
						        		<li><a href="{!! URL::route('admin.product.getAdd') !!}">Thêm mới</a></li>
						        	</ul>
						        </div>
						    </div>
						</div>
						<hr>
				<!-Đơn hàng->
						<div class="panel panel-default">
						    <div class="panel-heading">
						        <h4 class="panel-title">
						          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">ĐƠN HÀNG</a>
						          <span class="badge pull-right">
						          		@yield('order')
						          </span>
						        </h4>
						    </div>
						    <div id="collapse3" class="panel-collapse collapse">
						        <div class="panel-body">
						        	<ul>
						        		<li><a href="">Danh sách đơn hàng</a></li>
						        		<li><a href="">Đơn hàng chưa duyệt</a></li>
						        	</ul>
						        </div>
						    </div>
						</div>
						<hr>
				<!-Khách hàng->
						<div class="panel panel-default">
						    <div class="panel-heading">
						        <h4 class="panel-title">
						          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">KHÁCH HÀNG</a>
						          <span class="badge pull-right">
						          		@yield('user')	
						          </span>
						        </h4>
						    </div>
						    <div id="collapse4" class="panel-collapse collapse">
						        <div class="panel-body">
						        	<ul>
						        		<li><a href="">Danh sách Khách</a></li>
						        	</ul>
						        </div>
						    </div>
						</div>
        			</div>
        		</div>
        	</div>
        	</div>
				<!-end nav->
				<br />
			<div class="main">
				<div class="row">
					<div class="col-sm-12">
						@if(Session::has('flash_message'))
							<div class="alert alert-success">
								{!! Session::get('flash_message') !!}
							</div>
						@endif
					</div>
				</div>	
				<div class="row">
					<div class="col-sm-12">
            			@yield('content')
            		</div>
            	</div>
            </div>
			<div class="footer">
				<div class="row">
					<div class="col-sm-11" style="text-align: center;"> CopyRight @Kenlily</div>
				</div>
			</div>
        </div>
    </body>
</html>