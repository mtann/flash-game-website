<?php
	session_start();
	require ("config/config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	
	<!--CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css" />	
	<!--JAVASCRIPT-->
	<script type="text/javascript" src="js/quangcao.js"></script>
</head>
<body>
<!--Banner Quang Cao -->
	<div id="divAdRight" style="DISPLAY: none; POSITION: absolute; TOP: 0px">
		<a href="#"><img src="img/one_m8_banner_DOC_26766.jpg" width="125" /></a>
	</div>
	<div id="divAdLeft" style="DISPLAY: none; POSITION: absolute; TOP: 0px">
		<a href="#"><img src="img/s5_banner.jpg" width="125" /></a>
	</div>
	<script type='text/javascript' language='javascript'>MainContentW = 1000;LeftBannerW = 125;RightBannerW = 125;LeftAdjust = 10;RightAdjust = 10;TopAdjust = 100;ShowAdDiv();window.onresize=ShowAdDiv;;</script>
	<script type='text/javascript' language='javascript'>MainContentW = 1000;LeftBannerW = 125;RightBannerW = 125;LeftAdjust = 10;RightAdjust = 10;TopAdjust = 100;ShowAdDiv();window.onresize=ShowAdDiv;;</script>
<!--Het Banner Quang Cao -->

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