
<?php
include "database.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST'){ 
        // GameName: gamename, Avatar: avatar, Link: link, Story: story, Introduction: introduction
        $GameName=$_POST['GameName'];
        $GameType=$_POST['GameType'];
        $Avatar=$_POST['Avatar'];
        $Link=$_POST['Link'];
        $Story=$_POST['Story'];
        $Introduction=$_POST['Introduction'];
        add_game($GameName, $GameType, $Avatar, $Link, $Story, $Introduction);
	}
?>
