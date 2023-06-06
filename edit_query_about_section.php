<?php
include 'dbconfig.php';

$id = $_GET['id'];

$about_image = $_FILES['about_image'];
$heading = $_POST['heading'];
$content1 = $_POST['content1'];
$content2 = $_POST['content2'];


$random = rand(1111, 9999);


if(strlen($about_image['name']) == 0){
    $sql = "UPDATE about_section  SET  heading='$heading', content1='$content1', content2='$content2' WHERE id='$id'"; 
    $query = mysqli_query($dbconnect,$sql);
    if(mysqli_query($dbconnect, $sql)){
        header('Location: about_section.php');
    }else{
        echo 'Error';
    }
}
else{
    $about_image = 'uploads/' . $random . $_FILES['about_image']['name'];
    move_uploaded_file($_FILES['about_image']['tmp_name'], $about_image);
    

    $sql = "UPDATE about_section  SET  about_image='$about_image', heading='$heading', content1='$content1', content2='$content2' WHERE id='$id'"; 

    if(mysqli_query($dbconnect, $sql)){
        header('Location: about_section.php');
    }else{
        echo 'Error';
    }
}


