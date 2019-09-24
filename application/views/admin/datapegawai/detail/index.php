<div id="content-wrapper">
    <div class="container-fluid">
        <form class="data-pasien" action="<?php site_url('admin/detailDataPegawai'); ?>">
            <h2 class="text-center" style="margin-bottom:2cm">Data Pegawai</h2>

            <div class="form-group row">
                <label for="noKTP" name="id" class="col-sm-4 col-form-label">ID Pegawai</label>
                <div class="col-sm-6">
                    <?php echo $data_pegawai->idPegawai ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="noKTP" class="col-sm-4 col-form-label">Nama Pegawai</label>
                <div class="col-sm-6">
                    <input type="text" name="noKTP" class="form-control" id="" placeholder="<?php echo $data_pegawai->namaPegawai ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="noKTP" class="col-sm-4 col-form-label">Alamat</label>
                <div class="col-sm-6">
                    <input type="text" name="noKTP" class="form-control" id="" placeholder="<?php echo $data_pegawai->alamat ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="noKTP" class="col-sm-4 col-form-label">No. Telepon</label>
                <div class="col-sm-6">
                    <input type="text" name="noKTP" class="form-control" id="" placeholder="<?php echo $data_pegawai->telepon ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="noKTP" class="col-sm-4 col-form-label">Role</label>
                <div class="col-sm-6">
                    <input type="text" name="noKTP" class="form-control" id="" placeholder="<?php echo roleName($data_pegawai->role) ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="noKTP" class="col-sm-4 col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="text" name="noKTP" class="form-control" id="" placeholder="<?php echo $data_pegawai->email ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="noKTP" class="col-sm-4 col-form-label">Password</label>
                <div class="col-sm-6">
                    <input type="text" name="noKTP" class="form-control" id="" placeholder="<?php echo $data_pegawai->password ?>">
                </div>
            </div>
            <div style="margin-left:12cm; margin-top:2cm">
                <button class="btn btn-secondary">Save</button>
                <button class="btn btn-secondary">Delete</button>
            </div>

        </form>
    </div>
</div>

<?php

function roleName($code)
{
    if ($code == 1) {
        return "Dokter";
    } else {
        return "Paramedis";
    }
}

?>