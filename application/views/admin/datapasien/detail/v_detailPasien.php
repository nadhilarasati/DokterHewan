<div id="content-wrapper">
    <div class="container-fluid">
        <form class="data-pasien">
            <h2 class="text-center" style="margin-bottom:2cm">Data Pasien</h2>
            <div class="row">
                <div class="col-md-6">
                    <h3 style="margin-bottom:1cm">Data Pemilik Hewan</h3>
                    <div class="form-group row">
                        <label for="idPemilik" class="col-sm-4 col-form-label">ID Pemilik Hewan</label>
                        <div class="col-sm-8">
                            <?php echo $data_pemilik->idPemilik ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="noKTP" class="col-sm-4 col-form-label">No. KTP</label>
                        <div class="col-sm-8">
                            <input type="text" name="noKTP" class="form-control" id="" placeholder="<?php echo $data_pemilik->noKTP ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="namaPemilik" class="col-sm-4 col-form-label">Nama Pemilik Hewan</label>
                        <div class="col-sm-8">
                            <input type="text" name="namaPemilik" class="form-control" id="" placeholder="<?php echo $data_pemilik->namaPemilik ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
                        <div class="col-sm-8">
                            <input type="text" name="alamat" class="form-control" id="" placeholder="<?php echo $data_pemilik->alamat ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="telepon" class="col-sm-4 col-form-label">No. Telepon</label>
                        <div class="col-sm-8">
                            <input type="text" name="telepon" class="form-control" id="" placeholder="<?php echo $data_pemilik->telepon ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-4 col-form-label">Email</label>
                        <div class="col-sm-8">
                            <input type="text" name="email" class="form-control" id="" placeholder="<?php echo $data_pemilik->email ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-4 col-form-label">Password</label>
                        <div class="col-sm-8">
                            <input type="text" name="password" class="form-control" id="" placeholder="<?php echo $data_pemilik->password ?>">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <h3 style="margin-bottom:1cm; margin-top:1cm">Data Hewan Peliharaan</h3>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama Hewan</th>
                                    <th>Jenis Hewan</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Ras</th>
                                    <th>Warna</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data_hewan as $d) { ?>
                                    <tr>
                                        <td><?php echo $d->idHewan?></td>
                                        <td><?php echo $d->namaHewan?></td>
                                        <td></td>
                                        <td><?php echo $d->tanggalLahir ?></td>
                                        <td><?php echo gender($d->jenisKelamin) ?></td>
                                        <td><?php echo $d->ras ?></td>
                                        <td><?php echo $d->warna ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>


                        <!-- Modal -->
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content" style="padding:40px 50px;">

                                    <div class="modal-header">
                                        <h4 class="modal-title">Edit Data Hewan</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <form role="form" style="margin-top:0.5cm">
                                        <div class="form-group">
                                            <label for="namaHewan" class="">Nama Hewan</label>
                                            <input type="text" name="namaHewan" class="form-control" id="" placeholder="nama hewan">
                                        </div>

                                        <div class="form-group">
                                            <label for="jenisHewan" class="">Jenis Hewan</label>
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

                                        <div class="form-group">
                                            <label for="tanggalLahir">Tanggal Lahir</label>
                                            <input type="date" name="tanggalLahir" class="tanggal form-control" placeholder="tanggal lahir">
                                        </div>

                                        <div class="form-group">
                                            <label for="ras" class="">Ras</label>
                                            <input type="text" name="ras" class="form-control" id="" placeholder="ras">
                                        </div>

                                        <div class="form-group">
                                            <label for="warna" class="">Warna</label>
                                            <input type="text" name="warna" class="form-control" id="" placeholder="warna">
                                        </div>

                                        <div class="form-group">
                                            <label for="jenisKelamin">Jenis Kelamin</label>
                                            <div class="radio">
                                                <input type="radio" name="jenisKelamin" value="0">
                                                <label style="margin-left:0.1cm">Jantan</label>

                                            </div>
                                            <div class="radio">
                                                <input type="radio" name="jenisKelamin" value="1">
                                                <label style="margin-left:0.1cm">Betina</label>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary">Save</button>
                                        <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-6">
                    <button class="btn btn-secondary" id="myBtn">Tambah Hewan Baru</button>
                    <button class="btn btn-secondary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    $(document).ready(function() {
        $("#myBtn").click(function() {
            $("#myModal").modal();
        });
    });
</script>

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

<?php

function gender($code){
  if($code==1){
    return "Betina";
  }else{
    return "Jantan";
  }
}

?>