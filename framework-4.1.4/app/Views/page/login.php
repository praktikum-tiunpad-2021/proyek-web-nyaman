<?= $this->extend('/base'); ?>
<?= $this->section('content'); ?>

<html>
<head>
        <div class="container">
          <div class="row"style="background-color:black">
              <div class="col-sm-4"><img src="img/logoterang.png"></div>
                  <div class="col-sm-3"><p style="color:#FFD700;font-family:'Comfortaa';font-size:36px;text-align: center;">Beranda</p></div>
                  <div class="col-sm-3"><p style="color:#FFD700;font-family:'Comfortaa';font-size:36px;text-align: center;">Reservasi </p></div>
                  <div class="col-sm-3"><p style="color:#FFD700;font-family:'Comfortaa';font-size:36px;text-align: center;">Login</p></div>
</head>
<body>
    <div class="body">
      <div class="body.container">
          <h2>Form Login</h2>
          <h4>Username</h4>
          <input type="text"name="username"id="username">
          <h4>Password</h4>
          <input type="text"name="Password"id="password"><br><br>
          <input type="submit"name="Submit">
    </div>
    </div>
</body>

<?= $this->endSection('content'); ?>