<div id="content-wrapper"style="float:right; width:80vw">

  <div class="container-fluid">

    <!-- DataTables Example -->
    <div class="card" style="margin-top: 80px;">
      <div class="card-header">
        <div class="row">
          <div class="col-md-8">
            <a class="btn btn-secondary" href="<?php echo base_url(); ?>admin/formDataPegawai"><i class="fas fa-plus"></i>Tambah Data Pegawai</a>
          </div>
          <div class="col-md-4">
            <input type="text" id="myInput" onkeyup="myFunction()" class="form-control" placeholder="Cari Nama Pegawai..." aria-label="Search" aria-describedby="basic-addon2">
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
            <thead>
              <tr class="text-center">
                <th>ID Pegawai</th>
                <th>Nama Pegawai</th>
                <th>Peran</th>
                <th>Detail</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($daftar_pegawai as $d) { ?>
                <tr class="text-center">
                  <td>
                    <?php echo $d->idPegawai ?>
                  </td>
                  <td>
                    <?php echo $d->namaPegawai ?>
                  </td>
                  <td>
                    <?php echo roleName($d->role) ?>
                  </td>
                  <td><a class="btn btn-primary" href="<?php echo site_url('admin/detailDataPegawai/' . $d->idPegawai); ?>"><i class="fas fa-pen"></i></a></td>
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

function roleName($code)
{
  if ($code == 1) {
    return "Dokter";
  } else {
    return "Paramedis";
  }
}

?>

<script>
  function myFunction() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[1];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }
    }
  }
</script>