define(['modules/pageLoader','modules/login','modules/fieldObj','modules/getstateObj'],function(pLoad,login,field,state) { 
	//Initial functions to start application
	return {
		bodyGo:function(forms)
		{	

			if(typeof(Storage)!=="undefined")
			{	
				
				
				//var t1 = t.split("/");
				r=sessionStorage.getItem("page");
				
				var Path=window.location.pathname;
				Path=Path.split("/");
				var pathCnt=Path.length;
				var movePage;
				var navPushClass;

				if(Path[2]){

					switch(Path[2]){

						case 'community':
							movePage="communityTemplate.php"
							navPushClass="Community";
						break;


						case 'romance':

							if(global.userObj.agape_profile_romanceAccount=="Active"){
								movePage="search.html";
								$("#Search").addClass("newNav2_on");
								navPushClass="Search";
							}else{
								movePage="accountTemplate.html";
							}
							
							
						break;

						case 'politics':
								

							switch(global.lastNav){
								case 'presidentListPage.html':
									movePage="presidentListPage.html";
								break;

								case 'peopleView.php':
									movePage="peopleView.php";
								break;

								case 'presidentView.php':
									movePage="presidentView.php";
								break;

								default:
									movePage="presidentWho.html";
								break;
							}
							
						break;

						case 'media':
							movePage="newsHome.html";
						break;

						case 'contact':
							movePage="contactTemplate.html";
							//movePage="messageBox.html"
						break;

						case 'sitemap':
							movePage="siteMap1.html";
						break;

						case 'President_Trump':
							movePage="President_Trump.html";

						break;

						case 'president_List':
							movePage="presidentListPage.html";
						break;

						case 'account':
							movePage="accountTemplate.html";
						break;

						case 'friends':
							movePage="friendTemplate.html";
						break;


						case 'messages':
							movePage="messages.html";
						break;

						case 'aboutus':
							movePage="aboutUs.html";
						break;

						case 'advertise':
						
							movePage="advertise.html";
							var checkr=Verifyuser();
							if(checkr=="false"){
								movePage="CommercialForm_Noregister.html";
							}
						break;


						case 'register':
							movePage="communityRegister.html";

						break;

						case 'create_Romance_Account':
							movePage="splash.html";
						break;
						case 'sponsors':
							movePage="sponsors.html";
						break;

						case 'CommercialForm':
							movePage="CommercialForm.html";
						break;


						case 'profile':
							
							if(global.userObj.agape_profile_romanceAccount=="Active"){
								movePage="profilepage.html";
							}else{
								movePage="accountTemplate.html"
							}

						break;

						

						default :
							movePage="communityTemplate.php"
							break;


					}
					var pageDetector=movePage;
					sessionStorage.setItem("page",pageDetector);
				}else{
					var pageDetector="communityTemplate.php"
					sessionStorage.setItem("page",pageDetector);
				}
			
				global.lastNav=pageDetector;
				globalTools.save();
				sessionStorage.setItem("page","none");
				$(".newQuestionbLabels").show();
				$(".loginElemDiv").show();
				$("#Community").show();
				$("#Register").show();
				$("#logButtDiv").show();
				$("#ContactUs").show();


				







				if(global.navFunc=='LoggedIn')
				{
					if(global.lastNav==""){
						global.lastNav="communityTemplate.php"
					}
					
					$('#newNav').css("display","none");
					var intent=global.userObj.agape_profile_intentions;
					$("#listedUname").html(global.userObj.agape_profile_username);
					turnOnNav();
					$("#logBoard").css("display","block");
					//pLoad.pageLoader();	
					$("#subButt").html("update");	
					if(global.lastNav=="advertise.html"){
						if(global.userObj.agape_profile_commercial_Account=="False"){
							global.lastNav="CommercialForm.html"
						}
						
					}
					

					if(global.userObj.agape_profile_commercial_Account=="True"){
						$("#commercialUs").show();
					}
					

					$(".newNav2").each(function(){
						$(this).removeClass("newNav2_on")

					})
					$("#"+navPushClass).addClass("newNav2_on");


					loadTemplate('mainLBHolder',global.lastNav);
					
				}else{

					if(global.lastNav==""){
						global.lastNav="communityTemplate.php"
					}

					if(global.lastNav=="advertise.html"){
						global.lastNav="CommercialForm.html"
					}
					
					//login.navigation('direction');
					$('#newNav').css("display","block");
					globalTools.save();

					loadTemplate('mainLBHolder',global.lastNav);
				
				}
				
			}
			else
			{					
				alert('You must upgrade your browser to access this website');
			}					
		}
	}
})

