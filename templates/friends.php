<?php
  session_start();

  include("../Config_files/_shared_config.php");

?>
<!Doctype html />
<head>
  <style>
  .friendRecStyle1{
    width:100%;
    height:45px;
    border-bottom: solid 1px;
    color:#000;
    font-family: arial;
    background-color: #ddd;
  }

    .friendRecStyle1_over{
    width:100%;
    height:45px;
    border-bottom: solid 1px;
    color:#000;
    font-family: arial;
    background-color: #eee;

  }


  .friendRecImgStyle{
    height:40px;
    width:40px;
    border:solid 1px;
  }


  .friendpageTab{
    
    padding:3px;
    color:#000;
    background-color:lime;
    border-radius:4px 4px 0px 0px;
    text-align: center;
    float:left;
    font-weight:bold;
    cursor: pointer;
  }


  .friendpageTab_over{
    color:#bbbaba;
    background-color:gray;
    font-weight:normal;

  }
</style>

</head>
  <script src="<?php echo $actual_base ?>/scripts/jquery-3.1.1.min.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="styles/NetscapeStyles_responsive1.css" />

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="scripts/bootstrap.min.js"></script>
<script src="scripts/tasks.js"></script>
<script type="text/javascript" src="<?php echo $actual_base ?>/scripts/jTools.js"></script>
<script src="scripts/jScripts.js"></script>

<script src="<?php echo $actual_base ?>/scripts/TweenMax.js"></script>
<!-- Modal -->
<div class="modal fade" id="friendPageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Friend</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="innerMess" style='height:22px;margin-bottom: 5px;color:red;'></div>
        <div id="innerModal"></div>
      </div>

      <div id="modalBod" class='div' style="background-color: #eee;overflow:auto;height:0px;overflow-y: hidden;padding-left:8px;">
      <div id="messBox" style="height:130px;">
        <div id="sendTo" style='float:left;width:120px;color:#eee;margin-top:10px;'>Send to:</div>
            <div style='float:left;margin-top:10px;'><input  id='agape_message_receiver_username' placeholder="Receiver username" type="textbox" name="" class="form-control" disabled></div>
                <div style='clear:both;margin-bottom: 10px;'></div>

                <div style='float:left;width:120px;color:#c96cbd;'>Message title:</div>
                <div style='float:left;'><input placeholder="Message title" id='agape_message_title' type="" name="" class="form-control" ></div>
                <div style='clear:both;margin-bottom: 10px;'></div>
                

                <div style='float:left;width:120px;color:#c96cbd;'>Message:</div>
                <div style='float:left;'><textarea id='agape_message'style='width:300px;height:50px;' class="form-control" ></textarea></div>
                <div style='clear:both'></div>

                <div style="margin-top:10px;"><button id="sendButton" class="btn btn-outline-success my-2 my-sm-0" type="button">Create</button></div>

      </div>
    </div>
      <div class="modal-footer">
        <button id='sendMessButton' type="button" class="btn btn-secondary" >Message</button>
        
        <button type="button" class="btn btn-primary">Go to page</button>
        <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
      </div>
    </div>
  </div>
</div>


 
<body style="padding-top:70px;background-image: url('images/blog1Blur.jpg');background-repeat:no-repeat;background-color: #2f4774;">
 
  <?php include '../header.php';?>

    <div class="container newsContainer" >
      <div class="overF">
        <div class="row">
          <div class="col-sm-3 tPaddMobileLogin" >
            <?php include '../templates/logBox.php';?>
             
          </div>
      
          <div class="col-sm-7">
            <div style="width:90%;height:700px;border-radius: 5px;">
              <div class='friendpageTab' id="tab_friendHoldDiv">Friends (<span id="totFriends">0</span>)</div>
              <div class='friendpageTab friendpageTab_over' id="tab_friendReqHoldDiv" style="margin-left:3px;" >Requests (<span id="totRequests">0</span>)</div>
              <div style="clear:both;"></div>
              <div id="pag1" style="background-color: #000;border-radius: 0px 4px 0px 0px;padding:3px;"></div>
              <div id="friendHoldDiv" style="width:100%;height:500px;overflow: auto;overflow-x: hidden">
              
              </div>
              <div id="friendReqHoldDiv" style="display:none;"></div>
            </div>
           
          </div>
            <div class="col-sm-2">
            </div>
            
      </div>
    </div>
  </div>

   

  <div class="container-fluid sponsorBackground socialbanner" >
    <div class="row" id="sponsorDiv">
      <div class="col-sm-2">
        <div style="font-size:22px;">Meet our</div>
        <div style="color:#c96cbd;text-shadow: 1px 1px #000;font-size:20px;">Sponsors:</div>
      </div>
    </div>
  </div>


     <div class="container-fluid sponsorBackground htClass" style="margin-top:0px;background-color:#c96cbd;" >
    <div class="row" id="sponsorDiv" >
      <div class="col-sm-2">
        <div style="font-size:22px;">Social Connections</div>
        
      </div>

      <div class="col-sm-1">
        <div >Instagram</div>
        <div><img src="images/instagram.png" style="height:40px" /></div>

  
      </div>
       <div class="col-sm-1">

        <div >Twitter</div>
        <div><img src="images/twitter-logo_19.png" style="height:40px" /></div>

        
      </div>
       <div class="col-sm-1">
        <div >FaceBook</div>
        <div><img src="images/facebook.jpg" style="height:40px" /></div>
        
      </div>
    </div>
  </div>



  <?php include '../footer.html';?>
 
</body>

<script>

  $(".nav-item").each(function(){
    $(this).removeClass("active");
    $(this).children().eq(0).addClass("disabled")
  })
  $("#friendsli").addClass("active");
  $("#friendsli").children().eq(0).removeClass("disabled");

selectFriends("friendRequest");
  
function selectFriends(val){
  var mod={}
  mod.job="selectAll"
  mod.returnValue=val
    switch(val){
      case 'friends':
        mod.dbase="agape_friendrequest"
        mod.kob=" where (requestedID="+global.userObj.agape_profile_memberID+" or requestorID = "+global.userObj.agape_profile_memberID+") and requestStatus='Accepted' limit 0,25";
        mod.Getdetail="GetCount";
        mod.ob2=" where (requestedID="+global.userObj.agape_profile_memberID+" or requestorID = "+global.userObj.agape_profile_memberID +") and requestStatus='Accepted'";
         
      break;

      case 'friendRequest':
        mod.dbase="agape_friendrequest"
        mod.kob=" where requestedID="+global.userObj.agape_profile_memberID+"  and requestStatus='sent'  order by requestSent desc  limit 0,25";
        mod.Getdetail="GetCount";
        mod.ob2=" where requestedID="+global.userObj.agape_profile_memberID+"  and requestStatus='sent'";
        
      break;


    }

   
    var ftn=function(data){
      var de=globalTools.verify(data);
      global.friendsObj.friend=de;
      switch(de.returnValue){
        case 'friends':
          control="friendPagination" 
        break;

        case 'friendRequest':
          control="friendRequestPagination"
        break;
      }


      listFriends(global.friendsObj.friend);
    }
    ajaxCallPost(mod,ftn)
 }   




function  listFriends(val){
  
  let idx=val.returnObj.length;
  let strg="";
  let cSting="";
  var name;

  for(i=0;i<idx;i++){
    var b=$.parseJSON(global.userObj.agape_profile_default_img);
    name=global.userObj.agape_profile_username;
    var img=val.returnObj[i].requestorImgUrl
    if(val.returnObj[i].requestorUsername==global.userObj.agape_profile_username){
      img=val.returnObj[i].requestedImgUrl
    }
    if(name==val.returnObj[i].requestorUsername){
      name=val.returnObj[i].requestedUsername
      img=b.defaultPic;
    }else{
      name=val.returnObj[i].requestorUsername;

    }


      cSting=cSting+"<div class='friendRecStyle1'>"
      cSting=cSting+"<div style='float:left;width:60px;'><img src='"+img+"' class='friendRecImgStyle' /></div>"
      cSting=cSting+"<div style='float:left;width:90px;margin-top:10px;'><span style='text-decoration:underline;cursor:pointer;' id='vProfButton"+i+"'>"+name+"</span></div>"
                
      if(val.returnObj[i].requestStatus=="Accepted"){
        cSting=cSting+"<div style='float:right;width:90px;margin-top:2px'>"
      cSting=cSting+"<div ><button id='unfriendButton"+i+"' class='btn btn-success my-2 my-sm-0' type='button'>Unfriend</button></div>"
      cSting=cSting+"</div>"
      }

      if(val.returnObj[i].requestStatus=="sent"){
        cSting=cSting+"<div style='float:right;width:260px;margin-top:2px'><div >";

        if(val.returnObj[i].requestedUsername==global.userObj.agape_profile_username){
          cSting=cSting+"<button style='margin-right:8px;' id='acceptFrButton"+i+"' class='btn btn-success my-2 my-sm-0' type='button'>Accept Friendship</button>"
        }
        

        cSting=cSting+"<button id='removeReButton"+i+"' class='btn btn-secondary my-2 my-sm-0' type='button'>Remove</button></div>"
        cSting=cSting+"</div>"
      }

      

     //cSting=cSting+"<div style='float:right;width:90px;margin-top:2px;margin-right:6px;margin-left:12px;'>"
      //cSting=cSting+"<div ><button id='messageButton"+i+"' class='btn btn-primary my-2 my-sm-0' type='button'>Message</button></div></div>"

      
      cSting=cSting+"<div style='clear:left;'></div></div>";
  }
  $("#friendHoldDiv").empty().append(cSting);

  if(control=="friendRequestPagination"){
    $("#totRequests").html(val.countMax);
  }

  if(control=="friendPagination"){
    $("#totFriends").html(val.countMax)
  }



  mainPaginationFunc("pag1",val.countMax,"none");

  $("button[id^='unfriendButton']").each(function(){
    $(this).unbind("click").on("click",function(){
      var uFri=$(this).attr("id")+"";
      var uFri1=uFri.substr(14);
      var delname=global.friendsObj.friend.returnObj[uFri1].requestorUsername
      if(global.friendsObj.friend.returnObj[uFri1].requestorUsername==global.userObj.agape_profile_username){
        delname=global.friendsObj.friend.returnObj[uFri1].requestedUsername
      }
      var delFriend=confirm("Are you sure you want to remove "+delname+" from your friend list?");
      if(delFriend==true){
        var upDateObj={};
        upDateObj.job="quickJamUpdate_full";
        upDateObj.dbase="agape_friendrequest";
        upDateObj.param="requestID";
        upDateObj.vals=global.friendsObj.friend.returnObj[uFri1].requestID;
        upDateObj.obj={};
        upDateObj.obj.requestStatus="unfriended";
        var ti=convertNowToPhP()
        upDateObj.obj.requestResponse=ti;
        upDateObj.selFunc="selectFunc";
        upDateObj.kob=" where (requestedID="+global.userObj.agape_profile_memberID+" or requestorID = "+global.userObj.agape_profile_memberID+") and requestStatus='Accepted' limit 0,25";
        upDateObj.Getdetail="GetCount"
        upDateObj.ob2=" where (requestedID="+global.userObj.agape_profile_memberID+" or requestorID = "+global.userObj.agape_profile_memberID+") and requestStatus='Accepted' ";

        var func=function(data){
          var b=globalTools.verify(data)
          b.returnValue="friends";
          listFriends(b)
        }
        ajaxCallPost(upDateObj,func)
    }
  })
})



  $("button[id^='removeReButton']").each(function(){
    
    $(this).unbind("click").on("click",function(){
      var uFri=$(this).attr("id")+"";
      var uFri1=uFri.substr(14);
      var delname=global.friendsObj.friend.returnObj[uFri1].requestorUsername;
      var delFriend=confirm("Are you sure you want to remove request to/from "+delname+"?");
      if(delFriend==true){
        var upDateObj={};
        upDateObj.job="quickJamUpdate_full";
        upDateObj.dbase="agape_friendrequest";
        upDateObj.param="requestID";
        upDateObj.vals=global.friendsObj.friend.returnObj[uFri1].requestID;
        upDateObj.obj={};
        upDateObj.obj.requestStatus="removed";
        var ti=convertNowToPhP()
        upDateObj.obj.requestResponse=ti;
        upDateObj.selFunc="selectFunc";
        upDateObj.kob=" where requestedID="+global.userObj.agape_profile_memberID+" and requestStatus='sent' order by requestSent desc limit 0,25";
        upDateObj.Getdetail="GetCount"
        upDateObj.ob2=" where requestedID="+global.userObj.agape_profile_memberID+" and requestStatus='sent' ";

        var func=function(data){
          var b=globalTools.verify(data)
          b.returnValue="friendRequest";
          listFriends(b)
        }
        ajaxCallPost(upDateObj,func)
      }
      if(delFriend==false){
        

      }
    })
  })

  $("button[id^='acceptFrButton']").each(function(){
    $(this).unbind("click").on("click",function(){
      var uFri=$(this).attr("id")+"";
      var uFri1=uFri.substr(14);
      var delname=global.friendsObj.friend.returnObj[uFri1].requestorUsername
      if(global.friendsObj.friend.returnObj[uFri1].requestorUsername==global.userObj.agape_profile_username){
        delname=global.friendsObj.friend.returnObj[uFri1].requestedUsername
      }
      var delFriend=confirm("Are you sure you want to befriend "+delname+"?");
      if(delFriend==true){
        var upDateObj={};
        upDateObj.job="quickJamUpdate_full";
        upDateObj.dbase="agape_friendrequest";
        upDateObj.param="requestID";
        upDateObj.vals=global.friendsObj.friend.returnObj[uFri1].requestID;
        upDateObj.obj={};
        upDateObj.obj.requestStatus="Accepted";
        var tim=convertNowToPhP();
        upDateObj.obj.requestResponse=tim;
        upDateObj.selFunc="selectFunc";
        upDateObj.kob=" where requestedID="+global.userObj.agape_profile_memberID+" and requestStatus='sent' order by requestSent desc limit 0,25";
        upDateObj.Getdetail="GetCount"
        upDateObj.ob2=" where requestedID="+global.userObj.agape_profile_memberID+" and requestStatus='sent' ";
        var func=function(data){

          var b=globalTools.verify(data)
          b.returnValue="friends";
          listFriends(b)
        }
        ajaxCallPost(upDateObj,func)
    }
  })
  })

  

  

  $("span[id^='vProfButton']").each(function(){
    $(this).unbind("click").on("click",function(){
      $("#modalBod").css("height","0")
        $('#friendPageModal').modal('show');
        var fr=$(this).attr("id")+"";
        var fr1=fr.substr("11");
        global.friendsObj.idx=fr1;
        var strg1="";
        if(global.friendsObj.friend.returnObj[fr1].requestStatus=="Accepted"){
          let freed=global.friendsObj.friend.returnObj[fr1].requestResponse;
          var f = new Date();
        f=f.toLocaleString();
        var now=f.split(",");
        var tody=now[0]+"";
        var currTime=tody.split("/");

        var g = new Date(global.friendsObj.friend.returnObj[fr1].requestResponse)
        var g1=g.toLocaleString();


        var dateO1=g1.split(",");
        var dateArr01=dateO1[0]+"";
        var responded=dateArr01.split("/");

         var strg="";
         var carrymon="false"; 
         var carryYear="false";
         var daystrg="";
         var monStrg="";
         var yrStrg="";

         if(parseInt(currTime[1])>=parseInt(responded[1])){
          var val=parseInt(currTime[1])-parseInt(responded[1])
        
            if(val==0){
              daystrg=""
            }else{
              daystrg=val+" day(s)"
            }
         }else{
            var val=parseInt(currTime[1])-parseInt(responded[1])+30
           
            currTime[0]=(parseInt(currTime[0])-1);
            if(val==0){
              daystrg=""
            }else{
              daystrg=val+" day(s)"
            }
        
         }


         if(parseInt(currTime[0])>=parseInt(responded[0])){
          var val=parseInt(currTime[0])-parseInt(responded[0])
            
            if(val==0){
              monStrg=""
            }else{
              monStrg=val+" month(s)";
            }
         }else{
          var val=parseInt(currTime[0])-parseInt(responded[0])+12
            
            currTime[2]=currTime[2]-1;
            if(val==0){
              monStrg=""
            }else{
              monStrg=val+" month(s)";
            }

         }


          if(parseInt(currTime[2])>=parseInt(responded[2])){
          var val=parseInt(currTime[2])-parseInt(responded[2])
            
            if(val==0){
              yrStrg=""
            }else{
              yrStrg=val+" yr(s)"
            }
         }else{

         }

      
      if(yrStrg!=""){
        strg=yrStrg;
      }

      if(monStrg!=""){
        if(strg==""){
          strg=monStrg;
        }else{
          strg=strg+", "+monStrg
        }
        
      }

      if(daystrg==""){
        strg=daystrg;
      }else{
        strg=strg+", "+daystrg
      }

      if(strg==""){
        strg="Since today!!"
      }

    }else{
      strg="Still in request state"

    }

        
     
        strg1=strg1+"<div style='float:left;'><img style='height:100px;width:120px;border-radius:12px;' src='"+global.friendsObj.friend.returnObj[fr1].requestorImgUrl+"' /></div>";
        strg1=strg1+"<div style='float:left;margin-left:10px'><span style='font-weight:bold;display:inline-block;width:120px;'>Name: </span>"+global.friendsObj.friend.returnObj[fr1].requestorUsername+"</div>"

        strg1=strg1+"<div style='float:left;margin-left:10px'><span style='font-weight:bold;display:inline-block;width:120px;'>Friends for: </span>"+strg+"</div>";

        strg1=strg1+"<div style='clear:both;'></div>"
        strg1=strg1+"<div></div>"
        $("#innerModal").empty().append(strg1);
        $("#agape_message_receiver_username").val(global.friendsObj.friend.returnObj[fr1].requestorUsername)
    })
  })
}


$(document).ready(function(){
  getSponsors();
  selectFriends("friends");
  $("#sendMessButton").unbind("click").on("click",function(){
      $("#messBox").show();
      if($("#modalBod").height()<280){
        TweenMax.to($("#modalBod")[0],.4,{css:{height:"300px"},onComplete:function(){
        }})
      }else{
        TweenMax.to($("#modalBod")[0],.4,{css:{height:"0px"},onComplete:function(){
        }})
      }
  })


  $("#sendButton").unbind("click").on("click",function(){
    let sendo={};
    let sendChk="true";
    sendo.job="quickJamUpdate_insert";
    sendo.obj={}
    sendo.dbase="agape_messages"
    $("#messBox :input").each(function(){
      if($(this).val()!=""){
        sendo.obj[$(this).attr("id")]=$(this).val()
      }else{
        if($(this).attr("id")!="sendButton"){
          sendChk="false"
        }else{

        }
      }
      
    })


    if(sendChk=="true"){
      
      sendo.obj.agape_message_sender_ID=global.userObj.agape_profile_memberID;
      sendo.obj.agape_message_sender_username=global.userObj.agape_profile_username;
      sendo.obj.agape_message_receiver_ID=global.friendsObj.returnObj[global.friendsObj.idx].requestorID
      sendo.obj.agape_message_send_date =convertNowToPhP();
      sendo.obj.agape_message_update=sendo.obj.agape_message_send_date;
      sendo.obj.agape_message_active="true";
      sendo.obj.agape_message_responses="none";
      sendo.obj.agape_message_opened="Sealed";
      sendo.obj.agape_message_receiver_url=global.friendsObj.returnObj[global.friendsObj.idx].requestorImgUrl;
      var img=$.parseJSON(global.userObj.agape_profile_default_img)
      sendo.obj.agape_sender_url=img.defaultPic;
      let funk=function(dta){
        let y=globalTools.verify(dta);
        TweenMax.to($("#modalBod")[0],.4,{css:{height:"0px"},onComplete:function(){
          let innMess=$("#innerMess")[0]
          fademessg(innMess,"Message sent")
      }})
      }
      ajaxCallPost(sendo,funk)
    }

  })




  $(".friendpageTab").each(function(){
    $(this).unbind("click").on("click",function(){
      
      $(".friendpageTab").each(function(){
        $(this).addClass("friendpageTab_over");
      });

      $(this).removeClass("friendpageTab_over");
      let rte= $(this).attr("id")+"";
      let yte=rte.substr(4);

      switch(rte){
        case 'tab_friendReqHoldDiv':
          control="friendRequestPagination"
          selectFriends("friendRequest");
          global.paginate=0;
        break;

        case 'tab_friendHoldDiv':
          control="friendPagination";
          selectFriends("friends");
          global.paginate=0;
        break;
        
        default:
        
        break;

      }
     
    })
  })  
 
})


</script>