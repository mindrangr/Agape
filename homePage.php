<?php
session_start();
include("Config_files/_shared_config.php");
$aLk = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$parts = parse_url($aLk);
$loGo="false";
$cookie_name = "agapeGUID";
$seshMatch="false";
$guid="";
if(isset($parts['query'])){
	parse_str($parts['query'], $query);

	if(isset($query['guid'])){
		$yt=html_entity_decode($query['guid'], null, 'UTF-8');
		setcookie($cookie_name, $yt, 0);
		header('Location: account');
		$loGo="true";
	}

	if(isset($query['returnVal'])){

		//echo $query['returnVal'];

		if($query['returnVal']=="sessionMatch"){
			setcookie($cookie_name, "sessionMatch", 0);
			header('Location: community');

		}

		if($query['returnVal']=="Badpass"){
			setcookie($cookie_name, "Badpass", 0);
			header('Location: community');

		}

		if($query['returnVal']=="clearCookie"){
			setcookie($cookie_name, "", time()-3600);
			header('Location: community');

		}

		
	}
	//header('Location: account');
}else{
	//echo "nuttin honey";
}



if(isset($_COOKIE["agapeGUID"])) {
	$we=$_COOKIE["agapeGUID"];
	
	switch($we){
		case 'sessionMatch':
			$seshMatch="sessionMatch";
			setcookie("agapeGUID", "none", 0);
			//header('Location: community');
		break;

		case 'Badpass':
			$seshMatch="Badpass";
			setcookie("agapeGUID", "none", 0);
			//echo "<script>fademessg($('#badpasslink')[0],'Account already logged in. Log out of Agape account.');</script>";
			//header('Location: community');
		break;
	}
}



if(isset($_COOKIE["agapeGUID"])) {
	$guid=$_COOKIE["agapeGUID"];
}






//$newt->modify('+35 minutes');

//echo $newt."<br/>";


//include("Config_files/simulation.php");
//echo $actual_base;
//$headers = "From: coolpapacash@gmail.com";
//$myVarIWantToEncodeAndDecode="cheddar is better than milk; cheddar is better than milk; cheddar is better than milk; cheddar is better than milk;";
//$key="four";
//$encoded = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $myVarIWantToEncodeAndDecode, MCRYPT_MODE_CBC, md5(md5($key))));
//echo $encoded;
$email = "admin@microvestorsusa.com";
$admin_email = "mindrangr@hotmail.com";
$subject = "you got jam...";
$comment = "right homey";
  
  //send email
  //mail($admin_email, "$subject", $comment, "From:" . $email);
//if "email" variable is filled out, send email
 if (isset($_REQUEST['email']))  {
  
  //Email information
 //$admin_email = "admin@microvestorsusa.com";
  //$email = "mindrangr@hotmail.com";
 // $subject = "you got jam...";
 // $comment = "right homey";
  
  //send email
 // mail($admin_email, "$subject", $comment, "From:" . $email);
  
  //Email response
  	// $email = "admin@microvestorsusa.com";
// $admin_email = "mindrangr@hotmail.com";
// $subject = "you got jam...";
// $comment = "right homey";
  
 
//mail($admin_email, "$subject", $comment, "From:" . $email);
 // echo "Thank you for contacting us!";

}



$serverReq=explode("/", $_SERVER['REQUEST_URI']); 
$reqCnt=count($serverReq);

//echo $serverReq[$reqCnt-1];
?>
<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<html>
		<head>
			<title>Hello</title>
			<style type="text/css">
				.slidePics
				{
					border-right:solid 1px #dedede;
					width:78px;
					height:64px;
					float:left;
					background-color:#09373c;
					padding-top:2px;									
				}



				
				.siteMapLinks:active{
						color:#35b7fe;
				}

				.siteMapLinks:visited{
						color:#35b7fe;
				}

				.siteMapLinks:hover{
						color:lime;
				}
			</style>
			<script src="<?php echo $actual_base ?>/scripts/jquery-3.1.1.min.js"></script>	
			<script src="<?php echo $actual_base ?>/scripts/TweenMax.js"></script>
			<script data-main="<?php echo $actual_base ?>/scripts/main" src="<?php echo $actual_base ?>/scripts/require.js"></script>
			<script language='javascript' type='text/javascript' src="<?php echo $actual_base ?>/scripts/underscore1.52.js"></script>
			<script language='javascript' type='text/javascript' src="<?php echo $actual_base ?>/scripts/navs.js"></script>
			<script type="text/javascript" src="<?php echo $actual_base ?>/scripts/commentBoss.js"></script>
			<script type="text/javascript" src="<?php echo $actual_base ?>/scripts/jTools.js"></script>
			<script language="javascript" type="text/javascript" src="<?php echo $actual_base ?>/scripts/formFields1.js"></script>
			<script language="javascript" type="text/javascript">
		
			//Thumb validators	
			//quote_thumbs
			//article_thumbs
			//mainArt_thumbs
			//{"commentID":"1","votetype":"quote_thumbs"}
			var globalTools = new Objtools();
			//global=globalTools.create();
			//global.baseUrl='<?php echo $actual_base ?>';
			

			global=globalTools.create();
			var t = window.location.href;
			//global.baseUrl="/Sites/agape"
			if(t.search(/Development/)!=-1){
				global.baseUrl="/agape_Development"
			}

			

			/*if(sessionStorage.getItem("global")){
				var t=sessionStorage.getItem("global");
				if(t!="null"){
					t=$.parseJSON(t);
					if(t.navFunc=="LoggedIn"){
						global=t;
						globalTools.save()
					}
				}else{
					global=globalTools.create();
					globalTools.save();
				}

			}else{
				global=globalTools.create();
				globalTools.save();
			}*/

function receiveMessage(event)
{
 // if (event.origin !== "http://example.org:8080")
   // return;
	alert("yowsa")
  // ...
}



function slideUsers(){

	var elem1=$("#listUsersOnlinePage")[0];
	var height1=$("#listUsersOnlinePage").height();
	var free=$("#listUsersOnlinePage").position().top;
	var nM=parseInt(free)-200;
	var slideCheck=(0-height1);
	if(nM<slideCheck){
		nM=0
		
	
		TweenMax.to(elem1,1,{css:{top:nM}

		})

	}else{
		var bCheck="no";
		$("#upArrowUsers").show();
		var f=nM;
		if((nM-200)<slideCheck){
			var t=nM-200
			var d=t-slideCheck;
			var e=nM-d;
			bCheck="yes"
			f=e;

		}

		if(bCheck=="no"){
			TweenMax.to(elem1,1,{css:{top:f}
				
			})

		}else{
			TweenMax.to(elem1,.4,{css:{top:f}}
			
			).pause(4,  calcUsers())
			$("#upArrowUsers").hide();
			bCheck="no"
		}
	}
}


			

	function calcUsers(){
		var g=global.userListMax;
		var b=g/25
		b=parseInt(b)
		if(g%25>0){
			b=b+1;
		}
		var elem1=$("#listUsersOnlinePage")[0];
		TweenMax.to(elem1,.4,{css:{top:0}})
		if(global.userListCnt<b){
			global.userListCnt=parseInt(global.userListCnt)+1;
			getOnlineUsers(global.userListCnt)
		}else{
			getOnlineUsers(0)
		}
	}


			var advClassIndx=0;
	
				
	
			


		/** thread queue   **/

		function ThreadWheel(){
			this.connection={};
			this.connection.status="open";
			this.connection.queue=[];
			_this=this;
			this.queue = [];
			this.connection.func="";
			this.connection.openQueue=function(){
				this.status="open";
				this.CompleteQueue;
			}
			this.connection.holdQueue=function(){
				this.status="hold";
			}
			this.connection.CompleteQueue=function(){

				if(this.queue.length>0){
					
					connection.post_Obj(this.queue[0].data,this.queue[0].retCall);
				}	this.queue.shift();
			}
			this.connection.post_Obj=function(dataM,ret,url){
				
				this.func=ret;
				this.datum=dataM;
				this.queue=[];
				switch(this.status)
				{

					case 'open':
						this.holdQueue;
						$.ajax({
						url:url,
							type:'POST',
							data:dataM,
							Funk:ret,
							openQueue:this.openQueue,
							success:function(data){
								this.openQueue();
								this.Funk(data);
							}
						})	
					break;


					case 'hold':
				
						var postObj={};
						postObj.data=dataM;
						postObj.retCall=ret;

						if(this.queue.length==0){
							this.queue[0]=postObj;
						}else{
							this.queue.push(postObj)
						}
						
					break;
				}
				

			}
		}

			
	
		var threadTool = new ThreadWheel();



		$(document).ready(function(){

			
		})
					
			
			
			
			moSlide=0;
			var dasDicObj = new Array('buildPro','accountPro','messPro','searchPro');
			var colSubObj = {};
			var upSubObj = {};
			var f25Obj="";
			messageStart=0;
			var timeObj={
				fullMonthsName: ["January","February","March","April","May","June","July","August","September","October","November","December"],
				fullDay:[31,28,31,30,31,30,31,31,30,31,30,31],
				halfMonthsName: ["Jan","Feb","Mar","Apri","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],
				days:['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday']
			}
			
			window.submitForm1="true";


			

		function clearNavClasses(){
			$("#body").removeClass();
		}



	function login()
	{
		var username=$('#username').val();
		var password=$('#password').val();
		if(username!="" && password!="")	
		{	
			$("#loginForm").attr("action","templates/logForm.php").submit();
		}
		else
		{				
			if(username=="")
			{
				$('#username').css('background-color','#cccccc');		
			}
			
			if(password=="")
			{
				$('#password').css('background-color','#cccccc');
			}	
		}

	}
				

	


		var slideInterval="";
		var holdInterval="";
		var sldrIndex=2;
		var slideStart=0
		var speed=35;

		var strip, strcountry, strcity, strregion, strlatitude, strlongitude, strtimezone
		function GetUserInfo(data) {
			strip = data.host; strcountry = data.countryName; 
			strcity = data.city;
			strregion = data.region; 
			strlatitude = data.latitude; 
			strlongitude = data.longitude;
			strtimezone = data.timezone;
		}

</script>
 <!--<script type="text/javascript" src="http://smart-ip.net/geoip-json?callback=GetUserInfo"></script>-->

			<!-- frontpanelGradient1.jpg -->
</head>
	<style>

		

		.closeButton{
			color:red;
			font-weight:bold;
			font-size:16px;
			font-family:helvetica;
			border:solid 2px red;
			width:16px;
			float:right;
			padding:4px;
			text-align: center;
			background-color:#000;
			border-radius:11px;
			cursor:pointer;
		}
	
	</style>
		<!--<div  >
			<iframe id='serverConn' src="http://localhost:8080/agape/nodeServers/templates/nodeClient.html"  ></iframe>
			<div id="sent" style='border:solid 1px #000; color:lime;padding:4px; width:30px;text-align:center;position:absolute;z-index:500px;top:0px;left: 10px;'>sent</div>
		</div>-->
		<script>

/*

			 window.addEventListener('message',function(event) {
			   
			})




			var iframe = document.getElementById('serverConn').contentWindow;


			$("#sent").on('click',function(){
				alert("5")
				iframe.postMessage("message","http://localhost:8080"); //send the message and target URI
			})*/

		</script>
		<div class='lboxBackground' id="_lboxBackground" ></div>
		<div class='lboxMobileBackground' id="mobileMenuPage" style='color:#eee;'>

			<div style='color:#000;' id="mobileBack">
				

				<div id="mobileBackMenu" style='border:solid 1px #000;background-color: #000;padding-bottom: 5px;'>
					<div id="mobileBack" style="height:20px;width:100%;color:#eee;font-family: arial;padding:5px;cursor:pointer;"><-back </div>
					<div  class="newNav2_community" id="account" style='clear:both;'>
						<div class="cellButt" style='padding-top:5px;background-color: #35b7fe;' >
							<div style='float:left;width:20%'><img src="images/loginIcon.png" style='height:48px;'/></div>
							<div style='float:left;width:70%;color:#eee;text-align: center;font-size:30px;font-weight: normal;text-shadow: 2px -1px 2px #000;'>Account</div>
							<div style='clear:both;'></div><a style='display:none;' class="navigationTabs" href="<?php echo $actual_base ?>/account" >Login</a>
						</div>
					</div>


					<div  class="newNav2_community" id="community" >
						<div class="cellButt" style='padding-top:5px;' >
							<div style='float:left;width:20%'><img src="images/communityG.png" style='height:48px;'/></div>
							<div style='float:left;width:70%;color:#eee;text-align: center;font-size:30px;font-weight: normal;text-shadow: 2px -1px 2px #000;'>Community</div>
							<div style='clear:both;'></div><a style='display:none;' class="navigationTabs" href="<?php echo $actual_base ?>/romance" >Community</a>
						</div>
					</div>

				</div>

			</div>
		</div>
		<div class='lBoxMainDiv' id="_lBoxMainDiv">
			<div style='width:102%;position:relative;top:-20px;'>
				<div id="closeButton" class='closeButton'>X</div>
			</div>
			
			<div id='lBoxDiv'  style="display:none;"></div>
		</div>
		
	<div id='transBack' style='display:none;'>judah</div>
	<div id='transBack1' style='display:none;'>judah</div>
		
	<body id='body' style='margin:0px;' >

		<div id="opacback" style="position:absolute;width:100%;background-color:black;opacity:.7;z-index:4;top:0px">
		</div>

		<div class="tag" id="tag" style="position:fixed;height:50px;z-index:15;top:0px;width:100%">

			<div id='hamburger' class="clear" style='float:left;cursor:pointer;margin-left: 15px;margin-top: 10px;'>
				<div style='width:30px;height:4px;border:solid 1 #000;background-color: #eee;margin-bottom:3px;'></div>
				<div style='width:30px;height:4px;border:solid 1 #000;background-color: #eee;margin-bottom:3px;'></div>
				<div style='width:30px;height:4px;border:solid 1 #000;background-color: #eee;margin-bottom:3px;'></div>
				<div style='width:30px;height:4px;border:solid 1 #000;background-color: #eee;margin-bottom:3px;'></div>

			</div>

			<div id='mainLabel'  class="mainLabel"><span id="tag1" class='mLabel'>Welcome to the</span><span class='mLabel' style="font-family:'Great Vibes';color:lime;"> Agape </span><span class='mLabel'>Community</span></div> 




			<!--<div class="navigation" id="nav2">
				<!--<div style="display: block;" class="newNav2_community" id="Messages" onclick="changeNavNewNav('mainLBHolder','messages.html',this)">Messages</div>
				<div style="display:none;" class="newNav2_community" id="Profile" ><a class="navigationTabs" href="<?php echo $actual_base ?>/profile" >Profile</a></div>
				
				<div style="display:none;" class="newNav2_community" id="Search" ><a  class="navigationTabs" href="<?php echo $actual_base ?>/romance">Search</div>
				<div style="display:none;" class="newNav2_community" id="commercialUs"> <a  class="navigationTabs" href="<?php echo $actual_base ?>/advertise">Commercial</div>
				<div style="" class="newNav2_community cellButt" id="ContactUs" ><a class="navigationTabs" href="<?php echo $actual_base ?>/contact">Contact us</a></div>
				<div style="display: none;" class="newNav2_community" id="Register"><div style="height:25px;position:absolute;top:0px;"></div><a class="navigationTabs" href="<?php echo $actual_base ?>/register">Create Accounts</a></div>
				<div style="" class="newNav2_community newNav2_on_Community" id="Community" ><a  class="navigationTabs" href="<?php echo $actual_base ?>/community">Community</a></div>
				

				<div style="display: none;float:left;"  id="FriendsNav" ><div><a href="<?php echo $actual_base ?>/friends"><img src='<?php echo $actual_base ?>/images/friend.png' width="30"/></a></div></div>
				
				<div id="accountNav" style="display: none;float:left;margin-top:3px;" ><a href="<?php echo $actual_base ?>/account"><img src='<?php echo $actual_base ?>/images/gear.png' width="24"/></a></div>

				<div id="messagesNav" style="display: none;float:left;margin-top:-13px;" ><div  style='font-family: arial;font-size:11px;color:#35b7fe;text-align:center;'>(<span id='messageNum' class='navClickClass'></span>)</div><div style='margin-top:3px;'><a href="<?php echo $actual_base ?>/messages"><img src='<?php echo $actual_base ?>/images/messageIcon.png' width="24"/></a></div></div>

				<div style="clear:both"></div>
			</div>-->


			<div class="clear" style="clear:both"></div>
		</div>

		<div id="adDivHolder" class='adDivHolderClass' ><img id="adDiv"  src="" style="cursor:pointer;width:100%"></div>




		

<div style='margin-top: 70px;width:100%' id='logD1'>
	<form id="loginForm" method="post">
		<div style="margin:auto;margin-bottom: 15px;padding-bottom:22px;width:320px;">
			<div  class="newQuestionbLabels newQuestionbLabels_search">Username</div>
			<div style="" class="loginElemDiv">
				<input id="username" name="username" class="inputboxnew">
			</div>
		</div>
		<div style="margin:auto;margin-bottom: 15px;padding-bottom:22px;width:320px;"><div style="" class="newQuestionbLabels newQuestionbLabels_search">Password</div>
			<div style="" class="loginElemDiv">
				<input id="password" name="password" class="inputboxnew">
			</div>
		</div>
		<div id="logButtDiv" style="text-align: left; padding-left: 9px;">
			<input type="button" value="login" onclick="login()" style="width:70px;height:25px;border-radius:4px 4px 4px 4px;margin-left:10px;">
		</div>
		<div style="clear:both;"></div>
		<div style="height:20px;">
			<span style="color:red;opacity:0px;font-family:arial" id="badpasslink"></span>
		</div>

	</form>


</div>
		<!--<div  class="newNav2_community" id="login" >
				<div class="cellButt" style='padding-top:5px;' >
					<div style='float:left;width:20%'><img src="images/loginIcon.png" style='height:48px;'/></div>
					<div style='float:left;width:70%;color:#eee;text-align: center;font-size:30px;font-weight: normal;text-shadow: 2px -1px 2px #000;'>Login</div>
					<div style='clear:both;'></div><a style='display:none;' class="navigationTabs" href="<?php echo $actual_base ?>/profile" >Login</a>
				</div>
			</div>-->



		<div class="navigation" id="nav2" style="background-color: #363b58">
			<!--<div style="display: block;" class="newNav2_community" id="Messages" onclick="changeNavNewNav('mainLBHolder','messages.html',this)">Messages</div>-->
			


			<div  class="newNav2_community" id="search" >
				<div class="cellButt" style='padding-top:5px;' >
					<div style='float:left;width:20%'><img src="images/search.png" style='height:48px;'/></div>
					<div style='float:left;width:70%;color:#eee;text-align: center;font-size:30px;font-weight: normal;'>Search</div>
					<div style='clear:both;'></div><a style='display:none;' class="navigationTabs" href="<?php echo $actual_base ?>/romance" >Search</a>
				</div>
			</div>


			<div  class="newNav2_community" id="contactUs" >
				<div class="cellButt" style='padding-top:5px;' >
					<div style='float:left;width:20%'><img src=images/contactusW.png style='height:48px;'/></div>
					<div style='float:left;width:70%;color:#eee;text-align: center;font-size:30px;font-weight: normal;text-shadow: 2px -1px 2px #000;'>Contact us</div>
					<div style='clear:both;'></div><a style='display:none;' class="navigationTabs" href="<?php echo $actual_base ?>/romance" >Contact us</a>
				</div>
			</div>



			<div  class="newNav2_community" id="register" >
				<div class="cellButt" style='padding-top:5px;' >
					<div style='float:left;width:20%'><img src="images/registerIcon1.png" style='height:48px;'/></div>
					<div style='float:left;width:70%;color:#eee;text-align: center;font-size:30px;font-weight: normal;text-shadow: 2px -1px 2px #000;'>Register</div>
					<div style='clear:both;'></div><a style='display:none;' class="navigationTabs" href="<?php echo $actual_base ?>/romance" >Register</a>
				</div>
			</div>



			<div  class="newNav2_community" id="community" >
				<div class="cellButt" style='padding-top:5px;' >
					<div style='float:left;width:20%'><img src="images/communityG.png" style='height:48px;'/></div>
					<div style='float:left;width:70%;color:#eee;text-align: center;font-size:30px;font-weight: normal;text-shadow: 2px -1px 2px #000;'>Community</div>
					<div style='clear:both;'></div><a style='display:none;' class="navigationTabs" href="<?php echo $actual_base ?>/romance" >Community</a>
				</div>
			</div>





				<!--<div style="display:none;" class="newNav2_community" > <a  class="navigationTabs" href="<?php echo $actual_base ?>/advertise">Commercial</div>
				<div  class="newNav2_community" id="ContactUs" ><div class="cellButt" style='padding-top:5px;'><img src="images/contactusW.png" style='height:58px;'/></div><a class="navigationTabs" href="<?php echo $actual_base ?>/contact"></a></div>



				<div style="display: none;" class="newNav2_community" ><div class="cellButt" style='padding-top:10px;' ><img src="images/settings-icon.png" style='height:48px;'/></div><div class="cellButt" >.</div><div style="height:25px;position:absolute;top:0px;"></div><a class="navigationTabs" href="<?php echo $actual_base ?>/register"></a></div>




				<div style="" class="newNav2_community newNav2_on_Community" id="Community" ><div class="cellButt" style='padding-top:10px;' ><img src="images/communityG.png" style='height:48px;'/></div><a  class="navigationTabs" href="<?php echo $actual_base ?>/community"></a></div>-->
				

				<div style="display: none;float:left;"  id="FriendsNav" ><div><a href="<?php echo $actual_base ?>/friends"><img src='<?php echo $actual_base ?>/images/friend.png' width="30"/></a></div></div>
				
				<div id="accountNav" style="display: none;float:left;margin-top:3px;" ><a href="<?php echo $actual_base ?>/account"><img src='<?php echo $actual_base ?>/images/gear.png' width="24"/></a></div>

				<div id="messagesNav" style="display: none;float:left;margin-top:-13px;" ><div  style='font-family: arial;font-size:11px;color:#35b7fe;text-align:center;'>(<span id='messageNum' class='navClickClass'></span>)</div><div style='margin-top:3px;'><a href="<?php echo $actual_base ?>/messages"><img src='<?php echo $actual_base ?>/images/messageIcon.png' width="24"/></a></div></div>

				<div style="clear:both"></div>
			</div>

			<div style="position:relative;z-index:15;top:0px;width:100%">

			
			
			
			

		</div>

		<div class='logBoard' style='margin-top: 70px;position:relative;z-index:15;' >
					<div >
						
						<div id='logBoard' style='display:none;height:33px;'>
							<div class='logBoard_Div'>
								<div style="font-size:18px;float:left;">Welcome <span id='listedUname'></span>
								<span style='margin-left:40px;cursor:pointer;text-decoration:underline;text-align:left;color:red;' onclick="logout()">Log out</span></div>
								<div id="office" class="presNavigation" style="display:none;margin-top:2px;margin-left:10px;text-spacing:3px"></div>
								<div style="clear:both;"></div>
							</div>
						</div>

						<!--<div id="loginPanel" class="loginPanel">
							<form id="loginForm" method="post">
								<div style='display:none;' class='newQuestionbLabels newQuestionbLabels_search' >Username</div>
								<div style='display:none;' class='loginElemDiv'>
									<input id='username' name="username" class='inputboxnew' >
								</div>
					
								<div style='display:none;' class='newQuestionbLabels newQuestionbLabels_search' >Password</div>
								<div style='display:none;' class='loginElemDiv'>
									<input id='password' name="password" class='inputboxnew' >
								</div>
								<div id='logButtDiv' style='text-align:left;padding-left:9px;display:none;' >
									<input type='button' value='login' onclick="login()" style='width:70px;height:25px;border-radius:4px 4px 4px 4px;margin-left:10px;' />
								</div>
								<div style='clear:both;'></div>
								<div style='height:20px;'>
									<span style='color:red;opacity:0px;font-family:arial' id='badpasslink' ></span>
								</div>
							
							</form>
						</div>-->
						
					</div>
					
				</div>


<div id='usersOnline' class='usersOnline'>
				<div style="font-family: arial;font-size: 13px;padding:7px;color:#000;" ><div style='float:left;width:140px;'><span id='numUsersOnline' style='text-decoration: underline;cursor:pointer;'></span> users online</div><div style='float:left;'><img id="upArrowUsers" src='images/double-up-arrow.png' style="height:15px;cursor: pointer;display:none;"/></div><div id="userCloseButt" style='float:right;text-decoration: underline;cursor: pointer;'>close</div><div style='clear:both;'></div></div>
				<div id='listUsersOnline' class="listUsersOnline" >
					<div id="listUsersOnlinePage" style='position: absolute;width:100%;top:0px;background-color:#fff;' ></div>
					
				</div>
			</div>

			<div  id='mainLBHolder'  ></div>
			<div id="footerPush" class="footerPush" ></div>
			<div style="width:100%;margin:auto;">
					<div id="sponsorDiv" class="sponsorDiv" style='margin:auto;padding:8px;border-radius: 3px 3px 3px 3px;margin-bottom:10px;'>

						
						

						<div style="clear:both"></div>
						<div style='width: 100%;text-align:center;'><a href="<?php echo $actual_base ?>/sponsors?=1">meet our sponsors</a></div>
					</div>

				<div id="footerBackground" class='flexFooter_base'>

				


					
				<div style='width:100%;text-align:center;margin:auto;color:#35b7fe;'>
					Copyright &copy; 2016 by the Agape Community
					<br/><br/>
					All rights reserved. No part of this publication may be reproduced, distributed, or transmitted in any form or by any means, including photocopying, recording, or other electronic or mechanical methods, without the prior written permission of the publisher, except in the case of brief quotations embodied in critical reviews and certain other noncommercial uses permitted by copyright law. For permission requests, write to the publisher, addressed "Attention: Permissions Coordinator," at the address below.
					<input type='hidden' id='sGuid' value="<?php echo $guid; ?>" />
				</div>
				<br/>
				<div style='width:100%;'>
					<div style='text-align:center;width:100%;margin:auto;'>
						
						<div class="sitemapText"><a class='siteMapLinks' href="<?php echo $actual_base?>/community">Home</a></div>
						<div class="sitemapText"><a class='siteMapLinks' href="<?php echo $actual_base?>/politics">Politics</a></div>
						<div class="sitemapText"><a class='siteMapLinks' href="<?php echo $actual_base?>/sitemap">Site Map</a></div>
						<div class="sitemapText"><a class='siteMapLinks' href="<?php echo $actual_base?>/contact">Contact us</a></div>
						<div class="sitemapText"><a class='siteMapLinks' href="<?php echo $actual_base?>/media">Media</a></div>
						<div class="sitemapText"><a class='siteMapLinks' href="<?php echo $actual_base?>/romance">Romance</a></div>
						<div class="sitemapText"><a class='siteMapLinks' href="<?php echo $actual_base?>/sponsors?id=1">Sponsors</a></div>
						<div class="sitemapText"><a class='siteMapLinks' href="<?php echo $actual_base?>/advertise">Advertise with us</a></div>
						<div class="sitemapText"><a class='siteMapLinks' href="<?php echo $actual_base?>/aboutus">About Us</a></div>
						<div style="clear:both"></div>	
					</div>

				</div>



					

					
					</div>

				</div>
			</form>
			</div>
			<!--<div style='height:90px;background-color:#000;width:100%;opacity:.8;'>66</div>-->
		</body>
		<link href="<?php echo $actual_base ?>/styles/Netscape_style.css" rel='stylesheet' type='text/css' />
		<link href="<?php echo $actual_base ?>/styles/NetscapeStyles_responsive.css" rel='stylesheet' type='text/css' />
		
	
		
		<!--<script language='javascript' type='text/javascript' src="<?php echo $actual_base ?>/scripts/ads.js"></script>-->
	<script type='text/javascript'>
			
		globalTools.getAdvertisements('Home');
		$("#transBack").removeClass().hide()
		$("#transBack1").removeClass().hide()

		$(".newNav2").each(function(){
			$(this).on("mouseover",function(){
				$(this).addClass("whiteClass")
			})
			$(this).on("mouseout",function(){
				$(this).removeClass("whiteClass")
			})
		})

		$("#mainLabel").on("mouseover",function(){
			$(this).css({"color":"#fff","cursor":"pointer"});
		})
		
		$("#mainLabel").on("mouseout",function(){
			$(this).css({"color":"#35b7fe","cursor":"default"})
		})

		$("#mainLabel").on("click",function(){
			global.lastNav="communityTemplate.php";
			window.location=global.baseUrl+"/homePage.php";
		})

		$("#userCloseButt").unbind().on("click",function(){

		})

			//$("#adDiv").attr("src",global.baseUrl+"/advertiseImages/flashad1.gif");

			//listUsersOnline

		
		if(global.userListStatus=="open"){
			var elem1=$("#usersOnline")[0]
			TweenMax.to(elem1,.2,{css:{height:"280px",},onComplete:function(){
				$("#userCloseButt").show();
			}})

		}else{

			var elem1=$("#usersOnline")[0]
			TweenMax.to(elem1,.2,{css:{height:"25px",},onComplete:function(){
				$("#userCloseButt").show();
			}})

		}

		getOnlineUsers(global.userListCnt);

		 var w1 = new Worker(global.baseUrl+"/web_workers/mainWebWorker.js");
		 w1.onmessage=function(data){
		  	switch(data.data.type){
		  		case 'rotateUsers':
		  			slideUsers();
	  			break;


	  			default:

	  		
	  			break;
		  	}

		}

			
		$("#upArrowUsers").bind("click",function(){
			var free=$("#listUsersOnlinePage").position().top;
			var elem1=$("#listUsersOnlinePage")[0];
			if(free+200>=0){
				var nM=0;
				TweenMax.to(elem1,1,{css:{top:nM}

				})

			}else{
				var nM=free+200;
				TweenMax.to(elem1,1,{css:{top:nM}

				})

			}
		})

		var sendObj={};
		sendObj.job="atomic_selectAll";
		sendObj.dbase="agape_sponsors";
		sendObj.ob=" limit 0,4";
		var ext=global.baseUrl
		var funct1=function(data){
		 	datu=globalTools.verify(data);
		 	global.userObj.sponsorList=datu.returnObj;
		 	globalTools.save();
		 	loadSponsors(datu.returnObj,ext);
		}

		ajaxCallPost(sendObj,funct1);

		preloadMages(global.baseUrl+"/images/mainImage1.gif",global.baseUrl+"/images/blog1.jpg")

		$("#hamburger").unbind("click").on("click",function(){
			$("#mobileMenuPage").show();
		})

		$("#mobileBack").on("click",function(){
			$("#mobileMenuPage").hide();
		})


		$(".newNav2_community").each(function(){
			
			$(this).unbind("click").on("click",function(){
				var f="/agape/"+$(this).attr("id")
				location.href=f
			})
		})
		



		//slideFoot()
		$( window ).resize(function() {
			slideFoot()
		});

		
	</script>


		


	</html>

<?php
	if($seshMatch=="sessionMatch") {
		
		echo "<script>fademessg($('#badpasslink')[0],'Account already logged in. Log out of Agape account.');</script>";
		$seshMatch="false";
	}



	if($seshMatch=="Badpass") {

		
		echo "<script>fademessg($('#badpasslink')[0],'Authentication failed');</script>";
		$seshMatch="false";
	}



		
	

?>


