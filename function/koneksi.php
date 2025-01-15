<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "toko";

$koneksi = mysqli_connect($hostname, $username, $password, $database);
if ($koneksi->connect_error) {
    echo "koneksi database rusak ";
    die("error: " . $koneksi->connect_error);
}




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







