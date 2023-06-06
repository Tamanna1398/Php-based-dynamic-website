<?php

$id = $_GET['id'];

$menu_name = $_POST['menu_name'];
$menu_url = $_POST['menu_url'];

include 'dbconfig.php';

$sql = "UPDATE main_menu SET menu_name='$menu_name', menu_url ='$menu_url' WHERE id='$id'";

if(mysqli_query($dbconnect, $sql)){
    header('Location: main_menu.php');
}else{
    echo 'Error';
}
