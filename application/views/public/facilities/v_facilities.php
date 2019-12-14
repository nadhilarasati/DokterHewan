<div style="height: 100%; background-color: rgb(255, 249, 229);">
    <div style="padding-top:50px; padding-left:20px">
        <h2 class="text-center">FASILITAS KLINIK NYANKO</h2>
    </div>

    <div class="card" style="margin-top:50px; margin-left:30px; margin-right:30px; margin-bottom: 30px; background-color: #ffcccc">
        <div class="row" style="margin-top:20px">
            <div class="col-md-6" style="padding-top:20px; padding-left:50px; margin-bottom:20px">
                <img src="../lib/img/vet.png" style="width:100%">
            </div>

            <div class="col-md-6" style="padding-top:50px; padding-right:50px; margin-bottom:20px">
                <button class="accordion">Vaksin</button>
                <div class="panel">
                    <p style="margin-top:10px">Klinik Nyanko menyediakan vaksin untuk kucing dan anjing anda seperti vaksin untuk rabies, parvovirus, distemper, dan hepatitis</p>
                </div>

                <button class="accordion">Operasi Minor</button>
                <div class="panel">
                    <p style="margin-top:10px">Klinik Nyanko dapat melakukan operasi minor seperti steril, kebiri, scalling, othematoma, hernia, dan pasang kateter</p>
                </div>

                <button class="accordion">USG</button>
                <div class="panel">
                    <p style="margin-top:10px">Klinik Nyanko memiliki mesin USG yang lengkap untuk pemeriksaan kebuntingan maupun status organ reproduksi</p>
                </div>

                <button class="accordion">X-RAY</button>
                <div class="panel">
                    <p style="margin-top:10px">Klinik Nyanko dilengkapi dengan mesin x-ray yang canggih</p>
                </div>

                <button class="accordion">Mini Pet Shop</button>
                <div class="panel">
                    <p style="margin-top:10px">Klinik Nyanko memiliki mini pet shop yang menyediakan makanan hewan peliharaan, perlengkapan (kandang, mainan, tempat makan dan minum, dll), dan obat umum</p>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }
</script>

<style>
    .accordion {
        background-color: #2c3e50;
        color: white;
        cursor: pointer;
        padding: 18px;
        width: 100%;
        border: none;
        text-align: left;
        outline: none;
        font-size: 15px;
        transition: 0.4s;
    }

    .active,
    .accordion:hover {
        background-color: teal;
    }

    .panel {
        padding: 0 18px;
        display: none;
        background-color: white;
        overflow: hidden;
    }
</style>