define(['modules/filler'],function(filler)
{
	return{
		cityFiller:function(obj,cityElement)
		{
			obj.style.backgroundColor="#ffffff";			
			var sta=$(obj).val();
			
			if(sta=="Not Answered"){
				sta=strregion;
			}
			var rand = "getRandomizer()";			
			$.get("AjaxPage1.php",{job:'cityFiller',state:sta,random:rand},function(data){
				filler.citySelFiller(data,cityElement)
				$('#agape_profile_city option:contains("'+strcity+'")').prop('selected', true);
			})
		}
		
	}		
})