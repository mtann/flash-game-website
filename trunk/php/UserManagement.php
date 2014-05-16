<?php
    session_start();
    require ("../config/config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="../css/usermanagement.css" />   
    <link rel="stylesheet" type="text/css" href="../css/main.css" />   
    <!--JAVASCRIPT-->
    <SCRIPT src="../js/jquery-1.11.0.js"></SCRIPT>
    <SCRIPT type="text/javascript" src="../js/usermanagement.js"></SCRIPT>
</head>
<body>
  		<?php
	    	include("head2.php");
        //xu ly xoa, make admin
        include("database.php");
        $userList = selectUsers();
        echo "<div id="."'usermanagementdiv'".">";
          echo "<table id="."'usertable'".">";
            echo "<tr>";
              echo "<th>";
              echo "Username";
              echo "</th>";
              echo "<th>";
              echo "Type of user";
              echo "</th>";
              echo "<th>";
              echo "Delete user";
              echo "</th>";
              echo "<th>";
              echo "Make admin";
              echo "</th>";
              echo "<th>";
              echo "Remove admin";
              echo "</th>";
            echo "</tr>";
          while($row=mysqli_fetch_array($userList)){
            $username = $row["username"];
            if($username!=$_SESSION["sess_username"]){
              echo "<tr id="."'$username'".">";

              echo "<td>";
              echo $row["username"];
              echo "</td>";

              echo "<td id="."'"."$username"."usertype'".">";
              echo $row["user_type"]==='1'?"Admin":"NotAdmin";
              echo "</td>";

              echo "<td>";
              echo "<input type="."'checkbox'"."onclick="."'deleteuser("."\"$username\"".")'"." name="."'deleteuser'>";
              echo "</td>";

              echo "<td>";
              echo "<input type="."'checkbox'"."onclick="."'makeadmin("."\"$username\"".")'"." name="."'makeadmin'>";
              echo "</td>";

              echo "<td>";
              echo "<input type="."'checkbox'"."onclick="."'removeadmin("."\"$username\"".")'"." name="."'removeadmin'>";
              echo "</td>";
              echo "</tr>";
            }
            
          }
          echo "</table>";
        echo "</div>";
      ?>
</body>
</html>