<?php
	$par=$_GET['par'];

	//echo $par;
?>
<div style="margin-left:8px;margin-right:8px;background-image:url('images/uload.gif');background-repeat:no-repeat;">
	<form action="upload_file.php" method="post" enctype="multipart/form-data">
		<br/><br/><br/>
		<input type="file" name="file" id="file">
		<input type="submit" name="submit" value="Submit">
		<input type="hidden" name="par" id="par" value='<?php echo $par; ?>'>
	</form>
</div>