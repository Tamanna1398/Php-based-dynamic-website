<?php

include 'dbconfig.php';

$logo = $_POST['logo'];

$random = rand(1111, 9999);

$logo = 'uploads/' . $random . $_FILES['logo']['name'];

move_uploaded_file($_FILES['logo']['tmp_name'], $logo);

$sql = "INSERT INTO logo (id, logo_img) VALUES ('NULL', '$logo')";

if(mysqli_query($dbconnect, $sql)){
    header('Location: index.php');
}else{
    echo 'Error';
}



?>