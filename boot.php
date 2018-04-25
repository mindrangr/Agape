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
 
<body style="padding-top:70px;background-image: url('images/blog1Blur.jpg');background-repeat:no-repeat;background-color: #2f4774;">
 
  <?php include 'header.php';?>

    
     
    <div class="container newsContainer" >
      <div class="overF">
        <div class="row">
          <div class="col-sm-3 tPaddMobileLogin" >
            <?php include 'templates/logBox.php';?>
             
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

   

  <div class="container-fluid sponsorBackground socialbanner" >
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


  <?php include 'footer.html';?>
 
</body>

<script>
  
  var globalTools = new Objtools();
  global=globalTools.create();
  var kView=Verifyuser();

  if(kView=='true'){
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