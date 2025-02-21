<?php
    require '../function/koneksi.php';
    require 'function.php';

    $pelanggan = calculate("pelanggan");
    $transaksi = calculate("detil_penjualan");
    $produk = calculate("barang");

    // Ambil riwayat penjualan terbaru
    $riwayat_penjualan = getRecentSales(); // Pastikan fungsi ini ada di function.php

    function getRecentSales() {
        global $koneksi; // Pastikan koneksi database tersedia
        $query = "
            SELECT dp.id_transaksi, dp.id_barang, dp.jml_barang, dp.harga_satuan, 
                b.nama_barang,  
                   (dp.jml_barang * dp.harga_satuan) AS total 
            FROM detil_penjualan dp
            JOIN barang b ON dp.id_barang = b.id_barang
            ORDER BY dp.id_transaksi_detil DESC 
            LIMIT 5"; // Ambil 5 penjualan terbaru
        $result = mysqli_query($koneksi, $query);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Donuts - Admin Dashboard</title>
    <link rel="stylesheet" href="../css/dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php
    require 'general/sidebar.php';
?>

<div class="main-content">
    <div class="header">
        <h1>Welcome to World Donuts Admin Dashboard</h1>
    </div>

    <div class="dashboard-grid">
        <div class="dashboard-card" style="background-color: blue;">
            <h3>Total Penjualan</h3>
            <p>Rp 0</p>
        </div>
        <div class="dashboard-card" style="background-color: brown;">
            <h3>Total Produk</h3>
            <p><?= $produk;?> items</p>
        </div>
        <div class="dashboard-card" style="background-color: yellow;">
            <h3>Total Pelanggan</h3>
            <p><?= $pelanggan;?> customers</p>
        </div>
        <div class="dashboard-card" style="background-color: green;">
            <h3>Transaksi Hari Ini</h3>
            <p><?= $transaksi; ?> transactions</p>
        </div>
    </div>

    <div class="recent-sales">
    <h3 class="text-center mb-4">Riwayat Penjualan Terbaru</h3>
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>ID Transaksi</th>
                <th>Nama Barang</th>
                <th>Jumlah Barang</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($riwayat_penjualan as $penjualan): ?>
                <tr>
                    <td><?= $penjualan['id_transaksi']; ?></td>
                    <td><?= $penjualan['nama_barang']; ?></td>
                    <td><?= $penjualan['jml_barang']; ?></td>
                    <td>Rp <?= number_format($penjualan['total'], 0, ',', '.'); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<style>
    .recent-sales {
        background-color: #f8f9fa; /* Warna latar belakang yang lembut */
        padding: 20px; /* Ruang di dalam kotak */
        border-radius: 8px; /* Sudut yang membulat */
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Bayangan untuk efek kedalaman */
    }
</style>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>