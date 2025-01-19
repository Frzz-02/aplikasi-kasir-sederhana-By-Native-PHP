<?php 



function updateP($data){
    global $koneksi;

    $nama = mysqli_real_escape_string($koneksi, htmlspecialchars( $data['username']));
    $gender = mysqli_real_escape_string($koneksi, htmlspecialchars($data['gender'] ));
    $target = $data['id'];
    // $query = "SELECT * FROM pelanggan WHERE nama = '$nama'";
    // if (mysqli_num_rows($koneksi,$query) > 0) {
    //     return [0, "Data yang anda masukkan sudah ada sebelumnya, Silahkan masukkan data yang lain !"];
    // }

    $query = "UPDATE pelanggan 
                SET nama='$nama', gender='$gender' 
                    WHERE id_pelanggan='$target'";//ini akan diubah karena nama tidak dapat menjadi patokan utk target
    
    mysqli_query($koneksi,$query);
    return mysqli_affected_rows($koneksi);
}









function del($data){
    require '../../function/koneksi.php';

    $query = "DELETE FROM pelanggan WHERE id_pelanggan = '$data'";

    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);

}







function add($data){
    global $koneksi;
    $nama = mysqli_real_escape_string($koneksi, htmlspecialchars( $data[0]));
    $gender = mysqli_real_escape_string($koneksi, htmlspecialchars( $data[1]));

    $query = "INSERT INTO pelanggan VALUES ('','$nama', '$gender')";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}








function query($query){
    global $koneksi;
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) == 0) {
        return "Data tidak ada";
    }


    $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row; 
        }
        return $rows;
}

?>