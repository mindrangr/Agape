<?php

if(isset($_POST['job'])){
	$job=$_POST['job'];

}

$dataBase=$_POST['dataBase'];
switch($dataBase){
	case 'agape':
		include("Config_files/config1.php");

	break;

	case 'agape_politics':
		include("Config_files/config1_president.php");
	break;

	case 'questions':
		include("Config_files/config1_questions.php");
	break;

	case 'agape_media':
		include("Config_files/config1_media.php");
	break;

	case 'states':
		include("Config_files/config1_states.php");
	break;

	/*case 'agape_commercial':
	
		include("Config_files/config1.php");

	break;*/
}

$loc="localhost";
//$loc="localhost:801";
// Initial function to start Ajax 

//

switch($job)
{
	
	case "update_atomic":
		echo "bustedupdate_atomic";
		$cntr=0;
		$vals=$_POST['vals'];
		$param=$_POST['param'];
		$dbase=$_POST['dbase'];
		$obJo="true";
		$obj=$_POST['obj'];
		if($obj!="none"){

		//$actual_link = "$_SERVER[HTTP_HOST]";
		//if($actual_link==$loc){
			$obJo=$obj;
		//}else{
			//$objStripped=stripslashes($obj);
			//$obJo=json_decode($objStripped,true);
		//}
		$suprCol="none";
		$suprVall="none";
		$suprStrg="none";
		$updateStr="none";
		$strID="none";
		$strID=$vals;
		foreach($obJo as $key => $value)
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


	}

		switch($param){


			case 'updateComment':



				$param1=$_POST['param1'];
				$selectField=$_POST['selectField'];
				$dbase=$_POST['dbase'];
				$selectParam=$_POST['selectParam'];
				$issuesID=$_POST['issuesID'];
				$pullstring="select ".$selectField." from ".$dbase." where ".$selectParam." = ".$issuesID;
				//$dato=$_POST['dato'];
				$now=$_POST['now'];

				$returnObj="";
				$username=$_POST['username'];	
				$subMiss=array();	
				$result = mysql_query($pullstring);
				$ray="none";
				$colnum = mysql_num_fields($result);
				while($row = mysql_fetch_assoc($result)) 
				{
					$returnObj=$row['agape_commentsCommentDataResponse'];
				}	

				if($returnObj=="" ){
					$objR=$_POST['objR'];
					//$sub=json_decode($objR,true);
					$subMiss[0]=$objR;
					$ray=$subMiss;

				}else{
					$objR=$_POST['objR'];
					//$sub=json_decode($objR,true);
					$ray=json_decode($returnObj,true);
					array_unshift($ray,$objR);
				}
				$ray=json_encode($ray);
				$updateStr="UPDATE ".$dbase." SET agape_commentsCommentDataResponse='".$ray."',agape_commentsLastComment='".$now."',agape_commentsLastComment_username='".$username."' where ".$param1."=".$strID;
				
				echo "updated**".$ray."**";


			
				
			break;

			case 'updateMediaNew':

				
				$param1=$_POST['param1'];
				$updateStr=$updateStr.", agape_media_comments_count=agape_media_comments_count+1";
				$updateStr="update ".$dbase." SET ". $updateStr." where ".$param1."=".$strID;
			break;


			case 'updatePresidentComment':

				$selectField=$_POST['selectField'];
				$dbase=$_POST['dbase'];
				$selectParam=$_POST['selectParam'];
				$issuesID=$_POST['issuesID'];
				$pullstring="select ".$selectField." from ".$dbase." where ".$selectParam." = ".$issuesID;
				$dato=$_POST['dato'];
				$returnObj="";	
				$subMiss=array();	
				$result = mysql_query($pullstring);
				$ray="none";
				$colnum = mysql_num_fields($result);
				while($row = mysql_fetch_assoc($result)) 
				{
					$returnObj=$row['president_commentsCommentDataResponse'];
				}	

				if($returnObj=="" ){
					$objR=$_POST['objR'];
					$sub=json_decode($objR,true);
					$subMiss[0]=$sub;
					$ray=$subMiss;

				}else{
					$objR=$_POST['objR'];
					$sub=json_decode($objR,true);
					$ray=json_decode($returnObj,true);
					array_unshift($ray,$sub);
				}
				$ray=json_encode($ray);
				$updateStr="update ".$dbase." SET ". $selectField."='".$ray."', president_commentsReplys=president_commentsReplys+1,president_commentsLastComment='".$dato."' where ".$selectParam."=".$issuesID;
				echo "updated**".$ray."**";




			break;

			case 'addComment':
				$field=$_POST['field'];
				$list=$field."=".$field."+1";
				$updateStr="UPDATE ".$dbase." SET ".$list." where agape_media_ID=".$strID;
			break;

			case 'thumbsUp':
				$field=$_POST['field'];
				$list=$field."=".$field."+1";
				$updateStr="UPDATE ".$dbase." SET ".$list." where agape_media_ID=".$strID;
			break;


			case 'thumbsDown':
				$field=$_POST['field'];
				$list=$field."=".$field."+1";
				$updateStr="UPDATE ".$dbase." SET ".$list." where agape_media_ID=".$strID;
			break;

			case 'president_upVotes':
				$updateStr="UPDATE ".$dbase." SET president_upVotes=president_upVotes+1 where president_ID=".$strID;
			break;

			case 'president_downVotes':
				$updateStr="UPDATE ".$dbase." SET president_downVotes=president_downVotes+1 where president_ID=".$strID;
			break;




			case 'president_commentUpVotes':
				$updateStr="UPDATE ".$dbase." SET president_commentsThumbsUp=president_commentsThumbsUp+1 where president_commentsID=".$strID;
			break;

			case 'president_commentDownVotes':
				$updateStr="UPDATE ".$dbase." SET president_commentsThumbsDown=president_commentsThumbsDown+1 where president_commentsID=".$strID;
			break;

			case 'president_IssuesDownVotes':
				$updateStr="UPDATE ".$dbase." SET 	president_issuesThumbsDown=president_issuesThumbsDown+1 where president_issuesID=".$strID;
			break;

			case 'president_IssuesUpVotes':
				$updateStr="UPDATE ".$dbase." SET president_issuesThumbsUp=president_issuesThumbsUp+1 where president_issuesID=".$strID;
			break;

			case 'president_IssuesComments':


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
					$returnObj=$row['people_issuesCommentDataResponse'];
				}	


				//$comment=$_POST['comment'];
				//$param1=$_POST['param1'];
				//$date=$_POST['dato'];
				//$username=$_POST['username'];
				//$updateStr="UPDATE ".$dbase." SET president_issuesCommentDataResponse=CONCAT('".$comment."',president_issuesCommentDataResponse),president_issuesLastComment='".$date."', president_issuesCommsCount=president_issuesCommsCount+1,president_issuesLastComment_username='".$username."' where ".$param1."=".$strID;
			break;


			case 'people_issuesThumbsUp':
				$updateStr="UPDATE ".$dbase." SET people_issuesThumbsUp=people_issuesThumbsUp+1 where president_issuesID=".$strID;
			break;


			case 'peopleCandidate_upVotes':
				$updateStr="UPDATE ".$dbase." SET peopleCandidate_upVotes=peopleCandidate_upVotes+1 where peopleCandidate_ID=".$strID;
			break;

			case 'peopleCandidate_downVotes':
				$updateStr="UPDATE ".$dbase." SET peopleCandidate_downVotes=peopleCandidate_downVotes+1 where peopleCandidate_ID=".$strID;
			break;

			case 'people_issuesThumbsDown':
				$updateStr="UPDATE ".$dbase." SET people_issuesThumbsDown=people_issuesThumbsDown+1 where president_issuesID=".$strID;
			break;


			case 'agape_vote_recordPollsUpdate':
				$param1=$_POST['param1'];
				$updateStr="UPDATE ".$dbase." SET 	agape_vote_recordPolls='".$param1."' where agape_profile_memberID=".$strID;

			break;

			

			case 'people_IssuesComments':
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
					$returnObj=$row['people_issuesCommentDataResponse'];
				}	

				if($returnObj=="" ){
					$objR=$_POST['objR'];
					$sub=json_decode($objR,true);
					$subMiss[0]=$sub;
					$ray=$subMiss;

				}else{
					$objR=$_POST['objR'];
					$sub=json_decode($objR,true);
					$ray=json_decode($returnObj,true);
					array_unshift($ray,$sub);
				}
				$ray=json_encode($ray);
				$updateStr="update ".$dbase." SET ". $selectField."='".$ray."', people_issuesCommsCount=people_issuesCommsCount+1 where ".$selectParam."=".$issuesID;
			break;


			case 'newsComments':
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
					$returnObj=$row['people_issuesCommentDataResponse'];
				}	

				if($returnObj=="" ){
					$objR=$_POST['objR'];
					$sub=json_decode($objR,true);
					$subMiss[0]=$sub;
					$ray=$subMiss;

				}else{
					$objR=$_POST['objR'];
					$sub=json_decode($objR,true);
					$ray=json_decode($returnObj,true);
					array_unshift($ray,$sub);
				}
				$ray=json_encode($ray);
				$updateStr="update ".$dbase." SET ". $selectField."='".$ray."', people_issuesCommsCount=people_issuesCommsCount+1 where ".$selectParam."=".$issuesID;
			break;

			


			default:
				$updateStr="update ".$dbase." SET ". $updateStr." where ".$param."=".$vals;
			break;



		}
		
		mysql_query($updateStr);
		echo $param."$$".$updateStr;

	break;

	case 'contactsearch_set':
		contactsearch_set();
	break;

	case 'quickInsertAtomic':
		$passthrough=checksession();


		if($passthrough=="true"){

			$dbase=$_POST['dbase'];
		$obj=$_POST['obj'];

	

		//if($actual_link==$loc){
				//$obJo=json_decode($obj,true);
				$obJo=$obj;
			//}else{
				//$objStripped=stripslashes($obj);
				//$obJo=json_decode($objStripped,true);
		//}

		$suprCol="none";
		$suprVall="none";
		$suprStrg="none";

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
		//echo $debut;
		
		mysql_query($debut);
		//echo $debut."**";

		$key=$_POST['key'];

		if($key=="true"){
			$keyField=$_POST['keyField'];
			$keydbase=$_POST['keydbase'];
			$keyColumn=$_POST['keyColumn'];
			$keyvalue=$_POST['keyvalue'];
			//$str="select ".$keyField." from ".$keydbase." where ". $keyColumn." = ". $keyvalue;
			$str="SELECT MAX(".$keyField.") as superMax FROM ".$keydbase." where ".$keyColumn."='".$keyvalue."'";
			//echo $str."**";
			$result1=mysql_query($str);
			while($row = mysql_fetch_assoc($result1)) 
			{
				echo "success**".$row["superMax"]."**".$debut."**".$str;
			}

		}


		if($key=="quickSelect"){
			selectFunc();
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

		echo $debut;
	}else{


 		$cook=$_COOKIE["agapeGUID"];
		$cook=str_replace(" ","+",$cook);
 		echo "false**[]**No session**".$cook;
	 

	}






		
		//echo $debut;

	break;




	case 'quickInsertAtomic_group':
	
		$dbase=$_POST['dbase'];
		//$param=$_POST['param'];
		//$value=$_POST['value'];
		//$start=$_POST['start'];
		$locations=$_POST['obj'];
		$orderByExt="";

		switch($dbase){
			case 'agape_comments':
				$orderByExt="ORDER BY agape_commentsLastComment desc";
			break;

			case 'president_comments':
				$orderByExt="ORDER BY president_commentsLastComment desc";
			break;

			case 'agape_media':
				$orderByExt="ORDER BY agape_media_lastComment_date desc";
			break;

			case 'agape_topics':
				$orderByExt="ORDER BY agape_media_lastComment_date desc";
			break;


			case 'agape_topics_live':
				//$orderByExt="ORDER BY agape_media_lastComment_date desc";
			break;

		}
		$leadString="insert into ".$dbase." (agape_advertisement_Industry, agape_advertisement_Image, agape_advertisement_Link,agape_advertisement_Price, agape_advertisement_Created, agape_advertisement_Contact, agape_advertisement_Type, agape_advertisement_Section, agape_advertisement_Company, agape_advertisement_Commercial_ID,	agape_advertisement_PhoneNumber, agape_advertisement_Address,  agape_advertisement_Zip,  agape_advertisement_State, agape_advertisement_City, agape_advertisement_Gender, 	agape_advertisement_Race, 	agape_advertisement_Religion, 	agape_advertisement_Politics, agape_advertisement_Education,agape_advertisement_expire,agape_advertisement_start,agape_advertisement_updated) values ";




		$passthrough=checksession();


		if($passthrough=="true"){

			$cnt=count($locations);
		
			for($y=0;$y<$cnt;$y++){
				$sqlString="";
				$sqlString=$sqlString."(";
				$q=$locations[$y]['demographics'];

				$w=explode("_", $q);
				$w1=count($w);
				//$sqlString="where state='".$w[0]."'";
				//print_r($sqlString."<br/>");

				for($e=0;$e<$w1;$e++){
					$sqlString=$sqlString."'".$w[$e]."'";
					if($e<$w1-1){
						$sqlString=$sqlString.",";
					}
				}

				$finalString=$leadString." ".$sqlString.")";

				mysql_query($finalString);
				

				

			}

		
			if(isset($_POST['selFunc'])){
				switch($_POST['selFunc']){
					case 'selectFunc':
						selectFunc();
						//echo "**".$param."**".$updateStr1."**";
					break;
				}
			}

		}


		if($passthrough=="false"){

	 		$cook=$_COOKIE["agapeGUID"];
			$cook=str_replace(" ","+",$cook);
	 		echo "false**[]**No session**".$cook;
	 	}





	break;



	case 'quickSelect_atomic':

	
		$dbase=$_POST['dbase'];
		$param=$_POST['param'];
		$value=$_POST['value'];
		$start=$_POST['start'];
		$orderByExt="";

		switch($dbase){
			case 'agape_comments':
				$orderByExt="ORDER BY agape_commentsLastComment desc";
			break;

			case 'president_comments':
				$orderByExt="ORDER BY president_commentsLastComment desc";
			break;

			case 'agape_media':
				$orderByExt="ORDER BY agape_media_lastComment_date desc";
			break;

			case 'agape_topics':
				$orderByExt="ORDER BY agape_media_lastComment_date desc";
			break;


			case 'agape_topics_live':
				//$orderByExt="ORDER BY agape_media_lastComment_date desc";
			break;

		}
		$cntr=0;
		$sqlString="select * from ".$dbase. " where ".$param."='".$value."' ".$orderByExt." limit ".$start.",25;";
		$sqlString1="select * from ".$dbase. " where ".$param."='".$value."'";
		





		if(@mysql_num_rows(mysql_query($sqlString1))<1) {
		    $returnObj=array();
		    $countR=0;
			$bigPack['returnObj']=$returnObj;
			$bigPack['countR']=$countR;
			$ray=json_encode($bigPack);
			echo "false**".$ray."**".$sqlString1;
		} else {
		    
		    $result1=mysql_query($sqlString1);
			$countR= mysql_num_rows($result1);
			$sqlType="select";
			$addr1="false";
			$bigPack="";
			$returnObj=array();	
			$result = mysql_query($sqlString);
			
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
			echo "true**".$ray."**".$sqlString1."**bustedquickSelect_atomic";
		}


			
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


	 case 'quickVerifyRecs':
	 	$dbase=$_POST['dbase'];
	 	$param=$_POST['param'];
		$value=$_POST['value'];
	 	$sqlString1="select * from ".$dbase. " where ".$param."='".$value."'";
		$result1=mysql_query($sqlString1);
		$verfif="Good";
		while($row = mysql_fetch_assoc($result1)) 
		{
			$verfif="No Good";
		}
		echo $verfif."**".$sqlString1;
	 break;



	 case 'atomic_selectAll':
	// echo "bustedatomic_selectAll";
	 	$dbase=$_POST['dbase'];
	 	$passthrough="false";
	 	switch($dbase){

	 		case 'agape_advertisements':
	 			$passthrough="true";
	 		break;

	 		case 'agape_sponsors':
	 			$passthrough="true";
	 		break;

	 		case 'agape_topics':
	 			$passthrough="true";
	 		break;

	 		case 'states':
	 			$passthrough="true";
	 		break;

	 		case 'agape_pollQuestions':
				$passthrough="true";
	 		break;

			case 'FirstLogin':
				$passthrough="true";
	 		break;

	 		case "getOnlineUsers":
	 			$passthrough="true";
	 			$dbase="agape_profile";
	 		break;

	 		case "agape_comments":
	 			$passthrough="true";
	 		break;


	 		default:

	 			$passthrough=checksession();
	 		break;


	 	}


	 	if($passthrough=="true"){


	 		$cntr=0;
		 	$returnObj=array();
			//$value=$_POST['value'];
			if(isset($_POST['ob'])){
				$ob=stripslashes($_POST['ob']);
			}else{
				$ob="";
			}
		 	$sqlString1="select * from ".$dbase." ".$ob;


		 	if($dbase=="agape_profile"){
		 		$sqlString1="select agape_profile_memberID,	agape_profile_firstname,agape_profile_lastname,agape_profile_gender,agape_profile_dateOfBirth,	agape_profile_age,agape_profile_bodyType,agape_profile_height,agape_profile_city,agape_profile_state,agape_profile_email,agape_profile_friends,agape_profile_intentions ,agape_profile_recreation, agape_profile_education,agape_profile_relationship_dist,agape_profile_political,agape_partner_political,agape_profile_children,agape_profile_description, agape_profile_partner_description,";
		 		 $sqlString1=$sqlString1."agape_profile_firstDate,agape_profile_salary,agape_profile_accountType,agape_profile_username,agape_profile_default_img,	agape_profile_religion,	agape_profile_register_date,"; 
		 		 $sqlString1=$sqlString1."agape_profile_drugs,agape_profile_alcohol,agape_partner_gender,agape_partner_age_range,agape_partner_salary,agape_partner_drugs,agape_partner_religion,agape_partner_education,"; 
		 		 $sqlString1=$sqlString1."agape_partner_opts,agape_partner_alcohol,agape_partner_children,agape_partner_bodyType,agape_profile_opts,agape_profile_race,agape_profile_fRequest,	agape_partner_race,"; 
		 		 $sqlString1=$sqlString1."agape_partner_height,	agape_profile_children_future,agape_profile_amt2Invest,agape_profile_nation,agape_profile_accountStatus,agape_friendList,agape_vote_recordThumbs,";
		 		 $sqlString1=$sqlString1."agape_vote_recordPolls,agape_vote_presidentialCandidates,agape_profile_romanceAccount,agape_profile_presidentAccount,agape_profile_presidentAccount_type,	agape_profile_commercial_Account,agape_profile_advertiseCode from ".$dbase." ".$ob;
		 	}







		 	if(isset($_POST['uniqueSQL'])){
		 		$uniqueSQL=$_POST['uniqueSQL'];
		 		$sqlString1="select ".$uniqueSQL." from ".$dbase." ".$ob;
		 	}

		 
			$result1 = mysql_query($sqlString1);
			$countR = mysql_num_rows($result1);
			if(isset($_POST['Getdetail'])){
				switch($_POST['Getdetail']){
					case 'GetCount':
						$ob2=stripslashes($_POST['ob2']);
						$sqlString2="select * from ".$dbase." ".$ob2;
						$result2 = mysql_query($sqlString2);
						$countR = mysql_num_rows($result2);
					
					break;
				}
			}



		
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
			$bigPack['returnObj']=$returnObj;
			$bigPack['countR']=$countR;
			$ray=json_encode($bigPack);
			echo "true**".$ray."**".$sqlString1;

	 	}


	 	if($passthrough=="false"){

	 		$cook=$_COOKIE["agapeGUID"];
			$cook=str_replace(" ","+",$cook);
	 		echo "false**[]**No session**".$cook;
	 	}


	 	

	 break;


	  case 'atomic_selectAll1':
	  $dbase=$_POST['dbase'];
	 	$passthrough="false";
	 	switch($dbase){

	 		case 'agape_advertisements':
	 			$passthrough="true";
	 		break;



	 		case 'agape_topics':
	 			$passthrough="true";
	 		break;

	 		case 'states':
	 			$passthrough="true";
	 		break;

	 		case 'agape_pollQuestions':
				$passthrough="true";
	 		break;

			case 'FirstLogin':
				$passthrough="true";
	 		break;

	 		case 'getOnlineUsers':
				$passthrough="true";
				$dbase="agape_profile";
	 		break;


	 		default:

	 			$passthrough=checksession();
	 			
	 		break;


	 	}
	 	if($dbase=="agape_profile"){
	 		echo $passthrough;
	 	}
	  	echo 9999999;

	  break;

	 case 'login':

	 	

	 	$dbase=$_POST['dbase'];
	 	$ob=$_POST['ob'];
	 	$cntr=0;
	 	$returnObj=array();


	 	$sqlString1="select agape_profile_memberID,	agape_profile_firstname,agape_profile_lastname,agape_profile_gender,agape_profile_dateOfBirth,	agape_profile_age,agape_profile_bodyType,agape_profile_height,agape_profile_city,agape_profile_state,agape_profile_email,agape_profile_friends,agape_profile_intentions ,agape_profile_recreation, agape_profile_education,agape_profile_relationship_dist,agape_profile_political,agape_partner_political,agape_profile_children,agape_profile_description, agape_profile_partner_description,";
	 		 $sqlString1=$sqlString1."agape_profile_firstDate,agape_profile_salary,agape_profile_accountType,agape_profile_username,agape_profile_default_img,	agape_profile_religion,	agape_profile_register_date,"; 
	 		 $sqlString1=$sqlString1."agape_profile_drugs,agape_profile_alcohol,agape_partner_gender,agape_partner_age_range,agape_partner_salary,agape_partner_drugs,agape_partner_religion,agape_partner_education,"; 
	 		 $sqlString1=$sqlString1."agape_partner_opts,agape_partner_alcohol,agape_partner_children,agape_partner_bodyType,agape_profile_opts,agape_profile_race,agape_profile_fRequest,	agape_partner_race,"; 
	 		 $sqlString1=$sqlString1."agape_partner_height,	agape_profile_children_future,agape_profile_amt2Invest,agape_profile_nation,agape_profile_accountStatus,agape_friendList,agape_vote_recordThumbs,";
	 		 $sqlString1=$sqlString1."agape_vote_recordPolls,agape_vote_presidentialCandidates,agape_profile_romanceAccount,agape_profile_presidentAccount,agape_profile_presidentAccount_type,	agape_profile_commercial_Account,agape_profile_advertiseCode from ".$dbase." ".$ob;


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

		//$dt=date("Y:m:d:h:i:s");
		//$key=$returnObj[0]['agape_profile_username'];
		//$c=base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $dt, MCRYPT_MODE_CBC, md5(md5($key))));

		
		//$d=str_replace("/","",$c);
		//$returnObj[0]['agape_profile_guid']=$d;
		$bigPack['returnObj']=$returnObj;
		$bigPack['countR']=$countR;
		$ray=json_encode($bigPack);
		//$lk=date("Y-m-d H:i:s");

		//$sqlStrg="insert into sessiontable (sessiontable_string,sessiontable_user_ID,sessiontable_expires) values ('".$d."','".$returnObj[0]['agape_profile_memberID']."','".$lk."')";
		
		//$insrt=mysql_query($sqlStrg);
		$logg="true";
		
		$con=mysqli_connect("localhost", "agapeAdmin", "Agape1422frg!","agape") or die(mysql_error());
		echo $logg."**".$ray."**".$sqlString1;

	 break;

	 case 'quickSelect_atomic_issuesJoin':
	 
	 	$sqlString1="SELECT * FROM issue_list LEFT JOIN presidential_issuegroup on issue_list.issue_Group = presidential_issuegroup.presidential_issueGroup_Title order by issue_list.issue_name";
		$cntr=0;

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
		$bigPack['returnObj']=$returnObj;
		$bigPack['countR']=$countR;
		$ray=json_encode($bigPack);
		echo "true**".$ray."**".$sqlString1;

	 break;


	 case 'updateVoteCount':


	 	$QID=$_POST['QID'];
	 	$addedname=$_POST['addedname'];
	 	$sqlString1="SELECT * FROM agape_pollquestions where question_ID=".$QID;
		$returnObj=array();
		$cntr=0;
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
			echo $addedname."==".$wee['answers'][$r]['param1'];
			if($addedname==$wee['answers'][$r]['param1']){

				$wee['answers'][$r]['count']=$wee['answers'][$r]['count']+1;
				//echo "spank";
			}
		}

		$wass=json_encode($wee);
		$updateStr="UPDATE agape_pollquestions SET question_reply='".$wass."' where question_ID=".$QID;
		mysql_query($updateStr);
		echo $updateStr;

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

	 case 'atomicDelete':

	 	$dbase=$_POST['dbase'];
	 	$param=$_POST['param'];
	 	$val=$_POST['val'];
	 	$str="DELETE FROM ".$dbase." WHERE ".$param." = '".$val."'";
	 	mysql_query($str);
	 	echo "deleted**".$val;
		
		break;


		case 'getFriends':
	
			$friendObj1=$_POST['par'];
			$returnObj=array();	
			$start=$_POST['start'];
			$friendObj=json_decode($friendObj1);
			$leng=count($friendObj);
			$cntr=0;
			$str="(";
			if($leng>0){
				for($i=0;$i<$leng;$i++){
					$t=",";
					if($i==$leng-1){
						$t="";
					}
					$str=$str."'".$friendObj[$i]."'".$t;
				}
				$str=$str.")";
				$sqlString= "select * from agape_profile where agape_profile_memberID in ".$str." limit ".$start.",25";
				//echo $sqlString."**";
				$result=mysql_query($sqlString);
				$colnum = mysql_num_fields($result);
				$bigPack="";
				if(!$result==""){
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
				}
				
				$sqlString1= "select * from agape_profile where agape_profile_memberID in ".$str;
				$result2 = mysql_query($sqlString1);
				$countR= mysql_num_rows($result2);
				$bigPack['countR']=$countR;

			
				$bigPack['returnObj']=$returnObj;
				$ob=json_encode($bigPack);
				echo "true**".$ob;
			}else{
				echo "no records";
			}
			
		break;

		case 'update_atomic_friendRequest':

			//update user
			$val=$_POST['val'];
			$param=$_POST['param'];
			$qstring1="select agape_profile_friends from agape_profile where agape_profile_username='".$param."'";
		
			$result = mysql_query($qstring1);
			$returnObj=array();
			
			while($row = mysql_fetch_assoc($result))
			{
				$returnObj=json_decode($row['agape_profile_friends']);
				array_push($returnObj,$val);
				$newObj=json_encode($returnObj);
			}
			$qstring2="update agape_profile set agape_profile_friends='".$newObj."' where agape_profile_username='".$param."'";
	
			mysql_query($qstring2);

			//update requestor
			$qstring3="select agape_profile_friends from agape_profile where agape_profile_memberID=".$val;
		
			$result1 = mysql_query($qstring3);
			$returnObj1=array();
			$AcceptorID=$_POST['AcceptorID'];
			while($row = mysql_fetch_assoc($result1))
			{
				$returnObj1=json_decode($row['agape_profile_friends']);
				array_push($returnObj1,$AcceptorID);
				$newObj1=json_encode($returnObj1);
			}
			$qstring4="update agape_profile set agape_profile_friends='".$newObj1."' where agape_profile_memberID=".$val;
		
			mysql_query($qstring4);

			//update friendrequest dbase
			$rQId=$_POST['rQId'];
			$dateN=$_POST['dateN'];
			$friendUsername=$_POST['friendUsername'];
			$url=$_POST['url'];
			$RequestorUrl=$_POST['RequestorUrl'];
			$qstring5="update agape_friendrequest set requestStatus='accepted' where requestID=".$rQId;
			
			mysql_query($qstring5);

			//send message to requestor
			$messg=$param." has accepted your friendship request";
			$qstring6="insert into agape_messages (agape_message,agape_message_title,agape_message_sender_username,agape_message_sender_ID,agape_message_receiver_username,agape_message_receiver_ID,agape_message_send_date,agape_message_update,agape_sender_url,agape_message_receiver_url,	agape_message_type) values ('".$messg."','Friend Request accepted','Agape Notification','Agape Notification','".$friendUsername."','".$val."','".$dateN."','".$dateN."','".$url."','".$RequestorUrl."','Agape Notification')";
			mysql_query($qstring6);
			//echo "true**".$newObj."**".$qstring1."**".$qstring2."**".$qstring3."**".$qstring4."**".$qstring5."**".$qstring6;



			echo "true**".$newObj;


		break;

		case 'atomic_unfriend':
			$param=$_POST['param'];
			$index=$_POST['index1'];
			$qstring="select agape_profile_friends from agape_profile where agape_profile_username='".$param."'";
			$trimIndex=0;
			$memberID=$_POST['memberID'];
			$result = mysql_query($qstring);
			$returnObj=array();
			$returnObj1=array();
			while($row = mysql_fetch_assoc($result))
			{
				$returnObj=json_decode($row['agape_profile_friends']);
				$len=count($returnObj);
				for($v=0;$v<$len;$v++){
					if($returnObj[$v]==$index){
						$trimIndex=$v;
					}
				}
				$returnObj=trimArray($trimIndex,$returnObj);

			}

			$qstring="update agape_profile set agape_profile_friends ='".$returnObj."'  where agape_profile_username='".$param."'";
			mysql_query($qstring);

			$qstring="select agape_profile_friends from agape_profile where agape_profile_memberID='".$index."'";
			$result = mysql_query($qstring);
			$returnObj1=array();
			while($row = mysql_fetch_assoc($result))
			{
				$returnObj1=json_decode($row['agape_profile_friends']);
				$len=count($returnObj1);
				for($v=0;$v<$len;$v++){
					if($returnObj1[$v]==$memberID){
						$trimIndex=$v;
					}
				}
				$returnObj1=trimArray($trimIndex,$returnObj1);

			}

			$qstring="update agape_profile set agape_profile_friends ='".$returnObj1."'  where agape_profile_memberID='".$index."'";
			mysql_query($qstring);

			$qstring="delete  from agape_friendrequest where requestedID='".$memberID."' and requestorID='".$index."'";
			mysql_query($qstring);

			echo $returnObj."**".$qstring;
		break;



		case 'respondToMessage':
			//$param=$_POST['param'];
			$returnObj=array();
			$treego="";
			$ObjId=$_POST['ObjId'];
			$sendDate=$_POST['sendDate'];
			$sender_uname=$_POST['sender_uname'];
			$jsonObj=$_POST['jsonObj'];
			$updateMessage_id=$_POST['updateMessage_id'];
			$qstring="select agape_message_responses from agape_messages where agape_message_ID='".$updateMessage_id."'";
			$result=mysql_query($qstring);
			while($row = mysql_fetch_assoc($result))
			{
				if($row['agape_message_responses']=='none'){
					$go=json_decode($jsonObj);

					$key="four";
					$dt=date("Y:m:d:h:i:s");
					$encoded = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $dt, MCRYPT_MODE_CBC, md5(md5($key))));
					
					$final=$ObjId."_".$encoded;
					$go->idx=$final;
					$returnObj[0]=$go;
					$treego=json_encode($returnObj);
					
					//echo $final;
				}

				if($row['agape_message_responses']!='none'){
					$key="four";
					$dt=date("Y:m:d:h:i:s");
					$encoded = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $dt, MCRYPT_MODE_CBC, md5(md5($key))));
					
					$final=$ObjId."_".$encoded;
					$strg=$row['agape_message_responses'];
					$go=json_decode($jsonObj);
					$go->idx=$final;
					$newo=json_decode($strg);
					array_push($newo, $go);
					$treego=json_encode($newo);
				}

			}

			$qstring="update agape_messages set agape_message_responses ='".$treego."', agape_message_update='".$sendDate."'  where agape_message_ID='".$updateMessage_id."'";
			mysql_query($qstring);

			$parser=$_POST['parser'];

			if($parser=="received"){
				$sqlString="select * from agape_messages where agape_message_receiver_username='".$sender_uname."'  order By agape_message_update desc limit 0,25;";
				$sqlString1="select * from agape_messages where agape_message_receiver_username='".$sender_uname."'";

			}

			if($parser=="sent"){
				$sqlString="select * from agape_messages where agape_message_sender_username='".$sender_uname."'  order By agape_message_update desc limit 0,25;";
				$sqlString1="select * from agape_messages where agape_message_sender_username='".$sender_uname."'";
			}

			
			$result=mysql_query($sqlString);
			$cntr=0;	
			$colnum = mysql_num_fields($result);
				$bigPack="";
				if(!$result==""){
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
				}
				
				
				$result2 = mysql_query($sqlString1);
				$countR= mysql_num_rows($result2);
				$bigPack['countR']=$countR;

			
				$bigPack['returnObj']=$returnObj;
				$ob=json_encode($bigPack);
				echo "true**".$ob;



		break;


		case 'removeFile':
			$file=$_POST['file'];
			unlink($file);
			echo "successful deletion";
		break;



		case 'openIncrease':
				$param1=$_POST['param1'];
				$selectParam=$_POST['selectParam'];
				$dbase=$_POST['dbase'];
				$index=$_POST['index'];
				$uname=$_POST['uname'];
				$updateDateField=$_POST['updateDateField'];
				$agapeUpdatedByField=$_POST['agapeUpdatedByField'];
				$updatedate=$_POST['updatedate'];


				$updateStr="UPDATE ".$dbase." SET ".$param1."=".$param1."+1, ".$agapeUpdatedByField."='".$uname."', ".$updateDateField."='".$updatedate."' where ".$selectParam."=".$index;
				mysql_query($updateStr);

				$sqlString="Select ".$param1." from ".$dbase." where ".$selectParam."=".$index;
				$val="0";
				$result=mysql_query($sqlString);
				if(!$result==""){
					while($row = mysql_fetch_assoc($result))
					{
						$val=$row[$param1];
					}

				}

				echo "successful increase**".$val."**".$updateStr;
			break;


			case 'openAddComment':

				$selectField=$_POST['selectField'];
				$dbase=$_POST['dbase'];
				$selectParam=$_POST['selectParam'];
				$fieldIndex=$_POST['fieldIndex'];
				$countField=$_POST['countField'];

				$pullstring="select * from ".$dbase." where ".$selectParam." = ".$fieldIndex;
				
				$returnObj="";	
				$subMiss=array();	
				$result = mysql_query($pullstring);
				$ray="none";
				$colnum = mysql_num_fields($result);
				while($row = mysql_fetch_assoc($result)) 
				{
					//$returnObj=$row[$selectField];
					
					for($ctr=0;$ctr<$colnum;$ctr++)
					{				
						$tag=mysql_field_name($result, $ctr);
						if($row[$tag]!='')
						{
							$returnObj[$tag] = $row[$tag];					
						}
						else
						{		
							$returnObj[$tag] = 'none';							
						}				
					}			
						
				}	

				echo $pullstring."*selected original*";

				if($returnObj[$selectField]==""){
					
					$objR=$_POST['objR'];
					$sub=json_decode($objR,true);
					$subMiss[0]=$sub;
					$ray=$subMiss;
					$ray=json_encode($ray);

					$updateStr="update ".$dbase." SET ". $selectField."='".$ray."', ".$countField."=".$countField."+1 where ".$selectParam."=".$fieldIndex;
					mysql_query($updateStr);

					echo "**".$updateStr;

				}else{
				
					$objR=$_POST['objR'];
					$sub=json_decode($objR,true);
					$ray=json_decode($returnObj[$selectField],true);
		
					$cnt=count($ray);

					if($cnt<8){
						array_unshift($ray,$sub);
						$ray=json_encode($ray);

						$updateStr="update ".$dbase." SET ". $selectField."='".$ray."', ".$countField."=".$countField."+1 where ".$selectParam."=".$fieldIndex;
						mysql_query($updateStr);

						echo "successfulelse**".$updateStr;
					}else{
						//Check to see if current value is equalt to last pagination value if yes create new table, if not get last value
						$pfield=$returnObj["agape_commentsPagination"];
						$pField=json_decode($pfield);
						$cntPFile=(count($pField)-1);

						echo $pField[$cntPFile]."==".$fieldIndex;
						if("'".$pField[$cntPFile]."'"==$fieldIndex){
							//create new field
							$suprCol="none";
							

							$keyColumn=$_POST['keyColumn'];
							$MaxColumn=$_POST['MaxColumn'];
							$commentCreator=$_POST['commentCreator'];
							$origField=$_POST['origField'];
							$ext=$_POST['ext'];


							$suprVall="none";
							$suprStrg="none";
							$sub=json_decode($objR,true);
							$subMiss[0]=$sub;
							$sub1=json_encode($subMiss);
						
							//remove comment ID property
							unset($returnObj["agape_commentsID"]);


							$returnObj["agape_commentsLastComment_username"]=$commentCreator;

							$returnObj['agape_commentsCommentDataResponse']=$sub1;
							foreach($returnObj as $key => $value)
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



							$str="SELECT MAX(".$MaxColumn.") as superMax FROM ".$dbase." where ".$keyColumn."='".$commentCreator."'";
							$result3=mysql_query($str);

							echo "uu ".$str." uu";



							$superMax="";
							while($row = mysql_fetch_assoc($result3)) 
							{
								$superMax=$row["superMax"];
							}

							$ray=$superMax."".$ext;
							

							if($ext=="_quot0"){
								array_push($pField, $superMax."".$ext);
								$fr=json_encode($pField);
								$updateStr="update ".$dbase." SET ". $selectParam ."='".$ray."', agape_commentsPagination='".$fr."', ".$countField."=".$countField."+1 where ".$MaxColumn."=".$superMax;
								mysql_query($updateStr);

								$updateStr="update agape_comments SET agape_commentsPagination='".$fr."', agape_comments_count=agape_comments_count+1 where agape_commentsSource='".$pField[0]."'";
								mysql_query($updateStr);
								

								mysql_close($con);
								include("Config_files/config1_president.php");

								echo "The fix is in";
							}else{
								$updateStr="update ".$dbase." SET ". $selectParam ."='".$ray."', ".$countField."=".$countField."+1 where ".$MaxColumn."=".$superMax;
								mysql_query($updateStr);
							}
							
							


							


							echo "**debut ".$updateStr;
							echo "you an dI";
						}else{
							//select last element in array as id
							// check count if less than amount update, if more create new field
							echo "lets check";


							$qsr="select * from agape_comments where agape_commentsSource='".$pField[$cntPFile]."'";
							$returnObj2 = array();
							$result5 = mysql_query($qsr);
							$ray="none";
							$colnum = mysql_num_fields($result5);
							while($row = mysql_fetch_assoc($result5)) 
							{
								//$returnObj=$row[$selectField];
								
								for($ctr=0;$ctr<$colnum;$ctr++)
								{				
									$tag=mysql_field_name($result5, $ctr);
									if($row[$tag]!='')
									{
										$returnObj2[$tag] = $row[$tag];					
									}
									else
									{		
										$returnObj2[$tag] = 'none';							
									}				
								}			
									
							}	

						}
						//print_r($returnObj2);

						$sub=json_decode($objR,true);

						//echo $returnObj2['agape_commentsCommentDataResponse'];

						if($returnObj2['agape_commentsCommentDataResponse']!="none"  && $returnObj2['agape_commentsCommentDataResponse']!=""){
							$parsed=json_decode($returnObj2['agape_commentsCommentDataResponse'], true);
							array_push($parsed, $sub);
							$returnObj2['agape_commentsCommentDataResponse']=json_encode($parsed);
							unset($returnObj["agape_commentsID"]);
						}
						

						
						$re="update agape_comments set agape_commentsCommentDataResponse='".$returnObj2['agape_commentsCommentDataResponse']."' where agape_commentsSource='".$pField[$cntPFile]."'";
						mysql_query($re);
						//print_r($parsed);
						echo "ssssssssssssss".$re;
						//$fieldIndex;
					
						/*$str="select *  from ".$dbase." where ".$selectParam." = ".$fieldIndex;
						echo "successfulnaaaa**".$str;

						
						$keyColumn=$_POST['keyColumn'];
						$sourceField=$_POST['sourceField'];
						$paginfield=$_POST['paginfield'];
						$result2=mysql_query($str);
						$commentCreator=$_POST['commentCreator'];
						$returnObj=array();
						$cntr1=0;	
						$colnum = mysql_num_fields($result2);
						$bigPack="";
						if(!$result2==""){
							$colnum = mysql_num_fields($result2);
							
							while($row = mysql_fetch_assoc($result2))
							{
								$returnObj[$cntr1]=array();
								for($ctr1=0;$ctr1<$colnum;$ctr1++)
								{				
									$tag=mysql_field_name($result2, $ctr1);
									if($row[$tag]!='')
									{
										$returnObj[$cntr1][$tag] = $row[$tag];					
									}
									else
									{		
										$returnObj[$cntr1][$tag] = 'none';							
									}				
								}			
								
								$cntr1=$cntr1+1;
							}
							


							
							$newObj=json_decode($returnObj[0]["agape_commentsPagination"],true);
							//unset($returnObj[0]["agape_commentsID"]);

							$returnObj[0]["agape_commentsLastComment_username"]=$commentCreator;

							$bigPack['returnObj']=$returnObj;
							$ob=json_encode($bigPack);

							
							$objR=$_POST['objR'];
							$sub=json_decode($objR,true);
							$subMiss[0]=$sub;
							$ray=$subMiss;
							$ray=json_encode($ray);
							$returnObj[0]["agape_commentsCommentDataResponse"]=$ray;
							$commentCreator=$_POST['commentCreator'];

							$suprCol="none";
							$suprVall="none";
							$suprStrg="none";

							foreach($returnObj[0] as $key => $value)
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

							echo "**".$debut;

							$str="SELECT MAX(".$selectParam.") as superMax FROM ".$dbase." where ".$keyColumn."='".$commentCreator."'";
							$result3=mysql_query($str);

							echo "**".$str;
							$superMax="";
							while($row = mysql_fetch_assoc($result3)) 
							{
								$superMax=$row["superMax"];
							}

							$q=$superMax."_quot0";
							array_push($newObj,$q);
							$nowob=json_encode($newObj);

							$updateStr="update ".$dbase." SET ". $sourceField."='".$q."', ".$countField."=".$countField."+1, ".$paginfield."='".$nowob."' where ".$selectParam." = ".$superMax;
							mysql_query($updateStr);

							echo "**".$updateStr;

							$spl=explode("_",$newObj[0]);

							$updateStr="update ".$dbase." SET ".$countField."=".$countField."+1, ".$paginfield."='".$nowob."' where ".$selectParam." = ".$spl[0];
							mysql_query($updateStr);


							$pullstring="select ".$selectField." from ".$dbase." where ".$selectParam." = ".$superMax;
							$result3=mysql_query($pullstring);



							if(!$result3==""){
								$colnum = mysql_num_fields($result3);
								$cntr2=0;
								
								while($row = mysql_fetch_assoc($result3))
								{
									$returnObj[$cntr2]=array();
									for($ctr1=0;$ctr1<$colnum;$ctr1++)
									{				
										$tag=mysql_field_name($result3, $ctr1);
										if($row[$tag]!='')
										{
											$returnObj[$cntr2][$tag] = $row[$tag];					
										}
										else
										{		
											$returnObj[$cntr2][$tag] = 'none';							
										}				
									}			
									
									$cntr2=$cntr2+1;
								}

								//$result2 = mysql_query($sqlString1);
								//$countR= mysql_num_rows($result2)

								//$bigPack['countR']=$countR;

							
								$bigPack['returnObj']=$returnObj;
								$ob=json_encode($bigPack);
								echo "true**".$ob;


								//echo $updateStr;
							}
						}*/
					
					}

					
				}
				

			break;






			case 'quickJamUpdate':
			
				$dbase=$_POST['dbase'];
				$updateStr=$_POST['updateStr'];
				$param=$_POST['param'];
				$vals=$_POST['vals'];
				//echo $updateStr."$$";
				
				$grady = str_replace("&#34;", "\"", $updateStr);
				$grady = str_replace("&#39;", "'", $grady);
				$updateStr1="update ".$dbase." SET ". $grady." where ".$param."=".$vals;
				//echo $updateStr1."**";
				mysql_query($updateStr1);
				
				/*****     You must set kob   ****/
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





			// update from object 
			case 'quickJamUpdate_full':




				$passthrough=checksession();


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


					$updateStr1="update ".$dbase." SET ". $updateStr." where ".$param."=".$vals;


					//echo "$$".$updateStr1."$$";
					mysql_query($updateStr1);
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



				if($passthrough=="false"){

			 		$cook=$_COOKIE["agapeGUID"];
					$cook=str_replace(" ","+",$cook);
			 		echo "false**[]**";
			 	}
			
				
				
			break;













			case 'quickJamUpdate_Comm':
				$dbase=$_POST['dbase'];
				$updateStr=$_POST['updateStr'];
				$param=$_POST['param'];
				$vals=$_POST['vals'];
				//echo $updateStr."$$";
				
				//$grady = str_replace("&#34;", "\"", $updateStr);
				//$grady = str_replace("&#39;", "'", $grady);
				$passthrough=checksession();


				if($passthrough=="true"){

					$updateStr1="update ".$dbase." SET ". $updateStr." where ".$param."=".$vals;
					mysql_query($updateStr1);

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

				if($passthrough=="false"){

			 		$cook=$_COOKIE["agapeGUID"];
					$cook=str_replace(" ","+",$cook);
			 		echo "false**[]**No session**".$cook;
			 	}
				
				//echo $param."$$".$updateStr1."$$";

			break;





			case 'quickJamUpdate_thumbs':
				$dbase=$_POST['dbase'];
				$updateStr=$_POST['updateStr'];
				$param=$_POST['param'];
				$vals=$_POST['vals'];
				$var=$_POST['var'];
				//echo $updateStr."$$";
				
				$grady = str_replace("&#34;", "\"", $updateStr);
				$grady = str_replace("&#39;", "'", $grady);
				$updateStr1="update ".$dbase." SET ". $grady." where ".$param."=".$vals;
				mysql_query($updateStr1);
				echo $var."$$".$updateStr1."$$";

			break;


			case 'videoUpdateComm':

				$selectField=$_POST['selectField'];
				$dbase=$_POST['dbase'];
				$issuesID=$_POST['issuesID'];
				
				$thumbs="";

				if(isset($_POST['thumbs'])){
					$thumbs=$_POST['thumbs'];

				}else{
					$thumbs="false";
				}

				$selectParam=$_POST['selectParam'];
				$pullstring="select ".$selectField." from ".$dbase." where ".$selectParam." = ".$issuesID;
				$commentID=$_POST['commentID'];
				echo $pullstring."**";
				$returnObj="";	
				$subMiss=array();	
				$result = mysql_query($pullstring);
				$ray="none";
				$colnum = mysql_num_fields($result);
				while($row = mysql_fetch_assoc($result)) 
				{
					$returnObj=$row[$selectField];
				}	


				$newObj=json_decode($returnObj,true);
				$cCount=count($newObj['VidObj']['videos']);
				for($d=0;$d<$cCount;$d++){
					if($newObj['VidObj']['videos'][$d]['id']==$commentID){

						switch($thumbs){
							case 'false':
								$lastCommentor=$_POST['lastCommentor'];
								$now=$_POST['now'];
								$commentCode=$_POST['commentCode'];
								$newObj['VidObj']['videos'][$d]['commentCount']=$newObj['VidObj']['videos'][$d]['commentCount']+1;
								$newObj['VidObj']['videos'][$d]['lastComment']=$now;
								$newObj['VidObj']['videos'][$d]['lastCommentor']=$lastCommentor;
								$newObj['VidObj']['videos'][$d]['quesSource']=$commentCode;
							break;

							case 'increase':
								$vidKey=$_POST['vidKey'];
								$newObj['VidObj']['videos'][$d][$vidKey]=$newObj['VidObj']['videos'][$d][$vidKey]+1;
							break;

							case 'VideoPeople_increaseVid':
								$lastCommentor=$_POST['lastCommentor'];
								$now=$_POST['now'];
							
								$newObj['VidObj']['videos'][$d]['commentCount']=$newObj['VidObj']['videos'][$d]['commentCount']+1;
								$newObj['VidObj']['videos'][$d]['lastComment']=$now;
								$newObj['VidObj']['videos'][$d]['lastCommentor']=$lastCommentor;
								
							break;

							case 'addNewVidComment':
								$newID=$_POST['newID'];
								$lastCommentor=$_POST['lastCommentor'];
								$now1=$_POST['now1'];
								$newObj['VidObj']['videos'][$d]['agape_commentsSource']=$newID;
								$newObj['VidObj']['videos'][$d]['commentCount']=$newObj['VidObj']['videos'][$d]['commentCount']+1;
								$newObj['VidObj']['videos'][$d]['lastComment']=$now1;
								$newObj['VidObj']['videos'][$d]['lastCommentor']=$lastCommentor;


							break;



						}

						
					}
				}
				$nowob=json_encode($newObj);
				//$returnObj
				//echo $nowob."**";
				$updateStr="update ".$dbase." SET ". $selectField."='".$nowob."' where ".$selectParam."=".$issuesID;
				mysql_query($updateStr);
				echo $returnObj."**".$nowob."**".$updateStr;



			break;


			case 'videothumbsUpdateComm':
				$pullstring="select ".$selectField." from ".$dbase." where ".$selectParam." = ".$issuesID;
				while($row = mysql_fetch_assoc($result)) 
				{
					$returnObj=$row[$selectField];
				}	

			break;

			case 'getPresidentialQuotes':

				$dbase=$_POST['dbase'];

				switch($dbase){
					case 'agape':
						include("Config_files/config1.php");

					break;

					case 'agape_politics':
						include("Config_files/config1_president.php");
					break;

					case 'questions':
						include("Config_files/config1_questions.php");
					break;

					case 'agape_media':
						include("Config_files/config1_media.php");
					break;

					case 'states':
						include("Config_files/config1_states.php");
					break;
				}

				$selectParam=$_POST['selectParam'];
				$selectIndex=$_POST['selectIndex'];
				$returnObj=array();
				$commObj=array();
				$cntr=0;
				$sqlString1="select * from ".$dbase." where ".$selectParam."='".$selectIndex."' order by president_commentsLastComment desc";
				echo $sqlString1;
				$sqlString2="none";
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
				$bigPack['returnObj']=$returnObj;
				$bigPack['countR']=$countR;
				
				//echo "true**".$ray."**".$sqlString1;

				
				$t=count($bigPack['returnObj']);

				include("Config_files/config1_media.php");
				$secCntr=0;
				for($r=0;$r<$t;$r++){
					//echo $bigPack['returnObj'][$r]['president_commentsCommentDataResponse'];
					if($bigPack['returnObj'][$r]['president_commentsCommentDataResponse']!="0"){

						$sqlString2="select * from agape_comments where agape_commentsSource='".$bigPack['returnObj'][$r]['president_commentsCommentDataResponse']."' order by agape_commentsLastComment desc";
						$result2 = mysql_query($sqlString2);
						//$countR = mysql_num_rows($result1);
						$colnum = mysql_num_fields($result2);
						while($row = mysql_fetch_assoc($result2)) 
						{
							$commObj[$r]=array();
							for($ctr=0;$ctr<$colnum;$ctr++)
							{				
								$tag=mysql_field_name($result2, $ctr);
								if($row[$tag]!="")
								{
									$commObj[$r][$tag] = $row[$tag];					
								}
								else
								{		
									$commObj[$r][$tag] = 'none';							
								}	
							}			
							$secCntr=$secCntr+1;


						}
					}else{
						$commObj[$r]['agape_commentCreator_ID']="none";
						$sqlString2="no comments";
						$secCntr=$secCntr+1;
					}
					$bigPack['comms']=$commObj;
					
				}
			
				$ray=json_encode($bigPack);
				echo $sqlString2."**".$ray;
	
			break;




	 case 'getPresidentialQuotes_new':
	 	$dbase=$_POST['dbase'];
	 	$cntr=0;
	 	$returnObj=array();
		//$value=$_POST['value'];
		if(isset($_POST['ob'])){
			$ob=stripslashes($_POST['ob']);
		}else{
			$ob="";
		}
	 	$sqlString1="select * from ".$dbase." ".$ob;
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


		for($j=0;$j<$cntr;$j++){
			//echo "---".$returnObj[$j]['agape_commentsCommentDataResponse']."----";

			if(isset($returnObj[$j]['president_commentsCommentDataResponse'])){
				//alert($returnObj[$j]['president_commentsCommentDataResponse'])
				if($returnObj[$j]['president_commentsCommentDataResponse']!="none"){
					$tre="where agape_commentsSource='".$returnObj[$j]['president_commentsCommentDataResponse']."' order by agape_commentsLastComment desc";
					

					$g=selectFunc_total("agape_comments",$tre);
					$returnObj[$j]['comms']=$g;
					//echo $g;
				}else{
					
				}

			}else{
				echo "not ticket";
			}

		}

		$bigPack['returnObj']=$returnObj;
		$bigPack['countR']=$countR;
		$ray=json_encode($bigPack);
		echo "true**".$ray."**".$sqlString1;

	 break;



	 case 'quotesAddCom':
	 		$val=$_POST['val'];
			$param=$_POST['param'];
			$lComment=$_POST['lComment'];
			$lusername=$_POST['lusername'];
			$dbase=$_POST['dbase'];
			
			$addType=$_POST['addType'];

			
			$qstring1="select * from ".$dbase." where agape_commentsID=".$param;
		//echo $qstring1."**";
			$result = mysql_query($qstring1);
			$returnObj=array();
			$uiObj="";
			//echo $qstring1."**";			
			while($row = mysql_fetch_assoc($result))
			{
				//echo $row['agape_commentsCommentDataResponse']."**";
				if($row['agape_commentsCommentDataResponse']!="none"){
					$returnObj=json_decode($row['agape_commentsCommentDataResponse'],true);
				}else{
					$returnObj['replyObj']=array();
					$returnObj['replyObj']['replys']=array();
				}
				
			}
			//echo $qstring1."%%";
			//$w=array_slice($returnObj['replyObj']['replys'], 0, 2);
			
			switch($addType){

				case "AddAfter":
					$chkId=$_POST['chkId'];
					$t=count($returnObj['replyObj']['replys']);
					$t1="";
					for($r=0;$r<$t;$r++){
						if($returnObj['replyObj']['replys'][$r]['agape_replyID']==$chkId){
							$t1=$r;
						}
					}

					$w=array_slice($returnObj['replyObj']['replys'], 0, $t1+1);

					$w1=array_slice($returnObj['replyObj']['replys'], $t1+1, $t-1);

					array_push($w,$val);

					$w3=array_merge($w,$w1);
				
					$returnObj['replyObj']['replys']=$w3;
				break;


				case "AddNew":

					array_unshift($returnObj['replyObj']['replys'],$val);

				break;
			}

			$uiObj=json_encode($returnObj);
			$qstring2="update ".$dbase." set agape_commentsCommentDataResponse='".$uiObj."',agape_comments_count=agape_comments_count+1, agape_commentsLastComment='".$lComment."',	agape_commentsLastComment_username='".$lusername."' where agape_commentsID=".$param;
	
			mysql_query($qstring2);
			

			if(isset($_POST['selFunc'])){
				switch($_POST['selFunc']){
					case 'selectFunc':
						selectFunc();
					break;
				}
			}else{
				//echo "nada";
			}


	 break;
   
   
   
   case 'mainArt_staffThumbs':
      $dbase=$_POST['dbase'];
      $param=$_POST['param'];
      $vals=$_POST['vals'];
      $id1=$_POST['id1'];
      $direction=$_POST['direction'];
      $lastdate=$_POST['lastdate'];
      $kob="where agape_media_ID=".$vals;
      $bp=selectFunc_return($dbase,$kob);
      $mainArt=json_decode($bp['returnObj'][0]['agape_media_content'],true);
      $index=count($mainArt['mainArticle']['staff']);
      $indexH=0;
      for($t=0;$t<$index;$t++){
      	if($id1==$mainArt['mainArticle']['staff'][$t]['id']){
      		if($direction=='thumbsUp'){
      			$mainArt['mainArticle']['staff'][$t]['thumbsUp']=$mainArt['mainArticle']['staff'][$t]['thumbsUp']+1;
      		}
      		if($direction=='thumbsDown'){
      			$mainArt['mainArticle']['staff'][$t]['thumbsDown']=$mainArt['mainArticle']['staff'][$t]['thumbsDown']+1;
      		}
      		
      		$indexH=$t;
      	}

      }

      $newVal=array();
      $ray=json_encode($bp);
	  $newVal['mainArticle']=$mainArt['mainArticle'];
	  $nStrgVal=json_encode($newVal);
      $ustring="agape_media_content='".$nStrgVal."',agape_media_lastComment_date='".$lastdate."'";
      $j=quickJamUpdate_func($dbase,$ustring,$param,$vals);
      $bp=selectFunc_return($dbase,$kob);
      $bp['index']=$indexH;
      $cp=json_encode($bp);
      echo "true**".$cp;
   break;


   case 'mainArt_vidThumbs':
      $dbase=$_POST['dbase'];
      $param="agape_media_ID";
      $vals=$_POST['vals'];
      $id1=$_POST['id1'];
      $direction=$_POST['direction'];

    
      $lastdate=$_POST['lastdate'];
      $kob="where agape_media_ID=".$vals;
      $bp=selectFunc_return($dbase,$kob);
      $mainArt=json_decode($bp['returnObj'][0]['agape_media_content'],true);
      $index=count($mainArt['mainArticle']['videoObj']);

      $indexH=0;
      for($t=0;$t<$index;$t++){
      	if($id1==$mainArt['mainArticle']['videoObj'][$t]['id']){
      		if($direction=='thumbsUp'){
      			$mainArt['mainArticle']['videoObj'][$t]['upvotes']=$mainArt['mainArticle']['videoObj'][$t]['upvotes']+1;
      			
      		}
      		if($direction=='thumbsDown'){
      			$mainArt['mainArticle']['videoObj'][$t]['downvotes']=$mainArt['mainArticle']['videoObj'][$t]['downvotes']+1;
      		}
      		
      		$indexH=$t;
      	}

      }

      $newVal=array();
      $ray=json_encode($bp);
	  $newVal['mainArticle']=$mainArt['mainArticle'];
	  $nStrgVal=json_encode($newVal);
      $ustring="agape_media_content='".$nStrgVal."',agape_media_lastComment_date='".$lastdate."'";
      $j=quickJamUpdate_func($dbase,$ustring,$param,$vals);
      $bp=selectFunc_return($dbase,$kob);
      $bp['index']=$indexH;
      $cp=json_encode($bp);
      echo "true**".$cp;
   break;
   
   
   case 'f25searches':
   		$state=$_POST['state'];
   		$city=$_POST['city'];
   		$gender=$_POST['gender'];
		$memberID=$_POST['memberID'];
		$myGender=$_POST['myGender'];
		$lim=$_POST['lim'];
		$pGender=$gender;
		$returnObj=array();
		$gotValue="false";
		if($gender=="either"){
			$gender="";
		}else{
			$gender=" and agape_profile_gender='".$gender."'";
		}
   		$cntr=0;
    	$sqlString1="select * from ".$state." where  agape_profile_city='".$city."' ".$gender." and agape_profile_memberID!=".$memberID." and agape_partner_gender='".$myGender."' limit ".$lim.",25";
    	$sqlString2="select * from ".$state." where  agape_profile_city='".$city."' ".$gender." and agape_profile_memberID!=".$memberID." and agape_partner_gender='".$myGender."'";
    	$mondat=array();
    	$mondat[0]['state']=$state;
    	$mondat[0]['city']=$city;
    	$mondat[0]['myGender']=$myGender;
    	$mondat[0]['gender']=$pGender;


    	//echo $sqlString1;
    	$result1 = mysql_query($sqlString1);
    	$result2 = mysql_query($sqlString2);
    	
    	
		$countR = mysql_num_rows($result2);
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
			$gotValue="true";		
			$cntr=$cntr+1;
		}

		if($cntr<25){


			$j=$cntr;
			$g=25-$cntr;
			
	    	$sqlString1="select * from ".$state." where  agape_profile_memberID!=".$memberID."".$gender." and agape_partner_gender='".$myGender."' limit ".$lim.",25";
	    	$sqlString2="select * from ".$state." where  agape_profile_memberID!=".$memberID."".$gender." and agape_partner_gender='".$myGender."'";
	    	//echo $sqlString1;
	    	$result1 = mysql_query($sqlString1);
	    	$result2 = mysql_query($sqlString2);
			$countR = mysql_num_rows($result2);
			$colnum = mysql_num_fields($result1);
			$mondat=array();
	    	$mondat[0]['state']=$state;
	    	$mondat[0]['myGender']=$myGender;
	    	$mondat[0]['gender']=$pGender;
			$cntr1=0;
			while($row = mysql_fetch_assoc($result1)) 
			{
				$returnObj[$cntr1]=array();
				for($ctr=0;$ctr<$colnum;$ctr++)
				{				
					$tag=mysql_field_name($result1, $ctr);
					if($row[$tag]!="")
					{
						$returnObj[$cntr1][$tag] = $row[$tag];					
					}
					else
					{		
						$returnObj[$cntr1][$tag] = 'none';							
					}	
				}			
				$cntr1=$cntr1+1;
				$gotValue="true";
			}

		}

		$bigPack['sql']=$sqlString1;
		$bigPack['returnObj']=$returnObj;
		$bigPack['countR']=$countR;
		$bigPack['searchparams']=$mondat;
		$ray=json_encode($bigPack);

		echo $gotValue."**".$ray."**".$sqlString1;
   
   break;




   case 'getAdvertisements':
   	//BMandW = Both men and women
   	$obj=$_POST['obj'];
   	$returnObj=array();
	$gotValue="false";
	$obJo=$obj;
	$suprCol="none";
	$suprVall="none";
	$suprStrg="none";
	$updateStr="none";
	$strID="none";
	foreach($obJo as $key => $value)
	{		
		if($suprStrg=="none"  && $key!='agape_profile_memberID')
		{
			if($value!="Not Answered" && $value!="Not Important"){
				$suprStrg= "'".$value."'";
				$suprVall=$key;
				$updateStr=$key."='".$value."'";
				$updateStr=$updateStr." || ".$key."='Any'";
			}
		}
		else
		{
			if($value!="" && $value!="" && $key!='agape_profile_memberID')
			{				
				if($value!="Not Answered" && $value!="Not Important"){
					$suprStrg=$suprStrg." && '".$value."'";
					$suprVall=$suprVall." && ".$key;
					$updateStr=$updateStr." && ".$key."='".$value."'";	
					if($key=="agape_advertisement_City"){
						$updateStr=$updateStr." || ".$key."='Any'";
					}else if($key=="agape_advertisement_State"){
						$updateStr=$updateStr." || ".$key."='National'";
					}else{
						$updateStr=$updateStr." || ".$key."='Any'";
					}
					
				}			
			}
		}
		
	}
	$updateStr="select * from agape_advertisements where ".$updateStr." and agape_advertisement_Active='true'";
	$result1 = mysql_query($updateStr);
	$countR = mysql_num_rows($result1);
	$colnum = mysql_num_fields($result1);
	$cntr1=0;
	while($row = mysql_fetch_assoc($result1)) 
	{
		$returnObj[$cntr1]=array();
		for($ctr=0;$ctr<$colnum;$ctr++)
		{				
			$tag=mysql_field_name($result1, $ctr);
			if($row[$tag]!="")
			{
				$returnObj[$cntr1][$tag] = $row[$tag];					
			}
			else
			{		
				$returnObj[$cntr1][$tag] = 'none';							
			}	
		}			
		$cntr1=$cntr1+1;
		$gotValue="true";
	}

	$bigPack['returnObj']=$returnObj;
	$bigPack['countR']=$countR;
	$ray=json_encode($bigPack);
	echo $gotValue."**".$ray."**".$updateStr;
	//echo $updateStr;
   break;



   	case 'updatePro':


	$obj=$_POST['obj'];
	$obJo=$_POST['obj'];
	$loc="localhost";
	//$loc="localhost:801";
	
	
	$suprCol="none";
	$suprVall="none";
	$suprStrg="none";
	$updateStr="none";
	$strID="none";
	foreach($obJo as $key => $value)
	{		
		if($suprStrg=="none"  && $key!='agape_profile_memberID')
		{
			$suprStrg= "'".$value."'";
			$suprVall=$key;
			
			$updateStr=$key."='".$value."'";
		}
		else
		{
			if($value!="" && $key!='agape_profile_memberID' )
			{				
				$suprStrg=$suprStrg.",'".$value."'";
				$suprVall=$suprVall.",".$key;
				$updateStr=$updateStr.",".$key."='".$value."'";				
			}/*else if($key=="agape_profile_opts" || $key=="agape_profile_recreation" ){

				$suprStrg=$suprStrg.",".$value;
				$suprVall=$suprVall.",".$key;
				$updateStr=$updateStr.",".$key."=".$value;		
				
			}*/
		}
		
		if($key=='agape_profile_memberID')
		{
			$strID=$value;		
		}
	}
	$updateStr="update agape_profile SET ". $updateStr." where agape_profile_memberID=".$strID;
	mysql_query($updateStr);
	
	
	
	// function to get latest object 
	$cntr=0;
	$qString="select * from agape_profile where agape_profile_memberID=".$strID;
	$result = mysql_query($qString);
	$colnum = mysql_num_fields($result);
	$returnObj[$cntr]="";
	$login="false";
	$member= array();
	while($row = mysql_fetch_assoc($result))
	{
		for($ctr=0;$ctr<$colnum;$ctr++)
		{
			$tag=mysql_field_name($result, $ctr);
			if($row[$tag]!='')
			{				
				$member[$tag] = $row[$tag];
			}
			else
			{		
				$member[$tag] = 'Not Answered';							
			}					
		}
		$login="true";		
		$cntr=$cntr+1;

	}	
	
	$ray=json_encode($member);
	echo $login."**".$ray."**".$updateStr;




   	break;



   	case 'getTotalCount':
   		$sql="select * from agape_profile  where agape_profile_onlineStatus='Online'";
   		$result = mysql_query($sql);
   		$colnum = mysql_num_fields($result);
   		echo $colnum;

   	break;




	}


	function trimArray($indx,$obj1){
	
		$b=array_slice($obj1,0,$indx);
		$leng=count($obj1);
		$c=array_slice($obj1,$indx+1,$leng-1);
		$d=array_merge($b,$c);
		$e=json_encode($d);
		return $e;
	}

	



	function selectFunc(){

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
		$bigPack['returnObj']=$returnObj;
		$bigPack['countR']=$countR;
		$ray=json_encode($bigPack);
		echo "true**".$ray."**".$sqlString1;


	}









		function selectFunc_return($kdbase,$kob1){

		
	 	$cntr=0;
	 	$returnObj=array();
		//$value=$_POST['value'];

		//$kob=$_POST['kob'];
		
	 	$sqlString1="select * from ".$kdbase." ".$kob1;


	 	if($kdbase=="agape_profile"){
	 		$sqlString1="select agape_profile_memberID,	agape_profile_firstname,agape_profile_lastname,agape_profile_gender,agape_profile_dateOfBirth,	agape_profile_age,agape_profile_bodyType, ";
	 		 $sqlString1=$sqlString1."agape_profile_height,agape_profile_city,agape_profile_state,agape_profile_email,agape_profile_friends,agape_profile_intentions ,agape_profile_recreation, agape_profile_education,";
			 $sqlString1=$sqlString1."agape_profile_relationship_dist,agape_profile_political,agape_partner_political,agape_profile_children,agape_profile_description, agape_profile_partner_description,";
	 		 $sqlString1=$sqlString1."agape_profile_firstDate,agape_profile_salary,agape_profile_accountType,agape_profile_username,agape_profile_default_img,	agape_profile_religion,	agape_profile_register_date,"; 
	 		 $sqlString1=$sqlString1."agape_profile_drugs,agape_profile_alcohol,agape_partner_gender,agape_partner_age_range,agape_partner_salary,agape_partner_drugs,agape_partner_religion,agape_partner_education,"; 
	 		 $sqlString1=$sqlString1."agape_partner_opts,agape_partner_alcohol,agape_partner_children,agape_partner_bodyType,agape_profile_opts,agape_profile_race,agape_profile_fRequest,	agape_partner_race,"; 
	 		 $sqlString1=$sqlString1."agape_partner_height,	agape_profile_children_future,agape_profile_amt2Invest,agape_profile_nation,agape_profile_accountStatus,agape_friendList,agape_vote_recordThumbs,";
	 		 $sqlString1=$sqlString1."agape_vote_recordPolls,agape_vote_presidentialCandidates,agape_profile_romanceAccount,agape_profile_presidentAccount,agape_profile_presidentAccount_type from ".$kdbase." ".$kob;
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
		$bigPack['returnObj']=$returnObj;
		$bigPack['countR']=$countR;
		$ray=json_encode($bigPack);
		//echo "true**".$ray."**".$sqlString1;
		return $bigPack;


	}




function quickJamUpdate_func($db,$ustring,$param,$vals){
	//$dbase=$_POST['dbase'];
	//$updateStr=$_POST['updateStr'];
	//$param=$_POST['param'];
	//$vals=$_POST['vals'];
	//$var=$_POST['var'];
	//echo $updateStr."$$";
	
	//$grady = str_replace("&#34;", "\"", $updateStr);
	//$grady = str_replace("&#39;", "'", $grady);
	$updateStr1="update ".$db." SET ". $ustring." where ".$param."=".$vals;
	//echo "$$".$updateStr1."$$";
	mysql_query($updateStr1);
	//return  "$$".$updateStr1."$$";

}


function contactsearch_set(){
	$obj=urldecode($_POST['sql']);
	
	$objCount=urldecode($_POST['sql']);
	$initRec=$_POST['initRec'];
	$initRec=$initRec*25;
	$obj=stripslashes($obj);
	$obj=$obj." limit ".$initRec.",25";
	$cntr=0;
	$returnObj=array();	
	$chkr="false";
	$objCount=stripslashes($objCount);

	$tg=explode("limit",$objCount);
	$objCount=$tg[0]. "limit ".$initRec.",25";

	$countResult = mysql_query($objCount);
	
	$result = mysql_query($objCount);
	$totResult=mysql_query($tg[0]);
	$countR= mysql_num_rows($totResult);



	if($result!=""){

		while($row = mysql_fetch_assoc($result)) 
		{
			
			$colnum = mysql_num_fields($result);
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
			$chkr="true";		
			$cntr=$cntr+1;
		}
	}

	
	$bigPack['returnObj']=$returnObj;
	$bigPack['countR']=$countR;
	$bigPack['sql']=$obj;
	$ray=json_encode($bigPack);
	echo $chkr."**".$ray."**".$objCount;
	//echo "<br/>";
	//echo $obj;
}



	function selectFunc_total($kdbase,$kob){
		if(isset($con)){
			mysql_close($con);
		}
		
		include("Config_files/config1_media.php");
		
	 	$cntr=0;
	 	$returnObj=array();
		//$value=$_POST['value'];
		if($kob){

			$kob=stripslashes($kob);

		}else{
			$kob="";
		}
	 	$sqlString1="select * from ".$kdbase." ".$kob;
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
		$bigPack1['comments']=$returnObj;
		$bigPack1['countR']=$countR;
		
		return $bigPack1;
	}



	function checksession(){
		//$uname


		$uID=$_POST['uID'];
		if(!isset($_COOKIE["agapeGUID"])) {
		    return "false";
		} else {
		   // echo "Cookie '" . $cookie_name . "' is set!<br>";
		   // echo "Value is: " . $_COOKIE[$cookie_name];
			$cook=$_COOKIE["agapeGUID"];
			$cook=str_replace(" ","+",$cook);
			$sqlString="select * from sessiontable where sessiontable_string='".$cook."' and sessiontable_user_ID='".$uID."'";
			$dbase=$_POST['dbase'];
			$res=mysql_query($sqlString);
			$countR = mysql_num_rows($res);
			if($countR>0){
				updateSessionExpiry($cook,$uID);
				 return "true";

			}else{
				 return "false";
			}

		}

	}


	function updateSessionExpiry($ck,$id){
		
		date_default_timezone_set("America/New_York");

		$newt=strtotime('+ 30 minute');
		$hewt=date("Y-m-d H:i:s",$newt);
		$sqlString="update sessiontable set sessiontable_expires='".$hewt."' where sessiontable_string='".$ck."' and sessiontable_user_ID='".$id."'";

		$res=mysql_query($sqlString);

	}







 ?>
