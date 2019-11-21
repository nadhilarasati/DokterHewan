<div class="bc" style="float:right; width:70vw; height:100%">
    <div class="card" style="margin-top:50px; margin-left:30px; margin-right:30px; margin-bottom: 30px; background-color: #ffcccc">
        <h4 style="margin-left:20px; margin-top:20px">Ini adalah data hewan peliharaan anda!</h4>
        <p style="margin-left:20px">Anda hanya bisa melihat data hewan peliharaan anda. Jika terjadi kesalahan data lain, silahkan hubungi pihak klinik.</p>
        <div style="margin-left:20px; margin-bottom:20px; width: 105%">
            <table style="width: 90%">
                <thead>
                    <tr class="text-center">
                        <th>Nama Hewan</th>
                        <th>Jenis Hewan</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Ras</th>
                        <th>Warna</th>
                        <th>Status</th>
                        <th>Detail</th>
                    </tr>
                </thead>
                <?php foreach ($data_hewan as $d): ?>
                <tbody class="text-center">
                    <td><?php echo $d->namaHewan ?></td>
                    <td><?php echo $d->jenis ?></td>
                    <td><?php echo $d->tanggalLahir ?></td>
                    <td><?php echo gender($d->jenisKelamin) ?></td>
                    <td><?php echo $d->ras ?></td>
                    <td><?php echo $d->warna ?></td>
                    <td><?php echo status($d->status) ?></td>
                    <td><a class="btn btn-primary" style="background-color:black" href="<?php echo site_url('UserProfile/seeDetail/'.$d->idHewan)?>"><i class="fa fa-file"></i></a></td>
                    
                </tbody>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>


<style>
    table {
        border-collapse: collapse;
    }

    table,
    th,
    td {
        border: 2px solid black;
    }
</style>

<?php

function gender($code)
{
    if ($code == 1) {
        return "Betina";
    } else {
        return "Jantan";
    }
}

function status($code)
{
    if ($code == 0) {
        return "Hidup";
    } else {
        return "Mati";
    }
}

?>