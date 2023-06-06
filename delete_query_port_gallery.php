<?php
include 'dbconfig.php';

$id=$_GET['id'];

$sql = "DELETE FROM port_gallery WHERE id=$id"; 

if(mysqli_query($dbconnect, $sql)){
    header('Location: port_gallery.php');
}


?>