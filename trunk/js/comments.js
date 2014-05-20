function postcomment(username, gameid){
	var comment=$("#mycomment").val();
	$.ajax({
	    type:"post",
	    url:"php/AddComment.php",
	    data:{Username: username, Content: comment, GameId: gameid},
	    success:function(result){
	    	if(result==1){
		    	console.log(result);
		    	$("#commenttable").append(
		    		"<tr>"+
		    			"<td style=\"color: #0915B5\">"+username+":"+"</td>"+
		    			"<td>"+comment+"</td>"+
		    		"</tr>"
		    	);
	    	}else
		    console.log(result);	
		    $("#mycomment").val("");
		}
	});
}