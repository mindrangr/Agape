	
	define([], function() { 

	return {
		blogGroup:function(start)
		{	
			obj={};
			obj.job='getBlog',
			obj.par=window.userObj['agape_profile_intentions'];
			obj.start=start;
			func=function(data){
				parseBlogRequest(data);
				
			};	

			ajaxCall(obj,func)			
		}
	}
});