<?php
	$mod = "";
	if(!empty($_GET['mod']))
		$mod = $_GET['mod'];  

	switch($mod){
		case "action": 
			include("php/layout-action.php");
			break;
		case "sport": 
			include("php/layout-sport.php");
			break;
		case "brain": 
			include("php/layout-brain.php");
			break;
		case "girl": 
			include("php/layout-girl.php");
			break;
		case "strategy": 
			include("php/layout-strategy.php");
			break;
		case "adventure": 
			include("php/layout-adventure.php");
			break;
		case "othergame": 
			include("php/layout-othergame.php");
			break;			
		case "playgamelatest":
			include("php/playgamelatest.php");
			break;
		case "playgame":
			include("php/playgame.php");
			break;
		default: include("php/layout-index.php");	
	}
?>
