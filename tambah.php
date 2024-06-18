<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="author" content="Untree.co" />
  <link rel="shortcut icon" href="2.png" />

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap5" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="fonts/icomoon/style.css" />
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css" />

  <link rel="stylesheet" href="css/tiny-slider.css" />
  <link rel="stylesheet" href="css/aos.css" />
  <link rel="stylesheet" href="css/style.css" />

  <style>
  /* Custom CSS */
  .section {
    padding-top: 130px; /* Sesuaikan dengan kebutuhan untuk memberi ruang agar tidak tertutup */
  }

  /* Mengubah warna choosen file menjadi hijau */
  #pdf_file_label {
    color: green;
  }
</style>


  <title>Tambah Peminjaman Ruang &mdash; OMBO</title>
</head>
<body>
<?php
// Mulai sesi
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    // Redirect ke halaman login jika pengguna belum login
    header("Location: login.php");
    exit();
}

// Ambil nama pengguna dari sesi
$nama_peminjam = $_SESSION['username'];
?>
<!-- Navbar Section -->
<nav class="site-nav">
  <div class="container">
    <div class="menu-bg-wrap">
      <div class="site-navigation">
      <a href="index.php" class="logo m-0 float-start">
        <img src="2.png" alt="Logo" style="max-height: 8%; max-width: 8%;"></a>

        <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="ruang.php">Ruang</a></li>
          <li class="has-children">
            <a href="profile.php">Profil</a>
            <ul class="dropdown">
              <li><a href="daftar.php">Daftar Peminjaman</a></li>
              <li><a href="logout.php">Logout</a></li>
            </ul>
          </li>
        </ul>

        <a href="#" class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none" data-toggle="collapse" data-target="#main-navbar">
          <span></span>
        </a>
      </div>
    </div>
  </div>
</nav>
<!-- End Navbar Section -->

<div class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2" data-aos="fade-up" data-aos-delay="200">
        <h2 class="mb-4 text-center">Tambah Peminjaman Ruang</h2>
        <form action="submit.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
          <input type="text" class="form-control" placeholder="Nama" name="nama" value="<?php echo $nama_peminjam; ?>" required readonly />
        </div>
          <div class="mb-3">
            <!-- PHP untuk menampilkan daftar ruangan dari database -->
            <select name="ruang" class="form-control" required>
              <option value="">Pilih Ruangan</option>
              <?php
              // Buat koneksi ke database
              $servername = "localhost";
              $username = "root";
              $password = "";
              $dbname = "ombo";

              $conn = mysqli_connect($servername, $username, $password, $dbname);

              // Periksa koneksi
              if (!$conn) {
                  die("Koneksi gagal: " . mysqli_connect_error());
              }

              // Query untuk mendapatkan data ruang
              $sql = "SELECT * FROM rooms";
              $result = mysqli_query($conn, $sql);

              // Tampilkan data ruang sebagai opsi dropdown
              if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                      echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
                  }
              }

              // Tutup koneksi
              mysqli_close($conn);
              ?>
            </select>
          </div>
          <div class="mb-3">
            <input type="date" class="form-control" placeholder="Tanggal" name="tanggal" required />
          </div>
          <div class="row mb-3">
            <div class="col">
              <input type="time" class="form-control" placeholder="Waktu Mulai" name="waktu_mulai" required />
            </div>
            <div class="col">
              <input type="time" class="form-control" placeholder="Waktu Selesai" name="waktu_selesai" required />
            </div>
          </div>
          <div class="mb-3">
            <textarea name="alasan" cols="30" rows="7" class="form-control" placeholder="Alasan" required></textarea>
          </div>
          <div class="mb-3">
            <label for="pdf_file">Upload Surat Perizinan:</label>
            <input type="file" id="pdf_file" name="pdf_file" accept=".pdf" required />
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Tambah Peminjaman</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/tiny-slider.js"></script>
<script src="js/aos.js"></script>
<script src="js/navbar.js"></script>
<script src="js/counter.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
