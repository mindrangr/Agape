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
	<div class="profileStyle1" style="background-image:url('images/auxpage_community.jpg');">
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
						
							<table width="140"   cellpadding="3" cellspacing="0" style="font-size:12px;" valign="top">
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
									<td class="classAdStyle"><a href="classifiedDisplay.php">computer repair</a></td>
								</tr>
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">handy man</a></td>
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
									<td class="classAdStyle"><a href="classifiedDisplay.php">real estate</a></td>
								</tr>
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">volunteer</a></td>
								</tr>
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">catering</a></td>
								</tr>
								
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">electronics repair</a></td>
								</tr>
								
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">web design</a></td>
								</tr>
								<tr>
									<td style="font-family:impact;font-size:13px"><a href="">Ask Shelley</a></td>
								</tr>

							</table>
							
							
							
							<table width="140"  cellpadding="3" cellspacing="0" style="font-size:12px;" >
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
									<td class="classAdStyle"><a href="classifiedDisplay.php">young saints(14-18)</a></td>
								</tr>
								
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">plutonic friendships</a></td>
								</tr>
								
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">business contacts</a></td>
								</tr>
								
								<tr>
									<td class="classAdStyle"><a href="classifiedDisplay.php">other</a></td>
								</tr>
				

							</table>
							
							
							
						</td>
						<td valign="top" style="border-left:solid 1px #000000;font-size:12px;">
						
						
							<table width="150" cellpadding="3" cellspacing="0" valign="top" style="font-size:12px;" >
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
														
							</table>
							
						
						</td>
						</td>
						<td valign="top" style="border-left:solid 1px #000000;font-size:12px;">
						
						
							<table width="150"  cellpadding="3" cellspacing="0" valign="top" style="font-size:12px;">
								<tr>
									<td bgcolor="#d801ff" style="border-bottom:solid 1px #000000;"><h3 >Jobs....</h3></td>
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
									<td class="classAdStyle"><a href="classifiedDisplay.php">other</a></td>
								</tr>
														
							</table>
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


			