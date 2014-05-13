function checkPasswordMatch(){
	var password1 = $("#password1").val();
	$("#passwordMatchCheck").html(password1 == 
		$("#password2").val()
		?""
		:"Passwords not match");
}
$(document).ready(function(){
    $("#registername").change(function(){
 
	    var username=$("#registername").val();
	 
	    $.ajax({
	        type:"post",
	        url:"../php/usernamecheck.php",
	        data:"username="+username,
	        success:function(result){
	        	console.log(result);
		        if(result==1){
		        	$("#message").html("<img src='../img/Ajax/tick.jpg' /> Username available");
		        	$("#submitregister").removeAttr("disabled");
		        }
		        else if(result==0){
		        	$("#message").html("<img src='../img/Ajax/cross.jpg' /> Username already taken");
		        	console.log($("#submitregister"));
		        	$("#submitregister").attr("disabled", "disabled");
		        }
	        }
	    });
    });
});