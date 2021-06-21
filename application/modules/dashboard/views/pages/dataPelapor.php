<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Pelapor</h1>
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
                                        <th>ID_Pelapor</th>
                                        <th>nama_pelapor</th>
                                        <th>Kategori</th>
                                        <th>Email</th>
                                        <th>No Hp</th>
                                        <th>Tanggal Created</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($result as $pelapor) { ?>
                                        <tr>
                                            <td><?= $pelapor->id_pelapor ?></td>
                                            <td><?php echo ($pelapor->nama_pelapor) ?></td>
                                            <td><?php echo ($pelapor->ktg_pelapor) ?></td>
                                            <td><?php echo ($pelapor->email_pelapor) ?></td>
                                            <td><?php echo ($pelapor->nohp_pelapor) ?></td>
                                            <td><?php echo ($pelapor->created_pelapor) ?></td>
                                            <td>
                                                <div class="btn-group btn-group-sm">
                                                    <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                                    <a href="<?= base_url('Pelapor/delete/' . $pelapor->id_pelapor); ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>ID_Pelapor</th>
                                        <th>nama_pelapor</th>
                                        <th>Kategori</th>
                                        <th>Email</th>
                                        <th>No Hp</th>
                                        <th>Tanggal Created</th>
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
                                        <th>ID_Pelapor</th>
                                        <th>nama_pelapor</th>
                                        <th>Kategori</th>
                                        <th>Email</th>
                                        <th>No Hp</th>
                                        <th>Tanggal Created</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php foreach ($result as $pelapor) { ?>
                                        <tr>
                                            <td><?= $pelapor->id_pelapor ?></td>
                                            <td><?php echo ($pelapor->nama_pelapor) ?></td>
                                            <td><?php echo ($pelapor->ktg_pelapor) ?></td>
                                            <td><?php echo ($pelapor->email_pelapor) ?></td>
                                            <td><?php echo ($pelapor->nohp_pelapor) ?></td>
                                            <td><?php echo ($pelapor->created_pelapor) ?></td>
                                        <?php } ?>


                                </tbody>

                                <tfoot>
                                    <tr>
                                        <th>ID_Pelapor</th>
                                        <th>nama_pelapor</th>
                                        <th>Kategori</th>
                                        <th>Email</th>
                                        <th>No Hp</th>
                                        <th>Tanggal Created</th>

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