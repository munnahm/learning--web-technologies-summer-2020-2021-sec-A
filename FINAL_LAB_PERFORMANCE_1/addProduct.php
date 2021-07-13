<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<fieldset>
		<legend>ADD PRODUCT</legend>
		<form method="post" action="">
			Name<br>
			<input type="text" name="name"><br>
			Buying Price<br>
			<input type="text" name="bprice"><br>
			Selling Price<br>
			<input type="text" name="sprice"><br>
			<input type="checkbox" name="display">Display<br>
			<input type="submit" name="submit" value="SAVE">
		</form>
	</fieldset>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
	$conn = new mysqli('localhost','root','','product_db');
	echo $_POST['name'];
	$name=$_POST['name'];
	$sp=$_POST['sprice'];
	$bp=$_POST['bprice'];
	$sql="INSERT INTO products(name,bprice,sprice) VALUES ('{$name}','{$bp}','{$sp}')";
	$s=mysqli_query($conn,$sql);
	echo $s;
}
?>