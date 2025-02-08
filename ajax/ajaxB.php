<?php
    require '../function/koneksi.php';
    require '../main-page/function.php';



    $keyword = $_GET["search"];
    $barang = show_item("SELECT * FROM barang WHERE id_barang='$keyword'");

    if ($barang[0] != 0):
    foreach ($barang as $items):
    ?>



<tr>
    <td><?= $items["id_barang"]; ?></td>
    <td><?= $items["nama_barang"]; ?></td>
    <td><?= $items["harga_barang"]; ?></td>
    <td class="t">
        <input type="number" class="form-control qty" value="1" min="1">
        <p class="text-danger mb-0">Input tidak boleh kurang dari nol</p>
    </td>
    <td class="subtotal">0</td>
    <td><button class="btn btn-danger btn-sm delete">Hapus</button></td>
</tr>



    <?php endforeach; 
    
    else: ?>
        <tr>
            <td colspan="6" class="text-center"><?= $barang[1]; ?></td>
        </tr>
    <?php endif; ?>