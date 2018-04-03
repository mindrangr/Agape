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
		<div  id="proView" style="float:left;width:100%;height:500px;padding:4px;">	
			<!-- Begin View panel-->
			<div id="view" style="position:absolute;z-index:15;width:100%;">
				<br/>
				<div class="issueViewDiv">
					<div style="width:670px;margin:auto;color:#eee;font-family:arial;padding:8px;font-size:18px;text-align:center;background-color:#000;border-radius:4px 4px 0px 0px;border:solid 1px #222;">
						<div class='floatClass' style='padding-left:25px;'><img id='tUp' src="<?php echo $actual_base; ?>/images/thumbsUp.gif" height='16' class='ju basethumb' /></div><div id='thumbsUp' class='floatClass articleControls_green' style='margin-right:45px;'></div>
						<div class=' floatClass'><img id='tDown' src="<?php echo $actual_base; ?>/images/thumbsDown.gif" height='16' class='ju basethumb' /></div><div id='thumbsDown' class='floatClass articleControls_red' style="margin-right:45px;"></div><div class='floatClass' style='color:#eee;font-weight:bold;width:190px;text-align:left;'>Comments: <span id='people_issuesCommsCount'></span></div>
						<div class='repl floatClass' style='text-decoration:underline;cursor:pointer;'>Add comment</div><div style='clear:both;'></div>
					</div>	
					<div style="width:670px;margin:auto;color:#000;font-family:arial;padding:8px;font-size:18px;text-align:center;background-color:#eee;border-radius:0px 0px 7px 7px;border:solid 1px #222;height:520px;">
						<div id='presname' style="font-family:'Great Vibes';font-size:30px;"></div>
						<div id='immigrationTitle' style='font-size:24px;text-decoration:underline;' class='floatClass'></div><br/><br/>
						<div style='color:#000;text-align:left;height:200px;overflow:auto;'>
							<img id='presImg' src="" align='left'  style='padding:5px;height:125px;padding-right:10px;'/><span id='barrier'></span>
						</div>
						
						
						<div id='comms' style="width:670px;height:200px;margin-top:30px;overflow:auto;">

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


var glo=global.people_candidates.returnObj[global.peopleObj.index].peopleCandidate_issue_list[global.candidate.id];

//$(".lBoxMainDiv").addClass("issuesComments_gradient1")
global.lastNav='presidentWho.html';
globalTools.save();
$("#barrier").html(glo.president_issuesCommentData);
$("#immigrationTitle").html(glo.president_issuesTitle);
$("#thumbsUp").html(glo.people_issuesThumbsUp);
$("#thumbsDown").html(glo.people_issuesThumbsDown);
$("#people_issuesCommsCount").html(glo.people_issuesCommsCount);
$("#proView").css("height","625px");
$("#presname").html(glo.president_issuesLastComment_username);
var phot=$.parseJSON(global.people_candidates.returnObj[global.peopleObj.index].peopleCandidate_photos);
$("#presImg").attr("src",global.baseUrl+"/"+phot.Presidential1);

if(glo.people_issuesCommentDataResponse!="none" && glo.people_issuesCommentDataResponse!=""){
	//h=globalTools.stringClearBack(glo.president_issuesCommentDataResponse)


	$("#comms").empty()
	var t=$.parseJSON(glo.people_issuesCommentDataResponse)
	var ishlength=t.length
	var clss="issuesComments"
	for(v=0;v<ishlength;v++){

		var ext=globalTools.stringClearBack(t[v].comment);
		var stg="<div class='"+clss+"'style='padding:10px;'><div style='float:left;width:95px;'><img src='"+t[v].img+"' height='90' width='95' border='1' align='left' /></div><div style='float:left;width:360px;'><div style='text-align:left;'><span style='font-weight:bold;display:inline-block;padding-left:8px;'>"+t[v].username+"</span></div><div style='width:300px;text-align:left;'><span style='font-weight:bold;display:inline-block;padding-left:8px;'>"+t[v].time+"</span></div><br/><div style='width:300px;text-align:left;'><span style='display:inline-block;padding-left:8px;font-weight:bold;'>Comment:</span></div><br/></div><div style='width:460px;text-align:left;clear:both'><span style='font-weight:normal;font-size:13px;'>"+ext+"</span></div><div style='clear:both;'><br/></div><div id='reply"+v+"' class='commentReply' style='color:blue;font-size:10px;text-align:left;width:120px;text-decoration:underline;'>Reply to:</div><br/></div>"
			if(clss=="issuesComments"){
				clss="issuesComments_alt";
			}else{
				clss="issuesComments"
			}

			$("#comms").append(stg)

	}



	$(".commentReply").each(function(){
		$(this).on("click",function(){
			var repId=$(this).attr("id");
			repId=repId.substr(5);

			id=glo.president_issuesID;
			var div1=document.getElementById("_lboxBackground");
			var div2=document.getElementById("_lBoxMainDiv");
			var template={};
			template.page="createComment_peopleIssue.html";
			template.username=t[repId].username;
			template.time=t[repId].time;
			id=glo.president_issuesID;
			template.param=id;
			ingniteLightBox = new LightBox(div1,div2,template,id)
			ingniteLightBox.lightBoxOn();
			ingniteLightBox.lightBoxOff(div1,div2);
		})
	})


	
}



var testChk="false"

if(global.userObj.agape_vote_presidentialCandidates!="Not Answered" && global.userObj.agape_vote_presidentialCandidates!==undefined){

	var test=$.parseJSON(global.userObj.agape_vote_presidentialCandidates);
	var testleng=test.length;
	
	for(q=0;q<testleng;q++){

		if(test[q].votetype=="people_Issues_thumbs"){
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
			$(this).on("click",function(){
				thumbsUD={};
				thumbsUD.dbase="people_issues";
				thumbsUD.job="update_atomic";
				thumbsUD.obj={};
				thumbsUD.obj.vals="none"
				var t=$(this).attr("id")
				func=function(data){
					loadTemplate("mainLBHolder","peopleView.html");
					var addObj={}
					addObj.commentID=glo.president_issuesID;
					addObj.votetype="people_Issues_thumbs";
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
						thumbsUD.param="people_issuesThumbsUp"
						thumbsUD.vals=glo.president_issuesID;
						var inc=parseInt($("#thumbsUp").html());
						inc=inc+1;
						$("#thumbsUp").html(inc)


					break;

					case 'tDown':
						$(".ju").unbind("click");
						thumbsUD.param="people_issuesThumbsDown";
						thumbsUD.field=obj;
						thumbsUD.vals=glo.president_issuesID;
						$("#thumbsUp").removeClass("articleControls_green").addClass("articleControls_gray");
						$("#thumbsDown").removeClass("articleControls_red").addClass("articleControls_gray");

						var inc=parseInt($("#thumbsDown").html());
						inc=inc+1;
						$("#thumbsDown").html(inc)
					break;

				}

				ajaxCall3(thumbsUD,func);
			})
		})

	break;


}

$("#commentsLink").on("click",function(){
	alert("start")
})


$(".repl").on("click",function(){
	
	var div1=document.getElementById("_lboxBackground");
	var div2=document.getElementById("_lBoxMainDiv");
	var template={};
	template.page="createComment_peopleIssue.html";
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