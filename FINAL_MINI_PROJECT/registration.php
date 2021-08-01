<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="register.php">
		<fieldset>
			<legend>REGISTRATION</legend>
			Id<br>
			<input type="text" name="id"><br>
			Password<br>
			<input type="password" name="password"><br>
			Confirm Password<br>
			<input type="password" name="cpassword"><br>
			Name<br>
			<input type="text" name="name"><br>
			Email<br>
			<input type="email" name="email"><br>
			User Type [User/Admin]<br>
			<select name="type">
				<option>User</option>
				<option>Admin</option>
			</select><br>
			______________________<br>
			<input type="submit" name="submit" value="Register"> 
			<a href="login.html">Login</a>
		</fieldset>
	</form>
	<p style="color:red"><?=$_SESSION['temp']?></p>
</body>
</html>
<?php 
$_SESSION['temp']="";
 ?>