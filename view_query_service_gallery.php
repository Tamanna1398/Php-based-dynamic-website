<?php

include 'dbconfig.php';

$sql = "SELECT * from service_gallery";

$service_gallery_result = mysqli_query($dbconnect, $sql);

//$service_gallery_data = mysqli_fetch_assoc($service_gallery_result);



?>