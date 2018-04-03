<?php

include("../Config_files/_shared_config.php");
?>
<script>
	var h=Verifyuser()

	if(h=="true"){
		$("#logD1").hide();
	}else{
		$("#logD1").show();
	}
</script>
	<div class="topTab" >the Agape Community</br><span >where everything is up for discussion en</span></div>
	<div style="width:100%;text-align: center;background-color: #fff;color:#35b7fe;font-family: arial;">community</div>
		<div  class="panelLead_sub" style="background-color: #eee;">
				<div  class="panelLead_sub_holder" style="background-color: transparent" >
					<div style="margin:auto;">
						<div style="width:100%;margin:auto;" id="friendContainer">
							<!--<div style='width:700px;text-align:center;'><img src="images/loading37.gif" height='185'/></div>-->

							<div id="roseDiv" class='communitySections'  ><a href="romance"><img id="romanceImg" class='communityPageMainImage' src="<?php echo $actual_base;?>/images/romanceBanner.gif"/></a></div>
							
							
							<div class='communitySections' ><a href="media"><img id="newsImg" class='communityPageMainImage' src="<?php echo $actual_base;?>/images/news.gif"/></a></div>
							<br/>


							<!--<div class='communitySections' ><a href="President_Trump"><img id="trumpImg" class='communityPageMainImage' src="<?php echo $actual_base;?>/images/trumpBanner1.png"/></a></div>-->
							<!--<div class='communitySections' ><a href="politics"><img id="presImg" class='communityPageMainImage' src="<?php echo $actual_base;?>/images/pres.gif"/></a></div>-->
							
						</div>
						<br/>
					</div>				
				</div>
				
				
			</div>
			<script style="text/javascript">
				$("#opacback").css("height","0px");
				$("#transBack").css({"height":"0px"}).hide();
			</script>
	
								