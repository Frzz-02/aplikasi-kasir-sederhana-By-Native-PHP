<?php
require '../function/koneksi.php';



function login($data){
    global $koneksi;
    $usname = mysqli_real_escape_string($koneksi, $data[0]);
    $pass = mysqli_real_escape_string($koneksi, $data[1]);

    $query = "SELECT * FROM user_toko WHERE username='$usname'";
            $result = mysqli_query($koneksi, $query);


            if(mysqli_num_rows($result) === 1){
                $row = mysqli_fetch_assoc($result);
                if($row['password_usr'] == $pass){
                    return [1, $row["username"], $row["role"]];
                }else{
                    return [0, "password salah"];
                }
            }else{
                return [0, "Data tidak ditemukan"];
            }
        }


// 

        function register($data){
            global $koneksi;

            $usname = mysqli_real_escape_string($koneksi, $data['username']);;
            $pass = mysqli_real_escape_string($koneksi, $data['password']);

            $query = "SELECT * FROM user_toko WHERE username= '$usname'";
            $result = mysqli_query($koneksi, $query);

            if (mysqli_num_rows($result) > 0) {
                return [0, "Data sudah tersedia"];
            }

            


            $query = "INSERT INTO user_toko VALUES ('', '$usname', '$pass', 'pegawai')";
            $result = mysqli_query($koneksi, $query);
            if (mysqli_affected_rows($koneksi)) {
                return [1, "Data berhasil ditambahkan"];
            }
        }

