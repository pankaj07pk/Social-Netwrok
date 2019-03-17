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
		$cps=$_POST['pass'];
		$cun=$_POST['cusrnm'];

		$chk = mysql_query("select * from user_data where username='$cun'");
	 	$crslt=mysql_num_rows($chk);

		$qry ="select * from user_data where Email='$ceml' AND password='$cps'";
		$rslts =mysql_query($qry);


		if(empty($ceml)){
			$cdmsg= "Enter your email";
		}
		elseif (empty($cps)) {
			$cdmsg= "Enter your password";
		}
		else if (empty($cun)) {
	$cdmsg = "Enter Username";
	}

		elseif ($crslt>0) {

	 	$cdmsg="this username already teken choose different username";
	 }

		elseif (mysql_num_rows($rslts)>0) {
			$qry ="UPDATE user_data SET username='$cun' WHERE Email='$ceml'";
			$rslts = mysql_query($qry);
			$cmsg= "Username Changed";
		}else{
			$cdmsg ="Check your email and password";
		}
		
	}



?>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width">
	<title>Latwb | Change Username</title>
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
  	<h2>Change Username</h2>
  </div>
		
	<form class="frm"  method="post" action="">
  	  	<p style="color: green;" class="err"><?php if (isset($cmsg)) { echo $cmsg;} ?></p>
  	<p style="color: red;" class="err"><?php if (isset($cdmsg)) { echo $cdmsg;} ?></p>

  	  <input type="text" class="frmarea" name="ccmail" value="<?php if (isset($ueml)) { echo $ueml;} ?>" readonly>
  	  <input type="Password" class="frmarea" name="pass" placeholder="Enter your Password">
  	  <input type="text" class="frmarea" name="cusrnm" placeholder="Enter new username">
  	
  	
  	  <input type="submit" id="snd" name="cng" class="btn" value="change">
  	

</form>
</div>

</div>
</body>
</html>

<?php } ?>