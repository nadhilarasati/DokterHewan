<div class="bc" style="float:right; width:70vw">
    <div class="card" style="margin-top:50px; margin-left:30px; margin-right:30px; margin-bottom: 30px; background-color: #ffcccc">
        <h1 style="margin-left:20px; margin-top:20px">Halo!</h1>
        <h4 style="margin-left:20px; margin-top:30px">Data Hewan</h4>
        <div class="row">
            <div class="col-md-4">
                <div style="margin-left:20px; margin-top:20px">
                    <img src="../../lib/img/profile3.jpg" style="width:100%">
                    <div style="margin-top:20px">
                        <button>Ubah Foto</button>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <form action="<?php site_url('UserProfile/seeDetail/' . $data_pet->idHewan); ?>" method="post">

                    <div style="margin-top:20px">
                        <div class="form-group row">
                            <label for="namaHewan" class="col-sm-4 col-form-label">Nama Hewan</label>
                            <div class="col-sm-6">
                                <input type="text" name="namaHewan" class="form-control" id="" value="<?php echo $data_pet->namaHewan ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jenisHewan" class="col-sm-4 col-form-label">Jenis Hewan</label>
                            <div class="col-sm-6">
                                <input type="text" name="jenisHewan" class="form-control" id="" value="<?php echo $data_pet->jenis ?>" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tanggalLahir" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-6">
                                <input type="text" name="tanggalLahir" class="form-control" id="" value="<?php echo $data_pet->tanggalLahir ?>" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tanggalLahir" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-6">
                                <input type="text" name="tanggalLahir" class="form-control" id="" value="<?php echo gender($data_pet->jenisKelamin) ?>" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ras" class="col-sm-4 col-form-label">Ras</label>
                            <div class="col-sm-6">
                                <input type="text" name="ras" class="form-control" id="" value="<?php echo $data_pet->ras ?>" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="warna" class="col-sm-4 col-form-label">Warna</label>
                            <div class="col-sm-6">
                                <input type="text" name="warna" class="form-control" id="" value="<?php echo $data_pet->warna ?>" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="status" class="col-sm-4 col-form-label">Status</label>
                            <div class="col-sm-6">
                                <input type="text" name="status" class="form-control" id="" value="<?php echo status($data_pet->status) ?>" readonly>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <h4 style="margin-left:20px; margin-top:30px">Rekam Medis</h4>
        <p style="margin-left:20px">Ini adalah histori berobat hewan peliharaan anda!</p>
        <div style="margin-left:20px; margin-bottom:20px; width: 105%">
            <table style="width: 90%">
                <thead>
                    <tr class="text-center">
                        <th>Tanggal</th>
                        <th>Gejala Klinis</th>
                        <th>Berat Badan</th>
                        <th>Suhu Badan</th>
                        <th>Diagnosa</th>
                        <th>Tindakan</th>
                        <th>Obat</th>
                        <th>Diperiksa Oleh</th>
                    </tr>
                </thead>
                <?php foreach ($data_medis as $dm) : ?>
                    <tbody class="text-center">
                        <td></td>
                        <td><?php echo $dm->gejalaKlinis ?></td>
                        <td><?php echo $dm->beratBadan ?></td>
                        <td><?php echo $dm->suhuBadan ?></td>
                        <td><?php echo $dm->diagnosa ?></td>
                        <td><?php echo $dm->tindakan ?></td>
                        <td><?php echo $dm->obat ?></td>
                        <td></td>
                    </tbody>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>

<style>
    table {
        border-collapse: collapse;
    }

    table,
    th,
    td {
        border: 2px solid black;
    }
</style>

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