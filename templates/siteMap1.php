<!DOCTYPE html>
<?php

include("../Config_files/_shared_config.php");

session_start();

$pagemove=explode("/",$actual_link);

if(isset($pagemove[6])){
	if($pagemove[6]!="none"){
		$_SESSION["page"] = $pagemove[6];
		//header('Location: /Sites/agape/homePage.php');
	}else{

	}
}else if(isset($pagemove[5])){
	$_SESSION["page"] = $pagemove[5];
}
else{
	$_SESSION["page"] = "none";
}



?>

	<html>
		<head>
			<title>Hello</title>
			<style>
			</style>

		</head>
		<link href="<?php echo $actual_base ?>/styles/Netscape_style.css" rel='stylesheet' type='text/css' />
		<body id='body' style="background-attachment:fixed;" >
		
	
			

		


	</html>


