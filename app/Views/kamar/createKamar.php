<?= $this->extend('/base'); ?>
<?= $this->section('content'); ?>

<div class="main">
<h1 class="text-center pt-5">Tambah Data Kamar</h1>
    <hr>
    <br>
    <div class="row">
        <div class="col-11 mx-auto">
        <form class="row g-3" action=/ListKamar/save method="post">
        <?= csrf_field(); ?>
            <div class="col-12">
                <label for="jenis_kamar" class="form-label">Nama Kamar</label>
                <input type="text" class="form-control" name="jenis_kamar">
            </div>
            <div class="col-md-4">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" min="0" class="form-control" name="harga">
            </div>
            <div class="col-md-4">
                <label for="luas_kamar" class="form-label">Luas Kamar</label>
                <input type="number" min="0" class="form-control" name="luas_kamar">
            </div>
            <div class="col-md-4">
                <label for="ranjang" class="form-label">Jenis Ranjang</label>
                <input type="text" class="form-control" name="ranjang">
            </div>
            <div class="col-12">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea name="deskripsi" class="form-control" rows="3"></textarea>
            </div>
            <div class="">
                <label for="ac" class="form-label">ac</label>
                <select name="ac" class="form-select">
                <option selected>ada</option>
                <option>tidak ada</option>
                </select>
            </div>
            <div class="">
                <label for="tv" class="form-label">tv</label>
                <select name="tv" class="form-select">
                <option selected>ada</option>
                <option>tidak ada</option>
                </select>
            </div>
            <div class="">
                <label for="wifi" class="form-label">wifi</label>
                <select name="wifi" class="form-select">
                <option selected>ada</option>
                <option>tidak ada</option>
                </select>
            </div>
            <div class="">
                <label for="tmp_penyimpanan" class="form-label">tmp_penyimpanan</label>
                <select name="tmp_penyimpanan" class="form-select">
                <option selected>ada</option>
                <option>tidak ada</option>
                </select>
            </div>
            <div class="">
                <label for="mini_bar" class="form-label">mini_bar</label>
                <select name="mini_bar" class="form-select">
                <option selected>ada</option>
                <option>tidak ada</option>
                </select>
            </div>
            <div class="">
                <label for="kamar_mandi" class="form-label">kamar_mandi</label>
                <select name="kamar_mandi" class="form-select">
                <option selected>ada</option>
                <option>tidak ada</option>
                </select>
            </div>
            <div class="">
                <label for="hair_dryer" class="form-label">hair_dryer</label>
                <select name="hair_dryer" class="form-select">
                <option selected>ada</option>
                <option>tidak ada</option>
                </select>
            </div>
            <div class="">
                <label for="air" class="form-label">air</label>
                <select name="air" class="form-select">
                <option selected>ada</option>
                <option>tidak ada</option>
                </select>
            </div>
            <div class="">
                <label for="sarapan" class="form-label">sarapan</label>
                <select name="sarapan" class="form-select">
                <option selected>ada</option>
                <option>tidak ada</option>
                </select>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Tambah Kamar</button>
            </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection('content'); ?>