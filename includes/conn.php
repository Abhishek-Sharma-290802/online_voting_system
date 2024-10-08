<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:votesystem-db-server.database.windows.net,1433; Database = votesystem", "azure", "abhi@123");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "Abhi", "pwd" => "Azure@123456", "Database" => "votesystem", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:votesystem-db-server.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>
