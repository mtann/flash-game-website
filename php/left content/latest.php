
<?php	
	$type = $_GET['mod'];
	$result = mysql_query("select * from game where type='$type' order by upload_time desc limit 20");
	$matchtype = array(
		'action'=>"HÀNH ĐỘNG",
		'sport'=>"THỂ THAO",
		'girl'=>"BẠN GÁI",
		'brain'=>"TRÍ TUỆ",
		'adventure'=>"PHIÊU LƯU",
		'strategy'=>"CHIẾN THUẬT",
		'othergame'=>"KHÁC"
	);
	if(mysql_num_rows($result) > 0){
		$i = 0;
		?><table width="100%">
			<tr>
			<td bgcolor="#24BDE2" height="35px" style="padding-left: 10px;color:#fff"> GAME <?php echo $matchtype[$type]?> MỚI NHẤT</td>
			</tr>
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
?>