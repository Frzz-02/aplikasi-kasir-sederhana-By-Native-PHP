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
            WHERE detil_penjualan.id_barang = '$noItem' AND penjualan.id_pelanggan = '$noClient' AND penjualan.nomor_transaksi = '$noTrans'";

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





?>