<div>

              <div id="loggedInBox" style="width:100%;background-color:#000;margin-top:20px;font-size:20px;color:#eee;padding:10px;margin-bottom:25px;display: none;border-radius:5px;"><div>Welcome: <span id="loginname">Marcus</span></div>
                <div id="logOutButton" style="color:red;text-decoration: underline;cursor:pointer;font-size:13px;float:left;width:60px;">Log out</div>
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
          <script>
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
                  
                  ajaxCallPost(mod3,modFunk)
                      
              })

          </script>