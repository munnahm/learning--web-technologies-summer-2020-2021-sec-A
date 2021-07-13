<?php
	$conn = new mysqli('localhost','root','','product_db');
	$sql = "select * from products";
	$result = mysqli_query($conn, $sql);
	$products = [];

	while($product = mysqli_fetch_assoc($result)){
		array_push($products, $product);
	}
	//print_r($products);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<fieldset>
		<legend>DISPLAY</legend>
		<form method="post" action="">
			<table border="1">
				<tr>
					<th>NAME</th>
					<th>PROFIT</th>
				</tr>
				<?php for($i=0;$i<count($products);$i++){?>
					<tr>
						<td>
							<?php echo $products[$i]['name']?>
						</td>
						<td>
							<?php echo $products[$i]['sprice']-$products[$i]['bprice']?>
						</td>
						<td>
							<a href="#">edit</a>
						</td>
						<td>
							<a href="#">delete</a>
						</td>
					</tr>
				<?php } ?>
			</table>
		</form>
	</fieldset>
</body>
</html>

