<?php

include_once('Connection.php');
include_once('function.php');
session_start();

if(!isset($_SESSION['usrnm'])){
		header("location: entry");
	}
	else{

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width">
	<title>latwb || user profiles</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/mstyle.css">
	<link rel="stylesheet" type="text/css" href="css/usrprofilecss.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

	<style type="text/css">
			
			
			input[type=button]{
			
			background-color: #777777;
			border: none;
			color: #fafafa;
			
		}

		

		</style>

</head>
<body>
	<?php include_once('hdr.php'); ?>

	<div class="contet">


	<?php	ohrup(); ?>

</div>

</body>
</html>
<?php } ?> 