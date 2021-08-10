<section class="content-header">
    <h1>
        Buat Data Sarana
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Dashboard</a></li>
        <li><a href="#">Data Sarana</a></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <form role="form" action="<?php echo base_url('admin/sarana/simpanSarana') ?>" method="post">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Form Pembuatan Data Sarana</h3>
                        <p><span class="wajib">* wajib diisi</span></p>
                    </div>

                    <div class="col-md-12">
                        <hr>

                        <!-- nama sarana -->
                        <div class="form-group row">
                            <label for="noSurat" class="col-sm-4 col-form-label">Nama Sarana<span class="wajib"> *</span></label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-list"></i></span>
                                    <input type="text" class="form-control" placeholder="Nama Sarana" name="namas" id="namas" required>
                                </div>
                            </div>
                        </div>

                        <!-- Alamat Sarana -->
                        <div class="form-group row">
                            <label for="noSurat" class="col-sm-4 col-form-label">Alamat Sarana<span class="wajib"> *</span></label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-list"></i></span>
                                    <input type="text" class="form-control" placeholder="Alamat Sarana" name="alamats" id="alamats" required>
                                </div>
                            </div>
                        </div>

                        <!-- NIB -->
                        <div class="form-group row">
                            <label for="noSurat" class="col-sm-4 col-form-label">NIB<span class="wajib"> *</span></label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-list"></i></span>
                                    <input type="text" class="form-control" placeholder="NIB" name="nib" id="nib" required>
                                </div>
                            </div>
                        </div>

                        <!-- Nama PJ -->
                        <div class="form-group row">
                            <label for="noSurat" class="col-sm-4 col-form-label">Nama Penanggung Jawab<span class="wajib"> *</span></label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-list"></i></span>
                                    <input type="text" class="form-control" placeholder="Nama Penanggung Jawab" name="namaPj" id="namaPj" required>
                                </div>
                            </div>
                        </div>

                        <!-- Nomor hape -->
                        <div class="form-group row">
                            <label for="noSurat" class="col-sm-4 col-form-label">Nomor HP<span class="wajib"> *</span></label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-list"></i></span>
                                    <input type="text" class="form-control" placeholder="Nomor HP" name="noHp" id="noHp" required>
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