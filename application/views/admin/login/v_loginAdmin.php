<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>lib/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>lib/css/styleAdmin.css">
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
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <div class="card rounded-0">
                            <div class="card-header">
                                <h3 class="mb-0">Login</h3>
                                <?php if ($this->session->flashdata('wrong')) : ?>
                                    <div class="card-body text-center pb-0">
                                        <h5 class="text-danger">Email dan Password Salah!</h5>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="card-body">
                                <?php echo form_open('login/aksi_login'); ?>
                                <form class="form" role="form" autocomplete="off" id="formLogin" novalidate="" action="<?php echo base_url('login/aksi_login'); ?>" method="POST">
                                    <div class="form-group">
                                        <label for="uname1">Email</label>
                                        <input type="text" class="form-control form-control-lg rounded-0" name="email" id="email" value="<?=set_value('email')?>"required="required">
                                        <div class="invalid-feedback">Oops, you missed this one.</div>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control form-control-lg rounded-0" id="password" required="required" autocomplete="new-password">
                                        <div class="invalid-feedback">Enter your password too!</div>
                                    </div>
                                    <button type="submit" class="btn btn-success btn-lg float-right" id="btnLogin" href="<?php echo base_url('admin/dataPasien') ?>">Login</button>
                                </form>
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>