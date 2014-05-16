<?php 
	session_start();
	include ("database.php");
	//Retrieve the information submitted from user
	$username=$_POST["username"];
	$password=$_POST["password"];
	// echo $username;
	// echo $password;
	//Check username and password
	$userArray = checkLogin($username, $password);
	//if already register 
	if($userArray['account_id'] !== -1){
		//create session
		session_regenerate_id();
			$_SESSION['sess_user_id'] = $userArray['account_id'];
			$_SESSION['sess_username'] = $username;
			$_SESSION['sess_user_avatar'] = $userArray['avatar'];
			$_SESSION['sess_user_type'] = $userArray['user_type'];
		session_write_close();
		echo 1;
	}else
		echo 0;
		//if not registered yet
		header("Location:../index.php");
?>
