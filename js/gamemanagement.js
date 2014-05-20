function savegamechanges(gameid){
	var avatar=$("#"+gameid+"avatar").val();
	var link = $("#"+gameid+"link").val();
	var story = $("#"+gameid+"story").val();
	var introduction = $("#"+gameid+"introduction").val();
	console.log(avatar);
	console.log(link);
	console.log(story);
	console.log(introduction);
	$.ajax({
	    type:"post",
	    url:"../php/SaveGameChanges.php",
	    data:{GameName: gameid, Avatar: avatar, Link: link, Story: story, Introduction: introduction},
	    success:function(result){
	    	if(result==1){
		    	console.log(result);	
	    	}else
		    console.log(result);	
		}
	});
}

function addnewgame(gametype){
	var gamename=$("#new"+gametype+"name").val();
	var avatar=$("#new"+gametype+"avatar").val();
	var link=$("#new"+gametype+"link").val();
	var story=$("#new"+gametype+"story").val();
	var introduction=$("#new"+gametype+"introduction").val();
	console.log(gamename);
	console.log(avatar);
	console.log(link);
	console.log(story);
	console.log(introduction);
	$.ajax({
	    type:"post",
	    url:"../php/AddNewGame.php",
	    data:{GameName: gamename, GameType: gametype, Avatar: avatar, Link: link, Story: story, Introduction: introduction},
	    success:function(result){
	    	if(result==1){
		    	console.log(result);	
		    	location.reload();
	    	}else
		    console.log(result);	
		}
	});
}

function deletegame(gameid){
	$.ajax({
	    type:"post",
	    url:"../php/DeleteGame.php",
	    data:{GameId: gameid},
	    success:function(result){
	    	if(result==1){
		    	console.log(result);	
		    	$("#"+gameid).remove();
	    	}else
		    console.log(result);	
		}
	});
}