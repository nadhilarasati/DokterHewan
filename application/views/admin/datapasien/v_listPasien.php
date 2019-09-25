<div id="content-wrapper">

  <div class="container-fluid">

    <!-- DataTables Example -->
    <div class="card">
      <div class="card-header">
        <a class="btn btn-secondary" href="<?php echo base_url(); ?>admin/formDataPasien"><i class="fas fa-plus"></i>Create</a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No. Telepon</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($daftar_pemilik as $d) { ?>
                <tr>
                  <td>
                    <?php echo $d->idPemilik ?>
                  </td>
                  <td>
                    <?php echo $d->namaPemilik ?>
                  </td>
                  <td>
                    <?php echo $d->alamat ?>
                  </td>
                  <td>
                    <?php echo $d->telepon ?>
                  </td>
                  <td><a class="btn btn-primary" href="<?php echo site_url('admin/detailDataPasien/'.$d->idPemilik); ?>"><i class="fas fa-pen"></i></a></td>
                </tr>
              <?php } ?>
            </tbody>

          </table>
        </div>
      </div>
    </div>

  </div>

</div>