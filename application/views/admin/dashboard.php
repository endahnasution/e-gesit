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
                                                        echo "<td class='dt-center'>" . $row->noTracking . "</td>";
                                                        echo "<td class='dt-center'>" . $row->namaSarana . "</td>";

                                                        echo "<td class='dt-center'>";
                                                ?>

                                                        <a href="<?php echo base_url('admin/home/history/' . $row->idTracking) ?>" data-tooltip="tooltip" title="cari" class="btn btn-primary" id="hapusSr" data-id="<?= $row->idTracking ?>"><i class="fa fa-search"> Cari</i></a>

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