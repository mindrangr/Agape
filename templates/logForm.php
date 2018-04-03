<?php
	ob_start();
	$username=$_POST["username"];
	$password=$_POST["password"];
	include("../Config_files/config1.php");
	date_default_timezone_set('America/New_York');

	function  login($uname,$pword){

	 	$sqlString1="select * from agape_profile where agape_profile_username='".$uname."' and agape_profile_password='".$pword."'";

	 	//echo $sqlString1;
	 	$cntr=0;
	 	$returnObj=array();

 		$result1 = mysql_query($sqlString1);
		$countR = mysql_num_rows($result1);

		if($countR>0){

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
			$dt=date("Y:m:d:h:i:s");
			$key=$uname;
			$c=base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $dt, MCRYPT_MODE_CBC, md5(md5($key))));
			$d=str_replace("/","",$c);

			$returnObj[0]['agape_profile_guid']=$d;
			$bigPack['returnObj']=$returnObj;
			$bigPack['countR']=$countR;
			$ray=json_encode($bigPack);



			$global=array();


			$global['navFunc']="LoggedOut";
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
		
			$ray1=json_encode($global);


			$lk=date("Y-m-d H:i:s");
			$sqlStrg="insert into sessiontable (sessiontable_string,sessiontable_user_ID,sessiontable_expires) values ('".$d."','".$returnObj[0]['agape_profile_memberID']."','".$lk."')";
			
			$con=mysqli_connect("localhost", "agapeAdmin", "Agape1422frg!","agape") or die(mysql_error());
			if (!mysqli_query($con,$sqlStrg))
			{
			  //echo("Error description: " . mysqli_error($con));
				$errStrg=mysqli_error($con);
				if(stripos($errStrg,"Duplicate")!==false){
					// "Duplicate record<br>";
					header("location: ../community?returnVal=sessionMatch");
				}else{
					
					//echo "Correct insertion<br>";
				}

			}else{
				$insrt=mysqli_query($con,$sqlStrg);
				$updSqlStr="update agape_profile set agape_profile_lastLogin='".$lk."'";
				$upsrt=mysqli_query($con,$updSqlStr);
			
				header("location: ../account?returnVal=good&guid=".$d);
			}
			mysqli_close($con);
		}else{

			header("location: ../community?returnVal=Badpass");
		}

	 }

	 login($username,$password);
	  ob_end_flush();

?>

