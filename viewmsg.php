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

	<style type="text/css">

	.contet{
		margin-top: 70px;
	}
		
	#pst{
			background-color: white;
			border: 1px solid black;
			margin-right: 25%;
			margin-left: 25%;
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
			margin-left: 25%;
			margin-right: 25%;
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

		.uld{
			margin-top: 20px;
			margin-left: 10px;
		}
		.fls{
			margin-bottom: 5px;
		}
		textarea{
			resize: none;
			width: 96%;
			height: 70px;
			border-radius: 5px;
			border: 1px solid gray; 
			padding: 10px 10px;

		}

		.srch{
			margin-top: 10px;
			margin-left: 10px;
		}

		.src{
			height: 50px;
			width: 80%;
			padding: 10px;
		}
		.srcbtn{
			background-image: url(img/magnifier.png);
			background-repeat: no-repeat;
			background-position: center;
			width: 15%;
			height: 50px;
		}

		.leftarea{
			float: left;
			margin-left: 2px;
			border:1px solid black;
			position: fixed;
		}
		.rightarea{
			margin-left: 200px;

		}

		.uin a{
			text-decoration: none;
		}

		.usrinfo{margin-top: 15px;
			margin-left: 0px;
			border:1px solid black;
			margin-right: 0px;
			padding: 20px 20px;
		}
		.usrinfo a{

			text-decoration: none;
			color: #002D2D;
		}

		h1.cap{
			text-transform: capitalize;
			margin-left: 9%;
		}
		.usrinfo a:hover{
			color: #007575;
		}
		.usrimgs{
			margin-left: 16%;
			border-radius: 8px 8px 8px 8px;
		}
		.ulst{
			margin-left: 9%;
		}

		/* View vhat list css style here... */
		#pst{
			margin-bottom: 5px;
			background-color: white;
		}
		#pst:hover{
			background-color: #DEF5FA;
		}

		.lstcht{
			padding: 10px;
		}
		.msg_cht_img{
			border-radius: 50%;
		}
		.snicht{
			text-transform: capitalize;
			size: 20px;
			color: #00005B;
			margin-left: 30px;
		}
		.sndbtn{
			float: right;
			padding: 2px;
			border:none;
			background-color: #0000FF;

		}
		.sndbtn:hover{
			background-color: #000000;
		}
		.btnfnt{
			color: white;
			padding: 4px;
		}
		.btnfnt:hover{
			color: #FC931F;
		}
		.sbx{
			
			display: none;
		}

		.urdm{
			margin-left: 20px;
		}

		.curm{
			color: red;
		}


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
			width: 84%;
		}
		.rightarea{
			margin-top: 0px;
			margin-left: 0px;
		}
		.leftarea{
			display: none;
		}

		.sbx{
			
			display: inline;
			
		}

		.srch{
			margin-top: 0px;
			
		}
		.urdm{
			display: none;
		}

		}
		

	</style>


</head>

<body>
<?php include_once('hdr.php'); ?>

<div class="contet">


		<div class="leftarea">
		<div class="srch">
			<form method="get" action="srcusr">
			<input type="text" name="usrsrcbox" class="src" placeholder="Search" required><input type="submit" value="." class="srcbtn" name="srcbtn">
			</form>
		</div>
	<div class="uld">
<form action="" method="post" enctype="multipart/form-data">
	<p align="center">Upload your post here.</p>
	<textarea placeholder="Type Something here" name="title" maxlength="298" required=""></textarea>
	<input type="file" class="fls" name="pflimg">
	<input type="submit" class="sb" name="upld" value="Upload">
	
<p style="color: green;" class="err"><?php if (isset($tm)) { echo $tm;} ?></p>
<p style="color: red;" class="err"><?php if (isset($rtm)) { echo $rtm;} ?></p>
</form>
</div>

<div class="usrinfo">


	<a href="usrpfl"><img src="userfle/<?php if(isset($pi)){ echo $pi;}?>" height="150" width="150" class="usrimgs"></a>
	<a href="usrpfl"><h1 class="cap"><b><?php if(isset($unm)){ echo $unm;}?></b></h1></a>
	<a href="mypst?show_usr_pst=<?php echo($usridnm); ?>"><p class="ulst"><img src="img/glryfl.png" height="24" width="24">&nbsp My Post ( <?php if (isset($cnt_pst)) { echo $cnt_pst;} ?> )</p></a>
	<a href=""><p class="ulst"><img src="img/chtfl.png" height="24" width="24">&nbsp Messages ( )</p></a>
	<a href=""><p class="ulst"><img src="img/notifications.png" height="24" width="24">&nbsp Notifications ( )</p></a>
	



</div>

</div>


		<div class="rightarea">
			
			<div class="srch sbx">
			<form method="get" action="srcusr">
			<input type="text" name="usrsrcbox" class="src" placeholder="Search" required><input type="submit" value="." class="srcbtn" name="srcbtn">
			</form>
		</div>
		
		<?php	chatlist(); ?>

			</div>
</div>


</body>
</html>
<?php } ?>