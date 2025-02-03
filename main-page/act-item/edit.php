<?php
    require '../../function/koneksi.php';
    require '../function.php';

    $id = $_POST["edit"];
    $items = show_item("SELECT * FROM barang where id_barang = '$id'");
    foreach($items as $item):
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h4> <?= $id; ?> Edit Barang</h4>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?= $id; ?>">
                            <input type="hidden" name="gambar_lama" value="<?= $item['gambar']; ?>">
                            
                            
                            <div class="mb-3">
                                <label class="form-label">Nama Barang</label>
                                <input type="text" name="nama_barang" class="form-control" value="<?= $item["nama_barang"]; ?>" required>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Harga</label>
                                <input type="number" name="harga" class="form-control" value="<?= $item["harga_barang"]; ?>" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Stok</label>
                                <input type="number" name="stok" class="form-control" value="<?= $item["stock"]; ?>" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Gambar Saat Ini</label>
                                <img src="../../assets/images/items/<?= $item["image"] ?>" id="currentImage" class="img-thumbnail" style="max-width: 200px;">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Ganti Gambar</label>
                                <input type="file" name="new_image" class="form-control" accept="image/*">
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
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


<?php endforeach; ?>