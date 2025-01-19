<?php
    require 'function.php';

    $pelanggan = 0;
    $transaksi = 0;
    $produk = 0;
    $totalP = 0;


    $pelanggan = calculate("pelanggan");
    $transaksi = calculate("detil_penjualan");
    $produk = calculate("barang");


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
            <div class="dashboard-card">
                <h3>Total Penjualan</h3>
                <p>Rp 0</p>
            </div>
            <div class="dashboard-card">
                <h3>Total Produk</h3>
                <p><?= $produk;?> items</p>
            </div>
            <div class="dashboard-card">
                <h3>Total Pelanggan</h3>
                <p><?= $pelanggan;?> customers</p>
            </div>
            <div class="dashboard-card">
                <h3>Transaksi Hari Ini</h3>
                <p><?= $transaksi; ?> transactions</p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
