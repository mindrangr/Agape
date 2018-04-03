
var StringR=window.location.href+"";
var qStringArray=StringR.split("/");



function xPireStorage(unit)
{	
	var nowTime=Date();
	var xpire=nowTime.split(' ');
	minHour=xpire[4].split(":");
	var monthMover;
	switch(xpire[1]){
		case 'January':
		xpire[1]="01";
		monthMover=31;
		break;
		
		case 'February':
		xpire[1]="02";
		monthMover=28;
		break;
		
		case 'March':
		xpire[1]="03";
		monthMover=31;
		break;
		
		case 'April':
		xpire[1]="04";
		monthMover=30;
		break;
		
		case 'May':
		xpire[1]="05";
		monthMover=31;
		break;
		
		case 'June':
		xpire[1]="06";
		monthMover=30;
		break;
		
		case 'July':
		xpire[1]="07";
		monthMover=31;
		break;
		
		case 'August':
		xpire[1]="08";
		monthMover=31;
		break;
		
		case 'September':
		xpire[1]="09";
		monthMover=30;
		break;
		
		case 'October':
		xpire[1]="10";
		monthMover=31;
		break;
		
		case 'November':
		xpire[1]="11";
		monthMover=30;
		break;
		
		case 'December':
		xpire[1]="12";
		monthMover=31;
		break;	
	}
	
	switch(unit)
	{
		case 'user':
			minHour[0]=parseInt(minHour[0])+1;
			if(parseInt(minHour[0])<10)
			{
				minHour[0]="0"+minHour[0];		
			}
			
			if(parseInt(minHour[0])>23)
			{
				minHour[0]="01"	
				xpire[2]=parseInt(xpire[2])+1;
				if(parseInt(xpire[2])<10)
				{
					xpire[2]="0"+xpire[2];		
				}

				if(xpire[2]>monthMover)
				{
					xpire[2]="01";
					xpire[1]=parseInt(xpire[1])+1;
					if(xpire[1]>12)
					{
						xpire[1]="01";
						xpire[3]=parseInt(xpire[3])+1;
					}
				}			
			}
		break;
	}
	return xpire[3]+xpire[1]+xpire[2]+minHour[0]+minHour[1];
}

function changeDivColor(obj,direction)
{
	if(direction=="over")
	{
		obj.style.color="lime";
		obj.style.textDecoration="underline";
	}
	if(direction=="out")
	{
		obj.style.color="#000000";
		obj.style.textDecoration="none";		
	}
	
	if(direction=="disabled")
	{
		obj.style.color="#d400ff";
		obj.style.textDecoration="none";		
	}
	
	if(direction=="nav")
	{
		obj.style.color="#d400ff";			
	}
}


function stateAbbrev(obj)
{
	var abbreviation="";
	switch(obj)
	{
		case 'Texas':
		abbreviation="TX";
		break;
		
		case 'Florida':
		abbreviation="FL";
		break;
		
		case 'California':
		abbreviation="CA";
		break;
		
		case 'North Carolina':
		abbreviation="NC";
		break;
		
		case 'Michigan':
		abbreviation="MI";
		break;
		
		case 'New York':
		abbreviation="NY";
		break;
		
		case 'Georgia':
		abbreviation="GA";
		break;
		
		case 'Louisiana':
		abbreviation="LA";
		break;
		
		case 'Oklahoma':
		abbreviation="OK";
		break;
		
		case 'Alabama':
		abbreviation="AL";
		break;
		
		case 'South Carolina':
		abbreviation="SC";
		break;
		
		case 'Tennessee':
		abbreviation="TN";
		break;
		
		case 'Ohio':
		abbreviation="OH";
		break;
		
		case 'Mississippi':
		abbreviation="MS";
		break;

		default:
		abbreviation="None";
		break;
	}	
	return abbreviation;
}

function changeColor(Obj,color)
{
	Obj.style.color=color;
}

function goUrl(dest)
{
	location.href=dest;
}

function jsonBuildr(obj)
{
	if(typeof(obj)=='object')
	{		
		if(obj.length==undefined)
		{
			var jsonObj="{"
			for(var b in obj)
			{
				
				jsonObj=jsonObj+"\""+b+"\":\""+obj[b]+"\"";
				jsonObj=jsonObj+",";
			}
			var removeLastComma = jsonObj.lastIndexOf(",")
			jsonObj = jsonObj.substr(0,removeLastComma);
						
			jsonObj=jsonObj+"}";
			
			return jsonObj
		}
		else
		{
			var jsonObj="["
	
			for(i=0;i<obj.length;i++)
			{
				jsonObj=jsonObj+"{"
				for(var index in obj[i])
				{
					jsonObj=jsonObj+"\""+index+"\":\""+obj[i][index]+"\",";
				}
				
				var removeLastComma = jsonObj.lastIndexOf(",")
				jsonObj = jsonObj.substr(0,removeLastComma);
				jsonObj=jsonObj+"}";
				if(i<obj.length-1)
				{
					jsonObj=jsonObj+",";
				}
			}			
			jsonObj=jsonObj+"]";
			return jsonObj;		
		}
	}
	
}

function setStorage(unit,val)
{	
	switch(unit)
	{
		case 'user':
			window.sessionStorage.setItem('user', val);
		break;

		case 'messages':
			window.sessionStorage.setItem('messages', val);
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


function login()
{
	var username=$('#username').val();
	var password=$('#password').val();
	var rand = getRandomizer();
	if(username!="" && password!="")	
	{		
		$.get("AjaxPage1.php", {username:username, password:password, database:'agape_profile',job:'login',random:rand}, function(data){loginReturn(data)}); 
	}
	else
	{	
		
		if(username=="")
		{
			$('#username').css('background-color','#cccccc');		
		}
		
		if(username=="")
		{
			$('#password').css('background-color','#cccccc');
		}	
	}

}

function loginReturn(data)
{		
	data=$.trim(data);	
	dChk=data.split("**");
	//document.write(dChk[1])
	if(dChk[0]=='false')
	{
		alert('bad login or password')
	}
	if(dChk[0]=='true')
	{		
		setStorage('user',data);	
		window.userObj=$.parseJSON(dChk[1]);
		var StringR=window.location.href+"";
		window.log='true';
		var qStringArray=StringR.split("/");
		
		if(qStringArray[4]!="profile.php")
		{			
			goUrl('profile.php');			
		}
		else
		{			
			loginD();
			alert(656)
			blogs.blogGroup(1);
			getFirstsearch();
			getMessages(1);			
			getFrRequest(1);
			quesObject.buildList(window.userObj['agape_profile_intentions']);
			getstateObj('agape_profile_state');
			getstateObj('search_partner_state');			
			popOfProf();	
			populateForm();			
		}
		dashBoard();
		$('#editButton').css("display","block");
		changeMenu('editViewPro');
	}

}


function getFirstsearch()
{
	state=window.userObj['agape_profile_state']
	var gender=window.userObj['agape_profile_gender'];	
	var rand = getRandomizer();
	$.get("AjaxPage1.php", {job:'f25searches',gender:gender,state:state,random:rand}, function(data){f25AjxSearch(data)});
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
proMax=14
function f25builder()
{					
	var max=f25Obj.length;	
	for(i=proStart;i<proMax;i++)
	{

		var tImg=f25Obj[i]['agape_profile_default_img'];
		
		tImg1=$.parseJSON(tImg);
		document.getElementById('pic2').src=tImg1.defaultPic;
		//document.getElementById('row1').innerHTML=document.getElementById('row1').innerHTML+"<div class='feedDivs1' style='background-color:#696969;'><img src='"+tImg1.defaultPic+"' border='1' width='60' height='70' onclick=popProfile("+i+",'f25') /></div>"
	}	
	popProfile(0,'f25');

}

function fixback(obj,color)
{
	$(obj).css('background-color',color);
}




function delimtr(obj)
{
	val="";
	
	newArray=[];
	newv=obj+"";
	newv1=newv.split('');
	valc=newv1.length-3;
	if(newv1.length>3)
	{		
		for(k=(newv1.length-1);k> -1;k--)
		{
			if(k==valc)
			{
				newArray[k]=","+newv1[k];
				valc=valc-3;
			}
			else
			{
				newArray[k]=newv1[k];
			}						
		}
	}
	else
	{
		newArray=newv1;
	}
	for(c=0;c<newArray.length;c++)
	{
		val=val+newArray[c];
	}
	if(val.charAt(0)==",")
	{
		val=val.substring(1,val.length)
	}
	return val;
}

function logout()
{
	window.sessionStorage.clear();
	window.userObj = null;
	colSubObj = null;
	upSubObj = null;
	f25Obj=null;
	window.log="false"
	
	slider="";
	intStatus="still";
	stick=0;
	calla=0;
	wholenumb=0;
	proStart=0;
	proMax=9
	
	
	if(qStringArray[4]=='profile.php')
	{			
		for(f=0;f<dasDicObj.length;f++)
		{
			$("#"+dasDicObj[f]).removeClass('divDash');		
			$("#"+dasDicObj[f]).addClass('divDash_inv');
			$("#"+dasDicObj[f]).css('backgroundColor','#ffffff');			
		}	
		$("#buildPro").removeClass('divDash_inv');
		$("#buildPro").css('backgroundColor','#ffffff');
		$("#buildPro").addClass('divDash1');
		$("#buildPro").css('border-left','solid 2px #ffffff');
		$("#buildPro").unbind('mouseout');
		$("#buildPro").unbind('mouseover');
		$("#buildPro").unbind('click');
		$("#buildPro").html('Build a Profile');		
		$(lastMenu).fadeOut('fast');		
		$('#mainDiv').fadeIn('slow');		
		document.getElementById('row1').innerHTML="";
	}
}



function loginD()
{
	for(f=0;f<dasDicObj.length;f++)
	{
		$("#"+dasDicObj[f]).removeClass('divDash_inv');
		$("#"+dasDicObj[f]).removeClass('divDash1');
		$("#"+dasDicObj[f]).addClass('divDash');
	}
	$("#buildPro").css('border-left','outset 2px #696969');
	$("#buildPro").css('backgroundColor','#34ff0d');
	$("#buildPro").click(function(){changeMenu('buildPro')}); 
	$("#buildPro").html('Profile');
}



function dashBoard()
{				
	document.getElementById('dashboardWrap').innerHTML="<div style='color:blue;font-family:impact;font-size:16px;cursor:pointer;margin-top:50px;margin-right:43px;float:right;' onclick=goUrl('profile.php') ><u>Dashboard</u>&nbsp;&nbsp;<input type='button' value='logout' onclick=logout() /></div>"	
	
	populateForm();
	
	changeButtonVal('LoggedIn')
	
}

function changeButtonVal(status)
{	
	if(status=='LoggedIn')
	{	
		document.getElementById('subButt').value="Update";
		document.getElementById('subButt').onclick=UpdateProf;
	}
	
	if(status=='LoggedOut')
	{
		document.getElementById('subButt').value="Submit";
		document.getElementById('subButt').onclick=profileFormValidator;
	}
}


function UpdateProf()
{	
	for(i=0;i<quesObject['fields'].length;i++)
	{
		if(quesObject['fields'][i].col!='none')
		{
			upSubObj[quesObject['fields'][i].col]=$.trim($("#"+quesObject['fields'][i].col).val());
		}			
	}

	var va="none";
						
	$('#agape_profile_opts_partner :checkbox:checked').each(function(i){	
		if(va=="none")
		{
			va=$(this).val();						
		}
		else
		{
			if($(this).val()!='on')
			{
				va=va+"$$"+$(this).val();
			}				
		}			
	});			
						
	upSubObj['agape_profile_opts_partner']=va;
	
	va="none";
	$('#agape_profile_opts :checkbox:checked').each(function(i){	
		if(va=="none")
		{
			va=$(this).val();						
		}
		else
		{
			if($(this).val()!='on')
			{
				va=va+"$$"+$(this).val();
			}				
		}			
	});			
						
	upSubObj['agape_profile_opts']=va;
	

	
	upSubObj['agape_profile_memberID']=window.userObj['agape_profile_memberID'];
	var rand = getRandomizer();
	var JsonObj=jsonBuildr(upSubObj);
	
	
	//alert(document.getElementById('agape_profile_opts_partner_id').innerHTML)
	//document.write(JsonObj);
	$.get("AjaxPage1.php",{job:'updatePro',obj:JsonObj,random:rand},function(data){recsUpdted(data)});
}



function recsUpdted(obj)
{
	
	
	Object1=$.trim(obj)
	Object2=Object1.split('**');
	
	if(Object2[0]=='true')
	{
		
		window.userObj=$.parseJSON(Object2[1]);
		setStorage('user',Object2[1]);
		alert("Record updated");
		populateForm();
		popOfProf();	
	}
	else
	{
		alert(55)
	
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

function logBoard()
{				
	
	document.getElementById('dashboardWrap').innerHTML="<div  style='float:right;margin-top:50px;font-size:12px;'><div style='margin-right:71px;'>Login&nbsp;<input type='textbox' id='username' /></div><div style='margin-right:43px;'>Password&nbsp;<input type='textbox' id='password' /><input type='button' value='login' onclick=login() /></div></div>";
	
}


function logsubmit()
{
	var uname,password
	uname=document.getElementById('username').value
	password=document.getElementById('password').value
	//$.get("AjaxPage1.php", job:
}





var lastMenu="mainDiv";
var editMenu="editPro";
var editViewMenu="Edit"
//editPro;
function changeMenu(fillObj)
{				
	switch(fillObj)
	{
		case 'buildPro':
		
			var ld="#"+lastMenu;
			if(lastMenu!='mainDiv')
			{
				$(ld).fadeOut('fast');
				setTimeout($('#mainDiv').fadeIn('slow'),200);
			}		
			lastMenu="mainDiv";		
			clearDashtabs('buildPro')
		break;
		
		case 'accountPro':	
			
			var ld="#"+lastMenu;
			if(lastMenu!='accountPro')
			{
				$(ld).fadeOut('fast');
				setTimeout($('#accountDiv').fadeIn('slow'),200);
			}		
			lastMenu="accountDiv";
			clearDashtabs('accountPro')
		break;
		
		case 'messPro':	
			var ld="#"+lastMenu;
			if(lastMenu!='messPro')
			{
				$(ld).fadeOut('fast');
				setTimeout($('#auxDiv').fadeIn('slow'),200);
			}		
			lastMenu="auxDiv";
			clearDashtabs('messPro')
		break;


		case 'searchPro':
			var ld="#"+lastMenu;
			if(lastMenu!='searchPro')
			{
				$(ld).fadeOut('fast');
				setTimeout($('#searchDiv').fadeIn('slow'),200);
			}		
			lastMenu="searchDiv";
			clearDashtabs('searchPro')
		break;
		
		case 'editViewPro':
			var ld="#"+editMenu;
		
				$(ld).fadeOut('fast');
				
				if(editMenu=="editPro")
				{
					editMenu="proView"
				}
				else
				{
					editMenu="editPro"
				}
				ld="#"+editMenu;
				
				document.getElementById('editButton').innerHTML=editViewMenu;
				if(editViewMenu=='Edit')
				{
					editViewMenu='View'
				}
				else
				{
					editViewMenu='Edit'
				}
				
				setTimeout($(ld).fadeIn('slow'),200);			

		break;

	}
}

function clearDashtabs(obj)
{
	for(f=0;f<dasDicObj.length;f++)
	{
		$("#"+dasDicObj[f]).css('backgroundColor','#ffffff');
		$("#"+dasDicObj[f]).mouseout(function(){ fixback(this,'#ffffff')});
		$("#"+dasDicObj[f]).mouseover(function(){ fixback(this,'lime')}); 
	}
	//$("#"+obj).css('backgroundColor','lime');
	$("#"+obj).css('backgroundColor','lime');
	$("#"+obj).mouseout(function(){ fixback(this,'lime')});
}

function bgImgChger(obj,direction,aux)
{
	switch(direction)
	{
		case 'over':
			obj.src="images/"+obj.id+"_over.gif";
		break;
	
		case 'out':
			obj.src="images/"+obj.id+"_out.gif"
		break;
	
	
	
	}

}


function popProfile(d,obj)
{

	var Obj="";
	switch(obj)
	{
		case 'f25':
			Obj=f25Obj;
		break;
		
		case 'sObjct':
			Obj=contactObj;
		break;
		
	
	}
	
	var tImg=Obj[d]['agape_profile_default_img'];
	tImg1=$.parseJSON(tImg);
	document.getElementById('agape_profile_username_se').innerHTML=Obj[d]['agape_profile_username']
	
	document.getElementById('agape_profile_default_img_se').src=tImg1.defaultPic;
	document.getElementById('agape_profile_state_se').innerHTML=Obj[d]['agape_profile_state']
	document.getElementById('agape_profile_city_se').innerHTML=Obj[d]['agape_profile_city']
	document.getElementById('agape_profile_intentions_se').innerHTML=Obj[d]['agape_profile_intentions'];
	document.getElementById('uID_se').value=Obj[d]['agape_profile_memberID'];
}




function checkLogin()
{
	
	if(typeof(Storage)!=="undefined")
	{						
		if(window.sessionStorage.getItem('user')!=="undefined" && window.sessionStorage.getItem('user')!=null)
		{
			//alert("herer"+window.sessionStorage.getItem('user'))
			var tremonty=window.sessionStorage.getItem('user');
			logged_in=tremonty.split("**");			
			window.log='true';
		}
		else
		{
			window.log="false";
			//alert("none")
		}		
	}
	else
	{
		window.log="false";
	}
	
	if(window.log=="true")
	{
		var uObj=window.sessionStorage.getItem('user');
		dChk=uObj.split("**")
		window.userObj=$.parseJSON(dChk[1]);
		
		dashBoard();
	}
	else
	{						
		logBoard();
	}
	
}

//populate profile view
	function popOfProf()
		{			
			
			var age="Not Answered";
			if(window.userObj['agape_profile_dateOfBirth']!='none')
			{
				age=getAgeJavaSct_php(window.userObj['agape_profile_dateOfBirth']);
				document.getElementById('agape_profile_dateOfBirth').value=window.userObj['agape_profile_dateOfBirth']
			}
			
			
			var opts=window.userObj['agape_profile_opts'].split("$$");			
			var optStr=""			
			for(opt=0;opt<opts.length;opt++)
			{
				optStr=optStr+"<input type='checkbox' checked onclick='this.checked = true;'/><span>"+opts[opt]+"</span> ";			
			}
			document.getElementById('loveOptions').innerHTML=optStr;
			
			var opts=window.userObj['agape_profile_opts_partner'].split("$$");			
			var optStr=""			
			for(opt=0;opt<opts.length;opt++)
			{
				optStr=optStr+"<input type='checkbox' checked onclick='this.checked = true;'/><span>"+opts[opt]+"</span> ";			
			}
			document.getElementById('parnterOptions').innerHTML=optStr;
			
			var proFields = new Array("agape_profile_username","agape_profile_city","agape_profile_state","agape_profile_intentions","agape_profile_religion","agape_profile_salary","agape_profile_education","agape_profile_description","agape_profile_firstDate","agape_profile_partner_description","agape_profile_children","agape_profile_alcohol","agape_profile_drugs","agape_profile_race","agape_profile_height","agape_profile_bodyType");			
			for(pop=0;pop<proFields.length;pop++)
			{
				if(window.userObj[proFields[pop]]!="")
				{
					document.getElementById(proFields[pop]+"_pr").innerHTML=window.userObj[proFields[pop]];
				}
				else
				{
					document.getElementById(proFields[pop]+"_pr").innerHTML="Not Answered";
				}
			}
			document.getElementById('agape_profile_dateOfBirth_pr').innerHTML=age;
			
			var tImg=window.userObj['agape_profile_default_img'];
			tImg1=$.parseJSON(tImg);
			
			document.getElementById('hostImg').src=tImg1.defaultPic
			var nation=window.userObj['agape_profile_nation'];
		
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
		
		function getRandomizer()
		{
			var rand=Math.floor((Math.random()*1000)+1); 
			return rand;
		
		}

