<?php 
	session_start();
	include_once('database.php');

 ?>
<!DOCTYPE html>
<html>
<head>
	
		<meta charset="utf-8">
	<meta http-equiv="X-UA-compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width">

	<title>Feedback</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

	<style type="text/css">
		
	.fdbkfld{
		margin-top: 55px;
		margin-bottom: 88px;
	}

		textarea{
			resize: none;
			width: 96%;
			height: 200px;
			border-radius: 5px;
			border: 1px solid gray; 
			margin-bottom: 8px;
			padding: 10px 10px;
		}

	</style>


</head>
<body>
<?php 
		include_once('header.php');
 ?>


<div class="fdbkfld">
<div class="header">
  	<h2>Feedback</h2>
  </div>
	
	<form class="frm"  method="post" action="">
		<p style="color: red;" class="err"><?php if (isset($fdbkmsg)) { echo $fdbkmsg;} ?></p>
  	<p style="color: green;" class="err"><?php if (isset($fdbkdmsg)) { echo $fdbkdmsg;} ?></p>
  	  
  	  <input type="text" class="frmarea" name="fbkname" placeholder="Enter your name">
  	  <br>
  	  <br>
  	  <textarea name="fbkmsg" id="tstsz" maxlength="280" placeholder="Typle message here."></textarea>
  	
  	
  	  <input type="submit" id="snd" name="sendf" class="btn" value="send">
  	

</form>
</div>




<<?php 
		include_once('footer.php');
 ?>

</body>
</html>