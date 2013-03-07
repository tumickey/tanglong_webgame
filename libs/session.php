<?php
session_start();
if (!isset($_SESSION['id']))
{
	$_SESSION['id'] = session_id();
	$_SESSION['login'] = false;
	$_SESSION['uid']="";

	$_SESSION['sex'] = '0';
	$date = date("Y-m-d G:i:s");
	$_SESSION['datetime']=$date;
	$_SESSION['skin']='cute';
}


?>