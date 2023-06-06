<?php

$icon = $_POST['icon'];

include 'dbconfig.php';

$sql = "INSERT INTO footer_social_media (id, icon) VALUES ('NULL', '$icon')";

if(mysqli_query($dbconnect, $sql)){
    header('Location: index.php');
}else{
    echo 'Error';
}
?>