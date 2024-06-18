

<!-- /*
* Template Name: Property
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
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

    <title>
      Ruang &mdash; OMBO
    </title>
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
              <li><a href="kami.php">Tentang Kami</a></li>
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

    <div
      class="hero page-inner overlay"
      style="background-image: url('images/bg3.jpg')"
    >
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-9 text-center mt-5">
            <h1 class="heading" data-aos="fade-up">Ruang</h1>

            <nav
              aria-label="breadcrumb"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <ol class="breadcrumb text-center justify-content-center">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li
                  class="breadcrumb-item active text-white-50"
                  aria-current="page"
                >
                  Ruang
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>

    <div class="section">
      <div class="container">
        <div class="row mb-5 align-items-center">
          <div class="col-lg-6 text-center mx-auto">
            <h2 class="font-weight-bold text-primary heading">
              Ruangan yang disediakan
            </h2>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="property-slider-wrap">
              <div class="property-slider">
                <div class="property-item">
                  <a href="yu" class="img">
                    <img src="images/yudhis1_new.jpg" alt="Image" class="img-fluid" />
                  </a>

                  <div class="property-content">
                    <!-- <div class="price mb-2"><span>Available</span></div> -->
                    <div class="city d-block mb-3"><span>Ruang Yudhistira</span></div>
                    <div>
                    <span class="city d-block mb-2 text-black-50" style="font-size: 13px; font-weight: 400">SMK Negeri 2 Depok Sleman</span>
                      <span class="city mb-2"></span>

                      <div class="specs d-flex mb-4">
                        <span class="d-block d-flex align-items-center me-3">
                          <span class="icon-people me-2"></span>
                          <span class="caption">50 orang</span>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- .item -->

                <div class="property-item">
                  <a href="bima.php" class="img">
                    <img src="images/bima1.jpg" alt="Image" class="img-fluid" />
                  </a>

                 
                  <div class="property-content">
                    <!-- <div class="price mb-2"><span>Available</span></div> -->
                    <div class="city d-block mb-3"><span>Ruang Bima</span></div>
                    <div>
                    <span class="city d-block mb-2 text-black-50" style="font-size: 13px; font-weight: 400">SMK Negeri 2 Depok Sleman</span>
                      <span class="city mb-2"></span>

                      <div class="specs d-flex mb-4">
                        <span class="d-block d-flex align-items-center me-3">
                          <span class="icon-people me-2"></span>
                          <span class="caption">400 orang</span>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- .item -->

                <div class="property-item">
                  <a href="arjuna.php" class="img">
                    <img src="images/arjuna1.jpg" alt="Image" class="img-fluid" />
                  </a>

                  <div class="property-content">
                    <!-- <div class="price mb-2"><span>Available</span></div> -->
                    <div class="city d-block mb-3"><span>Ruang Arjuna</span></div>
                    <div>
                    <span class="city d-block mb-2 text-black-50" style="font-size: 13px; font-weight: 400">SMK Negeri 2 Depok Sleman</span>
                      <span class="city mb-2"></span>

                      <div class="specs d-flex mb-4">
                        <span class="d-block d-flex align-items-center me-3">
                          <span class="icon-people me-2"></span>
                          <span class="caption">50 orang</span>
                        </span>
                      </div>

                    </div>
                  </div>
                </div>
                <!-- .item -->

                <div class="property-item">
                  <a href="naksad.php" class="img">
                    <img src="images/naksad1.jpg" alt="Image" class="img-fluid" />
                  </a>

                  <div class="property-content">
                    <!-- <div class="price mb-2"><span>Available</span></div> -->
                    <div class="city d-block mb-3"><span>Ruang Nakula Sadewa</span></div>
                    <div>
                    <span class="city d-block mb-2 text-black-50" style="font-size: 13px; font-weight: 400">SMK Negeri 2 Depok Sleman</span>
                      <span class="city mb-2"></span>

                      <div class="specs d-flex mb-4">
                        <span class="d-block d-flex align-items-center me-3">
                          <span class="icon-people me-2"></span>
                          <span class="caption">70 orang</span>
                        </span>
                      </div>

                    </div>
                  </div>
                </div>
                <!-- .item -->

                <div class="property-item">
                  <a href="kresna.php" class="img">
                    <img src="images/kresna1.jpg" alt="Image" class="img-fluid" />
                  </a>

                  <div class="property-content">
                    <!-- <div class="price mb-2"><span>Booked</span></div> -->
                    <div class="city d-block mb-3"><span>Ruang Kresna</span></div>
                    <div>
                    <span class="city d-block mb-2 text-black-50" style="font-size: 13px; font-weight: 400">SMK Negeri 2 Depok Sleman</span>
                      <span class="city mb-2"></span>

                      <div class="specs d-flex mb-4">
                        <span class="d-block d-flex align-items-center me-3">
                          <span class="icon-people me-2"></span>
                          <span class="caption">70 orang</span>
                        </span>
                      </div>


                    </div>
                  </div>
                </div>
                <!-- .item -->
                <div class="property-item">
                  <a href="kresna.php" class="img">
                    <img src="images/rutor1.jpg" alt="Image" class="img-fluid" />
                  </a>

                  <div class="property-content">
                    <!-- <div class="price mb-2"><span>Available</span></div> -->
                    <div class="city d-block mb-3"><span>Ruang Teori</span></div>
                    <div>
                    <span class="city d-block mb-2 text-black-50" style="font-size: 13px; font-weight: 400">SMK Negeri 2 Depok Sleman</span>
                      <span class="city mb-2"></span>

                      <div class="specs d-flex mb-4">
                        <span class="d-block d-flex align-items-center me-3">
                          <span class="icon-people me-2"></span>
                          <span class="caption">35 orang</span>
                        </span>
                      </div>


                    </div>
                  </div>
                </div>

                <!-- <div class="property-item">
                  <a href="property-single.html" class="img">
                    <img src="images/img_6.jpg" alt="Image" class="img-fluid" />
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

                <!-- <div class="property-item">
                  <a href="property-single.html" class="img">
                    <img src="images/img_7.jpg" alt="Image" class="img-fluid" />
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

    <div class="section section-properties">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <div class="property-item mb-30">
                <img src="images/yudhis1_new.jpg" alt="Image" class="img-fluid" />
              </a>

              <div class="property-content">
                <div>
                  <span class="city d-block mb-3">Ruang Yudhistira</span>
                  <a
                  href="yudhis.php"
                  class="btn btn-primary py-2 px-3"
                  >Selengkapnya</a
                  >
                </div>
              </div>
            </div>
            <!-- .item -->
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <div class="property-item mb-30">
                <img src="images/bima1.jpg" alt="Image" class="img-fluid" />
              </a>

              <div class="property-content">
                <div>
                  <span class="city d-block mb-3">Ruang Bima</span>
                  <a
                    href="bima.php"
                    class="btn btn-primary py-2 px-3"
                    >Selengkapnya</a
                  >
                </div>
              </div>
            </div>
            <!-- .item -->
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <div class="property-item mb-30">
                <img src="images/arjuna1.jpg" alt="Image" class="img-fluid" />
              </a>

              <div class="property-content">
                <div>
                  <span class="city d-block mb-3">Ruang Arjuna</span>

                  <a
                    href="arjuna.php"
                    class="btn btn-primary py-2 px-3"
                    >Selengkapnya</a
                  >
                </div>
              </div>
            </div>
            <!-- .item -->
          </div>

          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <div class="property-item mb-30">
                <img src="images/naksad1.jpg" alt="Image" class="img-fluid" />
              </a>

              <div class="property-content">
                <div>
                  <span class="city d-block mb-3">Ruang Nakula Sadewa</span>

                  <a
                    href="naksad.php"
                    class="btn btn-primary py-2 px-3"
                    >Selengkapnya</a
                  >
                </div>
              </div>
            </div>
            <!-- .item -->
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <div class="property-item mb-30">
                <img src="images/kresna1.jpg" alt="Image" class="img-fluid" />
              </a>

              <div class="property-content">
                <div>
                  <span class="city d-block mb-3">Ruang Krisna</span>

                  <a
                    href="kresna.php"
                    class="btn btn-primary py-2 px-3"
                    >Selengkapnya</a
                  >
                </div>
              </div>
            </div>
            <!-- .item -->
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <div class="property-item mb-30">

                <img src="images/rutor1.jpg" alt="Image" class="img-fluid" />
              </a>

              <div class="property-content">
                <div>
                  <span class="city d-block mb-3">Ruang Teori</span>

                  <a
                    href="teori.php"
                    class="btn btn-primary py-2 px-3"
                    >Selengkapnya</a
                  >
                </div>
              </div>
            </div>
            <!-- .item -->
          </div>
          <!-- <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <div class="property-item mb-30">
              <a href="property-single.html" class="img">
                <img src="images/img_6.jpg" alt="Image" class="img-fluid" />
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
            </div>
             item -->
          </div>

          <!-- <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <div class="property-item mb-30">
              <a href="property-single.html" class="img">
                <img src="images/img_7.jpg" alt="Image" class="img-fluid" />
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
            </div>
             .item -->
          </div>
          <!-- <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <div class="property-item mb-30">
              <a href="property-single.html" class="img">
                <img src="images/img_8.jpg" alt="Image" class="img-fluid" />
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
            </div>
             .item -->
          </div>
          <!-- <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <div class="property-item mb-30">
              <a href="property-single.html" class="img">
                <img src="images/img_1.jpg" alt="Image" class="img-fluid" />
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
            </div>
            .item -->
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
    <!-- /.site-footer -->
    
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
