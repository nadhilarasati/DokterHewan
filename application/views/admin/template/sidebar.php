<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?= $title ?></title>

  <link href="<?php echo base_url(); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <link href="<?php echo base_url(); ?>vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <link href="<?php echo base_url(); ?>css/sb-admin.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>lib/css/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>lib/css/styleAdmin.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>lib/css/responsive.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>lib/css/password-toggler.css">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />

  <link href="<?php echo base_url(); ?>lib/font/comfortaa.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="datepicker/datepicker3.css" />

  <script src="<?php echo base_url(); ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url(); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="<?php echo base_url(); ?>vendor/chart.js/Chart.min.js"></script>
  <script src="<?php echo base_url(); ?>vendor/datatables/jquery.dataTables.js"></script>
  <script src="<?php echo base_url(); ?>vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url(); ?>js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="<?php echo base_url(); ?>js/demo/datatables-demo.js"></script>
  <script src="<?php echo base_url(); ?>js/demo/chart-area-demo.js"></script>

  <script src="<?php echo base_url(); ?>lib/js/jquery-3.3.1.slim.min.js"></script>
  <script src="<?php echo base_url(); ?>lib/js/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>lib/js/popper.min.js"></script>
  <script src="<?php echo base_url(); ?>lib/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>lib/js/custom.js"></script>


  <!-- <link rel="stylesheet" type="text/css" href="../../lib/css/bootstrap/bootstrap.min.css">

    <script src="../../lib/jquery-3.3.1.slim.min.js"></script>
    <script src="../../lib/popper.min.js"></script>
    <script src="../../lib/bootstrap.min.js"></script> -->
</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="">Selamat Datang <?php echo $this->session->userdata('username');?>!</a>


    <a href="<?php echo site_url('login/logout') ?>" class="btn btn-info" style="margin-left:70%">
      <i class="fa fa-sign-out"></i> Log out
    </a>




    <!-- Navbar Search -->
    <!-- <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> -->

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">

    </ul>

  </nav>

  <div id="wrapper">



    <ul class="sidebar navbar-nav">
      <!-- Menu untuk paramedis -->
      <?php if ($this->session->userdata('role') === '2') : ?>
        <li class="nav-item">
          <a class="nav-link active" href="<?php echo base_url(); ?>admin/dataPasien">
            <i class="fas fa-fw fa-table"></i>
            <span>Data Pasien</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>admin/dataPegawai">
            <i class="fas fa-fw fa-table"></i>
            <span>Data Pegawai</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>admin/laporan">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Laporan Rekam Medis</span></a>
        </li>

        <?php elseif ($this->session->userdata('role') === '1') : ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>dokter/listRekamMedis">
            <i class="fas fa-fw fa-file"></i>
            <span>Antrian Pasien</span></a>
        </li>
    </ul>
  <?php endif; ?>
  </div>
</body>