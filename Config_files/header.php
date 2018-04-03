<?php
session_start();
ob_start();
$men_chk='false';
$pass_chk='hidden';

$ctr=0;
if (isset($_SESSION['user']['Login']))
	{
		switch ($_SESSION['user']['Login'])
			{
				case "true":
				$men_chk="true";
				break;
 
				case "false":
				$men_chk="false";
				$pass_chk='display';
				break;
			}
	}
if(isset($_SESSION['LogN']))
	{
		if($_SESSION['LogN']='false')
			{
				$pass_chk='display';
			}

	}







?>