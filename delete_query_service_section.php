<?php
include 'dbconfig.php';

$id=$_GET['id'];

$sql = "DELETE FROM service_section WHERE id=$id"; 

if(mysqli_query($dbconnect, $sql)){
    header('Location: service_section.php');
}


?>