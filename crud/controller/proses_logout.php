<?php
// Mulai session
session_start();

// Hapus semua variabel session
session_unset();

// Hancurkan session
session_destroy();

// Redirect ke halaman login atau halaman lain yang diinginkan setelah logout
header("Location: ../index.php");
exit();
?>
