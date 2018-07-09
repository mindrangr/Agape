var cityObj="";
var control="getMessages";
var ControllerIdx=0;
function preloadMages(){
	var images = new Array()
	for (i = 0; i < arguments.length; i++) {
		images[i] = new Image();

		images[i].src =arguments[i];

	}
}



function populateForm()
		{
		
			for(var j in window.userObj)
			{		
				if(!document.getElementById(j))
				{	
					
				}
				else 
				{			
					
					if(document.getElementById(j).tagName=='INPUT' && j!='agape_profile_opts' && j!='agape_profile_opts_partner')
					{
						document.getElementById(j).value=window.userObj[j]+" ";
					}
					
					if(document.getElementById(j).tagName=='SELECT' && j!='agape_profile_opts' && j!='agape_profile_opts_partner')
					{
						for(y=0;y<document.getElementById(j).options.length;y++)
						{
					
							if(document.getElementById(j).options[y].value==window.userObj[j])
							{
								$(document.getElementById(j).options[y]).attr("selected", "selected");
							}					
						}
						
						if(j=='agape_profile_state')
						{
							cityFiller1(document.getElementById('agape_profile_state'),'agape_profile_city');
						}
						
					}
					
						
					if(j=='agape_profile_opts' && window.userObj['agape_profile_opts']!='Not Answered')
					{	
						opt=window.userObj['agape_profile_opts'];
						opts=opt.split("$$");	
						var b1=opts.length;
						for(k1=0;k1<b1;k1++)
						{					
							
							var strg="agape_profile_opts"+opts[k1]
							if(document.getElementById(strg))
							{
								
								document.getElementById(strg).checked='checked';
							}
								
						}
					}
					

					
					
					if(j=='agape_profile_opts_partner' && window.userObj['agape_profile_opts_partner']!='Not Answered')
					{	
						opt=window.userObj['agape_profile_opts_partner'];
						opts=opt.split("$$");	
						var b1=opts.length;
						for(k1=0;k1<b1;k1++)
						{			
							var strg="agape_profile_opts_partner"+opts[k1]
							if(document.getElementById(strg))
							{
								
								document.getElementById(strg).checked='checked';
							}
								
						}
					}
				}		
			}
		}




		function getAgeJavaSct_php(mysqlBirthdate)
		{		
			
			mySql=mysqlBirthdate.split("-");
			mySqlYear=mySql[0];
			mySqlMonth=mySql[1];
			mySqlDay=mySql[2];
			
			
			var tim=new Date();
			var days=tim.getDate()
			var years = tim.getFullYear()
			var age;
			mysD=mySqlDay.split(" ");
			var daymatch="smaller";
			if(parseInt(mysD[0])<=parseInt(days))
			{
				daymatch="bigger";
			}
			
			
			if(parseInt(mySqlMonth)<parseInt(tim.getMonth())+1)
			{
				age=parseInt(tim.getFullYear()) - parseInt(mySqlYear);
			}
			
			
			if(parseInt(mySqlMonth)==parseInt(tim.getMonth())+1 && daymatch=='bigger')
			{
				age=parseInt(tim.getFullYear()) - parseInt(mySqlYear);
			}
			
			if(parseInt(mySqlMonth)==parseInt(tim.getMonth())+1 && daymatch=='smaller')
			{
				age=parseInt(tim.getFullYear()) - parseInt(mySqlYear)-1;
			}		
			
			
			if(parseInt(mySqlMonth)>parseInt(tim.getMonth())+1 )
			{
				age=parseInt(tim.getFullYear()) - parseInt(mySqlYear);			
			}
			
			return age;		
		}



function loginReturn(data)
		{
			alert("gypsy")
			data=$.trim(data);	
			dChk=data.split("**");
			if(dChk[0]=='false')
			{
				document.getElementById('badpasslink').style.display='block';
			}
			
			if(dChk[0]=='true')
			{		
				
				if(typeof(Storage)!=="undefined")
				{				
					window.userObj=$.parseJSON(dChk[1]);
					global.userObj=$.parseJSON(dChk[1]);
					setStorage('user',dChk[1]);					
					setStorage('login','true');
					var title=document.URL;
					log=sessionStorage.getItem('login');	
					var intent=window.userObj.agape_profile_intentions;
					quesObject.buildList(intent);
											
				}
				else
				{
					alert('You must upgrade your browser to access this website');
				}
			}
			
		}


	function buttonMouseOver(obj,color,par,img)
	{
		obj.style.backgroundColor=color;
		if(img!==undefined){
			$val=$(obj).children().eq(0);
			
			$val.attr("src",img);
		}
	}


	function turnOnNav(){
		$("#loginPanel").css("display","none");

		$("#Register").css("display","none");
		$("#messagesNav").css("display","block");
		//$("#Profile").css("display","block");
		$("#FriendsNav").css("display","block");
		$("#accountNav").css("display","block");
		//$("#Search").css("display","block");
		if(global.userObj.agape_profile_romanceAccount=="Active"){
			$("#Profile").css("display","block");
			$("#Search").css("display","block");
		}

		if(global.userObj.agape_profile_commercial_Account=="True"){
			$("#commercialUs").show();
		}
		$(".newNav2").each(function(){
			$(this).removeClass("newNav2_on")
		})
		$("#listedUname").html(global.userObj.agape_profile_username)
		$("#logBoard").css("display","block");
		switch(global.lastNav){

			case 'friend':
			
				//$("#Friends").addClass("newNav2_on")
			break;

			case 'messages.html':
			
				//$("#messagesNav").addClass("newNav2_on")
			break;

			case 'communityTemplate.html':
			
				$("#Community").addClass("newNav2_on")
			break;


			case 'accountTemplate.html':
			
				//$("#Account").addClass("newNav2_on")
			break;

			case 'profilepage.html':
			
				$("#Profile").addClass("newNav2_on")
			break;

			case 'FriendTemplate.html':
			
				//$("#Friends").addClass("newNav2_on")
			break;


		}

		
	}



		function ajaxCall(jsonObj,retFunc)
		{			
			
			$.ajax({
				url:'AjaxPage1.php',
				type:'GET',
				data:jsonObj,
				success:retFunc
			})		
		}
		


		

		function ajaxCallPost(jsonObj,retFunc)
		{			
			jsonObj.dataBase="agape";
			var f=global.baseUrl+"/AjaxPage1_POST.php"
			threadTool.connection.post_Obj(jsonObj,retFunc,f)
				
		}
		
		function ajaxCall3(jsonObj,retFunc)
		{			
			jsonObj.dataBase="agape_politics";
			threadTool.connection.post_Obj(jsonObj,retFunc,global.baseUrl+"/AjaxPage1_POST.php")
		}

		function ajaxCallMedia(jsonObj,retFunc)
		{			
			jsonObj.dataBase="agape";
			threadTool.connection.post_Obj(jsonObj,retFunc,global.baseUrl+"/AjaxPage1_POST.php")
		}

		/**function ajaxCallQues(jsonObj,retFunc)
		{			
			jsonObj.dataBase="questions";
			threadTool.connection.post_Obj(jsonObj,retFunc,global.baseUrl+"/AjaxPage1_POST.php")
		}**/

		function ajaxCallStates(jsonObj,retFunc)
		{			
			jsonObj.dataBase="states";
			threadTool.connection.post_Obj(jsonObj,retFunc,global.baseUrl+"/AjaxPage1_POST.php")
		}

		function ajaxCall2(jsonObj,retFunc)
		{			
			
			$.ajax({
				url:global.baseUrl+"/AjaxPage2.php",
				type:'GET',
				data:jsonObj,
				success:retFunc
			})		
		}
		


			function getFrRequest(start)
		{			
			obj={};
			obj.job='getFrRequest',
			obj.par=window.userObj['agape_profile_username'];
			obj.start=start;
			
			func=function(data){parseFrRequest(data)};	
			ajaxCall(obj,func)			
		}


		function logout()
		{
			require(['modules/logout'],function(log){
				log.logOut();			
			})
		}
		
		
		function setStorage(unit,val)
		{	
			switch(unit)
			{
				case 'user':
					window.sessionStorage.setItem('user', val);
				break;
				
				case 'login':
					window.sessionStorage.setItem('login', val);
				break;

				case 'messages':
					window.sessionStorage.setItem('messages', val);
				break;

				case 'messages_sent':
					window.sessionStorage.setItem('messages_sent', val);
				break;
			}
		}
		
		function getRandomizer()
		{
			var rand=Math.floor((Math.random()*1000)+1); 
			return rand;		
		}
		


		mainPaginationVal=0;
		function paginationFunc(elem,total,val){
			
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

			$("#nextLog").unbind("click").on("click",function(){
				var gray=parseInt(global.paginate)+1
				var tell=$("#record"+gray);
				
				if(tell[0]!==undefined){
					pageMaster(tell[0])
				}else{
					
				}
			})

		}

		function pageMaster(obj){
			var idt=obj.id;
			var indx=parseInt(idt.substring(6));
			$("#messContainer").html("<div style='width:700px;text-align:center;'><img src='"+global.baseUrl+"/images/loading37.gif' height='185'/></div>")
		
			switch(control)
			{
				case 'getMessages':
				
					getMessages(indx);
					
					
				break;
				
				case 'getFriends':
			
					require(['modules/getFrRequest'],function(friends)
					{
						friends.getFriends(indx);
					
						global.paginate=indx;
					});
				break;

				case 'getFriendsRequest':
			
					require(['modules/getFrRequest'],function(friends)
					{
						friends.getFrRequest(indx);
					
						global.paginate=indx;
					});
				break;
				
			
				case 'getMessages_sent':
					getMessages_sent(indx);
				break;
				
				case 'search_results':
			
					limchex=indx*25
					global.paginate=indx;
					//

					var ui={};
					ui.job="contactsearch_set";
					ui.sql=global.searchQuery;
					ui.initRec=indx;

					var frunk=function(data){
						var b=data+"";
						var b1=b.split("**")
						

						var ty=globalTools.verify(data)
						ty.sql=b1[2];

						loadSearchRecs(ty)
						
			
					}
					ajaxCallPost(ui,frunk)
					
					
				break;
			}

			
		
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








	

	function citySelFiller(obj,cityElement)
		{			
			
	
			
			var cities=obj.split("$$")
			document.submitForm1[cityElement].options.length = 0;
			var option1 = document.createElement("option"); 
			option1.text = "Select one"; 
			option1.value = "Select"; 
			var select1 = document.getElementById(cityElement); 
			select1.appendChild(option1); 
			
			for(b=0;b<cities.length;b++)
			{				
				var option = document.createElement("option"); 
				option.text = cities[b];
				option.value = cities[b]; 
				if(typeof window.userObj !='undefined' )
				{
					if(window.userObj['agape_profile_city']==cities[b])
					{
						option.setAttribute("selected","selected")
					}				
				}
				var select = document.getElementById(cityElement); 
				select.appendChild(option); 							
			}
		}	
		

		
		
		function cityFiller1(state,cityElement)
		{
			var rand = "getRandomizer()";			
			$.get("AjaxPage1.php",{job:'cityFiller',state:state,random:rand},function(data){citySelFiller(data,cityElement)})
		}		
		
		
		
		

		

		
		function getMessages_sent(start)
		{				
			
			obj={};
			
			obj.job='getMessages_sent';
			obj.par=global.userObj['agape_profile_username'];
			obj.memberID=global.userObj['agape_profile_memberID'];
			obj.start=start;
			global.paginate=start;
			var func=function(data){parseMessages_sent(data);};
			
			
			ajaxCall(obj,func)			
		}
		
		
		
		
		var newUnit=0
		function getMessages(start)
		{	
			obj={};
			obj.job="getMessages";
			obj.memberID=global.userObj.agape_profile_memberID;
			obj.start=start;
			global.paginate=start;
			obj.type="AJAX";
			//var success=function(data){parseMessages(data)};
			
			func=function(data){parseMessages(data)};	
			ajaxCall(obj,func);	
			newUnit=start;
			//$.get("AjaxPage1.php",{job:'getMessages',memberID:window.userObj['agape_profile_memberID'],start:start},function(data){parseMessages(data)});
		}
		

function MessageCaller(start,direction){

	var messageObj={}
	var firstPoint=start*25;
	messageObj.job="atomic_selectAll";
	messageObj.dbase="agape_messages";
	messageObj.Getdetail="GetCount"
	if(direction=="received"){
		messageObj.ob=" where agape_message_receiver_ID="+global.userObj.agape_profile_memberID+" and agape_message_active='true' order by agape_message_update desc limit "+firstPoint+",25";
		messageObj.ob2=" where agape_message_receiver_ID="+global.userObj.agape_profile_memberID;
	}
	

	if(direction=="sent"){
		messageObj.ob=" where agape_message_sender_ID="+global.userObj.agape_profile_memberID+" and agape_message_active='true' order by agape_message_update desc limit "+firstPoint+",25";
		messageObj.ob2=" where agape_message_sender_ID="+global.userObj.agape_profile_memberID;
	}
	messageObj.uID=global.userObj.agape_profile_memberID;
	var sFunc=function(data){
	 	var messO=globalTools.verify(data);
	 	global.dataHolder.messages=messO.returnObj;
	 	messageObj.messages=messO;
	 	parseMessages(messO,direction);
	}
	ajaxCallPost(messageObj,sFunc);

}
		
		function parseMessages(obj,direct)
		{	
			if(obj.returnObj.length>0)
			{	
				
				var messObj=obj.returnObj.length;
				var strg="";
			
				for(var f=0;f<messObj;f++){
					
					var formStrg="";
					var leadStrg="";
					var displClass="";
					
					if(obj.returnObj[f].agape_message_responses!="none" &&  obj.returnObj[f].agape_message_responses!="Female" &&  obj.returnObj[f].agape_message_responses!="Male"){

						formVal=$.parseJSON(obj.returnObj[f].agape_message_responses);
						var tIndex=formVal.length;
						var leadStrg="";
						var artCol="#efefef";

						
						for(var g=0;g<tIndex;g++){
							var name=formVal[g].sender_username;
							var nameCol="blue";

							if(direct=="received" && global.userObj.agape_profile_username==formVal[g].sender_username){
								name="You";
								nameCol="red";
							}


							if(direct=="sent" && global.userObj.agape_profile_username==formVal[g].sender_username){
								name="You";
								nameCol="red";
							}


				
							leadStrg=leadStrg+"<div style='border-bottom:solid 1px #000;margin-top:5px;background-color:"+artCol+";'><div class='messageReply_innerStyle_you'>on <span>"+formVal[g].sendDateFormatted+"</span> <span style='color:"+nameCol+";font-weight:bold;font-size:18px;'>"+name+"</span> replied:</div><div style='color:#000;padding:7px;font-family:arial'>"+formVal[g].message+"</div></div>";
							if(artCol=="#e5e5e5"){
								artCol="#efefef"
							}else{
								artCol="#e5e5e5"
							}
						}
						
					}else{
						displClass="doNotDisplay";
					}
					
					var innerMess="";
					
					var lastUpdate=getTime(obj.returnObj[f].agape_message_update,'true');
					var pic,salut,_sender_user;
					if(direct=="received"){

						pic=obj.returnObj[f].agape_sender_url;
						salut="Received from"
						_sender_user=obj.returnObj[f].agape_message_sender_username;
					}

					if(direct=="sent"){

						pic=obj.returnObj[f].agape_message_receiver_url;
						salut="Sent to";
						_sender_user=obj.returnObj[f].agape_message_receiver_username;
					}


					var showVal="";
					var mContClass="messageContainer1"
					
					if(obj.returnObj[f].agape_message_type=="Agape Notification"){
						
						showVal="doNotDisplay";
						mContClass="_messageContainer1M";
						if(obj.returnObj[f].agape_message_responses=="Female"){
							mContClass="_messageContainer1F";
						}

					}
					var w=globalTools.stringClearBack(obj.returnObj[f].agape_message_title)
					var w1=globalTools.stringClearBack(obj.returnObj[f].agape_message)
					strg=strg+"<div id='mess"+f+"' class='"+mContClass+"'><div class='messhdr_gradient'><div class='messageX'><span id='closeMess"+f+"'>X</span></div><div class='messagesName'><span>"+salut+":</span> <span id='sendMess"+f+"' style='color:lime;cursor:pointer;'><u>"+_sender_user+"</u></span></div><div class='mailAlertholder messagedisplayHol'><div class='sealed'><span id='newMessage0'>"

					strg=strg+"<i>New Message!</i></span></div><div class='sealed_img'><img src='images/mail.jpg' style='margin-top:3px;'></div></div><div class='messageDate'>"+lastUpdate+"</div><div style='clear: both;'></div></div><div style='float: left; width: 80%;'><div ><img src='"+pic+"' border='1' width='70' height='80'></div><div class='messageTitleStyle'>"+w+"</div><div><div class='messageDiv'>"+w1+"</div>"


					strg=strg+"</div><div id='repBox"+f+"' class='replyMessageHolder_value "+displClass+"' ><div  style='border:solid 1px black;width:100%;'>"+leadStrg+"</div></div><div class='replyTextareaMessageHolder'>"


					strg=strg+"<div id='rmholder"+f+"' style='position: relative; display: block; height: 140px;padding-top:5px;'><div style='display: block; height: 140px;'><textarea id='textA"+f+"' class='textareas'></textarea><div><input type='button' value='submit' id='submit"+f+"'><input id='cancel"+f+"' type='button' value='cancel'></div></div></div>"


					strg=strg+"</div><div class='messageSendButtonContainer'><div class='sliderButtonStyle1 messagebuttonStyle "+showVal+"' id='replyB"+f+"'>reply</div><div id='visitProf"+f+"' class='sliderButtonStyle1 messagebuttonStyle buttonClass_1 "+showVal+"'>visit profile</div><div style='clear: both;'></div></div></div><div style='clear: both;'></div></div>"
				}

				$("#messContainer").empty().append(strg);


				//reply button
				$("div[id^='replyB']").each(function(){
					$(this).unbind("click").on("click",function(){
						var repId=$(this).attr("id")+"";
						var RepIndex=repId.substr(6);
						var elem=$("#rmholder"+RepIndex)[0];
						var elem1=$("#rmholder"+RepIndex).parent()
						TweenMax.to(elem1,.2,{css:{display:"block",},onComplete:function(){
							
						}})

						TweenMax.to(elem1,.5,{css:{height:110},onComplete:function(){
							
						}})
						$("#replyB"+RepIndex).hide();


					})
				})




				//visit profile option
				$("div[id^='visitProf']").each(function(){
					$(this).unbind("click").on("click",function(){
						var div1=document.getElementById("_lboxBackground");
						var div2=document.getElementById("_lBoxMainDiv");
						var repId=$(this).attr("id")+"";
						var RepIndex=repId.substr(9);
						var template={};
						var indx=0;
						template.page="viewpro1_open.html";
						template.job="visitprofile";
	
						var mType=RepIndex;
						global.module='messages';

						if(direct=="received"){
							global.candidate.id=obj.returnObj[RepIndex].agape_message_sender_username;
						}

						if(direct=="sent"){
							global.candidate.id=obj.returnObj[RepIndex].agape_message_receiver_username;
						}

						global.returnFunction_close=function(){
							$("#sentTab").click()
						}
						
						template.param=mType;
						//global.view.Type=viewType
						ingniteLightBox = new LightBox(div1,div2,template,indx)
						ingniteLightBox.lightBoxOn();

						
					})
				})



				//cancel button
				$("input[id^='cancel']").each(function(){
					$(this).unbind("click").on("click",function(){
						var repId=$(this).attr("id")+"";
						var RepIndex=repId.substr(6)
						var elem=$("#rmholder"+RepIndex)[0];
						var elem1=$("#rmholder"+RepIndex).parent()
						TweenMax.to(elem1,.3,{css:{height:0},onComplete:function(){
							TweenMax.to(elem1,.2,{css:{display:"none",},onComplete:function(){
								
							}})
							
						}})

						$("#replyB"+RepIndex).show();
					})

				})






				$("span[id^='closeMess']").each(function(){
					$(this).unbind("click").on("click",function(){


						var con=confirm("Are you sure you want to delete this message?");

						if(con==true){
							var repId=$(this).attr("id")+"";
							var RepIndex=repId.substr(9);
							var fMod={}
							fMod.job="quickJamUpdate_Comm";
							fMod.dbase="agape_messages";
							fMod.updateStr="agape_message_active='false'";
							fMod.param="agape_message_ID"
							fMod.vals=obj.returnObj[RepIndex].agape_message_ID;
							fMod.uID=global.userObj.agape_profile_memberID
							fMod.selFunc="selectFunc";
							if(direct=="received"){
								fMod.kob="where agape_message_receiver_ID="+global.userObj.agape_profile_memberID+" and agape_message_active='true'"
							}
							
							if(direct=="sent"){
								fMod.kob="where agape_message_sender_ID="+global.userObj.agape_profile_memberID+" and agape_message_active='true'"
							}

							var dFunc=function(datum2){

						
							var messO=globalTools.verify(datum2);
						 	parseMessages(messO,direct);
						}
						ajaxCallPost(fMod,dFunc);
						}
						
						
					})
				})

				$(".aFriend").each(function(){
					$(this).unbind("click").on("click",function(){
						var fe=$(this).parent().parent().parent().parent().attr("id");
						var fe1=fe.substr(4)
						var qo=confirm("Would you like to send this person a wink?")
						if(qo==true){
							var mod={};
							mod.obj={}
							mod.job="quickInsertAtomic";
							mod.key="false";
							mod.uID=global.userObj.agape_profile_memberID;
							mod.dbase="agape_messages"
							//var t=$.parseJSON(_userObj.returnObj[0].agape_profile_default_img);
							var gr=formattedPresent();
							mod.obj.agape_message_title=globalTools.stringClear("You received a wink from <span  style='color:blue;'>"+global.userObj.agape_profile_username+"</span> "+gr);
							mod.obj.agape_message=globalTools.stringClear("Would you like to <span class='aFriend' style='cursor:pointer;text-decoration:underline;color:red;font-weight:bold;'>wink back</span>?")
							mod.obj.agape_message_sender_ID=global.userObj.agape_profile_memberID;
							mod.obj.agape_message_responses=global.userObj.agape_profile_gender;
							mod.obj.agape_message_sender_username=global.userObj.agape_profile_username;
							mod.obj.agape_message_receiver_username=global.dataHolder.messages[fe1].agape_message_sender_username;
							mod.obj.agape_message_receiver_url=global.dataHolder.messages[fe1].agape_sender_url;
							mod.obj.agape_message_receiver_ID=global.dataHolder.messages[fe1].agape_message_sender_ID;
							mod.obj.agape_message_send_date=convertNowToPhP()
							mod.obj.agape_message_update=mod.obj.agape_message_send_date;

							mod.obj.agape_message_active="true";
							mod.obj.agape_message_opened="Sealed";
							t=$.parseJSON(global.userObj.agape_profile_default_img);
							mod.obj.agape_sender_url=t.defaultPic;
							mod.obj.agape_message_type="Agape Notification";
							var retFunc=function(data){

								
								
							}
							
							ajaxCallPost(mod,retFunc)
						}
					})
				})
				
				

				$("input[id^='submit']").each(function(){
					$(this).unbind("click").on("click",function(){
						var repId=$(this).attr("id")+"";
						var RepIndex=repId.substr(6);
						var sendObject=obj.returnObj[RepIndex];
						var newMessObj={};
						newMessObj.message=globalTools.stringClear($("#textA"+RepIndex).val());
						newMessObj.sender_username=global.userObj.agape_profile_username;
						newMessObj.agape_message_sender_ID=global.userObj.agape_profile_memberID;
						newMessObj.sendDate=convertNowToPhP();
						newMessObj.sendDateFormatted=getTime(newMessObj.sendDate,'true')
						newMessObj.receiver_uname=obj.returnObj[RepIndex].agape_message_sender_username;
						newMessObj.receiver_ID=obj.returnObj[RepIndex].agape_message_sender_ID;


						newMessObj.sendGroup=[{"agape_message_receiver_username":obj.returnObj[RepIndex].agape_message_sender_username,"agape_message_receiver_ID":obj.returnObj[RepIndex].agape_message_sender_ID}]
						

						//{"sendDate":"2017-11-28 09:27:00","sendDateFormatted":"November 28, 2017 9:27 AM","sender_uname":"uname45","message":"grady","agape_message_receiver_username":"uname1701","agape_message_receiver_ID":"1701","idx":"18_dW5hbWU0NQ==_LtYuhRnfX3RH+aEbfT/kLJ4aqio84yT1RLl4bZl3x28="}

						//[{"sendDate":"2017-06-02 18:05:00","sendDateFormatted":"June 2, 2017 6:05 PM","sender_uname":"uname2360","message":"Nice%20to%20meet%20you%20Marcus","agape_message_sender_username":"uname200","agape_message_sender_ID":"200","idx":"1_dW5hbWUyMzYw_qL8SgjGoSDgfn66F7VsZ4uUtm3gHkbwMDRaBHkwy94M="},{"sendDateFormatted":"June 2, 2017 6:07 PM","sendDate":"2017-06-02 18:07:00","sender_ID":"200","sender_uname":"uname200","message":"Was wondering if you got m y message or not","updateMessage_id":"1","agape_message_sender_username":"uname2360","agape_message_sender_ID":"2360","idx":"1_dW5hbWUyMDA=_D9gDWbeBz+DHlNHzUcon5wTlxQhou9hB/jQiQrmZ6ks="}]


						var sObj={}
						sObj.job="respondToMessage"
						sObj.updateMessage_id=obj.returnObj[RepIndex].agape_message_ID;
						sObj.jsonObj=JSON.stringify(newMessObj);
						sObj.ObjId=obj.returnObj[RepIndex].agape_message_ID;
						sObj.sender_uname=global.userObj.agape_profile_username;
						sObj.sendDate=newMessObj.sendDate;
						sObj.parser=direct;

						var funk1=function(datum2){
							var messO=globalTools.verify(datum2)
						 	//messageObj.messages=messO;
						 	parseMessages(messO,sObj.parser);
						}

						ajaxCallPost(sObj,funk1);
						
					})

				})


				$("span[id^='sendMess']").each(function(){
					$(this).unbind("click").on("click",function(){
						alert($(this).attr("id"))
						$("#newMessages").click()
					})
				})



			}
			else
			{
				document.getElementById('messContainer').innerHTML="No records";
			}			
			
		}
		





		function parseMessages_sent(obj)
		{	
			messObj1=obj;
			messObj=messObj1.split("**");
			mObj=$.parseJSON(messObj[1]);
			
			if(mObj.returnObj.length>0)
			{	
				window.messObj=mObj.returnObj;	
				
				
				leng=window.messObj.length;
				var doc="none";
				var classchk="messageContainer1";
				
				require(['modules/message_tool'],function(messenger){
					messenger.parseIt_sent(obj);	
				})
				
			}
			else
			{
				document.getElementById('messContainer').innerHTML="no records";
			}			
			
		}
		
		
		searchIndex=1;


function getFirstsearch_Call()
{
	searchIndex=searchIndex+1;
	getFirstsearch(searchIndex)
	
}



				
				
				
proStart=0;
proMax=25
f25Max=1;

function f25builder(f25Obj)
{

	var max=f25Obj.countR;
	var picsEnd=25;
	if(max<25){
		picsEnd=max;
	}

	for(var t=0;t<25;t++){
		if(f25Obj.returnObj[t])
		{
			var tImg=f25Obj.returnObj[t]['agape_profile_default_img'];
			tImg2=$.parseJSON(tImg);
			var elem="pic"+t;
			document.getElementById(elem).src=global.baseUrl+"/"+tImg2.defaultPic;
			document.getElementById(elem).style.cursor="pointer";
			$("#"+elem).on('click',function(){viewPhoto(this)});
		}
		else
		{
			var elem="pic"+t
			document.getElementById(elem).src="images/no-image.jpg";
		}
	}

	
	
	var tImg=f25Obj.returnObj[0]['agape_profile_default_img'];

	tImg1=$.parseJSON(tImg);
	$("#display_agape_profile_username").html(f25Obj.returnObj[0].agape_profile_username)
	$("#display_agape_profile_location").html(f25Obj.returnObj[0].agape_profile_city+", "+f25Obj.returnObj[0].agape_profile_state)
	$("#display_agape_profile_intentions").html(f25Obj.returnObj[0].agape_profile_intentions);
	$("#display_agape_profile_city").html(f25Obj.returnObj[0].agape_profile_city);
	document.getElementById('display_searchImgDiv').src=global.baseUrl+"/"+tImg1.defaultPic
	$("#searchTotalsRem").html(8)
	
	// First value in slider 
	$("#picsStart").html(1);
	$("#picsEnd").html(picsEnd);
	
	document.getElementById('uID_se').value=f25Obj.returnObj[0].agape_profile_memberID;
	document.getElementById('tot').innerHTML=max

}

function viewPhoto(obj)
{
	var strg=obj.id;
	var index=parseInt(strg.substr(3));

	$("#display_agape_profile_username").html(f25Obj[index].agape_profile_username)
	$("#display_agape_profile_location").html(f25Obj[index].agape_profile_city+", "+f25Obj[index].agape_profile_state)
	$("#display_agape_profile_intentions").html(f25Obj[index].agape_profile_intentions)
	$("#display_agape_profile_city").html(f25Obj[index].agape_profile_city);
	var tImg=f25Obj[index]['agape_profile_default_img'];
	tImg1=$.parseJSON(tImg);
	document.getElementById('display_searchImgDiv').src=tImg1.defaultPic
	document.getElementById('uID_se').value=f25Obj[index].agape_profile_memberID;
	
}


var sliding="";
var uincrementer=5
var dincrementer=5
var incrementer=5
var cntIncremtnter=5
function slide(direction)
{
	sliding = setInterval(function(){slider(direction)},50);
	
}

function sliden(direction)
{
	sliding = setInterval(function(){slider(direction)},50);
	
}

function slider(direct)
{
	if(direct=='left')
	{
		if(cntIncremtnter<=190)
		{
			val=(0-parseInt(incrementer))+"px"
			document.getElementById('sliderDiv').style.left=val;
			incrementer=incrementer+5;
			cntIncremtnter=cntIncremtnter+5;
		}
		else
		{
			sliding=window.clearInterval(sliding)
			cntIncremtnter=5
			
		}
	}
	
	if(direct=='right')
	{
		if(cntIncremtnter<=140)
		{
			val=parseInt(incrementer)+"px"
			document.getElementById('sliderDiv').style.left=val;
			incrementer=incrementer+5;
			cntIncremtnter=cntIncremtnter+5;
		}
		else
		{
			sliding=window.clearInterval(sliding)
			cntIncremtnter=5
			
		}
	
	}

}


	
		
		/*

		getstates options

		ind  = StateObj={};
		StateObj.opt="populateNSet";
		StateObj.elem="agape_profile_state"
		StateObj.cityElem="agape_profile_city";
		StateObj.citySet=global.userObj.agape_profile_state;
		StateObj.selectElem="true";*/
		

		function getStates(ind,retObj){
			stateObj={};
			stateObj.job="stateSelect_atomic";
			stateObj.dbase="states";
			var tObj=ind;
			var ret=retObj;
			retFunc=function(data){
				var state=globalTools.verify(data)
				switch(tObj.opt){
					case "populate":
						var leng=state.returnObj.length;
						for(var b=0;b<leng;b++){
							$("#"+tObj.elem).append("<option>"+state.returnObj[b].state_full+"</option>");
						}

					break;

					case "populateNSet":
						var leng=state.returnObj.length;
						$("#"+tObj.elem).empty();
						if(tObj.selectElem=='true'){
							$("#"+tObj.elem).append("<option value='Select' class='stateClass'>- Select -</option>");
						}
						for(var b=0;b<leng;b++){
							$("#"+tObj.elem).append("<option value='"+state.returnObj[b].state_full+"' class='stateClass'>"+state.returnObj[b].state_full+"</option>");
						}


						var cityObj0={};
						cityObj0.cityElem=tObj.cityElem
						cityObj0.job="citySelect_atomic";
						cityObj0.dbase="states";
						var val=tObj.citySet;
						cityObj0.val=val;
						cityObj0.param="state_full"
						if(val !="-Select-"){

						}
						var retObj1=ret;
						var citi=tObj.cityElem;
						retFunc2=function(data4){
							
							var citO=globalTools.verify(data4);
							var lengo2=citO.returnObj.length;
							$("#"+citi).empty();
							if(tObj.selectElem=='true'){
								$("#"+citi).append("<option value='Select'>- Select -</option>");
							}
							for(r=0;r<lengo2;r++){
								$("#"+citi).append("<option>"+citO.returnObj[r].city+"</option>")
							}
							
							
							$("#"+tObj.elem).on("change",function(){
								cityObj={};
								cityObj.cityElem=tObj.cityElem
								cityObj.job="citySelect_atomic";
								cityObj.dbase="states";
								var val=$(this).val();
								cityObj.val=val;
								cityObj.param="state_full"
								if(val !="-Select-"){

								}
								var citi=tObj.cityElem;
								retFunc1=function(data2){
									var citO=globalTools.verify(data2)
									var lengo2=citO.returnObj.length;
									$("#"+citi).empty();
									for(r=0;r<lengo2;r++){
										if(citO.returnObj[r].city!=parseInt(citO.returnObj[r].city)){
											$("#"+citi).append("<option>"+citO.returnObj[r].city+"</option>")
										}
									}

									
								}
								ajaxCallStates(cityObj,retFunc1)
							})
							if(retObj1!='none'){
								retObj1();
							}
							
						}
						ajaxCallStates(cityObj0,retFunc2);
					break;


					case 'setCities':
						$("#"+tObj.elem).val(tObj.citySet);
						cityObj={};
						cityObj.cityElem=tObj.cityElem
						cityObj.job="citySelect_atomic";
						cityObj.dbase="states";
						var val=global.userObj.agape_profile_state;
						cityObj.val=val;
						cityObj.param="state_full"
						if(val !="-Select-"){

						}
						var citi=tObj.cityElem;
						retFunc1=function(data2){
							var citO=globalTools.verify(data2);
							var lengo2=citO.returnObj.length;
							$("#"+citi).empty();
							if(tObj.selectElem=='true'){
								$("#"+tObj.elem).append("<option value='Select'>- Select -</option>");
							}
							for(r=0;r<lengo2;r++){
								if(citO.returnObj[r].city!=parseInt(citO.returnObj[r].city)){
									$("#"+citi).append("<option>"+citO.returnObj[r].city+"</option>")
								}
							}
									
						}			
						ajaxCallStates(cityObj,retFunc1)
					break;

				}
				
			
		}
		ajaxCallStates(stateObj,retFunc)
	}






		// get states 
		/*
			typeO = 'states','cities' or 'statesfull'
			stElem =  state element can be none
			cyElem =  city element can be none
			selectElem = true or false should add -- Select -- to top of dropdown
			addChangeEffect = whether change to state elem should add cities to a city element

		*/


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
										ajaxCallStates(_this.cityObj,retFunc1);
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
						ajaxCallStates(stateObj,retFunc);
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
								for(r=0;r<lengo2;r++){
									if(cityObj1.returnObj[r].city==_this.param1){
										f1="selected";
									}
									$("#"+_this.cityElem).append("<option "+f1+">"+cityObj1.returnObj[r].city+"</option>");
									f1="";
								}
							}
							ajaxCallStates(_this.cityObj,retFunc1);

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
											for(r=0;r<lengo2;r++){
												$("#"+_this.cityElem).append("<option>"+cityObj1.returnObj[r].city+"</option>")
											}

										}
										ajaxCallStates(_this.cityObj,retFunc1);

									}else{
										//alert("select")
									}
								})

							}
						}
						ajaxCallStates(stateObj,retFunc);
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
						ajaxCallStates(model2,funk);
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





		
		function parseBlogRequest(data)
		{
			var tObj=data.split("**");	
		if($.trim(tObj[0])=='true'){
			
				blogObj=$.parseJSON(tObj[1]);
				
				objLeng=	blogObj.returnObj.length;	

			
				var blogStrg="";
				//paginationFunc('blogPagination',objLeng);
				blogObject=blogObj.returnObj;
				for(i=0;i<objLeng;i++)
				{
					
					var teague= blogObject[i].blog_title
					var shortContent=blogObject[i].blog_Content
					var pict=$.parseJSON(blogObject[i].blog_creator_photo);
			
					if(teague.length>24)
					{
						teague=teague.substr(0,24)+"...";
					}
					
					
				
					
					var timeDateVal=getTime(blogObject[i].blog_lastReplyDate,'true')
					
					var timeDateVal_cr=getTime(blogObject[i].blog_createDate,'true')
					
					//photo=$.parseJSON(blogObj[i].blog_creator_photo
					
					if(shortContent.length>250)
					{
						shortContent=shortContent.substr(0,250)+"...<span style='color:red;'>more</span>";
					}
					
					blogStrg=blogStrg+"<div class='blogList'>"
						blogStrg=blogStrg+"<div class='blogListStyle1'>"
							blogStrg=blogStrg+"<img src='"+pict.defaultPic+"' width='50' height='50' border='1'/>"
							blogStrg=blogStrg+"<br/>"
							blogStrg=blogStrg+blogObject[i].blog_creator_username
						blogStrg=blogStrg+"</div>"
						blogStrg=blogStrg+"<div style='float:left;width:295px;font-size:12px;margin-left:5px;'>"
							blogStrg=blogStrg+"<div class='blogTitle'>"+teague+"</div>"
							blogStrg=blogStrg+"<div style='float:right;color:#000000;'>"
								blogStrg=blogStrg+"<div style='float:left;font-family:Times New Roman;color:blue;margin-right:4px;'>"+blogObject[i].blog_response_count+"</div>"
								blogStrg=blogStrg+"<div style='float:left;'>reply(s)</div>"
								blogStrg=blogStrg+"<div style='clear:both;'></div>"
							blogStrg=blogStrg+"</div>"
							blogStrg=blogStrg+"<div style='clear:both;'></div>"
							blogStrg=blogStrg+"<div style='float:left;width:320px'>"
								blogStrg=blogStrg+"<div style='float:left;color:#000000;'>"
									blogStrg=blogStrg+"<div style='float:left;font-family:Times New Roman;'>Create date</div>"
									blogStrg=blogStrg+"<div style='color:#597173;text-decoration:underline;float:right;width:90px;text-align:right;'>"+blogObject[i].blog_creator_username+"</div>"
									blogStrg=blogStrg+"<div style='float:right;color:#597173;font-family:Times New Roman;margin-left:5px;width:150px;'>"+timeDateVal_cr+"</div>"
									
									
									blogStrg=blogStrg+"<div style='clear:both;'></div>";
									
									
									blogStrg=blogStrg+"<div style='float:left;font-family:Times New Roman;'>Last reply:</div>"
									blogStrg=blogStrg+"<div style='color:#597173;text-decoration:underline;float:right;width:90px;text-align:right;'>"+blogObject[i].blog_creator_username+"</div>"
									blogStrg=blogStrg+"<div style='float:right;color:#597173;font-family:Times New Roman;margin-left:5px;width:150px;'>"+timeDateVal+"</div>"
									
									
									blogStrg=blogStrg+"<div style='clear:both;'></div>"
									
									
								blogStrg=blogStrg+"</div>"
								
								
							blogStrg=blogStrg+"</div>"
						blogStrg=blogStrg+"</div>"
						blogStrg=blogStrg+"<div style='clear:both;'></div>"
						blogStrg=blogStrg+"<div style='text-align:left;padding:6px;width:90%;'>"+shortContent+"</div>"
						blogStrg=blogStrg+"<div style='width:90%;border-bottom:dashed 1px #000000;margin:auto'></div>"
					blogStrg=blogStrg+"</div>	"
				}
				$("#blogHolder").html(blogStrg);
			}
			else{
				$("#blogHolder").html("No blogs available for this topic");
			}
		}
		
		
	
		
		
		function parseFrRequest(obj)
		{	
		
			var tObj=$.trim(obj)
			tObj=tObj.split("**");
			control="getFriendsRequest";
			if(tObj[0]=="true"){
			
				var friendStrg="";
				var friendRequestObj=$.parseJSON(tObj[1]);
				global.friendsRequestObj=friendRequestObj.returnObj;
				var fLeng=friendRequestObj.returnObj.length;
				sessionStorage.setItem('friendRequestObj',tObj[1])
				
				var classchk="messageContainer1a";
				paginationFunc('mainFriendPagination',friendRequestObj.countR,'getFriends');
			
				
				for(i=0;i<fLeng;i++)
				{
					
					
					var imgObj=$.parseJSON(friendRequestObj.returnObj[i].requestorImgUrl)
					var tImg=imgObj.defaultPic;
					//tImg1=$.parseJSON(tImg);

					

					
					friendStrg=friendStrg+"<div class='"+classchk+"'  style='height:20px;'><div style='float:left;'><img src='"+tImg+"' border='1' height=30 width=30 /></div>"
					friendStrg=friendStrg+"<div style='float:left;color:#132D3C;font-size:15px;padding-left:5px;padding-top:3px;font-family:arial'>You have received a friendship request from "+friendRequestObj.returnObj[i].requestorUsername+"</div>"
					friendStrg=friendStrg+"<div style='float:right;margin-right:40px;'><div class='sliderButtonStyle1 messagebuttonStyle' id='aFrRe"+i+"' >accept</div><div class='sliderButtonStyle1 messagebuttonStyle' onclick=pre_viewBox(this,'"+i+"','candidate','friendRequest') >visit profile</div></div>"
					friendStrg=friendStrg+"<div style='clear:both;'></div></div>";
					
					if(classchk=="messageContainer1a")
					{
						classchk="messageContainer2a";
					}
					else
					{
						classchk="messageContainer1a";				
					}
				}		
				$('#friendCount').append("("+friendRequestObj.countR+")");


				
				$("#friendContainer").empty().html(friendStrg);
				if(friendRequestObj.countR==0){
					$("#friendContainer").empty().html("No friend requests")
				}
			}else{
				$("#friendContainer").empty().html("No friend requests")
			}
			

			$('.messagebuttonStyle').each(function(){
				$(this).on("mouseover",function(){
					$(this).css("background-color","#0b8d0b");
				})

				$(this).on("mouseout",function(){
					$(this).css("background-color","green");
				})

				$(this).unbind("click").on("click",function(){
					var index=$(this).parent().parent().index();
					var typeO=$(this).html();
					var friendO=sessionStorage.getItem("friendRequestObj");
					var friendOb=$.parseJSON(friendO)

					switch(typeO){

						case 'accept':
							var confirm1=confirm("Would you like to accept "+friendOb.returnObj[index].requestorUsername+" as a friend?");
							if(confirm1==true){
								

								var userO=sessionStorage.getItem("user");
								var userOb=$.parseJSON(userO)
								
								//var friends=$.parseJSON(global.userObj.agape_profile_friends);
								//friends.unshift(friendOb.returnObj[index].requestorID)
								var img=$.parseJSON(global.userObj.agape_profile_default_img);
								var img1=$.parseJSON(friendOb.returnObj[index].requestorImgUrl);

								
							
								var sendObj={};
								sendObj.job='update_atomic_friendRequest';
								sendObj.param=global.userObj.agape_profile_username;
								sendObj.val=friendOb.returnObj[index].requestorID;
								sendObj.AcceptorID=global.userObj.agape_profile_memberID;
								sendObj.friendUsername=friendOb.returnObj[index].requestorUsername
								sendObj.url=img.defaultPic;
								sendObj.dateN=convertNowToPhP();
								
								sendObj.RequestorUrl=img1.defaultPic;
								sendObj.db='agape_profile'
								sendObj.rQId=friendOb.returnObj[index].requestID;
								//sendObj.fieldname='agape_profile_friends';
								//sendObj.val=global.userObj.agape_profile_friends;
								//sendObj.param="agape_profile_memberID";
								//sendObj.requestorID=friendOb.returnObj[index].requestorID
								//sendObj.id=global.userObj.agape_profile_memberID;
								//sendObj.NextStep='updateMessageRequest


								func=function(data){
									var divY=data.split("**");
									global.userObj.agape_profile_friends=divY[1];
									globalTools.save();
									require(['modules/getFrRequest'],function(friend){
										friend.getFrRequest(0);
									
									})
									
								}
								ajaxCallPost(sendObj,func);
								

								
							}
						break;

						case 'ignore':
							var confirm1=confirm("Would you like to ignore this persons friendship request?");
						break;
					}
				})
			})
			
		}

		function parseFriends(obj)
		{	
			
			var tObj=$.trim(obj)
			tObj=tObj.split("**");
			control="getFriends"
			if(tObj[0]=="true"){
				global.candidate.job='createMessage_friend';
				var friendStrg="";
				var friendsObj=$.parseJSON(tObj[1]);
				var fLeng=friendsObj.returnObj.length;
				sessionStorage.setItem('friendsObj',tObj[1])
				var classchk="messageContainer1a";
				paginationFunc('mainFriendPagination',friendsObj.countR,'getFriends');
				
		
				for(i=0;i<fLeng;i++)
				{
					var tImg=friendsObj.returnObj[i].agape_profile_default_img;
					tImg1=$.parseJSON(tImg);
					var idr="friend"+i;
					
					friendStrg=friendStrg+"<div id='"+idr+"' class='"+classchk+"'  style='height:30px;'><div style='float:left;'><img src='"+tImg1.defaultPic+"' border='1' height=30 width=30 /></div>"
					friendStrg=friendStrg+"<div style='float:left;font-size:14px;padding-left:4px;font-family:arial'>"+friendsObj.returnObj[i].agape_profile_username+"</div>"
					friendStrg=friendStrg+"<div style='float:right;margin-right:40px;'><div  class='sliderButtonStyle1 messagebuttonStyle' onclick=pre_viewBox(this,'"+friendsObj.returnObj[i].agape_profile_username+"','candidate','friend',"+i+")  >visit profile</div><div class='sliderButtonStyle1 messagebuttonStyle' onmouseover=buttonMouseOver(this,'#0b8d0b','par') onmouseout=buttonMouseOver(this,'green','par') onclick=unfriend(this,"+i+",'unfriend') >unfriendss</div></div>"
					friendStrg=friendStrg+"<div style='clear:both;'></div></div>";
					
					if(classchk=="messageContainer1a")
					{
						classchk="messageContainer2a";
					}
					else
					{
						classchk="messageContainer1a";				
					}
				}	
				
				$('#friendCount').append("("+friendsObj.countR+")");
				
				$("#friendContainer").empty().html(friendStrg)
			}else{
				$("#friendContainer").empty().html("You have not accepted any friends")
			}


			$('.messagebuttonStyle').each(function(){
				$(this).on("mouseover",function(){
					$(this).css("background-color","#0b8d0b");
				})

				$(this).on("mouseout",function(){
					$(this).css("background-color","green");
				})

				$(this).on("click",function(){
					var index=$(this).parent().parent().index();
					var typeO=$(this).html();
				

					switch(typeO){

						case 'accept':
							var confirm1=confirm("Would you like to accept this person as a friend?");
							if(confirm1==true){
								var friendO=sessionStorage.getItem("friendsObj");
								var friendOb=$.parseJSON(friendO)

								var userO=sessionStorage.getItem("user");
								var userOb=$.parseJSON(userO)
								
								var friends=$.parseJSON(userOb.agape_profile_friends);
								friends.push(friendOb.returnObj[index].requestorID)
								
								userOb.agape_profile_friends=JSON.stringify(friends)
								var reset=JSON.stringify(userOb)
								var userO=sessionStorage.setItem("user",reset);
		
								var sendObj={};
								sendObj.job='quickUpdate';
								sendObj.db='agape_profile'
								sendObj.rQId=friendOb.returnObj[index].requestID;
								sendObj.fieldname='agape_profile_friends';
								sendObj.val=JSON.stringify(friends);
								sendObj.param="agape_profile_memberID";
								sendObj.requestorID=friendOb.returnObj[index].requestorID
								sendObj.id=userOb.agape_profile_memberID;
								sendObj.NextStep='updateMessageRequest'
								






								func=function(data){
									var objChk=$.trim(data);
									objChk=globalTools.verify(objChk);
									objChk=objChk.split("**")
									if(objChk[0]=='true'){
										parseFriends(objChk[1]);
									}

								}
								ajaxCall(sendObj,func);

							}
						break;

						case 'ignore':
							var confirm1=confirm("Would you like to ignore this persons friendship request?");
						break;
					}
				})
			})

		}
		
		
	function unfriend(obj,index,tag){
		friendsObj=sessionStorage.getItem("friendsObj");
		var friends=$.parseJSON(friendsObj);
		//var newFriendObj=arrayTool(friends,'removeIndex',index)
		
		var sendObj={};
		sendObj.obj={};
		sendObj.job='atomic_unfriend';
		sendObj.param=global.userObj.agape_profile_username;
		sendObj.memberID=global.userObj.agape_profile_memberID;
		sendObj.index1=friends.returnObj[index].agape_profile_memberID;
		sendObj.unUsername=friends.returnObj[index].agape_profile_username;
		//sendObj.obj=JSON.stringify(sendObj.obj);
		retFunc=function(data){
			
			var objChk=$.trim(data);
			beel=data.split("**")
			global.userObj.agape_profile_friends=beel[0];
			globalTools.save();

		
			require(['modules/getFrRequest'],function(friend){
				friend.getFriends(0);
			
			})
		}
		
		
		var confirm1=confirm("Would you like to unfriend "+sendObj.unUsername+"?");
		if(confirm1==true){
			ajaxCallPost(sendObj,retFunc)
		}
		
	
	}	
	
	function parseFrRequest_sent(obj)
	{	
		var tObj=obj.split("**");
	
		var friendStrg="";
		var friendRequestObj=$.parseJSON(tObj[1]);
		
		
		var fLeng=friendRequestObj.returnObj.length;
		var classchk="messageContainer1a";
		
		
		paginationFunc('mainFriendPagination',friendRequestObj.countR,'getFriends_sent');

	
		for(i=0;i<fLeng;i++)
		{
				var tImg=friendRequestObj.returnObj[i].requestorImgUrl;

				tImg1=$.parseJSON(tImg);
			
			friendStrg=friendStrg+"<div class='"+classchk+"'  style='height:20px;'><div style='float:left;'><img src='"+tImg1.defaultPic+"' border='1' height=30 width=30 /></div><div style='float:left;color:#132D3C;font-size:13px;'>You have received a friendship request from "+friendRequestObj.returnObj[i].requestorUsername+"</div><div style='float:right;margin-right:40px;'><button >accept</button><button >ignore</button></div><div style='clear:both;'></div></div>";
			
			if(classchk=="messageContainer1a")
			{
				classchk="messageContainer2a";
			}
			else
			{
				classchk="messageContainer1a";				
			}
		}		
		$('#friendCount').html("("+friendRequestObj.countR+")");
		
		$("#friendContainer").empty().html(friendStrg)
	}
	
	//
	function parseFriendrequest(obj,id,viewType){
		var div1=document.getElementById("_lboxBackground");
		var div2=document.getElementById("_lBoxMainDiv");
		var template={};
		var indx=0;
		template.page="viewpro1_open.html";
		template.job="visitprofile";
		var mType=id;
		global.candidate.job='createMessage_friend';
		global.candidate.id=mType;
		template.param=mType;
		global.view.Type=viewType
		ingniteLightBox = new LightBox(div1,div2,template,indx)
		ingniteLightBox.lightBoxOn();
	}







	function viewBox(obj,id,viewType,page){
		var div1=document.getElementById("_lboxBackground");
		var div2=document.getElementById("_lBoxMainDiv");
		var template={};
		var indx=0;
		template.page=page;
		template.job="visitprofile";
		var mType=id;
		
		global.candidate.id=mType;
		template.param=mType;
		global.view.Type=viewType
		ingniteLightBox = new LightBox(div1,div2,template,indx)
		ingniteLightBox.lightBoxOn();
	}


	
	function openLightCreateMessage(obj,id,module){
		var div1=document.getElementById("_lboxBackground");
		var div2=document.getElementById("_lBoxMainDiv");
		var template={};
		
		
		switch(module){
			case 'friend':
				template.page="createMessage.html";
				template.param=id;
				

			break;

			case 'messages':
				template.page="createMessage.html";
				template.param=id;
				

			break;

			case 'messages_sent':
				template.page="createMessage.html";
				template.param=id;
				

			break;

			case 'candidate':
				template.page="createMessage.html";
				template.param=id;
			break;

			case 'searchCandidates':
				template.page="createMessage.html";
				template.param=global.candidate.id;
			break;
			
			
		}
		global.template=template;
		global.module=module;
		ingniteLightBox = new LightBox(div1,div2,template)
		ingniteLightBox.lightBoxOn()
	}



	function pre_viewBox(obj,id,param,type,inc){
		//'friendRequest'
		page="viewpro1_open.html"

		switch(type){
			case 'friendRequest':
				
				global.candidate.id=id;
				global.module="candidate"
			break;

			case 'friend':
				global.candidate.id=id;
				global.module="friend";
				//page="viewpro1_openFriend.html"
			break;

			case 'friendMessage':
				var gom=$.parseJSON(sessionStorage.getItem("friendsObj"));
				global.candidate.id=gom.returnObj[id].agape_profile_username;
				global.module="friendMessage";
				page="createMessage.html"
			break;


		}
		viewBox(this,global.candidate.id,'default',page);
	}
		
function date_MySQL_Stan(a)
{	
	
	if(a!=undefined)
	{
		datetime_split=a.split(' ');
		var months = new Array('January','February','March','April','May','June','July','August','September','October','November','December')
		var date_split=datetime_split[0].split('-');
		return months[parseInt(date_split[1]-1)]+" "+date_split[2]+", "+date_split[0];
	}

}

function calendar22()
{				
	$('#agape_profile_dateOfBirth10').css('display','block');
	$('#agape_profile_dateOfBirth10').css('visibility','visible');
	$('#agape_profile_dateOfBirth10').css('font-size',10);
}
	

		
		
	

function panelChange(page)
{
	//var elem=obj.id;				
	//var newElem=elem.substr(5);	

	if(page=='friends'){
		control="getFriends"
	}

	if(page=='message'){
		control="getMessages"
	}
	$("#"+lastNav).fadeOut('fast');	
	$("#"+page).fadeIn('fast');				
	$("#butt_"+page).addClass("clickClass");
	$("#butt_"+lastNav).removeClass("clickClass");	
	lastNav=page;
}
			
			
			
		function updateTime()
			{
					
				var newTime
					
				var browserDetect=navigator.userAgent;
				var bd=browserDetect.search(/MSIE/i);	
				if(bd!=-1)
				{
					
					newTi=new Date();	
					var changeFormat=newTi+"";
					var timeHolder=changeFormat.split(" ");
					var yr=timeHolder[5];
					var month;
					
					for(var t in timeObj.halfMonthsName)
					{
						if(timeHolder[1]==timeObj.halfMonthsName[t])
						{
							month=parseInt(t)+1;
						}					
					}	
					
					
					var day=timeHolder[2];
					var minutes=timeHolder[3];
					var hours=timeHolder[3];					
					newTi=yr+"-"+month+"-"+day+" "+hours+":"+minutes				
					
					newTime=getTime(newTi,"true");	
					document.getElementById('dateField').innerHTML=newTime;	
				
				}
			
			
				var browserDetect=navigator.userAgent;
				var bd=browserDetect.search(/Chrome/i);	
				if(bd!=-1)
				{
									
					newTi=new Date();	
					newTime=getTime(newTi,"true");				
					document.getElementById('dateField').innerHTML=newTime
				}
					

	//Tues Jul 2 09:18:00 EDT 2013				
					
				
			}
			
			function cudaBrown()
			{
				if(moSlide<0)
				{$('#sliderDiv').animate({
					left: '+=150',
					}, 500, function() {
						moSlide=moSlide+150
						// Animation complete.
						});
				}			
			}
			
			
			function l_slide()
			{
			
				if(moSlide>=-1200 && moSlide<=0)
				{
				$('#sliderDiv').animate({
							left: '-=150',
					}, 500, function() {
						moSlide=moSlide-150
						});
						
						}
			}
			
			function loadSearchHeader(){	
				var userObj=sessionStorage.getItem("user");
				userObj=$.parseJSON(userObj)		
				$("#searchCall").html("Local people from the "+userObj['agape_profile_city']+" area.")
			}
			
			
			function loadModule(obj)
			{						
				var creator=$(obj).val();			
				var indx=obj.selectedIndex;				
				TextBCreator(creator);	
				populateForm();			
				document.getElementById('agape_profile_intentions').selectedIndex=indx;
				//getstateObj('agape_profile_state');				
			}
			
			
		function visitPro1()
		{			  
			looperID=document.getElementById('uID_se').value;			  
			testwindow = window.open("viewpro1.php?par="+looperID, "mywindow", "location=1,status=1,width=720,height=1100,scrollbars=1,status=1");    
			testwindow.moveTo(0, 0);		
		}
		
		function visitProEE(obj){
			
			var mType=$(obj).attr("id");
			var pNode=obj.parentNode.parentNode.parentNode;
			//pNode.style.backgroundColor="green";
			var messgeList="";
			var member="";
			var indx=pNode.id.substr(4);

			switch(mType){
				case 'messB':
					messgeList=sessionStorage.getItem("messages");
					var messageArray=messgeList.split("**");
				
					var mess=$.parseJSON(messageArray[1]);
					indx=pNode.id.substr(4);
					member=mess.returnObj[indx].agape_message_sender_ID;
				break;

				case 'sentB':
					messgeList=sessionStorage.getItem("messages_sent");
					var messageArray=messgeList.split("**");
				
					var mess=$.parseJSON(messageArray[1]);
					var member=mess.returnObj[indx].agape_message_receiver_ID;
				break;
			}
			
			
			
		
			testwindow = window.open("viewpro1.php?par="+member, "mywindow", "location=1,status=1,width=720,height=1100,scrollbars=1,status=1");    
			testwindow.moveTo(0, 0);		
		}
		
		
		function uploadImages()
		{		
			var mID=userObj.agape_profile_username
			testwindow = window.open("uLoads.php?par="+mID, "mywindow", "location=1,status=1,width=550,height=50,scrollbars=1,status=1");    
			testwindow.moveTo(0, 0);
		}
			
			
			
			function searchDiv()
			{
				searchDivObj={}
				$("#searchpanelInputs :input").each(function(){
				if($(this).val()!='Not Important'){
					keys=$(this).attr('id');
					keys=keys.substr(3)
					searchDivObj[keys]=$(this).val()					
					}	
				})
				searchObj=JSON.stringify(searchDivObj);
				rand=Math.floor((Math.random()*10)+1); 
				obj={};
				obj.job="searchDiv";				
				obj.params=searchDivObj;	
		
				func=function(data){	

					crankOutSearchResults(data)
				};	
				ajaxCall(obj,func)			
			}
			
			
			
			function crankOutSearchResults(obj)
			{			
				
				
				var OBJect=obj+"";
				searchO=OBJect.split("**");
				searchO[0]=$.trim(searchO[0]);	
			
				if(searchO[0]=='true')
				{
					
					var newObj=$.parseJSON($.trim(searchO[1]))
					var total=newObj.returnObj.length;
					
					f25Obj=newObj.returnObj;		
					f25builder(newObj);	
				}
				else
				{
					alert("no results")
				}				
			}
			
			
			
			
			lastTopPanel="blogNcenter"
			function movePanel(level,panel)
			{
				switch(level)
				{
					case 'topPanel':
						document.getElementById(lastTopPanel).style.display="none";
						document.getElementById(panel).style.display="block";
						lastTopPanel=panel;
					break;				
				}			
			}
			
			
			
			
			
			function loadPicContainer()
			{
				var mImg=$.parseJSON(userObj['agape_profile_default_img']);	
			
				mImg1=eval(mImg);				
				for(q=1;q<9;q++)
				{
					var indx="cPic"+q
					var iDDx="cPicLabel"+q
					if(mImg1["Pic"+q])
					{						
						if(mImg1["Pic"+q]!="Untitled")
						{
							document.getElementById(indx).src=mImg1["Pic"+q]
							document.getElementById(iDDx).innerHTML=mImg1["Pic"+q+"Title"]
						}					
					}				
				}
			}

			
			function profileFormValidator(obj)
			{	
			
				var functionDirect ='updatePro';
				obj=obj+"";

				window.submitForm1="true"
				for(i=0;i<quesObject['fields'].length;i++)
				{					
					if(quesObject['fields'][i].col!='agape_profile_memberID')
					{
						if(quesObject['fields'][i].quesLoc=='all')
						{
							var rowChek=$("#"+quesObject['fields'][i].col).val()
							if(rowChek=='' || rowChek=='Select one')
							{
								$("#"+quesObject['fields'][i].col).css('backgroundColor','#696969');
								if(global.navFunc!="LoggedOut"){
									window.submitForm1="false";
								}											
																
							}
							if($("#"+quesObject['fields'][i].col))
							{								
								colSubObj[quesObject['fields'][i].col]=$("#"+quesObject['fields'][i].col).val();
							}									
						}
						
						if(quesObject['fields'][i].quesLoc!='all' && window.submitForm1!="false")
						{
							colSubObj[quesObject['fields'][i].col]=$.trim($("#"+quesObject['fields'][i].col).val());							
						}
							
					}
					
					
					if(quesObject['fields'][i].col=='agape_profile_opts')
					{						
						var va="none";						
						$('#agape_profile_opts :checkbox:checked').each(function(i){	
							if($(this).val()!='on')
							{
								
								if(va=="none")
								{
									va=$(this).val();						
								}
								else
								{
									va=va+"$$"+$(this).val();						
								}	
							}
						
						});						
						colSubObj['agape_profile_opts']=va;	
					}	
					
					
					
					
					if(quesObject['fields'][i].col=='agape_profile_opts_partner')
					{						
						var va="none";						
						$('#agape_profile_opts_partner :checkbox:checked').each(function(i){	
							if($(this).val()!='on')
							{
								
								if(va=="none")
								{
									va=$(this).val();						
								}
								else
								{
									va=va+"$$"+$(this).val();						
								}	
							}
						
						});						
						colSubObj['agape_profile_opts_partner']=va;	
					}						
				}
				
				if(document.getElementById('agape_profile_dateOfBirth10').value=="")
				{
					document.getElementById('agape_profile_dateOfBirth10').style.backgroundColor="#696969";					
				}
				
				if(global.navFunc =='LoggedOut'){
					functionDirect ="createAccount"
					colSubObj['agape_profile_dateOfBirth']=document.getElementById('agape_profile_dateOfBirth10').value
					
				}else{
						colSubObj['agape_profile_memberID']=window.userObj.agape_profile_memberID;
				
				}
				
				if(window.submitForm1=="true")
				{						
					var JsonObj=JSON.stringify(colSubObj);	
					$.get("AjaxPage1.php", {job:functionDirect, obj:JsonObj}, function(data){account(data)});							
				}				
			}
			
			
		function account(obj)
		{
			obj=$.trim(obj);
			var dObj=obj.split('**');
			
			setStorage('user',dObj[1])
			global.navFunc ='LoggedIn';
			var stink=$.trim(dObj[1]);

			if($.trim(dObj[0])=='true'){
				$('#responseProfileUpdate').css("display","block");
			}else{
				alert("record not updated");
			}
			require(['modules/logReturn'],function(logReturn){
				logReturn.loginReturn(obj)
			});	
		}
			
		
			
			

		
			
			function messgProfile(elem){
				var valu=$(elem).parent().parent().attr("id");
				var indxId=valu.substring("4");
				var truObj=sessionStorage.getItem("messages").split("**");
				var messObj=$.parseJSON(truObj[1])
				var id=messObj.returnObj[indxId].agape_message_sender_ID;
				var testwindow = window.open("viewpro1.php?par="+id, "mywindow", "location=1,status=1,width=720,height=1100,scrollbars=1,status=1");    
				testwindow.moveTo(0, 0);	
			}
			
			
			
			function nextTab(obj,action)
			{
				var Objt=obj.parentNode.parentNode;
				$("#messContainer").html("<div style='width:98%;text-align:center;'><img src='images/loading37.gif' height='185'/></div>")
				
				global.paginate=0;
				for(w=0;w<Objt.childNodes.length;w++){
					if(typeof Objt.childNodes[w].innerHTML !== typeof undefined  )
					{
						var trunk=Objt.childNodes[w].innerHTML;
						if(trunk.search(/messHeader/gi)!=-1){
							$(Objt.childNodes[w].childNodes[0]).removeClass('onMess');
						}
					}
				}
				$(obj).addClass('onMess');
				
			

				switch(action){

					case 'friendRequest':
						
						require(['modules/getFrRequest'],function(friend){
							friend.getFrRequest(0);
							
						})
					break;

					case 'friends':
						
						require(['modules/getFrRequest'],function(friend){
							friend.getFriends(0);
						})
					break;


					case 'createMessage':
						require(['modules/message'],function(messages){
							messages.createMessages();	
						});

					break;

					case 'getMessages':
					
						MessageCaller(0,"received")

					break;

					case "getMessages_sent":
						
						require(['modules/forms'],function(forms){
							//forms.populateForm_Messages_sent(0);
						});
						global.parser="sent";

						MessageCaller(0,"sent")


					break;


				}
				
			}
			
			function sendMessage(obj){

				global.sendMessage="true"
				var sendObj={};
				sendObj.uID=global.agape_profile_memberID;
				sendObj.job="quickInsertAtomic";
				sendObj.uID=global.userObj.agape_profile_memberID;
				sendObj.dbase="agape_messages";
				sendObj.obj={}
				$.each($(".messageReply_Style :input"),function(){
					
					if($(this).val()!=""){
						sendObj.obj[$(this).attr("id")]=$(this).val();
						
					}else{
						global.sendMessage="false"
					}
					
					
				})
				

				if(global.sendMessage=="true"){
					var t=$.parseJSON(sendObj.obj.agape_message_receiver_url)
					sendObj.obj.agape_message_receiver_url=t.defaultPic
					sendObj.obj.agape_message_sender_ID=global.userObj.agape_profile_memberID;
					sendObj.obj.agape_message_sender_username=global.userObj.agape_profile_username;
					sendObj.obj.agape_message_title=globalTools.stringClear(sendObj.obj.agape_message_title)
					var wed=$.parseJSON(global.userObj.agape_profile_default_img);
					sendObj.obj.agape_message=globalTools.stringClear(sendObj.obj.agape_message)
					sendObj.obj.agape_sender_url=wed.defaultPic;
					sendObj.obj.agape_message_send_date=convertNowToPhP();
					sendObj.obj.agape_message_update=sendObj.obj.agape_message_send_date;
					sendObj.obj.agape_message_responses="none"
					sendObj.key="false";

				}

				var retFunk=function(data){
	
					var mess1="Message sent"
					var elem1=$("#sentmessFlag")[0]
					fademessg(elem1,mess1);
					$.each($(".messageReply_Style :input"),function(){
					
						$(this).val("")
						
					})
					
				}

				if($(obj).attr("id")!="clear"){
					ajaxCallPost(sendObj,retFunk);
				}else{
					$.each($(".messageReply_Style :input"),function(){;
						$(this).val("");
					})
					$("#agape_message_receiver_username").attr("readonly",false)
				}


				//ajaxCallPost(sendObj,retFunk);

				/*global.sendMessage="true"
				$.each($(".messageReply_Style :input"),function(){
					
					if($(this).val()!=""){
						sendObj[$(this).attr("id")]=$(this).val();
						
					}else{
						global.sendMessage="false"
					}
					
					
				})
				
				if(global.sendMessage=="true"){
					sendObj.agape_message_sender_username=global.userObj.agape_profile_username;
					sendObj.agape_message_sender_ID=global.userObj.agape_profile_memberID;
					var free=$.parseJSON(global)
					sendObj.agape_sender_url=free.defaultPic;
					sendObj.agape_message_responses='none';
					var timo="7"
					
					require(['modules/timeObj'],function(timeObj){
						timo=timeObj.convertToPhP("diablo");
						sendObj.agape_message_send_date=timo;
						sendObj.agape_message_update=timo;
						var mainObj={};
						mainObj.job="createMessage";
						var tt=JSON.stringify(sendObj)
						//tt=encodeURIComponent(sendObj);
						mainObj.message=sendObj;
					
						
						
						var func=function(data){
						
							$("#messContainer").empty()
							nextTab(document.getElementById('sentTab'),'getMessages_sent')
							
						}
				
						ajaxCall(mainObj,func)	
					})
					
				
				}else{
				
				
				}*/
			
			}
			
		function bodyTestKey(key,row){
	
			var sendObj={};
			sendObj.job='quickCheck';
			sendObj.key=key;
			sendObj.row=row;
			var func=function(data){
				var obj=data+"";
				obj=$.trim(obj);
				obj=obj.split("**");
				
				if(obj[0]=='true'){
					$("#agape_message_receiver_username").css("text-decoration","underline").attr('readonly', 'readonly');
					var receiverObj = $.parseJSON(obj[1]);
					var _receiverObj = receiverObj.returnObj[0];
					global.sendMessage="true";
					$("#agape_message_receiver_ID").val(_receiverObj.agape_profile_memberID);
					$("#agape_message_receiver_url").val(_receiverObj.agape_profile_default_img);
					$("#agape_message_receiver_username").css("background-color","#ffffff");
					$("#agape_message_receiver_username").css("text-decoration","underline");
					
				}else{
					global.sendMessage="false";
					$("#agape_message_receiver_ID").val("");
					$("#agape_message_receiver_username").css("background-color","gray");
					
				}
			};
			ajaxCall(sendObj,func)	
		
		}



		last_loadTemplate="communityTemplate.php";
			function loadTemplate(id,page,returnObj1){


				clearNavClasses();
				

				$.get(global.baseUrl+"/templates/"+page,function(data){


					switch(page){
						case 'communityTemplate.php':
							$("#body").addClass("bodyStyles_community");
						
							$("#statsBarNews").css("display","none");
							vigo = sessionStorage.getItem("page")
							$("#tag").removeClass().addClass("tag_community")
							$("#footerBackground").removeClass().addClass("flexFooter_base");
							$("#"+id).empty().append(data);
							
							$("div[class^='newNav2']").each(function (){
								
								$(this).removeClass().addClass("newNav2_community")

							})

							$("#Community").addClass("newNav2_on_community")
						break;


						case 'sponsors.html':

							$("#footerBackground").removeClass().addClass("flexFooter_base");
							$("#"+id).empty().append(data);
							$("#body").addClass("bodyStyles_defaultGradient");
						break;

						case 'search.html':
						
							$("div[class^='newNav2']").each(function (){
								$(this).removeClass().addClass("newNav2_romance")
							})

							var verif=globalTools.verifyUser();
							if(verif=="false"){
								$.get(global.baseUrl+"/templates/splash.html",function(datam){
									$("#"+id).empty().append(datam);
								})
								$("#footerBackground").addClass("flexFooter_romance");
								$("#tag").removeClass().removeClass().addClass("tag_romance");
								$("#body").addClass("bodyStyles_romance");

							}else{
								//$("#body").addClass("bodyStyles_romance");
								//$("#statsBarNews").css("display","none");
								$("#"+id).empty().append(data);
							    $("#footerBackground").addClass("flexFooter_romance");
								$("#tag").removeClass().removeClass().addClass("tag_romance");
							    $("#Search").addClass("newNav2_on_search")
							
							}

							
							
						break;


						

						case 'accountTemplate.html':
							$("#body").addClass("bodyStyles_defaultGradient");
							$("#statsBarNews").css("display","none");
							$("#"+id).empty().append(data);

							
						break;
						case 'newsHome.html':
							//$("#body").addClass("bodyStyles_community");
							$("#tag").removeClass().addClass("tag_media")
							$("#body").addClass("bodyStyles_media");
							$("#statsBarNews").css("display","none");
							$("#"+id).empty().append(data);
							$("#footerBackground").removeClass().addClass("flexFooter_base");
							$("div[class^='newNav2']").each(function (){
								$(this).removeClass().addClass("newNav2_media")
							})


							
							
						break;

						case 'newsHomeView.html':
						
							$("#body").addClass("bodyStyles_news");
							$("#statsBarNews").css("display","block");
							$("#"+id).empty().append(data);
							
						break;

						case 'polldaddyHome.html':
							
							$("#body").addClass("bodyStyles_president");
							$("#statsBarNews").css("display","block");
							$("#"+id).empty().append(data);
						break;
						
						case 'presidentWho.html':
							$("#body").addClass("bodyStyles_president");
							$("#statsBarNews").css("display","none");
							$("#"+id).empty().append(data);
							$("#footerBackground").css("backgroundImage","url('images/delaware1.png')");
							
						break;

						case 'President_Trump.html':
							$("#body").addClass("bodyStyles_president");
							$("#statsBarNews").css("display","none");
							$("#"+id).empty().append(data);
							//$("#footerBackground").css("backgroundImage","url('images/delaware2.png')");
							$("#footerBackground").removeClass().addClass("flexFooter_Trump");
							
							$("#tag").removeClass().addClass("tag_Trump")
							
						break;

						

						case 'presidentView.html':

							$("#body").addClass("bodyStyles_president");
							$("#statsBarNews").css("display","none");
							$("#"+id).empty().append(data);
							
						break;



						case 'aboutUs.html':

							$("#body").addClass("bodyStyles_president");
							$("#statsBarNews").css("display","none");
							$("#"+id).empty().append(data);
							
						break;


						case 'presidentView.php':
						
							$("#body").addClass("bodyStyles_president");
							$("#statsBarNews").css("display","none");
							$("#"+id).empty().append(data);
							
						break;

						case 'peopleView.html':
							$("#body").addClass("bodyStyles_president");
							$("#statsBarNews").css("display","none");
							$("#"+id).empty().append(data);
							
						break;

						


						case 'createTopic.html':
							$("#body").addClass("bodyStyles_topic");
							$("#statsBarNews").css("display","none");
							$("#"+id).empty().append(data);

						break;


						case 'topicHomeView.html':
							$("#body").addClass("bodyStyles_topic");
							//$("#statsBarNews").css("display","none");
							$("#"+id).empty().append(data);
							break;


						case  'communityRegister.html':
							$("#body").addClass("bodyStyles_community");
							$("#tag").removeClass().addClass("tag_community");
							$("#"+id).empty().append(data);
							$("#Register").addClass("newNav2_on_community")
							//#464343
							break;


						case 'CommercialForm_Noregister.html':
							$("#body").addClass("bodyStyles_community");
							$("#tag").removeClass().addClass("tag_community");
							$("#"+id).empty().append(data);
							$("#Register").addClass("newNav2_on_community")
							break;

						case 'splash.html':
							$("#footerBackground").removeClass().addClass("flexFooter_base");
							$("#tag").removeClass().addClass("tag_community");
							$("#"+id).empty().append(data);
							break;

							case 'profilepage.html':
							var verif=Verifyuser();
							
							if(verif=="false"){
								$.get(global.baseUrl+"/templates/splash.html",function(datam){
									$("#"+id).empty().append(datam);
								})

							}else{
								$("#"+id).empty().append(data);
								$("#footerBackground").addClass("flexFooter_romance");
								$("div[class^='newNav2']").each(function (){
									$(this).removeClass().addClass("newNav2_romance")
								})


								$("#body").addClass("bodyStyles_romance");
								$("#statsBarNews").css("display","none");
						
								
								$("#tag").removeClass().removeClass().addClass("tag_romance");
								$("#Profile").addClass("newNav2_on_search")
							}

						break;

						case 'contactTemplate.html':
							

							$("div[class^='newNav2']").each(function (){
								$(this).removeClass().addClass("newNav2_contact")
							})
						
							$("#ContactUs").removeClass("newNav2_contact").addClass("newNav_on_contact")
							$("#tag").removeClass().addClass("tag_contact");
							$("#"+id).empty().append(data);

							//#520303
							//#924a4a
						break;

						case 'advertise.html':

							$("#commercialUs").addClass("newNav2_on_community");
							
							$("#"+id).empty().append(data);
							$("#body").addClass("bodyStyles_defaultGradient");
						break;

						case 'messageBox.html':

								$("#footerBackground").removeClass().addClass("flexFooter_base");
								$("#body").addClass("bodyStyles_defaultGradient");
								$("#ContactUs").removeClass("newNav2_contact").addClass("newNav_on_contact");
								$("#"+id).empty().append(data);
						break;

						case 'friendTemplate.html':
							$("#body").addClass("bodyStyles_defaultGradient");
							$("#"+id).empty().append(data);
						break;

						case 'siteMap1.html':
							$("#body").addClass("bodyStyles_defaultGradient");
							$("#"+id).empty().append(data);

						break;



						case 'messages.html':
							$("#body").addClass("bodyStyles_defaultGradient");
							$("#"+id).empty().append(data);

						break;

						default:
							
							$("#body").addClass("bodyStyles_defaultGradient");
							$("#statsBarNews").css("display","none");
							$("#"+id).empty().append(data);
							$("#footerBackground").css("backgroundImage","url('"+global.baseUrl+"/images/delaware1.png')");
							break;
					}
					if(returnObj1!=""  && returnObj1!== undefined){
					
						returnObj1();
					}else{


					}
					
					
				})
				
			}



		function changeNavNewNav(elem,page,obj){

			loadTemplate(elem,page)
			$(".newNav2").each(function(){
				$(this).removeClass("newNav2_on")
			})
			$(obj).addClass("newNav2_on");


				
		}

		function changeNavNewPage(param,obj){
			if($(obj).attr("id")){
				switch($(obj).attr("id")){
					case 'Community':
						global.lastNav="communityTemplate.php";
					break;

				}
			}

			globalTools.save();
	
			switch(param){
				case 'document':

					window.location.assign(global.baseUrl+"/community");
				break;
			}

			
		}
		


		function getstarted(){
			
			if(global.fieldChk.username=="go" && global.fieldChk.email=="go"){ 
			var sendObj={};
			sendObj.obj={}
			sendObj.dbase="agape_profile"
			sendObj.job='quickInsertAtomic';
			sendObj.uID=global.userObj.agape_profile_memberID;
			sendObj.key="false";
			$("#formQuestions :input").each(function(){
				sendObj.obj[$(this).attr("id")]=$(this).val();
			})
			//sendObj.obj=JSON.stringify(sendObj.obj)
			sendObj.obj.agape_vote_recordThumbs="[]";
			sendObj.obj.agape_vote_recordPolls="[]";
			sendObj.obj.agape_profile_friends="[]";

			var defaultImg="";
			if(sendObj.obj['agape_profile_gender']=='Male')
			{
				defaultImg="{\"defaultPic\":\"profileImages/Male-icon.png\",\"defaultPicTitle\":\"My Pics\",\"Pic1\":\"profileImages/Male-icon.png\",\"Pic1Title\":\"Untitled\",\"Pic2\":\"Untitled\",\"Pic2Title\":\"Untitled\",\"Pic3\":\"Untitled\",\"Pic3Title\":\"Untitled\",\"Pic4\":\"Untitled\",\"Pic4Title\":\"Untitled\",\"Pic5\":\"Untitled\",\"Pic5Title\":\"Untitled\",\"Pic6\":\"Untitled\",\"Pic6Title\":\"Untitled\",\"Pic7\":\"Untitled\",\"Pic7Title\":\"Untitled\"}";
			}
			else
			{
				defaultImg="{\"defaultPic\":\"profileImages/Female-icon.png\",\"defaultPicTitle\":\"My Pics\",\"Pic1\":\"profileImages/Female-icon.png\",\"Pic1Title\":\"Untitled\",\"Pic2\":\"Untitled\",\"Pic2Title\":\"Untitled\",\"Pic3\":\"Untitled\",\"Pic3Title\":\"Untitled\",\"Pic4\":\"Untitled\",\"Pic4Title\":\"Untitled\",\"Pic5\":\"Untitled\",\"Pic5Title\":\"Untitled\",\"Pic6\":\"Untitled\",\"Pic6Title\":\"Untitled\",\"Pic7\":\"Untitled\",\"Pic7Title\":\"Untitled\"}";
			}

			sendObj.obj.agape_profile_default_img=defaultImg;
			global.userObj=sendObj.obj;
			//globalTools.save();
			var func=function(data){
				
				
				var selObj={};
				selObj.job="quickSelect_atomic";
				selObj.dbase="agape_profile";
				selObj.param="agape_profile_username";
				selObj.value=global.userObj.agape_profile_username;
				selObj.start=0;
				funck=function(datum){
					
					var ee=globalTools.verify(datum);
					var tehe="true**"+JSON.stringify(ee.returnObj[0]);

					require(['modules/logReturn'],function(logreturn){
						logreturn.loginReturn(tehe)
					})

				}
				ajaxCallPost(selObj,funck)

			}
			ajaxCallPost(sendObj,func)	
			}else{
				alert("no gio")
				//formQuestions
			}
			
		}

		function openButtons(){
			$(".optButtons1").each(function(){
				$(this).removeClass("optButtonOff");
			})

		}

		function addMouseOver1(){
			$(".optButtons1").on("mouseenter", function(){

				$(this).addClass("optButtonHover")
			})
			$(".optButtons1").on("mouseleave", function(){
				
				$(this).removeClass("optButtonHover")
			})

		}

		function completProfile(){
			alert("completProfile")
		}

function agefinder(dateStrg){

	var ageHolder=dateStrg;
	ageHolder=ageHolder.split(" ");
	ageHolder1=ageHolder[0];
	ageHolder1=ageHolder1.split("-");
	var today= new Date();
	var age = parseInt(today.getFullYear())-parseInt(ageHolder1[0])

	if(parseInt(today.getMonth())+1 > parseInt(ageHolder1[1])){
		age=age-1;
	}
	return age;

}



function mNumberFinder(obj){
	var userO = $.parseJSON(sessionStorage.getItem("user"));
	var totalCriteriaIndex=0;
	
	//total toptions
	var var1=0;
	// This object holds the partner search parameters from the user object
	var partnerObj={};
	var partnerObjComp={};
	_.each(global.userObj,function(data,index){
		var t=index.search("partner");
		if(t!=-1){
			if(data!="Not Important" && data!="Not Answered" && data!="none"){
				// creating new string for search key
				var newKey= index.replace("partner", "profile"); 
				if(newKey=='agape_profile_age_range'){
					newKey='agape_profile_age';
				}
				partnerObj[newKey]=global.userObj[index];
			}
		}
	})


	// This object holds the partner object converted
	_.each(obj,function(data,index){
		var t=index.search("profile");
		if(t!=-1){
			if(data!="Not Important" && data!="Not Answered" && data!="none"){
				// creating new string for search key
				partnerObjComp[index]=obj[index];
				
			}
		}
	})
	delete partnerObj.agape_profile_profile_description

	//How many matches
	totalOptions=0;
	totpoints=0;
	partialpoint=0;
	optPoints=0;
	optCounter=0;
	_.each(partnerObj,function(data,index){
		
		if(partnerObj[index]==partnerObjComp[index] && partnerObj[index]!='Now answered' && partnerObj[index]!='none'){
			totpoints=totpoints+1;

			
		}else{
			
			if(partnerObj[index]!='none'){
				var formIndex=0;
				for(v=0;v<formObj.fields.length;v++){
					if(formObj.fields[v].col==index){
						formIndex=v;
					}

					
				}
				
				if(index=='agape_profile_bodyType' || index=='agape_profile_alcohol' || index=='agape_profile_education' ){
					if(formObj.fields[formIndex].col=='agape_profile_bodyType' || formObj.fields[formIndex].col=='agape_profile_alcohol' || formObj.fields[formIndex].col=='agape_profile_education'){
						var ter=formObj.fields[formIndex].quesParams.length;
						var innerIndex;
						for(q=0;q<ter;q++){
							if(formObj.fields[formIndex].quesParams[q]==partnerObjComp[index]){
								innerIndex=q;
							}
						}
						var highBody=innerIndex+2;
						var lowBody=innerIndex-2;
						for(q1=lowBody;q1<highBody;q1++){
							if(q1>0 && q1<formObj.fields[formIndex].quesParams.length && partnerObjComp[index]==formObj.fields[formIndex].quesParams[q1]){
								partialpoint=partialpoint+1;
								
							}
						}
					}
				}
				
				if(index=='agape_profile_height'){
					var highHeight=partnerObj[index]+3;
					var lowHeight=partnerObj[index]-3;
					
					for(q1=lowHeight;q1<highHeight;q1++){
						if(partnerObjComp[index]==q1){
							partialpoint=partialpoint+1;
						}
					}
				}
				
				if(index=='agape_profile_opts'){
					var uOb=$.parseJSON(partnerObj[index]);
					var cOb=$.parseJSON(partnerObjComp[index]);
					var uObLeng=uOb.length;
					var cObLeng=cOb.length;
					for(q=0;q<uObLeng;q++){
						for(q1=0;q1<cObLeng;q1++){
							if(uOb[q]==cOb[q1]){
								optPoints=optPoints+1;
							}
						}
					}
					optCounter=uObLeng;
				}
			
				
				if(index=='agape_profile_age_range'){
					//var secondIndex="agape_profile_age";
					if(partnerObj[index]==partnerObjComp[index]){
						totpoints=totpoints+1;
					}else{
						var highage=partnerObj[index]+3
						var lowage=partnerObj[index]-3
						for(q=lowage;q<highage;q++){
							if(q==partnerObjComp[index]){
								partialpoint=partialpoint+1;
							}
						}
					}
				}
			}
		}
		
		totalOptions=totalOptions+1;

		if(partnerObjComp.agape_profile_username=='uname250'){
		}
		
	})

	totalcalc=100/totalOptions;
	pPoint=totalcalc/2;
	
	
	if(optCounter>0){
		optCalc=totalcalc/optCounter;
	}else{
		optCalc=0;
	}


	
	score=(totpoints*totalcalc)+(partialpoint*pPoint)+(optPoints*optCalc);
	return parseInt(score);
}


function callColor(magicnum){
	var _color='green';
	if(magicnum>0 && magicnum<36){
		_color='black';
	}
	if(magicnum>=35 && magicnum<51){
		_color='gray';
	
	}
	if(magicnum>=50 && magicnum<73){
		_color='orange';
	
	}
	if(magicnum>=72){
		_color='lime';
	}

	return _color;
}



	var global_passOn
	function LightBox(element,dataElement,template,id){
		var _this=this;
		this.temp=template;
		this.executeOnOpen="none";

		this.lightBoxOn=function(){
			var le=$("#opacback").height();
			
			TweenMax.to(element,.1,{css:{display:"block",height:le},onComplete:function(){
				TweenMax.to(element,.2,{css:{opacity:.7},onComplete:function(){
					
				}})
				
				TweenMax.to(dataElement,.3,{css:{display:"block"},delay:-.3,onComplete:function(){
					TweenMax.to(dataElement,.5,{css:{opacity:1}})
				}})
				}
			})

			$(".closeButton").on("click",function(){
				_this.lightBoxOff(element,dataElement);
				//$("#_lBoxMainDiv").removeClass();
				$("#_lBoxMainDiv").removeClass("bodyStyles_IssuesComms1");
				$("#_lBoxMainDiv").removeClass("issuesComments_gradient");
				$("#_lBoxMainDiv").removeClass("bodyStyles_searchGradient");
				$("#footerPush").css("z-index",10)
				_this.executeReturnFunc_close();
			})

			this.loadTemplate(template.page);
			this.passData_opn();
			
			var tee=$(window).width();
			var px= (tee-1000)/2;
			px=px+"px";
			$(".lBoxMainDiv").css({"left":px,"position":"absolute","z-index":25});
			$("#footerPush").css("z-index",5);
			$("body").scrollTop("0px");
			this.execute_afterOpen();
		
			
		}
					
		this.loadTemplate= function(page){
			$.get(global.baseUrl+"/templates/"+page,function(data){
				$("#lBoxDiv").empty().append(data);

			})
		}

		this.lightBoxOff=function(){
			TweenMax.to(element,.5,{css:{opacity:0},onComplete:function(){
					TweenMax.to(element,.4,{css:{display:"none"}});
				}
			})
			TweenMax.to(dataElement,.5,{css:{opacity:0}});
			TweenMax.to(dataElement,.1,{css:{display:"none"}});
			$("#lBoxDiv").empty();
		}

		this.executeReturnFunc_close=function(){

			if(global.returnFunction_close!==undefined){
				if(global.returnFunction_close!="none"){
					global.returnFunction_close();
					global.returnFunction_close="none";

				}else{
					global.returnFunction_close="none"
				}

			}
			
		}

		this.execute_afterOpen=function(funk){

			
		

			if(_this.executeOnOpen!="none"){
				_this.executeOnOpen();
				_this.executeOnOpen="none";

			}
			
		}

		this.passData_opn=function(){
			global_passOn = template;
		}

		this.setAfterOpenFunction=function(funk){

			_this.executeOnOpen=funk;

		}

		

	}
			
	function LightBoxCall(id){
		var div1=document.getElementById("_lboxBackground");
			var div2=document.getElementById("_lBoxMainDiv");
			var template={};
			template.page="viewpro1.html";
			template.job="visitprofile";
			global.candidate.id=id;
			template.param=id;
			ingniteLightBox = new LightBox(div1,div2,template,id)
			ingniteLightBox.lightBoxOn()
		
	}
			
	function arrayTool(elem,task,param){
		switch(task){
			case 'removeIndex':
				var tre=elem;
				var fhalf=elem.slice(0,param)
				var shalf=elem.slice(param+1,elem.length);
				var total=fhalf.concat(shalf)
				return total;
			break;
		}
	}
	
	
	function loadFields(){
	
		for(i=0;i<formObj.fields.length;i++){
			
			if(formObj.fields[i].quesType=="select"){
			

				if($("#"+formObj.fields[i].col)){
					
					for(b=0;b<formObj.fields[i].quesParams.length;b++){


						if(formObj.fields[i].quesParams[b]!='records'){
						
							$("#"+formObj.fields[i].col).append("<option>"+formObj.fields[i].quesParams[b]+"</option>")
							
						}else{
							var leng=formObj.fields[i].records.length;
							for(var c=0;c<leng;c++){
								
								if(formObj.fields[i].col=="agape_profile_salary"){
									var otherIndx=c+1;
									if(otherIndx<leng){
										$("#"+formObj.fields[i].col).append("<option value='"+formObj.fields[i].records[c]+"'>$"+formObj.fields[i].records[c]+" - $"+formObj.fields[i].records[otherIndx]+"</option>")
									}else{
										
										$("#"+formObj.fields[i].col).append("<option value='"+formObj.fields[i].records[c]+"'>$"+formObj.fields[i].records[c]+"+</option>");
									}
									
									
							
									
								}else if(formObj.fields[i].col=="agape_partner_salary"){
									var otherIndx=c+1;
									if(otherIndx<leng){
										$("#"+formObj.fields[i].col).append("<option value='"+formObj.fields[i].records[c]+"'>$"+formObj.fields[i].records[c]+" - $"+formObj.fields[i].records[otherIndx]+"</option>")
									}else{
										
										$("#"+formObj.fields[i].col).append("<option value='"+formObj.fields[i].records[c]+"'>$"+formObj.fields[i].records[c]+"+</option>");
									}
								
								}else if(formObj.fields[i].col=="agape_profile_height"){
									var otherIndx=parseInt(formObj.fields[i].records[c]);
									var ft=parseInt(otherIndx/12);
									var modul=otherIndx%12;
									
									$("#"+formObj.fields[i].col).append("<option value='"+formObj.fields[i].records[c]+"'>"+ft+"ft"+modul+"</option>")
								
									
								}else if(formObj.fields[i].col=="agape_partner_age_range"){
									var otherIndx=parseInt(formObj.fields[i].records[c]);
									var o=c+1;
									var outer;
									if(o<leng){
										otherIndx=otherIndx+"-"+(parseInt(formObj.fields[i].records[o])-1)
									}else{
										otherIndx=otherIndx+"+";
									}
								
									
									$("#"+formObj.fields[i].col).append("<option value='"+formObj.fields[i].records[c]+"'>"+otherIndx+"</option>")
								
									
								}else if(formObj.fields[i].col=="agape_partner_height"){
									var otherIndx=parseInt(formObj.fields[i].records[c]);
									var ft=parseInt(otherIndx/12);
									var modul=otherIndx%12;
									
									$("#"+formObj.fields[i].col).append("<option value='"+formObj.fields[i].records[c]+"'>"+ft+"ft"+modul+"</option>")
								}
								else{
									$("#"+formObj.fields[i].col).append("<option>"+formObj.fields[i].records[c]+"</option>")
								}
								
								
							}
							
						}
					}

				}
			}


			

			if(formObj.fields[i].quesType=="options"){

				var leng=formObj.fields[i].quesParams.length;
				var adClear="false"
				if($("#"+formObj.fields[i].col)){
					var optVar="partnerOpts"
					if(formObj.fields[i].col=="agape_profile_opts"){
						optVar="profileOpts"
					}
					var tabHold="";
					var tdCntr=0;
					for(var c=0;c<leng;c++){

						if(formObj.fields[i].col!="agape_profile_recreation"){
							$("#"+formObj.fields[i].col+"_div").append("<div style='float:left;width:120px'>"+formObj.fields[i].quesParams[c]+"</div>");

							$("#"+formObj.fields[i].col+"_div").append("<div style='float:left;width:40px'><input name='"+formObj.fields[i].col+"'  class='opts "+optVar+" skip' type='checkbox' value='"+formObj.fields[i].quesParams[c]+"' ></div>");
						
							$("#"+formObj.fields[i].col+"_div").append("<div style='clear:both'></div>");
							
						}else{
							
							if(c==0){
								tabHold="<table>"
							}
							var h=tdCntr%5;
							
							if(tdCntr==0){
								tabHold=tabHold+"<tr>"
							}
							adClear="true"	
							tabHold=tabHold+"<td><div style='float:left;width:130px'>"+formObj.fields[i].quesParams[c]+"</div><div style='float:left;width:40px'><input name='"+formObj.fields[i].col+"'  class='optsActvts skip' type='checkbox' value='"+formObj.fields[i].quesParams[c]+"' ></div></td>"
							
							if(tdCntr==4){
								
								tabHold=tabHold+"</tr>";
								tdCntr=-1;
							}					}
							tdCntr=tdCntr+1;
						
						

					}

					if(adClear=="true"){
						$("#"+formObj.fields[i].col+"_div").append("<div style='clear:both'></div>");
						adClear="false"


					}



					if(tabHold!=""){
						tabHold=tabHold+"</table>"
						$("#agape_profile_recreation_div").empty().append(tabHold)

					}


				}

			}
			
			
		}

	}




	function viewArticles(obj,closer){
		alert("then")
		var $obj1=$(obj);
		SuperSlide.stop();
		var strg=$.trim($obj1.attr("id"))
		strg=strg.substr(4);
		global.newsObjView=global.newsObj.returnObj[strg];
		global.newsObjViewInx=strg;
		global.candidate.id="viewArticles";
		globalTools.save();
		loadTemplate('mainLBHolder',"newsHomeView.html");



		//var news1=$.parseJSON(sessionStorage.getItem("news"));
	}



	function viewArticlesSearch(obj,closer){
		var $g=$(obj);
		var id=$g.attr("id");
		id=id.substr(4);
		global.newsObjView=global.newsObj.returnObj[id];

		var div1=document.getElementById("_lboxBackground");
		var div2=document.getElementById("_lBoxMainDiv");
		var template={};
		var indx=0;
		template.page="ArticleView.html";
		template.job="visitprofile";
	
		global.newsObjViewInx=id;

		ingniteLightBox = new LightBox(div1,div2,template,indx)
		ingniteLightBox.lightBoxOn();


		
		
		
	}
	
	
	function polldaddy(){
		var _this=this;
		this.send=function(){
			var sendObj={};
			sendObj.dbase="agape_poll";
			sendObj.param="agape_poll_name";
			sendObj.value="prezpoll1";
			sendObj.job="quickSelect_atomic";
			sendObj.start=0;
			func=function(data){
				_this.build(data);
			}
			ajaxCall(sendObj,func);
			
		}
			
		this.build=function(objkt){
			
			var obj1 = globalTools.verify(objkt);
			var lengo=obj1.returnObj.length;
			for(d=0;d<lengo;d++){
				var _poll_options=$.parseJSON(obj1.returnObj[d].agape_poll_options)
				switch(_poll_options.poll.type){
					case 'typical':
						$("#poll_List").empty();
						var lengo1=_poll_options.poll.options.length;
						var strg1="";
						for(d1=0;d1<lengo1;d1++){
							strg1=strg1+"<div>"
							strg1=strg1+"<div class='pollwidthA'>"+_poll_options.poll.options[d1]+"</div>"
							strg1=strg1+"<div style='float:left;'><input type='radio' value='"+_poll_options.poll.options[d1]+"' name='poll435'/></div>"
							strg1=strg1+"<div style='clear:both;'></div>"
							strg1=strg1+"</div>"
						}
						
						strg1=strg1+"<div style='margin-top:20px;'>"
							strg1=strg1+"<div class='voteButton' style='width:45px;padding:4px;float:left;margin-right:15px;'>Vote</div>"
							strg1=strg1+"<div id='votes' class='pollVotes'>"+obj1.returnObj[d].agape_poll_votes+"</div>"
							strg1=strg1+"<div style='clear:both;'></div>"
						strg1=strg1+"</div>";
						$("#poll_List").append(strg1)
					break;
				
				}
			
			}
		}
			
	}
	
	
	function loginChkers(obj){
		
		if(sessionStorage.getItem("login")){
			
			if(sessionStorage.getItem("login")=="true"){
				obj();
			}else{
				alert("You need to login.");
				$("#username").focus();
			}
			
		}else{
				alert("You need to login.");
				$("#username").focus();
		}
		//$("#closeButton").click();
	}


function updateCommentDB(){
	var commentCount = {}
	commentCount.job="update_atomic"
	commentCount.param="addComment";
	commentCount.dbase="agape_topics";
	commentCount.field="agape_media_comments_count";
	commentCount.obj={};
	commentCount.obj.value="none"

	commentCount.vals=global.newsObjView.agape_media_ID;
	func33=function(data){
	};
	ajaxCallMedia(commentCount,func33);

	
}

function updatethumbsUpDB(obj){
	var commentCount = obj;
	func33=function(data){
		data1=$.trim(data);
		data1=data1.split("$$")
		switch(data1[0]){

			case 'thumbsUp':
				var upProf={}
				upProf.job="update_atomic";
				upProf.dbase="agape_profile";
				upProf.param='agape_profile_memberID';
				upProf.obj={};
				var thumbsRec=[];
				var thumbRecObj={}

				thumbRecObj.commentID=global.newsObjView.agape_media_ID;
				thumbRecObj.votetype="media_thumbs"
				if(global.userObj.agape_vote_recordThumbs=="Not Answered" || global.userObj.agape_vote_recordThumbs=="none"){
					thumbsRec.push(thumbRecObj)

				}
				if(global.userObj.agape_vote_recordThumbs!="Not Answered"){
					thumbsRec=$.parseJSON(global.userObj.agape_vote_recordThumbs);

					var leng=thumbsRec.length;
					if(leng==300){
						thumbsRec.shift();
					}
					thumbsRec.push(thumbRecObj);

				}
				
				var strg=JSON.stringify(thumbsRec);
				global.userObj.agape_vote_recordThumbs=strg;
				globalTools.save();
				upProf.obj.agape_vote_recordThumbs=strg;
				upProf.vals=global.userObj.agape_profile_memberID;
				var inc=parseInt(global.newsObjView.agape_media_thumbsUp)+1;
				global.newsObjView.agape_media_thumbsUp=inc;
				globalTools.save()
				func34 = function(data){
					//loadTemplate("mainLBHolder","newsHomeView.html");
					alert("back")
				}
				ajaxCallPost(upProf,func34);


			break;




			case 'thumbsDown':
				var upProf={}
				upProf.job="update_atomic";
				upProf.dbase="agape_profile";
				upProf.param='agape_profile_memberID';
				upProf.obj={};
				var thumbsRec=[];
				var thumbRecObj={}
				thumbRecObj.commentID=global.newsObjView.agape_media_ID;
				thumbRecObj.votetype="media_thumbs"
				if(global.userObj.agape_vote_recordThumbs=="Not Answered" || global.userObj.agape_vote_recordThumbs=="none"){
					thumbsRec.push(thumbRecObj)

				}
				if(global.userObj.agape_vote_recordThumbs!="Not Answered"){
					thumbsRec=$.parseJSON(global.userObj.agape_vote_recordThumbs);

					var leng=thumbsRec.length;
					if(leng==300){
						thumbsRec.shift();
					}
					thumbsRec.push(thumbRecObj);

				}
				
				var strg=JSON.stringify(thumbsRec);
				global.userObj.agape_vote_recordThumbs=strg;
				globalTools.save();
				upProf.obj.agape_vote_recordThumbs=strg;
				upProf.vals=global.userObj.agape_profile_memberID;
				var inc=parseInt(global.newsObjView.agape_media_thumbsDown)+1;
				global.newsObjView.agape_media_thumbsDown=inc;
				globalTools.save()
				func34 = function(data){
					//loadTemplate("mainLBHolder","newsHomeView.html");
					
				}
				ajaxCallPost(upProf,func34);


			break;





			case 'peopleCandidate_upVotes':
				prescand;
				presObj={"commentID":global.people_candidates.returnObj[global.peopleObj.index].peopleCandidate_ID,"votetype":"people_Candidate_thumbs"}
				if(global.userObj.agape_vote_presidentialCandidates!='none' && global.userObj.agape_vote_presidentialCandidates!='Not Answered' ){
					prescand=$.parseJSON(global.userObj.agape_vote_presidentialCandidates);
					var leng=prescand.length;
					if(leng==300){
						prescand.shift();
					}
					
					prescand.push(presObj)
				}else{
					prescand=[];
					prescand.push(presObj)
				}
				var t=parseInt(global.people_candidates.returnObj[global.peopleObj.index].peopleCandidate_upVotes);
				t=t+1;
				
				
				global.userObj.agape_vote_presidentialCandidates=JSON.stringify(prescand);
				globalTools.save();
				var func35=function(data){
					//loadTemplate("mainLBHolder","peopleView.html");
				}

				sendo_peopleCandidate = {}
				sendo_peopleCandidate.job="update_atomic";
				sendo_peopleCandidate.dbase="agape_profile";
				sendo_peopleCandidate.obj={};
				sendo_peopleCandidate.vals=global.userObj.agape_profile_memberID;
				sendo_peopleCandidate.param="agape_profile_memberID";
				sendo_peopleCandidate.obj.agape_vote_presidentialCandidates=global.userObj.agape_vote_presidentialCandidates;

				ajaxCallPost(sendo_peopleCandidate,func35);
				

			break;

			case 'peopleCandidate_downVotes':
				prescand;
				presObj={"commentID":global.people_candidates.returnObj[global.peopleObj.index].peopleCandidate_ID,"votetype":"people_Candidate_thumbs"}
				if(global.userObj.agape_vote_presidentialCandidates!='none' && global.userObj.agape_vote_presidentialCandidates!='Not Answered' ){
					prescand=$.parseJSON(global.userObj.agape_vote_presidentialCandidates);
					var leng=prescand.length;
					if(leng==300){
						prescand.shift();
					}
					
					prescand.push(presObj)
				}else{
					prescand=[];
					prescand.push(presObj)
				}
				
				global.userObj.agape_vote_presidentialCandidates=JSON.stringify(prescand);
				globalTools.save();
				var func35=function(data){
					//alert("complete")
					//loadTemplate("mainLBHolder","peopleView.html");
				}

				sendo_peopleCandidate = {}
				sendo_peopleCandidate.job="update_atomic";
				sendo_peopleCandidate.dbase="agape_profile";
				sendo_peopleCandidate.obj={};
				sendo_peopleCandidate.vals=global.userObj.agape_profile_memberID;
				sendo_peopleCandidate.param="agape_profile_memberID";
				sendo_peopleCandidate.obj.agape_vote_presidentialCandidates=global.userObj.agape_vote_presidentialCandidates;

				ajaxCallPost(sendo_peopleCandidate,func35);


			break;

			case 'president_upVotes':

				var index=$("#president_upVotes").html();
				index=parseInt(index)+1;
				$("#president_upVotes").html(index);
				global.presObj.presidential_candidates[global.presObj.index].president_upVotes=index;
				globalTools.save();

				sendo_president_upVotes = {}
				sendo_president_upVotes.job="update_atomic";
				sendo_president_upVotes.dbase="agape_profile";
				sendo_president_upVotes.obj={};
				sendo_president_upVotes.vals=global.userObj.agape_profile_memberID;
				sendo_president_upVotes.param="agape_profile_memberID";
				//{"commentID":"1","votetype":"presidential_Candidate_thumbs"}
				var prescand="";
				presObj={"commentID":global.presObj.presidential_candidates[global.presObj.index].president_ID,"votetype":"presidential_Candidate_thumbs"}
			
				if(global.userObj.agape_vote_presidentialCandidates!='none' && global.userObj.agape_vote_presidentialCandidates!='Not Answered' ){
					prescand=$.parseJSON(global.userObj.agape_vote_presidentialCandidates);
					var leng=prescand.length;
					if(leng==300){
						prescand.shift();
					}
					prescand.push(presObj)
				}else{
					prescand=[];
					prescand.push(presObj)
				}

				sendo_president_upVotes.obj.agape_vote_presidentialCandidates=JSON.stringify(prescand);

				global.userObj.agape_vote_presidentialCandidates=sendo_president_upVotes.obj.agape_vote_presidentialCandidates;
				globalTools.save();
				
				func35 = function(data){
					loadTemplate("mainLBHolder","presidentView.html");
				}
				
				ajaxCallPost(sendo_president_upVotes,func35);
			break;



			case 'president_downVotes':
				var index=$("#president_downVotes").html();
				index=parseInt(index)+1;
				$("#president_downVotes").html(index);
				global.presObj.presidential_candidates[global.presObj.index].president_downVotes=index;

				sendo_president_downVotes = {}
				sendo_president_downVotes.job="update_atomic";
				sendo_president_downVotes.dbase="agape_profile";
				sendo_president_downVotes.obj={};
				sendo_president_downVotes.vals=global.userObj.agape_profile_memberID;
				sendo_president_downVotes.param="agape_profile_memberID";
				//{"commentID":"1","votetype":"presidential_Candidate_thumbs"}
				var prescand="";
				presObj={"commentID":global.presObj.presidential_candidates[global.presObj.index].president_ID,"votetype":"presidential_Candidate_thumbs"}
			
				if(global.userObj.agape_vote_presidentialCandidates!='none' && global.userObj.agape_vote_presidentialCandidates!='Not Answered' ){
					prescand=$.parseJSON(global.userObj.agape_vote_presidentialCandidates);
					var leng=prescand.length;
					if(leng==300){
						prescand.shift();
					}
					prescand.push(presObj)
				}else{
					prescand=[];
					prescand.push(presObj)
				}
				sendo_president_downVotes.obj.agape_vote_presidentialCandidates=JSON.stringify(prescand);

				global.userObj.agape_vote_presidentialCandidates=sendo_president_downVotes.obj.agape_vote_presidentialCandidates;
				globalTools.save();
				func35 = function(data){
					loadTemplate("mainLBHolder","presidentView.html");
				}
				ajaxCallPost(sendo_president_downVotes,func35);

			break;




			case 'president_commentUpVotes':
				func35 = function(data){
					var funt=function(){
						$("#comms").click();
					}
					loadTemplate("mainLBHolder","presidentView.html",funt);
				}
				sendo_president_downVotes = {}
				sendo_president_downVotes.job="update_atomic";
				sendo_president_downVotes.dbase="agape_profile";
				sendo_president_downVotes.obj={};
				sendo_president_downVotes.vals=global.userObj.agape_profile_memberID;
				sendo_president_downVotes.param="agape_profile_memberID";
				var prescand="";
				presObj={"commentID":global.presObj.presidential_candidates[global.presObj.index].commentList[global.candidate.id].president_commentsID,"votetype":"presidential_comments_thumbs"}
			
				if(global.userObj.agape_vote_presidentialCandidates!='none' && global.userObj.agape_vote_presidentialCandidates!='Not Answered' ){
					prescand=$.parseJSON(global.userObj.agape_vote_presidentialCandidates);
					var leng=prescand.length;
					if(leng==300){
						prescand.shift();
					}
					prescand.push(presObj)
				}else{
					prescand=[];
					prescand.push(presObj);
				}
				sendo_president_downVotes.obj.agape_vote_presidentialCandidates=JSON.stringify(prescand);

				global.userObj.agape_vote_presidentialCandidates=sendo_president_downVotes.obj.agape_vote_presidentialCandidates;
				globalTools.save();
				//{"commentID":"3","votetype":"presidential_Candidate_thumbs"}
				ajaxCallPost(sendo_president_downVotes,func35);
			
			break;

			case 'president_commentDownVotes':
				func35 = function(data){
					var funt=function(){
						$("#comms").click();
					}
					loadTemplate("mainLBHolder","presidentView.html",funt);
				}
				sendo_president_downVotes = {}
				sendo_president_downVotes.job="update_atomic";
				sendo_president_downVotes.dbase="agape_profile";
				sendo_president_downVotes.obj={};
				sendo_president_downVotes.vals=global.userObj.agape_profile_memberID;
				sendo_president_downVotes.param="agape_profile_memberID";
				var prescand="";
				presObj={"commentID":global.presObj.presidential_candidates[global.presObj.index].commentList[global.candidate.id].president_commentsID,"votetype":"presidential_comments_thumbs"}
			
				if(global.userObj.agape_vote_presidentialCandidates!='none' && global.userObj.agape_vote_presidentialCandidates!='Not Answered' ){
					prescand=$.parseJSON(global.userObj.agape_vote_presidentialCandidates);
					var leng=prescand.length;
					if(leng==300){
						prescand.shift();
					}
					prescand.push(presObj)
				}else{
					prescand=[];
					prescand.push(presObj)
				}
				sendo_president_downVotes.obj.agape_vote_presidentialCandidates=JSON.stringify(prescand);

				global.userObj.agape_vote_presidentialCandidates=sendo_president_downVotes.obj.agape_vote_presidentialCandidates;
				globalTools.save();
				//{"commentID":"3","votetype":"presidential_Candidate_thumbs"}
				ajaxCallPost(sendo_president_downVotes,func35);
			break;


			case 'quoteThumbsUp':
			

				var upProf={}
				upProf.job="update_atomic";
				upProf.dbase="agape_profile";
				upProf.param='agape_profile_memberID';
				upProf.obj={};
				var thumbsRec=[];
				var thumbRecObj={}

				thumbRecObj.commentID=global.presQuotes.returnObj[global.presQuotesIndx].president_commentsID;
				thumbRecObj.votetype="quote_thumbs"
				if(global.userObj.agape_vote_recordThumbs=="Not Answered" || global.userObj.agape_vote_recordThumbs=="none"){
					thumbsRec.push(thumbRecObj);
				}

				if(global.userObj.agape_vote_recordThumbs!="Not Answered" ){
					thumbsRec=$.parseJSON(global.userObj.agape_vote_recordThumbs);

					var leng=thumbsRec.length;
					if(leng==300){
						thumbsRec.shift();
					}
					thumbsRec.push(thumbRecObj);

				}
				
				var strg=JSON.stringify(thumbsRec);
				global.userObj.agape_vote_recordThumbs=strg;
				globalTools.save();
				upProf.obj.agape_vote_recordThumbs=strg;
				upProf.vals=global.userObj.agape_profile_memberID;
				var func34 = function(data){
					
					var t1=parseInt($("#agape_president_thumbsUp"+global.presQuotesIndx).html())
					t1=t1+1;
					$("#agape_president_thumbsUp"+global.presQuotesIndx).html(t1).removeClass("articleControls_green").addClass("articleControls_grayLight")
					$("#agape_president_thumbsDown"+global.presQuotesIndx).removeClass("articleControls_red").addClass("articleControls_grayLight")
				}
				ajaxCallPost(upProf,func34);

			break;


			case 'quoteThumbsDown':
				var upProf={}
				upProf.job="update_atomic";
				upProf.dbase="agape_profile";
				upProf.param='agape_profile_memberID';
				upProf.obj={};
				var thumbsRec=[];
				var thumbRecObj={}

				thumbRecObj.commentID=global.presQuotes.returnObj[global.presQuotesIndx].president_commentsID;
				thumbRecObj.votetype="quote_thumbs"
				if(global.userObj.agape_vote_recordThumbs=="Not Answered" || global.userObj.agape_vote_recordThumbs=="none"){
					thumbsRec.push(thumbRecObj);
				}

				if(global.userObj.agape_vote_recordThumbs!="Not Answered" ){
					thumbsRec=$.parseJSON(global.userObj.agape_vote_recordThumbs);

					var leng=thumbsRec.length;
					if(leng==300){
						thumbsRec.shift();
					}
					thumbsRec.push(thumbRecObj);

				}
				
				var strg=JSON.stringify(thumbsRec);
				global.userObj.agape_vote_recordThumbs=strg;
				globalTools.save();
				upProf.obj.agape_vote_recordThumbs=strg;
				upProf.vals=global.userObj.agape_profile_memberID;
				var func34 = function(data){
					
					var t1=parseInt($("#agape_president_thumbsDown"+global.presQuotesIndx).html())
					t1=t1+1;
					$("#agape_president_thumbsDown"+global.presQuotesIndx).html(t1).removeClass("articleControls_red").addClass("articleControls_grayLight")
					$("#agape_president_thumbsUp"+global.presQuotesIndx).removeClass("articleControls_green").addClass("articleControls_grayLight");

				}
				ajaxCallPost(upProf,func34);
			break;



			
		}
		

	};


	switch(commentCount.dbase){

		case 'presidential_candidates':
			ajaxCall3(commentCount,func33);
		break;

		case "president_comments":
			ajaxCall3(commentCount,func33);
		break;

		case "people_candidates":
			ajaxCall3(commentCount,func33);
		break;

		case "agape_topics":
			ajaxCallMedia(commentCount,func33);
		break;

		case "political_quotes":
			ajaxCall3(commentCount,func33);
		break;

		default:

			ajaxCallPost(commentCount,func33);
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
		"margin-bottom":"1px",
		"innerStyle":{
			"tColor":"#fff",
			"pColor":"yellow",
			"rtsColor":"lime"
		}
	}

	this.chartstyle={};


			

	if(StyleObj!==undefined){
		for(key1 in StyleObj){
			for(key2 in this.fieldstyle){

				if(key1==key2){
					if(StyleObj[key1]!="" && key1!='innerStyle'){
						this.fieldstyle[key2]=StyleObj[key1];
					}
				}

			}

		}
		if(StyleObj.chartSlider){
			this.chartstyle=StyleObj.chartSlider;
		

		}

		for(var key3 in StyleObj.innerStyle){

			this.fieldstyle.innerStyle[key3]=StyleObj.innerStyle[key3]
		}



	}



	this.qReplyObj="";
	this.createPoll=function(quesObjs,title,holder,id,chartID){



		$("#"+title).html(quesObjs.returnObj[0].question_Core);
		var tr=$.parseJSON(quesObjs.returnObj[0].question_type);
		_this.quesOj=quesObjs.returnObj[0];
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
					
					str=str+"<div style='margin-bottom:12px;'><div style='float:left;width:100%;font-size:12px;'><input type='radio' id='"+im+"' name='"+im+"' value='"+er.answers[c].param1+"'></input><span style='color:"+this.fieldstyle.innerStyle.tColor+"'>"+er.answers[c].param1+"</span></div>";
					str=str+"<div id='"+this.chartID+""+c+"' style='"+design+"'></div><div style='float:left;width:25px;color:"+this.fieldstyle.innerStyle.pColor+";font-size:12px;margin-left:6px;display:none;'></div>";
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

				if(global.navFunc!="LoggedOut"){


					var mod=$("input:radio[id="+im+"]:checked").val();
					if(mod==undefined){
					
					}else{
						//Inserting answer into table
						model={};
						model.job="quickInsertAtomic";
						model.dbase="agape_answers";
						model.key="false";
						model.uID=global.userObj.agape_profile_memberID;
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
						model.obj.agape_answers_created=convertNowToPhP();

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

										var id2=global.userObj.agape_vote_recordPolls.length;
										var addVal="true"
										for(v=0;v<id2;v++){
											console.log(global.userObj.agape_vote_recordPolls[v])
											for(var key in global.userObj.agape_vote_recordPolls[v]){
												if(key=="pollType"){
													if(global.userObj.agape_vote_recordPolls[v].pollType=="poll" && global.userObj.agape_vote_recordPolls[v].id==model2.QID){
														addVal="false"
													}
												}
											}
										}
										if(addVal=="true"){
											global.userObj.agape_vote_recordPolls.push(recPollObj);
										}
										
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
								ajaxCallMedia(model1,func1)
							}
							ajaxCallMedia(model,func);
					}
				}else{
					alert("You must login to take polls.")
				}
				})
			break;


		

		}
	}
	/** End of submitModel function **/




	this.makestyle=function(styleObj){
		styleString="";
		for(key in styleObj){
				if(key!="color"  && key!="innerStyle"){
				styleString=styleString+key+":"+styleObj[key]+";"
			}
		}
		styleString=styleString+"color:"+styleObj['background-color']+";text-align:left;"
		return styleString;
	}




	this.returnObj=function(){
		return _this.quesOj;
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
		quesObj1.dbase="agape_pollquestions";
		quesObj1.param="question_ID";
		quesObj1.start=0;
		quesObj1.value=alt
		var cStyle=_this.chartstyle;
		var data1


		func22=function(data){
			data1=globalTools.verify(data);
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
			$("#"+alt.chID+""+z).empty().append("<div style='"+keyString+";'><img src='"+global.baseUrl+"/images/invisible.png' height=1 style='visibility:hidden;' /></div><div style='position:absolute;color:lime;z-index:11;left:0px;top:0px;width:80px;'><div style='margin:auto;width:100%;text-align:center;color:"+styO.color+";font-size:12px;'>"+alt.qReplyObj.answers[z].count+"</div></div>");
			$("#"+alt.chID+""+z).next().html(tot).css("display","block")
			$("#"+alt.chID+""+z).prev().children().eq(0).css("display","none");
			$("#"+alt.chID+""+z).prev().css("width","135px")

		}
		//	question_answerCount




		$("#Button"+alt.chID).html("<div style='color:"+_this.fieldstyle.innerStyle.rtsColor+";font-size:12px;margin-bottom:10px;float:left;width:123px;'> Total votes: "+cnt+"</div><div id='"+data1.returnObj[0].question_comms+"' style='float:left;font-size:12px;margin-left:10px;color:"+_this.fieldstyle.innerStyle.pColor+";cursor:pointer;text-decoration:underline;'>Discuss</div><div style='clear:both;'>Thanks for taking our Poll.</div>")



		$("div[id^='pollCommQues_']").each(function(){
			$(this).unbind('click').on('click',function(){
				var div1=document.getElementById("_lboxBackground");
				var div2=document.getElementById("_lBoxMainDiv");
				var template={};
				var id="commentOpener";
				template.id="pollComms";
				template.page="OptMediaView.html";
				global.returnFunction_close=function(){
					document.body.scrollTop="1900";
				}
				//template.heading="Reply to: "
				//global.candidate.id=ind;
				template.obj=_this.returnObj();
				template.param=$(this).attr("id");
				ingniteLightBox = new LightBox(div1,div2,template,id)
				ingniteLightBox.lightBoxOn()


			})
		})






	}
	ajaxCallMedia(quesObj1,func22);
	/* Random Poll  Ends*/



	}

	this.pollVerify=function(num,mb){

		if(global.userObj.agape_vote_recordPolls!==undefined){
			if(global.userObj.agape_vote_recordPolls!="Not Answered" && global.userObj.agape_vote_recordPolls!="none"){
				var pollO=$.parseJSON(global.userObj.agape_vote_recordPolls);


				pollOLeng=pollO.length;
				for(y=0;y<pollOLeng;y++){
					if(pollO[y].id==num){
						mb.manualGenerateChart(num);
					}
				}
			}
		}
	}


}



//converts javascript date to Mysql format for insertion
function convertNowToPhP(param){
	var currentTime = new Date()
	if(param==undefined){
	    

	}else{
		currentTime= new Date(param);
	}
	

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
	presTime =FullYear +"-"+mon+"-"+day +" "+hours+":"+minutes+":00";






	return presTime;

}

function convertNowToPhP1(){

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

// gets current time and date in readable format
function formattedPresent(a)

    {

    var currentTime = new Date()
    var hours = currentTime.getHours()
    var minutes = currentTime.getMinutes()
    var mon = currentTime.getMonth()
    var day = currentTime.getDate()
    var FullYear = currentTime.getFullYear()
    var suffix = "AM";
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
			minutes = "0" + minutes;
        } 
    switch(mon)
        {
        case 0:
            mon = 'January'
            break;
        case 1:
            mon = 'February'
            break;
        case 2:
        mon = 'March'
        break;

        case 3:
        mon = 'April'
        break;

        case 4:
        mon = 'May'
        break;

        case 5:
        mon = 'June'
        break;

        case 6:
        mon = 'July'
        break;

        case 7:
        mon = 'August'
        break;

        case 8:
        mon = 'September'
        break;

        case 9:
        mon = 'October'
        break;

        case 10:
        mon = 'November'
        break;

        case 11:
        mon = 'December'
        break;

        }

    presTime=mon+" "+day+", "+FullYear+" "+hours+":"+minutes+" "+suffix;
    return presTime;
}

function createPresOb(retObj){
	var send1={};
	send1.job="atomic_selectAll";
	send1.dbase="people_candidates"
	send1.ob="where peopleCandidate_ID='"+global.userObj.agape_profile_presidentAccount+"'";
	var localRet=retObj;
	var func1=function(data2){
		var presidentialObj=globalTools.verify(data2);
		global.presidentialObj.acct=presidentialObj.returnObj;
		$("#peopleCandidate_CurrentPosition").val(global.presidentialObj.acct[0].peopleCandidate_CurrentPosition)
		globalTools.save();

		if(localRet!="none" && localRet!==undefined){
			localRet();
		}
		
	}
	ajaxCall3(send1,func1)
}

function addObjCreateParameters(obj){
	var newObj={}

	var tar={};
	tar.agape_vote_recordPolls="[]";
	tar.agape_vote_recordThumbs="[]";
	tar.agape_vote_presidentialCandidates="[]";
	tar.agape_profile_romanceAccount="InActive";
	tar.agape_profile_nation="USA";
	tar.agape_profile_accountStatus="Active";
	tar.agape_profile_friends="[]";
	tar.agape_partner_opts="[]";
	tar.agape_profile_opts="[]";

	
	
	for(var key in tar){
		obj[key]=tar[key];
	}
	return obj


}

function messageSentcloser(){
	$("#innerView").hide().queue(function(){ $("#innerView").empty();$(this).dequeue()}).queue(function(){
	$("#innerView").html("<div style='width:500px;margin:auto;font-weight:bold;text-align:center;font-size:22px;color:#eee;margin-top:25px;font-family:arial;'>Message sent</div>")
	$(this).dequeue()
	}).fadeIn(500,function(){
		
		var t=setTimeout(function(){
		  	viewBox(this,global.candidate.id,'default',"viewpro1_open.html");
		  	clearTimeout(t);
		}, 1300);
	});
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


function formatNumber(num) {
    return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")
}


function gener8Responses(messArry,Idx){
	

	var firstObj=$.parseJSON(messArry);
	var messArryLng=firstObj.replyObj.replys.length;
	var str="";
	for(t=0;t<messArryLng;t++){
		 str=str+"<div style='padding:4px;border:solid 1px #000;background-color:#ddd;'>"
		 str=str+"<div style='float:left;color:blue;font-weight:bold;font-family:arial;'>"
		 	str=str+"<div><img src='"+firstObj.replyObj.replys[t].replyImg+"' height='60' width='50' border=1 /></div>"
		 	str=str+"<div>"+firstObj.replyObj.replys[t].agape_commentsLastReply_username+"</div>"
	 	str=str+"</div>"
	 	str=str+"<div style='float:right;font-size:13px;font-family:arial;'>"+firstObj.replyObj.replys[t].agape_reply_createdate+"</div><div style='clear:both;'></div><div style='margin-top:15px;font-family:arial;margin-left:20px;'>"+firstObj.replyObj.replys[t].agape_comments_Comment+"</div><div id='artRep"+Idx+"_"+t+"' style='width:690px;text-align:center;font-family:arial;cursor:pointer'>Reply</div></div>"
	}

	return str
}


function initLoadComments(nObj){

	var lengo;
	var comdat;
	lengo=nObj.returnObj.length;
	global.comments.comdat=nObj.returnObj;

	if(lengo>0){
		//$("#comments").empty();
	}
	$("#commentsSet").empty();
	for(d2=0;d2<lengo;d2++){
		loadCommentsM(nObj.returnObj[d2],d2);
	}
	$("div[id^='artRep']").each(function (){
		$(this).unbind("click").on("click",function(){
			var bang=$(this).attr("id");
			var ind=bang.substr("6");
			var ino=ind.split("_");
			
			var div1=document.getElementById("_lboxBackground");
			var div2=document.getElementById("_lBoxMainDiv");
			var template={};
			template.page="commentPage.html";
			template.heading="Reply to: "
			var dato={}
			dato.comms=global.comments.comdat[ino[0]];
			dato.commIdx=ino[0];
			dato.replyidx=ino[1];

			global.comments.type="newsArticles_replyTo";
			id="commentOpener";
			//global.candidate.id=ind;
			template.param=dato;

			ingniteLightBox = new LightBox(div1,div2,template,id)
			ingniteLightBox.lightBoxOn()
		})
	})
	$("#commentsSet").scrollTop("0px")

	$("div[id^='commReply']").each(function(){

		$(this).unbind("click").on('click',function(){
			var bang=$(this).attr("id");

			if(bang==undefined){
				//bang=$(this).parent().parent().attr("id");
			}
			var e=$(this)
			var namo=$(this).prev().prev().prev().prev().html();
			var ind=bang.substr("10");
			var dato={};
			switch(global.candidate.id){
				case 'viewArticles':
					global.comments.type="viewCaptions_reply"
					//var t=$(this).attr("id");
					//var f=t.split("_");
					dato.comms=global.comments.comdat;
					var g=ind+"";
					 var g1=g.split("_")
					 dato.commID=g1[0]
					 dato.replyIndx=g1[1];
				break;


				case 'viewCaptions':
					global.comments.type="viewCaptions_reply";
					 dato.comms=global.comments.comdat;
					 var g=ind+"";
					 var g1=g.split("_")
					 dato.commID=g1[0]
					 dato.replyIndx=g1[1];
					
				break;
			}
		
			globalTools.save();
			//global.comments.index1=parseInt(ind);


			id="commentOpener";
			var div1=document.getElementById("_lboxBackground");
			var div2=document.getElementById("_lBoxMainDiv");
			var template={};
			template.page="commentPage.html";
			template.heading="Reply to: "
			//global.candidate.id=ind;
			template.param=dato;
			ingniteLightBox = new LightBox(div1,div2,template,id)
			ingniteLightBox.lightBoxOn()
		})
	})

	$("#returnButt").on("click",function(){
		$("#closeButton").click();
		loadTemplate('mainLBHolder','newsHome.html');
	})
			

}

function getCodedDate(){

	var currentDate = new Date();
	hours = currentDate.getHours()
	minutes = currentDate.getMinutes()
	mon = currentDate.getMonth()
	day = currentDate.getDate()
	FullYear = currentDate.getFullYear();
	seconds = currentDate.getSeconds();
	encodestrg=global.userObj.agape_profile_username+FullYear+mon+day+hours+minutes+seconds;

	enco1=Base64.encode(encodestrg);
	enco1=enco1.replace(/=/g,"");
 return enco1;


}



								 			
function loadVidcomms(obj){
	global.VidComments=obj;
	globalTools.save();
	var classm="issuesComments";
	var strgo="";
	var leng=obj.length;	

	for(w=0;w<leng;w++){
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


		strgo=strgo+"<div class='"+classm+"'>"
			strgo=strgo+"<div class='titlebar' style='width:580px;'>"
				strgo=strgo+"<div style='float:left;'>"
					strgo=strgo+"<img src='"+obj[w].agape_comments_image+"' height='90' width='80'/>"
				strgo=strgo+"</div>"
				var c=getTime(obj[w].agape_comment_createdate,"true","native")
				var d=getTime(obj[w].agape_commentsLastComment,"true","native")
				strgo=strgo+"<div style='float:left;padding-left:10px;'>"+obj[w].agape_commentCreator_Username+"</div>"
				strgo=strgo+"<div style='float:right;padding-right:10px;font-size:13px;'><div style='text-align:right'>Comment Created: "+c+"</div><div style='text-align:right'>Last Comment: "+d+"</div></div>"
				strgo=strgo+"<div style='clear:both;'></div>"
				strgo=strgo+"<div style='margin-top:10px;width:560px;margin:auto;'>"
					
					strgo=strgo+"<div style='width:550px;margin:auto;'>"+obj[w].agape_comments_Comment+"</div>"
					//strgo=strgo+"<div style='width:80px;margin:auto;margin-top:20px;'>Reply</div>"
				strgo=strgo+"</div>"
				if(obj[w].agape_commentsCommentDataResponse!="[]" && obj[w].agape_commentsCommentDataResponse!="none"){
					var y=$.parseJSON(obj[w].agape_commentsCommentDataResponse)

					
					//strgo=strgo+"<div style='font-weight:bold;width:600px;margin:auto;font-weight:bold;margin-top:10px;margin-bottom:10px;'>Replys:</div>"
					var yLeng=y.replyObj.replys.length;
				
					if(yLeng>0){

						var tr=$.parseJSON(obj[w].agape_commentsCommentDataResponse)
						var st=vidReplys(y.replyObj.replys,classm,w)
						strgo=strgo+"<div id='reply2comms_"+w+"' style='width:610px;margin:auto;margin-bottom:5px;margin-top:10px;'>"+st+"</div>";
						
						
						if(obj[w].agape_commentsPagination!="0"){
							if(classm=="issuesComments"){
								strgo=strgo+"<div style='color:lime;width:620px;margin:auto;margin-bottom:10px;'>1 2 3 4</div>"
							}else{
								strgo=strgo+"<div style='color:blue;width:620px;margin:auto;margin-bottom:10px;'>1 2 3 4</div>"
							}
							
						}else{
							
						}
					}
					
					strgo=strgo+"<div id='rep"+w+"' class='vidReplyButton'>Reply</div>";
				}else{
					strgo=strgo+"<div id='reply2comms_"+w+"' style='width:610px;margin:auto;margin-bottom:5px;margin-top:10px;'></div>";
					strgo=strgo+"<div id='rep"+w+"' class='vidReplyButton'>Reply</div>";
				}
				
			strgo=strgo+"</div>"
		strgo=strgo+"</div>"


		if(classm=="issuesComments"){
			classm="issuesComments_alt"
		}else{
			classm="issuesComments"
		}
	}
	$("#addVidCom").show();

	//strgo=""
	$("#vidComms").empty().append(strgo);

	$(".vidReplyButton").each(function(){
		$(this).unbind("click").on("click",function(){
			var y=$(this).attr("id")+"";
			y=y.substr(3);
			global.comments.type="videoComm_Reply"
			var div1=document.getElementById("_lboxBackground");
			var div2=document.getElementById("_lBoxMainDiv");
			var template={};
			template.page="commentPage.html";
			template.job="videoComm_Reply";
			template.heading="Comment on: "
			var id=y;
			var repOb={};
			repOb.id=y;
			repOb.comms=global.VidComments[y]

			template.param=repOb;
			ingniteLightBox = new LightBox(div1,div2,template,id)
			ingniteLightBox.lightBoxOn();
		}).on("mouseover",function(){
			$(this).css("text-decoration","underline")
		}).on("mouseout",function(){
			$(this).css("text-decoration","none")
		})
	})



	$(".vidReplyButtonTo").each(function(){
		$(this).unbind("click").on("click",function(){



			var y=$(this).attr("id")+"";
			y=y.substr(3);
			global.comments.type="videoComm_ReplyTo"
			var div1=document.getElementById("_lboxBackground");
			var div2=document.getElementById("_lBoxMainDiv");
			var template={};
			template.page="commentPage.html";
			template.job="videoComm_Reply";
			template.heading="Comment on: ";
			var f=y.split("_")
			var id=y;
			var repOb={};
			repOb.commsIndx=f[1];
			repOb.comms=global.VidComments[f[1]];
			repOb.replyIndx=f[0];

			template.param=repOb;
			ingniteLightBox = new LightBox(div1,div2,template,id)
			ingniteLightBox.lightBoxOn();
		}).on("mouseover",function(){
			$(this).css("text-decoration","underline")
		}).on("mouseout",function(){
			$(this).css("text-decoration","none")
		})
		
	})
}





function loadMainpresComms(obj){

	var e=obj.length;
	var strClass="issuesComments presMainComStyles";
	var comClass="comClas";


	var strg="";
	for(b=0;b<e;b++){
		var f1=getTime(obj[b].agape_comment_createdate,"true");
		var f2=getTime(obj[b].agape_commentsLastComment,"true")
		strg=strg+"<div class='"+strClass+"' id='mainArt"+b+"' style='width:100%;font-size:12px;font-family:arial;' ><div style='float:left;width:95px;'><img src='"+obj[b].agape_comments_image+"' height='90' width='95' border='1' align='left'></div><div style='float:left;width:450px;'><div style='text-align:left;'><span style='display:inline-block;margin-left:8px;' >Created by:</span><span style='font-weight:bold;display:inline-block;padding-left:8px;letter-spacing:0px;'>"+obj[b].agape_commentCreator_Username+"</span></div><div style='width:440px;text-align:left;'><span style='display:inline-block;margin-left:8px;' >Create date:</span><span  class='mainCommsDateSpan' style='letter-spacing:0px;'>"+f1+"</span></br>"
		strg=strg+"<span style='display:inline-block;margin-left:8px;' >Last comment by:</span><span style='font-weight:bold;display:inline-block;padding-left:8px;letter-spacing:0px;'>"+obj[b].agape_commentsLastComment_username+"</span><br/> <span style='display:inline-block;margin-left:8px;' >Last comment date:</span><span id='repsdate"+b+"' style='font-weight:bold;display:inline-block;padding-left:8px;letter-spacing:0px;'>"+f2+"</span> </div></div><div style='clear:both;'></div>"
		strg=strg+"<div style='width:800px;text-align:left;margin:auto;'><span style='display:inline-block;font-weight:bold;margin-top:15px;font-size:15px;'>Comment:</span> <span  style='font-weight:normal;font-size:15px;letter-spacing:1px;'>"+obj[b].agape_comments_Comment+"</span></div><div style='clear:both;'></div><br>"


		if(obj[b].agape_commentsCommentDataResponse!="none"){
			var j=$.parseJSON(obj[b].agape_commentsCommentDataResponse);
			var jLength=j.replyObj.replys.length;
			if(jLength>0){
				
				var burn=loadMainreplys(j.replyObj.replys,b);
				strg=strg+"<div id='resp"+b+"'>"+burn+"</div>"
			}else{
				strg=strg+"<div style='display:none;' id='resp"+b+"'></div>"
			}

		}else{
			strg=strg+"<div style='display:none;' id='resp"+b+"'></div>"
		}

		strg=strg+"<div id='reply"+b+"' class='mainCommsReply'>Reply</div>"
		strg=strg+"<div id='TabSearch"+b+"' style='width:864px;height:0px;padding:8px;background:#eee;overflow:auto;overflow-y:hidden;overflow-x:hidden;display:none;border-top:solid 1px #ddd;margi-top:10px;'>"
				
			strg=strg+"<div style='float:left;width:30%;font-family:arial;'>"
				strg=strg+"<div>Message:</div>"
				strg=strg+"<div style='margin-top:40px;'>"
						
						strg=strg+"<div class='optButtons1' style='margin:auto;background:#524a92;color:lime;float:left;border-radius:5px;'' id='searchMess"+b+"'>Post message</div>"
						strg=strg+"<div id='cancelMess"+b+"' style='float:left;margin-left:10px;color:red;cursor:pointer;margin-top:7px;'>cancel</div>"
						strg=strg+"<div style='clear:both'></div>"

					strg=strg+"</div>"
				strg=strg+"</div>"
				strg=strg+"<div style='float:left;width:55%'><textarea id='boxnew"+b+"' rows='6' style='width:200px;'></textarea></div>"
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

	$("#comms").empty().append(strg).scrollTop("0px");

	if(e==0){
		$("#comms").html("<div style='width:210px;margin:auto;font-size:20px;color:orange;margin-top:25px;'>Be the first to comment</div>")
	}else{

		$(".mainCommsReply").each(function(){
		
			$(this).unbind("click").on("click",function(){

				//var obIdx=$(this).attr("id")+"";
				//obIdx=obIdx.substr(5);
				//var send={}
				/*
				send.selReply=mainCs[obIdx];
				send.messObj=commOb;
				send.messIndx=obIdx;
				global.comments.type="mainArticleReplyToComment"
				var div1=document.getElementById("_lboxBackground");
				var div2=document.getElementById("_lBoxMainDiv");
				var template={};
				template.page="commentPage.html";
				id="office";
				template.param=send;
				ingniteLightBox = new LightBox(div1,div2,template,id)
				ingniteLightBox.lightBoxOn();
				//ingniteLightBox.lightBoxOff(div1,div2);*/
			
				
			})
		})

		$("div[id^='mainRep']").each(function(){
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
		})


	}
	
}

/*function loadMainreplys(obj,ind){
	var leng=obj.length;
	var newstr="";
	var comClass="comClas"
	for(c=0;c<leng;c++){
		newstr=newstr+"<div style='padding:4px;border:solid 1px #000;width:85%;margin:auto;' class='"+comClass+"'><div style='float:left;color:blue;font-weight:bold;font-family:arial;'><div><img src='"+obj[c].replyImg+"' height='50' width='60' border='1'></div>"
		newstr=newstr+"<div>"+obj[c].agape_commentsLastReply_username+"</div></div><div style='float:right;font-size:13px;font-family:arial;'>"+obj[c].agape_reply_createdate+"</div><div style='clear:both;'></div><div style='margin-top:15px;font-family:arial;margin-left:20px;'>"+obj[c].agape_comments_Comment+"</div><div id='mainRep"+ind+"_"+c+"' style='width:100%;text-align:center;margin-top:20px;'>reply</div>"
		newstr=newstr+"<div id='addmessageReplySearch"+c+"' style='width: 700px; height: 0px; padding: 8px;padding-bottom: 0px; padding-top: 0px;background: rgb(238, 238, 238); overflow-x: hidden; overflow-y: auto;'>"
				
				newstr=newstr+"<div style='float:left;width:300px;font-family:arial;'>"
					newstr=newstr+"<div>Message:</div>"
					newstr=newstr+"<div style='margin-top:40px;'>"
						
						newstr=newstr+"<div class='optButtons1' style='margin:auto;background:#524a92;color:lime;float:left;border-radius:5px;' id='searchPostmess'>Post message</div>"
						newstr=newstr+"<div id='cancel2' style='float:left;margin-left:10px;color:red;cursor:pointer;margin-top:7px;'>cancel</div>"
						newstr=newstr+"<div style='clear:both'></div>"

					newstr=newstr+"</div>"
				newstr=newstr+"</div>"
				newstr=newstr+"<div style='float:left;width:300px'><textarea id='inputboxnew' rows='6' style='width:200px;'></textarea></div>"
				newstr=newstr+"<div style='clear:both'></div>"
			newstr=newstr+"</div></div>"
	
		if(comClass=="comClas"){
				
				comClass="comClas_alt"
			}else{
				
				comClass="comClas"
			}
		}

	return newstr;	
}*/


function quotesComm(obj){



	global.quotesPagIndx=0;
	var t1=obj.returnObj.length;
	$("#commDiv").empty();
	var strg;
	var addEv;

	var instrg="where agape_commentsSource in ("
	var chrs="none"; 
	


	for(w=0;w<t1;w++){

		
		strg=""
		addEv="true";
		//var vals=[];
		//var timeDateVal=getTime(obj.returnObj.comms.comments[w].agape_comment_createdate,'true')
		//var updateTime=getTime(obj.returnObj.comms.comments[w].agape_commentsLastComment,'true')
		var id="pres"+w;
		var id1="presInner"+w;

		var id2="presOnner"+w;
		var thumbClass="articleControls_green";
		var thumbClass_red="articleControls_red";
		var clickClass="innerUp";
		var last=getTime(obj.returnObj[w].president_commentsLastComment,"true");
		var create=getTime(obj.returnObj[w].president_comment_createdate,"true");
		

//
		//articleControls_gray
		
	
		strg=strg+"<div id='holdDiv"+w+"' style='border:solid 1px #000;width:740px;margin:auto;padding:6px;background-color:gray;border-radius:5px 5px 0px 0px;margin-bottom:25px;padding-bottom:20px;'>"

		
	
		strg=strg+"<div style='margin-left:10px;color:#ddd;font-size:22px;margin-bottom:10px;'>Media outlet: <a href="+obj.returnObj[w].president_commentsMedia_typeLink+" target='_blank' style='font-size:22px;'>"+obj.returnObj[w].president_commentsMedia_type+"</a></div>"
		strg=strg+"<div style='margin-left:10px;'><div style='font-weight:bold;float:left;width:90px;'>Audience:</div> <div style='float:left;width:300px;'>"+obj.returnObj[w].president_comment_audience+"</div><div style='clear:both;'></div></div>"
		strg=strg+"<div style='margin-left:10px;'><div style='font-weight:bold;float:left;;width:130px;'>Comment made:</div> <div style='float:left;width:225px;'>"+create+"</div><div style='clear:both;'></div></div>"
		strg=strg+"<div style='margin-left:10px;'><div style='font-weight:bold;float:left;width:110px;'>Last update:</div> <div style='float:left;width:255px;text-decoration:underline;'>"+last+"</div><div style='clear:both;'></div></div>"
		strg=strg+"<div style='float:left;margin-left:10px;font-size:15px;font-weight:bold;' >Replys(<span style='color:orange;'> "+obj.returnObj[w].president_commentsReplys+" </span>)</div>"
		strg=strg+"<div  id='"+id+"' style='float:left;margin-left:10px;cursor:pointer;text-decoration:underline;color:#eee;font-size:15px;' class='hyperlink1 commentOpener jank'>Add Comment</div>"
		strg=strg+"<div style='color:#fff;float:left;'>"
		strg=strg+"<div style='padding:0px;padding-left:8px;margin-top:0px;' class='newElemHeader_sub articleControls'  ><img src='"+global.baseUrl+"/images/thumbsUp.gif' id='"+id1+"' height='16' class='updatethumbsUpDB "+clickClass+"' /></div>"
		strg=strg+"<div id='agape_president_thumbsUp"+w+"' style='padding:0px;margin-top:0px;' class='newElemHeader_sub articleControls "+thumbClass+"' >"+obj.returnObj[w].president_commentsThumbsUp+"</div>"
		strg=strg+"<div style='float:left;width:8px;'>&nbsp;</div>"
		strg=strg+"<div  style='padding:0px;padding-left:8px;margin-top:0px;' class='newElemHeader_sub articleControls'><img src='"+global.baseUrl+"/images/thumbsDown.gif' id='"+id2+"' height='16' class='updatethumbsDownDB "+clickClass+"'  /></div>"
		strg=strg+"<div id='agape_president_thumbsDown"+w+"' style='padding:0px;margin-top:0px;' class='newElemHeader_sub articleControls "+thumbClass_red+"' style='padding-left:0px;text-decoration:none;color:red;margin-top:0px;'>"+obj.returnObj[w].president_commentsThumbsDown+"</div>"
		strg=strg+"</div>"
		strg=strg+"<div style='clear:both'></div>"
		strg=strg+"<hr style='margin:auto;width:80%;margin-top:10px;' />"
		strg=strg+"<div id='coms' style='font-weight:normal;font-size:18px;color:#eee;font-weight:normal;padding:10px;padding-bottom:15px;font-style: italic;width:90%;margin:auto;letter-spacing:1px;'>"+obj.returnObj[w].president_commentsCommentData+"</div>"
		strg=strg+"<a  id='anchor"+w+"' />";
		strg=strg+"<div style='font-family: Great Vibes;font-size:23px;width:100%;text-align:center;margin-bottom:15px;font-weight:bold;'>~ "+global.presObj.presidential_candidates[global.presObj.index].president_Fullname+"</div>"

		//var q=obj.returnObj.comms.length;
		//var t="issuesComments_inner1";
		var strgO2="";
		var paginO="";
		var pag="";	
		var tLeng=obj.returnObj[w].comms.comments.length;
		var v
		if(tLeng>0){
			v= new commsClass(obj.returnObj[w].comms.comments,w)
			strgO2=v.getComments();
		}
		
		strg=strg+"<div id='president_commentsCommentData"+w+"' style='text-align:center;font-weight:bold;background-color:#fff;width:700px;margin:auto;' >"+strgO2+"</div>"
		strg=strg+paginO;

		strg=strg+"</div>"
		$("#commDiv").append(strg);

		if(tLeng>0){
			v.addReplyEvent();
		}
		
		

	}

	
	//this adds mouseover events to various links including Add Comment 
	var o={"mouseover":"true"};
	var w = new addMouseOver("jank","orange",o,"none")

	var o1={"text-decoration":"true"};
	var w1 = new addMouseOver("quoteReplyStyle","orange",o1,"none")

	var o2={"text-decoration":"true"};
	var w2 = new addMouseOver("quoteReplyStyle_inner","green",o2,"none")



	$(".quotesPag").each(function(){
		$(this).unbind("click").on("click",function(){
			var selectd=$(this).attr("id");
			var tSel=selectd.substr("4");

			var e=$(this).parent().parent().children().eq(5);
			var sendObj={}
			sendObj.job="atomic_selectAll";
			sendObj.dbase="agape_comments";
			sendObj.ob="where agape_commentsSource='"+tSel+"'";
			var funk=function(data){
				var obj1=globalTools.verify(data)
				var y=e.attr("id");

				y=y.substr(4)
				global.quotesPagIndx=y;
				
				globalTools.save();
				var newVal=quotesComm_Paginate(obj1)
				$("#president_commentsCommentData"+global.quotesPagIndx).empty().append(newVal);
				

				var element_to_scroll_to = document.getElementById("anchor"+y);
				element_to_scroll_to.scrollIntoView();
				
				
				
			}
			ajaxCallMedia(sendObj,funk);

		})
	})

	
	//add new comments
	$(".commentOpener").each(function(){
		$(this).unbind("click").on("click",function(){

			var id="commentOpener";
			var div1=document.getElementById("_lboxBackground");
			var div2=document.getElementById("_lBoxMainDiv");
			global.comments.type="quoteComm_Add";
			var template={};
			template.page="commentPage.html";
			template.job="visitprofile";
			var idx=$(this).attr("id")+"";
			idx=idx.substr(4);
			var g={};
			g.indx=idx
			g.val=obj.returnObj[idx];
			template.param=g
			lightBox = new LightBox(div1,div2,template,id)
			lightBox.lightBoxOn()
		})
	})

	


	

	$(".innerUp").each(function(){
		var t=9
		var $f=$(this).parent().next()
		if($f.hasClass("articleControls_grayLight")){

			$(this).unbind('click').on("click",function(){
				alert("You've already voted on this.");
			})

		}else{

			$(this).unbind('click').on("click",function(){
				var tre=$(this).attr("id");
				var sre=tre.substr(9)
				global.presQuotesIndx=sre;
				globalTools.save();
				if($(this).hasClass("updatethumbsUpDB")){
					_updatethumbsUpDB('quoteThumbsUp');
				}

				if($(this).hasClass("updatethumbsDownDB")){
					
					_updatethumbsUpDB('quoteThumbsDown');
				}
				
			})
		}
	})

	$("#commDiv").scrollTop("0px")

}




var lightBox="";

class commsClass{

	
	constructor(dObj,add){
		this.cObj=dObj;
		this.inc=add;
		this.tLeng1=this.cObj.length;
		this.strgO1=""
		this.t="issuesComments_inner1"
		
	}

	

	getComments(){
		for(var p1=0;p1<this.tLeng1;p1++){
			var d=globalTools.stringClearBack(this.cObj[p1].agape_comments_Comment)
			var convDate1=getTime(this.cObj[p1].agape_comment_createdate,'true','native')
			var convDate2=getTime(this.cObj[p1].agape_commentsLastComment,'true','native')
			this.strgO1=this.strgO1+"<div id='hold"+p1+"_"+this.inc+"'><div class='"+this.t+"' style='width:690px;margin:auto;'><div class='titlebar'><div style='float:left;'><img src='"+this.cObj[p1].agape_comments_image+"' height='90' width='80'>"
			this.strgO1=this.strgO1+"</div><div style='float:left;padding-left:10px;'>"+this.cObj[p1].agape_commentCreator_Username+"</div><div style='float:right;padding-right:10px;'><div>Create date: "+convDate1+"</div><div>Last update: "+convDate2+"</div></div><div style='clear:both;'></div>"
			this.strgO1=this.strgO1+"<div style='margin-top:10px;'><div style='width:600px;margin:auto;text-align:left;font-weight:normal;'>"+d+"</div></div><div id='qrep"+p1+"_"+this.inc+"' class='quoteReplyStyle'>reply</div></div></div>"
			if(this.t=="issuesComments_inner1"){
				this.t="issuesComments_inner2"
			}else{
				this.t="issuesComments_inner1"
			}
			var CResp=this.cObj[p1].agape_commentsCommentDataResponse;
			if(CResp!="none"){
				var replys=$.parseJSON(CResp);
				var replyIndex=replys.replyObj.replys.length;

				for(var b1=0;b1<replyIndex;b1++){

					this.strgO1=this.strgO1+"<div class='"+replys.replyObj.replys[b1].ReplyClass+"' ><div class='titlebar'><div style='float:left;'><img src='"+replys.replyObj.replys[b1].replyImg+"' height='90' width='80'>"
					this.strgO1=this.strgO1+"</div><div style='float:left;padding-left:10px;'>"+replys.replyObj.replys[b1].agape_commentsLastReply_username+"</div><div style='float:right;padding-right:10px;'>"+replys.replyObj.replys[b1].agape_reply_createdate+"</div><div style='clear:both;'></div>"
					this.strgO1=this.strgO1+"<div style='margin:auto;margin-top:10px;width:600px;'><div class='commentDisplay'>"+replys.replyObj.replys[b1].agape_comments_Comment+"</div></div><div id='qrem"+this.cObj[p1].agape_commentsID+"_"+b1+"_"+this.inc+"_"+p1+"' style='margin-bottom:10px;cursor:pointer;margin-top:20px;' class='quoteReplyStyle_inner'>reply</div></div></div>"
					this.strgO1=this.strgO1+"<div style='clear:both;'></div><hr style='width:540px;margin:auto;' />"
				}
			}
			this.strgO1=this.strgO1+"</div>"

		}


		return this.strgO1;
	}

	


	addReplyEvent(){
		$(".quoteReplyStyle").each(function(){
			$(this).unbind("click").on("click",function(){
				var id="commentOpener";
				var div1=document.getElementById("_lboxBackground");
				var div2=document.getElementById("_lBoxMainDiv");
				global.comments.type="quoteComm_ReplyTo";
				var template={};
				template.page="commentPage.html";
				template.job="visitprofile";
				var idx=$(this).attr("id")+"";
				idx=idx.substr(4);
				var g=idx.split("_");
				
				var pasV={}
				var tLa=$.parseJSON(global.presQuotes.returnObj)
				pasV.quote=global.presQuotes.returnObj[g[1]];
				pasV.comm=g;
				template.param=pasV;
				lightBox = new LightBox(div1,div2,template,id)
				lightBox.lightBoxOn();
			})

		})


		$(".quoteReplyStyle_inner").each(function(){
			$(this).unbind("click").on('click',function(){
				var id="commentOpener";
				var div1=document.getElementById("_lboxBackground");
				var div2=document.getElementById("_lBoxMainDiv");
				global.comments.type="quoteComm_ReplyTo_inner";
				var template={};
				template.page="commentPage.html";
				template.job="visitprofile";
				var idx=$(this).attr("id")+"";
				idx=idx.substr(4);
				var g=idx.split("_");
				var pasV={}
				var tLa=$.parseJSON(global.presQuotes.returnObj)
				pasV.quote=global.presQuotes.returnObj[g[2]];
				pasV.comm=g;
				template.param=pasV;
				var e={}
				e.title=$(this).prev().prev().prev().prev().html();
				e.date=$(this).prev().prev().prev().html();
				template.heading=e
				lightBox = new LightBox(div1,div2,template,id)
				lightBox.lightBoxOn();
			})
		})
	}
	
}



function quotesComm_Paginate(comObj){
		
	var t1="issuesComments_inner1";
	var strgO2="";
	var pag1="";
			
	var var1=$.parseJSON(comObj.returnObj[0].agape_commentsCommentDataResponse);
	var fre=$.parseJSON(comObj.returnObj[0].agape_commentsPagination);
	var over="overOrange";
	if(fre.length>0){
		var v = fre.length;
		for(g1=0;g1<v;g1++){
			var u=g1+1;
			if(global.quotesPagIndx==g1){
				pag1=pag1+"<span class='quotesPag overQuotesPaginate overOrange' id='qid_"+fre[g1]+"' >"+u+"</span>";
			}else{
				pag1=pag1+"<span class='quotesPag overQuotesPaginate' id='qid_"+fre[g1]+"' >"+u+"</span>";
			}
		}
	}
	paginO="<div id='id' style='padding-left:11px;padding-top:5px;font-size:13px;'>"+pag1+"</div>"
	var var2=var1.length;
	for(p=0;p<var2;p++){
		var d=globalTools.stringClearBack(var1[p].comment)
		strgO2=strgO2+"<div class='"+t1+"' style='width:640px;margin:auto;'><div class='titlebar'><div style='float:left;'><img src='"+var1[p].img+"' height='90' width='80'>"
		strgO2=strgO2+"</div><div style='float:left;padding-left:10px;'>"+var1[p].commentCreator+"</div><div style='float:right;padding-right:10px;'>"+var1[p].commentDate+"</div><div style='clear:both;'></div>"
		strgO2=strgO2+"<div style='margin-top:10px;'><div style='width:600px;margin:auto;text-align:left;font-weight:normal;'>"+d+"</div></div><div id='qrep"+p+"_"+w+"' class='quoteReplyStyle'>reply</div></div></div>"
		if(t1=="issuesComments_inner1"){
			t1="issuesComments_inner2"
		}else{
			t1="issuesComments_inner1"
		}

	}
	return strgO2;
}






//add mouseover event
class addMouseOver{

	//mouseObj={"elem":"none","colorObj":{"primary":"none","toggle":"none","other":"none"},"effectObj":{"text-decoration":{"status":"true"},"mouseover":{"status":"true","color":"lime"}}}
	//use {"text-decoration":"true","mouseover":"true","cursor":"true"}  has text-decoration, cursor and color changes for effectObj
	constructor(class1,color,effectObj,param){
		this.elemObj={"elem":"none","colorObj":{"primary":"none","toggle":"none","other":"none"},"effectObj":{"text-decoration":{"status":"false"},"mouseover":{"status":"false","color":"none"},"cursor":{"status":"false","color":"none"}}}
		this.elemObj.elem=class1;
		this.elemObj.effectObj.mouseover.color=color;
		this.orginalColor=this.getOriginalColor(class1)
		this.parseEffectObj(effectObj);
		this.class1=class1;
		

	}
	parseEffectObj(passObj){
		var t=this.elemObj.effectObj
		for(var key in passObj){
			t[key].status=passObj[key]
		}

		this.addEffects(this.elemObj.elem,this.orginalColor,this.elemObj.effectObj.mouseover.color)
		
	}
	addEffects(name,originalColor,color){
		for(var key in this.elemObj.effectObj){
			if(this.elemObj.effectObj[key].status=="true"){
				switch(key){

					case 'text-decoration':
					

						$("."+name).each(function(){
							$(this).on("mouseover",function(){$(this).css("text-decoration","underline")}).on("mouseout",function(){$(this).css("text-decoration","none")});
						})



					break;

					case 'mouseover':
						$("."+name).each(function(){
							$(this).on("mouseover",function(){$(this).css("color",color)}).on("mouseout",function(){$(this).css("color",originalColor)});
						})
					break;


					case 'cursor':
						$("."+name).each(function(){
							$(this).on("mouseover",function(){$(this).css("cursor","pointer")}).on("mouseout",function(){$(this).css("cursor","initial")});
						})
					break;

				}

			}
		}
	}
	getOriginalColor(class2){

		var f=$("."+class2).css("color");
		return f;

	}

}


	
		function generateArticlesSearch22(obj){
			var leng = obj.returnObj.length;
			var strg="";
			var elemColor="#eee"
			for(g=0;g<leng;g++){
				var timeDateVaCreate=getTime(obj.returnObj[g].agape_media_createDate,'true')
				var timeDateVaUpdate=getTime(obj.returnObj[g].agape_media_lastComment_date,'true');

				strg=strg+"<div class='newsElems' style='background-color:"+elemColor+";'>"
					strg=strg+"<div id='news"+g+"' style='float:left;width:300px;margin:auto;text-decoration:underline;font-weight:bold;cursor:pointer;' onclick='viewArticlesSearch(this)'>"+obj.returnObj[g].agape_media_title+"</div><div style='float:right;font-weight:bold;'>"+obj.returnObj[g].agape_media_group+"</div>"
					
					strg=strg+"<div style='clear:both'></div>"
					strg=strg+"<div class='fontsize12px' style='float:left;'>Created by: "+obj.returnObj[g].agape_media_author+"</div>"
					strg=strg+"<div class='fontsize12px' style='float:right;'>Updated by: <span id='media_UpBy"+g+"' style='color:red;'>"+obj.returnObj[g].agape_media_updatedBy+"</span></div>"
					strg=strg+"<div style='clear:both'></div>"
					strg=strg+"<div class='fontsize12px' style='float:left;'>Created: "+timeDateVaCreate+"</div>"
					strg=strg+"<div id='media_commUpdateDate"+g+"'class='fontsize12px' style='float:right;'>Updated: "+timeDateVaUpdate+"</div>" 
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
			$("#newsContent").empty().append(strg);

		}



function Verifyuser(bUrl){
	var auth="true";
	if(global!='undefined'){
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
	


function fademessg(elem,mess){
	elem.innerHTML=mess;
	TweenMax.to(elem,.5,{css:{opacity:1},onComplete:function(){
		TweenMax.to(elem,4,{css:{opacity:1},onComplete:function(){
			TweenMax.to(elem,.5,{css:{opacity:0}})
			}
		})
	}})
}


function adverBannerTimer(onj){
	if (typeof(Worker) !== "undefined") {
	  var w = new Worker(global.baseUrl+"/web_workers/AdvertiseWebWorker.js");
	  w.onmessage=function(event){
	  	switch(event.data.type){

	  		case 'rotateAds':
	  		var $elem1=$("#listUsersOnlinePage");
	  			changeAd(onj)
	  		break;

	  		case 'checkGUID':
	  			//alert("kank");
	  			break;

	  			case 'rotateUsers':
	  				console.log("Anita")
	  				slideUsers()

	  			break;
	  	}
	  }
	} else {
	   var doit = setInterval(function(){changeAd(onj)},5000);
	}	
}



function mainWebWorker(onj){


	



}




class setWebWorker{





}


function changeAd(hello){
	$("#adDiv").attr("src",hello[advClassIndx].agape_advertisement_Image);
	$("#adDiv").unbind("click").on("click",function(){
		window.open(hello[advClassIndx].agape_advertisement_Link);
	})
	advClassIndx=advClassIndx+1;
	if(advClassIndx==hello.length){
		advClassIndx=0;
	}
}


function loadUTube_pro(val){
	
	var sendObj10={}
	sendObj10.job="atomic_selectAll";
	sendObj10.dbase="agape_topics";
	var Vindex=val.id.length;
	var inState="("
	for(v=0;v<Vindex;v++){
		if(inState=="("){
			inState=inState+val.id[v]
		}else{
			inState=inState+","+val.id[v]
		}
	}
	inState=inState+")"
	sendObj10.ob="where agape_media_ID in "+inState;
	var val1=val;
	var retFunk=function(data){


		var retObj=globalTools.verify(data)
		global.dataHolder.auxVal=retObj;

		var checkThumbs=$.parseJSON(global.userObj.agape_vote_recordThumbs)
		var checkThumbIndex=checkThumbs.length;
		var e1=retObj.returnObj.length;
		if(checkThumbIndex>0){
			for(var i=0;i<retObj.countR;i++){
				var appd="true"
				for(var i1=0;i1<checkThumbIndex;i1++){
					
					if(checkThumbs[i1].uTube==retObj.returnObj[i].agape_media_ID){
						appd="false"
					}else{

					}
				}
				var uString
				
				if(appd=="false"){
					uString="<div style='margin-right:10px;font-family:arial;'><div><iframe class='utubeVids"+i+"' width='200' height='140' src='"+retObj.returnObj[i].agape_media_link+"' frameborder='0' allowfullscreen=''></iframe></div><div id='vid0'><div id='utubeTitle"+i+"' style='font-size:12px;width:200px;color:#eee;'>"+retObj.returnObj[i].agape_media_title+"</div><div style='font-size:12px;width:120px;color:lime;text-align:left;'><img id='spice' class='vidThumbs up'  src='/agape/images/thumbsUp.gif' height='20'> <span id='utube_thumbsUp_' style='color:#eee;'>"+retObj.returnObj[i].agape_media_thumbsUp+"</span></div><div style='font-size:12px;width:120px;color:red;text-align:left;'><img id='spice'   class='vidThumbs down' src='/agape/images/thumbsDown.gif' height='20'> <span id='utube_thumbsDown' style='color:#eee'>"+retObj.returnObj[i].agape_media_thumbsDown+"</span></div><div id='uTubeV"+i+"' style='font-size:12px;width:120px;color:red;text-align:left;color:#eee;text-decoration:underline;'>Comments: <span id='utubeCommCount'>"+retObj.returnObj[i].agape_media_comments_count+"</span></div></div></div>"
				}else{
					uString="<div style='margin-right:10px;font-family:arial;'><div><iframe class='utubeVids"+i+"' width='200' height='140' src='"+retObj.returnObj[i].agape_media_link+"' frameborder='0' allowfullscreen=''></iframe></div><div id='vid0'><div id='utubeTitle"+i+"' style='font-size:12px;width:200px;color:#eee;'>"+retObj.returnObj[i].agape_media_title+"</div><div style='font-size:12px;width:120px;color:lime;text-align:left;'><img id='vthU"+i+"' class='vidThumbs up' style='cursor:pointer;' src='/agape/images/thumbsUp.gif' height='20'> <span id='utube_thumbsUp_"+i+"'>"+retObj.returnObj[i].agape_media_thumbsUp+"</span></div><div style='font-size:12px;width:120px;color:red;text-align:left;'><img id='vthD"+i+"' style='cursor:pointer;' class='vidThumbs down' src='/agape/images/thumbsDown.gif' height='20'> <span id='utube_thumbsDown_"+i+"'>"+retObj.returnObj[i].agape_media_thumbsDown+"</span></div><div id='uTubeV"+i+"' style='font-size:12px;width:120px;color:red;text-align:left;color:#eee;text-decoration:underline;'>Comments: <span id='utubeCommCount"+i+"'>"+retObj.returnObj[i].agape_media_comments_count+"</span></div></div></div>"
				}
				
				
				$(val.div).append(uString)
			}

		}else{
			for(var i=0;i<retObj.countR;i++){
				var uString="<div style='margin-right:10px;font-family:arial;'><div><iframe class='utubeVids"+i+"' width='200' height='140' src='"+retObj.returnObj[i].agape_media_link+"' frameborder='0' allowfullscreen=''></iframe></div><div id='vid0'><div id='utubeTitle"+i+"' style='font-size:12px;width:200px;color:#eee;'>"+retObj.returnObj[i].agape_media_title+"</div><div style='font-size:12px;width:120px;color:lime;text-align:left;'><img id='vthU"+i+"' class='vidThumbs up' style='cursor:pointer;' src='/agape/images/thumbsUp.gif' height='20'> <span id='utube_thumbsUp_"+i+"'>"+retObj.returnObj[i].agape_media_thumbsUp+"</span></div><div style='font-size:12px;width:120px;color:red;text-align:left;'><img id='vthD"+i+"' style='cursor:pointer;' class='vidThumbs down' src='/agape/images/thumbsDown.gif' height='20'> <span id='utube_thumbsDown_"+i+"'>"+retObj.returnObj[i].agape_media_thumbsDown+"</span></div><div id='uTubeV"+i+"' style='font-size:12px;width:120px;color:red;text-align:left;color:#eee;text-decoration:underline;'>Comments: <span id='utubeCommCount"+i+"'>"+retObj.returnObj[i].agape_media_comments_count+"</span></div></div></div>"
				$(val.div).append(uString)
			}

		}
		

		var inState1=inState;


		$("img[id^='vthU']").each(function(){
			$(this).on("click",function(){
				var e2=$(this).attr("id")+"";
				e2=e2.substr(4);
				var model={}
				model.job="quickJamUpdate"
				model.dbase="agape_topics"
				model.updateStr="agape_media_thumbsUp=agape_media_thumbsUp+1";
				model.param="agape_media_ID";
				model.vals=retObj.returnObj[e2].agape_media_ID;
				model.selFunc="selectFunc";
				model.kob=" where agape_media_ID in"+inState1;
				var nOb={}
				nOb.uTube=retObj.returnObj[e2].agape_media_ID;
				checkThumbs.push(nOb)
				checkThumbs1=checkThumbs;


				var retFunk1=function(datum){
					var retObj1=globalTools.verify(datum);
					$("#utube_thumbsUp_"+e2).html(retObj1.returnObj[e2].agape_media_thumbsUp).css("color","#eee");
					$("#utube_thumbsDown_"+e2).html(retObj1.returnObj[e2].agape_media_thumbsDown).css("color","#eee");
					$("#vthU"+e2).unbind("click").css("cursor","none");
					$("#vthD"+e2).unbind("click").css("cursor","none");


					var model1={}
					model1.job="quickJamUpdate"
					model1.dbase="agape_profile"
					model1.updateStr="agape_vote_recordThumbs='"+JSON.stringify(checkThumbs1)+"'";
					model1.param="agape_profile_memberID"
					model1.vals=global.userObj.agape_profile_memberID;
					var retFunk2=function(datal){
					

					}
					ajaxCallPost(model1,retFunk2);
					
				}

				ajaxCallPost(model,retFunk1);
			})
		})

		$("img[id^='vthD']").each(function(){
			$(this).on("click",function(){
				var e2=$(this).attr("id")+"";
				e2=e2.substr(4);
				var model={}
				model.job="quickJamUpdate"
				model.dbase="agape_topics"
				model.updateStr="agape_media_thumbsDown=agape_media_thumbsDown+1";
				model.param="agape_media_ID";
				model.vals=retObj.returnObj[e2].agape_media_ID;
				model.selFunc="selectFunc";
				model.kob=" where agape_media_ID in"+inState1;



				var nOb={}
				nOb.uTube=retObj.returnObj[e2].agape_media_ID;
				checkThumbs.push(nOb)
				checkThumbs1=checkThumbs;
				var retFunk1=function(datum){
					var retObj1=globalTools.verify(datum);
					$("#utube_thumbsUp_"+e2).html(retObj1.returnObj[e2].agape_media_thumbsUp).css("color","#eee");
					$("#utube_thumbsDown_"+e2).html(retObj1.returnObj[e2].agape_media_thumbsDown).css("color","#eee");
					$("#vthU"+e2).unbind("click").css("cursor","none");
					$("#vthD"+e2).unbind("click").css("cursor","none");



					var model1={}
					model1.job="quickJamUpdate"
					model1.dbase="agape_profile"
					model1.updateStr="agape_vote_recordThumbs='"+JSON.stringify(checkThumbs1)+"'";
					model1.param="agape_profile_memberID"
					model1.vals=global.userObj.agape_profile_memberID;
					var retFunk2=function(datal){
					

					}
					ajaxCallPost(model1,retFunk2);


				}

				ajaxCallPost(model,retFunk1);
			})
		})



		$("div[id^='uTubeV']").unbind("click").on("click",function(){	
			var div1=document.getElementById("_lboxBackground");
			var div2=document.getElementById("_lBoxMainDiv");
			var template={};
			template.page="viewpro_uTube_open.html";
			var index1=$(this).attr("id")+"";
			var index2=index1.substr(6);
			CommentBoss.setViewIndex(index2)
			global.returnFunction_close=function(){
				document.body.scrollTop="900";
			}

			//global.module='searchCandidates'
			//template.job="visitprofile";
			//global.candidate.id=$(this).attr('id');
			//var sendX=$(this).attr("id");
			//sendX=sendX.substr(6);
			//global.candidate.param=sendX;
			template.param=index2;
			ingniteLightBox = new LightBox(div1,div2,template,global.candidate.id)
			ingniteLightBox.lightBoxOn();
			//global.candidate.job="seachViewer";
		})


	}
	ajaxCallPost(sendObj10,retFunk);
}

function buildSearch(onj){


var fred=globalTools.verify(onj)

	if(serchObj.countR>0){
					
						//var searchObject=$.parseJSON(serchObj[1]);
						global.dataHolder.searchObj=serchObj;
						global.searchQuery=serchObj.sql;
						global.searchObj=serchObj;
						globalTools.save();


						var leng=serchObj.returnObj.length;
						$("#resultsHolder").empty();

						for(var i=0;i<leng;i++){

							var strg="";
							var magicnum;
							magicnum = mNumberFinder(serchObj.returnObj[i]);
							
							_color=callColor(magicnum)
							var age
							if(serchObj.returnObj[i].agape_profile_dateOfBirth!='none'){
								age=agefinder(serchObj.returnObj[i].agape_profile_dateOfBirth)
							}else{
								age="N/A"
							}

							
							var imgObj=$.parseJSON(serchObj.returnObj[i].agape_profile_default_img);
						
							strg="<div class='imageDiv'>"
								strg=strg+"<table>"
									strg=strg+"<tr>"
										strg=strg+"<td>";

											strg=strg+"<img src='"+imgObj.defaultPic+"' height='140' width='120'>"
											strg=strg+"<div style='text-align:center'>"+serchObj.returnObj[i].agape_profile_username+"</div>"
										strg=strg+"</td>"
										strg=strg+"<td valign='top'>"

											strg=strg+"<div style='font-size:42px;color:"+_color+";'>"+magicnum+"</div>"

											strg=strg+"<div style='font-size:12px;'>Intentions:</div>"
											strg=strg+"<div style='font-size:12px;color:blue;text-decoration:underline'>"+serchObj.returnObj[i].agape_profile_intentions+"</div>";
											
											strg=strg+"<div style='font-size:12px;float:left;'>"+serchObj.returnObj[i].agape_profile_city+", "+serchObj.returnObj[i].agape_profile_state+"</div>"
											strg=strg+"<div style='clear:both;'></div>"
											
											strg=strg+"<div style='clear:both;'></div>"
										strg=strg+"<div style='font-size:12px;float:left;'>Age: </div>"
										strg=strg+"<div style='font-size:12px;float:left;'>"+age+"</div>"
										strg=strg+"<div style='clear:both;'></div>"
										strg=strg+"<div class='vp' id='"+serchObj.returnObj[i].agape_profile_username+"' style='font-size:12px;color:red;cursor:pointer;'>visit profile</div><div id='sObj"+i+"'></div>"
									strg=strg+"</td>";
								strg=strg+"</tr>";
							strg=strg+"</table>";
						strg=strg+"</div>";
						widt=276*(i+1);
						widt=widt+"px"
						$("#resultsHolder").css("width",widt).append(strg);
						control="search_results";
						paginationFunc('searchPagination',serchObj.countR,'search_results');
					}
					
					$("#resultsHolder").append("<div style='clear:both;'></div>")
					$(".vp").unbind("click").on("click",function(){	
						var div1=document.getElementById("_lboxBackground");
						var div2=document.getElementById("_lBoxMainDiv");
						var template={};
						template.page="viewpro1_open.html";
						global.module='searchCandidates'
						template.job="visitprofile";
						global.candidate.id=$(this).attr('id');
						var sendX=$(this).next().attr("id");
						sendX=sendX.substr(4);
						global.candidate.param=sendX;
						template.param=$(this).attr('id');
						ingniteLightBox = new LightBox(div1,div2,template,global.candidate.id)
						ingniteLightBox.lightBoxOn();
						global.candidate.job="seachViewer";
					})

					
				}




}

function replaceAll(str, find, replace) {
    return str.replace(new RegExp(escapeRegExp(find), 'g'), replace);
}

function escapeRegExp(str) {
    return str.replace(/([.*+?^=!:${}()|\[\]\/\\])/g, "\\$1");
}

	
function checkGuid(retFunk){

	var userID
	var sendMod={}
	
	sendMod.job="quickSelect_atomic";
	sendMod.dbase="sessiontable";
	sendMod.param="sessiontable_string";
	var guid=$("#sGuid").val();
	guid= replaceAll(guid, " ", "+");
	sendMod.value=guid;
	sendMod.start=0;
	var rFunc=retFunk;
	var retF=function(data){

		
		userID=globalTools.verify(data);
		if(userID.returnObj=="set empty"){
			logout();
		}else{
			if(rFunc){
				rFunc(userID);
				
				
			}
			$("#logD1").hide();
		}

	}
	ajaxCallPost(sendMod,retF);

}


function loadSponsors(datum,lead){
	 	var cnt=datum.length;
	 	var strg="";
	 	for(var z=0;z<cnt;z++){
	 		
	 		strg=strg+"<div style='float:left;width:30%'><a href='"+lead+"/sponsors?id="+datum[z].agape_sponsors_ID+"'><img src='"+lead+"/"+datum[z].agape_sponsors_Image+"' class='sponsorDiv' /></div>";
	 	}

	 	$("#sponsorDiv").prepend(strg)

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

function getOnlineUsers(b1){


				var userOnline={}
				userOnline.job="atomic_selectAll"
				userOnline.dbase="getOnlineUsers";
				userOnline.ob=" where agape_profile_onlineStatus='Online'  order by agape_profile_lastLogin desc limit "+b1+",25"
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
							sheet=sheet+"<div class='onlineUserClass1' style='font-size:12px;font-family:arial;border-bottom:solid 1px #000;color:#eee;'><div style='float:left;width:80px;'><div><img src='"+ext+"/"+img.defaultPic+"' style='height:40px;width:45px;' /></div><div>"+dataSet.returnObj[b].agape_profile_username+"</div></div>"
							sheet=sheet+"<div style='float:left;width:200px;padding-left:6px;'><div style='height:40px;'>"+dataSet.returnObj[b].agape_profile_city+", "+dataSet.returnObj[b].agape_profile_state+"</div><div id='vProfile"+b+"' style='text-decoration:underline;margin-bottom:2px;cursor:pointer;color:#35b7fe;'>visit profile</div></div><div style='clear:both;'></div></div>";
						}
						sheet=sheet+"</div>"
						$("#listUsersOnlinePage").empty().append(sheet);



						$("div[id^='vProfile']").each(function(){
							$(this).unbind("click").on("click",function(){

							if(global.navFunc){
								if(global.navFunc=="LoggedOut"){
									alert("must be logged in to preview profile")
								}else{
									var div1=document.getElementById("_lboxBackground");
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
									ingniteLightBox.lightBoxOn();

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
							TweenMax.to(elem1,.4,{css:{height:"25px",},onComplete:function(){
								$("#userCloseButt").hide();
							}})
							global.userListStatus="close";
							globalTools.save();
						})

						//
					}else{
						//$("#messageNum").removeClass("navClickClass");
					}
				}

				ajaxCallPost(userOnline,repFunk);


}


function slideFoot(){
	var r=$( window ).height();
	var d=$( document ).height();
	r=r-(r-10);
	$("#footerPush").css({"height":r+"px"});
}