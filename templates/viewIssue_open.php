<?php

include("../Config_files/_shared_config.php");
?>

<html>					
	<head>
		<script type="text/javascript">
		</script>

		<style>
			.newQuestionbLabels{
				width:150px;
			}
		</style>
	
	</head>
	<body bgcolor="#000000" style="
" >
		<div  id="proView" style="float:left;width:100%;height:705px;padding:4px;">	
			<!-- Begin View panel-->
			<div id="view" style="z-index:15;width:100%;">
				<br/>
				<div >
					<div style='width:776px;margin:auto;'>
						<div style="width:434px;margin:auto;color:#eee;font-family:arial;padding:8px;font-size:18px;text-align:center;background-color:#000;border-radius:4px 0px 0px 0px;border:solid 1px #222;float:left;">
							<div class='floatClass' style='padding-left:25px;'>
								<img id='tUp' src="<?php echo $actual_base ?>/images/thumbsUp.gif" height='16' class='ju basethumb' />
							</div>
							<div id='thumbsUp' class='floatClass articleControls_green' style='margin-right:45px;'></div>
							<div class=' floatClass'><img id='tDown' src="<?php echo $actual_base ?>/images/thumbsDown.gif" height='16' class='ju basethumb' /></div>
							<div id='thumbsDown' class='floatClass articleControls_red' style="margin-right:45px;"></div>
							<div class='floatClass' style='color:#eee;font-weight:bold;width:190px;text-align:left;'>Comments: <span id='president_issuesCommsCount'></span></div>


						</div>
						<div style='background-color:green;width:320px;float:right;border-radius:0px 4px 0px 0px;border:solid 1px #222;text-decoration:underline;cursor:pointer;padding-top:5px;' class='repl floatClass' >Add comment</div>	
						<div style='clear:both;'></div>
						
						
					</div>
					<div style="width:750px;margin:auto;color:#000;font-family:arial;padding:8px;font-size:18px;text-align:center;background-color:#eee;border-radius:0px 0px 7px 7px;border:solid 1px #222;height:570px;">
						<div id='presname' style="font-family:'Great Vibes';font-size:30px;"></div>
						<div id='immigrationTitle' style='font-size:24px;text-decoration:underline;' class='floatClass'></div><br/><br/>
						<div style='color:#000;text-align:left;max-height:240px;overflow:auto;'>
							<img id='presImg' src="<?php echo $actual_base ?>/images/president/donald.jpg" align='left'  style='padding:5px;height:125px;padding-right:10px;'/><span id='barrier'></span>
						</div>
						
						
						<div id='comms' style="width:690px;height:180px;margin-top:30px;overflow:auto;">

							<div id='commentsLink' style='cursor:pointer;'>Be the first to comment</div>
						
						</div>							
						<!-- End View panel-->
					</div>
				</div>
			</div>
		</div>		
	</body>
</html>
<script type="text/javascript" >

var glo=global.presObj.presidential_candidates[global.presObj.index].president_issues[global.candidate.id];
global.lastNav='presidentWho.html';
globalTools.save();
$(".lBoxMainDiv").addClass("bodyStyles_defaultGradient")
$("#barrier").html(glo.president_issuesCommentData);
$("#immigrationTitle").html(glo.president_issuesTitle);
$("#thumbsUp").html(glo.president_issuesThumbsUp);
$("#thumbsDown").html(glo.president_issuesThumbsDown);
$("#president_issuesCommsCount").html(glo.president_issuesCommsCount);
//$("#proView").css("height","625px");
$("#presname").html(glo.president_issuesCreator_Username);
var phot=$.parseJSON(global.presObj.presidential_candidates[global.presObj.index].president_photos);
$("#presImg").attr("src",global.baseUrl+"/"+phot.images[1].defaultImage);
$("#comms").empty();
if(glo.president_issuesCommentDataResponse!="none" && glo.president_issuesCommentDataResponse!=""){
	h=$.parseJSON(glo.president_issuesCommentDataResponse);
	var clss='issuesComments';
	var leng=h.length;
	for(b=0;b<leng;b++){
		img=global.baseUrl+"/"+h[b].img;
		var strg="<div class='"+clss+"' style='padding:10px;width:600px;'><div style='float:left;width:95px;'>"
	strg=strg+"<img src='"+img+"' height='90' width='95' border='1' align='left' /></div><div style='float:left;width:360px;'>"
	strg=strg+"<div style='text-align:left;'><span style='font-weight:bold;display:inline-block;padding-left:8px;'>"+h[b].username+"</span></div>"
	strg=strg+"<div style='width:300px;text-align:left;'><span style='font-weight:bold;display:inline-block;padding-left:8px;'>"+h[b].time+"</span></div><br/><div style='width:300px;text-align:left;'><span style='display:inline-block;padding-left:8px;font-weight:bold;'>Comment:</span></div>"
	strg=strg+"<br/></div><div style='clear:both;'></div><div style='width:550px;text-align:left;'><span style='font-weight:normal;font-size:13px;'>"+h[b].comment+"</span></div><div style='clear:both;'></div><br/><div style='text-align:center;font-size:12px;text-decoration:underline;cursor:pointer;'>Reply</div></div>"
	if(clss=="issuesComments"){
	clss="issuesComments_alt";
	}else{
		clss="issuesComments"
	}
	
		$("#comms").append(strg)
	}
}








var testChk="false"
if(global.userObj.agape_vote_presidentialCandidates!="Not Answered"){
	var test=$.parseJSON(global.userObj.agape_vote_presidentialCandidates);
	var testleng=test.length;
	
	for(q=0;q<testleng;q++){

		if(test[q].votetype=="presidential_Issues_thumbs"){
			if(test[q].commentID==glo.president_issuesID){
				testChk="true"
			}
		}

	}

}


switch(testChk){

	case 'true':
		$("#thumbsUp").removeClass("articleControls_green").addClass("articleControls_gray");
		$("#thumbsDown").removeClass("articleControls_red").addClass("articleControls_gray");

	break;

	case 'false':


		$(".ju").each(function(){
			$(this).unbind("click").on("click",function(){
				thumbsUD={};
				thumbsUD.dbase="president_issues";
				thumbsUD.job="update_atomic";
				thumbsUD.obj={};
				thumbsUD.obj.vals="none"
				var t=$(this).attr("id")
				func=function(data){
					//loadTemplate("mainLBHolder","viewIssue_open.html?new=true");




					var div1=document.getElementById("_lboxBackground");
					var div2=document.getElementById("_lBoxMainDiv");
					var template={};
					var indx=0;
					template.page="viewIssue_open.php?new=true";
					template.job="visitprofile";
					
					ingniteLightBox = new LightBox(div1,div2,template,indx)
					ingniteLightBox.lightBoxOn();



					var addObj={}
					addObj.commentID=glo.president_issuesID;
					addObj.votetype="presidential_Issues_thumbs";
					var cands=$.parseJSON(global.userObj.agape_vote_presidentialCandidates);
					cands.push(addObj)
					thumbsUD1={};
					thumbsUD1.dbase="agape_profile";
					thumbsUD1.job="update_atomic";
					thumbsUD1.vals=global.userObj.agape_profile_memberID;
					thumbsUD1.param="agape_profile_memberID";
					thumbsUD1.obj={};
					thumbsUD1.obj.agape_vote_presidentialCandidates=JSON.stringify(cands);
					global.userObj.agape_vote_presidentialCandidates=JSON.stringify(cands);
					globalTools.save();
					func1 = function(data1){

					}
					ajaxCallPost(thumbsUD1,func1);

				}
				switch(t){
					case 'tUp':
						$(".ju").unbind("click");
						$("#thumbsUp").removeClass("articleControls_green").addClass("articleControls_gray");
						$("#thumbsDown").removeClass("articleControls_red").addClass("articleControls_gray");
						thumbsUD.field=obj;
						thumbsUD.param="president_IssuesUpVotes"
						thumbsUD.vals=glo.president_issuesID;
						global.presObj.presidential_candidates[global.presObj.index].president_issues[global.candidate.id].president_issuesThumbsUp=parseInt(glo.president_issuesThumbsUp)+1

						$(".ju").unbind("click");

					break;

					case 'tDown':
						$(".ju").unbind("click");
						thumbsUD.param="president_IssuesDownVotes";
						thumbsUD.field=obj;
						thumbsUD.vals=glo.president_issuesID;
						global.presObj.presidential_candidates[global.presObj.index].president_issues[global.candidate.id].president_issuesThumbsDown=parseInt(glo.president_issuesThumbsDown)+1
						alert(global.presObj.presidential_candidates[global.presObj.index].president_issues[global.candidate.id].president_issuesThumbsDown)
						$("#thumbsUp").removeClass("articleControls_green").addClass("articleControls_gray");
						$("#thumbsDown").removeClass("articleControls_red").addClass("articleControls_gray");
					break;

				}
				globalTools.save();
				ajaxCall3(thumbsUD,func);
			})
		})

	break;


}

$("#commentsLink").on("click",function(){
	alert("start")
})


$(".repl").unbind("click").on("click",function(){
	var div1=document.getElementById("_lboxBackground");
	var div2=document.getElementById("_lBoxMainDiv");
	var template={};
	template.page="createComment_issue.html";
	template.job="visitprofile";
	id=glo.president_issuesID;
	template.param=id;
	ingniteLightBox = new LightBox(div1,div2,template,id)
	ingniteLightBox.lightBoxOn();
	ingniteLightBox.lightBoxOff(div1,div2);
}).on("mouseover",function(){
	$(this).css("color","red")
}).on("mouseout",function(){
	$(this).css("color","#fff")
})


	</script>