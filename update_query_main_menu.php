<?php

$menu_name = $_POST['menu_name'];
$menu_url = $_POST['menu_url'];

include 'dbconfig.php';

$sql = "UPDATE top_header SET menu_name='$menu_name', menu_url='$menu_url'"; 


if(mysqli_query($dbconnect, $sql)){
    header('Location: index.php');
}else{
    echo 'Error';


}
?>