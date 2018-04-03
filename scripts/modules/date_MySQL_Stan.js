define([],function(){
	return{
			
			process: function(a)
			{				
				
				if(a!=undefined)
				{
					datetime_split=a.split(' ');
					var months = new Array('January','February','March','April','May','June','July','August','September','October','November','December')
					var date_split=datetime_split[0].split('-');
					return months[parseInt(date_split[1]-1)]+" "+date_split[2]+", "+date_split[0];
				}
			}	
	}
})