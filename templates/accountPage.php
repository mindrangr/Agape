<?php

  if(!isset($_COOKIE["agapeGUID"])) {
      header("location: home?login=bad");
  } else {
      if($_COOKIE["agapeGUID"]=="none"){
        header("location: home?login=bad");
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
 

 
  <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" style='background-color: #2f4774 !important;'>
        <a class="navbar-brand caseStyleHeader" href="home">Welcome to the Agape Community</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse hamburgerStyle" id="navbarCollapse" >
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
            </li>
             <li class="nav-item LogI" style='display:none;' >
              <a class="nav-link disabled" href="#">Account Settings</a>
            </li>
            <li class="nav-item LogI" style='display:none;' >
              <a class="nav-link disabled" href="#">Messages</a>
            </li>

            <li class="nav-item LogI" style='display:none;'>
              <a class="nav-link disabled" href="#">Friends</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Community</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Contact Us</a>
            </li>

            <li class="nav-item">
              <a class="nav-link disabled" href="#">About Us</a>
            </li>
          </ul>
          <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
        
      </nav>
      
       <div id="mainAd" class="mainAd col-sm-12 fixed-top" style="top:70px;background-image:url('images/banner1.png');border-bottom: solid 1px #000;" >
          <div class='adverImageDiv' ><img src="advertiseImages/flashad1.gif" class='adverImage' /></div>
      </div>
    </header>



    <body style="padding-top:190px;background-color: #2f4774;">
      
      <div class="container" >
        <div class="row"  >
          <div class="col-sm-3">
            <div style="margin-top:10px;width:220px;">
                <div style="color:#c96cbd;width:140px;text-align: center;margin:auto;">Activate Romance account</div>
                <div style="width:220px"><div style="width:20px;margin:auto;"><input class="form-check-input" type="checkbox"/></div></div>
                <div style="clear:both;"></div>
            </div>

            <div style="width:220px;margin-top:15px;">
                
                <div style="color:#c96cbd;width:140px;text-align: center;margin:auto;">Activate Commercial account</div>
                <div style="width:20px;margin:auto;"><input class="form-check-input" type="checkbox"/></div>
            </div>
          </div>

          <div class="col-sm-6">
            <div style="margin-top:10px;">
              <div style='color:#c96cbd;float:left;width:120px;'>Firstname</div>
              <input class="form-control" style="width:300px;" type="text" placeholder="First name" aria-label="Search">
              <div style="clear:both;"></div>
            </div>

            <div style="margin-top:10px;">
              <div style='color:#c96cbd;float:left;width:120px'>Lastname</div>
              <input class="form-control" style="width:300px;" type="text" placeholder="Last Name" aria-label="Search">
              <div style="clear:both;"></div>
            </div>

            <div style="margin-top:10px;">
              <div style='color:#c96cbd;float:left;width:120px'>Email</div>
              <input class="form-control" style="width:300px;" type="text" placeholder="Email" aria-label="Search">
              <div style="clear:both;"></div>
            </div>

            <div style="margin-top:10px;">
              <div style='color:#c96cbd;float:left;width:120px'>State</div>
              <input class="form-control" style="width:300px;" type="text" placeholder="Last Name" aria-label="State">
              <div style="clear:both;"></div>
            </div>


            <div style="margin-top:10px;">
              <div style='color:#c96cbd;float:left;width:120px'>City</div>
              <input class="form-control" style="width:300px;" type="text" placeholder="City" aria-label="City">
              <div style="clear:both;"></div>
            </div>


          </div>

          
        </div>

       <div class="col-sm-3">
      </div>
    </div>
  </div>
</body>




    <footer class="footer FooterDiv" data-background-color="black" >
    <div style='width:400px;margin:auto;'>Copyright &copy; 2018 by the Agape Community</div>
    <div class="container">
      </br> 
      <div class="col-sm-12" style="font-size:13px;text-align: center;color:#5c6e90;">
        All rights reserved. No part of this publication may be reproduced, distributed, or transmitted in any form or by any means, including photocopying, recording, or other electronic or mechanical methods, without the prior written permission of the publisher, except in the case of brief quotations embodied in critical reviews and certain other noncommercial uses permitted by copyright law. For permission requests, write to the publisher, addressed "Attention: Permissions Coordinator," at the address below.
      </div>
    </div>
    <div class="container" >
      <div class="col-sm-12 footerW" >
        <div style="width:400px;margin: auto;">
          <div style='float:left;margin-right:10px;color:'><a href="AboutUs" class="nFooter">About Us</a></div>
          <div style='float:left;margin-right:10px;'><a href="#" class="nFooter">Contact Us</a></div>
          <div style='float:left;margin-right:10px;'><a href="#" class="nFooter">Site Map</a></div>
          <div style='float:left;margin-right:10px;'><a href="#" class="nFooter">Romance</a></div>
           <div style='float:left;margin-right:10px;'><a href="#" class="nFooter">Poll Daddy</a></div>
          <div style="clear:both;"></div>
      </div>
    </div>
  </div>
</footer>

<script>
  var globalTools = new Objtools();
  globalTools.create();
  var t=window.location.href+"";
  var t1=t.split("?")
  var t2=t1[1].split("=");
  var t3=t2[1];
  var Obj1={}
  Obj1.job="selectAll";
  Obj1.dbase="agape_profile"
  Obj1.kob="where agape_profile_memberID="+t3
  var threadTool = new ThreadWheel();
  var rFunk = function(data){
    var t=data
    var user=globalTools.verify(data);
    global.userObj=user.returnObj[0];
    global.navFunc="LoggedIn";
    globalTools.save();

  }


  ajaxCallPost(Obj1,rFunk)
</script>