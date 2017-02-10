<!DOCTYPE html>
<html>
<head>
	<title>List</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/add.css') }}">
</head>
<body>
<p>Kết quả tìm kiếm</p>

	<form method="get" action="{{ URL::action('UserController@timkiem') }}">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="text" name="txtsearch" holderplace="tìm kiếm">
	<input type="submit" name="btnsearch" value="tìm">
</form>
		<p class="a"><a href="user/add">Thêm mới</a></p>
	<table border="1px">
		<tr>
			<td>UserName</td>
			<td>FullName</td>
			<td>Sex</td>
			<td>Address</td>
			<td>phone</td>
			<td>birthday</td>
			<td colspan="2"></td>
		</tr>
		<?php foreach ($search as $user){
			 $array[] = $user;?>
		<tr>			
			<td><?php echo $user->userName;?></td>
			<td><?php echo $user->fullName;?></td>
			<td><?php echo $user->sex;?></td>
			<td><?php echo $user->address;?></td>
			<td><?php echo $user->phone;?></td>
			<td><?php echo $user->birthd;?></td>
			<td><a href="user/<?php echo $user->userName?>/edit">Sửa</a></td>
			<td><a href="user/<?php echo $user->userName?>/delete">xóa</a></td>
		</tr>
		<?php }?>
	</table>
					
</body>
</html>