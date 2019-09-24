<div id="content-wrapper">
    <div class="container-fluid">
        <form class="data-pasien">
            <h2 class="text-center" style="margin-bottom:2cm; margin-top:1cm">Rekam Medis Pasien</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="noKTP" class="col-sm-4 col-form-label">ID Rekam Medis</label>
                        <div class="col-sm-8">
                            <label for="noKTP" class="col-sm-4 col-form-label">001</label>
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

                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="noKTP" class="col-sm-4 col-form-label">Nama Hewan</label>
                        <div class="col-sm-8">
                            <label for="noKTP" class="col-sm-4 col-form-label">Apuy</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                        <div class="col-md-8">
                            <label for="noKTP" class="col-sm-4 col-form-label">19/05/2016</label>
                            <span class="input-group-addon"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="noKTP" class="col-sm-4 col-form-label">Jenis Hewan</label>
                        <div class="col-sm-8">
                            <label for="noKTP" class="col-sm-4 col-form-label">Kucing</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="noKTP" class="col-sm-4 col-form-label">Ras</label>
                        <div class="col-sm-8">
                            <label for="noKTP" class="col-sm-4 col-form-label">Persia</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="noKTP" class="col-sm-4 col-form-label">Warna</label>
                        <div class="col-sm-8">
                            <label for="noKTP" class="col-sm-4 col-form-label">Abu-Abu</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="noKTP" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-8">
                            <label for="noKTP" class="col-sm-4 col-form-label">Jantan</label>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <div class="row">
            <div class="col-md-6" >
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
                    <button class="btn btn-secondary" >Insert New Record</button>
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

        </div>
    </div>
</div>