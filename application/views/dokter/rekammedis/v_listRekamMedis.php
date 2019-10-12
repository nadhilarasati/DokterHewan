<div id="content-wrapper">

    <div class="container-fluid">

        <!-- DataTables Example -->
        <div class="card">

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID Hewan</th>
                                <th>Nama Hewan</th>
                                <th>Jenis</th>
                                <th>Detail</th>
                            </tr>
                        </thead>
                        <tbody>


                            <?php foreach ($data_hewan as $dh) { ?>
                                <tr>
                                    <td><?php echo $dh->idHewan ?></td>
                                    <td><?php echo $dh->namaHewan ?></td>
                                    <td><?php echo $dh->jenis ?></td>
                                    <td><a class="btn btn-primary" href="<?php echo site_url('dokter/detailMedis/'.$dh->idHewan); ?>"><i class="fas fa-pen"></i></a></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

</div>