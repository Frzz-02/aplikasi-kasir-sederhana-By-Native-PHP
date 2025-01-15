<?php
session_start();

// if (isset($_SESSION['admin']) || isset($_SESSION['pegawai'])) {
//     header('location: ../dashboard.php');exit;
// }



session_unset();
session_destroy();

// if (isset($_COOKIE["admin_cookie"])) {
//     setcookie("admin_cookie","", time() - 3600, "/sekolah");
// }
// elseif(isset($_COOKIE["user_cookie"])) {
//     setcookie("user_cookie","", time() - 3600, "/sekolah");
// }

header('location: ../interface/login.php');
exit;
?>