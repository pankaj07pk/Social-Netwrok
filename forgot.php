<?php
session_start();
include_once('Connection.php');
include_once('database.php');



$feml = $_REQUEST["fmail"];
	
	$fquery= mysql_query("select * from user_data where Email='$feml'");
	$frow= mysql_fetch_array($fquery);
	   $fps= $frow["password"];

	$to = "$feml";
$sub = "Password Forgot";
$messg = "Your password is $fps";
$hdr ="From: latwb <latwb.in@gmail.com>";

mail($to, $sub, $messg, $hdr);



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width">

	<title>Latwb || forgot</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">


		<style type="text/css">
			
			.frgfld{

				margin-top: 200px;
				margin-bottom: 197px;
			}

			#snd{
				margin-top: 10px;
			}


			@media(min-width: 280px) and (max-width: 520px){
				.frgfld{
					margin-top: 70px !important;
				}

			}

		</style>

</head>
<body>
<?php
		include_once('header.php');

?>
<div class="frgfld">
<div class="header">
  	<h2>Forgot Password</h2>
  </div>
	
	<form class="frm"  method="post" action="">
  	  
  	  <input type="email" class="frmarea" name="fmail" placeholder="Enter your email">
  	
  	
  	  <input type="submit" id="snd" name="send" class="btn" value="send">
  	

</form>
</div>

<?php
		include_once('footer.php');

?>
</body>
</html>