<?php
include_once 'dbconnect.php';
/*
$error="not connect";
$user="root";
$pass='harshi';
$db='telem1';
$dname=@$_POST['dname'];
$link=mysqli_connect('localhost',$user,$pass,$db) or die($error);
mysqli_select_db($link,$db) or die($error);*/
/*$sql="select * from patient where email = '$email' and pass = '$pass'";

if (mysqli_query($link, $sql)) {
    header("Location: appoint.html");
} else {
      die("its an error".mysqli_error($link));
}*/
$v=1;
			$res= "SELECT * FROM appointment WHERE dname='$dname'" ;
			if ($result=mysqli_query($link, $res)) {
				$count = mysqli_num_rows($result);
			while ($row = mysqli_fetch_assoc($result)) {
				
				echo "$v" ;
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
			
}		}	
			 else {
				$errMSG = "Incorrect Credentials, Try again...";
			}
				
		

?>