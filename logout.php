<?php
session_start();
session_destroy(); // Menghancurkan sesi login
header("Location: login_admin.php"); // Mengarahkan kembali ke halaman login
exit();
?>