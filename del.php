<?php
    include 'db-connectgolf.php';

    $sql = "DELETE FROM tempahan WHERE Id=".$_GET['id'];
    $result = mysqli_query($con,$sql);
    header('Location: list.php? msg=User Deleted!');

?>