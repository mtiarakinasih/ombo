<?php
// Mulai sesi
session_start();

// Periksa apakah pengguna sudah login
if(isset($_SESSION['username'])) {
    // Koneksi ke database
    $conn = mysqli_connect("localhost", "root", "", "ombo");

    // Periksa koneksi
    if (!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }

    // Query untuk mendapatkan informasi PK Stembayo
    $username = $_SESSION['username'];
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $sql);

    // Periksa hasil query
    if (mysqli_num_rows($result) > 0) {
        // Ambil baris hasil sebagai asosiatif array
        $row = mysqli_fetch_assoc($result);
        $nama = $row['name'];
        $deskripsi = $row['description'];
        $username = $row['username'];
    } else {
        echo "Data pengguna tidak ditemukan.";
    }

    // Tutup koneksi
    mysqli_close($conn);
} else {
    // Jika pengguna belum login, arahkan ke halaman login
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

    <title>Profile &mdash; OMBO</title>
    <style>
         /* Custom CSS */
  .section {
    padding-top: 500px; /* Sesuaikan dengan kebutuhan untuk memberi ruang agar tidak tertutup */
  }
  thead {
    background-color: #adb5bd; /* Warna latar belakang biru */
    color: black}
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .profile-container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 300px;
            text-align: center;
            position: relative;
            width: 1125px;
        }

        .profile-header {
            background-color: #005555;
            color: #fff;
            padding: 40px 20px;
            position: relative;
        }

        .profile-header h1 {
            margin: 0;
            font-size: 24px;
            color: whitesmoke;
        }

        .profile-picture {
            position: absolute;
            top: 70px; /* Adjusted top position */
            left: 50%;
            transform: translateX(-50%);
            border: 5px solid #fff;
            border-radius: 50%;
            width: 100px;
            height: 100px;
            object-fit: cover;
        }

        .profile-body {
            padding: 20px;
            padding-top: 60px; /* Adjusted padding-top to make space for the profile picture */
        }

        .profile-body h2 {
            margin: 10px 0 5px;
            font-size: 20px;
        }

        .profile-body p {
            margin: 5px 0;
            color: #777;
        }

        .profile-footer {
            background-color: #f0f0f0;
            padding: 10px;
            display: flex;
            justify-content: space-around;
        }

        .profile-footer a {
            color: #4CAF50;
            text-decoration: none;
            font-size: 14px;
        }

        .profile-footer a:hover {
            text-decoration: underline;
        }
    </style>
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
              <a>Profil</a>
              <ul class="dropdown">
                <li><a href="tambah.php">Buat Peminjaman</a></li>
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
    <div class="profile-container">
        <div class="profile-header">
            <h1><?php echo $username; ?></h1>
            <img src="https://via.placeholder.com/100" alt="Profile Picture" class="profile-picture">
        </div>
        <div class="profile-body">
            <h2><?php echo $nama; ?></h2>
            <p><?php echo $deskripsi; ?></p>
    </div>
    </div>
</body>
</html>