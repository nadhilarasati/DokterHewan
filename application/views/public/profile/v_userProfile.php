<div class="bc" style="float:right; width:70vw; height:100%">
    <div class="card" style="margin-top:50px; margin-left:30px; margin-right:30px; margin-bottom: 30px; background-color: #ffcccc">
        <h4 style="margin-left:20px; margin-top:20px">Ini adalah data diri anda sebagai pemilik hewan!</h4>
        <p style="margin-left:20px">Anda hanya bisa mengubah password anda. Jika terjadi kesalahan data lain, silahkan hubungi pihak klinik.</p>
        <div class="row" style="margin-top:20px">
            <div class="col" style="margin-left:20px">
                <form action="<?php site_url('UserProfile/seeProfile'); ?>" method="post">
                    <div class="form-group row">
                        <label for="noKTP" class="col-sm-4 col-form-label">No. KTP</label>
                        <div class="col-sm-6">
                            <input type="text" name="noKTP" class="form-control" id="" value="" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="namaPemilik" class="col-sm-4 col-form-label">Nama Pemilik Hewan</label>
                        <div class="col-sm-6">
                            <input type="text" name="namaPemilik" class="form-control" id="" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
                        <div class="col-sm-6">
                            <input type="text" name="alamat" class="form-control" id="" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="telepon" class="col-sm-4 col-form-label">Telepon</label>
                        <div class="col-sm-6">
                            <input type="text" name="telepon" class="form-control" id="" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-4 col-form-label">Email</label>
                        <div class="col-sm-6">
                            <input type="text" name="email" class="form-control" id="" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-4 col-form-label">Password</label>
                        <div class="col-sm-6">
                            <button class="btn btn-secondary" id="myButton">Ubah Password</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal ubah password button-->
<div class="modal fade" id="myMdl" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content" style="padding:40px 50px;">
            <div class="modal-header">
                <h4 class="modal-title">Ubah Password</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="form-group" style="margin-top:10px">
                <label for="obat" class="">Password lama anda</label>
                <input type="text" name="email" class="form-control" id="" readonly>
            </div>

            <div class="form-group">
                <label for="obat" class="">Password baru</label>
                <input type="text" name="email" class="form-control" id="">
            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-secondary">Simpan</button>
                <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
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

    $(document).ready(function() {
        $("#myButton").click(function() {
            $("#myMdl").modal();
        });
    });
</script>