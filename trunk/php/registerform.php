		<form action="register.php" method="POST" enctype="multipart/form-data">
			<table>
				<tr>
					<td><label for="username">UserName:</label></td>
					<td>
						<input type="text" name="registername" id="registername" pattern=".{5,20}" title="insert the  correct format" required>
						<span>(*)</span>
						<span id="message"></span>
					</td>
				</tr>
				<tr>
					<td><label for="password1">PassWord:</label></td>
					<td>
						<input type="password" name="password1" id="password1" title="at least eight symbols containing at least one number, one lower, and one upper letter" type="text" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required />
						<span>(*)</span>
					</td>
				</tr>
				<tr>
					<td><label for="password2">Retype PassWord:</label></td>
					<td>
						<input type="password" name="password2" id="password2" title="at least eight symbols containing at least one number, one lower, and one upper letter" type="text" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required onkeyup="checkPasswordMatch()"/>
						<span>(*)</span>
					</td>
				</tr>
				<tr>
					<td><label for="email">Email:</label></td>
					<td>
						<input type="text" name="email" id="email" pattern="[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?" required/>
						<span>(*)</span>
					</td>
				</tr>
				<tr>
					<td><label for="avatar">Avatar:</label></td>
					<td><input type="file" name="avatar" id="avatar"></td>
				</tr>
				<tr>
					<td><div id="passwordMatchCheck"></div></td>
				</tr>
			</table>
			<button type="submit" id="submitregister">Register</button>
		</form>
