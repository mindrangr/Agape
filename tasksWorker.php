<?php
include("Config_files/config1.php");

$job=$_POST['job'];


switch($job){

	case 'loadInfo':
		$str="SELECT * FROM agape_task order By agape_TaskExpectedDue_Date asc";
			//echo $str."**";
			 //$result1=mysql_query($str);
			$cntr=0;
			$bigPack="";
			$returnObj=array();	
			$result = mysql_query($str);
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
			echo "true**".$ray."**".$str;



	break;


	case 'insertNewtask':
		$dbase=$_POST['dbase'];

		$suprCol="none";
		$suprVall="none";
		$suprStrg="none";
		$obj=$_POST['obj'];
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
		$debut="insert into ".$dbase." (".$suprVall.") values (".$suprStrg.")";
		mysql_query($debut);

		echo $debut;
	break;


	case 'updateTaskStatus':
		$dbase=$_POST['dbase'];
		$suprCol="none";
		$suprVall="none";
		$suprStrg="none";
		$upString="none";
		$param=$_POST['param'];
		$val=$_POST['val'];
		$obj=$_POST['obj'];
		foreach($obj as $key => $value)
		{		
		 	if($upString=="none")
	 		{
			 	
			 	$upString=$key."='".$value."'";
		 	}
		 	else
		 	{
			 	if($value!="")
				 {				
				 	
				 	$upString=$upString.",".$key."='".$value."'";
			 	}
		 	}

		}
		
		$upString="update ".$dbase." set ".$upString." where ".$param."=".$val;
		echo $upString;
		mysql_query($upString);
	break;


	case 'AddNoteTask':




	break;



}








?>