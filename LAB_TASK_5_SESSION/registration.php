<?php
	session_start();
?>
<html>
	<head></head>
	<FORM method="POST">
		<body>
				<fieldset>
				XCompany
				<h4 align="right"><a href="public_home.html" align="right">Home</a>|
				<a href="login.php">Login</a>|
				<a href="registration.php">Registartion</a>
				</h4>
					<fieldset>
					<fieldset>
				<legend>REGISTRATION</LEGEND>
					Name:
					<input type="text" name="name" value="munna"><br>________________________<br>
					Email:
					<input type="Email" name="email" value="munnagalaxya7@gmail.com"><br>________________________<br>
					User Name:
					<input type="text" name="userName" value="munnahm"><br>________________________<br>
					Password:
					<input type="password" name="password" value="123"><br>________________________<br>
					Confirm Password:
					<input type="password" name="comPassword" value="123"><br>________________________<br>
					
				
				<!--3--><fieldset>
				<legend>Gender</legend>
					
						<input type="radio" name="gender" value="Male">Male
						<input type="radio" name="gender" value="Female">Female
						<input type="radio" name="gender" value="Other">Other
						</fieldset>
						<br>________________________<br>
					
					
				
				<!--4-->
					<fieldset>
				<legend>Date of Birth</legend>
					
						<input type="number" name="dd" value="22" size="100px">/
						<input type="number" name="mm" value="08" size="2px">/
						<input type="number" name="yy" value="99" size="4px">
						(dd/mm/yyyy)
						</fieldset>
						<br>________________________<br>
						
					
				<!--9-->
						<input type="Submit" name="submit">
						<input type="reset" name="Reset"><br>
						<?php
						if(isset($_POST['submit']))
						{
							$_SESSION['user']=array("name"=>$_POST['name'],"email"=>$_POST['email'],"userName"=>$_POST['userName'],"password"=>$_POST['password'],"comPassword"=>$_POST['comPassword'],"gender"=>$_POST['gender'],"dd"=>$_POST['dd'],"mm"=>$_POST['mm'],"yy"=>$_POST['yy']);
							//echo $_POST['name'];
							echo $_SESSION['user']['name'];
						}
						?>

				
			</fieldset>

					
					</fieldset>
					<center>
					Copyright &copy 2017
					</center>
				</fieldset>
		</body>
	</FORM>
</html>
