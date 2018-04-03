<?php
session_start();
 ?>
<!DOCTYPE html>
 <html>
	<head>
		<title>Charity</title>
		<script language="javascript" type="text/javascript" src="scripts\jquery-1.5.1.js"></script>
		<script language="javascript" type="text/javascript" src="scripts\mainScripts1.js"></script>
		<script language="javascript" type="text/javascript">

		</script>
		<link rel="stylesheet" type="text/css" href="styles\IEStyle.css" />	
	</head>
	<body bgcolor="black" style="margin:auto;width:900px;text-align:center;font-family:arial;" onload="checkLogin()">
	<form name="form1">
	<div class="profileStyle1" style="background-image:url('images/auxpage_charity.jpg');">
			<div style="height:120px;width:900px;float:right;margin-bottom:105px;" id="dashboardWrap">				
			</div>
			<div style="width:780px;height:600px;float:left;text-align:left;padding-left:100px">
			
				<div class="divDash2">Charity for Love</div>
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
				<div style="float:left;width:730px;border:solid 1px #696969;">					
					<div id="mainDiv">					
						<div >
						
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
<?php
include("Config_files/config1_questions.php");
$sqlString1="SELECT * FROM questions where question_ID=1";
$returnObj=array();
$cntr=0;
$addedname="Marco Rubio";
$result1 = mysql_query($sqlString1);
$colnum = mysql_num_fields($result1);
while($row = mysql_fetch_assoc($result1)) 
{
	$returnObj[$cntr]=array();
	for($ctr=0;$ctr<$colnum;$ctr++)
	{				
		$tag=mysql_field_name($result1, $ctr);
		if($row[$tag]!='')
		{
			$returnObj[$cntr][$tag] = $row[$tag];		
			//echo $row[$tag];			
		}
		else
		{		
			$returnObj[$cntr][$tag] = 'none';							
		}	
	}			
	$cntr=$cntr+1;
}
$wee=json_decode($returnObj[0]['question_reply'],true);


$load=count($wee['answers']);
for($r=0;$r<$load;$r++){
	if($addedname==$wee['answers'][$r]['candidate']){
		$wee['answers'][$r]['count']=$wee['answers'][$r]['count']+1;
	}
}

$wass=json_encode($wee);


$updateStr="UPDATE questions SET question_reply='".$wass."' where question_ID=1";
		mysql_query($updateStr);
		echo "<div style='color:#eee;'>".$updateStr."</div>";
?>
			