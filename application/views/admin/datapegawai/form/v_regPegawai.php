<div id="content-wrapper" style="float:right; width:80vw">
    <div class="container-fluid">
        <h2 class="text-center" style="margin-bottom:1cm; margin-top:3cm">Data Pegawai Baru</h2>
        <form class="data-pegawai" action="<?php site_url('admin/formDataPegawai'); ?>" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">

                    <?php if ($this->session->flashdata('success')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                    <?php endif; ?>

                    <div class="form-group row">
                        <label for="nama pegawai" class="col-sm-4 col-form-label">Nama Pegawai</label>
                        <div class="col-sm-8">
                            <input type="text" name="nama" class="form-control <?php echo form_error('nama') ? 'is-invalid' : '' ?>" id="" placeholder="nama pegawai">
                        </div>
                        <div class="invalid-feedback">
                                <?php echo form_error('nama') ?>
                            </div>
                    </div>
                    <div class="form-group row">
                        <label for="noKTP" class="col-sm-4 col-form-label">Alamat</label>
                        <div class="col-sm-8">
                            <input type="text" name="alamat" class="form-control <?php echo form_error('alamat') ? 'is-invalid' : '' ?>" id="" placeholder="alamat">
                        </div>
                        <div class="invalid-feedback">
                                <?php echo form_error('alamat') ?>
                            </div>
                    </div>
                    <div class="form-group row">
                        <label for="noKTP" class="col-sm-4 col-form-label">No. Telepon</label>
                        <div class="col-sm-8">
                            <input type="number" name="telepon" class="form-control <?php echo form_error('telepon') ? 'is-invalid' : '' ?>" id="" placeholder="no telfon">
                        </div>
                        <div class="invalid-feedback">
                                <?php echo form_error('telepon') ?>
                            </div>
                    </div>
                    <div class="form-group row">
                        <label for="status" class="col-sm-4 col-form-label">Role</label>
                        <div class="col-sm-8">
                            <div class="input-group mb-3">
                                <select name="role" class="custom-select <?php echo form_error('role') ? 'is-invalid' : '' ?>" id="inputGroupSelect01">
                                    <option selected>Choose...</option>
                                    <option value="1">Dokter</option>
                                    <option value="2">Paramedis</option>
                                </select>
                            </div>
                            <div class="invalid-feedback">
                                <?php echo form_error('role') ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="noKTP" class="col-sm-4 col-form-label">Email</label>
                        <div class="col-sm-8">
                            <input type="email" name="email" class="form-control <?php echo form_error('email') ? 'is-invalid' : '' ?>" id="" placeholder="email@gmail.com">
                        </div>
                        <div class="invalid-feedback">
                                <?php echo form_error('email') ?>
                            </div>
                    </div>
                    <div class="form-group row">
                        <label for="noKTP" class="col-sm-4 col-form-label">Password</label>
                        <div class="col-sm-8">
                            <input type="password" name="password" class="form-control <?php echo form_error('password') ? 'is-invalid' : '' ?>" id="" placeholder="password">
                        </div>
                        <div class="invalid-feedback">
                                <?php echo form_error('password') ?>
                            </div>
                    </div>

                    <button class="btn btn-secondary" style="margin-top:1cm">Submit</button>
                    <div class="form-group row">

                    </div>
                </div>
            </div>
        </form>
    </div>
</div>