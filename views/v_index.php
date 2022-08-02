<?php require('partials/header.php'); ?>

<body>
    <nav>
        <?php require('partials/sidebar.php'); ?>
    </nav>
    <main>
        <div class="container">
            <div class="card mt-5 p-3">
                <table>
                    <tr>
                        <td>
                            <a href="../views/v_add.php" class="btn btn-primary btn-sm"><i class="bi bi-plus-circle">&nbsp;</i>Tambah Data</a>
                            <a href="#" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-file-earmark-excel">&nbsp;</i>Uplod Excel</a>
                        </td>
                    </tr>
                </table>
            </div>

            <!-- Modal upload Excel to SQL -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form enctype="multipart/form-data" action="../controllers/Excel.php" method="post">
                            <div class="modal-body">
                                <div class="mb-1">
                                    <label for="formFile" class="form-label">Masukan File Excel</label>
                                    <input name="file_excel" required="required" class="form-control" type="file" id="formFile">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <input name="upload" type="submit" class="btn btn-primary" value="Import">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="card mt-4 p-4 table-responsive">
                <table class="table table-hover" id="myTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NISN</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <?php

                        // Hubungkan ke Database
                        include('../config/koneksi.php');

                        // Buat variable No untuk urutan data
                        $no_urut = 1;

                        // Lakukan query untuk mengambil data
                        $query = mysqli_query($koneksi, "SELECT * FROM siswa");

                        // Lakukan perulangan while untuk menampilkan data
                        while ($row = mysqli_fetch_array($query)) {

                        ?>
                            <tr>
                                <td><?= $no_urut++; ?></td>
                                <td><?= $row['nisn']; ?></td>
                                <td><?= $row['nama_lengkap']; ?></td>
                                <td><?= $row['alamat']; ?></td>
                                <td class="text-start">
                                    <a href="../views/v_edit.php?id=<?php echo $row['id_siswa'] ?>" class="btn btn-sm btn-secondary">Edit</a>
                                    <a href="../controllers/Delete.php?id=<?php echo $row['id_siswa'] ?>" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>

                        <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <?php include('partials/footer.php'); ?>

</body>

</html>