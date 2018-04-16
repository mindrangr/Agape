<?php
session_start();
include("Config_files/_shared_config.php");

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
 
<body style="padding-top:70px;background-image: url('images/blog1Blur.jpg');background-repeat:no-repeat;background-color: #2f4774;">
 
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

    
    <!--<div class="jumbotron text-center" style="padding:0px;">
      <h1>Welcome to the Agape community</h1>
     
      <div style='width:100%' id='logD1'>
        

`       <!-- login form 
        <form id="loginForm" method="post">
          <div style="margin:auto;margin-bottom: 15px;padding-bottom:22px;width:320px;">
            <div  class="newQuestionbLabels newQuestionbLabels_search">Username</div>
            <div style="" class="loginElemDiv">
              <input id="username" name="username" class="inputboxnew">
            </div>
          </div>
          <div style="margin:auto;margin-bottom: 15px;padding-bottom:22px;width:320px;"><div style="" class="newQuestionbLabels newQuestionbLabels_search">Password</div>
            <div style="" class="loginElemDiv">
              <input id="password" name="password" class="inputboxnew">
            </div>
          </div>
          <div id="logButtDiv" style="text-align: left; padding-left: 9px;">
            <input type="button" value="login" onclick="login()" style="width:70px;height:25px;border-radius:4px 4px 4px 4px;margin-left:10px;">
          </div>
          <div style="clear:both;"></div>
          <div style="height:20px;">
            <span style="color:red;opacity:0px;font-family:arial" id="badpasslink"></span>
          </div>

        </form>


</div>
    </div>-->
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
                  <div style="float:left;"><button id="login" class="btn btn-outline-success my-2 my-sm-0" type="button"  >Submit</button></div>
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
            <h3 style="color:#2f4774;text-shadow: 1px 1px #000;" class="fontColorLabels">What's in the News?</h3>
            <p class='newstoryHomeText fontSizefront' >Agape media strives to provide its users with the most current and relevant news stories available. Dive in and join the discussion. America wants to know what YOU think. This is a PC free zone!!</p>
            <p><a href="#" class="nFooter" style="font-size:20px;">Go to News</a></p>
          </div>
           <div class="col-sm-3">
            <h3 style="color:#c96cbd;text-shadow: 1px 1px #000;" class="fontColorLabels">Romance</h3>
            <p class='newstoryHomeText fontSizefront' >Agape romance is a free web based community of individuals looking to meet someone just like you. Sign up and complete a few fields and you'll be ready to meet your perfect match today! </p>
            <p><a href="#" class="nFooter" style="font-size:20px;">Go to Romance</a></p>
          </div>
           <div class="col-sm-3">
              <h3 style="color:#2f4774;text-shadow: 1px 1px #000;" class="fontColorLabels">Agape Politics</h3>
              <p class='newstoryHomeText fontSizefront' >Trumps America is a community of Americans who are closely watching the politics of Washington DC and the president of the united States. Come on  in. Lets talk politics. No holds barred!!</p>
              <p><a href="#" class="nFooter" style="font-size:20px;">Go to Politics</a></p>
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

  <div class="container-fluid secondtierContainer" >
    <div class="row" id="sponsorDiv" >
      <div class="col-sm-3 secondtier">
        <div style='color:#eee;font-size:22px;'>What do we stand for?</div>
      </div>
      <div class="col-sm-2"></div>
      <div class="col-sm-7" style='font-size:20px;'><h2>One nation under God..</h2>
        <div style="font-size:25px;text-decoration: underline;">Freedom of speech</div>
        <div style='font-style: italic;font-size:22px;'>Definition - phrase</div>
        <div >The right to express any opinions without censorship or restraint.</div>
        <br/>
        <div>Welcome to the Agape community where we've tried to create a comfortable environment where everyone can freely express their thoughts on all matters free from the fear of political correctness. You've often heard it said, "never discuss, politics, sports or religion". Well here, we discuss politics, sports and religion...badly! Have fun!! </div>
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


    <div class="container-fluid secondtierContainer1" >
    <div class="row" id="sponsorDiv" >
      <div class="col-sm-2 secondtier">
        <div style='color:#2f4774;font-size:22px;'>Trumps America</div>
      </div>
      
      <div class="col-sm-7" style='font-size:20px;'><h2>America the beautiful!</h2>
        <div style="font-size:25px;text-decoration: underline;">MAGA</div>
        <div style='font-style: italic;font-size:22px;'>Definition - acronym</div>
        <div>Make America great again!!</div>
        <br/>
        <div>Making America great starts from the head down and President Trump is the head. The way he represents our nation and his ideas about politics, race and finance should be important to everyone. We built this portal to create a space for you to follow, comment, critique and compliment the sitting president as well as to learn how other Americans feel about OUR president. <a href="#">C'mon in!</a></div>
      </div>
      <div class="col-sm-3"></div>
    </div>
  </div>





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

console.log(999999)
 console.log(global)
 console.log(999999)
 
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