class CommentBoss{
	constructor(group,div,top,pagination,paginatElem){
		
		this.newsObj={}
		this.ViewIndex="";
		this.div=div;
		this.pagin="no";
		this.pElement=paginatElem;
		this.paginateIndx=0;
		this.group=group;
		this.top=top;
		if(pagination){
			this.pagin=pagination;
		}
		this.ingniteLightBox={};
		_this=this;
		this.getTopics(group);
	}
	getTopics(group){

		var sendo={};
		sendo.job='selectAll';
		sendo.dbase='agape_topics';
		sendo.kob="";
		switch(group){

			case 'All':
				sendo.ob="where agape_media_type='Blog' and agape_media_status='Active' order by agape_commentsLastComment desc limit 0,25";
				sendo.ob2="where agape_media_type='Blog' and agape_media_status='Active'";
			break;


			case 'trumpVid':
				sendo.ob="where agape_commentsSource='"+_this.top+"'  order by agape_commentsLastComment desc limit 0,25";
				sendo.ob2="where agape_commentsSource='"+_this.top+"' ";

				sendo.kob=sendo.ob;
				sendo.dbase='agape_comments';

			break;


			default:
				sendo.ob="where agape_media_type='Blog' and agape_media_group='"+group+"' and agape_media_status='Active' order by agape_media_lastComment_date desc limit "+_this.paginateIndx+",25";
				sendo.ob2="where agape_media_type='Blog' and agape_media_group='"+group+"' and agape_media_status='Active'"

			break;



		}

		
		sendo.Getdetail="GetCount";
		var func=function(data){
			var dre=globalTools.verify(data);
			var searchObj=globalTools.verify(data);
			if(searchObj.countR){
				_this.newsObj=searchObj;
				global.searchObj.romanceObj=searchObj
			}
			_this.generateArticlesSearch(_this.newsObj,_this.div);
		}
		ajaxCallPost(sendo,func);
	}

	generateArticlesSearch(obj,div){
		switch(_this.group){


			case 'trumpVid':
				var leng = obj.returnObj.length;
				var strg="";
				var elemColor="#eee";
				for(var g=0;g<leng;g++){
					var timeDateVaCreate=getTime(obj.returnObj[g].agape_comment_createdate,'true')
					var timeDateVaUpdate=getTime(obj.returnObj[g].agape_commentsLastComment,'true');

					strg=strg+"<div class='newsElems' style='background-color:"+elemColor+";'>"
						//strg=strg+"<div id='news"+g+"' style='float:left;width:300px;margin:auto;text-decoration:underline;font-weight:bold;cursor:pointer;' onclick='_this.viewMedia(this,_this.div )'>"+obj.returnObj[g].agape_media_title+"</div><div style='float:right;font-weight:bold;'>"+obj.returnObj[g].agape_media_group+"</div>"
						
						strg=strg+"<div style='clear:both'></div>"
						strg=strg+"<div class='fontsize12px' style='float:left;'><span style='display:inline-block;width:95px;font-weight:bold;'>Created by:</span>"+obj.returnObj[g].agape_commentCreator_Username+"</div>"
						strg=strg+"<div class='fontsize12px' style='float:right;'><span style='display:inline-block;width:95px;font-weight:bold;'>Updated by:</span> <span id='media_UpBy"+g+"' style='color:red;'>"+obj.returnObj[g].agape_commentsLastComment_username+"</span></div>"
						strg=strg+"<div style='clear:both'></div>"
						strg=strg+"<div class='fontsize12px' style='float:left;'><span style='display:inline-block;width:95px;font-weight:bold;'>Created:</span>"+timeDateVaCreate+"</div>"
						strg=strg+"<div class='fontsize12px' style='float:right;'><span style='display:inline-block;width:95px;font-weight:bold;'>Updated:</span><span id='media_commUpdateDate"+g+"'>"+timeDateVaUpdate+"</span></div>" 
						strg=strg+"<div style='clear:both'></div>"
						strg=strg+"<div style='width:80%;margin:auto;margin-top:25px;'>"
							strg=strg+"<div style='float:left;margin-bottom:25px;'><span style='font-weight:bold;' >comments: </span><span id='media_comm"+g+"'>"+obj.returnObj[g].agape_comments_Comment+"</span></div>";
							strg=strg+"<div style='clear:both'></div>"
							
							var chdobj=$.parseJSON(global.userObj.agape_vote_recordThumbs);
							var chdobbjIdx=chdobj.length;
							

							var loadr="full"
							for(var u=0;u<chdobbjIdx;u++){
								for(var key in chdobj[u]){
									if(key=="votetype"){
										if(chdobj[u][key]=="commentVote"){
											if(chdobj[u]['mainId']==obj.returnObj[g].agape_commentsID){
												loadr="none";
											}
										}
									}
								}



							}
							//var wr=$.parseJSON(obj.returnObj[g].agape_commentsCommentDataResponse);
							//console.log(wr)
							console.log(obj.returnObj[g].agape_commentsCommentDataResponse)
							var wr="";
							if(obj.returnObj[g].agape_commentsCommentDataResponse!="none"){
								wr=$.parseJSON(obj.returnObj[g].agape_commentsCommentDataResponse);
								console.log(wr.replyObj.replys)
								var by=wr.replyObj.replys.length;
								var bGrnd="#dedede"
								strg=strg+"<div style='margin-left:20px;'>"
								for(var k=0;k<by;k++){
									strg=strg+"<div style=';background-color:"+bGrnd+";border:solid 1px #000;'>"
									strg=strg+"<div style='float:left;margin-left:10px;'>"+wr.replyObj.replys[k].agape_commentsLastReply_username+"</div>"
									strg=strg+"<div style='float:right;margin-right:8px;'>"+wr.replyObj.replys[k].agape_reply_createdate+"</div>"
									strg=strg+"<div style='float:left'></div>";
									strg=strg+"<div style='clear:both;'></div>";
									strg=strg+"<div style='width:300px;margin:auto;'>"+wr.replyObj.replys[k].agape_comments_Comment+"</div>";
									strg=strg+"<div id='innRep' style='margin-left:10px;text-decoration:underline;margin-bottom;10px;cursor:pointer;'>reply</div>";
									strg=strg+"</div>";
									if(bGrnd=="#dedede"){
										bGrnd="#fff"
									}else{
										bGrnd="#dedede"
									}
								}
								strg=strg+"</div>"
							}

							
							console.log(wr)
							

							switch(loadr){

								case 'none':
									strg=strg+"<div style='float:left;margin-left:15px;cursor:pointer;'><img src='images/thumbsUpGray.png' id='cohuog"+g+"' height='18'/><span  style='margin-left:3px;width:50px;'>"+obj.returnObj[g].agape_comments_thumbsUp+"</span></div>"
									strg=strg+"<div style='float:left;margin-left:15px;cursor:pointer;'><img src='images/thumbsDownGray.png' height='18' id='cohuog"+g+"' /><span  style='margin-left:3px;width:50px;'>"+obj.returnObj[g].agape_comments_thumbsDown+"</span></div>"
								break;


								case 'full':
									strg=strg+"<div style='float:left;margin-left:15px;cursor:pointer;'><img src='images/thumbsUp.gif' id='commImg_tup"+g+"' height='18'/><span  style='margin-left:3px;width:50px;'>"+obj.returnObj[g].agape_comments_thumbsUp+"</span></div>"
									strg=strg+"<div style='float:left;margin-left:15px;cursor:pointer;'><img src='images/thumbsDown.gif' height='18' id='commImg_tdown"+g+"' /><span  style='margin-left:3px;width:50px;'>"+obj.returnObj[g].agape_comments_thumbsDown+"</span></div>"
								break;
							}
							
							strg=strg+"<div id='replyC"+g+"' style='float:left;margin-left:15px;cursor:pointer;font-weight:bold;'>Reply</div>"
							strg=strg+"<div style='clear:both'></div>"
							strg=strg+"<div id='commBx"+g+"' style='margin-top:10px;margin-bottom:20px;height:0px;overflow:auto;overflow-y:hidden;'>" 
							strg=strg+"<textarea id='repComBox"+g+"' style='width:300px;height:70px;' ></textarea>"
							strg=strg+"<div style='margin-top:10px;margin-left:15px;'><button id='cMessButt"+g+"' type='button' class='btn btn-success' >Create Message</button>&nbsp;<button id='closeCreate"+g+"' type='button' class='btn btn-secondary' >Cancel</button></div>"
							strg=strg+"</div>"
							
						//strg=strg+"</div>"
					strg=strg+"</div>";

					if(elemColor=="#eee"){
						elemColor="#ddd"
					}else{
						elemColor="#eee"
					}
					
				}
				$("#"+div).empty().append(strg);

				$("img[id^='commImg_']").each(function(){
					$(this).on("click",function(){
						var hy=$(this).attr("id")+"";
						var gy=hy.substr(7);
						var jy=gy.search(/_tdown/);
						var ky=gy.search(/_tup/);
						var model={}
						model.job="quickJamUpdate_full"
						model.obj={}
						model.param="incField";
						model.dbase="agape_comments";
						var commi;
						if(jy!=-1){
							var indx=gy.substr(6);
							model.obj.agape_comments_thumbsDown=" agape_comments_thumbsDown + 1"
							model.vals=obj.returnObj[indx].agape_commentsID;
							model.field="agape_commentsID";
							commi=obj.returnObj[indx].agape_commentsID;
						}

						if(ky!=-1){
							var indx=gy.substr(4)
							model.obj.agape_comments_thumbsUp="agape_comments_thumbsUp + 1";
							model.vals=obj.returnObj[indx].agape_commentsID;
							model.field="agape_commentsID";
							commi=obj.returnObj[indx].agape_commentsID;
						}

						var func=function(datum){
							 addAgape_vote_recordThumbs.addVoteRecs(commi);
							 var mod={};
							 mod.job="selectAll";
							 mod.dbase="agape_profile";
							 mod.kob=" where agape_profile_memberID="+global.userObj.agape_profile_memberID;
							 var mddFunk=function(data){
							 	console.log(data)
							 	var fre=globalTools.verify(data)
							 	global.userObj=fre.returnObj[0];
							 	globalTools.save();
							 	b = new CommentBoss('trumpVid','vidCommModal',obj.returnObj[global.dataHolder.vidIndex].agape_commentsSource);
							 }
							 ajaxCallPost(mod,mddFunk)
						}
						ajaxCallPost(model,func);
					})
				})

				$("div[id^='replyC']").each(function(){
					$(this).unbind("click").on("click",function(){
						var es=$(this).attr("id")+"";
						var es1=es.substr(6);
						TweenMax.to($("#commBx"+es1)[0],.4,{css:{height:"120px"}});
					})
				})

				$("button[id^='closeCreate']").each(function(){
					$(this).unbind("click").on("click",function(){
						var es=$(this).attr("id")+"";
						var es1=es.substr(11);
						TweenMax.to($("#commBx"+es1)[0],.4,{css:{height:"0px"}});
						$("#repComBox"+es1).val("")
					})
				})


				$("button[id^='cMessButt']").each(function(){
					$(this).unbind("click").on("click",function(){
						var es=$(this).attr("id")+"";
						var es1=es.substr(9);
						var es2=$("#repComBox"+es1).val();
						var mod={};
						mod.job="updateComment";
						mod.selectField="agape_commentsCommentDataResponse";
						mod.dbase="agape_comments"
						mod.selectParam="agape_commentsID";
						mod.issuesID=global.searchObj.romanceObj.returnObj[es1].agape_commentsID;
						mod.now=convertNowToPhP();
						mod.strID=global.searchObj.romanceObj.returnObj[es1].agape_commentsID;
						mod.username=global.userObj.agape_profile_username;
						mod.selFunc="selectFunc";
						mod.kob=" where agape_commentsID="+global.searchObj.romanceObj.returnObj[es1].agape_commentsID;
						mod.Getdetail="GetCount";
						mod.ob2=""
						mod.param1="agape_commentsID";
						mod.objR={}
						var img=$.parseJSON(global.userObj.agape_profile_default_img)
						mod.objR.replyImg=img.defaultPic;
						mod.objR.agape_commentsLastReply_username=global.userObj.agape_profile_username;
						mod.objR.agape_reply_createdate=getTime(mod.now,"true");
						mod.objR.agape_comments_Comment=globalTools.stringClear(es2);
						var trr=getCodedDate();
						mod.objR.agape_replyID=global.searchObj.romanceObj.returnObj[es1].agape_commentsID+"_"+trr
						var fK=function(data){
							console.log(9999999)
							data=data+"";
							var flng=data.length;
							var e=data.substr(3)
							var h=data.substr(4,200);
							
							//console.log(e)
							//console.log(h)
							console.log(data)
							
							//var b=globalTools.stripSlash(data)
							//console.log(b)
							//var j=$.parseJSON(b)
							//console.log(j)
							console.log(9999999)
						}
						console.log(666666666666)
						console.log(mod)
						console.log(666666666666)
						ajaxCallPost(mod,fK)

					})
				})

				



				if(_this.pagin=="true"){
					_this.pagination();
				}

			break;


			default:
				var leng = obj.returnObj.length;
				var strg="";
				var elemColor="#eee";
				for(var g=0;g<leng;g++){
					var timeDateVaCreate=getTime(obj.returnObj[g].agape_media_createDate,'true')
					var timeDateVaUpdate=getTime(obj.returnObj[g].agape_media_lastComment_date,'true');

					strg=strg+"<div class='newsElems' style='background-color:"+elemColor+";'>"
						strg=strg+"<div id='news"+g+"' style='float:left;width:300px;margin:auto;text-decoration:underline;font-weight:bold;cursor:pointer;' onclick='_this.viewMedia(this,_this.div )'>"+obj.returnObj[g].agape_media_title+"</div><div style='float:right;font-weight:bold;'>"+obj.returnObj[g].agape_media_group+"</div>"
						
						strg=strg+"<div style='clear:both'></div>"
						strg=strg+"<div class='fontsize12px' style='float:left;'>Created by: "+obj.returnObj[g].agape_media_author+"</div>"
						strg=strg+"<div class='fontsize12px' style='float:right;'>Updated by: <span id='media_UpBy"+g+"' style='color:red;'>"+obj.returnObj[g].agape_media_updatedBy+"</span></div>"
						strg=strg+"<div style='clear:both'></div>"
						strg=strg+"<div class='fontsize12px' style='float:left;'>Created: "+timeDateVaCreate+"</div>"
						strg=strg+"<div class='fontsize12px' style='float:right;'>Updated: <span id='media_commUpdateDate"+g+"'>"+timeDateVaUpdate+"</span></div>" 
						strg=strg+"<div style='clear:both'></div>"
						strg=strg+"<div style='width:40%;margin:auto;'>"
							strg=strg+"<div style='float:left;'>comments: <span id='media_comm"+g+"'>"+obj.returnObj[g].agape_media_comments_count+"</span></div>"
							strg=strg+"<div style='float:left;margin-left:15px;'><img src='images/thumbsUp.gif' height='13'/><span id='dia_tup"+g+"' style='margin-left:3px;width:50px;'>"+obj.returnObj[g].agape_media_thumbsUp+"</span></div>"
							strg=strg+"<div style='float:left;margin-left:15px;'><img src='images/thumbsDown.gif' height='13'/><span id='dia_tdown"+g+"' style='margin-left:3px;width:50px;'>"+obj.returnObj[g].agape_media_thumbsDown+"</span></div>"
							strg=strg+"<div style='clear:both'></div>"
						strg=strg+"</div>"
					strg=strg+"</div>";

					if(elemColor=="#eee"){
						elemColor="#ddd"
					}else{
						elemColor="#eee"
					}
				}
				$("#"+div).empty().append(strg);
				if(_this.pagin=="true"){
					_this.pagination();
				}

			break;

		}

		
		
		

	}

	viewMedia(vObj,MainCDiv){
		var verif=Verifyuser();
		var $g=$(vObj);
		var id=$g.attr("id");
		var k=id+"";
		id=id.substr(4);
		var div1=document.getElementById("_lboxBackground");
		var div2=document.getElementById("_lBoxMainDiv");
		var template={};
		var indx=0;


		template.page="ArticleView.html";
		template.job="visitprofile";
		template.param=_this.newsObj;
		template.ViewInx=id;

			
		var n2 = k.search("news");
		if(n2!=-1){
			CommentBoss.setDiv="news";
			CommentBoss.setDivName("newsContent");
			MainCDiv="newsContent"

		}


		
		//global.view.Type=viewType
			

			global.returnFunction_close=function(){
				//document.body.scrollTop="1500";
			}
			this.ViewIndex=id;
			//global.view.Type=viewType
			_this.ingniteLightBox = new LightBox(div1,div2,template,indx);

			//Load functions after pop up opens executed on ViewArticle Page
			_this.ingniteLightBox.executeOnOpen=function(){
				
				_this.addthumbEventsArticle();
				var div3=MainCDiv+"_MainComment";
				CommentBoss.getComments(_this.newsObj.returnObj[_this.ViewIndex].agape_media_comments,div3);
				document.body.scrollTop="0px";
				$("#articlesDiv").scrollTop("0px")
			}
			_this.ingniteLightBox.lightBoxOn();
			_this.addthumbEventsArticle()


			//_this.ingniteLightBox.setAfterOpenFunction
		

		
	}

	addthumbEventsArticle(){


		var tChk=$.parseJSON(global.userObj.agape_vote_recordThumbs);
		var tChkLeng=tChk.length;

		
		// main article thumbs check adds event if not clicked before
		var addEvent="true";
		for(var i=0;i<tChkLeng;i++){
			for(var key in tChk[i]){
				if(tChk[i]['votetype']=="article_thumbs"){
					if(tChk[i].commentID==this.newsObj.returnObj[this.ViewIndex].agape_media_ID){
						$("span[class^='articleControls']").each(function(){
							$(this).removeClass().addClass("articleControls_gray");
						})
						addEvent="false";
					}
				}

			}

		}

		//Actual event added to main thumbs up/down
		if(addEvent=="true"){
			$("img[id^='wthumb']").each(function(){
				$(this).unbind("click").on("click",function(){
					var vr1=$(this).attr("id");
					vr1=vr1.substr(6)
					switch(vr1){
						case 'Up':
						
							var thumbsArr=$.parseJSON(global.userObj.agape_vote_recordThumbs)
							var addMainObj={};
							addMainObj.votetype="article_thumbs";
							addMainObj.commentID=_this.newsObj.returnObj[_this.ViewIndex].agape_media_ID;
							thumbsArr.push(addMainObj);
							global.userObj.agape_vote_recordThumbs=JSON.stringify(thumbsArr);
							var sendObj={}
							globalTools.save();

							sendObj['agape_vote_recordThumbs']=JSON.stringify(thumbsArr);
							//makes updates to user profile send object has column for key and value for value
							globalTools.userProfileEdit("agape_profile",sendObj,"agape_profile_memberID",global.userObj.agape_profile_memberID);
					     
							var send1={};
							send1.job="quickJamUpdate_Comm";
							send1.dbase="agape_topics";
							send1.param="agape_media_ID";
							send1.vals=global.newsObjView.agape_media_ID;
							send1.obj={};
							send1.selFunc="selectFunc";
							send1.kob="where agape_media_ID="+_this.newsObj.returnObj[_this.ViewIndex].agape_media_ID;
							var qry="agape_media_thumbsUp=agape_media_thumbsUp+1"
							
							//qry="agape_media_thumbsDown=agape_media_thumbsDown+1"
							send1.updateStr=qry;
							var func1=function(datam){

								var topicObj=globalTools.verify(datam);

								_this.newsObj.returnObj[_this.ViewIndex]=topicObj.returnObj[0];
								$("#agape_media_thumbsUp").html(topicObj.returnObj[0].agape_media_thumbsUp).addClass("articleControls_grayPresComm")
								$("#agape_media_thumbsUp").prev().unbind("click");
								$("#agape_media_thumbsDown").html(topicObj.returnObj[0].agape_media_thumbsDown).addClass("articleControls_grayPresComm")
								$("#agape_media_thumbsDown").prev().unbind("click");
								$("#dia_tup"+_this.ViewIndex).html(topicObj.returnObj[0].agape_media_thumbsUp)
								$("#dia_tdown"+_this.ViewIndex).html(topicObj.returnObj[0].agape_media_thumbsDown)
								$("#media_comm"+_this.ViewIndex).html(topicObj.returnObj[0].agape_media_comments_count);
									
			    			}
							ajaxCallPost(send1,func1);


						break;

						case 'Down':
							var thumbsArr=$.parseJSON(global.userObj.agape_vote_recordThumbs)
							var addMainObj={};
							addMainObj.votetype="article_thumbs";
							addMainObj.commentID=_this.newsObj.returnObj[_this.ViewIndex].agape_media_ID;
							thumbsArr.push(addMainObj);
							global.userObj.agape_vote_recordThumbs=JSON.stringify(thumbsArr);
							var sendObj={}
							globalTools.save();

							sendObj['agape_vote_recordThumbs']=JSON.stringify(thumbsArr);
							//makes updates to user profile send object has column for key and value for value
							globalTools.userProfileEdit("agape_profile",sendObj,"agape_profile_memberID",global.userObj.agape_profile_memberID);
					        //quickJamUpdate_full


							send1={};
							send1.job="quickJamUpdate_Comm";
							send1.dbase="agape_topics";
							send1.param="agape_media_ID";
							send1.vals=_this.newsObj.returnObj[_this.ViewIndex].agape_media_ID;
							send1.obj={};
							send1.selFunc="selectFunc";
							send1.kob="where agape_media_ID="+_this.newsObj.returnObj[_this.ViewIndex].agape_media_ID;
							var qry="agape_media_thumbsDown=agape_media_thumbsDown+1"
							
							//qry="agape_media_thumbsDown=agape_media_thumbsDown+1"
							send1.updateStr=qry;
							
							var func1=function(datam){

								var topicObj=globalTools.verify(datam);

								_this.newsObj.returnObj[_this.ViewIndex]=topicObj.returnObj[0];
								$("#agape_media_thumbsUp").html(topicObj.returnObj[0].agape_media_thumbsUp).addClass("articleControls_grayPresComm")
								$("#agape_media_thumbsUp").prev().unbind("click");
								$("#agape_media_thumbsDown").html(topicObj.returnObj[0].agape_media_thumbsDown).addClass("articleControls_grayPresComm")
								$("#agape_media_thumbsDown").prev().unbind("click");
								$("#dia_tup"+_this.ViewIndex).html(topicObj.returnObj[0].agape_media_thumbsUp);
								$("#dia_tdown"+_this.ViewIndex).html(topicObj.returnObj[0].agape_media_thumbsDown);
								$("#media_comm"+_this.ViewIndex).html(topicObj.returnObj[0].agape_media_comments_count);
								
			    			}
							ajaxCallPost(send1,func1);
						break;

					}
				
				});
			})
		}
	}

	static getComments(top,div1,returnFunction){
		var fr =top;
		var searchComs={}
		searchComs.job="atomic_selectAll";
		searchComs.dbase="agape_comments";
		searchComs.ob="where agape_commentsSource='"+fr+"' order by agape_commentsLastComment desc";
		var funk=function(data){

			

			var bg=globalTools.verify(data);
			var datum=globalTools.verify(data);
			global.newsObjComms=datum.returnObj;
			global.mediaComments=datum.returnObj;
			

			_this.loadComments(datum.returnObj,div1);
			_this.addCommentEvt();

			if(returnFunction){
				returnFunction(data);
				returnFunction=null;
			}else{
				
			}
		
		}
		ajaxCallPost(searchComs,funk)
	}

	//Loads comments for each article to view Article page
	loadComments(obj,cDiv){
		
		global.newsObjComms=obj;
		var e=obj.length;
		var strClass="issuesComments presMainComStyles";
		var comClass="comClas";

		var strg="";
		for(var b=0;b<e;b++){
			var f1=getTime(obj[b].agape_comment_createdate,"true");
			var f2=getTime(obj[b].agape_commentsLastComment,"true")
			strg=strg+"<div class='"+strClass+"' id='mainArt"+b+"' style='width:100%;font-size:12px;font-family:arial;' ><div style='float:left;width:95px;'><img src='"+obj[b].agape_comments_image+"' height='90' width='95' border='1' align='left'></div><div style='float:left;width:450px;'><div style='text-align:left;'><span style='display:inline-block;margin-left:8px;' >Created by:</span><span style='font-weight:bold;display:inline-block;padding-left:8px;letter-spacing:0px;'>"+obj[b].agape_commentCreator_Username+"</span></div><div style='width:440px;text-align:left;'><span style='display:inline-block;margin-left:8px;' >Create date:</span><span  class='mainCommsDateSpan' style='letter-spacing:0px;'>"+f1+"</span></br>"
			strg=strg+"<span style='display:inline-block;margin-left:8px;' >Last comment by:</span><span id='repsUname"+b+"' style='font-weight:bold;display:inline-block;padding-left:8px;letter-spacing:0px;'>"+obj[b].agape_commentsLastComment_username+"</span><br/> <span style='display:inline-block;margin-left:8px;' >Last comment date:</span><span id='repsdate"+b+"' style='font-weight:bold;display:inline-block;padding-left:8px;letter-spacing:0px;'>"+f2+"</span> </div></div><div style='clear:both;'></div>"
			strg=strg+"<div style='width:800px;text-align:left;margin:auto;'><span style='display:inline-block;font-weight:bold;margin-top:15px;font-size:15px;'>Comment:</span> <span  style='font-weight:normal;font-size:15px;letter-spacing:1px;'>"+obj[b].agape_comments_Comment+"</span></div><div style='clear:both;'></div><br>";

			if(obj[b].agape_commentsCommentDataResponse!="none"){
				var j=$.parseJSON(obj[b].agape_commentsCommentDataResponse);
				var jLength=j.replyObj.replys.length;
				if(jLength>0){
					var burn=_this.loadMainreplys(j.replyObj.replys,b);
					strg=strg+"<div id='resp"+b+"'>"+burn+"</div>"
				}else{
					strg=strg+"<div style='display:none;' id='resp"+b+"'></div>"
				}

			}else{
				strg=strg+"<div style='display:none;' id='resp"+b+"'></div>"
			}

			strg=strg+"<div id='reply"+b+"' style='margin-bottom:5px;width:50px;font-weight:bold;' class='mainCommsReply'>Reply</div>"
			strg=strg+"<div id='TabSearch"+b+"' style='width:864px;height:0px;background:#eee;overflow:auto;overflow-y:hidden;overflow-x:hidden;display:none;margin-top:10px;'>"
				
			strg=strg+"<div style='float:left;width:30%;font-family:arial;margin-top:5px;margin-left:10px;'>"
				strg=strg+"<div>Message:</div>"
				strg=strg+"<div style='margin-top:40px;'>"
						
						strg=strg+"<div class='optButtons1' style='margin:auto;background:#524a92;color:lime;float:left;border-radius:5px;'' id='searchMess"+b+"'>Post message</div>"
						strg=strg+"<div id='cancelMess"+b+"' style='float:left;margin-left:10px;color:red;cursor:pointer;margin-top:7px;'>cancel</div>"
						strg=strg+"<div style='clear:both'></div>"

					strg=strg+"</div>"
				strg=strg+"</div>"
				strg=strg+"<div style='float:left;width:55%;margin-top:5px;'><textarea id='boxnew"+b+"' rows='6' style='width:200px;'></textarea></div>"
				strg=strg+"<div style='clear:both'></div>"
			strg=strg+"</div></div>";
			
			if(strClass=="issuesComments_alt presMainComStyles_alt"){
				strClass="issuesComments presMainComStyles"
				comClass="comClas"
			}else{
				strClass="issuesComments_alt presMainComStyles_alt"
				comClass="comClas_alt";
			}
		}

		$("#"+cDiv).empty().append(strg).scrollTop("0px");
		_this.addMainComment();
		_this.addCommentEvt()

		if(e==0){
			$("#"+cDiv).html("<div id='First_"+cDiv+"' style='width:210px;margin:auto;font-size:20px;margin-top:25px;'>Be the first to comment</div>")
		}else{


			/*$("div[id^='stainRep']").each(function(){
				$(this).on("click",function(){
				
					var obIdx=$(this).attr("id")+"";
					obIdx=obIdx.substr(7);
					var gt=obIdx.split("_")
					var send={}
					send.selReply=mainCs[gt[0]];
					send.messObj=commOb;
					send.messIndx=obIdx;
					global.comments.type="mainArticleReplyToReply"
					var div1=document.getElementById("_lboxBackground");
					var div2=document.getElementById("_lBoxMainDiv");
					var template={};
					template.page="commentPage.html";
					id="office";
					template.param=send;
					ingniteLightBox = new LightBox(div1,div2,template,id)
					ingniteLightBox.lightBoxOn();
				})
			})*/

		}

	}


	loadMainreplys(obj,ind){
	
		var leng=obj.length;
		var newstr="";
		var comClass="comClas"
		for(var c=0;c<leng;c++){
			newstr=newstr+"<div style='padding:4px;border:solid 1px #000;width:85%;margin:auto;' class='"+comClass+"'><div style='float:left;color:blue;font-weight:bold;font-family:arial;'><div><img src='"+obj[c].replyImg+"' height='50' width='60' border='1'></div>"
			newstr=newstr+"<div>"+obj[c].agape_commentsLastReply_username+"</div></div><div style='float:right;font-size:13px;font-family:arial;'>"+obj[c].agape_reply_createdate+"</div><div style='clear:both;'></div><div style='margin-top:15px;font-family:arial;margin-left:20px;'>"+obj[c].agape_comments_Comment+"</div>"
			newstr=newstr+"<div id='mainRep"+ind+"_"+c+"' style='width:100%;text-align:center;margin-top:20px;'>reply</div>"
			newstr=newstr+"<div id='addmessageReplySearch"+ind+"_"+c+"' style='height: 0px; padding: 8px;padding-bottom: 0px; padding-top: 0px;background: rgb(238, 238, 238); overflow-x: hidden; overflow-y: auto;'>"
					
					newstr=newstr+"<div style='float:left;width:300px;font-family:arial;'>"
						newstr=newstr+"<div>Message:</div>"
						newstr=newstr+"<div style='margin-top:40px;'>";
							newstr=newstr+"<div class='optButtons1' style='margin:auto;background:#524a92;color:lime;float:left;border-radius:5px;' id='replyToReply"+ind+"_"+c+"'>Post message</div>"
							newstr=newstr+"<div id='cancelRep"+ind+"_"+c+"' style='float:left;margin-left:10px;color:red;cursor:pointer;margin-top:7px;'>cancel</div>"
							newstr=newstr+"<div style='clear:both'></div>";
						newstr=newstr+"</div>"
					newstr=newstr+"</div>"
					newstr=newstr+"<div style='float:left;width:300px;margin-top:10px;'><textarea id='replyToReplyBox"+ind+"_"+c+"' rows='6' style='width:200px;'></textarea></div>"
					newstr=newstr+"<div style='clear:both'></div>"
				newstr=newstr+"</div></div>";
			if(comClass=="comClas"){
					comClass="comClas_alt"
				}else{
					comClass="comClas"
				}
			}

		return newstr;	

	}


	addMainComment(){


		$("#searchPostmess").unbind("click").on("click",function(){

		
			var sendo={};
			sendo.job='quickInsertAtomic';
			sendo.dbase='agape_comments';
			sendo.uID=global.userObj.agape_profile_memberID;
			sendo.obj={};
			sendo.obj.agape_comments_Comment=globalTools.stringClear($("#inputboxnew").val())
			sendo.obj.agape_commentsCommentDataResponse="none";
	

			var tranferObj;
			

			switch(_this.div){
				case '_uTube':
					tranferObj=global.dataHolder.auxVal.returnObj[_this.ViewIndex];
				break;

				case 'newsContent':
					tranferObj=_this.newsObj.returnObj[_this.ViewIndex]
				break;

				case 'pollsDiv':
					tranferObj={};
					tranferObj.agape_media_SourceID=ingniteLightBox.temp.param;
				
				break;
			}

	
			sendo.obj.agape_commentsSource=tranferObj.agape_media_SourceID;


			
			var h=[];
			h[0]=tranferObj.agape_media_SourceID;

			sendo.kob="where agape_commentsSource='"+tranferObj.agape_media_SourceID+"' order by agape_commentsLastComment desc";
			if(global.candidate.id=="viewArticles"){
				sendo.obj.agape_commentsSource=tranferObj.agape_media_SourceID;
				h[0]=tranferObj.agape_media_SourceID;
				sendo.kob="where agape_commentsSource='"+tranferObj.agape_media_SourceID+"' order by agape_commentsLastComment desc";
			}
			sendo.obj.agape_commentsLastComment_username=global.userObj.agape_profile_username;
			sendo.obj.agape_commentsLastComment=convertNowToPhP();
			sendo.obj.agape_comment_createdate=sendo.obj.agape_commentsLastComment
			sendo.obj.agape_commentCreator_ID=global.userObj.agape_profile_memberID;
			sendo.obj.agape_commentCreator_Username=global.userObj.agape_profile_username;
			sendo.obj.agape_comments_count="agape_comments_count=agape_comments_count+1";
			var tImage=$.parseJSON(global.userObj.agape_profile_default_img);
			sendo.obj.agape_comments_image=tImage.defaultPic;
			
			sendo.obj.agape_commentsPagination=JSON.stringify(h)
			sendo.key="quickSelect";
			sendo.kdbase='agape_comments';

			func=function(data){
			
				var t=globalTools.verify(data);
				_this.loadComments(t.returnObj);
				_this.addCommentEvt()

				var model={}
				model.job="quickJamUpdate";
				model.dbase="agape_topics";
				model.param="agape_media_comments"
				model.vals=tranferObj.agape_media_ID
				model.updateStr="agape_media_lastComment_date='"+sendo.obj.agape_commentsLastComment+"', agape_media_updatedBy='"+global.userObj.agape_profile_username+"',agape_media_comments_count=agape_media_comments_count+1, agape_media_updatedBy_ID="+global.userObj.agape_profile_memberID;
				model.selFunc="selectFunc";
				model.kdbase="agape_topics";
				model.kob="where agape_media_comments='"+tranferObj.agape_media_SourceID+"' order by agape_media_lastComment_date desc";
				


				if(_this.div=='pollsDiv'){
					var t=convertNowToPhP();
					model.dbase="agape_pollquestions";
					model.selFunc="selectFunc";
					model.updateStr="question_answerCount=question_answerCount+1,question_updatedBy='"+global.userObj.agape_profile_username+"',question_lastUpdated='"+t+"'";
					model.vals=ingniteLightBox.temp.param
					model.param="question_comms"
					model.kdbase="agape_comments";
					model.kob="where agape_commentsSource='"+ingniteLightBox.temp.param+"' order by question_lastUpdated desc";
				}



				var confunc1=function(datam2){
				
		
					//agape_media_comments_count
					var b1=globalTools.verify(datam2);
					switch(_this.div){
						case '_uTube':
							global.dataHolder.auxVal.returnObj[_this.ViewIndex]=b1.returnObj[0];
							TweenMax.to($("#newCommDiv")[0],.2,{css:{height:"0px"}});
							CommentBoss.getComments(global.dataHolder.auxVal.returnObj[ingniteLightBox.temp.param]['agape_media_comments'],'commentDiv_MainComment')
							
						break;

						case 'newsContent':
							_this.newsObj.returnObj[_this.ViewIndex]=b1.returnObj[0];
					
							var Udate=getTime(b1.returnObj[0].agape_media_lastComment_date,'true');
							$("#agape_media_lastComment_date").html(Udate);
							$("#media_commUpdateDate"+_this.ingniteLightBox.temp.ViewInx).html(Udate);
							$("#media_UpBy"+_this.ingniteLightBox.temp.ViewInx).html(b1.returnObj[0].agape_media_updatedBy)
							$("#agape_media_updatedBy").html(b1.returnObj[0].agape_media_updatedBy);
							$("#agape_media_comments_count").html(b1.returnObj[0].agape_media_comments_count)
							$("#dia_tup"+_this.ingniteLightBox.temp.ViewInx).html(b1.returnObj[0].agape_media_thumbsUp)
							$("#dia_tdown"+_this.ingniteLightBox.temp.ViewInx).html(b1.returnObj[0].agape_media_thumbsDownt)
							$("#media_comm"+_this.ingniteLightBox.temp.ViewInx).html(b1.returnObj[0].agape_media_comments_count);
							TweenMax.to($("#addmessageTabSearch")[0],.4,{css:{height:"0px"}});
							TweenMax.to($("#addmessageTabSearch")[0],.3,{css:{display:"none"}});
							CommentBoss.getComments(_this.newsObj.returnObj[_this.ViewIndex]['agape_media_comments'],'newsContent_MainComment')
							
						break;

						case 'pollsDiv':
						
							$("#cancel2").click();
							CommentBoss.getComments(ingniteLightBox.temp.param,'commentsSet');

							

						break;
					}

						

				}
				ajaxCallPost(model,confunc1);
			}
			ajaxCallPost(sendo,func);

		})




		$("div[id^='replyToReply']").each(function(){
			$(this).unbind("click").on("click",function(){
				var sendObj={}

				sendObj.job="quotesAddCom";
				sendObj.dbase="agape_comments";
				var tdex=$(this).attr("id")+"";
				tdex=tdex.substr(12)
				var CDex=tdex.split("_")
				//sendObj.param=ingniteLightBox.temp.param.selReply.agape_commentsID;
				sendObj.lusername=global.userObj.agape_profile_username;
				sendObj.lComment=convertNowToPhP();
				sendObj.addType="AddAfter";
				//sendObj.kob="where agape_commentsID='"++"'";
				sendObj.selFunc="selectFunc";
				var resp;
		


				resp=$.parseJSON(global.newsObjComms[CDex[0]].agape_commentsCommentDataResponse);


				if(global.newsObjComms[CDex[0]].agape_commentsCommentDataResponse!='none'){
					resp=$.parseJSON(global.newsObjComms[CDex[0]].agape_commentsCommentDataResponse);
				}else{
					resp=_this.appendReply();
					resp.replyObj.replys[CDex[1]].agape_commentsLastReply_username=global.userObj.agape_profile_username;
				}
				
				var tImage=$.parseJSON(global.userObj.agape_profile_default_img);


				res = "<img src=images/replyarrow.png height=15 /> <span style=font-weight:bold;> reply to comment by </span><span style=color:blue;font-weight:bold>"+resp.replyObj.replys[CDex[1]].agape_commentsLastReply_username+"</span> <span style=font-weight:bold;> made on "+resp.replyObj.replys[CDex[1]].agape_reply_createdate+"</span><br/><br/>"
				var t1=getCodedDate();

				var tre="replyToReplyBox"+tdex;
				var cals={}
				cals.agape_commentsLastReply_username=global.userObj.agape_profile_username;
				cals.agape_comments_Comment=res+" "+globalTools.stringClear($("#"+tre).val());
				cals.agape_replyID=_this.newsObj.returnObj[CDex[0]].agape_media_ID+"_"+t1;
				var y1=convertNowToPhP();
				cals.agape_reply_createdate=getTime(convertNowToPhP(),"true");
				cals.replyImg=tImage.defaultPic;
				sendObj.val=cals
				sendObj.param=global.newsObjComms[CDex[0]].agape_commentsID;

				var q=$("#"+tre).val();
				
				var res,createTime;
				sendObj.selFunc="selectFunc";
				sendObj.kdbase="agape_comments";
				sendObj.kob="where agape_commentsID="+global.newsObjComms[CDex[0]].agape_commentsID+" order by agape_commentsLastComment desc";
				sendObj.chkId=resp.replyObj.replys[CDex[1]].agape_replyID;


				var stunk=function(datal){
					

					
					var b1=globalTools.verify(datal)

					global.newsObjComms[CDex[0]]=b1.returnObj[0];
					var j=$.parseJSON(global.newsObjComms[CDex[0]].agape_commentsCommentDataResponse)
					var burn=_this.loadMainreplys(j.replyObj.replys,CDex[0]);
					$("#resp"+CDex[0]).empty().append(burn);
					_this.addMainComment();
					_this.addCommentEvt();


					
					$("#addmessageReplySearch"+CDex[0]).show().animate({"height":"0px"},"fast");

					var CDex1=CDex



					var model={}

					model.job="quickJamUpdate";
			


					switch(_this.div){

						case 'pollsDiv':
							model.dbase="agape_pollquestions";
							model.param="question_ID";
							model.vals=_this.ingniteLightBox.obj.question_ID
							model.updateStr="question_lastUpdated='"+sendObj.lComment+"', question_updatedBy='"+global.userObj.agape_profile_username+"',	question_answerCount=question_answerCount+1, question_updateBy_ID="+global.userObj.agape_profile_memberID;
						
							model.selFunc="selectFunc";
							model.kdbase="agape_pollquestions";
							model.kob="where question_comms='"+_this.ingniteLightBox.obj.question_comms+"' order by question_lastUpdated desc";
							

						break;



						default:
							model.dbase="agape_topics";
							model.param="agape_media_comments"
							model.vals=_this.newsObj.returnObj[_this.ViewIndex].agape_media_ID
							model.updateStr="agape_media_lastComment_date='"+sendObj.lComment+"', agape_media_updatedBy='"+global.userObj.agape_profile_username+"',agape_media_comments_count=agape_media_comments_count+1, agape_media_updatedBy_ID="+global.userObj.agape_profile_memberID;
							model.selFunc="selectFunc";
							model.kdbase="agape_topics";
							model.kob="where agape_media_comments='"+_this.newsObj.returnObj[_this.ViewIndex].agape_media_SourceID+"' order by agape_media_lastComment_date desc";
					
						break;
					}
					
					


					var confunc1=function(datam2){
						var CDex2=CDex1;
			
						//agape_media_comments_count
						var b1=globalTools.verify(datam2);

						var h=datam2

						switch(_this.div){

							case 'pollsDiv':

							
							var f=b1.returnObj[0].question_answerCount
							CommentBoss.setDivName("pollsDiv");
							CommentBoss.getComments(_this.ingniteLightBox.obj.question_comms,'commentsSet',ret);

							break;

							default:

								_this.newsObj.returnObj[_this.ViewIndex]=b1.returnObj[0];
								var Udate=getTime(b1.returnObj[0].agape_media_lastComment_date,'true');
								$("#agape_media_lastComment_date").html(Udate);
								$("#media_commUpdateDate"+_this.ViewInx).html(Udate);
								$("#media_UpBy"+_this.ViewInx).html(b1.returnObj[0].agape_media_updatedBy)
								$("#agape_media_updatedBy").html(b1.returnObj[0].agape_media_updatedBy);
								$("#agape_media_comments_count").html(b1.returnObj[0].agape_media_comments_count)
								$("#dia_tup"+_this.ViewInx).html(b1.returnObj[0].agape_media_thumbsUp)
								$("#dia_tdown"+_this.ViewInx).html(b1.returnObj[0].agape_media_thumbsDownt)
								$("#media_comm"+_this.ViewInx).html(b1.returnObj[0].agape_media_comments_count);
								$("#repsdate"+CDex2[0]).html(Udate);
								$("#repsUname"+CDex2[0]).html(b1.returnObj[0].agape_media_updatedBy);

							break;

						}

					}
					ajaxCallPost(model,confunc1);

				}
				ajaxCallPost(sendObj,stunk)


				
			})
		})

	}
	addCommentEvt(){

			$(".mainCommsReply").each(function(){
				$(this).unbind("click").on("click",function(){
					var mc=$(this).attr("id")+"";
					mc=mc.substr(5);
					$("#TabSearch"+mc).show().animate({"height":"120px"},"slow")
				})
			})

			var o1={"text-decoration":"true","mouseover":"true","cursor":"true"};
			var w1 = new addMouseOver("mainCommsReply","red",o1,"none")

			//close post message window
			$("div[id^='cancelMess']").each(function(){
				$(this).unbind("click").on("click",function(){
					var mc=$(this).attr("id")+"";
					mc=mc.substr(10);
					$("#TabSearch"+mc).show().animate({"height":"0px"},"fast")
				})
			})



			$("div[id^='mainRep']").each(function(){
				$(this).unbind("click").on("click",function(){
				
					var obIdx=$(this).attr("id")+"";
					obIdx=obIdx.substr(7);
					var gt=obIdx.split("_");
					var send={}
					send.ViewInx=gt[0];
					send.replyIndex=gt[1];
					//send.messIndx=obIdx;
					$("#addmessageReplySearch"+obIdx).show().animate({"height":"120px"},"slow");

				})
			})


			$("div[id^='cancelRep']").each(function(){
				$(this).unbind("click").on("click",function(){
					var mc=$(this).attr("id")+"";
					mc=mc.substr(9);
					
					$("#addmessageReplySearch"+mc).show().animate({"height":"0px"},"fast")
				})
			})
			

			$("div[id^='searchMess']").each(function(){
				$(this).unbind("click").on("click",function(){
					
					var idx=$(this).attr("id")+"";
					idx=idx.substr(10);
					var res,createTime;
					var sendObj={}
					sendObj.job="quotesAddCom";
					sendObj.dbase="agape_comments";
					sendObj.lComment=convertNowToPhP();

					sendObj.param=global.newsObjComms[idx].agape_commentsID
					sendObj.lusername=global.userObj.agape_profile_username;
					if(global.newsObjComms[idx].agape_commentsCommentDataResponse=="none"){
						sendObj.addType="AddNew";
					}else{
						sendObj.addType="AddNew";
						//.agape_replyID;
					}


					//Add reply to comment

					var tImage=$.parseJSON(global.userObj.agape_profile_default_img);

					CommentBoss.setViewIndex(idx)
					var nowTime=getTime(global.newsObjComms[idx].agape_commentsLastComment,'true','native');
					var nowTi=getTime(global.newsObjComms[idx].agape_comment_createdate,'true','native');
					
					var nowT=getTime(sendObj.lComment,'true','native');
				
					//var res = "<img src=images/replyarrow.png height=15 /> <span style=font-weight:bold;> reply to comment by </span><span style=color:blue;font-weight:bold>"+global.newsObjComms[idx].agape_commentsLastComment_username+"</span> <span style=font-weight:bold;> made on "+nowTi+"</span><br/><br/>"
							
					var comm1=globalTools.stringClear($("#boxnew"+idx).val());
					var enco=getCodedDate();
					var val={}
					val.replyImg=tImage.defaultPic;
					val.agape_commentsLastReply_username=global.userObj.agape_profile_username;
					val.agape_reply_createdate=nowT;
					val.agape_comments_Comment=comm1;
					val.agape_replyID=global.newsObjComms[idx].agape_commentsID+"_"+enco;
					sendObj.val=val;
					sendObj.selFunc="selectFunc";
					sendObj.kdbase="agape_comments";
				
					sendObj.kob="where agape_commentsID="+global.newsObjComms[_this.ViewIndex].agape_commentsID;
					var func2=function(data){
						var t=globalTools.verify(data);
						//var v = _this.gener8Responses(t.returnObj[0].agape_commentsCommentDataResponse,idx);
						


						global.newsObjComms[_this.ViewIndex]=t.returnObj[0];
						var j
						if(global.newsObjComms[_this.ViewIndex].agape_commentsCommentDataResponse=='none'){

						}else{
							j=$.parseJSON(global.newsObjComms[_this.ViewIndex].agape_commentsCommentDataResponse);
						}
						
			

						var v = _this.loadMainreplys(j.replyObj.replys,idx);
						$("#agape_media_comments_count").html(t.returnObj[0].agape_comment_count);

						$("#resp"+idx).empty().show().append(v);
						var uDate=getTime(t.returnObj[0].agape_commentsLastComment,'true');
						$("#agape_media_lastComment_date").html(uDate);
						$("#media_commUpdateDate"+global.newsObjViewInx).html(uDate);
						TweenMax.to($("#TabSearch"+idx)[0],.4,{css:{height:"0px"}});
						TweenMax.to($("#TabSearch"+idx)[0],.3,{css:{display:"none"}});
						$("#repsdate"+idx).html(uDate);

	


						var model={}
						model.job="quickJamUpdate";
						model.dbase="agape_topics";
						model.param="agape_media_ID"
						model.vals=_this.newsObj.returnObj[_this.ViewIndex].agape_media_ID;
						model.updateStr="agape_media_lastComment_date='"+sendObj.lComment+"', agape_media_updatedBy='"+global.userObj.agape_profile_username+"',agape_media_comments_count=agape_media_comments_count+1, agape_media_updatedBy_ID="+global.userObj.agape_profile_memberID;
						model.selFunc="selectFunc";
						model.kdbase="agape_topics";
						model.kob="where agape_media_SourceID='"+_this.newsObj.returnObj[_this.ViewIndex].agape_media_SourceID+"' order by agape_media_lastComment_date desc";
						


						if(_this.div=='pollsDiv'){
							var t=convertNowToPhP();
							model.dbase="agape_pollquestions";
							model.selFunc="selectFunc";
							model.updateStr="question_answerCount=question_answerCount+1,question_updatedBy='"+global.userObj.agape_profile_username+"',question_lastUpdated='"+t+"'";
							model.vals=ingniteLightBox.temp.param
							model.param="question_comms"
							model.kdbase="agape_comments";
							model.kob="where question_comms='"+ingniteLightBox.temp.param+"' order by question_lastUpdated desc";
						}







					
						
						
						
						
					
						

						_this.addMainComment();
						_this.addCommentEvt();
						
						var confunc1=function(datam2){
							//agape_media_comments_count
							

							var b1=globalTools.verify(datam2);
							_this.newsObj.returnObj[_this.ViewIndex]=b1.returnObj[0];
							$("#agape_media_comments_count").html(b1.returnObj[0].agape_media_comments_count);
							$("#dia_tup"+global.newsObjViewInx).html(b1.returnObj[0].agape_media_thumbsUp);
							$("#dia_tdown"+global.newsObjViewInx).html(b1.returnObj[0].agape_media_thumbsDownt);
							$("#agape_media_updatedBy").html(b1.returnObj[0].agape_media_updatedBy);
							$("#media_comm"+global.newsObjViewInx).html(b1.returnObj[0].agape_media_comments_count);
							
						}


						ajaxCallPost(model,confunc1);
					}
					

					ajaxCallPost(sendObj,func2);	
				})
			})

	} 

	appendReply(){


		var aR={"replyObj":{"replys":[],"ReplyCount":"","LastReply":"","LastCommentor":""}};
		//aR.replyObj.replys.push(aObj);

		return aR

	}

	static setDivName(val1){
		_this.div=val1;
	}


	static setViewIndex(val){
		_this.ViewIndex=val;

	}

	static set_ingniteLightBox(val){
		_this.ingniteLightBox=val;

	}


	pagination(){
		var total=_this.newsObj.countR;
		$("#"+_this.pElement).empty();
		var pageNation=parseInt(total/25);
		if(total%25>0){
			pageNation=pageNation+1;
		}
		for(var p=0;p<pageNation;p++){
			var frew=p+1;
			var col="#c6c0f2;"
			if(_this.paginateIndx==p){
				col='lime'
			}
			$("#"+_this.pElement).append("<span id='pagint"+p+"' style='display:inline-block;margin-left:8px;text-decoration:underline;cursor:pointer;color:"+col+"'>"+frew+"</span>")
		}	
		_this.addPaginationEvent()
	}


	addPaginationEvent(){
		$("span[id^='pagint']").each(function(){
			$(this).unbind("click").on("click",function(){
				var bre=$(this).attr("id")+"";
				bre=bre.substr(6)
				_this.paginateIndx=bre;
				_this.getTopics(_this.group)
			})
		})
	}

}