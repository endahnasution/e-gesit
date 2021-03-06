<section class="content-header">
    <h1>
        Buat Input Proses Tracking
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Dashboard</a></li>
        <li><a href="#">Data Tracking</a></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <form role="form" action="<?php echo base_url('admin/tracking/simpanTracking') ?>" method="post">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Form Pembuatan Input Proses Tracking</h3>
                        <p><span class="wajib">* wajib diisi</span></p>
                    </div>

                    <div class="col-md-12">

                        <!-- NIB -->
                        <div class="form-group row">
                            <label for="noSurat" class="col-sm-4 col-form-label">Nomor Tracking<span class="wajib"> *</span></label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-list"></i></span>
                                    <input type="text" class="form-control" placeholder="Nomor Tracking" name="noTracking" id="noTracking" required>
                                </div>
                            </div>
                        </div>


                        <!-- nama sarana -->
                        <div class="form-group row">
                            <label for="anggaran" class="col-sm-4 col-form-label">Pilih Nama sarana<span class="wajib"> *</span></label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                    <select class="form-control category" name="idSarana" id="idSarana" required>
                                        <?php
                                        foreach ($sarana as $row) {
                                            echo "<option value=" . $row->idSarana . ">" . $row->namaSarana . "</option>";
                                        }
                                        ?>
                                        <option value="" disabled selected>- Nama Sarana -</option>
                                    </select>
                                </div>
                            </div>
                        </div>




                        <!-- Nama Petugas -->
                        <div class="form-group row">
                            <label for="noSurat" class="col-sm-4 col-form-label">Nama Petugas<span class="wajib"> *</span></label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-list"></i></span>
                                    <input type="text" class="form-control" placeholder="Nama Petugas" name="pembuat" id="pembuat" required>
                                </div>
                            </div>
                        </div>



                    </div>



                    <div class="box-footer">
                        <button type="submit" value="submit" class="btn btn-info"><i class="fa fa-print"></i> Save Data</button>
                        <button type="reset" value="reset" class="btn btn-danger"><i class="fa fa-refresh" aria-hidden="true"></i> Reset Form</button>
                    </div>
            </form>

        </div>


    </div>
    </div>
    <style>
        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            background-color: #ca2e2e;
            border: 1px solid #aaa;
            border-radius: 4px;
            box-sizing: border-box;
            display: inline-block;
            margin-left: 5px;
            margin-top: 5px;
            padding: 0;
            padding-left: 20px;
            position: relative;
            max-width: 100%;
            overflow: hidden;
            text-overflow: ellipsis;
            vertical-align: bottom;
            white-space: nowrap;
            font-size: 15px;
        }
    </style>



    <!-- /.row -->
</section>
<!-- /.content -->