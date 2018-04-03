define(['modules/message_tool','modules/logReturn','jquery'],function(message_tool,logReturn,$){
	return{
		checkFields:function(){
			var username=$('#username').val();
			var password=$('#password').val();
			var rand = this.getRandomizer();
			
			if(username!="" && password!="")	
			{		
				
				$.get(global.baseUrl+"/AjaxPage1.php", {username:username, password:password, database:'agape_profile',job:'login',random:rand}, function(data){logReturn.loginReturn(data)}); 
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
		},
		
		//The former loginpappy
		navigation:function(direction)
		{
			strg="none";
			
			switch(direction)
			{
				
				case 'LoggedIn':
			
					

					$('#newNav').css("display","none");
					global.navFunc ='LoggedIn';
					//chnAdd();
					//globalTools.save();
				break;
				
				default:
					
					$('#newNav').css("display","block");
					
					global.navFunc ='LoggedOut';
					//globalTools.save();
					
				break;
			
				}
		},


		getRandomizer:function ()
		{
			var rand=Math.floor((Math.random()*1000)+1); 
			return rand;		
		},

		

		poopaDoop:function()
		{
			alert("poop a doop")
		}
	}
		
		
})
			



