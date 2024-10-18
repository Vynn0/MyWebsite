<?php
$server = "localhost";
$user = "root";
$pass = "";
$namaDB = "karyawan";
$port = 3306;

// Membuat koenski
// $koneksi = mysqli_connect($server, $user, $pass, $namaDB, $port);
// if (!$koneksi) {
//     die ("Koneksi gagal: " . mysqli_connect_error());
// } else {
//     echo "Yessir";
// }

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $koneksi = mysqli_connect($server, $user, $pass, $namaDB, $port);
    echo "Success sir yes sir";
} catch (mysqli_sql_exception $e) {
    echo "Koneksi gagal: " .$e -> getMessage();
}
?>