<?php

include 'dbconfig.php';

$sql = "SELECT * from design_section";

$design_section_result = mysqli_query($dbconnect, $sql);

//$design_section_data = mysqli_fetch_assoc($design_section_result);



?>