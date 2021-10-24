<?= $this->extend('/base'); ?>
<?= $this->section('content'); ?>

<div class="main">
    <h1 class="text-center pt-4">LIST KAMAR</h1>
    <hr>
    <div class = "row mt-4 mx-auto">
        <div class="col">
            <div class="isi-list shadow-lg">
                <h3 class="text-center">Deluxe Room</h3>
                <hr><br>
                <div>
                    <img src="assets/img/deluxe-room.jpeg" alt="nyaman"  class="img-thumbnail img-list"> 
                </div>
                <div class="clearfix"></div>
                <div class="d-flex justify-content-center mt-2">
                    <a href="#">
                        <button class="btn"> Book Now!</button>
                    </a> 
                </div>    
            </div>
        </div>
        <div class="col">
            <div class="isi-list shadow-lg">
                <h3 class="text-center">Deluxe Premium Room</h3>
                <hr><br>
                <div>
                    <img src="assets/img/deluxe-premium-room.jpeg" alt="nyaman"  class="img-thumbnail img-list"> 
                </div>
                <div class="clearfix"></div>
                <div class="d-flex justify-content-center mt-2">
                    <a href="#">
                        <button class="btn"> Book Now!</button>
                    </a> 
                </div>
            </div>
        </div>
        <div class="col">
            <div class="isi-list shadow-lg">
                <h3 class="text-center">Grand Deluxe Room</h3>
                <hr><br>
                <div>
                    <img src="assets/img/grand-deluxe.jpeg" alt="nyaman"  class="img-thumbnail img-list"> 
                </div>
                <div class="clearfix"></div>
                <div class="d-flex justify-content-center mt-2">
                    <a href="#">
                        <button class="btn"> Book Now!</button>
                    </a> 
                </div>
            </div>
        </div>
    </div>
    <div class = "row  mt-4 mx-auto">
        <div class="col">
            <div class="isi-list shadow-lg">
                <h3 class="text-center">Executive Room</h3>
                <hr><br>
                <div>
                    <img src="assets/img/executive-room.jpeg" alt="nyaman"  class="img-thumbnail img-list"> 
                </div>
                <div class="clearfix"></div>
                <div class="d-flex justify-content-center mt-2">
                    <a href="#">
                        <button class="btn"> Book Now!</button>
                    </a> 
                </div>
            </div>
        </div>
        <div class="col">
            <div class="isi-list shadow-lg">
                <h3 class="text-center">Suite Room</h3>
                <hr><br>
                <div>
                    <img src="assets/img/suite-room.jpeg" alt="nyaman"  class="img-thumbnail img-list"> 
                </div>
                <div class="clearfix"></div>
                <div class="d-flex justify-content-center mt-2">
                    <a href="#">
                        <button class="btn"> Book Now!</button>
                    </a> 
                </div>
            </div>
        </div>
        <div class="col">
            <div class="isi-list shadow-lg">
                <h3 class="text-center">Presidential Suite Room</h3>
                <hr><br>
                <div>
                    <img src="assets/img/presidential-suite-room.jpeg" alt="nyaman"  class="img-thumbnail img-list"> 
                </div>
                <div class="clearfix"></div>
                <div class="d-flex justify-content-center mt-2">
                    <a href="#">
                        <button class="btn"> Book Now!</button>
                    </a> 
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('content'); ?>