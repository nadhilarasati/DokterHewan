<div id="content-wrapper">

  <div class="container-fluid">

    <!-- DataTables Example -->
    <div class="card">
      <div class="card-header">
        <a class="btn btn-secondary" href="<?php echo base_url(); ?>admin/formDataPegawai"><i class="fas fa-plus"></i>Tambah Data Pegawai</a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>ID Pegawai</th>
                <th>Nama Pegawai</th>
                <th>Role</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>


              <?php foreach ($daftar_pegawai as $d) { ?>
                <tr>
                  <td>
                    <?php echo $d->idPegawai ?>
                  </td>
                  <td>
                    <?php echo $d->namaPegawai ?>
                  </td>
                  <td>
                    <?php echo roleName($d->role); ?>
                  </td>
                  <td><a class="btn btn-primary" href="<?php echo site_url('admin/detailDataPegawai/'.$d->idPegawai); ?>"><i class="fas fa-pen"></i></a></td>
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

function roleName($code){
  if($code==1){
    return "Dokter";
  }else{
    return "Paramedis";
  }
}

?>