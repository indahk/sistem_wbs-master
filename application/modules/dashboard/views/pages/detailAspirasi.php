
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail Aspirasi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Project Edit</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-8">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Detail</h3>

              <div class="card-tools">

              
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
            <?php foreach ($aspirasi as $s) { ?>
                <dl class="row">
                  <dt class="col-sm-4">Judul Aspirasi</dt>
                  <dd class="col-sm-8">: <?php echo ($s->judul_masukan) ?>R</dd>
                  <dt class="col-sm-4">Pengirim</dt>
                  <dd class="col-sm-8">: <?php echo ($s->nama_pelapor) ?></dd>
                  <dt class="col-sm-4">Tanggal Aspirasi </dt>
                  <dd class="col-sm-8">: <?php echo ($s->created_masukan) ?></dd>
                  <dt class="col-sm-4">Kategory Aspirasi</dt>
                  <dd class="col-sm-8">: <?php echo ($s->nama_ktgmasukan) ?></dd>
                </dl>
                <?php } ?>
              

      
              <div class="form-group">
                <label for="inputName">Isi Aspirasi</label>
                <!-- <H1>Aspirasi Ktt</H1> -->
                <div class="mailbox-read-message">
                <?php foreach ($aspirasi as $s) { ?>
                <p><?php echo ($s->isi_masukan) ?>,</p>

                
                <?php } ?>
              </div>
              </div>
           
              <div class="form-group col-md-6">
                <label for="inputStatus">Status</label>
                <select id="inputStatus" class="form-control custom-select">
                  <option disabled>Diproses</option>
                  <option>Menunggu</option>
                  <option>Canceled</option>
                  <option selected>Success</option>
                </select>
              </div>
            
          
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-md-4">
          <div class="card card-primary">
            <div class="card-header">
            <i class="fas fa-id-badge md"></i>
              <h3 class="card-title">Teruskan</h3>
<!-- 
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div> -->
            </div>
            <div class="card-body">
            <div> </div>
              <div class="form-group">
                <label for="inputEstimatedBudget">Bagian</label>
                <input type="number" id="inputEstimatedBudget" class="form-control" value="2300" step="1">
              </div>
              <div class="form-group">
                <label for="inputSpentBudget">Total amount spent</label>
                <input type="number" id="inputSpentBudget" class="form-control" value="2000" step="1">
              </div>
              <div class="form-group">
                <label for="inputEstimatedDuration">Estimated project duration</label>
                <input type="number" id="inputEstimatedDuration" class="form-control" value="20" step="0.1">
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Lampiran</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body p-0">
              <table class="table">
                <thead>
                  <tr>
                    <th>File Name</th>
                    <th>File Size</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <a href="#" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="Save Changes" class="btn btn-success float-right">
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

