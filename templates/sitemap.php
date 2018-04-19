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

<script src="scripts/jScripts.js"></script>
<script type="text/javascript" src="<?php echo $actual_base ?>/scripts/jTools.js"></script>
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
 
<body style="padding-top:70px;background-color: #2f4774;">
 
  <?php include '../header.php';?>

    

    <div id="nameDiv" style="width:100%;background-color:#000;margin-top:20px;height:45px;font-size:20px;color:#eee;padding:2%;margin-bottom:25px;display: none;">
      Welcome: <span id="loginname">Marcus</span>
    </div>
     
    <div class="container newsContainer" >
      <div class="overF">
        <div class="row">
          <div class="col-sm-3 tPaddMobileLogin">
              <div style="width:200px;padding:6px;">
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
          <script>
            var t = window.location.href+"";

            

            if(t.search(/login/)!=-1){
              //var f=
              var t1=t.split("?");
              var t2=t1[1]+"";
              t2=t2.split("=")
              
              var msg="bad login"
              switch(t2[1]){
                case 'bad':
                  msg="bad login"
                break;

              }
              fademessg($('#logMess')[0],msg);
            }else{

            }

            

          </script>
          <div class="col-sm-3">

            <div class="topTab" style='margin-top:15px;'>Site Map</div>
  <div style="width:320px;margin:auto;">
      <div style='float:left;'>
        <ul style="list-style-type:circle;color:red;">
          <li><div class="siteLinkClass"><a href="community">Home</a></div></li>
          <li><div class="siteLinkClass"><a href="contactus">Contact Us</a></div></li>
          <li><div class="siteLinkClass"><a href="romance">Agape Romance</a></div></li>
          <li><div class="siteLinkClass"><a href="President_Trump">President Trump</a></div></li>
          <li><div class="siteLinkClass"><a href="media">Agape Media</a></div></li>
        </ul>
      </div>
    <div style='float:left;'>
      <ol style="list-style-type:circle;color:red;">
        <li><div class="siteLinkClass"><a href="aboutus" >About Us</a></div></li>
        <li><div class="siteLinkClass"><a href="politics">Agape Politics</a></div></li>
        <li><div class="siteLinkClass"><a href="#">Poll Daddy</a></div></li>
        <li><div class="siteLinkClass"><a href="advertise">Advertise</a></div></li>
        <li><div class="siteLinkClass"><a href="#">Agape Friends</a></div></li>

      </ol>
      </div>
    
    <div style="clear:both"></div>  
    
    
    
    
    
  </div>
</div>
            
          </div>
           <div class="col-sm-3">
           
          </div>
           <div class="col-sm-3">
             
            </div>
            
        
      </div>
    </div>
  </div>

   

  <div class="container-fluid sponsorBackground" >
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
  
  var globalTools = new Objtools();
  global=globalTools.create();
  var kView=Verifyuser()
  if(kView==true){
    turnOnNav();
  }else{
    
   
    turnOffNav();
    $("#login").on("click",function(){
      login();
    })
  }

 
  var threadTool = new ThreadWheel();
  getSponsors();
  getOnlineUsers(global.userListCnt);


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

</script>