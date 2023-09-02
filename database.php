<?php

$user = 'ayoo1131';
$sql_password = 'Dum57Occ**';
$database = 'notebook';
$table = 'users';
$servername = 'localhost';

//PDO
/*
try
{
	$db = new PDO("mysql:host=$servername; dbname=$database", $user, $password );
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "Connected successfully";
}

catch(PDOException $e)
{
	echo "Connection failed: " . $e->getMessage();
}
*/

//MySQLi
$mysqli = new mysqli($servername, $user, $sql_password, $database);

if($mysqli->connect_errno) 
{
	printf("Connection Failed: %s\n", $mysqli->connect_error);
	exit;
}
?>
