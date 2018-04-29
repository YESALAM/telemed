<?php
$errora="not connect";
	ob_start();
	session_start();
	require_once 'dbconnect.php';
	/*
$dbhost = $_SERVER['RDS_HOSTNAME'];
$dbport = $_SERVER['RDS_PORT'];
$dbname = $_SERVER['RDS_DB_NAME'];
$charset = 'utf8' ;

$dsn = "mysql:host={$dbhost};port={$dbport};dbname={$dbname};charset={$charset}";
$username = $_SERVER['RDS_USERNAME'];
$password = $_SERVER['RDS_PASSWORD'];

$pdo = new PDO($dsn, $username, $password);



$link = mysqli_connect($_SERVER['RDS_HOSTNAME'], $_SERVER['RDS_USERNAME'], $_SERVER['RDS_PASSWORD'], $_SERVER['RDS_DB_NAME'], $_SERVER['RDS_PORT']);

mysqli_select_db($link,$dbname) or die($errora);
*/


	// it will never let you open index(login) page if session is set

	$error = false;
	
	if( isset($_POST['btn-login']) ) {	
		
		// prevent sql injections/ clear user invalid inputs
		$email = trim($_POST['email']);
		$email = strip_tags($email);
		$email = htmlspecialchars($email);
		
		
		if(empty($email)){
			$error = true;
			$emailError = "Please enter your email address.";
		} else if ( !fil
		
		
		
		
		ter_var($email,FILTER_VALIDATE_EMAIL) ) {
			$error = true;
			$emailError = "Please enter valid email address.";
		}
		
		
		
		// if there's no error, continue to login
		if (!$error) {
			$v=1;
			
		
			$res= mysql_query("SELECT * FROM appointment WHERE appointment.dname=doctor.dname") ;
				$count = mysql_num_rows($res);
			while ($row = mysql_fetch_assoc($res)) {
				
				echo "$v)" ;
				$v=$v + 1;
  echo $row['dat'] ;
  echo "<br>";
  echo $row['email'];
  echo "<br>";
  echo $row['tim'];
  echo "<br>";
  echo $row['pname'];
  echo "<br>";
			echo $row['special'];
			echo "<br>";
			echo "<br>";
			}
			
			
		
			if($count == 0)
			{
				echo "No bookings ";
			
}
			
			
				
			} else {
				$errMSG = "Incorrect Credentials, Try again...";
			}
				
		}
		














<!DOCTYPE html>
<html lang="en">
<head>
<title>Telemedicine | Login</title>
<meta charset="utf-8">
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" href="css/style.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/sForm.js"></script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->
<img src="images/the.jpg" alt="doc" align ="justify" width="1550" height="400"><br><br>

</head>
<body>
<div class="main">
  <header>
    <div class="container_12">
      <div class="grid_12">
        <h1><a href="index.html"><img src="images/logo.png" alt=""></a></h1>
        <div class="menu_block">
          <nav>
           <ul class="sf-menu">
                   <li ><a href="app.html">My Appointments</a></li>
              <li class="with_ul"><a href="customer.html">View Customer</a>

              </li>
              
		
              
             
              
              <li><a href="index.html">LogOut</a>
			   
               </li>
            </ul>
          </nav>
          <div class="clear"></div>
        </div>
        <div class="clear"></div>
      </div>
    </div>
  </header>
 <center>
<FOnt size="100">
<BR><BR>


  
      <div class="clear"></div>
      <div class="bottom_block">
        <div class="grid_6">
          <h3>Follow Us</h3>
          <div class="socials"> <a href="#"></a> <a href="#"></a> <a href="#"></a> </div>
          <nav>
            <ul>
               <li><a href="index.html">Home</a></li>
              <li><a href="about-us.html">Corporate</a></li>
              <li class="current"><a href="menu.html">Patient Care</a></li>
            
              <li><a href="news.html">Excellence</a></li>
          
              <li ><a href="contacts.html">Contacts</a></li>
            </ul>
          </nav>
        </div>
        <div class="grid_6">
          <h3>Email Updates</h3>
          <p class="col1">Join our digital mailing list and get news<br>
            deals and be first to know about events</p>
          <form id="newsletter" action="#">
            <div class="success">Your subscribe request has been sent!</div>
            <label class="email">
              <input type="email" value="Enter e-mail address" >
              <a href="#" class="btn" data-type="submit">subscribe</a> <span class="error">*This is not a valid email address.</span> </label>
          </form>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>
<footer>
  <div class="container_12">
    <div class="grid_12"> Medicare Telemedicine | <a href="#">Privacy Policy</a> | Design by: <a href="http://www.templatemonster.com/">Manit</a> </div>
    <div class="clear"></div>
  </div>
</footer>
</body>
</html>