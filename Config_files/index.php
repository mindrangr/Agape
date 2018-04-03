<?php
 session_start(); 
 $logged_in='false';
 if($_SESSION['member'])
 {
	$logged_in=$_SESSION['member']['logged_in'];
 }
include("Config_files/Classes.php");



// $person[0]["name"]="Marcus";
// $person[0]["age"]="15";
// $person[0]["city"]="Miami";

// $person[1]["name"]="kim";
// $person[1]["age"]="18";
// $person[1]["city"]="Jacksonville";

// $person[2]["name"]="Michelle";
// $person[2]["age"]="19";
// $person[2]["city"]="Chicago";

// $person[3]["name"]="Shari";
// $person[3]["age"]="14";
// $person[3]["city"]="Miami";

// $perl[0]="Turner";
// $perl[1]="Brad";
// $perl[2]="Sissy";
// $perl[3]="Tom";
// $perl[4]="Dennis";
// $perl[5]="Toby";


// echo json_encode($perl);
 ?>
 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<style type="text/css">
.floater
{
	float:left;
}

.clearer
{
	clear:both;
}

.navigation
{
	font-weight:bold;
	font-family:verdana;
	color:#677b95;
	cursor:pointer;
}

.searchMenu
{
	float:left;
	width:180px;
	font-family:georgia;
	font-weight:bold;
}


.dStyles
{

	height:35px;
	background-color:#ffffff;
	border:solid 1px #000000; 
	border-bottom:none;"
}

.unText
{
	text-align:left;
	width:180px;
	border-right:solid 1px #4a494a;
	font-size:11px;
	font-weight:none;
	padding:3px;
	float:left;
	border-bottom:solid 1px #4a494a;
}


</style>

<script type="text/javascript" src="Scripts/jquery.js"></script>
<script language="javascript">
qObj=[];
searchObj = "";
huy={};
form_objs = new Array();

function changeDivColor(obj,direction)
{
	if(direction=="over")
	{
		obj.style.color="lime"
	}
	else
	{
		obj.style.color="#677b95"
	
	}

}

function searchResults()
{
	qObjBuild();
	Json_Obj=jsonBuildr(qObj);
	$.get("AjaxPage1.php", {query:Json_Obj, database:'project'}, function(data){searchReturn(data)}); 
}

function searchReturn(dataObj)
{
	
	var searchDiv=document.getElementById('searchDiv');
	searchObj=$.parseJSON(dataObj);
	searchDiv.innerHTML="";
	backgroundColor="#717371";
	for(i=0;i<searchObj.length;i++)
	{
		qStrng="";
		searchObj[i].abbreviation=stateAbbrev(searchObj[i].project_state)
		
		qStrng="<div style='background-color:"+backgroundColor+";'><div class='unText' onmouseover=changeColor(this,'lime') onmouseout=changeColor(this,'#000000') style='cursor:pointer;' >"+searchObj[i].project_type+"</div><div class='unText' style='width:40px;text-align:center;'>"+searchObj[i].project_projected_return+"%</div><div class='unText' style='width:140px;text-align:center;'>"+searchObj[i].project_manager_fullname+"</div><div class='unText' style='width:70px;text-align:center;'>$"+searchObj[i].project_share_price+"</div><div class='unText' style='width:120px;text-align:center;'>"+searchObj[i].project_city+", "+searchObj[i].abbreviation+"</div><div class='unText' style='width:70px;text-align:center;'>"+searchObj[i].project_requested_members+"</div><div class='unText' style='width:120px;text-align:center;'>January 12, 2012</div><div style='clear:both;'></div></div>";
		
		searchDiv.innerHTML=searchDiv.innerHTML+qStrng;
		if(backgroundColor=="#aea79e")
		{
			backgroundColor="#717371";
		}
		else
		{		
			backgroundColor="#aea79e";
		}
		
	}

}


function stateAbbrev(obj)
{
	var abbreviation="";
	switch(obj)
	{
		case 'Texas':
		abbreviation="TX";
		break;
		
		case 'Florida':
		abbreviation="FL";
		break;
		
		case 'California':
		abbreviation="CA";
		break;
		
		case 'North Carolina':
		abbreviation="NC";
		break;
		
		case 'Michigan':
		abbreviation="MI";
		break;
		
		case 'New York':
		abbreviation="NY";
		break;
		
		case 'Georgia':
		abbreviation="GA";
		break;
		
		case 'Louisiana':
		abbreviation="LA";
		break;
		
		case 'Oklahoma':
		abbreviation="OK";
		break;
		
		case 'Alabama':
		abbreviation="AL";
		break;
		
		case 'South Carolina':
		abbreviation="SC";
		break;
		
		case 'Tennessee':
		abbreviation="TN";
		break;
		
		case 'Ohio':
		abbreviation="OH";
		break;
		
		case 'Mississippi':
		abbreviation="MS";
		break;

		default:
		abbreviation="None";
		break;
	}
	
	return abbreviation;


}

function qObjBuild()
{
	var oCntr=0;
	$(":input").each(function(){	
		
		if(this.id!='username' && this.id!='password' && this.id!='login' && $(this).val()!='' && this.id!='submit')
		{
			qObj[oCntr]={};
			qObj[oCntr].column=this.id;
			qObj[oCntr].value=$(this).val();
			
			oCntr=oCntr+1;
		}	
	});	
	// huy.name="jhj"
	// huy.chess="yes"
	// huy.camer="no"
	// huy.qwe="qwert";
	
}

function qBuild()
{



}


function jsonBuildr(obj)
{
	if(typeof(obj)=='object')
	{
		if(obj.length==undefined)
		{
			alert('undefined')
		}
		else
		{
			var jsonObj="["
	
			for(i=0;i<obj.length;i++)
			{
				jsonObj=jsonObj+"{"
				for(var index in obj[i])
				{
					jsonObj=jsonObj+"\""+index+"\":\""+obj[i][index]+"\",";
				}
				
				var removeLastComma = jsonObj.lastIndexOf(",")
				jsonObj = jsonObj.substr(0,removeLastComma);
				jsonObj=jsonObj+"}";
				if(i<obj.length-1)
				{
					jsonObj=jsonObj+",";
				}
			}
			
			
			jsonObj=jsonObj+"]";
			return jsonObj;
		
		}
	}
	
}

function changeColor(Obj,color)
{
	Obj.style.color=color;
}

</script>
<script language="javascript" src="Scripts/jscripts.js" type="text/javascript"></script>
<script language="javascript" src="Scripts/jquery-1.5.1.js" type="text/javascript"></script>
<body bgcolor="black" style="margin:auto;" >
	<div id="wrapper" style="margin:auto;background-image:url('Images/background1abc.png');width:900px;text-align:left;height:1100px">
		<div style="height:70px;width:900px;padding-top:9px;padding-left:10px;"><img src="images\logo1.png"/></div>
		<div style="height:32px;width:900px;padding-bottom:8px;padding-left:10px;margin-left:320px;font-weight:bold;font-family:arial;">username&nbsp;<input type="textbox" id="username" name="username" />&nbsp;password&nbsp;<input type="textbox" id="password" name="password"/><input type="button" value="login" id="login" /></div>
		<div style="height:497px;width:900px;">
			<div class="floater navigation" onmouseover="changeDivColor(this,'over')"  onmouseout="changeDivColor(this,'out')" style="padding-left:45px;padding-right:25px;padding-top:3px;">Home</div>
			<div class="floater navigation" onmouseover="changeDivColor(this,'over')"  onmouseout="changeDivColor(this,'out')" style="padding-left:25px;padding-right:15px;padding-top:3px;">Search Investments</div>
			<div class="floater navigation" onmouseover="changeDivColor(this,'over')"  onmouseout="changeDivColor(this,'out')" style="padding-left:30px;padding-right:8px;padding-top:3px;">FAQ</div>
			<div class="floater navigation" onmouseover="changeDivColor(this,'over')"  onmouseout="changeDivColor(this,'out')" style="padding-left:37px;padding-right:14px;padding-top:3px;">About Us</div>
			<div class="floater navigation" onmouseover="changeDivColor(this,'over')"  onmouseout="changeDivColor(this,'out')" style="padding-left:36px;padding-right:0px;padding-top:3px;">Open Account</div>
			<div class="clearer"></div>
			<div class="navigation floater" style="height:345px;width:180px;padding-left:40px;padding-top:37px;" >
				<div>Why People Power?</div>
			</div>
			<div class="floater" style="height:345px;width:580px;padding-left:60px;padding-top:37px;">
				<div style="font-weight:bold;font-family:verdana;color:#677b95;">Raise capital for your investments</div>
				<div style="font-weight:bold;font-family:verdana;color:#677b95;padding-top:115px;">Newest investment opportunities available</div>					
				<div style="overflow:auto;height:140px;width:355px;padding-left:8px;">					
					<br/>
					<?php 
					include("Config_files/config.php");	
					$query="Select project_create_date,project_ID,project_type,project_projected_return from project order by project_create_date desc";
					$result = mysql_query($query);
					$cntr=0;
					$grdColor="#c3c3bf";
					while($row = mysql_fetch_assoc($result)) 
					{
					
						
						if($cntr<6)
						{
							$timer=datconvrtr($row['project_create_date']);
							echo "<div style='float:left;width:260px;font-family:georgia;font-weight:bold;font-size:11px;color:#000000;background-color:".$grdColor.";padding:4px;border:solid 1px #000000;'><a href='clublink.php?project_ID=".$row['project_ID']."&pass=yes' style='font-family:georgia;font-size:11px;color:#000000;text-decoration:none;' >".$row['project_type']." - ".$timer."</a></div><div style='float:left;background-color:".$grdColor.";padding:4px;border:solid 1px #000000;font-family:georgia;font-weight:bold;font-size:11px;color:#993b3b;width:35px;text-align:center;'>".$row['project_projected_return']."%</div><div style='clear:both;'></div>";
						}
						$cntr=$cntr+1;
						if($grdColor=="#c3c3bf")
						{
							$grdColor="#adaea5";
						}
						else
						{
							$grdColor="#c3c3bf";
						}
					}
					
					if($cntr==0)
					{
						echo "no records available";							
					}
					?>						
							
				</div>
				</div>
			<div class="clearer"></div>	
			<br/>
			<div style="padding-left:10px;width:900px;">
				<div style="font-weight:bold;font-size:20px;width:900px;text-align:center;">search projects</div>
				<div class="searchMenu" >project type</div>
				<div style="float:left;">
					<select name="project_type" id="project_type"  style="width:230px;">
						<option value="Any">Any</option>
						<option value="Real Estate Purchase">Real Estate Purchase</option>
						<option value="Real Estate Investment">Real Estate Investment</option>
						<option value="Franchise Purchase">Franchise Purchase</option>
						<option value="Business Purchase">Business Purchase</option>
						<option value="Business Investment">Business Investment</option>
						<option value="Social cause funding">Social cause funding</option>
						<option value="Political cause funding">Political cause funding</option>						
						<option value="Other">Other</option>
						
					</select>
				</div>
				<div style="float:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
				<div class="searchMenu">price per share</div>
				<div style="float:left;">
					<select name="project_share_price" id="project_share_price" style="width:230px;">
						<option value="Any">Any price</option>
						<option value="100_250">$100 - $250</option>
						<option value="251_500" selected>$251- $500</option>
						<option value="501_1000">$500 - $1000</option>
						<option value="1001_2500">$1001 - $2500</option>
						<option value="2501_5000">$2500 - $5000</option>
						<option value="5001_10000">$5000 - $10,000</option>
						<option value="10001_15000">$10001 - $15,000</option>
						<option value="15000_25000">$15,000 - $25,000</option>
						<option value="25000_50000">$25,000 - $50,000</option>
						<option value="50000_100000">$50,000 - $100,000</option>
						<option value="250000_300000000">$250,000+</option>
					</select>
				</div>
				<div class="clearer"></div>
				<div class="searchMenu">expected return</div>
				<div style="float:left;">
					<select name="project_projected_return" id="project_projected_return" style="width:230px;" >
						<option value="Any">Any return</option>
						<option value="0_5">0 - 5%</option>
						<option value="5_10">5.01% - 10%</option>
						<option value="10_15" selected>10.01% - 15%</option>
						<option value="15_20">15.01% - 20%</option>
						<option value="20_30">20.01% - 30%</option>
						<option value="30_40">30.01% - 40%</option>
						<option value="40_50">40.01% - 50%</option>
						<option value="50_60">50.01% - 60%</option>
						<option value="60_70">60.01% - 70%</option>
						<option value="70_80">70.01% - 80%</option>
						<option value="80_90">80.01% - 90%</option>
						<option value="90_100">90.01% - 100%</option>
						<option value="100_110">100.01% - 110%</option>
						<option value="110_120">110.01% - 120%</option>
						<option value="120_130">120.01% - 130%</option>
						<option value="130_2000">130.01% +</option>
					</select>
				</div>
				<div style="float:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
				<div class="searchMenu">project manager</div>
				<div style="float:left;">
					<input type="text" name="project_manager" id="project_manager" style="width:230px;">
				</div>
				<div class="clearer"></div>
				<div class="searchMenu">number of members</div>
				<div style="float:left;">
					<select name="project_requested_members" id="project_requested_members" style="width:230px;">
						<option value="Any">Any number</option>
						<option value="2_15">Micro group 2 - 15 investors</option>
						<option value="16_50">Small group  16 - 50 investors</option>
						<option value="51_500" selected>Medium group 51 - 500 investors</option>
						<option value="501_1500" >Large group 501 - 1500 investors</option>
						<option value="1501_3000" >Giant group 1501 - 3000 investors</option>
						<option value="3001_95000" >Alpha group 3001+</option>
					</select>
				</div>
				<div style="float:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
				<div class="searchMenu">project city</div>
				<div>
					<input type="text" name="project_city" id="project_city" style="width:230px;">
				</div style="float:left;">
				<div class="clearer"></div>
				<div class="searchMenu">project state</div>
				<div style="float:left;">
					<select name="project_state" id="project_state" style="width:230px;">
						<option value="Any">Any</option>
						<option value="Alaska">Alaska</option>
						<option value="Alabama">Alabama</option>
						<option value="Arkansas">Arkansas</option>
						<option value="Arizona">Arizona</option>
						<option value="California">California</option>
						<option value="Colorado">Colorado</option>
						<option value="Connecticut">Connecticut</option>
						<option value="Delaware">Delaware</option>
						<option value="Florida">Florida</option>
						<option value="Georgia">Georgia</option>
						<option value="Hawaii">Hawaii</option>
						<option value="Idaho">Idaho</option>
						<option value="Iowa">Iowa</option>
						<option value="Illinois">Illinois</option>
						<option value="Indiana">Indiana</option>
						<option value="Kansas">Kansas</option>
						<option value="Kentucky">Kentucky</option>
						<option value="Louisiana">Louisiana</option>
						<option value="Maine">Maine</option>
						<option value="Maryland">Maryland</option>
						<option value="Massachusetts">Massachusetts</option>
						<option value="Michigan">Michigan</option>
						<option value="Minnesota">Minnesota</option>
						<option value="Mississippi">Mississippi</option>
						<option value="Missouri">Missouri</option>
						<option value="Montana">Montana</option>
						<option value="Nebraska">Nebraska</option>
						<option value="Nevada">Nevada</option>
						<option value="New Hampshire">New Hampshire</option>
						<option value="New Jersey">New Jersey</option>
						<option value="New Mexico">New Mexico</option>
						<option value="New York">New York</option>
						<option value="North Carolina">North Carolina</option>
						<option value="North Dakota">North Dakota</option>
						<option value="Ohio">Ohio</option>
						<option value="Oklahoma">Oklahoma</option>
						<option value="Oregon">Oregon</option>
						<option value="Pennsylvania">Pennsylvania</option>
						<option value="Rhode Island">Rhode Island</option>
						<option value="South Carolina">South Carolina</option>
						<option value="South Dakota">South Dakota</option>
						<option value="Tennessee">Tennessee</option>
						<option value="Texas">Texas</option>
						<option value="Utah">Utah</option>
						<option value="Vermont">Vermont</option>
						<option value="Virginia">Virginia</option>
						<option value="Washington">Washington</option>
						<option value="Wisconsin">Wisconsin</option>
						<option value="West Virginia">West Virginia</option>
						<option value="Wyoming">Wyoming</option>
					</select>
				</div>
				<div style="float:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
				<div class="searchMenu">project nation</div>
				<div >
					<div name="nation" id="nation" style="width:230px;height:35px;overflow:auto;">
						<div id="Any" class="dStyles">Any</div>
						<div id="United States" class="dStyles">United States<img src="images\usFlag.png"></div>
						<div id="United Kingdom" class="dStyles">United Kingdom</div>
						<div id="Canada" class="dStyles">Canada</div>
						<div id="Jamaica" class="dStyles">Jamaica</div>
						<div id="Ghana" class="dStyles">Ghana</div>
					</div>
				</div>
				<div class="clearer"></div>
				<div style="font-weight:bold;font-size:20px;width:880px;text-align:center;"><input type="button" value="submit" id="submit" style="background-color:#a0a0a0;font-weight:bold;" onclick="searchResults()" /></div>
				<br/>

				<div id="searchDiv" style="font-weight:bold;font-size:20px;width:880px;text-align:center;height:200px;background-color:gray;border:inset 2px #a0a0a0;overflow: auto">
					
				
				</div>
			</div>
			
		</div>
			

	</div>

</body>
</html>

3053439635