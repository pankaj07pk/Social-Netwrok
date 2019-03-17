<?php

$get_id = $_GET['pst_id'];

$get_cmnt= "select * from comment where post_id='$get_id' ORDER by 1 DESC";

$run_cmnt= mysql_query($get_cmnt);

while($row=mysql_fetch_array($run_cmnt)){

	$cmnts= $row['comment'];
	$cmntor= $row['commentor'];
	$cmntdt= $row['data'];

	$squery= mysql_query("select * from user_data where username='$cmntor'");
	    $frow= mysql_fetch_array($squery);
	    $ufn=  $frow["F_name"];
	    $pimg=  $frow["proimg"];
	    $usrdtl=$frow['username'];

	echo "
	<div id='shocmt'>
	<p class='undt'><img class='upimg' src='userfle/$pimg' width='25' height='25'>&nbsp<a href='otherup?user=$usrdtl'><b>$ufn</b></a>  &nbsp date:-> &nbsp $cmntdt</p>
	<input type='text' class='cmttxt'value='$cmnts' readonly>

	</div>
	";
}


?>