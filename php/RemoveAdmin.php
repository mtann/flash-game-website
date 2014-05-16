
<?php
include "database.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST'){ 
        if(isset($_POST['removeadmin'])){
          removeadmin($_POST['removeadmin']);
        }
	}
?>
