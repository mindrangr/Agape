
define(['modules/cityfiller'], function(city) { 
			
	
	return {
		parseState:function(obj,ID)

{
			
		var stateObj=$.parseJSON(obj);

			for(b=0;b<stateObj.length;b++)
			{	
				 var option = document.createElement("option"); 
				 option.text = stateObj[b].state_name;
				 option.value = stateObj[b].state_name;
				 if(typeof window.userObj != 'undefined')
				 {
					 if(window.userObj['agape_profile_state']==stateObj[b].state_name)
					 {
						option.setAttribute("selected","selected")
					 }
				 }else{
				 
				 }
			
				 var select = document.getElementById(ID); 
				 select.appendChild(option); 							
			}
			
				 if(typeof window.userObj == 'undefined')
				 {
					$('#agape_profile_state option:contains("'+strregion+'")').prop('selected', true);
				}
			
			if(ID=='agape_profile_state')
			{			
				city.cityFiller(document.getElementById('agape_profile_state'),'agape_profile_city');				
			}			
			
		}
	}
})