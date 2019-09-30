<div id="content-wrapper">
    <div class="container-fluid">
        <h2 class="text-center" style="margin-bottom:1cm; margin-top:1cm">Registrasi Pasien Baru</h2>
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

                    <!--<h3 style="margin-bottom:1cm; margin-top:1cm">Data Hewan Peliharaan</h3>
                    <p></p>
                    <div class="form-group row">
                        <label for="noKTP" class="col-sm-4 col-form-label">Jenis Hewan</label>
                        <div class="col-sm-8">
                            <div class="input-group mb-3">

                                <select name="jenisHewan" class="custom-select" id="inputGroupSelect01">
                                    <option selected>Choose...</option>
                                    <option value="1">Kucing</option>
                                    <option value="2">Anjing</option>
                                    <option value="3">Kelinci</option>
                                    <option value="4">Alap-Alap</option>
                                    <option value="5">Hamster</option>
                                    <option value="6">Landak</option>
                                    <option value="7">Ular</option>
                                    <option value="8">Burung</option>
                                    <option value="9">Ayam</option>
                                    <option value="10">Lain-Lain</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="form-group row">
                        <label for="noKTP" class="col-sm-4 col-form-label">Nama Hewan</label>
                        <div class="col-sm-8">
                            <input type="text" name="namaHewan" class="form-control <?php echo form_error('namaHewan') ? 'is-invalid' : '' ?>" id="" placeholder="nama hewan">
                            <div class="invalid-feedback">
                                <?php echo form_error('namaHewan') ?>
                            </div>
                        </div>

                    </div>
                    <div class="input-group date form-group row">
                        <label for="name" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-8">
                            <input type="date" name="tanggalLahir" class="tanggal form-control <?php echo form_error('tanggalLahir') ? 'is-invalid' : '' ?>" placeholder="tanggal lahir" style="margin-left:0.3cm">
                            <div class="invalid-feedback">
                                <?php echo form_error('tanggalLahir') ?>
                            </div>
                        </div>

                    </div>
                    <div class="form-group row">
                        <label for="noKTP" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-8">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input <?php echo form_error('jenisKelamin') ? 'is-invalid' : '' ?>" type="radio" name="jenisKelamin" id="inlineRadio1" value="0">
                                <label class="form-check-label" for="inlineRadio1">Jantan</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input <?php echo form_error('jenisKelamin') ? 'is-invalid' : '' ?>" type="radio" name="jenisKelamin" id="inlineRadio2" value="1">
                                <label class="form-check-label" for="inlineRadio2">Betina</label>
                            </div>
                            <div class="invalid-feedback">
                                <?php echo form_error('jenisKelamin') ?>
                            </div>
                        </div>

                    </div>
                    <div class="form-group row">
                        <label for="noKTP" class="col-sm-4 col-form-label">Ras</label>
                        <div class="col-sm-8">
                            <input type="text" name="ras" class="form-control <?php echo form_error('ras') ? 'is-invalid' : '' ?>" id="" placeholder="ras">
                            <div class="invalid-feedback">
                                <?php echo form_error('ras') ?>
                            </div>
                        </div>

                    </div>
                    <div class="form-group row">
                        <label for="noKTP" class="col-sm-4 col-form-label">Warna</label>
                        <div class="col-sm-8">
                            <input type="text" name="warna" class="form-control <?php echo form_error('warna') ? 'is-invalid' : '' ?>" id="" placeholder="warna">
                            <div class="invalid-feedback">
                                <?php echo form_error('warna') ?>
                            </div>
                        </div>

                    </div>-->
                    <button class="btn btn-secondary" style="margin-top:1cm">Submit</button>
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