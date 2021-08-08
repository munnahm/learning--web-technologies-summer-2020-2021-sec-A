<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>
<?php 
		$conn=mysqli_connect('localhost','root','','webtech');
		$sql = "DELETE FROM users WHERE id = '{$id}'";
		$s="";
		if( mysqli_query($conn, $sql))
		{
			$s.= "Data deleted...";
		}
		else
		{
			$s.="This data not found! ";
		}
 ?>