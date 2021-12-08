<?= $this->extend('/base'); ?>
<?= $this->section('content'); ?>

<style>
    table, td {
        border: 1px solid rgb(141, 141, 141);
    }
</style>

<div class="main">
    <h1 class="text-center pt-5">DATA RESERVASI TAMU</h1>
    <hr>
    <div class="my-4 px-5">
        <table class="table table-bordered table-striped mt-2" id="data_reservasi" style="">
            <thead style="font-weight:bold;">
                <tr>
                    <td>No. Pesanan</td>
                    <td>Username</td>
                    <td>No. Kamar</td>
                    <td>Jenis Kamar</td>
                    <td>Check In</td>
                    <td>Check Out</td>
                    <td>Harga</td>
                    <td>Waktu Pemesanan</td>
                    <td>Status</td>
                </tr>
            </thead>   
            <tbody>
                <?php foreach($reservasi as $r) : ?>
                <tr>
                    <td><?= $r['no_pesanan']; ?></td>
                    <td><?= $r['username']; ?></td>
                    <td><?= $r['no_kamar']; ?></td>
                    <td><?= $r['jenis_kamar']; ?></td>
                    <td><?= $r['checkin']; ?></td>
                    <td><?= $r['checkout']; ?></td>
                    <td><?= $r['harga']; ?></td>
                    <td><?= $r['currentTime']; ?></td>
                    <td><?= $r['status']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody> 
        </table>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<?= $this->endSection('content'); ?>