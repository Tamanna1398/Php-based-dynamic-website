<?php

include 'dbconfig.php';

$sql = "SELECT * from footer_contact";

$footer_contact_result = mysqli_query($dbconnect, $sql);

$footer_contact_data = mysqli_fetch_assoc($footer_contact_result);



?>