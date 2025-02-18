<?php
session_start();
require '../function/koneksi.php'; //berisi file koneksi ke DB
require 'function.php';
require 'act-detailT/function.php';
require 'act-client/function.php';


if (isset($_POST['del_detail'])) {
    require 'act-detailT/del.php'; //fungsi hapus ada di file ini
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
                                <th>ID Transaksi</th>
                                <th>ID Barang</th>
                                <th>Jumlah Barang</th>
                                <th>Harga Satuan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>



                            <?php
                            $penjualan = query("SELECT detil_penjualan.id_barang, detil_penjualan.jml_barang, detil_penjualan.harga_satuan,  detil_penjualan.id_transaksi_detil,
                                                                    barang.nama_barang, pelanggan.nama,
                                                                        penjualan.tgl_transaksi, penjualan.total_transaksi, penjualan.nomor_transaksi, penjualan.id_pelanggan
                                                                            
                                                                            FROM detil_penjualan INNER JOIN penjualan ON detil_penjualan.id_transaksi = penjualan.id_transaksi 
                                                                            INNER JOIN barang ON detil_penjualan.id_barang = barang.id_barang 
                                                                            INNER JOIN pelanggan ON penjualan.id_pelanggan = pelanggan.id_pelanggan ");
                            $no = 1;

                            if ($penjualan != "Data tidak ada"): 
                                foreach ($penjualan as $pj): ?>
                                    <?php require 'act-detailT/showDataDetailT.php'; ?>
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