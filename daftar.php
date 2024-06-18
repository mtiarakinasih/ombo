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
    padding-top: 500px; /* Sesuaikan dengan kebutuhan untuk memberi ruang agar tidak tertutup */
  }
  thead {
    background-color: #adb5bd; /* Warna latar belakang biru */
    color: black;
  }
  .btn-small {
    padding: 0.25rem 0.5rem; /* Mengecilkan ukuran padding */
    font-size: 0.875rem;     /* Mengecilkan ukuran font */
  }
  </style>

  <title>Daftar Peminjaman Ruang &mdash; OMBO</title>
</head>
<body>
  <?php
    session_start();

    if (!isset($_SESSION['username'])) {
        header("Location: login.php"); // Redirect ke halaman login jika belum login
        exit();
    }

    $current_user = $_SESSION['username'];
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
            <li><a href="kritik.php">Kritik & Saran</a></li>
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

  <div class="container mt-5">
    <h2 class="mb-4 text-center">Daftar Ruang</h2>
    <div class="table-responsive">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>Username</th>
            <th>Tanggal Waktu Peminjaman</th>
            <th>Nama Ruang</th>
            <th>Alasan</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
            // Buat koneksi ke database
            $koneksi = mysqli_connect("localhost", "root", "", "ombo");

            // Periksa koneksi
            if (mysqli_connect_errno()) {
                echo "Koneksi database gagal: " . mysqli_connect_error();
                exit();
            }

            // Query untuk mengambil data peminjaman ruang beserta nama pengguna dan nama ruang
            $sql = "SELECT bookings.*, users.username, rooms.name as room_name 
                    FROM bookings
                    JOIN users ON bookings.userID = users.id
                    JOIN rooms ON bookings.roomID = rooms.id
                    ORDER BY bookings.id ASC";  // Mengurutkan berdasarkan id secara menaik
            $result = mysqli_query($koneksi, $sql);

            // Variabel untuk nomor urut
            $no = 1;

            // Tampilkan data dalam tabel HTML
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $no++ . "</td>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . date('d/m/Y H:i', strtotime($row['start_time'])) . " - " . date('H:i', strtotime($row['end_time'])) . "</td>";
                echo "<td>" . $row['room_name'] . "</td>";
                echo "<td>" . $row['alasan'] . "</td>";
                if ($row['username'] == $current_user) {
                    echo '<td><form method="post" action="hapus.php" onsubmit="return confirm(\'Apakah Anda yakin ingin membatalkan peminjaman ini?\');">
                            <input type="hidden" name="id" value="' . $row['id'] . '">
                            <button type="submit" class="btn btn-danger btn-small">Batal</button>
                          </form></td>';
                } else {
                    echo '<td></td>';
                }
                echo "</tr>";
            }

            // Tutup koneksi
            mysqli_close($koneksi);
          ?>
        </tbody>
      </table>
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
