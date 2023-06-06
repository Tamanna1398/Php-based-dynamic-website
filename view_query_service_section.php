<?php

include 'dbconfig.php';

$sql = "SELECT * from service_section";

$service_section_result = mysqli_query($dbconnect, $sql);

//$service_section_data = mysqli_fetch_assoc($service_section_result);



?>