
<?php
// session_start();
require '../function/koneksi.php';
require 'function.php';
require 'act-client/function.php';



$style_pagination = [ " ", " ", " ", "active" ];

if (isset($_POST['submit'])) {
    if ($_POST['submit'] == "edit") {
        
        if (updateP($_POST) > 0) {
            echo "<script>

            alert('Perubahan telah berhasil disimpan!');
            const modal = bootstrap.Modal.getInstance(document.getElementById('editPelanggan'));
            modal.hide();

                </script>";

                $_POST['submit'] = '';
                $_POST['id'] = '';
                $_POST['username'] = '';
                $_POST['gender'] = '';
    }}












    if ($_POST['submit'] == "tambah") {
        if (isset($_POST['token']) && $_POST['token'] === $_SESSION['token']) {
            unset($_SESSION['token']);
            
            $data = [$_POST['nama'], $_POST['gender']];
            if (add($data) > 0) {
                echo "<script>
                
                        alert('Data telah berhasil ditambahkan !');
                        const modal = bootstrap.Modal.getInstance(document.getElementById('editPelanggan'));
                        modal.hide();
                        
                    </script>";
            }
        }else {
            // Token salah: Redirect ke halaman yang sama tanpa memproses data
            header("Location: " . $_SERVER['PHP_SELF']);
            exit();
        }
        
    }
}


if (isset($_POST['hapus_client'])) {
    $_SESSION['akses_delete_valid'] = true;
    header("location: act-client/del.php?id=" . $_POST['hapus_client']);
}
?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Donuts - Manajemen Pelanggan</title>
    <link rel="stylesheet" href="../css/dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .nav .child-nav a:hover{
            background-color: black !important;
            padding: 7px;
            border-radius: 10px !important;
        }
    </style>
</head>
<body>

<!-- menampilkan sidebar -->
<?php require 'general/sidebar.php';?>


    <div class="main-content">
        <div class="container mt-4">
            <div class="d-flex justify-content-around align-items-center mb-5">
                <h3 class="fw-semibold">Manajemen Pelanggan</h3>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahPelanggan">
                    Tambah Pelanggan
                </button>
            </div>










        <div class="d-flex justify-content-center">
            <div class="card w-75 text-center">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pelanggan</th>
                                    <th>Gender</th>

                                    <?php if ($role === 'Admin') :?>
                                        <th>Aksi</th>
                                    <?php endif; ?>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                        $pelanggan = query("SELECT * FROM pelanggan");
                                            $no = 1;



                                            if ($pelanggan != "Data tidak ada"): 
                                                foreach ($pelanggan as $plg):?>
                                <?php require 'act-client/showData.php'; $no++; ?>
                                
                                <?php endforeach; ?>
                        <?php else: 
                                    echo "<tr><td colspan='4' style='text-align:center;padding: 30px 0px;'>". $pelanggan ."</td></tr>";
                                endif;
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>



        </div>
    </div>











    <!-- Modal Tambah Pelanggan -->
    <?php require 'act-client/add.php' ?>


    <!-- Modal Edit Pelanggan -->
    <?php require 'act-client/update.php'; ?>
    <script src="../js/script.js"></script>
    <script src="../js/show-data.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>




