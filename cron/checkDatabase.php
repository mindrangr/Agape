<?php
$con=mysql_connect("localhost", "agapeAdmin", "Agape1422frg!") or die(mysql_error());
mysql_set_charset('utf8');
mysql_select_db("agape") or die(mysql_error());
date_default_timezone_set('America/New_York');

/*$con=mysql_connect("MWQ5693.db.11706293.hostedresource.com", "MWQ5693", "Q!yH6W@k90M#!")  or die(mysql_error());
mysql_set_charset('utf8');
mysql_select_db("MWQ5693")  or die(mysql_error());*/

$sqlstring="delete FROM sessiontable WHERE TIMESTAMPDIFF(minute,NOW(),sessiontable_expires) < -1";

//$sqlstring="select * FROM sessiontable WHERE DATEDIFF(minute,getdate(),sessiontable_expiration) < -1";

//$sqlstring="INSERT INTO `agape_friendrequest`( `requestorID`, `requestorUsername`, `requestedID`, `requestedUsername`, `requestSent`, `requestResponse`, `requestStatus`, `requestMessage`, `requestorImgUrl`) VALUES(496,'Big Dave','gretal8','24','Aunt Mable','acceptd','sent','Tango','tag')";
//echo $sqlstring;
//mysql_query($sqlstring);

//echo $sqlstring;
$result=mysql_query($sqlstring);
echo "<script>window.close();</script>";
//echo "done";
?>