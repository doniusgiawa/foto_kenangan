<?php 
    include "conn.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" href="images/icon/logos.jpeg" type="image/jpeg">
    <!-- link fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Poppins:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">
    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- link icons bootstrap  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>Foto Kenangan</title>
</head>
<body>
    <nav>
        <div class="navbar-top">
            <h3 class="logo"><a href="index.php">Foto <span>Kenangan</span></a></h3>
            <div class="profile">
                <a href="tambah_gambar.php"><img src="images/icon/logos.jpeg" alt="" style="width: 40px; height: 40px; border-radius: 50%; margin-top: 5px;"></a>
            </div>
            <ul>
                <li><a href="fsidang.php"><i class="bi bi-box-arrow-in-up-right"></i> Courtroom Photo</a></li>
                <li><a href="fwisuda.php"><i class="bi bi-box-arrow-in-up-right"></i> Graduation Photo</a></li>
            </ul>
        </div>
    </nav>