<?php
$_SESSION['token'] = bin2hex(random_bytes(32));

?>





<div class="modal fade" id="tambahPelanggan" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Pelanggan Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form method="post" action="">

                    <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
                        <div class="mb-3">
                            <label class="form-label">Nama Pelanggan</label>
                            <input name="nama" type="text" class="form-control">
                        </div>


                        <div class="mb-3">
                            <label class="form-label">Gender</label>
                            <input name="gender" type="tel" class="form-control">
                        </div>


                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button name="submit" type="submit" value="tambah" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                
                </div>
            </div>
        </div>
    </div>