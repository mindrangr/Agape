define(['modules/timeObj'], function(TO) { 	

	return {
		replyToMessage: function (elem){
				var totVal=$(elem).parent().parent().children().eq(1).children().eq(0).html();
				var $totVal1=$(elem).parent().parent().children().eq(2).html();
				var valu=$(elem).parent().parent().parent().attr("id");
				valu=valu.substr("4");
			
				self=this;
				$textareaBox=$(elem).parent().parent().children().eq(3);
				var tt

				$textareaBox.css({"display":"block"}).animate({height:"130px"},300);
				var $messageDiv=$(elem).parent().parent().children().eq(0).children().eq(6).html();
				$textareaBox.append("<textarea id='tare"+valu+"' class='textareas'></textarea>");
				$textareaBox.append("<br/>");
				$textareaBox.append("<input type='button'  id='send' value='send'/>");
				$textareaBox.append("<input id='cancel'  type='button' value='cancel'/>");
				$textareaBox.on('click',function(event){
					var buttn=event.target.id;
					//This is various button commands in the message console

					switch(buttn)
						{
							case 'cancel':
							
								$textareaBox.unbind("click");
								$textareaBox.empty().animate({height:"0px"},300,'swing', function(){$(this).css("display","none");})
								elem.style.display="inline-block";
							
							break;
						
							case 'send':
								var responseBlock={};
							
								var messgeList=sessionStorage.messages;

								var messageArray=globalTools.verify(messgeList)
								
								responseBlock.updateID=messageArray.returnObj[valu].agape_message_ID;
								
								var elem1="tare"+valu;
								var $responseDiv = $(elem).parent().parent().children().eq(2);

					
								responseBlock.message=$("#"+elem1).val();

							
								
								var dato = new Date();
								var cato = getTime(dato,'true','Firefox');
								var classTime="messageReply_Style";

								responseBlock.message=globalTools.stringClear(responseBlock.message)
									
								var enytry="<div class='"+classTime+"'><div class='messageReply_innerStyle'>On "+cato+" you replied:</div><div class='messageReply_innerStyle'> "+responseBlock.message+"</div></div>";
	
								$responseDiv.css("display","block").prepend(enytry);
								responseBlock.parsedDate=cato;
								responseBlock.date=dato;
								obj={};
								obj.job='respondToMessage';
								obj.response={};
								var cloner = {}
								cloner.sendDate=TO.convertToPhP();
								obj.sendDate=TO.convertToPhP();
								obj.parser=global.parser;
								cloner.sendDateFormatted= cato;
								cloner.sender_ID=cloner.param;
								cloner.sender_uname=$.trim(global.userObj['agape_profile_username']);
								obj.sender_uname=$.trim(global.userObj['agape_profile_username']);
								cloner.message=$.trim(encodeURI(responseBlock.message));
								obj.updateMessage_id=responseBlock.updateID;
								cloner.agape_message_sender_username=messageArray.returnObj[valu]['agape_message_sender_username'];
								cloner.agape_message_sender_ID=messageArray.returnObj[valu]['agape_message_sender_ID'];
								obj.jsonObj=JSON.stringify(cloner);
								var endc=Base64.encode(cloner.sender_uname)
								//var b=Base64.encode(now)
								obj.ObjId=obj.updateMessage_id+"_"+endc;
								obj.obj=cloner;
								obj.param=global.userObj['agape_profile_memberID'];
								obj.table='getMessages';
								obj.start=1;
							

								func=function(data){
									require(['modules/message_tool'],function(parser){

										if(global.parser=='received'){
											parser.parseIt(data)
										}else{
											parser.parseIt_sent(data)
										}
									})
								};
								ajaxCallPost(obj,func);
								
								//$("#answer").html(enytry);
								
								$textareaBox.unbind("click");
								var newVal=$responseDiv.parent().children().eq(2).html();
								//alert($responseDiv.parent().children().eq(2).html())
								
								$textareaBox.empty().animate({height:"0px"},300,'swing', function(){$(this).css("display","none")});
								elem.style.display="inline-block";
								
							break;
						}});
						//this.style.display="block";
				//$(elem).parent().parent().prev().prev().css("background-color","red")//.on('click',function(){alert($(this).attr('id'))});
			},

			replyToMessageTween:function(obj){
				var $t=$(obj);
				
				var $replyButton=$t.parent().parent().children().eq(4).children().eq(0);
				
				//makes reply button disappear
				$replyButton.css("display","none");
				
				$chatboxHolder=$replyButton.parent().prev();
				//$hold1=overall div
				var $hold1=$chatboxHolder.children().eq(0).parent();
				$hold1.css({"display":"block"}).animate({height:"140px"},400);
				$hold1.children().eq(0).parent().css("display","block");
				$chatboxHolder.css("display","block")
				$chatboxHolder.children().eq(0).css("display","block").animate({height:"140px"},300);

				//var tweenB=document.getElementById(box);
				var tweenC=$hold1.children()[0];
			},

			submitMessage_sent:function(obj){
				func=function(data){
					require(['modules/message_tool'],function(parser){
						parser.parseIt_sent(data)
					})
				}

				ajaxCallPost(obj,func)
				
			}
		}
	})