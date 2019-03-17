<?php
include_once('Connection.php');
include_once('forgot.php');

$feml = $_REQUEST["fmail"];
	
	$fquery= mysql_query("select * from user_data where Email='$feml'");
	$frow= mysql_fetch_array($fquery);
	
	$to = "$frow['Email']";
$sub = "Password Forgot";
$messg = "Your Password is .$frow['password']";
$hdr ="From: latwb <latwb.in@gmail.com>";


	?>