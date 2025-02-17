<?php

function generate_ID_Transaction(){
    $conn = new PDO("mysql:host=localhost;dbname=toko", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Ambil ID terbaru
    $stmt = $conn->query("SELECT MAX(id_transaksi) AS last_id FROM penjualan");
    $row = $stmt->fetch();
    $last_id = $row['last_id'] ? $row['last_id'] + 1 : 1;

    $nomor_transaksi = 'TRX-' . str_pad($last_id, 5, '0', STR_PAD_LEFT);

    // $stmt = $conn->prepare("INSERT INTO transaksi (nomor_transaksi) VALUES (:nomor)");
    // $stmt->bindParam(':nomor', $nomor_transaksi);
    // $stmt->execute();

    return $nomor_transaksi;
}


