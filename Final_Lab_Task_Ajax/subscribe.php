 <?php
	$conn = mysqli_connect('localhost','root','','webtech');
	//$sql="select * from emails";
	//echo $_POST['email'];
	$sql = "INSERT INTO emails (email) VALUES ('{$_POST['email']}');";
	$s="";
	$result=mysqli_query($conn, $sql);
	//echo $s."<br>";
	if($result)
	{
		$s.= $_POST['email']." is Subscribed successfully";
		echo $s."<br>";
	}
	else
	{
		$s.="Somethink is worong to Subscribe! ";
		echo $s."<br>";
	}
 ?>