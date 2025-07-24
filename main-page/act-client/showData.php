
<?php  ?>




<tr>
    <td><?= $no ?></td>
    <td ><?= $plg['nama']; ?></td>
    <td ><?= $plg['gender']; ?></td>
    
    <?php if ($role === 'Admin') :?>
        <td class="d-flex flex-row justify-content-center">
            <!-- onclick="show()" -->
            <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editPelanggan"
            data-id="<?= $plg['id_pelanggan']; ?>" 
            data-nama="<?= $plg['nama']; ?>" 
            data-gender="<?= $plg['gender']; ?>"
            >Edit</button>

            <form action="" method="post">
                <button type="submit" name="hapus_client" value="<?= $plg['id_pelanggan']; ?>" class="ms-2 btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin ingin menghapus data ini ?');">Hapus</button>
            </form>
        </td>
    <?php endif; ?>
</tr>