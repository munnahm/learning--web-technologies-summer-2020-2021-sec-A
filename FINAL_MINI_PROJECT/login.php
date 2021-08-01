<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST">
		<fieldset>
			<legend>LOGIN</legend>
			User Id<br>
			<input type="text" name="id"><br>
			Password<br>
			<input type="password" name="password"><br>
			<input type="checkbox" name="">Remember me<br>
			______________________<br>
			<input type="submit" name="submit" value="Login"> 
			<a href="registration.php">Register</a>
		</fieldset>
	</form>
</body>
</html>

<?php 
if(isset($_REQUEST['submit']))
{
	$con=mysqli_connect('localhost','root','','webtech');
	$sql = "select * from users where id='{$_REQUEST['id']}' and password='{$_REQUEST['password']}'";
	$result = mysqli_query($con, $sql);
	$user = mysqli_fetch_assoc($result);
	print_r( $user);
	if(count($user)!=0)
	{
		setcookie('flag', 'true', time()+3600, '/');
		print_r( $_COOKIE['flag']);
	}
}
?>