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

<script src="<?php echo $actual_base ?>/scripts/TweenMax.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $actual_base ?>/scripts/formFields1.js"></script>


<style>
  .imgDivHold{
    position:relative;
    margin-top:10px;

  }

  .profImgDivHold{
    position:relative;
    top:0px;

  }

  .topBannerInfoImg{
    position: absolute;
    background-color: #000;
    opacity: .7;
    top:0px;
    width:120px;
    height:55px;
    left:180px;
    border-radius: 0px 0px 0px 9px;
  }

  .topBannerInfoImg_basic{
    position: absolute;
    background-color: #000;
    opacity: .7;
    top:0px;
    width:120px;
    height:35px;
    left:180px;
    border-radius: 0px 0px 0px 9px;
  }

  .viewUserBanner{
    position:absolute;
    top:125px;
    height:50px;
    z-index:55;
    background-color: #000;
    opacity:.7;
    width:200px;
    padding-left:10px;
    border-radius:0px 9px 9px 0px;
    cursor:pointer;
  }


  .spanModalLabels{
    display:inline-block;
    width:110px;
    font-weight: bold;
  }

  .searchDrpDwn{
    color:#c96cbd;
    float:left;
    width:120px
  }


.searchCenterDiv{
  margin-left:15px;
  background-color: #000;
  border-radius: 5px;
  border:solid 1px #c96cbd;
  width:100%;
  /*padding:25px;*/
}


  .searchDrpDwnDiv{
    width:87%;
    background-color:#eee;
    height:40px;
    float:left;
    border-radius: 5px;
    padding:5px;
  }

  .searchDrpDwnSelect{
    width:90%;
    border:none;
    background-color:#eee;
  }






</style>



<!-- Modal -->
<div class="modal fade" id="searchPageModal" tabindex="-1" role="dialog" aria-labelledby="searchPageModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div style="float:left;"><h5 class="modal-title" id="searchModalLabel"></h5></div>
        <div style="float:left;margin-left:25px;margin-top: 4px;">Intentions: <span id="intentions" style="font-weight: bold;"></span></div>
        <div style="clear:both"></div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="innerModal"></div>
      </div>
       <div id="modalBod" class='div' style="background-color: #eee;overflow:auto;height:0px;overflow-y: hidden;padding-left:8px;">

          <div id="profBox">
         
          <div style="float: left;width:100px;font-weight:bold;">Education:</div>
          <div id="education" style="float: left;"></div>

          <div style="clear:both;"></div>



          <div style="float: left;width:100px;font-weight:bold;">Politics:</div>
          <div id="politics" style="float: left;"></div>

          <div style="clear:both;"></div>

          <div style="margin-top:15px;font-weight: bold;">Description of myself:</div>
          <div style='height:120px' id="agape_profile_description" ></div>

          


          <div style="margin-top:15px;font-weight: bold;" >What I'm looking for:</div>
          <div style='height:120px' id="agape_partner_description" ></div>

          
          
        <div id="messLink" style='color:red;text-decoration: underline;cursor:pointer;'>Message me to learn more</div>
      </div>

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

                <div style="margin-top:10px;"><button id="createButton" class="btn btn-outline-success my-2 my-sm-0" type="button">Create</button></div>

      </div>
       </div>

      <div class="modal-footer">
       <div id="messReps"></div>
       <div>
        <button id="vwProfile" type="button" class="btn btn-primary">View profile</button>
        <button id="messMe" type="button" class="btn btn-primary">Message me</button> 
      </div>
        <div style="clear:both;"></div>
       
      </div>
    </div>
  </div>
</div>
 
<body style="padding-top:70px;background-image: url('images/blog2Blur.jpg');background-repeat:no-repeat;background-color: #2f4774;">
 
  <?php include '../header.php';?>
     
    <div class="container newsContainer" >
      <div class="overF">
        <div class="row">
          <div class="col-sm-3 tPaddMobileLogin" style="height:770px;" >
            <?php include '../templates/logBox.php';?>
          </div>
      
          <div class="col-sm-6" >
            <div class="searchCenterDiv">
            <div class="searchIBox">
              <div style='font-size:13px;'>There are <span id="countMax" style='color:lime;text-decoration: underline;cursor:pointer' >0</span> candidates in your area.</div>
              

              <div style='position:relative;padding: 4px;'><span id="potViews" style="color:red;text-decoration: underline;cursor:pointer;">0</span> people have viewed your profilesince your last login.
                <div id="cViews" style="position: absolute;z-index:10;height:140px;width:270px;height:0px;background-color:#eee;overflow: auto;">
              </div>

            </div>




              <div id='idHolder' style='height:730px;margin-top:10px;width:100%;overflow: auto;overflow-x: hidden;'>
                
              

              </div>
              <div id="searchPagePagin"></div>

              
            </div>
            <div style="height:600px;width:45%;float:left;margin-left:10px;margin-top:10px;">
              <div>
                <img src='advertiseImages/atlhousing.png' style='width:95%;height:32%;margin-top: 10px;' />
              </div>
               <div>
                <img src='advertiseImages/OptimalHearing.png' style='width:95%;height:32%;margin-top: 10px;' />
              </div>
               <div>
                <img src='advertiseImages/MegaPath.PNG' style='width:95%;height:32%;margin-top: 10px;' />
              </div>
              
               <div >
                <img src='advertiseImages/ellis.png' style='width:95%;height:32%;margin-top: 10px;' />
              </div>


            </div>
            <div style="clear:both;"></div>

          </div>
          <!--<div style="margin-left:15px;float:left;">
            <div class="pollStyle" >
              <div id="polltitle1" class="rowHolderHeaders_search" style="width:54%;margin-top:15px;height:56px;padding-left:6px;padding-right:6px;padding-bottom:15px;"></div>
              <input type="hidden" id="poll_ID1" />
              <div id="pollHolder1" class='pollHolder'>
                
              </div>

            </div>
          </div>

           

              <div style="clear:both;"></div>-->
          </div>
          

          <div class="col-sm-3" style="height:770px;">
            <div id="searchBox1" style='padding:10px;background-color: #000;border-radius: 5px;border:solid 1px #c96cbd;'>


            <div style="margin-top:10px;">
              <div class='searchDrpDwn'>Gender seeking</div>
                <div class="searchDrpDwnDiv">

              <select  id="agape_profile_gender" class="searchDrpDwnSelect" >
                </select>
              </div>
              <div style="clear:both;"></div>
            </div>


              
            <div style="margin-top:10px;">
              <div class='searchDrpDwn'>Body type</div>
                <div class="searchDrpDwnDiv">

              <select  id="agape_profile_bodyType" class="searchDrpDwnSelect" >
                </select>
              </div>
              <div style="clear:both;"></div>
            </div>

 

            <div style="margin-top:10px;">
              <div class='searchDrpDwn'>Intentions</div>
              
              <div style="clear:both;"></div>
              <div class="searchDrpDwnDiv">
              <select  id="agape_profile_intentions" class="searchDrpDwnSelect" >
                </select>
              </div>
            </div>

            <div style="margin-top:10px;">
              <div class='searchDrpDwn'>Religion</div>
              
              <div style="clear:both;"></div>
              <div class="searchDrpDwnDiv">
              <select  id="agape_profile_religion" class="searchDrpDwnSelect" >
                </select>
              </div>
            </div>



            <div style="margin-top:10px;">
              <div class='searchDrpDwn'>Race</div>
              <div class="searchDrpDwnDiv">
              <select  id="agape_profile_race" class="searchDrpDwnSelect" >
                </select>
              </div>
              <div style="clear:both;"></div>
            </div>


            <div style="margin-top:10px;">
              <div class='searchDrpDwn'>Zodiac sign</div>
              <div class="searchDrpDwnDiv">
              <select  id="agape_profile_zodiacSign" class="searchDrpDwnSelect" >
                </select>
              </div>
              <div style="clear:both;"></div>
            </div>




            <div style="margin-top:10px;">
              <div class='searchDrpDwn'>Age</div>
              <div class="searchDrpDwnDiv">
               <select  id="agape_profile_age" class="searchDrpDwnSelect" >
                </select>
              </div>
              </div>
              <div style="clear:both;"></div>
           

           

            <div style="margin-top:10px;">
              <div class='searchDrpDwn'>Height</div>
              <div class="searchDrpDwnDiv">
               
                <select  id="agape_profile_height" class="searchDrpDwnSelect" >
                </select>
              </div>
              <div style="clear:both;"></div>
            </div>
             <div style='margin-top: 15px;'><button id="searchButton" class="btn btn-outline-success my-2 my-sm-0" type="button"  >Search</button></div>


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
  
  var cObj






  $("#potViews").unbind("click").on("click",function(){
      var dataElement=$("#cViews")[0];
      if($("#potViews").hasClass("opened")){
        TweenMax.to(dataElement,.3,{css:{height:0},delay:-.3,onComplete:function(){
          
          $("#potViews").removeClass("opened")
        }})
      }else{
        TweenMax.to(dataElement,.3,{css:{display:"block"},delay:-.3,onComplete:function(){
          TweenMax.to(dataElement,.5,{css:{height:90}})
          $("#potViews").addClass("opened")
        }})
      }
      
    })


  $("#searchButton").unbind().on("click",function(){
    var gtr={};
    var sebxcntr=0;
    $("#searchBox1 :input").each(function(){
      if($(this).attr("id")!="searchButton" && $(this).val()!="Not Answered"){
        console.log($(this).val())
        gtr[$(this).attr("id")]=$(this).val();
        sebxcntr=sebxcntr+1;
      }
      
    })
    var gstrg="";
    var t=0
    for(var b in gtr){
      t=t+1;
      if(t<sebxcntr){
        switch(b){

          case 'agape_profile_height':
            var idx=parseInt(gtr[b]);
            var lw=idx-2;
            var hw=idx+3;
            var fstr="";
            for(i=lw;i<hw;i++){

              if(i<(hw-1)){
                fstr=fstr+"'"+i+"', "; 
              }else{
                fstr=fstr+"'"+i+"'"; 
              }        
            }
            gstrg=gstrg+ b+" in ("+fstr+") and ";
          break;


          case 'agape_profile_intentions':

            if(gtr[b]=="Friendship"){
              gstrg=gstrg+ b+" in ('Friendship','Business Contact') and "
            }else if(gtr[b]=="Casual Dating"){
              gstrg=gstrg+ b+" in ('Casual Dating','Hook up') and "
            }else if(gtr[b]=="Hook up"){
                gstrg=gstrg+ b+" = '"+gtr[b]+"' and "
            }else if(gtr[b]=="Marriage"){
                gstrg=gstrg+ b+" = '"+gtr[b]+"' and "
            }else if(gtr[b]=="Other"){
                gstrg=gstrg+ b+" in ('Other','Lets Talk') and "
            }else if(gtr[b]=="Lets Talk"){
                gstrg=gstrg+ b+" in ('Other','Lets Talk','Business Contact','Hook up') and "
            }



          break;

          case 'agape_profile_age':
            var idx=parseInt(gtr[b]);
            var lw=idx-2;
            var hw=idx+3;
            var fstr="";
            for(i=lw;i<hw;i++){

              if(i<(hw-1)){
                fstr=fstr+"'"+i+"', "; 
              }else{
                fstr=fstr+"'"+i+"'"; 
              }        
            }
            gstrg=gstrg+ b+" in ("+fstr+") and ";
          break;


          default:
            gstrg=gstrg+ b+"='"+gtr[b]+"' and ";
          break;
        }

         
      }else{
       
        switch(b){

          case 'agape_profile_height':
            var idx=parseInt(gtr[b]);
            var lw=idx-2;
            var hw=idx+4;
            var fstr="";
            for(i=lw;i<hw;i++){

              if(i<(hw-1)){
                fstr=fstr+"'"+i+"', "; 
              }else{
                fstr=fstr+"'"+i+"'"; 
              }        
            }
            gstrg=gstrg+ b+" in ("+fstr+")";
          break;

          case 'agape_profile_age':
            var idx=parseInt(gtr[b]);
            var lw=idx-3;
            var hw=idx+4;
            var fstr="";
            for(i=lw;i<hw;i++){

              if(i<(hw-1)){
                fstr=fstr+"'"+i+"', "; 
              }else{
                fstr=fstr+"'"+i+"'"; 
              }        
            }
            gstrg=gstrg+ b+" in ("+fstr+") ";
          break;



           case 'agape_profile_intentions':

            if(gtr[b]=="Friendship"){
              gstrg=gstrg+ b+" in ('Friendship','Business Contact')"
            }else if(gtr[b]=="Casual Dating"){
              gstrg=gstrg+ b+" in ('Casual Dating','Hook up')"
            }else if(gtr[b]=="Hook up"){
                gstrg=gstrg+ b+" = '"+gtr[b]+"'"
            }else if(gtr[b]=="Marriage"){
                gstrg=gstrg+ b+" = '"+gtr[b]+"'"
            }else if(gtr[b]=="Other"){
                gstrg=gstrg+ b+" in ('Other','Lets Talk')"
            }else if(gtr[b]=="Lets Talk"){
                gstrg=gstrg+ b+" in ('Other','Lets Talk','Business Contact','Hook up')"
            }



          break;


          default:
            gstrg=gstrg+ b+"='"+gtr[b]+"' ";
          break;
        }






      }
    }
    gstrg=gstrg+" and agape_partner_gender ='"+global.userObj.agape_profile_gender+"' and agape_profile_state='"+global.userObj.agape_profile_state+"'";
    global.searchObj.sql= " where "+gstrg

    var model={}
    model.job="selectAll";
    model.dbase="agape_profile";
    model.kob=global.searchObj.sql + " limit 0,25";
    model.Getdetail="GetCount";
    model.ob2=global.searchObj.sql;
    var retFun=function(data){
      var newb=globalTools.verify(data)
      control="searchPageSearch"
      displaySearchRecords(data)
    }

    ajaxCallPost(model,retFun)
  })



  function f25Searches(lim){
      var model={};
      model.job="candSearch";
      model.dbase="agape_profile";
      model.mygender=global.userObj.agape_profile_gender;
      model.genderSeeking=global.userObj.agape_partner_gender;
      model.state=global.userObj.agape_profile_state;
      model.city=global.userObj.agape_profile_city;
      model.indx=parseInt(lim)*25;


      var func21=function(data){
        control="searchPagePagin"
        displaySearchRecords(data);
      }

      ajaxCallPost(model,func21);
    
  }

  function displaySearchRecords(data){

    var cands=globalTools.verify(data)
        global.searchObj.cands=cands;
        $("#countMax").html(cands.countMax)
        var h=cands.countR;
        var strg="";
        for(i=0;i<h;i++){
          var sta
          var img=$.parseJSON(cands.returnObj[i].agape_profile_default_img)
          strg=strg+"<div class='imgDivHold'>"
            strg=strg+"<div class='profImgDivHold'><img src='"+img.defaultPic+"' style='width:250px;height:180px;border:solid 1px #000;' /></div>"
                  
                var package="topBannerInfoImg_basic";
                if(global.userObj.agape_profile_accountType=="Premium"){
                  package="topBannerInfoImg";
                }  
                strg=strg+"<div class='"+package+"'>";

                if(cands.returnObj[i].agape_profile_onlineStatus=="Offline"){
                  strg=strg+"<div style='position:absolute;color:#6b6262;left:10px;'>"+cands.returnObj[i].agape_profile_onlineStatus+"</div>"
                }

                if(cands.returnObj[i].agape_profile_onlineStatus=="Online"){
                  strg=strg+"<div style='position:absolute;color:red;left:10px;font-weight:bold;'>"+cands.returnObj[i].agape_profile_onlineStatus+"</div>"
                }

                  if(global.userObj.agape_profile_accountType=="Premium"){
                    strg=strg+"<div style='position:absolute;top:20px;color:lime;left:20px;font-weight:bold;font-size:24px;'>90</div>"
                  }

                    
                  strg=strg+"</div>"

                  strg=strg+"<div id='VUB"+i+"' class='viewUserBanner'>"
                    strg=strg+"<div style='color:lime;font-weight:bold;'>"+cands.returnObj[i].agape_profile_username+"</div>"
                    strg=strg+"<div style='color:#fff;font-weight:bold;font-size:12px;'>"+cands.returnObj[i].agape_profile_city+", "+cands.returnObj[i].agape_profile_state+"</div>"

                  strg=strg+"</div>"
                strg=strg+"</div>"




        }
        $("#idHolder").empty().append(strg);


        mainPaginationFunc("searchPagePagin",cands.countMax,"none")
        $("div[id^='VUB']").each(function(){
          $(this).on("click",function(){
            
            var idx1=$(this).attr("id")+"";
            idx1=idx1.substr(3)
            cObj=global.searchObj.cands.returnObj[idx1];
            var img2=$.parseJSON(global.searchObj.cands.returnObj[idx1].agape_profile_default_img)
            $("#searchModalLabel").empty().html(global.searchObj.cands.returnObj[idx1].agape_profile_username);

            $("#intentions").empty().append(global.searchObj.cands.returnObj[idx1].  agape_profile_intentions);
            
            var heightVal=parseInt(parseInt(global.searchObj.cands.returnObj[idx1].agape_profile_height)/12);

            var modulos=global.searchObj.cands.returnObj[idx1].agape_profile_height%12

            heightVal=heightVal+"' "+modulos;
            var tstring="<div>"
            tstring=tstring+"<div style='float:left;'><img src='"+img2.defaultPic+"' style='height:160px;width:180px;' /></div>";

            tstring=tstring+"<div style='float:left;padding-left:10px;'>"

            tstring=tstring+"<div><span class='spanModalLabels'>Gender</span>"+global.searchObj.cands.returnObj[idx1].agape_profile_gender+"</div>"
            tstring=tstring+"<div><span class='spanModalLabels'>Seeking</span>"+global.searchObj.cands.returnObj[idx1].agape_partner_gender+"</div>"
            tstring=tstring+"<div><span class='spanModalLabels'>Race</span>"+global.searchObj.cands.returnObj[idx1].agape_profile_race+"</div>";
            tstring=tstring+"<div><span class='spanModalLabels'>Age</span>"+global.searchObj.cands.returnObj[idx1].agape_profile_age+"</div>"
            tstring=tstring+"<div><span class='spanModalLabels'>Zodiac sign</span>"+global.searchObj.cands.returnObj[idx1].agape_profile_zodiacSign+"</div>";
            tstring=tstring+"<div><span class='spanModalLabels'>Height</span>"+heightVal+"</div>";
            tstring=tstring+"<div><span class='spanModalLabels'>Body type</span>"+global.searchObj.cands.returnObj[idx1].agape_profile_bodyType+"</div>";
           
            

            tstring=tstring+"</div>"

            tstring=tstring+"<div style='clear:both;'></div>"

            tstring=tstring+"</div>"


            $("#innerModal").empty().append(tstring)
            $('#searchPageModal').modal('show');

            $("#modalBod").css("height",0);



    




            $("#agape_profile_description").html(global.searchObj.cands.returnObj[idx1].agape_profile_description);

            $("#agape_partner_description").html(global.searchObj.cands.returnObj[idx1].agape_profile_partner_description);

            $("#agape_message_receiver_username").val(global.searchObj.cands.returnObj[idx1].agape_profile_username);


            $("#politics").html(global.searchObj.cands.returnObj[idx1].agape_profile_political);

            $("#education").html(global.searchObj.cands.returnObj[idx1].agape_profile_education);
          })
        })



  }



  function peopleProView(obj){
    
    var potv=obj.length;
    $("#potViews").html(potv);
    var strg="";
    for(var v=0;v<potv;v++){
      strg=strg+"<div style='border-bottom: solid 1px #000;'><div style='float:left;width:50px;''><img style='height:40px;width:50px;' src='"+obj[v].img+"'></div><div style='float:left;margin-left:15px;color:#000;width:160px;'><div style='text-align: center;'>Viewed profile</div><div style='font-size:12px;text-align: center;cursor:pointer;'>"+obj[v].whenViewed+"</div><div id='gtp"+v+"' style='text-decoration: underline;font-size:12px;text-align: center;cursor:pointer;'>view profile</div></div><div id='xcl"+v+"' style='float:left;margin-left:15px;color:red;cursor:pointer;'>x</div><div style='clear:both;'></div></div>";
    }

    
    $("#cViews").empty().append(strg);
    $("div[id^='gtp']").each(function(){
      $(this).unbind("click").on("click",function(){
        $('#searchPageModal').modal('show');
          
          var idx1=$(this).attr("id")+"";
          idx1=idx1.substr(3);
          var mod2={};
          mod2.job="selectAll"
          mod2.dbase="agape_profile"
          mod2.kob=" where agape_profile_username='"+global.searchObj.viewList[idx1].uname+"'";


          var func=function(data){
            var t=globalTools.verify(data);
            cObj=t.returnObj[0];
            var img2=$.parseJSON(t.returnObj[0].agape_profile_default_img)
            $("#searchModalLabel").empty().html(t.returnObj[0].agape_profile_username);

            $("#intentions").empty().append(t.returnObj[0].agape_profile_intentions);
            var heightVal=parseInt(parseInt(t.returnObj[0].agape_profile_height)/12);
            var modulos=t.returnObj[0].agape_profile_height%12

            heightVal=heightVal+"' "+modulos;
            var tstring="<div>"
            tstring=tstring+"<div style='float:left;'><img src='"+img2.defaultPic+"' style='height:160px;width:180px;' /></div>";

            tstring=tstring+"<div style='float:left;padding-left:10px;'>"

            tstring=tstring+"<div><span class='spanModalLabels'>Gender</span>"+t.returnObj[0].agape_profile_gender+"</div>"


            tstring=tstring+"<div><span class='spanModalLabels'>Seeking</span>"+t.returnObj[0].agape_partner_gender+"</div>"


            tstring=tstring+"<div><span class='spanModalLabels'>Race</span>"+t.returnObj[0].agape_profile_race+"</div>";


            tstring=tstring+"<div><span class='spanModalLabels'>Age</span>"+t.returnObj[0].agape_profile_age+"</div>";

             tstring=tstring+"<div><span class='spanModalLabels'>Zodiac sign</span>"+t.returnObj[0].agape_profile_zodiacSign+"</div>";

             tstring=tstring+"<div><span class='spanModalLabels'>Height</span>"+heightVal+"</div>";

              tstring=tstring+"<div><span class='spanModalLabels'>Body type</span>"+t.returnObj[0].agape_profile_bodyType+"</div>";

              tstring=tstring+"</div>"

              tstring=tstring+"<div style='clear:both;'></div>"

              tstring=tstring+"</div>"

              $("#innerModal").empty().append(tstring);



              $("#agape_profile_description").html(t.returnObj[0].agape_profile_description);

              $("#agape_partner_description").html(t.returnObj[0].agape_profile_partner_description);

              $("#agape_message_receiver_username").val(t.returnObj[0].agape_profile_username);

              $("#politics").html(t.returnObj[0].agape_profile_political);
              $("#education").html(t.returnObj[0].agape_profile_education);

            }

            ajaxCallPost(mod2,func)

        })
    })

    $("div[id^='xcl']").each(function(){
      $(this).unbind("click").on("click",function(){
        var b=$(this).attr("id")+"";
        var b1=b.substr(3);
        var nob=globalTools.arrayTool(obj,'removeIndex',b1,5);
        var nob1=JSON.stringify(nob);
        var model={}
        model.job="quickJamUpdate";
        model.param="agape_profile_memberID";
        model.vals=global.userObj.agape_profile_memberID;
        model.updateStr="agape_friendList='"+nob1+"'";
        model.dbase="agape_profile"
        var retFunk=function(datak){
          var sfun=function(){
            peopleProView(nob);
          }
          globalTools.getNewUserObj(global.userObj.agape_profile_memberID,sfun);
        }
        ajaxCallPost(model,retFunk);
      })
    })

  }


$(document).ready(function(){
  $("#vwProfile").on("click",function(){
      $("#profBox").show();
      $("#messBox").hide();
      var ht=parseInt($("#modalBod").height());
      if(ht==400 || ht==300){
         TweenMax.to($("#modalBod")[0],.4,{css:{height:"0px"},onComplete:function(){
        
          }})
      }else{
        TweenMax.to($("#modalBod")[0],.4,{css:{height:"400px"},onComplete:function(){
        
          }})
      }
    })


    $("#messMe").unbind("click").on("click",function(){
        TweenMax.to($("#modalBod")[0],.4,{css:{height:"300px"},onComplete:function(){

        }})
        $("#profBox").hide();
        $("#messBox").show();
    })




    if(global.userObj.agape_friendList!="none"){
      var flObj=$.parseJSON(global.userObj.agape_friendList);
      global.searchObj.viewList=flObj
      peopleProView(global.searchObj.viewList);
    }


    $("#createButton").unbind("click").on("click",function(){
      var subVal="true"
      $("#createMessBox :input").each(function(){
        if($(this).val()=="" && $(this).attr("id") !="createButton"){
          subVal="false";
          $(this).css("background-color","#ddd");
        }
        
      })


      if(subVal=="true"){
        var mod1={}
        mod1.job="quickJamUpdate_insert";
        mod1.dbase="agape_messages";
        mod1.ob2=" where agape_message_receiver_ID="+global.userObj.agape_profile_memberID+" or agape_message_sender_ID="+global.userObj.agape_profile_memberID;
        mod1.obj={};
        mod1.obj.agape_message_responses="none";
        mod1.obj.agape_message_sender_username=global.userObj.agape_profile_username;
        mod1.obj.agape_message_sender_ID=global.userObj.agape_profile_memberID;
        var img=$.parseJSON(global.userObj.agape_profile_default_img);
        var img1=$.parseJSON(cObj.agape_profile_default_img)
        mod1.obj.agape_sender_url=img.defaultPic;
        mod1.obj.agape_message_receiver_username=cObj.agape_profile_username;
        mod1.obj.agape_message_receiver_ID=cObj.agape_profile_memberID;
        mod1.obj.agape_message_receiver_url=img1.defaultPic;
        mod1.obj.agape_message_send_date=convertNowToPhP();
        mod1.obj.agape_message_update=mod1.obj.agape_message_send_date;
        mod1.obj.agape_message_type="simple";
        mod1.obj.agape_message_opened="Sealed";
        mod1.obj.agape_message_title=globalTools.stringClear($("#agape_message_title").val());
        mod1.obj.agape_message=globalTools.stringClear($("#agape_message").val());
        
        mod1.dbase="agape_messages";
        
        var funk1=function(data){
          TweenMax.to($("#modalBod")[0],.5,{css:{height:0},onComplete:function(){
            fademessg($("#messReps")[0],"Message sent")
          }})

        }
        ajaxCallPost(mod1,funk1)
      }else{
        alert("hold em")
      }
    })

  var qb1 
  var quesObj1={};
  quesObj1.job="selectAll"
  quesObj1.dbase="agape_pollQuestions";
  quesObj1.kob="where question_ID=39";
  quesObj1.value=39;
  var func1=function(data){
    var data1=globalTools.verify(data);
    qb1 = new questionBuilder({
      "background-color":"gray",
      "color":"#000",
      "chartSlider":{
        "background-color":"purple",
        "color":"#fff"
      },
      "innerStyle":{
          "tColor":"#eee"
      }
    });
    qb1.createPoll(data1,"polltitle1",'pollHolder1','poll_ID1',39);
    qb1.pollVerify(quesObj1.value,qb1);
  }
  ajaxCallPost(quesObj1,func1);



})

  //Fills select boxes with informtion from forms1.js  
  lForms();
  getSponsors();
  f25Searches(0);
  $("#agape_profile_gender").val(global.userObj.agape_partner_gender)
  $("#agape_profile_AGE").val(global.userObj.agape_partner_age)
  //getOnlineUsers(global.userListCnt);
</script>