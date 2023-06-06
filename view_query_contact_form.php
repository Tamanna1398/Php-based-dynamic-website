<?php

include 'dbconfig.php';

$sql = "SELECT * from contact_form";

$contact_form_result = mysqli_query($dbconnect, $sql);

$contact_form_data = mysqli_fetch_assoc($contact_form_result);



?>