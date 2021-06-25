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
                                    <button type="button" class="btn btn-info" id="  -btn" onclick="add_bagian()">
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
                                    <?php $index = 1; ?>
                                    <?php foreach ($data as $bagian) { ?>
                                        <tr>
                                            <td><?= $index++; ?></td>
                                            <td><?php echo ($bagian->nama_bagian) ?></td>
                                            <td><?php echo ($bagian->created_at) ?></td>
                                            <td>
                                                <div class="btn-group btn-group-sm">
                                                    <a href="#" class="btn btn-info" data-toggle="modal" data-target="#modal-"><i class="fas fa-edit"></i></a>
                                                    <a href="<?= base_url('Bagian/delete/' . $bagian->id_bagian); ?>" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger"><i class="fas fa-trash"></i></a>
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
                    <!-- 
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Bagian</h3>
                        </div>
                         /.card-header
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
                </div> -->
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






<script type="text/javascript">
    var save_method; //for save method string
    var table;

    $(document).ready(function() {

        table = $("#tabeluser").DataTable({
            "responsive": true,
            "autoWidth": false,
            "language": {
                "sEmptyTable": "Data User Belum Ada"
            },
            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.

            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo site_url('user/ajax_list') ?>",
                "type": "POST"
            },
            //Set column definition initialisation properties.
            "columnDefs": [{
                    "targets": [-1], //last column
                    "render": function(data, type, row) {

                        if (row[4] == "N") {
                            return "<a class=\"btn btn-xs btn-outline-info\" href=\"javascript:void(0)\" title=\"View\" onclick=\"vuser(" + row[5] + ")\"><i class=\"fas fa-eye\"></i></a> <a class=\"btn btn-xs btn-outline-primary\"  href=\"javascript:void(0)\" title=\"Edit\" onclick=\"edit_user(" + row[5] + ")\"><i class=\"fas fa-edit\"></i></a><a class=\"btn btn-xs btn-outline-danger\" href=\"javascript:void(0)\" title=\"Delete\"  onclick=\"deluser(" + row[5] + ")\"><i class=\"fas fa-trash\"></i></a>"
                        } else {
                            return "<a class=\"btn btn-xs btn-outline-info\" href=\"javascript:void(0)\" title=\"View\" onclick=\"vuser(" + row[5] + ")\"><i class=\"fas fa-eye\"></i></a> <a class=\"btn btn-xs btn-outline-primary\" href=\"javascript:void(0)\" title=\"Edit\" onclick=\"edit_user(" + row[5] + ")\"><i class=\"fas fa-edit\"></i></a> <a class=\"btn btn-xs btn-outline-warning\" href=\"javascript:void(0)\" title=\"Reset Password\" onclick=\"riset(" + row[5] + ")\"><i>Riset Pass</i></a>";
                        }


                    },
                    "orderable": false, //set not orderable

                },
                {
                    "targets": [0],
                    "render": function(data, type, row) {
                        if (row[0] != null) {
                            return "<img class=\"myImgx\"  src='<?php echo base_url("assets/foto/user/"); ?>" + row[0] + "' width=\"100px\" height=\"100px\">";
                        } else {
                            return "<img class=\"myImgx\"  src='<?php echo base_url("assets/foto/default-150x150.png"); ?>' width=\"100px\" height=\"100px\">";
                        }
                    }
                },
            ],

        });
        $("input").change(function() {
            $(this).parent().parent().removeClass('has-error');
            $(this).next().empty();
            $(this).removeClass('is-invalid');
        });
        $("textarea").change(function() {
            $(this).parent().parent().removeClass('has-error');
            $(this).next().empty();
            $(this).removeClass('is-invalid');
        });
        $("select").change(function() {
            $(this).parent().parent().removeClass('has-error');
            $(this).next().empty();
            $(this).removeClass('is-invalid');
        });
    });

    function reload_table() {
        table.ajax.reload(null, false); //reload datatable ajax 
    }

    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
    });

    // Button Tabel

    function riset(id) {

        Swal.fire({
            title: 'Reset password?',
            text: "Pass Default: password123",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, reset it!'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: "<?php echo site_url('user/reset'); ?>",
                    type: "POST",
                    data: "id=" + id,
                    cache: false,
                    dataType: 'json',
                    success: function(respone) {
                        if (respone.status == true) {
                            reload_table();
                            Swal.fire(
                                'Reset!',
                                'Your password has been reset.',
                                'success'
                            );
                        } else {
                            Toast.fire({
                                icon: 'error',
                                title: 'Reset password Error!!.'
                            });
                        }
                    }
                });
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                Swal(
                    'Cancelled',
                    'Your imaginary file is safe :)',
                    'error'
                )
            }
        })
    }
    //view
    function vuser(id) {
        $('#form')[0].reset(); // reset form on modals
        $('.form-group').removeClass('has-error'); // clear error class
        $('.help-block').empty(); // clear error string
        $('.modal-title').text('View User');
        $("#modal-default").modal('show');
        $.ajax({
            url: '<?php echo base_url('user/viewuser'); ?>',
            type: 'post',
            data: 'table=tbl_user&id=' + id,
            success: function(respon) {
                $("#md_def").html(respon);
            }
        })
    }

    //delete
    function deluser(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {

            $.ajax({
                url: "<?php echo site_url('user/delete'); ?>",
                type: "POST",
                data: "id=" + id,
                cache: false,
                dataType: 'json',
                success: function(respone) {
                    if (respone.status == true) {
                        reload_table();
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        );
                    } else {
                        Toast.fire({
                            icon: 'error',
                            title: 'Delete Error!!.'
                        });
                    }
                }
            });

        })
    }



    function add_bagian() {
        save_method = 'add';
        $('#form')[0].reset(); // reset form on modals
        $('.form-group').removeClass('has-error'); // clear error class
        $('.help-block').empty(); // clear error string
        $('#modal_form').modal('show'); // show bootstrap modal
        $('.modal-title').text('Tambah Bagian'); // Set Title to Bootstrap modal title
    }

    function edit_user(id) {

        save_method = 'update';
        $('#form')[0].reset(); // reset form on modals
        $('.form-group').removeClass('has-error'); // clear error class
        $('.help-block').empty(); // clear error string

        //Ajax Load data from ajax
        $.ajax({
            url: "<?php echo site_url('user/edituser') ?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data) {

                $('[name="id_user"]').val(data.id_user);
                $('[name="username"]').val(data.username);
                $('[name="full_name"]').val(data.full_name);
                $('[name="is_active"]').val(data.is_active);
                $('[name="level"]').val(data.id_level);

                if (data.image == null) {
                    var image = "<?php echo base_url('assets/foto/user/default.png') ?>";
                    $("#v_image").attr("src", image);
                } else {
                    var image = "<?php echo base_url('assets/foto/user/') ?>";
                    $("#v_image").attr("src", image + data.image);
                }

                $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
                $('.modal-title').text('Edit User'); // Set title to Bootstrap modal title

            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error get data from ajax');
            }
        });
    }

    function save() {
        $('#btnSave').text('saving...'); //change button text
        $('#btnSave').attr('disabled', true); //set button disable 
        var url;
        if (save_method == 'add') {
            url = "<?php echo site_url('user/insert') ?>";
        } else {
            url = "<?php echo site_url('user/update') ?>";
        }
        var formdata = new FormData($('#form')[0]);
        $.ajax({
            url: url,
            type: "POST",
            data: formdata,
            dataType: "JSON",
            cache: false,
            contentType: false,
            processData: false,
            success: function(data) {

                if (data.status) //if success close modal and reload ajax table
                {
                    $('#modal_form').modal('hide');
                    reload_table();
                    Toast.fire({
                        icon: 'success',
                        title: 'Success!!.'
                    });
                } else {
                    for (var i = 0; i < data.inputerror.length; i++) {
                        $('[name="' + data.inputerror[i] + '"]').addClass('is-invalid');
                        $('[name="' + data.inputerror[i] + '"]').closest('.kosong').append('<span></span>');
                        $('[name="' + data.inputerror[i] + '"]').next().text(data.error_string[i]).addClass('invalid-feedback');
                    }
                }
                $('#btnSave').text('save'); //change button text
                $('#btnSave').attr('disabled', false); //set button enable 


            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert(textStatus);
                // alert('Error adding / update data');
                Toast.fire({
                    icon: 'error',
                    title: 'Error!!.'
                });
                $('#btnSave').text('save'); //change button text
                $('#btnSave').attr('disabled', false); //set button enable 

            }
        });
    }

    var loadFile = function(event) {
        var image = document.getElementById('v_image');
        image.src = URL.createObjectURL(event.target.files[0]);
    };

    function batal() {
        $('#form')[0].reset();
        reload_table();
        var image = document.getElementById('v_image');
        image.src = "";
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



<!-- Model Edit -->
<div class="modal fade" id="modal-edit">
    <div class="modal-dialog">
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

<!-- Modal Add Data -->
<div class="modal fade" id="modal-xl">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Extra Large Modal</h4>
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
<!-- /.modal-content -->