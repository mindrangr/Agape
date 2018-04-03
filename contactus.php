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
 ?>
 <html>
	<head>
		<title>Contact us</title>
					<script language="javascript" type="text/javascript" src="scripts\jquery-1.5.1.js"></script>
			<script language="javascript" type="text/javascript" src="scripts\mainScripts1.js"></script>
			<script language="javascript" type="text/javascript">
			

			function checkLogin()
				{
					window.log="<?php echo $logged_in; ?>"
					if(log=="true")
					{
						dashBoard();
					
					}
					
					if(log=="false")
					{
						logBoard();
					}
					

				}
				</script>
				<link rel="stylesheet" type="text/css" href="styles\IEStyle.css" />
		
	</head>
<body bgcolor="black" style="margin:auto;width:950px;text-align:center;font-family:arial;" onload="checkLogin()">
		<div class="profileStyle1">
			<div style="height:220px;width:940px;text-align:right;padding-right:13px;" id="dashboardWrap">
				
			</div>
			<div style="width:800px;height:300px;float:left;text-align:left;padding-left:100px">
			
				<div class="divDash2">Contact us</div>
				<div style="height:43px;"></div>


				<br/>		
				<div >
					<div style="border:solid 2px #696969;" ><img src="advertiseImages\flashad.gif" /></div >
				</div>
				<br/>
				<div style="padding-left:40px;float:left;width:580px;">
					
					<div id="mainDiv">					
						<div >
						</div>
						
						<br/>
						<br/>
					</div>
			
				</div>
				<div  style="width:120px;height:300px;float:left;">
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
	</body>
</html>


			