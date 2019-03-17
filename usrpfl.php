<?php
	error_reporting(E_ALL & ~E_NOTICE);
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
	 session_start();
	 include_once('Connection.php');
	 include_once('database.php');
	 include_once('mypst.php');
	 


	if(!isset($_SESSION['usrnm'])){
		header("location: entry");
	}
	else{

?>
<!DOCTYPE html>

<?php 




$unm = $_SESSION['usrnm'];
	
	$squery= mysql_query("select * from user_data where username='$unm'");
	$frow= mysql_fetch_array($squery);
	 $ufn=  $frow["F_name"];
	 $un=  $frow["username"];
	 $ue=  $frow["Email"];
	 $up=  $frow["Phone"];
	 $ud=  $frow["day"];
	 $um=  $frow["month"];
	 $uy=  $frow["year"];
	 $us=  $frow["sex"];
	 $pi= $frow['proimg'];
	 



if(isset($_POST['upld'])){

	$fnm = $_FILES['pflimg'] ['name'];
	$ftm = $_FILES['pflimg'] ['tmp_name'];
	$fsz = $_FILES['pflimg'] ['size'];

	$ftp = explode('.',$fnm);
	$ftp = strtolower(end($ftp));
	$fnn = uniqid().'.'.$ftp;

	$stor = "userfle/".$fnn;

	if ($ftp=='jpg' ||$ftp=='png' ||$ftp=='gif') {
		if ($fsz>=1000000) {
			$tm= "file size under 2 mb";
		}
		else{
			if (move_uploaded_file($ftm,$stor)) {

				mysql_query("UPDATE user_data SET proimg='$fnn' WHERE Email='$ue'");
				$tm= "Profile updated";
		}
		}

		

	}
	else{
		$tm= "not accept file extension";
	}

	
}


 ?>

<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width">
	<title>Latwb | Profile</title>
	<link rel="icon" type="image/png" href="../img/ltb.png">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/mstyle.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/usrprofilecss.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">


</head>
<body>
<?php 
	include_once('hdr.php');
?>

<!-- Show Profile and details -->
	
	<div class="container usrpflfld">
		
<div class="profile_ttl">Profile</div>
		<div class="row">
			<div class="col-sm-4">
				<div class="bckclr1">
				
					<div class="shoimg">
						
						<img src="userfle/<?php if(isset($pi)){ echo $pi;}?>" class="proimg">
						<div class="usrnm">
							<span class="unmsho"><?php if (isset($ufn)) { echo $ufn;} ?></span>
						</div>

					</div>


					</div>

					<div class="upldimg">
								

								<form method="post" enctype="multipart/form-data">
					<input type="file" name="pflimg">
		<input type="submit" name="upld" value="Upload" class="udbtn">
	
		<p style="color: red;" class="err"><?php if (isset($tm)) { echo $tm;} ?></p>
							</form>

						</div>


			</div>

			<div class="col-sm-8">
				<div class="usrdtldv">
				<div class="usrdtls">
					
					<p><span class="qus qusans">Username :</span><span class="ans qusans"><?php if (isset($un)) { echo $un;} ?></span></p><hr>

					<p><span class="qus qusans">Email :</span><span class="ans qusans"><?php if (isset($ue)) { echo $ue;} ?></span></p><hr>

					<p><span class="qus qusans">Phone :</span><span class="ans qusans"><?php if (isset($up)) { echo $up;} ?></span></p><hr>

					<p><span class="qus qusans">Dob :</span><span class="ans qusans"><?php if (isset($ud)) { echo $ud;} ?>/<?php if (isset($um)) { echo $um;} ?>/<?php if (isset($uy)) { echo $uy;} ?></span></p><hr>

					<p><span class="qus qusans">Gender :</span><span class="ans qusans"><?php if (isset($us)) { echo $us;} ?></span></p>

				</div>

				</div>


				<div class="mypst">My Post</div>

			<div class="usr_post">

			<?php include_once('view_my_post.php'); ?>

			</div>




			</div>

			


		</div>


	</div>




<!-- Show Profile and Details -->




<div class="contet">
<!--
<h1>profile field</h1>
<p style="color: red;" class="err"><?php if (isset($un)) { echo $un;} ?></p>
<p style="color: red;" class="err"><?php if (isset($ue)) { echo $ue;} ?></p>
-->


</body>
</html>
<?php } ?>