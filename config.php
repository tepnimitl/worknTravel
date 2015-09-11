<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "allthewa_data";

$connection = new mysqli($servername, $username, $password, $dbname);
//$connection->query("set names utf8");
mysqli_query($connection, "SET NAMES UTF8");
if ($connection->connect_error) {
	die("Connection Failed: " . $connection->connect_error);
} else {
//	echo "it works";
}
?>