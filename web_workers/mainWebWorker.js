 //
var topindex=0;
var cntr=0,userCntr=0; 
var maindoit = setInterval(function(){
	userCntr=userCntr+1;
	if(userCntr==6){
		userCntr=0;
		rotateUsers()
	}

},1000);


function rotateAds(){
	
}


function rotateUsers(){
	var obj={};
	obj.type="rotateUsers"
	
	postMessage(obj)
}

