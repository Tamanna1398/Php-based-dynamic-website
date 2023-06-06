<?php

include 'dbconfig.php';

$icon_image = $_POST['icon_image'];
$icon_text = $_POST['icon_text'];


$random = rand(1111, 9999);

$icon_image = 'uploads/' . $random . $_FILES['icon_image']['name'];

move_uploaded_file($_FILES['icon_image']['tmp_name'], $icon_image);



$sql = "INSERT INTO service_section (id, icon_image, icon_text) VALUES ('NULL', '$icon_image',  '$icon_text')";

if(mysqli_query($dbconnect, $sql)){
    header('Location: service_section.php');
}else{
    echo 'Error';
}



?>