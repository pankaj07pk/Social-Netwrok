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
<!DOCTYPE html>
<?php 


$unm = $_SESSION['usrnm'];
	
	$squery= mysql_query("select * from user_data where username='$unm'");
	$frow= mysql_fetch_array($squery);
	 $pi= $frow['proimg'];

	 ?>

<html>
<head>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width">

	<title>LATWB</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
		
	<style type="text/css">
		
		body{
  background-color: #e4e7f1;
}

* {
  margin: 0px;padding: 0px;
}

.htbr{
	background:#283e4a;padding-left: 175px; padding-right: 130px; width: 100%; top: 0px;
	position: fixed; visibility: visible;
				z-index: 100;

}
.drpbtn{
	background-color: #283E4A;color: white;padding: 13px;border: none;

}
.hdrimg{
	border-radius: 50%;
}
.dropdown{
	position: relative;
	display: inline-block;
	
}
.drop-con{
	display: none;
	position: absolute;
	right: 0;
	background-color: #f9f9f9;
	min-width: 200px;
	box-shadow: 0px 8px 16px 0px(0,0,0,0.2);
}
.lo{
	text-align: center;
}
.drop-con a{
	color: black;
	padding: 12px 16px;
	text-decoration: none;
	display: block;

}

.drop-con a:hover{
	background-color: #EAF3F4;
}
.dropdown:hover .drop-con{
	display: block;
}
.dropdown:hover .drpbtn{
	background-color: #4E788F;
}

.hu{
	background-color: #283E4A;
	color: white;
	padding: 13px;
	border: none;


}
.hu:hover{
	background-color: #4E788F;
}

.hmmh{
	margin-left: 8px;
	color: white;
}
.pstm{
	display: none;
}

.mvhdr{
	display: none;
}
	@media(min-width: 280px) and (max-width: 520px){

		.htbr{
	padding-left: 15px !important;
	padding-right: 10% !important;
}

	.drpbtn{
		
	padding-left: 10% !important;
	padding-right: 10% !important;
	}

	.hu{
	padding-left: 10% !important;
	padding-right: 10% !important;

}
.hu{
	display: none;
}

.pstm{
	display: inline;

}
.hust{
	display: none;
}

.mvhdr{
	display: inline;
	background-color: #283E4A; padding: 13px 15px;border: none;
}
.mvhdr:hover{
	background-color: green;
}
.usrpro{
	border-radius: 50%;
}


	}
	</style>


</head>
<body>

<!-- topbar of home page -->

	<div class="container-fluid htbr">
		<div class="container">
		<div class="row">
			<div class="col-sm-12">
				
				
					
					
						
	<a href="index"><button class="hu"><img src="img/hm.png" height="24" width="24"><font class="hmmh"><b>Home</b></font></button></a>
	<a href="usrpfl"><button class="hu"><b><img src="userfle/<?php if(isset($pi)){ echo $pi;}?>" height="24" width="24" class="hdrimg"><font class="hmmh"></b><?php echo $_SESSION['usrnm']; ?></b></font></button></a>
	<!-- content for mobile view only -->

		<a href="index"><button class="mvhdr"><img  src="img/home.png" height="24" width="24"></button></a>
		<a href="usrpfl"><button class="mvhdr"><img src="userfle/<?php if(isset($pi)){ echo $pi;}?>" height="24" width="24" class="usrpro"></button></a>
		<a href="mypst?show_usr_pst=<?php echo($usridnm); ?>"><button class="mvhdr"><img src="img/picture-gallery.png" height="24" width="24"></button></a>
		<a href="viewmsg"><button class="mvhdr"><img src="img/speech-bubble.png" height="24" width="24"></button></a>
		<a href=""><button class="mvhdr"><img src="img/notifications-button.png" height="24" width="24"></button></a>

	<!-- End mobile content -->

	<div class="dropdown" style="float: right;">
	<button class="drpbtn"><font class="hust"><b>Settings</b></font><img src="img/setng.png" height="24" width="24" class="hust"><img class="pstm" src="img/settings-4-32.png" height="24" width="24"></button>
			<div class="drop-con">
				<a class="lo" href="lgout.php"><img src="img/log.png" height="24" width="24">&nbsp<b>Log out</b></a>
				<a href="cngusrnm"><img src="img/pfl.png" height="24" width="24">&nbspChange Username</a>
					<a href="Cngpass"><img src="img/cp.png" height="24" width="24">&nbspChange Password</a>


							</div>
							

						</div>



</div>

					
				

			</div>
		</div>
	</div>


<!-- ending of top bar -->
</body>
</html>