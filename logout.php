<?php
session_start();
$_SESSION['user_name'] = '';
session_destroy();
echo "<script>document.location.href='index.php'</script>";

?>