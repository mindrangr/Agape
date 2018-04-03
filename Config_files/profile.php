<?php
session_start();
 ?>
<!DOCTYPE html>
 <html>
	<head>
		<title>Profile</title>
			<script language="javascript" type="text/javascript" src="scripts\jquery-1.5.1.js"></script>
			<script language="javascript" type="text/javascript" src="scripts\js\jquery-ui-1.8.22.custom.min.js"></script>
			<script language="javascript" type="text/javascript" src="scripts\mainScripts1.js"></script>
			
			<script language="javascript" type="text/javascript" src="scripts\formFields.js"></script>
			
			<script language="javascript" type="text/javascript">
				var dasDicObj = new Array('buildPro','accountPro','messPro','searchPro');
				var colSubObj = {};
				var upSubObj = {};
				f25Obj="";
				window.submitForm1="true";
				
				
				function profileFormValidator()
				{							
					window.submitForm1="true"
					for(i=0;i<quesObject['fields'].length;i++)
					{			
						//alert(quesObject['fields'][i].col)
						if(quesObject['fields'][i].col!='agape_profile_memberID')
						{
							if(quesObject['fields'][i].quesLoc=='all')
							{
								var rowChek=$("#"+quesObject['fields'][i].col).val()
								if(rowChek=='' || rowChek=='Not Answered' || rowChek=='Select one')
								{
									$("#"+quesObject['fields'][i].col).css('backgroundColor','#696969');
									window.submitForm1="false";									
								}
								
								
								if($("#"+quesObject['fields'][i].col))
								{								
									colSubObj[quesObject['fields'][i].col]=$("#"+quesObject['fields'][i].col).val();
								}									
							}
							
							if(quesObject['fields'][i].quesLoc!='all' && window.submitForm1!="false")
							{
								colSubObj[quesObject['fields'][i].col]=$.trim($("#"+quesObject['fields'][i].col).val());							
							}
								
						}
					}
					
					if(document.getElementById('agape_profile_dateOfBirth10').value=="")
					{
						document.getElementById('agape_profile_dateOfBirth10').style.backgroundColor="#696969";					
					}
					
			
					if(window.submitForm1=="true")
					{
						var va="none";						
						$(':checkbox:checked').each(function(i){
						
							if(va=="none")
							{
								va=$(this).val();						
							}
							else
							{
								va=va+"$$"+$(this).val();						
							}			
						});												
						
						colSubObj['agape_profile_opts']=va;						
						var JsonObj=jsonBuildr(colSubObj);
						//document.write(JsonObj)
						$.get("AjaxPage1.php", {job:'createAccount', obj:JsonObj}, function(data){accountCreated(data)});
						//document.write(JsonObj)						
					}				
				}
				
				function accountCreated(obj)
				{						
					window.submitForm1="true";									
					window.sessionStorage.setItem('user',obj);
					var uObj=obj;
					dChk=uObj.split("**")
					//document.write(dChk[2])
					window.userObj=$.parseJSON(dChk[1]);
					$('#editButton').css("display","block");
					getFirstsearch();
					getFrRequest(1);
					popOfProf();					
					dashBoard();
					loginD();
				}
				
				
				function changeBack(obj)
				{
					window.submitForm1="true";
					$(obj).css('backgroundColor','#ffffff');					
				}
				
				
				function bodyLogin()
				{
					checkLogin();				
					
					if(window.log=="true")
					{						
						quesObject.buildList(window.userObj['agape_profile_intentions']);
						getstateObj('agape_profile_state');
						getstateObj('search_partner_state');
						loginD();
						populateForm();						
						getFirstsearch();
						getFrRequest(1);
						popOfProf();
						var chutney=window.sessionStorage.getItem('messages');
						
						if(chutney!='null')
						{							
							getMessages(1);			
						}
						else
						{							
							parseMessages('started');						
						}
					}

					if(window.log!="true")
					{
						quesObject.buildList('Friendship');						
						getstateObj('agape_profile_state');
						getstateObj('search_partner_state');						
					}
										
				}
				
				function memUsernchk(obj)
				{	
					switch(obj.id)
					{
						case 'agape_profile_username':
							$.get("AjaxPage1.php", {job:'usernameChk', username:obj.value}, function(data){cheAjxFields(data,obj.id)});
						break;
						
						case 'agape_profile_email':
							$.get("AjaxPage1.php", {job:'emailChk', emailAddress:obj.value}, function(data){cheAjxFields(data,obj.id)});
						break;			
					}
				}
				
				function cheAjxFields(data,ids)
				{
					data=$.trim(data);					
					if(data=='true')
					{
						window.submitForm1="false";	
						$("#"+ids).css('backgroundColor','#696969');				
					}
				}
				
				
			
				
				function calendar22()
				{				
					$('#datepicker').css('display','block');
					$('#datepicker').css('visibility','visible');
					$('#datepicker').css('font-size',10);
					$('#datepicker').datepicker({dateFormat: 'yy-mm-dd',
					changeYear: true,
					yearRange: "1940:2013",
					onSelect: function(dateText, inst) { $("#agape_profile_dateOfBirth_view").val(dateText);dategrinder(dateText);},
					monthNames: ["January","February","March","April","May","June","July","August","September","October","November","December"]}); 				
				}
				
				function dategrinder(dText)
				{				
					var monthNames = $('#datepicker').datepicker( "option", "monthNames" );
					var chklos=dText.split('-')
					var mname=monthNames[parseInt(chklos[1/*month*/].valueOf())-1];
					
					document.getElementById('agape_profile_dateOfBirth10').value=mname+" "+chklos[2/*day*/].valueOf()+", "+chklos[0/*year*/].valueOf();
					$('#datepicker').css('visibility','hidden');
					document.getElementById('agape_profile_dateOfBirth10').style.backgroundColor="#ffffff";
					document.getElementById('agape_profile_dateOfBirth').value=chklos[0/*year*/].valueOf()+"-"+chklos[1/*month*/].valueOf()+"-"+chklos[2/*day*/].valueOf()+" 12:00:00";
					//2012-06-27 17:48:00					
				}
				
				
				
				var slider="";
				var intStatus="still";
				function slideGuys(row,direction)
				{					
					if(intStatus!="motion")
					{
						slider=setInterval(function(){sDiv(row,direction)},10);
					}
					intStatus="motion"					
				}
				
				
				var stick=0;
				var calla=0;
				var wholenumb=0;
				
				
				function sDiv(row,direction)
				{					
					if(calla==80)
					{					
						clInt=clearInterval(slider)
						intStatus="still"
						
						calla=0;
					}
					else
					{
						if(direction=='right')
						{
							if(stick<=0 && stick>=-560)
							{
								stick=stick-2;
								wholenumb=wholenumb-2;
							}							
							
							if(stick>=0)
							{
								clInt=clearInterval(slider)
								intStatus="still"
								calla=0;
								stick=0;							
							}
						}
						else
						{		
							if(stick<0)
							{
								stick=stick+2;
							}
			
							wholenumb=wholenumb+2;							
						}					
						document.getElementById(row).style.left=stick+"px";
						calla=calla+1											
					}					
					
				}
				

				
		var contactsearchObj;		
		function contactSearch(arg1,arg2,arg3)
		{
			contactsearchObj={};
			contactsearchObj.agape_profile_state=$("#search_partner_state").val();
			contactsearchObj.agape_profile_city=$.trim($("#search_partner_city").val());
			contactsearchObj.agape_profile_gender=$("#search_partner_gender").val();
			contactsearchObj.agape_profile_age_range=$("#search_partner_age_range").val();
			contactsearchObj.agape_profile_intentions=$("#search_partner_intentions").val();
			contactsearchObj.agape_profile_race=$("#agape_partner_race1").val();
			
			
			
			if(contactsearchObj.agape_profile_state!='Select')
			{
				var JsonObj=jsonBuildr(contactsearchObj);	
				
				$.get("AjaxPage1.php",{job:'contactsearch', contactsearchObj:JsonObj, recS:arg3},function(data){ contactSrch(data,arg1,arg2,arg3)});
			}
		}		
		
		var contactObj;		
		var record;	
		var inxcntr = new Array();
		function contactSrch(obj,a,b,pos)
		{
			beg=(25*a);
			endd=(25*b)
			arrSplit=obj.split('###');
			obj=$.trim(arrSplit[0]);
			
			

			var elem=document.getElementById('sResults');
			elem.innerHTML="";
			if(obj!="none")
			{
				contactObj=$.parseJSON(obj);
				
				document.getElementById('srchResults').innerHTML=arrSplit[1];
				record=arrSplit[1];
				var clss="profileSearchDivsStyle1";
				
				for(i=0;i<25;i++)
				{
					majDiv=sDiv+i;					
					
					var rec="<div class='"+clss+"' onclick=popProfile("+i+",'sObjct')><div style='float:left;height:44px;'><img src='"+contactObj[i]['agape_profile_default_img']+"' height='42' width='50' border='1'/></div><div style='float:left;font-size:10px;margin-left:4px;'><div class='searchLabelStyle1'>Username:</div><div class='searchDataStyle1'>"+contactObj[i]['agape_profile_username']+"</div><div style='clear:both;'></div><div class='searchLabelStyle1' >City:</div><div class='searchDataStyle1'>"+contactObj[i]['agape_profile_city']+"</div><div style='clear:both;'></div><div class='searchLabelStyle1'>State:</div><div class='searchDataStyle1'>"+contactObj[i]['agape_profile_state']+"</div><div style='clear:both;'></div></div><div style='clear:both;'></div></div><input type='hidden' id='"+contactObj[i]['agape_profile_memberID']+"' value />";
					
					
					if(clss=='profileSearchDivsStyle1')
					{
						clss='profileSearchDivsStyle2'
					}
					else
					{
						clss='profileSearchDivsStyle1'
					}						
					elem.innerHTML=elem.innerHTML+rec;					
				}
				editfields(a);
			}
			else
			{
				elem.innerHTML="no value";
			}
		
		}
		
		function editfields(pos)
		{
				lengtht=contactObj.length;
				var crumbLength= parseInt(arrSplit[1]/25);
				var crumbLengthMod = parseInt(lengtht%25);
				max=7+pos;
				if(max>crumbLength)
				{
					max=crumbLength+1;
				}
				var superElem=document.getElementById('crumbCatcher'); 	
				superElem.innerHTML="";
				var extL=0;
				var ind1,ind2
				for(j=pos-1;j<max-1;j++)
				{

					ind1=(j*25)+1;
					ind2=(j+1)*25;
					tgo=j+1
					if(ind2<record && ind1>0)
					{
						srr="<span class='searchBrdCrumb' onclick=setInd("+tgo+") >"+ind1+"-"+ind2+"</span>"
						superElem.innerHTML=superElem.innerHTML+srr;
						extL=extL+1;
					}
					if(ind1<0)
					{
						max=max+1;
					}
		
				}
				
				if(extL<7)
				{
				var tingo;
				
				if(ind2<record)
				{
					tingo=ind2+1;
				}
				else
				{
					tingo=ind1;
				}
				srr="<span class='searchBrdCrumb' onclick=setInd("+crumbLength+") >"+tingo+"-"+record+"</span>"
						superElem.innerHTML=superElem.innerHTML+srr;			
				}
				
				 
				
				
		
		}
		
		function setInd(index)
		{
			
			b=index;
			m=b+1;			
			conSearch(index,m,index*25)
			
		}
		
		
		
		
		function conSearch(arg1,arg2,arg3)
		{
			contactsearchObj={};
			contactsearchObj.agape_profile_state=$("#search_partner_state").val();
			contactsearchObj.agape_profile_city=$.trim($("#search_partner_city").val());
			contactsearchObj.agape_profile_gender=$("#search_partner_gender").val();
			contactsearchObj.agape_profile_age_range=$("#search_partner_age_range").val();
			contactsearchObj.agape_profile_intentions=$("#search_partner_intentions").val();
			contactsearchObj.agape_profile_race=$("#agape_partner_race1").val();
			
			
			
			if(contactsearchObj.agape_profile_state!='Select')
			{
				var JsonObj=jsonBuildr(contactsearchObj);	
				
				$.get("AjaxPage1.php",{job:'contactsearch', contactsearchObj:JsonObj, recS:arg3},function(data){ contactSrch(data,arg1,arg2,arg3)});
			}
		}	
		
		
		
		function contactSearchT(a,b,pos)
		{

			beg=(25*a);
			endd=(25*b);

			var elem=document.getElementById('sResults');
			elem.innerHTML="";
				
				document.getElementById('srchResults').innerHTML=record;
				var clss="profileSearchDivsStyle1"
				for(t=beg;t<endd;t++)
				{
					majDiv=sDiv+i;					
				
					var rec1="<div class='"+clss+"' onclick=popProfile("+t+",'sObjct')><div style='float:left;height:44px;'><img src='"+contactObj[t]['agape_profile_default_img']+"' height='42' width='50' border='1'/></div><div style='float:left;font-size:10px;margin-left:4px;'><div class='searchLabelStyle1'>Username:</div><div class='searchDataStyle1'>"+contactObj[t]['agape_profile_username']+"</div><div style='clear:both;'></div><div class='searchLabelStyle1' >City:</div><div class='searchDataStyle1'>"+contactObj[t]['agape_profile_city']+"</div><div style='clear:both;'></div><div class='searchLabelStyle1'>State:</div><div class='searchDataStyle1'>"+contactObj[t]['agape_profile_state']+"</div><div style='clear:both;'></div></div><div style='clear:both;'></div></div>";
					
					
					if(clss=='profileSearchDivsStyle1')
					{
						clss='profileSearchDivsStyle2'
					}
					else
					{
						clss='profileSearchDivsStyle1'
					}						
					elem.innerHTML=elem.innerHTML+rec1;					
				}
				editfields(pos);		
		}
		
		
		
		function cityFiller(obj,cityElement)
		{
			
			obj.style.backgroundColor="#ffffff";
			var sta=$(obj).val();
			var rand = getRandomizer();			
			$.get("AjaxPage1.php",{job:'cityFiller',state:sta,random:rand},function(data){citySelFiller(data,cityElement)})
		}
	
	
		function citySelFiller(obj,cityElement)
		{			
			
			var cities=obj.split("$$")
			form1[cityElement].options.length = 0;
			var option1 = document.createElement("option"); 
			option1.text = "Select one"; 
			option1.value = "Select"; 
			var select1 = document.getElementById(cityElement); 
			select1.appendChild(option1); 
			
			for(b=0;b<cities.length;b++)
			{				
				var option = document.createElement("option"); 
				option.text = cities[b];
				option.value = cities[b]; 
				if(typeof window.userObj !='undefined' )
				{
					if(window.userObj['agape_profile_city']==cities[b])
					{
						option.setAttribute("selected","selected")
					}				
				}
				var select = document.getElementById(cityElement); 
				select.appendChild(option); 							
			}
		}

		function fRequest()
		{
			var con=confirm("Would you like to send a friendship request to this person?")
			var x;	
			var JsonObj
			var friendObj={}; 
			if (con==true)
			{
				friendObj.requestedID=document.getElementById('uID_se').value;
				friendObj.requestedUsername=document.getElementById('agape_profile_username_se').innerHTML;
				
				friendObj.requestMessage="You have received a friendship request from "+friendObj.requestedUsername;
				friendObj.requestorID=userObj['agape_profile_memberID'];
				friendObj.requestorUsername=userObj['agape_profile_username'];
				friendObj.requestorImgUrl=userObj['agape_profile_default_img'];
				JsonObj=jsonBuildr(friendObj);
				//document.write(JsonObj)
				$.get("AjaxPage1.php",{job:'friendRequest',friendObj:JsonObj}, function (data){friendRequestUpdate(data)});
			}
			else
			{
				//x="You pressed Cancel!";
			} 
			
		}
		
		function friendRequestUpdate(obj)
		{
			//alert(obj);
		}
		
		
		function getMessages(start)
		{			
			//alert(window.userObj['agape_profile_memberID']+"  -  "+start)		
			if(typeof(Storage)!=="undefined")
			{						
				if(window.sessionStorage.getItem('messages')!=="undefined" && window.sessionStorage.getItem('messages')!=null)
				{				
					var messgs=window.sessionStorage.getItem('messages');		
					parseMessages(messgs)				
				}
				else
				{
					$.get("AjaxPage1.php",{job:'getMessages',par:window.userObj['agape_profile_memberID'],start:start},function(data){parseMessages(data)});
				}
			}
		}
		
		function parseMessages(obj)
		{				
			obj=$.trim(obj);
			messObject=obj.split("**")
			//alert(messObject[0])
			if(messObject[0]!='false')
			{			
				if(messObject[0]!='false')
				{
					
					var myVar=setInterval(function(){},500);
					window.messObj=$.parseJSON(messObject[1]);	
					setStorage('messages',obj);
					
				}
				else
				{
					var storedVal=window.sessionStorage.getItem('messages');
					window.messObj=$.parseJSON(storedVal);
					alert('store')
				}
				
				leng=messObj.length;
				var doc="none";
				var classchk="messageContainer1";
				
				for(i=0;i<leng;i++)
				{				
					
					//alert(messObj[i]['agape_message_send_date']+"  "+messObj[i]['agape_message_ID'])
					tDate=date_MySQL_Stan(messObj[i]['agape_message_send_date'])
					if(doc=='none')
					{				
						
						doc="<div class='"+classchk+"'><div class='messageImageholder'><img src='"+messObj[i]['agape_sender_url']+"' border='1' width='70' /></div><div style='float:left;'><div class='messageX'>X</div><div class='messagesName'>"+messObj[i]['agape_message_sender_username']+"</div><div class='messageDate'>"+tDate+"</div><div style='clear:both;'></div><div style='font-weight:Bold;margin-left:3px;font-size:13px;'><u>"+messObj[i]['agape_message_title']+"</u></div><div class='messageDiv'>"+messObj[i]['agape_message']+"</div><div class='messageSendButtonContainer'><div style='float:left;'><input type='button' value='reply' /></div><div style='float:left;margin-left:15px;'><input type='button' value='visit profile' onclick=messgProfile("+messObj[i]['agape_message_sender_ID']+") /></div><div style='clear:both;'></div></div></div><div style='clear:both;'></div></div>";
					}
					else
					{
						doc=doc+"<div class='"+classchk+"'><div class='messageImageholder'><img src='"+messObj[i]['agape_sender_url']+"' border='1' width='70' /></div><div style='float:left;'><div class='messageX'>X</div><div class='messagesName'>"+messObj[i]['agape_message_sender_username']+"</div><div class='messageDate'>"+tDate+"</div><div style='clear:both;'></div><div style='font-weight:Bold;margin-left:3px;font-size:13px;'><u>"+messObj[i]['agape_message_title']+"</u></div><div class='messageDiv'>"+messObj[i]['agape_message']+"</div><div class='messageSendButtonContainer'><div style='float:left;'><input type='button' value='reply' /></div><div style='float:left;margin-left:15px;'><input type='button' value='visit profile' onclick=messgProfile("+messObj[i]['agape_message_sender_ID']+") /></div><div style='clear:both;'></div></div></div><div style='clear:both;'></div></div>";				
					}
					if(classchk=="messageContainer1")
					{
						classchk="messageContainer2";
					}
					else
					{
						classchk="messageContainer1";				
					}
				}
				document.getElementById('messContainer').innerHTML=doc;
			}
			else
			{
				document.getElementById('messContainer').innerHTML="no records";
			}			
			
		}
		
		function getFrRequest(start)
		{
			$.get("AjaxPage1.php",{job:'getFrRequest',par:window.userObj['agape_profile_username'],start:start},function(data){parseFrRequest(data)});
		}
		
		function parseFrRequest(obj)
		{			
			
			obj=$.trim(obj);			
			frReqObject=obj.split("**")
			var doc="none";
			
			if(frReqObject[0]!='false')
			{				
				friendRequest=$.parseJSON(frReqObject[1]);
				leng=friendRequest.length;
				//document.write(frReqObject[1])
				var classchk="messageContainer1";
				
				for(i=0;i<leng;i++)
				{
					tDate=date_MySQL_Stan(friendRequest[i]['requestSent'])
					if(doc=='none')
					{				
						doc="<div class='"+classchk+"'><div class='messageImageholder'><img src='"+friendRequest[i]['requestorImgUrl']+"' border='1' width='70' /></div><div style='float:left;'><div class='messageX'>X</div><div class='messagesName'>"+friendRequest[i]['requestorUsername']+"</div><div class='messageDate'>"+tDate+"</div><div style='clear:both;'></div><div style='font-weight:Bold;margin-left:3px;font-size:13px;'><u>You have recieved a friendship request from "+friendRequest[i]['requestorUsername']+"</u></div><div class='messageSendButtonContainer'><div style='float:left;'><input type='button' value='accept friendship' /></div><div style='float:left;margin-left:15px;'><input type='button' value='visit profile' onclick=messgProfile("+friendRequest[i]['requestorID']+") /></div><div style='clear:both;'></div></div></div><div style='clear:both;'></div></div>";
					}
					else
					{
						doc=doc+"<div class='"+classchk+"'><div class='messageImageholder'><img src='"+friendRequest[i]['requestorImgUrl']+"' border='1' width='70' /></div><div style='float:left;'><div class='messageX'>X</div><div class='messagesName'>"+friendRequest[i]['requestorUsername']+"</div><div class='messageDate'>"+tDate+"</div><div style='clear:both;'></div><div style='font-weight:Bold;margin-left:3px;font-size:13px;'><u>You have recieved a friendship request from "+friendRequest[i]['requestorUsername']+"</u></div><div class='messageSendButtonContainer'><div style='float:left;'><input type='button' value='accept friendship' /></div><div style='float:left;margin-left:15px;'><input type='button' value='visit profile' onclick=messgProfile("+friendRequest[i]['requestorID']+") /></div><div style='clear:both;'></div></div></div><div style='clear:both;'></div></div>";				
					}
					if(classchk=="messageContainer1")
					{
						classchk="messageContainer2";
					}
					else
					{
						classchk="messageContainer1";				
					}
					
				}
			}
			else
			{
				doc="no records";
			}			
			document.getElementById('friendRequest').innerHTML=doc;		
		}
		
		
		
		
		function messgProfile(val)
		{			
			document.getElementById('uID_se').value=val;
			visitPro()
		}
		
		
		var looperID
		function visitPro()
		{
			  
			looperID=document.getElementById('uID_se').value;			  
			testwindow = window.open("viewpro.php?par="+looperID, "mywindow", "location=1,status=1,width=748,height=1200,scrollbars=1,status=1");    
			testwindow.moveTo(0, 0);		
		}
		
		function openCal()
		{
			alert('fgdfgdfg')		
		}
				
		
		
		
		function loadModule(obj)
		{			
			
			var creator=$(obj).val();
			//alert(creator)
			var indx=obj.selectedIndex;
			TextBCreator(creator);		
			populateForm();			
			document.getElementById('agape_profile_intentions').selectedIndex=indx;
			getstateObj('agape_profile_state');
			
		}
			
		function getstateObj(stateElem)
		{
			$.get("AjaxPage1.php", {job:'stateSearch'}, function(data){parseState(data,stateElem)})		
		}
		
		
		var cityObj="";
		function parseState(obj,ID)
		{
			
			var stateObj=$.parseJSON(obj);

			for(b=0;b<stateObj.length;b++)
			{	
				 var option = document.createElement("option"); 
				 option.text = stateObj[b].state_name;
				 option.value = stateObj[b].state_name;
				 if(typeof window.userObj != 'undefined')
				 {
					 if(window.userObj['agape_profile_state']==stateObj[b].state_name)
					 {
						option.setAttribute("selected","selected")
					 }
				 }
				 var select = document.getElementById(ID); 
				 select.appendChild(option); 							
			}
			//alert(ID)
			
			if(ID=='agape_profile_state')
			{
				cityFiller(document.getElementById('agape_profile_state'),'agape_profile_city');
			}
			
			
		}
		
		
		function loo()
		{
			document.getElementById('agape_profile_firstname').value="Mike";
			document.getElementById('agape_profile_lastname').value="Harding";
			document.getElementById('agape_profile_username').value="pnut1";
			document.getElementById('agape_profile_password').value="pnut1";
			document.getElementById('agape_profile_city').value="Miami";
			document.getElementById('agape_profile_email').value="pnut1";
			
			
			
			document.getElementById('agape_profile_gender').selectedIndex=1;
			
			//document.getElementById('agape_profile_bodyType').selectedIndex=1;
			document.getElementById('agape_profile_education').selectedIndex=1;
			//document.getElementById('agape_profile_children').selectedIndex=1;
			//document.getElementById('agape_profile_salary').selectedIndex=1;
			
			
			
			//document.getElementById('agape_profile_state').selectedIndex=8;
			//document.getElementById('agape_profile_height').selectedIndex=8;
			//document.getElementById('agape_profile_alcohol').selectedIndex=2;
			
			//document.getElementById('agape_profile_drugs').selectedIndex=2;
			document.getElementById('agape_partner_age_range').selectedIndex=3;
			//document.getElementById('agape_partner_race').selectedIndex=2;
			
			document.getElementById('agape_profile_religion').selectedIndex=2;
			document.getElementById('agape_partner_drugs').selectedIndex=3;
			document.getElementById('agape_partner_religion').selectedIndex=2;
			
			document.getElementById('agape_partner_education').selectedIndex=2;
			
			document.getElementById('agape_partner_children').selectedIndex=0;
			
			document.getElementById('agape_partner_salary').selectedIndex=3;
			document.getElementById('agape_profile_race').selectedIndex=1;
			//document.getElementById('agape_profile_partner_description').value=" sadfas ask k;lkasfd partner description 2";;
			
		}

			</script>
			<link rel="stylesheet" type="text/css" href="styles\IEStyle.css" />
			<link rel="stylesheet" type="text/css" href="scripts\css\ui-lightness\jquery-ui-1.8.22.custom.css" />
			<style type="text/css" >


			
			</style>
		
	</head>

<body bgcolor="black" style="margin:auto;width:900px;text-align:center;font-family:arial;" onload="bodyLogin()">
	<form name="form1" >
		<div class="profileStyle1pro_test" style="background-color:#ffffff;" >
			<div style="height:120px;width:900px;float:right;margin-bottom:105px;" id="dashboardWrap">				
			</div>
			<div style="width:800px;height:1700px;float:left;text-align:left;padding-left:100px;background-color:#ffffff;">
				<div id="dashboardDiv" style="height:43px;">				
					<div class="divDash1" id="buildPro" style="">Build a Profile</div>
					<div style="height:43px;">					
					<div class="divDash_inv" onmouseover="fixback(this,'#34ff0d')" onmouseout="fixback(this,'#ffffff')" id="messPro" onclick="changeMenu('messPro')">Messages</div>
					<div class="divDash_inv" onmouseover="fixback(this,'#34ff0d')" onmouseout="fixback(this,'#ffffff')" id="accountPro" onclick="changeMenu('accountPro')" >Account</div>
					<div class="divDash_inv" onmouseover="fixback(this,'#34ff0d')" onmouseout="fixback(this,'#ffffff')" id="searchPro" onclick="changeMenu('searchPro')" >Search</div>
					<div style="clear:both"></div>
					</div>
				</div>

				<br/>
				<div >
					<div style="border:solid 2px #696969;width:730px;height:94px;" ><img src="advertiseImages\flashad.gif" /></div >
				</div>
				<div  style="width:800px;height:30px;margin:auto;background-image:url('images/menu_grid.jpg');background-repeat:repeat-y;">
				<?php
				include("navigation1.html");
				?>
				</div>		
				<br/>
				<div style="padding-left:40px;float:left;width:510px;margin-right:4px;">
					<div id="auxDiv" class="divDash_inv1" >
					<div>
						<span style="font-weight:bold;font-size:18px;">Messages</span>
						<div style="padding:8px; border-radius:12px;background-image:url('images/scanBak.jpg');width:600px;">
							<div style="width:600px;height:270px;overflow:auto;overflow-x:hidden;" id="messContainer">
									
								
							</div>
						</div>				
					</div>
					
					
					
					
					
					<br/>
					<div>
					<span style="font-weight:bold;font-size:18px;">Friendship requests</span>
						<div style="padding:8px; border-radius:12px;background-image:url('images/scanBak.jpg');width:600px;">
							<div style="width:600px;height:270px;overflow:auto;overflow-x:hidden;" id="friendRequest">
												
							</div>
						</div>				
					</div>
					
					
					</div>
	
							<div style="clear:both"></div>					
							<div id="mainDiv" style="height:1400px;position:relative;width:950px">
								<div >
									<span id="editButton" style="font-weight:bold;font-size:16px;color:lime;cursor:pointer;display:none" onmouseover="changeDivColor(this,'out')" onmouseout="changeDivColor(this,'over')" onclick="changeMenu('editViewPro')"><u>View</u></span>
								</div>
								<br/>
								<div id="editPro" style="width:480px;float:left;">	

									<div id="editProCont">
									</div>
							
							
							<div><input id="subButt" type="button" value="Submit"  style="background-color:black;border:solid 2px #34ff0d;color:#ffffff;font-weight:bold;" onclick="profileFormValidator()"/><input type="button" value="load" onclick="loo()"/></div>
						</div>
						
						<!-- profile view portion -->
						<div  id="proView" style="float:left;backgound-color:#000000;width:708px;height:1200px;border:solid 1px #000000;background-color:#000000;padding:8px;display:none;">
						
							<div style="width:700px;border-radius:9px;height:1180px;background-image:url('images/gradient4a.jpg');background-repeat:repeat-x;background-color:#2e2e2e;border:solid 2px lime;">
								<table cellpadding="7" >
									<tr >
										<td >
											<IMG src="" height="200" width="155"  style="border:solid 2px lime;" id="hostImg" />
											<div style="font-size:10px;color:red;cursor:pointer;width:160px;text-align:center;">default photo</div>
										</td>
										<td valign="top" >
										<br/>
											<table valign="top">
												<tr>
													<td class="label_pr" >username:</td>
													<td><div class="fields_pr" id="agape_profile_username_pr"></div></td>
													
													<td class="label_pr">intentions:</td>
													<td><div class="fields_pr" id="agape_profile_intentions_pr"></div></td>
													<td rowspan="2">
														<img src="" id="flagPost"/>
													</td>
												</tr>
												
												<tr>
													<td class="label_pr">city:</td>
													<td><div class="fields_pr" id="agape_profile_city_pr"></div></td>
													
													<td class="label_pr">religion:</td>
													<td><div class="fields_pr" id="agape_profile_religion_pr"></div></td>
												</tr>
												
												<tr>
													<td class="label_pr">state:</td>
													<td><div  class="fields_pr" id="agape_profile_state_pr"></div></td>
													
													<td class="label_pr">age:</td>
													<td><div class="fields_pr" id="agape_profile_dateOfBirth_pr"></div></td>
												</tr>
												
												<tr>															<td class="label_pr">salary:</td>
													<td><div class="fields_pr" style="width:150px;" id="agape_profile_salary_pr"></div></td>
													
													<td class="label_pr">education:</td>
													<td><div class="fields_pr" id="agape_profile_education_pr"></div></td>
												</tr>
												
												<tr>
													<td class="label_pr">children:</td>
													<td><div class="fields_pr" id="agape_profile_children_pr"></div></td>
													
													<td class="label_pr">alcohol use:</td>
													<td><div class="fields_pr" id="agape_profile_alcohol_pr"></div></td>
												</tr>
												
												<tr>
													<td class="label_pr">drug use:</td>
													<td><div class="fields_pr" id="agape_profile_drugs_pr"></div></td>
													
													<td class="label_pr">race:</td>
													<td><div class="fields_pr" id="agape_profile_race_pr"></div></td>
												</tr>
												
												<tr>
													<td class="label_pr">height:</td>
													<td><div class="fields_pr" id="agape_profile_height_pr"></div></td>
													
													<td class="label_pr">body type:</td>
													<td><div class="fields_pr" id="agape_profile_bodyType_pr"></div></td>
												</tr>
											</table>
										</td>
									</tr>
									
									<tr>
										<td colspan="2">
											<div  style="color:#ffffff;font-size:13px;width:330px;height:75px;float:left;">
												<div style="display:inline-block;vertical-align:top;margin-bottom:10px;">What can you expect from me?</div>
											
												<div id="loveOptions" style="color:lime;font-size:13px;width:310px;height:75px;"></div>
											
											</div>
											
											
											<div  style="color:#ffffff;font-size:13px;width:319px;height:85px;float:left;border:inset 1px #373906;background-color:#373636;padding:4px;padding-top:1px;">
												<div style="display:inline-block;vertical-align:top;margin-bottom:10px;">What are my expectations from a partner?</div>
												
												
												<div id="parnterOptions" style="color:#d505f9;font-size:13px;width:310px;height:75px;"></div>
											
											</div>
												
											</div>
											<div style="clear:both;"></div>
										</td>

									</tr>
									
								
								</table>
								<span class="EdwardianScript1">How would I describe myself?</span>
								<div class="profile_descripBoxes" id="agape_profile_description_pr">
								</div>
								<BR/>
								<BR/>
								
								<span class="EdwardianScript1">What would I consider the ideal first date?</span>
								<div class="profile_descripBoxes" id="agape_profile_firstDate_pr">
								
								
								</div>
								
								
								<BR/>
								<BR/>
								
								<span class="EdwardianScript1">Here is how I would describe my ideal partner.</span>
								<div class="profile_descripBoxes" id="agape_profile_partner_description_pr">
								
								
								</div>
							</div>
						
						</div>
						
						
						
						<div style="float:left;width:315px;height:80px;display:none;" id="datepicker" ></div>
						
						<div style="clear:both;"></div>
						
						</div>
					</div>
							
		
					
					<style>
						.profileStyle110
						{
							font-weight:normal;
							font-size:12px;
						}
						
						.profileStyle110edit
						{
							font-weight:normal;
							font-size:10px;
							color:blue;
							cursor:pointer;
						}
						
						.placedAds
						{
							font-size:12px;
							border-bottom:dashed 1px #000000;
							padding:3px;
							float:left;
							width:402px;
							cursor:pointer;
						}
					</style>
					<div id="accountDiv" class="divDash_inv1">Account type:&nbsp;&nbsp;<span class="profileStyle110">Personal</span>&nbsp;<span class="profileStyle110edit"><u>edit:</u></span>
						<br/>
						Registered Cities:&nbsp;&nbsp;<span class="profileStyle110">Atlanta, Sandy Springs, Dunwoody</span>
						&nbsp;
						<span class="profileStyle110edit"><u>edit:</u></span>
						<br/>
						
						<div style="width:465px;height:100px;overflow:auto;border:outset 2px #696969;">
							<div class="placedAds" onmouseover="changeDivColor(this,'disabled')" onmouseout="changeDivColor(this,'out')">Garage sale Saturday!!
							</div>
							<div class="placedAds" style="float:right;width:50px;color:#d400ff;" >disabled
							</div>
							<div style="clear:both"></div>
							
							<div class="placedAds" style="background-color:#dedede;" onmouseover="changeDivColor(this,'disabled')" onmouseout="changeDivColor(this,'out')">Sofa bed and chais lounge for sale!
							</div>
							<div class="placedAds" style="float:right;width:50px;color:#d400ff;background-color:#dedede;" >disabled
							</div>
							<div style="clear:both"></div>
							
							<div class="placedAds" onmouseover="changeDivColor(this,'disabled')" onmouseout="changeDivColor(this,'out')">2001 Toyota for sale.
							</div>
							<div class="placedAds" style="float:right;width:50px;color:#d400ff;" >disabled
							</div>
							<div style="clear:both"></div>							
							
						</div>
						<div class="navStyles1" onmouseover="changeDivColor(this,'over')" onmouseout="changeDivColor(this,'out')" style="float:left;width:90px;border:outset 2px #696969;padding:4px;border-top:none;background-color:#dedede;">Ads placed</div>
						
						<div class="navStyles1" onmouseover="changeDivColor(this,'over')" onmouseout="changeDivColor(this,'out')" style="float:left;width:80px;padding:4px;border:outset 2px #696969;padding:4px;border-top:none;border-left:none;">create ad</div>
						
						<div class="navStyles1" onmouseover="changeDivColor(this,'over')" onmouseout="changeDivColor(this,'out')" style="float:left;border:outset 2px #696969;padding:4px;border-top:none;border-left:none;">remove ad</div>
						

						<div style="clear:both;"></div>
					</div>
					
					
					<!-- Search portion ----->
					
					<style type="text/css">
						.feedDivs1
						{
						
							float:left;
							width:80px;
							border-top:solid 1px #000000;
							border-bottom:solid 1px #000000;
							border-left:solid 1px #000000;
							height:84px;
							text-align:center;
							padding-top:3px;
							cursor:pointer;
						}
						
						.tdLabels
						{
							font-size:12px;
							font-family:arial;
							text-align:left;
						}
					
					</style>
					<div style="clear:both;"></div>
					<div id="searchDiv" class="divDash_inv1">
						<div style="width:730px;margin:auto;text-align:center;" >						
							<div style="width:650px;margin:auto;text-align:center;">
								
								<div style="float:left;padding-top:10px;cursor:pointer;" >
									<img src="images/lbutton_out.gif"  onclick="slideGuys('row1','right')" onmouseover="bgImgChger(this,'over','aux')" onmouseout="bgImgChger(this,'out','aux')" id="lbutton" />
								</div>	
								
								
								<div style="float:left;background-color:#000000;width:570px;overflow:auto;overflow-x:hidden;border-left:solid 2px #000000;border-right:solid 2px #000000;height:90px;display:block;position:relative;">

									<div style="position:relative;display:block;width:1200px;" id="row1">
										
									</div>
								</div>
								
								
								
								<div style="float:left;padding-top:10px;cursor:pointer;" >
									<img src="images/rbutton_out.gif" onclick="slideGuys('row1','left')" onmouseover="bgImgChger(this,'over','aux')" onmouseout="bgImgChger(this,'out','aux')" id="rbutton" />
								</div>
								
								<div style="clear:both;"></div>								
															
							</div>

							<div style="padding:4px;border:solid 1px #000000;border-radius: 12px;background-color:gray;width:560px;background-image:url('images/scanBak.jpg');margin:auto;">
								<table valign="top" >
									<tr>
										<td width="170">
											<img id="agape_profile_default_img_se"  width="150" height="160" src="" border="1" />
										</td>
										<td valign="top" width="320">
											<div style="padding:4px;height:120px">
											<table width="300" >
												<tr>  
													<td   class="tdLabels"><span><b>Username:</b></span>
													</td>
													<td width="75" >
														<div style="font-size:12px;font-family:arial;color:#ffffff;width:75px;" id="agape_profile_username_se"></div>
													</td>
													<td  class="tdLabels">	<span><b>Intentions:</b></span>
													</td>
													<td width="100">
														<div id="agape_profile_intentions_se" style="font-size:12px;font-family:arial;arial;color:#ffffff;width:100px;"></div>
														<input type="hidden" id="uID_se"
													</td>
												</tr>
												
												<tr>										
													<td class="tdLabels"><b>City:</b></td>
													<td width="75"><div id="agape_profile_city_se" style="font-size:12px;font-family:arial;color:#ffffff;width:75px;"></div></td>
													<td class="tdLabels"><b>State:</b></td>
													<td width="100"><div style="font-size:12px;font-family:arial;color:#ffffff;width:100px;" id="agape_profile_state_se"></div></td>
												</tr>
												
												
												<tr>										
													<td colspan="2" style="text-align:left;"><input type="button" value="send message" /></td>
													
													<td colspan="2" style="text-align:left;"><input type="button" value="friend request" onclick="fRequest()" /></td>
												</tr>
												
												<tr>
													<td colspan="2" style="text-align:left;"><input type="button" value="visit profile" onclick="visitPro()"/></td>
													
													<td colspan="2" style="text-align:left;"><input type="button" value="block" /></td>
												</tr>
												<tr>
													<td colspan="4">
														<div style="width:230px;border:solid 1px #000000;height:50px"></div>
													</td>
												</tr>
												
											</table>
											</div>
										</td>
									</tr>									
								</table>
							</div>
							
								
							
							<div style="height:290px;border:solid 1px #000000;border-radius:12px;width:550px;background-image:url('images/scanBak.jpg');padding:8px;margin:auto;">
								<div style="overflow:auto;height:170px;border:solid 1px #000000;">
									<div style="background-color:gray;" id="sResults">
								</div>
								
								
							
								</div>
						<div style="float:left;margin-top:15px;">
								<div style="float:left;width:75px;">
								<input type="button" value="search" onclick="contactSearch(0,1,0)"/>
							</div>							
							<div style="float:left;">								
								
								<table>
									<tr>
										<td style="font-size:12px;font-family:arial;width:55px;">State:</td>
										<td>
											<select id="search_partner_state" style="width:110px;" onchange="cityFiller(this,'search_partner_city')">
											<option value="Select" selected>Select one</option>
											
										</select>
									</td>
								</tr>
							</table>
						</div>
						
						<div style="float:left;" >					
							<table>
								<tr>
									<td style="font-size:12px;font-family:arial;width:31px;">City:</td>
									<td>
										<select id="search_partner_city" style="width:120px;">
										
										</select>
									</td>
								</tr>
							</table>
						</div>
						

						<div style="clear:both;"></div>	
						<div style="float:left;font-size:12px;padding-top:6px;width:72px;">Results:<span style="color:lime;" id="srchResults"></span></div>
						<div style="float:left;font-size:12px;font-family:arial;width:65px;">Gender:</div>

						<div style="float:left;">
							<select id="search_partner_gender" style="width:110px;" >
								<option value="Select" >Select one</option>
								<option value="Male" >Male</option>
								<option value="Female" >Female</option>
							</select>
						</div>
						<div style="float:left;padding-left:2px;" >					
							<table>
								<tr>
									<td style="font-size:12px;font-family:arial;width:31px;">Age:</td>
									<td style="width:124px;">
										<select  id="search_partner_age_range" style="width:124px;">
											<option value="Select">Select one</option>
											<option value="18-25">18-25</option>
											<option value="26-32">26-32</option>
											<option value="33-38">33-38</option>
											<option value="39-45">39-45</option>
											<option value="45-51" >45-51</option>
											<option value="52-58">52-58</option>
											<option value="59-65">59-65</option>
											<option value="66-71">66-71</option>
										</select>
									</td>
								</tr>
							</table>
						</div>
										
						<div style="clear:both;"></div>
										
										
						<div style="float:left;margin-left:72px;font-size:12px;font-family:arial;width:65px;">Intentions:</div>

						<div style="float:left;">
							<select id="search_partner_intentions" style="width:110px;" >
								<option value="Select" >Select one</option>
								<option value="Relationship" >Relationship</option>
								<option value="Frienship" >Friendship</option>
								<option value="Business contacts" >Business contacts</option>
								<option value="Marriage" >Marriage</option>
								<option value="Other" >Other</option>
							</select>
						</div>	


						<div style="float:left;padding-left:2px;" >					
							<table>
								<tr>
									<td style="font-size:12px;font-family:arial;width:31px;">Race:</td>
									<td style="width:123px;">
										<select id="agape_partner_race1" style="width:123px;">
										<option value="Select" >Select one</option>
										<option value="White" >White</option>
										<option value="Black">Black</option>
										<option value="Asian" >Asian</option>
										<option value="Latino">Latino</option>
									</select>
									</td>
								</tr>
							</table>
						</div>						
						<div style="clear:both;"></div>
						
						<div id="crumbCatcher" >
							<span class="searchBrdCrumb" id="crb0"></span>							
						</div>
					</div>
				</div>					
						</div>			
					</div>					
			</div>
			
			
					
		</div>
	
				<div style="clear:both;"></div>
			</div>
		
		<div style="clear:both;"></div>
			<div style="text-align:center;margin-top:35px;">
				<?php
				include("footer.html");
				?>
			</div>
			</div>
		</form>
	</body>
</html>


			