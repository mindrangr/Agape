<?php


  session_start();
  include("../Config_files/_shared_config.php");

?>
<!Doctype html />
<style>
  .profileLabel{
    color:#c96cbd;
    float:left;
    width:160px;
    font-size:19px;

  }



  .profileTBoxStyle{
    width:300px;
    background-color:#eee;
    height:40px;
    float:left;
    border-radius: 5px;
    padding:5px;

  }

</style>
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
            <?php include 'logBox.php';?>
          </div>

          <div id="cnterForm" class="col-sm-6">


            <!--<div style="margin-top:10px;">
              <div class='profileLabel'>Firstname</div>
              <input id="agape_profile_firstname" class="form-control" style="width:300px;background-color: #eee;" type="text" placeholder="First name" aria-label="Search">
              <div style="clear:both;"></div>
            </div>

            <div style="margin-top:10px;">
              <div class='profileLabel'>Lastname</div>
              <input id="agape_profile_lastname" class="form-control" style="width:300px;background-color: #eee;" type="text" placeholder="Last Name" aria-label="Search">
              <div style="clear:both;"></div>
            </div>

            <div style="margin-top:10px;">
              <div class='profileLabel'>Email</div>
              <input id="agape_profile_email" class="form-control" style="width:300px;background-color: #eee;" type="text" placeholder="Email" aria-label="Search">
              <div style="clear:both;"></div>
            </div>-->

             <div style="margin-top:10px;">
              <div class='profileLabel'>Your intentions</div>
              <div class="profileTBoxStyle">
               
                <select  id="agape_profile_intentions" style="width:280px;border:none;background-color: #eee;" >
                </select>
              </div>
              <div style="float:left;color:red;margin-left:4px;">*</div>
              <div style="clear:both;"></div>
            </div>



            <!--<div style="margin-top:10px;">
              <div class='profileLabel'>State</div>
              <div class="profileTBoxStyle">
               
                <select  id="agape_profile_state" style="width:280px;border:none;background-color: #eee;" >
                </select>
              </div>
              <div style="float:left;color:red;margin-left:4px;">*</div>
              <div style="clear:both;"></div>
            </div>


             <div style="margin-top:10px;">
              <div class='profileLabel'>City</div>
              <div class="profileTBoxStyle">
               
                <select  id="agape_profile_city" style="width:280px;border:none;background-color: #eee;" >
                  <option>Select</option>
                </select>
              </div>
              <div style="float:left;color:red;margin-left:4px;">*</div>
              <div style="clear:both;"></div>
            </div>-->




            <div style="margin-top:10px;">
              <div class='profileLabel'>Gender</div>
              <div class="profileTBoxStyle">
               
                <select  id="agape_profile_gender" style="width:280px;border:none;background-color: #eee;" >
                  <option>Male</option>
                  <option>Female</option>
               
                </select>
              </div>
              <div style="float:left;color:red;margin-left:4px;">*</div>
              <div style="clear:both;"></div>
            </div>


             <div style="margin-top:10px;">
              <div class='profileLabel'>Race</div>
              <div class="profileTBoxStyle">
               
                <select  id="agape_profile_race" style="width:280px;border:none;background-color: #eee;" >
                </select>
              </div>
              <div style="float:left;color:red;margin-left:4px;">*</div>
              <div style="clear:both;"></div>
            </div>




            <div style="margin-top:10px;">
              <div class='profileLabel'>Age</div>
              <div class="profileTBoxStyle">
               
                <select  id="agape_profile_age" style="width:280px;border:none;background-color: #eee;" >
                </select>
              </div>
              <div style="float:left;color:red;margin-left:4px;">*</div>
              <div style="clear:both;"></div>
            </div>

            <div style="margin-top:10px;">
              <div class='profileLabel'>Religion</div>
              <div class="profileTBoxStyle">
               
                <select  id="agape_profile_religion" style="width:280px;border:none;background-color: #eee;" >
                  
                </select>
              </div>
              <div style="clear:both;"></div>
            </div>

            <div style="margin-top:10px;">
              <div class='profileLabel'>Body type</div>
              <div class="profileTBoxStyle">
               
                <select  id="agape_profile_bodyType" style="width:280px;border:none;background-color: #eee;" >
                  
                </select>
              </div>
              <div style="clear:both;"></div>
            </div>

            <div style="margin-top:10px;">
              <div class='profileLabel'>Education</div>
              <div class="profileTBoxStyle">
             
                <select  id="agape_profile_education" style="width:280px;border:none;background-color: #eee;" >
                </select>
              </div>
              
              <div style="clear:both;"></div>
            </div>


            <div style="margin-top:10px;">
              <div class='profileLabel'>Income</div>
              <div class="profileTBoxStyle">
             
                <select  id="agape_profile_salary" style="width:280px;border:none;background-color: #eee;" >
                </select>
              </div>
              
              <div style="clear:both;"></div>
            </div>



            <div style="margin-top:10px;">
              <div class='profileLabel'>Height</div>
              <div class="profileTBoxStyle">
               
                <select  id="agape_profile_height" style="width:280px;border:none;background-color: #eee;" >
                  
                </select>
              </div>
              <div style="clear:both;"></div>
            </div>


  

            <div style="margin-top:10px;">
              <div class='profileLabel'>Political affiliation</div>
              <div class="profileTBoxStyle">
               
                <select  id="agape_profile_political" style="width:280px;border:none;background-color: #eee;" >
                  
                </select>
              </div>
              <div style="clear:both;"></div>
            </div>


            <div style="margin-top:10px;">
              <div class='profileLabel'>Children</div>
              <div class="profileTBoxStyle">
               
                <select  id="agape_profile_children" style="width:280px;border:none;background-color: #eee;" >
                  
                </select>
              </div>
              <div style="clear:both;"></div>
            </div>


            <div style="margin-top:10px;">
              <div class='profileLabel'>Brief Description of yourself</div>
              <div class="profileTBoxStyle" style="height:110px;">
               
                <textarea  id="agape_profile_description" style="width:280px;border:none;height:100px;background-color: #eee;" >
                  
                </textarea>
              </div>
              <div style="clear:both;"></div>
            </div>


            <div style="margin-top:10px;">
              <div class='profileLabel'>Brief Description of desired candidate</div>
              <div class="profileTBoxStyle" style="height:110px;">
               
                <textarea  id="agape_profile_partner_description" style="width:280px;border:none;height:100px;background-color: #eee;" >
                  
                </textarea>
              </div>
              <div style="clear:both;"></div>
            </div>



            <div style="margin-top:10px;">
              <div class='profileLabel'>Commitment traits you expect to display</div>
              <div class="profileTBoxStyle" style="height:230px;">
               
                <div  id="agape_profile_opts" style="border:none;background-color: #eee;" >
                  
                </div>
              </div>
              <div style="clear:both;"></div>
            </div>



            <div style="margin-top:10px;">
              <div class='profileLabel'>Hobbies</div>
              <div class="profileTBoxStyle" style="height:490px;">
               
                <div  id="agape_profile_recreation" style="border:none;background-color: #eee;" >
                  
                </div>
              </div>
              <div style="clear:both;"></div>
            </div>







            <div style="margin-top:10px;">
              <div class='profileLabel'>Do you drink alcohol?</div>
              <div class="profileTBoxStyle">
               
                <select  id="agape_profile_alcohol" style="width:280px;border:none;background-color: #eee;" >
                  
                </select>
              </div>
              <div style="clear:both;"></div>
            </div>


            <div style="margin-top:10px;">
              <div class='profileLabel'>Do you use drugs?</div>
              <div class="profileTBoxStyle">
               
                <select  id="agape_profile_drugs" style="width:280px;border:none;background-color: #eee;" >
                  
                </select>
              </div>
              <div style="clear:both;"></div>
            </div>


            


            <div style="text-decoration: underline;color:#eee;width:210px;margin: auto;font-size:20px;padding:8px;">Candidate profile</div>
            



            <div style="margin-top:10px;">
              <div class='profileLabel'>Gender seeking</div>
              <div class="profileTBoxStyle">
               
                <select  id="agape_partner_gender" style="width:280px;border:none;background-color: #eee;" >
                  <option>Male</option>
                  <option>Female</option>
               
                </select>
              </div>
              <div style="float:left;color:red;margin-left:4px;">*</div>
              <div style="clear:both;"></div>
            </div>



            <div style="margin-top:10px;">
              <div class='profileLabel'>Candidate race</div>
              <div class="profileTBoxStyle">
             
                <select  id="agape_partner_race" style="width:280px;border:none;background-color: #eee;" >
                </select>
              </div>
              
              <div style="clear:both;"></div>
            </div>



            <div style="margin-top:10px;">
              <div class='profileLabel'>Candidate optimal height</div>
              <div class="profileTBoxStyle">
             
                <select  id="agape_partner_height" style="width:280px;border:none;background-color: #eee;" >
                </select>
              </div>
              
              <div style="clear:both;"></div>
            </div>


            <div style="margin-top:10px;">
              <div class='profileLabel'>Candidate optimal body type</div>
              <div class="profileTBoxStyle">
             
                <select  id="agape_partner_bodyType" style="width:280px;border:none;background-color: #eee;" >
                </select>
              </div>
              
              <div style="clear:both;"></div>
            </div>




            <div style="margin-top:10px;">
              <div class='profileLabel'>Candidate politics</div>
              <div class="profileTBoxStyle">
             
                <select  id="agape_partner_political" style="width:280px;border:none;background-color: #eee;" >
                </select>
              </div>
             
              <div style="clear:both;"></div>
            </div>


            <div style="margin-top:10px;">
              <div class='profileLabel'>Candidate religion</div>
              <div class="profileTBoxStyle">
             
                <select  id="agape_partner_religion" style="width:280px;border:none;background-color: #eee;" >
                </select>
              </div>
              
              <div style="clear:both;"></div>
            </div>

            <div style="margin-top:10px;">
              <div class='profileLabel'>Candidate children</div>
              <div class="profileTBoxStyle">
               
                <select  id="agape_partner_children" style="width:280px;border:none;background-color: #eee;" >
                  
                </select>
              </div>
              <div style="clear:both;"></div>
            </div>

            <div style="margin-top:10px;">
              <div class='profileLabel'>Candidate education</div>
              <div class="profileTBoxStyle">
             
                <select  id="agape_partner_education" style="width:280px;border:none;background-color: #eee;" >
                </select>
              </div>
              
              <div style="clear:both;"></div>
            </div>

              
            <div style="margin-top:10px;">
              <div class='profileLabel'>Candidate alcohol use</div>
              <div class="profileTBoxStyle">
               
                <select  id="agape_partner_alcohol" style="width:280px;border:none;background-color: #eee;" >
                  
                </select>
              </div>
              <div style="clear:both;"></div>
            </div>


            <div style="margin-top:10px;">
              <div class='profileLabel'>Candidate drug use</div>
              <div class="profileTBoxStyle">
               
                <select  id="agape_partner_drugs" style="width:280px;border:none;background-color: #eee;" >
                  
                </select>
              </div>
              <div style="clear:both;"></div>
            </div>





             <div style="margin-top:10px;"><button id="updateButton" class="btn btn-outline-success my-2 my-sm-0" type="button"  >Update</button></div>






          </div>
          <div class="col-sm-2">
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

  
  

  $(".nav-item").each(function(){
  $(this).removeClass("active");
  $(this).children().eq(0).addClass("disabled")
  })
  $("#profileli").addClass("active");
  $("#profileli").children().eq(0).removeClass("disabled");

 
 


  $("#updateButton").unbind("click").on("click",function(){
    var updateObj={}
    $("#cnterForm :input").each(function(){
      if($(this).val()!="Not Answered"  && $(this).attr("id")!="updateButton" && $(this).attr("id")!==undefined && $(this).hasClass("doNotSelect")==false){

        updateObj[$(this).attr("id")]=$(this).val();
      }
    })
    var h=[]
    var f=$(".profileOptions").each(function(){
      if($(this).is(" :checked")){
        if($(this).val()!="Not Answered"){
           h.push($(this).val())
        }
       
      }
      updateObj.agape_profile_opts=JSON.stringify(h);
      
    })



    var h=[]
    var f=$(".profileRecreation").each(function(){
      if($(this).is(" :checked")){
        if($(this).val()!="Not Answered"){
           h.push($(this).val())
        }
       
      }
      updateObj.agape_profile_recreation=JSON.stringify(h);
      
    })

    //console.log(updateObj)
    //console.log(global.userObj.agape_profile_memberID)


    globalTools.userProfileEdit("agape_profile",updateObj,"agape_profile_memberID",global.userObj.agape_profile_memberID);


  
  })


  for(var g=18;g<91;g++){
    $("#agape_profile_age").append("<option value="+g+">"+g+"</option>")
  }



  getSponsors();
  lForms();
  loadPageFormData(global.userObj);
  getOnlineUsers(global.userListCnt);



    
  
</script>