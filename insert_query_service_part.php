<?php

include 'dbconfig.php';

$service_icon = $_FILES['service_icon'];
$service_text = $_POST['service_text'];


$random = rand(1111, 9999);

$service_icon = 'uploads/' . $random . $_FILES['service_icon']['name'];

move_uploaded_file($_FILES['service_icon']['tmp_name'], $service_icon);



$sql = "INSERT INTO service_part (id, service_icon, service_text) VALUES ('NULL', '$service_icon',  '$service_text')";

if(mysqli_query($dbconnect, $sql)){
    header('Location: service_part.php');
}else{
    echo 'Error';
}



?>