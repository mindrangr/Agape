<?php

	if(isset($_POST['job'])){
		$job=$_POST['job'];

	}
	mysql_set_charset('utf8');

	switch($_POST['dbase']){

		case 'states':
			include("Config_files/config1_states.php");
		break;


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
		 		 $sqlString1=$sqlString1."agape_profile_height,agape_profile_city,agape_profile_state,agape_profile_email,agape_profile_friends,agape_profile_intentions ,agape_profile_recreation, agape_profile_education, agape_profile_zodiacSign,";
				 $sqlString1=$sqlString1."agape_profile_relationship_dist,agape_profile_political,agape_partner_political,agape_profile_children,agape_profile_description, agape_profile_partner_description,";
		 		 $sqlString1=$sqlString1."agape_profile_firstDate,agape_profile_salary,agape_profile_accountType,agape_profile_username,agape_profile_default_img,	agape_profile_religion,	agape_profile_register_date,"; 
		 		 $sqlString1=$sqlString1."agape_profile_drugs,agape_profile_alcohol,agape_partner_gender,agape_partner_age_range,agape_partner_salary,agape_partner_drugs,agape_partner_religion,agape_partner_education,"; 
		 		 $sqlString1=$sqlString1."agape_partner_opts,agape_partner_alcohol,agape_partner_children,agape_partner_bodyType,agape_profile_opts,agape_profile_race,agape_profile_fRequest,	agape_partner_race,"; 
		 		 $sqlString1=$sqlString1."agape_partner_height,	agape_profile_onlineStatus, agape_profile_children_future,agape_profile_amt2Invest,agape_profile_nation,agape_profile_accountStatus,agape_friendList,agape_vote_recordThumbs,";
		 		 $sqlString1=$sqlString1."agape_vote_recordPolls,agape_vote_presidentialCandidates,agape_profile_romanceAccount,	agape_profile_commercial_Account,agape_profile_presidentAccount,agape_profile_presidentAccount_type from ".$kdbase." ".$kob;
		 	}


		 	$valpres="false";
			$result1 = mysql_query($sqlString1);

			

			if($result1==false){
				$countR=0;
			}else{
				$colnum = mysql_num_fields($result1);
				$countR = mysql_num_rows($result1);
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
					$valpres="true";
				}



				if(isset($_POST['Getdetail'])){
					switch($_POST['Getdetail']){
						case 'GetCount':
							$ob2=stripslashes($_POST['ob2']);
							$sqlString2="select * from ".$kdbase." ".$ob2;
							$result2 = mysql_query($sqlString2);
							$bigPack['countMax'] = mysql_num_rows($result2);
						
						break;
					}
				}
			}

			if(isset($_POST['returnValue'])){
				$bigPack['returnValue']=$_POST['returnValue'];
			}
			
			
			


			$bigPack['returnObj']=$returnObj;
			$bigPack['countR']=$countR;
			$ray=json_encode($bigPack);
			echo $valpres."**".$ray."**".$sqlString1;

		break;

		 case 'stateSelect_atomic':

	
			$cntr=0;
			$dbase=$_POST['dbase'];
			$sqlString1="select Distinct state, state_full from ".$dbase;

		
			$result1=mysql_query($sqlString1);
			$countR= mysql_num_rows($result1);

			$sqlType="select";
			$addr1="false";
			$bigPack="";
			$returnObj=array();	
			
			
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
					}
					else
					{		
						$returnObj[$cntr][$tag] = 'none';							
					}	
				}			
				$cntr=$cntr+1;
			}
			$bigPack['returnObj']=$returnObj;
			$bigPack['countR']=$countR;
			$ray=json_encode($bigPack);
			echo "true**".$ray."**".$sqlString1;
				
		 break;

 	 	case 'citySelect_atomic':
			$val=$_POST['val'];
			$dbase=$_POST['dbase'];
		 	$sqlString1="SELECT Distinct city from ". $dbase." where state_full='".$val."' order by city asc";
		 	$cntr=0;


		 	$bigPack="";
			$returnObj=array();	
			$result = mysql_query($sqlString1);
			$countR = mysql_num_rows($result);
			$colnum = mysql_num_fields($result);
			while($row = mysql_fetch_assoc($result)) 
			{
				$returnObj[$cntr]=array();
				for($ctr=0;$ctr<$colnum;$ctr++)
				{				
					$tag=mysql_field_name($result, $ctr);
					if($row[$tag]!='')
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
			$bigPack['returnObj']=$returnObj;
			$bigPack['countR']=$countR;
			$ray=json_encode($bigPack);
			echo "true**".$ray."**".$sqlString1;

	 	break;







 		// update from object 
		case 'quickJamUpdate_full':

			//$passthrough=checksession();
			$passthrough="true";

			if($passthrough=="true"){

				$dbase=$_POST['dbase'];
				$updateStr="";
				$obj=$_POST['obj'];
				$param=$_POST['param'];
				$vals=$_POST['vals'];


				$suprCol="none";
				$suprVall="none";
				$suprStrg="none";
				$updateStr="none";
				$strID="none";
				$strID=$vals;
				foreach($obj as $key => $value)
				{		
					if($suprStrg=="none"  && $key!='agape_profile_memberID')
					{
						switch($param){
							case 'incField':
								$suprStrg= $value;
								$suprVall=$key;
								$updateStr=$key."=".$value;
								$param=$_POST['field'];

							break;

							default:
								$suprStrg= "'".$value."'";
								$suprVall=$key;
								$updateStr=$key."='".$value."'";

							break;
						}
					}
					else
					{
						if($value!="" && $key!='agape_profile_memberID')
						{				
							
							switch($param){
								case 'incField':
									$suprStrg=$suprStrg.",".$value;
									$suprVall=$suprVall.",".$key;
									$updateStr=$updateStr.",".$key."=".$value;	
								break;


								default:
									$suprStrg=$suprStrg.",'".$value."'";
									$suprVall=$suprVall.",".$key;
									$updateStr=$updateStr.",".$key."='".$value."'";	
								break;
							}


										
						}
					}
				}


				$updateStr1="update ".$dbase." SET ". $updateStr." where ".$param."=".$vals;
				mysql_query($updateStr1);
				echo $updateStr1;
				//echo $param."$$".$updateStr1."$$";
				if(isset($_POST['selFunc'])){
					switch($_POST['selFunc']){
						case 'selectFunc':
							selectFunc();
							//echo "**".$param."**".$updateStr1."**";
						break;
					}
				}else{
					
				}

			}



			/*if($passthrough=="false"){

		 		$cook=$_COOKIE["agapeGUID"];
				$cook=str_replace(" ","+",$cook);
		 		echo "false**[]**";
		 	}
		*/
			
			
		break;


		case 'atomicDelete':

		 	$dbase=$_POST['dbase'];
		 	$param=$_POST['param'];
		 	$val=$_POST['val'];
		 	$str="DELETE FROM ".$dbase." WHERE ".$param." = '".$val."'";
		 	mysql_query($str);
		 	echo "deleted**".$val."**".$str;
		
		break;




		case 'quickJamUpdate_field':

			$selectField=$_POST['selectField'];
			$dbase=$_POST['dbase'];
			$selectParam=$_POST['selectParam'];
			$issuesID=$_POST['issuesID'];
			$pullstring="select ".$selectField." from ".$dbase." where ".$selectParam." = ".$issuesID;


			$returnObj="";
			$subMiss=array();	
			$result = mysql_query($pullstring);
			$ray="none";
			$colnum = mysql_num_fields($result);
			while($row = mysql_fetch_assoc($result)) 
			{
				$returnObj=$row[$selectField];
			}

			if($returnObj=="" || $returnObj=="none"){
					$objR=$_POST['objR'];
					//$sub=json_decode($objR,true);
					$subMiss[0]=$objR;
					//print_r($subMiss);
					$ray=$subMiss;
				//echo "gift";

			}else{
				$objR=$_POST['objR'];
				//$sub=json_decode($objR,true);
				$ray=json_decode($returnObj,true);
				array_unshift($ray,$objR);
				//print_r($ray);
			}	
		
			$ray=json_encode($ray);
			$updateStr="update ".$dbase." SET ". $selectField."='".$ray."' where ".$selectParam."=".$issuesID;
			mysql_query($updateStr);


			if(isset($_POST['upFunc'])){
				switch($_POST['upFunc']){
					case 'updateFunc':
						updateFunc();
					break;
				}
			}else{
					
			}

			if(isset($_POST['selFunc'])){
				switch($_POST['selFunc']){
					case 'selectFunc':
						selectFunc();
					//echo "**".$param."**".$updateStr1."**";
					break;
				}
			}else{
					
			}

			echo "updated**".$ray."**".$updateStr;

		break;



		case 'quickJamUpdate_insert':
			$dbase=$_POST['dbase'];
			$obj=$_POST['obj'];
			$suprCol="none";
			$suprVall="none";
			$suprStrg="none";
			$obJo=$obj;
			foreach($obJo as $key => $value)
			{		
			 	if($suprStrg=="none")
		 		{
				 	$suprStrg= "'".$value."'";
				 	$suprVall=$key;
			 	}
			 	else
			 	{
				 	if($value!="")
					 {				
					 	$suprStrg=$suprStrg.",'".$value."'";
					 	$suprVall=$suprVall.",".$key;
				 	}
			 	}

			}
			$debut="insert into ".$dbase." (".$suprVall.") values (".$suprStrg.")";

			mysql_query($debut);

			if(isset($_POST['selFunc'])){
				switch($_POST['selFunc']){
					case 'selectFunc':
						selectFunc();
						//echo "**".$param."**".$updateStr1."**";
					break;
				}
			}else{
				
			}
		

		break;



		case 'candSearch':
			$dbase=$_POST['dbase'];
			$state=$_POST['state'];
			$city=$_POST['city'];
			$indx=$_POST['indx'];
			$mygender=$_POST['mygender'];
			$genderSeeking=$_POST['genderSeeking'];
			$sqlString1="select * from ".$dbase." where agape_profile_gender='".$genderSeeking."' and agape_partner_gender='".$mygender."' and agape_profile_state='".$state."' and agape_profile_city='".$city."' limit ".$indx.",25";

			$cntr=0;
			$ob2=" where agape_profile_gender='".$genderSeeking."' and agape_partner_gender='".$mygender."' and agape_profile_state='".$state."'";

		 	$bigPack="";
			$returnObj=array();	
			$result = mysql_query($sqlString1);
			$countR = mysql_num_rows($result);

			$colnum = mysql_num_fields($result);
			while($row = mysql_fetch_assoc($result)) 
			{
				$returnObj[$cntr]=array();
				for($ctr=0;$ctr<$colnum;$ctr++)
				{				
					$tag=mysql_field_name($result, $ctr);
					if($row[$tag]!='')
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


			if($countR<25){
				$sqlString3="select * from ".$dbase." ".$ob2." limit ".$indx.",25";
				$result3 = mysql_query($sqlString3);
				$colnum1 = mysql_num_fields($result3);
				$countR = mysql_num_rows($result3);
				while($row = mysql_fetch_assoc($result3)) 
				{
					$returnObj[$cntr]=array();
					for($ctr=0;$ctr<$colnum1;$ctr++)
					{				
						$tag=mysql_field_name($result3, $ctr);
						if($row[$tag]!='')
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
			}



			//$ob2=stripslashes($_POST['ob2']);
			$sqlString2="select * from ".$dbase." ".$ob2;
			$result2 = mysql_query($sqlString2);
			$bigPack['countMax'] = mysql_num_rows($result2);
						

			$bigPack['returnObj']=$returnObj;
			$bigPack['countR']=$countR;
			$ray=json_encode($bigPack);
			echo "true**".$ray."**".$sqlString1;

		break;


		case 'updateComment':
		

			$strID=$_POST['strID'];
			$param1=$_POST['param1'];
			$selectField=$_POST['selectField'];
			$dbase=$_POST['dbase'];
			
			$selectParam=$_POST['selectParam'];
			$issuesID=$_POST['issuesID'];
			$pullstring="select ".$selectField." from ".$dbase." where ".$selectParam." = ".$issuesID;
			//$dato=$_POST['dato'];
			$now=$_POST['now'];
			//echo $pullstring."**";
			$returnObj="";
			$username=$_POST['username'];	
			$subMiss=array();	
			
			$result = mysql_query($pullstring);
			$ray="none";
			$ray1="";
			$colnum = mysql_num_fields($result);
			
			while($row = mysql_fetch_assoc($result)) 
			{
				$returnObj=$row[$selectField];
			}	

				if($returnObj=="" || $returnObj=="none"){
					
					$objR=$_POST['objR'];
					$subMiss[0]=$objR;
					$ray=$subMiss;
					$replyObj = new stdClass();
					$replyObj->replyObj->replys[0]=$objR;
					$ray=json_encode($replyObj,JSON_UNESCAPED_SLASHES);

				}else{
					//echo 88;
					$objR=$_POST['objR'];
					//echo $returnObj;
					$sub=json_decode($returnObj,true);
					
					//echo 
					//echo 99;
					//$ray=json_decode($returnObj,true);
					//echo $ray;
					array_unshift($sub['replyObj']['replys'],$objR);
					$cern=json_encode($sub);
					//print_r($sub['replyObj']['replys']);
					//echo $cern;
					$returnObj=$cern;
				}
				//echo 66;
				//$ray=json_encode($ray);
				$updateStr="UPDATE ".$dbase." SET ".$selectField."='".$returnObj."' where ".$param1."=".$strID;
				mysql_query($updateStr);


				if(isset($_POST['selFunc'])){
				switch($_POST['selFunc']){
					case 'selectFunc':
						selectFunc();
					//echo "**".$param."**".$updateStr1."**";
					break;
				}
			}else{
					
			}


				echo "**updated**".$ray1."**".$pullstring."**".$updateStr."**".$returnObj;


			
				
			break;

	}



	function selectFunc(){
		$kdbase=$_POST['dbase'];
	 	$cntr=0;
	 	$returnObj=array();
		//$value=$_POST['value'];

		$kob=$_POST['kob'];

		if(isset($_POST['selDbase'])){
			switch($$_POST['selDbase']){
				case 'change':
					selectFunc();
					//echo "**".$param."**".$updateStr1."**";
				break;
			}
		}



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
					$dbase=$_POST['dbase'];
					$ob2=stripslashes($_POST['ob2']);
					$sqlString2="select * from ".$dbase." ".$ob2;
					$result2 = mysql_query($sqlString2);
					$bigPack['countMax'] = mysql_num_rows($result2);
				
				break;
			}
		}

		$bigPack['returnObj']=$returnObj;
		$bigPack['countR']=$countR;
		$ray=json_encode($bigPack);
		echo "true**".$ray."**".$sqlString1;

	}



	function updateFunc(){
		$uBase=$_POST['uBase'];
		$updateStr="";
		$obj=$_POST['obj'];
		$uParam=$_POST['uParam'];
		$uVals=$_POST['uVals'];

		$suprCol="none";
		$suprVall="none";
		$suprStrg="none";
		$updateStr="none";
		$strID="none";
		$strID=$uVals;
		foreach($obj as $key => $value)
		{		
			if($suprStrg=="none"  && $key!='agape_profile_memberID')
			{
				$suprStrg= "'".$value."'";
				$suprVall=$key;
				$updateStr=$key."='".$value."'";
			}
			else
			{
				if($value!="" && $key!='agape_profile_memberID')
				{				
					$suprStrg=$suprStrg.",'".$value."'";
					$suprVall=$suprVall.",".$key;
					$updateStr=$updateStr.",".$key."='".$value."'";				
				}
			}
		}


		$updateStr1="update ".$uBase." SET ". $updateStr." where ".$uParam."=".$uVals;
		mysql_query($updateStr1);
	}

?>