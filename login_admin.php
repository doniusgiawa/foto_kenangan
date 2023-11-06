<?php
session_start();
include "conn.php";

if(isset($_SESSION['username'])) {
    header("Location: tambah_gambar.php");
    exit();
}

// Cek apakah form login telah disubmit
if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Cek apakah username dan password sesuai
    if($username === 'DONIUS' && $password === 'GIAWA' && $email === 'doniusgiawasuccess2022@gmail.com') {
        // Login berhasil, set sesi pengguna
        $_SESSION['username'] = $username;
        header("Location: tambah_gambar.php");
        exit();
    } else {
        $error = "Account Not Registered!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style-login.css">
    <title>Login Admin</title>
</head>
<body>
    <div class="halaman-login">
        <div class="login-admin">
            <form action="" method="post">
                <h3>Login As Admin</h3><br>
                <img src="images/icon/logos.jpeg" alt=""><br>
                    <?php if(isset($error)) { ?>
                    <h5 style="padding: 10px 0px; color: salmon; text-align: center"><?php echo $error; ?></h5>
                    <?php } ?>
                <label for="username">Username</label><br>
                <input type="text" name="username" id="username" placeholder="Username" required><br>
                <label for="email">Email</label><br>
                <input type="email" name="email" id="email" placeholder="Email" required><br>
                <label for="password">Password</label><br>
                <input type="password" name="password" id="password" placeholder="Password" required><br>
                <button type="submit" name="login">Login</button>
                <p style="padding: 10px 0px;">Only admins have login access <a href="index.php" style="border-bottom: 1px solid blue;">Return to Previous Page.</a></p>
            </form>
        </div>
    </div>
</body>
</html>
