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
                <form method="post">
                    <h1 class="text-center">Create Account</h1><br>
                    <div class="form">
                        <label for="fname">First Name
                            <input type="text"name="fname"id="fname" class="form-control" required></label>
                        <label for="lname">Last Name
                            <input type="text"name="lname"id="lname" class="form-control" required></label>
                    </div><br>

                    <label for="email">Email Address</label>
                    <input type="email" name="email" id="email" class="form-control" required><br>

                    <div class="form">
                        <label for="password">Password
                            <input type="password"name="password"id="password" class="form-control" required></label>
                        <label for="confirm">Confirm Password
                            <input type="password"name="confirm"id="confirm" class="form-control" required></label>
                    </div><br>
                    
                    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
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
                    </script>

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

                    <label for="phone">Phone Number</label>
                    <input type="text" name="phone" id="phone" class="form-control" required><br>

                    <p style="font-size: 13px;">By creating an account, you agree with our <u><a href="T&C" style="color: #fff;">Terms & Conditions</a></u> and <u><a href="PP" style="color: #fff;">Privacy Policy</a></u>.</p>

                    <div class="d-flex justify-content-center mt-2">
                        <input type="submit" name="submit" id="submit" class="col-4 btn-login alert" value="Sign Up!">
                    </div>    
                    
                    <br>
                    <center><p style="font-size: 13px;">Already have an account? <u><a href="/Sign-In">Sign In</a></u> here</p></center>
                </form>
            </div>
        </div>    
    </div>
</div>

<?= $this->endSection('content'); ?>