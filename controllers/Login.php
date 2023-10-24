<?php

// Star Session
session_start();

// Koneksi ke database
require_once('../config/koneksi.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $koneksi->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $username;
            $_SESSION['status']   = "login";
            header("location: ../views/v_index.php");
        } else {
            echo "Password salah.";
        }
    } else {
        // Kirimkan pesan error ke halaman login
        $_SESSION['message'] = "Username tidak ditemukan.";
        header("location: ../views/v_login.php");
    }
}
