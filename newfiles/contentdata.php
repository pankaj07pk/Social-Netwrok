<?php 

include_once('Connection.php');
include_once('content.php');
include_once('function.php');



 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width">


		<style type="text/css">
			

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
			width: 96%;
			padding: 10px;
		}
		.leftarea{
			float: left;
			position: fixed;
		}
		.rightarea{
			margin-left: 300px;
			margin-top: 10px;

		}



		#pst{
			background-color: white;
			border: 1px solid black;
			margin-right: 30%;
			margin-left: 20%;
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
			margin-left: 15px;
		}
		.cimg{
			height: 350px;
			width: 100%;
		}

		.lbtn{
			float: left;
			background-color: #FFFFFF;
			border: none;
			color: black;
			padding: 7px 50px;
		}
		.cbtn{float: right;
			background-color: #FFFFFF;
			border: none;
			color: black;
			padding: 7px 50px;
		}

		@media(min-width: 280px) and (max-width: 520px){

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
			width: 98%;
		}
		.rightarea{
			margin-left: 0px;
		}
		.leftarea{
			position: static;
		}

		#pst{
			marker-start: 100px;
			margin-left: 0px;
			margin-right: 0px;
		}

		.cimg{
			height: 300px;
			width: 100%;
		}

		}

		</style>

</head>
<body>
	<div>
	<div class="leftarea">
		<div class="srch">
			<input type="text" name="" class="src" placeholder="Search">
		</div>
	<div class="uld">
<form action="" method="post" enctype="multipart/form-data">
	<p align="center">Upload your post here.</p>
	<textarea placeholder="Type Something here" name="title" required=""></textarea>
	<input type="file" class="fls" name="pflimg">
	<input type="submit" class="sb" name="upld" value="Upload">
	
<p style="color: green;" class="err"><?php if (isset($tm)) { echo $tm;} ?></p>
<p style="color: red;" class="err"><?php if (isset($rtm)) { echo $rtm;} ?></p>
</form>

</div>
</div><br>
<div class="rightarea">
	
<?php postarea(); ?>

</div>
</div>
</body>
</html>