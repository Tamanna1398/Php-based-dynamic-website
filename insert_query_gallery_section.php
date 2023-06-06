<?php

include 'dbconfig.php';

$image = $_POST['image'];
$heading = $_POST['heading'];
$tag = $_POST['tag'];


$random = rand(1111, 9999);

$image = 'uploads/' . $random . $_FILES['image']['name'];

move_uploaded_file($_FILES['image']['tmp_name'], $image);



$sql = "INSERT INTO gallery_section (id,image, heading, tag) VALUES ('NULL', '$image',  '$heading', '$tag')";

if(mysqli_query($dbconnect, $sql)){
    header('Location: gallery_section.php');
}else{
    echo 'Error';
}



?>