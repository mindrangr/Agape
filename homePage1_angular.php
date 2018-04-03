<!DOCTYPE html>
<?php

echo 56456;


?>
	<html>
		<head>
			<title>Hello</title>
		
			<link rel="stylesheet" type="text/css" href="styles\IEStyle_go.css" />
			<script data-main="scripts/main" src="scripts/require.js"></script>
			<script language="javascript" type="text/javascript" src="scripts\jquery-1.8.2.js"></script>
			<script language="javascript" type="text/javascript" src="scripts\formFields.js"></script>
			<script language="javascript" type="text/javascript" src="scripts\navs.js"></script>
			<script language="javascript" type="text/javascript" src="scripts\ads.js"></script>
			<script language="javascript" type="text/javascript">
			lastNav="splashPanel";
			moSlide=0;
			

		function login()
		{
			require(['modules/login'],function(login)
			{
				login.checkFields();
			});			
		}
			
			
			</script>
			<style type="text/css">

				
			</style>
			<!-- frontpanelGradient1.jpg -->
		</head>
		<body style="margin:auto;text-align:center;background-color:#4c4d42;" >
			<form name="form1">
				<div id="holding" style="height:870px;width:1300px;background-image:url('images/newb_go.jpg');background-repeat:no-repeat;margin:auto;" >
					<div>
						<div style="height:44px;float:left;width:216px;"> </div>
						<div style="height:38px;float:left;width:1059px;color:#c9d5d6;font-size:36px;text-align:left;font-family:Nueva Std;margin-left:25px;margin-top:6px" id="tag">Romance</div>
						<div style="clear:both"></div>
						<div style="width:216px;float:left;">
							<div style="color:transparent">.</div>
							<div style="width:216px;height:90px;margin-top:15px;color:#c9d5d6;font-family:tahoma;font-size:12px;" id="loginPanel">						
							</div>				
						</div>						
						
						<div style="width:868px;float:left;height:105px;display:none;" id="addOn">
							<img src="advertiseImages/flashad1.gif" id="adDiv">
						</div>
						<div style="clear:both"></div>
					
					
						<div class="topPanel" style="width:106px;"></div>			
						<div class="topPanel" style="width:110px;">
							<div class="navPanel" id="butt_signUp" onclick="panelChange('signUp')">Sign up</div>

							<div class="navPanel" id="butt_message"  ></div>
							<div class="navPanel" id="butt_view"  ></div>
							<div class="navPanel" id="butt_search"  ></div>
							<div class="navPanel" id="butt_friends"  ></div>
							<div class="navPanel" id="butt_community"  ></div>
							<div class="clearBoth"></div>
						</div>	
					
						<div id="auxDix" style="float:left;display:none;">
							<div style="height:285px;margin-top:0px;width:388px;float:left;font-family:tahoma;font-size:12px;">
								<div class="frontPage" id="lPanel"></div>
								<div class="frontPage" id="dateField">Monday January 01, 2013 12:00pm</div>
								<div class="frontPage" style="color:#ffffff;cursor:pointer;" onclick="movePanel('topPanel','aux')" ><u>Manage photos</u></div>
								<div  class="frontPage"  ><u style="color:#ffffff;cursor:pointer;" onclick="movePanel('topPanel','aux')">Account type:</u><span style="color:#d505f9;"> basic</span></div>
								<div   style="border-radius:5px;background-color:green;width:220px;height:100px;margin-left:120px;padding:4px;text-align:left;margin-top:15px;color:lime;border:solid 2px #000000;font-family:tahoma;" >Quote(s) to live by: <span style="font-size:12px;color:#c9d5d6;"><i>God has given to man no sharper spur to victory in war than contempt of death.</i> </span></div>
								<div  class="frontPage" ></div>
								<div></div>							
							</div>
							<div id="topPanel">
								<div style="width:388px;float:left;height:240px" id="video1"> 	
									<iframe width="380" height="245"  src="http://www.youtube.com/embed/9JejMfvvMpA" frameborder="0" allowfullscreen></iframe>
								</div>
								
								
								<div style="border:solid 1px #dedede;background-color:#1b4e52;border-radius:8px;padding:6px;float:left;width:360px;height:230px;text-align:center;margin:auto;padding-top:10px;display:none;" id="aux">
									<div style="margin:auto;width:340px;text-align:center;">
										<div class="updatePhoto"><img style="border:solid 2px red;height:85px;" id="cPic1" src="profileImages/No-Image-Available.gif" width="80" /></div>
										<div class="updatePhoto"><img class="updatePhoto_border" id="cPic2" src="profileImages/No-Image-Available.gif" width="80"/></div>
										<div class="updatePhoto"><img class="updatePhoto_border" id="cPic3" src="profileImages/No-Image-Available.gif" width="80" /></div>
										<div class="updatePhoto"><img class="updatePhoto_border" id="cPic4" src="profileImages/No-Image-Available.gif" width="80" /></div>
										<div class="clearBoth"></div>
									</div>
									
									<div style="margin:auto;width:340px;text-align:center;">
										<div class="updatePhoto" id="cPicLabel1" >pic 1</div>
										<div class="updatePhoto" id="cPicLabel2">pic 2</div>
										<div class="updatePhoto" id="cPicLabel3">pic 3</div>
										<div class="updatePhoto" id="cPicLabel4">pic 4</div>
										<div class="clearBoth"></div>
									</div>
									
									
									<div style="margin:auto;width:340px;text-align:center;">
										<div class="updatePhoto"><img class="updatePhoto_border" id="cPic5" src="profileImages/No-Image-Available.gif" width="80" /></div>
										<div class="updatePhoto"><img class="updatePhoto_border" id="cPic6" src="profileImages/No-Image-Available.gif" width="80"/></div>
										<div class="updatePhoto"><img class="updatePhoto_border" id="cPic7" src="profileImages/No-Image-Available.gif" width="80" /></div>
										<div class="updatePhoto"><img class="updatePhoto_border" id="cPic8" src="profileImages/No-Image-Available.gif" width="80" /></div>
										<div class="clearBoth"></div>
									</div>
									
									<div style="margin:auto;width:340px;text-align:center;">
										<div class="updatePhoto" id="cPicLabel5">pic 5</div>
										<div class="updatePhoto" id="cPicLabel6">pic 6</div>
										<div class="updatePhoto" id="cPicLabel7">pic 7</div>
										<div class="updatePhoto" id="cPicLabel8">pic 8</div>
										<div class="clearBoth"></div>
									</div>
		
									
									<div class="sliderButtonStyle1" onmouseover="buttonMouseOver(this,'#0b8d0b','par')" onmouseout="buttonMouseOver(this,'green','par')"><img src="images/leftArrow.png" id="returnButt" onclick="movePanel('topPanel','video1')" /></div>
									
									
									<div style="float:left;font-family:tahoma;color:lime;cursor:pointer;margin-left:110px;font-size:12px;font-weight:bold;margin-top:5px;" onclick="uploadImages()" ><u>upload</u></div>

									<div class="clearBoth"></div>	
								</div>
								
								
								
							</div>							

							<div class="clearBoth"></div>							
						</div>
							
						<div style="clear:both"></div>
					
						<div class="bodyPanel" style="width:216px;text-align:center;text-align:center;margin:auto;">
							<div style="float:left;width:59%;padding:3%;height:182px;font-family:tahoma;font-size:13px;"></div>
						</div>
						<div class="bodyPanel" style="width:868px;margin:auto;padding-top:30px">
							<div style="border-radius:5px;width:85%;height:96%;border:solid 1px #696969;margin:auto;position:relative;z-index:10;overflow:auto;background-color:#2e2e2e;">
						
							<!-- Splash Panel Begin -->
								<div id="splashPanel" style="position:absolute;z-index:15;width:737px;background-color:#ffffff;">
							
									<div style="background-image:url('images/brown.jpg');border-radius:5px;">
										<div style="width:685px;height:132px;">
											<div style="float:left;width:420px;padding:3%;height:130px;font-family:tahoma;font-size:13px;">Welcome to Agape XChange.com where you can 
		meet your match for free. Browse millions of eligible individuals 
		all over America with the same relationship goals that you have.<br/><br/>

		And our premium members can even browse our international +
		
		databases for people abroad exited about making your acaquaintance
											</div>
											<div style="float:left;width:115px">	
											</div>
											<div style="clear:both"></div>
										
											<div style="background-image:url('images/businesspeople.jpg');background-repeat:no-repeat;width:737px;height:170px;background-color:#ffffff;"><u>Click here to begin searching<br/>for your matches for free!</u></div>
										</div>
									</div>	
								</div>
								<!-- Splash Panel End -->
								
								
								
								<!-- Begin message panel-->								
								<div id="message" style="position:absolute;z-index:15;display:none;background-color:#2e2e2e;width:732px;overflow:auto;overflow-x:hidden;">
									<div style="overflow-x:hidden;background-color:#2e2e2e;">
										<span style="font-weight:bold;font-size:18px;">Messages</span>
										<div style="margin:auto;">
											<div style="background-color:#1b4e52;border-radius:8px;width:695px;margin:auto;padding:10px;height:274px;overflow:auto;" id="messContainer">
												No Messages							
											</div>
											<br/>
										</div>				
									</div>
								</div>								
								<!-- End message panel-->

							
								<!-- Begin View panel-->
								
								<div id="view" style="position:absolute;z-index:15;display:none;width:730px;">
									<br/>
									<div style="width:716px;background-color:#2e2e2e;border:solid 2px #246970;height:305px;overflow:auto;overflow-x:hidden;margin:auto;border-radius:7px">
										<div >
											<table cellpadding="7" style="text-align:left;">
												<tr >
													<td width="150">
														<IMG src="" height="175" width="135"  style="border:solid 1px #dedede;border-radius:7px;" id="hostImg" />
														<div style="font-size:10px;color:red;cursor:pointer;width:160px;text-align:center;">default photo</div>
													</td>
													<td valign="top" >													
														<div style="border:solid 1px #dedede;background-color:#1b4e52;border-radius:8px;padding:6px;">
															<table valign="top">
																<tr>
																	<td class="label_pr"  >username:</td>
																	<td>
																		<div class="fields_pr" id="agape_profile_username_pr" ></div>
																	</td>
													
																	<td class="label_pr" >intentions:</td>
																	<td>
																		<div class="fields_pr" id="agape_profile_intentions_pr"></div>
																	</td>
																	<td rowspan="2">
																		<img src="" id="flagPost"/>
																	</td>
																</tr>
																	
																<tr>
																	<td class="label_pr">city:</td>
																	<td>
																		<div class="fields_pr" id="agape_profile_city_pr" ></div>
																	</td>
														
																	<td class="label_pr">religion:</td>
																	<td>
																		<div class="fields_pr" id="agape_profile_religion_pr" style="color:#246970;"></div>
																	</td>
																</tr>
														
																<tr>
																	<td class="label_pr">state:</td>
																	<td><div  class="fields_pr" id="agape_profile_state_pr"></div></td>
																	
																	<td class="label_pr">age:</td>
																	<td><div class="fields_pr" id="agape_profile_dateOfBirth_pr"></div></td>
																</tr>
												
																<tr>
																	<td class="label_pr">salary:</td>
																	<td>
																		<div class="fields_pr" style="width:150px;" id="agape_profile_salary_pr"></div>
																	</td>
																	
																	<td class="label_pr">education:</td>
																	<td>
																		<div class="fields_pr" id="agape_profile_education_pr"></div>
																	</td>
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
														</div>
													</td>
												</tr>
											</table>								
										</div>	
										
										<div style="border:solid 1px #dedede;background-color:#1b4e52;border-radius:8px;height:690px;width:623px;margin:auto;padding:10px;">	
											<table>
												<tr style="font-family:tahoma;">
													<td valign="top">
														<div  style="color:#ffffff;font-size:13px;width:270px;height:75px;float:left;">
															<div style="display:inline-block;vertical-align:top;margin-bottom:10px;">What can you expect from me?</div>
												
															<div id="loveOptions" style="color:lime;font-size:13px;width:310px;height:75px;"></div>
												
														</div>
													</td>										
													<td>
														<div  style="color:#ffffff;font-size:13px;width:300px;height:245px;float:left;border:inset 1px #373906;background-color:#373636;padding:4px;padding-top:1px;border-radius:6px;">
															<div style="display:inline-block;vertical-align:top;margin-bottom:10px;">What are my expectations from a partner?</div>
													
													
															<div id="parnterOptions" style="color:#d505f9;font-size:13px;width:310px;height:75px;"></div>
												
														</div>											
														<div style="clear:both;"></div>
													</td>
												</tr>							
											</table>
											<br/>
											<br/>
											<div class="EdwardianScript1" style="text-align:left;color:#c9d5d6;">How would I describe myself?</div>
											<div style="color:#ffffff;font-size:13px;font-family:tahoma;width:577px;border-radius:6px;height:85px;float:left;border:inset 1px #373906;background-color:#373636;padding:4px;padding-top:1px;text-align:left;" id="agape_profile_description_pr">
											</div>
											<!-- end describe myself field -->
											
											
											
											<!-- Begin ideal first date field -->
											<div class="EdwardianScript1" style="text-align:left;color:#c9d5d6;">What would I consider the ideal first date?</div>
											<div style="color:#ffffff;font-size:13px;font-family:tahoma;width:577px;border-radius:6px;height:85px;float:left;border:inset 1px #373906;background-color:#373636;padding:4px;padding-top:1px;text-align:left;" id="agape_profile_firstDate_pr">
											</div>							
											<!-- end ideal first date field -->
						
						
											<!-- Begin ideal partner field -->
											<div class="EdwardianScript1" style="text-align:left;color:#c9d5d6;">Here is how I would describe my ideal partner</div>
											<div style="color:#ffffff;font-size:13px;font-family:tahoma;width:577px;border-radius:6px;height:85px;float:left;border:inset 1px #373906;background-color:#373636;padding:4px;padding-top:1px;text-align:left;" id="agape_profile_partner_description_pr">
											</div>	
						
											<!-- end ideal partner field -->
										</div>
										<br/>
									</div>
								</div>							
								<!-- End View panel-->
						
						
								<!-- Begin Sign up -->
								<div id="signUp" style="position:absolute;z-index:15;display:none;">
									<div style="width:733px;height:100%;background-color:#2e2e2e;overflow:auto;overflow-y:hidden;">
										<div id="editPro" style="width:713px;margin:auto;background-color:blue;background-color:#1b4e52;border-radius:6px;margin-top:20px;height:297px;overflow:auto;overflow-x:hidden;">	
											<div id="editProCont" style="padding:4px;width:695px;">
											</div>
							
											<div>
												<input id="subButt" type="button" value="Submit"  style="background-color:black;border:solid 2px #34ff0d;color:#ffffff;font-weight:bold;" onclick="profileFormValidator()"/>
												<input type="button" value="load" onclick="loo()"/>
											</div>
										</div>
										<br/>
									</div>
								</div>
								<!-- End Sign up -->
								<style type="text/css">
									.slidePics
									{
										border-right:solid 1px #dedede;
										width:78px;
										height:64px;
										float:left;
										background-color:#09373c;
										padding-top:2px;									
									}
								</style>
							
								<!-- Begin search -->
								<div id="search" style="position:absolute;z-index:15;display:none;width:730px;">
								<br/>
									<div style="width:716px;background-color:#2e2e2e;border:solid 2px #246970;height:305px;overflow:auto;overflow-x:hidden;margin:auto;border-radius:7px;background-image:url('images/gradients/searchtpanelGradient1.jpg');">			
										<div style="height:75px;padding-top:4px;padding-bottom:4px;">
											<div style="height:68px;border:solid 2px #000000;width:1980px;position:relative;" id="sliderDiv">
												<div class="slidePics"  >
													<img src="" class="searchPicClass" id="pic0" />
												</div>
										
												<div class="slidePics" >
													<img src="" class="searchPicClass" id="pic1" />
												</div>
										
												<div class="slidePics" >
													<img src="" class="searchPicClass" id="pic2" />
												</div>
												
												<div class="slidePics">
													<img src="" class="searchPicClass" id="pic3" />
												</div>										
										
												<div class="slidePics" >
													<img src="" class="searchPicClass" id="pic4" />
												</div>
												
												<div class="slidePics" >
													<img src="" class="searchPicClass" id="pic5" />
												</div>
												
												<div class="slidePics" >
													<img src="" class="searchPicClass" id="pic6" />
												</div>
										
												<div class="slidePics" >
													<img src="" class="searchPicClass" id="pic7" />
												</div>
												
												<div class="slidePics" >
													<img src="" class="searchPicClass"  id="pic8" />
												</div>	

												<div class="slidePics" >
													<img src="" class="searchPicClass" id="pic9" />
												</div>
												
												<div class="slidePics" >
													<img src="" class="searchPicClass" id="pic10" />
												</div>
												
												<div class="slidePics" >
													<img src="" class="searchPicClass" id="pic11" />
												</div>
										
												<div class="slidePics" >
													<img src="" class="searchPicClass" id="pic12" />
												</div>
												
												<div class="slidePics" >
													<img src="" class="searchPicClass"  id="pic13" />
												</div>

												<div class="slidePics" >
													<img src="" class="searchPicClass" id="pic14" />
												</div>
												
												<div class="slidePics" >
													<img src="" class="searchPicClass" id="pic15" />
												</div>
										
												<div class="slidePics" >
													<img src="" class="searchPicClass" id="pic16" />
												</div>
												
												<div class="slidePics" >
													<img src="" class="searchPicClass"  id="pic17" />
												</div>

												<div class="slidePics" >
													<img src="" class="searchPicClass" id="pic18" />
												</div>
												
												<div class="slidePics" >
													<img src="" class="searchPicClass" id="pic19" />
												</div>
										
												<div class="slidePics" >
													<img src="" class="searchPicClass" id="pic20" />
												</div>
												
												<div class="slidePics" >
													<img src="" class="searchPicClass"  id="pic21" />
												</div>

												<div class="slidePics" >
													<img src="" class="searchPicClass" id="pic22" />
												</div>
												
												<div class="slidePics" >
													<img src="" class="searchPicClass" id="pic23" />
												</div>
										
												<div class="slidePics" >
													<img src="" class="searchPicClass" id="pic24" />
												</div>
												
																								
																								
																								
												
												<div style="clear:both;"></div>
											</div>	
											
											<div style="color:#ffffff;text-align:left;font-family:tahoma;float:left;width:336px;font-size:13px;margin-left:20px;margin-top:3px;" id="searchCall">Local people from your area</div>
											
											<div style="float:left;margin-top:6px">

												
												<div class="sliderButtonStyle1" onmouseover="buttonMouseOver(this,'#0b8d0b','par')" onmouseout="buttonMouseOver(this,'green','par')"><img src="images/leftArrow.png" id="lSliderButt" /></div>
												<div style="float:left;margin-left:6px;font-size:12px;font-family:tahoma;padding-top:6px;color:#ffffff;" id="picsStart"></div>
												<div style="float:left;margin-left:6px;font-size:12px;font-family:tahoma;padding-top:6px;color:#ffffff;"> to </div>
												<div style="float:left;margin-left:6px;font-size:12px;font-family:tahoma;padding-top:6px;color:#ffffff;" id="picsEnd">25</div>
												
												
												<div class="sliderButtonStyle1" onmouseover="buttonMouseOver(this,'#0b8d0b','par')" onmouseout="buttonMouseOver(this,'green','par')"><img src="images/rightArrow.png" id="rSliderButt" /></div>
												
												<div style="float:left;margin-left:6px;font-size:12px;font-family:tahoma;padding-top:6px;color:#ffffff;">of <span style="color:lime;" id="tot"></span></div>
												
												<div style="width:90px;color:lime;height:20px;padding-top:5px;box-shadow:#061e21 0px 2px 3px 0px;" class="sliderButtonStyle1" onmouseover="buttonMouseOver(this,'#0b8d0b','par')" onmouseout="buttonMouseOver(this,'green','par')" onclick="getFirstsearch_Call()">Load next 25</div>
												
												<div style="clear:both;"></div>
											</div>
										
											
									
											<div style="clear:both;"></div>
											
											<div style="padding:10px;border:solid 1px #ffffff;border-radius:8px;background-color:#092428;width:315px;margin-left:15px;height:150px;float:left;margin-top:-20px;" >
												<div style="float:left;border: solid 1px #000000;">
													<img src="images/male-icon.jpg" height="120" width="100" id="display_searchImgDiv"/>
												</div>
												<div style="float:left;">
													<div class="searchPanelLabel" >username</div>
													<div class="searchPanelData" id="display_agape_profile_username"></div>
													<div style="clear:both;"></div>
													
													<div class="searchPanelLabel">city</div>
													<div class="searchPanelData" id="display_agape_profile_city"></div>
													<div style="clear:both;"></div>
													
													<div class="searchPanelLabel" >intentions</div>
													<div class="searchPanelData" id="display_agape_profile_intentions"></div>
													<div style="clear:both;"></div>
													
													<div style="width:90px;color:lime;margin-top:15px;height:20px;padding-top:5px;box-shadow:#061e21 0px 2px 3px 0px;" class="sliderButtonStyle1" onmouseover="buttonMouseOver(this,'#0b8d0b','par')" onmouseout="buttonMouseOver(this,'green','par')" onclick="visitPro1()">View Profile</div>
												</div>
												<div style="clear:both;"></div>
												<input type="hidden" id="uID_se" />
											</div>
											
											<div style="float:left;margin-top:10px;" id="searchpanelInputs">
											
												<div style="float:left;">
													<div class="searchPanelLabel" style="color:#d505f9;font-style:italic;font-weight:bold;" id="idSeachStateLabel_free" >Florida</div>
													<div class="searchPanelData" >
														<select class="searchPaneldrpDwn" id="se_agape_profile_city">
															<option value="none">select one</option>
	
														</select>
													</div>
													<div style="clear:both;"></div>
														
													<div class="searchPanelLabel" >intentions</div>
													<div class="searchPanelData" >
														<select class="searchPaneldrpDwn" id="se_agape_profile_intentions">
															<option value="Friendship">Friendship</option>
															<option value="Marriage">Marriage</option>
															<option value="Casual Dating">Casual Dating</option>
															<option value="Business Contact">Business Contact</option>
															<option value="Other">Other</option>
														</select>
													</div>
													<div style="clear:both;"></div>
													
													
													

													<div class="searchPanelLabel"  >religion</div>
													<div class="searchPanelData" >
														<select class="searchPaneldrpDwn" id="se_agape_profile_religion">
															<option value="Not Important">Not Important</option>
															<option value="Christianity">Christianity</option>
															<option value="Islam">Islam</option>
															<option value="Judaica">Judaica</option>
															<option value="Hindu">Hindu</option>															
															<option value="Other">Other</option>
														</select>
													</div>
													<div style="clear:both;"></div>
													
													
													<div class="searchPanelLabel" >body type</div>
													<div class="searchPanelData" >
														<select class="searchPaneldrpDwn" id="se_agape_profile_bodyType">
															<option value="Not Important">Not Important</option>
															<option value="Slim">Slim</option>
															<option value="Medium">Medium</option>
															<option value="Healthy">Healthy</option>
															<option value="Muscular">Muscular</option>
															<option value="Big">Big</option>
															<option value="Overweight">Overweight</option>
														</select>
													</div>
													<div style="clear:both;"></div>
													
													
												
													
													<div class="searchPanelLabel" >education</div>
													<div class="searchPanelData" >
														<select class="searchPaneldrpDwn" id="se_agape_partner_education" >
															<option value="Not Important">Not Important</option>
															<option value="High School">High School</option>
															<option value="Some college">Some college</option>
															<option value="AA Degree">AA Degree</option>
															<option value="BA/BS">BA/BS</option>
															<option value="Masters">Masters</option>
															<option value="Doctorate">Doctorate</option>
														</select>
													</div>
													<div style="clear:both;"></div>
													
													<div class="searchPanelLabel" >gender</div>
													<div class="searchPanelData" >
														<select class="searchPaneldrpDwn" id="se_agape_profile_gender" >
															<option>Male</option>
															<option>Female</option>
															<option>Not important</option>
														</select>
													</div>
													<div style="clear:both;"></div>
													
													<div style="margin-top:15px;text-align:left;">
														<div style="width:90px;color:lime;height:20px;padding-top:5px;box-shadow:#061e21 0px 2px 3px 0px;text-align:center;border:outset 2px #000000;" class="sliderButtonStyle1" onmouseover="buttonMouseOver(this,'#0b8d0b','par')" onmouseout="buttonMouseOver(this,'green','par')" onclick="searchDiv()" id="buttons">Search</div>
													</div>
												
												</div>
												
												<div style="float:left;">
													<div class="searchPanelLabel" style="width:40px">age</div>
													<div class="searchPanelData" >
														<select class="searchPaneldrpDwn" id="se_agape_partner_age_range" >
															<option value="Not Important">Not Important</option>
															<option value="18-22">18-22</option>
															<option value="23-28">23-28</option>
															<option value="29-34">29-34</option>
															<option value="35-39">35-39</option>
															<option value="40-46">40-46</option>
															<option value="47-55">47-55</option>
															<option value="56-63">56-63</option>
															<option value="64-70">64-70</option>
															<option value="71-75">71-75</option>
															<option value="76-1000">76+</option>
														</select>
													</div>
													<div style="clear:both;"></div>
													
													
													<div >
													<div class="searchPanelLabel" style="width:40px;" >race</div>
														<div class="searchPanelData" >
															<select class="searchPaneldrpDwn" id="se_agape_partner_race" >
																<option value="Not Important">Not Important</option>
																<option value="white">white</option>
																<option value="black">black</option>
																<option value="latino">latino</option>
																<option value="asian">asian</option>
																<option value="Other">Other</option>					
															</select>
														</div>
													</div>													
												</div>
												<div style="clear:both;"></div>
												<input type="hidden" value="Florida" id="se_agape_profile_state" />
											</div>
											<div style="clear:both;"></div>
										</div>
									</div>
									<!-- end search -->
								</div>
							
								
								
								<!-- Begin Community -->
								<div id="community" style="position:absolute;z-index:15;display:none;">
									community
								</div>
								<!-- End Community -->	



								<!-- Begin Friends -->								
								
								
								
								<div id="friends" style="position:absolute;z-index:15;display:none;background-color:#2e2e2e;width:732px;overflow:auto;overflow-x:hidden;">
									<div style="overflow-x:hidden;background-color:#2e2e2e;">
										<span style="font-weight:bold;font-size:18px;color:gray;">friend requests</span>
										<div style="margin:auto;">
											<div style="background-color:#1b4e52;border-radius:8px;width:695px;margin:auto;padding:10px;height:274px;overflow:auto;" id="friendContainer">
												No friend request							
											</div>
											<br/>
										</div>				
									</div>
								</div>
								
								<!-- End Friends -->	





								
							</div>
							<div style="clear:both"></div>				
						</div>
					</div>
				</div>
			</form>
		</body>
	</html>