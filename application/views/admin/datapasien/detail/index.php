<div id="content-wrapper">
    <div class="container-fluid">
        <form class="data-pasien">
        <h2 class="text-center" style="margin-bottom:2cm">Data Pasien</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="noKTP" class="col-sm-4 col-form-label">No. KTP</label>
                        <div class="col-sm-8">
                        <label for="noKTP" class="col-sm-4 col-form-label">781097281910</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="noKTP" class="col-sm-4 col-form-label">Nama Pemilik Hewan</label>
                        <div class="col-sm-8">
                        <label for="noKTP" class="col-sm-4 col-form-label">Nadhila Larasati</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="noKTP" class="col-sm-4 col-form-label">Alamat</label>
                        <div class="col-sm-8">
                        <label for="noKTP" class="col-sm-4 col-form-label">Wira Angun-Angun no.12</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="noKTP" class="col-sm-4 col-form-label">No. Telepon</label>
                        <div class="col-sm-8">
                        <label for="noKTP" class="col-sm-4 col-form-label">08118072775</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="noKTP" class="col-sm-4 col-form-label">Username</label>
                        <div class="col-sm-8">
                        <label for="noKTP" class="col-sm-4 col-form-label">nadhilarasati</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="noKTP" class="col-sm-4 col-form-label">Password</label>
                        <div class="col-sm-8">
                        <label for="noKTP" class="col-sm-4 col-form-label">nadhila5</label>
                        </div>
                    </div>
                </div>

            </div>
        </form>

        <div class="row">
            <div class="col">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Hewan</th>
                                <th>Tanggal Lahir</th>
                                <th>Jenis Hewan</th>
                                <th>Ras</th>
                                <th>Warna</th>
                                <th>Jenis Kelamin</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>001</td>
                                <td>Apuy</td>
                                <td>19/05/2016</td>
                                <td>Kucing</td>
                                <td>Persia</td>
                                <td>Abu-Abu</td>
                                <td>Jantan</td>
                                <td><a class="btn btn-primary" href="<?php echo base_url(); ?>admin/detailRekamMedis"><i class="fas fa-pen"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col">
                    <button class="btn btn-secondary">Edit Profile</button>
                    <!--<button class="btn btn-secondary">Delete Record</button>-->
                </div>
            </div>
        </div>
    </div>
</div>