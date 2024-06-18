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
    
    <!-- Load Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <title>Ruang Arjuna &mdash; OMBO</title>
    <style>
        .text-black-50 {
            color: rgba(0, 0, 0, 0.5);
            text-align: justify;
        }
        .img-property-slide-wrap {
            margin-top: 20px;
        }
        .row-reverse {
            display: flex;
            flex-direction: row-reverse;
            justify-content: space-between;
        }
        .table-wrapper {
          max-height: 350px; /* Sesuaikan tinggi maksimal sesuai kebutuhan */
          overflow-y: auto; /* Biarkan tabel bisa digulir secara vertikal */
          overflow-x: hidden; /* Sembunyikan kemampuan gulir horizontal */
        }
        .table {
          width: 60px; /* Lebar tabel */
        }
        .table td {
          padding: 5px; /* Padding untuk sel */
        }
        .btn-peminjaman {
            margin-top: 20px;
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #005555; /* Warna hijau */
            color: white;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            border: none;
            cursor: pointer;
        }
        .btn-peminjaman:hover {
            background-color: #005555; /* Warna hijau gelap saat di-hover */
        }
        
    </style>
  </head>
  <body>
    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
          <span class="icofont-close js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <nav class="site-nav">
      <div class="container">
        <div class="menu-bg-wrap">
          <div class="site-navigation">
          <a href="index.php" class="logo m-0 float-start">
            <img src="2.png" alt="Logo" style="max-height: 8%; max-width: 8%;"></a>

            <a href="#" class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none" data-toggle="collapse" data-target="#main-navbar">
              <span></span>
            </a>
          </div>
        </div>
      </div>
    </nav>

    <div class="hero page-inner overlay" style="background-image: url('images/arjuna1.jpg')">
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-9 text-center mt-5">
            <h1 class="heading" data-aos="fade-up">Ruang Arjuna</h1>

            <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
              <ol class="breadcrumb text-center justify-content-center">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="ruang.php">Ruang</a></li>
                <li class="breadcrumb-item active text-white-50" aria-current="page">SMK Negeri 2 Depok Sleman</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>

    <div class="section">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-7">
            <div class="img-property-slide-wrap">
              <div class="img-property-slide">
                <img src="images/arjuna2.jpg" alt="Image" class="img-fluid" />
                <img src="images/arjuna3.jpg" alt="Image" class="img-fluid" />
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <p class="text-black-50">Ruang Arjuna juga menjadi salah satu ruangan yang berada di SMK Negeri 2 Depok Sleman Yogyakarta. Ruang Arjuna ini terletak di sebelah Ruang Yudhistira. Ruangan ini memiliki fasilitas kursi meja, AC, layar monitor. Ruangan ini bisa menampung sekitar 50 orang. Ruangan ini juga cocok digunakan untuk pertemuan penting, wawancara ataupun seleksi.</p>
            <!-- <p class="text-black-50">gantinen sek phpne ngko tak pikirkan meh diisi opo</p>
            <p class="text-black-50">iki barang</p> -->
            <h5>Tabel Peminjaman Ruang Arjuna</h5>
            <div class="table-wrapper">
              <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Waktu Mulai</th>
                        <th scope="col">Waktu Selesai</th>
                        <th scope="col">Acara</th>
                        <th scope="col">Peminjam</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Ganti dengan kredensial database Anda
                    $servername = "localhost";
                    $username = "root"; // Biasanya untuk XAMPP usernamenya adalah root
                    $password = ""; // Biasanya untuk XAMPP passwordnya kosong
                    $dbname = "ombo"; // Nama database Anda

                    // Buat koneksi
                    $conn = new mysqli($servername, $username, $password, $dbname);

                    // Periksa koneksi
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // Query untuk mengambil data peminjaman ruang Yudhistira
                    $sql = "SELECT * FROM bookings WHERE roomID = 4";
                    $result = $conn->query($sql);

                    // Tampilkan data peminjaman
                    if ($result->num_rows > 0) {
                        $count = 1;
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $count++ . "</td>";
                            echo "<td>" . date("d-m-Y H:i:s", strtotime($row["start_time"])) . "</td>";
                            echo "<td>" . date("d-m-Y H:i:s", strtotime($row["end_time"])) . "</td>";
                            echo "<td>" . $row["alasan"] . "</td>";
                            // Ambil nama peminjam dari tabel users
                            $userID = $row["userID"];
                            $user_sql = "SELECT name FROM users WHERE id = $userID";
                            $user_result = $conn->query($user_sql);
                            if ($user_result->num_rows > 0) {
                                $user_row = $user_result->fetch_assoc();
                                echo "<td>" . $user_row["name"] . "</td>";
                            } else {
                                echo "<td>Unknown</td>";
                            }
                            echo "</tr>";
                          }
                        } else {
                            echo "<tr><td colspan='5' class='text-center'>Belum ada peminjaman.</td></tr>";
                        }
    
                        $conn->close();
                        ?>
                    </tbody>
                </table>
              </div>
              <a href="tambah.php" class="btn-peminjaman">Ajukan Peminjaman</a>
            </div>
          </div>
        </div>

    <div class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="widget">
              <h3>Address</h3>
              <address>Jl. STM Pembangunan. Mrican, Caturtunggal, Depok, Sleman, D.I. Yogyakarta</address>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="widget">
              <h3>Links</h3>
              <ul class="list-unstyled social">
                <li><a href="https://www.instagram.com/ombosija3/"><span class="icon-instagram"></span></a></li>
                <li><a href="https://mail.google.com/mail/?view=cm&fs=1&to=ombosija@gmail.com"><span class="icon-email"><i class="far fa-envelope"></i></span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-12 text-center">
          <p>
              Copyright &copy;
              <script>
                document.write(new Date().getFullYear());

                document.addEventListener('contextmenu', function(e) {
                  e.preventDefault();
                });
                
                document.addEventListener('selectstart', function(e) {
                  e.preventDefault();
                });
                
                document.addEventListener('copy', function(e) {
                  e.preventDefault();
                });
                
                document.addEventListener('cut', function(e) {
                  e.preventDefault();
                });
                document.addEventListener('keydown', function(e) {
                  if (e.ctrlKey && (e.key === 'c' || e.key === 'u' || e.key === 's' || e.key === 'p' || e.key === 'a')) {
                    e.preventDefault();
                  }
                });
                
                function togglePasswordVisibility() {
                  const passwordInput = document.getElementById('password');
                  const eyeIcon = document.getElementById('eye-icon');
                  if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    eyeIcon.classList.remove('fa-eye');
                    eyeIcon.classList.add('fa-eye-slash');
                  } else {
                    passwordInput.type = 'password';
                    eyeIcon.classList.remove('fa-eye-slash');
                    eyeIcon.classList.add('fa-eye');
                  }
                }
              </script>
              . All Rights Reserved. &mdash; Designed with love by
              <a href="index.php">OMBO.id</a>
              <!-- License information: https://untree.co/license/ -->
            </p>
            <div>Distributed by <a href="https://themewagon.com/" target="_blank">themewagon</a></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
      <div class="spinner-border" role="status">
        <span class="visually-hidden">Loading...</span>
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
