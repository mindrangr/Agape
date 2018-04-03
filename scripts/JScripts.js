

// gets sponsors and loads them to page
function getSponsors(){
	var sendObj={};
	sendObj.job="atomic_selectAll";
	sendObj.dbase="agape_sponsors";
	sendObj.ob=" limit 0,4";
	var ext=global.baseUrl
	ext="spitit"
	var funct1=function(data){
	 	datu=globalTools.verify(data);
	 	global.userObj.sponsorList=datu.returnObj;
	 	globalTools.save();
	 	loadSponsors(datu.returnObj,ext);
	}
	ajaxCallPost(sendObj,funct1);
}


function loadSponsors(datum,lead){
 	var cnt=datum.length;
 	var strg="";
 	for(var z=0;z<cnt;z++){
 		strg=strg+"<div class='col-sm-2'>";
      	strg=strg+"<div style='padding:4px'><img src='"+datum[z].agape_sponsors_Image+"' style='height:50px;' /></div>"
    	strg=strg+"</div>";
 	}
 	$("#sponsorDiv").append(strg);
 }


function ajaxCallPost(jsonObj,retFunc)
{			
	jsonObj.dataBase="agape";
	var f=global.baseUrl+"/AjaxPage1_POST.php";
	threadTool.connection.post_Obj(jsonObj,retFunc,f);
}


		/** thread queue   **/

		function ThreadWheel(){
			this.connection={};
			this.connection.status="open";
			this.connection.queue=[];
			_this=this;
			this.queue = [];
			this.connection.func="";
			this.connection.openQueue=function(){
				this.status="open";
				this.CompleteQueue;
			}
			this.connection.holdQueue=function(){
				this.status="hold";
			}
			this.connection.CompleteQueue=function(){

				if(this.queue.length>0){
					
					connection.post_Obj(this.queue[0].data,this.queue[0].retCall);
				}	this.queue.shift();
			}
			this.connection.post_Obj=function(dataM,ret,url){
				
				this.func=ret;
				this.datum=dataM;
				this.queue=[];
				switch(this.status)
				{

					case 'open':
						this.holdQueue;
						$.ajax({
						url:url,
							type:'POST',
							data:dataM,
							Funk:ret,
							openQueue:this.openQueue,
							success:function(data){
								this.openQueue();
								this.Funk(data);
							}
						})	
					break;


					case 'hold':
				
						var postObj={};
						postObj.data=dataM;
						postObj.retCall=ret;

						if(this.queue.length==0){
							this.queue[0]=postObj;
						}else{
							this.queue.push(postObj)
						}
						
					break;
				}
				

			}
		}