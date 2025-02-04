<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi</title>
    <link rel="stylesheet" href="../css/dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .table-container {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <?php require 'general/sidebar.php'; ?>

    <div class="container">
        <h1 class="mt-4">Daftar Barang</h1>
        
        <!-- Search Bar -->
        <div class="form-group">
            <input type="text" id="search" class="form-control" placeholder="Cari barang...">
        </div>

        <!-- Table -->
        <div class="table-container">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Harga</th>
                        <th>Qty</th>
                        <th>Subtotal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody id="item-list">
                    <tr>
                        <td>001</td>
                        <td>Barang A</td>
                        <td>10000</td>
                        <td><input type="number" class="form-control qty" value="1" min="1"></td>
                        <td class="subtotal">10000</td>
                        <td><button class="btn btn-danger btn-sm delete">Hapus</button></td>
                    </tr>
                    <tr>
                        <td>002</td>
                        <td>Barang B</td>
                        <td>20000</td>
                        <td><input type="number" class="form-control qty" value="1" min="1"></td>
                        <td class="subtotal">20000</td>
                        <td><button class="btn btn-danger btn-sm delete">Hapus</button></td>
                    </tr>
                    <!-- Tambahkan lebih banyak barang sesuai kebutuhan -->
                </tbody>
            </table>
        </div>
    </div>

    <script>
        // Fungsi untuk menghitung subtotal
        function calculateSubtotal() {
            const rows = document.querySelectorAll('#item-list tr');
            rows.forEach(row => {
                const price = parseFloat(row.cells[2].innerText);
                const qty = parseInt(row.querySelector('.qty').value);
                const subtotal = price * qty;
                row.querySelector('.subtotal').innerText = subtotal;
            });
        }

        // Event listener untuk qty input
        document.getElementById('item-list').addEventListener('input', function(e) {
            if (e.target.classList.contains('qty')) {
                calculateSubtotal();
            }
        });

        // Event listener untuk tombol hapus
        document.getElementById('item-list').addEventListener('click', function(e) {
            if (e.target.classList.contains('delete')) {
                e.target.closest('tr').remove();
                calculateSubtotal(); // Update subtotal setelah menghapus
            }
        });

        // Event listener untuk pencarian
        document.getElementById('search').addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            const rows = document.querySelectorAll('#item-list tr');
            rows.forEach(row => {
                const itemName = row.cells[1].innerText.toLowerCase();
                if (itemName.includes(searchTerm)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    </script>
    

    
    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>