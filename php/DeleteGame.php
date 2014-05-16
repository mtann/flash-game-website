
<?php
include "database.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST'){ 
        // GameName: gamename, Avatar: avatar, Link: link, Story: story, Introduction: introduction
        $GameId=$_POST['GameId'];
        deletegame($GameId);
	}
?>
