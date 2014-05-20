
<?php	
	$id=$_GET['gameid'];
	mysql_query("UPDATE game set totalplay=totalplay+1 where id='$id'");
	$sql=mysql_query("select*from game where id='$id'");
	$row=mysql_fetch_array($sql);
	$totalgood = $totalbad = 0;	
?>
<div class="left_content" style="width: 697px; float:left;">
<h3 style="color:blue;font-size:16pt;"><?php echo $row['name'];?> </h3>
<div class="frame_game">
 <br />
	<object width="663" height="465" data="<?php echo $row['link'];?>"></object>
<br /><br />
	<div class="votegame" style="width:160px;">
		<h3>BÌNH CHỌN GAME</h3>
		<p><a  href="#"><img width="16" height="18" alt="" src="http://img-game.24hstatic.com/images/agree.gif" /> </a> <span style="height:12px; background:#8ACA11;"><?php for($i=0; $i<31;$i++) echo"&nbsp;" ?></span>&nbsp; <?php echo $totalgood; ?></p>
		<p><a  href="#"><img width="16" height="18" alt="" src="http://img-game.24hstatic.com/images/disagree.gif" /> </a><span style="height:12px;background:#FF0000;"><?php for($i=0; $i<3;$i++) echo"&nbsp;" ?></span>&nbsp;<?php echo $totalbad; ?></p>
	</div>
</div>
<div class="introduction">
	<p style="background:#8ACA11; color:#fff; font-size:16pt;">HƯỚNG DẪN CHƠI GAME</p>
	<p><?php echo $row['story']?></p>
	<p style="text-decoration:underline;">Cách chơi:</p>
	<p><?php echo $row['introduction'] ?></p>	
</div>
<div class="comment"><!--part comment here-->
</div>	
	
<table width="100%" id="tbplaylatest">
<tr>
	<td bgcolor="#24BDE2" height="35px" style="padding-left: 10px;color:#fff"> GAME MỚI NHẤT KHÁC</td>
</tr>
<?php		
	
	$display=12;
	if(isset($_GET['start']) && ((int)($_GET['start']) >= 0))
	  $start = $_GET['start'];
	else
	  $start = 0; 

	if(isset($_GET['page']) && ((int)($_GET['page']) >= 0))
	  $page = $_GET['page'];
	else{
	   $sql = "select count(id) from game";
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
			
	$cung=mysql_query("select*from game order by upload_time desc limit $start, $display");
	  $i = 0;
	while($rowc=mysql_fetch_array($cung))
	{					
		$i++;
?>
	<?php if($i == 1)echo "<tr>" ;?>
	
	<td align="center">	
        <a href="./?mod=playgamelatest&gameid=<?php echo $rowc['id'];?>" ><img src="<?php echo $rowc['avatar']?>" width="120" height="100" /> </a>        
		<br /><br />				
		<a href="./?mod=playgamelatest&gameid=<?php echo $rowc['id'];?>"> <?php echo $rowc['name']; ?> </a> 		
		<br />
		<p style="margin-top: 5px;">Đang chơi: 			
			<?php echo $rowc['totalplay']; ?>				
		</p>
		<br />
	</td>	
	
	<?php 
		if($i == 4){
			echo "</tr>";
			$i=0;
		}

	?>
	
<?php	
}
?>	
</table>
 <ul class="navlatest" style="margin-left: 135px;">
	<?php
	if($page > 1){
	  if($current != 1){
		 echo "<li><a href='./?mod=playgamelatest&start=$prev&page=$page&gameid=$id'>Previous</a></li>";
	  }
	  for($i = 1; $i <= $page; $i++){
		if($current != $i){
		echo "<li><a href='./?mod=playgamelatest&start=".($display*($i-1))."&page=$page&gameid=$id'>$i</a></li>";
	  }else{
		echo "<li class='current'>$i</li>";
	  }
	 }

	 if($current!=$page){
	  echo "<li><a href='./?mod=playgamelatest&start=$next&page=$page&gameid=$id'>Next</a></li>";
	 }
	}
	?>	
 </ul>
 <table width="100%">
	<tr>
		<td><a href="./?mod=seeall_latest&type=latest">Xem tất cả</a></td>
	</tr>
</table>
</div>
<div class="right_content" style="width: 300px;float:left;">
	<?php include("php/right content/latest game.php");?>
</div>