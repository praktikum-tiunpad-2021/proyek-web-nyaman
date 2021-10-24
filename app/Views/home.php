<?= $this->extend('/base'); ?>
<?= $this->section('content'); ?>

<div class="main">
    <div class="bg-home shadow row">
        <div class="col d-flex align-items-center">
            <a href="/">
            <img src="assets/img/logoputih1.png" alt="nyaman">
            </a>
        </div>
        <div class="col d-flex align-items-center">
            <h1 class="text">Lakukan reservasi hotel yang nyaman dengan mudah dan cepat melalui NYAMAN</h1>
        </div>
    </div>
    <div>
        <div class="isi-home-2 shadow-lg p-4">
            <h2 class="text-center">Profil Hotel</h2>
            <hr><br>
            <div>
                <img src="assets/img/hotel-profil.jpg" alt="nyaman" width= 400px class="img-thumbnail"> 
            </div>
            <div class="text-justify">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="isi-home-2 shadow-lg p-4">
            <h2 class="text-center">Fasilitas Hotel</h2>
            <hr><br>
            <div>
                <img src="assets/img/pegawai.jpg" alt="nyaman" width= 400px class="img-thumbnail"> 
            </div>
            <div class="text-justify">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>


<?= $this->endSection('content'); ?>
