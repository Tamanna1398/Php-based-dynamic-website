<?php
include 'dbconfig.php';

$id=$_GET['id'];

$sql = "DELETE FROM gallery_section WHERE id=$id"; 

if(mysqli_query($dbconnect, $sql)){
    header('Location: gallery_section.php');
}


?>