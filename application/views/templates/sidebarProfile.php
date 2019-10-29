<div class="bg" style="float:left; width:30vw">
    <div class="menu" style="margin-top:200px; margin-left:40px">
        <h2>Selamat Datang!</h2>
        <div class="row">
            <div class="col nav-item">
                <a href="<?php echo base_url('UserProfile/seeProfile') ?>" class="nav-link">Data Pemilik Hewan</a>
                |
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="#" class="nav-link ">Data Hewan Peliharaan</a>
            </div>
        </div>
    </div>
</div>

<style>
    .bg {
        background-image: url("../lib/img/profile2.jpg");


        height: 100%;
        /* filter: blur(1px); */
        /* -webkit-filter: blur(1px); */
        background-size: cover;
        background-repeat: no-repeat;
    }

    .menu {
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/opacity/see-through */
        color: white;
        font-weight: bold;
        border: 3px solid #f1f1f1;
        /* position: absolute; */
        top: 50%;
        left: 50%;
        /* transform: translate(-50%, -50%); */
        z-index: 2;
        width: 80%;
        padding: 20px;
        text-align: center;
    }

    .bc {
        background-color: rgb(255, 249, 229);
        height: 100%;
    }
</style>