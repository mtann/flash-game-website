$(document).ready(function(){
	$("#login").submit(function(e){
 
	var username=$("#username").val();
	var password=$("#password").val();
	var formURL = $(this).attr("action");
	var postData = $(this).serializeArray();
	    $.ajax({
	        type:"POST",
	        url:formURL,
	        data:postData,
	        success: function(result){
	        	if(result==0){
	        		alert("Tai khoan "+username+" chua dang ki");
	        		console.log("chua dang ki");
	        	}else if(result==1){
	        		// alert("Dang nhap thanh cong");
	        		console.log("dang nhap thanh cong");
	        		location.reload();
	        	}
	        }
	    });
	    e.preventDefault();	
    });
});
    