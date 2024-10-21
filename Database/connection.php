<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "vynn.dev";
$port = 3306;

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $connection = mysqli_connect($server, $user, $pass, $db, $port);
} catch (mysqli_sql_exception $e) {
    echo "Koneksi gagal: " .$e -> getMessage();
}
?>