<?php

// Koneksi ke database
include('../config/koneksi.php');

// Koneksi ke Library
include('../assets/vendor/php-excel-reader/excel_reader2.php');
?>

<?php

// Upload file excel
$target = basename($_FILES['file_excel']['name']);
move_uploaded_file($_FILES['file_excel']['tmp_name'], $target);

// Atur Perizinan akses file
chmod($_FILES['file_excel']['name'], 0777);

// Mengambil isi file excel
$data = new Spreadsheet_Excel_Reader($_FILES['file_excel']['name'], false);

// Hitung jumlah data
$jumlah_data = $data->rowcount($sheet_index = 0);

// Tampung data yang berhasil di import
$berhasil = 0;

// Tambahkan data ke mysql
for ($i = 2; $i <= $jumlah_data; $i++) {

    // Tangkap semua data yang berhasil di import
    $nisn   = $data->val($i, 1);
    $nama   = $data->val($i, 2);
    $alamat = $data->val($i, 3);

    // Cek validasi data
    if ($nisn != "" && $nama != "" && $alamat != "") {

        // Query insert data ke database
        $query = "INSERT INTO siswa (nisn, nama_lengkap, alamat) VALUES ('$nisn','$nama','$alamat')";

        // Lakukan input data ke database
        mysqli_query($koneksi, $query);

        // Increment
        $berhasil++;
    }
}

// Hapus file excel yang telah di import
unlink($_FILE['file_excel']['name']);

// Redirect
header("Location: ../views/v_index.php");

?>