<?php
$db_host = "localhost"; // mac dinh là localhost
$db_email    = 'email';
$db_username    = 'username'; 
$db_password    = 'password';
@mysql_connect("{$db_host}", "{$db_username}", "{$db_password}") or die("Không th? k?t n?i database");
@mysql_select_db("{$db_name}") or die("Không the chon database");
?>
