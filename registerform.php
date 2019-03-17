<?php

include_once('database.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

	<style type="text/css">

  /*Sign up pop up */
  


/*end of sign up popup */
  body{
    background-image: url(img/bck00.jpg);
    background-repeat: no-repeat;
    background-position: center;
  }
		
	#gndrs{
			margin-top: 6px;
			margin-bottom: 6px;
	}

	.frmarea{
		margin-top: 8px;
	}

  .header{
    opacity: 1;
  }
  .frm{
    opacity: 1;
    background-color: #E4E7F1;
  }

  .frm{
    width: 100%;
    border: none;
    background-color: white;
  }

  .lsnup{
    margin-left: 28%;
  }

  h1{
    color: white;
    text-shadow: 3px 3px #363636;
    text-align: center;
    margin-top: 10%;
    font-family: "Arial Black", Gadget, sans-serif;
  }
  h2{color: white; text-align: center; text-shadow: 2px 2px #363636;}

	@media(min-width: 280px) and (max-width: 520px){
		#gndrs{
			margin-left: 8% !important;
		}
    body{
    background-color: #E9EBEE !important; 
    }

   .modal-con {
    width: 100%;
}

  .lsnup{
    margin-left: 20%;
  }
  .lbtn{
    width: 40%;
    margin-bottom: 0px;
  }
  h1{
    margin-top: 2px;
    color: black;
    text-shadow: 2px 2px white;
  }
  h2{
    color: black;
    text-shadow: 3px 3px white;
  }

	}

	</style>



<body background="img\bcgnds.jpg">

  <h1><font size="80"><b>Find your inspiration.</b></font></h1>
  <h2><font style="font-size:22px;">It's free and always will be. Join the Ommbsp community,<br> Come for what you love. Stay for what you discover.
</font></h2>


 <center><button id="myBtn"  class="btn btn-outline-danger btn1" data-toggle="modal" data-target="#myModal">SIGNUP NOW</button></center>

<div class="container">

  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h3 class="modal-title">Sign Up</h3><button type="button" class="btn btn-outline-danger" data-dismiss="modal">X</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          

             

            <form class="frm" method="post" onsubmit="return false;" id="myForm">
    <img src="img/uav.jpg" height="150" width="150" class="lsnup">
    <p style="color: red;" class="err"><?php if (isset($msg)) { echo $msg;} ?></p>
    <p style="color: green;" class="err"><?php if (isset($dmsg)) { echo $dmsg;} ?></p>
      
      <input type="text" class="frmarea" name="f_name" value="<?php if(isset($fn)) {echo $fn;}  ?>" maxlength="25" placeholder="Enter your full name">
    
    
      
      <input type="text" class="frmarea" maxlength="10" name="username" value="<?php if(isset($user)) {echo $user;}  ?>" placeholder="Enter Username" >
    
    
      
      <input type="email" class="frmarea" maxlength="34" name="Email" value="<?php if(isset($eml)) {echo $eml;}  ?>" placeholder="Enter your email">
    
    
      
      <input type="password" class="frmarea" maxlength="20" name="password" placeholder="Enter Password"> 
    

    <h3><b>Date of birth</b></h3>
      
      <select name="day"> <option>01 <option>02 <option>03 <option>04 <option>05 <option>06 <option>07 <option>08 <option>09 <option>10 <option>11 <option>12 <option>13 <option>14 <option>15 <option>16 <option>17 <option>18 <option>19 <option>20 <option>21 <option>22 <option>23 <option>24 <option>25 <option>26 <option>27 <option>28 <option>29 <option>30 <option>31 </select>


  <select name="month"> <option>Jan <option>Feb <option>Mar <option>Apr <option>May <option>Jun <option>Jul <option>Aug <option>Sep <option>Oct <option>Nov <option>Dec </select>
  <select name="Year" > <option>2018 <option>2017 <option>2016 <option>2015 <option>2014 <option>2013 <option>2012 <option>2011 <option>2010 <option>2009 <option>2008 <option>2007 <option>2006 <option>2005 <option>2004 <option>2003 <option>2002 <option>2001 <option>2000 <option>1999 <option>1998 <option>1997 <option>1996 <option>1995 <option>1994 <option>1993 <option>1992 <option>1991 <option>1990 <option>1989 <option>1988 <option>1987 <option>1986 <option>1985 <option>1984 <option>1983 <option>1982 <option>1981 <option>1980 <option>1979 <option>1978 <option>1977 <option>1976 <option>1975 <option>1974 <option>1973 <option>1972 <option>1971 <option>1970 <option>1969 <option>1968 <option>1967 <option>1966 <option>1965 <option>1964 <option>1963 <option>1962 <option>1961 <option>1960 <option>1959 <option>1958 <option>1957 <option>1956 <option>1955 <option>1954 <option>1953 <option>1952 <option>1951 <option>1950 <option>1949 <option>1948 <option>1947 <option>1946 <option>1945 <option>1944 <option>1943 <option>1942 <option>1941 <option>1940 <option>1939 <option>1938 <option>1937 <option>1936 <option>1935 <option>1934 <option>1933 <option>1932 <option>1931 <option>1930 <option>1929 <option>1928 <option>1927 <option>1926 <option>1925 <option>1924 <option>1923 <option>1922 <option>1921 <option>1920 </select>

  <div class="gdr" id="gndrs">

  <b>Gender</b>&nbsp &nbsp &nbsp<input type="radio" name="sex" value="male"> &nbsp <img src="img\male4.png"> &nbsp <input type="radio" name="sex" value="female"> &nbsp <img src="img\female3.png">

    </div>
    <!--

    <div class="gdr">

    <b>Gender</b>&nbsp &nbsp &nbsp<select name="sex">
      
        <option>Mele
          <option>Femele
    </select>
      </div>
    -->
    <center><input type="submit"  name="Siup" class="btn btn-outline-success btn2" value=" Sign up "></center>
    
  </form>



        </div>
      
        
      </div>
    </div>
  </div>
  
</div>

   
<!-- Script code needs
 $( "#myModal" ).submit(function( event ) {
  event.preventDefault();
  event.
});

same uper

$('#myModal').click(function (e) {
    // custom handling here
    e.preventDefault();
});

Same work

$('#myModal').click(function () {
    // custom handling here
    return false;
});



 -->


</body>
</html>