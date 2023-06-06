<?php

include 'dbconfig.php';

$sql = "SELECT * from top_header_social_media";

$result = mysqli_query($dbconnect, $sql);

$top_header_social_media_data = mysqli_fetch_assoc($result);

?>