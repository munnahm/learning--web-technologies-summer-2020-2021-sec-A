 <?php
	$conn = mysqli_connect('localhost','root','','webtech');
	//$sql="select * from emails";
	//echo $_POST['email'];
	$sql = "DELETE FROM emails WHERE email='{$_POST['email']}';";
	$s="";
	$result=mysqli_query($conn, $sql);
	//echo $s."<br>";
	if($result)
	{
		$s.= $_POST['email']." is Unsubscribed successfully";
		echo $s."<br>";
	}
	else
	{
		$s.="Somethink is worong to Unsubscribe! ";
		echo $s."<br>";
	}
 ?>