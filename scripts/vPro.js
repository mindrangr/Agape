require.config({

paths: {
        'jquery': 'jquery-1.8.2'
		},
	 shim: {
			'jquery': {
				exports: '$'
			}
		}
});

require(['modules/getAgeJavaSct_php','jquery'],function(getAgeJavaSct_php,$){

	loded();
	
	
	 function loded()
		{
			
			var star=window.location.search.substring(1);
			var keel=star.split("=");
			uID=keel[1];
		
			$.get("AjaxPage1.php",{job:'viewPro',par:uID},function(data){console.log(545454);console.log(data);popViewProf(data)});
		}
			
			
		 function popViewProf(val)
		{	
				
			val1=val.split("**");		
		
			viewObj=$.parseJSON(val1[1]);		
			
			var age="Not answered";				
			if(viewObj.returnObj[0]['agape_profile_dateOfBirth']!='none' && viewObj.returnObj[0]['agape_profile_dateOfBirth']!=undefined)
			{						
				age=getAgeJavaSct_php.getAge(viewObj.returnObj[0]['agape_profile_dateOfBirth']);						
			}										
			
			
			var opts=viewObj.returnObj[0]['agape_profile_opts'].split("$$");				
			var optStr=""
			val=viewObj.returnObj[0]['agape_profile_opts'];				
			if(val.search(/$$/i)!=-1)
			{
				for(opt=0;opt<opts.length;opt++)
				{
					optStr=optStr+"<input type='checkbox' disabled='disabled' checked/><span>"+opts[opt]+" </span><br/>";
					document.getElementById('loveOptions').innerHTML=optStr;						
				}
			}
			else
			{
						document.getElementById('loveOptions').innerHTML="<input type='checkbox' disabled='disabled' checked/><span><br/>"+viewObj.returnObj[0]['agape_profile_opts']+" </span>";	
			}
				
				
			var opts=viewObj.returnObj[0]['agape_profile_opts_partner'].split("$$");		
			var optStr=""				
			val=viewObj.returnObj[0]['agape_profile_opts_partner'];
			if(val.search(/$$/i)!=-1)
			{				
				for(opt=0;opt<opts.length;opt++)
				{
					optStr=optStr+"<input type='checkbox' disabled='disabled' checked/><span>"+opts[opt]+" </span><br/>";
				}
				document.getElementById('parnterOptions').innerHTML=optStr;								
			}
			else
			{
				document.getElementById('parnterOptions').innerHTML="<input type='checkbox' disabled='disabled' checked/><span><br/>"+viewObj.returnObj[0]['agape_profile_opts_partner']+" </span>";				
			}
			
				
			var proFields = new Array("agape_profile_username","agape_profile_city","agape_profile_state","agape_profile_intentions","agape_profile_religion","agape_profile_salary","agape_profile_education","agape_profile_description","agape_profile_firstDate","agape_profile_partner_description","agape_profile_children","agape_profile_alcohol","agape_profile_drugs","agape_profile_race","agape_profile_height");			
			for(pop=0;pop<proFields.length;pop++)
			{
				document.getElementById(proFields[pop]+"_pr").innerHTML=viewObj.returnObj[0][proFields[pop]]				
			}
			document.getElementById('agape_profile_dateOfBirth_pr').innerHTML=age
			var tImg=viewObj.returnObj[0]['agape_profile_default_img'];
			tImg1=$.parseJSON(tImg);
			document.getElementById('hostImg').src=tImg1.defaultPic;
			var nation=viewObj.returnObj[0]['agape_profile_nation'];
			document.getElementById('flagPost').src="images/Flags/"+nation+".jpg";
			
		}
})