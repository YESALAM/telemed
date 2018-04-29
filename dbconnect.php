<?php

	// this will avoid mysql_connect() deprecation error.
	error_reporting( ~E_DEPRECATED & ~E_NOTICE );
	// but I strongly suggest you to use PDO or MySQLi.
	
	/*define('DBHOST', 'localhost');
	define('DBUSER', 'root');
	define('DBPASS', 'root');
	define('DBNAME', 'telem1');
	
	$conn = mysql_connect(DBHOST,DBUSER,DBPASS);
	$dbcon = mysql_select_db(DBNAME);*/

	$error="not connect";
$dbhost = 'localhost';
$dbport = '3306';
$dbname = 'telem1';
$charset = 'utf8' ;

$dsn = "mysql:host={$dbhost};port={$dbport};dbname={$dbname};charset={$charset}";
$username = 'root';
$password = '';

$pdo = new PDO($dsn, $username, $password);


$link = mysqli_connect($dbhost, $username, $password, $dbname, $dbport);

mysqli_select_db($link,$dbname) or die($error);


	
	if ( !$link ) {
		die("Connection failed : " . mysql_error());

		echo "Not working";
	}
	//else echo "working";
	
?>






















































