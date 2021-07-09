<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Bagian</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('') ?>#">Home</a></li>
                        <li class="breadcrumb-item active">DataTables</li>
                    </ol>
                </div>
            </div>
            <button type="button" class="btn btn-danger swalDefaultError">
                  Launch Error Toast
                </button>
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

                                <div class="text-left">
                                    <button type="button" class="btn btn-default float-left" id="daterange-btn">
                                        <i class="far fa-calendar-alt"></i> Date range picker
                                        <i class="fas fa-caret-down"></i>
                                    </button>

                                </div>
                                <div class="text-right">
                                    <!-- <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-form"> -->
                                    <button type="button" class="btn btn-info" onclick="add_bagian()">
                                        <i class="fas fa-plus"></i> Add
                                        <!-- <a href="<?= base_url('Bagian/add') ?>"></a> -->
                                    </button>

                                </div>


                            </div>
                            <!-- /.form group -->
                            <!-- <h3 class="card-title">DataTable with minimal features & hover style</h3> -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                        <button type="button" class="btn btn-default toastsDefaultDefault">
                  Launch Default Toast
                </button>
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID_Bagian</th>
                                        <th>Nama Bagian</th>
                                        <th>Created Bagian</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody >
                                    <?php $index = 1; ?>
                                    <?php foreach ($data as $bagian) { ?>
                                        <tr>
                                            <td><?= $index++; ?></td>
                                            <td><?php echo ($bagian->nama_bagian) ?></td>
                                            <td><?php echo ($bagian->created_at) ?></td>
                                            <td>
                                                <div class="btn-group btn-group-sm">
                                                    <a href="#" class="btn btn-info" data-toggle="modal" data-target="#modal-edit"><i class="fas fa-edit"></i></a>
                                                    <a href="" onclick="delbagian()" class="btn btn-danger"><i class="fas fa-trash"></i></a>

                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>

                                </tbody>
                               
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



<!-- Model Edit -->
<div class="modal fade" id="modal-edit">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Bagian</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<!-- Model Danger -->
<div class="modal fade" id="modal-danger">
    <div class="modal-dialog">
        <div class="modal-content bg-danger">
            <div class="modal-header">

                <h4 class="modal-title">
                    <i class="fas fa-trash-alt"></i>
                    Hapus !!!
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Data yang telah dihapus tidak dapat dikembalikan</p>
            </div>
            <div class="modal-footer right">
                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Tidak</button>
                <button type="button" class="btn btn-outline-light">Ya</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->




<!-- Bootstrap modal -->
<div class="modal fade" id="modal-form" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h3 class="modal-title">Tambah Bagian</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <div class="card-body">
                        <div class="form-group row ">
                            <label for="nama_bagian" class="col-sm-3 col-form-label">Nama Bagian</label>
                            <div class="col-sm-9 kosong">
                                <input type="text" class="form-control" name="nama_bagian" id="nama_bagian" placeholder="Masukan nama bagian">
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary  btnSave">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->