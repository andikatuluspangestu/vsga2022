<?php

// Koneksi ke database
include('../config/koneksi.php');

// Tampung data yang telah diedit
$id     = $_POST['id_siswa'];
$nisn   = $_POST['nisn'];
$nama   = $_POST['nama_lengkap'];
$alamat = $_POST['alamat'];

// Query kirim data yang telah diedit ke database
$query = "UPDATE siswa SET nisn = '$nisn', nama_lengkap = '$nama', alamat = '$alamat' WHERE id_siswa = '$id' ";

// Proses pengiriman
$proses = mysqli_query($koneksi, $query);

// Cek berhasil atau tidak
if ($proses) {
    header("Location: ../views/v_index.php");
} else {
    echo "Data tidak berhasil diubah";
}
