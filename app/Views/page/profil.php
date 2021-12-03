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
              <form>
                <h6 class="heading-small text-muted mb-4">User information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-username">Username</label>
                        <input type="text" id="input-username" class="form-control form-control-alternative" value="<?= $user['username']; ?>"disabled>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Email address</label>
                        <input type="email" id="input-email" class="form-control form-control-alternative" value="<?= $user['email']; ?>"disabled>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-first-name">First name</label>
                        <input type="text" id="input-first-name" class="form-control form-control-alternative" value=" <?= $user['first_name']; ?>"disabled>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-last-name">Last name</label>
                        <input type="text" id="input-last-name" class="form-control form-control-alternative" value="<?= $user['last_name']; ?>"disabled>
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
                        <label class="form-control-label" for="input-address">Alamat</label>
                        <input id="input-address" class="form-control form-control-alternative" value="<?= $user['alamat']; ?>"disabled>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-city">No HP</label>
                        <input type="text" id="input-city" class="form-control form-control-alternative" value="<?= $user['no_hp']; ?>"disabled>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4">
                  <a href="/editProfil" class="btn btn-success">Edit Profil</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection('content'); ?>