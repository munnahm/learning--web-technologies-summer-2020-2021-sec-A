<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="dashbord.php">
		<a href="search.php">Search</a>
		<a href="delet.php">Delete</a><br><br>
		ENAME: <input type="text" name="ename"><br><br>
		CNAME: <input type="text" name="cname"><br><br>
		CONTUCT: <input type="text" name="contuct"><br><br>
		Username: <input type="text" name="username"><br><br>
		Password: <input type="password" name="password"><br><br>
		<input type="submit" name="add" value="add">
	</form>
</body>
</html>
<<?php 
if(isset($_POST['add']))
{
	$conn=mysqli_connect('localhost','root','','webtech');
		$sql = "INSERT INTO emp VALUES ({$_REQUEST['ename']},'{$_REQUEST['cname']}','{$_REQUEST['contuct']}','{$_REQUEST['username']}','{$_REQUEST['password']}');";
		$s="";
		$s=mysqli_query($conn, $sql);
		echo $s."<br>";
		if($s)
		{
			$s.= "Data inserded...";
		}
		else
		{
			$s.="Data not inserded! ";
		}

}
?>