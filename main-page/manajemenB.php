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

<?php
    require 'general/sidebar.php';
?>

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

.btn {
    padding: 8px 12px;
    border: none;
    border-radius: 4px;
    text-decoration: none;
    color: white;
    cursor: pointer;
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
    width: 100%;
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
        <div class="input-group my-3">
            <input type="text" class="form-control" placeholder="Cari barang...">
            <button class="btn btn-primary">Cari</button>
            <button class="btn btn-success float-end">Tambah Barang</button>
        </div>
    </header>

    <main class="row g-4">
        <!-- Item -->
        
        <div class="col-md-4">
            <div class="card">
                <div class="destination-card2">
                    <a href="...... .php" class="destination-link2">
                        <img src="../assets/rusa.jpg" alt="Kyoto">
                    </a>
                    <h5 class="card-title">Donat Cream Coklat</h5>
                    <p class="card-text">Harga: Rp 1.000.000</p>
                    <p class="card-text">Stock : 12</p>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <a href="editBarang.php" class="btn btn-primary btn-sm">Edit</a>
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="destination-card2">
                    <a href="...... .php" class="destination-link2">
                        <img src="../assets/rusa.jpg" alt="Kyoto">
                    </a>
                    <h5 class="card-title">Donat Cream Coklat</h5>
                    <p class="card-text">Harga: Rp 1.000.000</p>
                    <p class="card-text">Stock : 12</p>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <a href="editBarang.php" class="btn btn-primary btn-sm">Edit</a>
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="destination-card2">
                    <a href="...... .php" class="destination-link2">
                        <img src="../assets/rusa.jpg" alt="Kyoto">
                    </a>
                    <h5 class="card-title">Donat Cream Coklat</h5>
                    <p class="card-text">Harga: Rp 1.000.000</p>
                    <p class="card-text">Stock : 12</p>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <a href="editBarang.php" class="btn btn-primary btn-sm">Edit</a>
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="destination-card2">
                    <a href="...... .php" class="destination-link2">
                        <img src="../assets/rusa.jpg" alt="Kyoto">
                    </a>
                    <h5 class="card-title">Donat Cream Coklat</h5>
                    <p class="card-text">Harga: Rp 1.000.000</p>
                    <p class="card-text">Stock : 12</p>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <a href="editBarang.php" class="btn btn-primary btn-sm">Edit</a>
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="destination-card2">
                    <a href="...... .php" class="destination-link2">
                        <img src="../assets/rusa.jpg" alt="Kyoto">
                    </a>
                    <h5 class="card-title">Donat Cream Coklat</h5>
                    <p class="card-text">Harga: Rp 1.000.000</p>
                    <p class="card-text">Stock : 12</p>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <a href="editBarang.php" class="btn btn-primary btn-sm">Edit</a>
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="destination-card2">
                    <a href="...... .php" class="destination-link2">
                        <img src="../assets/rusa.jpg" alt="Kyoto">
                    </a>
                    <h5 class="card-title">Donat Cream Coklat</h5>
                    <p class="card-text">Harga: Rp 1.000.000</p>
                    <p class="card-text">Stock : 12</p>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <a href="editBarang.php" class="btn btn-primary btn-sm">Edit</a>
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="destination-card2">
                    <a href="...... .php" class="destination-link2">
                        <img src="../assets/rusa.jpg" alt="Kyoto">
                    </a>
                    <h5 class="card-title">Donat Cream Coklat</h5>
                    <p class="card-text">Harga: Rp 1.000.000</p>
                    <p class="card-text">Stock : 12</p>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <a href="editBarang.php" class="btn btn-primary btn-sm">Edit</a>
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="destination-card2">
                    <a href="...... .php" class="destination-link2">
                        <img src="../assets/rusa.jpg" alt="Kyoto">
                    </a>
                    <h5 class="card-title">Donat Cream Coklat</h5>
                    <p class="card-text">Harga: Rp 1.000.000</p>
                    <p class="card-text">Stock : 12</p>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <a href="editBarang.php" class="btn btn-primary btn-sm">Edit</a>
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="destination-card2">
                    <a href="...... .php" class="destination-link2">
                        <img src="../assets/rusa.jpg" alt="Kyoto">
                    </a>
                    <h5 class="card-title">Donat Cream Coklat</h5>
                    <p class="card-text">Harga: Rp 1.000.000</p>
                    <p class="card-text">Stock : 12</p>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <a href="editBarang.php" class="btn btn-primary btn-sm">Edit</a>
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="destination-card2">
                    <a href="...... .php" class="destination-link2">
                        <img src="../assets/rusa.jpg" alt="Kyoto">
                    </a>
                    <h5 class="card-title">Donat Cream Coklat</h5>
                    <p class="card-text">Harga: Rp 1.000.000</p>
                    <p class="card-text">Stock : 12</p>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <a href="editBarang.php" class="btn btn-primary btn-sm">Edit</a>
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="destination-card2">
                    <a href="...... .php" class="destination-link2">
                        <img src="../assets/rusa.jpg" alt="Kyoto">
                    </a>
                    <h5 class="card-title">Donat Cream Coklat</h5>
                    <p class="card-text">Harga: Rp 1.000.000</p>
                    <p class="card-text">Stock : 12</p>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <a href="editBarang.php" class="btn btn-primary btn-sm">Edit</a>
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="destination-card2">
                    <a href="...... .php" class="destination-link2">
                        <img src="../assets/rusa.jpg" alt="Kyoto">
                    </a>
                    <h5 class="card-title">Donat Cream Coklat</h5>
                    <p class="card-text">Harga: Rp 1.000.000</p>
                    <p class="card-text">Stock : 12</p>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <a href="editBarang.php" class="btn btn-primary btn-sm">Edit</a>
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </div>
            </div>
        </div>
        
    </main>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>