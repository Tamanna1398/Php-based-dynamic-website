<?php
include 'dbconfig.php';

$id = $_GET['id'];

$service_image = $_FILES['service_image'];
$service_tag = $_POST['service_tag'];
$service_content = $_POST['service_content'];


$random = rand(1111, 9999);


if(strlen($service_image['name']) == 0){
    $sql = "UPDATE service_gallery SET  service_tag='$service_tag', service_content='$service_content' WHERE id='$id'"; 
    $query = mysqli_query($dbconnect,$sql);
    if(mysqli_query($dbconnect, $sql)){
        header('Location: service_gallery.php');
    }else{
        echo 'Error';
    }
}
else{
    $service_image = 'uploads/' . $random . $_FILES['service_image']['name'];
    move_uploaded_file($_FILES['service_image']['tmp_name'], $service_image);
    

    $sql = "UPDATE service_gallery SET  service_image='$service_image', service_tag='$service_tag', service_content='$service_content' WHERE id='$id'"; 

    if(mysqli_query($dbconnect, $sql)){
        header('Location: service_gallery.php');
    }else{
        echo 'Error';
    }
}
