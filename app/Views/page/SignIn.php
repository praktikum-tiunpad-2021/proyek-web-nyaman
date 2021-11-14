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
            <?php if(!empty(session()->getFlashdata('gagal'))){ ?>
            <div class="alert alert-warning">
                <?php echo session()->getFlashdata('gagal'); ?>
            </div>
            <?php } ?>
                <?php 
                echo form_open('Login/cek_login');
                ?>
                    <h1 class="text-center">Sign In</h1><br>
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control" required><br>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required><br>
                    <input type="checkbox" onclick="myFunction()"> Show password
                    <label for=""></label><br><br>
                    <script>
                        function myFunction() {
                            var x = document.getElementById("password");
                            if (x.type === "password") {
                                x.type = "text";
                            } else {
                                x.type = "password";
                            }
                        }
                    </script>
                   <label for="remember"><input type="checkbox" name="remember" value="false"/> Remember Me</label><br><br>
                    <p style="font-size: 13px;">By signing in, you agree with our <u><a href="T&C" style="color: #fff;">Terms & Conditions</a></u> and <u><a href="PP" style="color: #fff;">Privacy Policy</a></u>.</p>
                    <div class="d-flex justify-content-center mt-2">
                    <input type="submit" name="submit" id="submit" class="col-4 btn-login alert" value="Sign In!">
                    </div>
                <?php echo form_close(); ?>
                    <center><p style="font-size: 13px;">Don't have an account? <u><a href="/Sign-Up">Sign Up</a></u> here</p></center>
                
            </div>
        </div>    
    </div>
</div>

<?= $this->endSection('content'); ?>