	define(['modules/message_tool'], function(message_tool) { 
	//console.log("Function : purchaseProduct"); 
	
	return {

	getMessages:function(start)
		{	
			if(typeof(Storage)!=="undefined")
			{						
				if(window.sessionStorage.getItem('messages')!=="undefined" && window.sessionStorage.getItem('messages')!=null )
				{			
					var messgs=window.sessionStorage.getItem('messages');	
					message_tool.parseIt(messgs);
					alert("in")
				}
				else
				{				
					alert("out")
					obj={};
					obj.job="getMessages";
					obj.memberID=window.userObj['agape_profile_memberID'];
					obj.start=start;
					obj.type="AJAX";
					
					messageStart=start;
					func=function(data){message_tool.parseIt(data)};	
					ajaxCall(obj,func);	
						
				}
			}
		},
		
		
		getMessages_sent : function(start)
		{				
				
				if(window.sessionStorage.getItem('messages_sent')!=="undefined" && window.sessionStorage.getItem('messages_sent')!=null )
				{	
					var messgs=window.sessionStorage.getItem('messages_sent');		
					message_tool.parseIt_sent(messgs);
				}
				else
				{	
					obj={};
					obj.job='getMessages_sent',
					obj.par=window.userObj['agape_profile_username'];
					
					obj.memberID=window.userObj['agape_profile_memberID'];
					obj.start=start;
					func=function(data){message_tool.parseIt_sent(data)};
					ajaxCall(obj,func);
				}			
		},
		
		createMessages : function()
		{	
			$("#messContainer").empty();
			
			var createObj={};
			createObj.htl="<div class='messageReply_Style' style='border:solid 1px black;height:88%'>";
			createObj.htl=createObj.htl+"<div style='margin-right:18px;text-align:left;float:left;width:55px;margin-bottom:20px;font-size:16px;color:#000;'>To:</div>";
			createObj.htl=createObj.htl+"<div style='text-align:left;margin:0px;'>"
			createObj.htl=createObj.htl+"<input type='text'  style='border:none' id='agape_message_receiver_username' /><span id='sentmessFlag' style='display:inline-block;margin-left:10px;font-weight:bold;'></span>"
			createObj.htl=createObj.htl+"<input type='hidden' id='agape_message_receiver_url' />"
			createObj.htl=createObj.htl+"<input type='hidden' id='agape_message_receiver_ID' /></div>"
			createObj.htl=createObj.htl+"<div style='clear:both;'></div>"
			createObj.htl=createObj.htl+"<div style='margin-right:18px;text-align:left;float:left;width:55px;margin-bottom:20px;font-size:16px;color:#000' >Title:</div>"
			createObj.htl=createObj.htl+"<div style='text-align:left;margin:0px;'>"
			createObj.htl=createObj.htl+"<div style='text-align:left;margin:0px;'>"
			createObj.htl=createObj.htl+"<input type='text' style='width:340px;' id='agape_message_title' />"
			createObj.htl=createObj.htl+"</div><div style='clear:both;'></div>";
			createObj.htl=createObj.htl+"<div style='margin-right:18px;text-align:left;float:left;width:55px;margin-bottom:20px;font-size:16px;color:#000;'>Message:</div>"
			createObj.htl=createObj.htl+"<div style='text-align:left;margin:0px;'>"
			createObj.htl=createObj.htl+"<textarea type='text' style='width:340px;height:140px;border-radius: 5px 5px 5px 5px' id='agape_message'></textarea>"
			createObj.htl=createObj.htl+"</div><div style='clear:both;'></div>"
			createObj.htl=createObj.htl+"<div id='subsend'  class='sliderButtonStyle1 messagebuttonStyle' onclick=sendMessage(this) onmouseover=buttonMouseOver(this,'#0b8d0b','par') onmouseout=buttonMouseOver(this,'green','par')>Send</div><div id='clear'  class='sliderButtonStyle1 messagebuttonStyle' onclick=sendMessage(this,'green','par') onmouseover=buttonMouseOver(this,'#0b8d0b','par') onmouseout=buttonMouseOver(this,'green','par')>Clear</div></div>"
			
			createObj.loadPage=function(){
				$("#messContainer").append(createObj.htl)
			}

			
			createObj.loadPage();
			
			$("#agape_message_receiver_username").on("blur",function(){
				
				
				bodyTestKey($("#agape_message_receiver_username").val(),'agape_profile_username')
			})
		
		}
		
	};
})