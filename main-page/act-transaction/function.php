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


function insert_data_transaksi($data, $token){
    global $koneksi;

    //array dan perlu di loop
    // $id_barang = $data["id_barang"];
    // $nama_barang = $data["nama_barang"];
    // $stock = $data["stock"];
    // $harga_subtotal = $data["harga_subtotal"];
    // $qty = $data["qty"];
    
    // //bukan array
    // $nomor_transaksi = $token;
    // $id_cust = $data["id_cust"];
    // $harga_total = $data["harga_total"];
    // $cash = $data["cash"];
    // $cashback = $data["cashBack"];

    $info = insert_data_Tsell($data, $token, $koneksi);

    if ($info[0] > 0) {
        insert_data_Tdetil($data, $info[1], $koneksi);
    }

    up_stock_Tbarang($data,$koneksi);
}









function up_stock_Tbarang ($data, $koneksi){
    for($i=0; $i < count($data["id_barang"]); $i++) {
        $id_barang = $data["id_barang"][$i];
        $stock = $data["stock"][$i] - $data["qty"][$i];
    
        $query = "UPDATE `barang` SET `stock`='$stock' WHERE id_barang='$id_barang'";
        mysqli_query($koneksi ,$query);
    }
}






function insert_data_Tsell($data, $no_transaksi, $koneksi){
    $id_cust = $data["id_cust"];
    $tgl = date("y-m-d");
    $harga_total = $data["harga_total"];


        $query = "INSERT INTO `penjualan` VALUES ('','$id_cust','$no_transaksi', '$tgl' ,'$harga_total')";
        mysqli_query($koneksi ,$query);

        return [mysqli_affected_rows($koneksi), mysqli_insert_id($koneksi) ];
}





function insert_data_Tdetil($data, $id_transaksi, $koneksi){
    
    $no = $id_transaksi;

    for ($i=0; $i < count($data["id_barang"]); $i++) {         
        $id_barang = $data["id_barang"][$i];
        $qty = $data["qty"][$i];
        $harga_subtotal = $data["harga_subtotal"][$i];

        $query = "INSERT INTO `detil_penjualan` VALUES ('','$no','$id_barang','$qty','$harga_subtotal')";
        mysqli_query($koneksi ,$query);
    }
    
}