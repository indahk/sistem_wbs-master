<!DOCTYPE html>
<html lang="en">

<?= $this->load->view('beranda/temp/include_meta') ?>

<body>

  <!-- ======= Header ======= -->
  <?= $this->load->view('beranda/temp/include_header') ?>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <?= $this->load->view('beranda/page/hero_section') ?>
  <!-- End Hero -->

  <main id="main">
    <?= $this->load->view($page_content) ?>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?= $this->load->view('beranda/temp/include_footer') ?>
  <!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>
  <!-- ========== js ========== -->
  <?= $this->load->view('beranda/temp/include_js') ?>
  <!-- ========== /js ========== -->


</body>

</html>