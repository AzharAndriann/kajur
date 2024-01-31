<?php
// panggil koneksi database
include "../config/koneksi.php";

if(isset($_GET['id'])){
    $kd_penjualan = $_GET['id'];

    // perintah query untuk menghapus data pada tabel barang
    $query = mysqli_query($db,"DELETE FROM tb_penjualan WHERE kd_penjualan='$kd_penjualan'");

    // cek hasil query
    if ($query) {
        // jika berhasil tampilkan pesan berhasil delete data
        header('Location: ../partials/tampil_data_penjualan.php?alert=4');
    } else {
        // jika gagal tampilkan pesan kesalahan
        header('Location: ../partials/tampil_data_penjualan.php?alert=1');
    }
}
?>