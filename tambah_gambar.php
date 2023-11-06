<?php
ob_start();
session_start();

include "conn.php"; // Pastikan file "conn.php" ada dan berfungsi
include "header_create-image.php";

if (!isset($_SESSION['username'])) {
  header("Location: login_admin.php");
  exit();
}

$error_message = ""; // Inisialisasi pesan kesalahan
$berhasil = ""; // Inisialisasi pesan sukses

// Memproses pengunggahan gambar jika formulir pertama dikirimkan
if(isset($_POST["upload"])){
  $eks_boleh = array('chrome', 'png', 'jpeg', 'docx', 'pdf', 'jpg', 'tiff', 'tif', 'webpt', 'bmp', 'nef', 'ico', 'psd', 'svg', 'WMV', 'FLV', '3GP', 'AVI', 'Ogg', 'MP4');
  $nama = $_FILES['file']['name'];
  $x = explode('.', $nama);
  $ekstensi = strtolower(end($x));
  $ukuran = $_FILES['file']['size'];
  $file_tmp = $_FILES['file']['tmp_name'];

  if(in_array($ekstensi, $eks_boleh)){
    // if($ukuran < 10440700){
    if($ukuran < 417628000){
      move_uploaded_file($file_tmp, 'images/'.$nama);
      $query = mysqli_query($conn, "INSERT INTO foto_keluarga (nama_file) VALUES ('$nama')");
      if($query){
        $berhasil = "File Berhasil Diupload";
      }else{
        $error_message = "Gagal Upload File";
      }
    }else{
      $error_message = "Ukuran Gambar Terlalu Besar";
    }
  }else{
    $error_message = "Ekstensi file tidak diperbolehkan";
  }
}

// Memproses pengunggahan gambar jika formulir kedua dikirimkan
if(isset($_POST["tambah"])){
  $eks_boleh = array('chrome', 'png', 'jpeg', 'docx', 'pdf', 'jpg', 'tiff', 'tif', 'webpt', 'bmp', 'nef', 'ico', 'psd', 'svg');
  $nama = $_FILES['file']['name'];
  $x = explode('.', $nama);
  $ekstensi = strtolower(end($x));
  $ukuran = $_FILES['file']['size'];
  $file_tmp = $_FILES['file']['tmp_name'];

  if(in_array($ekstensi, $eks_boleh)){
    if($ukuran < 10440700){
      move_uploaded_file($file_tmp, 'images/'.$nama);
      $query = mysqli_query($conn, "INSERT INTO foto_sidang (file_sidang) VALUES ('$nama')");
      if($query){
        $berhasil = "File Berhasil Diupload";
      }else{
        $error_message = "Gagal Upload File";
      }
    }else{
      $error_message = "Ukuran Gambar Terlalu Besar";
    }
  }else{
    $error_message = "Ekstensi file tidak diperbolehkan";
  }
}
ob_end_flush();
?>

<div class="content-image">
    <?php if (!empty($error_message)) { ?>
        <p style="color: red;"><?php echo $error_message; ?></p>
    <?php } ?>
    <?php if (!empty($berhasil)) { ?>
        <p style="color: green;"><?php echo $berhasil; ?></p>
    <?php } ?>
    <h2 class="display-6">Form Tambah Gambar Wisuda Bersama Keluarga </h2>

    <div class="container-image">
        <!-- tambah Gambar Wisuda -->
        <div class="form-table-image">
            <form action="" method="POST" enctype="multipart/form-data" width="100%">
                <div class="mb-3">
                    <label for="jenis_gambar-sidang" class="form-label">Create Image Graduation</label>
                    <input type="file" name="file" class="form-control" id="jenis_gambar-sidang" placeholder="Create Image" width="100%">
                </div>
                <div class="mb-3">
                    <button type="submit" name="upload" value="UPLOAD" class="btn btn-info">Tambah</button>
                </div>
            </form>

            <h2 class="display-6">Gambar Keluarga</h2>
            <table class="table">
                <thead class="bg-dark text-light">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                  $tampil = mysqli_query($conn, "SELECT * from foto_keluarga");
                  $no = 1;
                  while($data = mysqli_fetch_array($tampil)):

                    $nama_gambar = $data["nama_file"];
                    $lokasi_gambar = "images/" .$nama_gambar;
                ?>
                    <tr>
                        <th scope="row"><?= $no++; ?></th>
                        <td><?= $data["nama_file"]; ?></td>
                        <td><img src="<?php echo "$lokasi_gambar" ?>" alt="" width="100px" height="50px"></td>
                        <td><a href="hapus_foto.php?id=<?php echo $data['id_file']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus foto ini?')">Hapus</a></td>
                    </tr>
                <?php endwhile; ?>
                </tbody>
            </table>
        </div>

        <!-- tambah Gambar Sidang -->
        <div class="form-table-image">
            <h2 class="display-6">Form Tambah Gambar Sidang</h2>
            <form action="" method="POST" enctype="multipart/form-data" width="100%">
                <div class="mb-3">
                    <label for="jenis_gambar-sidang" class="form-label">Create Image Sidang</label>
                    <input type="file" name="file" class="form-control" id="jenis_gambar-sidang" placeholder="Create Image" width="100%">
                </div>
            <div class="mb-3">
        <button type="submit" name="tambah" value="UPLOAD" class="btn btn-info">Tambah</button>
        </div>
        </form>
        <?php if (!empty($error_message)) { ?>
            <p style="color: red;"><?php echo $error_message; ?></p>
        <?php } ?>


        <h2 class="display-6">Gambar Keluarga</h2>
        <table class="table">
            <thead class="bg-dark text-light">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php 
              $tampil = mysqli_query($conn, "SELECT * from foto_sidang");
              $no = 1;
              while($data = mysqli_fetch_array($tampil)):

                $nama_gambar = $data["file_sidang"];
                $lokasi_gambar = "images/" .$nama_gambar;
            ?>
                <tr>
                    <th scope="row"><?= $no++; ?></th>
                    <td><?= $data["file_sidang"]; ?></td>
                    <td><img src="<?php echo "$lokasi_gambar" ?>" alt="" width="100px" height="50px"></td>
                    <td><a href="hapus_foto.php?hapus=<?php echo $data['id_sidang']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus foto ini?')">Hapus</a></td>
                </tr>
            <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    <!-- logout  -->
    <div class="logout-button">
    <form action="logout.php" method="post">
        <button type="submit" name="logout" class="btn btn-danger">Logout</button>
    </form>
</div>
</div>
