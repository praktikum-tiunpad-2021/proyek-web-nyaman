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
            <div class="col-6">
                <label for="gambar_kamar" class="form-label" style="font-weight: bolder;">Gambar Kamar</label>
                <input type="file" class="form-control" name="gambar_kamar" required>
            </div>
            <div class="col-6">
                <label for="jenis_kamar" class="form-label" style="font-weight: bolder;">Nama Kamar</label>
                <input type="text" class="form-control <?= ($validation->hasError('jenis_kamar'))? 'is-invalid' : ''; ?>" name="jenis_kamar" value="<?= old('jenis_kamar'); ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('jenis_kamar'); ?>
                </div>
            </div>
            <div class="col-md-4">
                <label for="harga" class="form-label" style="font-weight: bolder;">Harga</label>
                <input type="number" class="form-control  <?= ($validation->hasError('harga'))? 'is-invalid' : ''; ?>" name="harga" value="<?= old('harga'); ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('harga'); ?>
                </div>
            </div>
            <div class="col-md-4">
                <label for="luas_kamar" class="form-label" style="font-weight: bolder;">Luas Kamar</label>
                <input type="number" class="form-control  <?= ($validation->hasError('luas_kamar'))? 'is-invalid' : ''; ?>" name="luas_kamar" value="<?= old('luas_kamar'); ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('luas_kamar'); ?>
                </div>
            </div>
            <div class="col-md-4">
                <label for="ranjang" class="form-label" style="font-weight: bolder;">Jenis Ranjang</label>
                <input type="text" class="form-control  <?= ($validation->hasError('ranjang'))? 'is-invalid' : ''; ?>" name="ranjang"value="<?= old('ranjang'); ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('ranjang'); ?>
                </div>
            </div>
            <div class="col-12">
                <label for="deskripsi" class="form-label" style="font-weight: bolder;">Deskripsi</label>
                <textarea name="deskripsi" class="form-control  <?= ($validation->hasError('deskripsi'))? 'is-invalid' : ''; ?>" rows="3" ><?= old('deskripsi'); ?></textarea>
                <div class="invalid-feedback">
                    <?= $validation->getError('deskripsi'); ?>
                </div>
            </div>
            <div class="">
                <label for="ac" class="form-label" style="font-weight: bolder;">ac</label>
                <select name="ac" class="form-select">
                <option selected>ada</option>
                <option>tidak ada</option>
                </select>
            </div>
            <div class="">
                <label for="tv" class="form-label" style="font-weight: bolder;">tv</label>
                <select name="tv" class="form-select">
                <option selected>ada</option>
                <option>tidak ada</option>
                </select>
            </div>
            <div class="">
                <label for="wifi" class="form-label" style="font-weight: bolder;">wifi</label>
                <select name="wifi" class="form-select">
                <option selected>ada</option>
                <option>tidak ada</option>
                </select>
            </div>
            <div class="">
                <label for="tmp_penyimpanan" class="form-label" style="font-weight: bolder;">tmp_penyimpanan</label>
                <select name="tmp_penyimpanan" class="form-select">
                <option selected>ada</option>
                <option>tidak ada</option>
                </select>
            </div>
            <div class="">
                <label for="mini_bar" class="form-label" style="font-weight: bolder;">mini_bar</label>
                <select name="mini_bar" class="form-select">
                <option selected>ada</option>
                <option>tidak ada</option>
                </select>
            </div>
            <div class="">
                <label for="kamar_mandi" class="form-label" style="font-weight: bolder;">kamar_mandi</label>
                <select name="kamar_mandi" class="form-select">
                <option selected>ada</option>
                <option>tidak ada</option>
                </select>
            </div>
            <div class="">
                <label for="hair_dryer" class="form-label" style="font-weight: bolder;">hair_dryer</label>
                <select name="hair_dryer" class="form-select">
                <option selected>ada</option>
                <option>tidak ada</option>
                </select>
            </div>
            <div class="">
                <label for="air" class="form-label" style="font-weight: bolder;">air</label>
                <select name="air" class="form-select">
                <option selected>ada</option>
                <option>tidak ada</option>
                </select>
            </div>
            <div class="">
                <label for="sarapan" class="form-label" style="font-weight: bolder;">sarapan</label>
                <select name="sarapan" class="form-select">
                <option selected>ada</option>
                <option>tidak ada</option>
                </select>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-success">Tambah Kamar</button><br><br>
            </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection('content'); ?>