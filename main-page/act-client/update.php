






<div class="modal fade" id="editPelanggan" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Data Pelanggan</h5>
                    <?php 
                    // if (!isset($_POST)) {
                    //     var_dump(updateP($_POST));
                    // }  
                    ?>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>




                <div class="modal-body">
                    <form method="post" action="">

                        <!-- ini akan ku ganti dengan id yg diambil dari database -->
                        <input type="hidden" name="id" id="id" >


                        <div class="mb-3">
                            <label class="form-label">Nama Pelanggan</label>
                            <input name="username" type="text" class="form-control" id="username" >
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Gender</label>
                            <input name="gender" type="tel" class="form-control" id="gender">
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button name="submit" value="edit" type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
                

            </div>
        </div>
    </div>