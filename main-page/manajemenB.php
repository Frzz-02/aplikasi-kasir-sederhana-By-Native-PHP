<?php
    require '../function/koneksi.php';
    require 'act-item/function.php';
    require 'function.php';
    session_start();


    if (isset($_POST["cari"])) {
        $items = show_item("SELECT * FROM barang WHERE nama_barang LIKE '%" . $_POST["keyword"] . "%'  OR id_barang LIKE '%" . $_POST["keyword"] . "%'");
    
    }else{
        $items = show_item("SELECT * FROM barang");
    }
    




    require 'act-item/del.php';


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
.input-group {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 5px;
}

.input-group .btn-primary {
    margin-right: auto;
}

.input-group .btn-success {
    margin-left: 5px;
}



.btn-primary {
    background-color: #007bff;
}

.btn-primary:hover {
    background-color: #0056b3;
}

.btn-danger {
    background-color: #dc3545;
}

.btn-danger:hover {
    background-color: #c82333;
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

.destination-link2 img {
    width: 65%;
    height: auto;
    border-radius: 4px;
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
    justify-content: space-between; /* Menggunakan space-between untuk menyebar tombol */
}
</style>
    
<div class="container my-4">
    <header class="text-center mb-4">
        <h1>Daftar Donuts</h1>
        
       
        <form action="" method="post">
        <div class="input-group mb-3">
            <input type="search" class="form-control" name="keyword" placeholder="Cari barang berdasarkan ID atau nama barang" aria-label="Cari barang berdasarkan ID atau nama barang" >
            <button class="btn btn-outline-secondary" type="submit" name="cari" id="button-addon2">Search</button>
            <a href="act-item/add.php" class="btn btn-success rounded-3" style="margin-left: 15px; ">+</a>
        </div>

    </form>
    </header>

    <div class="row"></div>
        <div class="col-md-12">
            <?php if (isset($error)): ?>
                <div class="alert alert-danger" role="alert">
                    <?= $error; ?>
                </div>
            <?php endif; ?>
</div>

        
        
        
        
        
        
        

       
        <!-- Item -->
        <?php if ($items[0] == 0):   echo $items[1];
                else:   foreach($items as $item):?>


                <div class="col-md-4">
                    <div class="card">
                        <div class="destination-card2">
                            <a href="...... .php" class="destination-link2">
                                <img src="../assets/images/items/<?=  $item["image"]; ?>" alt="<?= $item["nama_barang"]; ?>">
                            </a>
                        
                            <h5 class="card-title"><?= $item["nama_barang"]; ?></h5>
                            <p class="card-text">Harga: Rp <?= $item["harga_barang"]; ?></p>
                            <p class="card-text">Stock : <?= $item["stock"]; ?></p>
                        </div>


                        <div class="card-footer d-flex justify-content-between">
                            
                            <form action="act-item/edit.php" method="post"><button type="submit" class="btn btn-primary btn-sm" name="edit" value="<?= $item["id_barang"]; ?>">edit</button></form>
                            
                            <form action="" method="post">
                                <input type="hidden" name="id" value="<?= $item["id_barang"]; ?>">
                                <input type="hidden" name="img" value="<?= $item["image"]; ?>">
                                <button type="submit" name="del" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        
                        </div>
                    </div>
                </div>

        <?php endforeach; endif;?>            








    </main>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>