<section class="content-header">
    <h1>
        Data Sarana
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Data Sarana</a></li>
    </ol>
</section>
<!-- Main content -->
<section class="content">

    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->

            <div class="box box-primary">
                <div class="box-header with-border">

                    <h3 class="box-title">Data Sarana </h3>
                    <div class="pull-right">
                        <ul>
                            <a class="btn btn-primary" href="<?php echo base_url('admin/sarana/tambahSarana') ?>">
                                <i class="fa fa-plus"></i>&nbsp; Tambah Data
                            </a> </span>
                        </ul>
                    </div>

                    <section class="content">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="box">

                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <table id="tbl" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th class="dt-center">Nama Sarana</th>
                                                    <th class="dt-center">Alamat Sarana</th>
                                                    <th class="dt-center">NIB</th>
                                                    <th class="dt-center">Nama PJ</th>
                                                    <th class="dt-center">No.HP</th>
                                                    <th class="dt-center">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                if (isset($sarana)) {
                                                    foreach ($sarana as $row) {

                                                        echo "<tr>";
                                                        echo "<td class='dt-left'>" . $row->namaSarana . "</td>";
                                                        echo "<td class='dt-left'>" . $row->alamatSarana . "</td>";
                                                        echo "<td class='dt-left'>" . $row->nib . "</td>";
                                                        echo "<td class='dt-left'>" . $row->namaPj . "</td>";
                                                        echo "<td class='dt-left'>" . $row->noHp . "</td>";
                                                        echo "<td class='dt-left'>" ?>

                                                        <a href="#" class="btn btn-success btn-sm" data-tooltip="tooltip" title="Edit" id="editSar" data-id="<?= $row->idSarana ?>" data-namas="<?= $row->namaSarana ?>" data-alamats="<?= $row->alamatSarana ?>" data-nibs="<?= $row->nib ?>" data-pjs="<?= $row->namaPj ?>" data-hps="<?= $row->noHp ?>" data-toggle="modal" data-target="#editSarana"><i class="fa fa-edit"></i></a>

                                                        <a href="#" data-tooltip="tooltip" title="Hapus" class="btn btn-danger btn-sm" id="hapusSr" data-id="<?= $row->idSarana ?>" data-toggle="modal" data-target="#hapusSarana"><i class="fa fa-trash"></i></a>

                                                        </td>

                                                <?php
                                                    }
                                                } else {
                                                    echo "no record found";
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.box-body -->
                                </div>
                                <!-- /.box -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </section>
                    <!-- /.content -->
                </div>
                <style>
                    th.dt-center,
                    td.dt-center {
                        text-align: center;
                    }
                </style>

            </div>
            <!-- /.box-header -->
            <!-- form start -->


        </div>
    </div>

    </div>
    <!-- /.box -->
    </div>

    </div>
    <!-- /.row -->

    <!-- Edit Sarana -->
    <div id="editSarana" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><i class="icon fa fa-edit"></i> Edit Data Sarana</h4>
                </div>
                <div class="modal-body" id=editData>
                    <form action="<?= base_url('admin/sarana/ubahSarana') ?>" method="post">
                        <div class="box box-success">
                            <div class="box-body">

                                <div class="form-group">
                                    <input type="hidden" class="form-control" name="idSr" id="idSarEdit">
                                </div>

                                <div class="form-group">
                                    <label for="noEdit">Nama Sarana</label> <small class="text-danger">*</small>
                                    <input type="text" class="form-control" name="namas" id="namasEdit" required>
                                </div>

                                <div class="form-group">
                                    <label for="noEdit">Alamat Sarana</label> <small class="text-danger">*</small>
                                    <input type="text" class="form-control" name="alamats" id="alamatsEdit" required>
                                </div>

                                <div class="form-group">
                                    <label for="noEdit">NIB</label> <small class="text-danger">*</small>
                                    <input type="text" class="form-control" name="nibEdit" id="nibEdit" required>
                                </div>

                                <div class="form-group">
                                    <label for="noEdit">Nama Penanggung Jawab</label> <small class="text-danger">*</small>
                                    <input type="text" class="form-control" name="pjEdit" id="pjEdit" required>
                                </div>

                                <div class="form-group">
                                    <label for="noEdit">Nomor HP</label> <small class="text-danger">*</small>
                                    <input type="text" class="form-control" name="hpEdit" id="hpEdit" required>
                                </div>


                            </div><!-- /.box-body -->
                            <div class="modal-footer">
                                <button type="reset" class="btn btn-default pull-left" data-dismiss="modal"><i class="fa fa-times"></i> Tutup</button>
                                <button type="submit" name="update" class="btn btn-success"><i class="fa fa-edit"></i> Edit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery-1.10.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).on("click", "#editSar", function() {
            var idSar = $(this).data('id');
            var namaSar = $(this).data('namas');
            var alamatSar = $(this).data('alamats');
            var nibSar = $(this).data('nibs');
            var namaPjSar = $(this).data('pjs');
            var noHpSar = $(this).data('hps');



            $("#editData #idSarEdit").val(idSar);
            $("#editData #namasEdit").val(namaSar);
            $("#editData #alamatsEdit").val(alamatSar);
            $("#editData #nibEdit").val(nibSar);
            $("#editData #pjEdit").val(namaPjSar);
            $("#editData #hpEdit").val(noHpSar);

        });
    </script>

    <!-- Hapus Sarana -->
    <div id="hapusSarana" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><i class="icon fa fa-ban"></i> ALert !</h4>
                </div>
                <div class="modal-body" id="hapusData">
                    <form role="form" method="post" action="<?= base_url('admin/sarana/hapusSarana') ?>">
                        <div class="box-body">
                            <div class="form-group" style="text-align:center">Anda yakin akan menghapus Data Sarana ini ?</label>
                                <input type="hidden" id="idHapus" name="idHapus">

                            </div>
                        </div><!-- /.box-body -->
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-default pull-left" data-dismiss="modal"><i class="fa fa-times"></i> Tutup</button>
                            <button type="submit" class="btn btn-danger" name="delete"><i class="fa fa-check"></i> Hapus</button>
                        </div>
                    </form>
                    <script src="<?php echo base_url(); ?>assets/js/jquery-1.10.0.min.js" type="text/javascript"></script>
                    <script type="text/javascript">
                        $(document).on("click", "#hapusSr", function() {
                            var id = $(this).data('id');
                            $("#hapusData #idHapus").val(id);
                        });
                    </script>
                </div>

            </div>
        </div>
    </div>