<?php 



    if(del_history_trans($_POST['del_detail']) > 0) {
        
        echo "<script>
            alert('data berhasil dihapus !');
            document.location.href = 'detailTransaksi.php';
            </script>";

        }else{
            echo "<script>
                alert('data gagal dihapus !');
                </script>";
        }


?>