<?php?>
<html>
<body>
<form name="login" action="login.php">
<table>
	<th>
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