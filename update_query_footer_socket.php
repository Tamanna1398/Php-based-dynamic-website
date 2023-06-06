<?php

$socket_text = $_POST['socket_text'];


include 'dbconfig.php';

$sql = "UPDATE footer_socket SET socket_text='$socket_text'"; 


if(mysqli_query($dbconnect, $sql)){
    header('Location: index.php');
}else{
    echo 'Error';


}
?>