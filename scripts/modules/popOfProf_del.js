define([], function() { 

	return {
		populateForm_View:function()
		{		
			
			var usObj=sessionStorage.getItem('user');		
			userObj=$.parseJSON(usObj)
			
			var age="Not Answered";
			if(userObj['agape_profile_dateOfBirth']!='none')
			{
				age=getAgeJavaSct_php(userObj['agape_profile_dateOfBirth']);
				if(document.getElementById('agape_profile_dateOfBirth'))
				{
					
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
		
		}
	}
})