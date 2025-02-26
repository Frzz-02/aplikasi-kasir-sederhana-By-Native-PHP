<?php
require '../function/koneksi.php';
require 'act-item/function.php';
require 'function.php';
session_start();

if (isset($_POST["cari"])) {
    $items = show_item("SELECT * FROM barang WHERE nama_barang LIKE '%" . $_POST["keyword"] . "%' OR id_barang LIKE '%" . $_POST["keyword"] . "%'");
} else {
    $items = show_item("SELECT * FROM barang");
}

require 'act-item/del.php';

$style_pagination = [ " ", " ", "active", " " ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Barang</title>
    <link rel="stylesheet" href="../css/dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>

        .nav .child-nav a:hover{
            background-color: black !important;
            padding: 7px;
            border-radius: 10px !important;
        }


        .destination-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 4px;
        }
        .destination-card { padding: 10px; }
        .input-group {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 5px;
        }
        .input-group .btn-primary { margin-right: auto; }
        .input-group .btn-success { margin-left: 5px; }
        .btn-primary { background-color: #007bff; }
        .btn-primary:hover { background-color: #0056b3; }
        .btn-danger { background-color: #dc3545; }
        .btn-danger:hover { background-color: #c82333; }
        .destination-card2 {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            margin: 15px 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .destination-link2 img {
    width: 200px;
    height: 200px;
    object-fit: cover;
    border-radius: 4px;
    transition: transform 0.3s ease;
}

.destination-link2 img:hover {
    transform: scale(1.05);
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
</head>
<body>
    <?php require 'general/sidebar.php'; ?>
    
    <div class="container my-4">
        <header class="text-center mb-4">
            <h1>Daftar Donuts</h1>
            <form action="" method="post">
                <div class="input-group mb-3">
                    <input type="search" class="form-control p-2" name="keyword" placeholder="Cari barang berdasarkan ID atau nama barang">
                    <button class="btn btn-outline-secondary rounded-end-5 p-2 px-4" type="submit" name="cari">Search</button>
                    <a href="act-item/add.php" class="btn btn-success rounded-3 fw-bold px-3 ms-3" style="padding: 12px; margin-left: 15px;">+</a>
                </div>
            </form>
        </header>

        <main class="row g-4">
            <?php if ($items[0] == 0): ?>
                <?php echo $items[1]; ?>
            <?php else: ?>
                <?php foreach($items as $item): ?>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="destination-card2">
                                <a href="#" class="destination-link2">
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
    
    <script src="../js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
