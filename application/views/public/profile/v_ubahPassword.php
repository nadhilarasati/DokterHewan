<div class="bc" style="float:right; width:70vw; height:100%">
    <div class="card" style="margin-top:50px; margin-left:30px; margin-right:30px; margin-bottom: 30px; background-color: #ffcccc">
        <h4 style="margin-left:20px; margin-top:20px">Pengaturan</h4>
        <p style="margin-left:20px">Anda hanya bisa mengubah password anda</p>
        <div class="row" style="margin-top:20px">
            <div class="col" style="margin-left:20px">
                <form class="data-pasien" action="<?php site_url('UserProfile/ubahPassword') ?>" method="post">
                    <?php if ($this->session->flashdata('success')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="form-group row">
                        <label for="password" class="col-sm-4 col-form-label">Password Baru</label>
                        <div class="col-sm-6">
                            <input type="text" name="password baru" class="form-control" id="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-4 col-form-label">Konfirmasi Password</label>
                        <div class="col-sm-6">
                            <input type="text" name="password kedua" class="form-control" id="">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-secondary">Simpan</button>
                </form>
            </div>
        </div>
    </div>