<?php
	srand(mktime());
	include("Config_files/config1.php");
	for($h=0;$h<2500;$h++){

		$ID=rand(1,2500);
		$string="update agape_profile set agape_profile_onlineStatus='Online' where agape_profile_memberID=".$ID;
		mysql_query($string);
	}


	/*$string="update agape_profile set agape_profile_onlineStatus='Offline'";
	mysql_query($string);*/
?>