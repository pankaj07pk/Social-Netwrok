<?php 
error_reporting(E_ALL & ~E_NOTICE);
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
	session_start();
	 include_once('Connection.php');
	 include_once('database.php');


	 $unm = $_SESSION['usrnm'];
	
	$squery= mysql_query("select * from user_data where username='$unm'");
	$frow= mysql_fetch_array($squery);
	 $un=  $frow["username"];


if(isset($_POST['upld'])){

	$tle = $_POST['title'];
	$fnm = $_FILES['pflimg'] ['name'];
	$ftm = $_FILES['pflimg'] ['tmp_name'];
	$fsz = $_FILES['pflimg'] ['size'];
	$stor = "userfle/".$fnm;

	$ftp = explode('.',$fnm);
	$ftp = strtolower(end($ftp));
	$fnn = uniqid().'.'.$ftp;

	$stor = "userfle/".$fnn;



	if ($ftp=='jpg' ||$ftp=='png' ||$ftp=='gif' ||$ftp=='') {
		if ($fsz>=1000000) {
			$rtm= "file size under 2 mb";
		}
		else{
			if (move_uploaded_file($ftm,$stor)) {

				mysql_query("insert into post_data (usrname,images,title) VALUES ('$un','$fnn','$tle')");
				echo "<script>window.open('index','_self')</script>";
		}
		}

		

	}
	else{
		$rtm= "not accept file extension";
	}

	
}


 ?>