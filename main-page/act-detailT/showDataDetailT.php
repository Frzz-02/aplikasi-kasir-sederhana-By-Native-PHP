<tr>
    <td><?= $no ?></td>
    <td><?= $pj['id_transaksi']; ?></td>
    <td><?= $pj['id_barang']; ?></td>
    <td><?= $pj['jml_barang']; ?></td>
    <td><?= $pj['harga_satuan']; ?></td>
    <td>
        <class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editPenjualan"
        data-id="<?= $pj['id_transaksi_detil']; ?>" 
        data-id_transaksi="<?= $pj['id_transaksi']; ?>" 
        data-id_barang="<?= $pj['id_barang']; ?>"
        data-jml_barang="<?= $pj['jml_barang']; ?>"
        data-harga_satuan="<?= $pj['harga_satuan']; ?>">
        </class=>
        
        <a href="invoice.php?xxx=<?= $pj['id_transaksi']; ?>" class="btn btn-sm btn-info">Invoice</a>
        
        <button class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini ?');">Hapus</button>
    </td>
</tr>