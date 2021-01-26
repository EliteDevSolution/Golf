<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$db="golf";

$con = mysqli_connect($servername, $username, $password, $db);


if(!$con){
	die('connection error');
}
?>