// function show() {
    const editButtons = document.querySelectorAll('button[data-bs-target="#editPelanggan"]');

        // Tambahkan event listener ke setiap tombol edit
        editButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Ambil data dari atribut data-*
            const id = button.getAttribute('data-id');
            const nama = button.getAttribute('data-nama');
            const email = button.getAttribute('data-gender');

            // Isi form pada modal dengan data
            document.getElementById('id').value = id;
            document.getElementById('username').value = nama;
            document.getElementById('gender').value = email;
        });
        });
// }




function simpanPerubahan() {
    alert("Perubahan telah berhasil disimpan!");
    const modal = bootstrap.Modal.getInstance(document.getElementById('editPelanggan'));
    modal.hide();
}



function tambah() {
    alert("Perubahan telah berhasil disimpan!");
    const modal = bootstrap.Modal.getInstance(document.getElementById('editPelanggan'));
    modal.hide();

}


// function hapus() {
//         // Menampilkan alert
//         confirm("Apakah Anda yakin ingin ingin menghapus data ini ?");
// }
