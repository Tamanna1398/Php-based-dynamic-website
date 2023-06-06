<?php
include 'dbconfig.php';

$sql= "SELECT * FROM footer_logo";

$viewResult = mysqli_query($dbconnect, $sql);

$logo_show = mysqli_fetch_assoc($viewResult);







?>