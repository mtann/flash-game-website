
<?php
include "database.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST'){ 
        if(isset($_POST['deleteuser'])){
           deleteUser($_POST['deleteuser']);
        }
	}
?>
