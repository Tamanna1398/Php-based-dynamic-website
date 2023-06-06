<?php
include 'dbconfig.php';

$id = $_GET['id'];

$image = $_FILES['image'];
$heading = $_POST['heading'];
$tag = $_POST['tag'];

$random = rand(1111, 9999);

$random = rand(1111, 9999);
if(strlen($image['name']) == 0){

    $sql = "UPDATE gallery_section SET  heading='$heading', tag='$tag' WHERE id='$id'"; 
    $query = mysqli_query($dbconnect,$sql);
    if(mysqli_query($dbconnect, $sql)){
        header('Location: gallery_section.php');
    }else{
        echo 'Error';
    }
}
else{

$image = 'uploads/' . $random . $_FILES['image']['name'];

move_uploaded_file($_FILES['image']['tmp_name'], $image);

include 'dbconfig.php';

$sql = "UPDATE gallery_section SET  image='$image', heading='$heading', tag='$tag' WHERE id='$id'"; 

if(mysqli_query($dbconnect, $sql)){
    header('Location: gallery_section.php');
}else{
    echo 'Error';
}
}
