<?php
include_once 'dbconnect.php';
$error="not connect";
/*$user="newrds";
$pass='asdfghjkl';
$db='ebdb';*/
/*
$dbhost = $_SERVER['RDS_HOSTNAME'];
$dbport = $_SERVER['RDS_PORT'];
$dbname = $_SERVER['RDS_DB_NAME'];
$charset = 'utf8' ;

$dsn = "mysql:host={$dbhost};port={$dbport};dbname={$dbname};charset={$charset}";
$username = $_SERVER['RDS_USERNAME'];
$password = $_SERVER['RDS_PASSWORD'];
$link = mysqli_connect($_SERVER['RDS_HOSTNAME'], $_SERVER['RDS_USERNAME'], $_SERVER['RDS_PASSWORD'], $_SERVER['RDS_DB_NAME'], $_SERVER['RDS_PORT']);
$pdo = new PDO($dsn, $username, $password);
mysqli_select_db($link,$dbname) or die($error);
*/

$category=@$_POST['special'];
$email=@$_POST['email'];
$doctor=@$_POST['dname'];

$dat=@$_POST['dat'];
$slot=@$_POST['tim'];


//$link=mysqli_connect('localhost',$user,$pass,$db) or die($error);







		$query="SELECT * FROM appointment WHERE dat='$dat' and tim='$slot'";
			$row=mysqli_query($link,$query) or die(mysqli_error($link));
			$count = mysqli_num_rows($row); // if uname/pass correct it returns must be 1 row
			if( $count == 1) {
				  header("Location: slot.html");}
            else {
				$sql="INSERT INTO appointment(special,dname,dat,email,tim) VALUES ('$category','$doctor','$dat','$email','$slot')";
				

if (mysqli_query($link, $sql)) {
 header("Location: booking.html");
} else {
      die("its an error".mysqli_error($link));}}



?>