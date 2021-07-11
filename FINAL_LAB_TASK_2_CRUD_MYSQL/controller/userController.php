<?php
	session_start();
	require_once('../model/usersModel.php');
	if(isset($_REQUEST['create'])){

		$username 	= $_REQUEST['username'];
		$email 	= $_REQUEST['email'];
		$type 	= $_REQUEST['type'];
		$password 	= $_REQUEST['password'];


		//insert into file or database
		$users = $_SESSION['users'];
		$id = count($users)+1;
		$user = ['id'=>$id, 'password'=>$password, 'username'=> $username, 'email'=> $email, 'type'=> $type];
		//update by ref...
		//echo $user['id']."|<br>";
		//echo $user['username']."|<br>";
		//echo $user['email']."|<br>----------";
		$_SESSION['users'] = $users;
		insertUser($user);
		header('location: ../view/view_users.php');
	}


	if(isset($_REQUEST['update'])){

		$id		= $_REQUEST['id'];
		$username 	= $_REQUEST['username'];
		$email 	= $_REQUEST['email'];
		$password 	= $_REQUEST['password'];
		$type 	= $_REQUEST['type'];

		$users = $_SESSION['users'];
		$user = ['id'=>$id, 'username'=> $username,'password'=>$password, 'email'=> $email ,'type'=> $type];
		
		//update by ref...
		//echo $user['id']."<br>";
		//echo $user['username']."<br>";
		//echo $user['email']."<br>----------";
		$s=updateUser($user, $id);
		//echo "<h1> {$s} </h1>";
		header('location: ../view/view_users.php');
	}


	if(isset($_REQUEST['delete'])){

		$id	= $_REQUEST['id'];
		$s=deleteUser($id);
		header('location: ../view/view_users.php');
	}


?>