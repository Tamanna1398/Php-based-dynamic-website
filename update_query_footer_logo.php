<?php

$footer_logo = $_POST['footer_logo'];

$random = rand(1111, 9999);

$footer_logo = 'uploads/' . $random . $_FILES['footer_logo']['name'];

move_uploaded_file($_FILES['footer_logo']['tmp_name'], $footer_logo);

include 'dbconfig.php';

$sql = "UPDATE footer_logo SET footer_logo='$footer_logo'"; 


if(mysqli_query($dbconnect, $sql)){
    header('Location: index.php');
}else{
    echo 'Error';


}
?>