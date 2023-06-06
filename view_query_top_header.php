<?php

include 'dbconfig.php';

$sql = "SELECT * from top_header";

$result = mysqli_query($dbconnect, $sql);

$top_header_data = mysqli_fetch_assoc($result);



?>