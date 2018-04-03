define([],function(){

return{
	getTime:function(a)

    {

    var currentTime = new Date()
    var hours = currentTime.getHours()
    var minutes = currentTime.getMinutes()
    var mon = currentTime.getMonth()
    var day = currentTime.getDate()
    var FullYear = currentTime.getFullYear()
    var suffix = "AM";
    if (hours >= 12)
        {
            suffix = "PM";
            hours = hours - 12; 
		} 
    if (hours == 0)
        {
            hours = 12; 
		} 
    if (minutes < 10)
        {
			minutes = "0" + minutes;
        } 
    switch(mon)
        {
        case 0:
            mon = 'January'
            break;
        case 1:
            mon = 'February'
            break;
        case 2:
        mon = 'March'
        break;

        case 3:
        mon = 'April'
        break;

        case 4:
        mon = 'May'
        break;

        case 5:
        mon = 'June'
        break;

        case 6:
        mon = 'July'
        break;

        case 7:
        mon = 'August'
        break;

        case 8:
        mon = 'September'
        break;

        case 9:
        mon = 'October'
        break;

        case 10:
        mon = 'November'
        break;

        case 11:
        mon = 'December'
        break;

        }

    presTime=mon+" "+day+", "+FullYear+" "+hours+":"+minutes+" "+suffix;
    return presTime;
} ,
convertToPhP:function(){
	    var currentTime = new Date()
    var hours = currentTime.getHours()
    var minutes = currentTime.getMinutes()
    var mon = parseInt(currentTime.getMonth())+1;
    var day = currentTime.getDate()
    var FullYear = currentTime.getFullYear()
	
	if(parseInt(day)<10){
		day="0"+day;
	}
	
	if(parseInt(minutes)<10){
		minutes="0"+minutes;
	}
	
	if(parseInt(hours)<10){
		hours="0"+hours;
	}
	
	if(parseInt(mon)<10){
		mon="0"+mon;
	}
	presTime =FullYear +"-"+mon+"-"+day +" "+hours+":"+minutes+":00"
	return presTime;

}
	
	}


})