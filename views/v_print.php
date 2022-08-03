<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Data Siswa</title>
    <style>
        table {
            text-align: center;
        }

        th,
        td {
            padding: 10px;
        }
    </style>
</head>

<body>
    <h4>Data Siswa</h4>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>NISN</th>
                <th>Nama Lengkap</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <?php

        // Koneksi ke database
        include('../config/koneksi.php');

        // No Urut;
        $no_urut = 1;

        // Query
        $query = "SELECT * FROM siswa";

        // Proses
        $proses = mysqli_query($koneksi, $query);

        // Perulangan
        while ($data = mysqli_fetch_array($proses)) { ?>
            <tbody>
                <tr>
                    <td><?= $no_urut++; ?></td>
                    <td><?= $data['nisn']; ?></td>
                    <td><?= $data['nama_lengkap']; ?></td>
                    <td><?= $data['alamat']; ?></td>
                </tr>
            </tbody>
        <?php } ?>
    </table>

    <br>
    <span><i>Dicetak pada <?= date('D, d-m-Y'); ?></i></span>

    <script>
        window.print();
    </script>

</body>

</html>