<?php 

include_once('Connection.php');
include_once('content.php');
include_once('function.php');
include_once('mypst.php');
session_start();

if(!isset($_SESSION['usrnm'])){
		header("location: entry");
	}
	else{


 ?>
<!DOCTYPE html>
<?php 


$usridnm = $_SESSION['usrnm'];
	
	$squery= mysql_query("select * from user_data where username='$usridnm'");
	$frow= mysql_fetch_array($squery);
	 $pi= $frow['proimg'];
	 $unm= $frow['F_name'];
	 $sid= $frow['Id'];

	 $usr_pst ="select * from post_data where usrname='$usridnm'";
	 $run_pst =mysql_query($usr_pst);
	 $cnt_pst =mysql_num_rows($run_pst);

	 ?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/Newsfeedcss.css">


</head>

<body>
<?php include_once('hdr.php'); ?>

<div class="container">
	<div class="row">
		<!-- column one -->
		<div class="col-sm-3">
			<div class="lftara">
			<div class="srch">
			<form method="get" action="srcrslt">
			<input type="text" name="srcbox" class="src" placeholder="Search" required><input type="submit" value="" class="srcbtn" name="search">
			</form>
			</div>
			<br>
			<span><a href="mypst?show_usr_pst=<?php echo($usridnm); ?>"><p class="ulst"><img src="img/glryfl.png" height="24" width="24">&nbsp My Post ( <?php if (isset($cnt_pst)) { echo $cnt_pst;} ?> )</p></a></span>

			</div>


		</div>

		<!-- column two -->

		<div class="col-sm-6 clmtwo">

<div class="rghtara">
	
<?php include_once('sndbox.php'); ?>

</div>

		</div>

		<!-- column three -->

		<div class="col-sm-3">
			
			<div class="clmthree">

			<span class="chat_ttl">Chat List</span>
			<hr>
			<?php	chatlist(); ?>

			</div>

		</div>

	</div>
	


</div>


<!-- User datails and Newsfeed -->




<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/myscript.js"></script>



<!--
<script type="text/javascript" src="js/jquery.js"></script>

<script type="text/javascript">
	$(document).ready(function(){

		setInterval(function(){
			$('').load('')
		},3000);

	});
</script>
-->
</body>
</html>
<?php } ?>