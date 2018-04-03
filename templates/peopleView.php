<?php

include("../Config_files/_shared_config.php");


?>

<div class="topTab"><div class='communitySectionsTemp' class='newNav2'  ><img style='border-radius:7px;border:solid 1px #eee;' id="newsImgMain" src=""/></div></div>

	<div id='headerHolder' style="height:495px;overflow:auto;width:900px;margin:auto;overflow-x:hidden;">
	

	<div style='clear:both'></div>

	<div class='newsElems' style='background-color:#fff;width:900px;min-height:500px;'>
		<div style='float:left;margin-right:10px;width:190px' ><img width="160" src="" id='newsImge'/></div>
		<div style='float:left;width:620px;position:relative;'>
			<div id="agape_media_title" class="agape_media_title" >

				<div  class="newElemHeader_sub" style='color:#fff;' >Candidate: <i id='peopleCandidate_Firstname'></i>&nbsp;<i id='peopleCandidate_Lastname'></i></div>
				<div  style='color:#fff;' class="newElemHeader_sub">Party: <span id="peopleCandidate_Party"></span></div>
			</div>

			<div style='float:left;'  >
				<a id="webSite" href="#" target="_blank">Website</a>
			</div>

			<div style='padding:0px;padding-left:8px;margin-top:0px;' class="newElemHeader_sub articleControls"  ><img id="peopleViewTUpImg" src="" height='16' class='updatethumbsUpDB' /></div>
			<div id='peopleCandidate_upVotes' style='padding:0px;margin-top:0px;' class="newElemHeader_sub articleControls articleControls_green" >0</div>
			<div style='float:left;width:8px;'>&nbsp;</div>
			<div  style='padding:0px;padding-left:8px;margin-top:0px;' class="newElemHeader_sub articleControls"><img id="peopleViewTDownImg" src="" height='16' class='updatethumbsDownDB'  /></div>
			<div id='peopleCandidate_downVotes' style='padding:0px;margin-top:0px;' class="newElemHeader_sub articleControls articleControls_red" style="padding-left:0px;text-decoration:none;color:red;margin-top:0px;">0</div>
			

			<div style='float:left;margin-left:10px;position:relative;top:-2px;' class='hyperlink1 faceBook'><a id='facebook' href="#" target="_blank"><img id='facebookImg' src=""  height="20" /></a></div>

			<div style='float:left;margin-left:10px;position:relative;top:-2px;' class='hyperlink1 '><a id='twitter' href="#" target="_blank"><img  id='twitterImg' src=""  height="20" /></a></div>
			
			<div style='float:left;margin-left:10px;position:relative;color:red' class='hyperlink1 discussB'>Discuss Candidate</div>
			<div style='float:left;margin-left:10px;position:relative;color:red' class='hyperlink1 backB'>< Back</div>
			<div style='clear:both'></div>
			
			<div style="padding-top:25px;">
				<div id='issh' class="presNavs presNavsSelected" >Issues</div>
				<div id='comms' class="presNavs" >Quotes</div>
				<div id='vids' class="presNavs" >Video</div>
				
				<div style='clear:both'></div>
				<div style="border:solid 1px #222; width:620px;padding:5px;padding-top:25px;">

					<div class='navWindow' id="commDiv" style='display:none;'>
						</br>
					</div>

					<div class='navWindow' id="VideoDiv" style='display:none;'>
						</br>
						<div>
							<div style='margin:auto;margin-bottom:12px;text-decoration:underline;cursor:pointer;width:500px;font-size:13px;' id='changeVid0'></div>
							<div style='margin:auto;margin-bottom:12px;text-decoration:underline;cursor:pointer;width:500px;font-size:13px;' id='changeVid1'></div>
							<div style='margin:auto;margin-bottom:12px;text-decoration:underline;cursor:pointer;width:500px;font-size:13px;' id='changeVid2'></div>
							
						</div>
						<div style="height:410px;overflow:auto;overflow-x:hidden;">
							<div id="vdiv" style="color:#eee;border:solid 1px #000;padding:15px;width:540px;margin:auto;background-color:#222;border-radius:7px;">
								
								<div id="VidHolder" style="width:520px;margin-top:8px;margin:auto">
									<div id="vidthumbs">
										<div style="width:400px;margin:auto;margin-bottom:10px;">
											<div id="vidthumbsUpClk" class="thumbsC" style="float:left;padding-top:3px;"><img src="<?php echo $actual_base;?>/images/thumbsUp.gif" height="16" /></div>
											<div id="vidthumbsUp" style="float:left;padding-left:4px;color:#2c8820;font-size:16px;padding-top:4px;font-weight:bold;">0</div>
											<div id="vidthumbsDownClk" class="thumbsC" style="float:left;padding-left:8px;padding-top:3px;"><img src="<?php echo $actual_base;?>/images/thumbsDown.gif" height="16" /></div>
											<div id="vidthumbsDown" style="float:left;padding-left:4px;color:red;font-size:16px;padding-top:4px;font-weight:bold">0</div>
											<div style="float:left;padding-left:8px;color:#eee;font-size:16px;padding-top:4px;">Comments:<span id='vidcomments1'>5365</span></div>
											<div style='clear:both;'></div>
											<div id='addVidCom' style="width:100px;text-align:center;margin:auto;color:#eee;font-size:16px;padding-top:4px;text-decoration:underline;display:none;cursor:pointer;">Add comment</div>
										</div>
									</div>
									<div id="vidComms">
										<div id='vidComments'><img src='<?php echo $actual_base;?>/images/loading37.gif' /></div>
									</div>

								</div>
									
							</div>
							
						</div>

					</div>

					<div style='padding:15px;' class='navWindow' id="IssueDiv" >
						<div style='font-weight:bold;width:546px;font-size:24px;text-align:center;margin-bottom:25px;'>This is where I stand on the issues</div>
						<div style='width:430px;margin:auto;'>
							<div style='float:left;font-weight:bold;'>Issue</div>
							<div style='float:right;font-weight:bold;'>Comments</div>
							<div style='clear:both;'></div>
						</div>	
						
						<div style='border:solid 1px #000;' id="IssueDivFilled"></div>
					</div>
				</div>
			</div>
			
		</div>
		
		<div style='clear:both'></div>
		<div id='agape_media_content' style="color:#000;padding:8px;overflow:auto;"></div>
		
	</div>

		
</div>
<div id='formQuestions'></div>

	<script type="text/javascript">
		$(document).ready(function(){
			
			$("#newsImgMain").attr("src",global.baseUrl+"/images/news.gif")
			$("#peopleViewTDownImg").attr("src",global.baseUrl+"/images/thumbsDown.gif");
			$("#peopleViewTUpImg").attr("src",global.baseUrl+"/images/thumbsUp.gif");
			$("#facebookImg").attr("src",global.baseUrl+"/images/facebook.jpg");
			$("#twitterImg").attr("src",global.baseUrl+"/images/twitter-logo_19.png");
			$(".newFormfieledHolderStyles").css("height","1070px");
			$("#headerHolder").css("height","745px");
			$(".lbBack").css("height","1200px");
			$("#footertab").css("top","1150px");

			$("#mainLBHolder").css("height","700px")
			global.lastNav='peopleView.php';
			globalTools.save();
			for(var k in global.people_candidates.returnObj[global.peopleObj.index]){
				if($("#"+k)){
					$("#"+k).html(global.people_candidates.returnObj[global.peopleObj.index][k])
				}

				if(k=="peopleCandidate_photos"){
					var img=$.parseJSON(global.people_candidates.returnObj[global.peopleObj.index][k]);
					$("#newsImge").attr("src",global.baseUrl+"/"+img.Presidential)
				}
			}



			$(".backB").on("click",function(){
				loadTemplate('mainLBHolder','presidentListPage.html');
			})



			if(global.people_candidates.returnObj[global.peopleObj.index].peopleCandidate_discussPage=="None"){
				$(".discussB").on("click",function(){
					var sendObj={};
					sendObj.job="quickInsertAtomic";
					sendObj.dbase="agape_topics";
					sendObj.obj={};
					sendObj.obj.agape_media_createDate=convertNowToPhP();
					sendObj.obj.agape_media_lastComment_date=sendObj.obj.agape_media_createDate;
					sendObj.obj.agape_media_title="Discuss: "+global.people_candidates.returnObj[global.peopleObj.index].peopleCandidate_Username;
					sendObj.obj.agape_media_group="Politics";
					sendObj.obj.agape_media_updatedBy=global.userObj.agape_profile_username;
					sendObj.obj.agape_media_author_ID=global.userObj.agape_profile_memberID;
					sendObj.obj.agape_media_author=global.userObj.agape_profile_username;
					sendObj.obj.agape_media_updatedBy_ID=global.userObj.agape_profile_memberID;
					sendObj.obj.agape_media_group="Politics";
					sendObj.obj.agape_media_content="Lets&#39;s discuss presidential candidate "+global.people_candidates.returnObj[global.peopleObj.index].peopleCandidate_Username;
					sendObj.obj.agape_media_thumbsUp=0
					sendObj.obj.agape_media_thumbsDown=0

					var firstPicObj=$.parseJSON(global.people_candidates.returnObj[global.peopleObj.index].peopleCandidate_photos)

					firstPicObj.defaultPic=firstPicObj.Presidential;
					secondPicObj=JSON.stringify(firstPicObj)
					
					sendObj.obj.agape_media_images=secondPicObj;
					sendObj.obj.agape_media_city=global.people_candidates.returnObj[global.peopleObj.index].peopleCandidate_workingCity;
					sendObj.obj.agape_media_state=global.people_candidates.returnObj[global.peopleObj.index].peopleCandidate_workingState;
					sendObj.obj.agape_media_comments="[]"
					sendObj.key="true";
					sendObj.keyField="agape_media_ID";
					sendObj.keydbase=sendObj.dbase;
					sendObj.keyColumn="agape_media_author";
					sendObj.keyvalue=global.userObj.agape_profile_username;
					
					funct=function (data){
						var teel=data+"";
						var deel=teel.split("**");
						var obj1=sendObj;
						deel[0]=$.trim(deel[0]);
						if(deel[0]=="success"){
							var sendObj1={};
							sendObj1.job="update_atomic";
							sendObj1.dbase="people_candidates";
							sendObj1.param="peopleCandidate_ID";
							sendObj1.obj={};
							sendObj1.vals=global.people_candidates.returnObj[global.peopleObj.index].peopleCandidate_ID;
							sendObj1.obj.peopleCandidate_AccountUpdated=convertNowToPhP();
							sendObj1.obj.peopleCandidate_discussPage=deel[1];
							global.people_candidates.returnObj[global.peopleObj.index].peopleCandidate_discussPage=sendObj1.obj.peopleCandidate_discussPage;
							globalTools.save();
							passId=sendObj1.obj.peopleCandidate_discussPage;
							func2=function(data1){
								var sendo2={};
								sendo2.job='quickSelect_atomic';
								sendo2.dbase='agape_topics';
								sendo2.param='agape_media_ID';
								sendo2.value=passId;
								sendo2.start=0;
								func4=function(data){
									var brew={}
									c=globalTools.verify(data);
									global.newsObjView=c.returnObj[0];
									loadTemplate('mainLBHolder','newsHomeView.html');
								}
								ajaxCallMedia(sendo2,func4);
							}
							ajaxCall3(sendObj1,func2)
						}
					}

					ajaxCallMedia(sendObj,funct)
				})

			}else{
				$(".discussB").on("click",function(){
					var id=global.people_candidates.returnObj[global.peopleObj.index].peopleCandidate_discussPage;
					var sendo={};
					sendo.job='quickSelect_atomic';
					sendo.dbase='agape_topics';
					sendo.param='agape_media_ID';
					sendo.value=id;
					sendo.start=0;
					func=function(data){
						var brew={}
						c=globalTools.verify(data);
						global.newsObjView=c.returnObj[0];
						loadTemplate('mainLBHolder','newsHomeView.html');
					}
					ajaxCallMedia(sendo,func);
				})
			}

		})

	
		
	$(".presNavs").each(function(){
		$(this).on("click",function(){
			$(".presNavs").each(function(){
				$(this).removeClass("presNavsSelected");
			})
			$(this).addClass("presNavsSelected");
			$(".navWindow").each(function(){
				$(this).css("display","none")
			});

			switch($(this).html()){
				case 'Quotes':
					$("#commDiv").css("display","block")
				break;

				case 'Issues':
					$("#IssueDiv").css("display","block")
				break;

				case 'Video':
					$("#VideoDiv").css("display","block")
				break;

			}
		})
	})






for(var key in global.people_candidates.returnObj[global.peopleObj.index]){

	switch(key){
		case 'agape_media_createDate':
			//var timeDateVal=getTime(global.newsObjView[key],'true')
			//$("#"+key).html(timeDateVal)
		
		break;
		
		case 'peopleCandidate_issue_list':
	
			var selObj={};
			selObj.job="quickSelect_atomic";
			selObj.dbase="people_issues";
			selObj.param="president_issuesSource";
			selObj.value=global.people_candidates.returnObj[global.peopleObj.index].peopleCandidate_ID;

			selObj.start=0;
			var func36=function(data){

				var cheese=globalTools.verify(data)
				

				if(cheese.returnObj=="set empty"){
					cheese.returnObj=[]
				}
				global.people_candidates.returnObj[global.peopleObj.index].peopleCandidate_issue_list=cheese.returnObj
				globalTools.save();

				
				var tlengo=global.people_candidates.returnObj[global.peopleObj.index].peopleCandidate_issue_list.length;
				var globe=global.people_candidates.returnObj[global.peopleObj.index].peopleCandidate_issue_list;
				

				
				if(cheese.returnObj.length>0){
			
					for(i=0;i<tlengo;i++){

						if(globe[i].people_issuesCommsCount=='none'){
							globe[i].people_issuesCommsCount=0;
						}
						$("#IssueDivFilled").append("<div class='presidentIssueGrid_alt'><div id='issue"+i+"' class='presidentIssueLinkStyle floatClass'>"+globe[i].president_issuesTitle+"</div><div class=' floatClass'><img src='"+global.baseUrl+"/images/thumbsUp.gif' height='16' class='ju' /></div><div class='floatClass' style='color:green;font-weight:normal;width:115px;'>"+globe[i].people_issuesThumbsUp+"</div><div class=' floatClass'><img src='"+global.baseUrl+"/images/thumbsDown.gif' height='16' class='ju' /></div><div class='floatClass' style='color:red;font-weight:normal;width:115px;'>"+globe[i].people_issuesThumbsDown+"</div><div class='floatClass' style='color:#000;font-weight:normal;'>"+globe[i].people_issuesCommsCount+"</div><div style='clear:both;'></div></div>")
					}

					$(".presidentIssueLinkStyle").each(function(){
						$(this).on("mouseover",function(){
							$(this).css({"color":"red","text-decoration":"underline"})
						}).on("mouseout",function(){
							$(this).css({"color":"blue","text-decoration":"none"})
						}).on("click",function(){
							var div1=document.getElementById("_lboxBackground");
							var div2=document.getElementById("_lBoxMainDiv");
							var template={};
							var indx=0;
							template.page="viewPeopleIssue_open.php";
							//var mType=id;
							//global.candidate.job='createMessage_friend';
							var id=$(this).attr("id")+"";
							id=id.substr(5)
						
							global.candidate.id=id;
							ingniteLightBox = new LightBox(div1,div2,template,indx)
							ingniteLightBox.lightBoxOn();
						})
					})

					}else{
					
						$("#IssueDivFilled").append("<div style='text-align:center;padding:4px;'>There are no issues listed for "+global.people_candidates.returnObj[global.peopleObj.index].peopleCandidate_Firstname+" "+global.people_candidates.returnObj[global.peopleObj.index].peopleCandidate_Lastname+"</div>")
					}
					
				}
				ajaxCall3(selObj,func36)
					
		break;

		case 'peopleCandidate_Comments':
			var selObj={};
			selObj.job="quickSelect_atomic";
			selObj.dbase="people_comments";
			selObj.param="people_commentsSource";
			selObj.value=global.people_candidates.returnObj[global.peopleObj.index].peopleCandidate_ID;
			selObj.start=0;
			$("#commDiv").empty();
			funck=function(datum){
		



				var ee=globalTools.verify(datum);
				if(ee.returnObj!="set empty" ){
				global.people_candidates.returnObj[global.peopleObj.index].commentList=ee.returnObj;
				//var tehe="true**"+JSON.stringify(ee.returnObj[0]);

				var t=ee.returnObj.length;
				if(t>0){
					for(var f=0;f<t;f++){
						data=globalTools.stringClearBackSlash(ee.returnObj[f].president_commentsCommentDataResponse);

						var timeDateVal=getTime(ee.returnObj[f].people_comment_createdate,'true')
						var updateTime=getTime(ee.returnObj[f].people_commentsLastComment,'true')
						var id="pres"+f;
						var id1="presInner"+f;

						var id2="presOnner"+f;
						var thumbClass="articleControls_green";
						var thumbClass_red="articleControls_red";
						var clickClass="innerUp";
						var tCObj=[]
						if(global.userObj.agape_vote_presidentialCandidates!==undefined){
							if(global.userObj.agape_vote_presidentialCandidates=="Not Answered" && global.userObj.agape_vote_presidentialCandidates=="none"){
								
							}else{
									var tCObj=$.parseJSON(global.userObj.agape_vote_presidentialCandidates)
							}
						}else{
							
						}
							


						var comthumIndx=tCObj.length;

						for(e=0;e<comthumIndx;e++){
							if(tCObj[e].votetype=="presidential_comments_thumbs" && tCObj[e].commentID==ee.returnObj[f].president_commentsID){
								thumbClass="articleControls_grayPresComm";
								thumbClass_red="articleControls_grayPresComm";
								clickClass="nup"
							}
							
						}
						var commReplys
						if(ee.returnObj[f].people_commentsReplys=="none"){
							commReplys=0;
						}else{
							commReplys=ee.returnObj[f].people_commentsReplys
						}
						strg="<div style='border:solid 1px #000;width:580px;margin:auto;padding:6px;background-color:gray;border-radius:5px 5px 0px 0px;margin-bottom:15px;'>"
					
						strg=strg+"<div style='margin-left:10px;color:#ddd;font-size:22px;margin-bottom:10px;'>Media type: <a href="+ee.returnObj[f].people_commentsMedia_typeLink+" target='_blank' style='font-size:22px;'>"+ee.returnObj[f].people_commentsMedia_type+"</a></div>"

						strg=strg+"<div style='margin-left:10px;'><div style='font-weight:bold;float:left;width:90px;'>Audience:</div> <div style='float:left;width:300px;'>"+ee.returnObj[f].people_comment_audience+"</div><div style='clear:both;'></div></div>"

						strg=strg+"<div style='margin-left:10px;'><div style='font-weight:bold;float:left;;width:130px;'>Comment made:</div> <div style='float:left;width:225px;'>"+timeDateVal+"</div><div style='clear:both;'></div></div>"

						strg=strg+"<div style='margin-left:10px;'><div style='font-weight:bold;float:left;width:110px;'>Last update:</div> <div style='float:left;width:255px;text-decoration:underline;'>"+updateTime+"</div><div style='clear:both;'></div></div>"

								

						strg=strg+"<div style='float:left;margin-left:10px;' class='hyperlink1'>Replys(<span>"+commReplys+"</span>)</div>"

						strg=strg+"<div  id='"+id+"' style='float:left;margin-left:10px;cursor:pointer;text-decoration:underline;' class='hyperlink1 commentOpener'>Comment</div>"
						strg=strg+"<div style='color:#fff;float:left;'>"
						
						strg=strg+"<div style='padding:0px;padding-left:8px;margin-top:0px;' class='newElemHeader_sub articleControls'  ><img src='"+global.baseUrl+"/images/thumbsUp.gif' id='"+id1+"' height='16' class='updatethumbsUpDB "+clickClass+"' /></div>"
						strg=strg+"<div id='agape_president_thumbsUp"+f+"' style='padding:0px;margin-top:0px;' class='newElemHeader_sub articleControls "+thumbClass+"' >"+ee.returnObj[f].people_commentsThumbsUp+"</div>"
						strg=strg+"<div style='float:left;width:8px;'>&nbsp;</div>"
						
						strg=strg+"<div  style='padding:0px;padding-left:8px;margin-top:0px;' class='newElemHeader_sub articleControls'><img src='"+global.baseUrl+"/images/thumbsDown.gif' id='"+id2+"' height='16' class='updatethumbsDownDB "+clickClass+"'  /></div>"
						strg=strg+"<div id='agape_president_thumbsDown' style='padding:0px;margin-top:0px;' class='newElemHeader_sub articleControls "+thumbClass_red+"' style='padding-left:0px;text-decoration:none;color:red;margin-top:0px;'>"+ee.returnObj[f].people_commentsThumbsDown+"</div>"
						strg=strg+"</div>"
						
						strg=strg+"<div style='clear:both'></div>"
						
						strg=strg+"<hr style='margin:auto;width:80%;margin-top:10px;' />"
						
						strg=strg+"<div id='coms' style='font-weight:normal;font-size;13px;color:#eee;font-weight:normal;padding:10px;padding-bottom:15px;font-style: italic;width:90%;margin:auto;'>"+ee.returnObj[f].people_commentsCommentData+"</div>"
					
						if(data=="none" || data == 'undefined'){
						
							strg=strg+"<div id='president_commentsCommentData' style='height:50px;text-align:center;font-weight:bold;' >Be the first to comment.</div>"
						}else{
						
							strg=strg+"<div id='president_commentsCommentData' style='height:250px;overflow:auto;' >"+data+"</div>"
						}
					
						strg=strg+"</div>"

						$("#commDiv").append(strg);
					}


				}else{
					strg="<div style='text-align:center;padding:4px;'>There are no quotes found for "+global.people_candidates.returnObj[global.peopleObj.index].peopleCandidate_Firstname+" "+global.people_candidates.returnObj[global.peopleObj.index].peopleCandidate_Lastname+"</div>"
					$("#commDiv").append(strg);
				}
				$(".innerUp").each(function(){
					$(this).on("click",function(){
						var a=$(this).attr("id")+"";
						b=a.substr(9);
						global.candidate.id=b;
						cb=a.substr(0,9);
					
						switch(cb){

							case "presInner":
								_updatethumbsUpDB('president_commentUpVotes');
							break;

							case "presOnner":
								_updatethumbsUpDB('president_commentDownVotes');
							break;
						}
						
					})
					
				})



				$(".commentOpener").each(function(){

					$(this).on("click",function(){
						id="commentOpener";
						var div1=document.getElementById("_lboxBackground");
						var div2=document.getElementById("_lBoxMainDiv");
						var template={};
						template.page="createComment_people.php";
						template.job="visitprofile";
						var idx=$(this).attr("id")+"";
						global.comments.type="peopleComment"
						idx=idx.substr(4);


						global.candidate.id=idx;
						template.param=id;
						ingniteLightBox = new LightBox(div1,div2,template,id)
						ingniteLightBox.lightBoxOn()
					})

				})
			}else{
				$("#commDiv").html("<div style='text-align:center;padding:4px;''>There are no comments for "+global.people_candidates.returnObj[global.peopleObj.index].peopleCandidate_Firstname+" "+global.people_candidates.returnObj[global.peopleObj.index].peopleCandidate_Lastname+"</div>")
			}

			}
			ajaxCall3(selObj,funck)
					

		break;


		case 'peopleCandidate_photos':
			imo=global.baseUrl+"/"
			imo=imo+$.parseJSON(global.people_candidates.returnObj[global.peopleObj.index][key]);
			$("#newsImge").attr("src",imo.Presidential)

		break;

		case 'president_website':
			$("#webSite").attr("href",global.people_candidates.returnObj[global.peopleObj.index][key])
		break;

		case 'agape_twitter':
			$("#twitter").attr("href",global.people_candidates.returnObj[global.peopleObj.index][key]);
		break;

		case 'president_facebook':
			$("#facebook").attr("href",global.people_candidates.returnObj[global.peopleObj.index][key]);
		break;

		case 'peopleCandidate_video':
			


			if(global.people_candidates.returnObj[global.peopleObj.index][key]=="none"){
				global.people_candidates.returnObj[global.peopleObj.index][key]="[]";
			}

			var vidMovr1=$.parseJSON(global.people_candidates.returnObj[global.peopleObj.index][key]);
			var vidMovr_leng=0;
			if(vidMovr1.VidObj){
				var vidMovr=vidMovr1.VidObj;
				global.vidMovr_people=vidMovr1;
				global.vidMovrIndex_people=0;
				globalTools.save();
				
				vidMovr_leng=vidMovr.videos.length;
				$("#vidcomments1").html(vidMovr.videos[0].commentCount);
				$("#vidthumbsUp").html(vidMovr.videos[0].thumbsUp);
				$("#vidthumbsDown").html(vidMovr.videos[0].thumbsDown);
			}

			if(global.navFunc=='LoggedIn')
			{
				var f=$.parseJSON(global.userObj.agape_vote_recordThumbs);
				var f_leng=f.length;
				var vObjChk="true";

				for(p=0;p<f_leng;p++){
					if(f[p].votetype="media_thumbs"){
						if(f[p].commentID==vidMovr.videos[0].id){
							vObjChk="false"
						}
					}
				
				}
				
				if(vObjChk=="true"){
					addThumbEvent()
				}else{
					$("#vidthumbsDown").css({"color":"#eee","cursor":"normal"});
					$("#vidthumbsUp").css({"color":"#eee","cursor":"normal"});

				}

			}else{
				addThumbEvent()

			}




			if(vidMovr_leng>0){

						var popStrg="<div id='vidNav0' ><div id='vidDescr' style='color:#eee;margin-bottom:15px;'>"+vidMovr.videos[0].description+"</div><div style='padding:4px;background-color:#dedede;border-radius:5px;margin:auto;width:405px;height:260px;margin-bottom:10px;'>"
										
							popStrg=popStrg+"<div id='youtubeDiv0' style='height:275px;' ><iframe id='youTube0' width='405' height='260' src='"+vidMovr.videos[0].url+"'' frameborder='0' allowfullscreen=''></iframe></div></div></div>"
							
							$("#VidHolder").prepend(popStrg);
							//r=globalTools.stringClearBack(vidMovr[0].title)
							//$("#vidNav0").html(vidMovr[0].description)

							for(e=0;e<vidMovr_leng;e++){
								$("#changeVid"+e).append(vidMovr.videos[e].title).css("display","block")
							}


							$("div[id^=changeVid]").each(function(){
								$(this).on("click",function(){

									var vidMovr2=$.parseJSON(global.people_candidates.returnObj[global.peopleObj.index]['peopleCandidate_video']);
									var _vidMovr=vidMovr2.VidObj;
									
									var ind=$(this).attr("id")+""
									ind=ind.substr(9);
									$("#youTube0").attr("src",_vidMovr.videos[ind].url);

									var sendo={};
							    	sendo.job='quickSelect_atomic';
								 	sendo.dbase='agape_comments';
									sendo.param='agape_commentsSource';
								  	sendo.value=_vidMovr.videos[ind].quesSource;
								 	sendo.start=0;

								 	global.vidMovrIndex_people=ind;
								 	globalTools.save();
								 	$("#vidcomments1").html(_vidMovr.videos[ind].commentCount);
									$("#vidthumbsUp").html(_vidMovr.videos[ind].thumbsUp);
									$("#vidthumbsDown").html(_vidMovr.videos[ind].thumbsDown);
									$("#vidDescr").html(_vidMovr.videos[ind].description);
									

									var f=$.parseJSON(global.userObj.agape_vote_recordThumbs);
									var f_leng=f.length;
									var vObjChk="true";

									for(p=0;p<f_leng;p++){
										if(f[p].votetype="media_thumbs"){
											if(f[p].commentID==vidMovr.videos[ind].id){
												vObjChk="false"
											}

										}

										
									}
								

									if(vObjChk=="true"){
										addThumbEvent()
									}else{
										$("#vidthumbsDown").css({"color":"#eee","cursor":"normal"});
										$("#vidthumbsUp").css({"color":"#eee","cursor":"normal"});

										$(".thumbsC").each(function(){

											$(this).unbind("click")
										})



									}



									var vidO=_vidMovr.videos
								 	func15=function(datr){
								 		var te=globalTools.verify(datr);
								 		if(te.returnObj=="set empty"){
								 			$("#vidComms").empty().append("<div id='firstComment' style='width:100%;font-family:arial;text-align:center;color:#eee;margin-top:3px;'>Be the first to comment</div>");
								 			$("#addVidCom").hide();
								 			$("#firstComment").unbind("click").on("click",function(){
								 				//alert("open comment");
								 				var id=ind;
								 				global.comments.type="videoComm_people"
								 				var div1=document.getElementById("_lboxBackground");
												var div2=document.getElementById("_lBoxMainDiv");
												var template={};
												template.page="commentPage.html";
												template.job="videoComm_people";
												template.heading="Comment on: "
												template.param=vidO[id];
												//global.candidate.id=id;
												//template.param=id;
												ingniteLightBox = new LightBox(div1,div2,template,id)
												ingniteLightBox.lightBoxOn();

								 			})
								 		}else{
								 			var b=$.parseJSON(te.returnObj[0].agape_commentsCommentDataResponse);
											loadVidcomms(b);
								 		}
								 	}
								 	ajaxCallMedia(sendo,func15);


									$("#vidDescr").empty().append("<div style='color:#eee;margin-bottom:15px;'>"+_vidMovr.videos[ind].description+"</div>")
								})
							})


							if(vidMovr.videos[0].quesSource!="none"){
								var sendo={};
						    	sendo.job='quickSelect_atomic';
							 	sendo.dbase='agape_comments';
								sendo.param='agape_commentsSource';
							  	sendo.value=vidMovr.videos[0].quesSource;
							 	sendo.start=0;

							 	func15=function(datr){
							 		var te=globalTools.verify(datr);
							 		if(te.returnObj=="set empty"){
							 			$("#vidComments").empty().append("<div id='firstComment' style='width:100%;font-family:arial;text-align:center;color:#eee;margin-top:3px;'>Be the first to comment</div>");
							 			$("#addVidCom").hide();
										$("#firstComment").unbind("click").on("click",function(){
								 			
								 				var id=0;
								 				global.comments.type="videoComm_people"
								 				var div1=document.getElementById("_lboxBackground");
												var div2=document.getElementById("_lBoxMainDiv");
												var template={};
												template.page="commentPage.html";
												template.job="videoComms";
												
												template.heading="Comment on: "
												
												
												template.param=global.vidMovr_people.VidObj.videos[id];
												//global.candidate.id=id;
												//template.param=id;
												ingniteLightBox = new LightBox(div1,div2,template,id)
												ingniteLightBox.lightBoxOn();
											

								 			})
										
							 		}else{
							 			var b=$.parseJSON(te.returnObj[0].agape_commentsCommentDataResponse);
										loadVidcomms(b);



										$("#addVidCom").unbind("click").on("click",function(){
												var id=global.vidMovrIndex_people;
								 				global.comments.type="videoComm_Add_people";
								 				var div1=document.getElementById("_lboxBackground");
												var div2=document.getElementById("_lBoxMainDiv");
				
												var template={};
												template.page="commentPage.html";
												template.job="videoComms";
												
												template.heading="Comment on: ";
												
												template.param=global.vidMovr_people.VidObj.videos[id];
												//global.candidate.id=id;
												//template.param=id;
												ingniteLightBox = new LightBox(div1,div2,template,id)
												ingniteLightBox.lightBoxOn();

										})

							 		}
							 	}
							 	ajaxCallMedia(sendo,func15);
							}else{
								
							}

							//$("#vidComments")

					}else{
					
						$("#addVidCom").hide();
						$("#VidHolder").empty().append("<div style='text-align:center;padding:4px;'>There are no videos listed for "+global.people_candidates.returnObj[global.peopleObj.index].peopleCandidate_Firstname+" "+global.people_candidates.returnObj[global.peopleObj.index].peopleCandidate_Lastname+"</div>")
					}
	
				


		break;

		default:
			$("#"+key).html(global.people_candidates.returnObj[global.peopleObj.index][key])
		break;
	}
}
	




if(global.navFunc){
	var tObj;
	if(global.navFunc=="LoggedIn"){
		$(".updatethumbsUpDB").unbind("click");
		$(".updatethumbsDownDB").unbind("click");

		$(".updatethumbsUpDB").on('click',function(){
			_updatethumbsUpDB('peopleCandidate_upVotes');
			$("#peopleCandidate_upVotes").removeClass("articleControls_green").addClass("articleControls_gray");
			$("#peopleCandidate_downVotes").removeClass("articleControls_red").addClass("articleControls_gray");
			$(this).unbind('click');
			$(".updatethumbsDownDB").unbind('click');
			var inc = parseInt($("#peopleCandidate_upVotes").html())+1
			$("#peopleCandidate_upVotes").html(inc)
			global.people_candidates.returnObj[global.peopleObj.index].peopleCandidate_upVotes=inc
		})

		$(".updatethumbsDownDB").on('click',function(){
			_updatethumbsUpDB('peopleCandidate_downVotes');
			$("#peopleCandidate_upVotes").removeClass("articleControls_green").addClass("articleControls_gray");
			$("#peopleCandidate_downVotes").removeClass("articleControls_red").addClass("articleControls_gray");
			$(this).unbind('click');
			$(".updatethumbsUpDB").unbind('click');
			var inc = parseInt($("#peopleCandidate_downVotes").html())+1
			$("#peopleCandidate_downVotes").html(inc);
			global.people_candidates.returnObj[global.peopleObj.index].peopleCandidate_downVotes=inc
			
		})



		if(global.userObj.agape_vote_presidentialCandidates=="Not Answered" || global.userObj.agape_vote_presidentialCandidates=="none"){
	
					
		}else{
			
			var mesoB=$.parseJSON(global.userObj.agape_vote_presidentialCandidates)

			var lengo=mesoB.length;
			for(c=0;c<lengo;c++){
				if(mesoB[c].votetype=='people_Candidate_thumbs'){
					
					if(global.people_candidates.returnObj[global.peopleObj.index].peopleCandidate_ID==mesoB[c].commentID){

						$(".updatethumbsUpDB").unbind("click");
						$(".updatethumbsDownDB").unbind("click");
						//$("#president_upVotes").empty()
						$("#peopleCandidate_upVotes").removeClass("articleControls_green").addClass("articleControls_gray");
						$("#peopleCandidate_downVotes").removeClass("articleControls_red").addClass("articleControls_gray");
					}

					

				}

			}


			
		}


		//global.userObj.agape_vote_presidentialCandidates

	}else{

		$(".updatethumbsUpDB").unbind("click");
		$(".updatethumbsDownDB").unbind("click");
		
		$(".updatethumbsDownDB").on('click',function(){
			alert("you must login or register.")
			$("#username").focus();
			
		})


		$(".updatethumbsUpDB").on('click',function(){
			alert("you must login or register.");
			$("#username").focus();
		})
			
	}
}


function _updatethumbsUpDB(direction){

			var commentCount = {};
			switch(direction){

				case 'peopleCandidate_upVotes':
					commentCount.job="update_atomic";
					commentCount.dbase="people_candidates";
					commentCount.param="peopleCandidate_upVotes";
					commentCount.obj={}
					commentCount.obj.vals="none";
					commentCount.vals=global.people_candidates.returnObj[global.peopleObj.index].peopleCandidate_ID;

				break;


				case 'peopleCandidate_downVotes':
					commentCount.job="update_atomic";
					commentCount.dbase="people_candidates";
					commentCount.param="peopleCandidate_downVotes";
					commentCount.obj={}
					commentCount.obj.vals="none";
					commentCount.vals=global.people_candidates.returnObj[global.peopleObj.index].peopleCandidate_ID;

				break;



				case 'president_downVotes':
					commentCount.job="update_atomic";
					commentCount.dbase="presidential_candidates";
					commentCount.field=obj;
					commentCount.obj={};
					commentCount.obj.value="none";
					commentCount.param="president_downVotes";
					commentCount.vals=global.people_candidates.returnObj[global.peopleObj.index].president_ID;
				break;

				case 'people_commentUpVotes':
					commentCount.job="update_atomic"
					commentCount.param="president_commentUpVotes";
					commentCount.dbase="president_comments";
					commentCount.obj={}
					commentCount.obj.vals="none"
					commentCount.vals=global.people_candidates.returnObj[global.peopleObj.index].commentList[global.candidate.id].president_commentsID;
				break;


				case 'people_commentDownVotes':
					commentCount.job="update_atomic"
					commentCount.param="president_commentDownVotes";
					commentCount.dbase="president_comments";
					commentCount.obj={}
					commentCount.obj.vals="none"
					commentCount.vals=global.people_candidates.returnObj[global.peopleObj.index].commentList[global.candidate.id].president_commentsID;
				break;


			}
			

			
			updatethumbsUpDB(commentCount);
		}








/**
		//$.isArray(a)

		if(global.navFunc){
			var tObj;

			

			

		}else{
			//alert("not logged in")
		}






					
					$(".innerUp").each(function(){
						$(this).on("click",function(){
							var a=$(this).attr("id")+"";
							b=a.substr(9);
							global.candidate.id=b;
							cb=a.substr(0,9);
						
							switch(cb){

								case "presInner":
									_updatethumbsUpDB('president_commentUpVotes');
								break;

								case "presOnner":
									_updatethumbsUpDB('president_commentDownVotes');
								break;
							}
							
						})
						
					})



						$(".commentOpener").each(function(){

							$(this).on("click",function(){
								id="commentOpener";
								var div1=document.getElementById("_lboxBackground");
								var div2=document.getElementById("_lBoxMainDiv");
								var template={};
								template.page="createComment_president.html";
								template.job="visitprofile";
								var idx=$(this).attr("id")+"";
								global.comments.type="presidentialComment"
								idx=idx.substr(4);


								global.candidate.id=idx;
								template.param=id;
								ingniteLightBox = new LightBox(div1,div2,template,id)
								ingniteLightBox.lightBoxOn()
							})

						})

					}
					ajaxCall3(selObj,funck)
					

				break;


				case 'president_photos':

					imo=$.parseJSON(global.people_candidates.returnObj[global.peopleObj.index][key]);
					$("#newsImge").attr("src",imo.images[imo.ImageIndex].defaultImage)

				break;

				case 'president_website':
					$("#webSite").attr("href",global.people_candidates.returnObj[global.peopleObj.index][key])
				break;

				case 'agape_twitter':
					$("#twitter").attr("href",global.people_candidates.returnObj[global.peopleObj.index][key]);
				break;

				case 'president_facebook':
					$("#facebook").attr("href",global.people_candidates.returnObj[global.peopleObj.index][key]);
				break;

				default:
					$("#"+key).html(global.people_candidates.returnObj[global.peopleObj.index][key])
				break;
			}
		}
	})

	$("#more").bind("click",function(){
		opn();
	})
		
		function opn(){
			var thopen=document.getElementById('agape_article_content');
			TweenMax.to(thopen,.3,{css:{display:"block",height:"250px"}})
			$("#more").unbind("click").bind("click",function(){
				cln();
			})
		}

		function cln(){
			var thopen=document.getElementById('agape_article_content');
			TweenMax.to(thopen,.3,{css:{display:"block",height:"97px"}});
			$("#more").unbind("click").bind("click",function(){
				opn();
			})
		}

		


		
		
		$("#returnButt").on("click",function(){
			
			loadTemplate('mainLBHolder','newsHome.html');

		})




		

		if(global.userObj.agape_vote_presidentialCandidates=="Not Answered" || global.userObj.agape_vote_presidentialCandidates=="none"){
		
					
		}else{
			var mesoB=$.parseJSON(global.userObj.agape_vote_presidentialCandidates)
			var lengo=mesoB.length;
			for(c=0;c<lengo;c++){
				if(mesoB[c].votetype=='presidential_Candidate_thumbs'){

					if(global.people_candidates.returnObj[global.peopleObj.index].president_ID==mesoB[c].commentID){

						$(".updatethumbsUpDB").unbind("click");
						$(".updatethumbsDownDB").unbind("click");
						//$("#president_upVotes").empty()
						$("#president_upVotes").removeClass("articleControls_green").addClass("articleControls_gray");
						$("#president_downVotes").removeClass("articleControls_red").addClass("articleControls_gray");
					}

					

				}

			}


			
		}









		*/




		function addThumbEvent(){
				$(".thumbsC").each(function(){
						$("#vidthumbsDown").css({"color":"red"});
								$("#vidthumbsUp").css({"color":"#2c8820"});
						$(this).on("click",function(){
							if(global.navFunc=="LoggedOut"){
								alert("you must login")
							}else{

								
								alert(23)
								//	agape_vote_recordThumbs
								var r=$(this).attr("id")
								r=$.trim(r);
								switch(r)
								{

									case 'vidthumbsUpClk':
									var test=$.parseJSON(global.presObj.presidential_candidates[global.presObj.index]["president_Candidate_video"]);
										var model={};
										model.job='videoUpdateComm';
										model.vidKey="thumbsUp";
										model.selectField="president_Candidate_video";
										model.selectParam="president_ID";
										model.dbase="presidential_candidates";
										model.thumbs="increase";
										model.commentID=test.VidObj.videos[global.vidMovrIndex].id;
										model.issuesID=global.presObj.presidential_candidates[global.presObj.index].president_ID;
										var superFunk=function(data){
											var conv=data.split("**");

											convObj=$.parseJSON(conv[1]);
											global.vidMovr.VidObj=convObj.VidObj;;
											global.presObj.presidential_candidates[global.presObj.index]["president_Candidate_video"]=JSON.stringify(global.vidMovr)
											globalTools.save();
											
											$("#vidthumbsUp").html(global.vidMovr.VidObj.videos[global.vidMovrIndex].thumbsUp).css("color","#eee");
											$("#vidthumbsDown").html(global.vidMovr.VidObj.videos[global.vidMovrIndex].thumbsDown).css("color","#eee");;
											$(".thumbsC").each(function(){

												$(this).unbind("click");
											})
											var hy={}

											hy.commentID=global.vidMovr.VidObj.videos[global.vidMovrIndex].id;
											hy.votetype="media_thumbs";
											voterec=$.parseJSON(global.userObj.agape_vote_recordThumbs);
											voterec.push(hy);
											var newStr=JSON.stringify(voterec);
											var model1 = {}
											model1.job="quickJamUpdate";
											model1.dbase="agape_profile";
											model1.updateStr="agape_vote_recordThumbs='"+newStr+"'";
											model1.param="agape_profile_memberID"
											model1.vals=global.userObj.agape_profile_memberID;
											var jamaicaFunk=function(data1){
												global.userObj.agape_vote_recordThumbs=newStr;
												globalTools.save();
											}

											ajaxCallPost(model1,jamaicaFunk);
										}



										ajaxCall3(model,superFunk);
									break;


									case 'vidthumbsDownClk':
									var test=$.parseJSON(global.presObj.presidential_candidates[global.presObj.index]["president_Candidate_video"]);
										var model={};
										model.job='videoUpdateComm';
										model.vidKey="thumbsDown";
										model.selectField="president_Candidate_video";
										model.selectParam="president_ID";
										model.dbase="presidential_candidates";
										model.thumbs="increase";
										model.commentID=test.VidObj.videos[global.vidMovrIndex].id;
										model.issuesID=global.presObj.presidential_candidates[global.presObj.index].president_ID;
										var superFunk=function(data){
											var conv=data.split("**");

											convObj=$.parseJSON(conv[1]);
											global.vidMovr.VidObj=convObj.VidObj;;
											global.presObj.presidential_candidates[global.presObj.index]["president_Candidate_video"]=JSON.stringify(global.vidMovr)
											globalTools.save();
											
											$("#vidthumbsUp").html(global.vidMovr.VidObj.videos[global.vidMovrIndex].thumbsUp).css("color","#eee");;
											$("#vidthumbsDown").html(global.vidMovr.VidObj.videos[global.vidMovrIndex].thumbsDown).css("color","#eee");
											$(".thumbsC").each(function(){

												$(this).unbind("click");
											})



											var hy={}

											hy.commentID=global.vidMovr.VidObj.videos[global.vidMovrIndex].id;
											hy.votetype="media_thumbs";
											voterec=$.parseJSON(global.userObj.agape_vote_recordThumbs);
											voterec.push(hy);
											var newStr=JSON.stringify(voterec);
											var model1 = {}
											model1.job="quickJamUpdate";
											model1.dbase="agape_profile";
											model1.updateStr="agape_vote_recordThumbs='"+newStr+"'";
											model1.param="agape_profile_memberID"
											model1.vals=global.userObj.agape_profile_memberID;
											var jamaicaFunk=function(data1){
												global.userObj.agape_vote_recordThumbs=newStr;
												globalTools.save();
											}

											ajaxCallPost(model1,jamaicaFunk);
											


										}



										ajaxCall3(model,superFunk);
									break;


								}
							}




						}).css("cursor","pointer");
						
						

						
					})

		}
		
	</script>