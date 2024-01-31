<?php
// Panggil koneksi database
include "../config/koneksi.php";
if (isset($_POST['simpan'])) {
    $kd_barang = $_POST['kd_barang'];
    $nama_barang = $_POST['nama_barang'];
    $harga_beli = $_POST['harga_beli'];
    $harga_jual = $_POST['harga_jual'];
    $stok = $_POST['stok'];

    // perintah query untuk menyimpan data ke tabel is_siswa
    $query = mysqli_query($db, "INSERT INTO tb_barang(kd_barang, nama_barang, harga_beli, harga_jual, stok) VALUES ('$kd_barang', '$nama_barang', '$harga_beli', '$harga_jual', '$stok')");
    
    // cek hasil query
    if ($query) {
        // jika berhasil tampilkan pesan berhasil insert data
        header('Location: ../partials/tampil_data.php?alert=2');
    } else {
        // jika gagal tampilkan pesan kesalahan
        header('Location: ../partials/tampil_data.php?alert=1');
    }
}  
?>

