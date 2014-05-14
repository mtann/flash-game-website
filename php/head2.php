
   <div class = "header" id="header">
        <div class="logo_header">
            <a href="../index.php"><img src="../img/logo.jpg" width="287" height="132" alt="Image Logo" title="Game online"/></a>
        </div>
		<div class="logo2_header">
			<a href="../index.php"><img src="../img/logo2.png" width="450" height="132" alt="Image Logo" title="Game online"/></a>
		</div>
		<div class="signUp">
			<form id="login" method="POST" action="php/login.php">
			<table>    
				<?php    	
					if(isset($_SESSION['sess_user_id']) && ($_SESSION['sess_user_id'] !== -1)) {
						$avatar = $_SESSION['sess_user_avatar'];
						$username = $_SESSION['sess_username'];
						echo "<div class="."logout".">";
						echo "<image src="."'../img/Avatar/$avatar'"." alt="."'avatar'"." style="."'width: 20px height: 20px; margin-left: 5px'".">";
						echo "<a href="."'#'"." style="."'width: 20px height: 20px; margin-left: 5px'".">$username"."</a>";
						if($_SESSION['sess_user_type']==1){
							echo "<a href="."'UserManagement.php'"." style="."'width: 20px height: 20px; margin-left: 5px; color: #FFFFFF; border: 1px solid'".">User</a>";
							echo "<a href="."'GameManagement.php'"." style="."'width: 20px height: 20px; margin-left: 5px; color: #FFFFFF; border: 1px solid'".">Game</a>";
						}
						echo "<a href="."'logout.php'"." style="."'width: 20px height: 20px; margin-left: 5px; color: #FFFFFF; border: 1px solid'".">Log out</a>";
						echo "</div>";
					}else{
						echo "<tr>";
							echo "<td> <label>User Name <label></td>";
							echo "<td>";
							echo "<input type="."'text' name="."'username' size="."'16' style="."'border: 1px solid black; padding-top: 2px; padding-bottom: 2px; border-radius: 8px;'"."id="."'username'"."/>";
							echo "</td>";
						echo "</tr>";
						echo "<tr>";
							echo "<td><label>Passworld</label></td>";
							echo "<td><input type="."'password' name="."'password' size="."'16' style="."'border: 1px solid black; padding-top: 2px; padding-bottom: 2px;border-radius: 8px;'"."id="."'password'"."/></td>";
						echo "</tr>";
						echo "<tr>";        		
							echo "<td style="."'padding-left: 0px; padding-right: 0px;'>";
								echo "<input type="."'checkbox' name="."'remember' />Remember me";
							echo "</td>";
							echo "<td>";
								echo "<input type="."'submit'"." value="."'Login' style="."'height:28px; width: 75px; font-size:11px; font-weight:bold; border:1px solid black;border-radius: 8px;'"."id="."'loginbutton'"."/>";
							echo "</td>";
						echo "</tr>";
						echo "<tr>";
							echo "<td>";
								echo "<a href="."'register.php'>Sign up</a>";
							echo "</td>";
							echo "<td><a href="."'./mod=forgotpass'>Forgot your password?</a></td>";
						echo "</tr>";
					}
				?>
			</table>
			</form>     	
	   </div>
	   <div style="clear: both;"></div>
   </div>
	
