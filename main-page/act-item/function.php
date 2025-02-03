<?php

function add_item($data, $image){
    global $koneksi;
    $namaB = mysqli_real_escape_string($koneksi, htmlspecialchars( $data["nama_barang"]));
    $harga = mysqli_real_escape_string($koneksi, htmlspecialchars( $data["harga"]));
    $stok = mysqli_real_escape_string($koneksi, htmlspecialchars( $data["stok"]));
    $gambar = upload($image);
    if ($gambar[0] == 0) {
        return [0, $gambar[1]];
    }

    $gambar[1] = mysqli_real_escape_string($koneksi, htmlspecialchars( $gambar[1]));
    
    $query = "INSERT INTO barang VALUES ('','$namaB', '$harga', '$stok', '$gambar[1]')";
    mysqli_query($koneksi, $query);
    return [mysqli_affected_rows($koneksi), 'Data berhasil ditambahkan !'];
}














function upload($image){
    $nama = $image["name"];
    $ukuran = $image["size"];
    $error = $image["error"];
    $tmpname = $image["tmp_name"];

    //tdk ada gambar diupload
    if ($error === 4) {
        return [0, "Tolong upload gambar terlebih dahulu untuk melanjutkan !"];
    }

    
    
    //jika ekstensinya bukan jpg png atau jpeg
    $eksGV = ['png', 'jpg', 'jpeg'];
    $eksG = explode('.', $nama);
    $eksG = strtolower(end($eksG));

    if (!in_array($eksG, $eksGV)) {
        return[0, "Tolong upload gambar dengan ekstensi yang valid (png, jpg atau jpeg)"];
    }
    
    
    //jika sizenya melebihi batas
    if ($ukuran > 5000000) {
        return [0, "Ukuran gambar terlalu besar !"];
    }


    //lolos pengecekan gambar siap upload
    $namaBaru = uniqid();
    $namaBaru .= '.' . $eksG;
    move_uploaded_file($tmpname, '../../assets/images/items/' . $namaBaru);
    return [1, $nama];
}











function del_item($id, $gambar){
    global $koneksi;

    if (file_exists("../assets/images/items/$gambar")) {
        unlink("../assets/images/items/$gambar");
    }

    $query = "DELETE FROM barang WHERE id_barang = '$id'";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}










function edit_item($data, $image){
    global $koneksi;
    $namaB = mysqli_real_escape_string($koneksi, htmlspecialchars( $data["nama_barang"]));
    $harga = mysqli_real_escape_string($koneksi, htmlspecialchars( $data["harga"]));
    $stok = mysqli_real_escape_string($koneksi, htmlspecialchars( $data["stok"]));
    $id = mysqli_real_escape_string($koneksi, htmlspecialchars( $data["id"]));
    $gambarLama = mysqli_real_escape_string($koneksi, htmlspecialchars( $data["gambar_lama"]));

    if ($image["error"]  === 4) {
        # code.
    }

    $gambar = upload($image);
    if ($gambar[0] == 0) {
        return [0, $gambar[1]];
    }

    $gambar[1] = mysqli_real_escape_string($koneksi, htmlspecialchars( $gambar[1]));
    
    $query = "UPDATE barang SET nama_barang='$namaB',harga_barang='$harga',stock='$stok', image='$gambar' WHERE id='$id' ";

    mysqli_query($koneksi, $query);
    return [mysqli_affected_rows($koneksi), 'Data berhasil ditambahkan !'];
}