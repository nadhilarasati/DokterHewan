<div id="content-wrapper" style="float:right; width:80vw">

  <div class="container-fluid">

    <!-- DataTables Example -->
    <div class="card" style="margin-top: 80px;">
      <div class="card-header">
        <a class="btn btn-secondary" id="myBtn" style="color:white"><i class="fas fa-download"></i>Unduh Laporan</a>
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
                  <td><a class="btn btn-primary" href="<?php echo site_url('Laporan/detailLaporan/' . $l->jenis . '/' . $l->tanggal); ?>"><i class="fas fa-pen"></i></a></td>
                </tr>
              <?php endforeach ?>
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
        <h4 class="modal-title">Unduh Laporan</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <?php echo form_open('Laporan/laporanTanggal') ?>

      <div class="form-group" style="margin-top:0.5cm">
        <label for="tanggalAwal">Tanggal Awal</label>
        <input type="date" name="tanggalAwal" class="tanggal form-control">
      </div>

      <div class="form-group">
        <label for="tanggalAkhir">Tanggal Akhir</label>
        <input type="date" name="tanggalAkhir" class="tanggal form-control">
      </div>

      <div class="modal-footer">
        <button type="submit" class="btn btn-secondary" href="<?php echo base_url('Laporan/laporanTanggal') ?>">Unduh</button>
        <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
      </div>
      <?php echo form_close(); ?>

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

<script src="js/jquery.min.2.0.2.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<script src="datepicker/bootstrap-datepicker.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('.tanggal').datepicker({
      format: "dd-mm-yyyy",
      autoclose: true
    });
  });
</script>