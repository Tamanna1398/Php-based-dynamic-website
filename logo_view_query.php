<?php
include 'dbconfig.php';

$sql= "SELECT * FROM logo";

$viewResult = mysqli_query($dbconnect, $sql);

$logo_show = mysqli_fetch_assoc($viewResult);







?>