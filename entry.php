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
<link rel="icon" type="image/png" href="img/ltb.png">
	<title>LATWB</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	<style type="text/css">
		.ftrp{
			margin-top: 198px;
		}

		@media(min-width: 280px) and (max-width: 520px){
			.ftrp{
			margin-top: 0px;
		}
		}
	</style>
</head>

<body>

	<!-- 11111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111 -->
	<!-- starting of header -->
		<?php
				include_once('header.php');
		?>


		<!--2222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222-->


		<?php 
		include_once('registerform.php');

		?>

<br>
<br>
<br>


  <!-- footer -->
<div class="ftrp">
<?php
		include_once('footer.php');
?>

</div>
  <!-- ending footer -->


<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>



</body>
</html>
