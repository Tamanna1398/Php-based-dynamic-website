
<?php

include 'dbconfig.php';


$icon = $_FILES['icon'];
$tag = $_POST['tag'];
$content = $_POST['content'];


$random = rand(1111, 9999);
$icon = 'uploads/' . $random . $_FILES['icon']['name'];
move_uploaded_file($_FILES['icon']['tmp_name'], $icon);



$sql = "INSERT INTO about_note (id,  icon, tag, content) VALUES ('NULL', '$icon',  '$tag',  '$content')";

if(mysqli_query($dbconnect, $sql)){
    header('Location: about_note.php');
}else{
    echo 'Error';
}



?>