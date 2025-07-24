<?php
// session_start();
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
        <div class="d-flex justify-content-between align-items-center mb-1">
            <h2 class="fw-semibold">Laporan Penjualan</h2>        
        </div>



<div class="d-flex justify-content-between">

<div class="d-flex align-self-end">

    <div class="align-self-center d-flex justify-content-start">
        <button class="btn btn-outline-success mb-4 me-3 d-print-none" onclick="window.print()">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-printer"><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"/><path d="M6 9V3a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v6"/><rect x="6" y="14" width="12" height="8" rx="1"/></svg>
        </button>
        <form action="" method="post">
            <button type="submit" name="refresh" class="d-print-none mb-4 opacity-75 d-flex justify-content-center align-items-center btn btn-outline-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-rotate-ccw me-2"><path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"/><path d="M3 3v5h5"/></svg>
                Refresh
            </button>
        </form>
    </div>
</div>
    <div class="d-flex flex-row-reverse d-print-none">
        <form action="" method="post">
            <table class="mb-3">
                <tr class="fw-lighter" style="font-size: 105%;">
                    <td class="py-2">Tanggal awal</td>
                    <td>Tanggal akhir</td>
                    <td></td>
                </tr>
                <tr class="">
                    <td class="">
                        <input class="rounded rounded-3 p-1 me-4" id="start-date" type="date" name="startDate">
                    </td>
                    <td>
                        <input class="rounded rounded-3 p-1 me-4" id="end-date" type="date" name="endDate">
                    </td>
    
                    <td class="">
                        <button type="submit" class="mb-1 btn btn-primary border border-dark border-2 shadow-lg  d-flex justify-content-center align-items-center" name="filter" style="font-size: medium;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-filter me-1"><polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"/></svg>
                            Filter
                        </button>
                    </td>
                </tr>
    
                </table>
        </form>
    </div>
</div>









        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr class="text-center">
                                <th>ID Transaksi</th>
                                <th>ID Barang</th>
                                <th>Jumlah Barang</th>
                                <th>Harga Satuan</th>
                                <th class="d-print-none">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>



                            <?php
                            if (isset($_POST['refresh'])) {
                                if (isset($_SESSION["filter"]) && $_SESSION["filter"] === true) {
                                    unset($_SESSION['filter']);
                                }
                            }



                            if (isset($_POST["filter"])) {
                                $_SESSION['startDate'] = $_POST["startDate"];
                                $_SESSION['endDate'] = $_POST["endDate"];
                                $_SESSION["filter"] = true;
                            }
                            if (isset($_SESSION["filter"])) {
                                $startDate = $_SESSION["startDate"];
                                $endDate = $_SESSION["endDate"];
                                $penjualan = query("SELECT detil_penjualan.id_barang, detil_penjualan.jml_barang, detil_penjualan.harga_satuan, detil_penjualan.id_transaksi_detil,
                                                                    barang.nama_barang, 
                                                                    penjualan.tgl_transaksi, penjualan.total_transaksi, penjualan.nomor_transaksi, penjualan.id_pelanggan
                                                            FROM detil_penjualan 
                                                            INNER JOIN penjualan ON detil_penjualan.id_transaksi = penjualan.id_transaksi 
                                                            INNER JOIN barang ON detil_penjualan.id_barang = barang.id_barang 
                                                            WHERE tgl_transaksi BETWEEN '$startDate' AND '$endDate' 
                                                            ORDER BY tgl_transaksi ASC;");
                            }else{
                                $penjualan = query("SELECT detil_penjualan.id_barang, detil_penjualan.jml_barang, detil_penjualan.harga_satuan,  detil_penjualan.id_transaksi_detil,
                                                                    barang.nama_barang, 
                                                                        penjualan.tgl_transaksi, penjualan.total_transaksi, penjualan.nomor_transaksi, penjualan.id_pelanggan
                                                                            
                                                                            FROM detil_penjualan INNER JOIN penjualan ON detil_penjualan.id_transaksi = penjualan.id_transaksi 
                                                                            INNER JOIN barang ON detil_penjualan.id_barang = barang.id_barang 
                                                                        ");
                        }
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