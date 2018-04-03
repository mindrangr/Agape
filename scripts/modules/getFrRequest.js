	
	define(['modules/parseFrRequest'], function(friends) { 
	//console.log("Function : purchaseProduct"); 
	return {
		getFrRequest:function(start)
		{	
			var userObj=sessionStorage.getItem("user");
			obj={};
			obj.uID=global.userObj.agape_profile_memberID;
			obj.job='atomic_selectAll'
			obj.ob=" where requestedID='"+global.userObj.agape_profile_memberID+"' and requestStatus='Sent' order by requestSent desc limit "+start+", 25 ";
			obj.start=start;
			obj.Getdetail="GetCount";
			obj.ob2=""
			obj.dbase="agape_friendrequest";
			var func=function(data){


				parseFrRequest(data)
			};
			global.module="candidate";
			ajaxCallPost(obj,func)	
		},
		getFriends:function(start)
		{		
			global.paginate=start; 
			obj={};
			obj.job='getFriends';
			obj.par=global.userObj.agape_profile_friends;
			obj.start=start;
			func=function(data){

				v=globalTools.verify(data)
				parseFriends(data)
			};	
			global.module="friend";
			ajaxCallPost(obj,func);
			if(global.userObj.agape_profile_friends!="[]"){
				
				//ajaxCallPost(obj,func);
			}else{
				//$("#friendContainer").css({"color":"#eee","text-align":"center"}).html("You have no friends on file.")
			}			
		}
		
	}
});
