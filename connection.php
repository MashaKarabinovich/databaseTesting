<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:webmasha1.database.windows.net,1433; Database = webmasha", "Masha123", "Hidden23");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "Masha123", "pwd" => "{your_password_here}", "Database" => "webmasha", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:webmasha1.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>
