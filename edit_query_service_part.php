<?php

$id = $_GET['id'];

$service_icon = $_FILES['service_icon'];
$service_text = $_POST['service_text'];
include 'dbconfig.php';

$random = rand(1111, 9999);


if(strlen($service_icon['name']) == 0){
    $sql = "UPDATE service_part SET  service_text='$service_text' WHERE id='$id'"; 
    $query = mysqli_query($dbconnect,$sql);
    if(mysqli_query($dbconnect, $sql)){
        header('Location: service_part.php');
    }else{
        echo 'Error';
    }
}
else{
    $service_icon = 'uploads/' . $random . $_FILES['service_icon']['name'];
    move_uploaded_file($_FILES['service_icon']['tmp_name'], $service_icon);
    

    $sql = "UPDATE service_part SET  service_icon='$service_icon', service_text='$service_text' WHERE id='$id'"; 

    if(mysqli_query($dbconnect, $sql)){
        header('Location: service_part.php');
    }else{
        echo 'Error';
    }
}


