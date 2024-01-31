<?php
// Panggil koneksi database
include "../config/koneksi.php";
if (isset($_POST['simpan_data_penjual'])) {
    $kd_penjualan = $_POST['kd_penjualan'];
    $kd_barang = $_POST['kd_barang'];
    $jumlah_jual = $_POST['jumlah_jual'];
    $sub_total_harga = $_POST['sub_total_harga'];

    // perintah query untuk menyimpan data ke tabel is_siswa
    $query = mysqli_query($db, "INSERT INTO tb_detail_jual (kd_penjualan, kd_barang, jumlah_jual, sub_total_harga) VALUES ('$kd_penjualan', '$kd_barang', '$jumlah_jual', '$sub_total_harga')");
    
    // cek hasil query
    if ($query) {
        // jika berhasil tampilkan pesan berhasil insert data
        header('Location: ../partials/tampil_data_penjual.php?alert=2');
    } else {
        // jika gagal tampilkan pesan kesalahan
        header('Location: ../partials/tampil_data_penjual.php?alert=1');
    }
}
?>