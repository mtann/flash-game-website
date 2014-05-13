<!--code for form search-->
<?php
	if ($_SERVER['REQUEST_METHOD'] != 'POST'){
	echo "chua post";
}
else{
	//echo "post roi";
	//$find = $_POST['box-search'];
	//echo "".$find."";
	
	$find = $_POST['box-search'];
	//$field = $_POST['field'];
	//If they did not enter a search term we give them an error 
	//if ($find == "") 
	//{ 
	// echo "<p>You forgot to enter a search term"; 
	// exit; 
	//} 
	 
	// Otherwise we connect to our Database 
	mysql_connect("localhost", "root", "") or die(mysql_error()); 
	mysql_select_db("gameflash") or die(mysql_error()); 
	 
	// We preform a bit of filtering 
	$find = strtoupper($find); 
	$find = strip_tags($find); 
	$find = trim ($find); 
	 
	//Now we search for our search term, in the field the user specified 
	$data = mysql_query("SELECT id, name FROM game WHERE name LIKE '%$find%'");
	
	//And we display the results 
	while($result = mysql_fetch_array( $data )) {
		echo $result['id']; 
		echo " "; 
		echo $result['name']; 
		echo " ";
	}
}
?>