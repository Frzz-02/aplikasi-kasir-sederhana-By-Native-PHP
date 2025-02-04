<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Barang</title>
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .table-container {
            margin-top: 20px;
        }
        .total-container {
            margin-top: 20px;
        }
    </style>
</head>
<body>
<?php
    require 'general/sidebar.php';
?>
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

        <!-- Total Harga dan Pembayaran -->
        <div class="total-container">
        <div class="form-group">
            <form name="fr" action="">

                <label for="customer-id">Harga Total:</label>
                <input type="text" id="total-price" name="ht" class="form-control" value="30000" placeholder="Masukkan ID Pelanggan" disabled>
            </div>
            <h4>Total Harga: <span id="total-price">30000</span></h4>
            <div class="form-group">
                <label for="customer-id">ID Pelanggan:</label>
                <input type="text" id="customer-id" class="form-control" placeholder="Masukkan ID Pelanggan">
            </div>
            <div class="form-group">
                <label for="payment">Pembayaran:</label>
                <input type="number" id="payment" class="form-control" placeholder="Masukkan Jumlah Pembayaran">
            </div>
            <button id="submit" class="btn btn-primary">Proses Pembayaran</button>
        </form>
        </div>
    </div>

    <script>

        document.getElementById('search').addEventListener('keydown', function(event) {
            if (event.key === 'Enter') {
                // Mencegah aksi default (jika ada)
                // event.preventDefault();
                // // Mengambil nilai input
                // const customerId = this.value;
                // // Lakukan sesuatu dengan customerId jika perlu
                // console.log('ID Pelanggan:', customerId);
                // // Reset nilai input
                this.value = '';
                this.blur();
            }
        });






        // Fungsi untuk menghitung subtotal
        function calculateSubtotal() {
            const rows = document.querySelectorAll('#item-list tr');
            let total = 0;
            rows.forEach(row => {
                const price = parseFloat(row.cells[2].innerText);
                const qty = parseInt(row.querySelector('.qty').value);
                const subtotal = price * qty;
                row.querySelector('.subtotal').innerText = subtotal;
                total += subtotal;
            });
            document.forms['fr']['ht'].value = total;
            // document.getElementById('total-price').innerText = total;
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

       // Event listener untuk tombol tambah barang


        // Event listener untuk tombol proses pembayaran
        document.getElementById('submit').addEventListener('click', function() {
            const customerId = document.getElementById('customer-id').value;
            const payment = parseFloat(document.getElementById('payment').value);
            const totalPrice = parseFloat(document.getElementById('total-price').innerText);

            if (customerId === '') {
                alert('ID Pelanggan harus diisi!');
                return;
            }

            if (isNaN(payment) || payment < totalPrice) {
                alert('Jumlah pembayaran tidak valid atau kurang dari total harga!');
                return;
            }

            alert(`Pembayaran berhasil untuk ID Pelanggan: ${customerId}. Kembalian: ${payment - totalPrice}`);
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>