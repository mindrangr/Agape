<?php
session_start();
include("Config_files/_shared_config.php");
echo $actual_base;
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

 
<body style="padding-top:70px;background-image: url('images/blog1Blur.jpg');background-repeat:no-repeat;background-color: #2f4774;">
 
  <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" style='background-color: #2f4774 !important;'>
        <a class="navbar-brand" href="home">Welcome to the Agape Community</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Community</a>
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
    <div id="f"></div>
    <div class="container newsContainer" >
      <div>
        <div class="row">
          <div class="col-sm-3">
            <h3 style="color:#2f4774;text-shadow: 1px 1px #000;">Whats in the News?</h3>
            <p class='newstoryHomeText fontSizefront' >Agape media strives to provide its users with the most current and relevant news stories available. Dive in and join the discussion. America wants to know what YOU think. This is a PC free zone!!</p>
            <p><a href="#" class="nFooter" style="font-size:20px;">Go to News</a></p>
          </div>
           <div class="col-sm-3">
            <h3 style="color:#c96cbd;text-shadow: 1px 1px #000;">Romance</h3>
            <p class='newstoryHomeText fontSizefront' >Agape romance is a free web based community of individuals looking to meet someone just like you. Sign up and complete a few fields and you'll be ready to meet your perfect match today! </p>
            <p><a href="#" class="nFooter" style="font-size:20px;">Go to Romance</a></p>
          </div>
           <div class="col-sm-3">
              <h3 style="color:#2f4774;text-shadow: 1px 1px #000;">Trumps America</h3>
              <p class='newstoryHomeText fontSizefront' >Trumps America is a community of Americans who are closely watching the politics of Washington DC and the president of the united States. Come on  in. Lets talk politics. No holds barred!!</p>
              <p><a href="#" class="nFooter" style="font-size:20px;">Go to Politics</a></p>
            </div>
            <div class="col-sm-3">
              <div style="width:200px;padding:6px;">
              <label style='color:#c96cbd;text-shadow: 1px 1px #000;font-size: 1.75rem;'>Login</label>
              <input class="form-control mr-sm-2" type="text" style='margin-bottom:10px;' placeholder="username" aria-label="username">
              <input class="form-control mr-sm-2" type="text" style='margin-bottom:10px;' placeholder="password" aria-label="password">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Submit</button>
          </div>
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
        <div style='font-style: italic;font-size:22px;'>noun</div>
        <div>The right to express any opinions without censorship or restraint.</div>
        <br/>
        <div>Welcome to the Agape community where we've tried to create a comfortable environment where everyone can freely express their thoughts on all matters free from the fear of political correctness. You've often heard it said, "never discuss, politics, sports or religion". Well here we discuss politics, sports and religion badly! Have fun!! </div>
      </div>
    </div>
  </div>





  <footer class="footer FooterDiv" data-background-color="black" >
    <div class="container" >
      <div class="col-sm-12" style="width:430px;margin: auto;">
        <div style="width:100%;margin: auto;">
          <div style='float:left;margin-right:10px;'><a href="AboutUs" class="nFooter">About Us</a></div>
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


$("#f").html("marcyus")

  global=globalTools.create();

  console.log(33333)
  console.log(global)
  console.log(33333)

  var threadTool = new ThreadWheel();
  getSponsors();
</script>