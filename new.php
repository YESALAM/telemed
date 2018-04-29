<?php
	ob_start();
	session_start();
	
	include_once 'tele.php';

	$error = false;
echo "ki";
	if ( isset($_POST['btn-signup']) ) {
		echo"don";
		// clean user inputs to prevent sql injections
		$name = trim($_POST['pname']);
		$name = strip_tags($pname);
		$name = htmlspecialchars($pname);
		
		$email = trim($_POST['email']);
		$email = strip_tags($email);
		$email = htmlspecialchars($email);
		
		$pass = trim($_POST['password']);
		$pass = strip_tags($password);
		$pass = htmlspecialchars($password);
		
		$age = trim($_POST['age']);
		$age= strip_tags($age);
		$age = htmlspecialchars($age);
		
		$gender = trim($_POST['gender']);
		$gender = strip_tags($gender);
		$gender = htmlspecialchars($gender);
		
		$tno = trim($_POST['tno']);
		$tno = strip_tags($tno);
		$tno = htmlspecialchars($tno);
		
		$bgrp = trim($_POST['bgrp']);
		$bgrp = strip_tags($bgrp);
		$bgrp = htmlspecialchars($bgrp);
		
		$address = trim($_POST['address']);
		$address = strip_tags($address);
		$address = htmlspecialchars($address);
		
		$weight = trim($_POST['weight']);
		$weight = strip_tags($weight);
		$weight = htmlspecialchars($weight);
		
		$height = trim($_POST['height']);
		$height = strip_tags($height);
		$height = htmlspecialchars($height);
		
		
		
	
		
		
		echo"HI";
		// if there's no error, continue to signup
		if( !$error ) {
			
			$query = "INSERT INTO patient(name,email,pass,age,gender,tno,bgrp,address,weight,height,) VALUES('$pname','$email','$password','$age','$gender','$tno','$bgrp','$address','$weight','$height')";
			$res = mysql_query($query);
				
			if ($res) {
				$errTyp = "success";
				$errMSG = "Successfully registered, you may login now";
				
			} else {
				$errTyp = "danger";
				$errMSG = "Something went wrong, try again later...";	
			}	
				
		}
		
		
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Telemedicine | News</title>
<meta charset="utf-8">
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" href="css/style.css">

  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/styl.css">

<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/sForm.js"></script>

    <script  src="js/indexs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->
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
               <li><a href="index.html">Home</a></li>
              <li class="with_ul"><a href="coe.html">Centres Of Excellence</a>
			  <ul>
                  <li><a href="ortho.html"> Orthopeadology</a></li>
                  <li><a href="gynea.html">Gastroenterology</a></li>
				  <li><a href="optho.html">Nephrology</a></li>
                  <li><a href="neuro.html">Neurology</a></li>
				  <li><a href="emergen.html">Emergency</a></li>
				  <li><a href="basicser.html">Basic Services</a></li>
                </ul>
              </li>
               <li class="current"><a href="index.html">Patient Care</a>
			    <ul>
                  <li><a href="findadoctor.html">Find a doctor</a></li>
                  <li><a href="serviceexcellence.html">service excellence</a></li>
                  <li><a href="login.html">Patient information guide</a></li>
                  
                  <li><a href="sign.html">Patient Registration</a></li>
                  <li><a href="#">Pay online</a></li>
                </ul>
              <li><a href="index.html">Corporate</a>
			  <ul>
                  <li><a href="ourdoc.html"> Our Doctors</a></li>
                  <li><a href="management.html">Management</a></li>
                  
                </ul></li>
             
              
              <li><a href="contact.html">Contact_Us</a>
			   
               <ul>
                 
                  <li><a href="#">consult doctor online</a></li>
                  <li><a href="appoint.html">book appointment</a></li>
                </ul></li>
          </nav>
          <div class="clear"></div>
        </div>
        <div class="clear"></div>
      </div>
    </div>
  </header>
 <center>

  <div class="form">
      
      <ul >
        <li class="tab active" align="center"><a href="#signup">Sign Up</a></li>
        
      </ul>
      
      
        <div id="signup">   
          <h1>Sign Up for Free</h1>
          
          <form  method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" />
            </div>
        
           <br>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>
          
		  <div class="field-wrap">
            <label>
              Age<span class="req">*</span>
            </label>
            <input type="text"required autocomplete="off"/>
          </div>
		  
		  <div class="field-wrap">
            <label>
              Gender<span class="req">*</span>
            </label>
            <input type="text"required autocomplete="off"/>
          </div>
           <div class="field-wrap">
            <label>
	
              Telephone No<span class="req">*</span>
            </label>
            <input type="text"required autocomplete="off"/>
          </div>
		   <div class="field-wrap">
            <label>
              Blood Group<span class="req">*</span>
            </label>
            <input type="text"required autocomplete="off"/>
          </div>
           <div class="field-wrap">
            <label>
              Address<span class="req">*</span>
            </label>
            <input type="text"required autocomplete="off"/>
          </div>
           <div class="field-wrap">
            <label>
              Weight<span class="req">*</span>
            </label>
            <input type="text"required autocomplete="off"/>
          </div>
           <div class="field-wrap">
            <label>
              Height<span class="req">*</span>
            </label>
            <input type="text"required autocomplete="off"/>
          </div>
           
          
          <button type="submit" name="button-signup"/>Get Started</button>
          
          </form>

        
        
        
      
      
</div> <!-- /form -->
  

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