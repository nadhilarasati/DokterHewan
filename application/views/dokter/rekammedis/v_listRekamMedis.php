<div id="content-wrapper" style="float:right; width:80vw">

    <div class="container-fluid">

        <!-- DataTables Example -->
        <div class="card" style="margin-top: 80px;">

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center">
                                <th>Nomor Antrian</th>
                                <th>Nama Hewan</th>
                                <th>Jenis Hewan</th>
                                <th>Status</th>
                                <th>Detail</th>
                                <th>Hapus</th>
                            </tr>
                        </thead>
                        <tbody>


                            <?php foreach ($data_antrian as $da) { ?>
                                <tr class="text-center">
                                    <td><?php echo $da->idAntrian ?></td>
                                    <td><?php echo $da->namaHewan ?></td>
                                    <td><?php echo $da->jenis ?></td>
                                    <td><?php echo status($da->status) ?></td>
                                    <td><a class="btn btn-primary" href="<?php echo site_url('dokter/detailMedis/' . $da->idHewan); ?>"><i class="fas fa-pen"></i></a></td>
                                    <td><a class="btn btn-primary" href="<?php echo site_url('dokter/hapusAntrian/' . $da->idAntrian); ?>"><i class="fas fa-trash"></i></a></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

</div>

<?php

function status($code)
{
    if ($code == 0) {
        return "Belum Diperiksa";
    } else {
        return "Sudah Diperiksa";
    }
}

?>