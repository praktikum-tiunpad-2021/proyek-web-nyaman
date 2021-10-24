<?= $this->extend('/base'); ?>
<?= $this->section('content'); ?>

<div class="main">
    <div class="pt-2">
        <center><h1>LIST KAMAR</h1></center>
        <hr>
    </div>
    <div class = "kotak-3">
        
            <div class="isi-list shadow">
                <center><h3>Deluxe Room</h3> </center>
                <hr><br>
                <div>
                    <img src="assets/img/deluxe-room.jpeg" alt="nyaman"  class="img-thumbnail img-list"> 
                </div>
                <a href="#">
                    <button class="btn shadow"> Book Now!</button>
                </a>        
            </div>
        
        
            <div class="isi-list shadow">
                <center><h3>Deluxe Premium Room</h3> </center>
                <hr><br>
                <div>
                    <img src="assets/img/deluxe-premium-room.jpeg" alt="nyaman"  class="img-thumbnail img-list"> 
                </div>
                <a href="#">
                    <button class="btn"> Book Now!</button>
                </a>  

            </div>
        
        
            <div class="isi-list shadow">
                <center><h3>Grand Deluxe Room</h3> </center>
                <hr><br>
                <div>
                    <img src="assets/img/grand-deluxe.jpeg" alt="nyaman"  class="img-thumbnail img-list"> 
                </div>
                <a href="#">
                    <button class="btn"> Book Now!</button>
                </a> 
            </div>
        
    </div>
    <div class = "kotak-3">
        
            <div class="isi-list shadow">
                <center><h3>Executive Room</h3> </center>
                <hr><br>
                <div>
                    <img src="assets/img/executive-room.jpeg" alt="nyaman"  class="img-thumbnail img-list"> 
                </div>
                <a href="#">
                    <button class="btn"> Book Now!</button>
                </a> 
            </div>
        
        
            <div class="isi-list shadow">
                <center><h3>Suite Room</h3> </center>
                <hr><br>
                <div>
                    <img src="assets/img/suite-room.jpeg" alt="nyaman"  class="img-thumbnail img-list"> 
                </div>
                <a href="#">
                    <button class="btn"> Book Now!</button>
                </a> 
            </div>
        
        
            <div class="isi-list shadow">
                <center><h3>Presidential Suite Room</h3> </center>
                <hr><br>
                <div>
                    <img src="assets/img/presidential-suite-room.jpeg" alt="nyaman"  class="img-thumbnail img-list"> 
                </div>
                <a href="#">
                    <button class="btn"> Book Now!</button>
                </a> 
            </div>
        
    </div>
</div>

<?= $this->endSection('content'); ?>