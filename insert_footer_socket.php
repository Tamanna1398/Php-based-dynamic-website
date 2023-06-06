<?php

include 'dbconfig.php';

$socket_text = $_POST['socket_text'];


$sql = "INSERT INTO footer_socket (id, socket_text) VALUES ('NULL', '$socket_text')";

if(mysqli_query($dbconnect, $sql)){
    header('Location: index.php');
}else{
    echo 'Error';
}



?>