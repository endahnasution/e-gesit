<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>E-Tracking Berkas Sertifikasi</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?php echo base_url('assets'); ?>/vendor/assets/img/favicon.png" rel="icon">
    <link href="<?php echo base_url('assets'); ?>/vendor/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Vendor CSS Files -->

    <link href="<?php echo base_url('assets'); ?>/vendor/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets'); ?>/vendor/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo base_url('assets'); ?>/vendor/assets/vendor/glightbox/css/glightbox.min.css" rel=" stylesheet">
    <link href="<?php echo base_url('assets'); ?>/vendor/assets/vendor/swiper/swiper-bundle.min.css" rel=" stylesheet">


    <!-- Template Main CSS File -->
    <link href="<?php echo base_url('assets'); ?>/vendor/assets/css/style.css" rel=" stylesheet">

    <!-- timeline -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <!-- =======================================================
  * Template Name: DevFolio - v4.3.0
  * Template URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>



<body>



    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="tentang" class="about-mf sect-pt4 route">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="box-shadow-full">
                            <div class="row">
                                <div class="about-me pt-4 pt-md-0">

                                    <?php
                                    if (isset($tracking)) {
                                        $jumlah = 0;
                                        foreach ($tracking as $row) {
                                    ?>
                                            <div class="title-box text-center">
                                                <h2>
                                                    Hi, <?php echo  $row->namaSarana ?>
                                                    <div class="line-mf"></div>
                                                </h2>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">Berikut hasil riwayat berkas anda dengan nomor tracking <b style="color:rgb(248, 166, 12)"> <?php echo  $row->noTracking ?></b></h5>

                                        <?php

                                            $jumlah += 1;
                                            if ($jumlah == 1) break;
                                        }
                                    }

                                        ?>



                                        <?php
                                        if (isset($tracking)) {
                                            $jumlah = 0;
                                            foreach ($tracking as $row) {
                                                if ($jumlah == 0) {
                                        ?>

                                                    <div class="vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                            <div> <span class="vertical-timeline-element-icon bounce-in"> <i class="badge badge-dot badge-dot-xl badge-success"></i> </span>
                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                    <h4 class="timeline-title"><?php echo  $row->statusPesan ?></h4>
                                                                    <p><?php echo $row->detailPesan ?> </p> <span class="vertical-timeline-element-date"><?php echo $row->tanggal ?></span>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    <?php
                                                } else {
                                                    ?>

                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                            <div> <span class="vertical-timeline-element-icon bounce-in"> <i class="badge badge-dot badge-dot-xl badge-warning"> </i> </span>
                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                    <h4 class="timeline-title"><?php echo  $row->statusPesan ?></h4>
                                                                    <p><?php echo $row->detailPesan ?> </p> <span class="vertical-timeline-element-date"><?php echo $row->tanggal ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php

                                                }

                                                $jumlah += 1;


                                                    ?>

                                            <?php  }
                                        }  ?>



                                            <!-- 
                                            <div class="vertical-timeline-item vertical-timeline-element">
                                                <div> <span class="vertical-timeline-element-icon bounce-in"> <i class="badge badge-dot badge-dot-xl badge-danger"> </i> </span>
                                                    <div class="vertical-timeline-element-content bounce-in">
                                                        <h4 class="timeline-title">Discussion with team about new product launch</h4>
                                                        <p>meeting with team mates about the launch of new product. and tell them about new features</p> <span class="vertical-timeline-element-date">6:00 PM</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="vertical-timeline-item vertical-timeline-element">
                                                <div> <span class="vertical-timeline-element-icon bounce-in"> <i class="badge badge-dot badge-dot-xl badge-primary"> </i> </span>
                                                    <div class="vertical-timeline-element-content bounce-in">
                                                        <h4 class="timeline-title text-success">Discussion with marketing team</h4>
                                                        <p>Discussion with marketing team about the popularity of last product</p> <span class="vertical-timeline-element-date">9:00 AM</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="vertical-timeline-item vertical-timeline-element">
                                                <div> <span class="vertical-timeline-element-icon bounce-in"> <i class="badge badge-dot badge-dot-xl badge-success"> </i> </span>
                                                    <div class="vertical-timeline-element-content bounce-in">
                                                        <h4 class="timeline-title">Purchase new hosting plan</h4>
                                                        <p>Purchase new hosting plan as discussed with development team, today at <a href="javascript:void(0);" data-abc="true">10:00 AM</a></p> <span class="vertical-timeline-element-date">10:30 PM</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="vertical-timeline-item vertical-timeline-element">
                                                <div> <span class="vertical-timeline-element-icon bounce-in"> <i class="badge badge-dot badge-dot-xl badge-warning"> </i> </span>
                                                    <div class="vertical-timeline-element-content bounce-in">
                                                        <p>Another conference call today, at <b class="text-danger">11:00 AM</b></p>
                                                        <p>Yet another one, at <span class="text-success">1:00 PM</span></p> <span class="vertical-timeline-element-date">12:25 PM</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="vertical-timeline-item vertical-timeline-element">
                                                <div> <span class="vertical-timeline-element-icon bounce-in"> <i class="badge badge-dot badge-dot-xl badge-warning"> </i> </span>
                                                    <div class="vertical-timeline-element-content bounce-in">
                                                        <p>Another meeting with UK client today, at <b class="text-danger">3:00 PM</b></p>
                                                        <p>Yet another one, at <span class="text-success">5:00 PM</span></p> <span class="vertical-timeline-element-date">12:25 PM</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="vertical-timeline-item vertical-timeline-element">
                                                <div> <span class="vertical-timeline-element-icon bounce-in"> <i class="badge badge-dot badge-dot-xl badge-danger"> </i> </span>
                                                    <div class="vertical-timeline-element-content bounce-in">
                                                        <h4 class="timeline-title">Discussion with team about new product launch</h4>
                                                        <p>meeting with team mates about the launch of new product. and tell them about new features</p> <span class="vertical-timeline-element-date">6:00 PM</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="vertical-timeline-item vertical-timeline-element">
                                                <div> <span class="vertical-timeline-element-icon bounce-in"> <i class="badge badge-dot badge-dot-xl badge-primary"> </i> </span>
                                                    <div class="vertical-timeline-element-content bounce-in">
                                                        <h4 class="timeline-title text-success">Discussion with marketing team</h4>
                                                        <p>Discussion with marketing team about the popularity of last product</p> <span class="vertical-timeline-element-date">9:00 AM</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="vertical-timeline-item vertical-timeline-element">
                                                <div> <span class="vertical-timeline-element-icon bounce-in"> <i class="badge badge-dot badge-dot-xl badge-success"> </i> </span>
                                                    <div class="vertical-timeline-element-content bounce-in">
                                                        <h4 class="timeline-title">Purchase new hosting plan</h4>
                                                        <p>Purchase new hosting plan as discussed with development team, today at <a href="javascript:void(0);" data-abc="true">10:00 AM</a></p> <span class="vertical-timeline-element-date">10:30 PM</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="vertical-timeline-item vertical-timeline-element">
                                                <div> <span class="vertical-timeline-element-icon bounce-in"> <i class="badge badge-dot badge-dot-xl badge-warning"> </i> </span>
                                                    <div class="vertical-timeline-element-content bounce-in">
                                                        <p>Another conference call today, at <b class="text-danger">11:00 AM</b></p>
                                                        <p>Yet another one, at <span class="text-success">1:00 PM</span></p> <span class="vertical-timeline-element-date">12:25 PM</span>
                                                    </div>
                                                </div>
                                            </div> -->
                                                    </div>

                                            </div>

                                            <a href="<?= base_url() ?>">Back to home</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End About Section -->



    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="copyright-box">
                        <p class="copyright">&copy; Copyright <strong>DevFolio</strong>. All Rights Reserved</p>
                        <div class="credits">
                            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
            -->
                            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- End  Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?php echo base_url('assets'); ?>/vendor/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url('assets'); ?>/vendor/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?php echo base_url('assets'); ?>/vendor/assets/vendor/php-email-form/validate.js"></script>
    <script src="<?php echo base_url('assets'); ?>/vendor/assets/vendor/purecounter/purecounter.js"></script>
    <script src="<?php echo base_url('assets'); ?>/vendor/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?php echo base_url('assets'); ?>/vendor/assets/vendor/typed.js/typed.min.js"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo base_url('assets'); ?>/vendor/assets/js/main.js"></script>

</body>

</html>