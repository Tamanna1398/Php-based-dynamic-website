<?php

include 'dbconfig.php';

$sql = "SELECT * from footer_socket";

$socket_text = mysqli_query($dbconnect, $sql);

$footer_socket_data = mysqli_fetch_assoc($socket_text);



?>