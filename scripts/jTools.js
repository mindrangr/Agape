var Objtools=function(){
	_this=this;
	this.verifyChk="true";
	this.save=function(){
		var f=JSON.stringify(global);
		sessionStorage.setItem("global",f);
	}
	this.create=function(){
		var f;


		if(sessionStorage.getItem("global")!=null){
			f=$.parseJSON(sessionStorage.getItem("global"));
		
		}else{
			this.verifyChk="false"
			f={
				navFunc:"LoggedOut",
				navSet:{},
				userObj:{
					"advertiseCode":"none"
				},
				sendMessage:'true',
				dataHolder:{},
				stateObj:{},
				paginate:0,
				newsObj:0,
				candidate:{},
				searchQuery:"true",
				view:{},
				friendsObj:{},
				searchObj:{},
				comments:{},
				lastNav:"communityTemplate.php",
				fieldChk:{},
				messageBox:{},
				presObj:{},
				peopleObj:{},
				presidentialObj:{"peopleCandidate_ID":"none"},
				userListCnt:0,
				userListMax:0,
				userListStatus:"open",
				returnFunction_open:"none",
				returnFunction_close:"none",
				returnFunction_go:"true",
				sponsorList:"none",
				baseUrl:"/agape"
			};
		}


		var verif1=this.verifyUser();
		return f

	}

	this.getAdvertisements=function(obj){

	switch(obj){
		case 'Home':
			var mod={}
			mod.job='atomic_selectAll';
			mod.dbase="agape_advertisements";
			mod.ob=" where agape_advertisement_State='National'";
			var send
			/*switch(){

				case '':
				break;

				default:
				break;


			}*/

			var rFunk=function(datay){


				var o=globalTools.verify(datay);
		 		var h={}
		 		h.advertise=o;
		 		var longAds=[];
		 		var shortAds=[];
		 		var tank=tank1
		 		var adinx=h.advertise.countR;
		 		if(adinx>0){
		 			for(i=0;i<adinx;i++){
		 	
		 			var ter={};
		 			if(h.advertise.returnObj[i].agape_advertisement_Type=="2x2"){
		 				ter.agape_advertisement_Type=h.advertise.returnObj[i].agape_advertisement_Type;
		 				ter.agape_advertisement_Image=h.advertise.returnObj[i].agape_advertisement_Image;
		 				ter.agape_advertisement_Link=h.advertise.returnObj[i].agape_advertisement_Link;
		 				shortAds.push(ter)
		 			}else{
		 				ter.agape_advertisement_Type=h.advertise.returnObj[i].agape_advertisement_Type;
		 				ter.agape_advertisement_Image=h.advertise.returnObj[i].agape_advertisement_Image;
		 				ter.agape_advertisement_Link=h.advertise.returnObj[i].agape_advertisement_Link;
		 				longAds.push(ter)
			 			}

			 		}

			 		global.advertiseObj={};
			 	
			 		global.advertiseObj.advertisements_Long=longAds;
			 		global.advertiseObj.advertisements_Short=shortAds;
			 		
			 		global.advertiseObj.advertiseType=obj
			 		globalTools.save();
			 		globalTools.SetAdvertisements(global.advertiseObj);
			 		$("#adDiv").attr("src",global.baseUrl+"/advertiseImages/uload.gif");


		 		}else{
		 			alert("no advertisements")

			 			$("#adDiv").attr("src",global.baseUrl+"/advertiseImages/uload.gif");
			 		}
				}

				ajaxCallPost(mod,rFunk)
			break

			default:


				var b=global.userObj.agape_profile_advertiseCode+"";
				b=b.split("_");
			 	var g={};
			 	g.agape_advertisement_Gender=b[0];
			 	g.agape_advertisement_Race=b[1];
			 	g.agape_advertisement_Religion=b[2];
			 	g.agape_advertisement_Politics=b[3];
			 	g.agape_advertisement_Education=b[4];
			 	g.agape_advertisement_City=global.userObj.agape_profile_city;
			 	g.agape_advertisement_State=global.userObj.agape_profile_state;
			 	var mod = {}
			 	mod.job="getAdvertisements";
			 	mod.obj=g;
			 	var tank1=_this;
			 	var funk1=function(data){
			 		var o=globalTools.verify(data);
			 		var h={}
			 		h.advertise=o;
			 		var longAds=[];
			 		var shortAds=[];
			 		var tank=tank1
			 		var adinx=h.advertise.countR

			 		if(adinx>0){
			 			for(i=0;i<adinx;i++){
			 	
			 			var ter={};
			 			if(h.advertise.returnObj[i].agape_advertisement_Type=="2x2"){
			 				ter.agape_advertisement_Type=h.advertise.returnObj[i].agape_advertisement_Type;
			 				ter.agape_advertisement_Image=h.advertise.returnObj[i].agape_advertisement_Image;
			 				ter.agape_advertisement_Link=h.advertise.returnObj[i].agape_advertisement_Link;
			 				shortAds.push(ter)
			 			}else{
			 				ter.agape_advertisement_Type=h.advertise.returnObj[i].agape_advertisement_Type;
			 				ter.agape_advertisement_Image=h.advertise.returnObj[i].agape_advertisement_Image;
			 				ter.agape_advertisement_Link=h.advertise.returnObj[i].agape_advertisement_Link;
			 				longAds.push(ter)
				 			}

				 		}
					 		

				 		global.advertiseObj={};
				 		global.advertiseObj.advertisements_Long=longAds;
				 		global.advertiseObj.advertisements_Short=shortAds;
				 		global.advertiseObj.advertiseType=obj
				 		globalTools.save();
				 		globalTools.SetAdvertisements(global.advertiseObj);
			
				 		$("#adDiv").attr("src",global.baseUrl+"/advertiseImages/uload.gif");

			 		}else{
			 			//alert("no advertisements")

			 			$("#adDiv").attr("src",global.baseUrl+"/advertiseImages/uload.gif");
			 		}
			 		
			 	}
				 	ajaxCallMedia(mod,funk1);
				break;
			}
			
		}

		this.SetAdvertisements=function(val){

			var lgth=val.advertisements_Short.length;
				switch(val.advertiseType){
		 			case 'search':
		 				var Tsplt=Math.ceil(lgth/2)
		 			
		 				for(var e=0;e<16;e++){
		 					if(e<lgth){

			 					if(Tsplt>e){
			 						$("#AdvertiseRow0").append("<div style='cursor:pointer;' id='adverRow"+e+"'><img src='"+val.advertisements_Short[e].agape_advertisement_Image+"' width='145' style='margin-bottom:5px;'></div>")
			 					}else{
			 						$("#AdvertiseRow1").append("<div style='cursor:pointer;' id='adverRow"+e+"'><img src='"+val.advertisements_Short[e].agape_advertisement_Image+"' width='145' style='margin-bottom:5px;'></div>")
			 						$("#AdvertiseRowC").append("<div style='cursor:pointer;' id='adverRow"+e+"'><img src='"+val.advertisements_Short[e].agape_advertisement_Image+"' width='145' style='margin-bottom:5px;'></div>")
			 					}
		 					}
				 		}


				 		$("div[id^='adverRow']").each(function (){
				 			$(this).on('click',function(){
				 				var idx1=$(this).attr("id")+"";
				 				var idx=idx1.substr(8);
				 				if(val.advertisements_Short[idx].agape_advertisement_Link!='none'){
				 					window.open(val.advertisements_Short[idx].agape_advertisement_Link);
				 				}else{

				 				}
				 			
				 			})
				 		})
		 			break;


		 			case 'Home':

			 		

		 			break;
		 		}


		 		var lgth=val.advertisements_Long.length;
		 	
		 		if(lgth>0){

		 			var ol='<?php echo $actual_base ?>'
		 			$("#adDiv").attr("src",ol+"/"+val.advertisements_Long[lgth-1].agape_advertisement_Image);
		
		 		
		 			$("#adDiv").unbind("click").on("click",function(){
						window.open(val.advertisements_Long[lgth-1].agape_advertisement_Link);
					})
		 			adverBannerTimer(val.advertisements_Long);
		 		}else{
		 			$("#adDiv").attr("src",global.baseUrl+"/advertiseImages/uload.gif");
		 			$("#adDiv").unbind("click").on("click",function(){
						location.href="advertise";
					})
		 		}
		 		

		}


				
		this.verify=function(str){

			
			str=$.trim(str)+"";
			var var1=str.split("**");
			if(var1[0]=="true" || var1[0]=="updated"){
				return $.parseJSON(var1[1]);
				
			}
			if(var1[0]=="false"){
				var emptySet={};
				emptySet.returnObj="set empty";
				if(var1[2]=="No session"){
					logout();
				}
				console.log("set empty");
		
				return emptySet;
			}
		}
				
		this.arrayTool=function(elem,task,param,val){
			param=parseInt(param)
			switch(task){
				//removes value at index and returns array

				case 'removeIndex':

					var tre=elem;
					var fhalf=elem.slice(0,param)
					var shalf=elem.slice(param+1,tre.length);
					var total=fhalf.concat(shalf)
	
					return total;
				break;
				
				
				//adds value at index and returns array
				case 'addIndex':
					var fhalf=elem.slice(0,param);
					fhalf.push(val)
					var shalf=elem.slice(param,elem.length);
					var total=fhalf.concat(shalf);
					return total;
				break;
			}
		}
				
				
		this.stringClear = function(str){
			var t=$.trim(str)+"";
			t = t.replace(/'/g,"&#39;");
			t = t.replace(/"/g,"&#34;");
			
			t = t.replace(/</g,"&#60;");
			t = t.replace(/(\r\n|\n|\r)/g, "<br>");
			t = t.replace(/\u201c/g,"&ldquo;");
			t = t.replace(/\u201d/g,"&rdquo;");
			t = t.replace(/\u2019/g,"&rsquo;");
			t = t.replace(/\u2018/g,"&lsquo;");
			t = t.replace(/\*\*/g,"&#42;&#42;")
			//t = t.replace(/\//g,"&#47;");
			return t;
		}





		this.stringClearBack = function(str){
			var t=str+"";
			t = t.replace(/&#39;/g,"'");
			t = t.replace(/&#60;/g,"<");
			t = t.replace(/&quot;/g,"\"");
			t = t.replace(/&#13;/g,"\n");
			//t = t.replace(/&#47;/g,"\/");
			//t = t.replace(/\\/g,"");
			return t;
		}

		this.stringClearBackSlash = function(str){
			var t=str+"";
			t = t.replace(/&#39;/g,"'");
			t = t.replace(/&#47;/g,"\/");
			//t = t.replace(/\\/g,"");
			return t;
		}

		this.addslashes = function(str){
			var t=str+"";
			t = t.replace(/"/g,"\\\"");
			t = t.replace(/'/g,"\'");
			return t;
		}


		this.objectDataClone=function(oldObj,newObj){
			
			for(var key1 in newObj){
				if(newObj[key1]!=""){
					
					oldObj[key1]=newObj[key1];
				}
				
			}
			return oldObj
		}

		this.objectEmptyClone=function(oldObj,newObj){
			for(var key1 in newObj){
				if(newObj[key1]!=""){
					
					oldObj[key1]=newObj[key1];
				}
			}
			return oldObj
		}

		this.close=function(){
			global.userObj={}
			global.navFunc="LoggedOut";
			globalTools.save();
		}


		this.checkLogin=function(){

			if(global.navFunc=="LoggedIn"){
				return "true"
			}else{
				return "false"
			}
		}


		this.getNewUserObj=function(id,sFunc){
			var sendMod={}
			sendMod.job="atomic_selectAll";
			sendMod.dbase="agape_profile";
			sendMod.uID=global.userObj.agape_profile_memberID;
			sendMod.ob="where agape_profile_memberID="+id;
			var retF=function(data){

					
						

				var user=globalTools.verify(data);
		
				global.userObj=user.returnObj[0];
				globalTools.save();
				if(sFunc){
					sFunc();
				}
				
				
			}

			ajaxCallPost(sendMod,retF);
		}



		this.userProfileEdit=function(dbase,data,param,vals){

					var sendo={}
					sendo.job="quickJamUpdate_full";
					sendo.dbase=dbase;
					sendo.obj={};
					sendo.obj=data;
					sendo.param=param;
					sendo.vals=vals
					sendo.selFunc="selectFunc";
					sendo.kob="where "+param+"="+vals;

					var func=function(datal){
						global=globalTools.create();
						var updaObj=globalTools.verify(datal);
						global.userObj=updaObj.returnObj[0];
						globalTools.save();

					}
					ajaxCallPost(sendo,func)


				}

				this.verifyUser=function(){

					return this.verifyChk;
				
				}

			}
