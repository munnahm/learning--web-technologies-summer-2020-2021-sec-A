<?php
	if($_POST['name']!='' && $_POST['password']!='')
	{
		session_start();
		if($_POST['name']==$_SESSION['user']['name'] && $_POST['password']==$_SESSION['user']['password'])
		{
			session_start();
			$_SESSION['flag']=1;
			header('location: loginDashbord.php') ;
		}
		else
			echo "Invalide name or password!";
	}
	else
		echo "Type name/password first!";
?>

