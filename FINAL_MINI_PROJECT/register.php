<?php
session_start();
if($_REQUEST['id']!="" && $_REQUEST['password']!="" && $_REQUEST['cpassword']!="" && $_REQUEST['name']!="" && $_REQUEST['email']!="")
{
	if($_REQUEST['password']==$_REQUEST['cpassword'])
	{
		//echo $_REQUEST['type'];
		$con=mysqli_connect('localhost','root','','webtech');
		$sql = "INSERT INTO users (id,username,password,email,type) VALUES ({$_REQUEST['id']},'{$_REQUEST['name']}','{$_REQUEST['password']}','{$_REQUEST['email']}','{$_REQUEST['type']}');";
		$s="";
		$s=mysqli_query($con, $sql);
		//echo $s."<br>";
		if($s)
		{
			$_SESSION['temp']= "Data inserded...";
			header('location:registration.php');
		}
		else
		{
			$_SESSION['temp']="Data not inserded! ";
			header('location:registration.php');
		}

	}
	else
	{
		$_SESSION['temp']="Confirm password not mutch!!";
		header('location:registration.php');
	}
}
else
{
	$_SESSION['temp']="Information is missing!!";
	header('location:registration.php');
}
?>