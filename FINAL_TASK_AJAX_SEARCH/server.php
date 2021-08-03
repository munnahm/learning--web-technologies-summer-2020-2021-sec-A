<?php 
	$conn=mysqli_connect('localhost','root','','webtech');
	$sql = "select * from emails where email like '{$_POST['data']}%'";
	$result = mysqli_query($conn, $sql);
	$arys = [];
	while($ary = mysqli_fetch_assoc($result)){
		array_push($arys, $ary);
	}
	header('Content-type: application/json');
	echo json_encode($arys);
 ?>