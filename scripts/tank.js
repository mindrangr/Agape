		//Populates search panel
		function getFirstsearch(index)
		{
			
			/**if(f25Max>=searchIndex)
			{
				var userObj=sessionStorage.getItem("user");
				userObj=$.parseJSON(userObj)
				state=userObj['agape_profile_state'];
	
				var city=userObj['agape_profile_city'];
				var gender=$.trim(userObj['agape_profile_gender']);
			
				
				for(var key in userObj)
				{
					var keys="se_"+key;
					if(document.getElementById(keys))
					{
						if(key!='agape_profile_gender')
						{
							$("#"+keys).val(userObj[key])
						}
						else
						{
							var searchGen="Female";
							if(userObj[key]=="Female")
							{
								searchGen="Male"
							}						
							$("#se_agape_profile_gender").val(searchGen);
						
						}
					}
				
				}
				
				var rand = getRandomizer();
				$("#idSeachStateLabel_free").html(userObj['agape_profile_state'])
				
				//$.get("AjaxPage1.php", {job:'f25searches',gender:gender,state:state,random:rand,index:index}, function(data){f25AjxSearch(data)});
				
					obj={};
					obj.job="f25searches";
					obj.par=gender;
					obj.start=index;
					obj.state=state;
					obj.city=city;
					func=function(data){f25AjxSearch(data)};	
					ajaxCall(obj,func);	
			}**/
		}


		function f25AjxSearch(data)
{	

	if(data!='none')
	{	
		jingo=data.split("**");
		f25Obj1=$.parseJSON(jingo[1]);	
		f25Obj=f25Obj1['returnObj'];
		f25builder(f25Obj1);	
	}		
}