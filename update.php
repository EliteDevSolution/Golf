<?php
$con=mysqli_connect("localhost","root","","golf");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

if(isset($_POST['Id'])){
	$a = $_POST['user_email'];
	$b = $_POST['padanggolf'];
	$c = $_POST['masa'];
	$d = $_POST['tarikh'];

	$sql = "UPDATE customer SET name='$b',email='$c' WHERE Id=$a";
	$result = mysqli_query($con,$sql);

}

echo "<script>document.location.href='list.php?msg=Updated Users'</script>";
?>