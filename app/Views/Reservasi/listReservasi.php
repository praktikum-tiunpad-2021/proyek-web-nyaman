<?= $this->extend('/base'); ?>
<?= $this->section('content'); ?>

<div class="main">
    <h1 class="text-center pt-5">Reservasi Saya</h1>
    <hr class="mx-3 mb-4 mt-2">
    <?php foreach($reservasi as $r) : ?>
        <div class="isi-reservasi">
            <div class="row">
                <div class="col-2">
                    <img src="assets/img/<?= $r['gambar']; ?>" alt="gambar"> 
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col-2">
                            <p>No Kamar</p>
                            <p>Jenis Kamar</p>
                            <p>Check in</p>
                            <p>Check out</p>
                            <p>Harga</p>
                            <p>Status</p>
                        </div>
                        <div class="col">
                            <p>: <?= $r['no_kamar']; ?></p>
                            <p>: <?= $r['jenis_kamar']; ?></p>
                            <p>: <?= $r['checkin']; ?></p>
                            <p>: <?= $r['checkout']; ?></p>
                            <p>: <?= $r['harga']; ?></p>
                            <p>: <?= $r['status']; ?></p>
                        </div>
                        <div class="col">
                            <div class="d-flex justify-content-end mx-3 mt-5">
                                <a href="/bukti-bayar/<?= $r['no_pesanan']; ?>" class="btn btn-login" >Bukti Reservasi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    
<?= $this->endSection('content'); ?>