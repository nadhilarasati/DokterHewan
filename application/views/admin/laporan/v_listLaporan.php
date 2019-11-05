<div id="content-wrapper" style="float:right; width:80vw">

  <div class="container-fluid">

    <!-- DataTables Example -->
    <div class="card" style="margin-top: 80px;">
      <div class="card-header">
        <a class="btn btn-secondary" id="myBtn"><i class="fas fa-download"></i>Unduh Laporan</a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr class="text-center">
                <th>Tanggal</th>
                <th>Jenis Hewan</th>
                <th>Jumlah</th>
                <th>Detail</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($laporan as $l) : ?>
              <tr class="text-center">
                  <td><?php echo $l->tanggal ?></td>
                  <td><?php echo $l->jenis ?></td>
                  <td><?php echo $l->Jumlah ?></td>
                  <td><a class="btn btn-primary" href="<?php echo site_url('Laporan/detailLaporan/'.$l->jenis.'/'.$l->tanggal); ?>"><i class="fas fa-pen"></i></a></td>
              </tr>
            <?php endforeach ?>
            </tbody>
          </table>
        </div>
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