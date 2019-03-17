<?php
$usridnm = $_SESSION['usrnm'];
$squery= mysql_query("select * from user_data where username='$usridnm'");
	$frow= mysql_fetch_array($squery);
	$ssn_usr_id= $frow['Id'];
	$usr_nm= $frow['F_name'];
	$ssn_usr_img= $frow['proimg'];



if(isset($_GET['usr_id'])){

	$usr_id=$_GET['usr_id'];


$mquery= mysql_query("select * from Messages where snd_id IN ('$usr_id','$ssn_usr_id') AND rcve_id IN ('$ssn_usr_id','$usr_id') ORDER by 1 DESC");

	while($frow= mysql_fetch_array($mquery)){
	 $chtmsg=  $frow["chat_msg"];
	 $dte=  $frow["date"];
	 $si=  $frow["snd_id"];
	 $ri=  $frow["rcve_id"];

	 /*

}
	 	$mqueryto= mysql_query("select * from Messages where snd_id='$ssn_usr_id' AND rcve_id='$usr_id' ORDER by 2 DESC");
	 		while($mrow= mysql_fetch_array($mqueryto)){
	 		$chtmsgto=  $mrow["chat_msg"];
	 		$dteto=  $mrow["date"];

}
*/
	 $squery= mysql_query("select * from user_data where Id='$si'");
	$frow= mysql_fetch_array($squery);
	 $ufn=  $frow["F_name"];
	 $un=  $frow["username"];
	 $img= $frow['proimg'];


	 echo "

	 <div class=''>

		<form method='post' class='msgsdata'>
		<p class='msgarea'>$chtmsg <br><font style='size: 2px; color: #A6A6A6;'>$dte <b>Send By</b> ($ufn)</font> </P>
			
		

			</form>

		</div>


	 ";
	 }
	
/*
<img class='mpimg' src='userfle/$img' width='25' height='25'>
	$mqueryto= mysql_query("select * from Messages where snd_id='$ssn_usr_id' AND rcve_id='$usr_id' ORDER by 1 DESC");
	 		while($mrow= mysql_fetch_array($mqueryto)){
	 		$chtmsgto=  $mrow["chat_msg"];
	 		$dteto=  $mrow["date"];


	 		echo "
	 			<p class='msgarea2'>$chtmsgto</P>

	 		";
	 	}
*/
	}
	?>