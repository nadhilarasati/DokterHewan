<div class="bc" style="float:right; width:70vw; height:100%">
    <?php if ($this->session->flashdata('success')) : ?>
        <div class="alert alert-success" role="alert">
            <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>
    <div class="card" style="margin-top:50px; margin-left:30px; margin-right:30px; margin-bottom: 30px; background-color: #ffcccc">

        <div class="tab">
            <button class="tablinks" onclick="openData(event, 'DataPemilik')" id="defaultOpen">Data Pemilik</button>
            <button class="tablinks" onclick="openData(event, 'UbahPassword')">Ubah Password</button>
        </div>
        <div id="DataPemilik" class="tabcontent">

            <h4 style="margin-left:20px; margin-top:20px">Data Pemilik Hewan</h4>
            <p style="margin-left:20px">Ini adalah data diri anda sebagai pemilik hewan! Anda hanya bisa mengubah password anda. Jika terjadi kesalahan data lain, silahkan hubungi pihak klinik.</p>
            <div class="row" style="margin-top:20px">
                <div class="col" style="margin-left:20px">
                    <form class="data-pasien" action="<?php site_url('UserProfile/seeProfile') ?>" method="post">
                        <div class="form-group row">
                            <label for="noKTP" class="col-sm-4 col-form-label">No. KTP</label>
                            <div class="col-sm-6">
                                <input type="text" name="noKTP" class="form-control" id="" value="<?php echo $data_pemilik->noKTP ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="namaPemilik" class="col-sm-4 col-form-label">Nama Pemilik Hewan</label>
                            <div class="col-sm-6">
                                <input type="text" name="namaPemilik" class="form-control" id="" value="<?php echo $data_pemilik->namaPemilik ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
                            <div class="col-sm-6">
                                <input type="text" name="alamat" class="form-control" id="" value="<?php echo $data_pemilik->alamat ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="telepon" class="col-sm-4 col-form-label">Telepon</label>
                            <div class="col-sm-6">
                                <input type="text" name="telepon" class="form-control" id="" value="<?php echo $data_pemilik->telepon ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label">Email</label>
                            <div class="col-sm-6">
                                <input type="text" name="email" class="form-control" id="" value="<?php echo $data_pemilik->email ?>" readonly>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>

        <div id="UbahPassword" class="tabcontent">
            <h4 style="margin-left:20px; margin-top:20px">Ubah Password</h4>
            <p style="margin-left:20px">Ubahlah password anda di sini. Anda bisa mengombinasikan huruf dan angka dengan panjang minimum 5 karakter dan maksimal 12 karakter.</p>
            <div class="row" style="margin-top:20px">
                <div class="col" style="margin-left:20px">
                    <form class="data-pasien" action="<?php base_url('UserProfile/seeProfile') ?>" method="post">
                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label">Password</label>
                            <div class="col-sm-6">
                                <input type="text" name="email" class="form-control" id="" value="<?php echo $data_pemilik->password ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="passBaru" class="col-sm-4 col-form-label">Password Baru</label>
                            <div class="col-sm-6">
                                <input id= "pw" type="password" class="form-control " placeholder="Password Baru" name="passBaru">
                                <span toggle="#pw" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="invalid-feedback">
                                <?php echo form_error('passBaru') ?>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-secondary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function openData(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();

    $(".toggle-password").click(function() {
        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });
</script>

<style>
    /* Style the tab */
    .tab {
        overflow: hidden;
        border: 1px solid #ccc;
        background-color: #2c3e50;
    }

    /* Style the buttons inside the tab */
    .tab button {
        color: white;
        background-color: inherit;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        transition: 0.3s;
        font-size: 17px;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
        background-color: #ddd;
    }

    /* Create an active/current tablink class */
    .tab button.active {
        background-color: teal;
    }

    /* Style the tab content */
    .tabcontent {
        display: none;
        padding: 6px 12px;
        border: 1px solid #ccc;
        border-top: none;
    }
</style>