<?php 
// mengaktifkan session
session_start();
 
// menghapus semua session
session_destroy();
 
// mengalihkan halaman ke halaman login
header("location: ../views/v_login.php");

?>