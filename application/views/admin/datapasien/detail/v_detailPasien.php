<div id="content-wrapper">
    <div class="container-fluid">
        <form class="data-pasien" action="<?php site_url('admin/detailDataPasien/' . $data_pemilik->idPemilik); ?>" method="post">
            <h2 class="text-center" style="margin-bottom:2cm">Data Pasien</h2>
            <?php if ($this->session->flashdata('success')) : ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
            <?php endif; ?>
            <div class="row">
                <div class="col-md-6">

                    <h3 style="margin-bottom:1cm">Data Pemilik Hewan</h3>
                    <div class="form-group row">
                        <label for="idPemilik" class="col-sm-4 col-form-label">ID Pemilik Hewan</label>
                        <div class="col-sm-8">
                            <input type="text" name="idPemilik" class="form-control" id="" value="<?php echo $data_pemilik->idPemilik ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="noKTP" class="col-sm-4 col-form-label">No. KTP</label>
                        <div class="col-sm-8">
                            <input type="text" name="noKTP" class="form-control" id="" value="<?php echo $data_pemilik->noKTP ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="namaPemilik" class="col-sm-4 col-form-label">Nama Pemilik Hewan</label>
                        <div class="col-sm-8">
                            <input type="text" name="namaPemilik" class="form-control" id="" value="<?php echo $data_pemilik->namaPemilik ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
                        <div class="col-sm-8">
                            <input type="text" name="alamat" class="form-control" id="" value="<?php echo $data_pemilik->alamat ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="telepon" class="col-sm-4 col-form-label">No. Telepon</label>
                        <div class="col-sm-8">
                            <input type="text" name="telepon" class="form-control" value="<?php echo $data_pemilik->telepon ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-4 col-form-label">Email</label>
                        <div class="col-sm-8">
                            <input type="text" name="email" class="form-control" id="" value="<?php echo $data_pemilik->email ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-4 col-form-label">Password</label>
                        <div class="col-sm-8">
                            <input id="pw" type="password" name="password" class="form-control " id="" value="<?php echo $data_pemilik->password ?>">
                            <span toggle="#pw" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-secondary" style="margin-top:0.5cm">Simpan</button>
                </div>
            </div>
        </form>
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
                                <td><?php echo $d->idHewan ?></td>
                                <td><?php echo $d->namaHewan ?></td>
                                <td><?php echo $d->jenis ?></td>
                                <td><?php echo $d->tanggalLahir ?></td>
                                <td><?php echo gender($d->jenisKelamin) ?></td>
                                <td><?php echo $d->ras ?></td>
                                <td><?php echo $d->warna ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>



            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <button class="btn btn-secondary" href="#" id="myBtn">Tambah Hewan Baru</button>

        </div>
    </div>
</div>
</div>

<!-- Modal -->
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
                <h4 class="modal-title">Tambah Data Hewan</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <?php echo form_open('Admin/formDataHewan/' . $data_pemilik->idPemilik) ?>
            <!-- <form class="data-pasien" role="form" style="margin-top:0.5cm" action="<?php //site_url('Admin/formDataHewan');
                                                                                        ?>" method="post" enctype="multipart/form-data"> -->
            <div class="form-group" style="margin-top:0.5cm">
                <label for="namaHewan" class="">Nama Hewan</label>
                <input type="text" name="namaHewan" class="form-control <?php echo form_error('namaHewan') ? 'is-invalid' : '' ?>" id="" placeholder="nama hewan">
                <div class="invalid-feedback">
                    <?php echo form_error('namaHewan') ?>
                </div>
            </div>

            <div class="form-group">
                <label for="jenisHewan" class="">Jenis Hewan</label>
                <div class="input-group mb-3">
                    <select name="jenisHewan" class="custom-select" id="inputGroupSelect01">
                        <option selected>Choose...</option>
                        <?php foreach ($tipe_hewan as $th) { ?>
                            <option value="<?php echo $th->idJenis ?>"><?php echo $th->jenis ?></option>
                        <?php } ?>
                        <!-- <option value="2">Anjing</option>
            <option value="3">Kelinci</option>
            <option value="4">Alap-Alap</option>
            <option value="5">Hamster</option>
            <option value="6">Landak</option>
            <option value="7">Ular</option>
            <option value="8">Burung</option>
            <option value="9">Ayam</option>
            <option value="10">Lain-Lain</option> -->
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="tanggalLahir">Tanggal Lahir</label>
                <input type="date" name="tanggalLahir" class="tanggal form-control <?php echo form_error('tanggalLahir') ? 'is-invalid' : '' ?>" placeholder="tanggal lahir">
                <div class="invalid-feedback">
                    <?php echo form_error('tanggalLahir') ?>
                </div>
            </div>

            <div class="form-group">
                <label for="ras" class="">Ras</label>
                <input type="text" name="ras" class="form-control <?php echo form_error('ras') ? 'is-invalid' : '' ?>" id="" placeholder="ras">
                <div class="invalid-feedback">
                    <?php echo form_error('ras') ?>
                </div>
            </div>
            <div class="form-group">
                <label for="warna" class="">Warna</label>
                <input type="text" name="warna" class="form-control <?php echo form_error('warna') ? 'is-invalid' : '' ?>" id="" placeholder="warna">
                <div class="invalid-feedback">
                    <?php echo form_error('warna') ?>
                </div>
            </div>

            <div class="form-group">
                <label for="jenisKelamin">Jenis Kelamin</label>
                <div class="radio">
                    <input type="radio" name="jenisKelamin" class=" <?php echo form_error('jenisKelamin') ? 'is-invalid' : '' ?>" value="0">
                    <label style="margin-left:0.1cm">Jantan</label>
                </div>
                <div class="radio">
                    <input type="radio" name="jenisKelamin" class=" <?php echo form_error('jenisKelamin') ? 'is-invalid' : '' ?>" value="1">
                    <label style="margin-left:0.1cm">Betina</label>
                </div>
            </div>
            <div class="invalid-feedback">
                <?php echo form_error('jenisKelamin') ?>
            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-secondary">Save</button>
                <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
            </div>
            <!-- </form> -->
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

<!-- Password Toggle Visibility -->
<script>
    $(".toggle-password").click(function() {
        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
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