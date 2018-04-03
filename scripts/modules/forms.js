define(['modules/cityfiller','modules/message_tool','modules/getAgeJavaSct_php'], function(city,message_tool,getAgeJavaSct_php1) { 
	//For populating profile and view forms; 
	return {
	
		populateForm_Profile:function()
		{
			
			for(var userKey in window.userObj)
			{		
				if(!document.getElementById(userKey))
				{	
					
				}
				else
				{						
					if(document.getElementById(userKey).tagName=='INPUT' && userKey!='agape_profile_opts' && userKey!='agape_profile_opts_partner')
					{
						document.getElementById(userKey).value=window.userObj[userKey]+" ";
					}
					
					if(document.getElementById(userKey).tagName=='SELECT' && userKey!='agape_profile_opts' && userKey!='agape_profile_opts_partner')
					{
					
					
						for(y=0;y<document.getElementById(userKey).options.length;y++)
						{
							
							
							if(document.getElementById(userKey).options[y].value==window.userObj[userKey])
							{
								
								$(document.getElementById(userKey).options[y]).attr("selected", "selected");
								break;
							}						
						}
						
						if(userKey=='agape_profile_state')
						{
							city.cityFiller(document.getElementById('agape_profile_state'),'agape_profile_city');
						}						
					}
					
						
					if(userKey=='agape_profile_opts' && window.userObj['agape_profile_opts']!='Not Answered')
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
					

					
					
					if(userKey=='agape_profile_opts_partner' && window.userObj['agape_profile_opts_partner']!='Not Answered')
					{	
						opt=window.userObj['agape_profile_opts_partner'];
						opts=opt.split("$$");	
						var optsLeng=opts.length;
						for(k1=0;k1<optsLeng;k1++)
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
		},
		
		populateForm_View:function()
		{		 
			
			var usObj=sessionStorage.getItem('user');

			userObj=$.parseJSON(usObj)
			
			var age="Not Answered";
			if(userObj['agape_profile_dateOfBirth']!='none')
			{
				
				age=getAgeJavaSct_php1.getAge(userObj['agape_profile_dateOfBirth']);
				var bday=getTime(userObj['agape_profile_dateOfBirth'],8)
				//
				if(document.getElementById('agape_profile_dateOfBirth'))
				{
					document.getElementById('agape_profile_dateOfBirth10').value=bday
				}
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
	
			$('#editButton').css("display","block");	
		
		},
		 
		populateForm_Messages:function(start)
		{		
			obj={};
			obj.job="getMessages";
			obj.memberID=global.userObj['agape_profile_memberID'];
			obj.start=start;
			global.paginate=start;
			var func=function(data,start){
				
				data=$.trim(data);
				var check=data.split("**");
			
				if(check[0]=='true'){
					
					message_tool.parseIt(data);
				
				}else{
					$("#messContainer").css({"width":"97%","text-align":"center","color":"#eee","font-size":"35px"}).html("There are 0 results for this query.")
				}
				
			};	
			
			ajaxCall(obj,func);	
		},
		
		
		populateForm_Messages_sent:function(start)
		{	
		
			obj={};
			obj.job="getMessages_sent";
			obj.memberID=global.userObj.agape_profile_memberID;
			obj.start=start;
			global.paginate=start;
			var func=function(data){
			
				
				
				message_tool.parseIt_sent(data)
			};	
			ajaxCall(obj,func)	
		}
		
		
	}			
})