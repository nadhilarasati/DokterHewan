<div id="content-wrapper">
    <div class="container-fluid">
        <form class="data-pasien" action="<?php site_url('admin/detailRekamMedis/'.$data_hewan->idHewan);?>" method="post">
            <h2 class="text-center" style="margin-bottom:2cm; margin-top:1cm">Rekam Medis Pasien</h2>
            <?php if ($this->session->flashdata('success')) : ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
            <?php endif; ?>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="idHewan" class="col-sm-4 col-form-label">ID Hewan</label>
                        <div class="col-sm-8">
                            <label for="idHewan" name="idHewan" class="col-sm-4 col-form-label"><?php echo $data_hewan->idHewan ?></label>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="noKTP" class="col-sm-4 col-form-label">Nama Hewan</label>
                        <div class="col-sm-8">
                            <label for="namaHewan" name="namaHewan" class="col-sm-4 col-form-label"><?php echo $data_hewan->namaHewan ?></label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                        <div class="col-md-8">
                            <label for="noKTP" name="tanggalLahir" class="col-sm-4 col-form-label"><?php echo $data_hewan->tanggalLahir ?></label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="noKTP" class="col-sm-4 col-form-label">Jenis Hewan</label>
                        <div class="col-sm-8">
                            <label for="noKTP" name="jenisHewan"class="col-sm-4 col-form-label"><?php echo $data_hewan->jenis ?></label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="noKTP" class="col-sm-4 col-form-label">Ras</label>
                        <div class="col-sm-8">
                            <label for="noKTP" name="ras" class="col-sm-4 col-form-label"><?php echo $data_hewan->ras ?></label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="noKTP" class="col-sm-4 col-form-label">Warna</label>
                        <div class="col-sm-8">
                            <label for="noKTP" name="warna" class="col-sm-4 col-form-label"><?php echo $data_hewan->warna ?></label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="noKTP" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-8">
                            <label for="noKTP" name="jenisKelamin" class="col-sm-4 col-form-label"><?php echo gender($data_hewan->jenisKelamin) ?></label>
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
            <div class="col-md-6">
                <div style="margin-left:5cm">
                    <button class="btn btn-secondary" id="myBtn">Insert New Record</button>
                    <button class="btn btn-secondary">Download Form Record</button>
                    <!--<button class="btn btn-secondary">Delete Record</button>-->
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
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
                        <tr>
                            <td>19/09/2019</td>
                            <td>Muntah-muntah</td>
                            <td>5</td>
                            <td>37</td>
                            <td>Radang pencernaan</td>
                            <td>Memberi obat pencernaan</td>
                            <td>Primacat</td>
                            <td>Oktavia Pusparini</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content" style="padding:40px 50px;">

                        <div class="modal-header">
                            <h4 class="modal-title">New Record</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <form role="form" style="margin-top:0.5cm">
                            <div class="form-group">
                                <label for="gejalaKlinis" class="">Gejala Klinis</label>
                                <input type="text" name="gejalaKlinis" class="form-control" id="" placeholder="gejala klinis">
                            </div>

                            <div class="form-group">
                                <label for="suhuBadan" class="">Suhu Badan</label>
                                <input type="text" name="suhuBadan" class="form-control" id="" placeholder="suhu badan">
                            </div>

                            <div class="form-group">
                                <label for="beratBadan" class="">Berat Badan</label>
                                <input type="text" name="beratBadan" class="form-control" id="" placeholder="berat badan">
                            </div>

                            <div class="form-group">
                                <label for="diagnosa" class="">Diagnosa</label>
                                <input type="text" name="diagnosa" class="form-control" id="" placeholder="diagnosa">
                            </div>

                            <div class="form-group">
                                <label for="tindakan" class="">Tindakan</label>
                                <input type="text" name="tindakan" class="form-control" id="" placeholder="tindakan">
                            </div>

                            <div class="form-group">
                                <label for="idDokter" class="">Diperiksa Oleh</label>

                                <div class="input-group mb-3">
                                    <select name="role" class="custom-select" id="inputGroupSelect01">
                                        <option selected>Choose...</option>
                                    </select>
                                </div>

                            </div>
                        </form>
                        <div class="modal-footer">
                            <button class="btn btn-secondary">Submit</button>
                            <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>

<script>
    $(document).ready(function() {
        $("#myBtn").click(function() {
            $("#myModal").modal();
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



?>