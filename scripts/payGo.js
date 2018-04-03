define([], function() { 
	console.log("Function : purchaseProduct"); 
	return {
		bodyGo:function()
		{
			
				alert("yeppera")
				quesObject.buildList('Friendship');
				loginpappy('direction')
				getstateObj('agape_profile_state');
				alert("yeppera")
				if(typeof(Storage)!=="undefined")
				{	
					if(sessionStorage.getItem('login')!=null && sessionStorage.getItem('login')=='true')
					{						
						log=sessionStorage.getItem('login');
							
						var oObj=sessionStorage.getItem('user');
						window.userObj=$.parseJSON(oObj);						
						loginpappy('LoggedIn');
						changeNavPanel('LoggedIn','par1');
						populateForm();						
						popOfProf();						
						getMessages(1);
						getFirstsearch(1);						
						loadSearchHeader();
						getFrRequest(1)
						cityFiller1(window.userObj['agape_profile_state'],'se_agape_profile_city');
						document.getElementById('holding').style.backgroundImage="url('images/newb_go_in.jpg')";
						document.getElementById('auxDix').style.display="block";
						document.getElementById('addOn').style.display="block";
						chnAdd();
						updateTime();
						loadPicContainer()

						
						
						
					}
					else
					{
						alert('There is an issue with your account');
					}
					

					$('#lSliderButt').click(function() {
						l_slide()	
					});
					
					$('#rSliderButt').click(function() {
						cudaBrown()	
					});

					
				}
				else
				{
					alert('You must upgrade your browser to access this website');
				}					
		}
	}
})



// function bodyGo()
			// {
				// alert(3)
				// quesObject.buildList('Friendship');
				// loginpappy('direction')
				// getstateObj('agape_profile_state');
				
				// if(typeof(Storage)!=="undefined")
				// {	
					// if(sessionStorage.getItem('login')!=null && sessionStorage.getItem('login')=='true')
					// {						
						// log=sessionStorage.getItem('login');
							
						// var oObj=sessionStorage.getItem('user');
						// window.userObj=$.parseJSON(oObj);						
						// loginpappy('LoggedIn');
						// changeNavPanel('LoggedIn','par1');
						// populateForm();						
						// popOfProf();						
						// getMessages(1);
						// getFirstsearch(1);						
						// loadSearchHeader();
						// getFrRequest(1)
						// cityFiller1(window.userObj['agape_profile_state'],'se_agape_profile_city');
						// document.getElementById('holding').style.backgroundImage="url('images/newb_go_in.jpg')";
						// document.getElementById('auxDix').style.display="block";
						// document.getElementById('addOn').style.display="block";
						// chnAdd();
						// updateTime();
						// loadPicContainer()

						
						
						
					// }
					// else
					// {
						//alert('There is an issue with your account');
					// }
					

					// $('#lSliderButt').click(function() {
						// l_slide()	
					// });
					
					// $('#rSliderButt').click(function() {
						// cudaBrown()	
					// });

					
				// }
				// else
				// {
					// alert('You must upgrade your browser to access this website');
				// }				
			// }