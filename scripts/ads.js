var messageCheck=1

var advertisements=[
	{
		"adGraphic":"advertiseImages/flashad.gif",
		"adLink":"yahoo.com"
	},
	{
		"adGraphic":"advertiseImages/flashad1.gif",
		"adLink":"msn.com"
	},
	{
		"adGraphic":"advertiseImages/flashad2.gif",
		"adLink":"msn.com"
	}
	,
	{
		//"adGraphic":"advertiseImages/bongo.jpg",
		"adGraphic":"advertiseImages/autoAd.png",
		"adLink":"msn.com"
	},
	{
		"adGraphic":"advertiseImages/adobe.png",
		"adLink":"https://www.adobe.com/creativecloud/photography.html?sdid=695P7SN9&mv=display"
	},
	{
		"adGraphic":"advertiseImages/MurderbevHills.png",
		"adLink":"https://www.adobe.com/creativecloud/photography.html?sdid=695P7SN9&mv=display"
	}



]


ar=0;
function chnAdd()
{
	
	var doit = setInterval(function(){myTimer()},5000);
}
 

 
 function myTimer()
 {
	
	document.getElementById('adDiv').src=global.baseUrl+"/"+advertisements[ar].adGraphic;
	ar=ar+1;
	if(ar==advertisements.length)
	{
		ar=0;
	}
	//updateTime();
		if(messageCheck<3){
		messageCheck=messageCheck+1;
	}
	else{
		messageCheck=1;
		//alert("cehckin")
	}
 }
