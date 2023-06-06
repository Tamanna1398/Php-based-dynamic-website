<?php
include 'dbconfig.php';

$id=$_GET['id'];

$sql = "DELETE FROM about_section WHERE id=$id"; 

if(mysqli_query($dbconnect, $sql)){
    header('Location: about_section.php');
}


?>