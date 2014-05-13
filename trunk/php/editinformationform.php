<form action="update.php" method="POST" enctype="multipart/form-data" id="updateform">
			<table>
				<tr>
					<td><label for="currentname">UserName:</label></td>
					<td>
						<input type="text" name="currentname" id="currentname" pattern=".{5,20}" title="insert the  correct format" required>
						<span>(*)</span>
						<span id="message"></span>
					</td>
				</tr>
				<tr>
					<td><label for="currentpassword">PassWord:</label></td>
					<td>
						<input type="password" name="currentpassword" id="currentpassword" title="at least eight symbols containing at least one number, one lower, and one upper letter" type="text" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required />
						<span>(*)</span>
					</td>
				</tr>
				<tr>
					<td><label for="currentemail">Email:</label></td>
					<td>
						<input type="text" name="currentemail" id="currentemail" pattern="[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?" required/>
						<span>(*)</span>
					</td>
				</tr>
				<tr>
					<td><label for="currentavatar">Avatar:</label></td>
					<td><input type="file" name="currentavatar" id="currentavatar"></td>
				</tr>
			</table>
			<button type="submit" id="submitmodify">Save Changes</button>
		</form>