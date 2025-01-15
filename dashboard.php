<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Donuts - Admin Dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="sidebar">
        <div class="logo-container">
            <img src="assets/logo.png" alt="World Donuts Logo" class="logo">
            <span class="logo-text">ADMIN DASHBOARD</span>
        </div>
        <ul class="nav-menu">
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="interface/register.php">Register Pengguna</a></li>
            <li><a href="#">Transaksi</a></li>
            <li><a href="manajemenB.php">Manajemen Barang</a></li>
            <li><a href="manajemenP.php">Manajemen Pelanggan</a></li>
            <li><a href="#">Invoice</a></li>
            <li><a href="#">Laporan</a></li>
            <li><a href="function/logout.php">Logout</a></li>
        </ul>
    </nav>


    <!-- <section id="destinations">
            <h2>Popular donuts</h2>
            <div class="destination-grid">
                <div class="destination-card">
                    <div class="destination-card">
                        <a href="detailtokyo.html" class="destination-link">
                            <img src="assets/donatori.jpg" alt="Tokyo">
                            <h3>Original DONUTS</h3>
                            <p>Simplicity at its sweetest</p>
                        </a>
                    </div>
                    
                </div>
                <div class="destination-card">
                    <img src="assets/meses.jpg" alt="Kyoto">
                    <h3>Sprinkles DONUTS</h3>
                    <p>A splash of joy in every bite</p>
                </div>
                <div class="destination-card">
                    <img src="assets/winter.jpg" alt="Mount Fuji">
                    <h3>Winter DONUTS</h3>
                    <p>Chill vibes, warm and cool flavors</p>
                </div>
                <div class="destination-card">
                    <img src="assets/cream.jpg" alt="Yokohama">
                    <h3>Cream DONUTS</h3>
                    <p>Smooth, creamy, and unforgettable</p>
                </div>
            </div>
        </section> -->

    <div class="main-content">
        <div class="header">
            <h1>Welcome to World Donuts Admin Dashboard</h1>
        </div>

        <div class="dashboard-grid">
            <div class="dashboard-card">
                <h3>Total Penjualan</h3>
                <p>Rp 0</p>
            </div>
            <div class="dashboard-card">
                <h3>Total Produk</h3>
                <p>0 items</p>
            </div>
            <div class="dashboard-card">
                <h3>Total Pelanggan</h3>
                <p>0 customers</p>
            </div>
            <div class="dashboard-card">
                <h3>Transaksi Hari Ini</h3>
                <p>0 transactions</p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
