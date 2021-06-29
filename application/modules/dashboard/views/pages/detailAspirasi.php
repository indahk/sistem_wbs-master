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
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"><?= $page_name ?></h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <!-- we are adding the accordion ID so Bootstrap's collapse plugin detects it -->
            <div id="accordion">
              <div class="card card-primary">
                <div class="card-header">
                  <h4 class="card-title w-100">
                    <a class="d-block w-100" data-toggle="collapse" href="#collapseOne">
                      <i class="fas fa-user"></i>
                      Detail Pengirim
                    </a>
                  </h4>
                </div>
                <div id="collapseOne" class="collapse show" data-parent="#accordion">
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
                  </div>
                </div>
              </div>
              <div class="card card-danger">
                <div class="card-header">
                  <h4 class="card-title w-100">
                    <a class="d-block w-100" data-toggle="collapse" href="#collapseTwo">
                      <i class="fas fa-list-alt"></i>
                      Detail Aspirasi
                    </a>
                  </h4>
                </div>
                <div id="collapseTwo" class="collapse" data-parent="#accordion">
                  <div class="card-body">
                    <?php foreach ($aspirasi as $s) { ?>
                      <p><?php echo ($s->isi_masukan) ?>,</p>


                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="card card-success">
                <div class="card-header">
                  <h4 class="card-title w-100">
                    <a class="d-block w-100" data-toggle="collapse" href="#collapseThree">
                      <i class="fas fa-paperclip"></i>
                      Lampiran
                    </a>
                  </h4>
                </div>
                <div id="collapseThree" class="collapse" data-parent="#accordion">
                  <div class="card-body">
                    <div class="card-body p-0">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>File Name</th>
                            <th>File Size</th>
                            <th>
                              <!-- <button type="button" class="btn btn-info" id="  -btn" onclick="add_bagian()">
                              <i class="fas fa-download"></i> 
                                <a href="<?= base_url('Bagian/add') ?>"></a>
                              </button> -->
                            </th>
                            <th></th>
                          </tr>
                          <tr>
                            <td>Functional-requirements.docx</td>
                            <td>49.8005 kb</td>
                            <td class="text-right py-0 align-middle">
                              <div class="btn-group btn-group-sm">
                                <a href="#" class="btn btn-info"><i class="fas fa-download"></i></a>
                                <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                              </div>
                            </td>
                          <tr>
                        </thead>
                        <tbody>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->


      <div class="col-md-4">
        <div class="card card-primary">
          <div class="card-header">

            <h3 class="card-title">
              <i class="fas fa-id-badge md"></i>
              Penanggung Jawab
            </h3>
            <!-- 
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div> -->
          </div>
          <div class="card-body">
            <div class="text-right">
              <button type="button" class="btn  btn-success" id="  -btn" onclick="add_png()">
                <i class="fas fa-plus"></i> Add
                <a href="<?= base_url('Bagian/add') ?>"></a>
              </button>

            </div>
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

        <!-- /.card -->
      </div>
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

<script>
    function add_png() {
        save_method = 'add';
        $('#form')[0].reset(); // reset form on modals
        $('.form-group').removeClass('has-error'); // clear error class
        $('.help-block').empty(); // clear error string
        $('#modal_form').modal('show'); // show bootstrap modal
        $('.modal-title').text('Penggung Jawab'); // Set Title to Bootstrap modal title
    }




</script>


<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h3 class="modal-title">User Form</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal" enctype="multipart/form-data">
                    <!-- <?php echo form_open_multipart('', array('class' => 'form-horizontal', 'id' => 'form')) ?> -->
                    <input type="hidden" value="" name="id_user" />
                    <div class="card-body">
                        <div class="form-group row ">
                            <label for="username" class="col-sm-3 col-form-label">Nama Bagian</label>
                            <div class="col-sm-9 kosong">
                                <input type="text" class="form-control" name="username" id="username" placeholder="nama_bagian">
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label for="full_name" class="col-sm-3 col-form-label">Full Name</label>
                            <div class="col-sm-9 kosong">
                                <input type="text" class="form-control" name="full_name" id="full_name" placeholder="Full Name">
                            </div>
                        </div>

                        <div class="form-group row ">
                            <label for="password" class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9 kosong">
                                <input type="password" class="form-control " name="password" id="password" placeholder="Password">
                            </div>
                        </div>

                        <div class="form-group row ">
                            <label for="is_active" class="col-sm-3 col-form-label">Is Active</label>
                            <div class="col-sm-9 kosong">
                                <select class="form-control" name="is_active" id="is_active">
                                    <option value=""></option>
                                    <option value="Y">Y</option>
                                    <option value="N">N</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label for="level" class="col-sm-3 col-form-label">Level</label>
                            <div class="col-sm-9 kosong">
                                <select class="form-control" name="level" id="level">
                                    <option value="">Pilih Level</option>
                                    <?php
                                    foreach ($user_level as $level) { ?>
                                        <option value="<?= $level->id_level; ?>"><?= $level->nama_level; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label for="imagefile" class="col-sm-3 col-form-label">Foto</label>
                            <div class="col-sm-9 kosong ">
                                <img id="v_image" width="100px" height="100px">
                                <input type="file" class="form-control btn-file" onchange="loadFile(event)" name="imagefile" id="imagefile" placeholder="Image" value="UPLOAD">
                            </div>
                        </div>
                    </div>
                    <!-- <?php echo form_close(); ?> -->
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" onclick="batal()" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->