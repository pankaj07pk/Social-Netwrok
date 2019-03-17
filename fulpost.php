<?php

include_once('Connection.php');
include_once('function.php');
include_once('content.php');
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
	 $cunm= $frow['F_name'];

	 $usr_pst ="select * from post_data where usrname='$usridnm'";
	 $run_pst =mysql_query($usr_pst);
	 $cnt_pst =mysql_num_rows($run_pst);

	 ?>

<html>
<head>
	<title>Latwb || View full Post</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/Newsfeedcss.css">

	<style type="text/css">

	.contet{
		margin-top: 70px;
	}
		
	#pst{
			background-color: white;
			border: 1px solid black;
			overflow: auto;

		}
		.upimg{
			border-radius: 50%;
		}
		.uin{
			margin-top: 5px;
			color: blue;
			margin-left: 15px;
		}
		.uttl{
			margin-top: 5px;
			color: black;
			text-align: justify;
			margin-left: 15px;
			margin-right: 10px;
		}
		.cimg{
			height: 400px;
			width: 100%;
		}

		.cmntdiv{
			border: 1px solid black;
			margin-top: 2px;
			background: #AAD5FF;
			padding: 10px 10px 10px;
		}

		.cmtarea{
			margin-left: 40px;
			height: 50px;
			width: 75%;
			border-radius: 10px;
			padding: 10px 10px;
		}
		.cmtsbt{
			background-image: url(img/right-arrow.png);
			background-repeat: no-repeat;
			background-position:center;
			padding: 14px 10px;
			height: 40px;
			width: 7%;
			border:none;
			background-color: #AAD5FF;
			margin-left: 20px;
			border-radius: 0px 20px 20px 0px;
		}

		#shocmt{
			border: 1px solid black;
			margin-top: 2px;
			margin-left: 25%;
			margin-right: 25%;
			background-color: #E4E7F1;
			overflow: auto;
		}
		.undt{
			margin-top: 5px;
			margin-left: 5%;
		}

		.cmttxt{
			height: 50px;
			width: 90%;
			padding: 10px 10px;
			border-radius:10px;
			margin-left:5%;
			margin-bottom: 10px;
		}

		/* new css style */

		


		@media(min-width: 280px) and (max-width: 520px){

			
			#pst{
			marker-start: 100px;
			margin-left: 0px;
			margin-right: 0px;
		}

		.cimg{
			height: 300px;
			width: 100%;
		}

		.cmtbtn{margin-left: 10%;
			
		}

		.cmntdiv{
			border: 1px solid black;
			margin-left: 0%;
			margin-right: 0%;

		}
		.cmtarea{
			margin-left: 0px;
			
		}

		.cmtsbt{
			width: 20%;
			margin-left: 14px;
		}

		#shocmt{
			border: 1px solid black;
			margin-left: 0%;
			margin-right: 0%;
			background-color: 
		}


		/* new style css */
		.usrinfo{
			display: none;
		}

		.uld{
				margin-left: 10px !important;
			}
			textarea{
				float: left;
			resize: none;
			width: 98%;
			height: 70px;
			border-radius: 5px;
			border: 1px solid gray; 
			padding: 10px 10px;
			margin-bottom: 5px;
		}

		.fls{
			margin-left: 20%;
			margin-bottom: 5px;
		}
		.sb{
			margin-left: 40%;
		}
		.src{
			width: 82%;
		}
		.rightarea{
			margin-left: 0px;
		}
		.leftarea{
			display: none;
			position: static;
		}
		}

	</style>

</head>
<body>

	<?php include_once('hdr.php'); ?>

	<div class="contet">


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
	
<?php flpstacmt(); ?>

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
</div>

</body>
</html>
<?php } ?> 