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
                const notif = `<div class="mb-3 me-3 toast bg-danger" role="alert" aria-live="assertive" aria-atomic="true" style="width: 350px;">
    
                <div class="toast-header bg-primary-subtle">
                    <img src="../assets/images/warning.png" class="rounded me-3" width="25"  alt="...">
                    <strong class="me-auto">Barang Tidak Ditemukan</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            
            
                
                <div class="toast-body text-light">
                    Barang dengan id ${searchValue} tidak ada dalam daftar
                </div>
            
            
            </div>`;


                $('.notif-error').append(notif);

                
                toast_animation_show();
            }
        });
        
        // // Reset nilai input
        this.value = '';
        // this.blur();
    }
});








// Fungsi untuk menghitung subtotal
function calculateSubtotal() {
    let total = 0;
    const rows = document.querySelectorAll('.calculate-subtotal');
    
    rows.forEach(row => {
        const price = parseFloat(row.cells[2].innerText) || 0;
        const error_qty = row.querySelector('.err-qty');
        const qty = parseInt(row.querySelector('.qty').value) || 0;
        if (qty > 0){
            error_qty.innerText = "";
        }
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









//untuk mengisi data pada modal atau pop up ketika button proses transaksi ditekan
function tampilkanData() {
    let qty = document.querySelectorAll(".qty"),
            id_barang = document.querySelectorAll(".id_barang"),
                nama_barang = document.querySelectorAll(".nama_barang"), 
                    Hsubtotal = document.querySelectorAll(".subtotal")
                        cash = document.getElementById("payment"),
                            idcust = document.getElementById("customer-id"),
                                Tprice = document.getElementById("total-price"),
                                    stock = document.querySelectorAll(".stock");

    let tabel = document.querySelector(".tabel-body");
    tabel.innerHTML = ""; // Kosongkan isi tabel sebelum menambahkan data baru

    let p = document.querySelector(".testing");
    // p.innerText = 'id_barang : ' + id_barang.length + '\n' + 'nama_barang ' + nama_barang.length + '\n Hsubtotal ' + Hsubtotal.length + '\n stok :' + stock.length;
    let row = "";
    for (let i = 0; i < Hsubtotal.length ; i++) {
        row += `
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
        // tabel.innerHTML += row;
    }

    row += `
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

    let contain;
    if (row != "") {
        contain = row;
    }
    // p.innerText += ;
    tabel.innerHTML += contain;
}





//ini utk menampilkan notif dan menghapusnya ketika waktu habis
// function toast_animation_show() {
    
//     $(function() {
//         $(".toast").toast({delay: 2000});
//         $(".toast").toast({Animation: true});
//         $(".toast").toast("show");        
//     });

//     $(".toast").on("hidden.bs.toast", function () {
//         $(this).remove();
//     });

// }








function toast_animation_show() {
    let toasts = $(".toast");

    toasts.each(function(index) {
        // Hitung waktu delay untuk setiap toast agar yang pertama hilang lebih cepat
        let hideDelay = (index + 1) * 2000; // Toast pertama hilang dalam 2 detik, kedua dalam 4 detik, dst.

        // Tampilkan toast langsung tanpa delay
        $(this).toast({
            delay: hideDelay,
            animation: true
        }).toast("show");

        // Hapus dari DOM setelah toast menghilang
        $(this).on("hidden.bs.toast", function () {
            $(this).remove();
        });
    });
}
