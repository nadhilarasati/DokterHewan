<div id="content-wrapper" style="float:right; width:80vw">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <form class="data-pasien" action="<?php site_url('admin/editDataHewan/' . $data_hewan->idHewan); ?>" method="post">
                    <h2 class="text-center" style="margin-bottom:2cm; margin-top:3cm">Edit Data Hewan</h2>
                    <?php if ($this->session->flashdata('success')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="row">
                        <div class="col-md-6">
                        <?php echo form_open_multipart('admin/editDataHewan/'.$data_hewan->idHewan);?>
                            <div class="form-group row">
                                <label for="idHewan" class="col-sm-4 col-form-label">ID Hewan</label>
                                <div class="col-sm-8">
                                    <input type="text" name="idHewan" class="form-control" id="" value="<?php echo $data_hewan->idHewan ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="namaHewan" class="col-sm-4 col-form-label">Nama Hewan</label>
                                <div class="col-sm-8">
                                    <input type="text" name="namaHewan" class="form-control" id="" value="<?php echo $data_hewan->namaHewan ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jenisHewan" class="col-sm-4 col-form-label">Jenis Hewan</label>
                                <div class="col-sm-8">
                                    <div class="input-group mb-3">
                                        <select name="jenisHewan" class="custom-select" id="inputGroupSelect01">
                                            <option value="<?php echo $data_hewan->idJenis ?>"><?php echo $data_hewan->jenis ?></option>
                                            <?php foreach ($tipe_hewan as $th) { ?>
                                                <?php if ($th->idJenis != $data_hewan->idJenis) { ?>
                                                    <option value="<?php echo $th->idJenis ?>"><?php echo $th->jenis ?></option>
                                                <?php } ?>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tanggalLahir" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-8">
                                    <input type="date" name="tanggalLahir" class="tanggal form-control <?php echo form_error('tanggalLahir') ? 'is-invalid' : '' ?>" value="<?php echo $data_hewan->tanggalLahir ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jenisKelamin" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-8">
                                    <select name="jenisKelamin" class="custom-select" id="inputGroupSelect01">
                                        <option value="<?php echo gender($data_hewan->jenisKelamin) ?>"><?php echo gender($data_hewan->jenisKelamin) ?></option>
                                        <?php if (gender($data_hewan->jenisKelamin) != 'Jantan') { ?>
                                            <option value="0">Jantan</option>
                                        <?php } else { ?>
                                            <option value="1">Betina</option>
                                        <?php } ?>
                                    </select>
                                </div>

                            </div>
                            <div class="invalid-feedback">
                                <?php echo form_error('jenisKelamin') ?>
                            </div>
                            <div class="form-group row">
                                <label for="ras" class="col-sm-4 col-form-label">Ras</label>
                                <div class="col-sm-8">
                                    <input type="text" name="ras" class="form-control" id="" value="<?php echo $data_hewan->ras ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="warna" class="col-sm-4 col-form-label">Warna</label>
                                <div class="col-sm-8">
                                    <input id="pw" type="text" name="warna" class="form-control " id="" value="<?php echo $data_hewan->warna ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="status" class="col-sm-4 col-form-label">Status</label>
                                <div class="col-sm-8">
                                    <select name="status" class="custom-select" id="inputGroupSelect01">
                                        <option value="<?php echo status($data_hewan->status) ?>"><?php echo status($data_hewan->status) ?></option>
                                        <?php if (status($data_hewan->status) != 'Hidup') { ?>
                                            <option value="0">Hidup</option>
                                        <?php } else { ?>
                                            <option value="1">Mati</option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="foto" class="col-sm-4 col-form-label">Foto</label>
                                <div class="col-sm-8">
                                    <input class="form-control-file <?php echo form_error('foto')? 'is-invalid':''?>" type="file" name="foto">
                                    <input type="hidden" name="foto_lama">
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

function status($code)
{
    if ($code == 0) {
        return "Hidup";
    } else {
        return "Mati";
    }
}

?>