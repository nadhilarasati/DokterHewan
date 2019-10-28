<div class="bg-img">
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
                                <?php echo form_open('LoginUser/aksi_login'); ?>
                                <form class="form" action="<?php echo base_url('LoginUser/aksi_login'); ?>" role="form" autocomplete="off" id="formLogin" novalidate="" method="POST">
                                    <div class="form-group">
                                        <label for="uname1">Email</label>
                                        <input name="email " type="text" class="form-control form-control-lg rounded-0" required="required">
                                        <div class="invalid-feedback">Oops, you missed this one.</div>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input name="password" type="password" class="form-control form-control-lg rounded-0"  required="required" autocomplete="new-password">
                                        <div class="invalid-feedback">Enter your password too!</div>
                                    </div>
                                    <button type="submit" class="btn btn-success btn-lg float-right" id="btnLogin">Login</button>
                                </form>
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>