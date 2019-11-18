<div id="content-wrapper">
    <div class="container-fluid" style="float:right; width:80vw">
        <form class="data-pasien" action="<?php site_url(); ?>" method="post">
            <h2 class="text-center" style="margin-top:2cm; margin-bottom:2cm">Data Dokter</h2>
            <div class="form-group row">
                <label for="noKTP" name="id" class="col-sm-4 col-form-label">ID Pegawai</label>
                <div class="col-sm-6">
                    <input type="text" name="idPegawai" class="form-control" id="" value="" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="noKTP" class="col-sm-4 col-form-label">Nama Pegawai</label>
                <div class="col-sm-6">
                    <input type="text" name="nama" class="form-control" id="" value="" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="noKTP" class="col-sm-4 col-form-label">Alamat</label>
                <div class="col-sm-6">
                    <input type="text" name="alamat" class="form-control" id="" value="" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="noKTP" class="col-sm-4 col-form-label">No. Telepon</label>
                <div class="col-sm-6">
                    <input type="text" name="telepon" class="form-control" id="" value="" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="status" class="col-sm-4 col-form-label">Role</label>
                <div class="col-sm-6">
                    <div class="input-group mb-3">
                        <select name="role" class="custom-select" id="inputGroupSelect01">
                            <option value=""></option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label for="noKTP" class="col-sm-4 col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="text" name="email" class="form-control" id="" value="" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="noKTP" class="col-sm-4 col-form-label">Password</label>
                <div class="col-sm-6">
                    <input type="password" name="password" class="form-control" id="pw" value="" readonly>
                    <span toggle="#pw" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                </div>
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