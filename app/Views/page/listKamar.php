<?= $this->extend('/base'); ?>
<?= $this->section('content'); ?>

<div class="main">
    <h1 class="text-center pt-5">LIST KAMAR</h1>
    <hr>
    <br>
    <?php if(session()->get('role') == 'admin'){?>
    <div class="d-flex justify-content-end mx-3">
        <a href="#" class="btn btn-success">Tambah Kamar</a>
    </div>
    <?php } ?>
    <div class = "row m-4">
        <?php foreach($kamar as $k) : ?>
            <div class="col-4 mt-3">
                <div class="isi-list shadow-lg">
                    <h3 class="text-center"><?= $k['jenis_kamar']; ?></h3>
                    <hr><br>
                    <div>
                        <img src="assets/img/<?= $k['gambar']; ?>" alt="<?= $k['jenis_kamar']; ?>"  class="img-thumbnail img-list">
                    </div>
                    <div class="clearfix"></div>
                    <div class="d-flex justify-content-center mt-2">
                        <a href="/list-kamar/<?= $k['id_kamar']; ?>">
                            <button class="btn btn-1"> Book Now!</button>
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?= $this->endSection('content'); ?>