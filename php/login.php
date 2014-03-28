<?php
	if(isset($_POST["username"])) {
		$name = $_POST["username"];
		$pass = $_POST["pass"];
		if($name == "thanh" && $pass == "123") {
			header("Location: success.php");
			exit();
		}
		else {
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
		<td><input type="text" name="pass" value="" /></td>
	</tr>
	<tr>
		<td>
			<input type="checkbox" name="remember" /> Remember me
		</td>
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