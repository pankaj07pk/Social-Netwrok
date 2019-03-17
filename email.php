<?php 
$to = "pan07pk@gmail.com";
$sub = "test main";
$messg = "hello, madie";
$hdr ="From: latwb <latwb.in@gmail.com>";

if(mail($to, $sub, $messg, $hdr)){
	echo "send your email";
}
else{

	echo "try again";
}


 ?>