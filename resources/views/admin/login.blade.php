<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Đăng nhập vào hệ thống</title>
<link rel="stylesheet" type="text/css" href="{{ asset('public/css/dangnhap.css') }}">

</head>

<body>
	<form method="post" action="{{ route('admin.postLogin') }}">
	<input type="hidden" name="_token" value="{!! csrf_token() !!}">
	  <fieldset>
	    <legend>ĐĂNG NHẬP VÀO HỆ THỐNG:</legend>
	    <lable><p>Tên Đăng Nhập</p> <input type="text" name="user"  placeholder="Hãy Nhập tên đăng nhập..." class="taikhoan" ></lable>
	    
	    <lable><p>Mật Khẩu </p><input type="password" name="password" placeholder="Hãy Nhập mật khẩu..." class="matkhau"></lable>
	    
	    <div class="submit">
	    	<input type="submit" name="dangnhap" value="Đăng Nhập" class="dangnhap">
	     	<input type="reset" name="huy" value="Hủy" class="huy"></div><br>
	    <ul>
	    	<li><a href="#"> Về Trang chủ</a></li>

	    </ul> 
	  </fieldset>
	</form>
	<footer><p>Copy right Kenlily</p></footer>
</body>

</html>