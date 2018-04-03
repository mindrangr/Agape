define(['modules/date_MySQL_Stan','modules/messageApply'], function(date_MySQL_Stan,buttons) { 	
	return {
		parseIt:function(obj)				
		{		

			messObj1=$.trim(obj);			
			messObj2=messObj1.split("**");
			var mObj=""+messObj2[1];	
			
			mObj=$.parseJSON(mObj)
		
			setStorage('messages',messObj1);				
			$('#messContainer').empty();
			$('#messContainer').html("");
			
			var messObj;
	
			if(mObj.returnObj.length>0)
			{	
				
				messObj=mObj.returnObj;	
				setStorage('messages',messObj1);	
		
				leng=mObj.returnObj.length;
				$('#messgrCount').html("("+mObj.countR+")");
				
				paginationFunc('mainPagination',mObj.countR,'getMessages')
				
				
				var doc="none";
				var classchk="messageContainer1";
			
				
				for(i=0;i<leng;i++)
				{	
					tDate=getTime(mObj.returnObj[i]['agape_message_send_date'],"true");		
				
				
					var messagedisplayHol="doNotDisplay"
					if(mObj.returnObj[i]['agape_message_opened']=='Sealed'){
						messagedisplayHol=""
					}
				
					var replyClass="replyMessageHolder gradio";
					var comms=5555
				
					//securus
					//18008446591
					if(doc=='none')
					{		
					
						//var senderUrl=$.parseJSON(messObj[i]['agape_sender_url']);

						
						var $div1=$("<div id='mess"+i+"'></div>").addClass(classchk).appendTo('#messContainer');
						var yous = $('#messContainer')[0];	

						//top bar
						var $div2 = $("<div></div>").addClass('messhdr_gradient').appendTo($div1);
						
						var $div3 = $("<div></div>").addClass('messageX').html("<span  id='closeMess"+i+"'>X</span>").appendTo($div2);
						
						var $div4 = $("<div></div>").addClass('messagesName').html("Received from: <u>"+messObj[i]['agape_message_sender_username']+"</u>").appendTo($div2);
						

						
						if(mObj.returnObj[i].agape_message_opened=="Opened"){
							var $mailAlertDiv = $("<div></div>").addClass('mailAlertholder  messagedisplayHol doNotDisplay').appendTo($div2);
						
						}else{
							var $mailAlertDiv = $("<div></div>").addClass('mailAlertholder  messagedisplayHol').appendTo($div2);
						}
					
						
						var $div4 = $("<div></div>").addClass('sealed').html("<span id='newMessage"+i+"' ><i>New Message!</i></span>").appendTo($mailAlertDiv );
						
						var $div4 = $("<div></div>").addClass('sealed_img').html("<img src='images/mail.jpg'  style='margin-top:3px;'/>").appendTo($mailAlertDiv );
						

						
						var $div5 = $("<div></div>").addClass('messageDate').html(tDate).appendTo($div2);
						
						var $div6 = $("<div></div>").css('clear','both').appendTo($div2);
						
						var $div7 = $("<div></div>").addClass('messageImageholder').html("<img src='"+messObj[i]['agape_sender_url']+"' border='1' width='70' height='80'/>").appendTo($div1);
				
					
						var $div8a = $("<div></div>").css({"float":"left","width":"80%"}).appendTo($div1);
						
						var $div9 = $("<div></div>").addClass("messageTitleStyle").html(messObj[i]['agape_message_title']).appendTo($div8a);
						
						var $div10 = $("<div></div>").appendTo($div8a);
						var $div10a = $("<div></div>").addClass('messageDiv').html(mObj.returnObj[i]['agape_message']).appendTo($div10);
						
						
					
					if(mObj.returnObj[i].agape_message_responses!='none'){
				
						messObj[i].responseObj=$.parseJSON(mObj.returnObj[i].agape_message_responses);
						replyClass="replyMessageHolder_value gradio";
						var enytry=""
						
						for(var k=0;k<messObj[i].responseObj.length;k++){
						
							
															
								if($.trim(messObj[i].responseObj[k].sender_uname)!=$.trim(global.userObj['agape_profile_username'])){
							
									enytry+="<div class='messageReply_Style' style='border:solid 1px lime;'><div class='messageReply_innerStyle' style='background-image:url(../../images/talkbubble.png)'>ont "+messObj[i].responseObj[k].sendDateFormatted+" <b>"+messObj[i].responseObj[k].sender_uname+"</b> replied:</div><div style='color:#eee;'>"+decodeURI(messObj[i].responseObj[k].message)+"</div></div>";
								}
								else
								{
									enytry+="<div class='messageReply_Style_you' style='border:solid 1px black'><div class='messageReply_innerStyle_you'>on "+messObj[i].responseObj[k].sendDateFormatted+" you replied:</div><div style='color:#000;'>"+decodeURI(messObj[i].responseObj[k].message)+"</div></div>";
									

								}
						

						
							
						}
						var $div11 = $("<div id=repBox"+k+"></div>").addClass(replyClass).html(enytry).appendTo($div8a);
						
				
					
					}else{
						var $div11 = $("<div id=repBox"+i+"></div>").addClass(replyClass).appendTo($div8a);
					}
					
					
						var $div11a = $("<div></div>").addClass('replyTextareaMessageHolder').appendTo($div8a);
						//var $clearBoth = $("<div></div>").css({"clear":"both"}).appendTo($div10);
						var $div12 = $("<div></div>").addClass('messageSendButtonContainer').appendTo($div8a);
						var $clearBoth = $("<div></div>").css({"clear":"both"}).appendTo($div1);
						
						if(mObj.returnObj[i].agape_message_type=="simple"){
							var $div14 = $("<div></div>").html("reply").addClass('sliderButtonStyle1 messagebuttonStyle').on("click",
								function(){
									buttons.replyToMessage(this) ;
									this.style.display="none";
								}).on('mouseover',function(){
									buttonMouseOver(this,'#0b8d0b','par');

								}).on('mouseout',function(){
									buttonMouseOver(this,'green','par')
								})
								$div14.appendTo($div12);



						
							var $div15 = $("<div id='messB'></div>").html('visit profile').addClass('sliderButtonStyle1 messagebuttonStyle').unbind("click").on("click",function(){
							

							var mType=$(this).attr("id");
									var pNode=this.parentNode.parentNode.parentNode;
									var messgeList="";
									var member="";
									var indx=pNode.id.substr(4);
									alert('swnk')

									var frd1=globalTools.verify(sessionStorage.getItem('messages'));
									global.candidate.id=frd1.returnObj[indx].agape_message_sender_username
									global.module="messages";
									var friend1=$.parseJSON(global.userObj.agape_profile_friends)
									var friendLeng=friend1.length;
									for(k=0;k<friendLeng;k++){
										if(frd1.returnObj[indx].agape_message_sender_ID==friend1[k]){
											global.module="friend";
										}
									}
									viewBox(this,global.candidate.id,'default',"viewpro1_open.html");
							
							
							}).on('mouseover',function(){
								buttonMouseOver(this,'#0b8d0b','par')
									}).on('mouseout',function(){
										buttonMouseOver(this,'green','par')
									}).addClass('buttonClass_1').appendTo($div12);
						
						//var $div15 = $("<input ></input>").attr({type:"button",value:"clear thread"}).on("click",function(){visitProEE(this)}).addClass('buttonClass_1').appendTo($div12);
						
						var $div16 = $("<div></div>").css('clear','both').appendTo($div12);
						
					}
						
				}
					
				
					if(classchk=="messageContainer1")
					{
						classchk="messageContainer2";
						//classchk="messageContainer1";	
					}
					else
					{
						classchk="messageContainer1";				
					}
					
					var emailHolderId="newMessage"+i;
					$("#"+emailHolderId).on("click",function(){
						
						var index =   $(this).attr("id");
						index=index.substr(10);
						
						
						obj={};
						obj.job='readMessage';
						obj.index=index;
						obj.agape_message_ID=mObj.returnObj[index].agape_message_ID;
						obj.response={};
						
						var func = function(data){
							var editData=$.trim(data)
							var eparks=editData.split("**")
							if(eparks[1]=='successfully updated'){
								mObj.returnObj[index].agape_message_opened="Opened";
								var messO="true**"+JSON.stringify(mObj);
								setStorage('messages',messO);	
								

								require(['modules/message_tool'],function(message_tool)
								{
									message_tool.parseIt(messO);
								});

								
							}else{
								alert("not updated");
			
							}
						
						//305-608-7465
						}
						
						ajaxCall(obj,func);
						
						
						
					})
					
					
					var deleteMessage="closeMess"+i;
						
							$("#"+deleteMessage).on("click",function(){
								var index=   $(this).attr("id");
								index=index.substr(9);
								
								obj={};
								obj.job='removeMessage';
								obj.agape_message_ID=mObj.returnObj[index].agape_message_ID;
								obj.database='agape_messages';
								obj.index=index;
								
								var func = function(data){
								
									//mObj.returnObj[index].agape_message_active
									var turtle=data+"";
									turtle=turtle.split("**");
									index=$.trim(parseInt(turtle[0]));
								
									var mon=mObj
									
									var gt=mon.returnObj.slice(0,parseInt(index))
							
									var indigo=parseInt(index)+1
									//var tengo=mObj.returnObj.length-parseInt(indigo)
									
								
									var gu=mObj.returnObj.slice(indigo,mObj.returnObj.length)
									var tot = gt.concat(gu)
									mObj.returnObj=tot;
									var messO="true**"+JSON.stringify(mObj);
									setStorage('messages',messO);

									require(['modules/message_tool'],function(messenger){
										messenger.parseIt(messO);	
									})				
								}
								
								var confirmBox=confirm("Are you sure you want to delete this message?");
								if (confirmBox==true)
								{
									ajaxCall(obj,func);
								}
							})
					
				}
										
			}
			else
			{
				document.getElementById('messContainer').innerHTML="no records";
			}			
			
		},
		
		parseIt_sent:function(obj)				
		{		

		
			messObj1=$.trim(obj);			
			messObj2=messObj1.split("**");
			
			if(messObj2[0]=='true'){
			
			mObj=$.parseJSON(messObj2[1]);
	
			$('#messContainer').empty();
			var messObj;
			
			if(mObj.returnObj.length>0)
			{	
				messObj=mObj.returnObj;	
				setStorage('messages_sent',$.trim(obj));
				leng=mObj.returnObj.length;
				$('#messgrCount').html("("+mObj.countR+")");
				paginationFunc('mainPagination',mObj.countR,'getMessages_sent');
				var doc="none";
				var classchk="messageContainer1";
				for(i=0;i<leng;i++)
				{
					
					var tAreaID="textA"+i;
					
					var rmHoledr="rmholder"+i;
					tDate=getTime(messObj[i]['agape_message_send_date'],"true");		
					
					var replyClass="replyMessageHolder";
					var comms=messObj[i]['agape_message_responses'];
					
			
					if(comms!='' && comms!= undefined){
						replyClass="messageReply_Style";
					}
					
					if(doc=='none')
					{

				
						//var senderUrl=$.parseJSON(messObj[i]['agape_message_receiver_url']);
					
						
						var $div1=$("<div id='mess"+i+"'></div>").addClass(classchk).appendTo('#messContainer');
						var yous = $('#messContainer')[0];						
						
						//top bar
						var $div2 = $("<div></div>").addClass('messhdr_gradient').appendTo($div1);
						
						var $div3 = $("<div></div>").addClass('messageX').html("<span  id='closeMess"+i+"'>X</span>").appendTo($div2);
						
						var $div4 = $("<div></div>").addClass('messagesName').html("<span style='color:#fff'>Sent to: </span>"+messObj[i]['agape_message_receiver_username']).appendTo($div2);
						
						var $div4 = $("<div></div>").addClass('messagesName').html("<span style='color:#fff'>Sent to: </span>"+messObj[i]['agape_message_receiver_username']).appendTo($div2);
						
						var $div5 = $("<div></div>").addClass('messageDate').html(tDate).appendTo($div2);
						var $div6 = $("<div></div>").css('clear','both').appendTo($div2);
						
						var $div7 = $("<div><div>").addClass('messageImageholder').html("<img src="+messObj[i]['agape_message_receiver_url']+" border='1' width='70' height='80'/>").appendTo($div1);
					
				
						var $div8a = $("<div></div>").css({"float":"left","width":"80%","color":"#000"}).appendTo($div1);
						
						var $div9 = $("<div></div>").addClass("messageTitleStyle").html(messObj[i]['agape_message_title']).appendTo($div8a);
						
						var $div10 = $("<div></div>").appendTo($div8a );
						var $div10a = $("<div></div>").addClass('messageDiv').html(messObj[i]['agape_message']).appendTo($div10);


						
						if(mObj.returnObj[i].agape_message_responses!='none'){
							
							messObj[i].responseObj=$.parseJSON(mObj.returnObj[i].agape_message_responses);

							replyClass="replyMessageHolder_value gradio";
							var enytry=""
							for(var k=0;k<messObj[i].responseObj.length;k++){
														
								if($.trim(messObj[i].responseObj[k].sender_uname)!=$.trim(global.userObj['agape_profile_username'])){
							
									enytry+="<div class='messageReply_Style' style='border:solid 1px lime'><div class='messageReply_innerStyle'>on "+messObj[i].responseObj[k].sendDateFormatted+" <b>"+messObj[i].responseObj[k].sender_uname+"</b> replied:</div><div style='color:#eee;' >"+decodeURI(messObj[i].responseObj[k].message)+"</div></div>";
								}
								else
								{
									enytry+="<div class='messageReply_Style_you' style='border:solid 1px black'><div class='messageReply_innerStyle'>on "+messObj[i].responseObj[k].sendDateFormatted+" you replied:</div><div style='color:#eee;'>"+decodeURI(messObj[i].responseObj[k].message)+"</div></div>";
									
								}	
								
							}
							
							var $div11 = $("<div id=repBox"+k+"></div>").addClass(replyClass).html(enytry).appendTo($div8a);
						}else{
							
							var $div10b=$("<div></div>").addClass('replyMessageHolder_value doNotDisplay').appendTo($div8a);
						}

						//var $div10b=$("<div></div>").addClass('replyMessageHolder_value gradio').appendTo($div8a);
						//var $div11 = $("<div></div>").addClass(replyClass).html(comms).appendTo($div10b);
						
						var $div11a = $("<div id='"+rmHoledr+"'></div>").addClass('replyTextareaMessageHolder').css({"position":"relative"}).appendTo($div8a);
						var $div11b = $("<div style='display:none;'></div>").appendTo($div11a);
						var $texta = $("<textarea id='"+tAreaID+"' class='textareas'></textarea>").appendTo($div11b);
						var $buttdiv1 = $("<div></div>").appendTo($div11b);

						var subButt=$("<input type='button' value='submit' />").on("click",function(){
							var $ee=$(this);
							var tAreaID=$ee.parent().parent().parent().parent().children().eq(3).children().eq(0).children().eq(0);
							var indx=tAreaID.attr("id");
							indx=indx.substr(5)
							
							var messOsent=sessionStorage.getItem('messages_sent')
							var messObj3=messOsent.split("**")
						
							var messSentObj=$.parseJSON(messObj3[1])
							var usrO=sessionStorage.getItem('user');
							var usrO=$.parseJSON(usrO);
							var sendOj={};
							
							//{"sendDate":"2014-12-20 12:22:00","sendDateFormatted":"December 20, 2014 12:22 PM","sender_ID":"250","sender_uname":"uname250","message":"Hello","updateMessage_id":"32053","agape_message_sender_username":"uname9634","agape_message_sender_ID":"9634"}
							

							sendOj.job='respondToMessage';
							
							sendOj.db='agape_messages';
							sendOj.parser=global.parser;	

							sendOj.responseObj={};
							sendOj.responseObj.sendDateFormatted="";
							sendOj.responseObj.sendDate="";
							sendOj.jSON1="";

							var endc=Base64.encode(messSentObj.returnObj[indx].agape_message_sender_username)
								//var b=Base64.encode(now)
								


							sendOj.ObjId=messSentObj.returnObj[indx].agape_message_ID+"_"+endc;
							sendOj.updateMessage_id=messSentObj.returnObj[indx].agape_message_ID;
							sendOj.sendDate=convertNowToPhP();
							sendOj.sender_uname=global.userObj.agape_profile_username;
							

							sendOj.param="none";

							sendOj.responseObj.sender_ID=global.userObj.agape_profile_memberID
							sendOj.responseObj.sender_uname=global.userObj.agape_profile_username;
							sendOj.responseObj.message=tAreaID.val();
							sendOj.responseObj.updateMessage_id=messSentObj.returnObj[indx].agape_message_ID;
							sendOj.responseObj.agape_message_sender_username=messSentObj.returnObj[indx].agape_message_receiver_username
							sendOj.responseObj.agape_message_sender_ID=messSentObj.returnObj[indx].agape_message_receiver_ID
							sendOj.responseObj.sendDate=convertNowToPhP();
							sendOj.responseObj.sendDateFormatted=formattedPresent();
							sendOj.jsonObj=JSON.stringify(sendOj.responseObj);
							console.log(535)
								console.log(sendOj)
								console.log(535)
							if(tAreaID.val()!=""){
								buttons.submitMessage_sent(sendOj);
							}	
							
							


						}).appendTo($buttdiv1);
						

						var cancelButt=$("<input type='button' value='cancel' />").on("click",function(){
							
								var $ee=$(this)
								var tAreaID=$ee.parent().parent().parent().attr("id");
								var $tAreaID1=$ee.parent().parent().parent();
								var $tAreaID2=$ee.parent();
						
								var $repButton=$ee.parent().parent().parent().parent().children().eq(4).children().eq(0);
								var $tarea=$tAreaID1.children().eq(0).children().eq(0);
				
								$tAreaID1.animate({height:"0px"},400,function(){
									$tAreaID1.css("display","none");
								})
								$repButton.css("display","block");
							
								
						}).appendTo($buttdiv1);
						
						var $div12 = $("<div ></div>").addClass('messageSendButtonContainer').appendTo($div8a);
						var $clearBoth = $("<div></div>").css({"clear":"both"}).css("position","relative").appendTo($div1);
						
						var $div14 = $("<div></div>").html("reply").addClass('sliderButtonStyle1 messagebuttonStyle').on("click",
							function(){
								
								buttons.replyToMessageTween(this) ;
								
							}).on('mouseover',function(){
								buttonMouseOver(this,'#0b8d0b','par');

							}).on('mouseout',function(){
								buttonMouseOver(this,'green','par')
							})
							$div14.appendTo($div12);
						
							var $div15 = $("<div id='sentB'></div>").html('visit profile').addClass('sliderButtonStyle1 messagebuttonStyle').unbind("click").on("click",
								function(){
									var mType=$(this).attr("id");
									var pNode=this.parentNode.parentNode.parentNode;
									var messgeList="";
									var member="";
									var indx=pNode.id.substr(4);

									var frd1=globalTools.verify(sessionStorage.getItem('messages_sent'));
									global.candidate.id=frd1.returnObj[indx].agape_message_receiver_username
									global.module="messages_sent";
									var friend1=$.parseJSON(global.userObj.agape_profile_friends)
									var friendLeng=friend1.length;
									for(k=0;k<friendLeng;k++){
										if(frd1.returnObj[indx].agape_message_receiver_ID==friend1[k]){
											global.module="friend";
										}
									}
									
									viewBox(this,global.candidate.id,'default',"viewpro1_open.html");
								}).on('mouseover',
									function(){
										buttonMouseOver(this,'#0b8d0b','par')
									}).on('mouseout',function(){
								buttonMouseOver(this,'green','par')
							}).addClass('buttonClass_1').appendTo($div12);
						
						//var $div15 = $("<input ></input>").attr({type:"button",value:"clear thread"}).on("click",function(){visitProEE(this)}).addClass('buttonClass_1').appendTo($div12);
						
						var $div16 = $("<div></div>").css('clear','both').appendTo($div12);

						var deleteMessage="closeMess"+i;
						
						$("#"+deleteMessage).on("click",function(){
							
							con=confirm("Are you sure you want to delete this message?")

							if(con==true){
								var dobj=$(this).attr("id");
								dobj=dobj.substr(9)
								
								var messO=sessionStorage.getItem("messages_sent")
								messo=messO.split("**");
								var messObj=$.parseJSON(messo[1]);
								

								obj={};
								obj.job='removeMessage_sent';
								obj.agape_message_ID=messObj.returnObj[dobj].agape_message_ID;
								obj.database='agape_messages';
								obj.index=dobj;

								func=function(data){
								

									getMessages_sent(0)
									
								}
								ajaxCall(obj,func);

							}
						})
						
					}
					else
					{
						
				
					}
				
					if(classchk=="messageContainer1")
					{
						classchk="messageContainer2";
						//classchk="messageContainer1";	
					}
					else
					{
						classchk="messageContainer1";				
					}
					
				}
				
			}
			else
			{
				document.getElementById('messContainer').innerHTML="no records";
			}			
			
		}else{
			$("#messContainer").css({"width":"97%","text-align":"center","color":"#eee","font-size":"35px"}).html("There are 0 results for this query.")
		}
	}
		
		
	}


})



//alexander4444