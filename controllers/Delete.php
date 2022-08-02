<?php

// Koneksi ke Database
include('../config/koneksi.php');

// Tampung id data yang akan dihapus
$id = $_GET['id'];

// Query hapus data
$query = "DELETE FROM siswa WHERE id_siswa = '$id'";

// Jalankan Query
$proses = mysqli_query($koneksi, $query);

// Cek proses
if ($proses) {
    header("Location: ../views/v_index.php");
} else {
    echo "Data tidak berhasil diubah";
}
