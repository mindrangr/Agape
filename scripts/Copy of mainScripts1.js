
var StringR=window.location.href+"";
var qStringArray=StringR.split("/");



$(window).load(function () {	
	currTime=xPireStorage('user');	
	useTime=window.localStorage.getItem('user_expire');
	if(useTime==null)
	{
		logout();
	}
	else
	{
		if(parseInt(currTime)>=parseInt(useTime))
		{
			$("#loginPanel").html("<div style='margin-left:470px;color:#ffffff;font-size:12px;cursor:pointer;' onclick=logout() >logout</div>");
		}
		else
		{
			logout();
		}
	}

	if(qStringArray[4]=='search_Investments.php')
	{
		checkVal();
	}
});


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
	}
	else
	{
		obj.style.color="#677b95";	
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
			alert('undefined')
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
		case 'searchResults':
			window.localStorage.setItem('searchResults', val);
		break;
		
		case 'searchItem':
			window.localStorage.setItem('searchItem', val);
		break;
		
		case 'user':
			var xpire=xPireStorage('user')
			window.localStorage.setItem('user', val);
			window.localStorage.setItem('user_expire', xpire);
		break;	
	}
}

function date_MySQL_Stan(a)
{
      datetime_split=a.split(' ');
      var months = new Array('Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec')
      var date_split=datetime_split[0].split('-');
      return months[date_split[1]-1]+" "+date_split[2]+", "+date_split[0];	
}


function login()
{
	var username=$('#username').val();
	var password=$('#password').val();
	if(username!="" && password!="")
	{
		$.get("AjaxPage1.php", {username:username, password:password, database:'member',job:'login'}, function(data){loginReturn(data)}); 
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
	if(data=='false')
	{
		alert('bad login or password')
	}
	else
	{
		userObj=$.parseJSON(data);		
		setStorage('user',data);
		$("#loginPanel").html("<div style='margin-left:470px;color:#ffffff;font-size:12px;cursor:pointer;' onclick=logout()>logout</div>");
	}

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
	window.localStorage.setItem('user_expire',null);
	window.localStorage.setItem('user',null);
	$("#loginPanel").html("username&nbsp;<input type='textbox' id='username' name='username' onkeydown=fixback(this,'#ffffff') />&nbsp;password&nbsp;<input type='password' id='password' name='password' onkeydown=fixback(this,'#ffffff') /><input type='button' value='login' id='login' onclick=login() />");
}
