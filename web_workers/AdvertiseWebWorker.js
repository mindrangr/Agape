 //
var topindex=0;
var cntr=0,slideUser=0; 
var doit = setInterval(function(){
	rotateAds();
	slideUser=slideUser+1;
	
},15000);


function rotateAds(){
	var obj={};
	obj.type="rotateAds";
	postMessage(obj)
}


function rotateUsers(){
	var obj={};
	obj.type="rotateUsers"
	
	postMessage(obj)
}

