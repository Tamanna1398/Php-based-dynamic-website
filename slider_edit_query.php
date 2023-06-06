<?php

$id = $_GET['id'];

$heading1 = $_POST['heading1'];
$heading2 = $_POST['heading2'];
$content_text = $_POST['content_text'];
$slider_image = $_POST['slider_image'];

$random = rand(1111, 9999);

$slider_image = 'uploads/' . $random . $_FILES['slider_image']['name'];

move_uploaded_file($_FILES['slider_image']['tmp_name'], $slider_image);

include 'dbconfig.php';

$sql = "UPDATE slider SET heading1='$heading1', heading2='$heading2', content_text='$content_text', slider_image='$slider_image' WHERE id='$id'"; 

if(mysqli_query($dbconnect, $sql)){
    header('Location: slider.php');
}else{
    echo 'Error';
}
