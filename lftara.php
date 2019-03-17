<?php 

include_once('connection.php');
include_once('function.php');
include_once('contentdata.php'); 





?>

<!DOCTYPE html>

<?php 


$usridnm = $_SESSION['usrnm'];
	
	$squery= mysql_query("select * from user_data where username='$usridnm'");
	$frow= mysql_fetch_array($squery);
	 $pi= $frow['proimg'];
	 $unm= $frow['F_name'];

	 $usr_pst ="select * from post_data where usrname='$usridnm'";
	 $run_pst =mysql_query($usr_pst);
	 $cnt_pst =mysql_num_rows($run_pst);

	 ?>

<html>
<head>
	<title></title>
</head>


<body>
<div class="leftarea">
		<div class="srch">
			<form method="get" action="srcrslt">
			<input type="text" name="srcbox" class="src" placeholder="Search" required><input type="submit" value="." class="srcbtn" name="search">
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
	<a href="mypst?show_usr_pst=<?php echo($usridnm); ?>"><p class="ulst">My Post ( <?php if (isset($cnt_pst)) { echo $cnt_pst;} ?> )</p></a>
	<p class="ulst">Messages ( )</p>
	</div>
</div>
</body>
</html>