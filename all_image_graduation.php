<?php 
    include "conn.php";
    include "header.php";
?>

<div class="container-fluid p-0 m-0 pt-sm-5">
    <div class="mb-3 mt-sm-5 see-all-pictures" style="width: 90%; margin: auto;">
        <h4 class="ucapan-syukur">Foto Bersama Keluarga</h4>
        <p style="color: #888;">
            Terima kasih yang sebesar-besarnya kepada keluarga dan hadirin kami yang selalu mendukung kami dalam perjalanan pendidikan ini. Keberhasilan kami adalah berkat doa dan dukungan Anda semua.
        </p>
        <hr>
        <?php 
        $tampil = mysqli_query($conn, "SELECT * from foto_keluarga");
        $no = 1;
        while($data = mysqli_fetch_array($tampil)):
            $nama_gambar = $data["nama_file"];
            $lokasi_gambar = "images/" . $nama_gambar;
        ?>
        <img src="<?php echo $lokasi_gambar; ?>" alt="" width="100%" height="auto" class="mt-1 mb-1 border-radius" style="margin: auto;">
        <?php endwhile; ?>
        <hr>
        <a href="fwisuda.php" style="padding-bottom: 50px; text-decoration: none;">View Slides...</a>
    </div>
</div>

<?php 
    include "footer.php";
?>
