<?php
include_once 'dbconnect.php';
/*$error="not connect";
$user="root";
$pass='harshi';
$db='telem1';*/
/*
$dbhost = $_SERVER['RDS_HOSTNAME'];
$dbport = $_SERVER['RDS_PORT'];
$dbname = $_SERVER['RDS_DB_NAME'];
$charset = 'utf8' ;

$dsn = "mysql:host={$dbhost};port={$dbport};dbname={$dbname};charset={$charset}";
$username = $_SERVER['RDS_USERNAME'];
$password = $_SERVER['RDS_PASSWORD'];
$link = mysqli_connect($_SERVER['RDS_HOSTNAME'], $_SERVER['RDS_USERNAME'], $_SERVER['RDS_PASSWORD'], $_SERVER['RDS_DB_NAME'], $_SERVER['RDS_PORT']);
//$link=mysqli_connect('localhost',$user,$pass,$db) or die($error);
mysqli_select_db($link,$db) or die($error);
$pdo = new PDO($dsn, $username, $password);

*/
$email=@$_POST['email'];


/*$sql="select * from patient where email = '$email' and pass = '$pass'";

if (mysqli_query($link, $sql)) {
    header("Location: appoint.html");
} else {
      die("its an error".mysqli_error($link));
}*/
$v=1;
			$res= "SELECT * FROM appointment WHERE email='$email'" ;
			if ($result=mysqli_query($link, $res)) {
				$count = mysqli_num_rows($result);
			while ($row = mysqli_fetch_assoc($result)) {
				
				echo "$v" ;<br>
				$v=$v + 1;
  echo $row['dat'] ;
  echo "<br>";
  echo $row['email'];
  echo "<br>";
  echo $row['tim'];
  echo "<br>";
  echo $row['dname'];
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