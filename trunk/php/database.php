<?php
	// <html xmlns="http://www.w3.org/1999/xhtml">
	// <head>
 //    	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
 //    </head>
	// Create connection function
	function createConnection(){
		$con=mysqli_connect("localhost","black_tears","password","gameflash");

	// Check connection
	if (mysqli_connect_errno())
	  	{
	  		// echo "Failed to connect to MySQL: " . mysqli_connect_error();
	 	}
	else
		{
			// echo "Connect succesfully<br>";
	 	}
	return $con;
	}
	// Close connection
	function closeConnection($con){
		mysqli_close($con);
	}
	// Working with database:
	// Select games of category:
	function selectGamesOfCategory($type_id_input){//$type_id is a string
		//check input
		$type_id = intval($type_id_input);
		//connect database
		$con = createConnection();
		$sql_command = "SELECT game_id FROM category WHERE category.type_id=$type_id";
		//select game_id

		$game_id_list = mysqli_query($con,$sql_command);
		$game_detail_list;
		while($row = mysqli_fetch_array($game_id_list))
  		{
  			$sql_command = "SELECT * FROM games WHERE $row[game_id]=games.game_id";
  			$game_detail_list = mysqli_query($con, $sql_command);
  			while ($game_detail = mysqli_fetch_array($game_detail_list)) {
  				echo $game_detail['game_id']." | ".$game_detail['game_name']." | ".$game_detail['description']." | ".
  				$game_detail['status']." | ".$game_detail['rating']." | ".$game_detail['avatar']." | ".
  				$game_detail['link']." | ".$game_detail['upload_time'];
  				echo "<br>";
  				echo "________________________________________________";
  				echo "<br>";
  			}
  			
  		}
		//close connection
		closeConnection($con);
		return $game_detail_list;
	}

	// Select latest uploaded game:
	function selectLatestUploadedGames(){
		//connect database
		$con = createConnection();
		$sql_command = "SELECT * FROM games WHERE DATEDIFF(CURRENT_DATE , games.upload_time)<=7 LIMIT 0, 7";
		$latest_game_list = mysqli_query($con, $sql_command);
		while ($game_detail = mysqli_fetch_array($latest_game_list)) {
  				echo $game_detail['game_id']." | ".$game_detail['game_name']." | ".$game_detail['description']." | ".
  				$game_detail['status']." | ".$game_detail['rating']." | ".$game_detail['avatar']." | ".
  				$game_detail['link']." | ".$game_detail['upload_time'];
  				echo "<br>";
  				echo "________________________________________________";
  				echo "<br>";
  		}
  		closeConnection($con);
  		return $latest_game_list;
	}

	// Check user (username)
	// return true  if registered else false
	function checkRegisteredUser($username){
		// Check username and password

		$con = createConnection();
		$sql_command = 
		"SELECT * FROM account WHERE username="."'$username'";
		try{
			$registered = mysqli_query($con, $sql_command);	
		}catch(Exception $e){
			// console.log($e);//should not use echo coz influence ajax
		}
		// console.log($sql_command);//should not use echo coz influence ajax
		closeConnection($con);
		if($registered->num_rows == 0)
			return false;
		else return true;
	}
	// Check user (username and password)
	// Return usernameid if already registered else -1
	function checkLogin($username, $password){
		$con = createConnection();
		$sql_command = 
		"SELECT id, avatar, user_type FROM account WHERE username="."'$username' AND password="."'$password'";
		try{
			$registered = mysqli_query($con, $sql_command);	
		}catch(Exception $e){
			// console.log($e);//should not use echo coz influence ajax
		}
		// console.log($sql_command);//should not use echo coz influence ajax
		$result=mysqli_fetch_array($registered);
		// echo $registered->num_rows;
		// echo $sql_command;
		// print_r($result);
		// echo $result["account_id"];
		// if($result["avatar"]!=="")
		// 	echo $result["avatar"];
		// else echo "xxxxxxxxxxxxxxxxxxxx";
		closeConnection($con);
		if($registered->num_rows == 0){
			$returnArray["account_id"]=-1;
			$returnArray["avatar"]="";			
			return $returnArray;
		}
		else {
			$returnArray["account_id"] = $result["id"];
			$returnArray["avatar"] = $result["avatar"]===NULL?"default.jpg":$result["avatar"];
			$returnArray["user_type"] = $result["user_type"];
			return $returnArray;
		}
	}
	// Add user 
	// return userid if added else -1
	function addUser($username, $password, $email, $avatar, $rank, $score){
		$con = createConnection();
		$sql_command = "INSERT INTO account(username, account.password, email, avatar, rank, score) VALUES ('$username', '$password', '$email', '$avatar', 0, 0)";
		// echo $sql_command;
		if (!mysqli_query($con,$sql_command)){
			closeConnection($con);
			return -1;
		}
		$sql_command = "SELECT id FROM account WHERE username='$username'";
		$result = mysqli_query($con,$sql_command);
		$userid = mysqli_fetch_array($result)['id'];
		closeConnection($con);			
		return $userid;
	}

	// User modify their information
	function modifyInfomation($user_id_input, $infoType, $newInfo){
		//check input
		$user_id = intval($user_id_input);

		$con = createConnection();
		$sql_command = "UPDATE account SET $infoType = $newInfo WHERE account.user_id=$user_id";
		closeConnection($con);
		if(!mysqli_query($con, $sql_command))
			return false;
		else return true;
	}
	//Modify user information
	function modifyAllInformation($user_id, $newusername, $newpassword, $newemail, $newavatar){
		$con = createConnection();
		$sql_command = "UPDATE account SET username = '$newusername', password='$newpassword', email='$newemail', avatar='$newavatar' 
		WHERE account.id='$user_id'";
		mysqli_query($con, $sql_command);
		closeConnection($con);
		// if(!mysqli_query($con, $sql_command))
		// 	return false;
		// else return true;
	}
	// Admin delete user
	// Delete everything related to user first
	function deleteUser($user_id_input){
		//check input
		$user_id = intval($user_id_input);
		$con = createConnection();
		// Delete game_played table first
		$sql_command = "DELETE game_played WHERE game_played.user_id=$user_id";
		if(!mysqli_query($con, $sql_command))
			return false;
		$sql_command = "DELETE account WHERE account.user_id=$user_id";
		closeConnection($con);
		if(!mysqli_query($con, $sql_command))
			return false;
		else return true;
	}
	//Check username and password
	function check_input($value)
	{
		// Stripslashes
		if (get_magic_quotes_gpc())
  		{
  			//remove \
  			$value = stripslashes($value);
  		}
		// Quote if not a number
		if (!is_numeric($value))
  		{
  			//remove special characters: \x00, \n, \r, \, ', ", \x1a
  			$value = "'" .mysql_real_escape_string($value). "'";
  		}
		return $value;
	}
	//add game
	function add_game($name, $type, $avatar, $link, $story, $introduction, $upload_time){
		$con = createConnection();
		$name = mysql_real_escape_string($name);
		$type = mysql_real_escape_string($type);
		$avatar = mysql_real_escape_string($avatar);
		$link = mysql_real_escape_string($link);
		$story = mysql_real_escape_string($story);
		$introduction = mysql_real_escape_string($introduction);
		$sql_command = "INSERT INTO game(name, type, avatar, link, story, introduction, upload_time) VALUES('$name', '$type',
		'$avatar', '$link', '$story', '$introduction', '$upload_time')" ;
		mysqli_query($con, $sql_command);
		closeConnection($con);
	}
	//call functions
	//selectGamesOfCategory("1");
	// selectLatestUploadedGames();
	// 
	// </html>
?>
