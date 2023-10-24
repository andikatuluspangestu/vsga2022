<?php

// Koneksi ke database
require_once('../config/koneksi.php');

// Jika tombol submit ditekan
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $email    = $_POST['email'];

    $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";
    $result = $koneksi->query($sql);

    if ($result) {
        echo "Registrasi berhasil!";
        header("location: ../views/v_login.php");
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
}
