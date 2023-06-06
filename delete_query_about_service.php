<?php
include 'dbconfig.php';

$id=$_GET['id'];

$sql = "DELETE FROM about_service WHERE id=$id"; 

if(mysqli_query($dbconnect, $sql)){
    header('Location: about_service.php');
}


?>