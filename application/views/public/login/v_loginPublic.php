<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login User</title>
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

<div class="bg-img">
    <?php echo form_open('LoginUser/aksi_login'); ?>
    <div class="container">
        <form action="<?php echo base_url('LoginUser/aksi_login'); ?>" method="post">
            <h1>Login</h1>
            <?php if ($this->session->flashdata('wrong')) : ?>
                <div class="card-body text-center pb-0">
                    <h5 class="text-danger">Email dan Password Salah!</h5>
                </div>
            <?php endif; ?>
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" value="<?= set_value('email') ?>" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <button type="submit" class="btn">Login</button>
        </form>
        <?php echo form_close(); ?>
    </div>
</div>

<style>
    .bg-img {
        /* The image used */
        background-image: url("../lib/img/login.jpg");

        min-height: 100%;

        /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
    }

    /* Add styles to the form container */
    .container {
        position: absolute;
        right: 0;
        margin: 20px;
        max-width: 500px;
        padding: 16px;
        margin-top: 150px;
        margin-right: 50px;
        background-color: white;
    }

    /* Full-width input fields */
    input[type=text],
    input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        border: none;
        background: #f1f1f1;
    }

    input[type=text]:focus,
    input[type=password]:focus {
        background-color: #ddd;
        outline: none;
    }

    /* Set a style for the submit button */
    .btn {
        background-color: #4CAF50;
        color: white;
        padding: 16px 20px;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
    }

    .btn:hover {
        opacity: 1;
    }
</style>