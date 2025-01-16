<?php
    require '../function/koneksi.php';

    function calculate($table){
        global $koneksi;

        $query = "SELECT * FROM $table";
        $result = mysqli_query($koneksi, $query);

        return mysqli_num_rows($result);
    }



?>