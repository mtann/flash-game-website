<!--code for form search-->
<div class="left_content">
<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	echo "post";
}
else if($_SERVER['REQUEST_METHOD'] != 'GET'){
	echo "chua get";
}
else if ($_SERVER['REQUEST_METHOD'] == 'GET'){
	function unicode_str_filter ($str){
		$unicode = array(
		'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
		'd'=>'đ',
		'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
		'i'=>'í|ì|ỉ|ĩ|ị',
		'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
		'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
		'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
		'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
		'D'=>'Đ',
		'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
		'I'=>'Í|Ì|Ỉ|Ĩ|Ị',
		'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
		'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
		'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ',
		);
		foreach($unicode as $nonUnicode=>$uni){
		$str = preg_replace("/($uni)/i", $nonUnicode, $str);
		}
		return $str;
	}
	//echo "post roi";
	//$find = $_POST['box-search'];
	//echo "".$find."";
	
	$find = $_GET['box-search'];
	$find = unicode_str_filter($find);
	//$field = $_POST['field'];
	//If they did not enter a search term we give them an error 
	//if ($find == "") 
	//{ 
	// echo "<p>You forgot to enter a search term"; 
	// exit; 
	//} 
	 
	// Otherwise we connect to our Database 
	//mysql_connect("localhost", "root", "") or die(mysql_error()); 
	//mysql_select_db("gameflash") or die(mysql_error()); 
	 
	// We preform a bit of filtering 
	$find = strip_tags($find); 
	$find = trim ($find); 
	
	//echo "".$find."";
	 
	//Now we search for our search term, in the field the user specified 
	$result = mysql_query("SELECT * FROM game WHERE name_search LIKE '%$find%'");
	
	//And we display the results 
	if(mysql_num_rows($result) > 0){
		$i = 0;
	?><table width="100%">
			<tr>
			<td bgcolor="#24BDE2" height="35px" style="padding-left: 10px;color:#fff"> KẾT QUẢ TÌM KIẾM GAME : <?php $find = $_GET['box-search']; echo "".$find."";?></td>
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
	else{
	?><table width="100%">
			<tr>
			<td bgcolor="#24BDE2" height="35px" style="padding-left: 10px;color:#fff"> KẾT QUẢ TÌM KIẾM GAME : <?php $find = $_GET['box-search']; echo "".$find."";?></td>
			</tr>
		</table>
		<?php
		echo "Không có game bạn cần tìm.";
	}
	//while($result = mysql_fetch_array( $data )) {
	//	echo $result['id']; 
	//	echo " "; 
	//	echo $result['name']; 
	//	echo " ";
	//}
}
?>
</div>

<div class="right_content">
	<?php include("php/right content/latest game.php");?>	
</div>