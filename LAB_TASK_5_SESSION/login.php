<?php 
session_start();
$_SESSION['flag']=0;
?>
<html>
	<head></head>
	<FORM method="POST" action="checkLogin.php">
		<body>
				<fieldset>
				XCompany<h4 align="right"><a href="public_home.html" align="right">Home</a>|
				<a href="login.php">Login</a>|
				<a href="registration.php">Registartion</a>
				</h4>
					<fieldset>
					<fieldset>
				<legend>LOGIN</LEGEND>
					Name:
					<input type="text" name="name" value=""><br>
					Password:
					<input type="password" name="password" value=""><br>________________________________________<br>
					
				
					<!--6-->
					
						<input type="checkBox" name="RememmberMe" value="">Rememmber Me
						<br>
					
					
				
						<!--9-->
						<input type="Submit" name="Submit">
						<a href="forgetPassword.php">Forget Password?</a>
						<br>
					
				
			</fieldset>

					
					</fieldset>
					<center>
					Copyright &copy 2017
					</center>
				</fieldset>
		</body>
	</FORM>
</html>
