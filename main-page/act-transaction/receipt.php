<?php 
    require '../../function/koneksi.php';
    require 'function.php';

    $token = generate_ID_Transaction();
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
        <title>struk</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        
    </head>



    <body>
        <div class="container bg-primary rounded-5 bg-opacity-25 p-5 mt-5">
            <div class="text-center fw-semibold fs-3">
                pembayaran berhasil
                <?= $token; ?>

                <br><br><?php var_dump($_POST); ?>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>