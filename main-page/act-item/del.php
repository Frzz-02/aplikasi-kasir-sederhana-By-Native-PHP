<?php

if (isset($_POST["del"])) {
        
    if (del_item($_POST["id"], $_POST["img"]) > 0 ) {
        echo "<script>
                alert('Barang berhasil dihapus !');
                document.location.href= 'manajemenB.php';
            </script";
    }
}