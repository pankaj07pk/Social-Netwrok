<?php
	 include_once('Connection.php');
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

	<title>LATWB</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/msyle.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">


</head>
<body>

<!-- Header of index page -->

<?php
include_once('hdr.php');
?>

<div class="content">
	<?php 

	include_once('contentdata.php');

	 ?>



</div>




<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>

 <?php } ?> 