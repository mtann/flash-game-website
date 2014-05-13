<?php
	$p = $_GET['id'];
	include("../../config/config.php");
	$type = $_GET['mod'];
	switch($p) {
		case "1":		 
				
			$result = mysql_query("select * from game where type='$type' limit 20");
		
			if(mysql_num_rows($result) > 0){
				$i = 0;
				?><table width="100%">			
				<?php
				while($rows=mysql_fetch_array($result)){	
					$i++;
					if($i==1) echo "<tr>";			
					?>
						<td>								
							<a href="./?mod=playgame&gameid=<?php echo $rows['id'];?>" ><img src="<?php echo $rows['avatar'] ?>" width="120" height="100"/></a>
							<br />	
							<p><a href="./?mod=playgame&gameid=<?php echo $rows['id'];?>" ><?php echo $rows['name'] ?></a></p>
							<p>Đang chơi:<?php echo $rows['totalplay'] ?></p>
						</td>				
					<?php
					if($i==4){ 
						echo "</tr>";
						$i = 0;
					}
				}
				?></table><?php
			}				
			break;
					  
		case "2":
						
			$result = mysql_query("select game.id, game.avatar, game.name, game.totalplay from game inner join vote on game.id=vote.game_id  where game.type='$type' order by vote.total_good desc limit 20");
		
			if(mysql_num_rows($result) > 0){
				$i = 0;
				?><table width="100%">			
				<?php
				while($rows=mysql_fetch_array($result)){	
					$i++;
					if($i==1) echo "<tr>";			
					?>
						<td>	
							<a href="./?mod=playgame&gameid=<?php echo $rows['id'];?>"><img src="<?php echo $rows['avatar'] ?>" width="120" height="100"/></a>
							<br />	
							<p><a href="./?mod=playgame&gameid=<?php echo $rows['id'];?>"><?php echo $rows['name'] ?></a></p>
							<p>Đang chơi:<?php echo $rows['totalplay'] ?></p>
						</td>				
					<?php
					if($i==4){ 
						echo "</tr>";
						$i = 0;
					}
				}
				?></table><?php
			}	
			break;

		case "3": 
			
			$result = mysql_query("select * from game where type='$type' order by totalplay desc limit 20");
		
			if(mysql_num_rows($result) > 0){
				$i = 0;
				?><table width="100%">			
				<?php
				while($rows=mysql_fetch_array($result)){	
					$i++;
					if($i==1) echo "<tr>";			
					?>
						<td>	
							<a href="./?mod=playgame&gameid=<?php echo $rows['id'];?>"><img src="<?php echo $rows['avatar'] ?>" width="120" height="100"/></a>
							<br />	
							<p><a href="./?mod=playgame&gameid=<?php echo $rows['id'];?>"><?php echo $rows['name'] ?></a></p>
							<p>Đang chơi:<?php echo $rows['totalplay'] ?></p>
						</td>				
					<?php
					if($i==4){ 
						echo "</tr>";
						$i = 0;
					}
				}
				?></table><?php
			}	
			break;		
	}
?>	
