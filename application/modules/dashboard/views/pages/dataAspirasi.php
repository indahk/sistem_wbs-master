
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
                <li class="breadcrumb-item"><a href="<?= base_url('') ?>#">Home</a></li>
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
                  <!-- Date and time range -->
                  <div class="form-group">
                    <label>Date range button:</label>

                    <div class="input-group">
                      <button type="button" class="btn btn-default float-right" id="daterange-btn">
                        <i class="far fa-calendar-alt"></i> Date range picker
                        <i class="fas fa-caret-down"></i>
                      </button>
                    </div>
                  </div>
                  <!-- /.form group -->
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
                                <a class="dropdown-item" href="<?= base_url('masukan/Aspirasi/showAspirasi') ?>">Detail</a>
                                <a class="dropdown-item" href="<?= base_url('') ?>#">Edit</a>
                                <a class="dropdown-item" href="<?= base_url('') ?>#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?= base_url('') ?>#">Separated link</a>
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
  
