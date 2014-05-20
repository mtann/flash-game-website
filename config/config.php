<?php
 $host="sql108.byethost10.com";
 $user="b10_14808564";
 $pass="Tram4231";
 $db = mysql_connect($host,$user,$pass) or die("Can't connect to database!");
	  mysql_select_db("b10_14808564_gameflash",$db) or die("Can't select database!");
 mysql_query("SET NAMES 'UTF8'");
?>
