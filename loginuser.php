<?php
session_start();
include_once './db-connectgolf.php';

$email = $_POST['email'];
$password = $_POST['password'];


$sql = "SELECT * FROM pelanggan where Email = '$email' and PKataLaluan = '$password'";
$result = mysqli_query($con,$sql);
$count = mysqli_num_rows($result);

if($count == 1){
	while($row = mysqli_fetch_array($result)){

		session_start();
		$_SESSION['user_id'] = $row['IdPelanggan'];
		$_SESSION['user_name'] = $row['Nama'];				
        $_SESSION['user_email'] = $row['Email'];

        echo"<script>alert('Succesfully Login ');document.location.href='homeuser.php';</script>";
	}
}else{
    echo"<script>alert('WRONG EMAIL AND PASSWORD ');document.location.href='indexuser.php';</script>";

}