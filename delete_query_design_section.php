<?php
include 'dbconfig.php';

$id=$_GET['id'];

$sql = "DELETE FROM design_section WHERE id=$id"; 

if(mysqli_query($dbconnect, $sql)){
    header('Location: design_section.php');
}


?>