<?php 
    include "conn.php";
    include "header.php";
?>

<div class="container-fluid p-0 m-0 pt-sm-5">
    <div class="mb-3 mt-sm-5 see-all-pictures" style="width: 90%; margin: auto;">
        <h4 class="ucapan-syukur">Foto Seminar Sidang 28 Oktober 2023</h4>
        <p style="color: #888;">
            Kami bersyukur atas dukungan Anda yang tak ternilai dalam sidang seminar ini.
        </p>
        <hr>
        <?php 
        $tampil = mysqli_query($conn, "SELECT * from foto_sidang");
        $no = 1;
        while($data = mysqli_fetch_array($tampil)):
            $nama_gambar = $data["file_sidang"];
            $lokasi_gambar = "images/" . $nama_gambar;
        ?>
        <img src="<?php echo $lokasi_gambar; ?>" alt="" width="100%" height="auto" class="mt-1 mb-1 border-radius" style="margin: auto;">
        <?php endwhile; ?>
        <hr>
        <a href="fsidang.php" style="padding-bottom: 50px; text-decoration: none;">View Slides...</a>
    </div>
</div>

<?php 
    include "footer.php";
?>
