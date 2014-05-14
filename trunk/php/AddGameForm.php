<form action="GameManagement.php" method="POST" enctype="multipart/form-data" id="updateform">
			<table>
				<tr>
					<td><label for="gamename">GameName:</label></td>
					<td>
						<input type="text" name="gamename" id="gamename" required>
						<span>(*)</span>
						<span id="message"></span>
					</td>
				</tr>
				<tr>
					<td><label for="type">GameType:</label></td>
					<td>
						<select name="type" id="type">
						  <option value="Action">Action</option>
						  <option value="Sport">Sport</option>
						  <option value="Brain">Brain</option>
						  <option value="GirlFriend">Girl Friend</option>
						  <option value="Strategy">Strategy</option>
						  <option value="Advanture">Adventure</option>
						  <option value="Others">Others</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><label for="link">Link:</label></td>
					<td>
						<input type="text" name="link" id="link" required/>
						<span>(*)</span>
					</td>
				</tr>
				<tr>
					<td><label for="gameavatar">Avatar:</label></td>
					<td><input type="text" name="gameavatar" id="gameavatar"></td>
				</tr>
				<tr>
					<td><label for="story">Story:</label></td>
					<td><input type="text" name="story" id="story"></td>
				</tr>
				<tr>
					<td><label for="description">Description:</label></td>
					<td><input type="text" name="description" id="description"></td>
				</tr>
			</table>
			<button type="submit" id="submitgame">Add Game</button>
		</form>