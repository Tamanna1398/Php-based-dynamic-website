<?php

include 'dbconfig.php';

$phone = $_POST['phone'];
$email = $_POST['email'];

$sql = "INSERT INTO top_header (id, phone, email) VALUES ('NULL', '$phone', '$email')";

if(mysqli_query($dbconnect, $sql)){
    header('Location: top_header.php');
}else{
    echo 'Error';
}



?>