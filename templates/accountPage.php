<?php

  if(!isset($_COOKIE["agapeGUID"])) {
      //header("location: home?login=bad");
  } else {
      if($_COOKIE["agapeGUID"]=="none"){
        //setcookie("agapeGUID", FALSE, -1, '/');
        //header("location: home?login=bad");
      }
  }

  session_start();
  include("../Config_files/_shared_config.php");

?>
<!Doctype html />
<!--<script src="scripts/jquery-3.2.1.slim.min.js"></script>-->
<script src="<?php echo $actual_base ?>/scripts/jquery-3.1.1.min.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<link rel="stylesheet" href="styles/NetscapeStyles_responsive1.css" />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo $actual_base ?>/scripts/jTools.js"></script>
<script src="<?php echo $actual_base ?>/scripts/TweenMax.js"></script>

<script src="scripts/jScripts.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $actual_base ?>/scripts/formFields1.js"></script>


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
        <div class="row"  >
          <div class="col-sm-4 tPaddMobileLogin">

            <?php include 'logBox.php';?>







            <!--<div style="margin-top:30px;width:220px;">
              <div style="color:#c96cbd;width:140px;text-align: center;margin:auto;">Activate Romance account</div>
              <div style="width:220px"><div style="width:20px;margin:auto;"><input class="form-check-input" style="margin-left:0px;" type="checkbox"/></div>
            </div>
           </div>-->

          


          </div>

          <div class="col-sm-5" id="accountFields">
            <div style="margin-top:10px;">
              <div style='color:#c96cbd;float:left;width:120px;'>Firstname</div>
              <input id="agape_profile_firstname" class="form-control" style="width:300px;" type="text" placeholder="First name" aria-label="Search">
              <div style="clear:both;"></div>
            </div>

            <div style="margin-top:10px;">
              <div style='color:#c96cbd;float:left;width:120px'>Lastname</div>
              <input id="agape_profile_lastname" class="form-control" style="width:300px;" type="text" placeholder="Last Name" aria-label="Search">
              <div style="clear:both;"></div>
            </div>

            <div style="margin-top:10px;">
              <div style='color:#c96cbd;float:left;width:120px'>Email</div>
              <input id="agape_profile_email" class="form-control" style="width:300px;" type="text" placeholder="Email" aria-label="Search">
              <div style="clear:both;"></div>
            </div>

            <div style="margin-top:10px;">
              <div style='color:#c96cbd;float:left;width:120px'>State</div>
              <div style="width:300px;background-color:#eee;height:40px;float:left;border-radius: 5px;padding:5px;">
               
                <select  id="agape_profile_state" style="width:280px;border:none;background-color:#eee;" >
                </select>
              </div>
              <div style="clear:both;"></div>
            </div>


             <div style="margin-top:10px;">
              <div style='color:#c96cbd;float:left;width:120px'>City</div>
              <div style="width:300px;background-color:#eee;height:40px;float:left;border-radius: 5px;padding:5px;">
               
                <select  id="agape_profile_city" style="width:280px;border:none;background-color:#eee;" >
                  <option>Select</option>
               
                </select>
              </div>
              <div style="clear:both;"></div>
            </div>




            <div style="margin-top:10px;">
              <div style='color:#c96cbd;float:left;width:120px'>Gender</div>
              <div style="width:300px;background-color:#eee;height:40px;float:left;border-radius: 5px;padding:5px;">
               
                <select  id="agape_profile_gender" style="width:280px;border:none;background-color:#eee;" >
                  <option>Male</option>
                  <option>Female</option>
               
                </select>
              </div>
              <div style="clear:both;"></div>
            </div>

       <div style="margin-top:10px;">
              <div style='color:#c96cbd;float:left;width:120px'>Age</div>
              <div style="width:300px;background-color:#eee;height:40px;float:left;border-radius: 5px;padding:5px;">
               
                <select  id="agape_profile_age" style="width:280px;border:none;background-color:#eee;" >
                </select>
              </div>
              <div style="clear:both;"></div>
            </div>


             <div ><button id="updateButton" class="btn btn-outline-success my-2 my-sm-0" type="button"  >Update</button></div>

          </div>
          <div class="col-sm-3">




            <div style="margin-top:10px;width:220px;">

              <div id="noRomanceAccount" style="text-decoration: underline;cursor:pointer;color:#c96cbd;display:none;"><a href="profile" class="nFooter">Create romance account</a></div>



              <div id="romancelever" style="display:none;">
                <div style="color:#c96cbd;width:140px;text-align: center;margin:auto;">Activate Romance account</div>
                <div style="width:220px"><div style="width:20px;margin:auto;"><input id="ActivateRA" class="form-check-input" style="margin-left:0px;" type="checkbox" checked/></div>
                </div>
              </div> 
            </div>




          </div>
        </div>



       
    </div>
  </div>
  <div style="height:100px;"></div>

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
  $("#Accountli").addClass("active");
  $("#Accountli").children().eq(0).removeClass("disabled");
  


//Fills select boxes with informtion from forms1.js  
  lForms();
  getSponsors();
 

  $("#updateButton").unbind("click").bind("click",function(){
    var sendVar="true";
    var upMod={}

    upMod.param="agape_profile_memberID";
    upMod.vals=global.userObj.agape_profile_memberID
    upMod.obj={}
    $("#accountFields :input").each(function(){
      if($(this).val()=="" && $(this).attr("id")!="updateButton"){
          sendVar="false";
      }

      if($(this).val()!="" && $(this).attr("id")!="updateButton"){
          upMod.obj[$(this).attr("id")]=$(this).val()
      }
    })

    if(sendVar=="true"){
       globalTools.userProfileEdit("agape_profile",upMod.obj,"agape_profile_memberID",global.userObj.agape_profile_memberID);
    }else{

    }

  })




switch(g1[2]){
    case 'account':

      if(global.userObj.agape_profile_romanceAccount=="Active"){
        $("#romancelever").show()
        $("#noRomanceAccount").hide()
        $("#profileli").show();
        $("#searchli").show();
        ActivateRAevt()
      }

      if(global.userObj.agape_profile_romanceAccount=="InActive"){
          $("#romancelever").show();
          $("#noRomanceAccount").hide();
          $("#profileli").hide();
          $("#searchli").hide();
          ActivateRAevt();
      }


      if(global.userObj.agape_profile_romanceAccount=="Not set"){
        $("#romancelever").hide();
        $("#noRomanceAccount").show();
        $("#profileli").hide();
        $("#searchli").hide();
      }
    
    break;

  }

loadPageFormData(global.userObj);


  
</script>