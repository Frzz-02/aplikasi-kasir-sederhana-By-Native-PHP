<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
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
</style>

</head>
<body>
    <div class="container my-4">
    <header class="text-center mb-4">
    <h1>Daftar Donuts</h1>
    <div class="input-group my-3">
        <input type="text" class="form-control" placeholder="Cari barang...">
        <button class="btn btn-primary">Cari</button>
    </div>
    <button class="btn btn-success float-end">Tambah Barang</button>
</header>

        <main class="row g-4">
            <div class="col-md-4">
                <div class="card">
                <div class="card-header d-flex justify-content-end">
                    <button class="btn btn-warning btn-sm">Edit</button>
                </div>

                    <div class="destination-card">
                    <a href="...... .php" class="destination-link">
                        <img src="assets/cream.jpg" alt="Kyoto">
                    </a>
                    
                </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Donat Cream Coklat</h5>
                        <p class="card-text">Harga: Rp 1.000.000</p>
                        <p class="card-text">Stock : 12</p>
                    </div>
                    <div class="card-footer d-flex justify-content-end">
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </div>

                </div>
            </div>


            
            <!-- Duplikat div.card untuk menambahkan barang lainnya -->
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
