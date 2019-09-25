<div id="content-wrapper">

      <div class="container-fluid">

        <!-- DataTables Example -->
        <div class="card">
          <div class="card-header">
            <a class="btn btn-secondary" href="<?php echo base_url();?>admin/formRekamMedis"><i class="fas fa-plus"></i>Create</a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Jenis Hewan</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>001</td>
                    <td>Apuy</td>
                    <td>Kucing</td>
                    <td><a class="btn btn-primary" href="<?php echo base_url(); ?>admin/detailRekamMedis"><i class="fas fa-pen"></i></a></td>
                  </tr>
                </tbody>
                <tbody>
                  <tr>
                    <td>002</td>
                    <td>Eldo</td>
                    <td>Anjing</td>
                    <td><a class="btn btn-primary" href="<?php echo base_url(); ?>admin/detailRekamMedis"><i class="fas fa-pen"></i></a></td>
                  </tr>
                </tbody>
                <tbody>
                  <tr>
                    <td>003</td>
                    <td>Kero</td>
                    <td>Hamster</td>
                    <td><a class="btn btn-primary" href="<?php echo base_url(); ?>admin/detailRekamMedis"><i class="fas fa-pen"></i></a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>

    </div>