<?php

// Star Session
session_start();

// Koneksi ke database
require_once('../config/koneksi.php');

// Deklarasi variable penampung form
$username = $_POST['username'];
$password = $_POST['password'];  

// Query seleksi data
$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

// Jalankan query
$proses = mysqli_query($koneksi, $query);

// Menghitung data yang terseleksi
$cek = mysqli_num_rows($proses);

// Cek validasi
if($cek >= 1){
    header("location: ../views/v_login.php");
} else {
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location: ../views/v_index.php");
}

?>