$(document).ready(function(){
    $("#currentname").change(function(){
 
	    var username=$("#currentname").val();
	 
	    $.ajax({
	        type:"post",
	        url:"../php/usernamecheck.php",
	        data:"username="+username,
	        success:function(result){
	        	console.log(result);
		        if(result==1){
		        	$("#message").html("<img src='../img/Ajax/tick.jpg' /> Username available");
		        	$("#submitmodify").removeAttr("disabled");
		        }
		        else if(result==0){
		        	$("#message").html("<img src='../img/Ajax/cross.jpg' /> Username already taken");
		        	console.log($("#submitmodify"));
		        	$("#submitmodify").attr("disabled", "disabled");
		        }
	        }
	    });
    });
});