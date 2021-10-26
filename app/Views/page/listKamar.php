<?= $this->extend('/base'); ?>
<?= $this->section('content'); ?>

<div class="main">
    <h1 class="text-center pt-4">LIST KAMAR</h1>
    <hr>
    <div class = "row m-4">
        <?php foreach($kamar as $k) : ?>
            <div class="col-4 mt-3">
                <div class="isi-list shadow">
                    <h3 class="text-center"><?= $k['jenis_kamar']; ?></h3>
                    <hr><br>
                    <div>
                        <img src="assets/img/<?= $k['gambar']; ?>" alt="<?= $k['jenis_kamar']; ?>"  class="img-thumbnail img-list">
                    </div>
                    <div class="clearfix"></div>
                    <div class="d-flex justify-content-center mt-2">
                        <a href="/list-kamar/<?= $k['id_kamar']; ?>">
                            <button class="btn"> Book Now!</button>
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?= $this->endSection('content'); ?>