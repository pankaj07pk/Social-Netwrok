<?php 

include_once('Connection.php');
include_once('content.php');
include_once('function.php');
include_once('mypst.php');



 ?>
<!DOCTYPE html>
<?php 


$usridnm = $_SESSION['usrnm'];
	
	$squery= mysql_query("select * from user_data where username='$usridnm'");
	$frow= mysql_fetch_array($squery);
	 $pi= $frow['proimg'];
	 $unm= $frow['F_name'];
	 $u_i_d=$frow['Id'];

	 $usr_pst ="select * from post_data where usrname='$usridnm'";
	 $run_pst =mysql_query($usr_pst);
	 $cnt_pst =mysql_num_rows($run_pst);


	 $usr_msgs ="select * from messages where rcve_id='$u_i_d' AND rdng='no'";
	 $run_msgs =mysql_query($usr_msgs);
	 $cnt_msgs =mysql_num_rows($run_msgs);

	 ?>

<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/Newsfeedcss.css">

	

</head>
<body>

<!-- for alert message 
<div class="container">
 
  <div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Successfully Sign up!</strong> Please Check your Email.
  </div>
</div>
-->
<!-- User datails and Newsfeed -->

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
				
<form action="" method="post" enctype="multipart/form-data">

<label id="bb"> <img src="img/uploadicon.png"></i> <span>Image/Video</span>
    <input type="file" id="fls" name="pflimg">
    </label> 
    <input type="text" placeholder="Type Something here" name="title" maxlength="298" class="pstmsg">
	<input type="submit" class="btn btn-secondary" name="upld" value="Post">
	<span style="color: green;" class="err"><?php if (isset($tm)) { echo $tm;} ?></span>
	<span style="color: red;" class="err"><?php if (isset($rtm)) { echo $rtm;} ?></span>
</form>
</div>



<div class="rghtara">
	
<?php postarea(); ?>

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
<script type="text/javascript">
	
$(document).ready(function(){
	$('#gosrc').submit(function(){
		$('#loaddata').load('srcrslt.php');
	})


	
}
);

</script>
-->
<!--
<script type="text/javascript" src="js/jquery.js"></script>

<script>

$(document).ready(function(){
	$(".cmtbtn").click(function() {

		$(".cmtd").toggle();
	});
});

</script>
-->
</body>
</html>