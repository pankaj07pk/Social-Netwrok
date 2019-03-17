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
	<title></title>
</head>

<style type="text/css">
	
.mypstsh{
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
		.cimg{
			height: 350px;
			width: 100%;
		}

		.cmtbtn{
			margin-left: 20%;
			background-color: #FFFFFF;
			border: none;
			color: black;
			padding: 7px 20%;
		}
		.uttl{
			margin-top: 5px;
			color: black;
			text-align: justify;
			margin-left: 15px;
			margin-right: 10px;
		}
		@media(min-width: 280px) and (max-width: 520px){
			#pst{
				width: 100%;
				margin-left: 0px;
				margin-right: 0px;
			}
			.cmtbtn{
				margin-left: 10%;
			}

		}


</style>

<body>
	<div class="mphdr">
		<?php include_once('hdr.php'); ?>
	</div>
	<div class="mypstsh">


</div>
</body>
</html>
<?php } ?> 