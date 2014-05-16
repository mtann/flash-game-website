
<?php
include "database.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST'){ 
        // GameName: gamename, Avatar: avatar, Link: link, Story: story, Introduction: introduction
        $GameName=$_POST['GameName'];
        $Avatar=$_POST['Avatar'];
        $Link=$_POST['Link'];
        $Story=$_POST['Story'];
        $Introduction=$_POST['Introduction'];
        updateGame($GameName, $Avatar, $Link, $Story, $Introduction);
	}
?>
