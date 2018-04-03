<?php

include("../Config_files/_shared_config.php");
?>
<style>
.vidLink{
	width:170px;
	border:solid 1px #000;
	margin-bottom:6px;
	padding:4px;
	background-color:#A6A6A9;

}


.videotitleClass1{
	font-size:12px;
	text-decoration:underline;
	font-weight:bold;
	cursor:pointer;
	margin-bottom:5px;


}


.bFirst2comm{
	width:100%;
	font-family:arial;
	text-align:center;
	color:#eee;
	margin-top:3px;
	cursor:pointer;
	margin-top:10px;
	margin-bottom:10px;
}



</style>

<div class="topTab"><div class='communitySectionsTemp' class='newNav2'  ><img id="newsImgeMain" style='border-radius:7px;border:solid 1px #eee;' src="<?php echo $actual_base;?>/images/news.gif"/></div></div>

	<div id='headerHolder' style="height:500px;overflow:auto;width:80%;min-width:600px;margin:auto;overflow-x:hidden;overflow-y:hidden;">
	

	<div style='clear:both'></div>

	<div class='newsElems' style='background-color:#fff;width:100%;height:600px'>
		<div style='float:left;width:160px' ><img width="160"  height="145" src="" id='newsImge' border="1" /></div>
		<div style='float:left;width:620px;position:relative;'>
			<div id="agape_media_title" class="agape_media_title" style="width:718px" >

				<div  class="newElemHeader_sub" style='color:#fff;' >Candidate: <i id='president_Firstname'></i>&nbsp;<i id='president_Lastname'></i></div>
				<div  style='color:#fff;' class="newElemHeader_sub">Party: <span id="president_Party"></span></div>
			</div>
		

			<div style="margin-left:18px;;">
			<div style='float:left;font-size:13px;'  >
				<a id="webSite" href="#" target="_blank">Website</a>
			</div>

			<div style='padding:0px;padding-left:8px;margin-top:0px;' class="newElemHeader_sub articleControls"  ><img id="presidentViewTUpImg" src="<?php echo $actual_base;?>/images/thumbsUp.gif" height='16' class='updatethumbsUpDB' /></div>
			<div id='president_upVotes' style='padding:0px;margin-top:0px;' class="newElemHeader_sub articleControls articleControls_green" >0</div>
			<div style='float:left;width:8px;'>&nbsp;</div>
			<div  style='padding:0px;padding-left:8px;margin-top:0px;' class="newElemHeader_sub articleControls"><img id="presidentViewTDownImg" src="<?php echo $actual_base;?>/images/thumbsDown.gif" height='16' class='updatethumbsDownDB'  /></div>
			<div id='president_downVotes' style='padding:0px;margin-top:0px;' class="newElemHeader_sub articleControls articleControls_red" style="padding-left:0px;text-decoration:none;color:red;margin-top:0px;">0</div>
			

			<div style='float:left;margin-left:10px;position:relative;top:-2px;' class='hyperlink1 faceBook'><a id='facebook' href="#" target="_blank"><img id="faceBookImg" src="<?php echo $actual_base;?>/images/facebook.jpg"  height="20" /></a></div>

			<div style='float:left;margin-left:10px;position:relative;top:-2px;' class='hyperlink1 '><a id='twitter' href="#" target="_blank"><img id="twitterImg" src="<?php echo $actual_base;?>/images/twitter-logo_19.png"  height="20" /></a></div>


			
			<div style='float:left;margin-left:10px;position:relative;color:red' class='hyperlink1 discussB'>Discuss Candidate</div>
			<div style='float:left;margin-left:10px;position:relative;color:red' class='hyperlink1 backB'>< Back</div>
			<div style='clear:both'></div>

			</div>

			
			
			
		</div>
		
		<div style='clear:both'></div>

		<div style="padding-top:25px;width:100%">
				<div id='issh' class="presNavs " >Issues</div>
				<div id='comms' class="presNavs presNavsSelected" >Quotes</div>
				<div id='vids' class="presNavs" >Video</div>
				
				<div style='clear:both'></div>
				<div style="border:solid 1px #222; width:890px;padding:5px;padding-top:25px;">

					<div class='navWindow' id="commDiv" style='height:340px;overflow:auto;'>
						</br>


						<div class="issuesComments_inner_rev1" >
							<div class="titlebar">
								<div style="float:left;">
									<img src="profileImages/female1_a.jpg" height="90" width="80">
								</div>
								<div style="float:left;padding-left:10px;">uname3</div>
								<div style="float:right;padding-right:10px;">October 7, 2016 1:31 PM</div>
								<div style="clear:both;"></div>
								<div style="margin-top:10px;">
									<div style="width:600px;text-align:left;font-weight:normal;">Olympic Authorities warned that the danger was far from over, with hundreds of miles of coastline in Florida, Georgia and South Carolina still under threat of torrential rain and deadly storm surge as the most powerful hurricane to menace the Atlantic Seaboard in over a decade pushed north.</div>
								</div>
								<div id="qrep2_3" class="quoteReplyStyle">reply</div>
							</div>
						</div>

						<div class="issuesComments_inner_rev1_sub1" >
							<div class="titlebar">
								<div style="float:left;">
									<img src="profileImages/female12_b.jpg" height="90" width="80">
								</div>
								<div style="float:left;padding-left:10px;">uname3</div>
								<div style="float:right;padding-right:10px;">October 7, 2016 1:31 PM</div>
								<div style="clear:both;"></div>
								<div style="margin-top:10px;">
									<div style="width:600px;text-align:left;font-weight:normal;">Olympic Authorities warned that the danger was far from over, with hundreds of miles of coastline in Florida, Georgia and South Carolina still under threat of torrential rain and deadly storm surge as the most powerful hurricane to menace the Atlantic Seaboard in over a decade pushed north.</div>
								</div>
								<div id="qrep2_3" class="quoteReplyStyle">reply</div>
							</div>
						</div>
						<div class="issuesComments_inner_rev1_sub1" >
							<div class="titlebar">
								<div style="float:left;">
									<img src="profileImages/female29_w.jpg" height="90" width="80">
								</div>
								<div style="float:left;padding-left:10px;">uname3</div>
								<div style="float:right;padding-right:10px;">October 7, 2016 1:31 PM</div>
								<div style="clear:both;"></div>
								<div style="margin-top:10px;">
									<div style="width:600px;text-align:left;font-weight:normal;">Olympic Authorities warned that the danger was far from over, with hundreds of miles of coastline in Florida, Georgia and South Carolina still under threat of torrential rain and deadly storm surge as the most powerful hurricane to menace the Atlantic Seaboard in over a decade pushed north.</div>
								</div>
								<div id="qrep2_3" class="quoteReplyStyle">reply</div>
							</div>
						</div>
						<div class="issuesComments_inner_rev1_sub1" >
							<div class="titlebar">
								<div style="float:left;">
									<img src="profileImages/male24_w.jpg" height="90" width="80">
								</div>
								<div style="float:left;padding-left:10px;">uname3</div>
								<div style="float:right;padding-right:10px;">October 7, 2016 1:31 PM</div>
								<div style="clear:both;"></div>
								<div style="margin-top:10px;">
									<div style="width:600px;text-align:left;font-weight:normal;">Olympic Authorities warned that the danger was far from over, with hundreds of miles of coastline in Florida, Georgia and South Carolina still under threat of torrential rain and deadly storm surge as the most powerful hurricane to menace the Atlantic Seaboard in over a decade pushed north.</div>
								</div>
								<div id="qrep2_3" class="quoteReplyStyle">reply</div>
							</div>
						</div>


						<div class="issuesComments_inner_rev1" >
							<div class="titlebar">
								<div style="float:left;">
									<img src="profileImages/male13_b.jpg" height="90" width="80">
								</div>
								<div style="float:left;padding-left:10px;">uname3</div>
								<div style="float:right;padding-right:10px;">October 7, 2016 1:31 PM</div>
								<div style="clear:both;"></div>
								<div style="margin-top:10px;">
									<div style="width:600px;text-align:left;font-weight:normal;">Olympic Authorities warned that the danger was far from over, with hundreds of miles of coastline in Florida, Georgia and South Carolina still under threat of torrential rain and deadly storm surge as the most powerful hurricane to menace the Atlantic Seaboard in over a decade pushed north.</div>
								</div>
								<div id="qrep2_3" class="quoteReplyStyle">reply</div>
							</div>
						</div>

						<div class="issuesComments_inner_rev1_sub1" >
							<div class="titlebar">
								<div style="float:left;">
									<img src="profileImages/female1_b.jpg" height="90" width="80">
								</div>
								<div style="float:left;padding-left:10px;">uname3</div>
								<div style="float:right;padding-right:10px;">October 7, 2016 1:31 PM</div>
								<div style="clear:both;"></div>
								<div style="margin-top:10px;">
									<div style="width:600px;text-align:left;font-weight:normal;">Olympic Authorities warned that the danger was far from over, with hundreds of miles of coastline in Florida, Georgia and South Carolina still under threat of torrential rain and deadly storm surge as the most powerful hurricane to menace the Atlantic Seaboard in over a decade pushed north.</div>
								</div>
								<div id="qrep2_3" class="quoteReplyStyle">reply</div>
							</div>
						</div>

						<div class="issuesComments_inner_rev1_sub2" >
							<div class="titlebar">
								<div style="float:left;">
									<img src="profileImages/female1_a.jpg" height="90" width="80">
								</div>
								<div style="float:left;padding-left:10px;">uname3</div>
								<div style="float:right;padding-right:10px;">October 7, 2016 1:31 PM</div>
								<div style="clear:both;"></div>
								<div style="margin-top:10px;">
									<div style="width:600px;text-align:left;font-weight:normal;">Olympic Authorities warned that the danger was far from over, with hundreds of miles of coastline in Florida, Georgia and South Carolina still under threat of torrential rain and deadly storm surge as the most powerful hurricane to menace the Atlantic Seaboard in over a decade pushed north.</div>
								</div>
								<div id="qrep2_3" class="quoteReplyStyle">reply</div>
							</div>
						</div>









					</div>


					<div class='navWindow' id="VideoDiv" style='display:none;'>
					
						


						<div style='width:900px;'>


						<div style="height:485px;overflow:auto;overflow-x:hidden;float:left;width:660px;">
							<div id="vdiv" style="color:#eee;border:solid 1px #000;width:640px;margin:auto;background-color:#222;border-radius:7px;">
								
								<div id="VidHolder" style="width:630px;margin-top:8px;margin:auto">
									<div id="vidthumbs">
										<div style="width:400px;margin:auto;margin-bottom:10px;">
											<div id="vidthumbsUpClk" class="thumbsC" style="float:left;padding-top:3px;"><img src="<?php echo $actual_base;?>/images/thumbsUp.gif" height="16" /></div>
											<div id="vidthumbsUp" style="float:left;padding-left:4px;color:#2c8820;font-size:16px;padding-top:4px;font-weight:bold;">0</div>
											<div id="vidthumbsDownClk" class="thumbsC" style="float:left;padding-left:8px;padding-top:3px;"><img src="<?php echo $actual_base;?>/images/thumbsDown.gif" height="16" /></div>
											<div id="vidthumbsDown" style="float:left;padding-left:4px;color:red;font-size:16px;padding-top:4px;font-weight:bold">0</div>
											<div style="float:left;padding-left:8px;color:#eee;font-size:16px;padding-top:4px;">Comments:<span id='vidcomments1'>5365</span></div>
											<div id='addVidCom' style="float:left;width:120px;text-align:center;color:#eee;font-size:16px;padding-top:3px;text-decoration:underline;display:none;cursor:pointer;">Add comment</div>
											<div style='clear:both;'></div>
										</div>
									</div>
									<div id="vidComms">
										<div id='vidComments' style='width:300px;margin:auto;'><img src='<?php echo $actual_base;?>/images/loading37.gif' /></div>
									</div>

								</div>
									
							</div>
							
						</div>

						<div style='float:left;width:190px;margin-left:10px;' id='videoList'>
							
						</div>


						<div style='clear:both'></div>


						</div>


					</div>
					


					<div style='padding:15px;' class='navWindow' id="IssueDiv" >
						<div style='font-weight:bold;width:660px;font-size:24px;text-align:center;margin-bottom:25px;'>This is where <span>Hillary</span> stands on the following issues.</div>
						<div style='width:650px;margin:auto;'>
							<div style='float:left;font-weight:bold;'>Issue</div>
							<div style='float:left;font-weight:bold;margin-left:135px;'>Rated</div>
							<div style='float:right;font-weight:bold;'>Comments</div>

							<div style='clear:both;'></div>
						</div>	
						
						<div style='border:solid 1px #000;' id="IssueDivFilled">

							
						</div>
					</div>
					</div>
				</div>
			</div>
		<div id='agape_media_content' style="color:#000;padding:8px;overflow:auto;"></div>
		
	</div>

		
</div>
<div id='formQuestions'></div>
<style>

.vidReplyButton{
	padding:5px;
	width:40px;
	margin:auto;
	font-size:12px;
	cursor:pointer;
}

.vidReplyButtonTo{
	padding:5px;
	width:40px;
	margin:auto;
	font-size:12px;
	cursor:pointer;
}



</style>

	<script type="text/javascript">
	var cnt=0;
		$(document).ready(function(){

			



//var f=[{"img":"profileImages/female13_w.jpg","commentCreator":"uname895","commentDate":"August 20, 2016 7:49 PM","comment":"It is better to be hated for what you are than to be loved for what you are not.","id":"342_quot0_jhgjtj67843b"},{"img":"profileImages/female28_w.jpg","commentCreator":"uname862","commentDate":"August 20, 2016 7:49 PM","comment":"There is nothing better than adversity. Every defeat, every heartbreak, every loss, contains its own seed, its own lesson on how to improve your performance the next time.","id":"342_quot0_jhgjtj67843b"},{"img":"profileImages/female3_w.jpg","commentCreator":"uname519","commentDate":"August 20, 2016 7:49 PM","comment":"Consider it all joy, my brethren, when you encounter various trials, knowing that the testing of your faith produces endurance. And let endurance have its perfect result, so that you may be perfect and complete, lacking in nothing.","id":"342_quot0_jhgjtj67843b"},{"img":"profileImages/female13_w.jpg","commentCreator":"uname630","commentDate":"August 20, 2016 7:49 PM","comment":"Any emotion, if it is sincere, is involuntary.","id":"342_quot0_jhgjtj67843b"},{"img":"profileImages/female28_w.jpg","commentCreator":"uname1138","commentDate":"August 20, 2016 7:49 PM","comment":"The reports of my death have been greatly exaggerated.","id":"342_quot0_jhgjtj67843b"},{"img":"profileImages/female16_w.jpg","commentCreator":"uname461","commentDate":"August 20, 2016 7:49 PM","comment":"It is better to remain silent and be thought a fool than to open one&#39;s mouth and remove all doubt.","id":"342_quot0_jhgjtj67843b"},{"img":"profileImages/female24_w.jpg","commentCreator":"uname271","commentDate":"August 20, 2016 7:49 PM","comment":"I was married awfully young and I felt trapped. My wife had been divorced and all the time we were married we were out of the Church. It wasn&#39;t until we were divorced that we became good Catholics again.","id":"342_quot0_jhgjtj67843b"},{"img":"profileImages/female12_w.jpg","commentCreator":"uname1081","commentDate":"August 20, 2016 7:49 PM","comment":"America will never be destroyed from the outside. If we falter and lose our freedoms, it will be because we destroyed ourselves.","id":"342_quot0_jhgjtj67843b"},{"img":"profileImages/female27_w.jpg","commentCreator":"uname555","commentDate":"August 20, 2016 7:49 PM","comment":"Strength and growth come only through continuous effort and struggle.","id":"342_quot0_jhgjtj67843b"},{"img":"profileImages/female7_w.jpg","commentCreator":"uname273","commentDate":"August 20, 2016 7:49 PM","comment":"I&#39;ve learned that people will forget what you said, people will forget what you did, but people will never forget how you made them feel.","id":"342_quot0_jhgjtj67843b"},{"img":"profileImages/female18_w.jpg","commentCreator":"uname762","commentDate":"August 20, 2016 7:49 PM","comment":"Don&#39;t cry because it&#39;s over, smile because it happened","id":"342_quot0_jhgjtj67843b"},{"img":"profileImages/female9_w.jpg","commentCreator":"uname1046","commentDate":"August 20, 2016 7:49 PM","comment":"I don&#39;t understand the mentality of a rock fan, being obsessed with two or three songs from 25 years ago. I&#39;m not that kind of a fan.","id":"342_quot0_jhgjtj67843b"},{"img":"profileImages/female17_w.jpg","commentCreator":"uname722","commentDate":"August 20, 2016 7:49 PM","comment":"You&#39;ve gotta dance like there&#39;s nobody watching,Love like you&#39;ll never be hurt,Sing like there&#39;s nobody listening, And live like it&#39;s heaven on earth.","id":"342_quot0_jhgjtj67843b"}]



			//$(".newFormfieledHolderStyles").css("height","800px");
			
			$("#IssueDiv").css("display","block");
			//$("#LbBack").css("height","60px");
			TweenMax.to($(".newFormfieledHolderStyles")[0],.5,{css:{height:"1000px"}});
			TweenMax.to($("#LbBack")[0],.4,{css:{height:"60px"}},-2);
			$("#footertab").css("top","970px");
			$("#headerHolder").css("height","580px");
		
			//$(".newFormfieledHolderStyles").css("height","1000px");
			$(".newsElems").css("height","580px");


			$("#addVidCom").on("click",function(){

				if(global.navFunc=="LoggedIn"){
					var id=global.vidMovrIndex;
	 				global.comments.type="videoComm"
	 				var div1=document.getElementById("_lboxBackground");
					var div2=document.getElementById("_lBoxMainDiv");
					var template={};
					template.page="commentPage.html";
					template.job="videoComms";
					template.heading="Comment on: "
					
					template.param=global.vidMovr.VidObj.videos[id];
					global.candidate.id=id;
					//template.param=id;
					ingniteLightBox = new LightBox(div1,div2,template,id)
					ingniteLightBox.lightBoxOn();

				}else{
					alert("you must login")
				}
				

			})


			 

			global.lastNav='presidentView.php';
			globalTools.save();
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
							$("#commDiv").css("display","block");
							$("#LbBack").css("height","60px");
							//$("#footertab").css("top","990px");
							$("#headerHolder").css("height","600px");
							$(".newFormfieledHolderStyles").css("height","1030px");
							$(".newsElems").css("height","620px");
						break;

						case 'Issues':
							$("#IssueDiv").css("display","block");
							$("#LbBack").css("height","60px");
							//$("#footertab").css("top","970px");
							$("#headerHolder").css("height","580px");
							$(".newFormfieledHolderStyles").css("height","1000px");
							$(".newsElems").css("height","560px");
						break;

						case 'Video':
							$("#VideoDiv").css("display","block");
							$("#LbBack").css("height","60px");
							$(".newFormfieledHolderStyles").css("height","1320px");
							//$("#footertab").css("top","1140px");
							$("#headerHolder").css("height","820px");
							$(".newsElems").css("height","805px");
						break;

					}
				})
			})

		//$.isArray(a)

		if(global.navFunc){
			var tObj;

			if(global.navFunc=="LoggedIn"){
				$(".updatethumbsUpDB").unbind("click");
				$(".updatethumbsDownDB").unbind("click");

				$(".updatethumbsDownDB").on('click',function(){
					_updatethumbsUpDB('president_downVotes');
					$("#president_upVotes").removeClass("articleControls_green").addClass("articleControls_gray");
					$("#president_downVotes").removeClass("articleControls_red").addClass("articleControls_gray");
					$(this).unbind('click');
					$(".updatethumbsUpDB").unbind('click');
					var inc = parseInt($("#agape_media_thumbsDown").html())+1
					$("#agape_media_thumbsDown").html(inc);
					
				})

				
				$(".updatethumbsUpDB").on('click',function(){
					_updatethumbsUpDB('president_upVotes');
					$("#president_upVotes").removeClass("articleControls_green").addClass("articleControls_gray");
					$("#president_downVotes").removeClass("articleControls_red").addClass("articleControls_gray");
					$(this).unbind('click');
					$(".updatethumbsDownDB").unbind('click');
					var inc = parseInt($("#apresident_commentsThumbsUp").html())+1
					$("#agape_media_thumbsUp").html(inc)
				})

				assignDiscuss();


				if(global.userObj.agape_vote_presidentialCandidates=="Not Answered" || global.userObj.agape_vote_presidentialCandidates=="none"){
				
							
				}else{
					
					var mesoB=$.parseJSON(global.userObj.agape_vote_presidentialCandidates)
					var lengo=mesoB.length;
					for(c=0;c<lengo;c++){
						if(mesoB[c].votetype=='presidential_Candidate_thumbs'){
							if(global.presObj.presidential_candidates[global.presObj.index].president_ID==mesoB[c].commentID){
								$(".updatethumbsUpDB").unbind("click");
								$(".updatethumbsDownDB").unbind("click");
								//$("#president_upVotes").empty()
								$("#president_upVotes").removeClass("articleControls_green").addClass("articleControls_gray");
								$("#president_downVotes").removeClass("articleControls_red").addClass("articleControls_gray");
							}

						}

					}
				}
			}

			if(global.navFunc=="LoggedOut"){
				$(".updatethumbsUpDB").unbind("click");
				$(".updatethumbsDownDB").unbind("click");
				$(".updatethumbsDownDB").on('click',function(){
					alert("you must login or register.")
					$("#username").focus();
					
				})
				$(".discussB").on("click",function(){
					alert("You must login to discuss topic.")
				})

				$(".updatethumbsUpDB").on('click',function(){
					alert("you must login or register.");
					$("#username").focus();
				})

			}

		}else{

		}
		for(var key in global.presObj.presidential_candidates[global.presObj.index]){
			switch(key){
				case 'agape_media_createDate':
					//var timeDateVal=getTime(global.newsObjView[key],'true')
					//$("#"+key).html(timeDateVal)
				
				break;
				
				case 'president_issue_list':
					var selObj={};
					selObj.job="quickSelect_atomic";
					selObj.dbase="president_issues";
					selObj.param="president_issuesSource";
					selObj.value=global.presObj.presidential_candidates[global.presObj.index].president_ID;
					selObj.start=0;

					var func36=function(data){

						var cheese=globalTools.verify(data)
						global.presObj.presidential_candidates[global.presObj.index].president_issues=cheese.returnObj

						if(cheese.returnObj!="set empty"){


							var tlengo=global.presObj.presidential_candidates[global.presObj.index].president_issues.length;
							var globe=global.presObj.presidential_candidates[global.presObj.index].president_issues;
							var row="presidentIssueGrid_alt"
							for(i=0;i<tlengo;i++){


								if(globe[i].president_issuesCommsCount=='none'){
									globe[i].president_issuesCommsCount=0;
								}
								$("#IssueDivFilled").append("<div class='"+row+"'><div id='issue"+i+"' class='presidentIssueLinkStyle floatClass'>"+globe[i].president_issuesTitle+"</div><div class=' floatClass'><img src='"+global.baseUrl+"/images/thumbsUp.gif' height='16' class='ju' /></div><div class='floatClass' style='color:green;font-weight:normal;width:55px;padding-top:2px;padding-left:3px;'>"+globe[i].president_issuesThumbsUp+"</div><div class=' floatClass'><img src='"+global.baseUrl+"/images/thumbsDown.gif' height='16' class='ju' /></div><div class='floatClass' style='color:red;font-weight:normal;width:55px;padding-top:2px;padding-left:3px;'>"+globe[i].president_issuesThumbsDown+"</div><div  style='color:#000;font-weight:normal;float:right;margin-right:40px;'>"+globe[i].president_issuesCommsCount+"</div><div style='clear:both;'></div></div>")
							
								if(row=="presidentIssueGrid_alt"){
									row="presidentIssueGrid"
								}else{
									row="presidentIssueGrid_alt"
								}
							}

							$(".presidentIssueLinkStyle").each(function(){
								$(this).on("mouseover",function(){
									$(this).css({"color":"red","text-decoration":"underline"})
								}).on("mouseout",function(){
									$(this).css({"color":"#000","text-decoration":"none"})
								}).on("click",function(){
									var div1=document.getElementById("_lboxBackground");
									var div2=document.getElementById("_lBoxMainDiv");
									var template={};
									var indx=0;
									template.page="viewIssue_open.php";
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
							$("#IssueDivFilled").html("<div style='text-align:center;padding:4px;'>There are no issues listed for "+global.presObj.presidential_candidates[global.presObj.index].president_Firstname+" "+global.presObj.presidential_candidates[global.presObj.index].president_Lastname+"</div>")
							globalTools.save();
						}
					}
					ajaxCall3(selObj,func36)
					
				break;

				case 'president_Comments':

					var beal={};
					beal.job="getPresidentialQuotes_new";
					beal.dbase="political_quotes";
					beal.selectParam="president_CommentsSource";
					beal.ob="where president_CommentsSource='"+global.presObj.presidential_candidates[global.presObj.index].president_ID+"'";
					beal.selectIndex=global.presObj.presidential_candidates[global.presObj.index].president_ID;
					var bealfunc=function(grady){
						
						var t=grady+"";
						var d=t.split("**")
						var eCommObj=$.parseJSON(d[1])
						global.presQuotes=eCommObj;
						globalTools.save();
						//les=globalTools.verify(grady)
						quotesComm(eCommObj);
			
					}

				
					ajaxCall3(beal,bealfunc);
				

				break;


				case 'president_photos':

					imo=$.parseJSON(global.presObj.presidential_candidates[global.presObj.index][key]);
					$("#newsImge").attr("src",global.baseUrl+"/"+imo.images[imo.ImageIndex].defaultImage)

				break;

				case 'president_website':
					$("#webSite").attr("href",global.presObj.presidential_candidates[global.presObj.index][key])
				break;

				case 'agape_twitter':
					$("#twitter").attr("href",global.presObj.presidential_candidates[global.presObj.index][key]);
				break;

				case 'president_facebook':
					$("#facebook").attr("href",global.presObj.presidential_candidates[global.presObj.index][key]);
				break;

				case 'president_Candidate_video':
		
					if(global.presObj.presidential_candidates[global.presObj.index][key]=="none"){
						global.presObj.presidential_candidates[global.presObj.index][key]="[]";
					}



					var vidMovr1=$.parseJSON(global.presObj.presidential_candidates[global.presObj.index][key]);
					var vidMovr_leng=0;

					var tr=vidMovr1.VidObj.videos.length;
					if(tr){
						if(vidMovr1.VidObj){
							var vidMovr=vidMovr1.VidObj;
							global.vidMovr=vidMovr1;
							globalTools.save();

							vidMovr_leng=vidMovr.videos.length;
							$("#vidcomments1").html(vidMovr.videos[0].commentCount);
							$("#vidthumbsUp").html(vidMovr.videos[0].thumbsUp);
							$("#vidthumbsDown").html(vidMovr.videos[0].thumbsDown);
						}
					}

					if(global.navFunc=='LoggedIn')
					{
						var f=$.parseJSON(global.userObj.agape_vote_recordThumbs);
						var f_leng=f.length;
						var vObjChk="true";
						var tr=vidMovr1.length;
				
						if(tr>0){
							if(vidMovr1.VidObj){
								for(p=0;p<f_leng;p++){
									if(f[p].votetype="media_thumbs"){
										if(f[p].commentID==vidMovr.videos[0].id){
											vObjChk="false"
										}
									}
								
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

					
					global.vidMovrIndex=0;
					globalTools.save();




					if(vidMovr_leng>0){
						

						var popStrg="<div id='vidNav0' ><div id='vidDescr' style='color:#eee;margin-bottom:15px;'>"+vidMovr.videos[0].description+"</div><div style='padding:4px;background-color:#dedede;border-radius:5px;margin:auto;width:490px;height:300px;margin-bottom:10px;'>"
										
							popStrg=popStrg+"<div id='youtubeDiv0' style='height:350px;' ><iframe id='youTube0' width='490' height='300' src='"+vidMovr.videos[0].url+"'' frameborder='0' allowfullscreen=''></iframe></div></div></div>"
							
							$("#VidHolder").prepend(popStrg);
							//r=globalTools.stringClearBack(vidMovr[0].title)
							//$("#vidNav0").html(vidMovr[0].description)
							var vStrng=""
							for(e=0;e<vidMovr_leng;e++){
								//$("#changeVid"+e).append(vidMovr.videos[e].title).css("display","block")


								vStrng=vStrng+"<div class='vidLink'>"
								vStrng=vStrng+"<div style='float:left;border:solid 1px #000;width:30px;'><img src='images/video.jpg' height='30' /></div>"
								vStrng=vStrng+"<div style='float:left;width:133px;margin-left:4px;'>"
									vStrng=vStrng+"<div class='videotitleClass1' id='changeVid"+e+"'>"+vidMovr.videos[e].title+"</div>"
									vStrng=vStrng+"<div style='font-size:12px;'><span>Uploaded: </span><br/><span style='color:#fff;text-shadow:1px 0px #000;'>"+vidMovr.videos[e].vidPosted+"</span></div>"
								vStrng=vStrng+"</div>"
								vStrng=vStrng+"<div style='clear:both;'></div>"
							vStrng=vStrng+"</div>"



							}

							$("#videoList").append(vStrng)
							$("div[id^=changeVid]").each(function(){
								$(this).on("click",function(){

									var vidMovr2=$.parseJSON(global.presObj.presidential_candidates[global.presObj.index]['president_Candidate_video']);
									var _vidMovr=vidMovr2.VidObj;
									
									var ind=$(this).attr("id")+""
									ind=ind.substr(9);
									$("#youTube0").attr("src",_vidMovr.videos[ind].url);

									var sendo={};
							    	sendo.job='quickSelect_atomic';
								 	sendo.dbase='agape_comments';
									sendo.param='agape_commentsSource';
								  	sendo.value=_vidMovr.videos[ind].agape_commentsSource;
								 	sendo.start=0;

								 	global.vidMovrIndex=ind;
								 	globalTools.save();


									$("#vidcomments1").html(_vidMovr.videos[ind].commentCount);
									$("#vidthumbsUp").html(_vidMovr.videos[ind].thumbsUp);
									$("#vidthumbsDown").html(_vidMovr.videos[ind].thumbsDown);
									$("#vidDescr").html(_vidMovr.videos[ind].description);

									if(global.navFunc=='LoggedIn')
									{

										var f=$.parseJSON(global.userObj.agape_vote_recordThumbs);
										var f_leng=f.length;
										var vObjChk="true";

										for(p=0;p<f_leng;p++){
											if(f[p].votetype="media_thumbs"){
												if(f[p].commentID==vidMovr.videos[ind].id){
													vObjChk="false";
												}
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
								 			$("#vidComms").empty().append("<div id='firstComment' class='bFirst2comm'>Be the first to comment</div>");
								 			$("#addVidCom").hide();
								 			$("#firstComment").unbind("click").on("click",function(){
								 				var id=ind;

								 				global.comments.type="videoComm_New"
								 				var div1=document.getElementById("_lboxBackground");
												var div2=document.getElementById("_lBoxMainDiv");
												var template={};
												template.page="commentPage.html";
												template.job="videoComms";
												template.heading="Comment on: "
												template.param=vidO[id];
												ingniteLightBox = new LightBox(div1,div2,template,id)
												ingniteLightBox.lightBoxOn();

								 			})
								 		}else{

											loadVidcomms(te.returnObj);
								 		}
								 	}
								 	ajaxCallMedia(sendo,func15);


									$("#vidDescr").empty().append("<div style='color:#eee;margin-bottom:15px;'>"+_vidMovr.videos[ind].description+"</div>")
								})
							})

							if(vidMovr.videos[0].agape_commentsSource!="none"){
								var sendo={};
						    	sendo.job='quickSelect_atomic';
							 	sendo.dbase='agape_comments';
								sendo.param='agape_commentsSource';
							  	sendo.value=vidMovr.videos[0].agape_commentsSource;
							 	sendo.start=0;

							 	func15=function(datr){
							 	
							 		
							 		var te=globalTools.verify(datr);
							 		if(te.returnObj=="set empty"){
							 			$("#vidComments").empty().append("<div id='firstComment' class='bFirst2comm'>Be the first to comment</div>");
							 			$("#addVidCom").hide();
										$("#firstComment").unbind("click").on("click",function(){
								 				
								 				var id=0;
								 				global.comments.type="videoComm_New"
								 				var div1=document.getElementById("_lboxBackground");
												var div2=document.getElementById("_lBoxMainDiv");
												var template={};
												template.page="commentPage.html";
												template.job="videoComm";
												// template.heading="Comment on: "
												template.param=global.vidMovr.VidObj.videos[id];
												//global.candidate.id=id;
												//template.param=id;
												ingniteLightBox = new LightBox(div1,div2,template,id)
												ingniteLightBox.lightBoxOn();
								 			})
										
							 		}else{
							 			//var b=$.parseJSON(te.returnObj);
										loadVidcomms(te.returnObj);
									

							 		}
							 	}
							 	ajaxCallMedia(sendo,func15);
							}else{
								
							}

							//$("#vidComments")

					}else{
					
						$("#addVidCom").hide();
						$("#VidHolder").empty().append("<div style='text-align:center;padding:4px;'>There are no videos listed for "+global.presObj.presidential_candidates[global.presObj.index].president_Firstname+" "+global.presObj.presidential_candidates[global.presObj.index].president_Lastname+"</div>")
					}
				break;

				default:
					$("#"+key).html(global.presObj.presidential_candidates[global.presObj.index][key])
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

	


	$(".backB").on("click",function(){
		loadTemplate('mainLBHolder','presidentListPage.html');
	})
	
	$("#returnButt").on("click",function(){
		
		loadTemplate('mainLBHolder','newsHome.html');

	})

	if(global.navFunc!="LoggedOut"){
		
	}else{ 

	}


				

function assignDiscuss(){
	if(global.presObj.presidential_candidates[global.presObj.index].presidentialCandidate_discussPage=="none" ){
		$(".discussB").on("click",function(){
		
			var sendObj={};
			sendObj.job="quickInsertAtomic";
			sendObj.dbase="agape_topics";
			sendObj.obj={};
			sendObj.obj.agape_media_createDate=convertNowToPhP();
			sendObj.obj.agape_media_lastComment_date=sendObj.obj.agape_media_createDate;
			sendObj.obj.agape_media_title="Discuss: "+global.presObj.presidential_candidates[global.presObj.index].president_Fullname;
			sendObj.obj.agape_media_group="Politics";
			sendObj.obj.agape_media_updatedBy=global.userObj.agape_profile_username;
			sendObj.obj.agape_media_author_ID=global.userObj.agape_profile_memberID;
			sendObj.obj.agape_media_author=global.userObj.agape_profile_username;
			sendObj.obj.agape_media_updatedBy_ID=global.userObj.agape_profile_memberID;
			sendObj.obj.agape_media_group="Politics";
			sendObj.obj.agape_media_content="Lets&#39;s discuss presidential candidate "+global.presObj.presidential_candidates[global.presObj.index].president_Fullname;
			sendObj.obj.agape_media_thumbsUp=0
			sendObj.obj.agape_media_thumbsDown=0
			
			var firstPicObj=$.parseJSON(global.presObj.presidential_candidates[global.presObj.index].president_photos)

			var picO={}
			picO.defaultPic=firstPicObj.images[0].defaultImage;
			picO.defaultPicTitle="Presidential"
			picO.Presidential=firstPicObj.images[0].defaultImage;;
			picO.Presidential1=firstPicObj.images[0].defaultImage;

			firstPicObj.defaultPic=firstPicObj.Presidential;
			secondPicObj=JSON.stringify(picO)
			
			sendObj.obj.agape_media_images=secondPicObj;
			sendObj.obj.agape_media_city=global.presObj.presidential_candidates[global.presObj.index].president_workingCity;
			sendObj.obj.agape_media_state=global.presObj.presidential_candidates[global.presObj.index].president_workingState;
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
					sendObj1.dbase="presidential_candidates";
					sendObj1.param="president_ID";
					sendObj1.obj={};
					sendObj1.vals=global.presObj.presidential_candidates[global.presObj.index].president_ID;
					//sendObj1.obj.peopleCandidate_AccountUpdated=convertNowToPhP();
					sendObj1.obj.presidentialCandidate_discussPage=deel[1];
					global.presObj.presidential_candidates[global.presObj.index].presidentialCandidate_discussPage=sendObj1.obj.presidentialCandidate_discussPage;
					globalTools.save();
					passId=sendObj1.obj.presidentialCandidate_discussPage;
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
				var id=global.presObj.presidential_candidates[global.presObj.index].presidentialCandidate_discussPage;
				
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

}
		









		function _updatethumbsUpDB(direction){

			var commentCount = {};
			
			switch(direction){

				case 'president_upVotes':
					commentCount.job="update_atomic";
					commentCount.dbase="presidential_candidates";
					commentCount.field=obj;
					commentCount.obj={};
					commentCount.obj.value="none"
					commentCount.param="president_upVotes"
					commentCount.vals=global.presObj.presidential_candidates[global.presObj.index].president_ID;
				break;

				case 'president_downVotes':
					commentCount.job="update_atomic";
					commentCount.dbase="presidential_candidates";
					commentCount.field=obj;
					commentCount.obj={};
					commentCount.obj.value="none";
					commentCount.param="president_downVotes";
					commentCount.vals=global.presObj.presidential_candidates[global.presObj.index].president_ID;
				break;

				case 'president_commentUpVotes':
					commentCount.job="update_atomic"
					commentCount.param="president_commentUpVotes";
					commentCount.dbase="president_comments";
					commentCount.obj={}
					commentCount.obj.vals="none"
					commentCount.vals=global.presObj.presidential_candidates[global.presObj.index].commentList[global.candidate.id].president_commentsID;
				break;


				case 'president_commentDownVotes':
					commentCount.job="update_atomic"
					commentCount.param="president_commentDownVotes";
					commentCount.dbase="president_comments";
					commentCount.obj={}
					commentCount.obj.vals="none"
					commentCount.vals=global.presObj.presidential_candidates[global.presObj.index].commentList[global.candidate.id].president_commentsID;
				break;

				case 'quoteThumbsUp':
					commentCount.job="quickJamUpdate_thumbs";
					commentCount.dbase="political_quotes";
					commentCount.var=direction;
					commentCount.param="president_commentsID";
					commentCount.vals=global.presQuotes.returnObj[global.presQuotesIndx].president_commentsID;
					commentCount.updateStr="president_commentsThumbsUp = president_commentsThumbsUp+1"

				break;


				case 'quoteThumbsDown':
					commentCount.job="quickJamUpdate_thumbs";
					commentCount.dbase="political_quotes";
					commentCount.var=direction;
					commentCount.param="president_commentsID";
					commentCount.vals=global.presQuotes.returnObj[global.presQuotesIndx].president_commentsID;
					commentCount.updateStr="president_commentsThumbsDown = president_commentsThumbsDown+1"
				

				break; 


			}
			

			
			updatethumbsUpDB(commentCount);
		}


		function addThumbEvent(){
				$(".thumbsC").each(function(){
						$("#vidthumbsDown").css({"color":"red"});
								$("#vidthumbsUp").css({"color":"#2c8820"});
						$(this).on("click",function(){
							if(global.navFunc=="LoggedOut"){
								alert("you must login")
							}else{

								
							
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


		function vidReplys(obj1,outClass,iDex){

	var classm1="issuesComments_inner";
		var replystrg="";
	var leng1=obj1.length;	
	for(w1=0;w1<leng1;w1++){
 		//strgo=strgo+"<div class='"+classm+"'  style='padding:10px;width:480px'><div style='float:left;width:95px;'><img src='"+obj[w].img+"' height='90' width='95' border='1' align='left'></div>"
		//strgo=strgo+"<div style='float:left;width:360px;'><div style='text-align:left;'>"
		//strgo=strgo+"<span style='font-weight:normal;display:inline-block;padding-left:8px;color:#000;'>"+obj[w].username+"</span>"
		//strgo=strgo+"</div>"
		//strgo=strgo+"<div style='width:300px;text-align:left;'>"
		//strgo=strgo+"<span style='color:#000;display:inline-block;padding-left:8px;'>"+obj[w].time+"</span>"
		//strgo=strgo+"</div><br>"
		//strgo=strgo+"<div style='width:300px;text-align:left;'>"
		//strgo=strgo+"<span style='display:inline-block;padding-left:8px;font-weight:bold;color:#000;'>Comment:</span>"
		//strgo=strgo+"</div><br>"
		//strgo=strgo+"<div style='clear:both;'></div>"
		//strgo=strgo+"<div style='width:450px;text-align:left;margin-top:15px;'>"
		//strgo=strgo+"<span style='font-weight:normal;font-size:13px;color:#000;'>"+obj[w].comment+"</span>"
		//strgo=strgo+"</div><div style='clear:both;'></div><br><div style='text-align:center;font-size:12px;text-decoration:underline;cursor:pointer;'>Reply</div></div>"
		



		replystrg=replystrg+"<div class='"+classm1+"'>"
			replystrg=replystrg+"<div class='titlebar' style='width:580px;'>"
				replystrg=replystrg+"<div style='float:left;'>"
					replystrg=replystrg+"<img src='"+obj1[w1].replyImg+"' height='70' width='65' />"
				replystrg=replystrg+"</div>"
				
				replystrg=replystrg+"<div style='float:left;padding-left:10px;'>"+obj1[w1].agape_commentsLastReply_username+"</div>"
				replystrg=replystrg+"<div style='float:right;padding-right:10px;'>"+obj1[w1].agape_reply_createdate+"</div>"
				replystrg=replystrg+"<div style='clear:both;'></div>"
				replystrg=replystrg+"<div style='margin-top:10px;'>"
					
					replystrg=replystrg+"<div style='width:600px;margin:auto;'>"+obj1[w1].agape_comments_Comment+"</div>"
				replystrg=replystrg+"</div>"
				
			replystrg=replystrg+"</div>"
			replystrg=replystrg+"<div id='rep"+w1+"_"+iDex+"' class='vidReplyButtonTo'>Reply</div>"
		replystrg=replystrg+"</div>"


		if(classm1=="issuesComments_inner"){
			classm1="issuesComments_inner_alt"
		}else{
			classm1="issuesComments_inner"
		}
	}
	



	return replystrg



}
		
	</script>