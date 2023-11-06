<?php
include "conn.php";
include "header.php";
?>

<?php
include "conn.php";
$query = "SELECT * FROM foto_keluarga";
$result = mysqli_query($conn, $query);
?>


<!-- <title>Galeri Gambar Keluarga</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->

    <div class="container-fluid p-0 m-0">
        <div style="max-width: 90%; margin: auto; margin-top: 60px">
        <p class="display-6 judul_gambar">Foto Wisudaku Bersama Teman & Keluarga</p>
        <div id="gambarCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php
                $i = 0;
                while ($row = mysqli_fetch_assoc($result)) {
                    $activeClass = ($i === 0) ? 'active' : '';
                ?>
                    <li data-target="#gambarCarousel" data-slide-to="<?= $i ?>" class="<?= $activeClass ?>"></li>
                <?php
                    $i++;
                }
                ?>
            </ol>
            <div class="carousel-inner">
                <?php
                $i = 0;
                mysqli_data_seek($result, 0); // Mengembalikan kursor hasil ke awal
                while ($row = mysqli_fetch_assoc($result)) {
                    $activeClass = ($i === 0) ? 'active' : '';
                ?>
                    <div class="carousel-item <?= $activeClass ?>">
                        <img src="images/<?= $row['nama_file'] ?>" class="d-block w-100" alt="Gambar <?= $row['id_file'] ?>">
                    </div>
                <?php
                    $i++;
                }
                ?>
            </div>
            <a class="carousel-control-prev" href="#gambarCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only"></span>
            </a>
            <a class="carousel-control-next" href="#gambarCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only"></span>
            </a>
            </div>

            <!-- Lihat semua gambar  -->
            <div class="mt-3 mb-3">
                <h6><a href="all_image_graduation.php">See All Pictures...</a></h6>
            </div>

            <p style="color: #888">Wisuda adalah awal dari babak baru dalam hidup kami. Dengan pintu masa depan yang terbuka lebar, kami bersyukur atas peluang untuk terus berkembang, meraih mimpi, dan menggapai semua yang ingin kami capai.</p>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- untuk Masuk Kesemua Gambar -->

</body>
</html>


<?php
include "footer.php";

?>