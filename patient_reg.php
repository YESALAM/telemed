<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$error="not connect";
/*$user="root";
$pass='root';
$db='telem1';
*/
include_once 'dbconnect.php';

/*
$dbhost = $_SERVER['RDS_HOSTNAME'];
$dbport = $_SERVER['RDS_PORT'];
$dbname = $_SERVER['RDS_DB_NAME'];
$charset = 'utf8' ;

$dsn = "mysql:host={$dbhost};port={$dbport};dbname={$dbname};charset={$charset}";
$username = $_SERVER['RDS_USERNAME'];
$password = $_SERVER['RDS_PASSWORD'];

$pdo = new PDO($dsn, $username, $password);



*/


$pname=@$_POST['pname'];
$email=@$_POST['email'];
$pass=@$_POST['pass'];

$age=@$_POST['age'];
$gender=@$_POST['gender'];
$tno=@$_POST['tno'];
$bgrp=@$_POST['bgrp'];
$address=@$_POST['address'];
$weight=@$_POST['weight'];
$height=@$_POST['height'];

/*
$link = mysqli_connect($_SERVER['RDS_HOSTNAME'], $_SERVER['RDS_USERNAME'], $_SERVER['RDS_PASSWORD'], $_SERVER['RDS_DB_NAME'], $_SERVER['RDS_PORT']);

mysqli_select_db($link,$dbname) or die($error);
*/
$sql="INSERT INTO patient(pname,email,pass,age,gender,tno,bgrp,address,weight,height) VALUES ('$pname','$email','$pass','$age','$gender','$tno','$bgrp','$address','$weight','$height')";

if (mysqli_query($link, $sql)) {
    echo "YOU'RE IN ";
} else {
      die("its an error".mysqli_error($link));
}


?>