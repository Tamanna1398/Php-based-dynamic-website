<?php
include 'dbconfig.php';

$id=$_GET['id'];

$sql = "DELETE FROM service_gallery WHERE id=$id"; 

if(mysqli_query($dbconnect, $sql)){
    header('Location: service_gallery.php');
}


?>