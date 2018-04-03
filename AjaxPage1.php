<?php
include("Config_files/config1.php");
if(isset($_GET['job']))
{
	$job=$_GET['job'];
	
}

$loc="localhost";
//$loc="localhost:801";

$gloUn="";
$gloPa=""; 
$gloDa="";
$callType="GET";
if(isset($_GET['type']))
{
	$callType=$_GET['type'];
}

// Initial function to start Ajax 
switch($job)
{
	case 'searchProjects':
		createObjSearch();
	break;
	
	case 'login':
		login("current");
		$_SESSION['member']['logged_in']="true";
	break;
	
	case 'logout':
		logout();
	break;	
	
	case 'emailChk':
		emailChk();
	break;
	
	case 'usernameChk':
		usernameChk();
	break;
	
	case 'createAccount':
		creatAccnt();
	break;
	
	case 'updatePro':
		updatePro();
	break;
	
	case 'f25searches':
		fsearches("agape_profile");
	break;
	
	case 'cityFiller':
		cityFiller();
	break;
	
	case 'contactsearch':
		contactsearch();
	break;
	
	case 'friendRequest':
		friendRequest();
	break;
	
	case 'getMessages':
		getMessages("agape_messages");		
	break;
	
	case 'getFrRequest':
		getFrRequest("agape_friendrequest");
	break;
		
	case 'viewPro':
		viewPro("agape_profile");
	break;
	
	case 'stateSearch':
		stateSearch();
	break;
	
	case 'searchDiv':
		searchDiv();
	break;
	
	case 'getBlog':
		getBlog("agape_blog_header");
	break;
	
	case 'getMessages_sent':
		getMessages_sent("agape_messages");
	break;
	
	case 'updateResponse':
		updateResponse("updateResponse");
	break;
	
	case 'readMessage':
		readMessage();
	break;
	
	case 'removeMessage':
		removeMessage();
	break;
	
	case 'quickCheck':
		quickCheck();
	break;
	
	case 'createMessage':
		createMessage();
	break;

	case 'update_Sent':
		update_Sent();
	break;

	case 'removeMessage_sent':
		removeMessage_sent();
	break;

	case 'selectAtomic':
		selectAtomic();
	break;

	case 'quickInsertAtomic':
		quickInsertAtomic();
	break;

	case 'update_atomic':
		update_atomic();
	break;

	case 'quickUpdate':
		$db=$_GET['db'];
		$fieldname=$_GET['fieldname'];
		$val=$_GET['val'];
		$param=$_GET['param'];
		$id=$_GET['id'];
		$rQId=$_GET['rQId'];
		$NextStep=$_GET['NextStep'];
		$requestorID=$_GET['requestorID'];
		
		$sqlString="update ".$db." SET ".$fieldname." ='".$val."' where ".$param."='".$id."'";
		mysql_query($sqlString);

		

		
		if($NextStep=='updateMessageRequest'){
			//$sqlString="select agape_profile_friends from agape_profiles where agape_profile_memberID='".$requestorID."'";
			//mysql_query($sqlString);


			$sqlString="update agape_friendrequest SET requestStatus ='accepted' where requestID='".$rQId."'";
			mysql_query($sqlString);

			$sqlString="select agape_profile_friends from agape_profile where agape_profile_memberID='".$requestorID."'";
			$result=mysql_query($sqlString);
			$partnerFriends="";
			if(!$result==""){
				while($row = mysql_fetch_assoc($result))
				{
					$partnerFriends=$row['agape_profile_friends'];
				}
			}
			$obJo=json_decode($partnerFriends,true);
			array_push($obJo,$id);
			$obJo1=json_encode($obJo);
			$sqlString="update agape_profile set agape_profile_friends ='".$obJo1."' where agape_profile_memberID='".$requestorID."'";
			mysql_query($sqlString);
		}

		$sqlString="select * from agape_friendrequest where requestStatus ='sent' and requestedID='".$id."' limit 0,25;";
		$result=mysql_query($sqlString);
		$colnum = mysql_num_fields($result);
		$cntr=0;
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
				
				
				$countR= mysql_num_rows($result);
				$bigPack['countR']=$countR;

			
				$bigPack['returnObj']=$returnObj;
				$ob=json_encode($bigPack);
				echo "true**".$ob;
			}
			
		

	break;

	case 'getStates':
		$ob = new getDataOj();
		$searchString="quickCheck";
		
		$ob->getTable('state_cities',$searchString,1,'quickSelect');
		$ob->echoResults();
		

	break;

	case 'quickSelect':

		$ob = new getDataOj();
		$searchString="quickSelect";
		$dbase=$_GET['dbase'];
		$param=$_GET['param'];
		$ob->getTable($dbase,$searchString,1,$param);
		$ob->echoResults();

	break;
	
	case 'quickSelect_atomic':
		quickSelect_atomic();
	break;

	case 'quickUpdate_atomic':
		quickUpdate_atomic();
	break;
	
	
	case 'contactsearch_set':
		contactsearch_set();
	break;

	case 'quickSelect_atomic_state':


		$obj=$_GET['obj'];
		$dbase=$_GET['dbase'];
		$obJo="true";
		$param=$_GET['param'];
		$actual_link = "$_SERVER[HTTP_HOST]";
		if($actual_link==$loc){
			$obJo=json_decode($obj,true);
		}else{
			$objStripped=stripslashes($obj);
			$obJo=json_decode($objStripped,true);
		}
	
	
		$suprCol="none";
		$suprVall="none";
		$suprStrg="none";
		$updateStr="none";
		$strID="none";
		foreach($obJo as $key => $value)
		{		
			if($suprStrg=="none" )
			{
				$suprStrg= "'".$value."'";
				$suprVall=$key;
				
				$updateStr=$key."='".$value."'";
			}
			else
			{
				if($value!="" )
				{				
					$suprStrg=$suprStrg.",'".$value."'";
					$suprVall=$suprVall.",".$key;
					$updateStr=$updateStr.",".$key."='".$value."'";				
				}
			}
			
			
			$strID=$obJo.agape_commentsSource;	
		}
		$updateStr="update ".$dbase." SET ". $updateStr." where "+$param+"=".$strID;
		echo $updateStr;
		//mysql_query($updateStr);



	break;
}

//update agape_messages SET agape_message_active ='false' where agape_message_ID='32134'


class getDataOj
{
	public $tablet,$sqlString,$cntr;
	public $returnObj,$obJo,$holderObj;
	var $pass;
	var $addr1="true";
	
	public function __construct()
	{
		include("Config_files/config1.php");
		$pass="none";
		
	}
	
	//$tablet = table; $param = any relavant parameter
	public function getTable($tablet,$param,$initRecs,$recordSearch)
	{		
		$cntr=0;
		$returnObj=array();		
		$this->val=$tablet;
		$sqlString="false";
		$sqlTotal="";
		$sqlType="select";
		

		$maxRecord=25;
		$low=$initRecs*25;
		
		switch($recordSearch)
		{
			case 'getMessages':
				$addr1=" limit ".$low.",".$maxRecord;
				$sqlTotal="Select * from ".$this->val." where agape_message_receiver_ID ='".$param."' and agape_message_active='true' order by agape_message_update desc";
				$sqlString=$sqlTotal." ".$addr1;
			break;
			
			case 'getMessages_sent':
				$addr1=" limit ".$low.",".$maxRecord;
				$sqlTotal="Select * from ".$this->val." where agape_message_sender_ID='".$param."' and agape_message_active='true' order by agape_message_update desc";
				$sqlString=$sqlTotal." ".$addr1;
				
			break;
			
			case 'getFrRequest':
				$addr1=" limit ".$low.",".$maxRecord;
				$sqlTotal="Select * from ".$this->val." where requestedUsername ='".$param."' and requestStatus='sent' order by requestSent  desc";
				$sqlString=$sqlTotal." ".$addr1;

			break;
			
			case 'vPro':
				$addr1="true";
				$sqlString="Select * from ".$this->val." where agape_profile_memberID ='".$param."'";
			break;
			
			case 'selectSearch':
				$sqlString="Select * from ".$this->val." where agape_profile_memberID ='".$param."'";
			break;
			
			case 'searchDiv':
				$addr1=" limit ".$low.",".$maxRecord;
				$sqlTotal="Select * from ".$this->val." where ".$param;
				
				
				$sqlString=$sqlTotal." ".$addr1;
				//echo $sqlString;
			break;
			
			
			case 'getFirst25':
				$addr1=" limit ".$low.",".$maxRecord;
				$city=$_GET['city'];
				$state=$_GET['state'];	
				$sqlTotal="Select * from ".$this->val." where agape_profile_gender ='".$param."' and agape_profile_city='".$city."' and  agape_profile_state= '".$state."'";
				
				$sqlString=$sqlTotal." ".$addr1;

				
				
			break;
			
			case 'getBlog':
				
				switch($param){
					case 'Other':
						$param="Politics";
					break;
					
					case 'Marriage':
						$param="Romance";
					break;
					
					case 'Casual Dating':
						$param="Romance";
					break;
					
					default:
						$param="Politics";
					break;
				}
				$addr1=" limit ".$low.",".$maxRecord;
				$sqlTotal="Select * from ".$this->val." where blog_group = '".$param."' order by blog_lastReplyDate desc";
				$sqlString=$sqlTotal." ".$addr1;
				
			break;
			
			
			case 'updateResponse':
			
				$updateResponseObj=$_GET['response'];

				$Sql1="select agape_message_responses from agape_messages where agape_message_ID='".$updateResponseObj['updateMessage_id']."'";
				$result = mysql_query($Sql1);
				$ResponseVal="";
				if(!$result==""){
					while($row = mysql_fetch_assoc($result))
					{
						
						$ResponseVal=$row['agape_message_responses'];
					}
				}

				if($ResponseVal!='none'){
					$ResponseVal=$updateResponseObj['jsonObj'].",".$ResponseVal;
				}else{
					$ResponseVal=$updateResponseObj['jsonObj'];
				}

				$sqlString="update agape_messages SET agape_message_responses = '".$ResponseVal."', agape_message_update  ='". $updateResponseObj['sendDate']."', agape_message_opened='Sealed' ,agape_message_active ='true' where agape_message_ID='".$updateResponseObj['updateMessage_id']."' and  agape_message_active='true' ";
				$sqlType="update";


				//$sqlString="update agape_messages SET agape_message_responses = 
				//IF (agape_message_responses='none', '".$updateResponseObj['jsonObj']."',concat('".$updateResponseObj['jsonObj']."',',',agape_message_responses)), agape_message_update  ='". $updateResponseObj['sendDate']."', agape_message_opened='Sealed' ,agape_message_active ='true'   where agape_message_ID='".$updateResponseObj['updateMessage_id']."'   and  agape_message_active='true' ";
				
				//$this->pass="update";


				$recordSearch="updateResponse";
			break;
			
			case 'readMessage':
			
				$id=$_GET['agape_message_ID'];
				$sqlString="update agape_messages SET agape_message_opened='Opened'  where agape_message_ID='".$id."'";
				$sqlType="updateReadMessage";
				$this->pass="updateReadMessage";
			break;
			
			
			case 'removeMessage':
				$id=$_GET['agape_message_ID'];
				$sqlString="update agape_messages SET agape_message_active ='false' where agape_message_ID='".$id."'";
				$sqlType="updateReadMessage";
				$this->pass="updateReadMessage";
			break;

			case 'removeMessage_sent':
				$id=$_GET['agape_message_ID'];
				$sqlString="update agape_messages SET agape_message_active ='false' where agape_message_ID='".$id."'";
				$sqlType="updateReadMessage_sent";
				$this->pass="updateReadMessage_sent";


			break;
			
			case 'quickCheck':
				$uname=$_GET['key'];
				$sqlString="select * from agape_profile where agape_profile_username = '".$uname."'";
				$addr1="true";
			break;

			case 'getStates':
				$sqlString="select state_name,state_cities from state_cities";
				$sqlType="select";
				$addr1="true";
			break;


			case 'quickUpdate':

			break;

			case 'quickSelect':

				$dbase=$_GET['dbase'];
				$sqlString="select * from ".$dbase;
				$sqlType="select";
				$addr1="false";


			break;
			
			
				
			//http://crazyxxx3dworld.com/free/enter.php?x=9377.
		}		

		$this->sqlstrng=$sqlString;

		//echo $sqlString;
		$result = mysql_query($sqlString);

		if($sqlType=="select"){
			$bigPack="";
			if(!$result==""){
				$colnum = mysql_num_fields($result);
				$this->pass="none";
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
					
					$this->pass="true";
					
				}
				
		

				if($addr1!="true")
				{
					$result2 = mysql_query($sqlTotal);
					
					$countR= mysql_num_rows($result2);
					$bigPack['countR']=$countR;
				}
				
				$bigPack['returnObj']=$returnObj;
				$this->obJo=json_encode($bigPack);	
			}

			switch($recordSearch)
				{
					case 'getMessages':
						//$sqlString="Select * from ".$this->val." where agape_message_sender_ID ='".$param."'";
						//$result1 = mysql_query($sqlString);
						//$rows1 = mysql_num_rows($result1);
						//$holderObj['rows']=$rows1;
						//$holderObj['messageObj']=$returnObj;
						//$returnObj=$holderObj;				
					break;
					
					case 'getFirst25':
					
				
						if($cntr<=25){
							$addr1=" limit ".$low.",".$maxRecord;
							
			
							
							$state=$_GET['state'];	
							$sqlString="Select * from ".$this->val." where agape_profile_gender ='".$param."' and agape_profile_state= '".$state."'";
							
							
							$result1 = mysql_query($sqlString);
							
							if($result1!="" ){
							
								$colnum = mysql_num_fields($result1);
								
								while($row = mysql_fetch_assoc($result1))
								{			
									
									if($cntr<25){
									
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
										$this->pass='true';
										$cntr=$cntr+1;
									
									}
								
								}
							}
							
							$result2 = mysql_query($sqlString);
					
							$countR= mysql_num_rows($result2);
							$bigPack['countR']=$countR;
							$bigPack['sql']=$sqlString;
							$bigPack['returnObj']=$returnObj;
							$this->obJo=json_encode($bigPack);
							
							
						}	
					break;
				}



			
		}
		if($sqlType=="update"){
			$sqlType="false";
			$ob1 = new getDataOj();
			$db = $_GET['table'];
			$updateResponseObj=$_GET['response'];
			//echo $updateResponseObj['sender_ID'];
			$ob1->getTable('agape_messages',$updateResponseObj['sender_ID'],0,$db);
			$ob1->echoResults();
		}
		
		if($sqlType=='updateReadMessage'){
			
		
		}
	}
	
	public function echoResults()
	{			
		$gregorio=$this->pass;

		if($gregorio=='true')
		{
			echo $gregorio."**".$this->obJo;
		}		
		if($gregorio=='none')
		{
			echo "false**none";
		}
		if($gregorio=='updated'){
			echo "successfully updated";
		}
		
		if($gregorio=='updateReadMessage'){
			echo $_GET['index']."**successfully updated";
		}
	}
}


function removeMessage_sent(){
	$ob = new getDataOj();
	$searchString="delete";
	$ob->getTable('agape_message',$searchString,1,'removeMessage_sent');
	$ob->echoResults();
}


function login($type1)
{	
	$username=$_GET['username'];
	$password=$_GET['password'];
	$database="agape_profile";
	$login="false";
	$cntr=0;
	$qString="select * from ".$database." where agape_profile_password='".$password."' and agape_profile_username ='".$username."'";
	$result = mysql_query($qString);
	$colnum = mysql_num_fields($result);
	$returnObj=new stdClass();
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
		$ray=json_encode($member);
		echo "true**".$ray;
		$_SESSION['member']['logged_in']="true";
	}
	
	if($cntr==0)
	{
		echo "false**none";
		$_SESSION['member']['logged_in']="false";
	}	
}

function logout()
{	
	$_SESSION['member']=null;
	session_destroy(); 
	echo "here";
}


function emailChk()
{	

	$emailAddress=$_GET['emailAddress'];
	$qString="select * from agape_profile where agape_profile_email='".$emailAddress."'";
	$result = mysql_query($qString);
	$aResults="false";
	while($row = mysql_fetch_assoc($result)) 
	{
		$aResults="true";
	}	
	echo $aResults;
}


function usernameChk()
{
	$username=$_GET['username'];
	$qString="select * from agape_profile where agape_profile_username='".$username."'";
	$result = mysql_query($qString);
	$aResults="false";
	while($row = mysql_fetch_assoc($result)) 
	{
		$aResults="true";
	}	
	echo $aResults;
}

function creatAccnt()
{
	$obj=$_GET['obj'];
	$objStripped=stripslashes($obj);
	$obJo=json_decode($objStripped,true);
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
	
	
	//echo $obJo['agape_profile_gender'];
	
	
	$defaultImg="";
	if($obJo['agape_profile_gender']=='Male')
	{
		$defaultImg="{\"defaultPic\":\"profileImages/Male-icon.png\",\"defaultPicTitle\":\"My Pics\",\"Pic1\":\"profileImages/Male-icon.png\",\"Pic1Title\":\"Untitled\",\"Pic2\":\"Untitled\",\"Pic2Title\":\"Untitled\",\"Pic3\":\"Untitled\",\"Pic3Title\":\"Untitled\",\"Pic4\":\"Untitled\",\"Pic4Title\":\"Untitled\",\"Pic5\":\"Untitled\",\"Pic5Title\":\"Untitled\",\"Pic6\":\"Untitled\",\"Pic6Title\":\"Untitled\",\"Pic7\":\"Untitled\",\"Pic7Title\":\"Untitled\"}";
	}
	else
	{
		$defaultImg="{\"defaultPic\":\"profileImages/Female-icon.png\",\"defaultPicTitle\":\"My Pics\",\"Pic1\":\"profileImages/Female-icon.png\",\"Pic1Title\":\"Untitled\",\"Pic2\":\"Untitled\",\"Pic2Title\":\"Untitled\",\"Pic3\":\"Untitled\",\"Pic3Title\":\"Untitled\",\"Pic4\":\"Untitled\",\"Pic4Title\":\"Untitled\",\"Pic5\":\"Untitled\",\"Pic5Title\":\"Untitled\",\"Pic6\":\"Untitled\",\"Pic6Title\":\"Untitled\",\"Pic7\":\"Untitled\",\"Pic7Title\":\"Untitled\"}";
	}
	
	$suprVall=$suprVall.",agape_profile_register_date,agape_profile_default_img";
	
	

	$dTime=date("Y-m-d h:i:s a", time());
	$cdTime=explode(" ",$dTime);
	$suprStrg=$suprStrg.",'".$cdTime[0]." ".$cdTime[1]."','".$defaultImg."'";
	$qString="insert into agape_profile (".$suprVall.") values (".$suprStrg.")";

	mysql_query($qString);
	
	
	$qString="select * from agape_profile where agape_profile_username ='".$obJo['agape_profile_username']."'";
	$result = mysql_query($qString);
	$aResults="false";
	$bResults="false";
	$cntr=0;
	$colnum = mysql_num_fields($result);
	while($row = mysql_fetch_assoc($result)) 
	{

		 
		$returnObj = new stdClass();
		for($ctr=0;$ctr<$colnum;$ctr++)
		{				
			$tag=mysql_field_name($result, $ctr);
			if($row[$tag]!='')
			{
				$returnObj->$tag= $row[$tag];					
			}
			else
			{		
				$returnObj->$tag = 'none';							
			}				
		}			
		$cntr=$cntr+1;
	}


	$returnObJo=json_encode($returnObj);
	//$_SESSION['member']['logged_in']="true";
	echo "true**".$returnObJo;	
	//echo $qString;
}


function createObjSearch()
{

	$query=$_GET['query'];
	$obJo=json_decode($query,true);
	$cnt = count($obJo);
	$database=$_GET['database'];
	$selectAll="false";
	$sqlString="Select * from ".$database." where ";
	$sqlString1="Select * from ".$database." where ";
	for($i=0; $i<$cnt; $i++)
	{
		$looper="column";
		$col="";
		$firstPart="";
		foreach ($obJo[$i] as $key => $value)
		{
			if($looper=="column")
			{
				$firstPart=$obJo[$i]['column'];
				$looper="value";
				$col=$obJo[$i]['column'];
			}
			else
			{
				
				if(strpos($obJo[$i]['value'],"_")!=False)
				{
					if($sqlString==$sqlString1)
					{
						$vid=explode("_",$obJo[$i]['value']);				
						$sqlString=$sqlString." ".$firstPart." > ".$vid[0]." and ".$col." < ".$vid[1];
						$looper="value";
						$selectAll="true";
					}
					else
					{
						$vid=explode("_",$obJo[$i]['value']);				
						$sqlString=$sqlString." and ".$firstPart." > ".$vid[0]." and ".$col." < ".$vid[1];
						$looper="value";
						$selectAll="true";
					}
				}
				else
				{
					if($obJo[$i]['value']!="Any")
					{
						if($sqlString==$sqlString1)
						{
							$sqlString=$sqlString." ".$firstPart." = '".$obJo[$i]['value']."'";
							$looper="value";
							$selectAll="true";
						}
						else
						{
							$sqlString=$sqlString." and ".$firstPart." = '".$obJo[$i]['value']."'";
							$looper="value";
							$selectAll="true";						
						}
					}				
				}				
			}		
		}
	}
	if($selectAll=="false")
	{
		$sqlString="Select * from ".$database;	 
	}
	 
	$cntr=0;
	$result = mysql_query($sqlString);
	$colnum = mysql_num_fields($result);
	$resultVerif="false";
	while($row = mysql_fetch_assoc($result)) 
	{
		$returnObj[$cntr]="";
		$emptytag='true';
		
		for($ctr=0;$ctr<$colnum;$ctr++)
		{			
			$tag=mysql_field_name($result, $ctr);
			if($row[$tag]!='')
			{
				$returnObj[$cntr][$tag]=$row[$tag];			
			}			
		}					
		$cntr=$cntr+1;
		$resultVerif="true";
	}
	 
	if($resultVerif=="true")
	{
		$ray=json_encode($returnObj);	
		echo $ray;
	}
	else
	{
		echo "none";	
	}
 }


 
function updatePro()
{
	$obj=$_GET['obj'];
	$obJo="true";
	$loc="localhost";
	//$loc="localhost:801";
	$actual_link = "$_SERVER[HTTP_HOST]";
	if($actual_link==$loc){
		$obJo=json_decode($obj,true);
	}else{
		$objStripped=stripslashes($obj);
		$obJo=json_decode($objStripped,true);
	}
	
	
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
			if($value!="" && $key!='agape_profile_memberID')
			{				
				$suprStrg=$suprStrg.",'".$value."'";
				$suprVall=$suprVall.",".$key;
				$updateStr=$updateStr.",".$key."='".$value."'";				
			}
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
	echo $login."**".$ray;
}

function fsearches($table)
{
    $par=$_GET['par'];
	
	$ob = new getDataOj();

	$ob->getTable($table,$par,0,'getFirst25');
	echo $ob->echoResults();

}

function contactsearch()
{
	$obj=$_GET['obj'];
	$obJo="true";
	$actual_link = "$_SERVER[HTTP_HOST]";
	//echo $actual_link;
	$contactsearchObj="true";
	if($actual_link==$loc){
		$contactsearchObj=json_decode($obj,true);
	}else{
		$objStripped=stripslashes($obj);

		$contactsearchObj=json_decode($objStripped,true);

	}
	
	$cntr=0;
	$middleText="none";
	$initRecs=$_GET["initRec"];
	foreach($contactsearchObj as $key => $value)
	{
		if($value!="" && $value!="Select" && $key!='agape_profile_age_range')
		{
			if($middleText=="none")
			{
				$middleText=$key." = '".$value."'";
			}
			else
			{
				$middleText=$middleText." and ".$key." = '".$value."'";
			}
		}
		if($key=='agape_profile_age_range'){
			$ageR=$contactsearchObj[$key];
			$nRange=explode("-",$ageR);

			$middleText=$middleText." and agape_profile_age > ".$nRange[0]." and agape_profile_age < ".$nRange[1];
		}	
	}
	
	
	$qString="select * from agape_profile where ".$middleText." order by agape_profile_firstname limit ".$initRecs.",25;";
	//echo $qString."<br>";
	$resultVerif="";
	$result = mysql_query($qString);
	$colnum = mysql_num_fields($result);

	$returnObj[$cntr]="";
	while($row = mysql_fetch_assoc($result)) 
	{
		$returnObj[$cntr]="";
		$emptytag='true';
		for($ctr=0;$ctr<$colnum;$ctr++)
		{			
			$tag=mysql_field_name($result, $ctr);
			if($row[$tag]!='')
			{
				$returnObj[$cntr][$tag]=$row[$tag];			
			}			
		}					
		$cntr=$cntr+1;
		$resultVerif="true";
		$ray=json_encode($returnObj);
		//echo "true**".$ray;
	}
	$bigPack="";
	$result2 = mysql_query($qString);
	$countR= mysql_num_rows($result2);
	$bigPack['countR']=$countR;
	$bigPack['returnObj']=$returnObj;
	$reg=json_encode($bigPack);
	
	if($resultVerif=="true"){
	echo "true**".$ray."**".$reg;
	}else{
		echo "false**No records";
	}
	
}


function cityFiller()
{
	$obj=$_GET['state'];
	$qString="select state_cities from state_cities where state_name ='".$obj."'";
	$result = mysql_query($qString);
	while($row = mysql_fetch_assoc($result)) 
	{
		echo $row['state_cities'];
	}
}

function friendRequest()
{

	$suprCol="none";
	$suprVall="none";
	$suprStrg="none";
	
	$friendObj=$_GET['friendObj'];
	$friendObj=stripslashes($friendObj);
	$contactsearchObj=json_decode($friendObj,true);
	$cntr=0;
	
	foreach($contactsearchObj as $key => $value)
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
	
	
	$suprVall=$suprVall.",requestSent";

	$dTime=date("Y-m-d h:i:s a", time());
	$cdTime=explode(" ",$dTime);
	$suprStrg=$suprStrg.",'".$cdTime[0]." ".$cdTime[1]."'";
	$qString="insert into agape_friendrequest (".$suprVall.") values (".$suprStrg.")";
	mysql_query($qString);
	echo "Your request has been sent";
}


function getMessages($table)
{
	$memberID=$_GET['memberID'];
	$start=$_GET['start'];
	$ob = new getDataOj();
	$ob->getTable($table,$memberID,$start,'getMessages');
	echo $ob->echoResults();
}

function getMessages_sent($table)
{
	$memberID=$_GET['memberID'];
	$start=$_GET['start'];
	$ob = new getDataOj();
	$ob->getTable($table,$memberID,$start,'getMessages_sent');
	echo $ob->echoResults();
}

function getFrRequest($table)
{
	$par=$_GET['par'];
	$start=$_GET['start'];
	$ob = new getDataOj();
	$ob->getTable($table,$par,$start,'getFrRequest');
	echo $ob->echoResults();
}

function viewPro($table)
{
	$par=$_GET['par'];	
	$ob = new getDataOj();
	$ob->getTable($table,$par,'none','vPro');
	echo $ob->echoResults();
}

function getBlog($table){
	$par=$_GET['par'];	
	$ob = new getDataOj();

	$ob->getTable($table,$par,1,'getBlog');
	echo $ob->echoResults();
}


function stateSearch()
{
	$cntr=0;
	$qString="select * from state_cities order by state_name";
	$returnObj=array();	
	$result = mysql_query($qString);
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
	$ray=json_encode($returnObj);
	echo $ray;
}

function searchDiv()
{
	$searchObj=$_GET['params'];

	$cntr=1;
	$searchString="";
	foreach($searchObj as $key => $value)
	{
		$searchString=$searchString.$key."='".$value."'";
		if($cntr<count($searchObj))
		{
			$searchString=$searchString." and ";
			$cntr=$cntr+1;
		}
		
	}
	
	
	
	
	$ob = new getDataOj();
	
	$ob->getTable('agape_profile',$searchString,'$start','searchDiv');
	//echo $searchString."67786";
	$ob->echoResults();
}


function updateResponse(){
	$ob = new getDataOj();
	$searchString="update";
	$ob->getTable('agape_message',$searchString,1,'updateResponse');

}

function readMessage(){
	$ob = new getDataOj();
	$searchString="update";
	$ob->getTable('agape_message',$searchString,1,'readMessage');
	$ob->echoResults();
}

function removeMessage(){
	$ob = new getDataOj();
	$searchString="delete";
	$ob->getTable('agape_message',$searchString,1,'removeMessage');
	$ob->echoResults();

}

function quickCheck(){
	$ob = new getDataOj();
	$searchString="quickCheck";
	$ob->getTable('agape_profile',$searchString,1,'quickCheck');
	$ob->echoResults();

}

function createMessage(){
	$suprCol="none";
	$suprVall="none";
	$suprStrg="none";
	
	$obj=$_GET['obj'];
	//$message=stripslashes($message);

	//$message=urldecode($message);
	//$messObj=json_decode($message,true);
	//echo "now ".$message;
	
	$cntr=0;
	
	foreach($obj as $key => $value)
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
	$qString="insert into agape_messages (".$suprVall.") values (".$suprStrg.")";
	
	mysql_query($qString);
	echo "success";
	
	
}

function update_Sent(){
	$updateResponseObj=$_GET['responseObj'];
	$cody=$_GET['jSON1'];
	$updateResponseIdObj=$updateResponseObj['updateMessage_id'];
	$Sql1="select agape_message_responses from agape_messages where agape_message_ID='".$updateResponseIdObj."'";
	$result = mysql_query($Sql1);
	$ResponseVal="";
	if($result!=""){
		while($row = mysql_fetch_assoc($result))
		{
			
			$ResponseVal=$row['agape_message_responses'];
		}
	}

	if($ResponseVal!='none'){
		$ResponseVal=$cody.",".$ResponseVal;
	}else{
		$ResponseVal=$cody;
	}

	$Sql1="update agape_messages set agape_message_responses='".$ResponseVal."', agape_message_update='".$updateResponseObj['sendDate']."'  where agape_message_ID='".$updateResponseIdObj."'";
	mysql_query($Sql1);
	$Sql1="select * from agape_messages where agape_message_sender_ID='".$updateResponseObj['agape_message_sender_ID']."' order by agape_message_update desc";
	$returnObj=array();	
	$result = mysql_query($Sql1);
	$colnum = mysql_num_fields($result);
	$countR= mysql_num_rows($result);
	$bigPack="";
	$cntr=0;
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
	echo "true**".$ray;
}

function quickSelect_atomic(){
	$dbase=$_GET['dbase'];
	$param=$_GET['param'];
	$value=$_GET['value'];
	$start=$_GET['start'];
	$cntr=0;
	$sqlString="select * from ".$dbase. " where ".$param."='".$value."' limit ".$start.",25;";
	$sqlString1="select * from ".$dbase. " where ".$param."='".$value."'";
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
	echo "true**".$ray."**".$sqlString1;
		
}

function quickSelect_atomic_state(){
	$param=$_GET['param'];
	$cntr=0;
	$returnObj=array();	
	$sqlString="select * from state_cities where state_name='".$param."'";
	
	$result = mysql_query($sqlString);
	$countR= mysql_num_rows($result);
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
	echo "true**".$ray;

}

function update_atomic(){
	$cntr=0;
	
	$obJo="true";
	
	$actual_link = "$_SERVER[HTTP_HOST]";
	if($actual_link==$loc){
		//$obJo=json_decode($obj,true);
		$obJo=$obj;
	}else{
		$objStripped=stripslashes($obj);
		$obJo=json_decode($objStripped,true);
	}
	
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
			if($value!="" && $key!='agape_profile_memberID')
			{				
				$suprStrg=$suprStrg.",'".$value."'";
				$suprVall=$suprVall.",".$key;
				$updateStr=$updateStr.",".$key."='".$value."'";				
			}
		}
		
	
		$strID=$vals;	
	}
	$updateStr="update ".$dbase." SET ". $updateStr." where ".$param."=".$strID;
	//echo 8787."<br>";
	//echo $updateStr;
	mysql_query($updateStr);
	
}

function contactsearch_set(){
	$obj=urldecode($_GET['sql']);
	
	$objCount=urldecode($_GET['sql']);
	$initRec=$_GET['initRec'];
	$initRec=$initRec*25;
	$obj=stripslashes($obj);
	$obj=$obj." limit ".$initRec.",25";
	$cntr=0;
	$returnObj=array();	
	$chkr="false";
	$objCount=stripslashes($objCount);

	

	$countResult = mysql_query($objCount);
	
	$result = mysql_query($obj);
	$countR="0";

	if($result!=""){
		while($row = mysql_fetch_assoc($result)) 
		{
			$countR= mysql_num_rows($countResult);
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
		};
	}
	
	
	$bigPack['returnObj']=$returnObj;
	$bigPack['countR']=$countR;
	$bigPack['sql']=$obj;
	$ray=json_encode($bigPack);
	echo $chkr."**".$ray."**".$objCount."**".$result;
	//echo "<br/>";
	//echo $obj;
}

function selectAtomic(){

	$cntr=0;
	$returnObj=array();	
	$param=$_GET['param'];
	$dbase=$_GET['dbase'];
	$chkr="false";
	$sqlString="select * from ".$dbase;
	
	$result = mysql_query($sqlString);
	$countR= mysql_num_rows($result);
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
		$chkr="true";		
		$cntr=$cntr+1;
	}

	$bigPack['returnObj']=$returnObj; 
	$bigPack['countR']=$countR;
	$ray=json_encode($bigPack);
	
	echo $chkr."**".$ray;
	
}


function quickInsertAtomic(){
	$dbase=$_GET['dbase'];
	$obj=$_GET['obj'];

	$objStripped=stripslashes($obj);
	$obJo=json_decode($objStripped,true);
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
	
	mysql_query($debut);
	echo "success ".$debut;
}
 ?>
