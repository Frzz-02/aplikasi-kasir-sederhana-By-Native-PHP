
<?php  ?>




<tr>
    <td><?= $no ?></td>
    <td><?= $plg['nama']; ?></td>
    <td><?= $plg['gender']; ?></td>
    <td>
        <!-- onclick="show()" -->
        <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editPelanggan"
        data-id="<?= $plg['id_pelanggan']; ?>" 
        data-nama="<?= $plg['nama']; ?>" 
        data-gender="<?= $plg['gender']; ?>"
        >Edit</button>
        <a href="act-client/del.php?id=<?= $plg['id_pelanggan'];  ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin ingin menghapus data ini ?');">Hapus</a>
    </td>
</tr>