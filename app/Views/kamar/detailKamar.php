<?= $this->extend('/base'); ?>
<?= $this->section('content'); ?>
<script>
    function TDate() {
    var UserDate = document.getElementById("checkin").value;
    var ToDate = new Date();
    var UserDate2 = document.getElementById("checkout").value;
    var x= document.getElementById('jumlah').value;
    if (x==0){
        alert("Mohon Maaf Kamar Sudah Habis");
          return false;
    }
    if (new Date(UserDate).getTime() <= ToDate.getTime()) {
        alert("Mohon Masukkan Waktu Checkin dengan benar");
          return false;
    } else if (new Date(UserDate2).getTime() <= new Date(UserDate).getTime()) {
          alert("Tanggal Checkout harus lebih besar dari Checkin");
          return false;
     }else 
      
     document.getElementById('jumlah').value = --x;
    return true;
}
function Diff() {
    var UserDate = document.getElementById("checkin").value;
    var UserDate2 = document.getElementById("checkout").value;
    var ToDate = new Date();

    if (new Date(UserDate2).getTime() <= new Date(UserDate).getTime()) {
          alert("Tanggal Checkout harus lebih besar dari Checkin");
          return false;
     }
    return true;
}
</script>
<div class="main mx-4">
    <nav class="pt-4">
        <ul class="breadcrumb">
            <li><a href="/list-kamar">List Kamar</a></li>
            <li aria-current="page"><?= $kamar['jenis_kamar']; ?></li>
        </ul>
    </nav>
    <?php if(session()->get('role') == 'admin'){?>
    <div class="d-flex justify-content-end mx-3">
        <a href="/list-kamar/edit/<?= $kamar['id_kamar']; ?>" class="btn btn-success mx-2">Edit Detail</a>
        <form action="/list-kamar/<?= $kamar['id_kamar']; ?>" method="post">
            <?= csrf_field(); ?>
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?');">Delete Kamar</button>
        </form>
    </div>
    <?php } ?>
    <div class="row ">
        <div class="col-4">
            <img src="/assets/img/<?= $kamar['gambar'];?>" alt="gambar" class="img-thumbnail"> 
        </div>
        <div class="col-8">
        <h2><?= $kamar['jenis_kamar']; ?></h2>
        <p class="mx-0 mt-2">RP <?= $kamar['harga']; ?></p>
        <br>
        <p class="mx-0 text-justify"><?= $detail['deskripsi']; ?></p>
        <br>
        <?php if(session()->get('role') != 'admin'){?>
            <form action="/ListKamar/book/<?= $kamar['id_kamar']; ?>"method="post"onsubmit="return TDate()" >
                <table>
                    <tr>
                        <td class="col-6"><label for="checkin">Check-in</label></td>
                        <td><input type="date" name="checkin" id="checkin" class="form-control"required></td>
                    </tr>
                    <tr>
                        <td><label for="checkout">Check-out</label></td>
                        <td><input type="date" name="checkout" id="checkout" class="form-control" required></td>
                    </tr>
                </table>
                <br>
                <input type="submit" value="Book" class="btn btn-success mx-2">
            </form>
        <?php } ?>
        </div>
    </div>
    <hr class="my-3">
    <div class="row">
        <div class="col-7">
            <h3>Fasilitas</h3>
            <table class="table table-bordered table-striped mt-2" id="detail">
                <tr>
                    <td class="col-7">Luas</td>
                    <td><?= $detail['luas_kamar']; ?> m²</td>
                </tr>
                <tr>
                    <td>Ukuran Ranjang</td>
                    <td><?= $detail['ranjang']; ?> </td>
                </tr>
                <tr>
                    <td>Pendingin ruangan dengan pengaturan pribadi</td>
                    <td><?= $detail['ac']; ?> </td>
                </tr>
                <tr>
                    <td>Televisi kabel</td>
                    <td><?= $detail['tv']; ?> </td>
                </tr>
                <tr>
                    <td>Wifi 24 jam</td>
                    <td><?= $detail['wifi']; ?> </td>
                </tr>
                <tr>
                    <td>Kotak penyimpanan barang pribadi</td>
                    <td><?= $detail['tmp_penyimpanan']; ?> </td>
                </tr>
                <tr>
                    <td>Mini Bar</td>
                    <td><?= $detail['mini_bar']; ?> </td>
                </tr>
                <tr>
                    <td>Pengering rambut</td>
                    <td><?= $detail['hair_dryer']; ?> </td>
                </tr>
                <tr>
                    <td>Air hangat & dingin</td>
                    <td><?= $detail['air']; ?> </td>
                </tr>
                <tr>
                    <td>Kamar Mandi</td>
                    <td><?= $detail['kamar_mandi']; ?> </td>
                </tr>
                <tr>
                    <td>Sarapan</td>
                    <td><?= $detail['sarapan']; ?> </td>
                </tr>
                <tr>
                <?php
                $i = 0;
               foreach($no as $k) : ?>
                    <td>List Kamar</td>
                    <td><?= $k['no_kamar']; ?> </td>
                    <?php
                    $i++;
                    ?>
                </tr>
                 <?php endforeach; ?>
                 <td>Jumlah Kamar</td>
                    <td><input type="text" name="jumlah" id="jumlah" style="border: none;" value="<?php echo $i ?>"readonly</td>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection('content'); ?>