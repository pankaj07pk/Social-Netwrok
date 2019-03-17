<?php 

include_once('Connection.php');
include_once('function.php');
include_once('sdmsg.php');


if(isset($_GET['usr_id'])){

	$usr_id=$_GET['usr_id'];

	$squery= mysql_query("select * from user_data where Id='$usr_id'");
	$frow= mysql_fetch_array($squery);
	 $ufn=  $frow["F_name"];
	 $un=  $frow["username"];
	 $mimg= $frow["proimg"];




	}


 ?>
<!DOCTYPE html>
<?php 
$usridnm = $_SESSION['usrnm'];
	
	$squery= mysql_query("select * from user_data where username='$usridnm'");
	$frow= mysql_fetch_array($squery);
	 $pi= $frow['proimg'];
	 $unm= $frow['F_name'];
	 $sid= $frow['Id'];

	 if (isset($_POST['snd_mg'])) {

	 	$typmsg = mysql_real_escape_string($_POST['typmsg']);

	 	mysql_query("UPDATE Messages SET rdng='yes' WHERE snd_id='$usr_id' AND rcve_id='$sid'");

	 	mysql_query("insert into Messages (snd_id,rcve_id,chat_msg,reply,rdng,date) value ('$sid','$usr_id','$typmsg','none','no',NOW())");


	 	
	 }


?>


<html>
<head>
	<title></title>

	<style type="text/css">
		

		.tpmsg{
			padding: 8px;
			width: 85%;
			border-radius: 8px;
		}
		.sdmsg{
			background-image: url(img/sblk.png);
			background-repeat: no-repeat;
			background-position: center;
			margin-top: 10px;
			padding: 8px;
			border:none;
			width: 14%;
			background-color: #E4E7F1;
		}
		.tysnd{
			
			margin: 8px;
		}
		.sho_msg{
			
		}
		.msgarea{
			border:none;
			height: auto;
			padding: 8px;
			width: 87%;
			border-radius: 0px 10px 10px 10px;
			margin-left: 50px;
			background-color: white;
		}
/*
		.msgarea2{

			text-align: right;
			border:none;
			height: auto;
			padding: 5px;
			width: 40%;
			border-radius: 10px 10px 0px 10px;
			margin-left: 58%;
			margin-top: 5px;
			background-color: #9BFF9B;
		}

*/
		.msg_usr_img{
			margin-left: 10px;
			border-radius: 50%;
		}
	.msgsdata{margin-top: 5px;}

	.cht_usr_img{
		border-radius: 50%;
		margin-right: 10px;
	}
	.mpimg{
		border-radius: 50%;
		margin-left: 10px;
	}

		@media(min-width: 280px) and (max-width: 520px){

			.msg_box{
				margin-top: 30px;
			width: 100%;
			margin-left: 0px;
		}
		.tpmsg{
			padding: 8px;
			width: 80%;
		}
		.sho_msg{
			width: 100%;
			margin-left: 0px;
		}
		.msgarea{
			margin-left: 10px;
			width: 92%;
			
		}
		.msgarea2{
			margin-left: 15%;
			width: 81%;
			
		}
		

		}
	</style>

</head>
<body>
	<div class="msg_top">
<div class="msg_box">
	
<div class="nm_snd_rcv">
	<center><b><a href='otherup?user=<?php echo "$un"; ?>'><p style="color: white; size: 20px;"><img class="cht_usr_img" src="userfle/<?php if(isset($mimg)){ echo $mimg;}?>" height="32" width="32"><?php echo "$ufn"; ?></p></a></b></center>
</div>

	
	<form class="tysnd" method="post">
		
		<input type="text" class="tpmsg" name="typmsg" placeholder="Type your message" maxlength="140" autocomplete="off" required><input type="submit" class="btn btn-success" value="Reply" name="snd_mg">




	</form>


</div>
</div>
<!-- Message area -->

<div class="sho_msg">
		<?php shomsg(); ?> 
	
	</div>
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