
var globalTools = new Objtools();
var global=globalTools.create();
var g=sessionStorage.getItem("global")

var threadTool = new ThreadWheel();

// gets sponsors and loads them to page
function getSponsors(){
	var sendObj={};
	sendObj.job="selectAll";
	sendObj.dbase="agape_sponsors";
	sendObj.kob=" limit 0,4";
	var ext=global.baseUrl
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
	if(typeof global!=null){
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
	$("#loginNavBox").hide();
	$("#loggedInBox").show();

	if(global.userObj.agape_profile_romanceAccount=="Active"){
    	$("#profileli").show();
    	$("#searchli").show();
  	}

}


function turnOffNav(){
	$(".LogI").each(function(){
		$(this).hide();
	})
	$("#loginNavBox").show();
	$("#loggedInBox").hide();
	$("#profileli").hide();
    $("#searchli").hide();
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




	function calcUsers(){
		var g=global.userListMax;
		var b=g/25
		b=parseInt(b)
		if(g%25>0){
			b=b+1;
		}
		var elem1=$("#listUsersOnlinePage")[0];
		TweenMax.to(elem1,.4,{css:{top:0}})
		if(global.userListCnt<b){
			global.userListCnt=parseInt(global.userListCnt)+1;
			getOnlineUsers(global.userListCnt)
		}else{
			getOnlineUsers(0)
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

function loadPageFormData(val){
	for(var key in val){
		if($("#"+key)){
			$("#"+key).val(val[key])
		}

		if(key=="agape_profile_opts" || key=="agape_profile_recreation"){
			

			var arr=$.parseJSON(val[key]);
			
			
			var indx=arr.length;

			for(var f=0;f<indx;f++){
				var id = arr[f]+"";
				id=id.replace(/ /g, "_");
				id = id.replace(/\./g,"");
				id = id.replace(/\!/g,"");
				id = id.replace(/\#/g,"");
				if($("#"+id)){
					$("#"+id).prop('checked',true);

				}
			}

			
		}





		
	}

}


class stateElem{
			constructor(typeO,stElem,cyElem,addChangeEffect,selectElem,param,param1,position,option,retFunc,addChangeEffect_city){
				this.Type=typeO;
				this.stateElem=stElem;
				this.cityElem=cyElem;
				this.param=param;
				this.param1=param1;
				this.addChangeEffect=addChangeEffect;
				this.position=position;
				this.option=option;
				this.cityObj={}
				this.addChangeEffect_city=addChangeEffect_city;
				this.selectElem=selectElem;
				this.retFunc=retFunc;
				_this=this
				this.getData();
			}
			getData(){

				switch(this.Type){
					case 'states':
						//Get states
						var stateObj={};
						stateObj.job="stateSelect_atomic";
						stateObj.dbase="states";
						var retFunc=function(dataStates){
							var  stateObj=globalTools.verify(dataStates);
							var leng=stateObj.returnObj.length;
							$("#"+_this.stateElem).empty();
							if(_this.selectElem=='true'){
								$("#"+_this.stateElem).append("<option value='Select' class='stateClass'>- Select -</option>");
							}
							for(var b=0;b<leng;b++){
								$("#"+_this.stateElem).append("<option value='"+stateObj.returnObj[b].state_full+"' class='stateClass'>"+stateObj.returnObj[b].state_full+"</option>");
							}
							_this.addOption()

							if(_this.addChangeEffect=="true"){
								$("#"+_this.stateElem).unbind("change").on("change",function(){
									
									var statev=$(this).val()+"";

									if(statev!="Select" && statev!="All"){
										
										_this.cityObj.job="citySelect_atomic";
										_this.cityObj.dbase="states";
										_this.cityObj.val=statev;
										var retFunc1=function(dataCities){
											var cityObj1=globalTools.verify(dataCities);
											var lengo2=cityObj1.returnObj.length;
											for(r=0;r<lengo2;r++){
												if(isNaN(cityObj1.returnObj[r].city)){
													
												}else{
													cityObj1.returnObj=globalTools.arrayTool(cityObj1.returnObj,"removeIndex",r,"none");
													r=-1;
													lengo2=cityObj1.returnObj.length;
													
												}
											}


											
											$("#"+_this.cityElem).empty();
											if(_this.selectElem=='true'){
												$("#"+_this.cityElem).append("<option value='Select'>- Select -</option>");
											}
											var lengo2=cityObj1.returnObj.length;
											for(r=0;r<lengo2;r++){
												$("#"+_this.cityElem).append("<option>"+cityObj1.returnObj[r].city+"</option>")
											}

											if(_this.addChangeEffect_city){
												$("#"+_this.cityElem).unbind("change").on("change",function(){
													_this.addChangeEffect_city();
												})

											}
											

										}
										ajaxCallPost(_this.cityObj,retFunc1);
									}else{
										//alert("select")
									}

									_this.addchangeFunction()
									if(statev=="All"){
										$("#"+_this.cityElem).prop("disabled", true)
									}else{
										$("#"+_this.cityElem).prop("disabled", false)
									}
								})

							}

						}
						ajaxCallPost(stateObj,retFunc);
					break;



					case 'statesFull':

						var stateObj={};
						stateObj.job="stateSelect_atomic";
						stateObj.dbase="states";
						var retFunc=function(dataStates){

							var stateObj=globalTools.verify(dataStates);
							var leng=stateObj.returnObj.length;
							var f=""
							for(var b=0;b<leng;b++){
								if(stateObj.returnObj[b].state_full==_this.param){
									f="selected";
								}
								$("#"+_this.stateElem).append("<option value='"+stateObj.returnObj[b].state_full+"' class='stateClass' "+f+">"+stateObj.returnObj[b].state_full+"</option>");
								f="";
							}
							_this.cityObj.job="citySelect_atomic";
							_this.cityObj.dbase="states";
							_this.cityObj.val=_this.param;
							var retFunc1=function(dataCities){


								var cityObj1=globalTools.verify(dataCities);
								var lengo2=cityObj1.returnObj.length;
								$("#"+_this.cityElem).empty();
								var f1=""
								for(var r=0;r<lengo2;r++){
									if(cityObj1.returnObj[r].city==_this.param1){
										f1="selected";
									}
									$("#"+_this.cityElem).append("<option "+f1+">"+cityObj1.returnObj[r].city+"</option>");
									f1="";
								}
							}
							ajaxCallPost(_this.cityObj,retFunc1);

							if(_this.addChangeEffect=="true"){
								$("#"+_this.stateElem).on("change",function(){
									
									var statev=$(this).val()+"";

									if(statev!="Select" && statev!="All"){
										
										_this.cityObj.job="citySelect_atomic";
										_this.cityObj.dbase="states";
										_this.cityObj.val=statev;
										var retFunc1=function(dataCities){
											var cityObj1=globalTools.verify(dataCities);
											var lengo2=cityObj1.returnObj.length;
											$("#"+_this.cityElem).empty();
											if(_this.selectElem=='true'){
												$("#"+_this.cityElem).append("<option value='Select'>- Select -</option>");
											}
											for(var r=0;r<lengo2;r++){
												$("#"+_this.cityElem).append("<option>"+cityObj1.returnObj[r].city+"</option>")
											}

										}
										ajaxCallPost(_this.cityObj,retFunc1);

									}else{
										//alert("select")
									}
								})

							}
						}
						ajaxCallPost(stateObj,retFunc);
					break;
				}
			}

			static getCites(state,elem,selector,returnFunc){
				switch(selector){
					default:
						var model2={};
						model2.job="atomic_selectAll";
						model2.dbase="states";
						model2.uID=global.userObj.agape_profile_memberID
						model2.ob="where state_full='"+state+"' order by city asc";
						model2.uniqueSQL=" distinct city";
						var funk=function(data){
							
							switch(elem){
								case 'none':
								break;

								default:
									var f=globalTools.verify(data);
						
									var gleng=f.returnObj.length;

									for(var k=0;k<gleng;k++){
										var t=f.returnObj[k].city
										if(isNaN(t)){
											$("#"+elem).append("<option value='"+f.returnObj[k].city+"'>"+f.returnObj[k].city+"</option>")
										}else{
											
										}
										
									}

									if(returnFunc){
										if(returnFunc!="none"){
											returnFunc();
										}

									}
						
									//$("#"+elem).append("<option value='"++"'>"++"</option>")
								break;
							}

							return data;

						}
						ajaxCallPost(model2,funk);
					break;

				}

				
			}


			addOption(){

				switch(_this.position){
					case 'prepend':
						$("#"+_this.stateElem).prepend(_this.option);

					break;

					case 'append':
						$("#"+_this.stateElem).append(_this.option);

					break;

				}
			}


			addchangeFunction(){
				if(_this.retFunc){
					_this.retFunc();
				}
			}

		}




		function lForms(){

			//Function for loading form fields as we as options
		  	for(var g=18;g<91;g++){
		    	$("#agape_profile_age").append("<option value="+g+">"+g+"</option>")
		  	}

			for(i=0;i<formObj.fields.length;i++){
				switch(formObj.fields[i].quesType){

					case 'select':
						if(formObj.fields[i].quesType=="select"){


							switch(formObj.fields[i].col){
								case 'agape_profile_height':
									for(var key in formObj.fields[i].quesParams){
										var hgt=parseInt(formObj.fields[i].quesParams[key]/12);
										var rd=parseInt(formObj.fields[i].quesParams[key]%12)
										hgt=hgt+"'"+rd;
										$("#"+formObj.fields[i].col).append("<option value="+formObj.fields[i].quesParams[key]+">"+hgt+"</option>")
									}

								break;

								case 'agape_partner_height':
									for(var key in formObj.fields[i].quesParams){
										var hgt=parseInt(formObj.fields[i].quesParams[key]/12);
										var rd=parseInt(formObj.fields[i].quesParams[key]%12)
										hgt=hgt+"'"+rd;
										$("#"+formObj.fields[i].col).append("<option value="+formObj.fields[i].quesParams[key]+">"+hgt+"</option>")
									}

								break;


								default:


									for(var key in formObj.fields[i].quesParams){
										$("#"+formObj.fields[i].col).append("<option>"+formObj.fields[i].quesParams[key]+"</option>")
									}

								break;

							}

						}
					

					break;


					case 'options':
						switch(formObj.fields[i].col){
							case 'agape_profile_opts':
								var idx=formObj.fields[i].quesParams.length;
								var strg="";
								

								
								for(var r=0;r<idx;r++){

									var id = formObj.fields[i].quesParams[r]+"";
									id=id.replace(/ /g, "_");
									id = id.replace(/\./g,"");
									id = id.replace(/\!/g,"");
									id = id.replace(/\#/g,"");
									strg=strg+"<span style='display:inline-block;width:120px;'>"+formObj.fields[i].quesParams[r]+"</span><span style='margin-right:7px;display:inline-block;'><input type='checkbox' id='"+id+"' class='profileOptions doNotSelect' value='"+formObj.fields[i].quesParams[r]+"' /></span>"
								}

								$("#agape_profile_opts").append(strg)

							break;

							case 'agape_profile_recreation':

								var idx=formObj.fields[i].quesParams.length;

								
								var strg="";
								for(var r=0;r<idx;r++){
									var id = formObj.fields[i].quesParams[r]+"";
									id=id.replace(/ /g, "_");
									id = id.replace(/\./g,"");
									id = id.replace(/\!/g,"");
									id = id.replace(/\#/g,"");
									strg=strg+"<span style='display:inline-block;width:120px;'>"+formObj.fields[i].quesParams[r]+"</span><span style='margin-right:7px;display:inline-block;'><input type='checkbox' id='"+id+"' class='profileRecreation doNotSelect' value='"+formObj.fields[i].quesParams[r]+"' /></span>"
								}

								$("#agape_profile_recreation").append(strg)
							break;


						}
						
					break;


					default:
					break

				}
			}


		}


		function ActivateRAevt(){
			console.log(global)

    $("#ActivateRA").unbind("click").click(function(){
        if($(this).is(":checked")){
          $("#profileli").show();
          $("#searchli").show();

          var mod1={}
          mod1.job="quickJamUpdate_full"
          mod1.dbase="agape_profile"
          mod1.param="agape_profile_memberID"
          mod1.vals=global.userObj.agape_profile_memberID;
          mod1.selFunc="selectFunc"
          mod1.kob=" where agape_profile_memberID="+mod1.vals
          mod1.obj={};
          mod1.obj.agape_profile_romanceAccount="Active";
          global.navSet.romance="on"
          var rFunk=function(datal){
            var user=globalTools.verify(datal);
            global.userObj=user.returnObj[0];
            globalTools.save()
          }
          ajaxCallPost(mod1,rFunk)
        }else{
         
          $("#profileli").hide();
          $("#searchli").hide();
          var mod1={}
          mod1.job="quickJamUpdate_full"
          mod1.dbase="agape_profile"
          mod1.param="agape_profile_memberID"
          mod1.vals=global.userObj.agape_profile_memberID;
           mod1.selFunc="selectFunc"
          mod1.kob=" where agape_profile_memberID="+mod1.vals
          mod1.obj={};
          mod1.obj.agape_profile_romanceAccount="InActive";
          global.navSet.romance="off"
          var rFunk=function(datal){
            var user=globalTools.verify(datal);
            global.userObj=user.returnObj[0];
            globalTools.save()
          }
          ajaxCallPost(mod1,rFunk)
        }
      })



  }



  	function getTime(dateVal,time,native)
    {
	
		var currentTime;
		var hours;
		var minutes;
		var mon;
		var day;
		var FullYear ;
		var presTime;
		
	
	
		var browserDetect=navigator.userAgent;
		var bd=browserDetect.search(/MSIE/i);	
		if(bd!=-1)
		{
			
			var firstBreak=dateVal.split(" ");		
			var ieObj=firstBreak[0].split("-");			
			day=parseInt(ieObj[2])
			mon=parseInt(ieObj[1])-1
			FullYear=ieObj[0];
			
			tme=firstBreak[1].split(":")
			
			minutes=parseInt(tme[1]);
			hours=parseInt(tme[0]);
		
					
		
		}

	
		bd=browserDetect.search(/Chrome/i);	
		if(bd!=-1)
		{
			currentTime = new Date(dateVal)
			hours = currentTime.getHours()
			minutes = currentTime.getMinutes()
			mon = currentTime.getMonth()
			day = currentTime.getDate()
			FullYear = currentTime.getFullYear();	
		}
		
		
		bd=browserDetect.search(/Firefox/i);	
		if(bd!=-1)
		{
		
		if(native!='Firefox'){
			var f=dateVal+""
			var format=f.split(" ");
			var tre=format[0]+""
			var formatedDate = tre.split("-");
			var newDateString= formatedDate[1]+"/"+formatedDate[2]+"/"+formatedDate[0]+" "+format[1]
		}else{
				var f=dateVal+""
				var format=f.split(" ");
			
			
				switch(format[1])
	       	{
			       case 'Jan':
			           mon = 1
			           break;
			       case 'Feb':
			           mon = 2
			           break;
			       case 'Mar':
			       mon = 3
			       break;

			       case 'Apr':
			       mon = 4
			       break;

			       case 'May':
			       mon = 5
			       break;

			       case 'Jun':
			       mon = 6
			       break;

			       case 'Jul':
			       mon = 7
			       break;

			       case 'Aug':
			       mon = 8
			       break;

			       case 'Sep':
			       mon = 9
			       break;

			       case  'Oct':
			       mon = 10
			       break;

			       case 'Nov':
			       mon = 11
			       break;

			       case 'Dec':
			       mon = 12
			       break;

	       	}
		
			var newDateString= mon+"/"+format[2]+"/"+format[3]+" "+format[4];
			
		}
	

		currentTime = new Date(newDateString);
		hours = currentTime.getHours()
		minutes = currentTime.getMinutes()
		mon = currentTime.getMonth()
		day = currentTime.getDate()
		FullYear = currentTime.getFullYear();	
		
	}

	mon=timeObj.fullMonthsName[mon];
	
    var suffix = "AM";	
	if(time=="true")
	{
    if (hours >= 12)
        {
            suffix = "PM";
            hours = hours - 12; 
        } 
		
		if (hours == 0)
        {
            hours = 12; 
        } 
			

		if (minutes < 10)
		{
			minutes = "0" + minutes
		} 	
	

		presTime=mon+" "+day+", "+FullYear+" "+hours+":"+minutes+" "+suffix;
		
	}
	else
	{
		presTime=mon+" "+day+", "+FullYear;

	}

    
    return presTime;
} 
