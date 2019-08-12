<?php 
session_start();
unset($_SESSION['username']);
unset($_SESSION['data']);
$_SESSION['check']="a";

$users = [];
$obj1 = new stdClass;
$obj1 ->username = "a";
$obj1 ->password = "1";
$users[]=$obj1;

$obj1 = new stdClass;
$obj1 ->username = "Admin";
$obj1 ->password = "admin";
$users[]=$obj1;

$obj2 = new stdClass;
$obj2 ->username = "nguyennam2";
$obj2 ->password = "nguyennam2";
$users[]=$obj2;

$username=isset($_POST['username'])?$_POST['username']:"";
$password=isset($_POST['password'])?$_POST['password']:"";
if ($username!="" && $password!=""){
	foreach ($users as $user) {
		if($user->username==$username && $user->password==$password){
			$_SESSION['username']= $username;
			header('location:trangchu.php');
		}		
	}
} else{
	$error="Tên đăng nhập hoặc mật khẩu sai!";
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Form</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
	<style type="text/css"></style>
</head>
<body>
	<div class="login-form">
		<form action="dangnhap.php" method="post">   
			<label>Tên Đăng Nhập</label>
			<div class="form-group col-md-4">
				<input type="text" class="form-control" name="username"placeholder="Username" required="required">
			</div>
			<label>Mật Khẩu</label>
			<div class="form-group col-md-4">
				<input type="password" class="form-control" name="password"placeholder="Password" required="required">
			</div>
			<div class="form-group col-md-4">
				<button type="submit" class="btn btn-primary btn-block">Log in</button>
			</div>      
		</form>
	</div>
</body>
</html>