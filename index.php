  <?php
session_start();
include ("koneksi.php");

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sistem Informasi Karyawan - Home</title>
	<link rel="icon" href="img/nav-banner-logo.png" type="image/png">

  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="vendors/linericon/style.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">

  <link rel="stylesheet" href="css/style.css">

  <!-- Tambahan di HEAD -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

<link rel="stylesheet" href="css/custom.css"> <!-- (Nanti isi custom css baru di file ini) -->

</head>
<body>
<header class="header_area shadow-navbar">
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <!-- LOGO DI SEBELAH KIRI -->
      <a class="navbar-brand" href="index.php">
        <img src="img/nav-banner-logo.png" alt="Logo">
      </a>
      <!-- HAMBURGER BUTTON UNTUK MOBILE -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- MENU DI SEBELAH KANAN LOGO -->
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav align-items-center">
          <li class="nav-item active">
            <a class="nav-link" href="#">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#kontak">Kontak</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle btn btn-login-navbar" href="#" id="navbarDropdown" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-sign-in-alt"></i> Login
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="login.php"><i class="fas fa-user-shield"></i> Admin</a>
              <a class="dropdown-item" href="karyawan/login_karyawan.php"><i class="fas fa-user"></i> Karyawan</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>

<!-- HERO/HEADER AREA -->
<section class="hero-banner">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 text-center mb-3 mb-lg-0">
        <img class="img-fluid" src="img/nav-banner-logo.png" alt="Logo Winnicode" style="max-width: 350px;">
      </div>
      <div class="col-lg-6 pt-3 pt-lg-0">
        <div class="hero-banner__content">
          <h1 class="title-hero mb-3">SISTEM ABSENSI</h1>
          <p class="desc-hero">
          Aplikasi berbasis web untuk absensi karyawan secara online dan realtime.<br>
          Memudahkan pencatatan kehadiran, keterlambatan, serta rekap data presensi setiap hari. Solusi modern yang efisien untuk perusahaan dan instansi Anda.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- KONTAK -->
<section id="kontak" class="kontak-section">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="section-title">Kontak Kami</h2>
      <p class="kontak-desc">Hubungi kami melalui kontak resmi berikut:</p>
    </div>
    <div class="row justify-content-center g-4">
      <div class="col-md-4">
        <div class="kontak-card">
          <span class="kontak-icon"><i class="fas fa-envelope"></i></span>
          <h4>Email</h4>
          <div class="kontak-info">winnicodegarudaofficial@gmail.com</div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="kontak-card">
          <span class="kontak-icon"><i class="fas fa-globe"></i></span>
          <h4>Website</h4>
          <div class="kontak-info">www.winnicode.com</div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="kontak-card">
          <span class="kontak-icon"><i class="fas fa-map-marker-alt"></i></span>
          <h4>Lokasi</h4>
          <div class="kontak-info">Bandung</div>
        </div>
      </div>
    </div>
  </div>
</section>


  <!-- ================ start footer Area ================= -->
  <footer class="mini-footer">
  <div class="container py-2 d-flex flex-column flex-md-row align-items-center justify-content-between">
  <div class="footer-bottom">
  © 2025 WinniCode - Garuda Teknologi
  </div>
  </div>
</footer>

  <!-- ================ End footer Area ================= -->

  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/mail-script.js"></script>
  <script src="js/main.js"></script>
</body>
</html>