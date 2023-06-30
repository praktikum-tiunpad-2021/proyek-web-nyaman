<?= $this->extend('/base'); ?>
<?= $this->section('content'); ?>

<style>
    body {
        font-size: 15px;
    }
    td {
        padding-bottom: 5px;
        font-size: 15px;
    }
</style>
<body>

    <div class="main mx-4">
    <nav class="pt-4">
    <div class="row ">
        <div class="col-1">
            <img src="/assets/img/logo.png" alt="NYAMAN" class="img-invoice"> 
        </div>
        <div class="col-8">
            <br>
            <h6>HOTEL NYAMAN</h6>
            <p class="mx-0 text-justify" style="font-size:12px;">Jl. Raya Bandung Sumedang KM.21, Hegarmanah, Jatinangor, Kabupaten Sumedang, Jawa Barat 45363</p>
            <p class="mx-0 text-justify" style="font-size:12px;">Telepon: 022 84288828 | Email: hotel@nyaman.co.id</p>
            <br>
        </div>
    </div>
    <hr>
    <br>
    <h1 class="text-center" style="font-weight: bold;">BUKTI PEMESANAN KAMAR</h1>
    <div class="container mt-3">
        <table>
            <tbody>
                <tr>
                    <td style="font-weight: bold;">Nomor Pemesanan</td>
                    <td>:</td>
                    <td><input type="text" name="nopesan" style="border: none;" value ="<?= $reservasi['no_pesanan']; ?>" readonly></td>
                </tr>
                <tr>
                    <td style="font-weight: bold;">Pemesanan dilakukan pada</td>
                    <td>:</td>
                    <td><input type="text" name="currentTime" value="<?= $reservasi['currentTime']; ?>" style="border: none;" readonly></td>
                </tr>
                <tr>
                    <td style="font-weight: bold;">Nama Tamu</td>
                    <td>:</td>
                    <td><?php echo (session()->get('first_name'))."  ".(session()->get('last_name'))?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold;">Status</td>
                    <td>:</td>
                    <td style="color: green; font-weight: bold;">Terkonfirmasi</td>
                </tr>
            </tbody>
        </table><br>
        <fieldset>
            <table>
                <thead>
                    <td>
                        <u><h3 style="padding-bottom: 5px;">Detail Pesanan</h3></u>
                    </td>
                </thead>
                <tbody>
                    <tr>
                        <td style="font-weight: bold;">No Kamar</td>
                        <td>: <?php echo $reservasi['no_kamar']; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Check In</td>
                        <td>: <?= $reservasi['checkin']; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Check Out</td>
                        <td>: <?= $reservasi['checkout']; ?></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </fieldset><br>
        <fieldset>
            <table>
                <thead>
                    <td>
                        <u><h3 style="padding-bottom: 5px;">Detail Pembayaran</h3></u>
                    </td>
                </thead>
                <tbody>
                    <tr>
						<td style="font-weight: bold;">Biaya</td>
                        <td>: <?= $reservasi['harga']; ?></td>
						<td></td>
					</tr>
                    <tr>
						<td style="font-weight: bold;">Metode Pembayaran</td>
                        <td>: Bayar di Tempat</td>
						<td></td>
					</tr>
                </tbody>
            </table>
        </fieldset><br>
        <p class="mx-0 text-justify" style="font-size:13px;"><b>Note:</b> Mohon menunjukkan Voucher Hotel ini kepada resepsionis atau reservasi saat check-in.</p>
    </div>
    </div>
</body>


<?= $this->endSection('content'); ?>
