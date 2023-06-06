<?php

$id = $_GET['id'];

$icon_image = $_FILES['icon_image'];
$icon_text = $_POST['icon_text'];

$random = rand(1111, 9999);

$icon_image = 'uploads/' . $random . $_FILES['icon_image']['name'];

move_uploaded_file($_FILES['icon_image']['tmp_name'], $icon_image);

include 'dbconfig.php';

$sql = "UPDATE service_section SET  icon_image='$icon_image', icon_text='$icon_text' WHERE id='$id'"; 

if(mysqli_query($dbconnect, $sql)){
    header('Location: service_section.php');
}else{
    echo 'Error';
}
