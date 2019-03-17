<?php
	error_reporting(E_ALL & ~E_NOTICE);
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
	 session_start();
	 include_once('Connection.php');

	if(!isset($_SESSION['usrnm'])){
		header("location: entry");
	}
	else{

?>
<!DOCTYPE html>

<?php

		$u_id= $_SESSION['usrnm'];
$ckssn= mysql_query("select * from user_data where username='$u_id'");
$row= mysql_fetch_array($ckssn);
$ueml= $row["Email"];


	if(isset($_POST['cng'])){
		$ceml=$_POST['ccmail'];
		$cops=$_POST['copass'];
		$cps=$_POST['cpass'];
		$pslnt = strlen($cps);


		$qry ="select * from user_data where Email='$ceml' AND password='$cops'";
		$rslts =mysql_query($qry);


		if(empty($ceml)){
			$cdmsg= "Enter your email";
		}
		elseif (empty($cops)) {
			$cdmsg ="enter your old password";
		}
		else if (empty($cps)) {
	$cdmsg = "Enter password (minumum 6 character required)";
	
}
	else if (($pslnt<=6)) {
	 	$cdmsg = "Short password not valid minimum 6 character required";

	 }

		elseif (mysql_num_rows($rslts)>0) {
			$qry ="UPDATE user_data SET password='$cps' WHERE Email='$ceml'";
			$rslts = mysql_query($qry);
			$cmsg= "password Changed";
		}else{
			$cdmsg ="Check your email and old password";
		}
		
	}



?>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width">
	<title>Latwb | Change Password</title>
	<link rel="icon" type="image/png" href="../img/ltb.png">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/mstyle.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

		<style type="text/css">
			
			.frgfld{

				margin-top: 200px;
				margin-bottom: 197px;
			}

			#snd{
				margin-top: 10px;
			}
			.frmarea{
				margin-bottom: 5px;
			}


			@media(min-width: 280px) and (max-width: 520px){
				.frgfld{
					margin-top: 100px !important;
				}

			}

		</style>



</head>
<body>
	<?php 
	include_once('hdr.php');
	?>

	<div class="">


	<div class="frgfld">
<div class="header">
  	<h2>Change Password</h2>
  </div>
		
	<form class="frm"  method="post" action="">
  	  	<p style="color: green;" class="err"><?php if (isset($cmsg)) { echo $cmsg;} ?></p>
  	<p style="color: red;" class="err"><?php if (isset($cdmsg)) { echo $cdmsg;} ?></p>

  	  <input type="email" class="frmarea" name="ccmail" value="<?php if(isset($ueml)) {echo $ueml;}  ?>" readonly>
  	  <input type="Password" class="frmarea" name="copass" placeholder="Enter old Password">
  	  <input type="Password" class="frmarea" name="cpass" placeholder="Enter new Password">
  	
  	
  	  <input type="submit" id="snd" name="cng" class="btn" value="change">
  	

</form>
</div>

</div>
</body>
</html>

<?php } ?>