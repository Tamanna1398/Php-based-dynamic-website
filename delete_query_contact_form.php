<?php
include 'dbconfig.php';

$id=$_GET['id'];

$sql = "DELETE FROM contact_form WHERE id=$id"; 

if(mysqli_query($dbconnect, $sql)){
    header('Location: contact_form.php');
}


?>