<?php
	// <html xmlns="http://www.w3.org/1999/xhtml">
	// <head>
 //    	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
 //    </head>
	// Create connection function
	function createConnection(){
		//$con=mysqli_connect("localhost","black_tears","password","gameflash");
		$con=mysqli_connect("localhost","root","","gameflash");
		mysqli_set_charset($con, "utf8");//them cai nay de hien thi tieng viet
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
	function selectGamesOfCategory($gametype){//$type_id is a string
		//check input
		//connect database
		$con = createConnection();
  		$sql_command = "SELECT * FROM game WHERE type="."'$gametype'";
  		$game_detail_list = mysqli_query($con, $sql_command);
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
	function deleteUser($user_name_input){
		//check input
		$con = createConnection();
		$sql_command = "DELETE FROM account WHERE account.username='$user_name_input'";

		
		if(!mysqli_query($con, $sql_command))
			echo 0;
		else echo 1;
		closeConnection($con);
	}
	//Admin make user as admin
	function makeadmin($username){
		$con = createConnection();
		$sql_command = "UPDATE account SET user_type = 1 WHERE account.username='$username'";
		
		if(!mysqli_query($con, $sql_command))
			echo 0;
		else echo 1;
		closeConnection($con);
	}
	//Admin remove an admin
	function removeadmin($username){
		$con = createConnection();
		$sql_command = "UPDATE account SET user_type = 0 WHERE account.username='$username'";
		
		if(!mysqli_query($con, $sql_command))
			echo 0;
		else echo 1;
		closeConnection($con);
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
	function add_game($name, $type, $avatar, $link, $story, $introduction){
		$con = createConnection();
		$name = check_input($name);
		$type = check_input($type);
		$avatar = check_input($avatar);
		$link = check_input($link);
		$story = check_input($story);
		$introduction = check_input($introduction);
		$upload_time=date("Y/m/d");
		$sql_command = "INSERT INTO game(name, type, avatar, link, story, introduction, upload_time) 
		VALUES($name, $type, $avatar, $link, $story, $introduction, $upload_time)" ;
		if(mysqli_query($con, $sql_command))
			echo 1;
		else echo 0;
		closeConnection($con);
	}
	// select all users
	function selectUsers(){
		$con = createConnection();
		$sql_command = "SELECT username, user_type FROM account";
		$result = mysqli_query($con, $sql_command);
		closeConnection($con);
		return $result;
	}
	//update game
	function updateGame($gameid, $avatar, $link, $story, $introduction){
		$con = createConnection();
		$sql_command = "UPDATE game SET avatar=\"$avatar\", link=\"$link\", story=\"$story\", introduction=\"$introduction\" WHERE 
		id=\"$gameid\"";
		$result = mysqli_query($con, $sql_command);
		if($result) {
			echo 1;
		}else echo 0;
		closeConnection($con);
	}
	//delete game
	function deletegame($gameid){
		$con = createConnection();
		$sql_command = "DELETE FROM game WHERE id=$gameid";
		$result = mysqli_query($con, $sql_command);
		if($result) {
			echo 1;
		}else echo 0;
		closeConnection($con);
	}
	//select comments of games
	function commentsofgame($gameid){
		$con = createConnection();
		$sql_command = "SELECT * FROM comment WHERE game_id=$gameid";
		$result = mysqli_query($con, $sql_command);
		closeConnection($con);
		return $result;
	}
	//add comment
	function addComment($GameId, $Username, $Content){
		$con = createConnection();
		$sql_command = "INSERT INTO comment(user_name, game_id, content) VALUES (\"$Username\", \"$GameId\", \"$Content\")";
		$result = mysqli_query($con, $sql_command);
		if($result)
			echo 1;
		else echo 0;
		closeConnection($con);
	}
	//call functions
	//selectGamesOfCategory("1");
	// selectLatestUploadedGames();
	// 
	// </html>
?>
