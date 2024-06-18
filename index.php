<?php
session_start();

if(!isset($_SESSION['id'])){
  header('location: login.php');
  exit;
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link
      href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="fonts/icomoon/style.css" />
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css" />

    <link rel="stylesheet" href="css/tiny-slider.css" />
    <link rel="stylesheet" href="css/aos.css" />
    <link rel="stylesheet" href="css/style.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <title>
      OMBO.id
    </title>
    <style>
      #scrollToTopBtn {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 99;
        font-size: 18px;
        border: none;
        outline: none;
        background-color: #005555;
        color: white;
        cursor: pointer;
        padding: 15px;
        border-radius: 4px;
      }

      #scrollToTopBtn:hover {
        background-color: #555;
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

            <ul
              class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end"
            >
              <li class="active"><a href="index.php">Home</a></li>
              <li><a href="#ruang">Ruang</a></li>
              <li><a href="#kami">Tentang Kami</a></li>
              <li class="has-children">
              <a href="profile.php">Profil</a>
                    <ul class="dropdown">
                      <li><a href="tambah.php">Buat Peminjaman</a></li>
                      <li><a href="daftar.php">Daftar Peminjaman</a></li>
                      <li><a href="logout.php">Logout</a></li>
                    </ul>
                  </li>
            </ul>

            <a
              href="#"
              class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none"
              data-toggle="collapse"
              data-target="#main-navbar"
            >
              <span></span>
            </a>
          </div>
        </div>
      </div>
    </nav>

    <div class="hero">
      <div class="hero-slide">
        <div
          class="img overlay"
          style="background-image: url('images/bg2.jpg')"
        ></div>
        <div
          class="img overlay"
          style="background-image: url('images/bg1.jpg')"
        ></div>
        <div
          class="img overlay"
          style="background-image: url('images/bg3.jpg')"
        ></div>
      </div>

      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-9 text-center">
            <h1 class="heading" data-aos="fade-up">
              Platform Peminjaman Ruang Terbaik untuk Sekolahmu!
            </h1>
            <form action="search.php" method="POST" class="narrow-w form-search d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200">
              <input type="text" class="form-control px-4" placeholder="Cari Nama Ruang" name="searchQuery">
              <button type="submit" class="btn btn-primary">Cari</button>
            </form>

          </div>
        </div>
      </div>
    </div>

    <div class="section">
      <div class="container">
        <div class="row mb-5 align-items-center">
          <div class="col-lg-6">
            <h2 class="font-weight-bold text-primary heading" id=ruang>
              Daftar Ruang
            </h2>
          </div>
          <div class="col-lg-6 text-lg-end">
            <p>
              <a
                href="ruang.php"
                target="_blank"
                class="btn btn-primary text-white py-3 px-4"
                >Lihat Ruang Lainnya</a
              >
            </p>
          </div>
        </div>
        <div class="row" style="margin-bottom: 10px">
          <div class="col-12">
            <div class="property-slider-wrap">
              <div class="property-slider">
                <div class="property-item">
                  <a href="yudhis.php" class="img">
                    <img src="images/yudhis1_new.jpg" alt="Image" class="img-fluid" />
                  </a>

                  <div class="property-content">
                    <div class="city d-block mb-3"><span>Ruang Yudhistira</span></div>
                    <div>
                      <span class="d-block mb-2 text-black-50"
                        >SMK Negeri 2 Depok Sleman</span
                      >
                      <span class="city mb-2"></span>

                      <div class="specs d-flex mb-4">
                        <span class="d-block d-flex align-items-center me-3">
                          <span class="icon-people me-2">
                            <img src="https://img.icons8.com/ios-filled/50/000000/people.png" alt="" class="me-2" />
                          </span>
                          <span class="caption">50 orang</span>
                        </span>
                      </div>
                    
                    

                      <!-- <a
                        href="property-single.html"
                        class="btn btn-primary py-2 px-3"
                        >Selengkapnya</a
                      > -->
                    </div>
                  </div>
                </div>
                <!-- .item -->

                <div class="property-item">
                  <a href="bima.php" class="img">
                    <img src="images/bima1.jpg" alt="Image" class="img-fluid" />
                  </a>

                  <div class="property-content">
                    <div class="city d-block mb-3"><span>Ruang Bima</span></div>
                    <div>
                      <span class="d-block mb-2 text-black-50"
                        >SMK Negeri 2 Depok Sleman</span
                      >
                      <span class="city mb-2"></span>

                      <div class="specs d-flex mb-4">
                        <span class="d-block d-flex align-items-center me-3">
                          <span class="icon-people me-2">
                            <img src="https://img.icons8.com/ios-filled/50/000000/people.png" alt="" class="me-2" />
                          </span>
                          <span class="caption">400 orang</span>
                        </span>
                      </div>

                      <!-- <a
                        href="property-single.html"
                        class="btn btn-primary py-2 px-3"
                        >Selengkapnya</a
                      > -->
                    </div>
                  </div>
                </div>
                <!-- .item -->

                <div class="property-item">
                  <a href="naksad.php" class="img">
                    <img src="images/naksad1.jpg" alt="Image" class="img-fluid" />
                  </a>

                  <div class="property-content">
                    <div class="city d-block mb-3"><span>Ruang Nakula Sadewa</span></div>
                    <div>
                      <span class="d-block mb-2 text-black-50"
                        >SMK Negeri 2 Depok Sleman</span
                      >
                      <span class="city mb-2"></span>

                      <div class="specs d-flex mb-4">
                        <span class="d-block d-flex align-items-center me-3">
                          <span class="icon-people me-2">
                            <img src="https://img.icons8.com/ios-filled/50/000000/people.png" alt="" class="me-2" />
                          </span>
                          <span class="caption">70 orang</span>
                        </span>
                      </div>
                    
                    

                      <!-- <a
                        href="property-single.html"
                        class="btn btn-primary py-2 px-3"
                        >Selengkapnya</a
                      > -->
                    </div>
                  </div>
                </div>
                <!-- .item -->

                <!-- <div class="property-item">
                  <a href="property-single.html" class="img">
                    <img src="images/img_4.jpg" alt="Image" class="img-fluid" />
                  </a>

                  <div class="property-content">
                    <div class="price mb-2"><span>$1,291,000</span></div>
                    <div>
                      <span class="d-block mb-2 text-black-50"
                        >5232 California Fake, Ave. 21BC</span
                      >
                      <span class="city d-block mb-3">California, USA</span>

                      <div class="specs d-flex mb-4">
                        <span class="d-block d-flex align-items-center me-3">
                          <span class="icon-bed me-2"></span>
                          <span class="caption">2 beds</span>
                        </span>
                        <span class="d-block d-flex align-items-center">
                          <span class="icon-bath me-2"></span>
                          <span class="caption">2 baths</span>
                        </span>
                      </div>

                      <a
                        href="property-single.html"
                        class="btn btn-primary py-2 px-3"
                        >See details</a
                      >
                    </div>
                  </div>
                </div> -->
                <!-- .item -->
              </div>

              <div
                id="property-nav"
                class="controls"
                tabindex="0"
                aria-label="Carousel Navigation"
              >
                <span
                  class="prev"
                  data-controls="prev"
                  aria-controls="property"
                  tabindex="-1"
                  >Prev</span
                >
                <span
                  class="next"
                  data-controls="next"
                  aria-controls="property"
                  tabindex="-1"
                  >Next</span
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="features-1">
      <div class="container">
        <div class="row">
          <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
            <div class="box-feature">
              <span class="flaticon-house"></span>
              <h3 class="mb-3">Pengoptimalan penggunaan ruang</h3>
              <p>
              Menganalisis pola penggunaan sehingga dapat mengoptimalkan penggunaan ruang yang kurang dimanfaatkan.
              </p>
              <!-- <p><a href="#" class="learn-more">Learn More</a></p> -->
            </div>
          </div>
          <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
            <div class="box-feature">
              <span class="flaticon-building"></span>
              <h3 class="mb-3">Kemudahan akses</h3>
              <p>
              Menampilkan ketersediaan ruang secara real-time, sehingga seksi bidang dapat melihat dan meminjam ruang yang tersedia dengan mudah.
              </p>
              <!-- <p><a href="#" class="learn-more">Learn More</a></p> -->
            </div>
          </div>
          <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
            <div class="box-feature">
              <span class="flaticon-house-3"></span>
              <h3 class="mb-3">Peningkatan Komunikasi dan Kolaborasi</h3>
              <p>
              Memfasilitasi kolaborasi antar seksi bidang dengan menyediakan informasi ruang yang akan digunakan untuk kegiatan bersama.
              </p>
              <!-- <p><a href="#" class="learn-more">Learn More</a></p> -->
            </div>
          </div>
          <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
            <div class="box-feature">
              <span class="flaticon-house-1"></span>
              <h3 class="mb-3">Efisiensi pengelolaan</h3>
              <p>
              Mengurangi pekerjaan administratif manual, seperti pencatatan pemesanan dan persetujuan penggunaan ruang, dengan otomatisasi melalui platform.
              </p>
              <!-- <p><a href="#" class="learn-more">Learn More</a></p> -->
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="section sec-testimonials">
      <div class="container">
        <div class="row mb-5 align-items-center">
          <div class="col-md-6">
            <h2 class="font-weight-bold heading text-primary mb-4 mb-md-0">
              Kata mereka
            </h2>
          </div>
          <div class="col-md-6 text-md-end">
            <!-- <div id="testimonial-nav">
              <span class="prev" data-controls="prev">Prev</span>

              <span class="next" data-controls="next">Next</span>
            </div> -->
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4"></div>
        </div>
        <div class="testimonial-slider-wrap">
          <div class="testimonial-slider">
            <div class="item">
              <div class="testimonial">
                <img
                  src="images/person_1-min.jpg"
                  alt="Image"
                  class="img-fluid rounded-circle w-25 mb-4"
                />
                <div class="rate">
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                </div>
                <h3 class="h5 text-primary mb-4">BPPK Stembayo</h3>
                <blockquote>
                  <p>
                    &ldquo;mantap! sangat mengeasykan&rdquo;
                  </p>
                </blockquote>
                <p class="text-black-50">Seksi Bidang Berbahasa Penerapan dan Kesastraan</p>
              </div>
            </div>

            <div class="item">
              <div class="testimonial">
                <img
                  src="images/person_2-min.jpg"
                  alt="Image"
                  class="img-fluid rounded-circle w-25 mb-4"
                />
                <div class="rate">
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star-half text-warning"></span>
                </div>
                <h3 class="h5 text-primary mb-4">KJDK Stembayo</h3>
                <blockquote>
                  <p>
                    &ldquo;ketua approved. lanjutkan&rdquo;
                  </p>
                </blockquote>
                <p class="text-black-50">Seksi Bidang Kesegaran Jasmani dan Daya Kreasi Seni </p>
              </div>
            </div>

            <div class="item">
              <div class="testimonial">
                <img
                  src="images/person_3-min.jpg"
                  alt="Image"
                  class="img-fluid rounded-circle w-25 mb-4"
                />
                <div class="rate">
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <!-- <span class="icon-star text-warning"></span> -->
                </div>
                <h3 class="h5 text-primary mb-4">KBBP Stemabayo</h3>
                <blockquote>
                  <p>
                    &ldquo;foundersnya keren, maaci ya&rdquo;
                  </p>
                </blockquote>
                <p class="text-black-50">Seksi Bidang Kehidupan Berbangsa dan Bernegara Pancasila</p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

  
    <div class="section">
      <div class="row justify-content-center footer-cta" data-aos="fade-up">
        <div class="col-lg-7 mx-auto text-center">
          <h2 class="mb-4">Daftarkan sekbidmu agar eventmu berjalan lancar</h2>
          <p>
            <a
              href="tambah.php"
              target="_blank"
              class="btn btn-primary text-white py-3 px-4"
              >Buat Perizinan</a
            >
          </p>
        </div>
        <!-- /.col-lg-7 -->
      </div>
      <!-- /.row -->
    </div>

    <div class="section section-5 bg-light">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-lg-6 mb-5">
            <h2 class="font-weight-bold heading text-primary mb-4" id=kami>
              Founders
            </h2>
            <p class="text-black-50">
              Manusia-manusia keren yang memiliki keluhan terkait event organisasinya terutama perihal ruang
            </p>
            <p><a href="kami.php" class="learn-more">Ketahui Lebih Lanjut</a></p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
            <div class="h-100 person">
              <img
                src="images/founders1.jpg"
                alt="Image"
                class="img-fluid"
              />

              <div class="person-contents">
                <h2 class="mb-0"><a href="#">Mutiara Sekar Kinasih</a></h2>
                <span class="meta d-block mb-3">Back-End Engineer</span>
                <p>
                  Ketua BPPK yang terpaksa jadi Back-End :)
                </p>

                <ul class="social list-unstyled list-inline dark-hover">
                  <li class="list-inline-item">
                  <a href="https://wa.me/+6285198553807" target="_blank"><span class="icon-whatsapp"></span></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="https://www.instagram.com/mtiarasekar/" target="_blank"><span class="icon-instagram"></span></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
            <div class="h-100 person">
              <img
                src="images/founders2.jpg"
                alt="Image"
                class="img-fluid"
              />

              <div class="person-contents">
                <h2 class="mb-0"><a href="#">Naufelirna Subkhi Ramadhani</a></h2>
                <span class="meta d-block mb-3">Front-End Engineer</span>
                <p>
                  Sekre PK yang gabut jadi front-end aja :p
                </p>

                <ul class="social list-unstyled list-inline dark-hover">
                  <li class="list-inline-item">
                    <a href="https://wa.me/+6289671421234" target="_blank"><span class="icon-whatsapp"></span></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="https://www.instagram.com/naufelirnasr/" target="_blank"><span class="icon-instagram"></span></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
            <div class="h-100 person">
              <img
                src="images/founders3_new.jpg"
                alt="Image"
                class="img-fluid"
              />

              <div class="person-contents">
                <h2 class="mb-0"><a href="#">Thara Bunga Novriyansyah</a></h2>
                <span class="meta d-block mb-3">Database Engineer</span>
                <p>
                 Bendahara KJDK yang pusing duit, pusing juga bawa database
                </p>

                <ul class="social list-unstyled list-inline dark-hover">
                  <li class="list-inline-item">
                  <a href="https://wa.me/+6287834060198" target="_blank"><span class="icon-whatsapp"></span></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="https://www.instagram.com/hr4nvr/" target="_blank"><span class="icon-instagram"></span></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
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
            <!-- /.widget -->
          </div>
          <!-- /.col-lg-4 -->
          <!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <div class="widget">
              <h3>Links</h3>


              <ul class="list-unstyled social">
                <li>
                  <a href="https://www.instagram.com/ombosija3/"><span class="icon-instagram"></span></a>
                </li>
                <li>
                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=ombosija@gmail.com"><span class="fa-regular fa-envelope"></span>
                </a>
                </li>
              </ul>
            </div>
            <!-- /.widget -->
          </div>
          <!-- /.col-lg-4 -->
        </div>
        <!-- /.row -->

        <div class="row mt-5">
          <div class="col-12 text-center">
            <!-- 
              **==========
              NOTE: 
              Please don't remove this copyright link unless you buy the license here https://untree.co/license/  
              **==========
            -->

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
            <div>
              Distributed by
              <a href="https://themewagon.com/" target="_blank">themewagon</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /.container -->
    </div>
    <!-- /.site-footer -->

    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
      <div class="spinner-border" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </div>

     <button id="scrollToTopBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>

    <!-- Script JavaScript untuk Scroll to Top -->
    <script>
      // Get the button
      let mybutton = document.getElementById("scrollToTopBtn");

      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function() {scrollFunction()};

      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          mybutton.style.display = "block";
        } else {
          mybutton.style.display = "none";
        }
      }

      // When the user clicks on the button, scroll to the top of the document
      mybutton.onclick = function() {
        window.scrollTo({top: 0, behavior: 'smooth'});
      }
    </script>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/navbar.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/custom.js"></script>
    <button id="scrollToTopBtn" title="Go to top" >Top</button>

  </body>
</html>
