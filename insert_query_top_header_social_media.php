<?php

$icon = $_POST['icon'];

include 'dbconfig.php';

$sql = "INSERT INTO top_header_social_media (id, icon) VALUES ('NULL', '$icon')";

if(mysqli_query($dbconnect, $sql)){
    header('Location: top_header.php');
}else{
    echo 'Error';
}
?>