
<?php

include("../Config_files/_shared_config.php");
?>
<style>
.siteLinkClass{

	padding:4px;
	font-weight:bold;
	font-family: arial;
	font-size: 14px;
}

a:hover{
	color:blue;
}

a:active{
	color:blue;
}
a:link{
	color:blue;
}

a:visited{
	color:blue;
}
</style>
<div class="topTab" style='margin-top:15px;'>Site Map</div>
	<div>
		<div class="siteLinkClass"><a href="#">Contact Us</a></div>
		<div class="siteLinkClass"><a href="#">About U</a></div>
		<div class="siteLinkClass"><a href="<?php echo $actual_base;?>/homePage.php/presidential">Presidential Page</a></div>
		<div class="siteLinkClass"><a href="<?php echo $actual_base;?>/homePage.php/romance">Romance Page</a></div>
		<div class="siteLinkClass"><a href="<?php echo $actual_base;?>/homePage.php/news">News and Views</a></div>
		<div class="siteLinkClass"><a href="#">Poll Daddy</a></div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
	
	})


</script>