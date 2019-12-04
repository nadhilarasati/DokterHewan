<div id="content-wrapper" style="float:right; width:80vw">
    <div class="container-fluid">
        <!-- DataTables Example -->
        <div class="card" style="margin-top: 80px;">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-8">
                        <a class="btn btn-secondary" id="myBtn" style="color:white"><i class="fas fa-refresh"></i> Reset Antrian</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center">
                                <th>Nomor Antrian</th>
                                <th>Nama Pemilik</th>
                                <th>Nama Hewan</th>
                                <th>Jenis</th>
                                <th>Dokter Pemeriksa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($daftar_antrian as $d) { ?>
                                <tr class="text-center">
                                    <td><?php echo $d->idAntrian ?></td>
                                    <td><?php echo $d->namaPemilik ?></td>
                                    <td><?php echo $d->namaHewan ?></td>
                                    <td><?php echo $d->jenis ?></td>
                                    <td><?php echo $d->namaPegawai ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>

    </div>

</div>

<!-- Modal 'unduh' button-->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content" style="padding:40px 50px;">
            <div class="modal-header">
                <h4 class="modal-title">Reset Antrian</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <p style="margin-top:5%; margin-bottom:5%">Apakah anda yakin untuk melakukan reset antrian?</p>

            <div class="modal-footer">
                <a class="btn btn-secondary" href="<?php echo base_url('Admin/resetAntrian') ?>">Reset</a>
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