<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "toko2";

$koneksi = mysqli_connect($hostname, $username, $password, $database);
if ($koneksi->connect_error) {
    echo "koneksi database rusak ";
    die("error: " . $koneksi->connect_error);
}