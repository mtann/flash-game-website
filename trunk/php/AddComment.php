
<?php
include "database.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST'){ 
        $GameId=$_POST['GameId'];
        $Username=$_POST['Username'];
        $Content=$_POST['Content'];
        addComment($GameId, $Username, $Content);
	}
?>
