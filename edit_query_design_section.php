<?php
include 'dbconfig.php';

$id = $_GET['id'];


$icon = $_FILES['icon'];
$tag = $_POST['tag'];
$content = $_POST['content'];


$random = rand(1111, 9999);


if(strlen($icon['name'])  == 0){
    $sql = "UPDATE design_section SET  tag='$tag', content='$content' WHERE id='$id'"; 
    $query = mysqli_query($dbconnect,$sql);
    if(mysqli_query($dbconnect, $sql)){
        header('Location: design_section.php');
    }else{
        echo 'Error';
    }
}
else{
    

    $icon = 'uploads/' . $random . $_FILES['icon']['name'];
    move_uploaded_file($_FILES['icon']['tmp_name'], $icon);
    

    $sql = "UPDATE design_section SET   icon='$icon', tag='$tag', content='$content' WHERE id='$id'"; 

    if(mysqli_query($dbconnect, $sql)){
        header('Location: design_section.php');
    }else{
        echo 'Error';
    }
}


