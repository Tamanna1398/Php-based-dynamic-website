<?php

include 'dbconfig.php';

$footer_logo = $_POST['footer_logo'];

$random = rand(1111, 9999);

$footer_logo = 'uploads/' . $random . $_FILES['footer_logo']['name'];

move_uploaded_file($_FILES['footer_logo']['tmp_name'], $footer_logo);

$sql = "INSERT INTO footer_logo (id, footer_logo) VALUES ('NULL', '$footer_logo')";

if(mysqli_query($dbconnect, $sql)){
    header('Location: index.php');
}else{
    echo 'Error';
}



?>