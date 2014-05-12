<?php
 $host="localhost";
 $user="root";
 $pass="";
 $db = mysql_connect("localhost","root","") or die("Can't connect to database!");
	  mysql_select_db("gameflash",$db) or die("Can't select database!");
 mysql_query("SET NAMES 'UTF8'");
?>
