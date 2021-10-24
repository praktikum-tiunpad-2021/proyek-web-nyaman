<?= $this->extend('/base'); ?>
<?= $this->section('content'); ?>

<div class="main bg-login">
    <div class="row">
        <div class="col">
            <div class="m-2">
                <div class="logo-login"><img src="assets/img/logoputih.png" alt="" width="300px"></div>
                <div class="clearfix"></div>
                <div><p style="color:#fff; text-align:center">Lakukan reservasi hotel yang nyaman <br> dengan mudah dan cepat melalui NYAMAN</p></div>
            </div>
            
        </div>
        <div class="col">
            <div class="kotak-login">
                <form method="post">
                    <center><h1>Login</h1></center> <br>
                    <label for="username">Username</label>
                    <input type="text"name="username"id="username" class="form-control" require><br>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" require> <br>
                    <center><input type="submit" name="Submit" class="col-4 btn-login"></center>
                    <br>
                    <center><p>dont have account? <a href="#">register here</a></p></center>
                </form>
            </div>
        </div>    
    </div>
</div>

<?= $this->endSection('content'); ?>