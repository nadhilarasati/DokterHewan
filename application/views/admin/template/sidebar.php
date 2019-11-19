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

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top" style="position: fixed;
    width: 100vw;
    z-index: 10;">



    <div style="width:100%">
      <a class="navbar-brand mr-1" style="font-size:20px;cursor:pointer; color:#f1f1f1">&#9776; Selamat Datang <?php echo $this->session->userdata('username'); ?>!</a>

      <a href="<?php echo site_url('login/logout') ?>" class="btn btn-info" style="float:right">
        <i class="fa fa-sign-out"></i> Log out
      </a>
    </div>
  </nav>


  <div class="wrapper sidenav" style="width:250px">
    <ul class="sidebar navbar-nav" style="width:20vw !important">
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
          <a class="nav-link" href="<?php echo base_url(); ?>Laporan/laporan">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Laporan</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>Admin/resetAntrian">
            <i class="fas fa-fw fa-file"></i>
            <span>Reset Antrian</span></a>
        </li>
        <!-- Menu untuk dokter -->
      <?php elseif ($this->session->userdata('role') === '1') : ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>dokter/listRekamMedis">
            <i class="fas fa-fw fa-file"></i>
            <span>Antrian Registrasi</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>dokter/profilDokter">
            <i class="fas fa-fw fa-user"></i>
            <span>Profil Dokter</span></a>
        </li>
      <?php endif; ?>
    </ul>

  </div>
</body>

<style>
  body {
    font-family: "Lato", sans-serif;
  }

  .sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
  }

  .sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
  }

  .sidenav a:hover {
    color: #f1f1f1;
  }

  .sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
  }

  @media screen and (max-height: 450px) {
    .sidenav {
      padding-top: 15px;
    }

    .sidenav a {
      font-size: 18px;
    }
  }
</style>