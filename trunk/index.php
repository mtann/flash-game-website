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
 <div class="left_content">
 <div class="hot_game">
  <?php include("php/games/lastest-game-index.php")?>   
  <?php include("php/games/best-game-index.php")?>  
  </div>
  <?php include("php/games/game-play-much-index.php")?>
  <?php include("php/games/action-game-index.php")?>
  <?php include("php/games/strategy-game-index.php")?>
  <?php include("php/games/brain-game-index.php")?>
  <?php include("php/games/adventure-game-index.php")?>
  <?php include("php/games/speed-game-index.php")?>
  <?php include("php/games/classic-game-index.php")?>
  <?php include("php/games/other-game-index.php")?>
  
	<div class="right_content">
	</div>
  <?php include("php/footer.php")?>
</div>
</div>
</div>
</body>
</html>