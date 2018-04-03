<?php
echo "<div class='profileDivStyles1'><div class='profileLabelStyles1' ><b>Firstname</b><span style='font-size:14px;color:red;font-weight:bold;'>*</span></div><div class='profileTboxStyles1'><input id='agape_profile_firstname' type='textbox' class='profileTBox' onkeydown='changeBack(this)' /></div><div style='clear:both'></div></div>";


echo "<div class='profileDivStyles1'><div class='profileLabelStyles1'><b>Lastname</b>	<span style='font-size:14px;color:red;font-weight:bold;'>*</span></div><div class='profileTboxStyles1'><input id='agape_profile_lastname' onkeydown='changeBack(this)' type='textbox'  class='profileTBox' /></div><div style='clear:both'></div></div>";


echo "<div class='profileDivStyles1'><div class='profileLabelStyles1'><b>Gender</b><span style='font-size:14px;color:red;font-weight:bold;'>*</span></div><div style='float:left;'><select  id='agape_profile_gender' class='profileTBox'><option value='Male'>Male</option><option value='Female'>Female</option></select></div><div style='clear:both'></div></div>";

echo "<div class='profileDivStyles1'><div class='profileLabelStyles1'><b>Username</b><span style='font-size:14px;color:red;font-weight:bold;'>*</span></div><div class='profileTboxStyles1'><input id='agape_profile_username' onkeydown='changeBack(this)' type='textbox'  class='profileTBox' onblur='memUsernchk(this)' /></div><div style='clear:both'></div></div><div class='profileDivStyles1'><div class='profileLabelStyles1'><b>Password</b><span style='font-size:14px;color:red;font-weight:bold;'>*</span></div><div class='profileTboxStyles1'><input id='agape_profile_password' onkeydown='changeBack(this)' type='textbox'  class='profileTBox' /></div><div style='clear:both'></div></div>";








?>