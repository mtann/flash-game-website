<?php
	session_start();
	require ("../config/config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	
	<!--CSS-->
    <link rel="stylesheet" type="text/css" href="../css/main.css" />	
    <link rel="stylesheet" type="text/css" href="../css/modifyinformation.css" />	
	<!--JAVASCRIPT-->
	<SCRIPT src="../js/jquery-1.11.0.js"></SCRIPT>
	<SCRIPT type="text/javascript" src="../js/modifyinformation.js"></SCRIPT>
</head>
<body>
<div class="container">
  <?php
    include("head2.php");
	include("menu-game2.php");
  ?>
	
<div class="userinformation">
	<?php
		include("editinformationform.php");
	?>
</div>
<div class="footer" style="clear:both;">
 <?php include("footer.php")?>
</div>
</div>
</body>
</html>