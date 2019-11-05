<div id="content-wrapper" style="float:right; width:80vw">

  <div class="container-fluid">

    <!-- DataTables Example -->
    <div class="card" style="margin-top: 80px;">
      <div class="card-header">
        <a class="btn btn-secondary" href="<?php echo base_url(); ?>laporan/index"><i class="fas fa-download"></i>Unduh Laporan</a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Tanggal</th>
                <th>Jenis Hewan</th>
                <th>Jumlah</th>
                <th>Detail</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php foreach ($laporan as $l) { ?>
                  <td><?php echo $l->tanggalPeriksa ?></td>
                  <td><?php echo $l->jenis ?></td>
                  <td><?php echo $l->jumlah ?></td>
                  <td></td>
                <?php } ?>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>

</div>