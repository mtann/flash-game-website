
<?php
include "database.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST'){ 
        if(isset($_POST['makeadmin'])){
          makeadmin($_POST['makeadmin']);
        }
	}
?>
