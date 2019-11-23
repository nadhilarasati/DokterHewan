<div id="content-wrapper">
    <div class="container-fluid" style="float:right; width:80vw">
        <form class="data-pasien" action="<?php site_url('admin/detailDataPegawai/' . $data_pegawai->idPegawai); ?>" method="post">
            <h2 class="text-center" style="margin-bottom:2cm; margin-top:2cm">Data Pegawai</h2>

            <?php if ($this->session->flashdata('success')) : ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
            <?php endif; ?>

            <div class="form-group row">
                <label for="noKTP" name="id" class="col-sm-4 col-form-label">ID Pegawai</label>
                <div class="col-sm-6">
                    <input type="text" name="idPegawai" class="form-control" id="" value="<?php echo $data_pegawai->idPegawai ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="noKTP" class="col-sm-4 col-form-label">Nama Pegawai</label>
                <div class="col-sm-6">
                    <input type="text" name="nama" class="form-control" id="" value="<?php echo $data_pegawai->namaPegawai ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="noKTP" class="col-sm-4 col-form-label">Alamat</label>
                <div class="col-sm-6">
                    <input type="text" name="alamat" class="form-control" id="" value="<?php echo $data_pegawai->alamat ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="noKTP" class="col-sm-4 col-form-label">No. Telepon</label>
                <div class="col-sm-6">
                    <input type="text" name="telepon" class="form-control" id="" value="<?php echo $data_pegawai->telepon ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="status" class="col-sm-4 col-form-label">Peran</label>
                <div class="col-sm-6">
                    <div class="input-group mb-3">
                        <select name="role" class="custom-select" id="inputGroupSelect01">
                            <option value="<?php echo $data_pegawai->role ?>"><?php echo roleName($data_pegawai->role) ?></option>
                            <?php if (roleName($data_pegawai->role) != 'Dokter') { ?>
                                <option value="1">Dokter</option>
                                <?php } else { ?>
                                    <option value="2">Paramedis</option>
                                    <?php } ?>
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label for="noKTP" class="col-sm-4 col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="text" name="email" class="form-control" id="" value="<?php echo $data_pegawai->email ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="noKTP" class="col-sm-4 col-form-label">Password</label>
                <div class="col-sm-6">
                    <input type="password" name="password" class="form-control" id="pw" value="<?php echo $data_pegawai->password ?>">
                    <span toggle="#pw" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                </div>
            </div>
            <div style="margin-left:12cm; margin-top:2cm">
                <button type="submit" class="btn btn-secondary">Simpan</button>
            </div>

        </form>
    </div>
</div>

<?php

function roleName($code)
{
    if ($code == 2) {
        return "Paramedis";
    } else {
        return "Dokter";
    }
}


?>
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