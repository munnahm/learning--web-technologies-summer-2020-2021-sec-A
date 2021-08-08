<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="dashbord.php">
		Username: <input type="text" name="username"><br><br>
		Password: <input type="password" name="password"><br><br>
		<input type="submit" name="login" value="login">
	</form>
</body>
</html>
<?php
	if(isset($_POST['login']))
	{
		if($_POST['username']!='admin' && $_POST['password']!='admin')
		{
			header('location: dashbord.php');
		}
		else if($_POST['username']!='' && $_POST['password']!='')
		{
			session_start();
			$conn=mysqli_connect('localhost','root','','webtech');
			$username=$_REQUEST['username'];
			$password=$_REQUEST['password'];
			$sql = "select * from emp where username='{$username}' and password='{$password}'";
			$result="";
			$result=mysqli_query($conn, $sql);
			$user = mysqli_fetch_assoc($result);
			//echo mysqli_num_rows($s)."<br>";
			if(mysqli_num_rows($result)>0)
			{
				header('location: dashbord.php');
			}
		}
		else
		{
			echo '<h2>Password/Username is empty!</h2>'; 
		}
	}


  ?>