define([],function(){
	return{
	
		getAge: function(mysqlBirthdate)
		{		
			
			var t=mysqlBirthdate
			mySql=t.split("-");
			mySqlYear=mySql[0];
			mySqlMonth=mySql[1];
			mySqlDay=mySql[2];
			
			
			var tim=new Date();
			var days=tim.getDate()
			var years = tim.getFullYear()
			var age;
			mysD=mySqlDay.split(" ");
			var daymatch="smaller";
			if(parseInt(mysD[0])<=parseInt(days))
			{
				daymatch="bigger";
			}
			
			
			if(parseInt(mySqlMonth)<parseInt(tim.getMonth())+1)
			{
				age=parseInt(tim.getFullYear()) - parseInt(mySqlYear);
			}
			
			
			if(parseInt(mySqlMonth)==parseInt(tim.getMonth())+1 && daymatch=='bigger')
			{
				age=parseInt(tim.getFullYear()) - parseInt(mySqlYear);
			}
			
			if(parseInt(mySqlMonth)==parseInt(tim.getMonth())+1 && daymatch=='smaller')
			{
				age=parseInt(tim.getFullYear()) - parseInt(mySqlYear)-1;
			}		
			
			
			if(parseInt(mySqlMonth)>parseInt(tim.getMonth())+1 )
			{
				age=parseInt(tim.getFullYear()) - parseInt(mySqlYear);			
			}
			
			return age;		
		}
	
	
	}




})