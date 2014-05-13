<?php
	$p = $_GET['id'];
	include("../../config/config.php");
	include("../pager.php");
	$type = $_GET['mod'];
	$mypage = !isset($_GET['my_page'])?1:$_GET['my_page'];
	
	$page = new Pager;
	$limit = 8;
	$start = $page->findStart($limit);
	$params = "id=".$p."&mod=".$type;
	$page->setParams($params);
	$page->setId("page");
	
	switch($p) {
		case "1":		 
			
			$query = "select game.id, game.avatar, game.name, game.totalplay from game inner join vote on game.id=vote.game_id  where game.type='$type' order by vote.total_good desc";
			$count = mysql_num_rows(mysql_query($query));
			$pages = $page->findPages($count, $limit);
			$query .= " LIMIT ".$start.", ".$limit;
			$result = mysql_query($query);
		
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
			
			$pageList = $page->pageList($mypage, $pages);
			echo "<p align='center'>";
			echo $pageList;
			echo "</b>";
			
			break;
					  
		case "2":
			
			$query = "select * from game where type='$type' order by totalplay desc";
			$count = mysql_num_rows(mysql_query($query));
			$pages = $page->findPages($count, $limit);
			$query .= " LIMIT ".$start.", ".$limit;
			$result = mysql_query($query);			
		
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
			
			$pageList = $page->pageList($mypage, $pages);
			echo "<p align='center'>";
			echo $pageList;
			echo "</b>";
			
			break;

		case "3": 
			
			$query = "select game.id, game.avatar, game.name, game.totalplay from game inner join vote on game.id=vote.game_id  where game.type='$type' order by (vote.total_good+vote.total_bad) desc";
			$count = mysql_num_rows(mysql_query($query));
			$pages = $page->findPages($count, $limit);
			$query .= " LIMIT ".$start.", ".$limit;
			$result = mysql_query($query);
					
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
			
			$pageList = $page->pageList($mypage, $pages);
			echo "<p align='center'>";
			echo $pageList;
			echo "</b>";
			
			break;		
	}
?>	
