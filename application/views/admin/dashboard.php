<section class="content-header">
    <h1>
        Hi, admin berikut daftar list Dokumen
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Daftar Detail Tracking</a></li>
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

                    <h3 class="box-title">Daftar Tracking </h3>


                    <section class="content">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="box">

                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <table id="tbl" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th class="dt-center">Kode Tracking</th>
                                                    <th class="dt-center">Nama Sarana</th>
                                                    <th class="dt-center">Telusuri</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                if (isset($daftar)) {
                                                    foreach ($daftar as $row) {

                                                        echo "<tr>";
                                                        echo "<td class='dt-left'>" . $row->noTracking . "</td>";
                                                        echo "<td class='dt-left'>" . $row->namaSarana . "</td>";

                                                        echo "<td>";
                                                ?>

                                                        <a href="#" data-tooltip="tooltip" title="Hapus" class="btn btn-danger btn-sm" id="hapusSr" data-id="<?= $row->idTracking ?>" data-toggle="modal" data-target="#hapusSarana"><i class="fa fa-trash"></i></a>

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


    <!-- Hapus Sarana -->
    <div id="hapusSarana" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><i class="icon fa fa-ban"></i> ALert !</h4>
                </div>
                <div class="modal-body" id="hapusData">
                    <form role="form" method="post" action="<?= base_url('admin/tracking/hapusTracking') ?>">
                        <div class="box-body">
                            <div class="form-group" style="text-align:center">Anda yakin akan menghapus Data Tracking ini ?</label>
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