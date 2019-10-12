<div id="content-wrapper">
    <div class="container-fluid">
        <form class="data-pasien" action="<?php site_url('dokter/detailMedis/' . $data_pet->idHewan); ?>" method="post">
            <h2 class="text-center" style="margin-bottom:2cm; margin-top:1cm">Rekam Medis Pasien</h2>

            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col">
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

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </form>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="status" class="col-sm-4 col-form-label">Status Hewan</label>
                    <div class="col-sm-8">
                        <div class="input-group mb-3">
                            <select class="custom-select" id="inputGroupSelect01">
                                <option selected>Choose...</option>
                                <option value="1">Hidup</option>
                                <option value="2">Mati</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="row">
            <div class="col">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID Rekam Medis</th>
                                <th>Tanggal</th>
                                <th>Gejala Klinis</th>
                                <th>Suhu Badan</th>
                                <th>Berat Badan</th>
                                <th>Diagnosa</th>
                                <th>Tindakan</th>
                                <th>Obat</th>
                                <th>Diperiksa Oleh</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data_medis as $dm) { ?>
                                <tr>
                                    <td><?php echo $dm->idRekamMedis ?></td>
                                    <td>
                                        <?php
                                            $d = strtotime("today");
                                            echo date("d-m-y", $d) . "<br>";
                                            ?>
                                    </td>
                                    <td><?php echo $dm->gejalaKlinis ?></td>
                                    <td><?php echo $dm->suhuBadan ?></td>
                                    <td><?php echo $dm->beratBadan ?></td>
                                    <td><?php echo $dm->diagnosa ?></td>
                                    <td><?php echo $dm->tindakan ?></td>
                                    <td><?php echo $dm->obat ?></td>
                                    <td></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



<?php

function gender($code)
{
    if ($code == 1) {
        return "Betina";
    } else {
        return "Jantan";
    }
}



?>