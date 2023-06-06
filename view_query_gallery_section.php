<?php

include 'dbconfig.php';

$sql = "SELECT * from gallery_section";

$gallery_section_result = mysqli_query($dbconnect, $sql);

$gallery_section_data = mysqli_fetch_assoc($gallery_section_result);



?>