<!-- Header -->
<?= $this->load->view('dashboard/temp/header') ?>
<!-- /Header -->
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="<?= base_url('assets/dashboard/dist/img/AdminLTELogo.png') ?>" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <?= $this->load->view('dashboard/temp/navbar') ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?= $this->load->view('dashboard/temp/sidebar') ?>
  <!-- /Main Sidebar -->

  <!-- Content Wrapper. Contains page content -->

  <!-- /.content-wrapper -->

  
  <!-- Footer -->
  <?= $this->load->view('dashboard/temp/footer') ?>
  <!-- /Footer -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<?= $this->load->view('dashboard/temp/js.php') ?>
<!-- /jQuery -->
</body>

</html>