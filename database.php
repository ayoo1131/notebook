<?php

echo 'connecting to MySQL';
echo '<br>';

$user = 'ayoo1131';
$password = 'Dum57Occ**';
$database = 'users';
$table = 'notebook';
$servername = '18.219.29.36';

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
$mysqli = new mysqli($servername, $user, $password, $database);

if($mysqli->connect_errno) 
{
	printf("Connection Failed: %s\n", $mysqli->connect_error);
	exit;
}

echo 'connection to MySQL successful';
echo '<br>';
?>
