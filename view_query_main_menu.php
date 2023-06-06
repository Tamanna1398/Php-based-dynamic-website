<?php

include 'dbconfig.php';

$sql = "SELECT * from main_menu";

$menu_result = mysqli_query($dbconnect, $sql);

$main_menu__data = mysqli_fetch_assoc($menu_result);



?>