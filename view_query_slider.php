<?php

include 'dbconfig.php';

$sql = "SELECT * from slider";

$slider_result = mysqli_query($dbconnect, $sql);

//$slider_data = mysqli_fetch_assoc($slider_result);



?>