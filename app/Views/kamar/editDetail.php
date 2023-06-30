<?= $this->extend('/base'); ?>
<?= $this->section('content'); ?>

<div class="main mx-4">
    <nav class="pt-4">
        <ul class="breadcrumb">
            <li><a href="/list-kamar">List Kamar</a></li>
            <li><a href="/list-kamar/<?= $kamar['id_kamar']; ?>"><?= $kamar['jenis_kamar']; ?></a></li>
            <li aria-current="page">Edit Kamar</li>
        </ul>
    </nav>
    <form action="/ListKamar/update/<?= $kamar['id_kamar']; ?>" method="post">
    <div class="row ">
        <div class="col-4">
            <img src="/assets/img/<?= $kamar['gambar'];?>" alt="gambar" class="img-thumbnail"> 
        </div>
        <div class="col-8">
            <div>           
                <input type="text" name="jenis_kamar" value="<?= $kamar['jenis_kamar']; ?>" class="form-control <?= ($validation->hasError('jenis_kamar'))? 'is-invalid' : ''; ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('jenis_kamar'); ?>
                </div>
            </div> 
            <p class="mx-0 mt-2">
                <div class="input-group">
                    <div class="input-group-text">RP</div>
                    <input type="text" name="harga" value="<?= $kamar['harga']; ?>" class="form-control <?= ($validation->hasError('harga'))? 'is-invalid' : ''; ?>">
                    <div class="input-group-text">,00</div>
                    <div class="invalid-feedback">
                        <?= $validation->getError('harga'); ?>
                    </div>
                </div>
                
            </p>
            <br>
            <textarea name="deskripsi" class="form-control <?= ($validation->hasError('deskripsi'))? 'is-invalid' : ''; ?>" rows="3"><?= $detail['deskripsi']; ?></textarea>
            <div class="invalid-feedback">
                <?= $validation->getError('deskripsi'); ?>
            </div>
            <br>
        </div>
    </div>
    <hr class="my-3">
    <div class="row">
        <div class="col-8">
            <h3>Fasilitas</h3>
            <table class="table table-striped mt-2" id="detail">
                <tr>
                    <td class="col-5">Luas</td>
                    <td>
                        <div class="input-group">
                            <input type="text" name="luas_kamar" value="<?= $detail['luas_kamar']; ?>" class="form-control <?= ($validation->hasError('luas_kamar'))? 'is-invalid' : ''; ?>">
                            <div class="input-group-text">m²</div>
                            <div class="invalid-feedback">
                                <?= $validation->getError('luas_kamar'); ?>
                            </div>
                        </div>
                        
                    </td>
                </tr>
                <tr>
                    <td>Ukuran Ranjang</td>
                    <td>
                        <input type="text" name="ranjang" value="<?= $detail['ranjang']; ?>" class="form-control <?= ($validation->hasError('ranjang'))? 'is-invalid' : ''; ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('ranjang'); ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Pendingin ruangan dengan pengaturan pribadi</td>
                    <td>
                        <select name="ac" class="form-select">
                        <option <?= ($detail['ac'] == "ada") ? "selected" : ""?>>ada</option>
                        <option <?= ($detail['ac'] == "tidak ada") ? "selected" : ""?>>tidak ada</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Televisi kabel</td>
                    <td>
                        <select name="tv" class="form-select">
                        <option <?= ($detail['tv'] == "ada") ? "selected" : ""?>>ada</option>
                        <option <?= ($detail['tv'] == "tidak ada") ? "selected" : ""?>>tidak ada</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Wifi 24 jam</td>
                    <td>
                        <select name="wifi" class="form-select">
                        <option <?= ($detail['wifi'] == "ada") ? "selected" : ""?>>ada</option>
                        <option <?= ($detail['wifi'] == "tidak ada") ? "selected" : ""?>>tidak ada</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Kotak penyimpanan barang pribadi</td>
                    <td>
                        <select name="tmp_penyimpanan" class="form-select">
                        <option <?= ($detail['tmp_penyimpanan'] == "ada") ? "selected" : ""?>>ada</option>
                        <option <?= ($detail['tmp_penyimpanan'] == "tidak ada") ? "selected" : ""?>>tidak ada</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Mini Bar</td>
                    <td>
                        <select name="mini_bar" class="form-select">
                        <option <?= ($detail['mini_bar'] == "ada") ? "selected" : ""?>>ada</option>
                        <option <?= ($detail['mini_bar'] == "tidak ada") ? "selected" : ""?>>tidak ada</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Pengering rambut</td>
                    <td>
                        <select name="hair_dryer" class="form-select">
                        <option <?= ($detail['hair_dryer'] == "ada") ? "selected" : ""?>>ada</option>
                        <option <?= ($detail['hair_dryer'] == "tidak ada") ? "selected" : ""?>>tidak ada</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Air hangat & dingin</td>
                    <td>
                        <select name="air" class="form-select">
                        <option <?= ($detail['air'] == "ada") ? "selected" : ""?>>ada</option>
                        <option <?= ($detail['air'] == "tidak ada") ? "selected" : ""?>>tidak ada</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Kamar Mandi</td>
                    <td>
                        <select name="kamar_mandi" class="form-select">
                        <option <?= ($detail['kamar_mandi'] == "ada") ? "selected" : ""?>>ada</option>
                        <option <?= ($detail['kamar_mandi'] == "tidak ada") ? "selected" : ""?>>tidak ada</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Sarapan</td>
                    <td>
                        <select name="sarapan" class="form-select">
                        <option <?= ($detail['sarapan'] == "ada") ? "selected" : ""?>>ada</option>
                        <option <?= ($detail['sarapan'] == "tidak ada") ? "selected" : ""?>>tidak ada</option>
                        </select>
                    </td>
                </tr>
            </table>
            <button type="submit" class="btn btn-success">Update Kamar</button><br><br>
        </div>
    </div>
    </form>
</div>

<?= $this->endSection('content'); ?>