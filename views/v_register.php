<?php

require('partials/header.php');
require_once('../config/koneksi.php');

?>

<body id="register-page">

  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="card login-content shadow-lg border-0">
          <div class="card-body mt-5">
            <h3 class="text-logo">Register</h3>
            <br>
            <br>
            <form class="text-center" method="POST" action="../controllers/Register.php">
              <input name="username" class="form-control border-0" type="text" placeholder="Type Your Username" id="username" required aria-required="true">
              <br>
              <input name="password" class="form-control border-0" type="password" placeholder="Type Your Password" id="password" required aria-required="true">
              <br>
              <input name="email" class="form-control border-0" type="email" placeholder="Type Your Email" id="email" required aria-required="true">
              <br>
              <input type="submit" name="submit" id="btn-login" class="btn btn-primary btn-sm border-0" value="Daftar">
            </form>
          </div>
          <div class="nomember">
            <p class="text-center">Sudah punya akun? <a href="../views/v_login.php">Login</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php require('partials/footer.php'); ?>

</body>

</html>