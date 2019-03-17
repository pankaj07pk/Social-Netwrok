<?php 

include_once('Connection.php');

function postarea(){

	$viewpost = "select * from post_data ORDER by 1 DESC";
	$start_post = mysql_query($viewpost);

	while ($run_post=mysql_fetch_array($start_post)) {

		$post_id =$run_post['post_id'];
		$usrnme =$run_post['usrname'];
		$img =$run_post['images'];
		$ttl =$run_post['title'];
		$tm =$run_post['Time'];


		$squery= mysql_query("select * from user_data where username='$usrnme'");
	    $frow= mysql_fetch_array($squery);
	    $ufn=  $frow["F_name"];
	    $pimg=  $frow["proimg"];



		// display post

		echo "<br><div id='pst'>
		<p class='uin' ><img class='upimg' src='userfle/$pimg' width='25' height='25'>&nbsp<b>$ufn</b></p>
		<p class='uttl'>$ttl</p>
		<p><img class='cimg' src='userfle/$img'></p>
		<p><button class='lbtn'>Like</button><a hreff='singlepost?post_id=$post_id' ><button class='cbtn'>Comment</button></a></p>




		</div>





		";

	}
}



 ?>