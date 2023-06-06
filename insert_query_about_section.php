<?php

include 'dbconfig.php';

$about_image = $_FILES['about_image'];
$heading = $_POST['heading'];
$content1 = $_POST['content1'];
$content2 = $_POST['content2'];


$random = rand(1111, 9999);

$about_image = 'uploads/' . $random . $_FILES['about_image']['name'];

move_uploaded_file($_FILES['about_image']['tmp_name'], $about_image);



$sql = "INSERT INTO about_section (id,about_image, heading, content1, content2) VALUES ('NULL', '$about_image',  '$heading', '$content1', '$content2')";

if(mysqli_query($dbconnect, $sql)){
    header('Location: about_section.php');
}else{
    echo 'Error';
}



?>