<?php

require 'function.php';
$message = 1;

if (isset($_POST['submit'])) {
        $kondisi = register($_POST);
    
        if ($kondisi[0] > 0) {//jika berhasil masukk
            
            echo "
                <script>
                alert('" . $kondisi[1] . "');
                document.location.href='login.php';
                </script>
            ";
            
        }else{
            $message = $kondisi[0];
        }
    }

// $message = '';

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $username = mysqli_real_escape_string($koneksi, $_POST['username']);
//     $password = mysqli_real_escape_string($koneksi, $_POST['password']);

    
//     // Simpan ke database
//     $sql = "INSERT INTO user (username, password_,level_) VALUES ('$username', '$password', 'pegawai')";

//     if (mysqli_query($koneksi, $sql)) {
//         $message = "Registrasi berhasil. Silakan login.";
//     } else {
//         $message = "Error: " . mysqli_error($koneksi);
//     }

//     mysqli_close($koneksi);
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registasi Karyawan</title>
    <link rel="stylesheet" href="../css/login.css">

    <style>
        body {
    /* Option 1: Gradient with image overlay */
    background: linear-gradient(rgba(4, 107, 107, 0.075), rgba(22, 206, 230, 0.11)), url('../assets/serigala.jpg');
    background-size: cover;
    background-position: center;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;

}
    </style>

</head>
<body>
    <div class="container">
        <!-- Header Section -->
        <div class="logo-container">
            <img src="../assets/logo.png" alt="Logo" class="logo">
        </div>
        
        <!-- Login Box -->
        <div class="login-box">
            <h2>Registrasi Pengguna</h2>
            <!-- <p>Regristasi Pengguna</p> -->
            
            <?php if($message == 0){
                echo "<p style='color: red;'>" . $kondisi[1]. "</p>";
                }?>
            

            <!-- Login Form -->
            <form action="" method="POST">
                <div class="input-group">
                    <label for="username" class="form-label">Username</label>
                    <input type="username" class="form-control" id="username" name="username" required>
                </div>

                <div class="input-group">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>

                <button type="submit" class="login-btn" name="submit">Register</button>

                </div>
            </form>
        </div>
    </div>
</body>
</html>
