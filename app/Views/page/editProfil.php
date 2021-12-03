<?= $this->extend('/base'); ?>
<?= $this->section('content'); ?>


<?php echo link_tag('assets/css/profil.css');?>

<div class="main">
    <div class="container-fluid mt-4">
      <div class="row">
      <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
          <div class="card card-profile shadow">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                    <img src="/assets/img/profil.jpg" class="rounded-circle">
                  </a>
                </div>
              </div>
            </div>
            <div class="card-body pt-0">
              <div class="row">
                <div class="col">
                  </br>
                </br>             
                </div>
              </div>
              <div class="text-center">
                <h3><?= $user['first_name']; ?><span class="font-weight-light"> </span> <?= $user['last_name']; ?></h3>
                <div class="h5 font-weight-300">
                  <?= $user['alamat']; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-8 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">My account</h3>
                </div>
              </div>
            </div>
            <div class="card-body">
              <form action="/Login/update/<?php echo session()->get('username') ?>" method="post">
                <h6 class="heading-small text-muted mb-4">User information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="username">Username</label>
                        <input type="text" name="username" class="form-control form-control-alternative" value="<?= $user['username']; ?>"disabled>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="email">Email address</label>
                        <input type="email" name="email" class="form-control form-control-alternative" value="<?= $user['email']; ?>"disabled>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="first_name">First name</label>
                        <input type="text" name="first_name" class="form-control form-control-alternative" value="<?= $user['first_name']; ?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="last_name">Last name</label>
                        <input type="text" name="last_name" class="form-control form-control-alternative" value="<?= $user['last_name']; ?>">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4">
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Contact information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group focused">
                        <label class="form-control-label" for="alamat">Alamat</label>
                        <input name="alamat" class="form-control form-control-alternative" value="<?= $user['alamat']; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group focused">
                        <label class="form-control-label" for="no_hp">No_HP</label>
                        <input type="text" name="no_hp" class="form-control form-control-alternative" value="<?= $user['no_hp']; ?>">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4">
                <button type="submit" class="btn btn-success">Simpan</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?= $this->endSection('content'); ?>