<?php

if(isset($_REQUEST['delete'])){
	$dlt=$_REQUEST['delete'];
	mysql_query("delete from post_data where post_id='$dlt'");
}



//$get_usrnm = $_GET['show_usr_pst'];
$get_usrnm = $_SESSION['usrnm'];
//$get_usrnm = $ue;



$get_pst= "select * from post_data where usrname='$get_usrnm' ORDER by 1 DESC";

$run_pst= mysql_query($get_pst);

while($row=mysql_fetch_array($run_pst)){

	$pst_id= $row['post_id'];
	$pst_img= $row['images'];
	$pst_ttl= $row['title'];
	$pst_tm= $row['Time'];
	$u_nm = $row['usrname'];

	



	$squery= mysql_query("select * from user_data where username='$get_usrnm'");
	    $frow= mysql_fetch_array($squery);
	    $ufn=  $frow["F_name"];
	    $pimg=  $frow["proimg"];

	echo "<br><div id='usr_pst_sho'>
		<p class='uin' ><img class='upimg' src='userfle/$pimg' width='25' height='25'>
		&nbsp<a href='otherup?user=$usrnme'><b>$ufn</b></a>&nbsp &nbsp &nbsp &nbsp<a href='index?delete=$pst_id'>Delete</a></p>
		<p class='uttl'>$pst_ttl</p>
		<p><img class='cimg' src='userfle/$pst_img'></p>
		<a href='fulpost?pst_id=$pst_id'><input type='button' class='btn btn-link' value='View/Write Comment'></a>

		</div>



		";
}


?>