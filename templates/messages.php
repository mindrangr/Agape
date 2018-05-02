<?php
  session_start();

  include("../Config_files/_shared_config.php");

?>
<style>
  .replyButton{
    float:left;
    width:100px;
    font-weight: bold;
    color:red;
    cursor:pointer
  }


  .deleteButton{
    float:left;
    font-weight: bold;
    color:#000;
    cursor:pointer
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
            <div id="messBox" style="width:80%;height:400px;background-color: #eee;margin-top:20px;padding:4px;overflow: auto; overflow-x: hidden">
              
               

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
  //$("#profileli").addClass("active");
  //$("#profileli").children().eq(0).removeClass("disabled");

  
  getSponsors();
  //getOnlineUsers(global.userListCnt);
         model={}
        model.job="selectAll";
        model.dbase="agape_messages";
        model.kob=" where agape_message_receiver_ID="+global.userObj.agape_profile_memberID;

        var modFunk1=function(data){
          var mess=globalTools.verify(data)
          //$("#messNum").html("("+mess.countR+")")
        
          

          var obj=globalTools.verify(data);



var strg="";
var bcolor="#bdb1bc"
for(f=0;f<obj.countR;f++){

  var vic=getTime(obj.returnObj[f].agape_message_send_date,true)
  var title=globalTools.stringClearBack(obj.returnObj[f].agape_message_title);
  var body=globalTools.stringClearBack(obj.returnObj[f].agape_message);

 
    var innerMess=""
    if(obj.returnObj[f].agape_message_responses!="none" && obj.returnObj[f].agape_message_type!="Agape Notification"){
       
        console.log(9999999)
         console.log(obj.returnObj[f].agape_message_responses)
         var teg=$.parseJSON(obj.returnObj[f].agape_message_responses)
   console.log(teg)
    

     var ind=teg.length;
     console.log(ind)
     console.log(9999999)
 
     for(d=0;d<ind;d++){
      innerMess=innerMess +"<div style='width:80%;margin-left:30px;background-color: #eee;border-radius: 5px;padding:5px;margin-top:15px'>"
        innerMess=innerMess+teg[d].message;
        innerMess=innerMess +"</div>"
     }
    }


    strg=strg+"<div style='width:100%;background-color: "+bcolor+";border-top:solid 1px #000;padding:5px;'>"
         strg=strg+"<div style='float:left;font-weight:bold;width:100px'>"+obj.returnObj[f].agape_message_sender_username+"</div><div style='float:left;font-weight:bold;width:340px;margin-right:15px;font-style: italic;'>"+title+"</div>"
          strg=strg+"<div style='float:left;text-decoration: underline;'>"+vic+"</div>"
          strg=strg+"<div style='clear:both'></div>"
          

          strg=strg+"<div style='margin-top:15px;'>"+body+"</div>"

          
            strg=strg+"<div id='chime'>"+innerMess;

            strg=strg+"<div><div style='float:left;margin-right:20px;font-weight:bold;color:red;margin-top:10px;text-decoration:underline;cursor:pointer;'>Reply</div><div style='float:left;margin-top:10px;'>remove</div><div style='clear:both'></div></div>"
      
            strg=strg+"</div>"
            strg=strg+"</div>"

          if(bcolor=="#bdb1bc"){
              bcolor="#e0b9e8;"
          }else{
            bcolor="#bdb1bc"
          }

    }


          $("#messBox").append(strg);


        }
        ajaxCallPost(model,modFunk1);

        


</script>