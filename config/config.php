<?php
 $host="sql108.byethost10.com";
 $user="b10_14808564";
 $pass="Tram4231";
 $dbname="b10_14808564_gameflash";
 //$host="localhost";
 //$user="root";
 //$pass="";
 //$dbname="gameflash";
 $db = mysql_connect($host,$user,$pass) or die("Can't connect to database!");
	  mysql_select_db($dbname,$db) or die("Can't select database!");
 mysql_query("SET NAMES 'UTF8'");
?>
