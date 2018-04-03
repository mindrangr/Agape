<?php
session_start();
 ?>
<!DOCTYPE html>
 <html>
	<head>
		<title>Testimonies</title>
		<script language="javascript" type="text/javascript" src="scripts\jquery-1.5.1.js"></script>
		<script language="javascript" type="text/javascript" src="scripts\mainScripts1.js"></script>
		<script language="javascript" type="text/javascript">

		</script>
		<link rel="stylesheet" type="text/css" href="styles\IEStyle.css" />	
	</head>
	<body bgcolor="black" style="margin:auto;width:900px;text-align:center;font-family:arial;" onload="checkLogin()">
	<form name="form1">
	<div class="profileStyle1" style="background-image:url('images/auxpage_testimony.jpg');">
			<div style="height:120px;width:900px;float:right;margin-bottom:105px;" id="dashboardWrap">				
			</div>
			<div style="width:780px;height:600px;float:left;text-align:left;padding-left:100px">
			
				<div class="divDash2">Testimonies</div>
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


			