<!DOCTYPE html>
<html>					
	<head>
		<script language="javascript" type="text/javascript" src="scripts\jquery-1.5.1.js"></script>
		<script language="javascript" type="text/javascript" src="scripts\mainScripts1.js"></script>
		<script language="javascript">
			
			function loded()
			{
				uID=window.opener.looperID;
			$.get("AjaxPage1.php",{job:'viewPro',par:uID},function(data){popViewProf(data)});
			}
			
			
			function popViewProf(val)
			{	
			
				val1=val.split("**");			
				viewObj=eval(val1[1]);				
				var age="Not answered";
				if(viewObj[0]['agape_profile_dateOfBirth']!='none' && viewObj[0]['agape_profile_dateOfBirth']!=undefined)
				{						
					age=getAgeJavaSct_php(viewObj[0]['agape_profile_dateOfBirth']);						
				}										
				
				
				var opts=viewObj[0]['agape_profile_opts'].split("$$");				
				var optStr=""
				val=viewObj[0]['agape_profile_opts'];				
				if(val.search(/$$/i)!=-1)
				{
					for(opt=0;opt<opts.length;opt++)
					{
						optStr=optStr+"<input type='checkbox' disabled='disabled' checked/><span>"+opts[opt]+" </span>";
						document.getElementById('loveOptions').innerHTML=optStr;						
					}
				}
				else
				{
							document.getElementById('loveOptions').innerHTML="<input type='checkbox' disabled='disabled' checked/><span>"+viewObj[0]['agape_profile_opts']+" </span>";	
				}
				
				
				
				
				var opts=viewObj[0]['agape_profile_opts_partner'].split("$$");				
				
				
				var optStr=""				
				val=viewObj[0]['agape_profile_opts_partner'];
				if(val.search(/$$/i)!=-1)
				{				
					for(opt=0;opt<opts.length;opt++)
					{
						optStr=optStr+"<input type='checkbox' disabled='disabled' checked/><span>"+opts[opt]+" </span>";
					}
					document.getElementById('parnterOptions').innerHTML=optStr;								
				}
				else
				{
					document.getElementById('parnterOptions').innerHTML="<input type='checkbox' disabled='disabled' checked/><span>"+viewObj[0]['agape_profile_opts_partner']+" </span>";				
				}
				
				
				
				
				
				var proFields = new Array("agape_profile_username","agape_profile_city","agape_profile_state","agape_profile_intentions","agape_profile_religion","agape_profile_salary","agape_profile_education","agape_profile_description","agape_profile_firstDate","agape_profile_partner_description","agape_profile_children","agape_profile_alcohol","agape_profile_drugs","agape_profile_race","agape_profile_height");			
				for(pop=0;pop<proFields.length;pop++)
				{
					document.getElementById(proFields[pop]+"_pr").innerHTML=viewObj[0][proFields[pop]]				
				}
				document.getElementById('agape_profile_dateOfBirth_pr').innerHTML=age
				var tImg=viewObj[0]['agape_profile_default_img'];
				tImg1=$.parseJSON(tImg);
				document.getElementById('hostImg').src=tImg1.defaultPic;
				var nation=viewObj[0]['agape_profile_nation'];
				document.getElementById('flagPost').src="images/Flags/"+nation+".jpg";
				
			}
		</script>
		<link rel="stylesheet" type="text/css" href="styles\IEStyle.css" />		
	</head>
	<body bgcolor="#000000" onload="loded()">
		<div  id="proView" style="float:left;backgound-color:#000000;width:708px;height:1200px;border:solid 1px #000000;background-color:#000000;padding:8px;">						
			<div style="width:700px;border-radius:9px;height:1180px;background-image:url('images/gradient4a.jpg');background-repeat:repeat-x;background-color:#2e2e2e;border:solid 2px lime;">
				<table cellpadding="7" >
					<tr>
						<td>
							<IMG src="" height="200" width="155"  style="border:solid 2px lime;" id="hostImg" />
							
						</td>
						<td valign="top">
							<br/>
							<table valign="top">
								<tr>
									<td class="label_pr" >username:</td>
									<td><div class="fields_pr" id="agape_profile_username_pr"></div></td>
									
									<td class="label_pr">intentions:</td>
									<td><div class="fields_pr" id="agape_profile_intentions_pr"></div></td>
									<td rowspan="2">
										<img src="" id="flagPost"/>
									</td>
								</tr>
								
								<tr>
									<td class="label_pr">city:</td>
									<td><div class="fields_pr" id="agape_profile_city_pr"></div></td>
									
									<td class="label_pr">religion:</td>
									<td><div class="fields_pr" id="agape_profile_religion_pr"></div></td>
								</tr>
								
								<tr>
													<td class="label_pr">state:</td>
													<td><div  class="fields_pr" id="agape_profile_state_pr"></div></td>
													
													<td class="label_pr">age:</td>
													<td><div class="fields_pr" id="agape_profile_dateOfBirth_pr"></div></td>
												</tr>
												
												<tr>															<td class="label_pr">salary:</td>
													<td><div class="fields_pr" style="width:150px;" id="agape_profile_salary_pr"></div></td>
													
													<td class="label_pr">education:</td>
													<td><div class="fields_pr" id="agape_profile_education_pr"></div></td>
												</tr>
												
												<tr>
													<td class="label_pr">children:</td>
													<td><div class="fields_pr" id="agape_profile_children_pr"></div></td>
													
													<td class="label_pr">alcohol use:</td>
													<td><div class="fields_pr" id="agape_profile_alcohol_pr"></div></td>
												</tr>
												
												<tr>
													<td class="label_pr">drug use:</td>
													<td><div class="fields_pr" id="agape_profile_drugs_pr"></div></td>
													
													<td class="label_pr">race:</td>
													<td><div class="fields_pr" id="agape_profile_race_pr"></div></td>
												</tr>
												
												<tr>
													<td class="label_pr">height:</td>
													<td><div class="fields_pr" id="agape_profile_height_pr"></div></td>
													
													<td class="label_pr">body type:</td>
													<td><div class="fields_pr" id="agape_profile_bodyType_pr"></div></td>
												</tr>
							</table>
						</td>
					</tr>

					<tr>
										<td colspan="2">
											<div  style="color:#ffffff;font-size:13px;width:330px;height:75px;float:left;">
											<div style="display:inline-block;vertical-align:top;margin-bottom:10px;">What can you expect from me?</div>
											
											<div id="loveOptions" style="color:lime;font-size:13px;width:310px;height:75px;"></div>
											
											</div>
											
											
											<div  style="color:#ffffff;font-size:13px;width:319px;height:75px;float:left;border:inset 1px #373906;background-color:#373636;padding:4px;padding-top:1px;">
												<div style="display:inline-block;vertical-align:top;margin-bottom:10px;">What are my expectations from a partner?</div>
												
												<div id="parnterOptions" style="color:#d505f9;font-size:13px;width:310px;height:75px;"></div>
											</div>
											
										
											<div style="clear:both;"></div>
										</td>

									</tr>
								</table>
				<span class="EdwardianScript1">How would I describe myself?</span>
				<div class="profile_descripBoxes" id="agape_profile_description_pr">
				</div>
				<BR/>
				<BR/>
								
								<span class="EdwardianScript1">What would I consider the ideal first date?</span>
								<div class="profile_descripBoxes" id="agape_profile_firstDate_pr">
								
								
								</div>
								
								
								<BR/>
								<BR/>
								
								<span class="EdwardianScript1">Here is how I would describe my ideal partner.</span>
								<div class="profile_descripBoxes" id="agape_profile_partner_description_pr">
								
								
								</div>
							</div>
						
						
						</div>
	</body>

</html>