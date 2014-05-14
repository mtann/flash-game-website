<?php
    session_start();
    require ("../config/config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="../css/register.css" />   
    <link rel="stylesheet" type="text/css" href="../css/main.css" />   
    <!--JAVASCRIPT-->
    <SCRIPT src="../js/jquery-1.11.0.js"></SCRIPT>
    <SCRIPT type="text/javascript" src="../js/register.js"></SCRIPT>
</head>
<body>
	<div class="container">
  		<?php
	    	include("head2.php");
        include("AddGameForm.php");
  		?>
  </div>
  <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){ 
      include("database.php");
      $gamename = $_POST["gamename"];
      $gametype = $_POST["type"];
      $link = $_POST["link"];
      $avatar = $_POST["gameavatar"];
      $story = $_POST["story"];
      $description = $_POST["description"];
      $date = date("Y/m/d");
      add_game($gamename, $gametype, $avatar, $link, $story, $description, $date);

    }
  ?>
</body>
</html>