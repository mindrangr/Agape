<?php
  session_start();

  include("../Config_files/_shared_config.php");

?>
<!Doctype html />
  <script src="<?php echo $actual_base ?>/scripts/jquery-3.1.1.min.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="styles/NetscapeStyles_responsive1.css" />

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo $actual_base ?>/scripts/jTools.js"></script>
<script src="scripts/jScripts.js"></script>
<script src="scripts/commentBoss.js"></script>
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



<div class="modal fade" id="vidPageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="max-width: 700px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="vidModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="vidInnerModal"></div>
        <div style="height:500px;overflow: auto;overflow-x: hidden;">
          <div id="createMessBox" style="height:0px;overflow: auto;overflow-x: hidden;overflow-y: hidden;">
            <div style="float: left;width:70px;padding:4px;">Message:</div>
            <div style="float: left;padding:4px;">
              <textarea id="message" style="width:350px;border-radius: 5px;height:70px;"  ></textarea>
            </div>
            <div style="clear:both;"></div>
            <div style="margin-left:70px;margin-top:15px;padding:4px; ">
              <button id="sendButt" class="btn btn-success my-2 my-sm-0" type="button">Submit message</button>
             
            </div>
          </div>
          <div id="vidCommModal" ></div>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
 
<body style="padding-top:70px;background-image: url('images/blog1Blur2.jpg');background-repeat:no-repeat;background-color: #2f4774;">
 
  <?php include '../header.php';?>

    
     
    <div class="container newsContainer" >
      <div class="overF">
        <div class="row">
          <div class="col-sm-3 tPaddMobileLogin" >
            <?php include 'logBox.php';?>
          </div>
         
          <div class="col-sm-6">
           	<div style="font-size:28px;text-shadow: 1px 1px #000;">Trumps America</div>
           	<div><a href="President_Trump"><img src="images\donald-trump-1.jpg" style='border:1px solid #000;height:380px;box-shadow: 0px 0px 6px #000;width:570px'></a></div>
          </div>

          <div class="container-fluid" style='color:#eee;margin-top:20px;margin-bottom:20px;font-size:20px;'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>

          <div class="col-sm-3"></div>
        
      </div>
    </div>
  </div>
<div class="container-fluid" >
  <div style="width:60%;margin:auto;">
    <div style="float:left;width:50%;text-shadow: 1px 1px #000;font-size: 30px;color:#c96cbd;">The Left</div>
    <div style="float:right;font-size: 30px;color:#c96cbd;text-shadow: 1px 1px #000;">The Right</div>
    <div style='clear:both;'></div>
  </div>
</div>
<div class="container-fluid" >
  <div style="width:60%;margin:auto;">
    <div id="leftVids" style="float:left;">
    </div>

    
    <div id="rightVids" style="float:right;">
    </div>
    <div style="clear:both;"></div>
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

  
  getSponsors();
  //getOnlineUsers(global.userListCnt);

  function getTrumpVids(){
    var frObj={};
    frObj.job="selectAll";
    frObj.dbase="agape_topics";
    frObj.kob=" where agape_media_group like '%Trump%' order by agape_media_lastComment_date desc limit 0,25";

    var funk=function(data){
      var b= globalTools.verify(data)
      global.dataHolder.TrumpVids=b.returnObj;
      displayVids(b.returnObj)
      

    }
    ajaxCallPost(frObj,funk)
  }


  getTrumpVids();


  $("#sendButt").unbind("click").on("click",function(){
    var fModel={}
    fModel.job="quickJamUpdate_insert";
    fModel.dbase="agape_comments";
    fModel.obj={};
    fModel.obj.agape_comments_Comment=$("#message").val()
    fModel.obj.agape_commentsCommentDataResponse="none";
    fModel.obj.agape_comments_thumbsUp=0
    fModel.obj.agape_comments_thumbsDown=0
    var pic=$.parseJSON(global.userObj.agape_profile_default_img)
    fModel.obj.agape_comments_image=pic.defaultPic;
    fModel.obj.agape_commentCreator_Username=global.userObj.agape_profile_username;
    fModel.obj.agape_commentsLastComment_username=fModel.obj.agape_commentCreator_Username;
    fModel.obj.agape_comment_createdate=convertNowToPhP();
    fModel.obj.agape_commentsLastComment=fModel.obj.agape_comment_createdate;
    fModel.obj.agape_commentsSource=global.dataHolder.TrumpVids[global.dataHolder.vidIndex].agape_media_SourceID;
    fModel.selFunc="selectFunc";
    fModel.kob=" where agape_commentsSource='"+fModel.obj.agape_commentsSource+"'";

    fModel.selDbase="change"

    var fred=function(data){
      b = new CommentBoss('trumpVid','vidCommModal',global.dataHolder.TrumpVids[global.dataHolder.vidIndex].agape_media_SourceID);

    }
    ajaxCallPost(fModel,fred);

  })



  function displayVids(val){
    var tfal=val.length;
    $("#leftVids").empty();
    $("#rightVids").empty();
    for(v=0;v<tfal;v++){

      var de=getTime(val[v].agape_media_lastComment_date,"true");
      var se= formatNumber(val[v].agape_media_thumbsUp);
      var co=formatNumber(val[v].agape_media_comments_count);
      var td=formatNumber(val[v].agape_media_thumbsDown);

      var ft=" <div style='margin-top:15px;padding:4px;'>"
      ft=ft+" <div style='color:#fff;font-size:20px;width:350px;'>"+val[v].agape_media_title+"</div>"
      ft=ft+" <div>"
        ft=ft+" <iframe width='360' height='205' src='"+val[v].agape_media_link+"' frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe>"
      ft=ft+" </div>"
      
      ft=ft+" <div style='background-color: #000;height:60px;width:360px;padding:4px;'><span style='cursor:pointer;'><img id='mainVidCoUp"+v+"' src='images/thumbsUp.gif' height='20'/></span><span style='color:lime'>"+se+"</span>&nbsp;<span><img id='mainVidCoDn"+v+"' src='images/thumbsDown.gif' height='20'/></span>&nbsp;&nbsp;<span style='color:red'>"+td+"</span>&nbsp;&nbsp;<span id='comm"+v+"' style='color:#eee;text-decoration:underline;cursor:pointer;'>Comments:</span><span style='color:#eee;'> "+co+"</span>"
      ft=ft+" <div style='color:#eee;'>Last comment: "+de+"</div>"
      ft=ft+" </div>"
      ft=ft+"  </div>"
      var side=val[v].agape_media_group;
      var n = side.search("left");
      if(n==-1){
        n="right"
      }else{
        n="left"
      }

      $("#"+n+"Vids").append(ft)
    }



    $("img[id^='mainVidC']").each(function(){
      $(this).unbind('click').on("click",function(){
        
        var gr=$(this).attr('id')+"";
        var hr=gr.substr(11);
        var tst=gr.search(/Up/);
        var tst1=gr.search(/Dn/);
        var we={}
        we.job='quickJamUpdate_full'
        we.dbase="agape_topics";
        we.field="agape_media_ID";
        we.param="incField"
        we.vals=global.dataHolder.TrumpVids[hr].agape_media_ID;
        we.obj={};
        if(tst!=-1){
          we.obj.agape_media_thumbsUp="agape_media_thumbsUp+1"
        }

        if(tst1!=-1){
          we.obj.agape_media_thumbsDown="agape_media_thumbsDown+1"
        }
        
        var upo=function(data){

        }

        ajaxCallPost(we,upo);
      })
    })




    $("span[id^='comm']").each(function(){
      $(this).unbind("click").on("click",function(){
        //alert($(this).attr("id"))
        var fed=$(this).attr("id")+"";
        var dew=fed.substr(4);
        var vid="<div style='float:left;'>"
        vid=vid+" <iframe width='360' height='205' src='"+val[dew].agape_media_link+"' frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe>"
        vid=vid+" </div>";
        vid=vid+" <div style='float:left;'><div style='float:left;margin-left:15px;'><img src='images/thumbsUp.gif' height='23'><span id='dia_tup0' style='margin-left:3px;width:50px;'>11111</span></div>"
        vid=vid+" <div style='float:left;'><div style='float:left;margin-left:15px;'><img src='images/thumbsDown.gif' height='23'><span id='dia_tup0' style='margin-left:3px;width:50px;'>22</span></div></div>"
        vid=vid+" <div style='clear:both;'></div>"
        vid=vid+" <div style='margin-top:10px;margin-left:15px;'><button id='createMessButt' type='button' class='btn btn-secondary' >Create Message</button></div></div>"

        vid=vid+" <div style='clear:both;'></div>"



        b = new CommentBoss('trumpVid','vidCommModal',val[dew].agape_media_comments);
        $("#vidInnerModal").html(vid);
        $("#createMessButt").unbind("click").on("click",function(){
          if($("#createMessBox").hasClass("openedBox")){
            TweenMax.to($("#createMessBox")[0],.4,{css:{height:"0px"},onComplete:function(){
            $("#createMessBox").removeClass("openedBox")
            $("#message").val("");
          }})
          }else{
            TweenMax.to($("#createMessBox")[0],.4,{css:{height:"150px"},onComplete:function(){
            $("#createMessBox").addClass("openedBox")
          }})
          }

          
        })
        $("#vidModalLabel").html(val[dew].agape_media_title)
        $("#vidPageModal").modal('show');
        global.dataHolder.vidIndex=dew;

      })
    })
  }

 

</script>				