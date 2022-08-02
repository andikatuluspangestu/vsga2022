<?php require('partials/header.php'); ?>

<body>

    <nav>
        <?php require('partials/sidebar.php'); ?>
    </nav>

    <main>
        <div class="container">

            <!-- PHP Logic -->
            <?php

            // Koneksi ke Database
            include('../config/koneksi.php');

            // Tampung id target
            $id = $_GET['id'];

            // Jalankan query untuk menampilkan data yang di edit
            $query = "SELECT * FROM siswa WHERE id_siswa = $id LIMIT 1";

            // Tampung data dari database
            $result = mysqli_query($koneksi, $query);

            // Tampilkan
            $data = mysqli_fetch_array($result);

            ?>

            <div class="card mt-5 p-4">
                <h5>Ubah Data</h5>
                <hr>
                <form action="../controllers/Edit.php" method="post">
                    <div class="mb-3">
                        <input type="number" value="<?= $data['id_siswa']; ?>" name="id_siswa" class="form-control" id="id_siswa" placeholder="328xxx" hidden>
                    </div>
                    <div class="mb-3">
                        <label for="nisn" class="form-label">NISN</label>
                        <input value="<?= $data['nisn']; ?>" type="number" name="nisn" class="form-control" id="nisn" placeholder="328xxx">
                    </div>
                    <div class="mb-3">
                        <label for="namaLengkap" class="form-label">Nama Lengkap</label>
                        <input value="<?= $data['nama_lengkap']; ?>" type="text" name="nama_lengkap" class="form-control" id="namaLengkap" placeholder="Masukan nama lengkap">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input value="<?= $data['alamat']; ?>" type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukan alamat lengkap">
                    </div>
                    <div class="mb-3">
                        <button name="submit" type="submit" class="btn btn-sm btn-success">Submit</button>
                        <button type="reset" class="btn btn-sm btn-secondary">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <!-- Javascript Vendor Assets -->
    <script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>