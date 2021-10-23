<?= $this->extend('/base'); ?>
<?= $this->section('content'); ?>

<div class="main bg-login">
    <div class="row">
        <div class="col">
            <div class>
                <img src="assets/img/bg-login.png" alt="nyaman" width="100%">
            </div>
        </div>
        <div class="col">
            <h2 >Form Login</h2>
        <h4>Username</h4>
        <input type="text"name="username"id="username">
        <h4>Password</h4>
        <input type="text"name="Password"id="password"><br><br>
        <input type="submit"name="Submit">
        </div>
    </div>

<?= $this->endSection('content'); ?>