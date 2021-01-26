<?php
session_start(); 
include_once './db-connectgolf.php';

$email = $_POST['email'];
$password = $_POST['password'];


$sql = "SELECT * FROM admin where EmailAdmin = '$email' and KataLaluan = '$password'";
$result = mysqli_query($con,$sql);
$count = mysqli_num_rows($result);

if($count == 1){
	while($row = mysqli_fetch_array($result)){

		$_SESSION['user_id'] = $row['IdAdmin'];
		$_SESSION['user_name'] = $row['NamaAdmin'];				
        $_SESSION['user_email'] = $row['EmailAdmin'];

        echo"<script>alert('LOGIN SUCCESSFUL');document.location.href='home.php';</script>";
	}
}else{
    echo"<script>alert('WRONG EMAIL & PASSWORD');document.location.href='index.php';</script>";

}
