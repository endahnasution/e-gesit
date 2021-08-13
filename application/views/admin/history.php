        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Timeline
                <small>example</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">UI</a></li>
                <li class="active">Timeline</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <!-- The time line -->


                    <div class="box">
                        <div class="box-header with-border">

                            <h4>Hai <b>Admin!!</b> </h4>
                            <?php
                            if (isset($history)) {
                                $jumlah = 0;
                                foreach ($history as $row) {
                            ?>
                                    <h4>Berikut hasil riwayat berkas dengan nomor tracking <b> <?php echo  $row->noTracking ?> </b> dengan sarana <b><?php echo  $row->namaSarana ?><b></b> </h4>

                                <?php

                                    $jumlah += 1;
                                    if ($jumlah == 1) break;
                                }

                                ?>

                                <div class="box-body">
                                    <ul class="timeline">

                                        <?php
                                        if (isset($history)) {
                                            foreach ($history as $row) {

                                                $attr = array(
                                                    'target' => '_blank',
                                                );

                                        ?>

                                                <!-- timeline item -->
                                                <li>
                                                    <i class="fa fa-envelope bg-blue"></i>
                                                    <div class="timeline-item">
                                                        <span class="time"><i class="fa fa-clock-o"></i> <?php echo $row->tanggal ?></span>
                                                        <h3 class="timeline-header"><a href="#">Anda</a> menginput proses </h3>
                                                        <div class="timeline-body">
                                                            <p><b>Detail : </b></p>
                                                            <?php echo $row->detailPesan ?>
                                                        </div>

                                                    </div>
                                                </li>

                                                <li class="time-label">
                                                    <span class="bg-green"><i class="fa fa-check-circle"></i> <?php echo  $row->statusPesan ?> </span>
                                                </li>

                                        <?php }
                                        } ?>
                                        <!-- END timeline item -->


                                    </ul>

                                </div>
                            <?php
                            } else {
                                echo "Data tidak ditemukan";
                            }

                            ?>



                        </div>


                    </div>


                </div><!-- /.col -->
            </div><!-- /.row -->


        </section><!-- /.content -->