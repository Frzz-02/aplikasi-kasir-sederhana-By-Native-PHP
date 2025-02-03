<?php 

require '../../function/koneksi.php';
require 'function.php';



$message = "";
if (isset($_POST["add"])) {
    // echo 'oke wes dipenyet';die;
    // var_dump($_FILES);die;

    $tambahGambar = add_item($_POST, $_FILES["image"]);
    // var_dump($tambahGambar);die;
    
    if ($tambahGambar[0] > 0) {
        echo "<script>
        alert( '" . $tambahGambar[1] . "');
        document.location.href='../manajemenB.php';
        </script>";

    }else{
        $message = $tambahGambar[1];
    }
}




?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h4> Tambah Barang</h4>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label class="form-label">Nama Barang</label>
                                <input type="text" name="nama_barang" class="form-control" required>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Harga</label>
                                <input type="number" name="harga" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Stok</label>
                                <input type="number" name="stok" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Upload Gambar</label>
                                <input type="file" name="image" class="form-control" accept="image/*" required>
                                <p class="mt-1 mb-5 text-danger"><?= $message; ?></p>
                            </div>

                            <div class="mb-3">
                                <button type="submit" value="add" name="add" class="btn btn-success">Tambah barang</button>
                                <a href="../manajemenB.php" class="btn btn-secondary">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>