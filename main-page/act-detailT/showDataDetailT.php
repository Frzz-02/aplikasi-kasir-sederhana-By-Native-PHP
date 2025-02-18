<tr>
    <td><?= $pj['nomor_transaksi']; ?></td>
    <td><?= $pj['id_barang']; ?></td>
    <td><?= $pj['jml_barang']; ?></td>
    <td><?= $pj['harga_satuan']; ?></td>
    <td>
        <form action="invoice.php" method="post">
            <input type="hidden" name="id_barang" value="<?= $pj['id_barang']; ?>">
            <input type="hidden" name="nomor_transaksi" value="<?= $pj['id_barang']; ?>">
            <input type="hidden" name="id_pelanggan" value="<?= $pj['id_barang']; ?>">

            <button type="submit" class="btn btn-sm btn-info" name="Invoice">Invoice</button>
        </form>


        <form action="" method="post">
            <!-- <input type="hidden" name="id" value=""> -->
            <button type="submit" 
                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini ?');" 
                            name="del_detail" 
                                class="btn btn-danger btn-sm"
                                    value="<?= $pj["id_transaksi_detil"]; ?>">Hapus</button>
        </form>



        <!-- <class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editPenjualan"
        data-id="<?//= $pj['id_transaksi_detil']; ?>" 
        data-id_transaksi="<?//= $pj['id_transaksi']; ?>" 
        data-id_barang="<?//= $pj['id_barang']; ?>"
        data-jml_barang="<?//= $pj['jml_barang']; ?>"
        data-harga_satuan="<//?= $pj['harga_satuan']; ?>">
        -->
        
        <!-- <a href="invoice.php?xxx=<?//= $pj['id_transaksi']; ?>" class="btn btn-sm btn-info">Invoice</a> -->
        
        <!-- <button class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini ?');">Hapus</button> -->
    </td>
</tr>