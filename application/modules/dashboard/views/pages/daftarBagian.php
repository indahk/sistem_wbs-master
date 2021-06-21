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
                                    <button type="button" class="btn btn-info" id="  -btn">
                                        <i class="fas fa-plus"></i> Add
                                        <a href="<?= base_url('Bagian/add') ?>"></a>
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
                                        <th>ID_Bagian</th>
                                        <th>Nama Bagian</th>
                                        <th>Created Bagian</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data as $bagian) { ?>
                                        <tr>
                                            <td><?= $bagian->id_bagian ?></td>
                                            <td><?php echo ($bagian->nama_bagian) ?></td>
                                            <td><?php echo ($bagian->created_at) ?></td>
                                            <td>
                                                <div class="btn-group btn-group-sm">
                                                    <a href="#" class="btn btn-info"><i class="fas fa-edit"></i></a>
                                                    <a href="<?= base_url('Bagian/delete/' . $bagian->id_bagian); ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>ID_Bagian</th>
                                        <th>Nama Bagian</th>
                                        <th>Created Bagian</th>
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
                            <h3 class="card-title">Data Bagian</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID_Bagian</th>
                                        <th>Nama Bagian</th>
                                        <th>Created Bagian</th>


                                    </tr>
                                </thead>
                                <tbody>

                                    <?php foreach ($data as $bagian) { ?>
                                        <tr>
                                            <td><?= $bagian->id_bagian ?></td>
                                            <td><?php echo ($bagian->nama_bagian) ?></td>
                                            <td><?php echo ($bagian->created_at) ?></td>

                                        <?php } ?>


                                </tbody>

                                <tfoot>
                                    <tr>
                                        <th>ID_Bagian</th>
                                        <th>Nama Bagian</th>
                                        <th>Created Bagian</th>

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