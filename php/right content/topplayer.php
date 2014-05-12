<div class="r_latest_game">
	<h1>Top Game Thủ</h1>
	<div class="r_list_latest_game">
	<?php 
		$sql= mysql_query("select*from account order by score desc limit 10");
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
                	<strong><?php echo $row['username'];?></strong>
                </p> 
				<p class="totalplay"> 
					Điểm:&nbsp;<?php echo $row['score'];?>
               	</p> 
			</div> 
			<div class="clear"></div> 
		</div> 
		<?php
			}
			}
		?> 
	</div>