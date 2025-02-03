<?php
    function calculate($table){
        global $koneksi;

        $query = "SELECT * FROM $table";
        $result = mysqli_query($koneksi, $query);

        return mysqli_num_rows($result);
    }



    function show_item($query){
        global $koneksi;
        $result = mysqli_query($koneksi, $query);

    if(mysqli_num_rows($result) == 0){
        return [0,"data tidak ada"];
    }
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row; 
    }
    return $rows;

    }
?>