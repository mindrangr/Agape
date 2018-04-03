define(['modules/parseState'], function(parse) { 
	
	return {
		getstateObj:function(stateElem)
		{	
			$.get("AjaxPage1.php", {job:'stateSearch'}, function(data){
				parse.parseState(data,stateElem)})		
		}
	}
})