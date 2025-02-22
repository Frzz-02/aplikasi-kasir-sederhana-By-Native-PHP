<?php 

require '../function/koneksi.php';
require 'function.php';

$noTrans = $_POST['nomor_transaksi'];
$noItem = $_POST['id_barang'];
$noClient = $_POST['id_pelanggan']; 

$query = "SELECT detil_penjualan.id_barang, detil_penjualan.jml_barang, detil_penjualan.harga_satuan,
                    barang.nama_barang, barang.harga_barang, pelanggan.nama, pelanggan.gender,
                        penjualan.tgl_transaksi, penjualan.total_transaksi, penjualan.nomor_transaksi, penjualan.id_pelanggan
        
        FROM detil_penjualan INNER JOIN penjualan ON detil_penjualan.id_transaksi = penjualan.id_transaksi 
        INNER JOIN barang ON detil_penjualan.id_barang = barang.id_barang 
        INNER JOIN pelanggan ON penjualan.id_pelanggan = pelanggan.id_pelanggan 
            WHERE penjualan.id_pelanggan = '$noClient' AND penjualan.nomor_transaksi = '$noTrans'";

$data_transaksi = show_item($query);
$id_barang = [];
$qty_barang_dibeli = [];
$harga_subtotal = [];
$nama_barang = [];
$harga_barang = [];







        //variabel di bawah ini yang akan dipakai nanti :

//1. variabel di bawah ini membutuhkan looping untuk menapilkan datanya
    foreach ($data_transaksi as $value) {
        $id_barang[] = $value['id_barang'];
        $qty_barang_dibeli[] = $value['jml_barang'];
        $harga_subtotal[] = $value['harga_satuan'];
        $nama_barang[] = $value['nama_barang'];
        $harga_barang[] = $value['harga_barang'];
    }
    
    

    

//2. variabel di bawah ini bisa langsung dipanggil untuk menceta nilainya
    $nama_pelanggan = $data_transaksi[0]['nama'];
    $id_transaksi = $data_transaksi[0]['nomor_transaksi'];
    $total_transaksi = $data_transaksi[0]['total_transaksi'];
    $tanggal = $data_transaksi[0]['tgl_transaksi'];
    $id_pelanggan = $data_transaksi[0]['id_pelanggan'];


var_dump($data_transaksi);


?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Pembayaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .invoice-container {
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-top: 50px;
        }
        .invoice-header {
            text-align: center;
            margin-bottom: 30px;
        }
        .invoice-header h1 {
            font-size: 2.5rem;
            color: #007bff;
        }
        .invoice-details {
            margin-bottom: 30px;
        }
        .invoice-details h2 {
            font-size: 1.8rem;
            color: #343a40;
            margin-bottom: 20px;
        }
        .invoice-details p {
            font-size: 1.1rem;
            color: #6c757d;
        }
        .invoice-table {
            margin-bottom: 30px;
        }
        .invoice-table th, .invoice-table td {
            text-align: center;
        }
        .invoice-total {
            text-align: right;
            font-size: 1.2rem;
            color: #28a745;
        }
        .invoice-footer {
            text-align: center;
            margin-top: 30px;
            font-size: 0.9rem;
            color: #6c757d;
        }
       
        .print-button {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .print-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container invoice-container">
        <div class="invoice-header">
            <h1>Invoice Pembayaran</h1>
            <p class="text-muted">Transaksi Berhasil</p>
            <button class="print-button" onclick="window.print()">==</button>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>struk</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        
    </head>



    <body>
        <div class="container bg-primary rounded-5 bg-opacity-25 p-5 mt-5">
            <div class="text-center fw-semibold fs-3">
                pembayaran berhasil
                <?= $noTrans; ?>
            </div>

        </div>
        <div class="invoice-details">
            <h2>Detail Transaksi</h2>
            <p><strong>ID Transaksi:</strong> <?= $noTrans; ?></p>
            <p><strong>ID Customer:</strong> <?= $noClient; ?></p>
        </div>
        <div class="invoice-table">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID Barang</th>
                        <th>Nama Barang</th>
                        <th>Qty</th>
                        <th>Harga Subtotal</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                <?php for ($i=0; $i < count(value: $id_barang); $i++): ?>
                        <tr>
                                <td><?= $id_barang[$i]; ?></td>
                                <td><?= $nama_barang[$i]; ?></td>
                                <td><?= $qty_barang_dibeli[$i]; ?></td>
                                <td>Rp<?= number_format ($harga_subtotal[$i],0,','); ?></td>
                                <td><?= $harga_barang[$i]; ?></td>
                                
                                

                           
                            </tr>
                            
                            <?php endfor; ?>
                </tbody>
            </table>
        </div>
        <div class="invoice-total">
            <p><strong>Total Pembayaran:</strong> Rp <?= number_format($total_transaksi, 0, ',', '.'); ?></p>
            
        </div>
        <div class="invoice-footer">
            <p>Terima kasih telah berbelanja bersama kami.</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    
</script>
</body>
</html>









