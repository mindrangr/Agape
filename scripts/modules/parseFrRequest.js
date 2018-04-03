define([], function() { 
	//console.log("Function : purchaseProduct"); 
	return {
		parseFrRequest:function(obj)
		{	
			
			var tObj=obj.split("**");
			
			var friendStrg="";
			friendObj=$.parseJSON(tObj[1]);
			
			$('#friendCount').html("("+friendObj.countR+")");
			
			paginationFunc('mainFriendPagination',friendObj.countR,'getFriends');
			control='getFriends';
			
			fLeng=friendObj.length;
			
			classchk="messageContainer1";
			for(i=0;i<fLeng;i++)
			{
					var tImg=friendObj[i].requestorImgUrl;
					
					tImg1=$.parseJSON(tImg);
				friendStrg=friendStrg+"<div class='"+classchk+"'><div style='float:left;'><img src='"+tImg1.defaultPic+"' border='1' height=30 width=30 /></div><div style='float:left;'>You have received a friendship request from "+friendObj[i].requestorUsername+"</div><div style='float:right;'><button >accept</button><button >ignore</button></div><div style='clear:both;'></div></div>";
				if(classchk=="messageContainer1")
				{
					classchk="messageContainer2";
				}
				else
				{
					classchk="messageContainer1";				
				}
			}
			$("#friendContainer").empty().html(friendStrg)

			
		}
	}
})