<?php 

require('partials/header.php');
require_once('../config/koneksi.php');

?>

<body id="login-page">

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="card login-content shadow-lg border-0">
                    <div class="card-body">
                        <div class="text-center">
                            <img class="logo" src="https://cdn3.iconfinder.com/data/icons/galaxy-open-line-gradient-i/200/account-256.png">
                        </div>
                        <h3 class="text-logo">Welcome</h3>
                        <br>
                        <br>
                        <form class="text-center" method="POST" action="../controllers/Login.php">
                            <input class="form-control name="username" border-0" type="text" placeholder="Type Your Username" id="username">
                            <br>
                            <input class="form-control name="password" border-0" type="password" placeholder="Type Your Password" id="password">
                            <br>
                            <input type="submit" name="submit" id="btn-login" class="btn btn-primary btn-sm border-0" value="Masuk">
                            <!-- <p class="forgot"><a href="">Forgot Password?</a></p> -->
                        </form>
                    </div>
                    <div class="nomember">
                        <p class="text-center">Belum punya akun? <a href="">Daftar</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require('partials/footer.php'); ?>

</body>

</html>