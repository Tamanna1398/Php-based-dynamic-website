
<?php

include 'dbconfig.php';

$service_image = $_FILES['service_image'];
$service_tag = $_POST['service_tag'];
$service_content = $_POST['service_content'];


$random = rand(1111, 9999);

$service_image = 'uploads/' . $random . $_FILES['service_image']['name'];

move_uploaded_file($_FILES['service_image']['tmp_name'], $service_image);



$sql = "INSERT INTO service_gallery (id, service_image, service_tag, service_content) VALUES ('NULL', '$service_image',  '$service_tag',  '$service_content')";

if(mysqli_query($dbconnect, $sql)){
    header('Location: service_gallery.php');
}else{
    echo 'Error';
}



?>