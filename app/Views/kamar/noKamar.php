<?= $this->extend('/base'); ?>
<?= $this->section('content'); ?>

<div class="main">
    <h1 class="text-center pt-5">NO KAMAR</h1>
    <hr>
    <div class="my-4 px-5">
    <?php if(!empty(session()->getFlashdata('pesan'))){ ?>
        <div class="alert alert-success my-3">
            <?php echo session()->getFlashdata('pesan'); ?>
        </div>
    <?php } ?>
    <div class ="addKamar">
        <h3>Tambah Nomor Kamar</h3>
        <hr class="mb-2 mt-1">
        <form action="ListKamar/tambahNoKamar" method="post">
            <div class="row">
                <div class="col">
                   <label for="id_kamar" class="form-label">Jenis Kamar</label>
                    <select name="id_kamar" id="id_kamar" class="form-select">
                        <?php foreach($kamar as $k) : ?>
                            <option value="<?= $k['id_kamar']; ?>"><?= $k['jenis_kamar']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col">
                    <label for="id_kamar" class="form-label">Nomor Kamar</label>
                    <input type="number" name="no_kamar" class="form-control">
                </div>
                <div class="col">
                    <button type="submit">Tambah Kamar</button>
                </div>
            </div>
            
        </form>
    </div>
    <div>
        <table class="table table-bordered table-striped mt-2" id="detail">
                <thead>
                    <tr>
                        <td>No Kamar</td>
                        <td>id Kamar</td>
                        <td>aksi</td>
                    </tr>
                </thead>   
                <tbody>
                    <?php foreach($kamarno as $no) : ?>
                    <tr>
                        <td><?= $no['no_kamar']; ?></td>
                        <td><?= $no['jenis_kamar']; ?></td>
                        <td></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody> 
        </table>
    </div>  
</div>
<?= $this->endsection('content'); ?>