<?php

// Koneksi ke Database
include('../config/koneksi.php');

// Menampung Form
$nisn   = $_POST['nisn'];
$nama   = $_POST['nama_lengkap'];
$alamat = $_POST['alamat'];

// Query insert data
$query = "INSERT INTO siswa (nisn, nama_lengkap, alamat) VALUES ('$nisn','$nama','$alamat')";

// Kirim data ke database
$proses = mysqli_query($koneksi, $query);

// Cek data tersimpan atau tidak
if ($proses) {
    // Tambahkan pesan berhasil di session
    $_SESSION['sukses'] = "Data berhasil ditambahkan";
    header("Location: ../views/v_index.php");
} else {
    echo "Data tidak berhasil ditambahkan";
}
