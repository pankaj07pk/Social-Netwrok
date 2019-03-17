<?php

include_once('Connection.php');
include_once('function.php');
include_once('content.php');
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
	 $sunm= $frow['F_name'];

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
			

			</div>


		</div>

		<!-- column two -->

		<div class="col-sm-6 clmtwo">
			
			<div class="uld">
				
				<h3>Search Result...</h3>
</div>



<div class="rghtara">
	<div class="pplpst">People</div>
	<?php srchusr(); ?>

	<div class="pplpst">Post</div>
<?php srchrslt(); ?>

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
</body>
</html>
<?php } ?> 