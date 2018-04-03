define(['modules/fieldObj','jquery'],function(field,$){

	return{
		loginReturn: function (data)
		{
	
			list=field.fieldObj();
			data=$.trim(data);	
			dChk1=data;
			dChk=dChk1.split("**");
			if(dChk[0]=='false')
			{
				document.getElementById('badpasslink').style.display='block';
			}
		
			if(dChk[0]=='true')
			{		
			
				if(typeof(Storage)!=="undefined")
				{		

					global=globalTools.create();
					global.userObj=globalTools.verify(data);
	

					global.navFunc="LoggedIn"
					this.setStorage('login','true');
					var title=document.URL;
					log=sessionStorage.getItem('login');	
					var intent=global.userObj.agape_profile_intentions;
					/*require(['modules/getstateObj_new'],function(state)
					{
						state.getstates(global.userObj.agape_profile_state);
						loadTemplate('mainLBHolder',global.lastNav);

					});*/


					turnOnNav();
					globalTools.save();
					loadTemplate('mainLBHolder',global.lastNav);
					this.getFriendList();
					console.log(443533)
					console.log(global.userObj.agape_profile_commercial_Account)
					console.log(443533)
					
					
				
					
				
				}
				else
				{
					alert('You must upgrade your browser to access this website');
				}
			}			
		},
		setStorage:function (unit,val)
		{	
			switch(unit)
			{
				case 'user':
					sessionStorage.setItem('user', val);
				break;
				
				case 'login':
					sessionStorage.setItem('login', val);
				break;

				case 'messages':
					sessionStorage.setItem('messages', val);
				break;
			}
		},

		getFriendList:function(){
	
		

			var h=globalTools.create();

			var sendObj={}
			sendObj.job="selectAtomic";
			sendObj.dbase="agape_friendrequest where requestedUsername='"+h.userObj.agape_profile_username+"'";
			sendObj.param="none";

			func=function(data){
				global.friendsObj.requestUser=globalTools.verify(data);
				globalTools.save();
			}

			ajaxCall(sendObj,func);	
			


			
		}
	}
	
		
})