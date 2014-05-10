<div class="r_latest_game">
	<h1>Game mới nhất</h1>
	<div class="r_list_latest_game">
	<?php 
		$sql= mysql_query("select*from game order by upload_time desc limit 10");
			if(mysql_num_rows($sql)>0)
			{
				$i=0;
				while($row=mysql_fetch_array($sql))
			{
			$i+=1;
	?>
		<div class="r_top_latest_game"> 
		<?php if($i>3) echo "<div class='item1' style='background: #999;'>"; else echo "<div class='item1'>"; ?>
			<?php echo $i;?></div> 
			<div class="item2"> 
				<p class="title">
                	<a title="Play game <?php echo $row['name'];?>" href="./?mod=playgame&gameid=<?php echo $row['id'];?>"><strong><?php echo $row['name'];?></strong></a>
                </p> 
				<p class="totalplay"> 
					Đang chơi:&nbsp;<?php echo $row['totalplay'];?>
               	</p> 
			</div> 
			<div class="clear"></div> 
		</div> 
		<?php
			}
			}
		?> 
	</div>