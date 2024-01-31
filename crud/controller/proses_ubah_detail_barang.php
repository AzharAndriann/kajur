<?php
// panggil koneksi database
include "../config/koneksi.php"; 

if (isset($_POST['ubah_detail'])){
    if (isset($_POST['simpan_detail'])) {
        $kd_penjualan = $_POST['kd_penjualan'];
        $kd_barang = $_POST['kd_barang'];
        $jumlah_jual = $_POST['jumlah_jual'];
        $sub_total = $_POST['sub_total'];
    
        // perintah query untuk mengubah data pada tabel is_siswa
        $query = mysqli_query($db, "UPDATE tb_detail_jual SET kd_penjualan='$kd_penjualan', kd_penjualan='$kd_penjualan', jumlah_jual='$jumlah_jual', sub_total='$sub_total' WHERE kd_barang='$kd_barang'");
        
        // cek query
        if($query) {
            // jika berhasil tampilkan pesan berhasil update data
            header('Location: ../partials/tampil_data.php?alert=3');
        } else {
            // jika gagal tampilkan pesan kesalahan
            header('Location: ../partials/tampil_data.php?alert=1');
        }
    }
}
?>