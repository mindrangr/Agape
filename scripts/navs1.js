function loginpappy(direction)

{
	strg="none";
	switch(direction)
	{
		
		case 'LoggedIn':
			strg="<table><tr><td style='text-align:left;font-size:15px;'>Welcome:&nbsp;<span style='color:#d505f9;font-weight:bold'><u>"+userObj['agape_profile_firstname']+"</u></span></td></tr><tr><td style='text-align:left;'><span style='cursor:pointer;color:lime;font-weight:bold;' onclick=logout()><u>Logout</u></span></td></tr></table>";
			
			$('#lPanel').html(strg);
			document.getElementById('loginPanel').style.display="none";
		break;
		
		default:
			strg="<table><tr><td style='text-align:left;'>Username</td><td><input type='text' style='background-color:#a8b7bc;border-radius:4px;border:solid 1px #000000;' id='username'/></td></tr>";
	
			strg=strg+"<tr><td style='text-align:left;'>Password</td><td><input type='text' style='background-color:#a8b7bc;border-radius:4px;border:solid 1px #000000;' id='password' /></td></tr>";
			
			strg=strg+"<tr><td style='text-align:left;'><input type='button' value='button' onclick=login() /></td><td><span style='color:red;display:none;' id='badpasslink' >bad password</span></td></tr></table>";
			document.getElementById('loginPanel').style.display="block";
			$('#loginPanel').html(strg);
		break;
	
	}
	
	
	
	
	
		
}

function logn()
{
	document.getElementById('badpasslink').style.display='block';

}

function buttonMouseOver(obj,color,par)
{
	obj.style.backgroundColor=color;	
}









// main jscripts

		function getstateObj(stateElem)
		{
			$.get("AjaxPage1.php", {job:'stateSearch'}, function(data){parseState(data,stateElem)})		
		}
		
		
		var cityObj="";
		function parseState(obj,ID)
		{
			
			var stateObj=$.parseJSON(obj);

			for(b=0;b<stateObj.length;b++)
			{	
				 var option = document.createElement("option"); 
				 option.text = stateObj[b].state_name;
				 option.value = stateObj[b].state_name;
				 if(typeof window.userObj != 'undefined')
				 {
					 if(window.userObj['agape_profile_state']==stateObj[b].state_name)
					 {
						option.setAttribute("selected","selected")
					 }
				 }
				 var select = document.getElementById(ID); 
				 select.appendChild(option); 							
			}
			//alert(ID)
			
			if(ID=='agape_profile_state')
			{			
				cityFiller(document.getElementById('agape_profile_state'),'agape_profile_city');
				
			}
			
			
		}
		
		
		function cityFiller(obj,cityElement)
		{
			
			obj.style.backgroundColor="#ffffff";
			
			var sta=$(obj).val();
			var rand = "getRandomizer()";			
			$.get("AjaxPage1.php",{job:'cityFiller',state:sta,random:rand},function(data){citySelFiller(data,cityElement)})
		}
		
		
		
		function cityFiller1(state,cityElement)
		{
			var rand = "getRandomizer()";			
			$.get("AjaxPage1.php",{job:'cityFiller',state:state,random:rand},function(data){citySelFiller(data,cityElement)})
		}
		
		
		
		function citySelFiller(obj,cityElement)
		{			
			
			alert(obj+"  "+cityElement)
			
			var cities=obj.split("$$")
			form1[cityElement].options.length = 0;
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
		

		
		
		function loginReturn(data)
		{
			
			
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
					setStorage('user',dChk[1]);					
					setStorage('login','true');
					var title=document.URL;
					log=sessionStorage.getItem('login');	
					var intent=window.userObj.agape_profile_intentions;
					quesObject.buildList(intent);	
					
					require(['modules/pageLoader','modules/loginpappy'],function(pLoad,loginpappy)
					{
						loginpappy.login('LoggedIn');
						pLoad.pageLoader();	
					});	
			
					// getstateObj('agape_profile_state');										
					// loginpappy('LoggedIn');
					// changeNavPanel('LoggedIn','par1');				
					// popOfProf();					
					// populateForm();	
					// getMessages(1);
					// getFirstsearch(1);						
					// loadSearchHeader();
					// getFrRequest(1);					
					// loadSearchHeader();
					// cityFiller1(window.userObj['agape_profile_state'],'searchPanelCity')
					// document.getElementById('holding').style.backgroundImage="url('images/newb_go_in.jpg')";
					// document.getElementById('auxDix').style.display="block";					
					// document.getElementById('addOn').style.display="block";
					// loadPicContainer();												
				}
				else
				{
					alert('You must upgrade your browser to access this website');
				}
			}
			
		}
		
		function logout()
		{
			window.sessionStorage.clear();
			loginpappy('loggedOut');
			changeNavPanel('loggedOut','par1')
			panelChange('splashPanel')
			document.getElementById('holding').style.backgroundImage="url('images/newb_go.jpg')";
			document.getElementById('auxDix').style.display="none";
			document.getElementById('addOn').style.display="none";
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
			}
		}
		
		function getRandomizer()
		{
			var rand=Math.floor((Math.random()*1000)+1); 
			return rand;		
		}
		
		function booty()
		{
			alert('booty')
		}
		
		function changeNavPanel(par,par1)
		{
			switch(par)
			{
				case 'LoggedIn':
				
					document.getElementById('butt_signUp').innerHTML='Profile';
					document.getElementById('butt_message').innerHTML="Messages<span style='color:lime;font-size:10px' id='messgrCount'>&nbsp;(12)</span>";
					document.getElementById('butt_search').innerHTML='Search';
					document.getElementById('butt_community').innerHTML='Community';
					document.getElementById('butt_view').innerHTML='View';
					document.getElementById('butt_friends').innerHTML='Friends';
					
					
					document.getElementById('butt_search').onclick=function (){panelChange('search')};
					document.getElementById('butt_signUp').onclick=function (){panelChange('signUp')};
					document.getElementById('butt_message').onclick=function (){panelChange('message')};
					document.getElementById('butt_community').onclick=function (){panelChange('community')};
					document.getElementById('butt_view').onclick=function (){panelChange('view')};
					document.getElementById('butt_friends').onclick=function (){panelChange('friends')};
					//populateForm();
					
				break;
				
				
				default:
					
					document.getElementById('butt_signUp').innerHTML='Sign Up';
					document.getElementById('butt_message').innerHTML='';
					document.getElementById('butt_search').innerHTML='';
					document.getElementById('butt_community').innerHTML='';
					document.getElementById('butt_view').innerHTML='';
					document.getElementById('butt_friends').innerHTML='';
					
					document.getElementById('butt_signUp').onclick= function (){panelChange(this)};
					document.getElementById('butt_message').onclick= null;
					document.getElementById('butt_search').onclick= null;
					document.getElementById('butt_community').onclick= null;
					document.getElementById('butt_view').onclick= null;
					document.getElementById('butt_friends').onclick= null;
				break;
			
			}
		
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
							//alert(document.getElementById(j).options[y].value+" == "+window.userObj[j]+" "+y)
							if(document.getElementById(j).options[y].value==window.userObj[j])
							{
								$(document.getElementById(j).options[y]).attr("selected", "selected");
							}					
						}
						
						if(j=='agape_profile_state')
						{
							cityFiller(document.getElementById('agape_profile_state'),'agape_profile_city');
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
		
		
		//populate profile view
	function popOfProf()
		{			
			var usObj=sessionStorage.getItem('user');
		
			userObj=$.parseJSON(usObj)
			
			var age="Not Answered";
			if(userObj['agape_profile_dateOfBirth']!='none')
			{
				age=getAgeJavaSct_php(userObj['agape_profile_dateOfBirth']);
				document.getElementById('agape_profile_dateOfBirth').value=userObj['agape_profile_dateOfBirth']
			}
			
			
			var opts=userObj['agape_profile_opts'].split("$$");			
			var optStr=""			
			for(opt=0;opt<opts.length;opt++)
			{
				optStr=optStr+"<div style='text-align:left;'><input type='checkbox' checked onclick='this.checked = true;'/>"+opts[opt]+"</div> ";			
			}
			document.getElementById('loveOptions').innerHTML=optStr;
			
			var opts=userObj['agape_profile_opts_partner'].split("$$");			
			var optStr=""			
			for(opt=0;opt<opts.length;opt++)
			{
				optStr=optStr+"<div style='text-align:left;'><input type='checkbox' checked onclick='this.checked = true;'/>"+opts[opt]+"</div> ";			
			}
			document.getElementById('parnterOptions').innerHTML=optStr;
			
			var proFields = new Array("agape_profile_username","agape_profile_city","agape_profile_state","agape_profile_intentions","agape_profile_religion","agape_profile_salary","agape_profile_education","agape_profile_description","agape_profile_firstDate","agape_profile_partner_description","agape_profile_children","agape_profile_alcohol","agape_profile_drugs","agape_profile_race","agape_profile_height","agape_profile_bodyType");			
			for(pop=0;pop<proFields.length;pop++)
			{
				if(userObj[proFields[pop]]!="")
				{
					document.getElementById(proFields[pop]+"_pr").innerHTML=userObj[proFields[pop]];
				}
				else
				{
					document.getElementById(proFields[pop]+"_pr").innerHTML="Not Answered";
				}
			}
			document.getElementById('agape_profile_dateOfBirth_pr').innerHTML=age;
			
			var tImg=$.parseJSON(userObj['agape_profile_default_img']);
			
			
			tImg1=eval(tImg);
			
			document.getElementById('hostImg').src=tImg1.defaultPic
			var nation=userObj['agape_profile_nation'];
		
			document.getElementById('flagPost').src="images/Flags/"+nation+".jpg";
			//alert(window.userObj['agape_profile_intentions'])
			$('#editButton').css("display","block");			
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
		
		function getMessages(start)
		{	
			
			if(typeof(Storage)!=="undefined")
			{						
				if(window.sessionStorage.getItem('messages')!=="undefined" && window.sessionStorage.getItem('messages')!=null)
				{				
					var messgs=window.sessionStorage.getItem('messages');		
					parseMessages(messgs)				
				}
				else
				{					
					
					getMessObj={};
					getMessObj.job="getMessages";
					getMessObj.memberID=window.userObj['agape_profile_memberID'];
					getMessObj.start=start;
					getMessObj.type="AJAX";
					var success=function(data){parseMessages(data)};
					
					$.get("AjaxPage1.php",{job:'getMessages',memberID:window.userObj['agape_profile_memberID'],start:start},function(data){parseMessages(data)});
				
				}
			}
		}
		

		
		function parseMessages(obj)
		{		
			messObj1=obj
			
			messObj=messObj1.split("**");
			//alert(obj)
			mObj=$.parseJSON(messObj[1])
			
			if(mObj.length>0)
			{			
					
				var myVar=setInterval(function(){},500);
				window.messObj=mObj;	
				setStorage('messages',obj);					
				
		
				
				leng=mObj.length;
				var doc="none";
				var classchk="messageContainer1";
				
				for(i=0;i<leng;i++)
				{				
					
					//alert(messObj[i]['agape_message_send_date']+"  "+messObj[i]['agape_message_ID'])
					tDate=date_MySQL_Stan(window.messObj[i]['agape_message_send_date'])
					if(doc=='none')
					{				
						
						doc="<div class='"+classchk+"'><div class='messageImageholder'><img src='"+window.messObj[i]['agape_sender_url']+"' border='1' width='70' /></div><div style='float:left;'><div class='messageX'>X</div><div class='messagesName'>"+window.messObj[i]['agape_message_sender_username']+"</div><div class='messageDate'>"+tDate+"</div><div style='clear:both;'></div><div style='font-weight:Bold;margin-left:3px;font-size:13px;'><u>"+window.messObj[i]['agape_message_title']+"</u></div><div class='messageDiv'>"+window.messObj[i]['agape_message']+"</div><div class='messageSendButtonContainer'><div style='float:left;'><input type='button' value='reply' /></div><div style='float:left;margin-left:15px;'><input type='button' value='visit profile' onclick=messgProfile("+window.messObj[i]['agape_message_sender_ID']+") /></div><div style='clear:both;'></div></div></div><div style='clear:both;'></div></div>";
					}
					else
					{
						doc=doc+"<div class='"+classchk+"'><div class='messageImageholder'><img src='"+window.messObj[i]['agape_sender_url']+"' border='1' width='70' /></div><div style='float:left;'><div class='messageX'>X</div><div class='messagesName'>"+window.messObj[i]['agape_message_sender_username']+"</div><div class='messageDate'>"+tDate+"</div><div style='clear:both;'></div><div style='font-weight:Bold;margin-left:3px;font-size:13px;'><u>"+window.messObj[i]['agape_message_title']+"</u></div><div class='messageDiv'>"+window.messObj[i]['agape_message']+"</div><div class='messageSendButtonContainer'><div style='float:left;'><input type='button' value='reply' /></div><div style='float:left;margin-left:15px;'><input type='button' value='visit profile' onclick=messgProfile("+window.messObj[i]['agape_message_sender_ID']+") /></div><div style='clear:both;'></div></div></div><div style='clear:both;'></div></div>";				
					}
					if(classchk=="messageContainer1")
					{
						classchk="messageContainer2";
					}
					else
					{
						classchk="messageContainer1";				
					}
				}
				document.getElementById('messContainer').innerHTML=doc;
			}
			else
			{
				document.getElementById('messContainer').innerHTML="no records";
			}			
			
		}
		
		
		searchIndex=1;
		//Populates search panel
		function getFirstsearch(index)
		{
			
			if(f25Max>=searchIndex)
			{
				state=window.userObj['agape_profile_state']
				var gender=window.userObj['agape_profile_gender'];
				
				
				
				for(var key in window.userObj)
				{
					var keys="se_"+key;
					if(document.getElementById(keys))
					{
						if(key!='agape_profile_gender')
						{
							$("#"+keys).val(window.userObj[key])
						}
						else
						{
							var searchGen="Female";
							if(window.userObj[key]=="Female")
							{
								searchGen="Male"
							}						
							$("#se_agape_profile_gender").val(searchGen);
						
						}
					}
				
				}
				
				var rand = getRandomizer();
				$("#idSeachStateLabel_free").html(window.userObj['agape_profile_state'])
				
				$.get("AjaxPage1.php", {job:'f25searches',gender:gender,state:state,random:rand,index:index}, function(data){f25AjxSearch(data)});
			}
		}

function getFirstsearch_Call()
{
	searchIndex=searchIndex+1;
	getFirstsearch(searchIndex)
	
}


function f25AjxSearch(data)
{	
	
	if(data!='none')
	{		
		
		f25Obj=$.parseJSON(data);		
		f25builder();	
		
	}		
}
				
				
				
proStart=0;
proMax=25
f25Max=1;
function f25builder()
{					
	var max=f25Obj.length;	
	var topr=25*searchIndex;
	var bottom=topr-24;
	var cols=f25Obj[0].TotalCols;
	var pagination=parseInt(Math.floor(cols/25))
	var pagination_val=cols%25;
	
	f25Max=pagination;
	if(pagination_val>0)
	{
		f25Max=f25Max+1;
	}
	

	
	if(max<25)
	{
		topr=topr-24+max;	
	}
	document.getElementById('picsStart').innerHTML=bottom;
	document.getElementById('picsEnd').innerHTML=topr;
	
	for(i=proStart;i<proMax;i++)
	{


		if(f25Obj[i])
		{
			
			var tImg=f25Obj[i]['agape_profile_default_img'];
			//document.write(tImg)
			tImg2=$.parseJSON(tImg);
			
			var elem="pic"+i
			document.getElementById(elem).src=tImg2.defaultPic;
			document.getElementById(elem).style.cursor="pointer";
			document.getElementById(elem).onclick=function(){viewPhoto(this)};
		}
		else
		{
			var elem="pic"+i
			document.getElementById(elem).src="images/Male-icon.png";
		}
		

	}
	
	var tImg=f25Obj[0]['agape_profile_default_img'];

	tImg1=$.parseJSON(tImg);
	$("#display_agape_profile_username").html(f25Obj[0].agape_profile_username)
	$("#display_agape_profile_location").html(f25Obj[0].agape_profile_city+", "+f25Obj[0].agape_profile_state)
	$("#display_agape_profile_intentions").html(f25Obj[0].agape_profile_intentions);
	$("#display_agape_profile_city").html(f25Obj[0].agape_profile_city);
	document.getElementById('display_searchImgDiv').src=tImg1.defaultPic
	
	
	document.getElementById('uID_se').value=f25Obj[0].agape_profile_memberID;
	document.getElementById('tot').innerHTML=f25Obj[0].TotalCols

}

function viewPhoto(obj)
{
	var strg=obj.id;
	var index=parseInt(strg.substr(3));
	//alert(f25Obj[index].agape_profile_city)
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


		function getFrRequest(start)
		{			
			obj={};
			obj.job='getFrRequest',
			obj.par=window.userObj['agape_profile_username'];
			obj.start=start;
			func=function(data){parseFrRequest(data)};	
			ajaxCall(obj,func)			
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
		
		
		//alert(JSON.stringify(obj))
		
		
		function parseFrRequest(obj)
		{	
			var tObj=obj.split("**");
			//alert(tObj[1])
			var friendStrg="";
			friendObj=$.parseJSON(tObj[1]);
			fLeng=friendObj.length;
			classchk="messageContainer1";
			for(i=0;i<fLeng;i++)
			{
					var tImg=friendObj[i].requestorImgUrl;
					//alert(tImg)
					tImg1=$.parseJSON(tImg);
				friendStrg=friendStrg+"<div class='"+classchk+"'><div style='float:left;'><img src='"+tImg1.defaultPic+"' border='1' height=30 width=30 /></div><div style='float:left;'>You have received a friendship request from "+friendObj[i].requestorUsername+"</div><div style='float:right;'><button >accept</button><button >ignore</button></div><div style='clear:both;'></div></div>";
				if(classchk=="messageContainer1")
				{
					classchk="messageContainer2";
				}
				else
				{
					classchk="messageContainer1";				
				}
			}		
			document.getElementById("friendContainer").innerHTML=friendStrg;			
		}
		
		
	function getTime(a)

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
            hours = hours - 12; } 
    if (hours == 0)
        {
            hours = 12; } 
    if (minutes < 10)
        {
        minutes = "0" + minutes
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


function panelChange(page)
			{
				//var elem=obj.id;				
				//var newElem=elem.substr(5);				
				$("#"+lastNav).fadeOut('fast');				
				$("#"+page).fadeIn('fast');
				lastNav=page;
			}
			
			
			
			function updateTime()
			{
				g=new Date()
				h=getTime(g);		
				document.getElementById('dateField').innerHTML=h
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
				$("#searchCall").html("Local people from the "+userObj['agape_profile_city']+" area.")
			}
			
			
			function loadModule(obj)
			{						
				var creator=$(obj).val();			
				var indx=obj.selectedIndex;				
				TextBCreator(creator);	
				populateForm();			
				document.getElementById('agape_profile_intentions').selectedIndex=indx;
				getstateObj('agape_profile_state');				
			}
			
			
		function visitPro1()
		{			  
			looperID=document.getElementById('uID_se').value;			  
			testwindow = window.open("viewpro1.php?par="+looperID, "mywindow", "location=1,status=1,width=720,height=1100,scrollbars=1,status=1");    
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
			
				
				$.ajax(
				{
					url:"AjaxPage1.php",
					type:"GET",
					datatype:"JSON",
					data:{
						job:"searchDiv",
						searchObj:searchObj,
						numb:rand
					},
					success:function(data){crankOutSearchResults(data)}
				})
			}
			
			
			
			function crankOutSearchResults(obj)
			{			
				searchO=obj.split("**");
				searchO[0]=$.trim(searchO[0]);			
				if(searchO[0]=='true')
				{
					var newObj=$.parseJSON(searchO[1])
					var t=searchO[1].length;
					
					for(i=0;i<25;i++)
					{
						
						if(i<t)
						{
							var tImg=newObj[i]['agape_profile_default_img'];							
						}
						else
						{
							alert(55)						
						}
					}
				}
				else
				{
					alert("no results")
				}				
			}
			
			
			
			
			lastTopPanel="video1"
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


				