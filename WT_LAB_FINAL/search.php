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
	$sql = "select * from users";
	$result = mysqli_query($conn, $sql);
	$users = [];

	while($user = mysqli_fetch_assoc($result)){
		array_push($users, $user);
	}
 ?>