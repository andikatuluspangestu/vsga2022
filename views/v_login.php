<?php

require('partials/header.php');
require_once('../config/koneksi.php');

// Ambil pesan error dari session
if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    unset($_SESSION['message']);
} else {
    $message = "";
}

?>

<body id="login-page">

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="card login-content shadow-lg border-0">

                    <!-- Error Message -->
                    <?php if (!empty($message)) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= $message; ?>
                        </div>
                    <?php endif; ?>

                    <div class="card-body">
                        <div class="text-center">
                            <img class="logo" src="https://cdn3.iconfinder.com/data/icons/galaxy-open-line-gradient-i/200/account-256.png">
                        </div>
                        <h3 class="text-logo">Welcome</h3>
                        <br>
                        <br>
                        <form class="text-center" method="POST" action="../controllers/Login.php">
                            <input class="form-control" name="username" type="text" placeholder="Type Your Username" id="username" required aria-required="true">
                            <br>
                            <input class="form-control" name="password" type="password" placeholder="Type Your Password" id="password" required aria-required="true">
                            <br>
                            <input type="submit" name="submit" id="btn-login" class="btn btn-primary btn-sm border-0" value="Masuk">
                        </form>
                    </div>
                    <div class="nomember">
                        <p class="text-center">Belum punya akun? <a href="../views/v_register.php">Daftar</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require('partials/footer.php'); ?>

</body>

</html>