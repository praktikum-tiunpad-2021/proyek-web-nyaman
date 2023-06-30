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
            <div class="kotak-signup">
                <form action="Login/register" method="post">
                    <h1 class="text-center">Create Account</h1><br>
                    <div class="form">
                        <label for="first_name">First Name
                        <input type="text"name="first_name"id="first_name" class="form-control <?= ($validation->hasError('first_name'))? 'is-invalid' : ''; ?>" value="<?= old('first_name'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('first_name'); ?>
                        </div>
                        </label>
                        <label for="last_name">Last Name
                        <input type="text"name="last_name"id="last_name" class="form-control <?= ($validation->hasError('last_name'))? 'is-invalid' : ''; ?>" value="<?= old('last_name'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('last_name'); ?>
                        </div>
                        </label>
                    </div><br>

                    <label for="email">Email Address</label>
                    <input type="text" name="email" class="form-control <?= ($validation->hasError('email'))? 'is-invalid' : ''; ?>" value="<?= old('email'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('email'); ?>
                    </div>
                    <br>
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control <?= ($validation->hasError('username'))? 'is-invalid' : ''; ?>" value="<?= old('username'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('username'); ?>
                    </div>
                    <br>
                    <div class="form">
                        <label for="password">Password
                            <input type="password"name="password"id="password" class="form-control <?= ($validation->hasError('password'))? 'is-invalid' : ''; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('password'); ?>
                            </div>
                        </label>
                        <label for="confirm">Confirm Password
                            <input type="password"name="confirm"id="confirm" class="form-control <?= ($validation->hasError('confirm'))? 'is-invalid' : ''; ?>">
                            <div class="invalid-feedback">
                            <?= $validation->getError('confirm'); ?>
                        </div>
                        </label>
                    </div><br>
                    
                    <!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
                    <script type="text/javascript">
                        $(function () {
                            $("#submit").click(function () {
                                var password = $("#password").val();
                                var confirmPassword = $("#confirm").val();
                                if (password != confirmPassword) {
                                    alert("Password doesn't match!");
                                    return false;
                                }
                                return true;
                            });
                        });
                    </script> -->

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

                    <label for="no_hp">Phone Number</label>
                    <input type="text" name="no_hp" id="no_hp" class="form-control <?= ($validation->hasError('no_hp'))? 'is-invalid' : ''; ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('no_hp'); ?>
                    </div>
                    <br>

                    <p style="font-size: 13px;">By creating an account, you agree with our <u><a href="T&C" style="color: #fff;">Terms & Conditions</a></u> and <u><a href="PP" style="color: #fff;">Privacy Policy</a></u>.</p>

                    <div class="d-flex justify-content-center mt-2">
                        <button type="submit" id= "submit" class="col-4 btn-login alert">Sign Up!</button>
                    </div>    
                </form>    
                    <br>
                    <center><p style="font-size: 13px;">Already have an account? <u><a href="/Sign-In">Sign In</a></u> here</p></center>
            </div>
        </div>    
    </div>
</div>

<?= $this->endSection('content'); ?>