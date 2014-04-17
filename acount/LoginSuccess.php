<? 
// kiể tra session đã được đăng ký chưa? nếu chưa thì chuyển hướng về trang main_login.php 
// đoạn code này đặt ở đầu trang website của bạn 

session_start(); 
                                                  if(!session_is_registered(myusername))
												  { 
                                                  	header("location:main_login.php"); 
                                                  } ;

                                                   
                                                  <html> 
                                                  <body> 
                                                  		Login Successful ;
                                                  </body> 
                                                  </html>  

?> 





