<?php

include 'dbconfig.php';

$sql = "SELECT * from about_service";

$about_service_result = mysqli_query($dbconnect, $sql);

//$about_service_data = mysqli_fetch_assoc($about_service_result);



?>