<?php
// Panggil koneksi database
include "../config/koneksi.php";
if (isset($_POST['simpan_data_penjualan'])) {
    $kd_penjualan = $_POST['kd_penjualan'];
    $tanggal_jual = $_POST['tanggal_jual'];
    $total_harga = $_POST['total_harga'];

    // perintah query untuk menyimpan data ke tabel is_siswa
    $query = mysqli_query($db, "INSERT INTO tb_penjualan (kd_penjualan, tanggal_jual, total_harga ) VALUES ('$kd_penjualan', '$tanggal_jual', '$total_harga')");
    
    // cek hasil query
    if ($query) {
        // jika berhasil tampilkan pesan berhasil insert data
        header('Location: ../partials/tampil_data_penjualan.php?alert=2');
    } else {
        // jika gagal tampilkan pesan kesalahan
        header('Location: ../partials/tampil_data_penjualan.php?alert=1');
    }
}
?>