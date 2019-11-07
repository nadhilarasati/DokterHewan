<div id="content-wrapper" style="float:right; width:80vw">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <form class="data-pasien" action="<?php site_url('admin/editRekamMedis'); ?>" method="post">
                    <h2 class="text-center" style="margin-bottom:2cm; margin-top:3cm">Edit Rekam Medis</h2>
                    <?php if ($this->session->flashdata('success')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="idHewan" class="col-sm-4 col-form-label">ID Rekam Medis</label>
                                <div class="col-sm-8">
                                    <input type="text" name="idRekamMedis" class="form-control" id="" value="" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="namaHewan" class="col-sm-4 col-form-label">Gejala Klinis</label>
                                <div class="col-sm-8">
                                    <input type="text" name="gejalaKlinis" class="form-control" id="" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tanggalLahir" class="col-sm-4 col-form-label">Suhu Badan</label>
                                <div class="col-sm-8">
                                    <input type="text" name="suhuBadan" class="form-control" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ras" class="col-sm-4 col-form-label">Berat Badan</label>
                                <div class="col-sm-8">
                                    <input type="text" name="beratBadan" class="form-control" id="" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="warna" class="col-sm-4 col-form-label">Diagnosa</label>
                                <div class="col-sm-8">
                                    <input id="pw" type="text" name="diagnosa" class="form-control " id="" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="warna" class="col-sm-4 col-form-label">Tindakan</label>
                                <div class="col-sm-8">
                                    <input id="pw" type="text" name="tindakan" class="form-control " id="" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="warna" class="col-sm-4 col-form-label">Obat</label>
                                <div class="col-sm-8">
                                    <input id="pw" type="text" name="obat" class="form-control " id="" value="">
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-secondary" style="margin-top:0.5cm">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>