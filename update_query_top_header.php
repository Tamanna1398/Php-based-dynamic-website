<?php

$phone = $_POST['phone'];
$email = $_POST['email'];

include 'dbconfig.php';

$sql = "UPDATE top_header SET phone='$phone', email='$email'"; 


if(mysqli_query($dbconnect, $sql)){
    header('Location: top_header.php');
}else{
    echo 'Error';


}
?>