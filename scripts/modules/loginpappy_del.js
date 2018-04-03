define(['modules/login'],function(logOs){
	return{
	
	
	
		poopaDoop:function()
		{
			alert("akff")
			},
	
		login:function(direction)
		

{
	strg="none";
	
	switch(direction)
	{
		
		case 'LoggedIn':
			strg="<table><tr><td style='text-align:left;font-size:15px;'>Welcome:&nbsp;<span style='color:#d505f9;font-weight:bold'><u>"+userObj['agape_profile_firstname']+"</u></span></td></tr><tr><td style='text-align:left;'><span style='cursor:pointer;color:lime;font-weight:bold;' onclick=logout()><u>Logout</u></span></td></tr></table>";
			
			$('#lPanel').html(strg);
			document.getElementById('loginPanel').style.display="none";
		break;
		
		default:
		//alert(JSON.stringify(logOs.check))
			/*var divs=document.createElement("div")
			document.getElementById('loginPanel').appendChild(divs);
			
			var labDiv=document.createElement("div");
			labDiv.innerHTML='Username';
			labDiv.className='loginLab'
			
			divs.appendChild(labDiv);
			
			var inputDiv=document.createElement("div");
			inputDiv.className='loginDiv'
			
			divs.appendChild(inputDiv);
			
			var inputField=document.createElement("input")
			inputField.id='username'
			inputField.className='loginField'
			
			inputDiv.appendChild(inputField);
			
			var clearDivs=document.createElement("div")
			clearDivs.className='clearBoth';
			divs.appendChild(clearDivs);

			
			var labDiv=document.createElement("div");
			labDiv.innerHTML='Password';
			labDiv.className='loginLab'
			
			divs.appendChild(labDiv);
			
			var inputDiv=document.createElement("div");
			inputDiv.className='loginDiv'
			
			divs.appendChild(inputDiv);
			
			var inputField=document.createElement("input")
			inputField.id='password'
			inputField.className='loginField'
			
			inputDiv.appendChild(inputField);
			
			var clearDivs=document.createElement("div")
			clearDivs.className='clearBoth';
			divs.appendChild(clearDivs);
			
			
			
			var buttonDiv=document.createElement("div");		
			buttonDiv.className='loginLab'
			divs.appendChild(buttonDiv);
			
			var buttonField=document.createElement("button")
			var buttonFieldr=document.createTextNode("submit");	
			buttonField.addEventListener("click",function(e){alert(3);e.cancelBubble = true});			
			

			
			buttonDiv.appendChild(buttonField);
			buttonField.appendChild(buttonFieldr);
			
			
			var messageDiv=document.createElement("div");		
			messageDiv.className='loginDiv'
			divs.appendChild(messageDiv);
			
			var messageSpan=document.createElement("SPAN");
			messageSpan.id='badpasslink';
			messageSpan.className="messageSpan";
			messageSpan.innerHTML="bad password"*/
			
			strg="<table><tr><td style='text-align:left;'>Username</td><td><input type='text' style='background-color:#a8b7bc;border-radius:4px;border:solid 1px #000000;' id='username'/></td></tr>";
	
			strg=strg+"<tr><td style='text-align:left;'>Password</td><td><input type='text' style='background-color:#a8b7bc;border-radius:4px;border:solid 1px #000000;' id='password' /></td></tr>";
			
			strg=strg+"<tr><td style='text-align:left;'><input type='button' value='button' onclick=login() /></td><td><span style='color:red;display:none;' id='badpasslink' >bad password</span></td></tr></table>";
			document.getElementById('loginPanel').style.display="block";
			$('#loginPanel').html(strg);
		break;
	
		}
}
}

		
})