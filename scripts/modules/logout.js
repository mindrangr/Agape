define(['modules/login','modules/changeNavPanel','modules/formFields'],function(login,panel1,field)
{
	return{
		logOut:function()
		{
			
			sessionStorage.clear();
			login.navigation('loggedOut');
			//panelChange('splashPanel')
			$("#Register").css("display","block");
			$("#loginPanel").css("display","block");;
			$('#newNav').css("display","block");;
			$("#FriendsNav").css("display","none");
			$("#Profile").css("display","none");
			$("#Search").css("display","none");;
			$("#logBoard").css("display","none");
			//	var teel = field;
			$("#messagesNav").css("display","none");
			//$("#Profile").css("display","block");
	
			$("#accountNav").css("display","none");

			var mod3={}
			mod3.job="atomicDelete";
			mod3.param="sessiontable_user_ID"
			mod3.val=global.userObj.agape_profile_memberID;
			mod3.dbase="sessiontable"
			var modFunk=function(datum){
				console.log(222)
			}
			
			ajaxCallPost(mod3,modFunk)
			globalTools.close();
		//	teel.TextBCreator("all")

		//	$("#subButt").html("submit");
			location.href="community?returnVal=clearCookie";	
		
		}
		
	}
		
})