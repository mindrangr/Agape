<?php

	if(isset($_POST['job'])){
		$job=$_POST['job'];

	}


	switch($_POST['dbase']){
		default:
			include("Config_files/config1.php");
		break;

	}
	

	switch($job)
	{
	
		case 'selectAll':

			$kdbase=$_POST['dbase'];
		 	$cntr=0;
		 	$returnObj=array();
			//$value=$_POST['value'];

			$kob=$_POST['kob'];
		 	$sqlString1="select * from ".$kdbase." ".$kob;


		 	if($kdbase=="agape_profile"){
		 		$sqlString1="select agape_profile_memberID,	agape_profile_firstname,agape_profile_lastname,agape_profile_gender,agape_profile_dateOfBirth,	agape_profile_age,agape_profile_bodyType, ";
		 		 $sqlString1=$sqlString1."agape_profile_height,agape_profile_city,agape_profile_state,agape_profile_email,agape_profile_friends,agape_profile_intentions ,agape_profile_recreation, agape_profile_education,";
				 $sqlString1=$sqlString1."agape_profile_relationship_dist,agape_profile_political,agape_partner_political,agape_profile_children,agape_profile_description, agape_profile_partner_description,";
		 		 $sqlString1=$sqlString1."agape_profile_firstDate,agape_profile_salary,agape_profile_accountType,agape_profile_username,agape_profile_default_img,	agape_profile_religion,	agape_profile_register_date,"; 
		 		 $sqlString1=$sqlString1."agape_profile_drugs,agape_profile_alcohol,agape_partner_gender,agape_partner_age_range,agape_partner_salary,agape_partner_drugs,agape_partner_religion,agape_partner_education,"; 
		 		 $sqlString1=$sqlString1."agape_partner_opts,agape_partner_alcohol,agape_partner_children,agape_partner_bodyType,agape_profile_opts,agape_profile_race,agape_profile_fRequest,	agape_partner_race,"; 
		 		 $sqlString1=$sqlString1."agape_partner_height,	agape_profile_children_future,agape_profile_amt2Invest,agape_profile_nation,agape_profile_accountStatus,agape_friendList,agape_vote_recordThumbs,";
		 		 $sqlString1=$sqlString1."agape_vote_recordPolls,agape_vote_presidentialCandidates,agape_profile_romanceAccount,	agape_profile_commercial_Account,agape_profile_presidentAccount,agape_profile_presidentAccount_type from ".$kdbase." ".$kob;
		 	}



			$result1 = mysql_query($sqlString1);
			$countR = mysql_num_rows($result1);
			$colnum = mysql_num_fields($result1);
			while($row = mysql_fetch_assoc($result1)) 
			{
				$returnObj[$cntr]=array();
				for($ctr=0;$ctr<$colnum;$ctr++)
				{				
					$tag=mysql_field_name($result1, $ctr);
					if($row[$tag]!="")
					{
						$returnObj[$cntr][$tag] = $row[$tag];					
					}
					else
					{		
						$returnObj[$cntr][$tag] = 'none';							
					}	
				}			
				$cntr=$cntr+1;
			}



			if(isset($_POST['Getdetail'])){
				switch($_POST['Getdetail']){
					case 'GetCount':
						$ob2=stripslashes($_POST['ob2']);
						$sqlString2="select * from ".$kdbase." ".$ob2;
						$result2 = mysql_query($sqlString2);
						$countR = mysql_num_rows($result2);
					
					break;
				}
			}


			$bigPack['returnObj']=$returnObj;
			$bigPack['countR']=$countR;
			$ray=json_encode($bigPack);
			echo "true**".$ray."**".$sqlString1;

		break;

	}

?>