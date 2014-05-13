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
    include("registerform.php")
  ?>
    
<div class="register">
        <?php 
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){ 
            include ("database.php");
            // echo "<pre>";
            // var_dump($_POST);
            // var_dump($_FILES);
            // echo "</pre>";
            //Retrieve the information submitted from user
            $username=$_POST["registername"];
            $password1=$_POST["password1"];
            $password2=$_POST["password2"];
            $email=$_POST["email"];
            $avatar=($_FILES["avatar"]!=="")?$_FILES["avatar"]["name"]:"default.jpg";
            //Insert to database
            $userid = addUser($username, $password1, $email, $avatar, "", "");
            //if insert successfully
            if($userid !== -1){
                //Save avatar in server
                if(!empty($_FILES["avatar"])){
                    $allowedExts = array("jpg", "jpeg", "gif", "png");
                    $nameParts = explode(".", $_FILES["avatar"]["name"]);
                    $extension = end($nameParts);
                    if(($_FILES["avatar"]["size"] < 2000000) && in_array($extension, $allowedExts)){
                        if ($_FILES["avatar"]["error"] > 0) {
                            echo "Return Code: " . $_FILES["avatar"]["error"] . "<br>";
                        }else{
                            // echo "Upload: " . $_FILES["avatar"]["name"] . "<br>";
                           //  echo "Type: " . $_FILES["avatar"]["type"] . "<br>";
                           //  echo "Size: " . ($_FILES["avatar"]["size"] / 1024) . " kB<br>";
                           //  echo "Temp file: " . $_FILES["avatar"]["tmp_name"] . "<br>";
                            move_uploaded_file($_FILES["avatar"]["tmp_name"], "../img/Avatar/" . $_FILES["avatar"]["name"]);
                            
                        }
                    }
                }   
                //create session
                session_regenerate_id();
                    $_SESSION['sess_user_id'] = $userid;
                    $_SESSION['sess_username'] = $username;
                    $_SESSION['sess_user_avatar'] = $avatar;
                session_write_close();
                header("Location:../index.php");
            }
        }
?>
</div>
<div class="footer" style="clear:both;">
 <?php include("footer.php")?>
</div>
</div>
</body>
</html>