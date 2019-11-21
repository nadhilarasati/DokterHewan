<div id="content-wrapper" style="float:right; width:80vw">
    <div class="container-fluid">
        <h2 class="text-center" style="margin-bottom:1cm; margin-top:3cm">Registrasi Pasien Baru</h2>
        <form class="data-pasien" action="<?php site_url('admin/formDataPasien'); ?>" method="post" enctype="multipart/form-data">
            <div class="row">

                <div class="col-md-6">
                    <?php if ($this->session->flashdata('success')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                    <?php endif; ?>
                    <h3 style="margin-bottom:1cm">Data Pemilik Hewan</h3>
                    <div class="form-group row">
                        <label for="noKTP" class="col-sm-4 col-form-label">No. KTP</label>
                        <div class="col-sm-8">
                            <input type="text" name="noKTP" class="form-control <?php echo form_error('noKTP') ? 'is-invalid' : '' ?>" id="" placeholder="no ktp">
                            <div class="invalid-feedback">
                                <?php echo form_error('noKTP') ?>
                            </div>
                        </div>

                    </div>
                    <div class="form-group row">
                        <label for="noKTP" class="col-sm-4 col-form-label">Nama Pemilik Hewan</label>
                        <div class="col-sm-8">
                            <input type="text" name="namaPemilik" class="form-control <?php echo form_error('namaPemilik') ? 'is-invalid' : '' ?>" id="" placeholder="nama">
                            <div class="invalid-feedback">
                                <?php echo form_error('namaPemilik') ?>
                            </div>
                        </div>

                    </div>
                    <div class="form-group row">
                        <label for="noKTP" class="col-sm-4 col-form-label">Alamat</label>
                        <div class="col-sm-8">
                            <input type="text" name="alamat" class="form-control <?php echo form_error('alamat') ? 'is-invalid' : '' ?>" id="" placeholder="alamat">
                            <div class="invalid-feedback">
                                <?php echo form_error('alamat') ?>
                            </div>
                        </div>

                    </div>
                    <div class="form-group row">
                        <label for="noKTP" class="col-sm-4 col-form-label">No. Telepon</label>
                        <div class="col-sm-8">
                            <input type="text" name="telepon" class="form-control <?php echo form_error('telepon') ? 'is-invalid' : '' ?>" id="" placeholder="no telepon">
                            <div class="invalid-feedback">
                                <?php echo form_error('telepon') ?>
                            </div>
                        </div>

                    </div>
                    <div class="form-group row">
                        <label for="noKTP" class="col-sm-4 col-form-label">Email</label>
                        <div class="col-sm-8">
                            <input type="email" name="email" class="form-control <?php echo form_error('email') ? 'is-invalid' : '' ?>" id="" placeholder="username">
                            <div class="invalid-feedback">
                                <?php echo form_error('email') ?>
                            </div>
                        </div>

                    </div>
                    <div class="form-group row">
                        <label for="noKTP" class="col-sm-4 col-form-label">Password</label>
                        <div class="col-sm-8">
                            <input type="password" name="password" class="form-control <?php echo form_error('password') ? 'is-invalid' : '' ?>" id="" placeholder="password">
                            <div class="invalid-feedback">
                                <?php echo form_error('password') ?>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-secondary" style="margin-top:1cm">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script src="js/jquery.min.2.0.2.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<script src="datepicker/bootstrap-datepicker.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.tanggal').datepicker({
            format: "dd-mm-yyyy",
            autoclose: true
        });
    });
</script>