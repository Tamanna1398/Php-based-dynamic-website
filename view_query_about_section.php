<?php

include 'dbconfig.php';

$sql = "SELECT * from about_section";

$about_section_result = mysqli_query($dbconnect, $sql);

//$about_section_data = mysqli_fetch_assoc($about_section_result);



?>