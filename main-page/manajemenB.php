<?php
require '../function/koneksi.php';
require 'act-item/function.php';
require 'function.php';

$items = show_item("SELECT * FROM barang");

if (isset($_POST["del"])) {
    if (del_item($_POST["id"], $_POST["img"]) > 0) {
        echo "<script>
                alert('Barang berhasil dihapus !');
            </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Barang</title>
    <link rel="stylesheet" href="../css/dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php require 'general/sidebar.php'; ?>

<style>
    .destination-card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-radius: 4px;
    }

    .destination-card {
        padding: 10px;
    }

    .destination-card2 {
        background-color: white;
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 15px;
        margin: 15px 0;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    .card-title {
        font-size: 1.25rem;
        margin: 10px 0;
    }

    .card-text {
        font-size: 1rem;
        color: #555;
    }

    .card-footer {
        padding: 10px 0;
        display: flex;
        justify-content: space-between;
    }
</style>

<div class="container my-4">
    <header class="text-center mb-4">
        <h1>Daftar Donuts</h1>
        <div class="input-group">
  <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username with two button addons">
  <button class="btn btn-outline-secondary" type="button">cari</button>
  <a href="tambah.php" class="btn btn-outline-secondary">tambah</a>
</div>
    </header>
    <main class="row g-4">
        <!-- Item -->
        <?php if ($items[0] == 0): ?>
            <div class="col-12">
                <div class="alert alert-warning" role="alert">
                    <?= $items[1]; ?>
                </div>
            </div>
        <?php else: ?>
            <?php foreach ($items as $item): ?>
                <div class="col-md-4">
                    <div class="card">
                        <div class="destination-card2">
                            <a href="...... .php" class="destination-link2">
                                <img src="../assets/images/items/<?= $item["image"]; ?>" alt="<?= $item["nama_barang"]; ?>">
                            </a>
                            <h5 class="card-title"><?= $item["nama_barang"]; ?></h5>
                            <p class="card-text">Harga: Rp <?= $item["harga_barang"]; ?></p>
                            <p class="card-text">Stock: <?= $item["stock"]; ?></p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <form action="act-item/edit.php" method="post">
                                <button type="submit" class="btn btn-primary btn-sm" name="edit" value="<?= $item["id_barang"]; ?>">Edit</button>
                            </form>
                            <form action="" method="post">
                                <input type="hidden" name="id" value="<?= $item["id_barang"]; ?>">
                                <input type="hidden" name="img" value="<?= $item["image"]; ?>">
                                <button type="submit" name="del" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
        
        
    </main>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>