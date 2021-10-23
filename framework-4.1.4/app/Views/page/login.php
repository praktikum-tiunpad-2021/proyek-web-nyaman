<?= $this->extend('/base'); ?>
<?= $this->section('content'); ?>

<div class="main bg-login">
    <div class>
        <img src="assets/img/bg-login.png" alt="nyaman" width="50%">
    </div>
    <div class="pt-2">
        <h2 >Form Login</h2>
        <h4>Username</h4>
        <input type="text"name="username"id="username">
        <h4>Password</h4>
        <input type="text"name="Password"id="password"><br><br>
        <input type="submit"name="Submit">
    </div>
</div>
    already have account?<span><a href="">login</a></span>

<?= $this->endSection('content'); ?>