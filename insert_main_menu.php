<?php

include 'dbconfig.php';

$menu_name = $_POST['menu_name'];
$menu_url = $_POST['menu_url'];

$sql = "INSERT INTO main_menu (id, menu_name, menu_url) VALUES ('NULL', '$menu_name', '$menu_url')";

if(mysqli_query($dbconnect, $sql)){
    header('Location: index.php');
}else{
    echo 'Error';
}



?>