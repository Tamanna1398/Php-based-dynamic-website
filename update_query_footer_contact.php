<?php

$text= $_POST['text'];
$cell = $_POST['cell'];

include 'dbconfig.php';

$sql = "UPDATE footer_contact SET text='$text', cell='$cell'"; 


if(mysqli_query($dbconnect, $sql)){
    header('Location: footer_contact.php');
}else{
    echo 'Error';


}
?>