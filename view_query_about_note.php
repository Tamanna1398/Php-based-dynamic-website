<?php

include 'dbconfig.php';

$sql = "SELECT * from about_note";

$about_note_result = mysqli_query($dbconnect, $sql);

//$about_note_data = mysqli_fetch_assoc($about_note_result);



?>