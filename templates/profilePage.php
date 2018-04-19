<?php


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
      <div class="container" >
        <div class="row"  >
          <div class="col-sm-4 tPaddMobileLogin">



            <div  >

              <div id="loggedInBox" style="width:100%;background-color:#000;margin-top:20px;font-size:20px;color:#eee;padding:10px;margin-bottom:25px;display: none;border-radius:5px;"><div>Welcome: <span id="loginname">Marcus</span></div>
                <div style="color:red;text-decoration: underline;cursor:pointer;font-size:13px;float:left;width:60px;">Log out</div>
                <div style="color:lime;text-decoration: underline;cursor:pointer;font-size:13px;float:left;">Messages</div>
                <div style='clear:both'></div>
              </div>

              <div style="width:200px;padding:6px;" id="loginNavBox">
                <label style='color:#c96cbd;text-shadow: 1px 1px #000;font-size: 1.75rem;'>Login</label>
                <form id="loginForm" method="POST">
                  <input id="username" name="username" class="form-control mr-sm-2" type="text" style='margin-bottom:10px;' placeholder="username" aria-label="username">
                  <input id="password" class="form-control mr-sm-2" type="text" style='margin-bottom:10px;' name="password" placeholder="password" aria-label="password">
                  <div style="float:left;"><button id="login" class="btn btn-outline-success my-2 my-sm-0" type="button"  >Login</button></div>
                  <div id='logMess' style="float:left;color:red;margin-left:5px;font-weight:bold;"></div>
                  <div style='clear:both'></div>
                </form>
              </div>
              <div id='usersOnline' class='usersOnline' >
                <div style="font-family: arial;font-size: 13px;padding:7px;color:#000;" ><div style='float:left;width:140px;'><span id='numUsersOnline' style='text-decoration: underline;cursor:pointer;'></span> users online</div><div style='float:left;'><img id="upArrowUsers" src='images/double-up-arrow.png' style="height:15px;cursor: pointer;display:none;"/></div><div id="userCloseButt" style='float:right;text-decoration: underline;cursor: pointer;'>close</div><div style='clear:both;'></div></div>
                <div id='listUsersOnline' class="listUsersOnline" >
                  <div id="listUsersOnlinePage" style='position: absolute;width:100%;top:0px;background-color:#fff;' ></div>
                  
                </div>
            </div>
          </div>


          


          </div>

          <div class="col-sm-5">


            <div style="margin-top:10px;">
              <div style='color:#c96cbd;float:left;width:120px;'>Firstname</div>
              <input id="agape_profile_firstname" class="form-control" style="width:300px;background-color: #eee;" type="text" placeholder="First name" aria-label="Search">
              <div style="clear:both;"></div>
            </div>

            <div style="margin-top:10px;">
              <div style='color:#c96cbd;float:left;width:120px'>Lastname</div>
              <input id="agape_profile_lastname" class="form-control" style="width:300px;background-color: #eee;" type="text" placeholder="Last Name" aria-label="Search">
              <div style="clear:both;"></div>
            </div>

            <div style="margin-top:10px;">
              <div style='color:#c96cbd;float:left;width:120px'>Email</div>
              <input id="agape_profile_email" class="form-control" style="width:300px;background-color: #eee;" type="text" placeholder="Email" aria-label="Search">
              <div style="clear:both;"></div>
            </div>

            <div style="margin-top:10px;">
              <div style='color:#c96cbd;float:left;width:120px'>State</div>
              <div style="width:300px;background-color:#eee;height:40px;float:left;border-radius: 5px;padding:5px;">
               
                <select  id="agape_profile_state" style="width:280px;border:none;background-color: #eee;" >
                </select>
              </div>
              <div style="clear:both;"></div>
            </div>


             <div style="margin-top:10px;">
              <div style='color:#c96cbd;float:left;width:120px'>City</div>
              <div style="width:300px;background-color:#eee;height:40px;float:left;border-radius: 5px;padding:5px;">
               
                <select  id="agape_profile_city" style="width:280px;border:none;background-color: #eee;" >
                  <option>Select</option>
                </select>
              </div>
              <div style="clear:both;"></div>
            </div>




            <div style="margin-top:10px;">
              <div style='color:#c96cbd;float:left;width:120px'>Gender</div>
              <div style="width:300px;background-color:#eee;height:40px;float:left;border-radius: 5px;padding:5px;">
               
                <select  id="agape_profile_gender" style="width:280px;border:none;background-color: #eee;" >
                  <option>Male</option>
                  <option>Female</option>
               
                </select>
              </div>
              <div style="float:left;color:red;margin-left:4px;">*</div>
              <div style="clear:both;"></div>
            </div>


             <div style="margin-top:10px;">
              <div style='color:#c96cbd;float:left;width:120px'>Race</div>
              <div style="width:300px;background-color:#eee;height:40px;float:left;border-radius: 5px;padding:5px;">
               
                <select  id="agape_profile_race" style="width:280px;border:none;background-color: #eee;" >
                </select>
              </div>
              <div style="float:left;color:red;margin-left:4px;">*</div>
              <div style="clear:both;"></div>
            </div>




            <div style="margin-top:10px;">
              <div style='color:#c96cbd;float:left;width:120px'>Age</div>
              <div style="width:300px;background-color:#eee;height:40px;float:left;border-radius: 5px;padding:5px;">
               
                <select  id="agape_profile_age" style="width:280px;border:none;background-color: #eee;" >
                </select>
              </div>
              <div style="float:left;color:red;margin-left:4px;">*</div>
              <div style="clear:both;"></div>
            </div>

            <div style="margin-top:10px;">
              <div style='color:#c96cbd;float:left;width:120px'>Religion</div>
              <div style="width:300px;background-color:#eee;height:40px;float:left;border-radius: 5px;padding:5px;">
               
                <select  id="agape_profile_religion" style="width:280px;border:none;background-color: #eee;" >
                  
                </select>
              </div>
              <div style="clear:both;"></div>
            </div>

            <div style="margin-top:10px;">
              <div style='color:#c96cbd;float:left;width:120px'>Body type</div>
              <div style="width:300px;background-color:#eee;height:40px;float:left;border-radius: 5px;padding:5px;">
               
                <select  id="agape_profile_bodyType" style="width:280px;border:none;" >
                  
                </select>
              </div>
              <div style="clear:both;"></div>
            </div>



            <div style="margin-top:10px;">
              <div style='color:#c96cbd;float:left;width:120px'>Height</div>
              <div style="width:300px;background-color:#eee;height:40px;float:left;border-radius: 5px;padding:5px;">
               
                <select  id="agape_profile_height" style="width:280px;border:none;" >
                  
                </select>
              </div>
              <div style="clear:both;"></div>
            </div>


  

            <div style="margin-top:10px;">
              <div style='color:#c96cbd;float:left;width:120px'>Political affiliation</div>
              <div style="width:300px;background-color:#eee;height:40px;float:left;border-radius: 5px;padding:5px;">
               
                <select  id="agape_profile_political" style="width:280px;border:none;" >
                  
                </select>
              </div>
              <div style="clear:both;"></div>
            </div>
            <div style="text-decoration: underline;color:#eee;width:210px;margin: auto;font-size:20px;padding:8px;">Partner profile</div>
            <div style="margin-top:10px;">
              <div style='color:#c96cbd;float:left;width:120px'>Gender seeking</div>
              <div style="width:300px;background-color:#eee;height:40px;float:left;border-radius: 5px;padding:5px;">
               
                <select  id="agape_partner_gender" style="width:280px;border:none;" >
                  <option>Male</option>
                  <option>Female</option>
               
                </select>
              </div>

              <div style="margin-top:10px;">
              <div style='color:#c96cbd;float:left;width:120px'>Partner race</div>
              <div style="width:300px;background-color:#eee;height:40px;float:left;border-radius: 5px;padding:5px;">
               
                <select  id="agape_partner_race" style="width:280px;border:none;background-color: #eee;" >
                </select>
              </div>
              <div style="float:left;color:red;margin-left:4px;">*</div>
              <div style="clear:both;"></div>
            </div>
              <div style="float:left;color:red;margin-left:4px;">*</div>
              <div style="clear:both;"></div>
            </div>






             <div ><button id="updateButton" class="btn btn-outline-success my-2 my-sm-0" type="button"  >Update</button></div>






          </div>
          <div class="col-sm-3">
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

  
  turnOnNav();

  uname=global.userObj.agape_profile_memberID;
   lForms();
  var Obj1={}
  Obj1.job="selectAll";
  Obj1.dbase="agape_profile"
  Obj1.kob="where agape_profile_memberID="+uname
  var threadTool = new ThreadWheel();
  var rFunk = function(data){
    var t=data;
    turnOnNav();
    var user=globalTools.verify(data);
    global.userObj=user.returnObj[0];
    global.navFunc="LoggedIn";
    globalTools.save();
    loadPageFormData(global.userObj)

  }
  ajaxCallPost(Obj1,rFunk)


  for(var g=18;g<91;g++){
    $("#agape_profile_age").append("<option value="+g+">"+g+"</option>")
  }


  var stateObj = new stateElem('statesFull',"agape_profile_state","agape_profile_city","true","true",global.userObj.agape_profile_state,global.userObj.agape_profile_city);

  getSponsors();
  var w1 = new Worker("web_workers/mainWebWorker.js");
  w1.onmessage=function(data){
    switch(data.data.type){
      case 'rotateUsers':
        slideUsers();
      break;


      default:
      break;
    }
  }
  getOnlineUsers(global.userListCnt);
  var kView=Verifyuser();


    
  
</script>