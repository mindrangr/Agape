<!DOCTYPE html>
<?php

//$headers = "From: coolpapacash@gmail.com";
//$myVarIWantToEncodeAndDecode="cheddar is better than milk; cheddar is better than milk; cheddar is better than milk; cheddar is better than milk;";
//$key="four";
//$encoded = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $myVarIWantToEncodeAndDecode, MCRYPT_MODE_CBC, md5(md5($key))));
//echo $encoded;






//$curl = curl_init();
//curl_setopt ($curl, CURLOPT_URL, "http://www.bestbuy.com/site/computers-pcs/laptop-computers/abcat0502000.c?id=abcat0502000");
//curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

//$result = curl_exec ($curl);
//curl_close ($curl);
//print $result;
include("Config_files/_shared_config.php");
echo $actual_base;
session_start();

$pagemove=explode("/",$actual_link);

if(isset($pagemove[6])){
	if($pagemove[6]!="none"){
		$_SESSION["page"] = $pagemove[6];
		//header('Location: /Sites/agape/homePage.php');
	}else{

	}
}else if(isset($pagemove[5])){
	$_SESSION["page"] = $pagemove[5];
}
else{
	$_SESSION["page"] = "none";
}



?>

	<html>
		<head>
			<title>Hello</title>
			<style>

			</style>			
			<script type="text/javascript">
			
				var pageDetector='<?php echo $_SESSION["page"]; ?>'
				sessionStorage.setItem("page",pageDetector);

				var lastNav="butt_signUp"
				var browserDetect=navigator.userAgent;
				var brows=""
				var bd=browserDetect.search(/Firefox/i);	
				if(bd!=-1)
				{
					//document.write("<LINK href='styles/Firefox_style.css' rel='stylesheet' type='text/css'>");	
				}
				
				
				bd=browserDetect.search(/Chrome/i);	
				if(bd!=-1)
				{
					brows="Chrome";
					//document.write("<LINK href='styles/Netscape_style.css' rel='stylesheet' type='text/css'>");	
				}
				
				bd=browserDetect.search(/MSIE/i);	
				if(bd!=-1)
				{
					brows="IE";
					//document.write("<LINK href='styles/IEStyle_go.css' rel='stylesheet' type='text/css'>");	
				}

				
			
			</script>

			<script src="<?php echo $actual_base ?>/scripts/jquery-1.8.2.js"></script>


		
			<!--<script language='javascript' type='text/javascript' src="<?php echo $actual_base ?>/scripts/less.js"></script> -->
			<script src="<?php echo $actual_base ?>/scripts/TweenMax.js"></script>
			

	<script data-main="<?php echo $actual_base ?>/scripts/main" src="<?php echo $actual_base ?>/scripts/require.js"></script>
			<script language='javascript' type='text/javascript' src="<?php echo $actual_base ?>/scripts/underscore1.52.js"></script>
			
				
			
			
			<!--<script language="javascript" type="text/javascript" src="scripts\angular.min.js"></script>-->
			
			<script language="javascript" type="text/javascript">

			/*var global={
				navFunc:"loggedOut",
				userObj:{},
				sendMessage:'true',
				dataHolder:{},
				stateObj:{},
				paginate:0,
				newsObj:0,
				candidate:{},
				searchQuery:"true",
				view:{},
				friendsObj:{},
				searchObj:{},
				parser:"recieved",
				comments:{},
				lastNav:"communityTemplate.php",
				fieldChk:{},
				presObj:{},
				peopleObj:{},
				presidentialObj:{"peopleCandidate_ID":"none"},
				returnFunction_open:"none",
				returnFunction_close:"none",
				returnFunction_go:"true"
			}

			var Objtools=function(){

				this.save=function(){
					var f=JSON.stringify(global)
					
					sessionStorage.setItem("global",f)
				}
				this.create=function(){
					var f
					
					if(sessionStorage.getItem("global")!="null"){
						f=$.parseJSON(sessionStorage.getItem("global"));
					}else{
						f={
							navFunc:"loggedOut",
							navSet:{},
							userObj:{},
							sendMessage:'true',
							dataHolder:{},
							stateObj:{},
							paginate:0,
							newsObj:0,
							candidate:{},
							searchQuery:"true",
							view:{},
							friendsObj:{},
							searchObj:{},
							comments:{},
							lastNav:"communityTemplate.php",
							fieldChk:{},
							presObj:{},
							peopleObj:{},
							presidentialObj:{"peopleCandidate_ID":"none"},
							returnFunction_open:"none",
							returnFunction_close:"none",
							returnFunction_go:"true"
						};
					}
					return f;
				}
				this.verify=function(str){
					str=$.trim(str)+"";
					var var1=str.split("**");
					if(var1[0]=="true" || var1[0]=="updated"){
						return $.parseJSON(var1[1]);
						
					}
					if(var1[0]=="false"){
						var emptySet={};
						emptySet.returnObj=[];
						console.log("set empty");
				
						return emptySet;
					}
				}
				
				this.arrayTool=function(elem,task,param,val){
					param=parseInt(param)
					switch(task){
						//removes value at index and returns array

						case 'removeIndex':

							var tre=elem;
							var fhalf=elem.slice(0,param)
							var shalf=elem.slice(param+1,tre.length);
							var total=fhalf.concat(shalf)
							return total;
						break;
						
						
						//adds value at index and returns array
						case 'addIndex':
							var fhalf=elem.slice(0,param);
							fhalf.push(val)
							var shalf=elem.slice(param,elem.length);
							var total=fhalf.concat(shalf);
							return total;
						break;
					}
				}
				
				
				this.stringClear = function(str){
					var t=$.trim(str)+"";
					t = t.replace(/'/g,"&#39;");
					t = t.replace(/"/g,"&#34;");
					t = t.replace(/\n/g,"&#13;");
					t = t.replace(/</g,"&#60;");
					//t = t.replace(/\//g,"&#47;");
					return t;
				}

				this.stringClearBack = function(str){
					var t=str+"";
					t = t.replace(/&#39;/g,"'");
					t = t.replace(/&#60;/g,"<");
					t = t.replace(/&#13;/g,"\n");
					//t = t.replace(/&#47;/g,"\/");
					//t = t.replace(/\\/g,"");
					return t;
				}

				this.stringClearBackSlash = function(str){
					var t=str+"";
					t = t.replace(/&#39;/g,"'");
					t = t.replace(/&#47;/g,"\/");
					//t = t.replace(/\\/g,"");
					return t;
				}

				this.addslashes = function(str){
					var t=str+"";
					t = t.replace(/"/g,"\\\"");
					return t;
				}


				this.objectDataClone=function(oldObj,newObj){
					
					for(var key1 in newObj){
						if(newObj[key1]!=""){
							
							oldObj[key1]=newObj[key1];
						}
						
					}
					return oldObj
				}

				this.objectEmptyClone=function(oldObj,newObj){
					for(var key1 in newObj){
						if(newObj[key1]!=""){
							
							oldObj[key1]=newObj[key1];
						}
					}
					return oldObj
				}
					
				
			}

			var globalTools = new Objtools();


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
					console.log(this.queue)
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

				if(sessionStorage.getItem("global")){
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
				}
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
				$("#body").removeClass("bodyStyles_community");
				$("#body").removeClass("bodyStyles_romance");
				$("#body").removeClass("bodyStyles_poll");
				$("#body").removeClass("bodyStyles_president");
				$("#body").removeClass("bodyStyles_Account");
				$("#body").removeClass("bodyStyles_topic");
			}

			function login()
			{
				
				require(['modules/login'],function(login)
				{
					login.checkFields();
				});			
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
		
		<div class='lboxBackground' id="_lboxBackground"></div>
		<div class='lBoxMainDiv' id="_lBoxMainDiv">
			<div style='width:102%;position:relative;top:-20px;'>
				<div id="closeButton" class='closeButton'>X</div>
			</div>
			
			<div id='lBoxDiv'></div>
		</div>
		
	
		
		<body id='body' style="background-attachment:fixed;" >

		<div style='position:relative;z-index:5'>
			<form name="submitForm1">
				<!-- footer -->
				<div id='LbBack' class="lbBack">
					<div style='text-align:center;position:absolute;top:680px;width:100%;text-align:center;font-family:helvetica;color:#dedede;font-size:12px;'>
						<span class="footerLink" id="ContactUs">Contact us</span>
						<span class="footerLink" id="Home" >Home</span>
						<span class="footerLink" id="AboutUs" >About us</span>
						<span class="footerLink" id="SiteMap">Site Map</span>
					</div>
				</div>
				
				

				<div style='position:relative;width:860px;z-index:20;'>
					<div class="tag" id="tag"><span id="tag">Welcome to the</span><span style="font-family:'Great Vibes';font-size:35px;color:brown;"> Agape </span>Community</div>

				
					<div class='logBoard' >
						<div >
							<div style='width:760px;' id='nav2'>
								<div style='display:none;' class='newNav2' id="Messages" onclick="changeNavNewNav('mainLBHolder','messages.html',this)">Messages</div>


								<div>skhdgfskjghfjhsdf</div>
								<div  class='newNav2' id="AboutUs" onclick="changeNavNewNav('mainLBHolder','aboutUs.html',this)">About us</div>
								<div style='display:none;' class='newNav2' id="Profile" onclick="changeNavNewNav('mainLBHolder','profilepage.html',this)">Profile</div>
								<div style='display:none;' class='newNav2' id="Friends" onclick="changeNavNewNav('mainLBHolder','friendTemplate.html',this)">Friends</div>
								<div style='display:none;' class='newNav2' id="Search" onclick="changeNavNewNav('mainLBHolder','search.html',this)">Search</div>
								<div class='newNav2' style='width:120px;' id="Register" onclick="changeNavNewNav('mainLBHolder','communityRegister.html',this)">Create Accounts</div>
								<div class='newNav2' id="Community" onclick="changeNavNewPage('document',this)">Community</div>
								<div style='display:none;' class='newNav2' id="Account" onclick="changeNavNewNav('mainLBHolder','accountTemplate.html',this)">Account</div>
								<div class='newNav2' onclick="changeNavNewNav('mainLBHolder','contactTemplate.html',this)">Contact us</div>
								<div style='clear:both'></div>
							</div>
							<div id='logBoard' style='display:none;height:33px;'>
								<div class='logBoard_Div'>
									<div style="color:#eee;font-size:18px;">Welcome <span id='listedUname'></span>
									<span style='margin-left:40px;cursor:pointer;text-decoration:underline;text-align:left;color:red;' onclick="logout()">Log out</span></div>
								</div>
							</div>

							<div id="loginPanel" class="loginPanel">
								<div class='newQuestionbLabels newQuestionbLabels_search' >Username</div>
								<div class='loginElemDiv'>
									<input id='username' class='inputboxnew' >
								</div>
					
								<div class='newQuestionbLabels newQuestionbLabels_search' >Password</div>
								<div class='loginElemDiv'>
									<input id='password' class='inputboxnew' >
								</div>
								<div style='text-align:left;padding-left:9px;' >
									<input type='button' value='login' onclick="login()" style='width:70px;height:25px;border-radius:4px 4px 4px 4px;margin-left:10px;' />
								</div>
								<div>
									<span style='color:red;display:none;' id='badpasslink' >bad password</span>
								</div>
								<div style='clear:both;'></div>

							</div>
							<div id="adDivHolder" style='width:740px;margin-top:8px;' ><img id="adDiv" src=""></div>
						</div>
						
					</div>

				</div>


					<div  class="newFormfieledHolderStyles">

					
						<div  id='mainLBHolder' style='margin-top:170px;' ></div>
					
						<div style='clear:both'></div>

						<div id='statsBarNews' style='width:400px;margin:auto;border-radius:6px;margin-top:10px;display:none'>
							<div id="commentOpener" style='padding:0px;margin-top:5px;display:none;' class="newElemHeader_sub articleControls">comment</div>
							<div style='float:left;width:8px;'>&nbsp;</div>
							<div id="viewComments" style='padding:0px;margin-top:5px;' class="newElemHeader_sub articleControls">view comments</div>
							<div style='float:left;width:8px;'>&nbsp;</div>
							<div  style='padding:0px;margin-top:5px;' class="newElemHeader_sub articleControls" >track</div>
							<div style='float:left;width:8px;'>&nbsp;</div>
							<div style='padding:0px;padding-left:8px;margin-top:5px;' class="newElemHeader_sub articleControls"  ><img src="images/thumbsUp.gif" height='16' class='updatethumbsUpDB' /></div>
							<div id='agape_media_thumbsUp' style='padding:0px;margin-top:5px;' class="newElemHeader_sub articleControls articleControls_green" ></div>
							<div style='float:left;width:8px;'>&nbsp;</div>
							<div  style='padding:0px;padding-left:8px;margin-top:5px;' class="newElemHeader_sub articleControls"><img src="images/thumbsDown.gif" height='16' class='updatethumbsDownDB'  /></div>
							<div id='agape_media_thumbsDown' style='padding:0px;margin-top:5px;' class="newElemHeader_sub articleControls articleControls_red" style="padding-left:0px;text-decoration:none;color:red;"></div>
							<div id="returnButt" style='padding:0px;margin-top:5px;padding-left:9px' class="newElemHeader_sub articleControls">Back</div>
							<div style='clear:both'></div>
						</div>
					</div>
					
				</div>
			
				
				<div id="holding" style="height:800px;width:1200px;margin:auto;" >
					<div>
						<div style="height:44px;float:left;width:216px;"> </div>
						
						<div style="clear:both"></div>
						<div style="width:216px;float:left;">
							<div style="color:transparent">.</div>
							<div style="width:216px;height:100px;margin-top:15px;">
									
							</div>
							
						</div>						
						
						<!--<div style="width:868px;float:left;height:105px;display:none;" id="addOn">
							<img src="advertiseImages/flashad1.gif" id="adDiv">
						</div>-->
						<div style="clear:both"></div>
					
								
								
								
							</div>							

							<div class="clearBoth"></div>							
						</div>
						
						</div>	
						
						
						
						
						
						
						
						
						
						
						<div style="clear:both"></div>
					
						<div class="bodyPanel" style="width:216px;text-align:center;text-align:center;margin:auto;">
				
							<div style="float:left;width:59%;height:182px;font-family:tahoma;font-size:13px;"></div>
						</div>
						
						
						<!-- full body Height  -->
						<div class="bodyPanel" style="width:868px;margin:auto;display:none">
							<div style="border-radius:5px;width:85%;height:370px;border:solid 1px #696969;margin:auto;position:relative;z-index:10;overflow:auto;background-color:#2e2e2e;">
						
							
								

							
								
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
								</style>
								
								<!-- Begin search -->
								<div id="search" class="panelLead">
								
							
								</div>
							
								
							</div>

							<div style="clear:both"></div>				
						</div>
					</div>
				</div>
			</form>
			</div>
			<!--<div style='height:90px;background-color:#000;width:100%;opacity:.8;'>66</div>-->
		</body>
		
	
		
		<script language='javascript' type='text/javascript' src="<?php echo $actual_base ?>/scripts/navs.js"></script>
		<script language='javascript' type='text/javascript' src="<?php echo $actual_base ?>/scripts/ads.js"></script>
		<script type='text/javascript'>

		
			$(".newNav2").each(function(){
				$(this).on("mouseover",function(){
					$(this).addClass("whiteClass")
				})
				$(this).on("mouseout",function(){
					$(this).removeClass("whiteClass")
				})
			})

			$("#tag").on("mouseover",function(){
					$(this).css({"color":"#87ab9c","cursor":"pointer"});

			})
			$("#tag").on("mouseout",function(){
				$(this).css({"color":"#c9d5d6","cursor":"default"})
			})

			$("#tag").on("click",function(){
				global.lastNav="communityTemplate.php";
				window.location=global.baseUrl+"/homePage.php";
				
			})



			var t = window.location.href;

			baseUrl="/Sites/agape"
			if(t.search(/801/)==-1){
				baseUrl="/agape";
			}else{
				//alert("out")
			}

			$("#adDiv").attr("src",baseUrl+"/advertiseImages/flashad1.gif");
			$(".footerLink").each(function(){
				$(this).on("click",function(){
					var page=$(this).attr("id");

					switch(page){

						case 'SiteMap':
							var div1=document.getElementById("_lboxBackground");
							var div2=document.getElementById("_lBoxMainDiv");
							var template={};
							template.page="siteMap.php";
							template.job="visitprofile";
							id="true";
							ingniteLightBox = new LightBox(div1,div2,template,id)
							ingniteLightBox.lightBoxOn()

						break;	

						case 'Home':
							global.lastNav="communityTemplate.php";
							globalTools.save();
							window.location=global.baseUrl+"/homePage.php";

						break;			
					}

				})
			})		
					

		preloadMages(
					baseUrl+"/images/blog1.jpg",
					baseUrl+"/images/mainImage1.gif",
					baseUrl+"/images/mountain-road-wallpapers.jpg",
					baseUrl+"/images/president/white-house1.jpg"
					)


		</script>
<link href="<?php echo $actual_base ?>/styles/Netscape_style.css" rel='stylesheet' type='text/css' />

		


	</html>


