<?php

error_reporting(E_ALL & ~E_NOTICE);
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);


include_once('Connection.php');

if(isset($_POST['Siup'])){

	 $fn = mysql_real_escape_string($_POST['f_name']);
	 $user = mysql_real_escape_string( $_POST['username']);
	 $eml = mysql_real_escape_string( $_POST['Email']);
	 $pass =mysql_real_escape_string( $_POST['password']);
	 $pslnt = strlen($pass);
	 $dy = $_POST['day'];
	 $mnt = $_POST['month'];
	 $yr = $_POST['Year'];
	 $gndr = $_POST['sex'];




	 $chk = mysql_query("select * from user_data where username='$user'");
	 $rslt=mysql_num_rows($chk);

	$emlchk = mysql_query("select * from user_data where Email='$eml'");
	 $emlrslt=mysql_num_rows($emlchk);

	 

if(empty(trim($fn))){
	$msg = "Enter your name";
}


elseif (empty($user)) {
	$msg = "Enter username";
}


elseif (empty($eml)) {
	$msg = "Enter email";
}
elseif (!filter_var($eml, FILTER_VALIDATE_EMAIL)) {
	$msg = "Wrong Email, please enter valid email";
}

else if (empty($pass)) {
	$msg = "Enter password (minumum 6 character required)";
	
}

	elseif (empty($gndr)) {
	$msg = "Choose your gender";
}
	else if (($pslnt<=6)) {
	 	$msg = "Short password not valid minimum 6 character required";

	 }

	 elseif ($rslt>0) {

	 	$msg="this username already teken choose different username";
	 }

	 elseif ($emlrslt>0) {

	 	$msg="this email already used please enter different email";
	 }

	 

	 
	 else{
	 	mysql_query("insert into user_data (F_name,username,Email,password,day,month,Year,sex,proimg) VALUES ('$fn','$user','$eml','$pass','$dy','$mnt','$yr','$gndr','pfl.png')");

	 	$dmsg ="Sucsessfully Sign up";
	 }
	 

	 
}

# Login coding here

if(isset($_POST['lgin'])){

$un = mysql_real_escape_string( $_POST['usrnm']);
$up = mysql_real_escape_string( $_POST['passw']);
	$encpt = md5($up);

$login_query = "select * from user_data where username='$un' AND password='$up'";

$run = mysql_query($login_query);

if(mysql_fetch_array($run)>0){

	 $_SESSION['usrnm']=$un;
	

	echo "<script>window.open('index','_self')</script>";
}

else{
	$upm="Username and Password incorrect";
}

}

# feedback area

if(isset($_POST['sendf'])){

	 $fkname = mysql_real_escape_string( $_POST['fbkname']);
	 $fkmsg = mysql_real_escape_string($_POST['fbkmsg']);


if (empty($fkname)) {
	$fdbkmsg = "Enter name";
}

else if (empty($fkmsg)) {
	$fdbkmsg = "Please, type something";
	
}

	 else{
	 	mysql_query("insert into feedback_data (name,message) VALUES ('$fkname','$fkmsg')");

	 	$fdbkdmsg ="Sucsessfully, send feedback. thanks for sending feedback";
	 }
	
}





?>