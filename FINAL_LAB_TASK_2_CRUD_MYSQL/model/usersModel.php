<?php
	require_once('DB_config.php');
	
	function validate($username, $password){

		$conn = getConnection();
		$sql = "select * from users where username='{$username}' and password='{$password}'";
		$result = mysqli_query($conn, $sql);
		
		if(mysqli_num_rows($result) > 0 ){
			return true;
		}else{
			return false;
		}
	}

	function getUserByID($id){

		$conn = getConnection();
		$sql = "select * from users where id='{$id}'";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	function getAllUser(){
		$conn = getConnection();
		$sql = "select * from users";
		$result = mysqli_query($conn, $sql);
		$users = [];

		while($user = mysqli_fetch_assoc($result)){
			array_push($users, $user);
		}

		return $users;
	}


	function deleteUser($id){
		$conn = getConnection();
		$sql = "DELETE FROM users WHERE id = '{$id}'";
		$s="";
		if( mysqli_query($conn, $sql))
		{
			$s.= "Data deleted...";
		}
		else
		{
			$s.="This data not found! ";
		}
		return $s;
	}


	function updateUser($user, $id){
		//$user = ['id'=>$id, 'name'=> $name, 'email'=> $email, 'type'=> $dept];
		$conn = getConnection();
		$sql = "UPDATE users SET username='{$user['username']}', password='{$user['password']}', email='{$user['email']}',type='{$user['type']}' WHERE id='{$user['id']}'";
		$s="";
		$s=mysqli_query($conn, $sql);
		echo $s."<br>";
		if($s)
		{
			$s.= "Data updated...";
		}
		else
		{
			$s.="This data not found! ";
		}
		return $s;
	}

	function insertUser($user){
		$conn = getConnection();
		$sql = "INSERT INTO users (id,username,password,email,type) VALUES ({$user['id']},'{$user['username']}','{$user['password']}','{$user['email']}','{$user['type']}');";
		$s="";
		$s=mysqli_query($conn, $sql);
		echo $s."<br>";
		if($s)
		{
			$s.= "Data inserded...";
		}
		else
		{
			$s.="Data not inserded! ";
		}
		return $s;
	}

?>