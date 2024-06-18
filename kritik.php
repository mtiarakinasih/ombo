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
$nama_pengguna = $_SESSION['username'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['kritik_saran'])) {
        $kritik_saran = $_POST['kritik_saran'];

        // Simpan kritik dan saran ke database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "ombo";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Koneksi gagal: " . $conn->connect_error);
        }

        $kritik_saran = $conn->real_escape_string($kritik_saran);
        $userID = $_SESSION['id']; // Ambil ID pengguna dari sesi

        $sql = "INSERT INTO kritik_saran (userID, kritik_saran) VALUES ('$userID', '$kritik_saran')";

        if ($conn->query($sql) === TRUE) {
            // Redirect ke halaman index setelah berhasil mengirim kritik dan saran
            header("Location: index.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    } else {
        echo "Mohon lengkapi semua informasi yang diperlukan";
    }
}
?>

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

</style>


  <title>Kritik & Saran &mdash; OMBO</title>
</head>
<body>
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
              <li><a href="tambah.php">Buat Peminjaman</a></li>
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
        <h2 class="mb-4 text-center">Kritik dan Saran</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
          <div class="mb-3">
            <input type="text" class="form-control" placeholder="Nama" name="nama" value="<?php echo $nama_pengguna; ?>" required readonly />
          </div>
          <div class="mb-3">
            <textarea name="kritik_saran" cols="30" rows="7" class="form-control" placeholder="Tulis Kritik dan Saran Anda" required></textarea>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Kirim</button>
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
