  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="<?= base_url('') ?>https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>



  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="<?= base_url('assets/dashboard/plugins/jquery/jquery.min.js') ?>"></script>

  <!-- <script src="../../plugins/jquery/jquery.min.js"></script> -->
  <!-- Bootstrap 4 -->
  <script src="<?= base_url('assets/dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url('assets/dashboard/plugins/datatables/jquery.dataTables.min.js') ?>"></script>
  <!-- date-range-picker -->
  <script src="<?= base_url('assets/dashboard/plugins/daterangepicker/daterangepicker.js') ?>"></script>
  <!-- DataTables  & Plugins -->
  <script src="<?= base_url('assets/dashboard/plugins/datatables/jquery.dataTables.min.js') ?>"></script>
  <script src="<?= base_url('assets/dashboard/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
  <script src="<?= base_url('assets/dashboard/plugins/datatables-responsive/js/dataTables.responsive.min.js') ?>"></script>
  <script src="<?= base_url('assets/dashboard/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') ?>"></script>
  <script src="<?= base_url('assets/dashboard/plugins/datatables-buttons/js/dataTables.buttons.min.js') ?>"></script>
  <script src="<?= base_url('assets/dashboard/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') ?>"></script>
  <script src="<?= base_url('assets/dashboard/plugins/jszip/jszip.min.js') ?>"></script>
  <script src="<?= base_url('assets/dashboard/plugins/pdfmake/pdfmake.min.js') ?>"></script>
  <script src="<?= base_url('assets/dashboard/plugins/pdfmake/vfs_fonts.js') ?>"></script>
  <script src="<?= base_url('assets/dashboard/plugins/datatables-buttons/js/buttons.html5.min.js') ?>"></script>
  <script src="<?= base_url('assets/dashboard/plugins/datatables-buttons/js/buttons.print.min.js') ?>"></script>
  <script src="<?= base_url('assets/dashboard/plugins/datatables-buttons/js/buttons.colVis.min.js') ?>"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url('assets/dashboard/dist/js/adminlte.min.js') ?>."></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?= base_url('assets/dashboard/dist/js/demo.js') ?>"></script>

  <!-- jQuery -->
<!-- <script src="<?= base_url('assets/dashboard/plugins/jquery/jquery.min.js') ?>"></script> -->
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<!-- SweetAlert2 -->
<script src="<?= base_url('assets/dashboard/plugins/sweetalert2/sweetalert2.min.js') ?>"></script>
<!-- Toastr -->
<script src="<?= base_url('assets/dashboard/plugins/toastr/toastr.min.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/dashboard/dist/js/adminlte.min.js') ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('assets/dashboard/dist/js/demo.js') ?>"></script>
<!-- Page specific script -->

<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "lengthChange": true,
      "autoWidth": false
      // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    });
  });
</script>
</body>
</html>