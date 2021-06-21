<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Arsha Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href= "<?= base_url('assets/img/favicon.png')?>" rel="icon">

  <link href="<?= base_url('assets/img/apple-touch-icon.png')?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/icofont/icofont.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/boxicons/css/boxicons.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/remixicon/remixicon.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/venobox/venobox.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/owl.carousel/assets/owl.carousel.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/aos/aos.css') ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha - v2.3.1
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!-- Vendor JS Files -->
  <script src="<?=base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
  <script src="<?=base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?=base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>x"></script>
  <script src="<?=base_url('assets/vendor/php-email-form/validate.js') ?>"></script>
  <script src="<?=base_url('assets/vendor/waypoints/jquery.waypoints.min.js') ?>"></script>
  <script src="<?=base_url('assets/vendor/isotope-layout/isotope.pkgd.min.js') ?>"></script>
  <script src="<?=base_url('assets/vendor/venobox/venobox.min.js') ?>"></script>
  <script src="<?=base_url('assets/vendor/owl.carousel/owl.carousel.min.js') ?>"></script>
  <script src="<?=base_url('assets/vendor/aos/aos.js') ?>"></script>

    <!-- dropzonejs -->
    <link rel="stylesheet" href="assets/dashboard/plugins/dropzone/min/dropzone.min.css">

  <!-- Template Main JS File -->
  <script src="<?= base_url('assets/js/main.js') ?>"></script>
  
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">WBS Sistem</a></h1>
      <!-- <img class="kiri" src="<?= base_url('assets/colorlibLogin/images/small_logo_pcr.png') ?>" > -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="<?= base_url('Beranda') ?>">Beranda</a></li>
          <li><a href="<?= base_url('Aspirasi')?>">Aspirasi</a></li>
          <li><a href="<?= base_url('Saran')?>">Saran</a></li>
          <li><a href="<?= base_url('Lapor')?>">Lapor Pelanggaran</a></li>
          <li><a href="<?= base_url('PermintaanInformasi')?>">Permohonan Informasi</a></li>
          <li class="drop-down"><a href="">Layanan</a>
            <ul>
              <li><a href="<?= base_url('auth/Google_login') ?>">Login</a></li>
             <li class="drop-down"><a href="#">Deep Drop Down</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
              </ul>  
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
        <li><a href="#contact">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

 <a href="<?= base_url('auth/Auth') ?>" class="get-started-btn scrollto">Login</a> -->

    </div>
  </header><!-- End Header -->