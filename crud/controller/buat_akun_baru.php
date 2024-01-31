<?php
    // Include file koneksi database
    include("../config/koneksi.php");

    // Inisialisasi variabel error
    $error = '';

    // Proses registrasi ketika form disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil data dari form
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password = mysqli_real_escape_string($db, $_POST['password']);

        // Query untuk memasukkan data ke dalam tabel
        $query = "INSERT INTO tb_login (username, email, password) VALUES ('$username','$email', '$password')";
        $result = mysqli_query($db, $query);

        if ($result) {
            header("location: ../index.php");
        } else {
            $error = "Registrasi gagal. Silakan coba lagi.";
        }
    }
?>