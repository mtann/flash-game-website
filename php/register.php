<?php
    session_start();
    require('../libraries/config.php');
?>
<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $name = strtolower(addslashes($_POST['account_name']));
        $pass = md5(addslashes($_POST['account_pass']));
        $verify_pass = md5(addslashes($_POST['re_account_pass']));
        $email = addslashes($_POST['email']);
        $gender="";
        $birthday = addslashes($_POST['birthday']);
        
        if(!empty($_POST['gender']))
            $gender = addslashes($_POST['gender']);
        
        
        if(!$name || !$pass || !$verify_pass || !$email || !$gender || !$birthday){
            echo "Please, enter full information. <a href = 'javascript:history.go(-1)'> Click here to back register</a>";
            exit();
        }
        
        $check_name = "select * from account where username = '".$name."'";        
        $run = mysql_query($check_name);
        $numrow = mysql_num_rows($run);              
        if($numrow > 0){
            echo "<script>alert('User name $name already exist in our database, please try other one!')</script>";
            echo "<a href = 'javascript:history.go(-1)'> Click here to back register</a>";
            exit();
        }
        
        $check_email = "select * from account where email='$email'";
        $run = mysql_query($check_email);
        $numrow = mysql_num_rows($run);          
        if($numrow > 0){
            echo "<script>alert('Email $email already exist in our database, please try other one!')</script>";
            echo "<a href = 'javascript:history.go(-1)'> Click here to back register</a>";
            exit();            
        }
        
        if($pass != $verify_pass){
           echo "Password isn't true. <a href = 'javascript:history.go(-1)'> Click here to back register</a>"; 
           exit();
        }
        
        $sql = "insert into account (username, password, email) values ('$name','$pass','$email')";
        if(mysql_query($sql)){
            echo "Account {$name} is created. <a href='../index.php' >Click on here to login </a>";
            exit();    
        }        
                
    }
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/register.css" />
</head>
<body>
<form name="register" action="register.php" method="post">
    <div class="register">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enter account:<input type="text" name="account_name" size="25"/><br />
       &nbsp;&nbsp;&nbsp;Enter password:<input type="password" name="account_pass" size="25"/><br />
        Retype password:<input type="password" name="re_account_pass" size="25"/><br />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enter Email: <input type="text" name="email" size="25"/><br />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gender: <input type="radio" name="gender"/> Male &nbsp; <input type="radio" name="gender"/> Female <br />
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Birthday: <select name="birthday">
            <option>Day</option>
            <?php for($i = 1; $i <= 31; $i++){
                ?> <option><?=$i?></option> <?php
            }?>
        </select>
        
        <select>
            <option>Month</option>
            <?php for($i = 1; $i <= 12; $i++){
                ?> <option><?=$i?></option> <?php
            }?>
        </select>
        
        <select>
            <option>Year</option>
            <?php for($i = 1980; $i <= 2005; $i++){
                ?> <option><?=$i?></option> <?php
            }?>
        </select>
        <br />
        <input type="submit" name="submit" value="Submit"/>&nbsp;&nbsp;&nbsp; <input type="reset" name="reset" value="Reset"/><br />        
    </div>
</form>
</body>
</html>