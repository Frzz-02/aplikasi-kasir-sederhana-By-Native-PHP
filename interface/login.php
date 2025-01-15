<?php 
session_start();

    if (isset($_SESSION['login'])) {
            header('location: ../dashboard.php');die;
    }
    
    require 'function.php';
    

    if(isset($_POST['submit'])){
        $data = [$_POST['username'], $_POST['password']];
        $keterangan = login($data);
        if($keterangan[0] > 0){
            

            
            $_SESSION['role'] = $keterangan[2];
            $_SESSION['login'] = true;
            $nama = $keterangan[1];
            



            if ($keterangan[2] == 'admin'){

                echo "<script type='text/javascript'>
                var nama = '" . $nama . "';
                alert('Selamat datang ' + nama + ' !');
                document.location.href = '../dashboard.php';
                </script>";
            }else{

                echo "<script type='text/javascript'>
                        var nama = '" . $nama . "';
                        alert('Selamat datang ' + nama + ' !');
                        document.location.href = '../dashboard.php';
                        </script>
                        ";
            }
        }
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Web Kasir</title>
    <link rel="stylesheet" href="../css/login.css">

    <style>
        body {
    /* Option 1: Gradient with image overlay */
    background: linear-gradient(rgba(4, 107, 107, 0.075), rgba(22, 206, 230, 0.11)), url('../assets/rusa.jpg');
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
        <div class="logo-container">
            <img src="../assets/logo.png" alt="Logo" class="logo">
        </div>
        
        <div class="login-box">
            <h2>Log In</h2>
            <!-- Login Form -->
            <form action="" method=post>
                <div class="input-group">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>

                <div class="input-group">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>

                <input class="login-btn" type="submit" name="submit" value="login">

            </form>
        </div>
    </div>
</body>
</html>
