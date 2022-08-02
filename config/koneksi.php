<?php

    // Variabel untuk menampung database
    $host   = "localhost";
    $user   = "root";
    $pass   = "";
    $db     = "sekolah";

    // Query untuk menghubungkan ke database
    $koneksi = mysqli_connect($host, $user, $pass, $db);

    // Membuat pemberitahuan tentang proses koneksi
    if ($koneksi) {
        // Tampilkan jika terhubung
        // echo "Koneksi berhasil";
    } else {
        // Tampilkan jika tidak terhubung
        echo "Gagal terkoneksi, karena : ".mysqli_connect_error();
    }
