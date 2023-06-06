<?php

include 'dbconfig.php';

$text = $_POST['text'];
$cell = $_POST['cell'];


$sql = "INSERT INTO footer_contact (id, text, cell) VALUES ('NULL', '$text', '$cell')";

if(mysqli_query($dbconnect, $sql)){
    header('Location: footer_contact.php');
}else{
    echo 'Error';
}



?>