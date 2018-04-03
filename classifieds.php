<?php
session_start();
 ?>
<!DOCTYPE html>
 <html>
	<head>
		<title>Community News</title>
		<script language="javascript" type="text/javascript" src="scripts\jquery-1.5.1.js"></script>
		<script language="javascript" type="text/javascript" src="scripts\mainScripts1.js"></script>
		<script language="javascript" type="text/javascript">

		</script>
		<link rel="stylesheet" type="text/css" href="styles\IEStyle.css" />	
	</head>
	<body bgcolor="black" style="margin:auto;width:900px;text-align:center;font-family:arial;" onload="checkLogin()">
	<form name="form1">
	<div class="profileStyle1" style="background-image:url('images/auxpage_community.jpg');height:1100px;">
			<div style="height:120px;width:900px;float:right;margin-bottom:105px;" id="dashboardWrap">				
			</div>
			<div style="width:780px;height:600px;float:left;text-align:left;padding-left:100px">
			
				<div class="divDash2">Community News</div>
				<div style="height:43px;"></div>

				<br/>
				<div >
					<div style="border:solid 2px #696969;width:730px;height:94px;" ><img src="advertiseImages\flashad.gif" /></div >
				</div>
				<div  style="width:800px;height:30px;margin:auto;background-image:url('images/menu_grid.jpg');background-repeat:repeat-y;">
				<?php
				include("navigation1.html");
				?>
				</div>						
				<br/>
				
				<!--//MainDiv-->
				<div style="float:left;width:730px;">					
					<div id="mainDiv">					
						<div >
						
							<div id="mainDiv">	
						search&nbsp;&nbsp;<input type="textbox" />&nbsp;&nbsp;<input type="button" value="search" />
						<br/>
						<br/>
						<table width="380"  style="font-family:arial;border:solid 1px #000000;background-color:#f2c8fa;" cellpadding="0" cellspacing="0">
					<tr>
						<td valign="top" style="font-size:12px;" >
						
							<table width="150"   cellpadding="3" cellspacing="0" style="font-size:12px;" valign="top">
								<tr>
									<td bgcolor="#d801ff" style="border-bottom:solid 1px #000000;"><h3>Services</h3></td>
								</tr>
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">automotive repair</a></td>
								</tr>
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">beauty</a></td>
								</tr>
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">carpet cleaning</a></td>
								</tr>
									<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">legal</a></td>
								</tr>
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">computer repair</a></td>
								</tr>
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">handy man</a></td>
								</tr>
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">pet services</a></td>
								</tr>
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">house painting</a></td>
								</tr>
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">lawn maintenance</a></td>
								</tr>
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">child care</a></td>
								</tr>
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">photography</a></td>
								</tr>
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">music lessons</a></td>
								</tr>
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">real estate</a></td>
								</tr>
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">volunteer</a></td>
								</tr>
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">electrical</a></td>
								</tr>
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">catering</a></td>
								</tr>
								
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">electronics repair</a></td>
								</tr>
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">tree services</a></td>
								</tr>
								
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">ac service/repair</a></td>
								</tr>
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">tutoring</a></td>
								</tr>
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">house cleaning/maid</a></td>
								</tr>
								
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">web design</a></td>
								</tr>
								

							</table>
							
							<table width="150" cellpadding="3" cellspacing="0" valign="top" style="font-size:12px;">
								<tr>
									<td bgcolor="#d801ff" style="border-bottom:solid 1px #000000;"><h3>Misc</h3></td>
								</tr>
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">Seeking roommate</a></td>
								</tr>
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">looking for...</a></td>
								</tr>
								
														
							</table>
							
							
							
							
							
							
							
						</td>
						<td valign="top" style="border-left:solid 1px #000000;font-size:12px;">	

														
						
							<table width="150" cellpadding="3" cellspacing="0" valign="top" style="font-size:12px;" >
							<tr>
									<td bgcolor="#d801ff" style="border-bottom:solid 1px #000000;"><h3>Misc..</h3></td>
								</tr>
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">property for rent</a></td>
								</tr>
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">garage sales</a></td>
								</tr>
								
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">random thoughts</a></td>
								</tr>
								
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">sports</a></td>
								</tr>
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">vacation rentals</a></td>
								</tr>
							
							
							
								<tr>
									<td bgcolor="#d801ff"style="border-bottom:solid 1px #000000;"><h3>Events</h3></td>
								</tr>
								
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">concerts</a></td>
								</tr>
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">classes</a></td>
								</tr>
									<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">political</a></td>
								</tr>
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">single events</a></td>
								</tr>
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">couple events</a></td>
								</tr>
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">revivals</a></td>
								</tr>

								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">discussions</a></td>
								</tr>
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">other</a></td>
								</tr>								
							</table>
							
							<table width="150"  cellpadding="3" cellspacing="0" style="font-size:12px;" >
								<tr>
									<td bgcolor="#d801ff" style="border-bottom:solid 1px #000000;"><h3>Personal</h3></td>
								</tr>
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">men seeking women</a></td>
								</tr>
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">women seeking men</a></td>
								</tr>
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">women seeking women</a></td>
								</tr>
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">men seeking men</a></td>
								</tr>
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">young saints(14-18)</a></td>
								</tr>
								
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">plutonic friendships</a></td>
								</tr>
								
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">business contacts</a></td>
								</tr>
								<tr>
									<td style="font-family:impact;font-size:13px"><a href="">Ask Shelley</a></td>
								</tr>
								
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">other</a></td>
								</tr>
				

							</table>
							
						
						
						</td>
						</td>
						<td valign="top" style="border-left:solid 1px #000000;font-size:12px;">
						
						
							<table width="150"  cellpadding="3" cellspacing="0" valign="top" style="font-size:12px;">
							<tr>
									<td bgcolor="#d801ff" style="border-bottom:solid 1px #000000;"><h3 >Jobs</h3></td>
								</tr>
								<tr>
									<td class="classAdStyle"><a href="">accounting</a></td>
								</tr>					
								
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">IT/computer</a></td>
								</tr>
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">web design/software</a></td>
								</tr>
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">marketing</a></td>
								</tr>
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">sales</a></td>
								</tr>
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">part-time</a></td>
								</tr>
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">multi-level marketing</a></td>
								</tr>
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">legal/paralegal</a></td>
								</tr>
								
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">labor</a></td>
								</tr>
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">repairman</a></td>
								</tr>
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">other</a></td>
								</tr>
														
							</table>
						
						
						
							<table width="150"  cellpadding="3" cellspacing="0" valign="top" style="font-size:12px;" >
								<tr>
									<td bgcolor="#d801ff"><h3>For sale</h3></td>
								</tr>
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">automobiles</a></td>
								</tr>
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">tools</a></td>
								</tr>
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">jewelry</a></td>
								</tr>
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">clothes</a></td>
								</tr>
								
								<tr >
									<td class="classAdStyle"><a href="classifiedDisplay.php">furniture</a></td>
								</tr>
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">real estate</a></td>
								</tr>
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">motorcycles</a></td>
								</tr>
								
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">electronics</a></td>
								</tr>
								
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">phones</a></td>
								</tr>
								<tr>
									<td class="classAdStyle"><a href="">collectibles</a></td>
								</tr>
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">other</a></td>
								</tr>
							
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">computers</a></td>
								</tr>
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">video games</a></td>
								</tr>
														
							</table>
						</td>
						
						
						
						<td valign="top" style="border-left:solid 1px #000000;font-size:12px;">
						
						
							<table width="150"  cellpadding="3" cellspacing="0" valign="top" style="font-size:12px;">
							
								<tr>
									<td bgcolor="#d801ff"><h3>For sale...</h3></td>
								</tr>
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">commercial equipment</a></td>
								</tr>
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">commercial vehicles</a></td>
								</tr>
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">commercial property</a></td>
								</tr>
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">hand bags</a></td>
								</tr>
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">vacations</a></td>
								</tr>
								
								
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">labor</a></td>
								</tr>
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">tickets</a></td>
								</tr>
								
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">appliances</a></td>
								</tr>
								
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">musical instruments</a></td>
								</tr>
							
							</table>
						
						
						investor/Entrepreneur<br/>
						what is your expected return?<br/>
						how much are you looking to invest?<br/>
						what type of businesses are you looking ot get involved in?<br/>
						what type of business are you involved in
						do ytou own a business?<br/>
						how long have you been in business?<br/>
						what is you are of expertise?<br/>
							
						</td>
						
						
						
					</tr>
				
					</table>
						
						<br/>
						<br/>
					</div>
						
						</div>
						
						<br/>
						<br/>
					</div>
			
				</div>
			
			</div>
	
			<div style="clear:both;"></div>
		</div>
		<div style="text-align:center;">
			<?php
			include("footer.html");
			?>
		</div>
	</body>
</html>


			