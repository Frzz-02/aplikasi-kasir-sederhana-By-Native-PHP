<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "toko";

$koneksi = mysqli_connect($hostname, $username, $password, $database);
if ($koneksi->connect_error) {
    return die("error: " . $koneksi->connect_error);
}










