<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>lib/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>lib/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>lib/css/responsive.css">




    <link href="<?php echo base_url(); ?>lib/font/comfortaa.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


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

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark default-color">
        <a class="navbar-brand glow" href="#">Klinik Nyanko</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333" aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent-333">
            <ul class="navbar-nav mr-auto navbar">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url() ?>">BERANDA
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('pages/facilities') ?>">FASILITAS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="<?php echo base_url('pages/aboutus') ?>">TENTANG KAMI</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('pages/login') ?>">LOGIN</a>
                </li>
            </ul>
        </div>
    </nav>
</body>

<style>

    .navbar a {
        padding: 14px 16px;
    }

    .dropdown .dropbtn {
        font-size: 16px;
        border: none;
        outline: none;
        color: white;
        padding: 14px 16px;
        background-color: inherit;
        font-family: inherit;
        margin: 0;
    }

    .navbar a:hover,
    .dropdown:hover .dropbtn {
        background-color: teal;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        float: none;
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
    }

    .dropdown-content a:hover {
        background-color: #ddd;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }
</style>