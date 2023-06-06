<?php

include 'dbconfig.php';

$sql = "SELECT * from port_gallery";

$port_gallery_result = mysqli_query($dbconnect, $sql);

//$port_gallery_data = mysqli_fetch_assoc($port_gallery_result);



?>