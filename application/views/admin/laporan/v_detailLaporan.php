<div id="content-wrapper" style="float:right; width:80vw">

    <div class="container-fluid">

        <!-- DataTables Example -->
        <div class="card" style="margin-top: 80px;">
            <!-- <h3>Tanggal <?php echo $tanggal->tanggal?></h3>
            <h3>Jenis Hewan <?php echo $jenis->jenis?></h3> -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center">
                                <th>Nama Pegawai</th>
                                <th>Nama Hewan</th>
                                <th>Nama Pemilik</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($detail as $d) : ?>
                                <tr class="text-center">
                                    <td><?php echo $d->namaPegawai?></td>
                                    <td><?php echo $d->namaHewan?></td>
                                    <td><?php echo $d->namaPemilik?></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>