<?php
  session_start();

  include("../Config_files/_shared_config.php");

?>
<style>
  .replyButton{
    float:left;
    width:50px;
    font-weight: bold;
    color:red;
    cursor:pointer;
    margin-right:10px;
    margin-top:10px;
    text-decoration:underline;
  }


  .deleteButton{
    float:left;
    font-weight: bold;
    color:#000;
    cursor:pointer
  }


  .removeButt{
    float:left;
    margin-top:10px;
    text-decoration:underline;
    cursor:pointer;
    font-weight:bold;
  }

</style>
<!Doctype html />
  <script src="<?php echo $actual_base ?>/scripts/jquery-3.1.1.min.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="styles/NetscapeStyles_responsive1.css" />

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo $actual_base ?>/scripts/jTools.js"></script>
<script src="scripts/jScripts.js"></script>

<script src="<?php echo $actual_base ?>/scripts/TweenMax.js"></script>
<!-- Modal -->
<div class="modal fade" id="homePageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="innerModal"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
 
 <body style="padding-top:190px;background-color: #2f4774;">
       <?php include '../header.php';?>
      <div class="container" style="background-color: #000;padding-bottom: 20px;border-radius:6px;">
     
        <div class="row">
          <div class="col-sm-3 tPaddMobileLogin" >
            <?php include 'logBox.php';?>
             
          </div>
      
          <div class="col-sm-9">
            <div id="messBoxOpt" style="width:80%;background-color: #c96cbd;padding-left:10px;"><span id="createMess" style='cursor:pointer;font-weight:bold;text-decoration: underline;'>create message</span></div>
            <div>
              <div id="createMessBox" style='height:0px;width:500px;overflow: auto;overflow-y: hidden;'>

                <div id="sendTo" style='float:left;width:120px;color:#eee;margin-top:10px;'>Send to:</div>
                <div style='float:left;margin-top:10px;'><input  id='agape_message_receiver_username' placeholder="Receiver username" type="textbox" name="" class="form-control" ></div>
                <div style='clear:both;margin-bottom: 10px;'></div>

                <div style='float:left;width:120px;color:#c96cbd;'>Message title:</div>
                <div style='float:left;'><input placeholder="Message title" id='agape_message_title' type="" name="" class="form-control" ></div>
                <div style='clear:both;margin-bottom: 10px;'></div>
                

                <div style='float:left;width:120px;color:#c96cbd;'>Message:</div>
                <div style='float:left;'><textarea id='agape_message'style='width:300px;height:50px;' class="form-control" ></textarea></div>
                <div style='clear:both'></div>

                <div style="margin-top:10px;"><button id="createButton" class="btn btn-outline-success my-2 my-sm-0" type="button">Create</button></div>
              </div>
             <div id="messBox" style="width:80%;height:400px;background-color: #eee;padding:4px;overflow: auto; overflow-x: hidden">

              </div>  
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
  var obj
  $(".nav-item").each(function(){
    $(this).removeClass("active");
    $(this).children().eq(0).addClass("disabled")
  })
  //$("#profileli").addClass("active");
  //$("#profileli").children().eq(0).removeClass("disabled");

  
  getSponsors();
  //getOnlineUsers(global.userListCnt);
  model={}
  model.job="selectAll";
  model.dbase="agape_messages";
  model.kob=" where agape_message_receiver_ID="+global.userObj.agape_profile_memberID+" order by agape_message_update desc";

  var modFunk1=function(data){
  var mess=globalTools.verify(data)
  obj=globalTools.verify(data);
  displayRecs(obj)

}
ajaxCallPost(model,modFunk1);

     
$("#createMess").unbind("click").on("click",function(){
  var fr=$("#createMessBox").height();
  if(fr==0){
      TweenMax.to($("#createMessBox")[0],.5,{css:{height:210},onComplete:function(){
      }})

  }else{
      TweenMax.to($("#createMessBox")[0],.5,{css:{height:0},onComplete:function(){
      }})
  }
})

var tiko
var SendTiko="false";
$("#agape_message_receiver_username").on("blur",function(){

  var un=$("#agape_message_receiver_username").val();
  if(un!=""){
    var modl={}
    modl.job="selectAll";
    modl.dbase="agape_profile"
    var un=$("#agape_message_receiver_username").val();
    modl.kob=" where agape_profile_username='"+un+"'";
    var retFunc=function(data){
      tiko=globalTools.verify(data)
      if(tiko.returnObj!="set empty"){
        $("#sendTo").css({"color":"lime","text-decoration":"underline"});
        SendTiko="true"

      }else{
        SendTiko="false";
        $("#sendTo").css({"color":"#eee","text-decoration":"none"});
      }
 
    }
    ajaxCallPost(modl,retFunc)

  }
  
})


$("#createButton").unbind("click").on("click",function(){
  var subVal="true"
  $("#createMessBox :input").each(function(){
    if($(this).val()=="" && $(this).attr("id") !="createButton"){
      subVal="false";
      $(this).css("background-color","#ddd");
    }
    
  })


  if(subVal=="true" && SendTiko=="true"){
    alert("Spankton")
  }
})


function submitInnerMess(id){
      var indx=obj.returnObj.length;
      var objI=0
      for(f=0;f<indx;f++){
        if(obj.returnObj[f].agape_message_ID==id){
          objI=f;
            //alert(obj.returnObj[f].agape_message_sender_username)
        }
      }

      var mod={};
      mod.job="quickJamUpdate_field";
      mod.selectField="agape_message_responses";
      mod.dbase="agape_messages";
      mod.uBase="agape_messages";
      mod.selectParam="agape_message_ID";
      mod.issuesID=id;
      mod.uVals=id;
      mod.uParam="agape_message_ID";
      mod.selFunc="selectFunc";
      mod.kob=" where agape_message_ID="+id;
      mod.upFunc="updateFunc";
      var timePHP=convertNowToPhP();
      var vic=getTime("none",'true');
      var Obj={};
      Obj.message=globalTools.stringClear($("#tarea"+id).val());
      Obj.sender_username=global.userObj.agape_profile_username;
      Obj.agape_message_sender_ID=global.userObj.agape_profile_memberID
      Obj.sendDate=timePHP;
      Obj.sendDateFormatted=vic;
      Obj.receiver_uname=obj.returnObj[objI].agape_message_sender_username;
      Obj.receiver_ID=obj.returnObj[objI].agape_message_sender_ID
      Obj.sendGroup=[{"agape_message_receiver_username":"uname200","agape_message_receiver_ID":"200"}];
      var modstrg=getseconds(1);
      var codeStrg=global.userObj.agape_profile_username+modstrg
      var d=Base64.encode(codeStrg)

      Obj.idx=obj.returnObj[objI].agape_message_ID+"_"+d;
     

      mod.objR=Obj;
      mod.obj={}
      mod.obj.agape_message_update=timePHP;
      mod.obj.agape_message_opened="Sealed"

      var retFunc=function(data){
        var b=globalTools.verify(data)
        displayRecs(b);
      }

      ajaxCallPost(mod,retFunc)

}


function displayRecs(objh){


  var strg="";
  var bcolor="#bdb1bc"
  for(f=0;f<objh.countR;f++){

    var vic=getTime(objh.returnObj[f].agape_message_update,"true");
    var ric=getTime(objh.returnObj[f].agape_message_send_date,"true")
    var title=globalTools.stringClearBack(objh.returnObj[f].agape_message_title);
    var body=globalTools.stringClearBack(objh.returnObj[f].agape_message);
 
    var innerMess="";
    if(objh.returnObj[f].agape_message_responses!="none" && objh.returnObj[f].agape_message_type!="Agape Notification"){
        var teg=$.parseJSON(objh.returnObj[f].agape_message_responses)
        var ind=teg.length;
 
        for(d=0;d<ind;d++){
          var img1="";
          if(teg[d].sender_username==global.userObj.agape_profile_username){
            img1=""
          }else{
            img1="<img src='"+objh.returnObj[f].agape_sender_url+"' style='height:60px;width:50px;' />"
          }

          innerMess=innerMess +"<div style='width:80%;margin-left:30px;background-color: #eee;border-radius: 5px;padding:5px;margin-top:15px'>"
          innerMess=innerMess +"<div style='font-weight:bold;float:left;width:120px;'><div >"+img1+"</div><div style='font-size:13px;'>"+teg[d].sender_username+"</div></div>"
          innerMess=innerMess +"<div style='float:left;font-size:13px;'>"+teg[d].sendDateFormatted+"</div>"
          innerMess=innerMess +"<div style='clear:both;'></div>"
            innerMess=innerMess+"<div style='font-size:13px;'>"+teg[d].message+"</div>";
          innerMess=innerMess +"</div>"
        }
    }

  

    if(objh.returnObj[f].agape_message_type!="Agape Notification"){

      strg=strg+"<div style='width:100%;background-color: "+bcolor+";border-top:solid 1px #000;padding:5px;'>"

    }else{

      if(objh.returnObj[f].agape_message_responses=="Female"){
         strg=strg+"<div style='width:100%;background-color:#fff;background-image:url(images/wink_female.png);background-repeat:no-repeat;border-top:solid 1px #000;padding:5px;background-position: 200px -75px; '>"
      }

      if(objh.returnObj[f].agape_message_responses=="Male"){
         strg=strg+"<div style='width:100%;background-color:#fff;background-image:url(images/wink_male.png);background-repeat:no-repeat;border-top:solid 1px #000;padding:5px;background-position: 200px -75px; '>"

      }
    }

    var img="";
    if(objh.returnObj[f].agape_message_sender_username==global.userObj.agape_profile_username){
      img=""
    }else{
      img="<img src='"+objh.returnObj[f].agape_sender_url+"' style='height:60px;width:50px;' />"
    }

    strg=strg+"<div style='float:left;font-weight:bold;width:100px'><div>"+img+"</div><div style='font-size:13px;'>"+objh.returnObj[f].agape_message_sender_username+"</div></div><div style='float:left;font-weight:bold;width:280px;margin-right:15px;font-style: italic;'>"+title+"</div>"
    strg=strg+"<div style='float:left;text-decoration: underline;width:220px;'><div style='font-size:12px;'>Updated: "+vic+"</div><div style='font-size:12px;width:220px;'>Created: "+ric+"</div></div>"
    strg=strg+"<div style='clear:both'></div>"
    

    strg=strg+"<div style='margin-top:15px;'>"+body+"</div>"

    strg=strg+"<div id='chime'>"+innerMess;

    if(objh.returnObj[f].agape_message_type!="Agape Notification"){
       strg=strg+"<div id='updateBox"+objh.returnObj[f].agape_message_ID+"' style='100px;overflow:auto;height:0px;overflow-x:hidden;overflow-y:hidden;'><div style='height:140px;width:350px;margin:auto;margin-top:10px;padding:8px;'><div style='margin-top:10px;'><textarea id='tarea"+objh.returnObj[f].agape_message_ID+"' style='width:340px;height:60px;border-radius:5px;'></textarea></div><div><span id='innerSub"+objh.returnObj[f].agape_message_ID+"' style='font-size:14px;text-decoration:underline;margin-right:8px;cursor:pointer;'>submit</span><span style='cursor:pointer;text-decoration:underline;' id='innerCancel"+objh.returnObj[f].agape_message_ID+"' style='font-size:14px;text-decoration:underline;margin-right:8px;'>cancel</span></div></div></div><div><div id='message"+objh.returnObj[f].agape_message_ID+"' class='replyButton'>Reply</div><div class='removeButt'>Remove</div><div style='clear:both'></div></div>";
    }

    strg=strg+"</div>"

    strg=strg+"</div>"
    if(bcolor=="#bdb1bc"){
        bcolor="#e0b9e8;"
    }else{
      bcolor="#bdb1bc"
    }

  }




  $("#messBox").empty().append(strg);
  $("div[id^='message']").each(function(){
    $(this).unbind("click").on("click",function(){
      var b=$(this).attr("id")+"";
      var b1=b.substr(7);

      TweenMax.to($("#updateBox"+b1)[0],.5,{css:{height:140},onComplete:function(){
      }})

    })
  })


  $("span[id^='innerSub']").each(function(){
    $(this).unbind("click").on("click",function(){
        var b=$(this).attr("id")+"";
        var b1=b.substr(8);
        var val=$("#tarea"+b1).val();

        if(val!=""){
          submitInnerMess(b1)
        }else{
          //alert("no")
        }
    })
  })

  $("span[id^='innerCancel']").each(function(){
    $(this).unbind("click").on("click",function(){
      var b=$(this).attr("id")+"";
      var b1=b.substr(11)
      TweenMax.to($("#updateBox"+b1)[0],.5,{css:{height:0},onComplete:function(){
      }})
    })
  })

}

</script>