<?php require('partials/header.php'); ?>

<body>

    <nav>
        <?php require('partials/sidebar.php'); ?>
    </nav>

    <main>
        <div class="container">
            <div class="card mt-5 p-4">
                <h5>Tambah Data</h5>
                <hr>
                <form action="../controllers/Add.php" method="post">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">NISN</label>
                        <input type="number" name="nisn" class="form-control" id="exampleFormControlInput1" placeholder="328xxx">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" class="form-control" id="exampleFormControlInput1" placeholder="Masukan nama lengkap">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="exampleFormControlInput1" placeholder="Masukan alamat lengkap">
                    </div>
                    <div class="mb-3">
                        <button name="submit" type="submit" class="btn btn-sm btn-primary">Submit</button>
                        <button type="reset" class="btn btn-sm btn-danger">Reset</button>
                        <a class="btn btn-sm btn-secondary" href="../views/v_index.php">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <!-- Javascript Vendor Assets -->
    <script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>