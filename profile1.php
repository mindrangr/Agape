<?php
session_start(); 
$logged_in='false';

if(isset($_SESSION['member']))
{
	
	$logged_in=$_SESSION['member']['logged_in'];
}
else
{
	$logged_in="false";
}
//$logged_in="false";
 ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/transitional.dtd">
 <html>
	<head>
		<title>Profile</title>
			<script language="javascript" type="text/javascript" src="scripts\jquery-1.5.1.js"></script>
			<script language="javascript" type="text/javascript" src="scripts\js\jquery-ui-1.8.22.custom.min.js"></script>
			<script language="javascript" type="text/javascript" src="scripts\mainScripts1.js"></script>
			<script language="javascript" type="text/javascript">
				var dasDicObj = new Array('buildPro','accountPro','messPro','searchPro');
				var colSubObj = {};
				var upSubObj = {};
				f25Obj="";
				var profile_col = new Array('agape_profile_memberID','agape_profile_firstname','agape_profile_lastname','agape_profile_gender','agape_profile_dateOfBirth','agape_profile_bodyType','agape_profile_height','agape_profile_city','agape_profile_state','agape_profile_email','agape_profile_intentions','agape_profile_education','agape_profile_children','agape_profile_description','agape_profile_partner_description','agape_profile_firstDate','agape_profile_salary','agape_profile_username','agape_profile_password','agape_profile_drugs','agape_profile_alcohol','agape_partner_age_range','agape_profile_religion','agape_partner_drugs','agape_partner_religion','agape_partner_education','agape_partner_alcohol','agape_partner_children','agape_partner_salary');
				
				var profile_lab = new Array('none','Firstname','Lastname','Gender','Date of Birth','Body Type','Height','City','State','Email','Intentions','Highest education completed','Do you have children','Briefly talk about yourself(likes, dislikes, ideas)','Describe your ideal partner','Describe your ideal first date','Your annual salary','Username','Password','How often do you use drugs?','How often do you drink alcohol','What is the ideal age range for your partner?','Religion','What amount of drug use is ok for your ideal partner?','What is the religion of your ideal partner?','What is your ideal partners education level?','What amount of alcohol consumption is good for your ideal partner?','What is the body type of your ideal partner?','What is the ideal salary range for your partner?');
				window.submitForm1="true";
				
				
			
				
				function profileFormValidator()
				{					
					for(i=0;i<profile_col.length;i++)
					{
						
						if(profile_lab[i]!='none')
						{
							if(profile_col[i]=='agape_profile_firstname' || profile_col[i]=='agape_profile_lastname' || profile_col[i]=='agape_profile_gender' || profile_col[i]=='agape_profile_email' || profile_col[i]=='agape_profile_username' || profile_col[i]=='agape_profile_password' || profile_col[i]=='agape_profile_city')
							{
								var rowChek=$("#"+profile_col[i]).val()
								if(rowChek=='')
								{
									$("#"+profile_col[i]).css('backgroundColor','#696969');
									window.submitForm1="false";
								}							
							}
							colSubObj[profile_col[i]]=$.trim($("#"+profile_col[i]).val());						
						}
					}
			
					if(window.submitForm1=="true")
					{
						
						
						var va="none";
						
						$(':checkbox:checked').each(function(i){
						
							if(va=="none")
							{
								va=$(this).val();						
							}
							else
							{
								va=va+"$$"+$(this).val();						
							}			
						});
												
						
						colSubObj['agape_profile_opts']=va;
						
						var JsonObj=jsonBuildr(colSubObj);
						alert(JsonObj)
						
						$.get("AjaxPage1.php", {job:'createAccount', obj:JsonObj}, function(data){accountCreated(data)});						
					}				
				}
				
				
				function changeBack(obj)
				{
					window.submitForm1="true";
					$(obj).css('backgroundColor','#ffffff');					
				}
				
				
				function checkLogin()
				{
					window.log="<?php echo $logged_in; ?>";
					
					if(log=="true")
					{
						
						var uObj=window.localStorage.getItem('user');
						dChk=uObj.split("**")
						alert(uObj)
						window.userObj=$.parseJSON(dChk[1]);
						
						dashBoard();
						loginD();
						getFirstsearch();
					}
					
					if(log=="false")
					{
						logBoard();
					}
				}
				
				function memUsernchk(obj)
				{	
					switch(obj.id)
					{
						case 'agape_profile_username':
							$.get("AjaxPage1.php", {job:'usernameChk', username:obj.value}, function(data){cheAjxFields(data,obj.id)});
						break;
						
						case 'agape_profile_email':
							$.get("AjaxPage1.php", {job:'emailChk', emailAddress:obj.value}, function(data){cheAjxFields(data,obj.id)});
						break;			
					}
				}
				
				function cheAjxFields(data,ids)
				{
					data=$.trim(data)
					
					if(data=='true')
					{
						window.submitForm1="false";	
						$("#"+ids).css('backgroundColor','#696969');						
					}
				}
				
				
				function accountCreated(obj)
				{
					window.submitForm1="true";
					
					window.localStorage.setItem('user',obj);
					var uObj=obj;
					dChk=uObj.split("**")
					window.userObj=$.parseJSON(dChk[1]);					
					dashBoard();
					loginD();
				}
				
				function calendar22()
				{
				
					$('#datepicker').datepicker({dateFormat: 'yy-mm-dd',changeYear: true,yearRange: "1930:1995",onSelect: function(dateText, inst) { $("#agape_profile_dateOfBirth_view").val(dateText);dategrinder(dateText);},monthNames: ["January","February","March","April","May","June","July","August","September","October","November","December"]}); 

				
				}
				
				function dategrinder(dText)
				{
				
					var monthNames = $('#datepicker').datepicker( "option", "monthNames" );
					var chklos=dText.split('-')
					//alert(monthNames[parseInt(chklos[1])])
					alert(chklos[1].valueOf()+" ppp")
				}
				
				
				
				var slider="";
				var intStatus="still";
				function slideGuys(row,direction)
				{
					if(intStatus!="motion")
					{
						slider=setInterval(function(){sDiv(row,direction)},20);
					}
					intStatus="motion"					
				}
				
				
				var stick=0;
				var calla=0;
				var wholenumb=0;
				function sDiv(row,direction)
				{	
					if(calla==80)
					{					
						clInt=clearInterval(slider)
						intStatus="still"
						//alert(wholenumb)
						calla=0;
					}
					else
					{
						if(direction=='right')
						{
							if(stick<=0 && stick>=-330)
							{
								stick=stick-2;
								wholenumb=wholenumb-2;
							}							
							
							if(stick>=0)
							{
								clInt=clearInterval(slider)
								intStatus="still"
								calla=0;
								stick=0;							
							}
						}
						else
						{		
							if(stick<0)
							{
								stick=stick+2;
							}
			
							wholenumb=wholenumb+2;							
						}					
						document.getElementById(row).style.left=stick+"px";
						calla=calla+1											
					}					
					
				}
				

				
				
				
				
				
				

			</script>
			<link rel="stylesheet" type="text/css" href="styles\IEStyle.css" />
			<link rel="stylesheet" type="text/css" href="scripts\css\ui-lightness\jquery-ui-1.8.22.custom.css" />
			<style type="text/css" >


			
			</style>
		
	</head>

<body bgcolor="black" style="margin:auto;width:900px;text-align:center;font-family:arial;" onload="checkLogin()">
	<form name="form1" >
		<div class="profileStyle1pro_test" style="background-color:#ffffff;" >
			<div style="height:220px;width:900px;float:right;" id="dashboardWrap">				
			</div>
			<div style="width:800px;height:1700px;float:left;text-align:left;padding-left:100px;background-color:#ffffff;">
				<div id="dashboardDiv">				
					<div class="divDash1" id="buildPro" >Build a Profile</div>					
					<div class="divDash_inv" onmouseover="fixback(this,'#34ff0d')" onmouseout="fixback(this,'#ffffff')" id="messPro" onclick="changeMenu('messPro')">Messages</div>
					<div class="divDash_inv" onmouseover="fixback(this,'#34ff0d')" onmouseout="fixback(this,'#ffffff')" id="accountPro" onclick="changeMenu('accountPro')" >Account</div>
					<div class="divDash_inv" onmouseover="fixback(this,'#34ff0d')" onmouseout="fixback(this,'#ffffff')" id="searchPro" onclick="changeMenu('searchPro')" >Search</div>
					<div style="clear:both"></div>
				</div>

				<br/>
				<div >
					<div style="border:solid 2px #696969;background-color:green;width:730px;height:94px;" ><img src="advertiseImages\flashad.gif" /></div >
				</div>
				<br/>
				<div style="padding-left:40px;float:left;width:510px;">
					<div id="auxDiv" class="divDash_inv1" >
						<div style="width:500px;height:500px;overflow:auto;overflow-x:hidden;">
							<div style="border:solid 1px #000000;padding:6px;background-color:#e5d0be;">
								<div style="vertical-align:top;float:left;"><img src="profileImages\ash.gif" border="1" /> </div>							
								<div style="font-family:arial;font-size:13px;font-weight:bold;float:left;">
									<div style="font-family:arial;font-size:13px;font-weight:bold;padding:3px;;width:140px;float:left;">Ash</div>
									<div style="float:right;margin-left:10px;text-align:right;margin-right:8px;">June 13, 2013  5:21am</div>
									<div style="clear:both;"></div>
									<div style="font-family:arial;font-size:13px;padding:3px;font-weight:normal;">Hey sexy, how are you? I'm Ash</div>
									<div style="font-family:arial;font-size:13px;font-weight:bold;padding:3px;">
										<div style="float:left;"><u>Message</u></div>
										<div style="float:left;margin-left:15px;"><u>Visit Ash's profile</u></div>
										<div style="clear:both;"></div>
									</div>
								</div>	
								<div style="clear:both;"></div>
							</div>
							
							<div style="border:solid 1px #000000;padding:6px;background-color:#e4ae80;">
								<div style="vertical-align:top;float:left;"><img src="profileImages\male6_b.jpg" border="1" height="80"/> </div>
								
								<div style="font-family:arial;font-size:13px;font-weight:bold;float:left">
									<div style="font-family:arial;font-size:13px;font-weight:bold;padding:3px;;width:140px;float:left;">Barry</div>
									<div style="float:right;margin-left:10px;text-align:right;margin-right:8px;">June 13, 2013  6:11am</div>
									<div style="clear:both;"></div>
									<div style="font-family:arial;font-size:13px;padding:3px;font-weight:normal;">I love your smile! Bet you hear that all the time! LOL! I would like to see it in person.</div>
									<div style="font-family:arial;font-size:13px;font-weight:bold;padding:3px;">
										<div style="float:left;"><u>Message</u></div>
										<div style="float:left;margin-left:15px;"><u>Visit Barry's profile</u></div>
										<div style="clear:both;"></div>
									</div>
									
								</div>	
								<div style="clear:both;"></div>
							</div>
							
							
							
							<div style="border:solid 1px #000000;padding:6px;background-color:#e5d0be;">
								<div style="vertical-align:top;float:left;"><img src="profileImages\steve127.gif" border="1" /> </div>
								
								<div style="font-family:arial;font-size:13px;font-weight:bold;float:left;">
									<div style="font-family:arial;font-size:13px;font-weight:bold;padding:3px;">		Steve
									</div>
									<div style="font-family:arial;font-size:13px;padding:3px;font-weight:normal;">
										I loved your profile. Lets get together.
									</div>
									<div style="font-family:arial;font-size:13px;font-weight:bold;padding:3px;">
										<div style="float:left;"><u>Message</u></div>
										<div style="float:left;margin-left:15px;"><u>Visit Steve's profile</u></div>
										<div style="clear:both;"></div>
									</div>
								</div>	
								<div style="clear:both;"></div>
							</div>
							
							<div style="border:solid 1px #000000;padding:6px;background-color:#e4ae80;">
								<div style="vertical-align:top;float:left;"><img src="profileImages\Evan34.gif" border="1" /> </div>
								
								<div style="font-family:arial;font-size:13px;font-weight:bold;float:left;">
									<div style="font-family:arial;font-size:13px;font-weight:bold;padding:3px;">		Evan
									</div>
									<div style="font-family:arial;font-size:13px;padding:3px;font-weight:normal;">
										You like daquiris? I know a great spot in S. Atlanta. Hit me up.
									</div>
									<div style="font-family:arial;font-size:13px;font-weight:bold;padding:3px;">
										<div style="float:left;"><u>Message</u></div>
										<div style="float:left;margin-left:15px;"><u>Visit Evan's profile</u></div>
										<div style="clear:both;"></div>
									</div>
								</div>	
								<div style="clear:both;"></div>
							</div>
							
							
						</div>				
					</div>
					<div id="mainDiv" style="height:1400px;position:relative;z-index:1">					
						<div >
							<div class="profileDivStyles1">
								<div class="profileLabelStyles1" >
									<b>Firstname</b>
									<span style="font-size:14px;color:red;font-weight:bold;">*</span>
								</div>
								<div class="profileTboxStyles1"><input id="agape_profile_firstname" type="textbox"  class="profileTBox" onkeydown="changeBack(this)" />
								</div>
								<div style="clear:both"></div>
							</div>
							<div class="profileDivStyles1">
								<div class="profileLabelStyles1"><b>Lastname</b>
								<span style="font-size:14px;color:red;font-weight:bold;">*</span></div>
								<div class="profileTboxStyles1"><input id="agape_profile_lastname" onkeydown="changeBack(this)" type="textbox"  class="profileTBox" /></div>
								<div style="clear:both"></div>
							</div>
						
						
							<div class="profileDivStyles1">
								<div class="profileLabelStyles1"><b>Gender</b><span style="font-size:14px;color:red;font-weight:bold;">*</span></div>
								<div style="float:left;">
									<select  id="agape_profile_gender" class="profileTBox">
										<option value="Male">Male</option>
										<option value="Female">Female</option>
									</select>
								</div>
								<div style="clear:both"></div>
							</div>
						
							<div class="profileDivStyles1">
								<div class="profileLabelStyles1"><b>Username</b><span style="font-size:14px;color:red;font-weight:bold;">*</span></div>
								<div class="profileTboxStyles1"><input id="agape_profile_username" onkeydown="changeBack(this)" type="textbox"  class="profileTBox" onblur="memUsernchk(this)" /></div>
								<div style="clear:both"></div>
							</div>
						
							<div class="profileDivStyles1">
								<div class="profileLabelStyles1"><b>Password</b><span style="font-size:14px;color:red;font-weight:bold;">*</span></div>
								<div class="profileTboxStyles1"><input id="agape_profile_password" onkeydown="changeBack(this)" type="textbox"  class="profileTBox" /></div>
								<div style="clear:both"></div>
							</div>
						
						
							<div class="profileDivStyles1" style="position:relative;z-index:1">
								<div class="profileLabelStyles1"><b>Date of Birth</b></div>
								<div class="profileTboxStyles1">
									<input id="agape_profile_dateOfBirth_view" type="textbox"  class="profileTBox" onclick="calendar22()" readonly="readonly" />
									
									<input id="agape_profile_dateOfBirth" type="hidden"  />
								</div>
								<div id="datepicker" class="datepicker" style="float:left;position:absolute;z-index:4;"  ></div>								
								<div style="clear:both"></div>	
							</div>
							
							
							<div class="profileDivStyles1">
								<div class="profileLabelStyles1"><b>Race</b></div>
								<div style="float:left;">
									<select id="agape_profile_race" class="profileTBox">
										<option value="Not answered">Not answered</option>
										<option value="White" >White</option>
										<option value="Black">Black</option>
										<option value="Asian" selected>Asian</option>
										<option value="Latino">Latino</option>
									</select>
								</div>
								<div style="clear:both"></div>
							</div>
							
							
							<div class="profileDivStyles1">
								<div class="profileLabelStyles1"><b>Body type</b></div>
								<div style="float:left;">
									<select id="agape_profile_bodyType" class="profileTBox">
										<option value="Not answered">Not answered</option>
										<option value="Slim" >Slim</option>
										<option value="Medium">Medium</option>
										<option value="Healthy" selected>Healthy</option>
										<option value="Muscalur">Muscular</option>
										<option value="Big">Big</option>
										<option value="Overweight">Overweight</option>
									</select>
								</div>
								<div style="clear:both"></div>
							</div>
							
							
							
							
							
							
							<div class="profileDivStyles1">
								<div class="profileLabelStyles1"><b>Height</b></div>
								<div class="profileTboxStyles1"><input id="agape_profile_height" type="textbox"  class="profileTBox" /></div>
								<div style="clear:both"></div>
							</div>
							<div class="profileDivStyles1">
								<div class="profileLabelStyles1"><b>City</b><span style="font-size:14px;color:red;font-weight:bold;">*</span></div>
								<div class="profileTboxStyles1"><input id="agape_profile_city" onkeydown="changeBack(this)" type="textbox"  class="profileTBox" /></div>
								<div style="clear:both"></div>
							</div>
							<div class="profileDivStyles1">
								<div class="profileLabelStyles1"><b>State</b></div>
								<div style="float:left;">
									<select id="agape_profile_state" class="profileTBox">
										<option value="Alaska">Alaska</option>
										<option value="Alabama">Alabama</option>
										<option value="Arkansas">Arkansas</option>
										<option value="Arizona">Arizona</option>
										<option value="California">California</option>
										<option value="Colorado">Colorado</option>
										<option value="Connecticut">Connecticut</option>
										<option value="Delaware">Delaware</option>
										<option value="Florida">Florida</option>
										<option value="Georgia">Georgia</option>
										<option value="Hawaii">Hawaii</option>
										<option value="Idaho">Idaho</option>
										<option value="Iowa">Iowa</option>
										<option value="Illinois">Illinois</option>
										<option value="Indiana">Indiana</option>
										<option value="Kansas">Kansas</option>
										<option value="Kentucky">Kentucky</option>
										<option value="Louisiana">Louisiana</option>
										<option value="Maine">Maine</option>
										<option value="Maryland">Maryland</option>
										<option value="Massachusetts">Massachusetts</option>
										<option value="Michigan">Michigan</option>
										<option value="Minnesota">Minnesota</option>
										<option value="Mississippi">Mississippi</option>
										<option value="Missouri">Missouri</option>
										<option value="Montana">Montana</option>
										<option value="Nebraska">Nebraska</option>
										<option value="Nevada">Nevada</option>
										<option value="New Hampshire">New Hampshire</option>
										<option value="New Jersey">New Jersey</option>
										<option value="New Mexico">New Mexico</option>
										<option value="New York">New York</option>
										<option value="North Carolina">North Carolina</option>
										<option value="North Dakota">North Dakota</option>
										<option value="Ohio">Ohio</option>
										<option value="Oklahoma">Oklahoma</option>
										<option value="Oregon">Oregon</option>
										<option value="Pennsylvania">Pennsylvania</option>
										<option value="Rhode Island">Rhode Island</option>
										<option value="South Carolina">South Carolina</option>
										<option value="South Dakota">South Dakota</option>
										<option value="Tennessee">Tennessee</option>
										<option value="Texas">Texas</option>
										<option value="Utah">Utah</option>
										<option value="Vermont">Vermont</option>
										<option value="Virginia">Virginia</option>
										<option value="Washington">Washington</option>
										<option value="Wisconsin">Wisconsin</option>
										<option value="West Virginia">West Virginia</option>
										<option value="Wyoming">Wyoming</option>
									</select>
								</div>
								<div style="clear:both"></div>
							</div>
							<div class="profileDivStyles1">
								<div class="profileLabelStyles1"><b>Email address</b><span style="font-size:14px;color:red;font-weight:bold;">*</span></div>
								<div class="profileTboxStyles1"><input id="agape_profile_email" onkeydown="changeBack(this)" type="textbox"  class="profileTBox" onblur="memUsernchk(this)"/></div>
								<div style="clear:both"></div>
							</div>
							
							<div class="profileDivStyles1">
								<div class="profileLabelStyles1"><b>Your annual salary</b></div>
								<div>
									<div style="float:left;">
										<select  id="agape_profile_salary" class="profileTBox">
											<option value="Not answered">Not answered</option>
											<option value="$0 - $32,000">$0 - $32,000</option>
											<option value="$32,000 - $70,000">$32,000 - $70,000</option>
											<option value="$70,000 - $105,000">$70,000 - $105,000</option>
											<option value="$105,000 - $135,000">$105,000 - $135,000</option>
											 <option value="$136,000">$136,000+</option>										
										</select>
									</div>
								</div>
								<div style="clear:both"></div>
							</div>
							
							<div class="profileDivStyles1">
								<div class="profileLabelStyles1"><b>Religion</b></div>
								<div style="float:left;">
									<div style="float:left;">
										<select  id="agape_profile_religion" class="profileTBox">
											<option value="Not answered">Not answered</option>
											<option value="Christianity">Christianity</option>
											<option value="Islam">Islam</option>
											<option value="Judaica">Judaica</option>
											<option value="Hindu">Hindu</option>
											<option value="Other">Other</option>
											<option value="Not Important">Not Important</option>
										</select>
									</div>
								</div>
								<div style="clear:both"></div>
							</div>
						
							<div class="profileDivStyles1">
								<div class="profileLabelStyles1"><b>Intentions</b></div>
								<div style="float:left;">
									<div style="float:left;">
										<select  id="agape_profile_intentions" class="profileTBox">
											<option value="Not answered">Not answered</option>
											<option value="Friendship">Friendship</option>
											<option value="Business contacts">Business contacts</option>
											<option value="Relationship">Relationship</option>
											<option value="Marriage">Marriage</option>
											<option value="Other">Other</option>
										</select>
									</div>
								</div>
								<div style="clear:both"></div>
							</div>
							
							<div class="profileDivStyles1">
								<div class="profileLabelStyles1"><b>Do you have children</b></div>
								<div>
									<div style="float:left;">
										<select  id="agape_profile_children" class="profileTBox">
											<option value="Not answered">Not answered</option>
											<option value="No">No</option>
											<option value="Yes">Yes</option>				
										</select>
									</div>
								</div>
								<div style="clear:both"></div>
							</div>
						
						
						
							<div class="profileDivStyles1">
								<div class="profileLabelStyles1"><b>Highest education completed</b></div>
								<div>
									<div style="float:left;">
										<select  id="agape_profile_education" class="profileTBox">
											<option value="Not answered">Not answered</option>
											<option value="High school">High school</option>
											<option value="Some college">Some college</option>
											<option value="AA degree">AA degree</option>
											<option value="BA/BS">BA/BS</option>
											<option value="Masters" >Masters</option>
											<option value="Doctorate">Doctorate</option>
										</select>
									</div>
								</div>
								<div style="clear:both"></div>
							</div>
							
							<div class="profileDivStyles1">
								<div class="profileLabelStyles1"><b>Check the options to your right that a romantic partner can expect from you:</b></div>
								<div>
									<div style="float:left;">
									<table>
										<tr>
											<td>Love:</td> 
											<td><input  name="agape_profile_opts" type="checkbox" value="Love" /></td>
										</tr>
										<tr>
											<td>Emotional Support:</td> 
											<td><input  name="agape_profile_opts" type="checkbox" value="Emotional Support" /></td>
										</tr>
										<tr>
											<td>Financial Support:</td> 
											<td><input  name="agape_profile_opts" type="checkbox" value="Financial Support"/></td>
										</tr>
										<tr>
											<td>Sex:</td> 
											<td><input  name="agape_profile_opts"  type="checkbox" value="Sex"/></td>
										</tr>
										<tr>
											<td>Respect:</td> 
											<td><input  name="agape_profile_opts"  type="checkbox" value="Respect"/></td>
										</tr>
										<tr>
											<td>Loyalty:</td> 
											<td><input  name="agape_profile_opts"  type="checkbox" value="Loyalty" /></td>
										</tr>
										<tr>
											<td>Honesty:</td> 
											<td><input  name="agape_profile_opts" type="checkbox" value="Honesty" /></td>
										</tr>
										<tr>
											<td>Commitment:</td> 
											<td><input  name="agape_profile_opts"  type="checkbox" value="Commitment"/></td>
										</tr>
										<tr>
											<td>Friendship:</td> 
											<td><input  name="agape_profile_opts"  type="checkbox" value="Friendship"/></td>
										</tr>
									</table>		
									</div>
								</div>
								<div style="clear:both"></div>
							</div>
							
							<div class="profileDivStyles1">
								<div class="profileLabelStyles1"><b>How often do you drink alcohol?</b></div>
								<div>
									<div style="float:left;">
										<select  id="agape_profile_alcohol" class="profileTBox">
											<option value="Not answered">Not answered</option>
											<option value="Never">Never</option>
											<option value="Occasionally">Occasionally</option>
											<option value="Socially">Socially</option>	
											<option value="Often">Often</option>											
										</select>
									</div>
								</div>
								<div style="clear:both"></div>
							</div>
							
							
							<div class="profileDivStyles1">
								<div class="profileLabelStyles1"><b>Do you use drugs?</b></div>
								<div>
									<div style="float:left;">
										<select  id="agape_profile_drugs" class="profileTBox">
											<option value="Not answered">Not answered</option>
											<option value="Never">Never</option>
											<option value="Occasionally">Occasionally</option>
											<option value="Socially">Socially</option>	
											<option value="Often">Often</option>									
										</select>
									</div>
								</div>
								<div style="clear:both"></div>
							</div>
							
							
				
							
					
					
							<div class="profileDivStyles1">
								<div class="profileLabelStyles1"><b>Briefly talk about yourself</b>
									<font size="2">(<i>likes, dislikes, ideas</i>)</font>
									</div>
								<div>
									<div style="float:left;">
										<textarea id="agape_profile_description" rows="6" cols="22">
										</textarea>
									</div>
								</div>
								<div style="clear:both"></div>
							</div>
							
					
							<div class="profileDivStyles1">
								<div class="profileLabelStyles1"><b>Describe your ideal romantic partner:</b><font size="2">(<i>This is not a laundry list of likes, dislikes, wants and no wants. This should be a description of where he/she should be in life and what they should understand and expect from you. A person intersted in you should know your expectations for their role in your life.</i>)</font> </div>
								<div>
									<div style="float:left;">
										<textarea id="agape_profile_partner_description" rows="6" cols="22">
										</textarea>
									</div>
								</div>
								<div style="clear:both"></div>
							</div>
							<br/>
							Things you want in a partner:
							<br/>
							<br/>
							

								<div class="profileDivStyles1">
									<div class="profileLabelStyles1"><b>What is the ideal age range for your partner?</b></div>
									<div style="float:left;">
										<select  id="agape_partner_age_range" class="profileTBox">
											<option value="Not answered">Not answered</option>
											<option value="18-25">18-25</option>
											<option value="26-32">26-32</option>
											<option value="33-38">33-38</option>
											<option value="39-45">39-45</option>
											<option value="45-51" >45-51</option>
											<option value="52-58">52-58</option>
											<option value="59-65">59-65</option>
											<option value="66-71">66-71</option>
											<option value="Not Important">Not Important</option>
										</select>
									</div>
								</div>
								
								<div class="profileDivStyles1">
								<div class="profileLabelStyles1"><b>What is the race of your ideal partner?</b></div>
								<div style="float:left;">
									<select id="agape_partner_race" class="profileTBox">
										<option value="Not answered" selected>Not answered</option>
										<option value="White" >White</option>
										<option value="Black">Black</option>
										<option value="Asian" >Asian</option>
										<option value="Latino">Latino</option>
									</select>
								</div>
								<div style="clear:both"></div>
							</div>
								
								
									
									<div class="profileDivStyles1">
									<div class="profileLabelStyles1"><b>What is the ideal salary range for your partner?</b>
									</div>
										<div style="float:left;">
											
											<div style="float:left;">
												<select  id="agape_partner_salary" class="profileTBox">
													<option value="Not answered">Not answered</option>
													<option value="$0 - $32,000">$0 - $32,000</option>
													<option value="$32,000 - $70,000">$32,000 - $70,000</option>
													<option value="$70,000 - $105,000">$70,000 - $105,000</option>
													<option value="$105,000 - $135,000">$105,000 - $135,000</option>
													<option value="$136,000">$136,000+</option>
													<option value="Not Important">Not Important</option>										
												</select>
											</div>
									
										</div>
									</div>
								
									<div class="profileDivStyles1">
										<div class="profileLabelStyles1"><b>What is the religion of your ideal partner?</b></div>
										<div style="float:left;">
											<div style="float:left;">
												<select  id="agape_partner_religion" class="profileTBox">
													<option value="Not answered">Not answered</option>
													<option value="Christianity">Christianity</option>
													<option value="Islam">Islam</option>
													<option value="Judaica">Judaica</option>
													<option value="Hindu">Hindu</option>
													<option value="Other">Other</option>
													<option value="Not Important">Not Important</option>
												</select>
											</div>
										</div>
										<div style="clear:both"></div>
									</div>
									
									<div class="profileDivStyles1">
								<div class="profileLabelStyles1"><b>Is it ok for your partner to have children?</b></div>
								<div>
									<div style="float:left;">
										<select  id="agape_partner_children" class="profileTBox">
										<option>Not answered</option>
											<option value="Not answered">Not answered</option>
											<option value="No">No</option>
											<option value="Yes">Yes</option>
											<option value="Not Important">Not Important</option>									
										</select>
									</div>
								</div>
								<div style="clear:both"></div>
							</div>
									
								<div class="profileDivStyles1">
									<div class="profileLabelStyles1"><b>What is your ideal partners education level?</b></div>
									<div>
										<div style="float:left;">
											<select  id="agape_partner_education" class="profileTBox">
												<option value="Not answered">Not answered</option>
												<option value="High school">High school</option>
												<option value="Some college">Some college</option>
												<option value="AA degree">AA degree</option>
												<option value="BA/BS">BA/BS</option>
												<option value="Masters" >Masters</option>
												<option value="Doctorate">Doctorate</option>
												<option value="Not Important">Not Important</option>
											</select>
										</div>
									</div>
									<div style="clear:both"></div>
								</div>
								
								<div class="profileDivStyles1">
								<div class="profileLabelStyles1"><b>What amount of alcohol consumption is good for your ideal partner?</b></div>
								<div>
									<div style="float:left;">
										<select  id="agape_partner_alcohol" class="profileTBox">
											<option value="Not answered">Not answered</option>
											<option value="Never">Never</option>
											<option value="Occasionally">Occasionally</option>
											<option value="Socially">Socially</option>	
											<option value="Often">Often</option>											
										</select>
									</div>
								</div>
								<div style="clear:both"></div>
							</div>
								
								
								<div class="profileDivStyles1">
									<div class="profileLabelStyles1"><b>What amount of drug use is good for your ideal partner?</b></div>
									<div>
										<div style="float:left;">
											<select  id="agape_partner_drugs" class="profileTBox">
												<option value="Not answered">Not answered</option>
												<option value="Never">Never</option>
												<option value="Occasionally">Occasionally</option>
												<option value="Socially">Socially</option>	
												<option value="Often">Often</option>									
											</select>
										</div>
									</div>
									<div style="clear:both"></div>
								</div>	


								<div class="profileDivStyles1">
								<div class="profileLabelStyles1"><b>What is the body type of your ideal partner?</b></div>
								<div style="float:left;">
									<select id="agape_partner_bodyType" class="profileTBox">
										<option value="Not answered">Not answered</option>
										<option value="Slim" >Slim</option>
										<option value="Medium">Medium</option>
										<option value="Healthy" selected>Healthy</option>
										<option value="Muscalur">Muscular</option>
										<option value="Big">Big</option>
										<option value="Overweight">Overweight</option>
									</select>
								</div>
								<div style="clear:both"></div>
							</div>
								
							<div style="clear:both"></div>
						</div>
					
					
								<div class="profileDivStyles1">
									<div class="profileLabelStyles1"><b>Describe your ideal first date</b></div>
									<div>
										<div style="float:left;">
											<textarea id="agape_profile_firstDate" rows="6" cols="22">
											</textarea>
										</div>
									</div>
									<div style="clear:both"></div>
								</div>
							
					<input id="subButt" type="button" value="Submit"  style="background-color:black;border:solid 2px #34ff0d;color:#ffffff;font-weight:bold;" onclick="profileFormValidator()"/>
							<br/>
							<br/>
							
							</div>
							
		
					
					<style>
						.profileStyle110
						{
							font-weight:normal;
							font-size:12px;
						}
						
						.profileStyle110edit
						{
							font-weight:normal;
							font-size:10px;
							color:blue;
							cursor:pointer;
						}
						
						.placedAds
						{
							font-size:12px;
							border-bottom:dashed 1px #000000;
							padding:3px;
							float:left;
							width:402px;
							cursor:pointer;
						}
					</style>
					<div id="accountDiv" class="divDash_inv1">Account type:&nbsp;&nbsp;<span class="profileStyle110">Personal</span>&nbsp;<span class="profileStyle110edit"><u>edit:</u></span>
						<br/>
						Registered Cities:&nbsp;&nbsp;<span class="profileStyle110">Atlanta, Sandy Springs, Dunwoody</span>
						&nbsp;
						<span class="profileStyle110edit"><u>edit:</u></span>
						<br/>
						
						<div style="width:465px;height:100px;overflow:auto;border:outset 2px #696969;">
							<div class="placedAds" onmouseover="changeDivColor(this,'disabled')" onmouseout="changeDivColor(this,'out')">Garage sale Saturday!!
							</div>
							<div class="placedAds" style="float:right;width:50px;color:#d400ff;" >disabled
							</div>
							<div style="clear:both"></div>
							
							<div class="placedAds" style="background-color:#dedede;" onmouseover="changeDivColor(this,'disabled')" onmouseout="changeDivColor(this,'out')">Sofa bed and chais lounge for sale!
							</div>
							<div class="placedAds" style="float:right;width:50px;color:#d400ff;background-color:#dedede;" >disabled
							</div>
							<div style="clear:both"></div>
							
							<div class="placedAds" onmouseover="changeDivColor(this,'disabled')" onmouseout="changeDivColor(this,'out')">2001 Toyota for sale.
							</div>
							<div class="placedAds" style="float:right;width:50px;color:#d400ff;" >disabled
							</div>
							<div style="clear:both"></div>							
							
						</div>
						<div class="navStyles1" onmouseover="changeDivColor(this,'over')" onmouseout="changeDivColor(this,'out')" style="float:left;width:90px;border:outset 2px #696969;padding:4px;border-top:none;background-color:#dedede;">Ads placed</div>
						
						<div class="navStyles1" onmouseover="changeDivColor(this,'over')" onmouseout="changeDivColor(this,'out')" style="float:left;width:80px;padding:4px;border:outset 2px #696969;padding:4px;border-top:none;border-left:none;">create ad</div>
						
						<div class="navStyles1" onmouseover="changeDivColor(this,'over')" onmouseout="changeDivColor(this,'out')" style="float:left;border:outset 2px #696969;padding:4px;border-top:none;border-left:none;">remove ad</div>
						

						<div style="clear:both;"></div>
					</div>
					
					
					<!-- Search portion ----->
					
					<style type="text/css">
						.feedDivs1
						{
						
							float:left;
							width:80px;
							border-top:solid 1px #000000;
							border-bottom:solid 1px #000000;
							border-left:solid 1px #000000;
							height:84px;
							text-align:center;
							padding-top:3px;
							cursor:pointer;
						}
					
					</style>
					
					<div id="searchDiv" class="divDash_inv1">
						<div >						
							<div>
								<div style="float:left;padding-top:10px;cursor:pointer;" >
									<img src="images/lbutton_out.gif"  onclick="slideGuys('row1','right')" onmouseover="bgImgChger(this,'over','aux')" onmouseout="bgImgChger(this,'out','aux')" id="lbutton" />
								</div>	

								<div style="float:left;background-color:#000000;width:395px;overflow:auto;overflow-x:hidden;border-left:solid 2px #000000;border-right:solid 2px #000000;height:90px;display:block;position:relative;">

									<div style="position:relative;display:block;width:900px;" id="row1">
										
									</div>
								</div>
								
								
								
								<div style="float:left;padding-top:10px;cursor:pointer;" >
									<img src="images/rbutton_out.gif" onclick="slideGuys('row1','left')" onmouseover="bgImgChger(this,'over','aux')" onmouseout="bgImgChger(this,'out','aux')" id="rbutton" />
								</div>
								
								<div style="clear:both;"></div>								
															
							</div>

							<div style="padding:4px;border:solid 1px #000000;border-radius: 12px;background-color:gray;width:470px;background-image:url('images/scanBak.jpg');">
								<table valign="top">
									<tr>
										<td width="170">
											<img id="agape_profile_default_img_se"  width="150" height="160" src="" border="1" />
										</td>
										<td valign="top" width="320">
											<div style="padding:4px;height:120px">
											<table width="300" >
												<tr>  
													<td   style="font-size:12px;font-family:arial;"><span><b>Username:</b></span>
													</td>
													<td width="75" >
														<div style="font-size:12px;font-family:arial;color:#ffffff;width:75px;" id="agape_profile_username_se"></div>
													</td>
													<td  style="font-size:12px;font-family:arial;">	<span><b>Intentions:</b></span>
													</td>
													<td width="100">
														<div id="agape_profile_intentions_se" style="font-size:12px;font-family:arial;arial;color:#ffffff;width:100px;"></div>
													</td>
												</tr>
												
												<tr>										
													<td style="font-size:12px;font-family:arial;color:#000000;"><b>City:</b></td>
													<td width="75"><div id="agape_profile_city_se" style="font-size:12px;font-family:arial;color:#ffffff;width:75px;"></div></td>
													<td style="font-size:12px;font-family:arial;color:#000000;"><b>State:</b></td>
													<td width="100"><div style="font-size:12px;font-family:arial;color:#ffffff;width:100px;" id="agape_profile_state_se"></div></td>
												</tr>
												
												
												<tr>										
													<td colspan="2"><input type="button" value="send message" /></td>
													
													<td colspan="2"><input type="button" value="friend request" /></td>
												</tr>
												
												<tr>
													<td colspan="2"><input type="button" value="visit profile" /></td>
													
													<td colspan="2"><input type="button" value="block" /></td>
												</tr>
												
												
											</table>
											</div>
										</td>
									</tr>									
								</table>
							</div>
							
								<table>
								<tr>
									<td>State:</td>
									<td>
										<select id="search_profile_state" class="profileTBox">
										<option value="Select">Select one</option>
										<option value="Alaska">Alaska</option>
										<option value="Alabama">Alabama</option>
										<option value="Arkansas">Arkansas</option>
										<option value="Arizona">Arizona</option>
										<option value="California">California</option>
										<option value="Colorado">Colorado</option>
										<option value="Connecticut">Connecticut</option>
										<option value="Delaware">Delaware</option>
										<option value="Florida">Florida</option>
										<option value="Georgia">Georgia</option>
										<option value="Hawaii">Hawaii</option>
										<option value="Idaho">Idaho</option>
										<option value="Iowa">Iowa</option>
										<option value="Illinois">Illinois</option>
										<option value="Indiana">Indiana</option>
										<option value="Kansas">Kansas</option>
										<option value="Kentucky">Kentucky</option>
										<option value="Louisiana">Louisiana</option>
										<option value="Maine">Maine</option>
										<option value="Maryland">Maryland</option>
										<option value="Massachusetts">Massachusetts</option>
										<option value="Michigan">Michigan</option>
										<option value="Minnesota">Minnesota</option>
										<option value="Mississippi">Mississippi</option>
										<option value="Missouri">Missouri</option>
										<option value="Montana">Montana</option>
										<option value="Nebraska">Nebraska</option>
										<option value="Nevada">Nevada</option>
										<option value="New Hampshire">New Hampshire</option>
										<option value="New Jersey">New Jersey</option>
										<option value="New Mexico">New Mexico</option>
										<option value="New York">New York</option>
										<option value="North Carolina">North Carolina</option>
										<option value="North Dakota">North Dakota</option>
										<option value="Ohio">Ohio</option>
										<option value="Oklahoma">Oklahoma</option>
										<option value="Oregon">Oregon</option>
										<option value="Pennsylvania">Pennsylvania</option>
										<option value="Rhode Island">Rhode Island</option>
										<option value="South Carolina">South Carolina</option>
										<option value="South Dakota">South Dakota</option>
										<option value="Tennessee">Tennessee</option>
										<option value="Texas">Texas</option>
										<option value="Utah">Utah</option>
										<option value="Vermont">Vermont</option>
										<option value="Virginia">Virginia</option>
										<option value="Washington">Washington</option>
										<option value="Wisconsin">Wisconsin</option>
										<option value="West Virginia">West Virginia</option>
										<option value="Wyoming">Wyoming</option>
									</select>
								</td>
								</tr>
							</table>
							
							
							
							<br/>
							<br/>
							<input type="button" value="search" /><input type="button" value="Turn on open feed" />
							<br/>
							<br/>
							<br/>
						</div>
						
					</div>
					
					
				</div>
					<div  style="width:180px;height:300px;float:left;">
						<?php
						include("navigation.html");
						?>
					</div>
					
				</div>
	
				<div style="clear:both;"></div>
			</div>
		
		
			<div style="text-align:center;">
				<?php
				include("footer.html");
				?>
			</div>
			
		</form>
	</body>
</html>


			