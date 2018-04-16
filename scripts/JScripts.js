var global={}

// gets sponsors and loads them to page
function getSponsors(){
	var sendObj={};
	sendObj.job="selectAll";
	sendObj.dbase="agape_sponsors";
	sendObj.kob=" limit 0,4";
	var ext=global.baseUrl
	ext="spitit"
	var funct1=function(data){
	 	datu=globalTools.verify(data);
	 	global.userObj.sponsorList=datu.returnObj;
	 	globalTools.save();
	 	loadSponsors(datu.returnObj,ext);
	}
	ajaxCallPost(sendObj,funct1);
}


function loadSponsors(datum,lead){
 	var cnt=datum.length;
 	var strg="";
 	for(var z=0;z<cnt;z++){
 		strg=strg+"<div class='col-sm-2'>";
      	strg=strg+"<div style='padding:4px;cursor:pointer;' id='sponsorImg"+z+"'><img src='"+datum[z].agape_sponsors_Image+"' style='height:50px;' /></div>"
    	strg=strg+"</div>";
 	}
 	$("#sponsorDiv").append(strg);

 	$("div[id^='sponsorImg']").each(function(){
 		$(this).on("click",function(){
 			//$('#homePageModal').modal('show');
 			var indx=$(this).attr("id")
 			indx=indx.substr(10)
 			window.open(datum[indx].agape_sponsors_URL);
 			//var appstring="<div style='float:left;height:80px;width:100px'>"+datum[indx].agape_sponsors_Image+"</div><div style='float:left;'>gfh dfg dfgh</div><div style='clear:both;'></div>"
 			//$("#innerModal").append(appstring)
 		})
 	})
 }


function ajaxCallPost(jsonObj,retFunc)
{			
	jsonObj.dataBase="agape";
	var f="AjaxCallPost.php";
	threadTool.connection.post_Obj(jsonObj,retFunc,f);
}


		/** thread queue   **/

		function ThreadWheel(){
			this.connection={};
			this.connection.status="open";
			this.connection.queue=[];
			_this=this;
			this.queue = [];
			this.connection.func="";
			this.connection.openQueue=function(){
				this.status="open";
				this.CompleteQueue;
			}
			this.connection.holdQueue=function(){
				this.status="hold";
			}
			this.connection.CompleteQueue=function(){

				if(this.queue.length>0){
					
					connection.post_Obj(this.queue[0].data,this.queue[0].retCall);
				}	this.queue.shift();
			}
			this.connection.post_Obj=function(dataM,ret,url){
				
				this.func=ret;
				this.datum=dataM;
				this.queue=[];
				switch(this.status)
				{

					case 'open':
						this.holdQueue;
						$.ajax({
						url:url,
							type:'POST',
							data:dataM,
							Funk:ret,
							openQueue:this.openQueue,
							success:function(data){
								this.openQueue();
								this.Funk(data);
							}
						})	
					break;


					case 'hold':
				
						var postObj={};
						postObj.data=dataM;
						postObj.retCall=ret;

						if(this.queue.length==0){
							this.queue[0]=postObj;
						}else{
							this.queue.push(postObj)
						}
						
					break;
				}
				

			}
		}


function Verifyuser(){
	var auth="true";
	if(typeof global==null){
		if(global.userObj){
			if(global.navFunc){
				if(global.navFunc=="LoggedIn"){
					auth="true";
					return auth;
				}else{
					auth="false";
					return auth;
				}
			}else{
				auth="false";
				return auth;
			}
		}else{
			auth="false";
			return auth;
		}
	}else{
		auth="false";
		return auth;
	}
}


function turnOnNav(){
	$(".LogI").each(function(){
		$(this).show();
	})
}


function turnOffNav(){
	$(".LogI").each(function(){
		$(this).hide();
	})
}

function login()
{
	var username=$('#username').val();
	var password=$('#password').val();
	if(username!="" && password!="")	
	{	
		$("#loginForm").attr("action","templates/logForm.php").submit();
	}
	else
	{				
		if(username=="")
		{
			$('#username').css('background-color','#cccccc');		
		}
		
		if(password=="")
		{
			$('#password').css('background-color','#cccccc');
		}	
	}

}



function getOnlineUsers(b1){


	var userOnline={}
	userOnline.job="selectAll"
	userOnline.dbase="agape_profile";
	userOnline.kob=" where agape_profile_onlineStatus='Online'  order by agape_profile_lastLogin desc limit "+b1+",25"
	userOnline.Getdetail="GetCount"
	userOnline.ob2="where agape_profile_onlineStatus='Online'";
	var ext=global.baseUrl;
	//userOnline.uID=global.userObj.agape_profile_memberID;
	var repFunk=function(data){
		var dataSet=globalTools.verify(data);


		if(dataSet.countR>0){
			$("#usersOnline").show();
			global.userListMax=dataSet.countR;
			$("#numUsersOnline").html(dataSet.countR);
			
			var indx=dataSet.returnObj.length;
			var sheet="<div>"
			for(b=0;b<indx;b++){
				var img=$.parseJSON(dataSet.returnObj[b].agape_profile_default_img)
				sheet=sheet+"<div class='onlineUserClass1' style='font-size:12px;font-family:arial;border-bottom:solid 1px #eee;color:#eee;'><div style='float:left;width:80px;'><div><img src='"+ext+"/"+img.defaultPic+"' style='height:60px;width:75px;' /></div></div>"
				sheet=sheet+"<div style='float:left;width:180px;padding-left:6px;'><div>"+dataSet.returnObj[b].agape_profile_username+"</div><div style='height:40px;'>"+dataSet.returnObj[b].agape_profile_city+", "+dataSet.returnObj[b].agape_profile_state+"</div><div id='vProfile"+b+"' style='text-decoration:underline;margin-bottom:2px;cursor:pointer;color:#35b7fe;'>visit profile</div></div><div style='clear:both;'></div></div>";
			}
			sheet=sheet+"</div>"
			$("#listUsersOnlinePage").empty().append(sheet);



			$("div[id^='vProfile']").each(function(){
				$(this).unbind("click").on("click",function(){

				if(global.navFunc){
					if(global.navFunc=="LoggedOut"){
						alert("must be logged in to preview profile")
					}else{
						/*var div1=document.getElementById("_lboxBackground");
						var div2=document.getElementById("_lBoxMainDiv");
						var indx=$(this).attr("id")+"";
						var idx1=indx.substr(8)
						var template={};
						var indx=0;
						global.module="messages";
						global.candidate.id=dataSet.returnObj[idx1].agape_profile_username;
						template.page="viewpro1_open.html";
						template.job="visitprofile";
						ingniteLightBox = new LightBox(div1,div2,template,indx)
						ingniteLightBox.lightBoxOn();*/

						$('#homePageModal').modal('show');
						var appstring="<div style='float:left;height:80px;width:100px'>"+datum[indx].agape_sponsors_Image+"</div><div style='float:left;'>gfh dfg dfgh</div><div style='clear:both;'></div>"
 						$("#innerModal").append(appstring)

					}


				}else{
					alert("must be logged in to preview profile")

				}

					
				})
			})


			$("#numUsersOnline").unbind("click").on("click",function(){
				var elem1=$("#usersOnline")[0]
				TweenMax.to(elem1,.4,{css:{height:"280px",},onComplete:function(){
					$("#userCloseButt").show();
				}})
				global.userListStatus="open"
				globalTools.save();
			})



			$("#userCloseButt").unbind("click").on("click",function(){
				var elem1=$("#usersOnline")[0]
				TweenMax.to(elem1,.4,{css:{height:"35px",},onComplete:function(){
					$("#userCloseButt").hide();
				}})
				global.userListStatus="close";
				globalTools.save();
			})

			$("#upArrowUsers").bind("click",function(){
				var free=$("#listUsersOnlinePage").position().top;
				var elem1=$("#listUsersOnlinePage")[0];
				if(free+200>=0){
					var nM=0;
					TweenMax.to(elem1,1,{css:{top:nM}

					})

				}else{
					var nM=free+200;
					TweenMax.to(elem1,1,{css:{top:nM}

					})

				}
			})
			//
		}else{
			//$("#messageNum").removeClass("navClickClass");
		}
	}
	ajaxCallPost(userOnline,repFunk);
}



function slideUsers(){

	var elem1=$("#listUsersOnlinePage")[0];
	var height1=$("#listUsersOnlinePage").height();
	var free=$("#listUsersOnlinePage").position().top;
	var nM=parseInt(free)-200;
	var slideCheck=(0-height1);
	if(nM<slideCheck){
		nM=0
		
	
		TweenMax.to(elem1,1,{css:{top:nM}

		})

	}else{
		var bCheck="no";
		$("#upArrowUsers").show();
		var f=nM;
		if((nM-200)<slideCheck){
			var t=nM-200
			var d=t-slideCheck;
			var e=nM-d;
			bCheck="yes"
			f=e;

		}

		if(bCheck=="no"){
			TweenMax.to(elem1,1,{css:{top:f}
				
			})

		}else{
			TweenMax.to(elem1,.4,{css:{top:f}}
			
			).pause(4,  calcUsers())
			$("#upArrowUsers").hide();
			bCheck="no"
		}
	}
}


function fademessg(elem,mess){
	elem.innerHTML=mess;
	TweenMax.to(elem,.5,{css:{opacity:1},onComplete:function(){
		TweenMax.to(elem,4,{css:{opacity:1},onComplete:function(){
			TweenMax.to(elem,.5,{css:{opacity:0}})
			}
		})
	}})
}
