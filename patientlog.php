<?php
$error="not connect";
/*$user="root";
$pass='mysql';
$db='telem1';*/
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
$link=mysqli_connect($_SERVER['RDS_HOSTNAME'], $_SERVER['RDS_USERNAME'], $_SERVER['RDS_PASSWORD'], $_SERVER['RDS_DB_NAME'], $_SERVER['RDS_PORT']);
*/


$name=@$_POST['pname'];
$email=@$_POST['email'];
$password=@$_POST['password'];

$Age=@$_POST['age'];
$gender=@$_POST['gender'];
$PNo=@$_POST['tno'];
$Address=@$_POST['address'];
$Bgrp=@$_POST['bgrp'];
$weight=@$_POST['weight'];
$height=@$_POST['height'];

$sql="INSERT INTO patient (pname,email,password,tno,age,bgrp,address,weight,height,gender) VALUES ('$name','$email','$password',$PNo,'$Age','$Bgrp','$Address','$weight','$height','$gender')";

if (mysqli_query($link, $sql)) {
   echo "YOU'RE IN ";
} else {
     die("its an error".mysqli_error($link));
}


?>