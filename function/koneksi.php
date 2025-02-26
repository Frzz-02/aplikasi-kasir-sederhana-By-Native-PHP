<?php


//jika beradadi direktori function/






//jika beradadi direktori main-page/
if (!isset($_SESSION['login']) || ($_SESSION['login'] != password_hash('admin', PASSWORD_DEFAULT) ||  $_SESSION['login'] != password_hash('pegawai', algo: PASSWORD_DEFAULT))  ) {
    header('location: ../interface/login.php');
    die;
}



$hostname = "localhost";
$username = "root";
$password = "";
$database = "toko";

$koneksi = mysqli_connect($hostname, $username, $password, $database);
if ($koneksi->connect_error) {
    return die("error: " . $koneksi->connect_error);
}










