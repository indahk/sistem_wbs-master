<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | DataTables</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="<?= base_url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback')?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/dashboard/plugins/fontawesome-free/css/all.min.cs')?>s">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url('assets/dashboard/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')?>">
  <link rel="stylesheet" href="<?= base_url('assets/dashboard/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')?>">
  <link rel="stylesheet" href="<?= base_url('assets/dashboard/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/dashboard/dist/css/adminlte.min.css')?>">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

<!-- Include Navbar -->
<?php $this->load->view('dashboard1/template/navbar'); ?>
  <!-- /.navbar -->`

<!-- Include Sidebar -->
<?php $this->load->view('dashboard1/template/sidebar'); ?>
<!---/Include Sidebar -->
  


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Aspirasi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('')?>#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <!-- <h3 class="card-title">DataTable with minimal features & hover style</h3> -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID_Aspirasi</th>
                    <th>Judul_Aspirasi</th>
                    <th>Isi_Aspirasi</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>01</td>
                    <td>Aspirasi Public</td>
                    <td>A-------</td>
                    <td> 04/08/2020</td>
                    <td> Proses</td>
                    <td>   
                    <div class="btn-group">
                    <button type="button" class="btn btn-info">Action</button>
                    <div class="btn-group">
                    <button type="button" class="btn btn-info dropdown-toggle dropdown-hover dropdown-icon" data-toggle="dropdown">
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu" role="menu">
                      <a class="dropdown-item" href="">Detail</a>
                      <a class="dropdown-item" href="#">Edit</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                  </div>

                  </div>
                  </td>
                  </tr>
                 
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>ID_Aspirasi</th>
                    <th>Judul_Aspirasi</th>
                    <th>Isi_Aspirasi</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Aspirasi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID_Aspirasi</th>
                    <th>Judul_Aspirasi</th>
                    <th>Isi_Aspirasi</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                  <td>01</td>
                    <td>Aspirasi Public</td>
                    <td>A-------</td>
                    <td> 04/08/2020</td>
                    <td> Proses</td>
                    <td>
                  </tr>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>ID_Aspirasi</th>
                    <th>Judul_Aspirasi</th>
                    <th>Isi_Aspirasi</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="<?= base_url('')?>https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url('assets/dashboard/plugins/jquery/jquery.min.js')?>"></script>

<!-- <script src="../../plugins/jquery/jquery.min.js"></script> -->
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/dashboard/plugins/datatables/jquery.dataTables.min.js')?>"></script>
<!-- DataTables  & Plugins -->
<script src="<?= base_url('assets/dashboard/plugins/datatables/jquery.dataTables.min.js')?>"></script>
<script src="<?= base_url('assets/dashboard/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')?>"></script>
<script src="<?= base_url('assets/dashboard/plugins/datatables-responsive/js/dataTables.responsive.min.js')?>"></script>
<script src="<?= base_url('assets/dashboard/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')?>"></script>
<script src="<?= base_url('assets/dashboard/plugins/datatables-buttons/js/dataTables.buttons.min.js')?>"></script>
<script src="<?= base_url('assets/dashboard/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')?>"></script>
<script src="<?= base_url('assets/dashboard/plugins/jszip/jszip.min.js')?>"></script>
<script src="<?= base_url('assets/dashboard/plugins/pdfmake/pdfmake.min.js')?>"></script>
<script src="<?= base_url('assets/dashboard/plugins/pdfmake/vfs_fonts.js')?>"></script>
<script src="<?= base_url('assets/dashboard/plugins/datatables-buttons/js/buttons.html5.min.js')?>"></script>
<script src="<?= base_url('assets/dashboard/plugins/datatables-buttons/js/buttons.print.min.js')?>"></script>
<script src="<?= base_url('assets/dashboard/plugins/datatables-buttons/js/buttons.colVis.min.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/dashboard/dist/js/adminlte.min.js')?>."></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('assets/dashboard/dist/js/demo.js')?>"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
