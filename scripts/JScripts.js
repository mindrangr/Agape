
var globalTools = new Objtools();
var global=globalTools.create();
var g=sessionStorage.getItem("global")


// Keeps track of pagination view
var control

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
			$("#numUsersOnline").html(dataSet.countMax);
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
	 						$("#innerModal").append(appstring);
						}

					}else{
						alert("must be logged in to preview profile");
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

		if(dateVal=="none"){
			dateVal= new Date();
		}
	
	
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


function convertNowToPhP(){
	var currentTime = new Date()
    var hours = currentTime.getHours()
    var minutes = currentTime.getMinutes()
    var mon = parseInt(currentTime.getMonth())+1;
    var day = currentTime.getDate()
    var FullYear = currentTime.getFullYear()
	
	if(parseInt(day)<10){
		day="0"+day;
	}
	
	if(parseInt(minutes)<10){
		minutes="0"+minutes;
	}
	
	if(parseInt(hours)<10){
		hours="0"+hours;
	}
	
	if(parseInt(mon)<10){
		mon="0"+mon;
	}
	presTime =FullYear +"-"+mon+"-"+day +" "+hours+":"+minutes+":00"
	return presTime;

}


var Base64 = {
// private property
_keyStr : "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",

// public method for encoding
encode : function (input) {
    var output = "";
    var chr1, chr2, chr3, enc1, enc2, enc3, enc4;
    var i = 0;

    input = Base64._utf8_encode(input);

    while (i < input.length) {

        chr1 = input.charCodeAt(i++);
        chr2 = input.charCodeAt(i++);
        chr3 = input.charCodeAt(i++);

        enc1 = chr1 >> 2;
        enc2 = ((chr1 & 3) << 4) | (chr2 >> 4);
        enc3 = ((chr2 & 15) << 2) | (chr3 >> 6);
        enc4 = chr3 & 63;

        if (isNaN(chr2)) {
            enc3 = enc4 = 64;
        } else if (isNaN(chr3)) {
            enc4 = 64;
        }

        output = output +
        Base64._keyStr.charAt(enc1) + Base64._keyStr.charAt(enc2) +
        Base64._keyStr.charAt(enc3) + Base64._keyStr.charAt(enc4);

    }

    return output;
},

// public method for decoding
decode : function (input) {
    var output = "";
    var chr1, chr2, chr3;
    var enc1, enc2, enc3, enc4;
    var i = 0;

    input = input.replace(/[^A-Za-z0-9\+\/\=]/g, "");

    while (i < input.length) {

        enc1 = Base64._keyStr.indexOf(input.charAt(i++));
        enc2 = Base64._keyStr.indexOf(input.charAt(i++));
        enc3 = Base64._keyStr.indexOf(input.charAt(i++));
        enc4 = Base64._keyStr.indexOf(input.charAt(i++));

        chr1 = (enc1 << 2) | (enc2 >> 4);
        chr2 = ((enc2 & 15) << 4) | (enc3 >> 2);
        chr3 = ((enc3 & 3) << 6) | enc4;

        output = output + String.fromCharCode(chr1);

        if (enc3 != 64) {
            output = output + String.fromCharCode(chr2);
        }
        if (enc4 != 64) {
            output = output + String.fromCharCode(chr3);
        }

    }

    output = Base64._utf8_decode(output);

    return output;

},

// private method for UTF-8 encoding
_utf8_encode : function (string) {
    string = string.replace(/\r\n/g,"\n");
    var utftext = "";

    for (var n = 0; n < string.length; n++) {

        var c = string.charCodeAt(n);

        if (c < 128) {
            utftext += String.fromCharCode(c);
        }
        else if((c > 127) && (c < 2048)) {
            utftext += String.fromCharCode((c >> 6) | 192);
            utftext += String.fromCharCode((c & 63) | 128);
        }
        else {
            utftext += String.fromCharCode((c >> 12) | 224);
            utftext += String.fromCharCode(((c >> 6) & 63) | 128);
            utftext += String.fromCharCode((c & 63) | 128);
        }

    }

    return utftext;
},

// private method for UTF-8 decoding
_utf8_decode : function (utftext) {
    var string = "";
    var i = 0;
    var c = c1 = c2 = 0;

    while ( i < utftext.length ) {

        c = utftext.charCodeAt(i);

        if (c < 128) {
            string += String.fromCharCode(c);
            i++;
        }
        else if((c > 191) && (c < 224)) {
            c2 = utftext.charCodeAt(i+1);
            string += String.fromCharCode(((c & 31) << 6) | (c2 & 63));
            i += 2;
        }
        else {
            c2 = utftext.charCodeAt(i+1);
            c3 = utftext.charCodeAt(i+2);
            string += String.fromCharCode(((c & 15) << 12) | ((c2 & 63) << 6) | (c3 & 63));
            i += 3;
        }

    }
    return string;
}
}



function getseconds(chk){


	switch(chk){

		case 1:
			var currentTime = new Date()
		    var hours = currentTime.getHours()
		    var minutes = currentTime.getMinutes()
		    var mon = currentTime.getMonth()
		    var day = currentTime.getDate()
		    var FullYear = currentTime.getFullYear();
		    var secs=currentTime.getUTCSeconds();
			var d = Date.UTC(FullYear, mon, day, hours, minutes, secs);
			return d;
		break;


		default:
			//var d = Date.UTC(2012, 02, 30);
			return 8;
		break;
	}

	


}



	mainPaginationVal=0;
	function mainPaginationFunc(elem,total,val){
		var pageNation=parseInt(total/25);
		if(total>pageNation*25){
			pageNation=pageNation+1;
		}
		
		$("#"+elem).empty();
		if(pageNation>35){
			pageNation=35
		}

		for(j=0;j<pageNation;j++)
		{
			recordunit=(mainPaginationVal*25)+(j+1);
			if(j==global.paginate){
				$("#"+elem).append("<li class='liStyles' id='"+"record"+j+"' onclick='pageMaster(this)'>"+recordunit+"</li>");
			}else{
				$("#"+elem).append("<li class='liStyles liStyles_over' id='"+"record"+j+"' onclick='pageMaster(this)'>"+recordunit+"</li>");
			}
		}


		/*$("#nextLog").unbind("click").on("click",function(){
			var gray=parseInt(global.paginate)+1
			var tell=$("#record"+gray);
			
			if(tell[0]!==undefined){
				pageMaster(tell[0])
			}else{
				
			}
		})*/
	}


		function pageMaster(obj){
			var idt=obj.id;

			var indx=parseInt(idt.substring(6));
			$("#messContainer").html("<div style='width:700px;text-align:center;'><img src='"+global.baseUrl+"/images/loading37.gif' height='185'/></div>")
		
			switch(control)
			{
				case 'messPagination':
				
					var h=$(obj).attr("id");
					var h1=h.substr(6);
					global.paginate=parseInt(h1);

					var lim=h1*25;
					  model={}
					  model.job="selectAll";
					  model.dbase="agape_messages";
					  model.Getdetail="GetCount"
					  model.ob2=" where agape_message_receiver_ID="+global.userObj.agape_profile_memberID+" or  agape_message_sender_ID="+global.userObj.agape_profile_memberID+" order by agape_message_update desc";
					  model.kob=" where agape_message_receiver_ID="+global.userObj.agape_profile_memberID+" or  agape_message_sender_ID="+global.userObj.agape_profile_memberID+" order by agape_message_update desc limit "+lim+",25";

					  var modFunk1=function(data){
					  var b=globalTools.verify(data)
					  var mess=globalTools.verify(data)
					  obj=globalTools.verify(data);
					  displayRecs(obj)

					}
					ajaxCallPost(model,modFunk1);


					//global.paginate
					
				break;

				case 'searchPagePagin':
					var h=$(obj).attr("id");
					var h1=h.substr(6);
					global.paginate=parseInt(h1);

					f25Searches(h1);

				break;

			}

		}




		function questionBuilder(StyleObj){
	
/** submit model function begins  **/
/** This function creates the poll and submits the answers to the database  **/
	var _this=this;
	//this.questionReplyObj={};
	this.fieldstyle={
		"float":"left",
		"width":"80px",
		"background-color":"gray",
		"position":"relative",
		"margin-bottom":"1px"
	}

	this.chartstyle={};



	if(StyleObj!==undefined){
		for(key1 in StyleObj){
			for(key2 in this.fieldstyle){
				if(key1==key2){
					if(StyleObj[key1]!=""){
						this.fieldstyle[key2]=StyleObj[key1];
					}
				}
			}

		}
		if(StyleObj.chartSlider){
			this.chartstyle=StyleObj.chartSlider;

		}
	}



	this.qReplyObj="";
	this.createPoll=function(quesObjs,title,holder,id,chartID){
		console.log(990099)
		console.log(quesObjs)
		console.log(990099)
		$("#"+title).html(quesObjs.returnObj[0].question_Core);
		var tr=$.parseJSON(quesObjs.returnObj[0].question_type);
		this.chartID=chartID;
		this.questionReplyObj={};
		this.manualModel={};
		switch(tr.type){
			case "radio":
				var er=$.parseJSON(quesObjs.returnObj[0].question_reply);
				var leng=er.answers.length;
				this.questionReplyObj=$.parseJSON(quesObjs.returnObj[0].question_reply);

				var is="submitPoll"+quesObjs.returnObj[0].question_ID;
				var im="Polls"+quesObjs.returnObj[0].question_ID;
				str="<div>";

				
				var design=this.makestyle(this.fieldstyle);
			
				for(c=0;c<leng;c++){
					
					str=str+"<div style='margin-bottom:12px;'><div style='float:left;width:265px;font-size:12px;'><input type='radio' id='"+im+"' name='"+im+"' value='"+er.answers[c].param1+"'></input><span>"+er.answers[c].param1+"</span></div>";
					str=str+"<div id='"+this.chartID+""+c+"' style='"+design+"'></div><div style='float:left;width:25px;color:yellow;font-size:12px;margin-left:6px;display:none;'></div>";
					str=str+"<div style='clear:both;'></div></div>";
				}
				str=str+"</div>";
				str=str+"<div id='Button"+this.chartID+"' style='margin:auto;margin-top:25px;'><div class='optButtons1' id='"+is+"' style='float:none;margin-bottom:15px;'>Submit</div></div>";
				$("#"+holder).append(str);
				var stubby=this.questionReplyObj;
				_this.manualModel={};
				_this.manualModel.qReplyObj=stubby;
				var param3=chartID;

				_this.manualModel.chID=chartID;
				$("#"+is).on("click",function(){
					//var ted=questionReplyObj

				if(global.navFunc!="loggedOut"){


					var mod=$("input:radio[id="+im+"]:checked").val();
					if(mod==undefined){
					
					}else{
						//Inserting answer into table
						model={};
						model.job="quickInsertAtomic";
						model.dbase="agape_answers";
						model.key="false";
						model.obj={};
						model.obj.agape_answers_gender=global.userObj.agape_profile_gender;
						model.obj.agape_answers_answer=globalTools.stringClear(mod);
						model.obj.agape_answers_age=global.userObj.agape_profile_age;
						model.obj.agape_answers_religion=global.userObj.agape_profile_religion;
						model.obj.agape_answers_city=global.userObj.agape_profile_city;
						model.obj.agape_answers_state=global.userObj.agape_profile_state;
						model.obj.agape_answers_race=global.userObj.agape_profile_race;
						model.obj.agape_answers_Question_ID=quesObjs.returnObj[0].question_ID;
						model.obj.agape_answers_income=global.userObj.agape_profile_salary;
						model.obj.agape_answers_politics=global.userObj.agape_profile_political;
						model.obj.agape_answers_education=global.userObj.agape_profile_education;
						model.obj.agape_answers_nation=global.userObj.agape_profile_nation;
						
						var qReplyObj=stubby;
						var chID1=param3;

						var chID=chID1;
						var qIdd=qReplyObj;
						var __this=_this
						model.obj.agape_answers_created=convertNowToPhP()

						func=function(data){
								//updating the vote count in the questions database
								model1={};
								model1.job="updateVoteCount";
								model1.QID=quesObjs.returnObj[0].question_ID;
								model1.addedname=globalTools.stringClear(mod);
								model1.chID=chID;
								model1.qReplyObj=qIdd;
								var func1=function(data1){
									model2=model1;
									__this.manualGenerateChart(model2.QID);

									//update the profile presidential_poll record
									this.formula=model2;
									recPollObj={};
									recPollObj.pollType="poll";
									recPollObj.id=model2.QID;
									if(global.userObj.agape_vote_recordPolls=="Not Answered"){
										global.userObj.agape_vote_recordPolls=[];
										global.userObj.agape_vote_recordPolls.push(recPollObj)
									}else{
										global.userObj.agape_vote_recordPolls= $.parseJSON(global.userObj.agape_vote_recordPolls);
										global.userObj.agape_vote_recordPolls.push(recPollObj);
									}
									global.userObj.agape_vote_recordPolls=JSON.stringify(global.userObj.agape_vote_recordPolls);
									globalTools.save();
									model3={};
									model3.job="update_atomic"
									model3.param="agape_vote_recordPollsUpdate";
									model3.dbase="agape_profile";
									model3.obj={};
									model3.obj.agape_profile_memberID="agape_profile_memberID"
									model3.vals=global.userObj.agape_profile_memberID;
									model3.param1=global.userObj.agape_vote_recordPolls;
									func2=function(data2){
									}
									ajaxCallPost(model3,func2)
									//agape_vote_recordPolls

								}
								ajaxCallQues(model1,func1)
							}
							ajaxCallQues(model,func);
					}
				}else{
					alert("You must login to take polls.")
				}
				})
			break;


			case '':
			break;

		}
	}
	/** End of submitModel function **/




	this.makestyle=function(styleObj){
		styleString="";
		for(key in styleObj){
				if(key!="color"){
				styleString=styleString+key+":"+styleObj[key]+";"
			}
		}
		styleString=styleString+"color:"+styleObj['background-color']+";text-align:left;"
		return styleString;
	}







	/** get chart range begins here **/

	this.getChartRanges=function(param){

		leng1=param.qReplyObj.answers.length;
		var val=0;
		var wed=0;
		for(d=0;d<leng1;d++){
			if(wed<param.qReplyObj.answers[d].count){
				wed=param.qReplyObj.answers[d].count;
			}
		}
		var range=10;
		if(wed>10 && wed<=25){
			range=25;
		}
		if(wed>25 && wed<=50){
			range=50;
		}
		if(wed>50 && wed<=100){
			range=100;
		}
		if(wed>100 && wed<=250){
			range=250;
		}
		if(wed>250 && wed<=500){
			range=500;
		}
		if(wed>500 && wed<=1000){
			range=1000;
		}
		if(wed>1000 && wed<=2500){
			range=2500;
		}
		if(wed>2500 && wed<=5000){
			range=5000;
		}
		if(wed>5000 && wed<=10000){
			range=10000;
		}
		if(wed>10000 && wed<=25000){
			range=25000;
		}

		if(wed>25000 && wed<=50000){
			range=50000;
		}
		
		return range;

	}

	/** get chart range ends here **/


	/** generate chart begins here **/




	/** generate chart end here **/



	this.manualGenerateChart=function(alt){

		/* Random Poll  begin*/

		var qb1
		var quesObj1={};
		quesObj1.job="quickSelect_atomic"
		quesObj1.dbase="questions";
		quesObj1.param="question_ID";
		quesObj1.start=0;
		quesObj1.value=alt
		var cStyle=_this.chartstyle;
		func22=function(data){
			var data1=globalTools.verify(data);
			var freedom=data1.returnObj[0].question_reply;
			freedom=$.parseJSON(freedom);
			ob1={};
			ob1.chID=alt;
			ob1.qReplyObj=freedom;
			alt=ob1;
		
		var rangeGC=_this.getChartRanges(alt);
		cnt=0;
		var gChartLength=alt.qReplyObj.answers.length;
		for(z=0;z<gChartLength;z++){
			cnt=cnt+alt.qReplyObj.answers[z].count
		}

		var styO={
			"position":"relative",
			"z-index":10,
			"background-color":"blue",
			"width":"0px",
			"color":"#000",
			"text-align":"center",
		}
		var stylee=cStyle


		if(stylee!==undefined){
			for(key1 in stylee){
				for(key2 in styO){
					if(key1==key2){
						if(stylee[key1]!=""){
							styO[key2]=stylee[key1];
						}
					}
				}

			}
		}

		
		for(z=0;z<gChartLength;z++){
			var perc=(parseFloat(alt.qReplyObj.answers[z].count)/rangeGC)*100;
			if(perc<1){
				perc=1;
			}

			styO.width=perc+"%";
			var keyString=_this.makestyle(styO)
			var tot=alt.qReplyObj.answers[z].count/cnt;
			tot=parseInt(tot*100);
			tot=tot+"%";
			$("#"+alt.chID+""+z).append("<div style='"+keyString+";'><img src='images/invisible.png' height=1 style='visibility:hidden;' /></div><div style='position:absolute;color:lime;z-index:11;left:0px;top:0px;width:80px;'><div style='margin:auto;width:100%;text-align:center;color:"+styO.color+";font-size:12px;'>"+alt.qReplyObj.answers[z].count+"</div></div>");
			$("#"+alt.chID+""+z).next().html(tot).css("display","block")
			$("#"+alt.chID+""+z).prev().children().eq(0).css("display","none");
			$("#"+alt.chID+""+z).prev().css("width","135px")

		}
		//	question_answerCount
		$("#Button"+alt.chID).html("<div style='color:lime;font-size:12px;margin-bottom:10px;'> Total votes: "+cnt+"</div><div>Thanks for taking our Poll.</div>")









	}
	ajaxCallQues(quesObj1,func22);
	/* Random Poll  Ends*/



	}

	this.pollVerify=function(num,mb){
		if(global.userObj.agape_vote_recordPolls!==undefined){
			if(global.userObj.agape_vote_recordPolls!="Not Answered"){
				var pollO=$.parseJSON(global.userObj.agape_vote_recordPolls);
				pollOLeng=pollO.length;
				for(y=0;y<pollOLeng;y++){

					if(pollO[y].id==num){
						mb.manualGenerateChart(num)
					}
				}
			}
		}
	}


}

