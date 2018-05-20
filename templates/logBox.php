<div>

        <div id="loggedInBox" style="width:100%;background-color:#000;margin-top:20px;font-size:20px;color:#eee;padding:10px;margin-bottom:25px;display: none;border-radius:5px;"><div>Welcome: <span id="loginname"></span></div>
          <div id="logOutButton" style="color:red;text-decoration: underline;cursor:pointer;font-size:13px;float:left;width:60px;">Log out</div>
          <div id="gotoMessges" style="color:lime;cursor:pointer;font-size:13px;float:left;">Messages <span id="messNum" style='color:lime;'>0</span></div>
          <div style='clear:both'></div>
        </div>

        <div style="width:200px;padding:6px;" id="loginNavBox">
          <label style='color:#c96cbd;text-shadow: 1px 1px #000;font-size: 1.75rem;'>Login</label>
          <form id="loginForm" method="POST">
            <input id="username" name="username" class="form-control mr-sm-2" type="text" style='margin-bottom:10px;' placeholder="username" aria-label="username">
            <input id="password" class="form-control mr-sm-2" type="text" style='margin-bottom:10px;' name="password" placeholder="password" aria-label="password">
            <div style="float:left;"><button id="login" class="btn btn-outline-success my-2 my-sm-0" type="submit"  >Login</button></div>
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

  //This code determines which username to us based on if this is logback from login or whether user already logged in. 
  var t=window.location.href+"";
  var t1=t.split("?")
  var uname="";
  if(t1[1]){
    var t2=t1[1].split("=");
    uname=t2[1];
  }else{
    uname=global.userObj.agape_profile_memberID;
  }
  var g=window.location.pathname+"";
  var g1=g.split("/")

  var gg=localStorage.getItem("key")

  if(localStorage.getItem("key")){
    var id=parseInt(localStorage.getItem("key"))
    getPrf(id)
    localStorage.removeItem("key");
  }else{
    global=globalTools.create();
    var stateObj = new stateElem('statesFull',"agape_profile_state","agape_profile_city","true","true",global.userObj.agape_profile_state,global.userObj.agape_profile_city);
   
    DelButtMess();
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
            ActivateRAevt()
            
        }


        if(global.userObj.agape_profile_romanceAccount=="Not set"){
          $("#romancelever").hide();
          $("#noRomanceAccount").show();
          $("#profileli").hide();
          $("#searchli").hide();
          
        }

      
      break;

    }
  }

var kView=Verifyuser();

if(kView=='true'){
  turnOnNav();
}else{
  turnOffNav();
  $("#login").on("click",function(){
    login();
  })
  if(g1[2]!="home"){
   // location.href="home";
  }
}

    //if(uname!==undefined && uname!="bad"){
      //getPrf(uname);

   // }else{
      



   // }










  function getPrf(uname1){

    var Obj1={}
    Obj1.job="selectAll";
    Obj1.dbase="agape_profile"
    Obj1.kob="where agape_profile_memberID="+uname1
    var rFunk = function(data){

      var t=data;
      turnOnNav();
      var user=globalTools.verify(data);

      if(user.returnObj!="set empty"){
        global.userObj=user.returnObj[0];
        global.navFunc="LoggedIn";
        global.navSet={}
        global.navSet.romance="no"
        globalTools.save();
        loadPageFormData(global.userObj);
        $("#loginname").html(global.userObj.agape_profile_username)
        var stateObj = new stateElem('statesFull',"agape_profile_state","agape_profile_city","true","true",global.userObj.agape_profile_state,global.userObj.agape_profile_city);

        DelButtMess();
        switch(g1[2]){
          case 'account':
            


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



          break;

        }
 
      }else{
       
         turnOffNav();
        $("#login").on("click",function(){
          login();
        })
        if(g1[2]!="home"){
         // location.href="home";
         alert("yes")
        }

      }


     
  }
  ajaxCallPost(Obj1,rFunk);

}





function DelButtMess(){


         $("#logOutButton").unbind("click").on("click",function(){
          var mod3={}
          mod3.job="atomicDelete";
          mod3.param="sessiontable_user_ID"
          mod3.val=global.userObj.agape_profile_memberID;
          mod3.dbase="sessiontable";
          global.userObj={}
          global.navFunc="LoggedOut";
          globalTools.save();
          var modFunk=function(datum){
            globalTools.close();
            location.href="logout";
          }
          
          ajaxCallPost(mod3,modFunk);
        })



        model={}
        model.job="selectAll";
        model.dbase="agape_messages";
        model.Getdetail="GetCount";
        model.ob2=" where agape_message_receiver_ID="+global.userObj.agape_profile_memberID+" or agape_message_sender_ID="+global.userObj.agape_profile_memberID+" and agape_message_opened='Sealed'";
        model.kob=" where agape_message_receiver_ID="+global.userObj.agape_profile_memberID+" or agape_message_sender_ID="+global.userObj.agape_profile_memberID +" order by agape_message_update desc limit 0,25";

        var modFunk1=function(data){
          var mess=globalTools.verify(data);
          $("#messNum").html("("+mess.countMax+")");
          //$("#fullNum").html(mess.countMax);
        }
        ajaxCallPost(model,modFunk1);

         $("#gotoMessges").unbind("click").on("click",function(){
            location.href="messages"
         })

}



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