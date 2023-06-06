<?php
include 'dbconfig.php';

$id=$_GET['id'];

$sql = "DELETE FROM service_part WHERE id=$id"; 

if(mysqli_query($dbconnect, $sql)){
    header('Location: service_part.php');
}


?>