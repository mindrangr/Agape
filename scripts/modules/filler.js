define([],function(){
	return{
		citySelFiller:function(obj,cityElement){
		
		var  wee=JSON.stringify(obj);
		var  weegee=wee.replace(/\\r/g,"");
		weegee=weegee.replace(/\\n/g,"");
		weegee=weegee.replace(/\"/g,"");
		
	
		
			var cities=weegee.split("$$")
			
			document.submitForm1[cityElement].options.length = 0;
			var option1 = document.createElement("option"); 
			option1.text = "Select one"; 
			option1.value = "Select"; 
			var select1 = document.getElementById(cityElement); 
			select1.appendChild(option1); 
			
			for(b=0;b<cities.length;b++)
			{				
				var option = document.createElement("option"); 
				option.text = cities[b];
				option.value = cities[b]; 
				if(typeof window.userObj !='undefined' )
				{
					if(window.userObj['agape_profile_city']==cities[b])
					{
						option.setAttribute("selected","selected")
					}				
				}
				var select = document.getElementById(cityElement); 
				select.appendChild(option); 							
			}
	}}
})