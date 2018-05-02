<?php
	ob_start();
	mysql_set_charset('utf8');
	$username=$_POST["username"];
	$password=$_POST["password"];
	include("../Config_files/config1.php");
	date_default_timezone_set('America/New_York');

	function login($uname,$pword){

	 	$sqlString1="select * from agape_profile where agape_profile_username='".$uname."' and agape_profile_password='".$pword."'";

	 	
	 	$cntr=0;
	 	$returnObj=array();
 		$result1 = mysql_query($sqlString1);
		$countR = mysql_num_rows($result1);
	
		if($countR>0){
			$global=array();
			$global['navFunc']="LoggedOut";

			$colnum = mysql_num_fields($result1);
			while($row = mysql_fetch_assoc($result1)) 
			{
				
				$returnObj[$cntr]=array();
				for($ctr=0;$ctr<$colnum;$ctr++)
				{				
					$tag=mysql_field_name($result1, $ctr);
					if($row[$tag]!="")
					{
						$returnObj[$cntr][$tag] = trim($row[$tag]);					
					}
					else
					{		
						$returnObj[$cntr][$tag] = 'none';							
					}	
				}			
				$cntr=$cntr+1;
				$global['navFunc']="LoggedIn";
			}
			$dt=date("Y:m:d:h:i:s");
			$key=$uname;
			$c=base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $dt, MCRYPT_MODE_CBC, md5(md5($key))));
			$d=str_replace("/","",$c);
			$returnObj[0]['agape_profile_guid']=$d;
			$bigPack['returnObj']=$returnObj;
			$bigPack['countR']=$countR;


			


			$global['userObj']=$returnObj[0];
			$global['sendMessage']='true';
			$global['dataHolder']="";
			$global['stateObj']="";
			$global['paginate']=0;
			$global['newsObj']=0;
			$global['candidate']= "";
			$global['searchQuery']="true";
			$global['view']="";
			$global['friendsObj']= "";
			$global['searchObj']="";
			$global['parser']="recieved";
			$global['comments']="";
			$global['lastNav']="communityTemplate.php";
			$global['fieldChk']="";
			$global['messageBox']="";
			$global['presObj']="";
			$global['peopleObj']="";
			$global['presidentialObj']="";
			$global['returnFunction_open']="none";
			$global['returnFunction_close']="none";
			
			$global['returnFunction_go']="true";

			$makeArr=json_decode($global['userObj']['agape_profile_recreation']);
			$news=makeArrayStrg($makeArr);
			//$global['userObj']['agape_profile_recreation']=$news;

			$makeArr=json_decode($global['userObj']['agape_partner_opts']);
			$news=makeArrayStrg($makeArr);
			//$global['userObj']['agape_partner_opts']=$news;

			$makeArr=json_decode($global['userObj']['agape_profile_opts']);
			$news=makeArrayStrg($makeArr);
			//$global['userObj']['agape_profile_opts']=$news;
			$ray1=json_encode($global,true);
			$lk=date("Y-m-d H:i:s");
			$sqlStrg="insert into sessiontable (sessiontable_string,sessiontable_user_ID,sessiontable_expires) values ('".$d."','".$returnObj[0]['agape_profile_memberID']."','".$lk."')";
			$con=mysqli_connect("localhost", "agapeAdmin", "Agape1422frg!","agape") or die(mysql_error());
			if (!mysqli_query($con,$sqlStrg))
			{
			  //echo("Error description: " . mysqli_error($con));
				$errStrg=mysqli_error($con);
				if(stripos($errStrg,"Duplicate")!==false){
					// "Duplicate record<br>";
					//header("location: ../community?returnVal=sessionMatch");
					//echo "wanker";
				}else{
					
					//echo "Correct insertion<br>";
				}
			}else{
				setcookie("Login", "$ray1", 0, "/");
				setcookie("burn", "$ray1", 0, "/");  
				ob_end_flush();
				$insrt=mysqli_query($con,$sqlStrg);
				$updSqlStr="update agape_profile set agape_profile_lastLogin='".$lk."'";
				$upsrt=mysqli_query($con,$updSqlStr);
				$cookie_name = "agapeGUID";
				$cookie_value = $d;
				
				//setcookie($cookie_name, $cookie_value, 0, "/"); // 86400 = 1 day
				//header("location: ../account");
			}
			mysqli_close($con);
		}else{
			//header("location: ../home?login=bad");
		}
			
	 }

	login($username,$password);
	ob_end_flush();



	function makeArrayStrg($val){
		$idx=count($val);
		$newString="[";
		for($r=0;$r<$idx;$r++){
			if($r<($idx-1)){
				$newString=$newString."\'".$val[$r]."\',";
			}else{
				$newString=$newString."\'".$val[$r]."\'";
			}

			
		}
		$newString=$newString."]";
		return $newString;
	} 

?>

