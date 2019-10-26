<div id="content-wrapper" style="float:right; width:80vw">

  <div class="container-fluid">

    <!-- DataTables Example -->
    <div class="card" style="margin-top: 80px;">
      <div class="card-header">
        <div class="row">
          <div class="col-md-8">

            <a class="btn btn-secondary" href="<?php echo base_url(); ?>admin/formDataPasien"><i class="fas fa-plus"></i>Registrasi</a>
            <a class="btn btn-secondary" href="<?php echo base_url(); ?>laporan/formulirRegistrasi"><i class="fas fa-download"></i>Download Formulir</a>


          </div>
          <div class="col-md-4">
            <input type="text" id="myInput" onkeyup="myFunction()" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          </div>


        </div>



      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No. Telepon</th>
                <th>Action</th>
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
                  <td><a class="btn btn-primary" href="<?php echo site_url('admin/detailDataPasien/' . $d->idPemilik); ?>"><i class="fas fa-pen"></i></a></td>
                </tr>
              <?php } ?>
            </tbody>

          </table>
        </div>
      </div>
    </div>

  </div>

</div>


<!-- <script type="text/javascript" src="<?php echo base_url(); ?>/lib/js/addons/datatables.min.js"></script> -->
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