define([],function()
{
	return{	
	changeNavPanel:function(par,par1)
	{

			var navUnits=['butt_signUp','butt_message' ,'butt_search' ,'butt_community' ,'butt_view' ,'butt_friends' ];
			switch(par)
			{
				case 'LoggedIn':
					document.getElementById('butt_signUp').innerHTML='Profile';
					document.getElementById('butt_message').innerHTML="Messages <span style='color:lime;font-size:10px' id='messgrCount'></span>";
					document.getElementById('butt_search').innerHTML='Search';
					document.getElementById('butt_community').innerHTML='Community';
					document.getElementById('butt_view').innerHTML='View';
					document.getElementById('butt_friends').innerHTML="Friends <span style='color:lime;font-size:10px' id='friendCount'></span>";
					
					
					/*document.getElementById('butt_search').onclick=function (){panelChange('search')};
					document.getElementById('butt_signUp').onclick=function (){panelChange('signUp')};
					document.getElementById('butt_message').onclick=function (){panelChange('message')};
					document.getElementById('butt_community').onclick=function (){panelChange('community')};
					document.getElementById('butt_view').onclick=function (){panelChange('view')};
					document.getElementById('butt_friends').onclick=function (){panelChange('friends')};
					*/
						$.each(navUnits,function(index,value){
						
							$("#"+value).on("mouseenter mouseleave", function(event){
								$(this).toggleClass("over");
								var searchgIndx=value.split("_");
									document.getElementById(value).onclick=function (){panelChange(searchgIndx[1])};
							})
						
						})

						

				break;
				
				
				default:
				
					
					
					$.each(navUnits,function(index,value){
						
						$("#"+value).html("");
						$("#"+value).removeClass("clickClass");
						$("#"+value).unbind('mouseenter mouseleave');
						document.getElementById(value).onclick= null;
						
					})
					document.getElementById('butt_signUp').style.cursor="pointer";
					document.getElementById('butt_signUp').innerHTML='Sign UP';
					document.getElementById('butt_signUp').onclick= function (){panelChange('signUp')};
					$("#butt_signUp").on("mouseenter mouseleave", function(event){
						$(this).toggleClass("over")		
					})
					
					

					
					//removeClass("clickClass");	
				break;
			
			}		
		}
		}
	})