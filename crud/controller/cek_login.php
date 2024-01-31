<?php
session_start();

include'../config/koneksi.php';

$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"]; 

$data = mysqli_query($db, "select * from tb_login where username='$username' and email='$email' and password='$password'");
$cek = mysqli_num_rows($data);

if ($cek > 0){
    $_SESSION['username'] = $username;
    header("location: ../partials/tampil_data.php");
}else{
    header("location: ../gagal_login.php");
}
?>