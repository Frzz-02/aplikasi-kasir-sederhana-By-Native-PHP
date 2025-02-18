<?php


function del_history_trans($data){
    global $koneksi;
    $query = "DELETE FROM detil_penjualan WHERE id_transaksi_detil = '$data'";

    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}