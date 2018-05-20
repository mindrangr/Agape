<?php
session_start(); 
set_time_limit(0);
include("Config_files/config1.php");

//https://p3nlmysqladm001.secureserver.net/grid50/3733/index.php?uniqueDnsEntry=microvestorsusa.db.9301105.hostedresource.com
mysql_close($con);
function loadProfile($num)
{
	//9399
	include("Config_files/config1_states.php");
	$strg1="select distinct (state_full)  from states";
	$result2=mysql_query($strg1);
	$colnum = mysql_num_fields($result2);
	//$this->pass="none";
	$cntr=0;
	$stateObj = array();
	while($row = mysql_fetch_assoc($result2))
	{
		$stateObj[$cntr] = array();
		for($ctr=0;$ctr<$colnum;$ctr++)
		{
			$tag=mysql_field_name($result2, $ctr);
			$stateObj[$cntr][$tag]=$row[$tag];
			
		}
			
			//$stateObj[$cntr]['cities']=explode("$$",$stateObj[$cntr]['state_cities']);
			
		$cntr=$cntr+1;
	}
	$staeindex=rand(1,count($stateObj)-1);


	//echo $stateObj[$staeindex]['state_full']." </br>";
	//
	include("Config_files/config1.php");
	$bName=array("Brandon","Doug","Gary","Adam","Hank","Richard","Kevin","Jaron","Henry","Aaron","Darren","Bobby","Marcus","Elliot","Rick","John","Josh","Jonathan","David","Todd","Harry","Joe","Vernon","Gary","Tony","Evan","Ashe","Victor","Larry","Jordan","George","Kevin","Brian","Bryant","Lamar","Doug","Anthony","Gordan","Tommy","Eddie","William","Brendan","Fred","Michael","Sam","Chris","Dwayne","Dexter","Charles","Benjamin","Mike","Tim","Carlos","Lance","Charley","Devin","Victor","Allen","Roger","Mark","Lee","Brad","John","Tommy","Kurt","Andre","Jaelyn","Tony","Patrick","Ray","Steve","Adam","Jermaine","Todd","Rodney","Terry","Vincent","Daniel","Thomas","Alex","Danny","Charles","Greg","Norman","Kirk","Barry","William","Jeff","Michael");

	$gName=array("Sarah","Michelle","Raechel","Tammy","Latrece","Taylor","Ellen","Gail","Angela","Leslie","Shelley","Tina","Regina","Lisa","Tracy","Michelle","Kim","Stephanie","Katrina","Barbara","Linda","Leena","Christina","Carolyn","Julie","Debra","Olivia","Ruth","Ellen","Tammy","Tonya","Vickie","Rebecca","Tia","Lashawn","Renee","Marie","Denise","Joann","Ashley","Connie","Paulette","Andrea","Gwendolyn","Tori","Patti","Rhonda","Janice","Gabriel","Geraldine","Gina","Jessica","Belinda","Beverly","Kathryn","Kelly","Kylie","Kristy","Melissa","Lisa","Tina","Jordan","Ellen","Brianna","Tobi","Stacie","Lynn","Karen","Jasmine","Brandy","Jamie","Elaine","Renee","Angela","Carla","Valerie","Rosalind","Patricia","Danielle","Kimberly","Kim","Amy","Jill","Carla","Gail","Karen");

	$lnames=array("Davis","Williams","Adams","Wilson","Preston","Williams","Harris","Andersen","Martin","Duncan","Wade","Billy","Jones","Stone","Curry","Black","Gonzalez","Miller","Brown","Turner","Willis","Stacy","Beckman","Graham","Johnson","Cantrell","Owen","Reece","Latimore","Dorian","Ponder","Brownley","Diaz","Cory","Dunn","Beckworth","Chandler","Blouin","Wynn","Reynolds","Crawford","Phillips","Douglas","Estes","Wallace","Dupree","Jenkins","Goins","Blake","Murphy","Jones","Durham","Forrest","Vickers","Jackson","Smith","Perry","Connor","Johnson","Maddock","Lester","Kemp","Marshall","Thomas","Finnie","Cooper","Berry","Robinson","Grant","Kurtis","Cambridge","Durand","Scott","Delaney","Washington","Daniels","Perez","Lucas","Little","Johnson","Gibson","Sanchez","Johnson","Jones","Brady","Winters","Somers","Lester","Norman","Carter","Wilson","Washington","Oliver","Cooper","Dozier","Carpenter","Rogers","Johnson","Bradley","Lewis","Dreggars","Berry","Cole","Phillips","Johnson","Valentine");

	$latinL=array("Gomez","Garcia","Lopez","Rodriguez","Ramirez","Rivera","Delgado","Castro","Barrera","Trujillo","Cardenas","San Tiago","Diaz");
	
	$bType=array("Not Answered","Slim","Slim","Medium","Medium","Medium","Medium","Healthy","Healthy","Muscular","Big and Beautiful","Overweight");

	$input1 = array("Love", "Honesty", "Trust", "Emotional Support", "Financial Support", "Sex", "Respect", "Loyalty", "Commitment", "Friendship", "Spiritual Partner","Other");
	$Alastnames = array("Zhang","Chin","Li","Wu","Huang","Chin","Yang","Lu","Song","Yang","Ma","Xiao");

	$proSal=array("Not Answered","$0 - $32,000","$32,001 - $70,000","$32,001 - $70,000","$70,001 - $105,000","$105,001 - $135,000","$135,001 - $150,000","$150,001 - $175,000","$175,001 - $200,000","$200,001+");
	$political=array("Not Answered","Democratic Party","Republican Party","Green Party","Libetarian Party","Constitution Party","Independent Party","Not Important");
	
	$proRel=array("Not Answered","Not Answered","Christianity","Christianity","Christianity","Christianity","Islam","Judaica","Islam","Other","Not Important","Christianity");

	$proInt=array("Not Answered","Not Answered","Not Answered","Not Answered","Friendship","Friendship","Business contacts","Relationship","Marriage","Marriage","Other","Other","Relationship");

	$proAlc=array("Not Answered","Never","Never","Never","Never","Occasionally","Socially","Often","Occasionally","Occasionally","Socially","Socially","Never","Often");
	
	$profOpts=array("Love", "Honesty", "Trust", "Emotional Support", "Financial Support", "Sex", "Respect", "Loyalty", "Commitment", "Friendship", "Spiritual Partner");
	
	$mheight = array('5ft4','5ft5','5ft6','5ft6','5ft6','5ft7','5ft7','5ft7','5ft8','5ft8','5ft9','5ft9','5ft9','5ft9','5ft9','5ft10','5ft10','5ft10','5ft11','5ft11','6ft0','6ft0','6ft0','6ft1','6ft2','6ft3','6ft4','6ft5','6ft6','6ft7','6ft8','6ft9','6ft10','6ft11','7ft0');
	
	$wheight = array('5ft1','5ft2','5ft3','5ft3','5ft4','5ft4','5ft5','5ft5','5ft6','5ft6','5ft6','5ft7','5ft7','5ft7','5ft8','5ft8','5ft8','5ft9','5ft9','5ft9','5ft10','5ft11','5ft11','5ft11','6ft0','6ft1','6ft2','6ft3','6ft4');
	$ageRange= array(18,26,33,39,45,51,58,66,75);

	$educat = array("Not Answered","High School","Some College","AA Degree","BA/BS","Masters","Doctorate");

	$hobbiesArray = array("Jogging","Sewing","Electronics","Weight lifting","Softball","Attending Sporting events","Singing/Rapping","Comedy Clubs","Water sports","Vegas!","Poetry","Music","Watching movies","Traveling","Fishing","Reading","Flipping properties","Sex","Entertaining","Investing","Chess","Gaming","Prayer","Road trips","Partying","DIY","Pets");
	$children = array("Not Answered","Yes, older live away","Yes, older live at home","Yes, teens","Yes, young children","Yes, teens","Yes, teens","Yes, young children","No","Lets discuss");
	$profDup="";
	
	$futurekids = array("Not Answered","Yes","No","Lets talk");
	
	$sals = array("2000","5000","10000","15000","25000","50000","100000","250000","500000","1000000","2500000","5000000","10000000","Not Answered");
	
	$descriptions=array("ut perspiciatis Reading unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis","You have to feel. It is the reason you are here on earth. You are here to risk your heart","No power in the sky above or in the earth below—indeed, nothing in all creation will ever be able to separate us from the love of God","suscipit laboriosam, nisi ut aliquid Rapping ea commodi consequatur?","Hello also Water of al-Wuhayshi having been martyred","Mine are as much real members of the family as my wife and children and my little granddaughter","get along, avoid the long, hard stare that movies intimidate","With revised final numbers on Gaming, the Universal film beat the previous Prayer","Tell yourself you tasted as Investing as you could","omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut Reading","voluptas sit Road trips aut odit aut fugit","Marriage licences with expiration dates?","With revised final numbers on Gaming, the Universal film beat the previous record");

	//index for determining race in photolink
	$arace="";
	
	
	$racePic="";
	$gender="";
	$aEmail="";
	$intentions="";
	$alcohol="";
	$qString="select * from agape_profile";

	$cctr=4001;
	for($t=0;$t<1;$t++){
	for($a=4001;$a<5501;$a++)
	{
		$numOpts=rand(1,count($profOpts)-1);	
		$selOpts="Not Answered";
		if(0>=0)
		{
			for($k=0;$k<$numOpts;$k++)
			{
				$veal=rand(0,count($profOpts)-1);
				if($selOpts=="Not Answered")
				{
					$selOpts="[\"".$profOpts[$veal]."\"";
				}else{
					if(stristr($selOpts,$profOpts[$veal])==false)
					{
						$selOpts=$selOpts.",\"".$profOpts[$veal]."\"";	
					}else{
						$k=$k-1;
					}
				}
			}
		}
		$selOpts=$selOpts."]";



		$selOpts1="Not Answered";
		$numOpts=rand(1,count($profOpts)-1);	
		if(0>=0)
		{
			for($k=0;$k<$numOpts;$k++)
			{
				$veal=rand(0,count($profOpts)-1);
				if($selOpts1=="Not Answered")
				{
					$selOpts1="[\"".$profOpts[$veal]."\"";
				}
				else
				{
					if(stristr($selOpts1,$profOpts[$veal])==false)
					{
						$selOpts1=$selOpts1.",\"".$profOpts[$veal]."\"";		
					}
					else
					{
						$k=$k-1;
					}
				}

				


			}
			
		}
		$selOpts1=$selOpts1."]";



		//echo $selOpts."<br>";
		//echo $selOpts1."<br><br>";



		
		$race1=rand(1,100);
		//Number of profile photos 
		$race2=rand(1,30);
		
		
		$race3=rand(1,6);
		$raceCard="";
		$latinrace="none";
		if($race1<30)
		{
			$arace="b";
			$raceCard="Black";
		}
		
		if($race1>=30 && $race1<70)
		{
			$arace="w";
			$raceCard="White";			
		}
		
		if($race1>=70 && $race1<90)
		{
			$arace="l";
			$raceCard="Latino";
		}

		if($race1>=90)
		{
			$arace="a";
			$raceCard="Asian";
		}
		
		
		$gend=rand(1,100);
		$aEmail="email".$cctr;
		$uname="uname".$cctr;
		$pword="pword".$cctr;
		$height="";
		$partnerGender="true";
		$agapepolitical="";
		$agapepartnerpolitical;
		$politicalPartyIndex = rand(1,100);
		
		if($politicalPartyIndex>0 && $politicalPartyIndex <30){
			$agapepolitical="Democratic Party";
		}
		
		if($politicalPartyIndex>=30 && $politicalPartyIndex <50){
			$agapepolitical="Republican Party";
		}
		
		if($politicalPartyIndex>=50 && $politicalPartyIndex <65){
			$agapepolitical="Independent Party";
		}
		
		if($politicalPartyIndex>=65 && $politicalPartyIndex <70){
			$agapepolitical="Green Party";
		}
		
		if($politicalPartyIndex>=70 && $politicalPartyIndex <75){
			$agapepolitical="Libetarian Party";
		}
		
		if($politicalPartyIndex>=75 && $politicalPartyIndex <101){
			$agapepolitical="Not Important";
		}
		$politicalPartyIndex = rand(1,100);
		
		if($politicalPartyIndex>0 && $politicalPartyIndex <60){
			$agapepartnerpolitical=$agapepolitical;
		}
		
		if($politicalPartyIndex>=60 && $politicalPartyIndex <101){
			$agapepartnerpolitical="Not Important";
		}
		
		
		if($gend<50)
		{
			$race2=rand(1,40);


			if($raceCard=="Latino"){
				$race2=rand(1,15);
			}


			if($raceCard=="Asian"){
				$race2=rand(1,15);
			}
			
			$salary=rand(0,count($sals)-1);
			$salcheck=$sals[$salary];
			$ins=$salary;
			if($salary>=5){
				$ins=$salary-rand(0,2);
			}
			$otehrsal=$sals[$ins];
			
			
			$fnameInx=rand(0,count($bName)-1);
			$gthig=rand(0,count($mheight)-1);
			$firstname=$bName[$fnameInx];
			//height men
			$height=rand(64,84);	
			$addr=rand(0,5);
			$agape_partner_height=$height-$addr;	
		
			$racePicRan="images/male-icon.jpg";
			$racePic1="profileImages/male".$race2."_".$arace.".jpg";
			
			
			
			
			$photosetup=rand(1,100);
			if($photosetup>10)
			{
				$racePic1="profileImages/male".$race2."_".$arace.".jpg";
			}
			else
			{
				$racePic1="images/male-icon.jpg";
			}
			$racePic="{\"defaultPic\":\"".$racePic1."\",\"defaultPicTitle\":\"My Pics\",\"Pic1\":\"".$racePic1."\",\"Pic1Title\":\"Untitled\",\"Pic2\":\"Untitled\",\"Pic2Title\":\"Untitled\",\"Pic3\":\"Untitled\",\"Pic3Title\":\"Untitled\",\"Pic4\":\"Untitled\",\"Pic4Title\":\"Untitled\",\"Pic5\":\"Untitled\",\"Pic5Title\":\"Untitled\",\"Pic6\":\"Untitled\",\"Pic6Title\":\"Untitled\",\"Pic7\":\"Untitled\",\"Pic7Title\":\"Untitled\"}";		
			$gender="Male";
			$meter=rand(0,200);
			if($meter<15){
				$partnerGender="Male";
			}
			if($meter>=15 && $meter<22){			
				$partnerGender="Either";
			}
			if($meter>=22){
				$partnerGender="Female";
			}
		}else{
			if($raceCard=="Latino" ){
				$race2=rand(1,15);
			}else{
				$race2=rand(1,45);
			}


			if($raceCard=="Asian"){
				$race2=rand(1,15);
			}
			
			
			$salary=rand(0,count($sals)-1);
			$salcheck=$sals[$salary];
			$ins=$salary;
			if($salary<=6){
				$ins=$salary+rand(0,3);
			}
			$otehrsal=$sals[$ins];
			
			
			$fnameInx=rand(0,count($gName)-1);
			$firstname=$gName[$fnameInx];
			$gthig=rand(0,count($wheight)-1);
			
			//height
			$height=rand(52,80);
			$addr=rand(0,4);
			$agape_partner_height=$height+$addr;
			
			$racePicRan="images/female-icon.jpg";
			$racePic1="profileImages/female".$race2."_".$arace.".jpg";
			$photosetup=rand(1,100);
			if($photosetup>10)
			{
				$racePic1="profileImages/female".$race2."_".$arace.".jpg";
			}
			else
			{
				$racePic1="images/female-icon.jpg";
			}			
			$racePic="{\"defaultPic\":\"".$racePic1."\",\"defaultPicTitle\":\"My Pics\",\"Pic1\":\"".$racePic1."\",\"Pic1Title\":\"Untitled\",\"Pic2\":\"Untitled\",\"Pic2Title\":\"Untitled\",\"Pic3\":\"Untitled\",\"Pic3Title\":\"Untitled\",\"Pic4\":\"Untitled\",\"Pic4Title\":\"Untitled\",\"Pic5\":\"Untitled\",\"Pic5Title\":\"Untitled\",\"Pic6\":\"Untitled\",\"Pic6Title\":\"Untitled\",\"Pic7\":\"Untitled\",\"Pic7Title\":\"Untitled\"}";
			$gender="Female";
			$meter=rand(0,200);
			


			if($meter<15){
				$partnerGender="Female";
			}
			if($meter>=15 && $meter<22){			
				$partnerGender="Either";
			}
			if($meter>=22){
				$partnerGender="Male";
			}


		}
		
		
		$childreindex=rand(0,count($children)-1);
		$childrei=$children[$childreindex];
		$childrei=str_replace("'","\'",$childrei);

		$lnameInx=rand(0,count($lnames)-1);
		$bTypeInx=rand(0,count($bType)-1);
		$aPbTypeInx=rand(0,count($bType)-1);


		
		
		// state and city picker
		$spickerRtio="";
		$city="";
		$state="";
		$intpro=rand(0,count($proInt)-1);
		$intentions=$proInt[$intpro];
	
		
		$stated=array();
		
		$newState="";
		$newCity="";
		
		$stateRand = rand(0,count($stateObj)-1);
		
		//print_r($stated);
		$newTon=$stateObj[$stateRand]['state_full'];
		$newCi=4;
		
	//echo $newTon."<br>";
		include("Config_files/config1_states.php");

		$strg1="select distinct (city) as city from states where state_full='".$newTon."'";
		$result2=mysql_query($strg1);
		$colnum = mysql_num_fields($result2);
		//$this->pass="none";
		$cntr=0;
		$cityObj = array();
		while($row = mysql_fetch_assoc($result2))
		{
			$cityObj[$cntr] = array();
			for($ctr=0;$ctr<$colnum;$ctr++)
			{
				$tag=mysql_field_name($result2, $ctr);
				$cityObj[$cntr][$tag]=$row[$tag];
				
			}
				
				//$stateObj[$cntr]['cities']=explode("$$",$stateObj[$cntr]['state_cities']);
			//echo $cityObj[$cntr]['city']."<br>";
			$cntr=$cntr+1;
		}

		//echo "<br/><br>";
		$cityRand = rand(0,count($cityObj)-1);
		
		//print_r($stated);
		$newcitty=$cityObj[$cityRand]['city'];

		$state=$newTon;
		$city=$newcitty;
		//$state="Oklahoma";
		//$city="Coyle";
		// setting up specific states index is state
		//$newCityIndx=rand(0,count($stateObj[2]['cities'])-1);
		//$newCity=$stateObj[2]['cities'][$newCityIndx];
		
		//echo $newCity.",".$state."<br>";
		//echo $stated[31]['state']." ".$newCity."</br>";
		//$city=$newCity;
		//$state=$stated[31]['state'];
	
	//registration date
		$regday=rand(1,29);
		$regmon=rand(1,12);
		$regyear=rand(2013,2015);
		$regdate=$regyear."-".$regmon."-".$regday;
		
		
		// birthday stuff
		$day=rand(1,28);
		$mon=rand(1,12);
		$year=rand(0,30)+1965;
		$dinko=$year."-".$mon."-".$day;

		$mydate=getdate(date("U"));
		
		$age1= "$mydate[year]"-$year;

		if("$mydate[year]"<$mon){
			$age1=$age1-1;
		}
		
		//Update Intentions
			$inte = array("Friendship","Marriage","Casual Dating","Business Contact","Other");
			$intet="Marriage";
			$rend=rand(1,100);
			if($rend<11)
			{			
				$intet="Other";
			}
			if($rend>10 && $rend<26)
			{
				$intet="Business Contact";
			}
			if($rend>25 && $rend<46)
			{
				$intet="Casual Dating";
			}
			if($rend>45 && $rend<66)
			{
			
				$intet="Friendship";
			}
			if($rend>65 && $rend<101)
			{			
				$intet="Marriage";
			}
			
			
			//agape profile education
			$edu="";
				
				$verEduc=rand(1,104);
				if($verEduc<20){
					$edu="Not Answered";
				}
				
				if($verEduc>=20 &&  $verEduc<40 ){
					$edu="High School";
				}
				
				if($verEduc>=40 &&  $verEduc<55){
					$edu="Some College";
				}
				
				if($verEduc>=55 &&  $verEduc<70){
					$edu="AA Degree";
				
				}
				
				if($verEduc>=70 &&  $verEduc<80){
					$edu="AA Degree";
				}
				
				if($verEduc>=80 &&  $verEduc<88){
					$edu="AA Degree";
				}
				
				if($verEduc>=88 &&  $verEduc<95){
					$edu="BA/BS";
				}
				
				if($verEduc>=95 &&  $verEduc<100){
					$edu="Masters";
				}
				
				if($verEduc>=100 &&  $verEduc<104){
					$edu="Doctorate";
				}
				
				//agape_partner_education
				$parteducationIndex=rand(0,count($educat)-1);
				$parteducation=$educat[$parteducationIndex];

				//agape_partner_race
				$agape_partner_race="";
				$Prace=rand(1,1000);
				if($Prace>660){
					$agape_partner_race=$raceCard;
				}
				 
				if($Prace>400 && $Prace<=660){
					$agape_partner_race="Not Important";
				}
			
			
			 	if($Prace>300 && $Prace<=400){
					$agape_partner_race="White";
			 	}
				
				if($Prace>250 && $Prace<=300){
					$agape_partner_race="Mediterranean";
			 	}

				if($Prace>200 && $Prace<=250){
					$agape_partner_race="Mediterranean";
			 	}
			
				if($Prace>175 && $Prace<=200){
					$agape_partner_race="Bi-racial B/W";
					//Not Answered$$Not Answered**Black$$Black**White$$White**Latino$$Latino**Asian$$Asian**Other$$Other**Not Important$$Not Important
			 	}

				if($Prace>150 && $Prace<=175){
					$agape_partner_race="Bi-racial L/W";
					//Not Answered$$Not Answered**Black$$Black**White$$White**Latino$$Latino**Asian$$Asian**Other$$Other**Not Important$$Not Important
			 	}					
			 
				if($Prace>100 && $Prace<=150){
					$agape_partner_race="Black";
				}	
				 
				if($Prace>40&& $Prace<=100){
					$agape_partner_race="Other";
				}	
				 
				if($Prace<=4){
					$agape_partner_race="Asian";
				}	
				 $agedirection=rand(0,count($ageRange)-1);
				 $partnerAge=$ageRange[$agedirection];
			
//echo $agape_partner_race."--".$raceCard;

			
			
		$profileDescriptIndex=rand(0,count($descriptions)-1);
		$partnerDescriptIndex=rand(0,count($descriptions)-1);
		$perfectDate=rand(0,count($descriptions)-1);
		
		$prode=$descriptions[$profileDescriptIndex];
		$parde=$descriptions[$partnerDescriptIndex];
		$pdate=$descriptions[$perfectDate];
			
		$fnameInx=(int)$fnameInx;
		$lnameInx=(int)$lnameInx;	
		
		$alcInx=rand(0,count($proAlc)-1);
		$alcohol=$proAlc[$alcInx];
		
		
			$agape_partner_alcohol="";
			 $Palcohol=rand(1,100);
			 
			 If($Palcohol>20){
				$agape_partner_alcohol=$alcohol;
			 }
			 
			 If($Palcohol<=20){
				$agape_partner_alcohol="Socially";
			 }
		$drugIndx=rand(0,count($proAlc)-1);
		$drugUse=$proAlc[$drugIndx];

		$drugIndx=rand(0,count($proAlc)-1);
		$partnerdrugUse=$proAlc[$drugIndx];
		
		$salInx=rand(0,count($proSal)-1);
		$sal=$proSal[$salInx];
	
		$relInx=rand(0,count($proRel)-1);
		$rel=$proRel[$relInx];
		
		
		$futurekids1=$futurekids[rand(0,count($futurekids)-1)];
		
		//echo $fnameInx." ".$lnameInx."<br/>";
		//$state="Maryland";
		//$city="Brinklow";

		$lastname=$lnames[$lnameInx];

		$hobbies=array();
		
		$hobbiesIndx=rand(0,4);
		$e=0;
		while(count($hobbies)<=$hobbiesIndx){
			$pass='true';
			$re=rand(0,count($hobbiesArray)-1);

			for($w=0;$w<count($hobbies);$w++){
				if($hobbies[$w]==$hobbiesArray[$re]){
					$pass='false';
				}
			}

			if($pass=='true'){
				$hobbies[$e]=$hobbiesArray[$re];
				$e=$e+1;
			}

			

		}


		$hobob=json_encode($hobbies);

		$agape_profile_advertiseCode=$hobbies;

		if($raceCard=="Latino"){
			$lnameInx=rand(0,count($latinL)-1);
			$lastname=$latinL[$lnameInx];
		}

		if($raceCard=="Asian"){
			$lnameInx=rand(0,count($Alastnames)-1);
			$lastname=$Alastnames[$lnameInx];
		}

		$we=$gender."_".$raceCard."_".$rel."_".$newTon."_".$agapepolitical."_".$edu;
		//echo $lastname."--".$raceCard."<br/>";
		//agape_partner_political,


		mysql_close($con);
		include("Config_files/config1.php");

		$debut="insert into agape_profile (agape_profile_firstname, agape_profile_lastname, agape_profile_bodyType, agape_profile_gender, agape_profile_city, agape_profile_state, agape_profile_height, agape_profile_email, agape_profile_religion, agape_profile_username,agape_profile_password,agape_profile_alcohol,agape_profile_default_img,agape_profile_opts,agape_profile_race,agape_profile_dateOfBirth,agape_profile_intentions, agape_partner_opts, agape_profile_nation,agape_partner_race,agape_partner_alcohol,agape_profile_education,agape_partner_age_range,agape_profile_drugs,agape_partner_education,agape_partner_drugs,agape_partner_children,agape_partner_gender,agape_profile_age,agape_profile_friends,agape_profile_political,agape_partner_political,agape_profile_register_date,agape_partner_bodyType,agape_partner_religion,agape_partner_salary,agape_profile_salary,agape_profile_description,agape_profile_partner_description,agape_profile_firstDate,agape_partner_height,agape_profile_children,agape_profile_children_future,agape_profile_recreation,agape_profile_presidentAccount,agape_profile_romanceAccount,agape_vote_presidentialCandidates,agape_profile_memberID,agape_vote_recordThumbs,agape_vote_recordPolls,agape_profile_presidentAccount_type,agape_profile_advertiseCode) values ('".$firstname."','".$lastname."','".$bType[$bTypeInx]."','".$gender."','".$city."','".$state."','".$height."','".$aEmail."','".$rel."','".$uname."','".$pword."','".$alcohol."','".$racePic."','".$selOpts."','".$raceCard."','".$dinko."','".$intet."','".$selOpts1."','USA','".$agape_partner_race."','".$agape_partner_alcohol."','".$edu."','".$partnerAge."','".$drugUse."','".$parteducation."','".$partnerdrugUse."','".$childrei."','".$partnerGender."','".$age1."','[]','".$agapepolitical."','".$agapepartnerpolitical."','".$regdate."','".$bType[$bTypeInx]."','".$rel."','".$otehrsal."','".$salcheck."','".$prode."','".$parde."','".$pdate."','".$agape_partner_height."','".$childrei."','".$futurekids1."','".$hobob."','InActive','InActive','[]','".$cctr."','[]','[]','None','".$we."')";
		echo $a." - ".$debut."<br/><br/>";
	
		mysql_query($debut);
		$cctr=$cctr+1;
	}	
	
	}
}

function loadMessage()
{
	
	include("Config_files/config1.php");
	$messObj=array("I have more respect for a man who lets me know where he stands, even if he's wrong. Than the one who comes up like an angel and is nothing but a devil.","There is nothing better than adversity. Every defeat, every heartbreak, every loss, contains its own seed, its own lesson on how to improve your performance the next time.","Don't cry because it's over, smile because it happened","I'm selfish, impatient and a little insecure. I make mistakes, I am out of control and at times hard to handle. But if you can't handle me at my worst, then you sure as hell don't deserve me at my best","You've gotta dance like there's nobody watching,Love like you'll never be hurt,Sing like there's nobody listening,
And live like it's heaven on earth.","I've learned that people will forget what you said, people will forget what you did, but people will never forget how you made them feel.","If you're not ready to die for it, put the word 'freedom' out of your vocabulary.","You only live once, but if you do it right, once is enough.","To live is the rarest thing in the world. Most people exist, that is all","It is better to be hated for what you are than to be loved for what you are not.","I'm Not Afraid of death; I just don't want to be there when it happens.","I'm the one that's got to die when it's time for me to die, so let me live my life the way I want to.","Who are you to judge the life I live? I know I'm not perfect -and I don't live to be- but before you start pointing fingers...make sure you hands are clean!","The fear of death follows from the fear of life. A man who lives fully is prepared to die at any time.","Just when you think it can't get any worse, it can. And just when you think it can't get any better, it can.","Life will break you. Nobody can protect you from that, and living alone won't either, for solitude will also break you with its yearning. You have to love. You have to feel. It is the reason you are here on earth. You are here to risk your heart. You are here to be swallowed up. And when it happens that you are broken, or betrayed, or left, or hurt, or death brushes near, let yourself sit by an apple tree and listen to the apples falling all around you in heaps, wasting their sweetness. Tell yourself you tasted as many as you could","Life's under no obligation to give us what we expect.","Don't say you don't have enough time. You have exactly the same number of hours per day that were given to Helen Keller, Pasteur, Michaelangelo, Mother Teresa, Leonardo da Vinci, Thomas Jefferson, and Albert Einstein.","America will never be destroyed from the outside. If we falter and lose our freedoms, it will be because we destroyed ourselves.","You can fool all the people some of the time, and some of the people all the time, but you cannot fool all the people all the time.","When you get released from the NFL it's Not A pleasant experience and I may have sulked for about two or three years. Then I was like, 'You know what? It's time to get back on the wagon.' I have nothing to be ashamed of.","And we reduce almost all male-female problems by working on both the female and the male. And that usually means having both sexes take responsibility.","Before success comes in any man's life, he's sure to meet with much temporary defeat and, perhaps some failures. When defeat overtakes a man, the easiest and the most logical thing to do is to quit. That's exactly what the majority of men do.","Strength and growth come only through continuous effort and struggle.","I like getting married, but I don't like being married.","I was married awfully young and I felt trapped. My wife had been divorced and all the time we were married we were out of the Church. It wasn't until we were divorced that we became good Catholics again.","I don't really care what they think about me.","It is better to remain silent and be thought a fool than to open one's mouth and remove all doubt.","A man is never more truthful than when he acknowledges himself a liar.","Forgiveness is the fragrance that the violet sheds on the heel that has crushed it.","The reports of my death have been greatly exaggerated.","The secret of getting ahead is getting started.","I don't like to commit myself about heaven and hell - you see, I have friends in both places.","All you need is ignorance and confidence and the success is sure.","You can't depend on your eyes when your imagination is out of focus.","Any emotion, if it is sincere, is involuntary.","I don't understand the mentality of a rock fan, being obsessed with two or three songs from 25 years ago. I'm not that kind of a fan.","Take risks. Ask big questions. Don't be afraid to make mistakes; if you don't make mistakes, you're not reaching far enough.","No matter how old a mother is she watches her middle-aged children for signs of improvement.","It is not easy to be sure that being yourself is worth the trouble, but we do know it is our sacred duty.","Nothing revives the past so completely as a smell that was once associated with it.","Complacency is a state of mind that exists only in retrospective: it has to be shattered before being ascertained.","But they that wait upon the LORD shall renew their strength; they shall mount up with wings as eagles; they shall run, and not be weary; and they shall walk, and not faint.","And I am convinced that nothing can ever separate us from God’s love. Neither death nor life, neither angels nor demons, neither our fears for today nor our worries about tomorrow—not even the powers of hell can separate us from God’s love. No power in the sky above or in the earth below—indeed, nothing in all creation will ever be able to separate us from the love of God that is revealed in Christ Jesus our Lord.","Consider it all joy, my brethren, when you encounter various trials, knowing that the testing of your faith produces endurance. And let endurance have its perfect result, so that you may be perfect and complete, lacking in nothing.","It is better to lead from behind and to put others in front, especially when you celebrate victory when nice things occur. You take the front line when there is danger. Then people will appreciate your leadership.","For to be free is not merely to cast off one's chains, but to live in a way that respects and enhances the freedom of others.","I like your Christ, I do not like your Christians. Your Christians are so unlike your Christ.",
"It is better to lead from behind and to put others in front, especially when you celebrate victory when nice things occur. You take the front line when there is danger. Then people will appreciate your leadership.","If you want to make peace with your enemy, you have to work with your enemy. Then he becomes your partner.");
	
	$qString="select agape_profile_memberID,agape_profile_username,agape_profile_default_img from agape_profile";
	$result=mysql_query($qString);
	
	$profile_memberID=array();
	$profile_username=array();
	$profile_url=array();
	$cntr=0;
	$is="false";
	while($row = mysql_fetch_assoc($result))
	{

		$profile_memberID[$cntr]=$row['agape_profile_memberID'];
		$profile_username[$cntr]=$row['agape_profile_username'];
		$profile_url[$cntr]=$row['agape_profile_default_img'];
		$cntr++;
	}
	//echo $cntr
	
	

	

	for($k=1;$k<58;$k++)
	{
		$mon=rand(1,5);
		$day=rand(1,28);
		$hours=rand(0,23);
		$min=rand(0,59);
		$year=rand(2017,2018);
		$send_date=$year."-".$mon."-".$day." ".$hours.":".$min.":00";
		
		//profileImages/male6_l.jpg
		
		$senderIndx=rand(0,count($profile_username)-1);
		$senderUname=$profile_username[$senderIndx];
		$senderID=$profile_memberID[$senderIndx];
		$senderUrl=$profile_url[$senderIndx];

		$tu=json_decode($senderUrl,true);
		//$senderUrl="{\"defaultPic\":\"profileImages/male6_b.jpg\",\"defaultPicTitle\":\"My Pics\",\"Pic1\":\"profileImages/male6_b.jpg\",\"Pic1Title\":\"Untitled\",\"Pic2\":\"Untitled\",\"Pic2Title\":\"Untitled\",\"Pic3\":\"Untitled\",\"Pic3Title\":\"Untitled\",\"Pic4\":\"Untitled\",\"Pic4Title\":\"Untitled\",\"Pic5\":\"Untitled\",\"Pic5Title\":\"Untitled\",\"Pic6\":\"Untitled\",\"Pic6Title\":\"Untitled\",\"Pic7\":\"Untitled\",\"Pic7Title\":\"Untitled\"}";
		$senderUrl=$tu['defaultPic'];
		
		$mTitle="Hey whats up? this is a test messge ";
		
		//var_dump(json_decode($senderUrl,true));
		
		
		//echo $tu['defaultPic'];
		$messIndx=rand(0,count($messObj)-1);
		
		
		$reciverInd=rand(0,count($profile_memberID)-1);
		$reciverUname=$profile_username[$reciverInd];
		$reciverID=$profile_memberID[$reciverInd];
		$reciverUrl=$profile_url[$reciverInd];
		
		$tu=json_decode($reciverUrl,true);
		$reciverUrl=$tu['defaultPic'];
		
		//$reciverUname="uname45";
		//$reciverID='45';
		//$reciverUrl="defaultPic\":\"profileImages/workImages/wjmKgNP67qseAbBNs2mnTvQNH7AflmDeTN5Uo5+TYkE.jpeg?val=1499326949000";
		
		$senderUname="uname45";
		$senderID='45';

		$senderUrl="defaultPic\":\"profileImages/workImages/wjmKgNP67qseAbBNs2mnTvQNH7AflmDeTN5Uo5+TYkE.jpeg?val=1499326949000";
	
		
		$tt=$messObj[$messIndx];
		$jju=str_replace("'","&#39;",$tt);

		
		$debut="insert into agape_messages (agape_message,agape_message_title,agape_message_sender_ID,agape_message_sender_username,agape_message_receiver_ID,agape_message_receiver_username,agape_message_send_date,agape_message_update,agape_sender_url,agape_message_receiver_url,agape_message_responses) values ('".$jju."','".$mTitle."','".$senderID."','".$senderUname."','".$reciverID."','".$reciverUname."','".$send_date."','".$send_date."','".$senderUrl."','".$reciverUrl."','none')";
		echo $k."<br/>";
		echo "<div style='font-family:helvetica;font-size:12px;'>".$debut."</div><br/>";
		
		mysql_query($debut);
	
	}
	//echo $profile_memberID[65];
}



function loadFrRequest()
{
	$qString="select agape_profile_memberID,agape_profile_username,agape_profile_default_img,agape_friendList from agape_profile";

	include("Config_files/config1.php");
	$result=mysql_query($qString);
	
	$profile_memberID=array();
	$profile_username=array();
	$profile_url=array();
	$profile_agape_friendList=array();
	$cntr=0;
	$is="false";
	
	while($row = mysql_fetch_assoc($result))
	{
		$profile_memberID[$cntr]=$row['agape_profile_memberID'];
		$profile_username[$cntr]=$row['agape_profile_username'];
		$profile_url[$cntr]=$row['agape_profile_default_img'];
	
		$cntr++;
	}
	
	for($k=1;$k<3000;$k++)
	{
	
		$mon=rand(1,12);
		$day=rand(1,28);
		$hours=rand(0,23);
		$min=rand(0,59);
		$yearly=rand(2014,2015);
		$send_date=$yearly."-".$mon."-".$day." ".$hours.":".$min.":00";
		
		$senderIndx=rand(0,count($profile_username)-1);
		$senderUname=$profile_username[$senderIndx];
		$senderID=$profile_memberID[$senderIndx];
		$senderUrl=$profile_url[$senderIndx];
		
		//$senderUname="uname250";
		//$senderID="250";
		//$senderUrl=	"{\"defaultPic\":\"profileImages/male9_w.jpg\",\"defaultPicTitle\":\"My Pics\",\"Pic1\":\"profileImages/male9_w.jpg\",\"Pic1Title\":\"Untitled\",\"Pic2\":\"Untitled\",\"Pic2Title\":\"Untitled\",\"Pic3\":\"Untitled\",\"Pic3Title\":\"Untitled\",\"Pic4\":\"Untitled\",\"Pic4Title\":\"Untitled\",\"Pic5\":\"Untitled\",\"Pic5Title\":\"Untitled\",\"Pic6\":\"Untitled\",\"Pic6Title\":\"Untitled\",\"Pic7\":\"Untitled\",\"Pic7Title\":\"Untitled\"}";

		$message="You have received a Friendship request from ".$senderUname;
		$reciverInd=rand(0,count($profile_memberID)-1);
		$reciverUname=$profile_username[$reciverInd];
		$reciverID=$profile_memberID[$reciverInd];
	
		//$reciverUname="uname45";
		//$reciverID="45";	
		
		$debut="insert into agape_friendrequest (requestorID,requestorUsername,requestedID,requestedUsername,requestSent,requestMessage,requestorImgUrl) values ('".$senderID."','".$senderUname."','".$reciverID."','".$reciverUname."','".$send_date."','".$message."','".$senderUrl."')";
		echo $k."<br/>";
		echo $debut."<br/><br/>";
		mysql_query($debut);
	
	}
}


function updateRecords()
{
	$mheight = array('5ft5','5ft6','5ft6','5ft7','5ft8','5ft8','5ft9','5ft9','5ft10','5ft11','6ft0','6ft1','6ft2','6ft3','6ft4','6ft5','6ft6','6ft7','6ft8');
	
	$wheight = array('5ft2','5ft3','5ft3','5ft4','5ft4','5ft5','5ft5','5ft6','5ft6','5ft6','5ft7','5ft7','5ft7','5ft8','5ft9','5ft10','5ft11','6ft0','6ft1');
	$educ=array('Not Answered','High School','Some College','AA Degree','BA/BS','Masters','Doctorate');
	
	//$qString="select agape_profile_memberID from agape_profile where agape_profile_intentions= 'Not Answered'";
	//$qString="select agape_profile_memberID from agape_profile where agape_profile_salary = '$70,000 - $105,000'";
	$qString="select agape_profile_memberID, agape_profile_education from agape_profile";
	$result=mysql_query($qString);
	
	$profile_memberID=array();

	$cntr=0;
	$is="false";
	
	while($row = mysql_fetch_assoc($result))
	{
		
	}
	
	
}



function makeMessage()
{
	$debut="insert into agape_messages (agape_message_title,agape_message,agape_message_sender_ID,agape_message_sender_username,agape_message_receiver_username,agape_message_receiver_ID,agape_message_send_date) values ('".$firstname."','".$lnames[$lnameInx]."','".$bType[$bTypeInx]."','".$gender."','".$city."','".$state."','".$aEmail."','".$sal."','".$rel."','".$uname."','".$pword."','".$intentions."','".$alcohol."','".$racePic."','".$selOpts."','".$raceCard."')";
		echo $debut."<br/><br/>";
}


function loadBlogHeaders()
{

	$qString="select agape_profile_memberID,agape_profile_username,agape_profile_default_img,agape_profile_city,agape_profile_state from agape_profile";
	$result=mysql_query($qString);
	
	$profile_memberID=array();
	$profile_username=array();
	$profile_url=array();
	$profile_city=array();
	$profile_state=array();
	$cntr=0;
	$is="false";
	while($row = mysql_fetch_assoc($result))
	{
		$profile_memberID[$cntr]=$row['agape_profile_memberID'];
		$profile_username[$cntr]=$row['agape_profile_username'];
		$profile_city[$cntr]=$row['agape_profile_city'];
		$profile_state[$cntr]=$row['agape_profile_state'];
		$profile_url[$cntr]=$row['agape_profile_default_img'];
		$cntr++;
	}
	
	$blogTitle=array("Rhonda Rousey vs Cyborg","Marriage is tough",'I love my guy!','The best way to make love to a woman',"Tough to deal with new guys kids",'We had a great time in Jamaica!','Put God first',"Interracial relationships..why they're trending","Things you thought you knew about men","Health advantages of sex","How to make it last","Have you heard of Tommy Sotomayor...dude is hateful","Kanye and Kim are bad exmaples of what a relationship should be","Dwayne Wade shouldn't have left his wife like that","Marriage licences with expiration dates?","Consider her first fellas..","What does submission mean?","Damn, a father again at 45..");
	$blogTitle_rel=array("Pope forgives abortions","Religious people are less intelligent than atheists","Pope declares situation in Georgia a crisis. To lead vigil","Who was Lilith?","Does the name of God really matter?","Sign of the times","Why should I believe in a cruel God?","Christian objectives for 2014","Christopher Hitchens is quite the moron.","Keep your head up christian family");
	$blogTitle_pol=array("Netanyahu tries Obama!","Police In Atlanta Make Arrest In Clairton Native's Fatal Shooting","Tech company chiefs meet with Obama on privacy","Documents shed light on U.S. surveillance programs","Details emerge about talk between al Qaeda leaders","No summit, but U.S., Russian officials meet","San Diego mayor to start outpatient therapy","Police arrest 14 people during the violence in Arizona","Immigration reform underway in Washington","Fed promises to slow  inflation with lower rates.","Kanye, Usher Phylicia Rashad to get BET Honors!");
	$blogContent=array("Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?","nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam","At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus","Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?","nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem","Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam");
	
	
	
	for($k=1;$k<5001;$k++)
	{
		$senderIndx=rand(0,count($profile_username)-1);
		$creatorUname=$profile_username[$senderIndx];
		$creatorID=$profile_memberID[$senderIndx];
		$creatorUrl=$profile_url[$senderIndx];
		$catchK=rand(1,100);
		$blogcity=$profile_city[$senderIndx];
		$blogstate=$profile_state[$senderIndx];
		 
		 
		 $btitle="";
		 
		 $category="Romance";
		 if($catchK<35){
			$category="Romance";
			$btitle=$blogTitle[rand(0,count($blogTitle)-1)];
		  }
		  
		if($catchK>=35 && $catchK<75){
			$category="Politics";
			$btitle=$blogTitle_pol[rand(0,count($blogTitle_pol)-1)];
		  }
		 
		if($catchK>75){
			$category="Spiritual";
			$btitle=$blogTitle_rel[rand(0,count($blogTitle_rel)-1)];
		  }
		
		
		$content=$blogContent[rand(0,count($blogContent)-1)];
		
		$mon=rand(1,12);
		$day=rand(1,28);
		$hours=rand(0,23);
		$min=rand(0,59);
		$thumbsup=rand(0,12000);
		$thumbsdown=rand(0,12000);

		$years=rand(2012,2015);
		$send_date=$years."-".$mon."-".$day." ".$hours.":".$min.":00";
		
		$str= "insert into agape_media (agape_media_author,agape_media_updatedBy,agape_media_images,agape_media_author_ID,agape_media_updatedBy_ID,agape_media_group,agape_media_title,agape_media_content,agape_media_comments_count,agape_media_createDate,agape_media_lastComment_date,agape_media_city,agape_media_state,agape_media_thumbsUp,agape_media_thumbsDown,agape_media_type) values ('".$creatorUname."','".$creatorUname."','".$creatorUrl."','".$creatorID."','".$creatorID."','".$category."','".$btitle."','".$content."','0','".$send_date."','".$send_date."','".$blogcity."','".$blogstate."','".$thumbsup."','".$thumbsdown."','Blog')";
		
		mysql_query($str);	
		
		echo $str."<br/><br/>";
		
		
	}


}


function loadCommenstforarticles(){

	//$beeno="[";
	//$qString="update agape_news set agape_article_comments = ".$beeno;
	$qString="select agape_media_ID from agape_topics";
	//$commentContent=array("Sed ut perspiciatis unde omnis iste natus","error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo","inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.","Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam","corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? Sed ut perspiciatis unde omnis iste","natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem","sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore","et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam","corporis suscipit laboriosam, nisi","ut aliquid ex ea commodi consequatur? Quis autem","vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?","nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum","fugiat quo voluptas nulla pariatur?","Sed ut perspiciatis unde","omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi","architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem","ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam","At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt","mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus aute");
	
	$commentContent=array("I have more respect for a man who lets me know where he stands, even if he's wrong. Than the one who comes up like an angel and is nothing but a devil.","There is nothing better than adversity. Every defeat, every heartbreak, every loss, contains its own seed, its own lesson on how to improve your performance the next time.","Don't cry because it's over, smile because it happened","I'm selfish, impatient and a little insecure. I make mistakes, I am out of control and at times hard to handle. But if you can't handle me at my worst, then you sure as hell don't deserve me at my best","You've gotta dance like there's nobody watching,Love like you'll never be hurt,Sing like there's nobody listening,
And live like it's heaven on earth.","I've learned that people will forget what you said, people will forget what you did, but people will never forget how you made them feel.","If you're not ready to die for it, put the word 'freedom' out of your vocabulary.","You only live once, but if you do it right, once is enough.","To live is the rarest thing in the world. Most people exist, that is all","It is better to be hated for what you are than to be loved for what you are not.","I'm Not Afraid of death; I just don't want to be there when it happens.","I'm the one that's got to die when it's time for me to die, so let me live my life the way I want to.","Who are you to judge the life I live? I know I'm not perfect -and I don't live to be- but before you start pointing fingers...make sure you hands are clean!","The fear of death follows from the fear of life. A man who lives fully is prepared to die at any time.","Just when you think it can't get any worse, it can. And just when you think it can't get any better, it can.","Life will break you. Nobody can protect you from that, and living alone won't either, for solitude will also break you with its yearning. You have to love. You have to feel. It is the reason you are here on earth. You are here to risk your heart. You are here to be swallowed up. And when it happens that you are broken, or betrayed, or left, or hurt, or death brushes near, let yourself sit by an apple tree and listen to the apples falling all around you in heaps, wasting their sweetness. Tell yourself you tasted as many as you could","Life's under no obligation to give us what we expect.","Don't say you don't have enough time. You have exactly the same number of hours per day that were given to Helen Keller, Pasteur, Michaelangelo, Mother Teresa, Leonardo da Vinci, Thomas Jefferson, and Albert Einstein.","America will never be destroyed from the outside. If we falter and lose our freedoms, it will be because we destroyed ourselves.","You can fool all the people some of the time, and some of the people all the time, but you cannot fool all the people all the time.","When you get released from the NFL it's Not A pleasant experience and I may have sulked for about two or three years. Then I was like, 'You know what? It's time to get back on the wagon.' I have nothing to be ashamed of.","And we reduce almost all male-female problems by working on both the female and the male. And that usually means having both sexes take responsibility.","Before success comes in any man's life, he's sure to meet with much temporary defeat and, perhaps some failures. When defeat overtakes a man, the easiest and the most logical thing to do is to quit. That's exactly what the majority of men do.","Strength and growth come only through continuous effort and struggle.","I like getting married, but I don't like being married.","I was married awfully young and I felt trapped. My wife had been divorced and all the time we were married we were out of the Church. It wasn't until we were divorced that we became good Catholics again.","I don't really care what they think about me.","It is better to remain silent and be thought a fool than to open one's mouth and remove all doubt.","A man is never more truthful than when he acknowledges himself a liar.","Forgiveness is the fragrance that the violet sheds on the heel that has crushed it.","The reports of my death have been greatly exaggerated.","The secret of getting ahead is getting started.","I don't like to commit myself about heaven and hell - you see, I have friends in both places.","All you need is ignorance and confidence and the success is sure.","You can't depend on your eyes when your imagination is out of focus.","Any emotion, if it is sincere, is involuntary.","I don't understand the mentality of a rock fan, being obsessed with two or three songs from 25 years ago. I'm not that kind of a fan.","Take risks. Ask big questions. Don't be afraid to make mistakes; if you don't make mistakes, you're not reaching far enough.","No matter how old a mother is she watches her middle-aged children for signs of improvement.","It is not easy to be sure that being yourself is worth the trouble, but we do know it is our sacred duty.","Nothing revives the past so completely as a smell that was once associated with it.","Complacency is a state of mind that exists only in retrospective: it has to be shattered before being ascertained.","But they that wait upon the LORD shall renew their strength; they shall mount up with wings as eagles; they shall run, and not be weary; and they shall walk, and not faint.","And I am convinced that nothing can ever separate us from God’s love. Neither death nor life, neither angels nor demons, neither our fears for today nor our worries about tomorrow—not even the powers of hell can separate us from God’s love. No power in the sky above or in the earth below—indeed, nothing in all creation will ever be able to separate us from the love of God that is revealed in Christ Jesus our Lord.","Consider it all joy, my brethren, when you encounter various trials, knowing that the testing of your faith produces endurance. And let endurance have its perfect result, so that you may be perfect and complete, lacking in nothing.","It is better to lead from behind and to put others in front, especially when you celebrate victory when nice things occur. You take the front line when there is danger. Then people will appreciate your leadership.","For to be free is not merely to cast off one's chains, but to live in a way that respects and enhances the freedom of others.","I like your Christ, I do not like your Christians. Your Christians are so unlike your Christ.",
"It is better to lead from behind and to put others in front, especially when you celebrate victory when nice things occur. You take the front line when there is danger. Then people will appreciate your leadership.","If you want to make peace with your enemy, you have to work with your enemy. Then he becomes your partner.");
	
	$con1=mysql_connect("localhost", "agapeAdmin", "Agape1422frg!") or die(mysql_error());
	mysql_set_charset('utf8');
	mysql_select_db("agape") or die(mysql_error());
	$result=mysql_query($qString);
	echo $qString."<br>";
	$articleArray=array();
	$artCntr=0;
	//$result=mysql_query($qString);

	while($row = mysql_fetch_assoc($result))
	{
		$articleArray[$artCntr]=$row['agape_media_ID'];
		$artCntr=$artCntr+1;
	}

	$qString="select agape_profile_username,agape_profile_memberID,	agape_profile_default_img from agape_profile";

	echo $qString."<br/><br/>";
	$articleprofile=array();
	$articleprofileID=array();
	$artCnt=0;
	$con1=mysql_connect("localhost", "agapeAdmin", "Agape1422frg!") or die(mysql_error());
	mysql_set_charset('utf8');
	mysql_select_db("agape") or die(mysql_error());
	//mysql_query($qstrg);
	$result=mysql_query($qString);

	while($row = mysql_fetch_assoc($result))
	{
		
		$articleprofile[$artCnt]=$row['agape_profile_username'];
		$articleprofileID[$artCnt]=$row['agape_profile_memberID'];
		$articleprofilePhoto[$artCnt]=$row['agape_profile_default_img'];
		//echo $row['agape_profile_username'];
		$artCnt=$artCnt+1;
	}
	//profileImages/female22_b.jpg

	//{"defaultPic":"profileImages/female2_b.jpg","defaultPicTitle":"My Pics","Pic1":"profileImages/female2_b.jpg","Pic1Title":"Untitled","Pic2":"Untitled","Pic2Title":"Untitled","Pic3":"Untitled","Pic3Title":"Untitled","Pic4":"Untitled","Pic4Title":"Untitled","Pic5":"Untitled","Pic5Title":"Untitled","Pic6":"Untitled","Pic6Title":"Untitled","Pic7":"Untitled","Pic7Title":"Untitled"}

	for($e1=1;$e1<501;$e1++){
		$telio=rand(0,count($articleArray)-1);
		$stelio=rand(0,count($articleprofile)-1);
		$delio=rand(0,count($commentContent)-1);
		$ielio=rand(0,count($articleprofileID)-1);
		$Imgelio=rand(0,count($articleprofileID)-1);
		$mon=rand(1,12);
		$day=rand(1,28);
		$hours=rand(0,23);
		$min=rand(0,59);
		
		$likeIsaid=$articleArray[$telio];
		$comsrc=$articleArray[$telio]."_media0";
		$jinky=json_decode($articleprofilePhoto[$stelio],true);

		$thumbsup=rand(0,12000);
		$thumbsdown=rand(0,12000);
		$votestrg="[\"up\":\"".$thumbsup."\",\"down\":\"".$thumbsup."\"]";
		$years=rand(2013,2018);
		$send_date=$years."-".$mon."-".$day." ".$hours.":".$min.":00";
		$qstrg="insert into agape_comments (agape_commentCreator_Username,	agape_comments_Comment,agape_comment_createdate,agape_commentsCommentDataResponse,agape_commentsLastComment,agape_comments_count,agape_commentsLastComment_username,agape_commentCreator_ID,agape_comments_image,agape_commentsSource) values ('".$articleprofile[$stelio]."','".$commentContent[$delio]."','".$send_date."','none','".$send_date."',1,'".$articleprofile[$stelio]."','".$articleprofileID[$stelio]."','".$jinky['defaultPic']."','".$comsrc."')";
		
		$con1=mysql_connect("localhost", "agapeAdmin", "Agape1422frg!") or die(mysql_error());
		mysql_set_charset('utf8');
		mysql_select_db("agape") or die(mysql_error());
		mysql_query($qstrg);
	}
	
}

function createFriends(){
	srand(make_seed());
	$con1=mysql_connect("localhost", "agapeAdmin", "Agape1422frg!") or die(mysql_error());
	mysql_set_charset('utf8');
	mysql_select_db("agape") or die(mysql_error());
	$strg1="select agape_profile_memberID from agape_profile";
	$result=mysql_query($strg1);
	$cntr=0;
	$returnObj=array();
	$colnum = mysql_num_fields($result);
	while($row = mysql_fetch_assoc($result))
	{
		$returnObj[$cntr]=array();
		for($ctr=0;$ctr<$colnum;$ctr++)
		{				
			$tag=mysql_field_name($result, $ctr);
			if($row[$tag]!='')
			{
				$returnObj[$cntr][$tag] = $row[$tag];					
			}
			else
			{		
				$returnObj[$cntr][$tag] = 'none';							
			}				
		}			
		
		$cntr=$cntr+1;
	}			
		$topend=count($returnObj);
	

	for($i=0;$i<1;$i++){
			
		$Receiver=rand(0,$topend-1);
		
		$numberO=rand(0,200);
		$arrlist=array();

		for($k=0;$k<$numberO;$k++){
			$friend=rand(0,$topend-1);
			if($Receiver!=$friend){
				$vaf=$friend."";
				array_push($arrlist, $vaf);
			}else{

			}

		}

		$ob=json_encode($arrlist);
		$insertStrg="update agape_profile set agape_profile_friends='".$ob."' where agape_profile_memberID=".$Receiver;
		$insertStrg="update agape_profile set agape_profile_friends='".$ob."' where agape_profile_memberID=250";
		//echo $Receiver." ".$ob."<br/>";
		mysql_query($insertStrg);
		echo $insertStrg;
		
		//update agape_profile set agape_profile_friends='".$newObj."' where agape_profile_username='".$param."'";

		//pageMaster(this)
	}

		

}


function make_seed()
{
  list($usec, $sec) = explode(' ', microtime());
  return $sec + $usec * 1000000;
}


function zodiac(){

	/*update agape_profile set agape_profile_zodiacSign=CASE 
when (SELECT DAYOFYEAR(agape_profile_dateOfBirth)) <20 then 'Capricorn' 
when (SELECT DAYOFYEAR(agape_profile_dateOfBirth)) between 20 and 49  then 'Aquarius' 
when (SELECT DAYOFYEAR(agape_profile_dateOfBirth)) between 49 and 79  then 'Pisces' 
when (SELECT DAYOFYEAR(agape_profile_dateOfBirth)) between 80 and 109  then 'Aries' 
when (SELECT DAYOFYEAR(agape_profile_dateOfBirth)) between 110 and 140  then 'Taurus' 
when (SELECT DAYOFYEAR(agape_profile_dateOfBirth)) between 141 and 171  then 'Gemini' 
when (SELECT DAYOFYEAR(agape_profile_dateOfBirth)) between 172 and 203  then 'Cancer'
when (SELECT DAYOFYEAR(agape_profile_dateOfBirth)) between 204 and 234  then 'Leo'
when (SELECT DAYOFYEAR(agape_profile_dateOfBirth)) between 235 and 265  then 'Virgo'
when (SELECT DAYOFYEAR(agape_profile_dateOfBirth)) between 266 and 295  then 'Libra'
when (SELECT DAYOFYEAR(agape_profile_dateOfBirth)) between 296 and 325  then 'Scorpio'
when (SELECT DAYOFYEAR(agape_profile_dateOfBirth)) between 326 and 355  then 'Sagittarius'
when (SELECT DAYOFYEAR(agape_profile_dateOfBirth)) > 355 then 'Capricorn'

END 
WHERE agape_profile_memberID=45*/

}



function loadArticles(){
	echo 44;
	$bName=array("Brandon","Doug","Gary","Adam","Hank","Richard","Kevin","Jaron","Henry","Aaron","Darren","Bobby","Marcus","Elliot","Rick","John","Josh","Jonathan","David","Todd","Harry","Joe","Vernon","Gary","Tony","Evan","Ashe","Victor","Larry","Jordan","George","Kevin","Brian","Bryant","Lamar","Doug","Anthony","Gordan","Tommy","Eddie","William","Brendan","Fred","Michael","Sam","Chris","Dwayne","Dexter","Charles","Benjamin","Mike","Tim","Carlos","Lance","Charley","Devin","Victor","Allen","Roger","Mark","Lee","Brad","John","Tommy","Kurt","Andre","Jaelyn","Tony","Patrick","Ray","Steve","Adam","Jermaine","Todd","Rodney","Terry","Vincent","Daniel","Thomas","Alex","Danny","Charles","Greg","Norman","Kirk","Barry","William","Jeff","Michael");

	$gName=array("Sarah","Michelle","Raechel","Tammy","Latrece","Taylor","Ellen","Gail","Angela","Leslie","Shelley","Tina","Regina","Lisa","Tracy","Michelle","Kim","Stephanie","Katrina","Barbara","Linda","Leena","Christina","Carolyn","Julie","Debra","Olivia","Ruth","Ellen","Tammy","Tonya","Vickie","Rebecca","Tia","Lashawn","Renee","Marie","Denise","Joann","Ashley","Connie","Paulette","Andrea","Gwendolyn","Tori","Patti","Rhonda","Janice","Gabriel","Geraldine","Gina","Jessica","Belinda","Beverly","Kathryn","Kelly","Kylie","Kristy","Melissa","Lisa","Tina","Jordan","Ellen","Brianna","Tobi","Stacie","Lynn","Karen","Jasmine","Brandy","Jamie","Elaine","Renee","Angela","Carla","Valerie","Rosalind","Patricia","Danielle","Kimberly","Kim","Amy","Jill","Carla","Gail","Karen");

	$lnames=array("Davis","Williams","Adams","Wilson","Preston","Williams","Harris","Andersen","Martin","Duncan","Wade","Billy","Jones","Stone","Curry","Black","Gonzalez","Miller","Brown","Turner","Willis","Stacy","Beckman","Graham","Johnson","Cantrell","Owen","Reece","Latimore","Dorian","Ponder","Brownley","Diaz","Cory","Dunn","Beckworth","Chandler","Blouin","Wynn","Reynolds","Crawford","Phillips","Douglas","Estes","Wallace","Dupree","Jenkins","Goins","Blake","Murphy","Jones","Durham","Forrest","Vickers","Jackson","Smith","Perry","Johnson","Maddock","Lester","Kemp","Marshall","Thomas","Finnie","Cooper","Berry","Robinson","Grant","Kurtis","Cambridge","Durand","Scott","Delaney","Washington","Daniels","Perez","Lucas","Little","Johnson","Gibson","Sanchez","Johnson","Jones","Brady","Winters","Somers","Lester","Norman","Carter","Wilson","Washington","Oliver","Cooper","Dozier","Carpenter","Rogers","Johnson","Bradley","Lewis","Dreggars","Berry","Cole","Phillips","Johnson","Valentine");


	srand(make_seed());



	include("Config_files/config1_states.php");
	$strg1="select distinct (state_full)  from states";
	$result2=mysql_query($strg1);
	$colnum = mysql_num_fields($result2);
	//$this->pass="none";
	$cntr=0;
	$stateObj = array();
	while($row = mysql_fetch_assoc($result2))
	{
		$stateObj[$cntr] = array();
		for($ctr=0;$ctr<$colnum;$ctr++)
		{
			$tag=mysql_field_name($result2, $ctr);
			$stateObj[$cntr][$tag]=$row[$tag];
			
		}
			
			//$stateObj[$cntr]['cities']=explode("$$",$stateObj[$cntr]['state_cities']);
			
		$cntr=$cntr+1;
	}
	$staeindex=rand(1,count($stateObj)-1);

	






	for($r=0;$r<500;$r++){
		$staeindex=rand(1,count($stateObj)-1);
		$race1=rand(1,100);
		$firstname="";
		if($race1>51){
			$fnameInx=rand(0,count($bName)-1);
			$firstname=$bName[$fnameInx];

		}else{
			$fnameInx=rand(0,count($gName)-1);
			$firstname=$gName[$fnameInx];

		}







		$strg1="select distinct (city) as city from states where state_full='".$stateObj[$staeindex]['state_full']."'";
		$result2=mysql_query($strg1);
		$colnum = mysql_num_fields($result2);
		//$this->pass="none";
		$cntr=0;
		$cityObj = array();
		while($row = mysql_fetch_assoc($result2))
		{
			$cityObj[$cntr] = array();
			for($ctr=0;$ctr<$colnum;$ctr++)
			{
				$tag=mysql_field_name($result2, $ctr);
				$cityObj[$cntr][$tag]=$row[$tag];
				
			}
				
				//$stateObj[$cntr]['cities']=explode("$$",$stateObj[$cntr]['state_cities']);
			//echo $cityObj[$cntr]['city']."<br>";
			$cntr=$cntr+1;
		}

		//echo "<br/><br>";
		$cityRand = rand(0,count($cityObj)-1);
		
		//print_r($stated);
		$newcitty=$cityObj[$cityRand]['city'];

		//$state=$newTon;
		//$city=$newcitty;








		$lnameInx=rand(0,count($lnames)-1);
		$lastname=$lnames[$lnameInx];

		echo $firstname." ".$lastname." ".$stateObj[$staeindex]['state_full'].", ".$newcitty."<br/>";

	}


}



function updateOptions(){
$t="update agape_profile SET agape_profile_opts =".$strID;

}

srand(mktime());
//createFriends();	
//loadProfile(5);
//loadMessage();
//loadFrRequest();
//updateRecords();
//loadBlogHeaders();
//updateOptions();
//loadCommenstforarticles();
//changeOnlineStatus();
//loadArticles();
//changeOnlineStatusBack();
//updateSourceID();
//fixBlogImages();

//matchAgeBday()

function matchAgeBday(){
	// this code creates a new age based on birth date listed
$uString="update agape_profile set agape_profile_age = (select round(DATEDIFF(Now(),agape_profile_dateOfBirth)/365 ))";
}




function changeOnlineStatus(){
	$randvalIndx  = rand(500,2500);
	for($c=0;$c<$randvalIndx;$c++){
		
		$randval= rand(1,8000);
		$f="update agape_profile set agape_profile_onlineStatus='Online' where agape_profile_memberID=".$randval;
		$con1=mysql_connect("localhost", "agapeAdmin", "Agape1422frg!") or die(mysql_error());
		mysql_set_charset('utf8');
		mysql_select_db("agape") or die(mysql_error());
		mysql_query($f);
		echo $c."> ". $f."<br/>";
	}

}


function changeOnlineStatusBack(){
	$f="update agape_profile set agape_profile_onlineStatus='Offline'";
	$con1=mysql_connect("localhost", "agapeAdmin", "Agape1422frg!") or die(mysql_error());
		mysql_set_charset('utf8');
		mysql_select_db("agape") or die(mysql_error());
		mysql_query($f);
}



function updateSourceID(){


	$var1="update agape_topics SET agape_media_SourceID = CONCAT(agape_media_ID, '_media0'),agape_media_comments = CONCAT(agape_media_ID, '_media0')";
	$con1=mysql_connect("localhost", "agapeAdmin", "Agape1422frg!") or die(mysql_error());
		mysql_set_charset('utf8');
		mysql_select_db("agape") or die(mysql_error());
		mysql_query($var1);


}

function fixBlogImages(){

	$f="select agape_media_ID,agape_media_images,agape_media_group from agape_topics where agape_media_type='Blog'";
		$con1=mysql_connect("localhost", "agapeAdmin", "Agape1422frg!") or die(mysql_error());
		mysql_set_charset('utf8');
		mysql_select_db("agape") or die(mysql_error());
		//mysql_query();

		$result2=mysql_query($f);
		$colnum = mysql_num_fields($result2);
		//$this->pass="none";
		$cntr=0;
		$cityObj = array();
		while($row = mysql_fetch_assoc($result2))
		{
			$cityObj[$cntr] = array();
			for($ctr=0;$ctr<$colnum;$ctr++)
			{
				$tag=mysql_field_name($result2, $ctr);
				$cityObj[$cntr][$tag]=$row[$tag];
				
			}
				
				//$stateObj[$cntr]['cities']=explode("$$",$stateObj[$cntr]['state_cities']);
			//echo $cityObj[$cntr]['city']."<br>";
			$cntr=$cntr+1;
		}
		$c=count($cityObj);
		for($t=0;$t<$c;$t++){
			$def = new stdClass();
			
			$t1=json_decode($cityObj[$t]['agape_media_images'], true);
			$def->defaultPic=$t1['defaultPic'];
			switch($cityObj[$t]['agape_media_group']){

				case 'Spiritual':
					$def->blogPic="advertiseImages/blogImages/spiritual.jpg";
				break;

				case 'Politics':
					$def->blogPic="advertiseImages/blogImages/politics.jpg";
				break;

				case 'Sports':
					$def->blogPic="advertiseImages/blogImages/sports.jpg";
				break;



				default:
					$def->blogPic="advertiseImages/blogImages/cat.jpeg";
				break;

			}



			
			$qwe=json_encode($def);
			print_r($qwe);
			$f1="update agape_topics set agape_media_images='".$qwe."' where agape_media_ID=".$cityObj[$t]['agape_media_ID'];
			$result2=mysql_query($f1);

			echo $cityObj[$t]['agape_media_ID']."<br/><br/>";
		}

		

}


?>
<html>
<div id="open"></div>
<script language="javascript" type="text/javascript" src="scripts\jquery-1.5.1.js"></script>
<script language="javascript" >
	function buildtrans()
	{
		alert(11)
		//$.get("http://en.wikipedia.org/wiki/List_of_cities_in_Georgia_(U.S._state)",function(data){cleaer1(data)});
//$.get("http://www.google.com/#hl=en&output=search&sclient=psy-ab&q=cars&oq=cars&gs_l=hp.3..0l4.2278.2727.0.3991.4.4.0.0.0.0.162.487.1j3.4.0.les%3B..0.0...1c.1.i6HyvJBL3Mk&pbx=1&bav=on.2,or.r_gc.r_pw.r_qf.&fp=4c3c8d4c8b525bee&biw=1008&bih=621		",function(data){cleaer1(data)});}

//$.ajax({  dataType: 'jsonp',  data: 'id=10',  jsonp: 'jsonp_callback',  url: 'http://www.google.com/#hl=en&output=search&sclient=psy-ab&q=cars&oq=cars',  success: function () {    alert(data) },});

alert(12)
}
	
	function cleaer1(data)
	{
		alert(7686)
		document.getElementById('solution').value=data
	
	}
	
var stateArr=["Alabama","Alaska ","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Carolina","North Dakota","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"];





	/* create views for states

	Create View Alabama as Select * From states where state_full="Alabama";
Create View Alaska as Select * From states where state_full="Alaska ";
Create View Arizona as Select * From states where state_full="Arizona";
Create View Arkansas as Select * From states where state_full="Arkansas";
Create View California as Select * From states where state_full="California";
Create View Colorado as Select * From states where state_full="Colorado";
Create View Connecticut as Select * From states where state_full="Connecticut";
Create View Delaware as Select * From states where state_full="Delaware";
Create View Florida as Select * From states where state_full="Florida";
Create View Georgia as Select * From states where state_full="Georgia";
Create View Hawaii as Select * From states where state_full="Hawaii";
Create View Idaho as Select * From states where state_full="Idaho";
Create View Illinois as Select * From states where state_full="Illinois";
Create View Indiana as Select * From states where state_full="Indiana";
Create View Iowa as Select * From states where state_full="Iowa";
Create View Kansas as Select * From states where state_full="Kansas";
Create View Kentucky as Select * From states where state_full="Kentucky";
Create View Louisiana as Select * From states where state_full="Louisiana";
Create View Maine as Select * From states where state_full="Maine";
Create View Maryland as Select * From states where state_full="Maryland";
Create View Massachusetts as Select * From states where state_full="Massachusetts";
Create View Michigan as Select * From states where state_full="Michigan";
Create View Minnesota as Select * From states where state_full="Minnesota";
Create View Mississippi as Select * From states where state_full="Mississippi";
Create View Missouri as Select * From states where state_full="Missouri";
Create View Montana as Select * From states where state_full="Montana";
Create View Nebraska as Select * From states where state_full="Nebraska";
Create View Nevada as Select * From states where state_full="Nevada";
Create View NewHampshire as Select * From states where state_full="New Hampshire";
Create View NewJersey as Select * From states where state_full="New Jersey";
Create View NewMexico as Select * From states where state_full="New Mexico";
Create View NewYork as Select * From states where state_full="New York";
Create View NorthCarolina as Select * From states where state_full="North Carolina";
Create View NorthDakota as Select * From states where state_full="North Dakota";
Create View Ohio as Select * From states where state_full="Ohio";
Create View Oklahoma as Select * From states where state_full="Oklahoma";
Create View Oregon as Select * From states where state_full="Oregon";
Create View Pennsylvania as Select * From states where state_full="Pennsylvania";
Create View RhodeIsland as Select * From states where state_full="Rhode Island";
Create View SouthCarolina as Select * From states where state_full="South Carolina";
Create View SouthDakota as Select * From states where state_full="South Dakota";
Create View Tennessee as Select * From states where state_full="Tennessee";
Create View Texas as Select * From states where state_full="Texas";
Create View Utah as Select * From states where state_full="Utah";
Create View Vermont as Select * From states where state_full="Vermont";
Create View Virginia as Select * From states where state_full="Virginia";
Create View Washington as Select * From states where state_full="Washington";
Create View WestVirginia as Select * From states where state_full="West Virginia";
Create View Wisconsin as Select * From states where state_full="Wisconsin";
Create View Wyoming as Select * From states where state_full="Wyoming";


*/





	
</script>
<input type="button" value="button" onclick="buildtrans()"/>
<textarea cols="15" rows="10" id="solution" ></textarea>
</html>

