<html>
<head>
</head>
<body>
<?php 
if ($_SERVER['REQUEST_METHOD'] != 'POST'){
?>
<h2>Search</h2> 
 <form name="search" method="post" action="">
 Seach for: <input type="text" name="find" /> in 
 <Select NAME="field">
 <Option VALUE="id">ID of Game</option>
 <Option VALUE="name">Name of Game</option>
 </Select>
 <input type="submit" name="search" value="Search" />
 </form>
 
 <?php
 } else{ 
 echo "<h2>Results</h2><p>"; 
 
 $find = $_POST['find'];
 $field = $_POST['field'];
 //If they did not enter a search term we give them an error 
 if ($find == "") 
 { 
 echo "<p>You forgot to enter a search term"; 
 exit; 
 } 
 
 // Otherwise we connect to our Database 
 mysql_connect("localhost", "root", "") or die(mysql_error()); 
 mysql_select_db("flash_game_website") or die(mysql_error()); 
 
 // We preform a bit of filtering 
 $find = strtoupper($find); 
 $find = strip_tags($find); 
 $find = trim ($find); 
 
 //Now we search for our search term, in the field the user specified 
 $data = mysql_query("SELECT * FROM game WHERE $field LIKE '%$find%'"); 
 
 //And we display the results 
 while($result = mysql_fetch_array( $data )) 
 { 
 echo $result['id']; 
 echo " "; 
 echo $result['name']; 
 echo " ";
 echo $result['description']; 
 echo " ";
 echo $result['status']; 
 echo " ";
 echo $result['rating']; 
 echo " ";
 echo $result['avatar']; 
 echo " ";
 echo $result['link']; 
 echo " ";
 echo $result['upload_time']; 
 echo "<br>"; 
 } 
 
 //This counts the number or results - and if there wasn't any it gives them a little message explaining that 
 $anymatches=mysql_num_rows($data); 
 if ($anymatches == 0) 
 { 
 echo "Sorry, but we can not find an entry to match your query<br><br>"; 
 } 
 
 //And we remind them what they searched for 
 echo "<b>Searched For:</b> " .$find; 
 } 
 ?>
 </body>
 </html>