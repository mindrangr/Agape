<?php
	//echo 55;

	
	$param=$_POST['param'];
	$username=$_POST['username'];
	$oldUrl=$_POST['oldUrl'];
	$tel=$_FILES["upload_file"]["type"];
	
	$qa=$_FILES["upload_file"]["size"] / 1024;
	

	switch($param){
		case 'adUpLoad':
			//$path ="profileImages/workImages/pony.pdf";
	
			if($qa<1000)
			{
				//$_FILES["upload_file"]["name"];
				$path="";
				$telio=explode("/",$tel);
					
				$encrypt=getEncryption($username);
				$path ="advertiseImages/businessAds/".$encrypt.".".$telio[1];
				if($telio[1]=="gif"  || $telio[1]=="png" || $telio[1]=="jpg" || $telio[1]=="jpeg"){
					move_uploaded_file($_FILES["upload_file"]["tmp_name"], $path);
					echo "success**".$path;
					echo "**";
					if($oldUrl!="advertiseImages/AgapeAd.png"){
						unlink($oldUrl);
					}
				}else{
					
					echo "typeError**".$telio[1];
				}

				//echo $path;
			
			
			}else{
				$e=$_FILES["upload_file"]["size"]/1024;
				echo "sizeError**".$e;
			}
		break;

		}
	




	



	function getEncryption($par){
		$dt=date("Y:m:d:h:i:s");
		$encoded = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($dt), $par, MCRYPT_MODE_CBC, md5(md5($dt))));
		$encoded = str_replace("/","P",$encoded);
		$encoded = str_replace("=","",$encoded);
		return $encoded;

	}

?>