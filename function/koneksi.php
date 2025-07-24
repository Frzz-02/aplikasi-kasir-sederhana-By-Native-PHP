<?php




session_start();

if (count(debug_backtrace()) == 0) {
    // Jika file dibuka langsung di browser, redirect ke halaman lain
    header("Location: ../interface/login.php");
    exit;
}


$dirPath = dirname(debug_backtrace()[0]['file']);


// Cek apakah user belum login atau login tidak sesuai
function isNotLoggedIn() {
    return !isset($_SESSION['login']) || 
            !(password_verify('admin', $_SESSION['login']) || 
                password_verify('pegawai', $_SESSION['login']));
}


// Jika berada di "main-page"
if (realpath($dirPath) === realpath("D:/xampp/htdocs/Aplikasi-kasir/main-page")) {    
    if (isNotLoggedIn()) {
        header("Location: ../interface/login.php");
        exit;
    }
}


// Jika berada di "interface"
if (realpath($dirPath) === realpath("D:/xampp/htdocs/Aplikasi-kasir/interface")) { 
    if (basename($_SERVER["SCRIPT_FILENAME"]) != basename("register.php")) {
        if (!isNotLoggedIn()) {
            header("Location: ../main-page/");
            exit;
        }
    }   
}


// Jika berada di salah satu folder di dalam "main-page"
$allowedPaths = [
    "D:/xampp/htdocs/Aplikasi-kasir/main-page/act-transaction",
    "D:/xampp/htdocs/Aplikasi-kasir/main-page/general",
    "D:/xampp/htdocs/Aplikasi-kasir/main-page/act-item",
    "D:/xampp/htdocs/Aplikasi-kasir/main-page/act-detailT",
    "D:/xampp/htdocs/Aplikasi-kasir/main-page/act-client"
];




foreach ($allowedPaths as $allowedPath) {
    if (realpath($dirPath) === realpath($allowedPath)) {
        if (isNotLoggedIn()) {
            header("Location: ../../interface/login.php");
            exit;
        }
    }
}












$hostname = "localhost";
$username = "root";
$password = "";
$database = "toko";

$koneksi = mysqli_connect($hostname, $username, $password, $database);
if ($koneksi->connect_error) {
    return die("error: " . $koneksi->connect_error);
}










