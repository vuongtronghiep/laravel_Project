<!DOCTYPE html>
<html>
<head>
	<title>Add user</title>
	<link rel="stylesheet" href="{{ asset('public/css/add.css') }}">
	<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
</head>
<body>
	<p> Thêm user </p>
	<form method="post" action="{{ URL::action('UserController@create') }}">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
		UserName:<input type="text" name="tk"><br><br>
		passWord:<input type="password" name="pass"><br><br>
		fullName:<input type="text" name="full"><br><br>
		sex:<select name="sex">
			<option>Nam</option>
			<option>Nữ</option>
		</select><br><br>
		address:<input type="text" name="addr"><br><br>
		phone:<input type="text" name="phone"><br><br>
		birth:<input type="date" name="birth"><br><br>
		
		<input type="submit" name="add">
		
	</form>
</body>
</html>