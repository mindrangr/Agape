<?php
$par=$_POST['par'];
$create=$_POST['create'];
$path="none";








//echo $encoded;
 if ($_FILES["upload_file"]["error"] > 0)
   {
		echo "Error: " . $_FILES["upload_file"]["error"] . "<br>";
   }
 else
   {
		//echo $_FILES["upload_file"]["size"]/1024;

   		if($create=="true"){
			$dt=date("Y:m:d:h:i:s");
			$encoded = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($dt), $par, MCRYPT_MODE_CBC, md5(md5($dt))));
			$encoded = str_replace("/","P",$encoded);
			$encoded = str_replace("=","",$encoded);
			$tel=$_FILES["upload_file"]["type"];
					
			$telio=explode("/",$tel);
			$path ="profileImages/workImages/".$encoded.".".$telio[1];

		}else{
			//echo $path;
			$path =$_POST['oldUrl'];
			//unlink($path);
		}
		
		if(($_FILES["upload_file"]["size"] / 1024)<1000)
		{
			
			
			//move_uploaded_file($_FILES["upload_file"]["tmp_name"], "../profileImages/workImages/");
			move_uploaded_file($_FILES["upload_file"]["tmp_name"], $path);
			//echo "Upload: " . $_FILES["file"]["name"] . "<br>";
			//echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
			//echo "Stored in: " . $_FILES["file"]["tmp_name"];
			echo $path;
		}
		else
		{
		 echo "file too large";
		}
   }
 ?> 
