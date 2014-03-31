<?php
 $host="localhost";
 $user="root";
 $pass="";
 $db = mysql_connect("localhost","root","") or die("Can't connect to database!");
	  mysql_select_db("flash_game_website",$db) or die("Can't select database!");
?>
