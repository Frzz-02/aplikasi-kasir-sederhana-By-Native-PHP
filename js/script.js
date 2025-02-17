const search = document.getElementById('search');;

const harga_total = $('#total-price'), 
        id_cust = $("#customer-id"),
            pay = $('#payment'),
                pay_process_btn = $('#submit');






search.addEventListener('keydown', function(event) {
    if (event.key === 'Enter') {
        // Mencegah aksi default (jika ada)
        // event.preventDefault();
        
        let searchValue = this.value.trim(); // Hapus spasi di awal/akhir input
        if (searchValue === '') {
            alert("Masukkan kode barang terlebih dahulu!");
            return;
        }
        //lakukan ajax untuk mengambil data barang
        $.get('../ajax/ajaxB.php?search=' + searchValue, function(data) {
            if(data) {
                $('#item-list').append(data); // Menambah baris baru ke dalam tabel
            } else {
                alert("Barang tidak ditemukan!");
            }
        });
        
        // // Reset nilai input
        this.value = '';
        this.blur();
    }
});








// Fungsi untuk menghitung subtotal
function calculateSubtotal() {
    let total = 0;
    const rows = document.querySelectorAll('#item-list tr');
    
    rows.forEach(row => {
        const price = parseFloat(row.cells[2].innerText) || 0;
        const qty = parseInt(row.querySelector('.qty').value) || 0;
        // if (qty <= 0){
        //     $(".text-danger").show();
        // }else{
        //     $(".text-danger").hide();
        // }
        const subtotal = price * qty;
        row.querySelector('.subtotal').innerText = subtotal;
        total += subtotal;
    });
    document.forms['frm']['total-price'].value = total;
    // document.getElementById('total-price').innerText = total;
}










// Event listener untuk qty input
document.getElementById('item-list').addEventListener('input', function(e) {
    if (e.target.classList.contains('qty')) {
        calculateSubtotal();
    }
});




// Event listener untuk tombol hapus
document.getElementById('item-list').addEventListener('click', function(e) {
    if (e.target.classList.contains('delete')) {
        e.target.closest('tr').remove();
        calculateSubtotal(); // Update subtotal setelah menghapus
    }
});




pay_process_btn.click(function () {
    tampilkanData();
});










function tampilkanData() {
    let qty = document.querySelectorAll(".qty"),
            id_barang = document.querySelectorAll(".id_barang"),
                nama_barang = document.querySelectorAll(".nama_barang"), 
                    Hsubtotal = document.querySelectorAll(".subtotal")
                        cash = document.getElementById("payment"),
                            idcust = document.getElementById("customer-id"),
                                Tprice = document.getElementById("total-price"),
                                    stock = document.querySelectorAll(".stock");

    let tabel = document.querySelector("#tabelBarang tbody");
    tabel.innerHTML = ""; // Kosongkan isi tabel sebelum menambahkan data baru

    for (let i = 0; i < qty.length; i++) {
        let row = `
            <tr>
                <td>${id_barang[i].value}</td>
                <td>${nama_barang[i].value}</td>
                <td>${qty[i].value}x</td>
                <td>Rp${Hsubtotal[i].textContent},00</td>
                    <input type="hidden" name="qty[]" value="${qty[i].value}" class="form-control qty" value="1" min="1">
                    <input type="hidden" name="id_barang[]" value="${id_barang[i].value}" class="id_barang">
                    <input type="hidden" name="nama_barang[]" value="${nama_barang[i].value}" class="nama_barang">
                    <input type="hidden" name="harga_subtotal[]" value="${Hsubtotal[i].innerText}" class="harga_subtotal">
                    <input type="hidden" name="stock[]" value="${stock[i].value}" class="stock">
            </tr>
        `;

        tabel.innerHTML += row;
    }

    let row2 = `
    <tr>
        <th class="text-end"  colspan="3">Harga Total : </th>
        <td class="" >Rp${Tprice.value},00</td>
        <input type="hidden" name="harga_total" value="${Number(Tprice.value) }" class="stock">
        <input type="hidden" name="id_cust" value="${ idcust.value }" class="stock">
        </tr>
    
    
    <tr>
        <td class="text-center pt-5" colspan="4" rowspan="2" >
            <b>Pembayaran : </b> Rp${cash.value},00
                <br>
            <b>Kembalian : </b> Rp${Number(cash.value) - Number(Tprice.value)},00</td>
            <input type="hidden" name="cashBack" value="${ Number(cash.value) - Number(Tprice.value) }" class="stock">
            <input type="hidden" name="cash" value="${ Number(cash.value)}" class="stock">
            </tr>
    
    `;
    tabel.innerHTML += row2;
}