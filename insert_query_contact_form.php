<?php

include 'dbconfig.php';

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$sql = "INSERT INTO contact_form (id, name, email, subject, message) VALUES ('NULL', '$name', '$email', '$subject', '$message')";

if(mysqli_query($dbconnect, $sql)){
    header('Location: contact.php');
}else{
    echo 'Error';
}



?>