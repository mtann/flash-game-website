<?php
    session_start();
    require ("../config/config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="../css/register.css" />   
    <link rel="stylesheet" type="text/css" href="../css/main.css" />   
    <!--JAVASCRIPT-->
    <SCRIPT src="../js/jquery-1.11.0.js"></SCRIPT>
    <SCRIPT type="text/javascript" src="../js/register.js"></SCRIPT>
</head>
<body>
	<div class="container">
  		<?php
	    	include("head2.php");

  		?>
  </div>
      <?php
        include("database.php");
        $userList = selectUsers();
        echo "<div style ="."'margin-left: 150px'".">";
          echo "<table style="."'border: 1px'".">";
          while($row=mysqli_fetch_array($userList)){
            $username = $row["username"];
            echo "<tr>";

            echo "<td>";
            echo $row["username"];
            echo "</td>";

            echo "<td>";
            echo $row["user_type"]==='1'?"Admin":"NotAdmin";
            echo "</td>";

            echo "<td>";
            echo "<a href="."'UserManagement.php?Delete='"."'$username'".">Xoa</a>";
            echo "</td>";

            echo "<td>";
            echo "<a href="."'#'".">Dua len lam admin</a>";
            echo "</td>";
            echo "</tr>";
          }
          echo "</table>";
        echo "</div>"
      ?>
</body>
</html>