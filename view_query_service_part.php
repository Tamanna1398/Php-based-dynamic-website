<?php

include 'dbconfig.php';

$sql = "SELECT * from service_part";

$service_part_result = mysqli_query($dbconnect, $sql);

//$service_part_data = mysqli_fetch_assoc($service_part_result);



?>