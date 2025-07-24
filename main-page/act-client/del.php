<?php 

require 'function.php';

if (!isset($_SESSION['akses_delete_valid']) || !isset($_GET['id'])) {
    header("location: ../manajemenP.php");
}
unset($_SESSION['akses_delete_valid']);




$id = $_GET['id'];
if(del($id) > 0) {
    
    echo "<script>
        alert('data berhasil dihapus !');
        document.location.href = '../manajemenP.php';
        </script>";
}else{
    echo "<script>
        alert('data gagal dihapus !');
        document.location.href = '../manajemenP.php';
        </script>";
}
?>