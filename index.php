<?php
	session_start();
	require ("libraries/config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	
	<!--CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css" />	
	<!--JAVASCRIPT-->
	
</head>
<body>
<div class="container">
  <?php
    include("php/head.php");
	include("php/menu-game.php");
  ?>
	
<div class="content">
 <?php include("php/center.php");?>
</div>
<div class="footer" style="clear:both;">
 <?php include("php/footer.php")?>
</div>
</div>
</body>
</html>