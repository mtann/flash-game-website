<?php
$db_host = "localhost"; // mac dinh l� localhost
$db_email    = 'email';
$db_username    = 'username'; 
$db_password    = 'password';
@mysql_connect("{$db_host}", "{$db_username}", "{$db_password}") or die("Kh�ng th? k?t n?i database");
@mysql_select_db("{$db_name}") or die("Kh�ng the chon database");
?>
