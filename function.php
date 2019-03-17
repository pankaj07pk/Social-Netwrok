<?php 

include_once('Connection.php');
include_once('database.php');


function postarea(){

	$viewpost = "select * from post_data ORDER by 1 DESC";
	$start_post = mysql_query($viewpost);

	while ($run_post=mysql_fetch_array($start_post)) {

		$post_id =$run_post['post_id'];
		$usrnme =$run_post['usrname'];
		$img =$run_post['images'];
		$ttl =$run_post['title'];
		$tm =$run_post['Time'];


		$squery= mysql_query("select * from user_data where username='$usrnme'");
	    $frow= mysql_fetch_array($squery);
	    $ufn=  $frow["F_name"];
	    $pimg=  $frow["proimg"];


	    //#fetch data 4 comments count

	     $c_cmt ="select * from Comment where post_id='$post_id'";
	 $r_cmt =mysql_query($c_cmt);
	 $cnt_cmt =mysql_num_rows($r_cmt);
	    


		// display post

		echo "<br><div id='pst'>
		<p class='uin' ><img class='upimg' src='userfle/$pimg' width='25' height='auto'>&nbsp<a href='otherup?user=$usrnme'><b>$ufn</b></a></p>
		<p class='uttl'>$ttl</p>
		<p><img class='cimg' src='userfle/$img'></p>
		<a href='fulpost?pst_id=$post_id'><input type='button' class='cmtbtn' data-toggle='collapse' data-target='#clspscmnt'  value='View/Write Comment ( $cnt_cmt )'></a>

		<div class='collapse' id='clspscmnt'>

		</div>



		</div>



		";
		
		
	}


	

}

#search query

function srchrslt(){

	if(isset($_GET['search'])){

		$src_query= $_GET['srcbox'];
	}

	$get_srch="select * from post_data where usrname like '%$src_query%' OR title like '%$src_query%'";

	$run_query=mysql_query($get_srch);

	while ($run_post=mysql_fetch_array($run_query)) {

		$post_id =$run_post['post_id'];
		$usrnme =$run_post['usrname'];
		$img =$run_post['images'];
		$ttl =$run_post['title'];
		$tm =$run_post['Time'];


		$squery= mysql_query("select * from user_data where username='$usrnme'");
	    $frow= mysql_fetch_array($squery);
	    $ufn=  $frow["F_name"];
	    $pimg=  $frow["proimg"];


	    //#fetch data 4 comments
	    


		// display post

		

		echo "<br><div id='pst'>
		<p class='uin' ><img class='upimg' src='userfle/$pimg' width='25' height='25'>&nbsp<a href='otherup?user=$usrnme'><b>$ufn</b></a></p>
		<p class='uttl'>$ttl</p>
		<p><img class='cimg' src='userfle/$img'></p>
		<a href='fulpost?pst_id=$post_id'><input type='button' class='cmtbtn' value='View/Write Comment'></a>

		</div>



		";
		
		
	}


	

}




# comment function

function flpstacmt(){

if(isset($_GET['pst_id'])){

	$p_id=$_GET['pst_id'];

# show post

	$pcquery= mysql_query("select * from post_data where post_id='$p_id'");
	$fpcrow= mysql_fetch_array($pcquery);
	

		$pstid= $fpcrow['post_id'];
		$usrnme =$fpcrow['usrname'];
		$img =$fpcrow['images'];
		$ttl =$fpcrow['title'];
		$tm =$fpcrow['Time'];

#show user details

		$squery= mysql_query("select * from user_data where username='$usrnme'");
	    $frow= mysql_fetch_array($squery);
	    $ufn=  $frow["F_name"];
	    $pimg=  $frow["proimg"];

	    # fetch data 4 comment

	    $usrc = $_SESSION['usrnm'];

	    $getdata = "select * from user_data where username='$usrc'";
	    $runf = mysql_query($getdata);
	    $rowf = mysql_fetch_array($runf);

	    $cusr_id = $rowf['Id'];
	    $cusrnm = $rowf['username'];
	    $usrpfl = $rowf['proimg'];




	    #full post display

	    echo "
	    <br><div id='pst'>
		<p class='uin' ><img class='upimg' src='userfle/$pimg' width='25' height='25'>&nbsp<a href='otherup?user=$usrnme'><b>$ufn</b></a></p>
		<p class='uttl'>$ttl</p>
		<p><img class='cimg' src='userfle/$img'></p>

		</div>

		";


		if(isset($_POST['csbt'])){
			$cmnt = $_POST['tycmt'];

			mysql_query("insert into comment (post_id,usr_id,comment,commentor,data) VALUES ('$pstid','$cusr_id','$cmnt','$cusrnm',NOW())");

		}

		echo "

		<div class='cmntdiv'>

		<form method='post' class='cmtf'>
			<input type='text' maxlength='130' name='tycmt' placeholder='Leave your comment' class='cmtarea' required><input type='submit' class='cmtsbt' name='csbt' value=''>
			</form>

		</div>



		";
		include('cmnts.php');

	}
}








# user profile function

function ohrup(){

if(isset($_GET['user'])){

	$usr_nm=$_GET['user'];

	$squery= mysql_query("select * from user_data where username='$usr_nm'");
	$frow= mysql_fetch_array($squery);
	 $ufn=  $frow["F_name"];
	 $un=  $frow["username"];
	 $ue=  $frow["Email"];
	 $id= $frow['Id'];
	 //$up=  $frow["Phone"];
	 $ud=  $frow["day"];
	 $um=  $frow["month"];
	 $uy=  $frow["year"];
	 $us=  $frow["sex"];
	 $pi= $frow['proimg'];





	 echo "




	 <div class='container usrpflfld'>
	
	<div class='container-fluid subcon'>
		<div class='profile_ttl'>Profile</div>

		<div class='row'>
		
			<div class='col-sm-4'>
				<div class='bckclr1'>
				
					<div class='shoimg'>
						
						<img src='userfle/$pi' class='proimg'>
						<div class='usrnm'>
							<span class='unmsho'>$ufn</span>
						</div>

					</div>


					</div>

					<div class='upldimg'>
								
						<a href='sdmsg?usr_id=$id'><input type='button' class='frmarea' value='Send message'></a>
								

						</div>


			</div>

			<div class='col-sm-8'>
				<div class='usrdtldv'>
				<div class='usrdtls'>
					
					<p><span class='qus qusans'>Username :</span><span class='ans qusans'>$un</span></p><hr>

					<p><span class='qus qusans'>Email :</span><span class='ans qusans'>$ue</span></p><hr>


					<p><span class='qus qusans'>Dob :</span><span class='ans qusans'>$ud / $um / $uy</span></p><hr>

					<p><span class='qus qusans'>Gender :</span><span class='ans qusans'>$us</span></p>

				</div>

				</div>

			</div>

		</div>


	</div>


</div>






	 ";


}

}

# showing the message

function shomsg(){

$usridnm = $_SESSION['usrnm'];
$squery= mysql_query("select * from user_data where username='$usridnm'");
	$frow= mysql_fetch_array($squery);
	$ssn_usr_id= $frow['Id'];
	$usr_nm= $frow['F_name'];
	$ssn_usr_img= $frow['proimg'];



if(isset($_GET['usr_id'])){

	$usr_id=$_GET['usr_id'];


$mquery= mysql_query("select * from Messages where snd_id IN ('$usr_id','$ssn_usr_id') AND rcve_id IN ('$ssn_usr_id','$usr_id') ORDER by 1 DESC");

	while($frow= mysql_fetch_array($mquery)){
	 $chtmsg=  $frow["chat_msg"];
	 $dte=  $frow["date"];
	 $si=  $frow["snd_id"];
	 $ri=  $frow["rcve_id"];

	 /*

}
	 	$mqueryto= mysql_query("select * from Messages where snd_id='$ssn_usr_id' AND rcve_id='$usr_id' ORDER by 2 DESC");
	 		while($mrow= mysql_fetch_array($mqueryto)){
	 		$chtmsgto=  $mrow["chat_msg"];
	 		$dteto=  $mrow["date"];

}
*/
	 $squery= mysql_query("select * from user_data where Id='$si'");
	$frow= mysql_fetch_array($squery);
	 $ufn=  $frow["F_name"];
	 $un=  $frow["username"];
	 $img= $frow['proimg'];


	 echo "

	 <div class=''>

		<form method='post' class='msgsdata'>
		<p class='msgarea'>$chtmsg <br><font style='size: 2px; color: #A6A6A6;'>$dte <b>Send By</b> ($ufn)</font> </P>
			
		

			</form>

		</div>


	 ";
	 }
	
/*
<img class='mpimg' src='userfle/$img' width='25' height='25'>
	$mqueryto= mysql_query("select * from Messages where snd_id='$ssn_usr_id' AND rcve_id='$usr_id' ORDER by 1 DESC");
	 		while($mrow= mysql_fetch_array($mqueryto)){
	 		$chtmsgto=  $mrow["chat_msg"];
	 		$dteto=  $mrow["date"];


	 		echo "
	 			<p class='msgarea2'>$chtmsgto</P>

	 		";
	 	}
*/
	}
}



#show users chat_list


function chatlist(){

	$usridnm = $_SESSION['usrnm'];
$squery= mysql_query("select * from user_data where username='$usridnm'");
	$frow= mysql_fetch_array($squery);
	$ssn_usr_id= $frow['Id'];
	$usr_nm= $frow['F_name'];
	$ssn_usr_img= $frow['proimg'];


	$viewmsg = mysql_query("select distinct snd_id from Messages where rcve_id='$ssn_usr_id' ORDER by 1 DESC");
	while($run_msg=mysql_fetch_array($viewmsg)){
	$rid =$run_msg["snd_id"];
		
		
		$viewchat= mysql_query("select * from user_data where Id='$rid'");
			#$start_chat = mysql_query($viewchat);
		$run_chat=mysql_fetch_array($viewchat);
		$id =$run_chat['Id'];
		$usrnme =$run_chat['username'];
		$img =$run_chat['proimg'];
		$name =$run_chat['F_name'];


		$cquery= "select * from Messages where snd_id='$id' AND rcve_id='$ssn_usr_id' AND rdng='no'";
	    $c_ur_msg =mysql_query($cquery);
	 	$count =mysql_num_rows($c_ur_msg);

	    //#fetch data 4 comments
	    


		// display post

		echo "
					<div class='lstcht'>


						<p><img src='userfle/$img' class='msg_cht_img' height='24' width='24'><a href='otherup?user=$usrnme'><font class='snicht'><b>$name</b></font></a> <font class='urdm'></font><font class='curm'><b>$count</b></font>						<a href='sdmsg?usr_id=$id'><button class='btn btn-success' name='v_s_m'>Reply</button><a></p>



						</div><br>






		";
		
		
	}


	

}



#sho when search someone


function srchusr(){


	$usridnm = $_SESSION['usrnm'];
$squery= mysql_query("select * from user_data where username='$usridnm'");
	$frow= mysql_fetch_array($squery);
	$ssn_usr_id= $frow['Id'];
	$usr_nm= $frow['F_name'];
	$ssn_usr_img= $frow['proimg'];



	if(isset($_GET['search'])){

		$src_query= $_GET['srcbox'];
	}

	$get_srch="select * from user_data where username like '%$src_query%' OR F_name like '%$src_query%'";

	$run_query=mysql_query($get_srch);

	while ($run_post=mysql_fetch_array($run_query)) {

		$id =$run_post['Id'];
		$u_nm =$run_post['username'];
		$img =$run_post['proimg'];
		$nm =$run_post['F_name'];
		


		$squery= mysql_query("select * from user_data where username='$usrnme'");
	    $frow= mysql_fetch_array($squery);
	    $ufn=  $frow["F_name"];
	    $pimg=  $frow["proimg"];


	    //#fetch data 4 comments
	    


		// display post

		

		echo "
					<div class='srcfnd'>


						<img src='userfle/$img' class='msg_cht_img' height='24' width='24'><a href='otherup?user=$u_nm'><font class='snicht'><b>$nm</b></font></a>
						<a href='sdmsg?usr_id=$id'><button class='btn btn-success' name='v_s_m'>Reply</button><a>



						</div>
		



		";
		
	}


	

}



 ?>