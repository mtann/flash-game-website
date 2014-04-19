<?php
	// <html xmlns="http://www.w3.org/1999/xhtml">
	// <head>
 //    	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
 //    </head>
	// Create connection function
	function createConnection(){
		$con=mysqli_connect("localhost","black_tears","password","FlashGameDB");

	// Check connection
	if (mysqli_connect_errno())
	  	{
	  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	 	}
	else
		{
			echo "Connect succesfully<br>";
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

	// Check user (username and password)
	// return true  if registered else false
	function checkRegisteredUser($username, $password){
		// Check username and password

		$con = createConnection();
		$sql_command = "SELECT * FROM account WHERE account.username=$username AND account.password=$password";
		$registered = mysqli_query($con, $sql_command);
		closeConnection($con);
		if(mysql_num_rows($registered) == 0)
			return false;
		else return true;
	}

	// Add user 
	// return true if added else false 
	function addUser($username, $password, $email, $avatar, $rank, $score){
		$con = createConnection();
		$sql_command = "INSERT INTO account(username, password, email, avatar, rank, score) VALUES($username, $password, $email, $avatar, $rank, $score)";
		closeConnection($con);
		if (!mysqli_query($con,$sql_command))
			return false;
		return true;
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
	//call functions
	//selectGamesOfCategory("1");
	// selectLatestUploadedGames();
	// 
	// </html>
?>
