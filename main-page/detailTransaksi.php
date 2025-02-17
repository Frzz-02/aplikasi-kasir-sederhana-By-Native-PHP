<?php
session_start();
require '../function/koneksi.php';
require 'function.php';
require 'act-client/function.php';

if (isset($_POST['submit'])) {
    if ($_POST['submit'] == "edit") {
        
        if (updateP($_POST) > 0) {
            echo "<script>
            alert('Perubahan telah berhasil disimpan!');
            const modal = bootstrap.Modal.getInstance(document.getElementById('editPenjualan'));
            modal.hide();
            </script>";

            $_POST['submit'] = '';
            $_POST['id'] = '';
            $_POST['id_transaksi'] = '';
            $_POST['id_barang'] = '';
            $_POST['jml_barang'] = '';
            $_POST['harga_satuan'] = '';
        }
    }

    if ($_POST['submit'] == "tambah") {
        if (isset($_POST['token']) && $_POST['token'] === $_SESSION['token']) {
            unset($_SESSION['token']);
            
            $data = [$_POST['id_transaksi'], $_POST['id_barang'], $_POST['jml_barang'], $_POST['harga_satuan']];
            if (add($data) > 0) {
                echo "<script>
                alert('Data telah berhasil ditambahkan !');
                const modal = bootstrap.Modal.getInstance(document.getElementById('tambahPenjualan'));
                modal.hide();
                </script>";
            }
        } else {
            // Token salah: Redirect ke halaman yang sama tanpa memproses data
            header("Location: " . $_SERVER['PHP_SELF']);
            exit();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Donuts - Manajemen Penjualan</title>
    <link rel="stylesheet" href="../css/dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- menampilkan sidebar -->
<?php require 'general/sidebar.php'; ?>

<div class="main-content">
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Manajemen Penjualan</h2>
           
        </div>

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Transaksi</th>
                                <th>ID Barang</th>
                                <th>Jumlah Barang</th>
                                <th>Harga Satuan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $penjualan = query("SELECT * FROM detil_penjualan");
                            $no = 1;

                            if ($penjualan != "Data tidak ada"): 
                                foreach ($penjualan as $pj): ?>
                                    <?php require 'act-detailT/showDataDetailT.php'; $no++; ?>
                                <?php endforeach; ?>
                            <?php else: 
                                echo "<tr><td colspan='6' style='text-align:center;padding: 30px 0px;'>". $penjualan ."</td></tr>";
                            endif;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah Penjualan -->
<?php require 'act-client/add.php' ?>

<!-- Modal Edit Penjualan -->
<?php require 'act-client/update.php'; ?>
<script src="../js/show-data.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>