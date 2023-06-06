<?php
include 'dbconfig.php';

$id = $_GET['id'];

$image = $_FILES['image'];
$heading = $_POST['heading'];
$content1 = $_POST['content1'];
$content2 = $_POST['content2'];


$random = rand(1111, 9999);


if(strlen($image['name']) == 0){
    $sql = "UPDATE about_service  SET  heading='$heading', content1='$content1', content2='$content2' WHERE id='$id'"; 
    $query = mysqli_query($dbconnect,$sql);
    if(mysqli_query($dbconnect, $sql)){
        header('Location: about_service.php');
    }else{
        echo 'Error';
    }
}
else{
    $image = 'uploads/' . $random . $_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'], $image);
    

    $sql = "UPDATE about_service  SET  image='$image', heading='$heading', content1='$content1', content2='$content2' WHERE id='$id'"; 

    if(mysqli_query($dbconnect, $sql)){
        header('Location: about_service.php');
    }else{
        echo 'Error';
    }
}


