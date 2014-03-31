<?php
    session_start();
    require('../libraries/config.php');
?>
<?php    
	if(isset($_POST["username"])) {
		
        $name = strtolower(addslashes($_POST['username']));
		$pass = md5(addslashes($_POST["pass"]));        
        $sql = "select username from account where username='".$name."' limit 1";// 
        $sql_query = mysql_query($sql) ;
        $num_rows = mysql_num_rows($sql_query);
        if($num_rows > 0){
            //$data = mysql_fetch_assoc($sql_query);
            header("Location: success.php");
			exit();   
        }else{
			header("Location: fail.php");
			exit();

        }        
	}
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/login.css" />
</head>
<body>
<form name="login" action="login.php" method="post">
<table>
	<th colspan="2">
		Login
	</th>
	<tr>
		<td>UserName</td>
		<td><input type="text" name="username" value="" /></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="password" name="pass" value="" /></td>
	</tr>
	<tr>
		<td>
			<input type="checkbox" name="remember" /> Remember me
		</td>
        <td><a href="fogot_pass.php">You forgot the password</a></td>
	</tr>
	<tr>
		<td>
			<input type="submit" value="Login" />
		</td>
		<td>
			<a href="register.php">Sign up</a>
		</td>
	</tr>
</table>
</form>
</body>
</html>