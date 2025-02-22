<?php 
    require '../../function/koneksi.php';
    require 'function.php';



    $token = generate_ID_Transaction();
    insert_data_transaksi($_POST, $token);


// var_dump($_POST);die;

    
    $id_barang = $_POST["id_barang"];
    $nama_barang = $_POST["nama_barang"];
    $stock = $_POST["stock"];
    $harga_subtotal = $_POST["harga_subtotal"];
    $id_cust = $_POST["id_cust"];
    $qty = $_POST["qty"];
    $harga_total = $_POST["harga_total"];
    $cash = $_POST["cash"];
    $cashback = $_POST["cashBack"];

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
                <?= $token; ?>
            </div>

        </div>
        <div class="invoice-details">
            <h2>Detail Transaksi</h2>
            <p><strong>ID Transaksi:</strong> <?= $token; ?></p>
            <p><strong>ID Customer:</strong> <?= $id_cust; ?></p>
        </div>
        <div class="invoice-table">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID Barang</th>
                        <th>Nama Barang</th>
                        <th>Qty</th>
                        <th>Harga Subtotal</th>
                    
                    </tr>
                </thead>
                <tbody>

                
                <?php for ($i=0; $i < count($id_barang); $i++): ?>
                    <tr>
                        <td><?= $id_barang[$i]; ?></td>
                        <td><?= $nama_barang[$i]; ?></td>
                        <td><?= $qty[$i]; ?></td>
                        <td>Rp <?= number_format($harga_subtotal[$i], 0, ',', '.'); ?></td>
                    </tr>
                <?php endfor; ?>
                
                
                </tbody>
            </table>
        </div>
        <div class="invoice-total">
            <p><strong>Total Pembayaran:</strong> Rp <?= number_format($harga_total, 0, ',', '.'); ?></p>
            <p><strong>Uang Dibayarkan:</strong> Rp <?= number_format($cash, 0, ',', '.'); ?></p>
            <p><strong>Kembalian:</strong> Rp <?= number_format($cashback, 0, ',', '.'); ?></p>
        </div>
        <div class="invoice-footer">
            <p>Terima kasih telah berbelanja bersama kami.</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    window.onload = function() {
        window.print();
    }
</script>
</body>
</html>









