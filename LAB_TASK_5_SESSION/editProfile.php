
<fieldset>
							
</fieldset>
<?php
	session_start();
	if($_SESSION['flag']==1)
	{
?>
<html>
	<head></head>
	<FORM method="POST">
		<body>
				<fieldset>
				XCompany<h4 align="right">Logged in as <a href="profile.php" align="right"><?php echo $_SESSION['user']['name'];?></a>|
				<a href="login.php">Logout</a>
				</h4>
					<table border=1 width=100%>
					<tr>
						<td>
						<h4>Account<br>_________</h4>
						<ul>
							<li> <a href="loginDashbord.php" name="i1">Dashbord</a></li>
							<li> <a href="profile.php">View Profile</a></li>
							<li> <a href="editProfile.php">Edit Profile</a></li>
							<li> <a href="changePicture.php">Change Profile Picture</a></li>
							<li> <a href="changePassword.php">Change Password</a></li>
							<li> <a href="login.php">Logout</a></li>
						</ul>
						</td>
						<td>
							<fieldset>
								<legend>EDIT PROFILE</legend>
								<table>
									<tr>
										<td>
										Name: <input type="text" name="name" value=""><br>
										Email: <input type="email" name="email" value=""><br>
										Gender: <input type="radio" name="gender" value="Male">Male
										<input type="radio" name="gender" value="Female">Female
										<input type="radio" name="gender" value="Other">Other<br>
										Date of Birth: <input type="int" name="dd" value="">/
										<input type="int" name="mm" value="">/
										<input type="int" name="yy" value=""><br>_______________________________<br>
										<input type="Submit" name="submit">
										<br>
										<?php
										if(isset($_POST['submit']))
										{
											$_SESSION['user']=array("name"=>$_POST['name'],"email"=>$_POST['email'],"userName"=>$_POST['userName'],"password"=>$_POST['password'],"comPassword"=>$_POST['comPassword'],"gender"=>$_POST['gender'],"dd"=>$_POST['dd'],"mm"=>$_POST['mm'],"yy"=>$_POST['yy']);
											//echo $_POST['name'];
											echo $_SESSION['user']['name'];
										}
										?>
										</td>
										<td>

										</td>
									</tr>
								</table>
								
							</fieldset>
						</td>
					</tr>
				
					</table>
					<center>
					Copyright &copy 2017
					</center>
				</fieldset>
		</body>
	</FORM>
</html>
<?php
	}
	else
		echo "Invalid Request!";
?>
<?php
?>
