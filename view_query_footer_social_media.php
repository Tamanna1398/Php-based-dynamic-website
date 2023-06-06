<?php

include 'dbconfig.php';

$sql = "SELECT * from footer_social_media";

$result = mysqli_query($dbconnect, $sql);

$footer_social_media_data = mysqli_fetch_assoc($result);

?>