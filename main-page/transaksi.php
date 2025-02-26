<?php 
    require '../function/koneksi.php';
    $style_pagination = [ " ", "active", " ", " " ];
?>



<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Barang</title>
    <link rel="stylesheet" href="../css/dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        .nav .child-nav a:hover{
            background-color: black !important;
            padding: 7px;
            border-radius: 10px !important;
        }
        .table-container {
            margin-top: 20px;
        }
        .total-container {
            margin-top: 20px;
        }

        .toast{
            /* top: 100; */
            z-index: 99999;
        }
    </style>
</head>
<body>

    
    
    
    
    
    
    <?php
    require 'general/sidebar.php';
    ?>

<div class=" notif-error position-absolute bottom-0 end-0">
        <?php //require '../ajax/ajax_notif.php'; ?>
</div>







    <div class="container">
        <h1 class="mt-4">Daftar Barang</h1>
        
        <!-- Search Bar -->
        <div class="form-group">
            <input type="text" id="search" class="form-control" placeholder="Cari berdasarkan kode barang">
        </div>





        <!-- Table -->
        <div class="table-container">
            
        
            <form name="frm" action="" method="post">


            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Harga</th>
                        <th>Qty</th>
                        <th>Subtotal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                    <tbody id="item-list">
                        <!-- <tr>
                            <td>001</td>
                            <td>Barang A</td>
                            <td>10000</td>
                            <td>
                                <input type="number" class="form-control qty" value="1" min="1">
                                <p class="text-danger mb-0">Input tidak boleh kurang dari nol</p>
                            </td>
                            <td class="subtotal">10000</td>
                            <td><button class="btn btn-danger btn-sm delete">Hapus</button></td>
                        </tr>
                        <tr>
                            <td>002</td>
                            <td>Barang B</td>
                            <td>20000</td>
                            <td>
                                <input type="number" class="form-control qty" value="1" min="1">
                                <p class="text-danger mb-0">Input tidak boleh kurang dari nol</p>
                            </td>
                            <td class="subtotal">20000</td>
                            <td><button class="btn btn-danger btn-sm delete">Hapus</button></td>
                        </tr> -->
                        <!-- Tambahkan lebih banyak barang sesuai kebutuhan -->
                    </tbody>
            
            </table>
        </div>

        <!-- Total Harga dan Pembayaran -->
        <div class="total-container">
        <div class="form-group">
            

                <label for="customer-id">Harga Total:</label>
                <input type="text" id="total-price" name="total-price" class="form-control" value="0" placeholder="Masukkan ID Pelanggan" disabled>
            </div>
            <div style="height: 20px;"></div>
            <!-- <h4>Total Harga: <span id="total-price">30000</span></h4> -->
            <div class="form-group">
                <label for="customer-id">ID Pelanggan:</label>
                <input name="id-cust" type="text" id="customer-id" class="form-control" placeholder="Masukkan ID Pelanggan">
            </div>
            <div style="height: 20px;"></div>
            <div class="form-group">
    <label for="payment">Pembayaran:</label>
    <input name="pay" type="number" id="payment" class="form-control" placeholder="Masukkan Jumlah Pembayaran">
</div>

<!-- Tambahkan div kosong untuk jarak -->
<div style="height: 20px;"></div>

<button id="submit" type="button" name="transaksiModal" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#transaction">
    Proses Pembayaran
</button>

</form>

<p class="testing"></p>
</div>

</div>


<form action="act-transaction/receipt.php" method="post">
    <?php require 'act-transaction/confirm-pay.php'; ?>
</form>










<script src="../js/jquery-3.7.1.min.js"></script>
<!-- <script src="../js/script.js"></script> -->


<script src="../js/script.js">
    // Event listener untuk tombol proses pembayaran
    // document.getElementById('submit').addEventListener('click', function() {
        //     const customerId = document.getElementById('customer-id').value;
        //     const payment = parseFloat(document.getElementById('payment').value);
        //     const totalPrice = parseFloat(document.getElementById('total-price').value);
        
        //     if (customerId === '') {
            //         alert('ID Pelanggan harus diisi!');
            //         return;
            //     }

        //     if (isNaN(payment) || payment < totalPrice) {
        //         alert('Jumlah pembayaran tidak valid atau kurang dari total harga!');
        //         return;
        //     }
        
        //     alert(`Pembayaran berhasil untuk ID Pelanggan: ${customerId}. Kembalian: ${payment - totalPrice}`);
        // });
        </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>


