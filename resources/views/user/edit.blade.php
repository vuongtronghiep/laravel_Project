<!DOCTYPE html>
<html>
<head>
	<title>edit</title>
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
	<p> edit user </p>
	<form method="get" action="{{ URL::action('UserController@update') }}">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<?php foreach ($users as $user){
		 $array[] = $user;}?>
		
	
		UserName:<input type="text" name="tk" value="<?php echo $user->userName;?>"><br><br>
		passWord:<input type="text" name="pass" value="<?php echo $user->passWord;?>"><br><br>
		fullName:<input type="text" name="full" value="<?php echo $user->fullName;?>"><br><br>
		sex:<select name="sex">
			<option>Nam</option>
			<option>Nữ</option>
		</select><br><br>
		address:<input type="text" name="addr" value="<?php echo $user->address;?>"><br><br>
		phone:<input type="text" name="phone" value="<?php echo $user->phone;?>"><br><br>
		birth:<input type="date" name="birth" value="<?php echo $user->birthd;?>"><br><br>
		
		<input type="submit" name="update">
	</form>
</body>
</html>