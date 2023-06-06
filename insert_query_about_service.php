<?php

include 'dbconfig.php';

$image = $_FILES['image'];
$heading = $_POST['heading'];
$content1 = $_POST['content1'];
$content2 = $_POST['content2'];


$random = rand(1111, 9999);

$image = 'uploads/' . $random . $_FILES['image']['name'];

move_uploaded_file($_FILES['image']['tmp_name'], $image);



$sql = "INSERT INTO about_service (id, image, heading, content1, content2) VALUES ('NULL', '$image',  '$heading', '$content1', '$content2')";

if(mysqli_query($dbconnect, $sql)){
    header('Location: about_service.php');
}else{
    echo 'Error';
}



?>