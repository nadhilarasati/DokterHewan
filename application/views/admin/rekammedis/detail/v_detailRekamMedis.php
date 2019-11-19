<div id="content-wrapper" style="float:right; width:80vw">
    <div class="container-fluid">
        <form class="data-pasien" action="<?php site_url('admin/detailRekamMedis/' . $data_pet->idHewan); ?>" method="post">
            <h2 class="text-center" style="margin-bottom:2cm; margin-top:3cm">Rekam Medis Pasien</h2>
            <?php if ($this->session->flashdata('success')) : ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
            <?php endif; ?>

            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <div class="form-group row">
                                <label for="idHewan" class="col-sm-4 col-form-label">ID Hewan</label>
                                <div class="col-sm-8">
                                    <label for="idHewan" name="idHewan" class="col-sm-4 col-form-label"><?php echo $data_pet->idHewan ?></label>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="noKTP" class="col-sm-4 col-form-label">Nama Hewan</label>
                                <div class="col-sm-8">
                                    <label for="namaHewan" name="namaHewan" class="col-sm-4 col-form-label"><?php echo $data_pet->namaHewan ?></label>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="noKTP" class="col-sm-4 col-form-label">Jenis Hewan</label>
                                <div class="col-sm-8">
                                    <label for="noKTP" name="jenisHewan" class="col-sm-4 col-form-label"><?php echo $data_pet->jenis ?></label>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                                <div class="col-md-8">
                                    <label for="noKTP" name="tanggalLahir" class="col-sm-4 col-form-label"><?php echo $data_pet->tanggalLahir ?></label>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="noKTP" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-8">
                                    <label for="noKTP" name="jenisKelamin" class="col-sm-4 col-form-label"><?php echo gender($data_pet->jenisKelamin) ?></label>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="noKTP" class="col-sm-4 col-form-label">Ras</label>
                                <div class="col-sm-8">
                                    <label for="noKTP" name="ras" class="col-sm-4 col-form-label"><?php echo $data_pet->ras ?></label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="noKTP" class="col-sm-4 col-form-label">Warna</label>
                                <div class="col-sm-8">
                                    <label for="noKTP" name="warna" class="col-sm-4 col-form-label"><?php echo $data_pet->warna ?></label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="noKTP" class="col-sm-4 col-form-label">Status Hewan</label>
                                <div class="col-sm-8">
                                    <label for="noKTP" name="warna" class="col-sm-4 col-form-label"><?php echo status($data_pet->status) ?></label>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>


        </form>

        <div class="row">
            <div class="col-md-6">
                <div style="margin-bottom:0.5cm">
                    <button class="btn btn-secondary" id="myBtn"><i class="fas fa-plus">Tambah Rekam Medis Baru</i></button>
                    <a class="btn btn-secondary" href="<?php echo site_url('Laporan/rekamMedisPDF/' . $data_pet->idHewan); ?>"><i class="fas fa-download">Unduh Formulir Rekam Medis</i></a>
                    <!--<button class="btn btn-secondary">Delete Record</button>-->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center">
                                <th>ID Rekam Medis</th>
                                <th>Tanggal</th>
                                <th>Gejala Klinis</th>
                                <th>Suhu Badan</th>
                                <th>Berat Badan</th>
                                <th>Diagnosa</th>
                                <th>Tindakan</th>
                                <th>Obat</th>
                                <th>Dokter Pemeriksa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data_medis as $dm) { ?>
                                <tr class="text-center">
                                    <td><?php echo $dm->idRekamMedis ?></td>
                                    <td>
                                        <?php echo $dm->tanggal ?>
                                    </td>
                                    <td><?php echo $dm->gejalaKlinis ?></td>
                                    <td><?php echo $dm->suhuBadan ?></td>
                                    <td><?php echo $dm->beratBadan ?></td>
                                    <td><?php echo $dm->diagnosa ?></td>
                                    <td><?php echo $dm->tindakan ?></td>
                                    <td><?php echo $dm->obat ?></td>
                                    <td><?php echo $dm->namaPegawai ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <button class="btn btn-secondary" id="myButton" style="margin-bottom:0.5cm">Kirim</button>
    </div>
</div>

<!-- Modal Rekam Medis-->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content" style="padding:40px 50px;">
            <?php if ($this->session->flashdata('success')) : ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
            <?php endif; ?>
            <div class="modal-header">
                <h4 class="modal-title">Tambah Record Baru</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <?php echo form_open('Admin/formRekamMedis/' . $data_pet->idHewan) ?>
            <h6 style="margin-top:0.5cm; color:red">Anda tidak bisa mengubah isi rekam medis setelah menyimpannya. Mohon diteliti kembali sebelum disimpan!</h6>
            <div class="form-group" style="margin-top:0.5cm">
                <label for="gejalaKlinis" class="">Gejala Klinis</label>
                <input type="text" name="gejalaKlinis" class="form-control <?php echo form_error('gejalaKlinis') ? 'is-invalid' : '' ?>" id="" placeholder="gejala klinis">
                <div class="invalid-feedback">
                    <?php echo form_error('gejalaKlinis') ?>
                </div>
            </div>

            <div class="form-group">
                <label for="suhuBadan" class="">Suhu Badan</label>
                <input type="text" name="suhuBadan" class="form-control <?php echo form_error('suhuBadan') ? 'is-invalid' : '' ?>" id="" placeholder="suhu badan">
                <div class="invalid-feedback">
                    <?php echo form_error('suhuBadan') ?>
                </div>
            </div>

            <div class="form-group">
                <label for="beratBadan" class="">Berat Badan</label>
                <input type="text" name="beratBadan" class="form-control <?php echo form_error('beratBadan') ? 'is-invalid' : '' ?>" id="" placeholder="berat badan">
                <div class="invalid-feedback">
                    <?php echo form_error('beratBadan') ?>
                </div>
            </div>

            <div class="form-group">
                <label for="diagnosa" class="">Diagnosa</label>
                <input type="text" name="diagnosa" class="form-control <?php echo form_error('diagnosa') ? 'is-invalid' : '' ?>" id="" placeholder="diagnosa">
                <div class="invalid-feedback">
                    <?php echo form_error('diagnosa') ?>
                </div>
            </div>

            <div class="form-group">
                <label for="tindakan" class="">Tindakan</label>
                <input type="text" name="tindakan" class="form-control <?php echo form_error('tindakan') ? 'is-invalid' : '' ?>" id="" placeholder="tindakan">
                <div class="invalid-feedback">
                    <?php echo form_error('tindakan') ?>
                </div>
            </div>

            <div class="form-group">
                <label for="obat" class="">Obat</label>
                <input type="text" name="obat" class="form-control <?php echo form_error('obat') ? 'is-invalid' : '' ?>" id="" placeholder="obat">
                <div class="invalid-feedback">
                    <?php echo form_error('obat') ?>
                </div>
            </div>

            <div class="form-group">
                <label for="idPegawai" class="">Diperiksa Oleh</label>

                <div class="input-group mb-3">
                    <select name="idPegawai" class="custom-select" id="inputGroupSelect01">
                        <option selected>Pilih...</option>
                        <?php foreach ($dokter_praktek as $dp) { ?>
                            <option value="<?php echo $dp->idPegawai ?>"><?php echo $dp->namaPegawai ?></option>
                        <?php } ?>
                    </select>
                </div>

            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-secondary">Simpan</button>
                <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>

<!-- Modal 'kirim' button-->
<div class="modal fade" id="myMdl" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content" style="padding:40px 50px;">
            <div class="modal-header">
                <h4 class="modal-title">Kirim Rekam Medis</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <?php echo form_open('Admin/formKirim/' . $data_pet->idHewan) ?>
            <div class="form-group">
                <label for="idDokter" class="" style="margin-top:0.5cm">Tujuan</label>

                <div class="input-group mb-3">
                    <select name="idPegawai" class="custom-select" id="inputGroupSelect01">
                        <option selected>Choose...</option>
                        <?php foreach ($dokter_praktek as $dp) { ?>
                            <option value="<?php echo $dp->idPegawai ?>"><?php echo $dp->namaPegawai ?></option>
                        <?php } ?>
                    </select>
                </div>

            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-secondary">Kirim</button>
                <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $("#myBtn").click(function() {
            $("#myModal").modal();
        });
    });

    $(document).ready(function() {
        $("#myButton").click(function() {
            $("#myMdl").modal();
        });
    });
</script>

<?php

function gender($code)
{
    if ($code == 1) {
        return "Betina";
    } else {
        return "Jantan";
    }
}

function status($code)
{
    if ($code == 0) {
        return "Hidup";
    } else {
        return "Mati";
    }
}

?>