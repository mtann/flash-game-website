<? 
$host="localhost"; // Host name  
  $username=""; // Mysql username  
  $password=""; // Mysql password  
  $db_name="test"; // Database name  
  $tbl_name="members"; // Table name  to server and select databse. 
  mysql_connect("$host", "$username", "$password")or die("cannot connect");  
  mysql_select_db("$db_name")or die("Không th? k?t n?i d?n co s? d? li?u"); 
 // username và password g?i d?n t? form dang nh?p 
$myusername=$_POST['myusername'];  
$mypassword=$_POST['mypassword'];  
$myusername = stripslashes($myusername); 
$mypassword = stripslashes($mypassword); 
$myusername = mysql_real_escape_string($myusername); 
$mypassword = mysql_real_escape_string($mypassword); 
$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'"; 
$result=mysql_query($sql); 
// Mysql_num_row s? user tìm th?y t? database 
   $count=mysql_num_rows($result); 
// n?u tìm th?y  $myusername và $mypassword, k?t qu? tr? v? s? là 1 dòng 
if($count==1)
{ 
	// dang ký $myusername, $mypassword và chuy?n xong file "login_success.php" 
	session_register("myusername"); 
	session_register("mypassword");  
    header("location:login_success.php"); 
} 
else 
{ 
	echo "Wrong Username or Password"; 
}  

?>