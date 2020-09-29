<?php

$host = webmasha1.database.windows.net;
$username= 'Masha123';
$password = 'Hidden23';
$db_name = 'webmasha1';
$conn = mysqli_init();
mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306);

?>
