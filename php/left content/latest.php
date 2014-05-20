
<?php	
	$type = $_GET['mod'];	
	$matchtype = array(
		'action'=>"HÀNH ĐỘNG",
		'sport'=>"THỂ THAO",
		'girl'=>"BẠN GÁI",
		'brain'=>"TRÍ TUỆ",
		'adventure'=>"PHIÊU LƯU",
		'strategy'=>"CHIẾN THUẬT",
		'othergame'=>"KHÁC"
	);
	
	$display=12;
	 if(isset($_GET['start']) && ((int)($_GET['start']) >= 0))
	  $start = $_GET['start'];
	 else
	  $start = 0; 

	 if(isset($_GET['page']) && ((int)($_GET['page']) >= 0))
	  $page = $_GET['page'];
	 else{
	   $sql = "select count(id) from game where type='$type'";
	   $res = mysql_query($sql);
	   $row = mysql_fetch_array($res);
	   if($row[0] > $display)
		 $page = ceil($row[0]/$display);
	   else
		 $page = 1;
	 }
	  $current = ($start/$display)+1;
	  $next = $start+$display;
	  $prev = $start-$display;
	
	$result = mysql_query("select * from game where type='$type' order by upload_time desc limit $start, $display");	
	if(mysql_num_rows($result) > 0){
		$i = 0;
		?><table width="100%" id="tblatest">
			<tr>
			<td bgcolor="#24BDE2" height="35px" style="padding-left: 10px;color:#fff"> GAME <?php echo $matchtype[$type]?> MỚI NHẤT</td>
			</tr>
		<?php
		while($rows=mysql_fetch_array($result)){	
			$i++;
			if($i==1) echo "<tr>";			
			?>
				<td align="center">	
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
 <ul class="navlatest">
	<?php
	if($page > 1){
	  if($current != 1){
		 echo "<li><a href='./?mod=$type&start=$prev&page=$page'>Previous</a></li>";
	  }
	  for($i = 1; $i <= $page; $i++){
		if($current != $i){
		echo "<li><a href='./?mod=$type&start=".($display*($i-1))."&page=$page'>$i</a></li>";
	  }else{
		echo "<li class='current'>$i</li>";
	  }
	 }

	 if($current!=$page){
	  echo "<li><a href='./?mod=$type&start=$next&page=$page'>Next</a></li>";
	 }
	}
	?>	
 </ul>