<?php
	include ("database.php");
	$username = $_POST["username"];
	$isExist = checkRegisteredUser($username);

	if($isExist==true) echo 0;//username already existed
	else echo 1;//username available
?>