<?php
include 'dbconfig.php';

$id=$_GET['id'];

$sql = "DELETE FROM slider WHERE id=$id"; 

if(mysqli_query($dbconnect, $sql)){
    header('Location: slider.php');
}


?>